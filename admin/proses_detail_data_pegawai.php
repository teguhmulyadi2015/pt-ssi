

<?php 
include 'config.php';
$id = $_GET['id'];

$sql = "SELECT * FROM tbl_pegawai
        JOIN tbl_jabatan ON tbl_pegawai.id_jabatan=tbl_jabatan.id_jabatan
        WHERE tbl_pegawai.id_pegawai=$id";
$hasil = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($hasil);
?>

<a href="?menu=pegawai&action=tampil" class="btn btn-success my-2">
        <i class="fas fa-fw  fa-chevron-circle-left"></i>
        <span>Kembali</span>
    </a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Data Pegawai</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" width="100%" cellspacing="0">
                <tbody>
               
                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td><?=$row['nip'];?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$row['nama_pegawai'];?></td>
                    </tr>
                    <tr>
                        <td>ALamat</td>
                        <td>:</td>
                        <td><?=$row['alamat'];?></td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td>:</td>
                        <td><?=$row['no_telepon'];?></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td>:</td>
                        <td><?=$row['email'];?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><?=$row['tempat_lahir'];?></td>
                    </tr>
                    <tr>
                        <td>Tgl Lahir</td>
                        <td>:</td>
                        <td><?=$row['email'];?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><?=$row['tempat_lahir'];?></td>
                    </tr>
                    <tr>
                        <td>Tgl Lahir</td>
                        <td>:</td>
                        <td><?= date(('d F Y'),strtotime($row['tgl_lahir']));?></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><?=$row['nama_jabatan'];?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>