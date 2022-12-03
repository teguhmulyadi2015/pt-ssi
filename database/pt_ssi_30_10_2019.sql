-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 02:35 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pt_ssi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bahan_baku`
--

CREATE TABLE `tbl_bahan_baku` (
  `id_bahan_baku` int(11) NOT NULL,
  `id_jenis_bahan_baku` int(11) NOT NULL,
  `nama_bahan_baku` varchar(75) NOT NULL,
  `stok` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bahan_baku`
--

INSERT INTO `tbl_bahan_baku` (`id_bahan_baku`, `id_jenis_bahan_baku`, `nama_bahan_baku`, `stok`, `tgl_masuk`) VALUES
(2, 1, 'Pelat 20x120', 12, '2019-10-08'),
(3, 3, 'stiker vynil merah 1', 231, '2019-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bahan_baku_cacat`
--

CREATE TABLE `tbl_bahan_baku_cacat` (
  `id_bahan_baku_cacat` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `id_bahan_baku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bahan_baku_cacat`
--

INSERT INTO `tbl_bahan_baku_cacat` (`id_bahan_baku_cacat`, `keterangan`, `id_bahan_baku`) VALUES
(1, 'terdapat kerusakan pada warna kuning', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hak_akses`
--

CREATE TABLE `tbl_hak_akses` (
  `id_hak_akses` int(11) NOT NULL,
  `hak_akses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hak_akses`
--

INSERT INTO `tbl_hak_akses` (`id_hak_akses`, `hak_akses`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'marketing'),
(4, 'qc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'marketing'),
(4, 'quality control');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_bahan_baku`
--

CREATE TABLE `tbl_jenis_bahan_baku` (
  `id_jenis_bahan_baku` int(11) NOT NULL,
  `nama_jenis_bahan_baku` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis_bahan_baku`
--

INSERT INTO `tbl_jenis_bahan_baku` (`id_jenis_bahan_baku`, `nama_jenis_bahan_baku`) VALUES
(1, 'pelat'),
(2, 'sticker'),
(3, 'alumunium');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_pegawai` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `alamat`, `no_telepon`, `email`, `tempat_lahir`, `tgl_lahir`, `id_jabatan`) VALUES
(1, '123123', 'saya seorang admin', 'bandung', '123123', 'admin@admin.com', 'jakarta', '2019-10-02', 1),
(2, '412948', 'saya seorang manajer produksi', 'bandung selatan', '12341234', 'manager@manager.com', 'tegal', '2019-10-19', 2),
(3, '4124', 'saya seorang marketing', 'papua', '1234512345', 'marketing@marketing.com', 'jakarta', '2019-10-09', 3),
(4, '847812', 'saya seorang qc', 'cimahi', '12345678', 'qc@yahoo.com', 'cililin', '2019-10-07', 4),
(6, '111', 'teguh mulyadi1', '111', '111', 'teguh@yao.co111', 'asd111', '1111-01-01', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `username`, `password`, `id_pegawai`, `id_hak_akses`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(2, 'manager', '1d0258c2440a8d19e716292b231e3190', 2, 2),
(3, 'marketing', 'c769c2bd15500dd906102d9be97fdceb', 3, 3),
(5, 'qc', '9300c96aaec324987ea5ca6e13a02eda', 4, 4),
(16, 'teguh', 'f5cd3a020bc94866049206a7cf14e266', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perencanaan`
--

CREATE TABLE `tbl_perencanaan` (
  `id_perencanaan` int(11) NOT NULL,
  `id_purchase_prder` int(11) NOT NULL,
  `id_bahan_baku` int(11) NOT NULL,
  `nama_bahan_baku` varchar(128) NOT NULL,
  `jumlah_bahan_baku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchaseorder`
--

CREATE TABLE `tbl_purchaseorder` (
  `id_purchase_order` int(11) NOT NULL,
  `nomor_po` varchar(128) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `alamat_pengiriman_barang` text NOT NULL,
  `alamat_pengiriman_invoice` text NOT NULL,
  `atas_nama` varchar(100) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `email` varchar(128) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `harga_pesanan` int(11) NOT NULL,
  `ppn` varchar(50) NOT NULL,
  `dp` int(11) NOT NULL,
  `biaya_instalasi` int(11) NOT NULL,
  `start` date NOT NULL,
  `target_selesai` date NOT NULL,
  `jadwal_instalasi` date NOT NULL,
  `deadline` date NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_purchaseorder`
--

INSERT INTO `tbl_purchaseorder` (`id_purchase_order`, `nomor_po`, `nama_perusahaan`, `jumlah_pesanan`, `alamat_pengiriman_barang`, `alamat_pengiriman_invoice`, `atas_nama`, `no_telepon`, `email`, `metode_pembayaran`, `harga_pesanan`, `ppn`, `dp`, `biaya_instalasi`, `start`, `target_selesai`, `jadwal_instalasi`, `deadline`, `id_pengguna`) VALUES
(1, '1', '1', 123, '1', '1', 'bapak pertaminia', '123', '123@123.coma', 'COD', 123, 'tidak ada', 1, 1, '2019-10-01', '2019-10-11', '2019-11-12', '2019-10-15', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bahan_baku`
--
ALTER TABLE `tbl_bahan_baku`
  ADD PRIMARY KEY (`id_bahan_baku`);

--
-- Indexes for table `tbl_bahan_baku_cacat`
--
ALTER TABLE `tbl_bahan_baku_cacat`
  ADD PRIMARY KEY (`id_bahan_baku_cacat`);

--
-- Indexes for table `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  ADD PRIMARY KEY (`id_hak_akses`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_jenis_bahan_baku`
--
ALTER TABLE `tbl_jenis_bahan_baku`
  ADD PRIMARY KEY (`id_jenis_bahan_baku`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_perencanaan`
--
ALTER TABLE `tbl_perencanaan`
  ADD PRIMARY KEY (`id_perencanaan`);

--
-- Indexes for table `tbl_purchaseorder`
--
ALTER TABLE `tbl_purchaseorder`
  ADD PRIMARY KEY (`id_purchase_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bahan_baku`
--
ALTER TABLE `tbl_bahan_baku`
  MODIFY `id_bahan_baku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_bahan_baku_cacat`
--
ALTER TABLE `tbl_bahan_baku_cacat`
  MODIFY `id_bahan_baku_cacat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  MODIFY `id_hak_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_jenis_bahan_baku`
--
ALTER TABLE `tbl_jenis_bahan_baku`
  MODIFY `id_jenis_bahan_baku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_perencanaan`
--
ALTER TABLE `tbl_perencanaan`
  MODIFY `id_perencanaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_purchaseorder`
--
ALTER TABLE `tbl_purchaseorder`
  MODIFY `id_purchase_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
