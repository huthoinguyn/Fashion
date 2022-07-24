<?php
include('./data.php');
$productImage = $_POST['productimage'];
$productName = $_POST['productname'];
$productPrice = $_POST['productprice'];
if (isset($_POST['addproduct'])) {
    $sql_add = "INSERT INTO products(img,name,price) VALUE('" . $productImage . "','" . $productName . "','" . $productPrice . "')";
    mysqli_query($conn, $sql_add);
    header('Location: ./add.php');
}
