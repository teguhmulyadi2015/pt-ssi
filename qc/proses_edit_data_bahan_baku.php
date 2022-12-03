
<?php 
    include 'config.php';
    $id_bahan_baku = $_POST['id_bahan_baku'];
    $nama_bahan_baku = $_POST['nama_bahan_baku'];
    $stok = $_POST['stok'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $jenis_bahan_baku = $_POST['jenis_bahan_baku'];
    

    $sql = "UPDATE tbl_bahan_baku SET
            nama_bahan_baku = '$nama_bahan_baku',
            stok = '$stok',
            tgl_masuk = '$tgl_masuk',
            id_jenis_bahan_baku = '$jenis_bahan_baku'
            WHERE id_bahan_baku = $id_bahan_baku
    ";
    $hasil = mysqli_query($con, $sql);

    if($hasil){
        echo '<script>alert("berhasil"); document.location="../qc/index.php?menu=bahan_baku&action=tampil";</script>';
    }else{
        echo '<script>alert("gagal"); document.location="../qc/index.php?menu=bahan_baku&action=tampil";</script>';
    }

?>