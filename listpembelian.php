<?php
include("koneksi.php");
include('head.php');
?>
<header>
    <p>
        <b>LIST PEMBELIAN</b>
    </p>
</header>

<div class="table-pembelian">
    <div class="table-responsive">
        <table class="table table-hover text-center">
            <thead>
                <tr class="table">
                    <th>Id</th>
                    <th>Kode Pembelian</th>
                    <th>id barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "SELECT pembelian.id,pembelian.kode_pembelian,pembelian.id_barang,pembelian.jumlah,pembelian.harga FROM pembelian LEFT JOIN barang ON pembelian.id_barang=barang.id";
                $query = mysqli_query($db, $sql);


                while ($pembelian = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $pembelian['id'] . "</td>";
                    echo "<td>" . $pembelian['kode_pembelian'] . "</td>";
                    echo "<td>" . $pembelian['id_barang'] . "</td>";
                    echo "<td>" . $pembelian['jumlah'] . "</td>";
                    echo "<td>" . $pembelian['harga'] . "</td>";




                    echo "<td>";
                    echo '<a href=editpembelian.php?id=' . $pembelian['id'] . ' class="btn btn-warning">Edit</a> | ';
                    echo '<a href="hapuspembelian.php?id=' . $pembelian['id'] . '" class="btn btn-danger">Hapus</a> ';
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
            <p>Total: <?php echo mysqli_num_rows($query) ?></p>
        </div>
        <div class="col-3">
            <nav>
                <a href="formpembelian.php" class="btn btn-light" style="margin-bottom: 1rem; margin-top:1rem; margin-left:2rem;">[+] Tambah Baru</a>
            </nav>
        </div>
    </div>
</div>

<?php
include('bottom.php');
?>
<!-- </body>

</html> -->