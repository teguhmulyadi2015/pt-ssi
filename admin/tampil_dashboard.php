<?php
include 'config.php';

$sql1 = "SELECT COUNT(*) AS jumlah FROM tbl_pengguna";
$hasil1 = mysqli_query($con, $sql1);
$result1 = mysqli_fetch_assoc($hasil1);

$sql2 = "SELECT COUNT(*) AS jumlah FROM tbl_jabatan";
$hasil2 = mysqli_query($con, $sql2);
$result2 = mysqli_fetch_assoc($hasil2);

$sql3 = "SELECT COUNT(*) AS jumlah FROM tbl_pegawai";
$hasil3 = mysqli_query($con, $sql3);
$result3 = mysqli_fetch_assoc($hasil3);

?>

<h1 class="h3 mb-4 text-gray-800">Ini Dashboard</h1>

<!-- Content Row -->
<div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pengguna</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $result1['jumlah']; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Jabatan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $result2['jumlah']; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pegawai</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $result3['jumlah']; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

 


</div>