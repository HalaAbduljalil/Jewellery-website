<?php
session_start();
require 'db_config.php';
$errors=array();
$username="";
$email='';
$password='';
$passwordConfirm='';
if(isset($_POST['submit']))
{
  $username=$_POST['user1'];
    $email=$_POST['email1'];
    $password=$_POST['password1'];
    $passwordConfirm=$_POST['cpassword'];

    if(empty($username)){
        $errors['user1']='username required';
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $errors['email1']='you should enter a valid email';
    }
    if(empty($email)){
        $errors['email1']='email required';
    }
    if(empty($password)){
        $errors['password1']='password required';
    }
    if($password!==$passwordConfirm){
        $errors['password1']='the two password do not match ';
    }
    $emailQuery='select * from logintable2 where userEmail=? LIMIT 1';
    if (isset($conn)) {
        $stmt=$conn->prepare($emailQuery);
    }
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result=$stmt->get_result();
    $userCount=$result->num_rows;
    $stmt->close();
    if($userCount>0)
    {
        $errors['email1']='email is already exists';
    }
    if(count($errors)===0)
    {
        $password=password_hash($password,PASSWORD_DEFAULT);
        $token=bin2hex(random_bytes(50));
        $verified=false;

    }
    $sql="insert into logintable2(fullname,userEmail,userPass,verified,token)values ('$username','$email','$password','$verified','$token')";
    if (isset($conn)) {
        $stmt=$conn->prepare($sql);
    }

   if($stmt->execute())
   {
    $user_id=$conn->insert_id;
       $_SESSION['id']=$user_id;
       $_SESSION['user1']=$username;
       $_SESSION['email1']=$email;
       $_SESSION['verified']=$verified;
       $_SESSION['message']='you are logged in ';
       $_SESSION['error']='alert success';
       header('location:index.html ');
       exit();

   }
   else
   {
       $errors['db_error']="database error";
   }

}
?>