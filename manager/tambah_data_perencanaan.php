<?php
include 'config.php';
$sql = "SELECT id_purchase_order, nomor_po, nama_perusahaan FROM tbl_purchaseorder WHERE id_purchase_order NOT IN (SELECT id_purchase_order FROM tbl_perencanaan)";
$hasil = mysqli_query($con, $sql);

?>

<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->
<a href="?menu=perencanaan&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw fa-angle-left"></i>
    <span>Kembali</span>
</a>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Perencanaan</h6>
    </div>
    <div class="card-body">
        <form action="proses_tambah_data_perencanaan.php" method="POST" onSubmit="return validasi()">

            <div class="form-group row">
                <label for="id_purchase_order" class="col-sm-2 col-form-label">Purchase Order</label>
                <div class="col-sm-10">
                    <select name="id_purchase_order" class="form-control" id="id_purchase_order">
                        <option value="">--Pilih--</option>

                        <?php
                        while ($row = mysqli_fetch_assoc($hasil)) {
                        ?>
                            <option value="<?= $row['id_purchase_order']; ?>"><?= $row['nomor_po'] . "-" . $row['nama_perusahaan']; ?></option>
                        <?php
                        } //end while
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="kebutuhan_jumlah_bahan_baku" class="col-sm-2 col-form-label">Kebutuhan Bahan Baku</label>
                <div class="col-sm-10">
                    <textarea cols="70" rows="6" class="form-control" id="kebutuhan_jumlah_bahan_baku" name="kebutuhan_jumlah_bahan_baku"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <textarea cols="70" rows="6" class="form-control" id="keterangan" name="keterangan" placeholder="Boleh dikosongkan"></textarea>
                </div>
            </div>


            <div class="form-group row">

                <div class="col-sm-12">
                    <button class="btn btn-success float-right " type="submit" name="btnTambahPO"><i class=" fas fa-fw fa-save"></i>Simpan</button>
                    <button class="btn btn-warning float-right" type="reset"><i class=" fas fa-fw fa-sync-alt"></i>Reset</button>

                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    function validasi() {
        var id_purchase_order = document.getElementById("id_purchase_order").value;
        var kebutuhan_jumlah_bahan_baku = document.getElementById("kebutuhan_jumlah_bahan_baku").value;


        if (id_purchase_order != "" && kebutuhan_jumlah_bahan_baku != "") {
            return true;
        }
        if (id_purchase_order == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('purchase order harus diisi');
            return false;
        }
        if (kebutuhan_jumlah_bahan_baku == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('kebutuhan jumlah bahan baku harus diisi');
            return false;
        }

    }
</script>