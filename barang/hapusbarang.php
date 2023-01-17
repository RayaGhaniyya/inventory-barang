<?php

include("../koneksi/koneksi.php");

if (isset($_GET['id'])) {


    $id = $_GET['id'];


    $sql = "DELETE FROM barang WHERE id=$id";
    $query = mysqli_query($db, $sql);


    if ($query) {
        header('Location: listbarang.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
