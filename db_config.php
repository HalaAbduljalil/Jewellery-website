<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'logindatabase';
$conn = mysqli_connect($host,$username,$password,$database);
if($conn->connect_error)
{
    die('database error: '.$conn->connect_error);
}
?>
<?php
$conn1 = new mysqli("localhost","root","","marjandatabase1");
if($conn1->connect_error){
    die("Connection Failed!".$conn->connect_error);
}
?>

