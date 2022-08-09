<?php
$conn = mysqli_connect("localhost", "root", "", "fashion");

$cateId = $_GET['cateId'];
$sql_del = "DELETE FROM categories WHERE id ='" . $cateId . "'  ";
mysqli_query($conn, $sql_del);
header('Location: ../../../index.php?manage=category&handle=1');

?>