<?php

include("koneksi.php");

// 
if (isset($_POST['daftar'])) {

    // 
    $id = $_POST['id'];
    $nama_satuan = $_POST['nama_satuan'];


    // 
    $sql =  "INSERT INTO satuan (id, nama_satuan) VALUE ('$id', '$nama_satuan')";
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
