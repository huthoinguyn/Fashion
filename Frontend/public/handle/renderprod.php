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

            <div class="item1 product-item w-[30%]">
                <a href="./detail.php">
                    <div style="background-image: url('../../../BackEnd/images/<?php echo $row['image'] ?>')" class="product-image w-full h-[380px] bg-cover bg-no-repeat bg-center">
                        <!-- <a href="#"> -->
                        <div class="w-full h-full hover:bg-gray-900 hover:bg-opacity-20 hover:transition-all hover:ease-in-out hover:duration-300 relative overflow-hidden group">
                            <div class="add-cart-btn absolute bottom-4 left-1/2 translate-x-[-50%] translate-y-[100%] opacity-0 text-sm ct-button px-6 py-1">
                                Add to cart
                            </div>
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
            </div>
        <?php } ?>

    </div>
</div>