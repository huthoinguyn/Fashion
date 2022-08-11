<?php
// $conn = mysqli_connect('localhost','root','','fashion');
// $keyword = $_GET['keyword'];
// $keywords = explode(' ', $keyword);
// $x = 0;
// $searchterm = '';
// foreach($keywords as $words) {
//     $x++;
// if($x == 1) {
//     $searchterm .= "name LIKE %$words%";
// }else {
//     $searchterm .= " OR name LIKE %$words%";
// }
// }
// $result = mysqli_query($conn,"SELECT * FROM products WHERE name LIKE %$searchterm%");

// echo $result;
?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'fashion');
if (isset($_POST["input"])) {
    $keyword = $_POST["input"];
    $query_keyword = "SELECT * FROM products WHERE name LIKE '{$keyword}%'";
    $result = mysqli_query($conn, $query_keyword);
    if (mysqli_num_rows($result) > 0) { ?>
        <?php
        $i = 0;
        while ($prod = mysqli_fetch_assoc($result)) {
            $i++;
        ?>
            <?php //while ($prod = mysqli_fetch_assoc($result)) { 
            ?>
            <li class="items odd">
                <div class="infoWrap">
                    <p class="stt"><?php echo $i ?></p>

                    <div class="prodSection">
                        <img src="<?php echo 'images/' . $prod['image'] ?> " alt="" class="itemImg w-[128px] h-[100px] object-cover" />

                        <p class="itemNumber">
                        </p>
                        <h3><?php echo $prod['name'] ?></h3>

                        <p> <?php echo $prod['category'] ?></p>
                    </div>

                    <!-- <div class='prodqty w-[10%]'></div> -->

                    <div class="price">
                        <p><?php echo "$" . $prod['price'] ?></p>
                    </div>
                    <!-- ./handle/handleedit.php?prodId=<?php // echo $prod['id'] 
                                                        ?> -->
                    <div class="removeWrap">
                        <a href="module/product/feature/edit.php?prodId=<?php echo $prod['id'] ?>" class="prodIcon editProd">
                            <span class="prodIcon material-symbols-outlined">
                                edit_note
                            </span>
                        </a>
                        <a href="module/product/handle/handleremove.php?prodId=<?php echo $prod['id'] ?>" class="prodIcon remove">
                            <span class="material-symbols-outlined">
                                close
                            </span>
                        </a>
                    </div>
                </div>
            </li>

        <?php  } ?>
    <?php } else {
        echo "<h3>Empty</h3>";
    }
} else {
    $query_prod = 'SELECT * FROM products';
    $result = mysqli_query($conn, $query_prod);
    // if (mysqli_num_rows($result) > 0) { 
    ?>
    <?php
    $i = 0;
    while ($prod = mysqli_fetch_array($result)) {
        $i++;
    ?>
        <?php //while ($prod = mysqli_fetch_assoc($result)) { 
        ?>
        <li class="items odd">
            <div class="infoWrap">
                <p class="stt"><?php echo $i ?></p>

                <div class="prodSection">
                    <img src="<?php echo 'images/' . $prod['image'] ?> " alt="" class="itemImg w-[128px] h-[100px] object-cover" />

                    <p class="itemNumber">
                    </p>
                    <h3><?php echo $prod['name'] ?></h3>

                    <p> <?php echo $prod['category'] ?></p>
                </div>

                <!-- <div class='prodqty w-[10%]'></div> -->

                <div class="price">
                    <p><?php echo "$" . $prod['price'] ?></p>
                </div>
                <!-- ./handle/handleedit.php?prodId=<?php // echo $prod['id'] 
                                                    ?> -->
                <div class="removeWrap">
                    <a href="module/product/feature/edit.php?prodId=<?php echo $prod['id'] ?>" class="prodIcon editProd">
                        <span class="prodIcon material-symbols-outlined">
                            edit_note
                        </span>
                    </a>
                    <a href="module/product/handle/handleremove.php?prodId=<?php echo $prod['id'] ?>" class="prodIcon remove">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </a>
                </div>
            </div>
        </li>

    <?php  }
}