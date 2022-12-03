<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->

<a href="?menu=jabatan&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw fa-angle-left"></i>
    <span>Kembali</span>
</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data User</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="proses_tambah_data_role.php" onsubmit="return validasi()">
            <div class="form-group row">
                <input type="hidden" name="id">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jabatan" placeholder="Jabatan..." name="jabatan">
                </div>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-success float-right" type="submit" name="btnTambahRole"><i class=" fas fa-fw fa-save"></i>Simpan</button>
            </div>


        </form>
    </div>
</div>



<script>
    function validasi() {
        var jabatan = document.getElementById("jabatan").value;



        if (jabatan != "") {
            return true;
        }

        if (jabatan == "") {
            alert('Jabatan harus diisi');
            return false;
        }
    }
</script>