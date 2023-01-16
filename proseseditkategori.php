<?php

include("koneksi.php");


if (isset($_POST['simpan'])) {


    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];

    $sql = "UPDATE kategori_barang SET nama_barang='$nama_barang' WHERE id=$id";
    $query = mysqli_query($db, $sql);


    if ($query) {

        header('Location: listkategori.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
