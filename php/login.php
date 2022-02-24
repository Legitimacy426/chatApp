<?php
session_start();
include_once 'connection.php';

$username = $_POST['username'];
$pass1 = $_POST['pass1'];

if((!empty($username))&&(!empty($pass1))){
    $sql = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' AND password = '$pass1' ");
    if(mysqli_fetch_assoc($sql)>0){
        $sql3 = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");
        $result = mysqli_fetch_all($sql3,MYSQLI_ASSOC);
        foreach($result as $row){
            $_SESSION['unique_id']=$row['unique_id'];
           
        }
    mysqli_query($conn,"UPDATE users SET status = 'online' WHERE username = '$username'");
        echo"success";
    }else{
        echo 'Email and Password Missmatched'; 
    }
  
}else{
    echo 'All fields are required !';
}

?>