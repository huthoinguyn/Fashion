<?php
session_start();
// thêm vào giỏ hàng 
if (isset($_POST['addcart'])) {
    $mysqli = new mysqli("localhost", "root", "", "fashion");

    $prodId = isset($_POST['prodId']) ? $_POST['prodId'] : '';

    $sanpham = $mysqli->query("SELECT * FROM products WHERE id = $prodId ");
    $sp = $sanpham->fetch_assoc();
    $prodName = $sp['name'];
    $prodImage = $sp['image'];
    $prodPrice = $sp['price'];
    $cus = $_SESSION['signin'];

    if (isset($_COOKIE['cart'])) {
        // nếu đã tồn tại cookie cart thì lấy giá trị của cookie cart 
        // nếu đã tồn tại cookie cart thì lấy giá trị của cookie cart 
        $cookie_data = $_COOKIE['cart'];

        // chuyển string thành array 
        $cart_data = json_decode($cookie_data, true);
    } else {
        $cart_data = array();
    }

    $prodId_ds = array_column($cart_data, 'prodId');

    // kiểm tra prodId có tồn tại trong cookie cart chưa 
    if (in_array($prodId, $prodId_ds)) {
        foreach ($cart_data as $key => $value) {
            // nếu có thì tăng có lượng sản phẩm 

            if ($cart_data[$key]['prodId'] == $prodId) {
                $cart_data[$key]['quantity'] = $cart_data[$key]['quantity'] + 1;
            }
        }
    } else {
        // nếu chưa có thì thêm vào cookie cart 
        $product_array = array(
            'prodId' => $prodId,
            'prodname' => $prodName,
            'prodprice' => $prodPrice,
            'quantity' => 1,
            'prodimage' => $prodImage,
            'customer' => $cus

        );
        $cart_data[] = $product_array;
    }

    // chuyển array thành string để lưu vào cookie cart 
    $product_data = json_encode($cart_data);

    // lưu cookie 
    setcookie('cart', $product_data, time() +  3600 * 24 * 30 * 12, '/');


    header('location: ../index.php?page=product');
}

// sửa số lượng sản phẩm trong giỏ hàng 
if (isset($_POST['sua'])) {

    $prodId = $_POST['prodId'];
    $prodQty = $_POST['quantity'];
    $prodName = $_POST['prodname'];
    $prodImage = $_POST['prodimage'];
    $prodPrice = $_POST['prodprice'];
    $cus = $_SESSION['signin'];

    if (isset($_COOKIE['cart'])) {
        $cookie_data = $_COOKIE['cart'];
        $cart_data = json_decode($cookie_data, true);
    } else {
        $cart_data = array();
    }

    $prodId_ds = array_column($cart_data, 'prodId');

    if (in_array($prodId, $prodId_ds)) {
        foreach ($cart_data as $key => $value) {
            if ($cart_data[$key]['prodId'] == $prodId) {
                $cart_data[$key]['quantity'] =  $prodQty;
            }
        }
    } else {
        $product_array = array(
            'prodId' => $prodId,
            'prodname' => $prodName,
            'prodprice' => $prodPrice,
            'quantity' => 1,
            'prodimage' => $prodImage,
            'customer' => $cus
        );
        $cart_data[] = $product_array;
    }

    $product_data = json_encode($cart_data);
    setcookie('cart', $product_data, time() + 3600 * 24 * 30 * 12, '/');

    header('location: ../index.php?page=product');
}

// xóa sản phẩm trong giỏ hàng 
if (isset($_POST['delcart'])) {
    // if (isset($_COOKIE['cart'])) {
    $cookie_data = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";;
    $cart_data = json_decode($cookie_data, true);
    foreach ($cart_data as $key => $value) {
        if ($cart_data[$key]['prodId'] == $_POST['prodId']) {
            unset($cart_data[$key]);
            $product_data = json_encode($cart_data);

            setcookie("cart", $product_data, time() +  3600 * 24 * 30 * 12, '/');
        }
    }
}
header('location: ../index.php?page=product');
// }

// xóa cookie giỏ hàng
if (isset($_POST['xoatatca'])) {
    if (isset($_COOKIE['cart'])) {
        setcookie("cart", "", time() -  3600 * 24 * 30 * 12, '/');
    }
    header('location: ../index.php?page=product');
}
