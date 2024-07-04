-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2024 at 05:05 AM
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
-- Database: `kelas_a4`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `no` int(11) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `photo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`no`, `nim`, `nama`, `alamat`, `email`, `photo`) VALUES
(1, '220170045', 'Sayid Muhammad Jundullah', 'Paya Tumpi', 'sayidmuhammad15@gmail.com', '667aa5a76dc47.jpeg'),
(2, '220170046', 'Mohammad Radenis Stevano Mahelbe', 'Takengon', 'radenis354@gmail.com', '667aa61c18c0c.jpeg'),
(3, '220170002', 'Fachril Akbar', 'Langsa', 'Fachril@gmail.com', '667aa63331516.jpeg'),
(4, '220170177', 'Fathurrahman Siregar', 'Medan', 'Fathurrahman112@gmail.com', '667aa6c236229.jpg'),
(5, '220170033', 'Azri Fitrah', 'Medan', 'azri2001@gmail.com', '667aa647920a5.jpg'),
(6, '220170004', 'Ridho Firmansyah', 'Maninjau', 'ridhofrmnsyh@gmail.com', '667aa6b8141fb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$B.yTDG2iLBNGiTXvDdojlukm5DfI.xu4nz1kYvrrUeUpCJgfLgABm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
