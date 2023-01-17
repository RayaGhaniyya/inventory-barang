<?php

include("../koneksikoneksi.php");

if( isset($_GET['id']) ){

    
    $id = $_GET['id'];

   
    $sql = "DELETE FROM kategori WHERE id=$id";
    $query = mysqli_query($db, $sql);

    
    if( $query ){
        header('Location: listkategori.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
