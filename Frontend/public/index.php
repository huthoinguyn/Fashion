<?php
session_start();
if (!isset($_SESSION['signin'])) {
  header('Location: ./html/form.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="./output.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/loading.css" />
  <link rel="stylesheet" href="./css/cart.css" />
  <link rel="stylesheet" href="./css/footer.css" />
  <style></style>
</head>

<body>
  <?php
  include('./pages/element/loading.php')
  ?>
  <div id="root" class="max-w-screen-2xl w-full mx-auto overflow-hidden">
    <?php
    include('./pages/element/banner.php');
    include('./pages/element/header.php');
    include('./pages/element/cart.php');
    include('./pages/element/main.php');
    include('./pages/element/footer.php');
    ?>
  </div>
  <script src="./js/load.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/cart.js"></script>
  <script src="js/detail.js"></script>

</body>

</html>