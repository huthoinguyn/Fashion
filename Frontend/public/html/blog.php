<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/blog.css" />
</head>

<body>
  <!-- slider -->
  <div style="background-image: url('imgs/slider-blog.webp');" class=" h-[239px] flex flex-col items-center justify-center text-white">
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
            <?php
            $conn = mysqli_connect("localhost", "root", "", "fashion");
            $result = mysqli_query($conn, "SELECT * FROM categories ORDER BY sort ASC");
            ?>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
              $i++;
            ?>
              <li>
                <a href="index.php?page=product&cate=<?php echo $row['category'] ?>#prod">
                  <?php echo $row['category'] ?>
                </a>
              </li>
            <?php } ?>
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

  <script src="js/blogrender.js"></script>
</body>

</html>