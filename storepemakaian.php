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
