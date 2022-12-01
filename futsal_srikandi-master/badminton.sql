-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 09:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `badminton`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `kode_jadwal` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`kode_jadwal`, `jam`, `harga`) VALUES
('A07', '07.00-08.00', 30000),
('A08', '08.00-09.00', 30000),
('A09', '09.00-10.00', 30000),
('A10', '10.00-11.00', 30000),
('A11', '11.00-12.00', 30000),
('A12', '12.00-13.00', 30000),
('A13', '13.00-14.00', 30000),
('A14', '14.00-15.00', 30000),
('A15', '15.00-16.00', 30000),
('A16', '16.00-17.00', 30000),
('A17', '17.00-18.00', 30000),
('A18', '18.00-19.00', 40000),
('A19', '19.00-20.00', 40000),
('A20', '20.00-21.00', 40000),
('A21', '21.00-22.00', 40000),
('A22', '22.00-23.00', 40000),
('B07', '07.00-08.00', 30000),
('B08', '08.00-09.00', 30000),
('B09', '09.00-10.00', 30000),
('B10', '10.00-11.00', 30000),
('B11', '11.00-12.00', 30000),
('B12', '12.00-13.00', 30000),
('B13', '13.00-14.00', 30000),
('B14', '14.00-15.00', 30000),
('B15', '15.00-16.00', 30000),
('B16', '16.00-17.00', 30000),
('B17', '17.00-18.00', 30000),
('B18', '18.00-19.00', 40000),
('B19', '19.00-20.00', 40000),
('B20', '20.00-21.00', 40000),
('B21', '21.00-22.00', 40000),
('B22', '22.00-23.00', 40000),
('T07', '07.00-08.00', 30000),
('T08', '08.00-09.00', 30000),
('T09', '09.00-10.00', 30000),
('T10', '10.00-11.00', 30000),
('T11', '11.00-12.00', 30000),
('T12', '12.00-13.00', 30000),
('T13', '13.00-14.00', 30000),
('T14', '14.00-15.00', 30000),
('T15', '15.00-16.00', 30000),
('T16', '16.00-17.00', 30000),
('T17', '17.00-18.00', 30000),
('T18', '18.00-19.00', 40000),
('T19', '19.00-20.00', 40000),
('T20', '20.00-21.00', 40000),
('T21', '21.00-22.00', 40000),
('T22', '22.00-23.00', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `kode_lapangan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jadwal` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`kode_lapangan`, `nama`, `lokasi`, `kode_jadwal`) VALUES
('LA-07', 'Lapangan 1', '1', 'A07'),
('LA-08', 'Lapangan 1', '1', 'A08'),
('LA-09', 'Lapangan 1', '1', 'A09'),
('LA-10', 'Lapangan 1', '1', 'A10'),
('LA-11', 'Lapangan 1', '1', 'A11'),
('LA-12', 'Lapangan 1', '1', 'A12'),
('LA-13', 'Lapangan 1', '1', 'A13'),
('LA-14', 'Lapangan 1', '1', 'A14'),
('LA-15', 'Lapangan 1', '1', 'A15'),
('LA-16', 'Lapangan 1', '1', 'A16'),
('LA-17', 'Lapangan 1', '1', 'A17'),
('LA-18', 'Lapangan 1', '1', 'A18'),
('LA-19', 'Lapangan 1', '1', 'A19'),
('LA-20', 'Lapangan 1', '1', 'A20'),
('LA-21', 'Lapangan 1', '1', 'A21'),
('LA-22', 'Lapangan 1', '1', 'A22'),
('LB-07', 'Lapangan 3', '3', 'B07'),
('LB-08', 'Lapangan 3', '3', 'B08'),
('LB-09', 'Lapangan 3', '3', 'B09'),
('LB-10', 'Lapangan 3', '3', 'B10'),
('LB-11', 'Lapangan 3', '3', 'B11'),
('LB-12', 'Lapangan 3', '3', 'B12'),
('LB-13', 'Lapangan 3', '3', 'B13'),
('LB-14', 'Lapangan 3', '3', 'B14'),
('LB-15', 'Lapangan 3', '3', 'B15'),
('LB-16', 'Lapangan 3', '3', 'B16'),
('LB-17', 'Lapangan 3', '3', 'B17'),
('LB-18', 'Lapangan 3', '3', 'B18'),
('LB-19', 'Lapangan 3', '3', 'B19'),
('LB-20', 'Lapangan 3', '3', 'B20'),
('LB-21', 'Lapangan 3', '3', 'B21'),
('LB-22', 'Lapangan 3', '3', 'B22'),
('LT-07', 'Lapangan 2', '2', 'T07'),
('LT-08', 'Lapangan 2', '2', 'T08'),
('LT-09', 'Lapangan 2', '2', 'T09'),
('LT-10', 'Lapangan 2', '2', 'T10'),
('LT-11', 'Lapangan 2', '2', 'T11'),
('LT-12', 'Lapangan 2', '2', 'T12'),
('LT-13', 'Lapangan 2', '2', 'T13'),
('LT-14', 'Lapangan 2', '2', 'T14'),
('LT-15', 'Lapangan 2', '2', 'T15'),
('LT-16', 'Lapangan 2', '2', 'T16'),
('LT-17', 'Lapangan 2', '2', 'T17'),
('LT-18', 'Lapangan 2', '2', 'T18'),
('LT-19', 'Lapangan 2', '2', 'T19'),
('LT-20', 'Lapangan 2', '2', 'T20'),
('LT-21', 'Lapangan 2', '2', 'T21'),
('LT-22', 'Lapangan 2', '2', 'T22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_03_19_175411_make_table', 1),
(2, '2020_03_19_175713_relation_table', 1),
(3, '2020_04_15_184738_change_unique_key', 1),
(4, '2020_04_22_135818_update_lapangan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `kode_operator` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`kode_operator`, `nama`, `password`) VALUES
(1, 'admin', '$2y$10$oP1t7Bbr0KARNr33MvGe2uhXVy4ZvwpirhxrPsKxVAt6GN2wsswiu');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` int(10) UNSIGNED NOT NULL,
  `kode_operator` int(10) UNSIGNED NOT NULL,
  `kode_user` int(10) UNSIGNED NOT NULL,
  `kode_lapangan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jadwal` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kode_user` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode_user`, `nama`, `telepon`) VALUES
(1, 'Arif Putra Rochman', '081122334455'),
(2, 'Hidayat', '082233445566'),
(3, 'Jahval Romiz Septrada', '083344556677'),
(4, 'M. Syaddad G. Al Farez', '082135788302');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`kode_jadwal`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`kode_lapangan`),
  ADD KEY `lapangan_kode_jadwal_foreign` (`kode_jadwal`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`kode_operator`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `transaksi_kode_operator_foreign` (`kode_operator`),
  ADD KEY `transaksi_kode_lapangan_foreign` (`kode_lapangan`),
  ADD KEY `transaksi_kode_user_foreign` (`kode_user`),
  ADD KEY `transaksi_kode_jadwal_foreign` (`kode_jadwal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `kode_operator` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kode_transaksi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kode_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD CONSTRAINT `lapangan_kode_jadwal_foreign` FOREIGN KEY (`kode_jadwal`) REFERENCES `jadwal` (`kode_jadwal`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_kode_jadwal_foreign` FOREIGN KEY (`kode_jadwal`) REFERENCES `jadwal` (`kode_jadwal`),
  ADD CONSTRAINT `transaksi_kode_lapangan_foreign` FOREIGN KEY (`kode_lapangan`) REFERENCES `lapangan` (`kode_lapangan`),
  ADD CONSTRAINT `transaksi_kode_operator_foreign` FOREIGN KEY (`kode_operator`) REFERENCES `operator` (`kode_operator`),
  ADD CONSTRAINT `transaksi_kode_user_foreign` FOREIGN KEY (`kode_user`) REFERENCES `user` (`kode_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
