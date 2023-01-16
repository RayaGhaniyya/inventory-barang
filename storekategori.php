<?php

include("koneksi.php");

// 
if (isset($_POST['daftar'])) {

    // 
    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];


    // 
    $sql =  "INSERT INTO kategori_barang (id, nama_barang) VALUE ('$id', '$nama_barang')";
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
