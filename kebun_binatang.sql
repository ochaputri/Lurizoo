-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 03:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kebun_binatang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `kode_paket` varchar(2) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga_paket` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`kode_paket`, `nama_paket`, `harga_paket`) VALUES
('P1', 'anak-anak', 5000),
('P2', 'remaja', 6000),
('P3', 'dewasa', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastName`, `gender`, `email`, `password`, `number`) VALUES
(476, 'Rahmat', 'Ganteng', 'male', 'rahmat@mail.com', 'rahmat123', 89766557876),
(477, 'dewa', 'adji', 'male', 'dewa@mail.com', 'dewa123', 987654345),
(478, 'Boby ', 'Putra', 'male', 'boby@mail.com', 'boby123', 89677443567),
(479, 'rina', 'madinah', 'female', 'rina@mail.com', 'rina123', 89677565543),
(480, 'Mira', 'Maru', 'female', 'mira@mail.com', 'mira123', 89534223478),
(481, 'Agus', 'Salim', 'male', 'agus.ganteng@mail.com', 'agus123', 89677453367);

-- --------------------------------------------------------

--
-- Table structure for table `satwa`
--

CREATE TABLE `satwa` (
  `id_satwa` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `nama_binatang` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `kode_tiket` int(11) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `jadwal` date NOT NULL,
  `anak_anak` int(2) NOT NULL,
  `remaja` int(2) NOT NULL,
  `dewasa` int(2) NOT NULL,
  `kode_wahana` varchar(2) NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `pin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`kode_tiket`, `nama_lengkap`, `jadwal`, `anak_anak`, `remaja`, `dewasa`, `kode_wahana`, `total_harga`, `pin`) VALUES
(1, 'Rahmat Ganteng', '2023-01-30', 2, 3, 1, 'W1', 'Rp. 155000', 0),
(6, 'dewa adji', '2023-02-08', 2, 0, 2, 'W2', 'Rp. 64000', 22855),
(7, 'Boby  Putra', '2023-01-04', 2, 1, 2, 'W3', 'Rp. 180000', 68716),
(8, 'Boby  Putra', '2023-03-01', 1, 1, 2, 'W3', 'Rp. 145000', 31352),
(9, 'rina madinah', '2023-01-27', 4, 0, 2, 'W3', 'Rp. 214000', 58729),
(10, 'Mira Maru', '2023-01-30', 1, 2, 3, 'W1', 'Rp. 158000', 6810),
(11, 'Agus Salim', '2023-01-15', 0, 2, 3, 'W0', 'Rp. 33000', 31818);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `metode_pembayaran` varchar(20) NOT NULL,
  `status_lunas` bit(2) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wahana`
--

CREATE TABLE `wahana` (
  `kode_wahana` varchar(2) NOT NULL,
  `nama_wahana` varchar(20) NOT NULL,
  `harga` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wahana`
--

INSERT INTO `wahana` (`kode_wahana`, `nama_wahana`, `harga`) VALUES
('W0', 'Tidak Memilih', 0),
('W1', 'Aquarium Laut', 20000),
('W2', 'Memberi Makan', 10000),
('W3', 'Pilih Keduanya', 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`kode_paket`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satwa`
--
ALTER TABLE `satwa`
  ADD PRIMARY KEY (`id_satwa`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`kode_tiket`),
  ADD KEY `nama_wahana` (`kode_wahana`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `wahana`
--
ALTER TABLE `wahana`
  ADD PRIMARY KEY (`kode_wahana`),
  ADD UNIQUE KEY `nama_wahana` (`nama_wahana`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=482;

--
-- AUTO_INCREMENT for table `satwa`
--
ALTER TABLE `satwa`
  MODIFY `id_satwa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `kode_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `wahana` FOREIGN KEY (`kode_wahana`) REFERENCES `wahana` (`kode_wahana`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
