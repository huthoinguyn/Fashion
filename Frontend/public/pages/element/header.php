<!-- header -->
<header class="w-full h-[80px] flex justify-around items-center transition-all duration-300 bg-white z-50">
  <div class="logo">
    <img src="./imgs/logo.png" alt="" />
  </div>
  <ul class="flex list-none font-Montserrat font-normal text-[15px] leading-[26px]">
    <li class="is-active"><a href="">Home</a></li>
    <li><a href="./html/product.php">Product</a></li>
    <li><a href="./html/blog.php">Blog</a></li>
    <li><a href="./html/about.php">About</a></li>
    <li><a href="./html/contact.php">Contact</a></li>
  </ul>
  <div class="action flex items-center">
    <div class="user icon">
      <a href="./html/form.php" class="">
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
