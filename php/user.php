<?php 
session_start();
$uniqueId = $_SESSION['unique_id'];
$conn = mysqli_connect("localhost","root","","chat");

$sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_id != '$uniqueId' ");
$output = "";
if(mysqli_num_rows($sql)== 1){
   $output.= 'No users availbe ';
}elseif(mysqli_num_rows($sql)>=1){
                 $result = mysqli_fetch_all($sql,MYSQLI_ASSOC);
                 $sq4 = mysqli_query($conn,"SELECT * FROM messeges WHERE home_id = '$uniqueId' OR foreign_id ='$uniqueId'");
                 if(mysqli_num_rows($sq4)>0){
                   $output.= include("usersData.php"); 
                 }else{
                    $output.="<center style = 'color:black' >No chats available</center>";
                 } 
                 echo $output;
               
   
}else{
   $output.="something went wrong";
  
}


?>