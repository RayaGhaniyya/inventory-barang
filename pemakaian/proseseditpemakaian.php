<?php

include("koneksi.php");


if (isset($_POST['simpan'])) {


    $id = $_POST['id'];
    $kode_pemakaian = $_POST['kode_pemakaian'];
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];

    $sql = "UPDATE pemakaian SET kode_pemakaian='$kode_pemakaian', id_barang='$id_barang', jumlah='$jumlah' WHERE id=$id";
    $query = mysqli_query($db, $sql);


    if ($query) {

        header('Location: listpemakaian.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
