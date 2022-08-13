<?php
$conn = mysqli_connect("localhost", "root", "", "fashion");

$cateId = $_GET['cateId'];
$category = $_POST['category'];
$order = $_POST['order']; 

if (isset($_POST['update'])) {
    $sql_update = "UPDATE categories SET category = '" . $category . "', sort = $order WHERE id = $cateId";
    mysqli_query($conn, $sql_update);
    header('Location: ../../../index.php?manage=category&handle=1');
}
?>