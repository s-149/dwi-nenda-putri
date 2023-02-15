-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Sep 2021 pada 17.40
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
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_user`
--

CREATE TABLE `admin_user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` varchar(50) NOT NULL,
  `fhoto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_user`
--

INSERT INTO `admin_user` (`username`, `password`, `level`, `fhoto`) VALUES
('149', '149', 'Admin', 'user.png'),
('AdminDistribusidanKeuangan', 'dk', 'AdminDistribusidanKeuangan', 'user.png'),
('AdminKepegawaian', 'pegawai', 'AdminKepegawaian', 'user.png'),
('AdminLabolatorium', 'lab', 'AdminLabolatorium', 'user.png'),
('AreaManajer', 'am', 'AreaManajer', 'user.png'),
('Direktur', 'direktur', 'Direktur', 'user.png'),
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `bibit`
--

CREATE TABLE `bibit` (
  `id_bibit` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `code_clone` varchar(10) NOT NULL,
  `nama_bibit` varchar(50) NOT NULL,
  `no_indukan` int(10) NOT NULL,
  `jmlh_unit` int(10) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bibit_siap_jual`
--

CREATE TABLE `bibit_siap_jual` (
  `id_bibit_siap_jual` varchar(10) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `code_clone` varchar(10) NOT NULL,
  `nama_bibit` varchar(50) NOT NULL,
  `no_indukan` varchar(10) NOT NULL,
  `jmlh_unit` varchar(20) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_bibit_siap_jual`
--

CREATE TABLE `laporan_bibit_siap_jual` (
  `id_bibit_siap_jual` varchar(10) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `code_clone` varchar(10) NOT NULL,
  `nama_bibit` varchar(50) NOT NULL,
  `no_indukan` varchar(10) NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id_bibit` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `laporan_penggajian`
--
ALTER TABLE `laporan_penggajian`
  MODIFY `id_penggajian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `id_penggajian` int(11) NOT NULL AUTO_INCREMENT;
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
