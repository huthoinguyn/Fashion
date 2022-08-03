<?php
$conn = mysqli_connect("localhost", "root", "", "fashion");
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['signin'])) {
    $querry_customer = "SELECT * FROM customer WHERE email = '" . $email . "' AND password = '" . $password . "' LIMIT 1 ";
    $result = mysqli_query($conn, $querry_customer);
    if (mysqli_num_rows($result) == 1) {
        header('Location: ../');
    } else {
?>
        <script>
            alert('Sai email hoặc mật khẩu');
        </script>
<?php
        header('Location: ../html/form.php');
    }
}

?>