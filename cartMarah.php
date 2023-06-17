<?php
$conn1 = new mysqli("localhost","root","","marjandatabase1");
if($conn1->connect_error){
    die("Connection Failed!".$conn1->connect_error);
}
?>
<!--cartttt -->
<section class="shopping-cart spad">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div style="display:<?php if (isset($_SESSION['showAlert'])) {
                echo $_SESSION['showAlert'];
            } else {
                echo 'none';
            } unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><?php if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                    } unset($_SESSION['showAlert']); ?></strong>
</div>
<div class="cart-table">
    <table>
        <thead>
        <tr>

            <th>ID</th>
            <th>&nbsp; Image</th>
            <th  class="p-name" >&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>

            <th>   Remove Item    </th>
        </tr>
        </thead>
        <tbody>
        <?php
        require 'db_config.php';
        $stmt = $conn1->prepare('SELECT * FROM access1');
        $stmt->execute();
        $result = $stmt->get_result();
        $grand_total = 0;
        while ($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <td><img src="<?= $row['image'] ?>" width="60"></td>
                <td><?= $row['name'] ?></td>
                <td>
                    <i class="fas fa-rupee-sign"></i><?= number_format($row['price'],2); ?>
                </td>
                <input type="hidden" class="pprice" value="<?= $row['price'] ?> " >
                <td>
                    <input type="number" class="form-control itemQty" value="<?=  $row['quantity'] ?>" style="width:75px;">
                </td>
                <td><i class="fas fa-rupee-sign"></i><?= number_format($row['totalPrice'],2); ?></td>
                <td>

                    <a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>

            <?php $grand_total += $row['totalPrice']; ?>
        <?php endwhile; ?>




        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="cart-buttons">
            <a href="index.php" class="primary-btn continue-shop">Continue</a>


            <a href="action.php?clear=all" class="primary-btn up-cart"  onclick="return confirm('Are you sure want to clear your cart?');" >Delete</a>
        </div>
        <div class="discount-coupon">
            <h6>Discount Codes</h6>
            <form action="#" class="coupon-form">
                <input type="text" placeholder="Enter your codes">
                <button type="submit" class="site-btn coupon-btn">Apply</button>
            </form>
        </div>
    </div>
    <div class="col-lg-4 offset-lg-4">
        <div class="proceed-checkout">
            <ul>




                <li class="subtotal">Subtotal <span><?= number_format($grand_total,2); ?></span></li>
                <li class="cart-total">Total <span><?= number_format($grand_total,2); ?></span></li>
            </ul>

            <a href="checkout.php" class="proceed-btn  <?= ($grand_total > 1) ? '' : 'disabled'; ?>   ">PROCEED TO CHECK OUT</a>
        </div>
    </div>
</div>






</div>
</div>
</div>


</section>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

<script type="text/javascript">
    $(document).ready(function() {

        // Change the item quantity
        $(".itemQty").on('change', function() {
            let $el = $(this).closest('tr');

            let pid = $el.find(".pid").val();
            let pprice = $el.find(".pprice").val();
            let qty = $el.find(".itemQty").val();
            location.reload(true);
            $.ajax({
                url: 'action.php',
                method: 'post',
                cache: false,
                data: {
                    qty: qty,
                    pid: pid,
                    pprice: pprice
                },
                success: function(response) {
                    console.log(response);
                }
            });
        });

        // Load total no.of items added in the cart and display in the navbar
        load_cart_item_number();

        function load_cart_item_number() {
            $.ajax({
                url: 'action.php',
                method: 'get',
                data: {
                    cartItem: "cart_item"
                },
                success: function(response) {
                    $("#cart-item").html(response);
                }
            });
        }
    });
</script>