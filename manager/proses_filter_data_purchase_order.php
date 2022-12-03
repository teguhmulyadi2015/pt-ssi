<?php
include 'config.php';
$tanggal = $_POST['tanggal'];

$sql = " SELECT * FROM tbl_purchaseorder WHERE start= '$tanggal'
    ";
$hasil = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($hasil);
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Purhcase Order</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>No. PO</th>
                        <th>Perusahaan</th>
                        <th>Atas nama</th>
                        <th>No. Telepon</th>
                        <th>Jumlah</th>
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
                            <td><?= $row['nomor_po']; ?></td>
                            <td><?= $row['nama_perusahaan']; ?></td>
                            <td><?= $row['atas_nama']; ?></td>
                            <td><?= $row['no_telepon']; ?></td>
                            <td><?= $row['jumlah_pesanan']; ?></td>
                            <td>
                                <a href="?menu=po&action=detail&id=<?= $row['id'] ?>" class="badge badge-info">info</a>
                                <a href="?menu=po&action=edit&id=<?= $row['id'] ?>" class="badge badge-warning">edit</a>
                                <a href="proses_delete_purchase_order.php?id=<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Yakin delete?');">delete</a>
                            </td>
                        </tr>


                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>