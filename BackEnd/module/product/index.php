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