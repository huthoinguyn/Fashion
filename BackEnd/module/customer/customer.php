<?php
$sql_render_cus = "SELECT * FROM customer ORDER BY id DESC";
$querry_cus = mysqli_query($conn, $sql_render_cus);
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
  </style>
</head>

<body>
  <div class="container">
    <div class="prod">
      <ul class="prodHead">
        <li class="stt"></li>
        <li style="text-align: left;" class="prodHeader prodSection">Customer</li>
        <!-- <li class="">Quantity</li> -->
        <li class="price">Password</li>
        <li style="align-items: unset;" class="removeWrap">More</li>
      </ul>
      <ul class="prodWrap">
        <!--<li class="items even">Item 2</li>-->
        <?php
        $i = 0;
        while ($cus = mysqli_fetch_array($querry_cus)) {
          $i++;
        ?>
          <li class="items odd">
            <div class="infoWrap">
              <p class="stt"><?php echo $i ?></p>

              <div class="prodSection">
                <p class="itemNumber">
                </p>

                <h3><?php echo $cus['name'] ?></h3>

                <p> <?php echo $cus['email'] ?></p>

              </div>

              <!-- <div class='prodqty w-[10%]'></div> -->

              <div class="price">
                <p><?php echo $cus['password'] ?></p>
              </div>
              <!-- ./handle/handleedit.php?prodId=<?php // echo $cus['id'] 
                                                  ?> -->
              <div class="removeWrap">
                <a href="index.php?manage=customer&handle=edit&cusId=<?php echo $cus['id'] ?>" class="prodIcon editProd">
                  <span class="prodIcon material-symbols-outlined">
                    edit_note
                  </span>
                </a>
                <a href="module/customer/handle/handleremove.php?cusId=<?php echo $cus['id'] ?>" class="prodIcon remove">
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
</body>

</html>