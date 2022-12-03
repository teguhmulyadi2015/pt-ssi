<?php include('akses.php'); ?>
<?php $admin = $_SESSION['manager']; ?>
<?php include('templates/header.php'); ?>
<?php include('templates/sidebar.php'); ?>
<?php include('templates/topbar.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- <?php $admin = $_SESSION['manager']; ?>
    <h1><?php echo "halo" . $admin; ?></h1> -->


    <!-- ini bagian manager -->
    <?php
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "dashboard") && ($_GET['action'] == "tampil")) {

        include('tampil_dashboard.php');
    }


    //purchase order
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "po") && ($_GET['action'] == "tampil")) {

        include('tampil_purchase_order.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "po") && ($_GET['action'] == "detail")) {

        include('proses_detail_purchase_order.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "po") && ($_GET['action'] == "edit")) {

        include('edit_purchase_order.php');
    }



    //penjadwalan
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "penjadwalan") && ($_GET['action'] == "tampil")) {

        include('tampil_penjadwalan.php');
    }


    //perencanaan
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "perencanaan") && ($_GET['action'] == "tampil")) {

        include('tampil_data_perencanaan.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "perencanaan") && ($_GET['action'] == "tambah")) {

        include('tambah_data_perencanaan.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "perencanaan") && ($_GET['action'] == "edit")) {

        include('edit_data_perencanaan.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "perencanaan") && ($_GET['action'] == "detail")) {

        include('proses_detail_perencanaan.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "perencanaan") && ($_GET['action'] == "hapus")) {

        include('proses_delete_perencanaan.php');
    }


    //jip
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "jip") && ($_GET['action'] == "tampil")) {

        include('tampil_data_jip.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "jip") && ($_GET['action'] == "konfirmasi")) {

        include('proses_konfirmasi_jip.php');
    }


    //bahan baku
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "bahan_baku") && ($_GET['action'] == "tampil")) {

        include('tampil_data_bahan_baku.php');
    }


    // ini bagian profil
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