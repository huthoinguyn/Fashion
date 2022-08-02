<?php
$conn = mysqli_connect("localhost", "root", "", "fashion");

if ($conn->connect_errno) {
    echo "Connect error" . $conn->connect_error;
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM products");
$prod = [];
while ($row = mysqli_fetch_array($result)) {
    $prod[] = $row;
}

echo json_encode($prod);

?>
