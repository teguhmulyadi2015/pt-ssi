
<?php
include 'config.php';
$id = $_GET['id'];

$sql = "UPDATE tbl_purchaseorder SET
            status = '1'
            WHERE id_purchase_order = $id
    ";
$hasil = mysqli_query($con, $sql);

if ($hasil) {
    echo '<script>alert("berhasil"); document.location="../manager/index.php?menu=jip&action=tampil";</script>';
} else {
    echo '<script>alert("gagal"); document.location="../manager/index.php?menu=jip&action=tampil";</script>';
}

?>