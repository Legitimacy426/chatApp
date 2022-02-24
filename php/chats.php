<?php 
session_start();
$uniqueId = $_SESSION['unique_id'];
$conn = mysqli_connect("localhost","root","","chat");
$home_id = $_POST['home_id'];
$foreign_id = $_POST['foreign_id'];
$messege = $_POST['messege'];
$msg_id = ($home_id+$foreign_id);

if(!empty($uniqueId)&&!empty($home_id)&&!empty($foreign_id)&&!empty($messege)){
    $sql = mysqli_query($conn,"INSERT INTO messeges (msg,foreign_id,home_id,msg_id)
                       VALUES('$messege','$foreign_id','$home_id','$msg_id')
    ");
    if($sql){
        echo 'sent' ;
    }else{
        echo 'an error occured';
    }
}else{
    echo "Messege field is required";
}



?> 