<?php
session_start();
//header('location:loginBackend.php');
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'loginDatabase');
$name=$_POST['user1'];
$pass=$_POST['password1'];
$email=$_POST['email1'];


$s="select * from loginTable2 where userEmail='$email'";
$result= mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1)
{
    echo "user name already token ";
}
else
{
    $reg="insert into logintable2(userId,userEmail,userPass) values ('$name','$email','$pass')" ;
    mysqli_query($con,$reg);
    echo "registration successful";
}

//$server='localhost';
//$database='login-registration';
//$username='root';
//$password='';
//$conn=mysqli_connect($server,$username,$password,$database);
//if (!$conn)
//{
//    die ("<script>alert('connection Failed.')</script>");
//}



//$server1 = 'localhost';
//$database1 = 'login-registration';
//$username1 = 'root';
//$password1 = '';
//$conn = mysqli_connect($server1, $username1, $password1, $database1);
//if (isset($_POST['submit'])) {
//    $username = $_POST['user1'];
//    $password = md5($_POST['password1']);
//    $email = $_POST['email1'];
//
//    $reg = "insert into login-registration(username,email,password) values ('$username','$email','$password')";
//
//    $result = mysqli_query($conn, $reg);
//    echo "registration successful";
//    if (!$result)
//        echo "something went wrong ";
//}


?>

