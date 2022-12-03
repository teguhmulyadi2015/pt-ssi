
<?php 
    include 'config.php';
    $id_jabatan = $_POST['id_jabatan'];
    $nama_jabatan = $_POST['nama_jabatan'];

    $sql = "UPDATE tbl_jabatan SET
            nama_jabatan = '$nama_jabatan'
            WHERE id_jabatan = $id_jabatan
    ";
    $hasil = mysqli_query($con, $sql);

    if($hasil){
        echo '<script>alert("berhasil"); document.location="../admin/index.php?menu=jabatan&action=tampil";</script>';
    }else{
        echo '<script>alert("gagal"); document.location="../admin/index.php?menu=jabatan&action=tampil";</script>';
    }

?>