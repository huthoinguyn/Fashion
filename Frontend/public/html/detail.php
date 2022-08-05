<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <link rel="stylesheet" href="../output.css">
  <link rel="stylesheet" href="../css/loading.css">
  <link rel="stylesheet" href="../css/cart.css">
  <link rel="stylesheet" href="../css/detail.css">
  <title>Detail</title>
  <style>
    .size ul li {
      min-width: 64px;
      text-align: center;
    }

    .size ul li:hover {
      color: #e65540;
      border-color: #e65540;
    }

    .quantity {
      display: flex;
      width: 160px;
    }

    /* it will support chrome and firefox */
    .quantity input[type=number]::-webkit-inner-spin-button,
    .quantity input[type=number]::-webkit-outer-spin-button {
      -webkit-appearance: none;
    }

    .quantity input,
    .quantity button {
      width: 50px;
      font-size: 1.2rem;
      text-align: center;
      background: white;
      border: 1px solid #aaa;
    }

    .quantity input {
      border-left: none;
      border-right: none;
    }

    .addcart button {
      border-radius: unset;
      outline: none;
    }

    .prod-detail ul {
      list-style: circle;
      font-size: 14px;
      padding-left: 12px;
    }
  </style>
</head>

<body>
  <?php include('../pages/element/loading.php') ?>
  <?php
  include('../pages/element/cart.php');
  include('../pages/element/banner.php');
  // banner
  ?>
  <header class="w-full h-[80px] flex justify-around items-center transition-all bg-white z-50">
    <div class="logo">
      <img src="../imgs/logo.png" alt="" />
    </div>
    <ul class="flex list-none font-Montserrat font-normal text-[15px] leading-[26px]">
      <li><a href="../index.php">Home</a></li>
      <li class="is-active"><a href="./product.php">Product</a></li>
      <li><a href="./blog.php">Blog</a></li>
      <li><a href="./about.php">About</a></li>
      <li><a href="./contact.php">Contact</a></li>
    </ul>
    <div class="action flex items-center">
      <div class="user icon">
        <a href="./form.php" class="">
          <span class="material-symbols-outlined"> person </span>
        </a>
      </div>
      <div class="line w-[1px] h-4 mx-4 bg-gray-400"></div>
      <div id="cart-icon" class="icon relative">
        <a href="" class="">
          <span class="material-symbols-outlined"> shopping_cart </span>
        </a>
        <div class="cart-noti w-4 h-4 rounded-full absolute -top-2 -right-2 bg-pri hidden justify-center items-center">
          <p class="text-[10px] text-white"></p>
        </div>
      </div>
    </div>
  </header>
  <div class="content px-3 md:px-0 pt-12 pb-16 flex-col md:flex-row flex justify-around max-w-screen-xl mx-auto">
    <div class="col-left flex gap-3 w-full md:w-2/5 max-h-[500px]">
      <div class="thumbnail flex gap-3 flex-col w-1/5">
        <div class="img overflow-hidden w-full h-1/5">
          <img src="../imgs/fog-02.webp" alt="thumbnail" class="w-full h-full object-cover">
        </div>
        <div class="img overflow-hidden w-full h-1/5">
          <img src="../imgs/fog-03.webp" alt="thumbnail" class="w-full h-full object-cover">
        </div>
        <div class="img overflow-hidden w-full h-1/5">
          <img src="../imgs/fog-04.webp" alt="thumbnail" class="w-full h-full object-cover">
        </div>
        <div class="img overflow-hidden w-full h-1/5">
          <img src="../imgs/fog-05.webp" alt="thumbnail" class="w-full h-full object-cover">
        </div>
      </div>
      <div class="preview w-4/5 overflow-hidden h-full">
        <img src="../imgs/fog-01.webp" alt="detail-image" class="w-full h-full object-cover cursor-zoom-in transition-all duration-300 ease-in-out hover:scale-125">
      </div>
    </div>
    <div class="col-right w-full md:w-2/5">
      <h3 class="name tracking-wider text-gray-800 font-extrabold text-xl">
        FEAR OF GOD
      </h3>
      <h3 class="subname mt-1 mb-3 text-gray-400 font-medium text-xl tracking-wider">
        Fear of God Baseball Jacket
      </h3>
      <div class="price font-semibold text-xl tracking-wider">
        $1,295 <del class="font-medium text-gray-600 text-base">$1,359</del>
      </div>
      <p class="text-sm text-gray-400">May be applicable at checkout</p>
      <div class="size w-full md:w-[80%] mt-8">
        <ul class="flex justify-between mb-3">
          <li class="">
            Size:
          </li>
          <li class="uppercase font-bold underline">
            Size Map
          </li>
        </ul>
        <ul class="flex justify-between mb-3">
          <li class="px-3 py-1 border">
            S
          </li>
          <li class="px-3 py-1 border">
            M
          </li>
          <li class="px-3 py-1 border">
            L
          </li>
          <li class="px-3 py-1 border">
            XL
          </li>
          <li class="px-3 py-1 border">
            XXL
          </li>
        </ul>
      </div>
      <div class="addcart mt-6 flex gap-3">
        <div class="quantity">
          <button class="btnn minus1">-</button>
          <input class="quty" id="id_form-0-quantity" min="0" name="form-0-quantity" value="1" type="number">
          <button class="btnn add1">+</button>
        </div>
        <button class="add-cart ct-button py-2 px-12">
          Add to cart
        </button>
      </div>
      <div class="prod-detail mt-8 ">
        <div class="flex justify-between items-center">
          <h3 class="text-xl text-gray-900 font-bold mb-2">
            Product Details
          </h3>
          <span class="material-symbols-outlined">
            do_not_disturb_on
          </span>
        </div>
        <p class="text-base font-semibold text-gray-900">
          Product code: <span class="text-gray-600 font-normal">#QUE-007544-002</span>
        </p>
        <p class="text-base font-semibold text-gray-900">
          Material/Fabric: <span class="text-gray-600 font-normal">Khaki</span>
        </p>
        <p class="text-base font-semibold text-gray-900">
          Size & fit: <span class="text-gray-600 font-normal">This brand runs true to size to ensure the best fit, we suggest consulting the size chart.</span>
        </p>
        <p class="text-base font-semibold text-gray-900 my-3">
          Jacket by Fear of God
        </p>
        <ul>
          <li>
            Made form khaki
          </li>
          <li>
            Off-shoulder neckline
          </li>
          <li>
            Floral applique detail
          </li>
          <li>
            Long bell sleeves
          </li>
          <li>
            Mini length
          </li>
          <li>
            Regular fit
          </li>
        </ul>
      </div>
      <div class="prod-delivery mt-4 ">
        <div class="flex justify-between items-center">
          <h3 class="text-xl text-gray-900 font-bold mb-2">
            Delivery & Return
          </h3>
          <span class="material-symbols-outlined">
            add_circle
          </span>
        </div>
      </div>
      <div class="seller-details mt-4 ">
        <div class="flex justify-between items-center">
          <h3 class="text-xl text-gray-900 font-bold mb-2">
            Seller Details
          </h3>
          <span class="material-symbols-outlined">
            add_circle
          </span>
        </div>
      </div>
      <ul class="social-media flex gap-3 mt-4 text-gray-500">
        <li>SHARE</li>
        <li><i class="fa-brands fa-facebook-f"></i></li>
        <li><i class="fa-brands fa-instagram"></i></li>
        <li><i class="fa-brands fa-pinterest-p"></i></li>
        <li><i class="fa-brands fa-twitter"></i></li>
      </ul>
    </div>
  </div>
  <?php include('../pages/element/footer.php') ?>
  <script src="../js/load.js"></script>
  <script src="../js/detail.js"></script>
  <script src="../js/cart.js"></script>
</body>

</html>