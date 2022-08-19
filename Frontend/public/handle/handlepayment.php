<?php

session_start();
$cus = 0;
if (isset($_POST['buy'])) {
    $conn = new mysqli("localhost", "root", "", "fashion");

    if (isset($_SESSION['signin'])) {

        $cusId = $_POST['cusId'];
        $total = $_POST['total'];
        $username = $_SESSION['username'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $cus = $_POST['cusId'];

        if (isset($_COOKIE['cart'])) {
            $cookie_data = $_COOKIE['cart'];

            $cart_data = json_decode($cookie_data, true);

            $insert_receipt = "INSERT INTO receipt(phone, address, total, id_cus)
                VALUES ('$phone', '$address', '$total', '$cusId')";

            if ($conn->query($insert_receipt)) {
                $id_hd = $conn->insert_id;
                foreach ($cart_data as $key => $value) {
                    $prodId = $value['prodId'];
                    $prodQty = $value['quantity'];
                    $prodPrice = $value['prodprice'];
                    $insert_rd = "INSERT INTO receiptdetail(id_receipt, id_prod, quantity, prod_price)
                                                        VALUES ('$id_hd', '$prodId', '$prodQty', '$prodPrice' )";
                    if ($conn->query($insert_rd)) {
                        setcookie("cart", "", time() -  3600 * 24 * 30 * 12, '/');
                        if (isset($_COOKIE['cart'])) {
                            setcookie("cart", "", time() -  3600 * 24 * 30 * 12, '/');
                        }
                    }
                }
            }
        }
    }
}
header('location: ../index.php?page=receipt&cusId='.$cus);
?>