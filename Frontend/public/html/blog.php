<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="../output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/loading.css" />
  <link rel="stylesheet" href="../css/cart.css" />
  <link rel="stylesheet" href="../css/blog.css" />
  <link rel="stylesheet" href="../output.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
  <?php include('../pages/element/loading.php') ?>
  <div id="root" class="max-w-screen-2xl w-full mx-auto">
    <!-- cart -->
    <?php
    include('../pages/element/cart.php');
    // banner
    include('../pages/element/banner.php')
    ?>
    <!-- header -->
    <header class="w-full h-[80px] flex justify-around items-center transition-all bg-white z-50">
      <div class="logo">
        <img src="../imgs/logo.png" alt="" />
      </div>
      <ul class="flex list-none font-Montserrat font-normal text-[15px] leading-[26px]">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../html/product.php">Product</a></li>
        <li class="is-active"><a href="#">Blog</a></li>
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
    <div style="background-image: url('../imgs/slider-blog.webp');" class=" h-[239px] flex flex-col items-center justify-center text-white">
      <h2 class="text-5xl leading-[56px] font-bold">Blog</h2>
    </div>
    <!-- Content -->
    <content class="pt-16">
      <div class="wrap max-w-screen-xl mx-auto flex justify-between">
        <!-- Blog list -->
        <div class="blog-list w-[70%]">
          <!-- Blog item -->
        </div>

        <aside class="w-[25%]">
          <!-- Categories -->
          <div class="categories">
            <h3 class="title pb-8 pt-14 font-extrabold text-2xl leading-7 text-gray-800 capitalize">
              categories
            </h3>
            <ul>
              <li>Fashion</li>
              <li>Beaty</li>
              <li>Street Style</li>
              <li>Life Style</li>
              <li>DIY & Crafts</li>
            </ul>
          </div>
          <!-- Featured products -->
          <div class="featured-products">
            <h3 class="title pb-8 pt-14 font-extrabold text-2xl leading-7 text-gray-800 capitalize">
              Featured Products
            </h3>
            <div class="featured-product-list"></div>
          </div>
          <!-- Tags -->
          <div class="tags">
            <h3 class="title pb-4 pt-14 font-extrabold text-2xl leading-7 text-gray-800 capitalize">
              Tags
            </h3>
            <div class="tag-list flex flex-wrap gap-1">
              <span>Fashion</span>
              <span>LifeStyle</span>
              <span>Denim</span>
              <span>StreetStyle</span>
              <span>Crafts</span>
            </div>
          </div>
        </aside>
      </div>
    </content>
    <!-- Footer -->
    <?php include('../pages/element/footer.php') ?>
  </div>
  <script src="../js/load.js"></script>
  <script src="../js/cart.js"></script>
  <script src="../js/blogrender.js"></script>
</body>

</html>