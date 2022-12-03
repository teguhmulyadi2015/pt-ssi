
<?php
include 'config.php';
$id_perencanaan = $_POST['id_perencanaan'];
$kebutuhan_jumlah_bahan_baku = $_POST['kebutuhan_jumlah_bahan_baku'];
$keterangan = $_POST['keterangan'];

$sql = "UPDATE tbl_perencanaan SET
        kebutuhan_jumlah_bahan_baku = '$kebutuhan_jumlah_bahan_baku',
        keterangan = '$keterangan'
        WHERE id_perencanaan = $id_perencanaan
    ";
$hasil = mysqli_query($con, $sql);

if ($hasil) {
    echo '<script>alert("berhasil"); document.location="../manager/index.php?menu=perencanaan&action=tampil";</script>';
} else {
    echo '<script>alert("gagal"); document.location="../manager/index.php?menu=perencanaan&action=tampil";</script>';
}

?>