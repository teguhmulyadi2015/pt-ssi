
<?php 
    include 'config.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_pegawai WHERE id_pegawai = $id";
    $hasil = mysqli_query($con, $sql);

    if($hasil){
        echo '<script>alert("berhasil dihapus"); document.location="../admin/index.php?menu=pegawai&action=tampil";</script>';
    }else{
        echo '<script>alert("gagal dihapus"); document.location="../admin/index.php?menu=pegawai&action=tampil";</script>';
    }

?>