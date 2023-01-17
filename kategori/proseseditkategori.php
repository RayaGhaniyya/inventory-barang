<?php

include("koneksi.php");


if (isset($_POST['simpan'])) {


    $id = $_POST['id'];
    $nama_kategori = $_POST['nama_kategori'];

    $sql = "UPDATE kategori_barang SET nama_kategori='$nama_kategori' WHERE id=$id";
    $query = mysqli_query($db, $sql);


    if ($query) {

        header('Location: listkategori.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
