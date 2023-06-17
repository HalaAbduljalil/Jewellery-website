<?php

use PHPMailer\PHPMailer\PHPMailer;

error_reporting(0);

$errors = '';

if(isset($_POST['submit1']))
{
    //keep it inside
    $email = $_POST['email1'];

    $con = mysqli_connect("Localhost", "root", "", "logindatabase");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $query = mysqli_query($con, "SELECT * FROM logintable2 WHERE emailEmail='$email'")
    or die(mysqli_error($con));

    require 'PHPMailer1/PHPMailer.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = ""; // Your mail
    $mail->Password = ''; // Your password mail
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';
    $mail->setFrom($_POST['email1']);
    $mail->addAddress('email1'); // Your mail
    $mail->addReplyTo($_POST['email1']);
    $mail->isHTML(true);
    $mail->Subject = 'Form Submission:' . $_POST['subject'];
    $code = rand(100, 999);
    $mail->Body = $message = "You activation link is:http://localhost/ForgotPassword/resetpassword.php?email=code=$code";

    mail($email, "Send Code", $message);

    if (mysqli_num_rows($query) == 1) {
        if ($mail->send()) {

        }
        $password =$_POST['password1'];
        $query2 = mysqli_query($con, "UPDATE userPass SET userPass='$password' WHERE userEmail='$email'")
        or die(mysqli_error($con));
    } else {
        $errors = '<div class="alert alert-danger" role="alert">Sorry, Your emails does not exists in our record database</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ForgotPassword</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
          integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form-doc.css">
    <link href='https://fonts.googleapis.com/css?family=Bayon|Francois+One' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="coustomer1style.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">

</head>
<body>

<div  class="form-box3" style="position: center">

    <div class="button-box">


    </div>
    <div class="social_icons">


    </div>
    <form action="forgetPassword.php" method="post" enctype="multipart/form-data" id="login" >
        <input  type="email" name="email1" class="input-field" placeholder="Enter Email:" required>

        <button  type="submit" name="submit1" class="submit-btn my-3" >send code</button>
    </form>

</div>
</body>
</html>
