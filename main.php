<div class="clear"></div>
<div class="main">
    <?php
    if (isset($_GET['action']) && $_GET['query']) {
        $tam = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $tam = '';
        $query = '';
    }
    if ($tam == 'quanlydanhmucsanpham' && $query == 'them') {
        include("module/quanlydanhmucsp/them.php");
        include("module/quanlydanhmucsp/lietke.php");
    } elseif ($tam == 'quanlydanhmucsanpham' && $query = 'sua') {
        include("module/quanlydanhmucsp/sua.php");
    } else {
        include("./dashboard.php");
    }
    ?>
</div>