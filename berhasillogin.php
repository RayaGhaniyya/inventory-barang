<?php
include('head.php');
include('koneksi/koneksi.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: indexlogin.php");
}

?>

<div class="container-logout">
    <form action="" method="POST" class="login-email">
        <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] . "!" . "</h1>"; ?>

        <div class="input-group">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </form>
</div>