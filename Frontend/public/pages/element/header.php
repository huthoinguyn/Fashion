<?php if (isset($_GET['signout']) && $_GET['signout'] == 1) {
  unset($_SESSION['signin']);
  header("Location: ./html/form.php");
}
?>
<!-- header -->
<header class="w-full h-[80px] flex justify-around items-center transition-all duration-300 bg-white z-50">
  <div class="logo">
    <img src="./imgs/logo.png" alt="" />
  </div>
  <ul class="flex list-none font-Montserrat font-normal text-[15px] leading-[26px]">
    <li><a href="index.php?page=index">Home</a></li>
    <li><a href="index.php?page=product">Product</a></li>
    <li><a href="index.php?page=blog">Blog</a></li>
    <li><a href="index.php?page=about">About</a></li>
    <li><a href="index.php?page=contact">Contact</a></li>
  </ul>
  <div class="action flex items-center">
    <div class="user icon relative">
      <a href="#" class="">
        <span class="material-symbols-outlined"> person </span>
      </a>
      <div class="user-info hidden absolute rounded-bl-md rounded-br-md shadow-lg top-10 -right-4 w-[200px] p-4 bg-white z-50 flex justify-between flex-col items-center">
        <p><?php if (isset($_SESSION['signin'])) {
              echo $_SESSION['signin'];
            } ?></p>
        <a class="indigo-text hover:text-pri transition-all duration-100" href="index.php?signout=1">Sign out</a>
      </div>
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