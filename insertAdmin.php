<?php
session_start();
$con = mysqli_connect("localhost", "root", "","marjandatabase1");
$db=mysqli_select_db($con, 'logindatabase');

if(isset($_POST['submit1']))
{

    $adminEmail = $_POST['email1'];
    $adminPass= $_POST['pass1'];
    $adminName= $_POST['adminname'];

}
$s = "select * from admintable ";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);



    $reg="insert into admintable(adminEmail,adminPass,adminName) values ('$adminEmail','$adminPass','$adminName')" ;

mysqli_query($con,$reg);

?>