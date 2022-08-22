<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta ten="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
    <div class="container-fluid" id="history">
        <div class="history">
            <h1 class="text-center">History</h1>
            <table class="table table-striped mx-auto">
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Quantity
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Total
                    </th>
                    <th>
                        Time
                    </th>

                </tr>

                <?php
                if (isset($_SESSION['signin'])) :
                    $conn = new mysqli("localhost", "root", "", "fashion");
                    $cusId = $_GET['cusId'];
                    if ($receipt = $conn->query("SELECT * FROM receipt WHERE id_cus = $cusId")) :
                        while ($hd = $receipt->fetch_assoc()) :
                            $id_hd = $hd['id_hd'];
                            $total = $hd['total'];
                            $time = $hd['time'];

                            $receiptdetail = $conn->query("SELECT * FROM receiptdetail WHERE id_receipt = $id_hd ");
                ?>
                            <tr>
                                <td><?= $id_hd ?></td>

                                <td>
                                    <?php
                                    foreach ($receiptdetail as $rcdt) {
                                        $prodId = $rcdt['id_prod'];
                                        $sanpham = $conn->query("SELECT * FROM products WHERE id = $prodId ");
                                        $sp = $sanpham->fetch_assoc();
                                        $prodname = $sp['name'];
                                        echo $prodname . '<br>';
                                    }
                                    ?>

                                </td>
                                <td>
                                    <?php
                                    foreach ($receiptdetail as $rcdt) {
                                        $quantity = $rcdt['quantity'];
                                        echo $quantity . '<br>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    foreach ($receiptdetail as $rcdt) {
                                        $price = $rcdt['prod_price'];
                                        echo '$' . number_format($price) . '<br>';
                                    }
                                    ?>
                                </td>
                                <td><?= '$' . number_format($total) ?></td>

                                <td><?= $time ?></td>

                            </tr>
                <?php
                        endwhile;
                    endif;
                endif;
                $conn->close();
                ?>

            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>