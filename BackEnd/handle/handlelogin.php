<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "fashion");
$username = $_POST['username'];
$password = md5($_POST['password']);

if (isset($_POST['login'])) {
    $querry_admin = "SELECT * FROM admin WHERE username = '" . $username . "' AND password = '" . $password . "' LIMIT 1 ";
    $result = mysqli_query($conn, $querry_admin);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['login'] = $username;
        header('Location: ../');
    } else {
        header('Location: ../login.php');
        // echo '<script type="text/javascript">alert("username or password not true")</script>';
    }
}

?>
<script>
    alert('Sai username hoặc mật khẩu');
</script>