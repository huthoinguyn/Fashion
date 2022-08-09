<?php
// include('../../config/config.php');
$sql_render_addprod = "SELECT * FROM products ORDER BY id DESC";
$querry_addprod = mysqli_query($conn, $sql_render_addprod);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <title>Document</title>
  <link rel="stylesheet" href="./css/add.css" />
  <link rel="stylesheet" href="./css/style.css" />
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
  <?php include('./module/product/feature/add.php') ?>

  <div class="container">
    <div class="addProd">
      <span class="material-symbols-outlined">
        playlist_add
      </span>
    </div>
    <div class="prod">
      <ul class="prodHead">
        <li class="stt"></li>
        <li style="text-align: left;" class="prodHeader prodSection">Product</li>
        <!-- <li class="">Quantity</li> -->
        <li class="price">Price</li>
        <li style="align-items: unset;" class="removeWrap">More</li>
      </ul>
      <ul class="prodWrap">
        <!--<li class="items even">Item 2</li>-->
        <?php
        $i = 0;
        while ($addprod = mysqli_fetch_array($querry_addprod)) {
          $i++;
        ?>
          <li class="items odd">
            <div class="infoWrap">
              <p class="stt"><?php echo $i ?></p>

              <div class="prodSection">
                <img src=" <?php echo './images/' . $addprod['image'] ?> " alt="" class="itemImg w-[128px] h-[100px] object-cover" />

                <p class="itemNumber">
                </p>

                <h3><?php echo $addprod['name'] ?></h3>

                <p> <?php echo $addprod['category'] ?></p>
              </div>

              <!-- <div class='prodqty w-[10%]'></div> -->

              <div class="price">
                <p><?php echo "$" . $addprod['price'] ?></p>
              </div>
              <!-- ./handle/handleedit.php?prodId=<?php // echo $addprod['id'] 
                                                  ?> -->
              <div class="removeWrap">
                <a href="index.php?manage=product&handle=edit&prodId=<?php echo $addprod['id'] ?>" class="prodIcon editProd">
                  <span class="prodIcon material-symbols-outlined">
                    edit_note
                  </span>
                </a>
                <a href="module/product/handle/handleremove.php?prodId=<?php echo $addprod['id'] ?>" class="prodIcon remove">
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