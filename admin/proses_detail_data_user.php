

<?php 
include 'config.php';
$id = $_GET['id'];

$sql = "SELECT tbl_pengguna.id_pengguna, tbl_pengguna.username,tbl_pengguna.password, tbl_pegawai.nip, tbl_pegawai.nama_pegawai, tbl_pegawai.alamat, tbl_pegawai.no_telepon, tbl_pegawai.email, tbl_pegawai.tempat_lahir, tbl_pegawai.tgl_lahir, tbl_pegawai.id_jabatan, tbl_jabatan.nama_jabatan
FROM tbl_pengguna
JOIN tbl_pegawai ON tbl_pengguna.id_pegawai=tbl_pegawai.id_pegawai
JOIN tbl_jabatan ON tbl_pegawai.id_jabatan=tbl_jabatan.id_jabatan
WHERE tbl_pengguna.id_pengguna=$id";
$hasil = mysqli_query($con, $sql);
?>

<a href="?menu=pengguna&action=tampil" class="btn btn-success my-2">
        <i class="fas fa-fw  fa-chevron-circle-left"></i>
        <span>Kembali</span>
    </a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Data Pengguna</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" width="100%" cellspacing="0">
                <tbody>
                <?php  while ($row = mysqli_fetch_assoc($hasil)) { ?>
                    <tr>
                        <td>username</td>
                        <td>:</td>
                        <td><?=$row['username'];?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><?=$row['password'];?></td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td><?=$row['nip'];?></td>
                    </tr>
                    <tr>
                        <td>Nama Pegawai</td>
                        <td>:</td>
                        <td><?=$row['nama_pegawai'];?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?=$row['alamat'];?></td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td>:</td>
                        <td><?=$row['no_telepon'];?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
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
                        <td><?=$row['tgl_lahir'];?></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><?=$row['nama_jabatan'];?></td>
                    </tr>

                <?php }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>