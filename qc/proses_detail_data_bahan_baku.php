

<?php 
include 'config.php';
$id = $_GET['id'];

$sql = "SELECT * FROM tbl_bahan_baku 
        JOIN tbl_jenis_bahan_baku ON tbl_bahan_baku.id_jenis_bahan_baku=tbl_jenis_bahan_baku.id_jenis_bahan_baku
        WHERE tbl_bahan_baku.id_bahan_baku=$id";
$hasil = mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($hasil);
?>

<a href="?menu=bahan_baku&action=tampil" class="btn btn-success my-2">
        <i class="fas fa-fw  fa-chevron-circle-left"></i>
        <span>Kembali</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Bahan Baku</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" width="100%" cellspacing="0">
                <tbody>
              
                    <tr>
                        <td>Bahan Baku</td>
                        <td>:</td>
                        <td><?=$row['nama_bahan_baku'];?></td>
                    </tr>
                    <tr>
                        <td>Bahan Baku</td>
                        <td>:</td>
                        <td><?=$row['stok'];?></td>
                    </tr>
                    <tr>
                        <td>Tgl Masuk</td>
                        <td>:</td>
                        <td><?=date('d/F/Y', strtotime($row['tgl_masuk']));?></td>
                    </tr>
                    <tr>
                        <td>Jenis Bahan Baku</td>
                        <td>:</td>
                        <td><?=$row['nama_jenis_bahan_baku'];?></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>