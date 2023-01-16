<?php include('head.php') ?>


<header>
    <p>
        <b>
            PENDAFTARAN BARANG
        </b>
    </p>
</header>


<form action="storebarang.php" method="POST">
    <div class="container">
        <div class="card card-barang">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <label for="username">Nama Barang : </label>
                        <input class="form-control" type="text" name="nama_barang" placeholder="nama barang" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="no_hp">Id Satuan : </label>
                        <input class="form-control" type="text" name="id_satuan" placeholder="id satuan" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="password">Jumlah Stok : </label>
                        <input class="form-control" type="text" name="jumlah_stok" placeholder="jumlah stok" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="password">Id Kategori : </label>
                        <input class="form-control" type="text" name="id_kategori" placeholder="id kategori" aria-label="default input example">
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
include('bottom.php');
?>