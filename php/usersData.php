
<?php foreach($result as $row): ?>
    <?php  $home_id = $_SESSION['unique_id'];
   
$sq2 = mysqli_query($conn,"SELECT * FROM messeges WHERE (home_id = '{$row['unique_id']}' OR foreign_id = '{$row['unique_id']}')");
if(mysqli_num_rows($sq2)>0){
  $resultMessage = mysqli_fetch_all($sq2,MYSQLI_ASSOC);
foreach($resultMessage as $rowMessage ){
 
}
$messege = $rowMessage['msg'];
}else{
    
$messege = 'No messages';
}
(strlen($messege)>20)? $msg = substr($messege,0,20).'...':$msg = $messege;
($home_id == $row['unique_id'])? $text = '' : $text = 'You: ';
?>
   
    <li>
              <a href="chat.php?reciepientId=<?php echo $row['unique_id']  ?>">
              <div class="image">
                  <img src="php/images/<?php echo $row['profile']  ?>" alt="No image">
                  <div class="status <?php echo $row['status'] ?>"></div>
              </div>
              <div class="user-details">
                  <h5 class="username"><?php echo $row['username'] ?></h5>
                <span class="messege"><?php echo $text.''. $msg ?></span><br>
                  <span><?php echo $row['status']  ?></span>
              </div>
            </a>
          </li>
    
 <?php endforeach ?>


