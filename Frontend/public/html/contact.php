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
        <li><a href="../html/about.php">About</a></li>
        <li class="is-active"><a href="">Contact</a></li>
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
    <div class="w-full pt-16 pb-16">
      <div class="w-full flex justify-center items-center gap-8">
        <div class="map w-[40%] h-full">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62860.63914868875!2d105.72255072784505!3d10.034185113828485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0629f6de3edb7%3A0x527f09dbfb20b659!2zQ-G6p24gVGjGoSwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1658845557769!5m2!1svi!2s" style="border: 0" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full min-h-[560px]"></iframe>
        </div>
        <div class="form w-[40%] text-gray-700 ">
          <h3 class="title pt-4 pb-8 text-3xl leading-7">Send us your message</h3>
          <form action="">
            <input type="text" placeholder="Full Name" />
            <input type="tel" placeholder="Phone Number" />
            <input type="email" placeholder="Email Address" />
            <textarea name="" id="" rows="6" placeholder="Message"></textarea>
            <input type="submit" value="Send" class="ct-button max-w-[160px]">
          </form>
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