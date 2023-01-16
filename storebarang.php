<?php

include("koneksi.php");


if (isset($_POST['daftar'])) {

    // 
    $id = $_POST['id'];
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $id_satuan = $_POST['id_satuan'];
    $jumlh_stok = $_POST['jumlh_stok'];
    $id_kategori = $_POST['id_kategori'];


    // 
    $sql = "INSERT INTO barang (id, id_barang, nama_barang, id_satuan, jumlh_stok, id_kategori) VALUE ('$id', '$id_barang', '$nama_barang', '$id_satuan', '$jumlh_stok', '$id_kategori')";
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
