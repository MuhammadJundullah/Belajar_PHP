-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2024 at 02:46 PM
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
-- Table structure for table `Dosen`
--

CREATE TABLE `Dosen` (
  `id` int(11) NOT NULL,
  `kode_dosen` varchar(20) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Dosen`
--

INSERT INTO `Dosen` (`id`, `kode_dosen`, `nama_dosen`, `email`) VALUES
(1, 'DS1', 'Prof Dr. M. Sayuti, S.T., M.Sc', 'Metodologi Penelitian, Elektronika'),
(2, 'DS2', 'Asrianda, S.Kom., M.Kom', 'Pemrograman Mobile, Pemrograman Web'),
(3, 'DS3', 'Munirul Ula, S.T., M.Eng, Ph.D', 'Data Mining, Statistika'),
(4, 'DS4', 'Dr. Nurdin, S.Kom., M.Kom', 'Metode Numerik, Struktur Data'),
(5, 'DS5', 'Rizal, S.Si., M.IT', 'Jaringan Komputer, Ethical Hacking'),
(6, 'DS6', 'Zara Yunizar, S.Kom., M.Kom', ' Pemrograman Visual'),
(7, 'DS7', 'Yesy Afrillia, S.T., M.Kom', 'Data Mining'),
(9, 'DS8', 'Dr. Eng. Muhammad Fikry, S.Kom., M.Kom', 'Computer Science'),
(10, 'DS9', 'Hafizh Al Kautsar Aidilof, S.T., M.Kom', ' Kecerdasan Komputasional'),
(11, 'DS10', 'Ar razi, S.T., M.Cs', '-'),
(12, 'DS11', 'Rini Meiyanti, M.Kom S.T', '-'),
(13, 'DS12', 'Dr. Taufiq, ST., MT', 'Elektronika, Pemrograman');

-- --------------------------------------------------------

--
-- Table structure for table `Jadwal`
--

CREATE TABLE `Jadwal` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `nama_matakuliah` varchar(30) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Jadwal`
--

INSERT INTO `Jadwal` (`id`, `nama_kelas`, `nama_dosen`, `nama_matakuliah`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(27, 'Kelas A5', 'Dr. Taufiq, ST., MT', 'Desain dan Analisis Algoritma', 'Jumat', '08:30:00', '11:00:00'),
(28, 'Kelas A4', 'Hafizh Al Kautsar Aidilof, S.T., M.Kom', 'Metode Numerik', 'Senin', '08:00:00', '10:30:00'),
(30, 'Kelas A1', 'Yesy Afrillia, S.T., M.Kom', 'Etika Profesi', 'Rabu', '11:40:00', '13:20:00'),
(31, 'Kelas A4', 'Dr. Eng. Muhammad Fikry, S.Kom., M.Kom', 'Sistem Manajemen Database', 'Selasa', '10:40:00', '13:10:00'),
(32, 'Kelas A5', 'Ar razi, S.T., M.Cs', 'Jaringan Komputer', 'Kamis', '10:40:00', '13:10:00'),
(33, 'Kelas A3', 'Rini Meiyanti, M.Kom S.T', 'Grafika Komputer', 'Senin', '14:00:00', '16:30:00'),
(34, 'Kelas A4', 'Zara Yunizar, S.Kom., M.Kom', 'Pemrograman Web', 'Kamis', '14:00:00', '16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `Kelas`
--

CREATE TABLE `Kelas` (
  `id` int(11) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Kelas`
--

INSERT INTO `Kelas` (`id`, `kode_kelas`, `nama_kelas`) VALUES
(1, 'A1', 'Kelas A1'),
(2, 'A2', 'Kelas A2'),
(3, 'A3', 'Kelas A3'),
(4, 'A4', 'Kelas A4'),
(5, 'A5', 'Kelas A5'),
(6, 'A6', 'Kelas A6'),
(8, 'A7', 'Kelas A7'),
(9, 'A8', 'Kelas A8');

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
  `photo` varchar(20) DEFAULT NULL
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
-- Table structure for table `MataKuliah`
--

CREATE TABLE `MataKuliah` (
  `id` int(11) NOT NULL,
  `kode_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL,
  `sks` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `MataKuliah`
--

INSERT INTO `MataKuliah` (`id`, `kode_matakuliah`, `nama_matakuliah`, `sks`) VALUES
(1, 'MK1', 'Desain dan Analisis Algoritma', '3'),
(2, 'MK2', 'Metode Numerik', '3'),
(3, 'MK3', 'Etika Profesi', '2'),
(4, 'MK4', 'Sistem Manajemen Database', '3'),
(5, 'MK5', 'Jaringan Komputer', '3'),
(6, 'MK6', 'Grafika Komputer', '3'),
(7, 'MK7', 'Pemrograman Web', '3');

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
-- Indexes for table `Dosen`
--
ALTER TABLE `Dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Jadwal`
--
ALTER TABLE `Jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Kelas`
--
ALTER TABLE `Kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_kelas` (`kode_kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `MataKuliah`
--
ALTER TABLE `MataKuliah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_matakuliah` (`kode_matakuliah`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Dosen`
--
ALTER TABLE `Dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Jadwal`
--
ALTER TABLE `Jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `Kelas`
--
ALTER TABLE `Kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `MataKuliah`
--
ALTER TABLE `MataKuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
