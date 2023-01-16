<?php
include("koneksi.php");
include('head.php')
?>

<header>
    <p>
        <b>LIST BARANG</b>
    </p>
</header>


<div class="table-barang">
    <div class="table-responsive">
        <table class="table table-hover text-center">
            <thead>
                <tr class="table">
                    <th>Id</th>
                    <th>Nama Barang</th>
                    <th>Id Satuan</th>
                    <th>Jumlah stok</th>
                    <th>Id Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM barang";
                $query = mysqli_query($db, $sql);

                while ($barang = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $barang['id'] . "</td>";
                    echo "<td>" . $barang['nama_barang'] . "</td>";
                    echo "<td>" . $barang['id_satuan'] . "</td>";
                    echo "<td>" . $barang['jumlh_stok'] . "</td>";
                    echo "<td>" . $barang['id_kategori'] . "</td>";

                    echo "<td>";
                    echo '<a href=editbarang.php?id=' . $barang['id'] . ' class="btn btn-warning">Edit</a> | ';
                    echo '<a href="hapusbarang.php?id=' . $barang['id'] . '" class="btn btn-danger">Hapus</a> ';

                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>
    </div>
</div>

<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-2 pt-4 pe-5">
            <p>
                Total: <?php echo mysqli_num_rows($query) ?>
            </p>
        </div>
        <div class="col-3">
            <nav>
                <a href="formbarang.php" class="btn btn-light" style="margin-bottom: 1rem; margin-top:1rem; margin-left:2rem;">[+] Tambah Baru</a>
            </nav>
        </div>
    </div>
</div>




<?php
include('bottom.php');
?>