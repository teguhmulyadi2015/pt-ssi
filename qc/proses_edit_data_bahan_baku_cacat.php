
<?php
include 'config.php';
$id_bahan_baku_cacat = $_POST['id_bahan_baku_cacat'];
$nama_bahan_baku = $_POST['nama_bahan_baku'];
$keterangan = $_POST['keterangan'];


$sql = "UPDATE tbl_bahan_baku_cacat SET
            keterangan = '$keterangan',
            id_bahan_baku = '$nama_bahan_baku'
            WHERE id_bahan_baku_cacat = $id_bahan_baku_cacat
    ";
$hasil = mysqli_query($con, $sql);

if ($hasil) {
    echo '<script>alert("berhasil"); document.location="../qc/index.php?menu=bahan_baku_cacat&action=tampil";</script>';
} else {
    echo '<script>alert("gagal"); document.location="../qc/index.php?menu=bahan_baku_cacat&action=tampil";</script>';
}

?>