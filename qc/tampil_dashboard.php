<?php
include 'config.php';

//bahan baku
$sql = "SELECT COUNT(*) AS total_bahan_baku FROM tbl_bahan_baku";
$hasil = mysqli_query($con, $sql);
$result = mysqli_fetch_assoc($hasil);


//jenis bahan baku
$sql1 = "SELECT COUNT(*) AS total_jenis_bahan_baku FROM tbl_jenis_bahan_baku";
$hasil1 = mysqli_query($con, $sql1);
$result1 = mysqli_fetch_assoc($hasil1);


//bahan baku cacat
$sql2 = "SELECT COUNT(*) AS total_bahan_baku_cacat FROM tbl_bahan_baku_cacat";
$hasil2 = mysqli_query($con, $sql2);
$result2 = mysqli_fetch_assoc($hasil2);

?>


<h1 class="h3 mb-4 text-gray-800">Ini Dashboard</h1>

<!-- Content Row -->
<div class="row">


    <!-- Data 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Bahan Baku</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $result['total_bahan_baku']; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Jenis Bahan Baku</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $result1['total_jenis_bahan_baku']; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bahan Baku Cacat</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $result2['total_bahan_baku_cacat']; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>