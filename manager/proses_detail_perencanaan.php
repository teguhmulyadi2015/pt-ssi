<?php
include 'config.php';
$id = $_GET['id'];

$sql = "SELECT * FROM tbl_perencanaan
        JOIN tbl_purchaseorder ON tbl_perencanaan.id_purchase_order = tbl_purchaseorder.id_purchase_order 
        WHERE tbl_perencanaan.id_perencanaan = $id";
$hasil = mysqli_query($con, $sql);
?>

<a href="?menu=perencanaan&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw  fa-chevron-circle-left"></i>
    <span>Kembali</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Perencanaan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" width="100%" cellspacing="0">
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($hasil)) { ?>
                        <tr>
                            <td>Nomor PO</td>
                            <td>:</td>
                            <td><?= $row['nomor_po']; ?></td>
                        </tr>
                        <tr>
                            <td>Klien</td>
                            <td>:</td>
                            <td><?= $row['nama_perusahaan']; ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Pesanan</td>
                            <td>:</td>
                            <td><?= $row['jumlah_pesanan']; ?></td>
                        </tr>

                        <tr>
                            <td>PO Masuk</td>
                            <td>:</td>
                            <td><?= date('d/F/Y', strtotime($row['start'])); ?></td>
                        </tr>
                        <tr>
                            <td>Target Selesai</td>
                            <td>:</td>
                            <td><?= date('d/F/Y', strtotime($row['target_selesai'])); ?></td>
                        </tr>
                        <tr>
                            <td>Jadwal Instalasi</td>
                            <td>:</td>
                            <td><?= date('d/F/Y', strtotime($row['jadwal_instalasi'])); ?></td>
                        </tr>
                        <tr>
                            <td>Deadline</td>
                            <td>:</td>
                            <td><?= date('d/F/Y', strtotime($row['deadline'])); ?></td>
                        </tr>
                        <tr>
                            <td>Kebutuhan Bahan Baku</td>
                            <td>:</td>
                            <td><?= $row['kebutuhan_jumlah_bahan_baku']; ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td><?= $row['keterangan']; ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>
                                <?php
                                if ($row['status'] == 0) {
                                    echo "<p class='badge badge-danger'>";
                                    echo "Belum Selesai";
                                    echo "</p>";
                                } else {
                                    echo "<p class='badge badge-success'>";
                                    echo "Selesai";
                                    echo "</p>";
                                } ?>
                            </td>
                        </tr>

                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>