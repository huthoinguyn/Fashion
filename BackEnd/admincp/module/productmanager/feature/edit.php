<?php
include('../../../config/config.php');
$sql_edit = "SELECT * FROM products WHERE id='$_GET[prodId]' LIMIT 1";
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
    while ($editprod = mysqli_fetch_array($querry_edit)) {
        $i++;
    ?>
        <div class="edit-wrapper">
            <form action="../handle/handleedit.php?prodId=<?php echo $editprod['id'] ?>" method="post" enctype="multipart/form-data">
                <h3 style="text-align: center; color: #fff;">Edit Product</h3>
                <input type="text" name="title" placeholder="Enter Title" value="<?php echo $editprod['name'] ?>" />
                <input type="text" name="price" placeholder="Enter Price" value="<?php echo $editprod['price'] ?>" />
                <select name="category">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "fashion");
                    $result = mysqli_query($conn, "SELECT * FROM categories ORDER BY sort ASC");
                    ?>
                    <option selected value="<?php echo $editprod['category'] ?>">Category</option>

                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        $i++;
                    ?>
                        <option <?php //if ($editprod['category'] == $row['category']) echo 'selected'  
                                ?> value="<?php echo $row['category'] ?>"><?php echo $row['category'] ?></option>
                    <?php } ?>
                </select>
                <div id="file-upload-form" class="uploader">
                    <h3>Upload Image</h3>
                    <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

                    <label for="file-upload" id="file-drag">
                        <img id="file-image" src="../../../../images/<?php echo $editprod['image'] ?>" alt="Preview" class="" />
                        <div id="start" class="hidden">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            <div>Select a file or drag here</div>
                            <div id="notimage" class="hidden">Please select an image</div>
                            <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                        </div>
                        <div id="response" class="hidden">
                            <div id="messages"></div>
                            <progress class="progress" id="file-progress" value="0">
                                <span>0</span>%
                            </progress>
                        </div>
                    </label>
                </div>
                <button type="submit" name="update">Submit</button>
            <?php } ?>
            </form>
        </div>
        <script src="../js/upload.js"></script>
</body>

</html>