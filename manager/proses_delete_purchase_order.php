
<?php 
    include 'config.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_purchaseorder WHERE id = $id";
    $hasil = mysqli_query($con, $sql);

    if($hasil){
        echo '<script>alert("berhasil dihapus"); document.location="../manager/index.php?menu=po&action=tampil";</script>';
    }else{
        echo '<script>alert("gagal dihapus"); document.location="../manager/index.php?menu=po&action=tampil";</script>';
    }

?>