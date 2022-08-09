<main class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <h3><?php echo isset($_GET['manage']) ? $_GET['manage'] : 'dashboard' ?> Manager</h3>
        <div class=""></div>
    </div>
    <?php
    if (isset($_GET['manage']) && $_GET['handle']) {
        $manage = $_GET['manage'];
        $handle = $_GET['handle'];
    } else {
        $manage = '';
        $handle = '';
    }
    if ($manage == 'product' && $handle == '1') {
        include("module/product/index.php");
    } elseif ($manage == 'product' && $handle == 'edit') {
        include("module/product/index.php");
        include('module/product/feature/edit.php');
    } elseif ($manage == 'customer' && $handle == '1') {
        include("module/customer/customer.php");
    } elseif ($manage == 'customer' && $handle == 'edit') {
        include("module/customer/customer.php");
        include('module/customer/feature/edit.php');
    } elseif ($manage == 'category' && $handle == '1') {
        include("module/category/category.php");
    } 
    elseif ($manage == 'category' && $handle == 'edit') {
        include("module/category/category.php");
        include('module/category/feature/edit.php');
    } else {
        include("./pages/main/dashboard.php");
    }
    ?>
</main>
<!-- <script src="./module/product/js/upload.js"></script> -->
