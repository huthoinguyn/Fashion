<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
    };
};
?>
<!-- cart -->
<div id="cart" class="cart-container fixed inset-0 z-50 hidden">
    <div class="fixed max-w-screen-lg h-[600px] z-[999] mx-auto inset-0 top-1/2 -translate-y-[48%] rounded-md bg-white shadow-2xl">
        <div class="wrap cf h-[100%]">
            <div class="heading cf h-[10%]">
                <h1>My Cart</h1>
                <a href="#" class="continue">Continue Shopping</a>
            </div>
            <div class="cart h-[65%] ">
                <ul class="tableHead h-[5%]">
                    <li class="prodHeader w-[60%]">Product</li>
                    <li class="w-[10%]">Quantity</li>
                    <li class="w-[20%]">Total</li>
                    <li class="w-[10%]">Remove</li>
                </ul>
                <ul class="cartWrap h-[95%] overflow-y-auto">
                    <!--<li class="items even">Item 2</li>-->

                    <?php
                    $conn = new mysqli("localhost", "root", "", "fashion");

                    $cookie_data = isset($_COOKIE["cart"]) ? $_COOKIE['cart'] : '[]';
                    $cart_data = json_decode($cookie_data, true);

                    $total = 0;
                    // var_dump($cart_data);
                    foreach ($cart_data as $sp) :
                        $subtotal = $sp['prodprice'] * $sp['quantity'];
                        $total += $subtotal;
                    ?>
                        <form action="handle/handlecart.php" method="POST">
                            <input type="hidden" name="prodId" value="<?php echo $sp['prodId'] ?>">
                            <!-- <input type="hidden" name="addcart"> -->
                            <li class="cart-item items odd">
                                <div class="infoWrap">
                                    <div class="cartSection w-[60%]">
                                        <img src="../../BackEnd/images/<?php echo $sp['prodimage']; ?>" alt="" class="itemImg w-[128px] h-[100px] object-cover" />
                                        <p class="itemNumber">#QUE-007544-002</p>
                                        <h3><?php echo $sp['prodname']; ?></h3>

                                        <p>
                                        <form action="handle/handlecart.php" method="POST"><input style="width: 48px; outline: none;" type="number" class="qty product-qty" value='<?php echo $sp['quantity'] ?>' onchange="this.form.submit()" /> x $<?php echo $sp['prodprice']; ?>
                                            <input type="hidden" name="addcart">
                                        </form>
                                        </p>
                                    </div>

                                    <div class='prodqty w-[10%]'>
                                    </div>

                                    <div class="prodTotal cartSection  w-[20%] text-center">
                                        <p>$<?php echo $subtotal; ?></p>
                                    </div>
                                    <div class="cartSection removeWrap  w-[10%] text-center">
                                        <button type="submit" name="delcart" class="remove">x</button>
                                    </div>
                                </div>
                            </li>
                        </form>
                    <?php
                    endforeach;
                    ?>

                </ul>
            </div>
            <div class="subtotal cf h-[25%]">
                <ul>
                    <li class="totalRow">
                        <span class="label">Subtotal</span><span class="value subtotal">$<?php echo $total ?></span>
                    </li>

                    <?php
                    $tax = 4;
                    $ship = 0;
                    if ($total <= 0) {
                        $tax = 0;
                        $ship = 0;
                    } else if ($total <= 100) {
                        $ship = 5;
                    }
                    $total += $ship + $tax;
                    ?>
                    <li class="totalRow">
                        <span class="label">Shipping</span><span class="value ship">$<?php echo $ship ?></span>
                    </li>

                    <li class="totalRow">
                        <span class="label">Tax</span><span class="value tax">$<?php echo $tax  ?></span>
                    </li>
                    <li class="totalRow final">
                        <span class="label">Total</span><span class="value">$<?php echo $total ?></span>
                    </li>
                    <li class="totalRow">
                        <a href="index.php?page=payment" class="btn continue">Checkout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>