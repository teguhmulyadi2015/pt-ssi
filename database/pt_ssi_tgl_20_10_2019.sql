-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 09:51 AM
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
  `id` int(11) NOT NULL,
  `id_jenis_bahan_baku` int(11) NOT NULL,
  `id_pemasok` int(11) NOT NULL,
  `nama_bahan_baku` varchar(75) NOT NULL,
  `jenis_bahan_baku` varchar(75) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bahan_baku_keluar`
--

CREATE TABLE `tbl_bahan_baku_keluar` (
  `id` int(11) NOT NULL,
  `id_bahan_baku` int(11) NOT NULL,
  `nama_bahan_baku` varchar(75) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id`, `nama_jabatan`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'marketing'),
(4, 'qc'),
(7, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_bahan_baku`
--

CREATE TABLE `tbl_jenis_bahan_baku` (
  `id` int(11) NOT NULL,
  `jenis_bahan_baku` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `nip` varchar(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`nip`, `nama_pegawai`, `alamat`, `no_telepon`, `email`, `tempat_lahir`, `tgl_lahir`, `id_jabatan`) VALUES
('123', 'saya seorang admin', 'bandung', '123123', 'admin@admin.com', 'jakarta', '2019-10-02', 1),
('1234', 'saya seorang manajer produksi', 'bandung selatan', '12341234', 'manager@manager.com', 'tegal', '2019-10-19', 2),
('12345', 'saya seorang marketing', 'papua', '1234512345', 'marketing@marketing.com', 'jakarta', '2019-10-09', 3),
('1234567', 'saya seorang qc', 'cimahi', '12345678', 'qc@yahoo.com', 'cililin', '2019-10-07', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemasok`
--

CREATE TABLE `tbl_pemasok` (
  `id` int(11) NOT NULL,
  `nama_pemasok` varchar(128) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id`, `id_jabatan`, `nip`, `username`, `password`, `nama`) VALUES
(1, 1, '123', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ini adalah admin'),
(2, 2, '1234', 'manager', '1d0258c2440a8d19e716292b231e3190', 'ini adalah manager'),
(3, 3, '12345', 'marketing', 'c769c2bd15500dd906102d9be97fdceb', 'ini adalah bagian marketing'),
(4, 7, '123456', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test'),
(5, 4, '1234567', 'qc', '9300c96aaec324987ea5ca6e13a02eda', 'ini bagian quality control');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchaseorder`
--

CREATE TABLE `tbl_purchaseorder` (
  `id` int(11) NOT NULL,
  `nomor_po` varchar(128) NOT NULL,
  `nama_perusahaan` varchar(128) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `alamat_pengiriman_barang` text NOT NULL,
  `alamat_pengiriman_invoice` text NOT NULL,
  `atas_nama` varchar(100) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `harga_pesanan` int(11) NOT NULL,
  `ppn` varchar(15) NOT NULL,
  `dp` int(10) NOT NULL,
  `biaya_instalasi` int(10) NOT NULL,
  `target_selesai` date NOT NULL,
  `jadwal_instalasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_purchaseorder`
--

INSERT INTO `tbl_purchaseorder` (`id`, `nomor_po`, `nama_perusahaan`, `jumlah_pesanan`, `alamat_pengiriman_barang`, `alamat_pengiriman_invoice`, `atas_nama`, `no_telepon`, `email`, `metode_pembayaran`, `harga_pesanan`, `ppn`, `dp`, `biaya_instalasi`, `target_selesai`, `jadwal_instalasi`) VALUES
(1, '123', 'pt pertamini', 123, 'jalan 123', 'jalan 123', 'bapak pertamini', '123', '123@123.com', 'COD', 123, 'ada', 123, 123, '2019-10-11', '2019-11-11'),
(17, '123123', 'teguh nih', 123, 'disini aja', 'disini aja juga', 'teguh nih', '123123123', 'teguh@nih.com', 'cash', 12312123, 'ada', 123123, 1231233, '2019-10-16', '2019-10-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bahan_baku`
--
ALTER TABLE `tbl_bahan_baku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bahan_baku_keluar`
--
ALTER TABLE `tbl_bahan_baku_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenis_bahan_baku`
--
ALTER TABLE `tbl_jenis_bahan_baku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tbl_pemasok`
--
ALTER TABLE `tbl_pemasok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_purchaseorder`
--
ALTER TABLE `tbl_purchaseorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bahan_baku`
--
ALTER TABLE `tbl_bahan_baku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_bahan_baku_keluar`
--
ALTER TABLE `tbl_bahan_baku_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pemasok`
--
ALTER TABLE `tbl_pemasok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_purchaseorder`
--
ALTER TABLE `tbl_purchaseorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
