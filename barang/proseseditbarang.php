<?php

include("../koneksi/koneksi.php");


if (isset($_POST['simpan'])) {

    print_r($_POST);
    $id = $_POST['id'];
    // $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $id_satuan = $_POST['id_satuan'];
    $jumlh_stok = $_POST['jumlh_stok'];
    $id_kategori = $_POST['id_kategori'];

    $sql = "UPDATE barang SET  nama_barang='$nama_barang', id_satuan='$id_satuan', jumlh_stok='$jumlh_stok', id_kategori='$id_kategori' WHERE id=$id";
    $query = mysqli_query($db, $sql);


    if ($query) {

        header('Location: listbarang.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
