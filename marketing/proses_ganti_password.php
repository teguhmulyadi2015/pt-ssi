
<?php 
    include 'config.php';
    $id_pengguna = $_SESSION['id_pengguna'];
    $password_baru1 = $_POST['password_baru1'];

    $sql = "UPDATE tbl_pengguna SET
            password = '$password_baru1',
            
            WHERE id = $id_pengguna
    ";
    $hasil = mysqli_query($con, $sql);

    if($hasil){
        echo '<script>alert("password sudah diubah,, silahkan login kembali"); document.location="../pt-ssi";</script>';
    }else{
        echo '<script>alert("gagal, terjadi kesalahan"); document.location="../pt-ssi";</script>';
    }

?>