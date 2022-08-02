<?php
$conn = mysqli_connect("localhost", "root", "", "fashion");

if ($conn->connect_errno) {
    echo "Connect error" . $conn -> connect_error;
    exit();
}
?>