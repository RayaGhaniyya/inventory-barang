<?php

include("../koneksi/koneksi.php");


if (isset($_POST['daftar'])) {

    // 
    $id = $_POST['id'];
    $kode_pembelian = $_POST['kode_pembelian'];
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];


    // 
    $sql = "INSERT INTO pembelian (kode_pembelian, id_barang, jumlah, harga) VALUE ('$kode_pembelian', '$id_barang', '$jumlah', '$harga')";
    $query = mysqli_query($db, $sql);

    // update stok barang
    $sqlupdatestok = "UPDATE barang SET jumlh_stok = jumlh_stok + $jumlah WHERE id = $id_barang;";
    $query = mysqli_query($db, $sqlupdatestok);

    // 
    if ($query) {
        // 
        header('Location: ../index2.php?status=sukses');
    } else {
        // 
        header('Location: ../index2.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
