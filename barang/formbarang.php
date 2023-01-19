<?php
include('../head.php');
include("../koneksi/koneksi.php");
?>


<header>
    <p>
        <b>
            PENDAFTARAN BARANG
        </b>
    </p>
</header>


<form action="storebarang.php" method="POST">
    <?php

    $sql = "SELECT * FROM satuan";
    $query = mysqli_query($db, $sql);
    $sqlkategori = "SELECT * FROM kategori_barang";
    $querykategori = mysqli_query($db, $sqlkategori);
    ?>

    <div class="container">
        <div class="card card-barang">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <label for="username">Nama Barang : </label>
                        <input class="form-control" type="text" name="nama_barang" placeholder="nama barang" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="id_satuan">Pilih Satuan: </label>
                        <select name="id_satuan" class="form-control" aria-label="default input example">
                            <option value="">Pilih Barang</option>
                            <?php
                            while ($satuan = mysqli_fetch_assoc($query)) {
                                echo "<option value=" . $satuan['id'] . ">" . $satuan['nama_satuan'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="password">Jumlah Stok : </label>
                        <input class="form-control" type="text" name="jumlah_stok" placeholder="jumlah stok" aria-label="default input example">
                    </div>

                    <div class="row justify-content-between text-center">
                        <div class="col-md-4">
                            <input type="submit" value="Daftar" name="daftar" class="btn btn-dark" />
                        </div>

                        <div class="col-md-4">
                            <a class="btn btn-dark" href="listbarang.php">Kembali</a>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <label for="password">Jumlah Stok : </label>
                        <input class="form-control" type="text" name="jumlah_stok" placeholder="jumlah stok" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="id_kategori">Pilih Kategori: </label>
                        <select name="id_kategori" class="form-control" aria-label="default input example">
                            <option value="">Pilih Kategori</option>
                            <?php
                            while ($kategori_ = mysqli_fetch_assoc($querykategori_barang)) {
                                echo "<option value=" . $kategori_barang['id'] . ">" . $kategori_barang['nama_kategori'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" value="Daftar" name="daftar" class="btn btn-dark" />
                    </div> -->


                </div>
            </div>
        </div>
    </div>
</form>

<?php
include('../bottom.php');
?>