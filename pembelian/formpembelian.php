<!-- <!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="style.css">


    <title>Formulir Motor</title>
</head>
<link rel="stylesheet" href="style.css"> -->

<!-- <body> -->

<?php
include('../head.php');
?>

<header>
    <p>
        <b>
            DAFTAR PEMBELIAN
        </b>
    </p>
</header>

<form action="storepembelian.php" method="POST">
    <?php
    include("../koneksi/koneksi.php");
    $sql = "SELECT * FROM barang";
    $query = mysqli_query($db, $sql);
    ?>


    <div class="container">
        <div class="card card-pembelian">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="kode_pembelian">Kode Pembelian: </label>
                        <input class="form-control" type="text" name="kode_pembelian" placeholder="Kode Pembelian" aria-label="default input example">
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


                    <div class="col-md-6">
                        <label for="harga">Harga: </label>
                        <input class="form-control" type="text" name="harga" placeholder="harga" aria-label="default input example">
                    </div>

                    <div class="col-md-12">
                        <input type="submit" value="Daftar" name="daftar" class="btn btn-dark" />
                    </div>


                </div>
            </div>
        </div>
    </div>



    <!-- 

     <div class="input-box">
        
    </div>

    <div class="input-box">
        
    </div>

    <div class="input-box">
        
    </div>

    <div class="input-box">
        
    </div>
    <div class="input-box">
        <label for="no_polisi">No Polisi: </label>
        <input type="text" name="no_polisi">
    </div>
    <div class="input-box">
        
    </div>
    <p style="margin-top: 1rem; font-size: medium">
        <input type="submit" value="Daftar" name="daftar" />
    </p>
 -->



</form>

<!-- 
</body>

</html> -->

<?php
include('../bottom.php');
?>