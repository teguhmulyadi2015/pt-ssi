
<?php
include 'config.php';
$id = $_POST['id'];
$jabatan = $_POST['jabatan'];

$sql2 = "SELECT * FROM tbl_jabatan WHERE nama_jabatan = '$jabatan'";
$hasil2 = mysqli_query($con, $sql2);



if (mysqli_num_rows($hasil2) > 0) {
    echo '<script>alert("Nama Jabatan sudah ada di database");history.go(-1);</script>';
} else {
    $sql = "INSERT INTO tbl_jabatan (nama_jabatan) VALUES ('$jabatan')";
    $hasil = mysqli_query($con, $sql);
    if ($hasil) {
        echo '<script>alert("berhasil"); document.location="../admin/index.php?menu=jabatan&action=tampil";</script>';
    } else {
        echo '<script>alert("gagal"); document.location="../admin/index.php?menu=jabatan&action=tampil";</script>';
    }
}






?>