<?php
include("koneksi.php");
include('head.php')
?>

<header>
    <p>
        <b>LIST KATEGORI BARANG</b>
    </p>
</header>


<div class="table-kategori">
    <div class="table-responsive">
        <table class="table table-hover text-center">
            <thead>
                <tr class="table">
                    <th>Id</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM kategori_barang";
                $query = mysqli_query($db, $sql);

                while ($kategori = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $kategori['id'] . "</td>";
                    echo "<td>" . $kategori['nama_kategori'] . "</td>";

                    echo "<td>";
                    echo '<a href=editkategori.php?id=' . $kategori['id'] . ' class="btn btn-warning">Edit</a> | ';
                    echo '<a href="hapuskategori.php?id=' . $kategori['id'] . '" class="btn btn-danger">Hapus</a> ';

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
                <a href="formkategori.php" class="btn btn-light" style="margin-bottom: 1rem; margin-top:1rem; margin-left:2rem;">[+] Tambah Baru</a>
            </nav>
        </div>
    </div>
</div>




<?php
include('bottom.php');
?>