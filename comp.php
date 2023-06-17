<?php


function component($producttype, $productprice, $productimg, $productid, $description)
{
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
