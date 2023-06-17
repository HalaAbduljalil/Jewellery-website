<?php



function connectDB(){
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, 'marjanDatabase1');
$s = "select * from access1 ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num > 0) {
    return $result;
}
}
function connectDB2(){
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, 'marjanDatabase1');
    $s = "select * from access2 ";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        return $result;
    }
}
function connectDB3(){
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, 'marjanDatabase1');
    $s = "select * from access3 ";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        return $result;
    }
}
?>
