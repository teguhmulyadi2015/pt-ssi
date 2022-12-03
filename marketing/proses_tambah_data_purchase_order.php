
<?php
include 'config.php';

// $nomor_po = $_POST['nomor_po'];
// $nama_perusahaan = $_POST['nama_perusahaan'];
// $jumlah_pesanan = $_POST['jumlah_pesanan'];
// $alamat_pengiriman_barang = $_POST['alamat_pengiriman_barang'];
// $alamat_pengiriman_invoice = $_POST['alamat_pengiriman_invoice'];
// $atas_nama = $_POST['atas_nama'];
// $no_telepon = $_POST['no_telepon'];
// $email = $_POST['email'];
// $metode_pembayaran = $_POST['metode_pembayaran'];
// $harga_pesanan = $_POST['harga_pesanan'];
// $ppn = $_POST['ppn'];
// $dp = $_POST['dp'];
// $biaya_instalasi = $_POST['biaya_instalasi'];
// $po_masuk = $_POST['po_masuk'];
// $target_selesai = $_POST['target_selesai'];
// $jadwal_instalasi = $_POST['jadwal_instalasi'];
// $deadline = $_POST['deadline'];
// $id_pengguna = $_POST['id_pengguna'];


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


$kapasitas_produksi = 75;
$ts = $jumlah_pesanan / $kapasitas_produksi;
$hasil_ts = ceil($ts);

$target_selesai = date('Y-m-d', strtotime('+' . $hasil_ts . 'days', strtotime($po_masuk)));


$jadwal_instalasi = date('Y-m-d', strtotime('+2 days', strtotime($target_selesai)));
$deadline =  date('Y-m-d', strtotime('+1 days', strtotime($target_selesai)));
$id_pengguna = $_POST['id_pengguna'];



$sql2 = "SELECT * FROM tbl_purchaseorder WHERE nomor_po = '$nomor_po'";
$hasil2 = mysqli_query($con, $sql2);

if (mysqli_num_rows($hasil2) > 0) {
    echo '<script>alert("Nomor PO sudah ada di database");history.go(-1);</script>';
} else {

    $sql = "INSERT INTO tbl_purchaseorder (nomor_po, nama_perusahaan, jumlah_pesanan, alamat_pengiriman_barang, alamat_pengiriman_invoice, atas_nama, no_telepon, email, metode_pembayaran, harga_pesanan, ppn, dp, biaya_instalasi,start, target_selesai, jadwal_instalasi, deadline, id_pengguna) VALUES ('$nomor_po', '$nama_perusahaan', '$jumlah_pesanan', '$alamat_pengiriman_barang', '$alamat_pengiriman_invoice', '$atas_nama', '$no_telepon', '$email', '$metode_pembayaran', '$harga_pesanan', '$ppn', '$dp', '$biaya_instalasi', '$po_masuk', '$target_selesai', '$jadwal_instalasi', '$deadline', '$id_pengguna')";
    $hasil = mysqli_query($con, $sql);

    if ($hasil) {
        echo '<script>alert("berhasil"); document.location="../marketing/index.php?menu=po&action=tampil";</script>';
    } else {
        echo '<script>alert("gagal"); document.location="../marketing/index.php?menu=po&action=tampil";</script>';
    }
}


?>