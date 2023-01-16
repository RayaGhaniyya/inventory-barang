<?php
include('head.php')
?>

<header>
    <p>
        <b>
            KATEGORI BARANG
        </b>
    </p>
</header>

<form action="storekategori.php" method="POST">

    <div class="container">
        <div class="card card-kategori">
            <div class="card-body">


                <div class="row">
                    <div class="col-md-12">
                        <label for="nama_barang">Nama Barang: </label>
                        <input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang" aria-label="default input example">
                    </div>

                    <div class="col-md-12">
                        <input type="submit" value="Daftar" name="daftar" class="btn btn-dark" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>

<?php
include('bottom.php')
?>