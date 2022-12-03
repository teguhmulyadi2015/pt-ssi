<?php
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_jenis_bahan_baku WHERE id_jenis_bahan_baku=$id";
$hasil = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($hasil);

?>
<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->
<a href="?menu=jenis_bahan_baku&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw fa-angle-left"></i>
    <span>Kembali</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Jenis Bahan Baku</h6>
    </div>
    <div class="card-body">
        <form action="proses_edit_data_jenis_bahan_baku.php" method="POST" onSubmit="return validasi()">

            <input type="hidden" name="id_jenis_bahan_baku" value="<?= $row['id_jenis_bahan_baku']; ?>">
            <div class="form-group row">
                <label for="nama_jenis_bahan_baku" class="col-sm-2 col-form-label">Jenis Bahan Baku</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_jenis_bahan_baku" name="nama_jenis_bahan_baku" value="<?= $row['nama_jenis_bahan_baku']; ?>">
                </div>
            </div>
            <div class="form-group row">

                <div class="col-sm-12">
                    <button class="btn btn-success float-right " type="submit"><i class=" fas fa-fw fa-save"></i>Simpan</button>

                </div>
            </div>

        </form>
    </div>
</div>

<script type="text/javascript">
    function validasi() {
        var nama_jenis_bahan_baku = document.getElementById("nama_jenis_bahan_baku").value;

        if (nama_jenis_bahan_baku != "") {
            return true;
        }
        if (nama_jenis_bahan_baku == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('nama jenis bahan baku harus diisi');
            return false;
        }
    }
</script>