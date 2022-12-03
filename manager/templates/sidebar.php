<?php $admin = $_SESSION['manager']; ?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center  px-0" href="#">
        <div class="sidebar-brand-icon">
            <!-- <i class="fas fa-building"></i> -->
            <i><img src="../assets/img/pt-ssi2.png" width="60pt" height="60pt"></i>
        </div>
        <div class="sidebar-brand-text px-0 text-warning"><?= "PT. Safety Sign Indonesia"; ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading text-warning">
        Manager
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

        <!-- 
    <?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "barang") && ($_GET['action'] == "tampil")) :

        ?>
        <li class="nav-item active">
        <?php else : ?>
        <li class="nav-item">
        <?php endif; ?>
        <a class="nav-link collapsed pb-2 pt-2" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-database"></i>
            <span>Data Master</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="?menu=barang&action=tampil">Data Barang</a>
                <a class="collapse-item" href="#">Data Karyawan</a>
            </div>
        </div>
    </li> -->



        <?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "po") && ($_GET['action'] == "tampil")) : ?>
            <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>
            <a class="nav-link pb-2 pt-2" href="?menu=po&action=tampil">
                <i class="fas fa-fw fa-shopping-cart"></i>
                <span>Purchase Order</span></a>
            </li>

            <?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "penjadwalan") && ($_GET['action'] == "tampil")) : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link pb-2 pt-2" href="?menu=penjadwalan&action=tampil">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Prioritas Penjadwalan</span></a>
                </li>


                <?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "perencanaan") && ($_GET['action'] == "tampil")) : ?>
                    <li class="nav-item active">
                    <?php else : ?>
                    <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link pb-2 pt-2" href="?menu=perencanaan&action=tampil">
                        <i class="fas fa-fw fa-file-signature"></i>
                        <span>Perencanaan</span></a>
                    </li>

                    <!-- <?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "bahan_baku") && ($_GET['action'] == "tampil")) : ?>
                        <li class="nav-item active">
                        <?php else : ?>
                        <li class="nav-item">
                        <?php endif; ?>
                        <a class="nav-link pb-2 pt-2" href="?menu=bahan_baku&action=tampil">
                            <i class="fas fa-fw fa-warehouse"></i>
                            <span>Data Bahan Baku</span></a>
                        </li> -->

                    <?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "jip") && ($_GET['action'] == "tampil")) : ?>
                        <li class="nav-item active">
                        <?php else : ?>
                        <li class="nav-item">
                        <?php endif; ?>
                        <a class="nav-link pb-2 pt-2" href="?menu=jip&action=tampil">
                            <i class="fas fa-fw fa-clipboard-list"></i>
                            <span>Jadwal Induk Produksi</span></a>
                        </li>




                        <hr class="sidebar-divider">
                        <div class="sidebar-heading text-warning">
                            Profil
                        </div>

                        <?php if ((isset($_GET['menu'])) && ($_GET['menu'] == "profil_saya") && ($_GET['action'] == "tampil")) :

                            ?>
                            <li class="nav-item active">
                            <?php else : ?>
                            <li class="nav-item">
                            <?php endif; ?>
                            <a class="nav-link pb-2 pt-2" href="?menu=profil_saya&action=tampil">
                                <i class="fas fa-fw fa-user"></i>
                                <span>Profil</span></a>
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