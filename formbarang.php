
<?php include('./head.php') ?>


<header>
    <p>
        <b>
         PENDAFTARAN BARANG
        </b>
    </p>
</header>


<form action="storeuser.php" method="POST">
    <div class="container">
        <div class="card card-user">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <label for="nama">Id Barang : </label>
                        <input class="form-control" type="text" name="nama" placeholder="Nama" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="username">Nama Barang : </label>
                        <input class="form-control" type="text" name="username" placeholder="Username" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="no_hp">Id Satuan : </label>
                        <input class="form-control" type="text" name="no_hp" placeholder="No hp" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="password">Jumlah Stok : </label>
                        <input class="form-control" type="password" name="password" placeholder="password" aria-label="default input example">
                    </div>
                    <div class="col-md-6">
                        <label for="password">Id Kategori : </label>
                        <input class="form-control" type="password" name="password" placeholder="password" aria-label="default input example">
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
