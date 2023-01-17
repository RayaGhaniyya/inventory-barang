<?php
include("koneksi.php");
include('head.php')
?>

<header>
    <p>
        <b>LIST SATUAN</b>
    </p>
</header>


<div class="table-satuan">
    <div class="table-responsive">
        <table class="table table-hover text-center">
            <thead>
                <tr class="table">
                    <th>Id </th>
                    <th>Nama Satuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM satuan";
                $query = mysqli_query($db, $sql);

                while ($satuan = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $satuan['id'] . "</td>";
                    echo "<td>" . $satuan['nama_satuan'] . "</td>";
                    echo "<td>";
                    echo '<a href=editsatuan.php?id=' . $satuan['id'] . ' class="btn btn-warning">Edit</a> | ';
                    echo '<a href="hapussatuan.php?id=' . $satuan['id'] . '" class="btn btn-danger">Hapus</a> ';

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
                <a href="form-satuan.php" class="btn btn-light" style="margin-bottom: 1rem; margin-top:1rem; margin-left:2rem;">[+] Tambah Baru</a>
            </nav>
        </div>
    </div>
</div>




<?php
include('bottom.php');
?>