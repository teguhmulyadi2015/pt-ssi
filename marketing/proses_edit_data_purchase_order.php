
<?php
include 'config.php';
$id = $_POST['id'];
$nomor_po = $_POST['nomor_po'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$jumlah_pesanan = $_POST['jumlah_pesanan'];
$alamat_pengiriman_barang = $_POST['alamat_pengiriman_barang'];
$alamat_pengiriman_invoice = $_POST['alamat_pengiriman_invoice'];
$atas_nama = $_POST['atas_nama'];
$no_telepon = $_POST['no_telepon'];
$email = $_POST['email'];
$metode_pembayaran = $_POST['metode_pembayaran'];
$harga_pesanan = $_POST['harga_pesanan'];
$ppn = $_POST['ppn'];
$dp = $_POST['dp'];
$biaya_instalasi = $_POST['biaya_instalasi'];
$po_masuk = $_POST['po_masuk'];
$target_selesai = $_POST['target_selesai'];
$jadwal_instalasi = $_POST['jadwal_instalasi'];
$deadline = $_POST['deadline'];
$id_pengguna = $_POST['id_pengguna'];

$sql = "UPDATE tbl_purchaseorder SET
            nomor_po = '$nomor_po',
            nama_perusahaan = '$nama_perusahaan',
            jumlah_pesanan = '$jumlah_pesanan',
            alamat_pengiriman_barang = '$alamat_pengiriman_barang',
            alamat_pengiriman_invoice = '$alamat_pengiriman_invoice',
            atas_nama = '$atas_nama',
            no_telepon = '$no_telepon',
            email = '$email',
            metode_pembayaran = '$metode_pembayaran',
            harga_pesanan = '$harga_pesanan',
            ppn = '$ppn',
            dp = '$dp',
            biaya_instalasi = '$biaya_instalasi',
            start = '$po_masuk',
            target_selesai = '$target_selesai',
            jadwal_instalasi = '$jadwal_instalasi',
            deadline = '$deadline'
            WHERE id_purchase_order = $id
    ";
$hasil = mysqli_query($con, $sql);

if ($hasil) {
    echo '<script>alert("berhasil"); document.location="../marketing/index.php?menu=po&action=tampil";</script>';
} else {
    echo '<script>alert("gagal"); document.location="../marketing/index.php?menu=po&action=tampil";</script>';
}

?>