<?php
include 'config.php';
$id = $_GET['id'];

$sql = "SELECT * FROM tbl_purchaseorder WHERE id_purchase_order = $id";
$hasil = mysqli_query($con, $sql);
?>

<a href="?menu=po&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw  fa-chevron-circle-left"></i>
    <span>Kembali</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Purhcase Order</h6>
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
                            <td>Nama Perushaan</td>
                            <td>:</td>
                            <td><?= $row['nama_perusahaan']; ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Pesanan</td>
                            <td>:</td>
                            <td><?= $row['jumlah_pesanan']; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Pengiriman Barang</td>
                            <td>:</td>
                            <td><?= $row['alamat_pengiriman_barang']; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Pengiriman Invoice</td>
                            <td>:</td>
                            <td><?= $row['alamat_pengiriman_invoice']; ?></td>
                        </tr>
                        <tr>
                            <td>Atas Nama</td>
                            <td>:</td>
                            <td><?= $row['atas_nama']; ?></td>
                        </tr>
                        <tr>
                            <td>No. Telepon</td>
                            <td>:</td>
                            <td><?= $row['no_telepon']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?= $row['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Metode Pembayaran</td>
                            <td>:</td>
                            <td><?= $row['metode_pembayaran']; ?></td>
                        </tr>
                        <tr>
                            <td>Harga Pesanan</td>
                            <td>:</td>
                            <td>Rp <?= number_format($row['harga_pesanan'], 0, '', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>PPN</td>
                            <td>:</td>
                            <td><?= $row['ppn']; ?></td>
                        </tr>
                        <tr>
                            <td>DP</td>
                            <td>:</td>
                            <td>Rp <?= number_format($row['dp'], 0, '', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Biaya Instalasi</td>
                            <td>:</td>
                            <td>Rp <?= number_format($row['biaya_instalasi'], 0, '', '.'); ?></td>
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