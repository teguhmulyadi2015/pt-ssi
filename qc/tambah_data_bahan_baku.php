
<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->
<a href="?menu=bahan_baku&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw fa-angle-left"></i>
    <span>Kembali</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Bahan Baku</h6>
    </div>
    <div class="card-body">
        <form action="proses_tambah_data_bahan_baku.php" method="POST" onSubmit="return validasi()">
            <div class="form-group row">
                <label for="nama_bahan_baku" class="col-sm-2 col-form-label">Bahan Baku</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_bahan_baku" name="nama_bahan_baku">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="jumlah" name="jumlah">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk">
                </div>
            </div>

           
            <div class="form-group row">
                <label for="jenis_bahan_baku" class="col-sm-2 col-form-label">Jenis Bahan Baku</label>
                <div class="col-sm-10">
                    <select name="jenis_bahan_baku" class="form-control" id="jenis_bahan_baku">
                        <option value="">--Pilih--</option>
                        <?php 
                            include 'config.php';

                            $sql = "SELECT * FROM tbl_jenis_bahan_baku";
                            $hasil=mysqli_query($con, $sql);

                            while ($row=mysqli_fetch_assoc($hasil)){
                        ?>      
                            <option value="<?= $row['id_jenis_bahan_baku']; ?>"><?= $row['nama_jenis_bahan_baku']; ?></option>

                        <?php } ?>
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
        var nama_bahan_baku = document.getElementById("nama_bahan_baku").value;
        var jumlah = document.getElementById("jumlah").value;
        var tgl_masuk = document.getElementById("tgl_masuk").value;
        var jenis_bahan_baku = document.getElementById("jenis_bahan_baku").value;

        if (nama_bahan_baku != "" && jumlah != "" && tgl_masuk != "" && jenis_bahan_baku != "") {
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
        if (jumlah == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('jumlah harus diisi');
            return false;
        }
        if (tgl_masuk == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('tgl masuk harus diisi');
            return false;
        }
        if (jenis_bahan_baku == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('jenis bahan baku harus diisi');
            return false;
        }
    }



   
</script>