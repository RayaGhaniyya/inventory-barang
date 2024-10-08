<?php
include("../koneksi/koneksi.php");
include('../head.php')
?>

<header>
    <p>
        <b>LIST PEMAKAIAN</b>
    </p>
</header>


<div class="table-pemakaian">
    <div class="table-responsive">
        <table class="table table-hover text-center">
            <thead>
                <tr class="table">
                    <th>Id</th>
                    <th>Kode Pemakaian</th>
                    <th>Id Barang</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM pemakaian";
                $query = mysqli_query($db, $sql);

                while ($pemakaian = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $pemakaian['id'] . "</td>";
                    echo "<td>" . $pemakaian['kode_pemakaian'] . "</td>";
                    echo "<td>" . $pemakaian['id_barang'] . "</td>";
                    echo "<td>" . $pemakaian['jumlah'] . "</td>";

                    echo "<td>";
                    echo '<a href=editpemakaian.php?id=' . $pemakaian['id'] . ' class="btn btn-warning">Edit</a> | ';
                    echo '<a href="hapuspemakaian.php?id=' . $pemakaian['id'] . '" class="btn btn-danger">Hapus</a> ';

                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>
    </div>
</div>

<div class="container text-ucenter">
    <div class="row justify-content-center">
        <div class="col-2 pt-4 pe-5">
            <p>
                Total: <?php echo mysqli_num_rows($query) ?>
            </p>
        </div>
        <div class="col-3">
            <nav>
                <a href="formpemakaian.php" class="btn btn-light" style="margin-bottom: 1rem; margin-top:1rem; margin-left:2rem;">[+] Tambah Baru</a>
            </nav>
        </div>
    </div>
</div>




<?php
include('../bottom.php');
?>