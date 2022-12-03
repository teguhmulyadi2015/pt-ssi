
<?php 
    include 'config.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_bahan_baku WHERE id_bahan_baku = $id";
    $hasil = mysqli_query($con, $sql);

    if($hasil){
        echo '<script>alert("berhasil dihapus"); document.location="../qc/index.php?menu=bahan_baku&action=tampil";</script>';
    }else{
        echo '<script>alert("gagal dihapus"); document.location="../qc/index.php?menu=bahan_baku&action=tampil";</script>';
    }

?>