<?php

include('koneksi/koneksi.php');
include('head.php');
?>


<?php

error_reporting(1);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: berhasillogin.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM userlogin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($db, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: berhasillogin.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>


<div class="alert alert-warning" role="alert">
    <?php echo $_SESSION['error'] ?>
</div>

<div class="container">
    <form action="indexlogin.php" method="POST" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
        <div class="input-group">
            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
        </div>
        <div class="input-group">
            <button name="submit" class="btn btn-primary">Login</button>
        </div>
        <p class="login-register-text">Uda punya akun blom? <a href="register.php">Register</a></p>
    </form>
</div>