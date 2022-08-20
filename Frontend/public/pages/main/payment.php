<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/payment.css">
    <style>
        .subtotal {
            width: unset;
            float: unset;
        }

        .subtotal .totalRow {
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .subtotal .totalRow .value {
            text-align: left;

        }

        .form-control {
            width: 100%;
            border-bottom: 1px solid #ccc;
            padding: 6px;
            outline: none;
            margin-bottom: 6px;
            transition: all 300ms;
            border-radius: 4px;
        }

        .form-control:focus {
            color: #e65540;
            border-color: #e65540;
        }
    </style>
</head>

<body>
    <div class="container h-[100vh] flex flex-wrap ">
        <h3 class="w-full text-center hover:text-pri my-4 text-4xl font-bold">Infomation</h3>
        <div class="left flex flex-col w-1/2 h-full">
            <div class="prod w-4/5 mx-auto max-h-[80%]">
                <ul class="prodHead">
                    <li class="stt"></li>
                    <li style="text-align: left;" class="prodHeader prodSection">Product</li>
                    <!-- <li class="">Quantity</li> -->
                    <li class="price">Subtotal</li>
                </ul>
                <ul class="prodWrap">
                    <?php
                    $mysqli = new mysqli("localhost", "root", "", "fashion");


                    $cookie_data = isset($_COOKIE["cart"]) ? $_COOKIE['cart'] : '[]';
                    $cart_data = json_decode($cookie_data, true);

                    $total = 0;
                    $i = 0;
                    foreach ($cart_data as $sp) :
                        $subtotal = $sp['prodprice'] * $sp['quantity'];
                        $total += $subtotal;
                        $i++;
                    ?>
                        <li class="items odd">
                            <div class="infoWrap">
                                <p class="stt"><?php echo $i ?></p>

                                <div class="prodSection">
                                    <img src="<?php echo '../../BackEnd/images/' . $sp['prodimage'] ?>" alt="" class="itemImg w-[128px] h-[100px] object-cover" />

                                    <p class="itemNumber">
                                    </p>
                                    <h3><?php echo $sp['prodname'] ?></h3>

                                    <p class="text-lg"> <span class="text-sm"><?php echo $sp['quantity'] ?> x</span> $<?php echo $sp['prodprice'] ?> </p>
                                </div>

                                <!-- <div class='prodqty w-[10%]'></div> -->

                                <div class="price">
                                    <p><?php echo "$" . $subtotal ?></p>
                                </div>
                                <!-- ./handle/handleedit.php?prodId=<?php // echo $prod['id'] 
                                                                    ?> -->
                            </div>
                        </li>
                    <?php endforeach;
                    ?>
                </ul>
            </div>
            <div class="subtotal cf text-lg w-full h-[20%] flex justify-end pr-32">
                <ul class="flex flex-col h-full">
                    <li class="totalRow">
                        <span class="label">Subtotal:</span><span class="value subtotal">$<?php echo $total ?></span>
                    </li>

                    <?php
                    $tax = 4;
                    $ship = 0;
                    if ($total <= 100) {
                        $ship = 5;
                    }
                    $total += $ship + $tax;
                    ?>
                    <li class="totalRow">
                        <span class="label">Shipping: </span><span class="value ship">$<?php echo $ship ?></span>
                    </li>

                    <li class="totalRow">
                        <span class="label">Tax: </span><span class="value tax">$<?php echo $tax  ?></span>
                    </li>
                    <li class="totalRow final">
                        <span class="label">Total: </span><span class="value">$<?php echo $total ?></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right w-1/2">
            <?php
            $conn = new mysqli("localhost", "root", "", "fashion");
            $email = $_SESSION['signin'];
            $query = "SELECT * FROM customer WHERE email='$email'";
            // if ($conn->query($query)->num_rows = 0) {

            //     header('location: sanpham-ds.php');
            // }
            $customer = $conn->query($query)->fetch_assoc();
            ?>
            <form class="w-4/5 mx-auto pt-7" action="handle/handlepayment.php" method="post">
                <input type="hidden" name="cusId" value="<?php echo $customer['id'] ?>">
                <div class="form-group">
                    <label for="username">Name</label>
                    <input type="text" name="username" id="" class="form-control" value="<?php echo $customer['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="" rows="4" class="form-control" required></textarea>
                </div>
                <input type="hidden" name="total" id="" value="<?= $total ?>">

                <button class="ct-button mt-4 px-8 py-2 rounded-sm btn btn-outline-dark" name="buy">Buy</button>
            </form>
            <?php $conn->close() ?>
        </div>
    </div>
</body>

</html>