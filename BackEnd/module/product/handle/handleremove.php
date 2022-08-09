<?php
// include('../../../config/config.php');
$conn = mysqli_connect("localhost", "root", "", "fashion");

$prodId = $_GET['prodId'];
$sql_del = "DELETE FROM products WHERE id ='" . $prodId . "'  ";
mysqli_query($conn, $sql_del);
header('Location: ../../../index.php?manage=product&handle=1');
?>