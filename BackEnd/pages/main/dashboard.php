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

  <?php include('pages/main/chart.php'); ?>
  <div class="activity">
    <div class="title">
      <i class="uil uil-clock-three"></i>
      <span class="text">Recent Activity</span>
    </div>

    <div class="activity-data">
      <div class="data names">
        <span class="data-title">Name</span>
        <span class="data-list">Prem Shahi</span>
        <span class="data-list">Deepa Chand</span>
        <span class="data-list">Manisha Chand</span>
        <span class="data-list">Pratima Shahi</span>
        <span class="data-list">Man Shahi</span>
        <span class="data-list">Ganesh Chand</span>
        <span class="data-list">Bikash Chand</span>
      </div>
      <div class="data email">
        <span class="data-title">Email</span>
        <span class="data-list">premshahi@gmail.com</span>
        <span class="data-list">deepachand@gmail.com</span>
        <span class="data-list">prakashhai@gmail.com</span>
        <span class="data-list">manishachand@gmail.com</span>
        <span class="data-list">pratimashhai@gmail.com</span>
        <span class="data-list">manshahi@gmail.com</span>
        <span class="data-list">ganeshchand@gmail.com</span>
      </div>
      <div class="data joined">
        <span class="data-title">Time</span>
        <span class="data-list">2022-02-12</span>
        <span class="data-list">2022-02-12</span>
        <span class="data-list">2022-02-13</span>
        <span class="data-list">2022-02-13</span>
        <span class="data-list">2022-02-14</span>
        <span class="data-list">2022-02-14</span>
        <span class="data-list">2022-02-15</span>
      </div>
      <div class="data type">
        <span class="data-title">Type</span>
        <span class="data-list">New</span>
        <span class="data-list">Member</span>
        <span class="data-list">Member</span>
        <span class="data-list">New</span>
        <span class="data-list">Member</span>
        <span class="data-list">New</span>
        <span class="data-list">Member</span>
      </div>
      <div class="data status">
        <span class="data-title">Status</span>
        <span class="data-list">Finish</span>
        <span class="data-list">Finish</span>
        <span class="data-list">Pending</span>
        <span class="data-list">Pending</span>
        <span class="data-list">Finish</span>
        <span class="data-list">Pending</span>
        <span class="data-list">Finish</span>
      </div>
    </div>
  </div>
</div>