<?php
include('../../../config/config.php');
$prodId = $_GET['prodId'];
$sql_del = "DELETE FROM products WHERE id ='" . $prodId . "'  ";
mysqli_query($conn, $sql_del);
header('Location: ../');
?>