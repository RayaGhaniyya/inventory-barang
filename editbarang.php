<?php

include("koneksi.php");


if (!isset($_GET['id'])) {
    header('Location: listbarang.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM barang WHERE id=$id";
$query = mysqli_query($db, $sql);
$barang = mysqli_fetch_assoc($query);


if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<?php
include('head.php');
?>

<header>
    <p>
        <b>
            Formulir Edit Kategori
    </p>
</header>

<form action="proseseditbarang.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $barang['id'] ?>" />
    <div class="container">
        <div class="card card-kategori-edit">
            <div class="card-body">

                <div class="row">
                    <!-- <div class="col-12">
                        <label for="id_barang">Id Barang :</label>
                        <input class="form-control" type="text" name="id_barang" placeholder="masukkan id barang" aria-label="default input example" value="<?php echo $barang['id_barang'] ?>">
                    </div> -->
                    <div class="col-12">
                        <label for="nama_barang">Nama Barang :</label>
                        <input class="form-control" type="text" name="nama_barang" placeholder="masukkan nama barang" aria-label="default input example" value="<?php echo $barang['nama_barang'] ?>">
                    </div>
                    <div class="col-12">
                        <label for="id_satuan">Id satuan :</label>
                        <input class="form-control" type="text" name="id_satuan" placeholder="masukkan id satuan" aria-label="default input example" value="<?php echo $barang['id_satuan'] ?>">
                    </div>
                    <div class="col-12">
                        <label for="jumlh_stok">Jumlh Stok :</label>
                        <input class="form-control" type="text" name="jumlh_stok" placeholder="masukkan jumlah stok" aria-label="default input example" value="<?php echo $barang['jumlh_stok'] ?>">
                    </div>
                    <div class="col-12">
                        <label for="id_kategori">Id Kategori :</label>
                        <input class="form-control" type="text" name="id_kategori" placeholder="masukkan id kategori" aria-label="default input example" value="<?php echo $barang['id_kategori'] ?>">
                    </div>
                    <div class="col-12">
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-dark" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>