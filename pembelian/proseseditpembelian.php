<?php

include("koneksi.php");

if( isset($_POST['id']) ){

    
    $id = $_POST['id'];
    $kode_pembelian = $_POST['kode_pembelian'];
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
   
    $sql = "UPDATE pembelian SET kode_pembelian='$kode_pembelian', id_barang='$id_barang', jumlah='$jumlah', harga='$harga'  WHERE id=$id";
    $query = mysqli_query($db, $sql);

    
    if( $query ){
        header('Location: listpembelian.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>