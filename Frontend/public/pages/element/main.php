<main>
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = '';
    }
    if ($page == 'product') {
        include("html/product.php");
    } elseif ($page == 'blog') {
        include("html/blog.php");
    } elseif ($page == 'about') {
        include("html/about.php");
    } elseif ($page == 'contact') {
        include("html/contact.php");
    } elseif ($page == 'detail') {
        include("html/detail.php");
    } else {
        include("pages/element/index.php");
    }
    ?>
</main>