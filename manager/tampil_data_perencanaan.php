<?php
include 'config.php';
$sql = "SELECT * FROM tbl_perencanaan
        JOIN tbl_purchaseorder ON tbl_perencanaan.id_purchase_order = tbl_purchaseorder.id_purchase_order
        ";
$hasil = mysqli_query($con, $sql);
?>
<a href="?menu=perencanaan&action=tambah" class="btn btn-success my-2">
    <i class="fas fa-fw fa-plus-square"></i>
    <span>Tambah Data</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Perencanaan Produksi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light" align="center">
                    <tr>
                        <th>#</th>
                        <th>Klien</th>
                        <th>Jumlah Pesanan (unit)</th>
                        <th>Bahan Baku</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($hasil)) {


                    ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $row['nama_perusahaan']; ?></td>
                            <td><?= $row['jumlah_pesanan']; ?></td>
                            <td><?= $row['kebutuhan_jumlah_bahan_baku']; ?></td>
                            <td><?= $row['keterangan']; ?></td>
                            <td>
                                <a href="?menu=perencanaan&action=detail&id=<?= $row['id_perencanaan'] ?>" class="badge badge-info">info</a>
                                <a href="?menu=perencanaan&action=edit&id=<?= $row['id_perencanaan'] ?>" class="badge badge-warning">edit</a>
                                <a href="proses_delete_perencanaan.php?id=<?= $row['id_perencanaan'] ?>" class="badge badge-danger" onclick="return confirm('Yakin delete?');">delete</a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>