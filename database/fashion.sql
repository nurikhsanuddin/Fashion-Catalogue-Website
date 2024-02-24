-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2024 at 01:28 AM
-- Server version: 10.5.22-MariaDB-cll-lve
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id`, `nama`, `gambar`, `harga`, `deskripsi`, `kategori`) VALUES
(4, 'Bomber Army', '4.png', 300000.00, 'Jaket Bomber', 'jaket'),
(5, 'Kaos Couple', '5.png', 300000.00, 'Kaos Couple Putih Untuk Pasangan', 'kaos'),
(6, 'Hoodie', '6.png', 120000.00, 'Bermacam macam hoodie dengan warna yang menarik', 'jaket'),
(7, 'Kaos Polos', '7.png', 40000.00, 'Bermacam macam kaos polos dengan warna kalem', 'kaos'),
(8, 'Kemeja Abu', '8.png', 110000.00, 'Kemeja dengan warna abu-abi', 'kemeja'),
(9, 'Sepatu Putih', '9.png', 400000.00, 'Sepatu dengan warna putih yang cerah serna bahan 100% kulit sapi asli', 'sepatu'),
(10, 'Celana kargo hitam', '10.png', 145000.00, 'celana kargo hitam yang sangat cocok untuk kegiatan outdoor kalian', 'celana'),
(11, 'Celana Chinos', '11.png', 300000.00, 'celana chinos dengan bahan yang nyaman untuk di pakai seharian', 'celana'),
(12, 'Kaos Lengan Panjang', '12.png', 95000.00, 'Kaos Lengan Panjang dengan desain yang unik', 'kaos'),
(13, 'Celana Jeans', '13.png', 250000.00, 'Celana Jeans dengan beberapa varian warna', 'kaos'),
(14, 'Kemeja Biru ', '14.png', 115000.00, 'Kemeja dengan warna biru gelap dengan bahan yang dingin jika di pakai', 'kemeja'),
(15, 'Nike Air Jordan', '15.png', 9600000.00, 'Nike air jordan original 100%', 'sepatu'),
(16, 'Street Jeans', '16.png', 100000.00, 'Celana jeans untuk kamu para anak muda', 'kaos'),
(17, 'Nike 091', '17.png', 1200000.00, 'Sepatu nike dengan warna abu yang indah', 'sepatu'),
(18, 'Celana Pendek', '18.png', 120000.00, 'Celana Pendek dengan bahan yang dingin cocok untuk berpergian maupun di dalam ruangan', 'celana'),
(19, 'Sepatu Coklat', '19.png', 200000.00, 'Sepatu dengan warna coklat yang terlihat calm dan elegant', 'sepatu'),
(20, 'Kemeja Hitam', '20.png', 250000.00, 'Kemeja hitam yang akan menunjukkan wibawa anda', 'kemeja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
