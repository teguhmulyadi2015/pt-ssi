
<?php
include 'config.php';
$id_pegawai = $_POST['id_pegawai'];
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

    $sql = "UPDATE tbl_pegawai SET
    nip = '$nip',
    nama_pegawai = '$nama_pegawai',
    alamat = '$alamat',
    no_telepon = '$no_telepon',
    email = '$email',
    tempat_lahir = '$tempat_lahir',
    tgl_lahir = '$tgl_lahir',
    id_jabatan = '$jabatan'
    WHERE id_pegawai = $id_pegawai
";
    $hasil = mysqli_query($con, $sql);

    if ($hasil) {
        echo '<script>alert("berhasil"); document.location="../admin/index.php?menu=pegawai&action=tampil";</script>';
    } else {
        echo '<script>alert("gagal"); document.location="../admin/index.php?menu=pegawai&action=tampil";</script>';
    }
}


?>