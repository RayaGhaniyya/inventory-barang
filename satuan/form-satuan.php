<?php
include('../head.php');
include("../koneksi/koneksi.php");
?>

<header>
    <p>
        <b>
            FORMULIR SATUAN
        </b>
    </p>
</header>


<form action="storesatuan.php" method="POST">
    <div class="container">
        <div class="card card-user">
            <div class="card-body">


                <div class="row">
                    <div class="col-md-6">
                        <label for="nama_satuan">Nama Satuan: </label>
                        <input class="form-control" type="text" name="nama_satuan" placeholder="nama_satuan" aria-label="default input example">
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