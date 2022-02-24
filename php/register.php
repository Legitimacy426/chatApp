<?php
session_start();
include_once 'connection.php';
$username = $_POST['username'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$profile = $_FILES['profile']['name'];

$tmp = $_FILES['profile']['tmp_name'];
$profileNew = time().$profile;



if((!empty($username))&&(!empty($email))&&(!empty($pass1))&&(!empty($pass2))&&(!empty($profile))){
    if($pass1 === $pass2){
        if(strlen($pass1) < 8){
            echo 'Password must have a minimum of 8 characters ';
        }else{
            $sql = mysqli_query($conn,"SELECT * FROM users WHERE username ='{$username}'");
            if(mysqli_fetch_assoc($sql) > 0 ){
                echo $username . '- Already Exists!';
            }else{
                $random = rand(time(),1000000);
                $sql2 = mysqli_query($conn,"INSERT INTO users (unique_id,username,email,password,profile)
                                    VALUES ('$random','$username','$email','$pass1','$profileNew')
                              
                 ");
                 move_uploaded_file($tmp,"images/". $profileNew);
                 $sql3 = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");
                 $result = mysqli_fetch_all($sql3,MYSQLI_ASSOC);
                 foreach($result as $row){
                     $_SESSION['unique_id']=$row['unique_id'];
                   
                 }
                  echo"success";
            }
        }
    }else{
        echo 'Passwords Mismatched !';
    }
}else{
    echo 'All fields are required !';
}



?>