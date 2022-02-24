<?php
session_start();
include_once'php/connection.php';

?>

<?php include_once 'php/header.php' ?>
<body>
    <div class="auth-container">
        <h2>Login</h2>
        <form action="" id="login-form" class="form">
           
            <div class="form-group ">
                <p id="error" class="error">some error</p>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input  class="username"  type="text"value="" name="username"placeholder="Username" autocomple="off">
               
            </div>
            <div class="form-group password   ">
                <label for="username">Create Password</label>
                <input  class="pass1"  type="password"value="" name="pass1"placeholder="Password" autocomple="off">
                <div class="i"><i class="fa fa-eye" id="icon" aria-hidden="true"></i></i></div>
            
            </div>
           
            <button class="submit" type="submit">Continue</button>
            <div class="form-footer">
              Don't have an Account? <br><a href="register.php"> Register</a>
            </div>
        </form>
    </div>
    <script src="js/login.js"></script>
</body>
</html>