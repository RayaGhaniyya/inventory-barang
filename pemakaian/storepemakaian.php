<?php

include("koneksi.php");

// 
if (isset($_POST['daftar'])) {

    // 
    $id = $_POST['id'];
    $kode_pemakaian = $_POST['kode_pemakaian'];
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];


    // 
    $sql =  "INSERT INTO pemakaian (id, kode_pemakaian, id_barang, jumlah) VALUE ('$id', '$kode_pemakaian', '$id_barang', '$jumlah')";
    $query = mysqli_query($db, $sql);
    //
    //

    $sqlupdatestok = "UPDATE barang SET jumlh_stok = jumlh_stok - $jumlah WHERE id = $id_barang;";
    $query = mysqli_query($db, $sqlupdatestok);
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
