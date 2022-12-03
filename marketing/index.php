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

    //purchase order
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "po") && ($_GET['action'] == "tampil")) {

        include('tampil_purchase_order.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "po") && ($_GET['action'] == "detail")) {

        include('proses_detail_purchase_order.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "po") && ($_GET['action'] == "tambah")) {

        include('tambah_purchase_order.php');
    }
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "po") && ($_GET['action'] == "edit")) {

        include('edit_purchase_order.php');
    }
    //jip
    if ((isset($_GET['menu'])) && ($_GET['menu'] == "jip") && ($_GET['action'] == "tampil")) {

        include('tampil_data_jip.php');
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