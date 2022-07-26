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
  <div id="loading">
    <div class="blur"></div>
    <div class="load">
      <hr />
      <hr />
      <hr />
      <hr />
    </div>
  </div>
  <div id="root" class="max-w-screen-2xl w-full mx-auto">
    <div id="cart" class="cart-container fixed inset-0 z-50 hidden">
      <div class="fixed max-w-screen-lg h-[600px] z-[999] mx-auto inset-0 top-1/2 -translate-y-[50%] rounded-md bg-white shadow-2xl">
        <div class="wrap cf h-[100%]">
          <div class="heading cf h-[10%]">
            <h1>My Cart</h1>
            <a href="#" class="continue">Continue Shopping</a>
          </div>
          <div class="cart h-[65%] overflow-y-auto">
            <ul class="tableHead">
              <li class="prodHeader w-[60%]">Product</li>
              <li class="w-[10%]">Quantity</li>
              <li class="w-[20%]">Total</li>
              <li class="w-[10%]">Remove</li>
            </ul>
            <ul class="cartWrap">
              <!--<li class="items even">Item 2</li>-->
            </ul>
          </div>
          <div class="subtotal cf h-[25%]">
            <ul>
              <li class="totalRow">
                <span class="label">Subtotal</span><span class="value">$35.00</span>
              </li>

              <li class="totalRow">
                <span class="label">Shipping</span><span class="value">$5.00</span>
              </li>

              <li class="totalRow">
                <span class="label">Tax</span><span class="value">$4.00</span>
              </li>
              <li class="totalRow final">
                <span class="label">Total</span><span class="value">$44.00</span>
              </li>
              <li class="totalRow">
                <a href="#" class="btn continue">Checkout</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="banner w-full h-[45px] leading-[45px] text-center bg-gray-200">
      Free shipping for standard order over $100
    </div>
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
    <footer class="flex p-11 gap-7 text-gray-400 bg-gray-100 text-sm font-normal leading-6">
      <!-- Get in touch -->
      <div class="getintouch w-[40%] pt-8 px-4">
        <h3 class="uppercase text-base leading-6 font-bold pb-8 text-gray-900">
          GET IN TOUCH
        </h3>
        <p class="">
          Any questions? Let us know in store at 8th floor, 379 Hudson St, New
          York, NY 10018 or call us on (+1) 96 716 6879
        </p>
        <div class="social-media">
          <a href=""><i class="fa-brands fa-facebook-f"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-pinterest-p"></i></a>
          <a href=""><i class="fa-brands fa-snapchat"></i></a>
          <a href=""><i class="fa-brands fa-github"></i></a>
        </div>
      </div>
      <!-- Categories -->
      <div class="categories w-[10%] pt-8 px-4">
        <h3 class="uppercase text-base leading-6 font-bold pb-8 text-gray-900">
          CATEGORIES
        </h3>
        <ul class="">
          <li>Men</li>
          <li>Women</li>
          <li>Dresses</li>
          <li>Sunglasses</li>
        </ul>
      </div>
      <!-- Link -->
      <div class="Link w-[10%] pt-8 px-4">
        <h3 class="uppercase text-base leading-6 font-bold pb-8 text-gray-900">
          LINKS
        </h3>
        <ul>
          <li>Search</li>
          <li>About Us</li>
          <li>Contact Us</li>
          <li>Returns</li>
        </ul>
      </div>
      <!-- Help -->
      <div class="Help w-[10%] pt-8 px-4">
        <h3 class="uppercase text-base leading-6 font-bold pb-8 text-gray-900">
          HELP
        </h3>
        <ul>
          <li>Track Order</li>
          <li>Returns</li>
          <li>Shipping</li>
          <li>FAQs</li>
        </ul>
      </div>
      <!-- Newletter -->
      <div class="Newletter w-[30%] pt-8 px-4">
        <h3 class="uppercase text-base leading-6 font-bold pb-8 text-gray-900">
          NEWSLETTER
        </h3>
        <div class="subcribe flex flex-col">
          <input type="email" placeholder="email@example.com" class="border-b outline-none p-2 bg-transparent border-gray-300 text-gray-800" />
          <button class="ct-button mt-5 px-4 py-2">Subcribe</button>
        </div>
      </div>
    </footer>
  </div>
  <script>
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
    const loading = $("#loading");
    const header = $("header");
    const banner = $(".banner");
    window.addEventListener("load", () => {
      loading.style.display = "none";
      document.body.style = "overflow:auto; height:auto; position:relative";
    });
    window.addEventListener("scroll", () => {
      if (window.scrollY > banner.offsetHeight) {
        document.body.style.paddingTop = `${header.offsetHeight}px`;
        header.classList.add("is-fixed");
      } else {
        header.classList.remove("is-fixed");
        document.body.style.paddingTop = 0;
      }
    });
  </script>
  <script src="../js/cart.js"></script>
</body>

</html>