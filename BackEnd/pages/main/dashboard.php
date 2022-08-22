<div class="dash-content">
  <div class="overview">
    <div class="title">
      <i class="uil uil-tachometer-fast-alt"></i>
      <span class="text">Dashboard</span>
    </div>

    <div class="boxes">
      <div class="box box1">
        <i class="uil uil-thumbs-up"></i>
        <span class="text">Product</span>
        <?php $conn = mysqli_connect('localhost', 'root', '', 'fashion');
        $query_prod = 'SELECT * FROM products';
        $prod_result = mysqli_query($conn, $query_prod);
        $prod_total = mysqli_num_rows($prod_result);
        if ($prod_total) {
        ?>
          <span class="number"><?php echo $prod_total ?></span>
        <?php
        } else {
        ?>
          <span class="number"> Product Emty</span>
        <?php
        }
        ?>
      </div>
      <div class="box box2">
        <i class="uil uil-comments"></i>
        <span class="text">Customer</span>
        <?php $conn = mysqli_connect('localhost', 'root', '', 'fashion');
        $query_cus = 'SELECT * FROM customer';
        $cus_result = mysqli_query($conn, $query_cus);
        $cus_total = mysqli_num_rows($cus_result);
        if ($cus_total) {
        ?>
          <span class="number"><?php echo $cus_total ?></span>
        <?php
        } else {
        ?>
          <span class="number"> Customer Emty</span>
        <?php
        }
        ?>
      </div>
      <div class="box box3">
        <i class="uil uil-share"></i>
        <span class="text">Cart</span>
        <?php $conn = mysqli_connect('localhost', 'root', '', 'fashion');
        $query_prod = 'SELECT * FROM receipt';
        $prod_result = mysqli_query($conn, $query_prod);
        $prod_total = mysqli_num_rows($prod_result);
        if ($prod_total) {
        ?>
          <span class="number"><?php echo $prod_total ?></span>
        <?php
        } else {
        ?>
          <span class="number"> Cart Emty</span>
        <?php
        }
        ?>
      </div>
    </div>
  </div>

  <?php
   include('pages/main/chart.php');
   include('pages/main/activities.php');
   ?>
  
</div>