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

    //data bahan baku
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "bahan_baku") && ($_GET['action'] == "tampil")) {

        include('tampil_data_bahan_baku.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "bahan_baku") && ($_GET['action'] == "edit")) {

        include('edit_data_bahan_baku.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "bahan_baku") && ($_GET['action'] == "tambah")) {

        include('tambah_data_bahan_baku.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "bahan_baku") && ($_GET['action'] == "detail")) {

        include('proses_detail_data_bahan_baku.php');
    }




    //jenis bahan baku
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "jenis_bahan_baku") && ($_GET['action'] == "tampil")) {

        include('tampil_data_jenis_bahan_baku.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "jenis_bahan_baku") && ($_GET['action'] == "tambah")) {

        include('tambah_data_jenis_bahan_baku.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "jenis_bahan_baku") && ($_GET['action'] == "edit")) {

        include('edit_data_jenis_bahan_baku.php');
    }


    // bahan baku cacat
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "bahan_baku_cacat") && ($_GET['action'] == "tampil")) {

        include('tampil_data_bahan_baku_cacat.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "bahan_baku_cacat") && ($_GET['action'] == "tambah")) {

        include('tambah_data_bahan_baku_cacat.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "bahan_baku_cacat") && ($_GET['action'] == "edit")) {

        include('edit_data_bahan_baku_cacat.php');
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