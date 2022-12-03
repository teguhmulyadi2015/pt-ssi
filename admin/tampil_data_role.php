<?php
include 'config.php';
$sql = "SELECT * FROM tbl_jabatan";
$hasil = mysqli_query($con, $sql);
?>

<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->

<a href="?menu=jabatan&action=tambah" class="btn btn-success my-2">
    <i class="fas fa-fw fa-plus-square"></i>
    <span>Tambah Data</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Jabatan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
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
                            <td><?= $row['nama_jabatan']; ?></td>
                            <td>
                                <a href="?menu=jabatan&action=edit&id=<?= $row['id_jabatan'] ?>" class="badge badge-warning">edit</a>
                                <!-- <a href="proses_delete_data_role.php?id=<?= $row['id_jabatan'] ?>" class="badge badge-danger" onclick="return confirm('Yakin delete?');">delete</a> -->
                            </td>
                        </tr>


                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>