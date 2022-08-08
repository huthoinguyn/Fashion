<?php
include('../../../config/config.php');
$cateId = $_GET['cateId'];
$category = $_POST['category'];
$order = $_POST['order'];

if (isset($_POST['update'])) {
    $sql_update = "UPDATE categories SET category = '" . $category . "', sort = $order WHERE id = $cateId";
    mysqli_query($conn, $sql_update);
    header('Location: ../category.php');
}
?>