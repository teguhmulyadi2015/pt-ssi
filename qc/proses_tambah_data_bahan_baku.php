
<?php 
    include 'config.php';
    $nama_bahan_baku = $_POST['nama_bahan_baku'];
    $jumlah = $_POST['jumlah'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $jenis_bahan_baku = $_POST['jenis_bahan_baku'];

    $sql = "INSERT INTO tbl_bahan_baku (nama_bahan_baku, stok, tgl_masuk, id_jenis_bahan_baku) VALUES ('$nama_bahan_baku', '$jumlah', '$tgl_masuk', '$jenis_bahan_baku')";
    $hasil = mysqli_query($con, $sql);

    if($hasil){
        echo '<script>alert("berhasil"); document.location="../qc/index.php?menu=bahan_baku&action=tampil";</script>';
    }else{
        echo '<script>alert("gagal"); document.location="../qc/index.php?menu=bahan_baku&action=tampil";</script>';
    }

?>