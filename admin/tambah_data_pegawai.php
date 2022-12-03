
<?php 
include 'config.php';
$sql = "SELECT * FROM tbl_jabatan";
$hasil = mysqli_query($con,$sql);

?>

<a href="?menu=pegawai&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw fa-angle-left"></i>
    <span>Kembali</span>
</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pegawai</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="proses_tambah_data_pegawai.php" onSubmit="return validasi()">
            <div class="form-group row">
                <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="nip"  name="nip">
                </div>
            </div> 

            <div class="form-group row">
                <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_pegawai"  name="nama_pegawai">
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">ALamat</label>
                <div class="col-sm-10">
                <textarea cols="70" rows="6" class="form-control" id="alamat" name="alamat"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="no_telepon" class="col-sm-2 col-form-label">No. telepon</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="no_telepon"  name="no_telepon">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="email"  name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tempat_lahir"  name="tempat_lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-2 col-form-label">Tgl Lahir</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="tgl_lahir"  name="tgl_lahir">
                </div>
            </div>

            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <select name="jabatan" class="form-control" id="jabatan">
                        <option value="">--Pilih--</option>
                        
                        <?php 
                             while ($row = mysqli_fetch_assoc($hasil)) {
                        ?>
                        <option value="<?=$row['id_jabatan']; ?>"><?=$row['nama_jabatan']; ?></option>
                        <?php 
                             }//end while
                        ?>
                    </select>
                </div>
            </div>
           

            <div class="col-sm-12">
                    <button class="btn btn-success float-right" type="submit"><i class=" fas fa-fw fa-save"></i>Simpan</button>
            </div>
            

        </form>
    </div>
</div>

<script>
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
        alert('NIP harus diisi');
        return false;
    }
    if (nama_pegawai == "") {
        alert('nama pegawai harus diisi');
        return false;
    }
    if (alamat == "") {
        alert('Alamat harus diisi');
        return false;
    }
    if (no_telepon == "") {
        alert('No. Telepon harus diisi');
        return false;
    }
    if (email == "") {
        alert('Email harus diisi');
        return false;
    }
    if (tempat_lahir == "") {
        alert('Tempat lahir harus diisi');
        return false;
    }
    if (jabatan == "") {
        alert('Jabatan harus diisi');
        return false;
    }
}
</script>