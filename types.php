<?php
session_start();
function component($producttype, $productprice, $productimg, $productid,$description){

    $element = "

     
        <form action=\"test1.php\" id=$productid method=\"post\" style='width: 270px ; height: 600px;margin-right: 0;padding: 0;'>
           
                    <div class=\"custom-col-5\">
                        <div class=\"single_product\">
                            <div class=\"product_thumb\">
                                <a href=\"#\" class=\"primary_img\"><img src=$productimg
                                                                     ></a>
                                <a href=\"#\" class=\"secondary_img\"><img
                                        src=$productimg></a>
                                <div class=\"quick_button\">
                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal_box\"
                                       data-placement=\"top\"
                                       data-original-title=\"quick view\">Quick View</a>
                                </div>
                            </div>
                            <div class=\"product_content\">
                                <div class=\"tag_cate\">
                                    <a href=\"#\">$producttype</a>
                                   
                                </div>
                                
                                <div class=\"price_box\">
                                    <span class=\"old_price\">$20</span>
                                    <span class=\"current_price\">$$productprice</span>
                                </div>
                                <div class=\"product_hover\" style='background: #def0f3;'>
                                    <div class=\"product_ratings\">
                                        <ul>
                                            <li><a href=\"#\"><i
                                                        class=\"ion-ios-star-outline\"></i></a>
                                            </li>
                                            <li><a href=\"#\"><i
                                                        class=\"ion-ios-star-outline\"></i></a>
                                            </li>
                                            <li><a href=\"#\"><i
                                                        class=\"ion-ios-star-outline\"></i></a>
                                            </li>
                                            <li><a href=\"#\"><i
                                                        class=\"ion-ios-star-outline\"></i></a>
                                            </li>
                                            <li><a href=\"#\"><i
                                                        class=\"ion-ios-star-outline\"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"product_desc\">
                                        <p>$description</p>
                                    </div>
                                    <div class=\"action_links\">
                                        <ul>
                                            <li><a href=\"#\" data-placement=\"top\"
                                                   title=\"Add to Wishlist\"
                                                   data-toggle=\"tooltip\"><span
                                                        class=\"ion-heart\"></span></a></li>
                                            <li class=\"add_to_cart\" name='add3' methods='post'><a  type='submit'>Add to Cart</a></li>
                              <button class=\"btn btn-info btn-block addItemBtn\"><i class=\"fas fa-cart-plus\"></i>&nbsp;&nbsp;Add to cart</button>
                                <li ><button class=\"add_to_cart\" name='add3' methods='post' type='submit'>Add to Cart</button></li>
                                         <li> <input type='hidden' name='productid' value='$productid'></li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </form>

   
    ";
    echo $element;

}
require_once ('./card.php');
$conn1 = new mysqli("localhost","root","","marjandatabase1");
if($conn1->connect_error){
    die("Connection Failed!".$conn1->connect_error);
}
$result= connectDB();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARJAN</title>
    <link rel="stylesheet " href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >

    <link rel="shortcut icon" href="imagesMarjan/marjanLOGO.png" type="imagesMarjan/marjanLOGO.png">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="product_section p_section1 product_black_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_area">
                    <div class="product_tab_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a href="#featured" class="active" data-toggle="tab" role="tab"
                                   aria-controls="featured" aria-selected="true">Featured</a>
                            </li>
                            <li>
                                <a href="#arrivals" data-toggle="tab" role="tab" aria-controls="arrivals"
                                   aria-selected="false">New Arrivals</a>
                            </li>
                            <li>
                                <a href="#onsale" data-toggle="tab" role="tab" aria-controls="onsale"
                                   aria-selected="false">On-Sale</a>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="featured" role="tabpane1">
                            <div class="product_container">


                                <div class="container">
                                    <div class="row">
                                        <?php

                                                $result=connectDB3();
                                                while ($row=mysqli_fetch_assoc($result))
                                                    component($row['type1'],$row['price1'],$row['img1'],$row['barcode1'],$row['description']);
                                                //   component("ring",'123','./imagesMarjan/bracelet1.jpg','12','this is my img');
                                                //   component("bracelet",'123','./imagesMarjan/bracelet12.jpg','12','this is my img');
                                                //   component("bracelet",'123','./imagesMarjan/bracelet12.jpg','12','this is my img');

                                                ?>


                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="arrivals" role="tabpane1">
                            <div class="product_container">
                                <div class="container">
                                    <div class="row">
                                        <?php

                                            $result=connectDB2();
                                            while ($row=mysqli_fetch_assoc($result))
                                                component($row['type1'],$row['price1'],$row['img1'],$row['barcode1'],$row['description']);
                                            //   component("ring",'123','./imagesMarjan/bracelet1.jpg','12','this is my img');
                                            //   component("bracelet",'123','./imagesMarjan/bracelet12.jpg','12','this is my img');
                                            //   component("bracelet",'123','./imagesMarjan/bracelet12.jpg','12','this is my img');

                                            ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="onsale" role="tabpane1">
                            <div class="product_container">
                                <div class="container">
                                    <div class="row">
                                        <?php



                                        $result=connectDB();
                                            while ($row=mysqli_fetch_assoc($result))
                                                component($row['type1'],$row['price1'],$row['img1'],$row['barcode1'],$row['description']);
                                            //   component("ring",'123','./imagesMarjan/bracelet1.jpg','12','this is my img');
                                            //   component("bracelet",'123','./imagesMarjan/bracelet12.jpg','12','this is my img');
                                            //   component("bracelet",'123','./imagesMarjan/bracelet12.jpg','12','this is my img');

                                            ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- JavaScript Bundle with Popper.js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>
</html>