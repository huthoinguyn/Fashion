<?php
include('../../../config/config.php');
if (isset($_GET['cusId'])) {
    $cusId = $_GET['cusId'];
}
$sql_edit = "SELECT * FROM customer WHERE id='$_GET[cusId]' LIMIT 1";
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
    while ($editcus = mysqli_fetch_array($querry_edit)) {
        $i++;
    ?>
        <div class="edit-wrapper">
            <form action="../handle/handleedit.php?cusId=<?php echo $editcus['id'] ?>" method="post">
                <h3 style="text-align: center; color: #fff;">Edit Category</h3>
                <input type="text" name="name" placeholder="Enter New Name" value="<?php echo $editcus['name'] ?>" />
                <input type="email" name="email" placeholder="Enter New Email" value="<?php echo $editcus['email'] ?>" />
                <input type="password" name="password" placeholder="Enter New Password" value="<?php echo $editcus['password'] ?>" />
                <input type="password" name="passwordag" placeholder="Enter New Password Again" value="" />
                <button type="submit" name="update">Submit</button>
            <?php } ?>
            </form>
        </div>
</body>

</html>