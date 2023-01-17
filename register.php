<?php

include('koneksi/koneksi.php');
include('head.php')
?>

<?php
error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: indexlogin.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM userlogin WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO userlogin (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);

            // if ($result) {
            //     echo "<script>alert('Selamat, registrasi berhasil!')</script>";
            //     $username = "";
            //     $email = "";
            //     $_POST['password'] = "";
            //     $_POST['cpassword'] = "";
            // } else {
            //     echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            // }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}

?>

<div class="container">
    <form action="register.php" method="POST" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
        <div class="input-group">
            <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
        </div>
        <div class="input-group">
            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
        </div>
        <div class="input-group">
            <button name="submit" class="btn btn-primary">Register</button>
        </div>
        <p class="login-register-text">Anda sudah punya akun? <a href="indexlogin.php">Login </a></p>
    </form>
</div>