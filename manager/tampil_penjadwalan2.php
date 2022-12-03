<?php
include 'config.php';
$sql = "SELECT nama_perusahaan, jumlah_pesanan, datediff(target_selesai, start) AS lama_pengerjaan, datediff(deadline, start) AS batas_waktu_pengerjaan
        FROM tbl_purchaseorder
        ORDER BY batas_waktu_pengerjaan ASC";
$hasil = mysqli_query($con, $sql);
?>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Prioritas Penjadwalan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light" align="center">
                    <tr>
                        <th>#</th>
                        <th>Klien</th>
                        <th>Jumlah Pesanan (unit)</th>
                        <th>Lama Pengerjaan (hari)</th>
                        <th>Aliran Waktu (hari)</th>
                        <th>Batas Waktu Pengerjaan (hari)</th>
                        <th>Keterlambatan (hari)</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>#</td>
                        <td>Klien</td>
                        <td>Jumlah Pesanan (unit)</td>
                        <td>Lama Pengerjaan (hari)</td>
                        <td>Aliran Waktu (hari)</td>
                        <td>Batas Waktu Pengerjaan (hari)</td>
                        <td>Keterlambatan (hari)</td>
                        <td>Aksi</td>
                    </tr>
                    <tr>

                        <td>#</td>
                        <td>Klien2</td>
                        <td>Jumlah Pesanan (unit)</td>
                        <td>Lama Pengerjaan (hari)</td>
                        <td>Aliran Waktu (hari)</td>
                        <td>Batas Waktu Pengerjaan (hari)</td>
                        <td>Keterlambatan (hari)</td>
                        <td>Aksi</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>