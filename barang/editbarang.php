<?php

include(".../koneksi/koneksi.php");


if (!isset($_GET['id'])) {
    header('Location: listbarang.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM barang WHERE id=$id";
$query = mysqli_query($db, $sql);
$barang = mysqli_fetch_assoc($query);
$sqlsatuan = "SELECT * FROM satuan";
$querysatuan = mysqli_query($db, $sqlsatuan);
$sqlkategori = "SELECT * FROM kategori_barang";
$querykategori = mysqli_query($db, $sqlkategori);


if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<?php
include('../head.php');
?>

<header>
    <p>
        <b>
            EDIT BARANG
        </b>
    </p>
</header>

<form action="proseseditbarang.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $barang['id'] ?>" />



    <div class="container">
        <div class="card card-barang-edit">
            <div class="card-body">

                <div class="row">
                    <div class="col-6">
                        <label for="nama_barang">Nama Barang :</label>
                        <input class="form-control" type="text" name="nama_barang" placeholder="masukkan nama barang" aria-label="default input example" value="<?php echo $barang['nama_barang'] ?>">
                    </div>

                    <div class="col-md-6">
                        <label for="id_satuan">Pilih Satuan: </label>
                        <select name="id_satuan" class="form-control" aria-label="default input example">
                            <option value="">Pilih Satuan</option>
                            <?php
                            while ($satuan = mysqli_fetch_assoc($querysatuan)) {
                                $selected = $satuan['id'] == $barang['id_satuan'] ? 'selected' : '';
                                echo "<option value=" . $satuan['id'] . " $selected>" . $satuan['nama_satuan'] . "</option>";
                            } ?>
                        </select>

                    </div>
                    <div class="col-6">
                        <label for="jumlh_stok">Jumlh Stok :</label>
                        <input class="form-control" type="text" name="jumlh_stok" placeholder="masukkan jumlah stok" aria-label="default input example" value="<?php echo $barang['jumlh_stok'] ?>">
                    </div>


                    <div class="col-6">
                        <label for="id_kategori">Id Kategori :</label>

                        <select name="id_kategori" class="form-control" aria-label="default input example">
                            <option value="">Pilih Kategori</option>
                            <?php
                            while ($kategori = mysqli_fetch_assoc($querykategori)) {
                                $selected = $kategori['id'] == $barang['id_kategori'] ? 'selected' : '';
                                echo "<option value=" . $kategori['id'] . " $selected>" . $kategori['nama_kategori'] . "</option>";
                            } ?>
                        </select>
                    </div>


                    <div class="col-12">
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-dark" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>

<?php
include('../bottom.php');
?>