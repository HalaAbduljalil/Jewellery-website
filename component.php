
<?php


function component($producttype, $productprice, $productimg, $productid,$description){

    $element = "

     
        <form action=\"indexTest.php\" id=$productid method=\"post\" style='width: 270px ; height: 600px;margin-right: 0;padding: 0;'>
           
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
                                           
                                <li ><input   name='add3'  style='background-color: #EF9A9A;line-height: 35px;padding: 0 18px;width: 100%;font-size: 12px;text-transform: capitalize; 
 ' value='Add to Cart'  methods='post' type='submit'id='add_to_cart'></input></li>
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
function cartElement($productimg, $productname, $productprice, $productid,$description){
    $element = "
    
    <form action=\"cartPhp.php?action=remove & id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">$description</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}