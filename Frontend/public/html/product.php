<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/product.css" />
  <title>Product</title>
  <style>
    #prod {
      margin-top: 28px;
    }
  </style>
</head>

<body>
    <!-- slider -->
    <div style="background-image: url('imgs/slider-product.jpg');" class=" h-[239px] flex flex-col items-center justify-center text-white">
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
              <li><a href="index.php?page=product#prod">All</a></li>
              <?php include('html/productcategory.php'); ?>
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
        <?php include('handle/renderprod.php'); ?>
      </div>
    </div>
    <!-- Footer -->
  </div>
  <script src="js/render.js"></script>
</body>

</html>