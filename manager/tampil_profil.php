<?php
include 'config.php';

$id_hak_akses = $_SESSION['id_hak_akses'];

$sql = "SELECT * FROM tbl_pengguna 
        JOIN tbl_hak_akses ON tbl_pengguna.id_hak_akses = tbl_hak_akses.id_hak_akses
        JOIN tbl_pegawai ON tbl_pengguna.id_pegawai = tbl_pegawai.id_pegawai
        JOIN tbl_jabatan ON tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan
        WHERE tbl_pengguna.id_hak_akses = $id_hak_akses";
$hasil = mysqli_query($con, $sql);
$result = mysqli_fetch_assoc($hasil);
?>


<!-- <a href="?menu=profil_saya&action=edit&id=<?= $result['id'] ?>" class="btn btn-success my-2">
    <i class="fas fa-fw fa-user-edit"></i>
    <span>Edit Biodata</span>
</a> -->
<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Biodata</h6>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" width="100%" cellspacing="0">
                <tbody>

                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td><?= $result['nip']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $result['nama_pegawai']; ?></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><?= $result['nama_jabatan']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?= $result['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td>:</td>
                        <td><?= $result['no_telepon']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?= $result['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><?= $result['tempat_lahir']; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><?= date(('d F Y'), strtotime($result['tgl_lahir'])); ?></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>