<?php 
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_pengguna WHERE id_pengguna = $id";
$hasil = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($hasil);

?>
<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->
<a href="?menu=pengguna&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw fa-angle-left"></i>
    <span>Kembali</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Pengguna</h6>
    </div>
    <div class="card-body">
        <form action="proses_edit_data_pengguna.php" method="POST" onSubmit="return validasi()">
   
            <input type="hidden" name="id_pengguna" value="<?= $row['id_pengguna']; ?>">
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" value="<?= $row['username']; ?>">
                </div>
            </div>
            <!-- <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="password" name="password" value="<?= $row['password']; ?>">
                </div>
            </div> -->
            <div class="form-group row">
                <label for="id_pegawai" class="col-sm-2 col-form-label">Pegawai</label>
                <div class="col-sm-10">
                    <select name="id_pegawai" class="form-control" id="id_pegawai">
                        <option value="">--Pilih--</option>
                        <?php 
                            $kode_pegawai = $row['id_pegawai'];

                           $sql2 = "SELECT * FROM tbl_pegawai ";
                           $hasil2 = mysqli_query($con, $sql2);
                           while($row2 = mysqli_fetch_assoc($hasil2)){  
                           $kd_pegawai = $row2['id_pegawai'];
                           $nm_pegawai = $row2['nama_pegawai'];
                        
                          if($kode_pegawai==$kd_pegawai){
                            $cek="selected";
                            }
                            else{
                            $cek="";
                            }
                            echo"<option value='$kd_pegawai' $cek>$nm_pegawai</option>";
                            
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="id_hak_akses" class="col-sm-2 col-form-label">Hak AKses</label>
                <div class="col-sm-10">
                    <select name="id_hak_akses" class="form-control" id="id_hak_akses">
                        <option value="">--Pilih--</option>
                        <?php 
                            $kode_hak_akses = $row['id_hak_akses'];

                           $sql3 = "SELECT * FROM tbl_hak_akses ";
                           $hasil3 = mysqli_query($con, $sql3);
                           while($row3 = mysqli_fetch_assoc($hasil3)){  
                           $kd_hak_akses = $row3['id_hak_akses'];
                           $nm_hak_akses = $row3['hak_akses'];
                        
                          if($kode_hak_akses==$kd_hak_akses){
                            $cek3="selected";
                            }
                            else{
                            $cek3="";
                            }
                            echo"<option value='$kd_hak_akses' $cek3>$nm_hak_akses</option>";
                            
                            }
                        ?>
                    </select>
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
        var username = document.getElementById("username").value;
        var id_pegawai = document.getElementById("id_pegawai").value;
        var id_hak_akses = document.getElementById("id_hak_akses").value;
        if (username != "" && id_pegawai != "" && id_hak_akses != "") {
            return true;
        }
        if (username == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('username harus diisi');
            return false;
        }
        if (id_pegawai == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('pegawai harus diisi');
            return false;
        }
        if (id_hak_akses == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('hak akses harus diisi');
            return false;
        }
    }



   
</script>