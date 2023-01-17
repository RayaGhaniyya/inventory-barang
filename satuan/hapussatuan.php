<?php

include("../koneksi/koneksi.php");

if (isset($_GET['id'])) {


    $id = $_GET['id'];


    $sql = "DELETE FROM satuan WHERE id=$id";
    $query = mysqli_query($db, $sql);


    if ($query) {
        header('Location: listsatuan.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
