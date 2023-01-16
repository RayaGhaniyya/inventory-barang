<?php

include("koneksi.php");
include("head.php");


if (!isset($_GET['id'])) {
    header('Location: listpembelian.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM pembelian WHERE id=$id";
$query = mysqli_query($db, $sql);
$pembelian = mysqli_fetch_assoc($query);
$sqlbarang = "SELECT * FROM barang";
$querybarang = mysqli_query($db, $sqlbarang);



if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!-- <!DOCTYPE html>
<html>
<head>
    <title>user</title>
</head> -->

<!-- <body> -->
<header>

    <p>
        <b>
            Form Edit Pembelian
        </b>
    </p>
</header>

<div class="container">
    <form action="proseseditpembelian.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $pembelian['id'] ?>" />
        <div class="container">
            <div class="card card-pembelian-edit">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <label for="kode_pembelian">Kode Pembelian :</label>
                            <input class="form-control" type="text" name="kode_pembelian" placeholder="kode_pembelian" aria-label="default input example" value="<?php echo $pembelian['kode_pembelian'] ?>">
                        </div>
                        <div class="col-md-6">

                        <label for="id_barang">Pilih Barang: </label>
                        <select name="id_barang" class="form-control" aria-label="default input example">
                            <option value="">Pilih Barang</option>
                            <?php
                            while ($barang = mysqli_fetch_assoc($querybarang)) {
                                $selected = $barang['id_barang'] == $barang['id_barang'] ? 'selected="selected"' : '';
                                echo "<option value=" . $barang['id_barang'] . " $selected>" . $barang['id_barang'] . "</option>";
                            } ?>
                        </select>
                           
                        </div>
                        <div class="col-md-6">
                            <label for="jumlah">Jumlah :</label>
                            <input class="form-control" type="text" name="jumlah" placeholder="Jumlah" aria-label="default input example" value="<?php echo $pembelian['jumlah'] ?>">

                        </div>
                        <div class="col-md-6">

                            <label for="harga">Harga:</label>
                            <input class="form-control" type="harga" name="harga" placeholder="harga" aria-label="default input example" value="<?php echo $pembelian['harga'] ?>">
                        </div>
                        <div class="col-md-12">

                            <input type="submit" value="Simpan" name="simpan" class="btn btn-dark" />

                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
</div>
</div>

</form>
</div>
<?php
include("bottom.php")
?>
<!-- </body>
</html> -->