-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jul 2021 pada 15.04
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `databarang`
--

CREATE TABLE `databarang` (
  `Id` int(11) NOT NULL,
  `NamaBarang` text NOT NULL,
  `Satuan` varchar(50) NOT NULL,
  `HargaBeli` varchar(50) NOT NULL,
  `HargaJual` varchar(50) NOT NULL,
  `Stok` varchar(50) NOT NULL,
  `Gambar` varchar(225) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `databarang`
--

INSERT INTO `databarang` (`Id`, `NamaBarang`, `Satuan`, `HargaBeli`, `HargaJual`, `Stok`, `Gambar`, `Kategori`, `Deskripsi`, `Keterangan`) VALUES
(2, 'bibit', '1', '5000', '10000', '98', '20_Jul_2021_12_21_52_1.jpeg', 'bibit', 'unggulan', '2021-07-21 17:55:17'),
(3, 'pupuk', '1', '200000', '300000', '93', '20_Jul_2021_12_22_18_1.jpeg', 'pupuk', 'unggulan', '2021-07-21 17:55:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapembeli`
--

CREATE TABLE `datapembeli` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(150) NOT NULL,
  `Alamat` text NOT NULL,
  `Telephone` varchar(20) NOT NULL,
  `JumlahBarang` varchar(50) NOT NULL,
  `Subtotal` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Komentar` text NOT NULL,
  `Aksi` varchar(50) NOT NULL,
  `Tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapembeli`
--

INSERT INTO `datapembeli` (`Id`, `Nama`, `Alamat`, `Telephone`, `JumlahBarang`, `Subtotal`, `UserName`, `Komentar`, `Aksi`, `Tanggal`) VALUES
(1, 'sabar', 'bojong', '0899999', '2', '610000', 'admin', 'ditunggu', 'dikirim', '2021-07-21 13:37:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapengelola`
--

CREATE TABLE `datapengelola` (
  `IdPengelola` int(11) NOT NULL,
  `Nama` varchar(150) NOT NULL,
  `Alamat` text NOT NULL,
  `NoTelp` varchar(12) NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapengelola`
--

INSERT INTO `datapengelola` (`IdPengelola`, `Nama`, `Alamat`, `NoTelp`, `Keterangan`) VALUES
(1, 'anonim', 'parkud', '085846761639', '2009-01-06 14:39:26'),
(2, 'mrx', 'smi', '1234', '2009-01-06 14:39:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datatoko`
--

CREATE TABLE `datatoko` (
  `Id` int(11) NOT NULL,
  `Nama` text NOT NULL,
  `Alamat` text NOT NULL,
  `Telepon` varchar(20) NOT NULL,
  `NamaBank` varchar(100) NOT NULL,
  `NoRekening` varchar(225) NOT NULL,
  `AtasNama` varchar(100) NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datatoko`
--

INSERT INTO `datatoko` (`Id`, `Nama`, `Alamat`, `Telepon`, `NamaBank`, `NoRekening`, `AtasNama`, `Keterangan`) VALUES
(5, 'CV VANILLA GEMSTONE', 'SUKABUMI', '08xxx', 'bri', 'xxxxxxx', 'CV VANILLA GEMSTONE', '2021-07-21 15:56:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `IdBarang` varchar(50) NOT NULL,
  `JumlahBarang` varchar(50) NOT NULL,
  `Total` varchar(50) NOT NULL,
  `Aksi` varchar(50) NOT NULL,
  `Tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`Id`, `UserName`, `IdBarang`, `JumlahBarang`, `Total`, `Aksi`, `Tanggal`) VALUES
(3, 'admin', '3', '2', '600000', 'dikemas', '2021-07-21 11:51:45'),
(4, 'admin', '2', '1', '10000', 'dikemas', '2021-07-21 11:51:46'),
(6, 'admin', '3', '2', '600000', 'dikemas', '2021-07-21 12:01:26'),
(7, 'admin', '2', '1', '10000', 'dikemas', '2021-07-21 12:01:26'),
(8, 'admin', '2', '1', '10000', 'dikemas', '2021-07-21 13:41:37'),
(12, 'admin', '3', '2', '0', '1', '2021-07-21 17:53:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Level` varchar(50) NOT NULL,
  `Fhoto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`UserName`, `Password`, `Level`, `Fhoto`) VALUES
('admin', '149', 'admin', 'admin.jpg'),
('user', '149', 'user', 'user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databarang`
--
ALTER TABLE `databarang`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `datapembeli`
--
ALTER TABLE `datapembeli`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `datapengelola`
--
ALTER TABLE `datapengelola`
  ADD PRIMARY KEY (`IdPengelola`);

--
-- Indexes for table `datatoko`
--
ALTER TABLE `datatoko`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databarang`
--
ALTER TABLE `databarang`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `datapembeli`
--
ALTER TABLE `datapembeli`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `datapengelola`
--
ALTER TABLE `datapengelola`
  MODIFY `IdPengelola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `datatoko`
--
ALTER TABLE `datatoko`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
