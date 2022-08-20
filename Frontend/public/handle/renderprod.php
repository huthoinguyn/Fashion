<!--  -->
<?php
$conn = mysqli_connect("localhost", "root", "", "fashion");
include('handle/pagination.php');
if (isset($_GET['cate'])) {
    $cate = $_GET['cate'];
    $result = mysqli_query($conn, "SELECT * FROM products WHERE category LIKE '" . $cate . "' ");
} else {
    $query_prod = 'SELECT * FROM products LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
    $result = mysqli_query($conn, $query_prod);
}
?>


<div class="product-wrap w-[75%] h-full flex flex-wrap">
    <!-- Product-List -->
    <div class="product-list w-full h-full flex flex-wrap gap-6 p-4">
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <!-- Product-Render -->
            <form action="handle/handlecart.php" method="POST" enctype="multipart/form-data" class="item1 product-item w-[30%]">
                <input type="hidden" name="prod_name" value="<?php echo $row['name']; ?>">
                <input type="hidden" name="prodId" value="<?php echo $row['id']; ?>">
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
    <ul class="pagination text-center">
        <?php
        for ($page = 1; $page <= $number_of_pages; $page++) { ?>
            <li><a href="index.php?page=product&pg=<?php echo $page ?>"><?php echo $page ?></a></li>
        <?php } ?>
    </ul>
</div>