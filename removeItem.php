<?php

include('sidebar.html');
session_start();
$con = mysqli_connect("localhost", "root", "","marjandatabase1");
$db=mysqli_select_db($con, 'marjandatabase1');


?>

<html>
<head>
    <link rel="stylesheet" href="coustomer1style.css">

</head>
<body>

<div class="form-box2">

    <div class="button-box">


    </div>
    <div class="social_icons">


    </div>
    <form action="removeItem.php" method="post" enctype="multipart/form-data" id="login">
        <label> please Enter the barcode to Remove that item:</label>
        <br>
        <br>
        <input type="text" name="barcode" class="input-field" placeholder="id" required>

        <button type="submit" name="remove" class="submit-btn my-3" value="Upload Image/Data">Remove
        </button>
    </form>

</div>
</body>
</html>

<?php
if(isset($_POST['remove'])) {

    $barcodeToRemove = $_POST['barcode'];

    $s = "select * from access1 where barcode1='$barcodeToRemove'";
    if(!empty($s))
    {
        $s1 = "DELETE FROM access1 WHERE barcode1 = '$barcodeToRemove'";
        $result = mysqli_query($con, $s1);

    }
    $sw = "select * from access2 where barcode1='$barcodeToRemove'";
    if(!empty($sw))
    {
        $s2 = "DELETE FROM access2 WHERE barcode1 = '$barcodeToRemove'";
        $result = mysqli_query($con, $s2);

    }
    $s5 = "select * from access3 where barcode1='$barcodeToRemove'";
    if(!empty($s5))
    {
        $s3 = "DELETE FROM access3 WHERE barcode1 = '$barcodeToRemove'";
        $result = mysqli_query($con, $s3);

    }



}

echo "<table style='margin-left: 1300px'>";
$sel1 ="select * from access1 ";
$sel2 ="select * from access2 ";

$sel3 ="select * from access3 ";

$res1= mysqli_query( $con,$sel1);
$res2= mysqli_query( $con,$sel2);
$res3= mysqli_query( $con,$sel3);

while ($row=mysqli_fetch_array($res1))
{
    echo "<tr>";
    echo "<td>";?>
    <img src="<?php echo $row['img1']?>"height="100"width="100"><?php echo "</td>";
    echo "<td>";echo $row ["barcode1"];echo" </td>";
    echo "</tr>";

}
while ($row=mysqli_fetch_array($res2))
{
    echo "<tr>";
    echo "<td>";?>
    <img src="<?php echo $row['img1']?>"height="100"width="100"><?php echo "</td>";
    echo "<td>";echo $row ["barcode1"];echo" </td>";
    echo "</tr>";

}
while ($row=mysqli_fetch_array($res3))
{
    echo "<tr>";
    echo "<td>";?>
    <img src="<?php echo $row['img1']?>"height="100"width="100"><?php echo "</td>";
    echo "<td>";echo $row ["barcode1"];echo" </td>";
    echo "</tr>";

}
echo "</table>";
?>