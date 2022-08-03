<?php
include('../../../config/config.php');
$cateId = $_GET['cateId'];
$sql_del = "DELETE FROM categories WHERE id ='" . $cateId . "'  ";
mysqli_query($conn, $sql_del);
header('Location: ../category.php');
?>