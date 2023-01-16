<?php include('./head.php') ?>


<header>
    <p>
        <b>
            PENDAFTARAN BARANG
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
                        <label for="username">Id Barang : </label>
                        <input class="form-control" type="text" name="id_barang" placeholder="masukkan id barang" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="no_hp">Jumlah : </label>
                        <input class="form-control" type="text" name="jumlah" placeholder="masukkan jumlah barang" aria-label="default input example">
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