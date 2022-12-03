<!-- <h1 class="h3 mb-4 text-gray-800">Ini Data User</h1> -->
<a href="?menu=po&action=tampil" class="btn btn-success my-2">
    <i class="fas fa-fw fa-angle-left"></i>
    <span>Kembali</span>
</a>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Purchase Order</h6>
    </div>
    <div class="card-body">
        <form action="proses_tambah_data_purchase_order.php" method="POST" onSubmit="return validasi()">
            <div class="form-group row">
                <label for="nomor_po" class="col-sm-2 col-form-label">Nomor PO</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nomor_po" name="nomor_po">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah_pesanan" class="col-sm-2 col-form-label">Jumlah Pesanan</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat_pengiriman_barang" class="col-sm-2 col-form-label">Alamat Pengiriman Barang</label>
                <div class="col-sm-10">
                    <textarea cols="70" rows="6" class="form-control" id="alamat_pengiriman_barang" name="alamat_pengiriman_barang"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat_pengiriman_invoice" class="col-sm-2 col-form-label">Alamat Pengiriman Invoice</label>
                <div class="col-sm-10">
                    <textarea cols="70" rows="6" class="form-control" id="alamat_pengiriman_invoice" name="alamat_pengiriman_invoice"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="atas_nama" class="col-sm-2 col-form-label">Atas Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="atas_nama" name="atas_nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="no_telepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="no_telepon" name="no_telepon">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="metode_pembayaran" class="col-sm-2 col-form-label">Metode Pembayaran</label>
                <div class="col-sm-10">
                    <select name="metode_pembayaran" class="form-control" id="metode_pembayaran">
                        <option value="">--Pilih--</option>
                        <option value="cash">Cash</option>
                        <option value="cod">COD</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_pesanan" class="col-sm-2 col-form-label">Harga Pesanan</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="harga_pesanan" name="harga_pesanan">
                </div>
            </div>
            <div class="form-group row">
                <label for="ppn" class="col-sm-2 col-form-label">PPN</label>
                <div class="col-sm-10">
                    <select name="ppn" class="form-control" id="ppn">
                        <option value="">--Pilih--</option>
                        <option value="ada">Ada</option>
                        <option value="tidak ada">Tidak Ada</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="dp" class="col-sm-2 col-form-label">DP</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="dp" name="dp">
                </div>
            </div>
            <div class="form-group row">
                <label for="biaya_instalasi" class="col-sm-2 col-form-label">Biaya Instalasi</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="biaya_instalasi" name="biaya_instalasi">
                </div>
            </div>
            <div class="form-group row">
                <label for="po_masuk" class="col-sm-2 col-form-label">PO Masuk</label>
                <div class="col-sm-10">
                    <?php $po_masuk = date("Y-m-d"); ?>
                    <input type="date" class="form-control" id="po_masuk" name="po_masuk" value="<?php echo $po_masuk; ?>">
                </div>
            </div>
            <!-- <div class="form-group row">
                <label for="target_selesai" class="col-sm-2 col-form-label">Target Selesai</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="target_selesai" name="target_selesai">
                </div>
            </div>
            <div class="form-group row">
                <label for="jadwal_instalasi" class="col-sm-2 col-form-label">Jadwal Instalasi</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="jadwal_instalasi" name="jadwal_instalasi">
                </div>
            </div>
            <div class="form-group row">
                <label for="deadline" class="col-sm-2 col-form-label">Deadline</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="deadline" name="deadline">
                </div>
            </div> -->
            <input type="hidden" name="id_pengguna" value="<?= $_SESSION['id_pengguna']; ?>">


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
        var nomor_po = document.getElementById("nomor_po").value;
        var nama_perusahaan = document.getElementById("nama_perusahaan").value;
        var jumlah_pesanan = document.getElementById("jumlah_pesanan").value;
        var alamat_pengiriman_barang = document.getElementById("alamat_pengiriman_barang").value;
        var alamat_pengiriman_invoice = document.getElementById("alamat_pengiriman_invoice").value;
        var atas_nama = document.getElementById("atas_nama").value;
        var no_telepon = document.getElementById("no_telepon").value;
        var email = document.getElementById("email").value;
        var metode_pembayaran = document.getElementById("metode_pembayaran").value;
        var harga_pesanan = document.getElementById("harga_pesanan").value;
        var ppn = document.getElementById("ppn").value;
        var dp = document.getElementById("dp").value;
        var biaya_instalasi = document.getElementById("biaya_instalasi").value;
        var po_masuk = document.getElementById("po_masuk").value;

        // var target_selesai = document.getElementById("target_selesai").value;
        // var jadwal_instalasi = document.getElementById("jadwal_instalasi").value;
        // var deadline = document.getElementById("deadline").value;
        if (nomor_po != "" && nama_perusahaan != "" && jumlah_pesanan != "" && alamat_pengiriman_barang != "" && alamat_pengiriman_invoice != "" && atas_nama != "" && no_telepon != "" && email != "" && metode_pembayaran != "" && harga_pesanan != "" && ppn != "" && dp != "" && biaya_instalasi != "" && po_masuk != "") {
            return true;
        }
        if (nomor_po == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('nomor po harus diisi');
            return false;
        }
        if (nama_perusahaan == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('nama perusahaan harus diisi');
            return false;
        }
        if (jumlah_pesanan == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('jumlah pesanan harus diisi');
            return false;
        }
        if (alamat_pengiriman_barang == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('alamat pengirman barang harus diisi');
            return false;
        }
        if (alamat_pengiriman_invoice == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('alamat pengirman invoice harus diisi');
            return false;
        }
        if (atas_nama == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('atas nama harus diisi');
            return false;
        }
        if (no_telepon == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('no_telepon harus diisi');
            return false;
        }
        if (email == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('email harus diisi');
            return false;
        }
        if (metode_pembayaran == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('metode pembayaran harus diisi');
            return false;
        }
        if (harga_pesanan == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('harga pesanan harus diisi');
            return false;
        }
        if (ppn == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('ppn harus diisi');
            return false;
        }
        if (dp == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('dp harus diisi');
            return false;
        }
        if (biaya_instalasi == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('biaya instalasi harus diisi');
            return false;
        }
        if (po_masuk == "") {
            // Swal.fire(
            //     'Username harus di isi!',
            //     '',
            //     'error'
            // );
            alert('tgl PO Masuk harus diisi');
            return false;
        }
    }
</script>