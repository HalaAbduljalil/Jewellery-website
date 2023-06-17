<?php

session_start();
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, 'loginDatabase');

$email = $_POST['email1'];
$pass = $_POST['password1'];


$s = "select * from loginTable2 where userEmail='$email'&& userPass='$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
$s2 = "select * from admintable where adminEmail='$email'&& adminPass='$pass'";
$result2 = mysqli_query($con, $s2);
$num2 = mysqli_num_rows($result2);
if(empty($email))
{
    header('location:loginPage.php?error=emptyE');
    exit();

}
if(empty($pass))
{
    header("location:loginPage.php?error=emptyP");

}
if($num==0 || $num2==0) {

    header('location:loginPage.php');

}

    if ($num > 0) {
        $_SESSION['userEmail'] = $email;
        header('location:indexTest.php');
    }

   else if ($num2 == 1) {
        $_SESSION['adminEmail'] = $email;
        header('location:sidebar.html');
    }
    else {
        header('Location: loginPage.php ? error=incorrect');
        exit();

    }



