<?php
include 'config.php';
// edd (metode usulan)
$sql = "SELECT nama_perusahaan, jumlah_pesanan, deadline, datediff(target_selesai, start) AS lama_pengerjaan, datediff(deadline,start) AS batas_waktu_pengerjaan
        FROM tbl_purchaseorder
        ORDER BY batas_waktu_pengerjaan ASC";
$hasil = mysqli_query($con, $sql);

//fcfs (metode lama)
// $sql = "SELECT nama_perusahaan, jumlah_pesanan, datediff(target_selesai, start) AS lama_pengerjaan, datediff(deadline, start) AS batas_waktu_pengerjaan
//         FROM tbl_purchaseorder";
// $hasil = mysqli_query($con, $sql);


$sql2 = "SELECT datediff(target_selesai, start) AS lama_pengerjaan, datediff(deadline, start) AS batas_waktu_pengerjaan, sum(datediff(target_selesai, start)) AS jml_aliran_waktu, COUNT(nomor_po) AS jml_pekerjaan, sum(datediff(target_selesai, start)) AS total_lama_pengerjaan
        FROM tbl_purchaseorder
        ORDER BY batas_waktu_pengerjaan ASC";
$hasil2 = mysqli_query($con, $sql2);


$sql3 = "SELECT sum(jumlah_pesanan) AS total_jumlah_pesanan, sum(datediff(target_selesai, start)) AS total_lama_pengerjaan, sum(datediff(deadline, start)) AS total_batas_waktu_pengerjaan,  sum(datediff(target_selesai, start)) AS lama_pengerjaan
        FROM tbl_purchaseorder
       ";
$hasil3 = mysqli_query($con, $sql3);



//sql filter data
$sql4 = "SELECT DISTINCT start FROM tbl_purchaseorder";
$hasil4 = mysqli_query($con, $sql4);
?>






<!-- tab nav -->

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Prioritas Penjadwalan</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Perhitungan Prioritas Penjadwalan</a>
    </div>
</nav>
<br>

<!-- filter data perhari -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Filter Data</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="">
            <div class="form-group row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <select name="tanggal" class="form-control" id="tanggal">
                        <option value="">--Pilih--</option>
                        <?php
                        while ($row_filter = mysqli_fetch_assoc($hasil4)) {
                        ?>
                            <option value="<?= $row_filter['start']; ?>"><?= date(('d F Y'), strtotime($row_filter['start'])); ?></option>
                        <?php
                        } //end while
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-success float-right" type="submit" name="btnFilter"><i class=" fas fa-fw fa-filter"></i>Filter</button>
                <a href="?menu=penjadwalan&action=tampil" class="btn btn-info float-right mx-2">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>tampil semua</span>
                </a>
            </div>
        </form>
    </div>
</div>


<?php
if (isset($_POST['btnFilter'])) {
    include 'config.php';
    $tanggal = $_POST['tanggal'];

    $sql_filter = "SELECT nama_perusahaan, jumlah_pesanan, datediff(target_selesai, start) AS lama_pengerjaan, datediff(deadline, start) AS batas_waktu_pengerjaan FROM tbl_purchaseorder WHERE start='$tanggal' ORDER BY batas_waktu_pengerjaan ASC";
    $hasil_filter = mysqli_query($con, $sql_filter);

    $sql_filter_tfoot = "SELECT sum(jumlah_pesanan) AS total_jumlah_pesanan, sum(datediff(target_selesai, start)) AS total_lama_pengerjaan, sum(datediff(deadline, start)) AS total_batas_waktu_pengerjaan,  sum(datediff(target_selesai, start)) AS lama_pengerjaan
        FROM tbl_purchaseorder WHERE start='$tanggal'
       ";
    $hasil_filter_tfoot = mysqli_query($con, $sql_filter_tfoot);


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
                            <th>Potensi Keterlambatan (hari)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $jumlah_aliran_waktu = 0;
                        $jumlah_terlambat = 0;
                        $aliran_waktu = 0;
                        while ($row_filter1 = mysqli_fetch_assoc($hasil_filter)) {
                            // $aliran_waktu = 0;
                            $aliran_waktu += $row_filter1['lama_pengerjaan'];
                            $jumlah_aliran_waktu += $aliran_waktu;
                            $keterlambatan = $aliran_waktu - $row_filter1['batas_waktu_pengerjaan'];
                            $jumlah_terlambat += $keterlambatan < 0 ? 0 : $keterlambatan;
                        ?>
                            <tr align="center">
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $row_filter1['nama_perusahaan']; ?></td>
                                <td><?= $row_filter1['jumlah_pesanan']; ?></td>
                                <td><?= $row_filter1['lama_pengerjaan']; ?></td>
                                <td><?= $aliran_waktu; ?></td>
                                <td><?= $row_filter1['batas_waktu_pengerjaan']; ?></td>
                                <td><?php
                                    if ($keterlambatan < 0) {
                                        $keterlambatan = 0;
                                        echo $keterlambatan;
                                    } else {
                                        echo $keterlambatan;
                                    }
                                    ?></td>
                            </tr>

                        <?php }
                        ?>

                    <tfoot align="center" class="thead-light">
                        <th colspan="2">
                            Jumlah
                        </th>
                        <?php
                        if ($row_hasil_tfoot = mysqli_fetch_assoc($hasil_filter_tfoot)) {
                            // $aliran_waktu += $row_hasil_tfoot['lama_pengerjaan'];
                            // $total_aliran_waktu += $aliran_waktu;
                            $jumlah_lama_pengerjaan =  $row_hasil_tfoot['total_lama_pengerjaan'];
                        ?>
                            <th><?= $row_hasil_tfoot['total_jumlah_pesanan']; ?></th>
                            <th><?= $jumlah_lama_pengerjaan; ?></th>
                            <th><?= $jumlah_aliran_waktu; ?></th>
                            <th><?= $row_hasil_tfoot['total_batas_waktu_pengerjaan']; ?></th>
                            <th><?= $jumlah_terlambat ?></th>
                        <?php } ?>
                    </tfoot>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



<?php } //end if 
else {
?>



    <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <br>

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
                                    <th>Deadline</th>
                                    <th>Aliran Waktu (hari)</th>
                                    <th>Batas Waktu Pengerjaan (hari)</th>
                                    <th>Potensi Keterlambatan (hari)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $jumlah_aliran_waktu = 0;
                                $jumlah_terlambat = 0;
                                $aliran_waktu = 0;
                                while ($row = mysqli_fetch_assoc($hasil)) {
                                    // $aliran_waktu = 0;
                                    $aliran_waktu += $row['lama_pengerjaan'];
                                    $jumlah_aliran_waktu += $aliran_waktu;
                                    $keterlambatan = $aliran_waktu - $row['batas_waktu_pengerjaan'];
                                    $jumlah_terlambat += $keterlambatan < 0 ? 0 : $keterlambatan;
                                ?>
                                    <tr align="center">
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $row['nama_perusahaan']; ?></td>
                                        <td><?= $row['jumlah_pesanan']; ?></td>
                                        <td><?= $row['lama_pengerjaan']; ?></td>
                                        <td><?= $row['deadline']; ?></td>
                                        <td><?= $aliran_waktu; ?></td>
                                        <td><?= $row['batas_waktu_pengerjaan']; ?></td>
                                        <td><?php
                                            if ($keterlambatan < 0) {
                                                $keterlambatan = 0;
                                                echo $keterlambatan;
                                            } else {
                                                echo $keterlambatan;
                                            }
                                            ?></td>
                                    </tr>

                                <?php }
                                ?>

                            <tfoot align="center" class="thead-light">
                                <th colspan="2">
                                    Jumlah
                                </th>
                                <?php
                                if ($row3 = mysqli_fetch_assoc($hasil3)) {
                                    // $aliran_waktu += $row3['lama_pengerjaan'];
                                    // $total_aliran_waktu += $aliran_waktu;
                                    $jumlah_lama_pengerjaan =  $row3['total_lama_pengerjaan'];
                                ?>
                                    <th><?= $row3['total_jumlah_pesanan']; ?></th>
                                    <th><?= $jumlah_lama_pengerjaan; ?></th>
                                    <th><?= $jumlah_aliran_waktu; ?></th>
                                    <th><?= $row3['total_batas_waktu_pengerjaan']; ?></th>
                                    <th><?= $jumlah_terlambat ?></th>
                                <?php } ?>
                            </tfoot>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <br>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Prediksi Perhitungan Waktu</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" width="100%" cellspacing="0">
                            <tr>
                                <td>Waktu Penyelesaian Rata-Rata</td>
                                <td>:</td>
                                <td>
                                    <?php
                                    if ($row2 = mysqli_fetch_assoc($hasil2)) {
                                        $jumlah_pekerjaan = $row2['jml_pekerjaan'];
                                    }
                                    $waktu_penyelesaian_rata_rata = $jumlah_aliran_waktu / $jumlah_pekerjaan;
                                    echo ceil($waktu_penyelesaian_rata_rata);
                                    ?>
                                    hari
                                </td>
                                <td>Utilisasi</td>
                                <td>:</td>
                                <td>
                                    <?php
                                    $utilisasi = $jumlah_lama_pengerjaan / $jumlah_aliran_waktu;
                                    $utilisasi = $utilisasi * 100;
                                    echo $utilisasi;
                                    ?>
                                    %
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah Pekerjaan Rata-Rata</td>
                                <td>:</td>
                                <td>
                                    <?php
                                    $jumlah_pekerjaan_rata_rata = $jumlah_aliran_waktu / $jumlah_lama_pengerjaan;
                                    echo ceil($jumlah_pekerjaan_rata_rata);
                                    ?>
                                </td>
                                <td>Rata-Rata Keterlambatan</td>
                                <td>:</td>
                                <td><?php
                                    if ($row2 = mysqli_fetch_assoc($hasil2)) {
                                        $jumlah_pekerjaan = $row2['jml_pekerjaan'];
                                    }
                                    $rata_rata_keterlambatan = $jumlah_terlambat / $jumlah_pekerjaan;
                                    echo ceil($rata_rata_keterlambatan);
                                    ?>
                                    hari
                                </td>
                            </tr>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
    </div>
<?php } //end else 
?>