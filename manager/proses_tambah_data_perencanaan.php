
<?php
include 'config.php';
$id_purchase_order = $_POST['id_purchase_order'];
$kebutuhan_jumlah_bahan_baku = $_POST['kebutuhan_jumlah_bahan_baku'];
$keterangan = $_POST['keterangan'];

$sql = "INSERT INTO tbl_perencanaan (id_purchase_order, kebutuhan_jumlah_bahan_baku, keterangan) VALUES ($id_purchase_order, '$kebutuhan_jumlah_bahan_baku', '$keterangan')";
$hasil = mysqli_query($con, $sql);

if ($hasil) {
    echo '<script>alert("berhasil"); document.location="../manager/index.php?menu=perencanaan&action=tampil";</script>';
} else {
    echo '<script>alert("gagal"); document.location="../manager/index.php?menu=perencanaan&action=tampil";</script>';
}

?>