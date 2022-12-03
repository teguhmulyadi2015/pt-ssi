-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 03:11 AM
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
(1, 'terdapat kerusakan pada warna kuning', 2),
(2, 'keterangan1', 3);

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
(5, 'qc', '9faf877043b1ecaae93a932bb6aba156', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perencanaan`
--

CREATE TABLE `tbl_perencanaan` (
  `id_perencanaan` int(11) NOT NULL,
  `id_purchase_order` int(11) NOT NULL,
  `id_bahan_baku` int(11) NOT NULL,
  `kebutuhan_jumlah_bahan_baku` int(11) NOT NULL,
  `keterangan` text NOT NULL
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
(22, 'PO1', 'FRIEDRICH NAUMAN STIFTUNG', 19, 'bandung', 'bandung', 'FRIEDRICH NAUMAN STIFTUNG', '0819389182', 'FRIEDRICH@gmail.com', 'COD', 12000, 'ada', 5000, 2000, '2018-12-03', '2018-12-04', '2018-12-04', '2018-12-04', 3),
(23, 'PO2', 'MITRA PERDANA N (23 PASKAL)', 1175, 'jakarta', 'jakarta', 'MITRA PERDANA N (23 PASKAL)', '0912739', 'mitra@gmail.com', 'cash', 25000, 'ada', 25000, 5000, '2018-12-04', '2018-12-14', '2018-12-14', '2018-12-12', 3),
(24, 'PO3', 'KALBE MORINAGA INDONESIA', 36, 'bandung', 'bandung', 'KALBE MORINAGA INDONESIA', '092891', 'kalbe@yahoo.com', 'COD', 5000, 'ada', 2000, 3000, '2018-12-05', '2018-12-05', '2018-12-06', '2018-12-10', 3),
(25, 'PO4', 'RECKITT BENCKISER', 20, 'cimahi', 'cimahi', 'RECKITT BENCKISER', '0912312', 'reckit@gmail.com', 'CASH', 9000, 'tidak ada', 8000, 1000, '2018-12-06', '2018-12-07', '2018-12-07', '2018-12-07', 3),
(26, 'PO5', 'HALEYORA POWER (Tmbhn)', 137, 'Lembang', 'Lembang', 'HALEYORA POWER (Tmbhn)', '09123821', 'haleyora@gmail.acom', 'COd', 5000, 'ada', 2000, 2000, '2018-12-07', '2018-12-11', '2018-12-11', '2018-12-18', 3),
(27, 'PO6', ' AJINOMOTO INDONESIA 1', 1, 'Jakarta', 'jakarta', ' AJINOMOTO INDONESIA', '0912378', 'ajinomoto@gmail.com', 'CASH', 1000, 'ada', 1000, 100, '2018-12-10', '2018-12-14', '2018-12-18', '2018-12-19', 3),
(28, 'PO7', 'PAPANDAYAN COCOA INDUSITRIES', 50, 'Soreang', 'soreang', 'PAPANDAYAN COCOA INDUSITRIES', '0747812', 'papan@yahoo.com', 'CASH', 5400, 'ada', 5000, 1200, '2018-12-11', '2018-12-14', '2018-12-15', '2018-12-17', 3),
(29, 'PO8', 'JFE STEEL GALVANIZING IND', 7, 'Jakarta pusat', 'jakarta pusat', 'JFE STEEL GALVANIZING IND', '0821823', 'jfe@gmail.com', 'cod', 8000, 'ada', 5000, 1000, '2018-12-13', '2018-12-13', '2018-12-13', '2018-12-14', 3),
(30, 'PO9', 'ARA SHOES INDONESIA', 12, 'cibiru', 'cibiru', 'ARA SHOES INDONESIA', '0812829', 'ara@gmail.com', 'COD', 5000, 'ada', 2000, 100, '2018-12-13', '2018-12-17', '2018-12-17', '2018-12-17', 3),
(31, 'PO10', 'BEBEK DOWER', 6, 'bandung', 'bandung', 'BEBEK DOWER', '081233', 'bebek@gmail.co.id', 'CASH', 3000, 'ada', 3000, 200, '2018-12-14', '2018-12-14', '2018-12-14', '2018-12-14', 3),
(32, 'PO11', ' AJINOMOTO INDONESIA 2', 505, 'jakarta', 'jakarta', ' AJINOMOTO INDONESIA 2', '08192313', 'ajinomoto@gmail.com', 'CASH', 15000, 'ada', 15000, 1000, '2018-12-14', '2018-12-20', '2018-12-20', '2018-12-17', 3),
(33, 'PO12', 'YASULOR INDONESIA', 3, 'cimahi', 'cimahi', 'YASULOR INDONESIA', '01823123', 'yasu@yahoo.com', 'COD', 300, 'ada', 200, 10, '2018-12-17', '2018-12-26', '2018-12-26', '2018-12-27', 3),
(34, 'PO13', 'PAPANDAYAN COCOA INDUSTRIES', 204, 'papandayan', 'papandayan', 'PAPANDAYAN COCOA INDUSTRIES', '0812738', 'papan@yahoo.com', 'COD', 5000, 'tidak ada', 4000, 1000, '2018-12-17', '2018-12-21', '2018-12-21', '2018-12-21', 3),
(35, 'PO14', 'BIOFIT', 40, 'jakarta', 'jakarta', 'BIOFIT', '0813781', 'biofit@gmail.com', 'CASH', 6500, 'ada', 6500, 500, '2018-12-18', '2018-12-18', '2018-12-19', '2018-12-20', 3),
(36, 'PO15', 'PUTRA AGRAMANDALA SAKTI', 20, 'jakarta timur', 'jakarta timur', 'PUTRA AGRAMANDALA SAKTI', '018237123', 'putra@gmail.com', 'COD', 5000, 'ada', 4000, 100, '2018-12-19', '2018-12-20', '2018-12-20', '2018-12-20', 3),
(37, 'PO16', 'FEDERAL SOLUSI INDOTAMA 1', 30, 'cipatik', 'cipatik', 'FEDERAL SOLUSI INDOTAMA 1', '1827312', 'federal@gmail.com', 'COD', 3000, 'ada', 2000, 100, '2018-12-19', '2018-12-24', '2018-12-24', '2018-12-24', 3),
(38, 'PO17', 'FEDERAL SOLUSI INDOTAMA 2', 10, 'cipatik', 'cipatik', 'FEDERAL SOLUSI INDOTAMA 2', '081231', 'federal@gmail.com', 'CASH', 1000, 'ada', 1000, 100, '2018-12-20', '2018-12-24', '2018-12-24', '2018-12-24', 3),
(39, 'PO18', 'MEINDO ELANG INDAH', 20, 'SOREANG', 'SOREANG', 'MEINDO ELANG INDAH', '0812387', 'MEINDO@GMAIL.COM', 'CASH', 12000, 'ada', 12000, 145, '2018-12-21', '2018-12-30', '2018-12-30', '2019-01-10', 3),
(40, 'PO19', 'POLITEKNIK NEGERI BANDUNG', 22, 'bandung', 'bandung', 'POLITEKNIK NEGERI BANDUNG', '081231837', 'politeknik@bdg.com', 'CASH', 12000, 'ada', 12000, 120, '2018-12-21', '2018-12-28', '2018-12-28', '2019-01-03', 3),
(41, 'PO20', 'AJINOMOTO INDONESIA 3', 1, 'jakarta', 'jakarta', 'AJINOMOTO INDONESIA 3', '0901283', 'ajinomoto@gmail.com', 'cod', 500, 'tidak ada', 200, 100, '2018-12-26', '2018-12-27', '2018-12-27', '2019-01-02', 3),
(42, 'PO21', 'PAPANDAYAN COCOA INDUSTRIES', 100, 'lembang', 'lembang', 'PAPANDAYAN COCOA INDUSTRIES', '01823912', 'papan@yahoo.com', 'cash', 4000, 'ada', 4000, 222, '2018-12-26', '2018-12-28', '2018-12-28', '2019-01-03', 3),
(43, 'PO22', 'TRINGGADING AGUNG PRATAMA', 68, 'surabaya', 'surabaya', 'TRINGGADING AGUNG PRATAMA', '0183923', 'tri@gmail.com', 'cod', 5400, 'ada', 5000, 400, '2018-12-26', '2018-12-27', '2018-12-27', '2019-01-04', 3),
(44, 'PO23', 'NUSANTARA REGAS', 187, 'semarang', 'semarang', 'NUSANTARA REGAS', '01829313', 'nusa@gmail.com', 'cash', 10000, 'ada', 10000, 100, '2018-12-26', '2019-01-08', '2019-01-08', '2019-01-11', 3),
(45, 'PO24', 'INDOFOOD CBP SUKSES MAKMUR', 35, 'jakarta pusat', 'jakarta pusat', 'INDOFOOD CBP SUKSES MAKMUR', '0812831', 'indofood@yaho.com', 'cash', 12000, 'ada', 12000, 120, '2018-12-28', '2019-01-02', '2019-01-02', '2019-01-03', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bahan_baku`
--
ALTER TABLE `tbl_bahan_baku`
  ADD PRIMARY KEY (`id_bahan_baku`),
  ADD KEY `id_jenis_bahan_baku` (`id_jenis_bahan_baku`);

--
-- Indexes for table `tbl_bahan_baku_cacat`
--
ALTER TABLE `tbl_bahan_baku_cacat`
  ADD PRIMARY KEY (`id_bahan_baku_cacat`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`);

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
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_hak_akses` (`id_hak_akses`);

--
-- Indexes for table `tbl_perencanaan`
--
ALTER TABLE `tbl_perencanaan`
  ADD PRIMARY KEY (`id_perencanaan`),
  ADD KEY `id_purchase_order` (`id_purchase_order`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`);

--
-- Indexes for table `tbl_purchaseorder`
--
ALTER TABLE `tbl_purchaseorder`
  ADD PRIMARY KEY (`id_purchase_order`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bahan_baku`
--
ALTER TABLE `tbl_bahan_baku`
  MODIFY `id_bahan_baku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_bahan_baku_cacat`
--
ALTER TABLE `tbl_bahan_baku_cacat`
  MODIFY `id_bahan_baku_cacat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id_jenis_bahan_baku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id_perencanaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_purchaseorder`
--
ALTER TABLE `tbl_purchaseorder`
  MODIFY `id_purchase_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bahan_baku`
--
ALTER TABLE `tbl_bahan_baku`
  ADD CONSTRAINT `tbl_bahan_baku_ibfk_1` FOREIGN KEY (`id_jenis_bahan_baku`) REFERENCES `tbl_jenis_bahan_baku` (`id_jenis_bahan_baku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_bahan_baku_cacat`
--
ALTER TABLE `tbl_bahan_baku_cacat`
  ADD CONSTRAINT `tbl_bahan_baku_cacat_ibfk_1` FOREIGN KEY (`id_bahan_baku`) REFERENCES `tbl_bahan_baku` (`id_bahan_baku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD CONSTRAINT `tbl_pegawai_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `tbl_jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD CONSTRAINT `tbl_pengguna_ibfk_1` FOREIGN KEY (`id_hak_akses`) REFERENCES `tbl_hak_akses` (`id_hak_akses`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pengguna_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `tbl_pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_perencanaan`
--
ALTER TABLE `tbl_perencanaan`
  ADD CONSTRAINT `tbl_perencanaan_ibfk_1` FOREIGN KEY (`id_purchase_order`) REFERENCES `tbl_purchaseorder` (`id_purchase_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_perencanaan_ibfk_2` FOREIGN KEY (`id_bahan_baku`) REFERENCES `tbl_bahan_baku` (`id_bahan_baku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_purchaseorder`
--
ALTER TABLE `tbl_purchaseorder`
  ADD CONSTRAINT `tbl_purchaseorder_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tbl_pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
