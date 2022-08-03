<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="../output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/loading.css" />
  <link rel="stylesheet" href="../css/cart.css" />
  <link rel="stylesheet" href="../css/product.css" />
  <link rel="stylesheet" href="../output.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <title>Product</title>
  <style>
    #prod {
      margin-top: 28px;
    }
  </style>
</head>

<body>
  <?php include('../pages/element/loading.php') ?>
  <div id="root" class="max-w-screen-2xl w-full mx-auto">
    <!-- cart -->
    <?php
    include('../pages/element/cart.php');
    // slider
    include('../pages/element/banner.php')
    ?>
    <!-- header -->
    <header class="w-full h-[80px] flex justify-around items-center transition-all bg-white z-50">
      <div class="logo">
        <img src="../imgs/logo.png" alt="" />
      </div>
      <ul class="flex list-none font-Montserrat font-normal text-[15px] leading-[26px]">
        <li><a href="../index.php">Home</a></li>
        <li class="is-active"><a href="">Product</a></li>
        <li><a href="../html/blog.php">Blog</a></li>
        <li><a href="../html/about.php">About</a></li>
        <li><a href="../html/contact.php">Contact</a></li>
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
    <!-- slider -->
    <div style="background-image: url('../imgs/slider-product.jpg');" class=" h-[239px] flex flex-col items-center justify-center text-white">
      <h2 class="text-5xl leading-[56px] font-bold">Product</h2>
      <p class="text-lg leading-8">New Arrivals Women Collection 2022</p>
    </div>
    <!-- content -->
    <div id="prod">
      <div class="w-full flex justify-center gap-4 pt-12 pb-8">
        <aside class="w-[15%] h-full capitalize p-4">
          <div class="categories pb-12">
            <h3 class="title pb-2 font-bold text-lg leading-7 text-gray-800">
              categories
            </h3>
            <ul>
              <?php include('./productcategory.php'); ?>
            </ul>
          </div>
          <div class="filter">
            <h3 class="title pb-2 font-bold text-lg leading-7 text-gray-800">
              filters
            </h3>
            <div class="price-range border-t border-t-gray-200 pt-5 pb-12">
              <h3 class="title pb-2 font-semibold text-base leading-7 text-gray-600">
                Price
              </h3>
              <div class="filter-wrap">
                <div class="filter-range-wrapper">
                  <div class="filter-range">
                    <div class="filter-range-scale">
                      <div class="filter-range-bar"></div>
                    </div>
                    <button class="filter-range-handle min"></button>
                    <button class="filter-range-handle max"></button>
                  </div>
                </div>

                <div class="filter-interval">
                  <label>from <input type="text" name="min-interval" value="0" /></label>
                  <label>to <input type="text" name="max-interval" value="15000" /></label>
                </div>
              </div>
            </div>
            <div class="color border-t border-t-gray-200 pt-5 pb-12">
              <h3 class="title pb-2 font-semibold text-base leading-7 text-gray-600">
                Color
              </h3>
              <div class="flex gap-1">
                <span class="w-6 h-6 rounded-full bg-[#00BBEC]"></span>
                <span class="w-6 h-6 rounded-full bg-[#2C6ED5]"></span>
                <span class="w-6 h-6 rounded-full bg-[#FFA037]"></span>
                <span class="w-6 h-6 rounded-full bg-[#FF5337]"></span>
                <span class="w-6 h-6 rounded-full bg-[#A88C77]"></span>
                <span class="w-6 h-6 rounded-full bg-[#393939]"></span>
                <span class="w-6 h-6 rounded-full bg-[#CCCCCC]"></span>
              </div>
            </div>
            <button class="ct-button px-4 py-1">filter</button>
          </div>
        </aside>
        <?php include('../handle/renderprod.php'); ?>
      </div>
    </div>
    <!-- Footer -->
    <?php include('../pages/element/footer.php') ?>
  </div>
  <script src="../js/load.js"></script>
  <script src="../js/render.js"></script>
  <script src="../js/cart.js"></script>
</body>

</html>