<?php
include('../../../config/config.php');
$prodId = $_GET['prodId'];
$name = $_POST['title'];
$price = $_POST['price'];
$category = $_POST['category'];
$fileUpload = $_FILES['fileUpload']['name'];

$fileUrl = '../../../images/' . $fileUpload;
if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $fileUrl));

if (isset($_POST['update'])) {
    $sql_update = "UPDATE products SET name = '".$name."', price = $price, category = '" . $category . "', image = '" . $fileUpload . "' WHERE id = $prodId";
    mysqli_query($conn, $sql_update);
    header('Location: ../../../index.php?manage=product&handle=1');

}
?>