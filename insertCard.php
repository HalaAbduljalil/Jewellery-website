<?php
session_start();
$con = mysqli_connect("localhost", "root", "","marjandatabase1");
$db=mysqli_select_db($con, 'marjandatabase1');

if(isset($_POST['submit1']))
{
    $file='imagesMarjan/'.$_FILES['image']['name'];
    //$file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $barcode = $_POST['barcode'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $featured = $_POST['collection'];
    $des = $_POST['des'];

}





$s = "select * from access1 where barcode1='$barcode'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
    echo '<script> alert("user name already token ")</script>';
}
else if(!empty($barcode) &&!empty($type)&&!empty($price)&&!empty($featured)&&!empty($des)&&!empty($file))
{
    if($featured=='onsale')
    {
        $reg="insert into access1(barcode1,type1,price1,feature1,img1,description) values ('$barcode','$type','$price','$featured','$file','$des')" ;
        $res4=mysqli_query($con,$reg);

    }
    if($featured=='arrivals')
    {
        $reg="insert into access2(barcode1,type1,price1,feature1,img1,description) values ('$barcode','$type','$price','$featured','$file','$des')" ;
        $res4=mysqli_query($con,$reg);

    }
    if($featured=='featured')
    {
        $reg="insert into access3(barcode1,type1,price1,feature1,img1,description) values ('$barcode','$type','$price','$featured','$file','$des')" ;
        $res4=mysqli_query($con,$reg);

    }

    //echo '<script> alert("registration successful")</script>';
}

//$sel ="select * from access1 ";
//$res= mysqli_query( $con,$sel);

?>



