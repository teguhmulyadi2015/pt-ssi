<?php
include 'config.php';

$sql = "SELECT COUNT(*) AS total_po FROM tbl_purchaseorder";
$hasil = mysqli_query($con, $sql);
$result = mysqli_fetch_assoc($hasil);

$now = date('Y-m-d');
$sql1 = "SELECT COUNT(*) AS po_masuk FROM tbl_purchaseorder WHERE start = '$now'";
$hasil1 = mysqli_query($con, $sql1);
$result1 = mysqli_fetch_assoc($hasil1);
?>



<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

<!-- Content Row -->
<div class="row">

    <!-- Data 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">PO Masuk Hari ini</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $result1['po_masuk']; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total PO</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $result['total_po']; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>