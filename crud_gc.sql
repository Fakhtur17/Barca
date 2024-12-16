-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 11:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_gc`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `gambar_produk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `deskripsi`, `harga_beli`, `harga_jual`, `gambar_produk`) VALUES
(1, 'Bola Sepak ', 'Dibuat Dengan desain Gambar Barca ', 110, 170, '343-58-gambar2.jpeg'),
(2, 'Sepatu Bola ', 'desain dan logo barca ', 200, 300, '980-268-WhatsApp Image 2024-12-09 at 13.49.12.jpeg'),
(3, 'Botol Minum ', 'Dibuat dengan sangat kuat', 50, 100, '548-353-gambar1.jpeg'),
(4, 'Slayer ', 'dibuat dengan kain yang bagus ', 100, 150, '447-405-gambar7.jpeg'),
(5, 'Binder Barca ', 'Di buat seperti buku pada umumnya ', 80, 150, '709-445-gambar10.jpeg'),
(6, 'Topi Barca', 'Dibuat untuk melindung kepala ', 100, 150, '786-523-gambar3.jpeg'),
(7, 'Earphone', 'Dibuat untuk mendengarkan musik ', 200, 310, '207-542-gambar4.jpeg'),
(8, 'Gelas', 'Dibuat dengan gambar barca dan sangat indah ', 200, 300, '650-564-gambar9.jpeg'),
(9, 'Tas Baju ', 'Tas yang dibuat untuk menyimpan baju ', 200, 300, '384-574-gambar8.jpeg'),
(10, 'Tas Futsal ', 'Tas yang digunakan untuk menyimpan sepatu ', 80, 150, '406-672-gambar5.jpeg'),
(11, 'Gelang', 'Aksesoris ', 50, 70, '295-gambar6.jpeg'),
(12, 'Gantung Kunci ', 'Aksesoris Kunci ', 50, 70, '489-899-WhatsApp Image 2024-12-09 at 13.49.10.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
