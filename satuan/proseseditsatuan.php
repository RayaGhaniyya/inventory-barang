<?php

include("../koneksi/koneksi.php");


if (isset($_POST['simpan'])) {


    $id = $_POST['id'];
    $nama_satuan = $_POST['nama_satuan'];

    $sql = "UPDATE satuan SET nama_satuan='$nama_satuan' WHERE id=$id";
    $query = mysqli_query($db, $sql);


    if ($query) {

        header('Location: listsatuan.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
