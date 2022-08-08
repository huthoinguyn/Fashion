<?php
include('../../../config/config.php');
$cusId = $_GET['cusId'];
$sql_del = "DELETE FROM customer WHERE id ='" . $cusId . "'  ";
mysqli_query($conn, $sql_del);
header('Location: ../customer.php');
?>