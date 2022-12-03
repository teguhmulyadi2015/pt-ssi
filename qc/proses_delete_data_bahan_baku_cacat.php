
<?php
include 'config.php';
$id = $_GET['id'];

$sql = "DELETE FROM tbl_bahan_baku_cacat WHERE id_bahan_baku_cacat = $id";
$hasil = mysqli_query($con, $sql);

if ($hasil) {
    echo '<script>alert("berhasil dihapus"); document.location="../qc/index.php?menu=bahan_baku_cacat&action=tampil";</script>';
} else {
    echo '<script>alert("gagal dihapus"); document.location="../qc/index.php?menu=bahan_baku_cacat&action=tampil";</script>';
}

?>