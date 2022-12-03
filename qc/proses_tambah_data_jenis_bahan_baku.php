
<?php
include 'config.php';
$nama_jenis_bahan_baku = $_POST['nama_jenis_bahan_baku'];

$sql = "INSERT INTO tbl_jenis_bahan_baku (nama_jenis_bahan_baku) VALUES ('$nama_jenis_bahan_baku')";
$hasil = mysqli_query($con, $sql);

if ($hasil) {
    echo '<script>alert("berhasil"); document.location="../qc/index.php?menu=jenis_bahan_baku&action=tampil";</script>';
} else {
    echo '<script>alert("gagal"); document.location="../qc/index.php?menu=jenis_bahan_baku&action=tampil";</script>';
}

?>