<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">

</head>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

<body>
    <?php

    include("./pages/element/nav.php");
    include("./pages/element/header.php");
    include("./pages/element/main.php");
    include("./pages/element/footer.php");

    ?>


    <script>
        $('.button-collapse').sideNav();
        $('.collapsible').collapsible();
        $('select').material_select();
    </script>
</body>

</html>