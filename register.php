<?php include_once 'php/header.php' ?>
<body>
    <div class="auth-container">
        <h2>SignUp</h2>
        <form action="" id="register-form" class="form" enctype="multipart/form-data">

            <div class="form-group">
                <p id="error" class="error"> some error</p>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input class="username" type="text" value=""   name="username"placeholder="Create Username">
           
            </div>
            <div class="form-group">
                <label for="username">Email</label>
                <input  class="email"  type="email"value="" name="email"placeholder="Enter Email">
               
            </div>
            <div class="form-group">
                <label for="username">Profile</label>
                <input  class="image"  type="file"value="" name="profile">
               
            </div>
            <div class="form-group password   ">
                <label for="username">Create Password</label>
                <input  class="pass1"  type="password"value="" name="pass1"placeholder="Atleast 8 characters">
                <div class="i"><i class="fa fa-eye" id="icon" aria-hidden="true"></i></i></div>
            
            </div>
            <div class="form-group">
                <label for="username">Confirm Password</label>
                <input  class="pass2"  type="password" value="" name="pass2"placeholder="Retype Password">
               
            </div>
            <button class='submit' type ="submit">Continue</button>
            <div class="form-footer">
               Already have an Account? <br><a href="login.php"> login</a>
            </div>
        </form>
    </div>
  
    <script src="js/register.js"></script>

</body>
</html>