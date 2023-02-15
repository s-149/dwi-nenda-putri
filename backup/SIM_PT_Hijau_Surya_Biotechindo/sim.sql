-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 03:34 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `bagian` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `tanggal`, `id_karyawan`, `nama_karyawan`, `bagian`, `keterangan`) VALUES
('1', '2021-07-08', 'FA', '', '', 'Izin'),
('2', '2021-07-15', 'FH', '', '', 'izin'),
('3', '2021-08-24', 'NMS', '', '', 'Sakit'),
('4', '2021-08-12', 'YK', '', '', 'Sakit'),
('5', '2021-08-01', 'ZW', '', '', 'izin'),
('6', '2021-09-01', 'FA', 'Fauziah Azmi', 'Labolatorium', 'izin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` varchar(50) NOT NULL,
  `Photo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`username`, `password`, `level`, `Photo`) VALUES
('149', '149', 'Admin', 'user.png'),
('AdminDistribusidanKeuangan', 'dk', 'AdminDistribusidanKeuangan', 'user.png'),
('AdminKepegawaian', 'pegawai', 'AdminKepegawaian', 'user.png'),
('AdminLabolatorium', 'lab', 'AdminLabolatorium', 'user.png'),
('AreaManajer', 'am', 'AreaManajer', 'user.png'),
('Direktur', 'direktur', 'Direktur', 'user.png'),
('Manajer', 'manajer', 'Manajer', 'user.png'),
('s149', '149', 'AdminLabolatorium', '06_Sep_2021_05_33_52_3.png'),
('Supervisior', 'sp', 'Supervisior', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `benih`
--

CREATE TABLE `benih` (
  `tanggal_masuk` date NOT NULL,
  `code_clone` varchar(10) NOT NULL,
  `nama_benih` varchar(50) NOT NULL,
  `no_indukan` varchar(10) NOT NULL,
  `jumlah` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `benih`
--

INSERT INTO `benih` (`tanggal_masuk`, `code_clone`, `nama_benih`, `no_indukan`, `jumlah`) VALUES
('2021-08-03', 'K1', 'Kentang', 'K101', 40),
('2021-09-02', 'P1', 'Pisang Barangan', 'P102', 50),
('2021-08-11', 'P2', 'Pisang Raja Bulu', 'P210', 60),
('2021-08-05', 'P3', 'Pisang Kepok Tanjung', 'P323', 76),
('2021-08-01', 'V1', 'Aloevera', 'V101', 20);

-- --------------------------------------------------------

--
-- Table structure for table `bibit`
--

CREATE TABLE `bibit` (
  `id_bibit` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `code_clone` varchar(10) NOT NULL,
  `nama_bibit` varchar(50) NOT NULL,
  `no_indukan` varchar(10) NOT NULL,
  `jmlh_unit` int(10) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bibit`
--

INSERT INTO `bibit` (`id_bibit`, `tanggal_keluar`, `code_clone`, `nama_bibit`, `no_indukan`, `jmlh_unit`, `keterangan`) VALUES
(2, '2021-08-30', 'P1', 'Pisang Barangan', 'P102', 5000, 'Transfer Ke Greenhouse'),
(3, '2021-08-30', 'P2', 'Pisang Raja Bulu', 'P210', 600, 'Transfer Ke Greenhouse'),
(4, '2021-08-31', 'P3', 'Pisang Kepok Tanjung', 'P323', 150, 'Transfer Ke Greenhouse\r\n'),
(5, '2021-08-31', 'V1', 'Aloevera', 'V101', 200, 'Transfer Ke Greenhouse'),
(7, '2021-08-31', 'K1', 'Kentang', 'K101', 400, 'Transfer Ke Greenhouse');

-- --------------------------------------------------------

--
-- Table structure for table `bibit_siap_jual`
--

CREATE TABLE `bibit_siap_jual` (
  `id_bibit_siap_jual` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `code_clone` varchar(10) NOT NULL,
  `nama_bibit` varchar(50) NOT NULL,
  `no_indukan` varchar(10) NOT NULL,
  `jmlh_unit` varchar(20) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bibit_siap_jual`
--

INSERT INTO `bibit_siap_jual` (`id_bibit_siap_jual`, `tanggal_keluar`, `code_clone`, `nama_bibit`, `no_indukan`, `jmlh_unit`, `keterangan`) VALUES
(1, '2021-10-12', 'P1', 'Pisang Barangan', 'P102', '443', '-'),
(2, '2021-10-12', 'K1', 'Kentang', 'K101', '340', '-'),
(3, '2021-10-12', 'P2', 'Pisang Raja Bulu', 'P210', '541', '-'),
(4, '2021-10-12', 'P3', 'Pisang Kepok Tanjung', 'P323', '660', '-'),
(5, '2021-10-12', 'V1', 'Aloevera', 'V101', '0', '-');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(12) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `umur` int(4) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tanggal_gabung` date NOT NULL,
  `bagian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `umur`, `alamat`, `no_hp`, `tanggal_gabung`, `bagian`) VALUES
('FA', 'Fauziah Azmi', 21, 'JL.Melati Kel.Sei Renggas', '082297888702', '2019-05-04', 'Labolatorium'),
('FH', 'Fitri Haryati', 24, 'Jl.Jeruk Kel.Sei Renggas', '082364777614', '2019-07-21', 'Admin'),
('NMS', 'Nurmala Sari', 22, 'Dusun III Desa Gedangan', '082295578660', '2020-03-23', 'Labolatorium'),
('NS', 'Nirwana Sari', 22, 'Dusun I Desa Gedangan', '082377004169', '2020-09-19', 'Greenhouse'),
('YK', 'Yuni Kartika', 23, 'JL.Anom Kel.Sei Renggas', '082209081245', '2020-09-10', 'Labolatorium'),
('ZA', 'Zakiyah', 22, 'Jl.Sei Silau Kel.Sei Silau', '081277460102', '2021-01-11', 'Labolatorium'),
('ZW', 'Zenny Wulandari', 24, 'JL.Cokroaminoto Kel.KisaranTimur', '085262640908', '2018-12-13', 'Labolatorium');

-- --------------------------------------------------------

--
-- Table structure for table `kontaminasi`
--

CREATE TABLE `kontaminasi` (
  `id_kontaminasi` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `code_clone` varchar(10) NOT NULL,
  `stage` varchar(50) NOT NULL,
  `jmlh_pot` int(10) NOT NULL,
  `unit_benih_pot` int(10) NOT NULL,
  `jmlh_btl` int(10) NOT NULL,
  `unit_benih_btl` int(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontaminasi`
--

INSERT INTO `kontaminasi` (`id_kontaminasi`, `tanggal`, `id_karyawan`, `nama_karyawan`, `code_clone`, `stage`, `jmlh_pot`, `unit_benih_pot`, `jmlh_btl`, `unit_benih_btl`, `keterangan`) VALUES
('1', '2021-08-18', 'FA', 'Fauziah Azmi', 'V1', 'E2', 1, 4, 1, 4, 'Tidak bisa diperbaiki'),
('2', '2021-08-18', 'NMS', 'Nurmala Sari', 'K1', 'E2', 5, 20, 0, 0, '-'),
('3', '2021-08-18', 'ZA', 'Zakiyah', 'K1', 'M2', 1, 4, 1, 2, '2 Berhasil 2 Kontam'),
('4', '0000-00-00', 'YK', 'Yuni Kartika', 'P2', 'M4', 0, 0, 1, 3, '1 bibit kontam dalam botol'),
('5', '2021-08-18', 'ZW', 'Zenny Wulandari', 'P3', 'M4', 3, 12, 0, 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_pengeluaran` varchar(20) NOT NULL,
  `total_biaya` int(20) NOT NULL,
  `foto_bukti` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `tanggal`, `jenis_pengeluaran`, `total_biaya`, `foto_bukti`, `keterangan`) VALUES
('001', '2021-09-14', 'Kertas A4 5 Dus', 120000, '05_Sep_2021_03_06_25_IMG_20100114_0001 copy.jpg', '-'),
('002', '2021-09-08', 'Alat Kantor', 500000, '05_Sep_2021_03_07_23_IMG_20100114_0001 copy.jpg', '-');

-- --------------------------------------------------------

--
-- Table structure for table `penggajian`
--

CREATE TABLE `penggajian` (
  `id_penggajian` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `gaji_pokok` int(20) NOT NULL,
  `tunjangan` int(20) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `total_%_kontam` varchar(10) NOT NULL,
  `insentif` int(20) NOT NULL,
  `gaji_kotor` int(20) NOT NULL,
  `id_absensi` varchar(10) NOT NULL,
  `gaji_bersih` int(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penggajian`
--

INSERT INTO `penggajian` (`id_penggajian`, `tanggal`, `id_karyawan`, `nama_karyawan`, `gaji_pokok`, `tunjangan`, `bagian`, `total_%_kontam`, `insentif`, `gaji_kotor`, `id_absensi`, `gaji_bersih`, `keterangan`) VALUES
(11, '2021-09-05', 'FA', 'Fauziah Azmi', 1500000, 700000, 'Labolatorium', '1.7', 200000, 2400000, '0', 2400000, '-'),
(13, '2021-09-05', 'FH', 'Fitri Haryati', 1500000, 700000, 'Admin', '0', 100000, 2300000, '0', 2300000, '-'),
(14, '2021-09-05', 'NS', 'Nirwana Sari', 1500000, 700000, 'Greenhouse', '0', 100000, 2300000, '0', 2300000, '-'),
(15, '2021-09-05', 'YK', 'Yuni Kartika', 1500000, 700000, 'Labolatorium', '0', 200000, 2400000, '1', 2304000, '-'),
(17, '2021-09-07', 'NS', 'Nirwana Sari', 1500000, 700000, 'Greenhouse', '0', 0, 2200000, '0', 2200000, '-'),
(22, '2021-09-08', 'NMS', 'Nurmala Sari', 1500000, 700000, '', '', 100000, 2300000, '', 2208000, ''),
(23, '2021-09-08', 'NMS', 'Nurmala Sari', 1500000, 700000, 'Labolatorium', '16.1', 100000, 2300000, '1', 2208000, 'hhh'),
(24, '2021-09-08', 'NMS', 'Nurmala Sari', 1500000, 700000, '', '', 100000, 2300000, '', 2208000, '');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_penjualan` varchar(20) NOT NULL,
  `code_clone` varchar(10) NOT NULL,
  `nama_bibit` varchar(50) NOT NULL,
  `harga_satuan` int(20) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `ekspedisi` varchar(50) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `tanggal`, `jenis_penjualan`, `code_clone`, `nama_bibit`, `harga_satuan`, `jumlah`, `total_harga`, `tujuan`, `penerima`, `ekspedisi`, `keterangan`) VALUES
('P1K1001', '2021-10-13', 'Domestik', 'K1', 'Kentang', 5500, 50, 275000, 'Pulo Mandi', 'Sinarto', 'Motor', 'Sudah Diabayar'),
('P2P1002', '2021-10-13', 'Domestik', 'P1', 'Pisang Barangan', 6000, 50, 300000, 'Tanah Rakyat', 'Susi', 'Motor', 'Sudah Dibayar'),
('P2P3003', '2021-10-13', 'Domestik', 'P2', 'Pisang Raja Bulu', 6000, 50, 300000, 'Gedangan', 'Kiyem', 'Motor', 'Sudah Diabayar'),
('P3P4004', '2021-10-13', 'Domestik', 'P3', 'Pisang Kepok Tanjung', 6000, 100, 600000, 'Sambahuta', 'Muhammad Siregar', 'Truk', 'Sudah Dibayar'),
('V1P5005', '2021-10-15', 'Domestik', 'V1', 'Aloevera', 4500, 200, 900000, 'PT. Kosmetika Ayu Medan', 'Halda Anggreini', 'Truk', '-');

-- --------------------------------------------------------

--
-- Table structure for table `subkultur`
--

CREATE TABLE `subkultur` (
  `id_subkultur` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `code_clone` varchar(10) NOT NULL,
  `stage_awal` varchar(10) NOT NULL,
  `stage_akhir` varchar(10) NOT NULL,
  `media` varchar(50) NOT NULL,
  `jmlh_awal_pot` int(10) NOT NULL,
  `jmlh_akhir_pot` int(10) NOT NULL,
  `jmh_awal_btl` int(10) NOT NULL,
  `jmlh_akhir_btl` int(10) NOT NULL,
  `unit_benih_pot` int(10) NOT NULL,
  `unit_benih_bt` int(10) NOT NULL,
  `jmlh_bakteri` int(10) NOT NULL,
  `durasi` varchar(20) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subkultur`
--

INSERT INTO `subkultur` (`id_subkultur`, `tanggal`, `id_karyawan`, `nama_karyawan`, `code_clone`, `stage_awal`, `stage_akhir`, `media`, `jmlh_awal_pot`, `jmlh_akhir_pot`, `jmh_awal_btl`, `jmlh_akhir_btl`, `unit_benih_pot`, `unit_benih_bt`, `jmlh_bakteri`, `durasi`, `keterangan`) VALUES
('1', '2021-08-05', 'NMS', 'Nurmala Sari', 'K1', 'E1', 'E2', 'S', 21, 25, 0, 0, 124, 0, 50, '480', 'Perlu stage berikutnya'),
('2', '2021-08-05', 'FA', 'Fauziah Azmi', 'V1', 'E1', 'E2', 'So', 0, 0, 66, 129, 0, 480, 70, '480', 'Perlu stage berikutnya'),
('3', '2021-08-05', 'ZA', 'Zakiyah', 'K1', 'M1', 'M2', 'So', 10, 20, 30, 60, 80, 240, 200, '480', 'Perlu stage selanjutnya'),
('4', '2021-08-05', 'YK', 'Yuni Kartika', 'P2', 'M3', 'M4', 'So', 5, 10, 20, 40, 40, 160, 150, '480', 'Tambah bakteri ekstra'),
('5', '2021-08-05', 'ZW', 'Zenny Wulandari', 'P3', 'M3', 'M4', 'So', 15, 30, 18, 36, 120, 154, 200, '480', 'karena terbuka bakteri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `benih`
--
ALTER TABLE `benih`
  ADD PRIMARY KEY (`code_clone`);

--
-- Indexes for table `bibit`
--
ALTER TABLE `bibit`
  ADD PRIMARY KEY (`id_bibit`),
  ADD KEY `code_clone` (`code_clone`);

--
-- Indexes for table `bibit_siap_jual`
--
ALTER TABLE `bibit_siap_jual`
  ADD PRIMARY KEY (`id_bibit_siap_jual`),
  ADD KEY `code_clone` (`code_clone`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kontaminasi`
--
ALTER TABLE `kontaminasi`
  ADD PRIMARY KEY (`id_kontaminasi`),
  ADD KEY `code_clone` (`code_clone`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`id_penggajian`),
  ADD KEY `id_karyawan` (`id_karyawan`,`total_%_kontam`,`id_absensi`),
  ADD KEY `id_absensi` (`id_absensi`),
  ADD KEY `total_%_kontam` (`total_%_kontam`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `code_clone` (`code_clone`);

--
-- Indexes for table `subkultur`
--
ALTER TABLE `subkultur`
  ADD PRIMARY KEY (`id_subkultur`),
  ADD KEY `code_clone` (`code_clone`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bibit`
--
ALTER TABLE `bibit`
  MODIFY `id_bibit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bibit_siap_jual`
--
ALTER TABLE `bibit_siap_jual`
  MODIFY `id_bibit_siap_jual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `id_penggajian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bibit`
--
ALTER TABLE `bibit`
  ADD CONSTRAINT `bibit_ibfk_1` FOREIGN KEY (`code_clone`) REFERENCES `benih` (`code_clone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bibit_siap_jual`
--
ALTER TABLE `bibit_siap_jual`
  ADD CONSTRAINT `bibit_siap_jual_ibfk_1` FOREIGN KEY (`code_clone`) REFERENCES `benih` (`code_clone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kontaminasi`
--
ALTER TABLE `kontaminasi`
  ADD CONSTRAINT `kontaminasi_ibfk_1` FOREIGN KEY (`code_clone`) REFERENCES `benih` (`code_clone`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kontaminasi_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD CONSTRAINT `penggajian_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`code_clone`) REFERENCES `benih` (`code_clone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subkultur`
--
ALTER TABLE `subkultur`
  ADD CONSTRAINT `subkultur_ibfk_1` FOREIGN KEY (`code_clone`) REFERENCES `benih` (`code_clone`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subkultur_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
