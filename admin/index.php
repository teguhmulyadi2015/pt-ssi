<?php include('akses.php'); ?>
<?php include('templates/header.php'); ?>
<?php include('templates/sidebar.php'); ?>
<?php include('templates/topbar.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- <?php $admin = $_SESSION['admin']; ?>
    <h1><?php echo "halo" . $admin; ?></h1> -->

    <?php
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "dashboard") && ($_GET['action'] == "tampil")) {

        include('tampil_dashboard.php');
    }
  

    //user
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "pengguna") && ($_GET['action'] == "tampil")) {

        include('tampil_data_user.php');
    }if ((isset($_GET['menu'])) && ($_GET['menu'] == "pengguna") && ($_GET['action'] == "tambah")) {

        include('tambah_data_user.php');
    }if ((isset($_GET['menu'])) && ($_GET['menu'] == "pengguna") && ($_GET['action'] == "detail")) {

        include('proses_detail_data_user.php');
    }if ((isset($_GET['menu'])) && ($_GET['menu'] == "pengguna") && ($_GET['action'] == "edit")) {

        include('edit_data_user.php');
    }
    
    //jabatan
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "jabatan") && ($_GET['action'] == "tampil")) {

        include('tampil_data_role.php');
    }if ((isset($_GET['menu'])) && ($_GET['menu'] == "jabatan") && ($_GET['action'] == "tambah")) {

        include('tambah_data_role.php');
    }if ((isset($_GET['menu'])) && ($_GET['menu'] == "jabatan") && ($_GET['action'] == "edit")) {

        include('edit_data_jabatan.php');
    }


    //pegawai
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "pegawai") && ($_GET['action'] == "tampil")) {

        include('tampil_data_pegawai.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "pegawai") && ($_GET['action'] == "detail")) {

        include('proses_detail_data_pegawai.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "pegawai") && ($_GET['action'] == "tambah")) {

        include('tambah_data_pegawai.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "pegawai") && ($_GET['action'] == "edit")) {

        include('edit_data_pegawai.php');
    }


    //profil
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "profil_saya") && ($_GET['action'] == "tampil")) {

        include('tampil_profil.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "ganti_password") && ($_GET['action'] == "tampil")) {

        include('ganti_password.php');
    }
    

    ?>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('templates/footer.php'); ?>