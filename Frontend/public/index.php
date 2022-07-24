<?php
include("./data.php")
?>

<script>
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "data.php";
    var async = true;

    ajax.open(method, url, async);

    ajax.send();

    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && status == 200) {
            var data = JSON.parse(this.responseText);
        }
    };
</script>