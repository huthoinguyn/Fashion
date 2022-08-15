<?php
$conn = mysqli_connect('localhost','root','','fashion');
$prodId = $_GET['prodId'];
$name = $_POST['title'];
$price = $_POST['price'];
$category = $_POST['category'];
// $fileUpload = $_FILES['fileUpload']['name'];
$fileUpload = basename($_FILES['fileUpload']['name']);    

$result = mysqli_query($conn,'SELECT * FROM products WHERE id ='.$prodId);
if($fileUpload != ''){
    $fileUrl = '../../../images/' . $fileUpload;
    if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $fileUrl));
    while($row = mysqli_fetch_array($result)){
        unlink('../../../images/' . $row['image']);
    }
    $sql_update = "UPDATE products SET name = '".$name."', price = $price, category = '" . $category . "', image = '" . $fileUpload . "' WHERE id = $prodId";
}else{
    while($row = mysqli_fetch_array($result)){
        $sql_update = "UPDATE products SET name = '".$name."', price = $price, category = '" . $category . "', image = '" . $row['image'] . "' WHERE id = $prodId";
    }
}
if (isset($_POST['update'])) {
    mysqli_query($conn, $sql_update);
    header('Location: ../../../index.php?manage=product&handle=1');
}
?>