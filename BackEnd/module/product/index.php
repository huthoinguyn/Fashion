<?php 
include('handle/pagination.php')
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

    .pagination{
      display: flex;
      list-style: none;
    }
    .pagination li a{
      color: var(--text-color);
      padding: 12px;
      display: block;
      font-size: 20px;
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
        // $query_prod = 'SELECT * FROM products';
        // $result = mysqli_query($conn, $query_prod);
        $query_prod = 'SELECT * FROM products LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
        $result = mysqli_query($conn, $query_prod);
        $i = 0;
        while ($prod = mysqli_fetch_array($result)) {
          $i++;
        ?>
          <li class="items odd">
            <div class="infoWrap">
              <p class="stt"><?php echo $i ?></p>

              <div class="prodSection">
                <img src="<?php echo 'images/' . $prod['image'] ?> " alt="" class="itemImg w-[128px] h-[100px] object-cover" />

                <p class="itemNumber">
                </p>
                <h3><?php echo $prod['name'] ?></h3>

                <p> <?php echo $prod['category'] ?></p>
              </div>

              <!-- <div class='prodqty w-[10%]'></div> -->

              <div class="price">
                <p><?php echo "$" . $prod['price'] ?></p>
              </div>
              <!-- ./handle/handleedit.php?prodId=<?php // echo $prod['id'] 
                                                  ?> -->
              <div class="removeWrap">
                <a href="module/product/feature/edit.php?prodId=<?php echo $prod['id'] ?>" class="prodIcon editProd">
                  <span class="prodIcon material-symbols-outlined">
                    edit_note
                  </span>
                </a>
                <a href="module/product/handle/handleremove.php?prodId=<?php echo $prod['id'] ?>" class="prodIcon remove">
                  <span class="material-symbols-outlined">
                    close
                  </span>
                </a>
              </div>
            </div>
          </li>
        <?php  }
        ?>
      </ul>
      <ul class="pagination">
        <?php
        for ($page = 1; $page <= $number_of_pages; $page++) { ?>
          <li><a href="index.php?manage=product&handle=1&page=<?php echo $page ?>"><?php echo $page ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <script>
    document.body.addEventListener('click', (e) => {
      if (e.target.matches('.add-wrapper')) {
        document.querySelector('.add-wrapper').classList.remove('is-show');
      }
    })
    document.querySelector('.addProd').addEventListener('click', (e) => {
      document.querySelector('.add-wrapper').classList.add('is-show');
    })
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#search-bar').keyup(function() {
        var input = $(this).val();
        if (input != "") {
          $.ajax({
            url: "./handle/handlesearch.php",
            method: "POST",
            data: {
              input: input,
            },
            success: function(data) {
              $('.prodWrap').html(data);
            }
          })
        } else {
          $.ajax({
            url: "./handle/handlesearch.php",
            method: "POST",
            data: {
              keyword: input,
            },
            success: function(data) {
              $('.prodWrap').html(data);
            }
          })
        }
      })
    })
  </script>
</body>

</html>