<div class="add-wrapper is-hidden">
    <form action="module/product/handle/handleadd.php" method="post" enctype="multipart/form-data">
        <h3 style="text-align: center; color: #fff;">Add Product</h3>
        <input type="text" name="title" placeholder="Enter Title" />
        <input type="text" name="price" placeholder="Enter Price" />
        <select name="category">
            <?php
            $conn = mysqli_connect("localhost", "root", "", "fashion");
            $result = mysqli_query($conn, "SELECT * FROM categories ORDER BY sort ASC");
            ?>
            <option selected value="category">Category</option>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                $i++;
            ?>
                <option value="<?php echo $row['category'] ?>"><?php echo $row['category'] ?></option>
            <?php } ?>
        </select>
        <div id="file-upload-form" class="uploader">
            <h3>Upload Image</h3>
            <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

            <label for="file-upload" id="file-drag">
                <img id="file-image" src="#" alt="Preview" class="hidden" />
                <div id="start">
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
        <button type="submit" name="add">Add</button>
    </form>
</div>