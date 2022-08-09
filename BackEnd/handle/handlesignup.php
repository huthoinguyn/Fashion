<?php
$conn = mysqli_connect("localhost", "root", "", "fashion");
$username = $_POST['username'];
$password = md5($_POST['password']);
$passwordag = md5($_POST['passwordag']);

if (isset($_POST['signup'])) {
    if($password == $passwordag){
        $querry_admin = "INSERT INTO admin(username,password) VALUE ('".$username."','".$password."')";
        $result = mysqli_query($conn, $querry_admin);
        header('Location: ../login.php');
    }else{
        header('Location: ../signup.php');
    }
}
?>