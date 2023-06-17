<?php
error_reporting(0);

$errors ='';

if(isset($_POST['submit1']))
{
    //keep it inside
    $email=$_POST['email'];
    $password = $_GET['passsword'];
    $con=mysqli_connect("Localhost","root","","logindatabase");
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $query = mysqli_query($con,"SELECT * FROM logintable2 WHERE userEmail='$email'")
    or die(mysqli_error($con));

    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = ""; // Your mail
    $mail->Password = ''; // Your password mail
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress(''); // Your mail
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Form Submission:' .$_POST['subject'];
    $code= rand(100,999);
    $mail->Body= $message="You activation link is:http://localhost/ForgotPassword/resetpassword.php?email=code=$code";

    mail($email, "Send Code", $message);


    if (mysqli_num_rows ($query)==1)
    {
        if($mail->send())
        {

        }
        $query2 = mysqli_query($con,"UPDATE userPass SET userPass='$password' WHERE userEmail='$email'")
        or die(mysqli_error($con));
    }
    else
    {
        $errors = '<div class="alert alert-danger" role="alert">Sorry, Your emails does not exists in our record database</div>';
    }
}

?>
