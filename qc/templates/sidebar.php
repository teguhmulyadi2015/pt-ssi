<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center px-0" href="#">
        <div class="sidebar-brand-icon ">
            <!-- <i class="fas fa-building"></i> -->
            <i><img src="../assets/img/pt-ssi2.png" width="60pt" height="60pt"></i>
        </div>
        <div class="sidebar-brand-text px-0 text-warning"><?= "PT. Safety Sign Indonesia"; ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading text-warning">
        Quality Control
    </div>

    <?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "dashboard") && ($_GET['action'] == "tampil")) :

        ?>
        <li class="nav-item active">
        <?php else : ?>
        <li class="nav-item">
        <?php endif; ?>
        <a class="nav-link pb-2 pt-2" href="?menu=dashboard&action=tampil">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "bahan_baku") && ($_GET['action'] == "tampil")) :

    ?>
    <li class="nav-item active">
    <?php else : ?>
    <li class="nav-item">
    <?php endif; ?>
    <a class="nav-link pb-2 pt-2" href="?menu=bahan_baku&action=tampil">
        <i class="fas fa-fw fa-warehouse"></i>
        <span>Data Bahan Baku</span></a>
    </li>

    <?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "jenis_bahan_baku") && ($_GET['action'] == "tampil")) :

    ?>
    <li class="nav-item active">
    <?php else : ?>
    <li class="nav-item">
    <?php endif; ?>
    <a class="nav-link pb-2 pt-2" href="?menu=jenis_bahan_baku&action=tampil">
        <i class="fas fa-fw fa-cubes"></i>
        <span>Jenis Bahan Baku</span></a>
    </li>

    <?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "bahan_baku_cacat") && ($_GET['action'] == "tampil")) :

    ?>
    <li class="nav-item active">
    <?php else : ?>
    <li class="nav-item">
    <?php endif; ?>
    <a class="nav-link pb-2 pt-2" href="?menu=bahan_baku_cacat&action=tampil">
        <i class="fas fa-fw fa-minus-circle"></i>
        <span>Bahan Baku Cacat</span></a>
    </li>


<!-- 
<?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "bahan_baku_keluar") && ($_GET['action'] == "tampil")) :

?>
<li class="nav-item active">
<?php else : ?>
<li class="nav-item">
<?php endif; ?>
<a class="nav-link pb-2 pt-2" href="?menu=bahan_baku_keluar&action=tampil">
    <i class="fas fa-fw fa-upload"></i>
    <span>Bahan Baku Keluar</span></a>
</li>

    <?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "bahan_baku_cacat") && ($_GET['action'] == "tampil")) :

    ?>
    <li class="nav-item active">
    <?php else : ?>
    <li class="nav-item">
    <?php endif; ?>
    <a class="nav-link pb-2 pt-2" href="?menu=bahan_baku_cacat&action=tampil">
        <i class="fas fa-fw fa-minus-circle"></i>
        <span>Bahan Baku Cacat</span></a>
    </li> -->
    

<!-- Divider -->
<hr class="sidebar-divider">
    <div class="sidebar-heading text-warning">
        PROFIL
    </div>
    <?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "profil_saya") && ($_GET['action'] == "tampil")) :

    ?>
    <li class="nav-item active">
    <?php else : ?>
    <li class="nav-item">
    <?php endif; ?>
    <a class="nav-link pb-2 pt-2" href="?menu=profil_saya&action=tampil">
        <i class="fas fa-fw fa-user"></i>
        <span>Profil Saya</span></a>
    </li>

    <?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "ganti_password") && ($_GET['action'] == "tampil")) :

    ?>
    <li class="nav-item active">
    <?php else : ?>
    <li class="nav-item">
    <?php endif; ?>
    <a class="nav-link pb-2 pt-2" href="?menu=ganti_password&action=tampil">
        <i class="fas fa-fw fa-key"></i>
        <span>Ganti Password</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
        <a class="nav-link pb-2 pt-2" href="../logout.php">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar - -> 