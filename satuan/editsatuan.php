<?php

include("koneksi.php");


if (!isset($_GET['id'])) {
    header('Location: listsatuan.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM satuan WHERE id=$id";
$query = mysqli_query($db, $sql);
$satuan = mysqli_fetch_assoc($query);


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
            EDIT SATUAN
        </b>
    </p>
</header>

<form action="proseseditsatuan.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $satuan['id'] ?>" />
    <div class="container">
        <div class="card card-satuan-edit">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        <label for="nama_satuan">Nama Satuan :</label>
                        <input class="form-control" type="text" name="nama_satuan" placeholder="nama_satuan" aria-label="default input example" value="<?php echo $satuan['nama_satuan'] ?>">

                    </div>
                    <div class="col-12">
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-dark" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>