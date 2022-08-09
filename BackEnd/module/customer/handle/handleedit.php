<?php
include('../../../config/config.php');
if (isset($_GET['cusId'])) {
    $cusId = $_GET['cusId'];
}
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['update'])) {
    if ($password != $_POST['passwordag']) {
        header('Location: ../../../index.php?manage=customer&handle=edit&cusId=' . $cusId);
    } else {
        $sql_update = "UPDATE customer SET name = '" . $name . "', email = '" . $email . "', password = '" . $password . "' WHERE id = $cusId";
        mysqli_query($conn, $sql_update);
        header('Location: ../../../index.php?manage=customer&handle=1');
    }
}
?>