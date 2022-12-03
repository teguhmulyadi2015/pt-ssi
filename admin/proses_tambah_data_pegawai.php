
<?php
include 'config.php';
$nip = $_POST['nip'];
$nama_pegawai = $_POST['nama_pegawai'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$email = $_POST['email'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jabatan = $_POST['jabatan'];

if (is_numeric($nama_pegawai)) {
    echo '<script>alert("Nama Pegawai tidak boleh angka!");history.go(-1);</script>';
} elseif (is_numeric($tempat_lahir)) {
    echo '<script>alert("Tempat lahir tidak boleh angka!");history.go(-1);</script>';
} else {
    $sql = "INSERT INTO tbl_pegawai (nip, nama_pegawai, alamat, no_telepon, email, tempat_lahir, tgl_lahir, id_jabatan) VALUES ('$nip', '$nama_pegawai', '$alamat', '$no_telepon', '$email', '$tempat_lahir', '$tgl_lahir', '$jabatan')";
    $hasil = mysqli_query($con, $sql);

    if ($hasil) {
        echo '<script>alert("berhasil"); document.location="../admin/index.php?menu=pegawai&action=tampil";</script>';
    } else {
        echo '<script>alert("gagal"); document.location="../admin/index.php?menu=pegawai&action=tampil";</script>';
    }
}





?>