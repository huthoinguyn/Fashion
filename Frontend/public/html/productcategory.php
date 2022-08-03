<?php
$conn = mysqli_connect("localhost", "root", "", "fashion");

$result = mysqli_query($conn, "SELECT * FROM categories ORDER BY sort ASC");
?>

<?php
$i = 0;
while ($row = mysqli_fetch_array($result)) {
    $i++;
?>
    <li>
        <a href="?cate=<?php echo $row['category'] ?>#prod">
            <?php echo $row['category'] ?>
        </a>
    </li>
<?php } ?>