<?php
include ('sidebar.html');
include 'indexnn.html';

?>
<html>
<head>
    <link rel="stylesheet" href="coustomer1style.css">

</head>
<body>

<div  class="form-box1">

    <div class="button-box">


    </div>
    <div class="social_icons">


    </div>
    <form action="insertAdmin.php" method="post" enctype="multipart/form-data" id="login" >
        <input  type="text" name="adminname" class="input-field" placeholder="Admin Name" required>
        <input  type="email" name="email1" class="input-field" placeholder="Admin Email" required>
        <input  type="password" name="pass1" id="image" class="input-field" placeholder="Admin Password" required>

        <button  type="submit" name="submit1" class="submit-btn my-3" value="Upload Image/Data">Submit Credentials</button>
    </form>

</div>
</body>
</html>

