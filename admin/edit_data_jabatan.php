<?php 
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_jabatan WHERE id_jabatan = $id";
$hasil = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($hasil);

?>
<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->
<a href="?menu=jabatan&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw fa-angle-left"></i>
    <span>Kembali</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Jabatan</h6>
    </div>
    <div class="card-body">
        <form action="proses_edit_data_jabatan.php" method="POST" onSubmit="return validasi()">
   
            <input type="hidden" name="id_jabatan" value="<?= $row['id_jabatan']; ?>">
            <div class="form-group row">
                <label for="nama_jabatan" class="col-sm-2 col-form-label">Nama Jabatan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" value="<?= $row['nama_jabatan']; ?>">
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
        var nama_jabatan = document.getElementById("nama_jabatan").value;
       
        if (nama_jabatan != "") {
            return true;
        }
        if (nama_jabatan == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('nama jabatan harus diisi');
            return false;
        }
    }



   
</script>