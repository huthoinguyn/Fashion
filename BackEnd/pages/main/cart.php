<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="css/cart.css">
<?php
$conn = new mysqli("localhost", "root", "", "fashion");

if (isset($_GET['cusId'])) {
    $conn = new mysqli("localhost", "root", "", "fashion");
    $cusId = $_GET['cusId'];
    $sql_del = "DELETE FROM receipt WHERE id_hd ='" . $cusId . "'  ";
    mysqli_query($conn, $sql_del);

    $sql_l = "DELETE FROM receiptdetail WHERE id_receipt ='" . $cusId . "'  ";
    mysqli_query($conn, $sql_l);
    header('Location: index.php?manage=cart&handle=1');
}
?>
<ul class="cart" style="margin-top: 48px;">
    <li style="width: 2%;">ID</li>
    <li style="width: 15%;">Name</li>
    <li style="width: 10%;">Phone</li>
    <li style="width: 20%;">Address</li>
    <li>Product</li>
    <li>Quantity</li>
    <li>Total</li>
    <li style="width: 20%;">Time</li>
    <li>Status</li>
    <li>Remove</li>
</ul>

<?php
$conn = new mysqli("localhost", "root", "", "fashion");

$sql_render_cus = "SELECT * FROM receipt r INNER JOIN customer c ON r.id_cus = c.id ORDER BY r.id_hd ASC";
$querry_cus = mysqli_query($conn, $sql_render_cus);

$sql_chitiethoadon = "SELECT * FROM receiptdetail ORDER BY id_receipt DESC";
$querry_chitiethoadon = mysqli_query($conn, $sql_chitiethoadon);
?>
<div style="height: 100%; overflow-y: auto;">
    <?php
    $prod = array();
    while ($chitiethoadon = mysqli_fetch_array($querry_chitiethoadon)) {
    ?>
        <?php
        while ($cus = mysqli_fetch_array($querry_cus)) {
            // $prod
        ?>
            <ul class="cart">
                <li style="width: 2%;"><?php echo $cus['id_hd'] ?></li>
                <li style="width: 15%;"><?php echo $cus['name'] ?></li>
                <li style="width: 10%;"><?php echo $cus['phone'] ?></li>
                <li style="width: 20%;"><?php echo $cus['address'] ?></li>
                <li><?php // comming soon 
                    ?></li>
                <li><?php echo $chitiethoadon['quantity'] ?></li>
                <li>$<?php echo $cus['total'] ?></li>
                <li style="width: 20%;"><?php echo $cus['time'] ?></li>
                <li>
                    <select name="" id="">
                        <option selected value="pending">Pending</option>
                        <option value="delivering">Delivering</option>
                        <option value="finish">Finish</option>
                    </select>
                </li>
                <li>
                    <a style="margin-left: 12px;" href="index.php?manage=cart&handle=1&cusId=<?php echo $cus['id_hd'] ?>" class="prodIcon remove">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </a>
                </li>

            </ul>
        <?php } ?>
    <?php } ?>
</div>