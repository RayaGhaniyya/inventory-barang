<?php

include("../koneksi/koneksi.php");

// 
if (isset($_POST['daftar'])) {

    // 
    // $id = $_POST['id'];
    $kode_pemakaian = $_POST['kode_pemakaian'];
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];

    $cekstok = mysqli_query($db, "SELECT barang.jumlh_stok FROM barang WHERE id=$id_barang");
    $stok = mysqli_fetch_array($cekstok);
    if($jumlah > $stok['jumlh_stok']){
        echo " <script>
        alert('Stok gak cukup karena anda blom sholat !!!  Silahkan sholat terlebih dahulu');window.location.href='/inventory-barang/pemakaian/formpemakaian.php';
        </script>";
        
    } else {
        
        $sql =  "INSERT INTO pemakaian (kode_pemakaian, id_barang, jumlah) VALUE ('$kode_pemakaian', '$id_barang', '$jumlah')";
        $query = mysqli_query($db, $sql);
    
        $sqlupdatestok = "UPDATE barang SET jumlh_stok = jumlh_stok - $jumlah WHERE id = $id_barang;";
        $query = mysqli_query($db, $sqlupdatestok);
        // 
        if ($query) {
            // 
            header('Location: ../index2.php?status=sukses');
        } else {
            //
            header('Location: ../index2.php?status=gagal');
        }
    }
     

} else {
    die("Akses dilarang...");
}

?>