<?php
include ('sidebar.html');

?>
<html>
<head>
    <link rel="stylesheet" href="coustomer1style.css">

</head>
<body>

<div  class="form-box">

    <div class="button-box">


    </div>
    <div class="social_icons">


    </div>
    <form action="insertCard.php" method="post" enctype="multipart/form-data" id="login" >
        <input  type="text" name="barcode" class="input-field" placeholder="Barcode" required>
        <input  type="file" name="image" id="image" class="input-field" placeholder="imgUrl" required>
        <input  type="text" name="price" class="input-field" placeholder="price" required>
<!--        <input  type="text" name="featured" class="input-field" placeholder="featured" required>-->
        <select id="type" name="type">
            <option value="collection1">--- Select Type ---</option>
            <option value="ring">Ring</option>
            <option value="necklace">Necklace</option>
            <option value="bracelet">Bracelet</option>
            <option value="earrings">Earrings</option>
            <option value="crown">Crown</option>
            <option value="watch">Watch</option>
        </select>        <select id="collection" name="collection">
            <option value="collection1">--- Select Collection---</option>
            <option value="featured">Featured</option>
            <option value="arrivals">New Arrivals</option>
            <option value="onsale">On Sale</option>
        </select>
        <input  type="text" name="des" class="input-field" placeholder="description" required>
        <button  type="submit" name="submit1" class="submit-btn my-3" value="Upload Image/Data">submit</button>
    </form>

</div>
</body>
</html>
