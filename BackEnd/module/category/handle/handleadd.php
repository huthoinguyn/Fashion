<?php

include('../../../config/config.php');

$order = $_POST['order'];
$category = $_POST['category'];
if (isset($_POST['add'])) {
    $sql_add = "INSERT INTO categories(category,sort) VALUE ('" . $category . "',$order)";
    mysqli_query($conn, $sql_add);
    header('Location: ../category.php');
}
?>