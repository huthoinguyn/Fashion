<?php if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    unset($_SESSION['login']);
    header("Location:login.php");
}
?>
<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="images/avatar.jpg" alt="" />
        </div>

        <span class="logo_name">
            <?php if (isset($_SESSION['login'])) {
                echo $_SESSION['login'];
            } ?>
        </span>
    </div>
    <div class="menu-items">
        <ul class="nav-links">
            <li>
                <a href="index.php?manage=dasboard&handle=1">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a>
            </li>
            <li>
                <a href="index.php?manage=product&handle=1">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Product</span>
                </a>
            </li>
            <li>
                <a href="index.php?manage=category&handle=1">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Category</span>
                </a>
            </li>
            <li>
                <a href="index.php?manage=customer&handle=1">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Customer</span>
                </a>
            </li>
            <li>
                <a href="index.php?manage=blog&handle=1">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Blog</span>
                </a>
            </li>
            <li>
                <a href="index.php?manage=cart&handle=1">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Cart</span>
                </a>
            </li>
        </ul>

        <ul class="logout-mode">
            <li>
                <a href="index.php?logout=1">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a>
            </li>

            <li class="mode">
                <a href="#">
                    <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
        </ul>
    </div>
</nav>
