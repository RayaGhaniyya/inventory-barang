<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Koen gorong login cook !!!')</script>";
    header("Location: /inventory-barang/indexlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css -->
    <link rel="stylesheet" href="/inventory-barang/style/style.css">
    <!-- akhir css -->

    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- bs akhir -->

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- akhir -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="gambar/logoidm.png">

    <title>INVENTORY BARANG</title>
</head>


<body>


    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-family:monospace;">Inventory Barang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/inventory-barang/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/inventory-barang/pembelian/listpembelian.php">Pembelian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/inventory-barang/pemakaian/listpemakaian.php">Pemakaian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/inventory-barang/satuan/listsatuan.php">Satuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/inventory-barang/kategori/listkategori.php">Kategori Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/inventory-barang/barang/listbarang.php">Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/inventory-barang/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>