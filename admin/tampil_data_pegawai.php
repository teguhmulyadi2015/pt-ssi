<?php
include 'config.php';
$sql = "SELECT * FROM tbl_pegawai JOIN tbl_jabatan ON tbl_pegawai.id_jabatan=tbl_jabatan.id_jabatan";
$hasil = mysqli_query($con, $sql);
?>

<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->

    <a href="?menu=pegawai&action=tambah" class="btn btn-success my-2">
        <i class="fas fa-fw fa-plus-square"></i>
        <span>Tambah Data</span>
    </a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>NIP</th>
                        <th>Nama Pegawai</th>
                        <th>Alamat</th>
                        <th>No. Telepon</th>
                        <th>Email</th>
                        <th>Jabatan</th>
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
                            <td><?= $row['nip']; ?></td>
                            <td><?= $row['nama_pegawai']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $row['no_telepon']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['nama_jabatan']; ?></td>
                            <td>
                                <a href="?menu=pegawai&action=detail&id=<?= $row['id_pegawai'] ?>" class="badge badge-info">info</a>
                                <a href="?menu=pegawai&action=edit&id=<?= $row['id_pegawai'] ?>" class="badge badge-warning">edit</a>
                                <a href="proses_delete_data_pegawai.php?id=<?= $row['id_pegawai'] ?>" class="badge badge-danger" onclick="return confirm('Yakin delete?');">delete</a>
                            </td>
                        </tr>


                    <?php }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>