<?php
require 'controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MARJAN</title>
    <link rel="shortcut icon" href="imagesMarjan/marjanLOGO.png" type="imagesMarjan/marjanLOGO.png">
    <link rel="stylesheet" href="loginStyle.css">

</head>
<body>
<div class="hero">
    <img src="imagesMarjan/marjanLOGO.png " width="100"height="80" alt="">
    <div class="form-box">

        <div class="button-box">
            <div id="btn"></div>

            <button type="button" class="toggle-button" onclick="login()">Log in</button>
            <button type="button" class="toggle-button"onclick="register()">Register</button>
        </div>
        <div class="social_icons">
            <img src="imagesMarjan/facebook-new%20(1).png">
            <img src="imagesMarjan/google-logo.png">
            <img src="imagesMarjan/instagram-new.png">

        </div>

        <form action="validation.php" method="post" id="login" class="input-group">
            <?php


            if (isset($errors)):

            if(count($errors)>0):?>
            foreach ($errors as $error) :

             <div class="error">
                 <?php foreach ($errors as $error) :  ?>
                 <li><?php echo $error ?> </li>
                 <?php endforeach; ?>

             </div>
            <?php endif; ?>
            <?php endif; ?>
            <input  type="email" name="email1" class="input-field" placeholder="User Email" required>
            <input  type="password" name="password1" class="input-field" placeholder="Enter Password" required>
            <input style="padding-top: 10px" type="checkbox" class="check-box"><span>Remember Password</span>
            <div style="text-align: center;font-size:16px ;color: blue"> <a href="forgetPass.php" style="text-decoration: none"> forget your password?</a></div>
             <button  class="submit-btn">Log in</button>
        </form>
        <form action="loginBackend.php" method="post"  id="register" class="input-group">
            <input name="user1" type="text" class="input-field" value="<?php if (isset($username)) {echo $username;} ?>" placeholder="Username" required>
            <input type="email" name="email1" class="input-field"value="<?php if (isset($email)) {echo $email;} ?>" placeholder="Email Id" required>

            <input name="password1"type="password" class="input-field"value="<?php if (isset($password)) {echo $password;} ?>" placeholder="Enter Password" required>
            <input name="cpassword"type="password" class="input-field"value="<?php if (isset($passwordConfirm)) {echo $passwordConfirm;} ?>" placeholder="confirm password" required>
            <i class="eyeO" data-bgimg="imagesMarjan/visible.png"></i>
            <i class="eyeC" data-bgimg="imagesMarjan/closed-eye.png"></i>
            <input type="checkbox" class="check-box"><span>I agree to the terms </span>
            <button  name="submit" class="submit-btn">Register</button>
        </form>
<!--        --><?php
        //$fullUrl='http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]';
//        if(strpos($fullUrl,'error=emptyE')==true)
//        {
//           echo "<p class='error'>you didn't fill the email field</p>";
//        }
//        if(strpos($fullUrl,'error=emptyP')==true)
//        {
//            echo "<p class='error'>you didn't fill the password field</p>";
//        }
//        if(strpos($fullUrl,'error=incorrect')==true)
//        {
//            echo "<p class='error'>you didn't fill correct credentials</p>";
//        }
//        ?>

    </div>


</div>
<script>
    var x=document.getElementById("login");
    var y=document.getElementById("register");
    var z=document.getElementById("btn");
    function register()
    {
        x.style.left="-400px"
        y.style.left="50px"
        z.style.left="110px"

    }
    function login()
    {
        x.style.left="50px"
        y.style.left="450px"
        z.style.left="0px"

    }

</script>
</body>
</html>

