<?php
$conn = mysqli_connect("localhost","root","","fashion");

$result = mysqli_query($conn,"SELECT * FROM products");

$data = array();
while($row = mysqli_fetch_array($result)){
    $data[] = $row;
}

echo json_encode($data);

?>
