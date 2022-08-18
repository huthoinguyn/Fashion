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
                    $conn = mysqli_connect("localhost", "root", "", "fashion");
                    $cus = $_SESSION['signin'];
                    // mysqli_query($conn, "SELECT * FROM cart c JOIN products p ON c.cartId = p.id JOIN customer u ON c.cartId = u.id");
                    // $result = mysqli_query($conn,"SELECT id, GROUP_CONCAT(id) products FROM cart GROUP BY id");
                    $result = mysqli_query($conn, "SELECT * FROM cart WHERE customer='$cus'");
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $i++;
                    ?>
                        <li class="cart-item items odd">
                            <div class="infoWrap">
                                <div class="cartSection w-[60%]">
                                    <img src="../../BackEnd/images/<?php echo $row['image']; ?>" alt="" class="itemImg w-[128px] h-[100px] object-cover" />
                                    <p class="itemNumber">#QUE-007544-002</p>
                                    <h3><?php echo $row['prodname']; ?></h3>

                                    <p><input type="text" class="qty product-qty" value='1' /> x $<?php echo $row['price']; ?></p>

                                </div>

                                <div class='prodqty w-[10%]'>
                                </div>

                                <div class="prodTotal cartSection  w-[20%] text-center">
                                    <p>$<?php echo $row['price']; ?></p>
                                </div>
                                <div class="cartSection removeWrap  w-[10%] text-center">
                                    <a href="#" class="remove">x</a>
                                </div>
                            </div>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="subtotal cf h-[25%]">
                <ul>
                    <li class="totalRow">
                        <span class="label">Subtotal</span><span class="value subtotal">0</span>
                    </li>

                    <li class="totalRow">
                        <span class="label">Shipping</span><span class="value ship">0</span>
                    </li>

                    <li class="totalRow">
                        <span class="label">Tax</span><span class="value tax">0</span>
                    </li>
                    <li class="totalRow final">
                        <span class="label">Total</span><span class="value">0</span>
                    </li>
                    <li class="totalRow">
                        <a href="#" class="btn continue">Checkout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>