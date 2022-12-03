<?php session_start();
include 'config.php';

if (isset($_POST['btnLogin'])) {


    $username = htmlentities($_POST['username']);
    $password = htmlentities(md5($_POST['password']));

    $sql = "SELECT *
    FROM tbl_pengguna 
    JOIN tbl_hak_akses ON tbl_pengguna.id_hak_akses = tbl_hak_akses.id_hak_akses 
    JOIN tbl_pegawai ON tbl_pengguna.id_pegawai = tbl_pegawai.id_pegawai
    WHERE username='$username' and password='$password'";
    $hasil = mysqli_query($con, $sql);

    if (mysqli_num_rows($hasil) == 0) {
        echo '<script language="javascript">alert("Username atau password salah!!!"); document.location="../pt-ssi/index.php";</script>';
    } else {
        $row = mysqli_fetch_assoc($hasil);
        if ($row['hak_akses'] == 'admin') {
            $_SESSION['admin'] = $username;
            $_SESSION['nama_pegawai'] = $row['nama_pegawai'];
            $_SESSION['id_hak_akses'] = $row['id_hak_akses'];
            $_SESSION['id_pengguna'] = $row['id_pengguna'];
            $_SESSION['status'] = 'login';
            echo '<script>document.location="../pt-ssi/admin/index.php?menu=dashboard&action=tampil";</script>';
        } elseif ($row['hak_akses'] == 'manager') {
            $_SESSION['manager'] = $username;
            $_SESSION['nama_pegawai'] = $row['nama_pegawai'];
            $_SESSION['id_hak_akses'] = $row['id_hak_akses'];
            $_SESSION['id_pengguna'] = $row['id_pengguna'];
            $_SESSION['status'] = 'login';
            echo '<script>document.location="../pt-ssi/manager/index.php?menu=dashboard&action=tampil";</script>';
        } elseif ($row['hak_akses'] == 'marketing') {
            $_SESSION['marketing'] = $username;
            $_SESSION['nama_pegawai'] = $row['nama_pegawai'];
            $_SESSION['id_hak_akses'] = $row['id_hak_akses'];
            $_SESSION['id_pengguna'] = $row['id_pengguna'];
            $_SESSION['status'] = 'login';
            echo '<script>document.location="../pt-ssi/marketing/index.php?menu=dashboard&action=tampil";</script>';
        }
        // elseif ($row['hak_akses'] == 'qc') {
        //     $_SESSION['qc'] = $username;
        //     $_SESSION['nama_pegawai'] = $row['nama_pegawai'];
        //     $_SESSION['id_hak_akses'] = $row['id_hak_akses'];
        //     $_SESSION['id_pengguna'] = $row['id_pengguna'];
        //     $_SESSION['status'] = 'login';
        //     echo '<script>document.location="../pt-ssi/qc/index.php?menu=dashboard&action=tampil";</script>';
        // }
    }
}
