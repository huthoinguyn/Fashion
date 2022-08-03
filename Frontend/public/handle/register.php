<?php
$conn = mysqli_connect("localhost", "root", "", "fashion");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['signup'])) {

$sql_newacc = "INSERT INTO customer(name,email,password) VALUE ('".$name."','".$email."','".$password."')";
mysqli_query($conn,$sql_newacc);
header('Location: ../html/form.php');
}
?>