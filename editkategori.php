<?php

include("koneksi.php");


if (!isset($_GET['id'])) {
    header('Location: listkategori.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM kategori_barang WHERE id=$id";
$query = mysqli_query($db, $sql);
$kategori = mysqli_fetch_assoc($query);


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

<form action="proseseditkategori.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $kategori['id'] ?>" />
    <div class="container">
        <div class="card card-kategori-edit">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        <label for="nama_barang">Nama barang :</label>
                        <input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang" aria-label="default input example" value="<?php echo $kategori['nama_barang'] ?>">

                    </div>
                    <div class="col-12">
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-dark" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>