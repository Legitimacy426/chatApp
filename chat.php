<?php
session_start();
include_once'php/connection.php';
if(empty($_SESSION['unique_id'])){
    header('location:login.php');
}
$reciepientId = $_GET['reciepientId'];

$sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = '{$reciepientId}'");
if(mysqli_num_rows($sql)>0){
  $result = mysqli_fetch_all($sql,MYSQLI_ASSOC);
foreach($result as $row ){
 
}

}

?>

<?php include_once 'php/header.php' ?>
<body>
    <div class="chat-container">
        <div class="chat-header">
            <div class="back-icon item"><a href="users.php"><i class="fa fa-angle-left" aria-hidden="true"></i></a></div>
            <div class="image item">
                <img src="php/images/<?php echo $row['profile']?>" alt="">
            </div>
            <div class="user-name item">
                <h4><?php echo $row['username']?></h4>
                <span class="status online"><?php echo $row['status']?></span>
            </div>
            <div class="calls item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <i class="fa fa-video-camera" aria-hidden="true"></i>
            </div>
            
            
        </div>
        <div class="chat-main" id="chat-main">
            <div class="outgoing">
                <p>outgoing</p>
            </div>
            <div class="outgoing">
                <p>hey  </p>
            </div>
            <div class="incoming">
                <p>hey  too hey how are doing hey how a too hey how are doing hey how are </p>
            </div>
            <div class="incoming">
                <p>incoming</p>
            </div>
            <div class="outgoing">
                <p>hey how are too hey how are doing hey how a doing hey how are doing </p>
            </div>
            <div class="incoming">
                <p>hey too </p>
            </div>
            <div class="outgoing">
                <p>hey how are doing hey how are doing </p>
            </div>
            
           
        </div>
        <!-- <div class="chat-area"> -->
            <form action="" class="chat-area" id="chat-area">
            <input type="number" name="foreign_id" value="<?php echo $reciepientId ?>"  id="foreign_id" hidden>
            <input name="home_id" type="number" value="<?php echo $_SESSION['unique_id'] ?>"  id="" hidden>
            <input class="messege" id='messege' type="text" name="messege" placeholder="Write message...">
            <button id="submit" type="submit"><i class="fa fa-telegram" aria-hidden="true"></i></button>   
            </form>
          
        <!-- </div> -->
    </div>
    <script src="js/chats.js"></script>
    <script src="js/showChats.js"></script>
</body>
</html>