<main>
    <?php

    if (isset($_GET['action'])) {
        $temp = $_GET['action'];
    } else {
        $temp = '';
    }
    if ($temp == 'productmanager') {
        include("./admincp/module/productmanager/index.php");
    }else{
        include("./pages/element/content");
    }
    ?>
</main>