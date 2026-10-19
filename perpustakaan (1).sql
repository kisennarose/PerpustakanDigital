-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2026 at 06:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `kode_buku` varchar(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `stok` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `kode_buku`, `judul`, `penulis`, `tahun`, `stok`) VALUES
(1, 'BK001', 'Laskar Pelangi', 'Andrea Hirata', '2005', 5),
(2, 'BK002', 'Bumi', 'Tere Liye', '2014', 4),
(3, 'BK003', 'Negeri 5 Menara', 'Ahmad Fuadi', '2009', 3),
(4, 'BK004', 'Dilan 1990', 'Pidi Baiq', '2014', 6),
(5, 'BK005', 'Sang Pemimpi', 'Andrea Hirata', '2006', 4);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `kode_buku` varchar(20) DEFAULT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `foto_buku` varchar(255) DEFAULT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Dipinjam'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `kode_buku`, `judul_buku`, `penulis`, `foto_buku`, `nis`, `nama`, `kelas`, `tanggal_pinjam`, `tanggal_kembali`, `status`) VALUES
(1, '123ABC', 'Laut Bercerita', 'Tere liye', NULL, '123456', 'Kinan', 'XII PPLG 2', '2026-10-05', '2026-10-12', 'Dipinjam'),
(2, 'B0123', 'Matematika', 'Suharto', NULL, '654321', 'Nesya', 'XII PPLG 2', '2026-10-05', '2026-10-12', 'Dipinjam'),
(3, NULL, 'Kinan Cantik', 'Kinan cantik', NULL, '1234567', 'Kinann', 'XII PPLG 2', '2026-10-06', '2026-10-13', 'Dipinjam'),
(4, NULL, 'jjbshah', 'jsjla', NULL, '363828', 'Kinan', 'XII PPLG 2', '2026-10-06', '2026-10-13', 'Dipinjam'),
(5, NULL, 'jjbshah', 'jsjla', NULL, '363828', 'Kinan', 'XII PPLG 2', '2026-10-06', '2026-10-13', 'Dipinjam'),
(6, NULL, 'Kinan Cantik', 'Kinan', '', '072928', 'Kinan', 'XII PPLG 2', '2026-10-06', '2026-10-13', 'Dipinjam'),
(7, NULL, 'Seporsi mie ayam sebelum mati ', 'Kailla', '', '12421', 'Makailla', 'XII PPLG 2', '2026-10-06', '2026-10-13', 'Dipinjam'),
(8, NULL, 'Malioboro After Night', 'Kinan ', '', '478965', 'Kinan Cantik', 'XII PPLG 2', '2026-10-06', '2026-10-13', 'Dipinjam'),
(9, NULL, 'Coba deh', 'Coba deh', '', '538399', 'Kinanthi', 'XII PPLG 2', '2026-10-06', '2026-10-13', 'Dipinjam'),
(10, NULL, 'Sandiwara Semu', 'Hai', '', '12345', 'Kinanthi Dewi', 'XII PPLG 2', '2026-10-11', '2026-10-18', 'Dipinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_buku` (`kode_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
