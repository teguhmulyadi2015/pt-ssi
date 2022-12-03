<?php
include 'config.php';
$sql = "SELECT * FROM tbl_bahan_baku
        JOIN tbl_jenis_bahan_baku ON tbl_bahan_baku.id_jenis_bahan_baku=tbl_jenis_bahan_baku.id_jenis_bahan_baku
        ORDER BY tbl_bahan_baku.id_bahan_baku ASC";
$hasil = mysqli_query($con, $sql);
?>

<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->

    <a href="?menu=bahan_baku&action=tambah" class="btn btn-success my-2">
        <i class="fas fa-fw fa-plus-square"></i>
        <span>Tambah Data</span>
    </a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bahan Baku</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Bahan Baku</th>
                        <th>Stok</th>
                        <th>Jenis</th>
                        <th>Tgl Masuk</th>
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
                            <td><?= $row['nama_bahan_baku']; ?></td>
                            <td><?= $row['stok']; ?></td>
                            <td><?= $row['nama_jenis_bahan_baku']; ?></td>
                            <td><?= date(('d F Y'),strtotime($row['tgl_masuk']));?></td>
                            <td>
                                <a href="?menu=bahan_baku&action=detail&id=<?= $row['id_bahan_baku'] ?>" class="badge badge-info">info</a>                              
                                <a href="?menu=bahan_baku&action=edit&id=<?= $row['id_bahan_baku'] ?>" class="badge badge-warning">edit</a>
                                <a href="proses_delete_data_bahan_baku.php?id=<?= $row['id_bahan_baku'] ?>" class="badge badge-danger" onclick="return confirm('Yakin delete?');">delete</a>
                            </td>
                        </tr>


                    <?php }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>









