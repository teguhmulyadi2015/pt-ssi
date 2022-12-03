
<?php
include 'config.php';
$keterangan = $_POST['keterangan'];
$nama_bahan_baku = $_POST['nama_bahan_baku'];

$sql = "INSERT INTO tbl_bahan_baku_cacat (keterangan, id_bahan_baku) VALUES ('$keterangan', '$nama_bahan_baku')";
$hasil = mysqli_query($con, $sql);

if ($hasil) {
    echo '<script>alert("berhasil"); document.location="../qc/index.php?menu=bahan_baku_cacat&action=tampil";</script>';
} else {
    echo '<script>alert("gagal"); document.location="../qc/index.php?menu=bahan_baku_cacat&action=tampil";</script>';
}

?>