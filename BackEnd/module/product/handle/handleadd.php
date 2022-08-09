<?php

$conn = mysqli_connect("localhost", "root", "", "fashion");

$name = $_POST['title'];
$price = $_POST['price'];
$category = $_POST['category'];
// $fileUpload = $_FILES['fileUpload']['name'];
$fileUpload = basename($_FILES['fileUpload']['name']);    
$fileUrl = '../../../images/' . $fileUpload;
if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $fileUrl));
if (isset($_POST['add'])) {

    $sql_add = "INSERT INTO products(name,price,category,image) VALUE ('" . $name . "',  $price ,'" . $category . "','" . $fileUpload . "')";
    mysqli_query($conn, $sql_add);
    header('Location: ../../../index.php?manage=product&handle=1');
}
