<?php

include("koneksi.php");


if (!isset($_GET['id'])) {
    header('Location: listpemakaian.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM pemakaian WHERE id=$id";
$query = mysqli_query($db, $sql);
$pemakaian = mysqli_fetch_assoc($query);
$sqlbarang = "SELECT * FROM barang";
$querybarang = mysqli_query($db, $sqlbarang);



if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<?php
include('head.php');
?>

<header>
    <p>
        <b>
            EDIT PEMAKAIAN
        </b>
    </p>
</header>

<form action="proseseditpemakaian.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $pemakaian['id'] ?>" />
    <div class="container">
        <div class="card card-pemakaian-edit">
            <div class="card-body">

                <div class="row">
                    <div class="col-6">
                        <label for="kode_pemakaian">Kode pemakaian :</label>
                        <input class="form-control" type="text" name="kode_pemakaian" placeholder="masukkan kode pemakaian" aria-label="default input example" value="<?php echo $pemakaian['kode_pemakaian'] ?>">
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
                        <div class="col-6">
                            <label for="jumlah">jumlah :</label>
                            <input class="form-control" type="text" name="jumlah" placeholder="masukkan jumlah" aria-label="default input example" value="<?php echo $pemakaian['jumlah'] ?>">
                        </div>
                        <div class="col-12">
                            <input type="submit" value="Simpan" name="simpan" class="btn btn-dark" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
</form>