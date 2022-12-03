<?php
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_bahan_baku_cacat
        JOIN tbl_bahan_baku ON tbl_bahan_baku.id_bahan_baku=tbl_bahan_baku_cacat.id_bahan_baku
        WHERE tbl_bahan_baku_cacat.id_bahan_baku_cacat=$id";
$hasil = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($hasil);

?>
<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->
<a href="?menu=bahan_baku_cacat&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw fa-angle-left"></i>
    <span>Kembali</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Bahan Baku Cacat</h6>
    </div>
    <div class="card-body">
        <form action="proses_edit_data_bahan_baku_cacat.php" method="POST" onSubmit="return validasi()">

            <input type="hidden" name="id_bahan_baku_cacat" value="<?= $row['id_bahan_baku_cacat']; ?>">

            <div class="form-group row">
                <label for="nama_bahan_baku" class="col-sm-2 col-form-label">Nama Bahan Baku</label>
                <div class="col-sm-10">
                    <select name="nama_bahan_baku" class="form-control" id="nama_bahan_baku">
                        <option value="">--Pilih--</option>
                        <?php
                        $kode_bahan_baku = $row['id_bahan_baku'];

                        $sql2 = "SELECT * FROM tbl_bahan_baku ";
                        $hasil2 = mysqli_query($con, $sql2);
                        while ($row2 = mysqli_fetch_assoc($hasil2)) {
                            $kd_bahan_baku = $row2['id_bahan_baku'];
                            $nm_bahan_baku = $row2['nama_bahan_baku'];

                            if ($kode_bahan_baku == $kd_bahan_baku) {
                                $cek = "selected";
                            } else {
                                $cek = "";
                            }
                            echo "<option value='$kd_bahan_baku' $cek>$nm_bahan_baku</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="keterangan" class="col-sm-2 col-form-label">Ketarangan</label>
                <div class="col-sm-10">
                    <textarea cols="70" rows="6" class="form-control" id="keterangan" name="keterangan"><?= $row['keterangan']; ?></textarea>
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
            alert('Keterangan harus diisi');
            return false;
        }
    }
</script>