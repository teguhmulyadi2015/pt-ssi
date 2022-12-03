
<?php
include 'config.php';
$id = $_GET['id'];

$sql = "DELETE FROM tbl_perencanaan WHERE id_perencanaan = $id";
$hasil = mysqli_query($con, $sql);

if ($hasil) {
    echo '<script>alert("berhasil dihapus"); document.location="../manager/index.php?menu=perencanaan&action=tampil";</script>';
} else {
    echo '<script>alert("gagal dihapus"); document.location="../manager/index.php?menu=perencanaan&action=tampil";</script>';
}

?>