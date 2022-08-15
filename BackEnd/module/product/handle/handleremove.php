<?php
$conn = mysqli_connect('localhost','root','','fashion');

$prodId = $_GET['prodId'];

$sql_del = "DELETE FROM products WHERE id ='" . $prodId . "'  ";
if(isset($prodId)){
    $result = mysqli_query($conn,'SELECT * FROM products WHERE id ='.$prodId);
    while($row = mysqli_fetch_array($result)){
        mysqli_query($conn, $sql_del);
        unlink('../../../images/' . $row['image']);
        header('Location: ../../../index.php?manage=product&handle=1');
    }
} 
?>