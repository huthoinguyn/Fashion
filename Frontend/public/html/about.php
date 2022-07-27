<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="../output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/loading.css" />
  <link rel="stylesheet" href="../css/cart.css" />
  <link rel="stylesheet" href="../css/about.css" />
  <link rel="stylesheet" href="../output.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
  </style>
</head>

<body>
  <!-- load -->
  <?php include('../pages/element/loading.php') ?>

  <div id="root" class="max-w-screen-2xl w-full mx-auto">
    <!-- Cart -->
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
        <li><a href="../html/product.php">Product</a></li>
        <li><a href="../html/blog.php">Blog</a></li>
        <li class="is-active"><a href="">About</a></li>
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
    <div style="background-image: url('../imgs/slider-about.jpg');" class=" h-[239px] flex flex-col items-center justify-center text-white">
      <h2 class="text-5xl leading-[56px] font-bold">About</h2>
    </div>
    <!-- content -->
    <div class="pt-16 pb-16">
      <div class=" w-[80%] mx-auto flex justify-center items-center gap-8">
        <div class="image w-[20%] rounded-md overflow-hidden">
          <img src="../imgs/author.jpg" alt="huthoine" class="w-full h-full object-cover" />
        </div>
        <div class="content w-[70%]">
          <h3 class="title py-4 text-2xl leading-7">Our story</h3>
          <p class="desc pb-7 text-gray-500 text-sm leading-6 font-normal">
            Phasellus egestas nisi nisi, lobortis ultricies risus semper nec.
            Vestibulum pharetra ac ante ut pellentesque. Curabitur fringilla
            dolor quis lorem accumsan, vitae molestie urna dapibus.
            Pellentesque porta est ac neque bibendum viverra. Vivamus lobortis
            magna ut interdum laoreet. Donec gravida lorem elit, quis
            condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam
            aliquam imperdiet sodales. Ut fringilla turpis in vehicula
            vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat
            volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus
            sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo
            eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis
            ut commodo efficitur, quam velit convallis ipsum, et maximus enim
            ligula ac ligula. Vivamus tristique vulputate ultricies. Sed vitae
            ultrices orci.
          </p>
          <div class="ml-2 border-l-4 pl-7 text-gray-500 text-sm leading-6 font-normal">
            <p class="pb-3">
              Creativity is just connecting things. When you ask creative
              people how they did something, they feel a little guilty because
              they didn't really do it, they just saw something. It seemed
              obvious to them after a while.
            </p>
            <span class="text-gray-700 font-medium"> - Steve Job’s </span>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php include('../pages/element/footer.php') ?>
  </div>
  <script src="../js/load.js"></script>
  <script src="../js/cart.js"></script>
</body>

</html>