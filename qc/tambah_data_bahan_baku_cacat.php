<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->
<a href="?menu=bahan_baku_cacat&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw fa-angle-left"></i>
    <span>Kembali</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Bahan Baku Cacat</h6>
    </div>
    <div class="card-body">
        <form action="proses_tambah_data_bahan_baku_cacat.php" method="POST" onSubmit="return validasi()">


            <div class="form-group row">
                <label for="jenis_bahan_baku" class="col-sm-2 col-form-label">Nama Bahan Baku</label>
                <div class="col-sm-10">
                    <select name="nama_bahan_baku" class="form-control" id="nama_bahan_baku">
                        <option value="">--Pilih--</option>
                        <?php
                        include 'config.php';

                        $sql = "SELECT * FROM tbl_bahan_baku";
                        $hasil = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_assoc($hasil)) {
                            ?>
                            <option value="<?= $row['id_bahan_baku']; ?>"><?= $row['nama_bahan_baku']; ?></option>

                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis_bahan_baku" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <textarea cols="70" rows="6" class="form-control" id="keterangan" name="keterangan"></textarea>
                </div>
            </div>



            <div class="form-group row">

                <div class="col-sm-12">
                    <button class="btn btn-success float-right " type="submit"><i class=" fas fa-fw fa-save"></i>Simpan</button>
                    <button class="btn btn-warning float-right" type="reset"><i class=" fas fa-fw fa-sync-alt"></i>Reset</button>

                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    function validasi() {
        var nama_bahan_baku = document.getElementById("nama_bahan_baku").value;
        var keterangan = document.getElementById("keterangan").value;

        if (nama_bahan_baku != "" && keterangan != "") {
            return true;
        }
        if (nama_bahan_baku == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('nama bahan baku harus diisi');
            return false;
        }
        if (keterangan == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('keterangan harus diisi');
            return false;
        }
    }
</script>