<?php
include 'config.php';
$sql = "SELECT * FROM tbl_hak_akses";
$hasil = mysqli_query($con, $sql);


$sql2 = "SELECT * FROM tbl_pegawai";
$hasil2 = mysqli_query($con, $sql2);
?>

<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->
<a href="?menu=pengguna&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw fa-angle-left"></i>
    <span>Kembali</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Penggunaaa</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="proses_tambah_data_user.php" onSubmit="return validasi()">
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="Username..." name="username">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Password..." name="password">
                </div>
            </div>

            <div class="form-group row">
                <label for="role" class="col-sm-2 col-form-label">Nama Pegawai</label>
                <div class="col-sm-10">
                    <select name="nama_pegawai" class="form-control" id="nama_pegawai">
                        <option value="">--Pilih--</option>

                        <?php
                        while ($row = mysqli_fetch_assoc($hasil2)) {
                        ?>
                            <option value="<?= $row['id_pegawai']; ?>"><?= $row['nama_pegawai']; ?></option>
                        <?php
                        } //end while
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="role" class="col-sm-2 col-form-label">Hak Akses</label>
                <div class="col-sm-10">
                    <select name="hak_akses" class="form-control" id="hak_akses">
                        <option value="">--Pilih--</option>

                        <?php
                        while ($row = mysqli_fetch_assoc($hasil)) {
                        ?>
                            <option value="<?= $row['id_hak_akses']; ?>"><?= $row['hak_akses']; ?></option>
                        <?php
                        } //end while
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">

                <div class="col-sm-12">
                    <button class="btn btn-success float-right" type="submit"><i class=" fas fa-fw fa-save"></i>Simpan</button>

                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function validasi() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var nama_pegawai = document.getElementById("nama_pegawai").value;
        var hak_akses = document.getElementById("hak_akses").value;


        if (username != "" && password != "" && nama_pegawai != "" && hak_akses != "") {
            return true;
        }
        if (username == "") {
            alert('Username harus diisi');
            return false;
        }
        if (password == "") {
            alert('Password harus diisi');
            return false;
        }
        if (nama_pegawai == "") {
            alert('nama pegawai harus diisi');
            return false;
        }
        if (hak_akses == "") {
            alert('Hak akses harus diisi');
            return false;
        }
    }
</script>