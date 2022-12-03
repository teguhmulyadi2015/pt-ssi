
<?php
include 'config.php';
$id_jenis_bahan_baku = $_POST['id_jenis_bahan_baku'];
$nama_jenis_bahan_baku = $_POST['nama_jenis_bahan_baku'];

$sql = "UPDATE tbl_jenis_bahan_baku SET
            nama_jenis_bahan_baku = '$nama_jenis_bahan_baku'
            WHERE id_jenis_bahan_baku = $id_jenis_bahan_baku
    ";
$hasil = mysqli_query($con, $sql);

if ($hasil) {
    echo '<script>alert("berhasil"); document.location="../qc/index.php?menu=jenis_bahan_baku&action=tampil";</script>';
} else {
    echo '<script>alert("gagal"); document.location="../qc/index.php?menu=jenis_bahan_baku&action=tampil";</script>';
}

?>