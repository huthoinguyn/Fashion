<?php
include('../../config/config.php');
$sql_render_cus = "SELECT * FROM customer ORDER BY id DESC";
$querry_cus = mysqli_query($conn, $sql_render_cus);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css" />
    <style>
        .backhome {
            position: absolute;
            bottom: 20px;
            right: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="prod">
            <div class="prod-title">
                Customer Manager
            </div>
            <ul class="prodHead">
                <li class="stt"></li>
                <li style="text-align: left;" class="prodHeader prodSection">Customer</li>
                <!-- <li class="">Quantity</li> -->
                <li class="price">Password</li>
                <li style="align-items: unset;" class="removeWrap">More</li>
            </ul>
            <ul class="prodWrap">
                <!--<li class="items even">Item 2</li>-->
                <?php
                $i = 0;
                while ($cus = mysqli_fetch_array($querry_cus)) {
                    $i++;
                ?>
                    <li class="items odd">
                        <div class="infoWrap">
                            <p class="stt"><?php echo $i ?></p>

                            <div class="prodSection">
                                <p class="itemNumber">
                                </p>

                                <h3><?php echo $cus['name'] ?></h3>

                                <p> <?php echo $cus['email'] ?></p>

                            </div>

                            <!-- <div class='prodqty w-[10%]'></div> -->

                            <div class="price">
                                <p><?php echo $cus['password'] ?></p>
                            </div>
                            <!-- ./handle/handleedit.php?prodId=<?php // echo $cus['id'] 
                                                                ?> -->
                            <div class="removeWrap">
                            </div>
                        </div>
                    </li>

                <?php } ?>
            </ul>
        </div>
        <div class="backhome">
            <a href="../../../">
                Back Home
                <!-- <span class="material-symbols-outlined">
          low_priority
        </span> -->
            </a>
        </div>
    </div>
    <script>
        const $ = document.querySelector.bind(document);
    </script>
</body>

</html>