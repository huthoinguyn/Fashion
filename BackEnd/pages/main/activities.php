<div class="activity">
    <div class="title">
        <i class="uil uil-clock-three"></i>
        <span class="text">Recent Activity</span>
    </div>

    <div class="activity-data">
        <div class="data names">
            <span class="data-title">Name</span>
        </div>
        <div class="data email">
            <span class="data-title">Phone</span>
        </div>
        <div class="data joined">
            <span class="data-title">Time</span>
        </div>
        <div class="data type">
            <span class="data-title">Type</span>
        </div>
        <div class="data status">
            <span class="data-title">Status</span>
        </div>
    </div>
    <?php
    $conn = new mysqli("localhost", "root", "", "fashion");

    $sql_render_cus = "SELECT * FROM receipt r INNER JOIN customer c ON r.id_cus = c.id ORDER BY r.id_hd ASC";
    $querry_cus = mysqli_query($conn, $sql_render_cus);

    $sql_chitiethoadon = "SELECT * FROM receiptdetail ORDER BY id_receipt DESC";
    $querry_chitiethoadon = mysqli_query($conn, $sql_chitiethoadon);
    ?>




    <?php
    while ($chitiethoadon = mysqli_fetch_array($querry_chitiethoadon)) {
    ?>

        <?php
        while ($cus = mysqli_fetch_array($querry_cus)) {
        ?>
            <div class="activity-data">
                <div class="data names">
                    <span class="data-list"><?php echo $cus['name'] ?></span>
                </div>
                <div class="data email">
                    <span class="data-list"><?php echo $cus['phone'] ?></span>
                </div>
                <div class="data joined">
                    <span class="data-list"><?php echo $cus['time'] ?></span>
                </div>
                <div class="data type">
                    <span class="data-list">New</span>
                </div>
                <div class="data status">
                    <span class="data-list">Pending</span>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</div>