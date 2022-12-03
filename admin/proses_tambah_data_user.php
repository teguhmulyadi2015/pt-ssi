
<?php 
    include 'config.php';
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama_pegawai = $_POST['nama_pegawai'];
    $hak_akses = $_POST['hak_akses'];

    $sql = "INSERT INTO tbl_pengguna (username, password, id_pegawai, id_hak_akses) VALUES ('$username', '$password', '$nama_pegawai', '$hak_akses')";
    $hasil = mysqli_query($con, $sql);

    if($hasil){
        echo '<script>alert("berhasil"); document.location="../admin/index.php?menu=pengguna&action=tampil";</script>';
    }else{
        echo '<script>alert("gagal"); document.location="../admin/index.php?menu=pengguna&action=tampil";</script>';
    }

?>