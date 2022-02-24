<?php 
session_start();
$uniqueId = $_SESSION['unique_id'];
$conn = mysqli_connect("localhost","root","","chat");

$sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_id != '$uniqueId' AND status = 'online'");
$output = "";
if(mysqli_num_rows($sql)== 1){

}elseif(mysqli_num_rows($sql)>=1){
                 $result = mysqli_fetch_all($sql,MYSQLI_ASSOC);
               $output.= include("reelsData.php");
   
}else{
   $output.="something went wrong";
  
}


?>