<?php

include("../koneksi/koneksi.php");


if (isset($_POST['daftar'])) {

    // 
    $id = $_POST['id'];

    $nama_barang = $_POST['nama_barang'];
    $id_satuan = $_POST['id_satuan'];
    $jumlh_stok = $_POST['jumlh_stok'];
    $id_kategori = $_POST['id_kategori'];


    // 
    $sql = "INSERT INTO barang (id, nama_barang, id_satuan, jumlh_stok, id_kategori) VALUE ('$id', '$nama_barang', '$id_satuan', '$jumlh_stok', '$id_kategori')";
    $query = mysqli_query($db, $sql);

    // 
    if ($query) {
        // 
        header('Location: index2.php?status=sukses');
    } else {
        // 
        header('Location: index2.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
