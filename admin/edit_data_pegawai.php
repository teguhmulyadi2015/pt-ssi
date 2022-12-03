<?php
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_pegawai WHERE id_pegawai = $id";
$hasil = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($hasil);

?>
<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->
<a href="?menu=pegawai&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw fa-angle-left"></i>
    <span>Kembali</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Pegawai</h6>
    </div>
    <div class="card-body">
        <form action="proses_edit_data_pegawai.php" method="POST" onSubmit="return validasi()">
            <input type="hidden" name="id_pegawai" value="<?= $row['id_pegawai']; ?>">
            <div class="form-group row">
                <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="nip" name="nip" value="<?= $row['nip']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="<?= $row['nama_pegawai']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea cols="70" rows="6" class="form-control" id="alamat" name="alamat"><?= $row['alamat']; ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="no_telepon" class="col-sm-2 col-form-label">No. Telepon</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="no_telepon" name="no_telepon" value="<?= $row['no_telepon']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="<?= $row['email']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $row['tempat_lahir']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-2 col-form-label">Tgl Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $row['tgl_lahir']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <select name="jabatan" class="form-control" id="jabatan">
                        <option value="">--Pilih--</option>
                        <?php
                        $kode_jabatan = $row['id_jabatan'];

                        $sql2 = "SELECT * FROM tbl_jabatan ";
                        $hasil2 = mysqli_query($con, $sql2);
                        while ($row2 = mysqli_fetch_assoc($hasil2)) {
                            $kd_jabatan = $row2['id_jabatan'];
                            $nm_jabatan = $row2['nama_jabatan'];

                            if ($kode_jabatan == $kd_jabatan) {
                                $cek = "selected";
                            } else {
                                $cek = "";
                            }
                            echo "<option value='$kd_jabatan' $cek>$nm_jabatan</option>";
                        }
                        ?>
                    </select>
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
        var nip = document.getElementById("nip").value;
        var nama_pegawai = document.getElementById("nama_pegawai").value;
        var alamat = document.getElementById("alamat").value;
        var no_telepon = document.getElementById("no_telepon").value;
        var email = document.getElementById("email").value;
        var tempat_lahir = document.getElementById("tempat_lahir").value;
        var tgl_lahir = document.getElementById("tgl_lahir").value;
        var jabatan = document.getElementById("jabatan").value;

        if (nip != "" && nama_pegawai != "" && alamat != "" && no_telepon != "" && email != "" && tempat_lahir != "" && tgl_lahir != "" && jabatan != "") {
            return true;
        }
        if (nip == "") {
            alert('NIP jabatan harus diisi');
            return false;
        }
        if (nama_pegawai == "") {
            alert('Nama pegawai jabatan harus diisi');
            return false;
        }
        if (alamat == "") {
            alert('Alamat jabatan harus diisi');
            return false;
        }
        if (no_telepon == "") {
            alert('No. Telepon jabatan harus diisi');
            return false;
        }
        if (email == "") {
            alert('Email jabatan harus diisi');
            return false;
        }
        if (tempat_lahir == "") {
            alert('Tempat lahir jabatan harus diisi');
            return false;
        }
        if (tgl_lahir == "") {
            alert('Tgl lahir jabatan harus diisi');
            return false;
        }
        if (jabatan == "") {
            alert(' jabatan harus diisi');
            return false;
        }
    }
</script>