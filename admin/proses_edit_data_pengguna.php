
<?php 
    include 'config.php';
    $id_pengguna = $_POST['id_pengguna'];
    $username = $_POST['username'];
    $id_pegawai = $_POST['id_pegawai'];
    $id_hak_akses = $_POST['id_hak_akses'];

    $sql = "UPDATE tbl_pengguna SET
            username = '$username',
            id_pegawai = '$id_pegawai',
            id_hak_akses = '$id_hak_akses'
            WHERE id_pengguna = $id_pengguna
    ";
    $hasil = mysqli_query($con, $sql);

    if($hasil){
        echo '<script>alert("berhasil"); document.location="../admin/index.php?menu=pengguna&action=tampil";</script>';
    }else{
        echo '<script>alert("gagal"); document.location="../admin/index.php?menu=pengguna&action=tampil";</script>';
    }

?>