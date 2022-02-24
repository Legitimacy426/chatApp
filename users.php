<?php
session_start();
include_once'php/connection.php';
if(empty($_SESSION['unique_id'])){
    header('location:register.php');
}

$sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");
if(mysqli_num_rows($sql)>0){
  $result = mysqli_fetch_all($sql,MYSQLI_ASSOC);
foreach($result as $row ){
 
}


}

?>
<?php include_once 'php/header.php' ?>
<body>
    <div class="users-container">
    <div class="top">
        <h4 class="msg-txt"><?php echo $row['username'] ?></h4>
        <span><i class="fa-solid fa-gear"></i></span>
        </div>
        <div class="search">
            <input type="text" name="" id=" " placeholder="Search chat"><button><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        <h5 class="activities">Activities</h5>
        <ul class="circles" id="reels">
 <!-- ==========================Reels list here =========================-->
           
        </ul>
        <h5 class="chats">Chats</h5>
      <ul class="users" id="users">
     
       <!-- ==========================users list here =========================-->
      </ul>
    </div>
    <script src="js/user.js"></script>
    <script src="js/reels.js"></script>
</body>
</html>