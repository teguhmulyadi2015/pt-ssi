<?php
include 'config.php';
$sql = "SELECT tbl_pengguna.id_pengguna, tbl_pengguna.username,tbl_pegawai.nip, tbl_pegawai.nama_pegawai, tbl_pegawai.alamat, tbl_pegawai.no_telepon, tbl_pegawai.email, tbl_pegawai.tempat_lahir, tbl_pegawai.tgl_lahir, tbl_pegawai.id_jabatan, tbl_jabatan.nama_jabatan
FROM tbl_pengguna
JOIN tbl_pegawai ON tbl_pengguna.id_pegawai=tbl_pegawai.id_pegawai
JOIN tbl_jabatan ON tbl_pegawai.id_jabatan=tbl_jabatan.id_jabatan
ORDER BY tbl_pengguna.id_pengguna ASC";
$hasil = mysqli_query($con, $sql);
?>

<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->

<a href="?menu=pengguna&action=tambah" class="btn btn-success my-2">
    <i class="fas fa-fw fa-plus-square"></i>
    <span>Tambah Data</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <!-- <th>id</th> -->
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Role</th>
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
                            <!-- <td><?= $row['id_pengguna']; ?></td> -->
                            <td><?= $row['username']; ?></td>
                            <td><?= $row['nama_pegawai']; ?></td>
                            <td><?= $row['nama_jabatan']; ?></td>
                            <td>
                                <a href="?menu=pengguna&action=detail&id=<?= $row['id_pengguna'] ?>" class="badge badge-info">info</a>
                                <a href="?menu=pengguna&action=edit&id=<?= $row['id_pengguna'] ?>" class="badge badge-warning">edit</a>
                                <a href="proses_delete_data_user.php?id=<?= $row['id_pengguna'] ?>" class="badge badge-danger" onclick="return confirm('Yakin delete?');">delete</a>
                            </td>
                        </tr>


                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>