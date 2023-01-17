<?php
include("../koneksi/koneksi.php");
include('../head.php')
?>

<?php
$sql = "SELECT * FROM barang";
$query = mysqli_query($db, $sql);

?>

<header>
    <p>
        <b>
            PENDAFTARAN PEMAKAIAN
        </b>
    </p>
</header>


<form action="storepemakaian.php" method="POST">

    <div class="container">
        <div class="card card-pemakaian">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <label for="nama">Kode Pemakaian : </label>
                        <input class="form-control" type="text" name="kode_pemakaian" placeholder="masukkan kode pemakaian" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="id_barang">Pilih Barang: </label>
                        <select name="id_barang" class="form-control" aria-label="default input example">
                            <option value="">Pilih Barang</option>
                            <?php
                            while ($barang = mysqli_fetch_assoc($query)) {
                                echo "<option value=" . $barang['id'] . ">" . $barang['nama_barang'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="jumalah">Jumlah: </label>
                        <input class="form-control" type="text" name="jumlah" placeholder="Jumlah" aria-label="default input example">
                    </div>
                    <div class="col-md-12">
                        <input type="submit" value="Daftar" name="daftar" class="btn btn-dark" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
include('../bottom.php');
?>