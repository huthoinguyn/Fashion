<?php
$sql_render_category = "SELECT * FROM categories ORDER BY sort ASC";
$querry_category = mysqli_query($conn, $sql_render_category);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <title>Document</title>
  <link rel="stylesheet" href="./module/css/style.css">
  <link rel="stylesheet" href="./module/css/add.css">
  <style>
    .is-show {
      opacity: 1;
      visibility: visible;
    }

    .backhome {
      position: absolute;
      bottom: 20px;
      right: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <?php include('./module/category/feature/add.php') ?>
  <div class="container">
    <div class="addProd">
      <span class="material-symbols-outlined">
        playlist_add
      </span>
    </div>
    <div class="prod">
      <ul class="prodHead">
        <li class="stt"></li>
        <li style="text-align: left;" class="prodHeader prodSection">Category</li>
        <!-- <li class="">Quantity</li> -->
        <li class="price">Order</li>
        <li style="align-items: unset;" class="removeWrap">More</li>
      </ul>
      <ul class="prodWrap">
        <!--<li class="items even">Item 2</li>-->
        <?php
        $i = 0;
        while ($cate = mysqli_fetch_array($querry_category)) {
          $i++;
        ?>
          <li class="items odd">
            <div class="infoWrap">
              <p class="stt"><?php echo $i ?></p>

              <div class="prodSection">

                <p class="itemNumber">
                </p>

                <h3><?php echo $cate['category'] ?></h3>

                <p> <?php echo $cate['category'] ?></p>

              </div>

              <!-- <div class='prodqty w-[10%]'></div> -->

              <div class="price">
                <p><?php echo $cate['sort'] ?></p>
              </div>
              <!-- ./handle/handleedit.php?prodId=<?php // echo $cate['id'] 
                                                  ?> -->
              <div class="removeWrap">
                <a href="index.php?manage=category&handle=edit&cateId=<?php echo $cate['id'] ?>" class="prodIcon editProd">
                  <span class="prodIcon material-symbols-outlined">
                    edit_note
                  </span>
                </a>
                <a href="module/category/handle/handleremove.php?cateId=<?php echo $cate['id'] ?>" class="prodIcon remove">
                  <span class="material-symbols-outlined">
                    close
                  </span>
                </a>
              </div>
            </div>
          </li>

        <?php } ?>
      </ul>
    </div>
  </div>
  <script src="./js/upload.js"></script>
  <script>
    const $ = document.querySelector.bind(document);

    document.body.addEventListener('click', (e) => {
      if (e.target.matches('.add-wrapper')) {
        $('.add-wrapper').classList.remove('is-show');
      }
    })
    $('.addProd').addEventListener('click', (e) => {
      $('.add-wrapper').classList.add('is-show');
    })
  </script>
</body>

</html>