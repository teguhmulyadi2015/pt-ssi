<?php
include 'config.php';

$sql = "SELECT COUNT(*) AS jumlah FROM tbl_purchaseorder";
$hasil = mysqli_query($con, $sql);
$result = mysqli_fetch_assoc($hasil);
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
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah PO</div>
                      
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $result['jumlah']; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>