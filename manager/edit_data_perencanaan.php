<?php
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_perencanaan
        JOIN tbl_purchaseorder ON tbl_perencanaan.id_purchase_order=tbl_purchaseorder.id_purchase_order 
        WHERE tbl_perencanaan.id_perencanaan = $id";
$hasil = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($hasil);

?>
<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->
<a href="?menu=perencanaan&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw fa-angle-left"></i>
    <span>Kembali</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Perencanaan</h6>
    </div>
    <div class="card-body">
        <form action="proses_edit_data_perencanaan.php" method="POST" onSubmit="return validasi()">

            <input type="hidden" name="id_perencanaan" value="<?= $row['id_perencanaan']; ?>">
            <div class="form-group row">
                <label for="id_purchase_order" class="col-sm-2 col-form-label">Purchase Order</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_purchase_order" name="id_purchase_order" value="<?= $row['nomor_po'] . " - " . $row['nama_perusahaan']; ?>" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="kebutuhan_jumlah_bahan_baku" class="col-sm-2 col-form-label">Kebutuhan Bahan Baku</label>
                <div class="col-sm-10">
                    <textarea cols="70" rows="6" class="form-control" id="kebutuhan_jumlah_bahan_baku" name="kebutuhan_jumlah_bahan_baku"><?= $row['kebutuhan_jumlah_bahan_baku']; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <textarea cols="70" rows="6" class="form-control" id="keterangan" placeholder="Boleh dikosongkan" name="keterangan"><?= $row['keterangan']; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button class="btn btn-success float-right " type="submit" name="btnTambahPO"><i class=" fas fa-fw fa-save"></i>Simpan</button>
                </div>
            </div>



        </form>
    </div>
</div>

<script type="text/javascript">
    function validasi() {
        var kebutuhan_jumlah_bahan_baku = document.getElementById("kebutuhan_jumlah_bahan_baku").value;
        if (kebutuhan_jumlah_bahan_baku != "") {
            return true;
        }
        if (kebutuhan_jumlah_bahan_baku == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('kebutuhan bahan baku harus diisi');
            return false;
        }
    }
</script>