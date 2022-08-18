<?php
$conn = mysqli_connect("localhost", "root", "", "fashion");

if (isset($_POST['addcart'])) {
    $customer = $_SESSION['signin'];
    $prodname = $_POST['prod_name'];
    $prodimage = $_POST['prod_image'];
    $prodprice = $_POST['prod_price'];
    $prodqty = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM cart WHERE prodname = '$prodname' AND customer = '$customer'");

    if (mysqli_num_rows($select_cart) > 0) {
        $message[] = 'product already added to cart';
    } else {
        $insert_product = mysqli_query($conn, "INSERT INTO `cart`(customer,prodname, price, image, qty) VALUES('$customer','$prodname', '$prodprice', '$prodimage', '$prodqty')");
        $message[] = 'product added to cart succesfully';
    }
}
?>

<!--  -->
<?php
$conn = mysqli_connect("localhost", "root", "", "fashion");
if (isset($_GET['cate'])) {
    $cate = $_GET['cate'];
    $result = mysqli_query($conn, "SELECT * FROM products WHERE category LIKE '" . $cate . "' ");
} else {
    $result = mysqli_query($conn, "SELECT * FROM products");
}
?>


<div class="product-wrap w-[75%] h-full flex">
    <!-- Product-List -->
    <div class="product-list w-full flex flex-wrap gap-6 p-4">
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $i++;
        ?>
            <!-- Product-Render -->
            <form method="POST" enctype="multipart/form-data" class="item1 product-item w-[30%]">
                <input type="hidden" name="prod_name" value="<?php echo $row['name']; ?>">
                <input type="hidden" name="prod_image" value="<?php echo $row['image']; ?>">
                <input type="hidden" name="prod_price" value="<?php echo $row['price']; ?>">
                <a href="index.php?page=detail">
                    <div style="background-image: url('../../BackEnd/images/<?php echo $row['image'] ?>')" class="product-image w-full h-[380px] bg-cover bg-no-repeat bg-center">
                        <!-- <a href="#"> -->
                        <div class="w-full h-full hover:bg-gray-900 hover:bg-opacity-20 hover:transition-all hover:ease-in-out hover:duration-300 relative overflow-hidden group">
                            <button name="addcart" type="submit" class="add-cart-btn absolute bottom-4 left-1/2 translate-x-[-50%] translate-y-[100%] opacity-0 text-sm ct-button px-6 py-1">
                                Add to cart
                            </button>
                        </div>
                        <!-- </a> -->
                    </div>
                </a>
                <div class="product-info my-8">
                    <a href="../html/detail.php">
                        <div class="product-name text-base mb-1 hover:text-pri text-center">
                            <?php echo $row['name'] ?>
                        </div>
                    </a>
                    <div class="product-price text-center">
                        <span class="text-gray-800">$<?php echo $row['price'] ?></span>
                    </div>
                </div>
            </form>
        <?php } ?>

    </div>
</div>