<?php

include("koneksi.php");

// 
if (isset($_POST['daftar'])) {

    // 
    $id = $_POST['id'];
    $nama_kategori = $_POST['nama_kategori'];


    // 
    $sql =  "INSERT INTO kategori_barang (id, nama_kategori) VALUE ('$id', '$nama_kategori')";
    $query = mysqli_query($db, $sql);

    // 
    if ($query) {
        // 
        header('Location: index.php?status=sukses');
    } else {
        //
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
