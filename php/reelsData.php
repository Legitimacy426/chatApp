<?php foreach($result as $row): ?>
    <li>
              <a href="chat.php?reciepientId=<?php echo $row['unique_id']  ?>">
                <div class="image-circle"><img src="php/images/<?php echo $row['profile']  ?>" alt=""></div>
                <div class="circle-title"><?php echo $row['username'] ?></div>
 
              </a>
    </li>
<?php endforeach ?>