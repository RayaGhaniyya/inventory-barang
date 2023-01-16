<?php

include("koneksi.php");


if (!isset($_GET['id'])) {
    header('Location: listpemakaian.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM pemakaian WHERE id=$id";
$query = mysqli_query($db, $sql);
$pemakaian = mysqli_fetch_assoc($query);


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

<form action="proseseditpemakaian.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $kategori['id'] ?>" />
    <div class="container">
        <div class="card card-kategori-edit">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        <label for="nama_barang">Kode pemakaian :</label>
                        <input class="form-control" type="text" name="kode_pemakaian" placeholder="masukkan kode pemakaian" aria-label="default input example" value="<?php echo $pemakaian['kode_pemakaian'] ?>">
                    </div>
                    <div class="col-12">
                        <label for="nama_barang">Id Barang :</label>
                        <input class="form-control" type="text" name="id_barang" placeholder="masukkan id barang" aria-label="default input example" value="<?php echo $pemakaian['id_barang'] ?>">
                    </div>
                    <div class="col-12">
                        <label for="nama_barang">jumlah :</label>
                        <input class="form-control" type="text" name="jumlah" placeholder="masukkan jumlah" aria-label="default input example" value="<?php echo $pemakaian['jumlah'] ?>">
                    </div>
                    <div class="col-12">
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-dark" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>