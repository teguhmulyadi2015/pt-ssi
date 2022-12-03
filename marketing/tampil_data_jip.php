<?php
include 'config.php';
$sql = "SELECT tbl_perencanaan.id_perencanaan, tbl_perencanaan.id_purchase_order, tbl_perencanaan.kebutuhan_jumlah_bahan_baku, tbl_perencanaan.keterangan, tbl_purchaseorder.deadline, tbl_purchaseorder.nama_perusahaan, tbl_purchaseorder.status, tbl_purchaseorder.deadline, tbl_purchaseorder.jumlah_pesanan, datediff(tbl_purchaseorder.target_selesai, tbl_purchaseorder.start) AS lama_pengerjaan, datediff(tbl_purchaseorder.deadline, tbl_purchaseorder.start) AS batas_waktu_pengerjaan FROM tbl_perencanaan 
JOIN tbl_purchaseorder ON tbl_perencanaan.id_purchase_order = tbl_purchaseorder.id_purchase_order
-- WHERE tbl_purchaseorder.status=0
ORDER BY batas_waktu_pengerjaan ASC";
$hasil = mysqli_query($con, $sql);



$sql2 = "SELECT MAX(jumlah_pesanan) AS pesanan_terbanyak FROM tbl_purchaseorder WHERE status = 0";
$hasil2 = mysqli_query($con, $sql2);
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Jadwal Induk Produksi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light" align="center">

                    <tr>
                        <th rowspan="2">#</th>
                        <th rowspan="2">Klien</th>
                        <th rowspan="2">Status</th>
                        <th rowspan="2">Deadline</th>
                        <!-- <th rowspan="2">batas waktu</th> -->
                        <th rowspan="2">Jumlah Pesanan (unit)</th>
                        <!-- <th rowspan="2">Bahan Baku</th> -->
                        <?php
                        $row2 = mysqli_fetch_array($hasil2);
                        $pesanan_terbanyak = $row2['pesanan_terbanyak'] / 75;
                        $pesanan_terbanyak = ceil($pesanan_terbanyak);
                        ?>
                        <th colspan="<?= $pesanan_terbanyak ?>">Periode</th>
                    </tr>

                    <tr>
                        <?php
                        for ($i = 1; $i <= $pesanan_terbanyak; $i++) {

                            echo "<th>";
                            echo "hari ke-" . $i;
                            echo "</th>";
                        }

                        ?>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ii = 1;
                    //validasi
                    // $row = mysqli_fetch_array($hasil);

                    // // $deadline = $row['deadline'];
                    // // $sekarang = date('d-m-Y');

                    // // $masa_berlaku = strtotime($deadline) - strtotime($sekarang);

                    while ($row = mysqli_fetch_array($hasil)) {
                        $deadline = $row['deadline'];
                        $sekarang = date('d-m-Y');

                        $masa_berlaku = strtotime($deadline) - strtotime($sekarang);

                    ?>
                        <tr align="center">
                            <th scope="row"><?= $ii++ ?></th>
                            <td><?= $row['nama_perusahaan']; ?></td>
                            <td><?php
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
                            <td>
                                <?=
                                    date('d/F/Y', strtotime($row['deadline']));
                                ?>
                                <?php
                                if ($masa_berlaku <= 0) {
                                    echo "<font color='red'><b>Sudah Habis</b></font>";
                                } else {
                                    echo "<font color='green'><b>" . $masa_berlaku / (24 * 60 * 60) . " hari lagi</b></font>";
                                } ?>
                            </td>

                            <!-- <td><?= $row['batas_waktu_pengerjaan']; ?></td> -->
                            <td><?= $row['jumlah_pesanan']; ?></td>

                            <?php

                            if ($row['jumlah_pesanan'] <= 75) {
                                echo "<td>" . $row['jumlah_pesanan'] . "</td>";

                                for ($i = 1; $i <= $pesanan_terbanyak - 1; $i++) {
                                    $mod_next_asd = " - ";
                                    echo "<td>" . $mod_next_asd . "</td>";
                                }
                            } elseif ($row['jumlah_pesanan'] > 75) {

                                $div = $row['jumlah_pesanan'] / 75;
                                $hasil_div = floor($div);

                                for ($i = 1; $i <= $hasil_div; $i++) {
                                    $mod_next = 75;
                                    echo "<td>" . $mod_next . "</td>";
                                }

                                $mod_1 = $row['jumlah_pesanan'] % 75;
                                if ($mod_1) {
                                    echo "<td>" . $mod_1 . "</td>";

                                    $div = $row['jumlah_pesanan'] / 75;
                                    $hasil_div = ceil($div);

                                    for ($i = 1; $i <= $pesanan_terbanyak - $hasil_div; $i++) {
                                        $mod_next = "-";
                                        echo "<td>" . $mod_next . "</td>";
                                    }
                                }
                            }
                            ?>
                        </tr>

                    <?php }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>