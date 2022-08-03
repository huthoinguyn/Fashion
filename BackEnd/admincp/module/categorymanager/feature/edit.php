<?php
include('../../../config/config.php');
$sql_edit = "SELECT * FROM categories WHERE id='$_GET[cateId]' LIMIT 1";
$querry_edit = mysqli_query($conn, $sql_edit);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/add.css">
</head>

<body>


    <?php
    $i = 0;
    while ($editcate = mysqli_fetch_array($querry_edit)) {
        $i++;
    ?>
        <div class="edit-wrapper">
            <form action="../handle/handleedit.php?cateId=<?php echo $editcate['id'] ?>" method="post">
                <h3 style="text-align: center; color: #fff;">Edit Category</h3>
                <input type="text" name="category" placeholder="Enter New Category" value="<?php echo $editcate['category'] ?>" />
                <input type="text" name="order" placeholder="Enter Order" value="<?php echo $editcate['sort'] ?>" />
                <button type="submit" name="update">Submit</button>
            <?php } ?>
            </form>
        </div>
</body>

</html>