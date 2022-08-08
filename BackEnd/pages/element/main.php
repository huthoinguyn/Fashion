<main class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <h3><?php echo isset($_GET['manage']) ? $_GET['manage'] : 'dashboard' ?> Manager</h3>
        <div class=""></div>
    </div>
    <?php
    if (isset($_GET['manage'])) {
        $temp = $_GET['manage'];
    } else {
        $temp = '';
    }
    if ($temp == 'product') {
        include("module/product/index.php");
    } elseif ($temp == 'customer') {
        include("module/customer/customer.php");
    } elseif ($temp == 'category') {
        include("module/category/category.php");
    } else {
        include("./pages/main/dashboard.php");
    }
    ?>
</main>