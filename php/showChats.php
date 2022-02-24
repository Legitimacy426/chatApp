<?php 
session_start();
$home_id = $_SESSION['unique_id'];
$foreign_id = $_GET['foreign_id'];
$conn = mysqli_connect("localhost","root","","chat");
$mgs_id = $home_id+$foreign_id;

$sql = mysqli_query($conn,"SELECT * FROM messeges WHERE msg_id = '$mgs_id' ");
// $sql = mysqli_query($conn,"SELECT * FROM messeges WHERE foreign_id = '$foreign_id'");
$output = "";
if(mysqli_num_rows($sql)== 0){
   echo '<center style = "margin-top:3rem">No messages </center>';

}else{
               $result = mysqli_fetch_all($sql,MYSQLI_ASSOC);
               // $output.= include("chatsData.php");
               foreach($result as $row){
                  if($row['home_id'] === $home_id){ //sender
                     $output.='<div class="outgoing">
                              <p> '. $row['msg'] .'</p>
                                 </div>';
                  }else{
                     $output.='<div class="incoming">
                              <p> '. $row['msg'] .'</p>
                                 </div>';
                  }
                 
               }
   
}
 echo $output;



?>