-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Sep 2021 pada 07.27
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `bagian` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `validasi` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `tanggal`, `id_karyawan`, `nama_karyawan`, `bagian`, `keterangan`, `validasi`) VALUES
('1', '2021-09-10', 'K0002', 'Sabar', 'Labolatorium', 'izin', '1'),
('2', '2021-09-09', 'K0002', 'Sabar', 'Greenhouse', 'sakit', '1'),
('3', '2021-09-09', 'K0001', 'Sabar', 'Admin', 'absen', '1'),
('4', '2021-09-10', 'K0003', 'Sabar', 'Greenhouse', 'izin', '1'),
('5', '2021-09-17', 'K0002', 'Sabar', 'Labolatorium', 'sakit', '0'),
('6', '2021-09-17', 'K0002', 'Sabar', 'Labolatorium', 'sakit', '0'),
('7', '2021-09-16', 'K0004', 'Sabar', 'Labolatorium', 'izin', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_user`
--

CREATE TABLE `admin_user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` varchar(50) NOT NULL,
  `Photo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_user`
--

INSERT INTO `admin_user` (`username`, `password`, `level`, `Photo`) VALUES
('149', '149', 'Admin', '06_Sep_2021_06_37_18_admin.jpg'),
('AdminDistribusidanKeuangan', 'dk', 'AdminDistribusidanKeuangan', 'user.png'),
('AdminKepegawaian', 'pegawai', 'AdminKepegawaian', 'user.png'),
('AdminLabolatorium', 'lab', 'AdminLabolatorium', 'user.png'),
('AreaManajer', 'am', 'AreaManajer', 'user.png'),
('Direktur', 'direktur', 'Direktur', 'user.png'),
('K0002', '123', 'Pegawai', '08_Sep_2021_04_22_21_1.PNG'),
('Manajer', 'manajer', 'Manajer', 'user.png'),
('Supervisior', 'sp', 'Supervisior', 'user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `benih`
--

CREATE TABLE `benih` (
  `tanggal_masuk` date NOT NULL,
  `code_clone` varchar(10) NOT NULL,
  `nama_benih` varchar(50) NOT NULL,
  `no_indukan` varchar(10) NOT NULL,
  `jumlah` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `benih`
--

INSERT INTO `benih` (`tanggal_masuk`, `code_clone`, `nama_benih`, `no_indukan`, `jumlah`) VALUES
('2021-09-17', 'B0001', 'aloevera', '1', 450),
('2021-09-09', 'B0002', 'vanili', '2', 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bibit`
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
-- Dumping data untuk tabel `bibit`
--

INSERT INTO `bibit` (`id_bibit`, `tanggal_keluar`, `code_clone`, `nama_bibit`, `no_indukan`, `jmlh_unit`, `keterangan`) VALUES
(1, '2021-09-08', 'B0001', 'aloevera', '1', 450, 'baik'),
(2, '2021-09-16', 'B0001', 'aloevera', '1', 450, 'baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bibit_siap_jual`
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
-- Dumping data untuk tabel `bibit_siap_jual`
--

INSERT INTO `bibit_siap_jual` (`id_bibit_siap_jual`, `tanggal_keluar`, `code_clone`, `nama_bibit`, `no_indukan`, `jmlh_unit`, `keterangan`) VALUES
(1, '2021-09-07', 'B0002', 'vanili', '2', '500', 'baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(12) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `umur` varchar(4) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tanggal_gabung` date NOT NULL,
  `bagian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `umur`, `alamat`, `no_hp`, `tanggal_gabung`, `bagian`) VALUES
('K0001', 'Sabar', '25', 'parungkuda', '085846761639', '2021-09-16', 'Admin'),
('K0002', 'Sabar', '25', 'parungkuda', '085846761639', '2021-09-11', 'Labolatorium'),
('K0003', 'Sabar', '25', 'parungkuda', '085846761639', '2021-09-16', 'Greenhouse'),
('K0004', 'Sabar', '25', 'parungkuda', '085846761639', '2021-09-10', 'Labolatorium');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontaminasi`
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
-- Dumping data untuk tabel `kontaminasi`
--

INSERT INTO `kontaminasi` (`id_kontaminasi`, `tanggal`, `id_karyawan`, `nama_karyawan`, `code_clone`, `stage`, `jmlh_pot`, `unit_benih_pot`, `jmlh_btl`, `unit_benih_btl`, `keterangan`) VALUES
('1', '2021-09-10', 'K0004', 'Sabar', 'B0001', '30', 30, 50, 20, 60, 'bagus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_absensi`
--

CREATE TABLE `laporan_absensi` (
  `id_absensi` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `bagian` varchar(20) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan_absensi`
--

INSERT INTO `laporan_absensi` (`id_absensi`, `tanggal`, `id_karyawan`, `nama_karyawan`, `bagian`, `keterangan`) VALUES
('1', '2021-09-10', 'K0002', 'Sabar', 'Labolatorium', 'absen'),
('2', '2021-09-09', 'K0003', 'Sabar', 'Greenhouse', 'absen'),
('3', '2021-09-09', 'K0001', 'Sabar', 'Admin', 'absen'),
('4', '2021-09-10', 'K0003', 'Sabar', 'Greenhouse', 'izin'),
('5', '2021-09-17', 'K0002', 'Sabar', 'Labolatorium', 'izin'),
('6', '2021-09-17', 'K0002', 'Sabar', 'Labolatorium', 'izin'),
('7', '2021-09-16', 'K0004', 'Sabar', 'Labolatorium', 'izin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_bibit_siap_jual`
--

CREATE TABLE `laporan_bibit_siap_jual` (
  `id_bibit_siap_jual` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `code_clone` varchar(10) NOT NULL,
  `nama_bibit` varchar(50) NOT NULL,
  `no_indukan` varchar(10) NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan_bibit_siap_jual`
--

INSERT INTO `laporan_bibit_siap_jual` (`id_bibit_siap_jual`, `tanggal_keluar`, `code_clone`, `nama_bibit`, `no_indukan`, `jumlah`) VALUES
(1, '2021-09-07', 'B0002', 'vanili', '2', 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_keuntungan`
--

CREATE TABLE `laporan_keuntungan` (
  `id_penjualan` varchar(10) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `id_pengeluaran` varchar(10) NOT NULL,
  `total_biaya` int(20) NOT NULL,
  `keuntungan` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_kontaminasi`
--

CREATE TABLE `laporan_kontaminasi` (
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `id_subkultur` varchar(10) NOT NULL,
  `total_btl_subkultur` int(10) NOT NULL,
  `total_pot_subkultur` int(10) NOT NULL,
  `total_subkultur_unit` int(10) NOT NULL,
  `total_bakteri` int(10) NOT NULL,
  `id_kontaminasi` varchar(10) NOT NULL,
  `total_btl_kontam` int(10) NOT NULL,
  `total_pot_kontam` int(10) NOT NULL,
  `total_kontam_unit` int(10) NOT NULL,
  `total_%_kontam` varchar(10) NOT NULL,
  `total_menit_laminar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_penggajian`
--

CREATE TABLE `laporan_penggajian` (
  `id_penggajian` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `gaji_pokok` int(20) NOT NULL,
  `tunjangan` int(20) NOT NULL,
  `intensif` int(20) NOT NULL,
  `gaji_kotor` int(20) NOT NULL,
  `gaji_bersih` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan_penggajian`
--

INSERT INTO `laporan_penggajian` (`id_penggajian`, `tanggal`, `id_karyawan`, `nama_karyawan`, `gaji_pokok`, `tunjangan`, `intensif`, `gaji_kotor`, `gaji_bersih`) VALUES
(1, '2021-09-10', 'K0001', 'Sabar', 1500000, 700000, 200000, 2400000, 2304000),
(2, '2021-09-10', 'K0001', 'Sabar', 1500000, 700000, 200000, 2400000, 2304000),
(3, '2021-09-14', 'K0002', 'Sabar', 1500000, 700000, 200000, 2400000, 2304000),
(4, '2021-09-08', 'K0004', 'Sabar', 1500000, 700000, 0, 2200000, 2200000),
(5, '2021-09-16', 'K0004', 'Sabar', 1500000, 700000, 0, 2200000, 2200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_pengeluaran` varchar(20) NOT NULL,
  `total_biaya` int(20) NOT NULL,
  `foto_bukti` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggajian`
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
  `intensif` int(20) NOT NULL,
  `gaji_kotor` int(20) NOT NULL,
  `id_absensi` varchar(10) NOT NULL,
  `gaji_bersih` int(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penggajian`
--

INSERT INTO `penggajian` (`id_penggajian`, `tanggal`, `id_karyawan`, `nama_karyawan`, `gaji_pokok`, `tunjangan`, `bagian`, `total_%_kontam`, `intensif`, `gaji_kotor`, `id_absensi`, `gaji_bersih`, `keterangan`) VALUES
(3, '2021-09-14', 'K0002', 'Sabar', 1500000, 700000, 'Labolatorium', '0', 200000, 2400000, '1', 2304000, 'ok1'),
(4, '2021-09-08', 'K0004', 'Sabar', 1500000, 700000, 'Labolatorium', '0', 0, 2200000, '0', 2200000, 'ya'),
(5, '2021-09-16', 'K0004', 'Sabar', 1500000, 700000, 'Labolatorium', '550', 0, 2200000, '0', 2200000, 'ok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
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
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `tanggal`, `jenis_penjualan`, `code_clone`, `nama_bibit`, `harga_satuan`, `jumlah`, `total_harga`, `tujuan`, `penerima`, `ekspedisi`, `keterangan`) VALUES
('P0001', '2021-09-16', 'Domestik', 'B0001', 'aloevera', 20000, 450, 9000000, 'sukabumi', 'sabar', 'jalur darat', 'qqqq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkultur`
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
-- Dumping data untuk tabel `subkultur`
--

INSERT INTO `subkultur` (`id_subkultur`, `tanggal`, `id_karyawan`, `nama_karyawan`, `code_clone`, `stage_awal`, `stage_akhir`, `media`, `jmlh_awal_pot`, `jmlh_akhir_pot`, `jmh_awal_btl`, `jmlh_akhir_btl`, `unit_benih_pot`, `unit_benih_bt`, `jmlh_bakteri`, `durasi`, `keterangan`) VALUES
('1', '2021-09-02', 'K0004', 'Sabar', 'B0001', '20', '30', '90', 5, 10, 6, 7, 11, 9, 30, '60', 'baik\r\n');

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
-- Indexes for table `laporan_absensi`
--
ALTER TABLE `laporan_absensi`
  ADD KEY `id_absensi` (`id_absensi`);

--
-- Indexes for table `laporan_bibit_siap_jual`
--
ALTER TABLE `laporan_bibit_siap_jual`
  ADD KEY `id_bibit_siap_jual` (`id_bibit_siap_jual`);

--
-- Indexes for table `laporan_keuntungan`
--
ALTER TABLE `laporan_keuntungan`
  ADD KEY `id_penjualan` (`id_penjualan`,`id_pengeluaran`),
  ADD KEY `id_pengeluaran` (`id_pengeluaran`);

--
-- Indexes for table `laporan_kontaminasi`
--
ALTER TABLE `laporan_kontaminasi`
  ADD KEY `total_%_kontam` (`total_%_kontam`),
  ADD KEY `id_karyawan` (`id_karyawan`,`id_subkultur`,`id_kontaminasi`),
  ADD KEY `id_kontaminasi` (`id_kontaminasi`),
  ADD KEY `id_subkultur` (`id_subkultur`);

--
-- Indexes for table `laporan_penggajian`
--
ALTER TABLE `laporan_penggajian`
  ADD PRIMARY KEY (`id_penggajian`);

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
  MODIFY `id_bibit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bibit_siap_jual`
--
ALTER TABLE `bibit_siap_jual`
  MODIFY `id_bibit_siap_jual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `laporan_bibit_siap_jual`
--
ALTER TABLE `laporan_bibit_siap_jual`
  MODIFY `id_bibit_siap_jual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `laporan_penggajian`
--
ALTER TABLE `laporan_penggajian`
  MODIFY `id_penggajian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `id_penggajian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `bibit`
--
ALTER TABLE `bibit`
  ADD CONSTRAINT `bibit_ibfk_1` FOREIGN KEY (`code_clone`) REFERENCES `benih` (`code_clone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `bibit_siap_jual`
--
ALTER TABLE `bibit_siap_jual`
  ADD CONSTRAINT `bibit_siap_jual_ibfk_1` FOREIGN KEY (`code_clone`) REFERENCES `benih` (`code_clone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kontaminasi`
--
ALTER TABLE `kontaminasi`
  ADD CONSTRAINT `kontaminasi_ibfk_1` FOREIGN KEY (`code_clone`) REFERENCES `benih` (`code_clone`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kontaminasi_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laporan_absensi`
--
ALTER TABLE `laporan_absensi`
  ADD CONSTRAINT `laporan_absensi_ibfk_1` FOREIGN KEY (`id_absensi`) REFERENCES `absensi` (`id_absensi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laporan_bibit_siap_jual`
--
ALTER TABLE `laporan_bibit_siap_jual`
  ADD CONSTRAINT `laporan_bibit_siap_jual_ibfk_1` FOREIGN KEY (`id_bibit_siap_jual`) REFERENCES `bibit_siap_jual` (`id_bibit_siap_jual`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laporan_keuntungan`
--
ALTER TABLE `laporan_keuntungan`
  ADD CONSTRAINT `laporan_keuntungan_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualan` (`id_penjualan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `laporan_keuntungan_ibfk_2` FOREIGN KEY (`id_pengeluaran`) REFERENCES `pengeluaran` (`id_pengeluaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laporan_kontaminasi`
--
ALTER TABLE `laporan_kontaminasi`
  ADD CONSTRAINT `laporan_kontaminasi_ibfk_2` FOREIGN KEY (`id_subkultur`) REFERENCES `subkultur` (`id_subkultur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `laporan_kontaminasi_ibfk_3` FOREIGN KEY (`id_kontaminasi`) REFERENCES `kontaminasi` (`id_kontaminasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penggajian`
--
ALTER TABLE `penggajian`
  ADD CONSTRAINT `penggajian_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`code_clone`) REFERENCES `benih` (`code_clone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `subkultur`
--
ALTER TABLE `subkultur`
  ADD CONSTRAINT `subkultur_ibfk_1` FOREIGN KEY (`code_clone`) REFERENCES `benih` (`code_clone`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subkultur_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
