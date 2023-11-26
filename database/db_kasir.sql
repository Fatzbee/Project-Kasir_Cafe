-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 10:25 AM
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
-- Database: `db_kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(10) NOT NULL,
  `id_transaksi` bigint(20) NOT NULL,
  `kd_menu` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `id_transaksi`, `kd_menu`, `quantity`, `catatan`) VALUES
(61, 18, '1MKN', 1, ''),
(62, 18, '8MNM', 2, ''),
(63, 18, '7MNM', 1, ''),
(64, 18, '6MNM', 1, ''),
(65, 18, '5SNK', 1, ''),
(66, 18, '4SNK', 1, ''),
(67, 18, '3MNM', 1, ''),
(68, 20, '7MNM', 1, ''),
(69, 21, '1MKN', 1, ''),
(70, 22, '8MNM', 1, ''),
(71, 22, '7MNM', 1, ''),
(72, 23, '8MNM', 1, ''),
(73, 23, '7MNM', 1, ''),
(74, 23, '6MNM', 1, ''),
(75, 23, '3MNM', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `kd_menu` varchar(10) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `harga_satuan` int(20) NOT NULL,
  `stok` int(10) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`kd_menu`, `nama_menu`, `type`, `harga_satuan`, `stok`, `img`) VALUES
('1MKN', 'Mie Tarik', 'makanan', 12000, 11, '1MKN0.jpg'),
('2SNK', 'French Fries', 'snack', 10000, 2, '2SNK0.jpg'),
('3MNM', 'Chocolate', 'minuman', 15000, 1, '3MNM1.jpg'),
('4SNK', 'Cireng', 'snack', 8000, 4, '4SNK0.jpg'),
('5SNK', 'Bombolone', 'snack', 12000, 4, '5SNK1.png'),
('6MNM', 'Americano', 'minuman', 15000, 1, '6MNM0.jpg'),
('7MNM', 'Cappucino', 'minuman', 12000, 1, '7MNM0.jpg'),
('8MNM', 'Espresso', 'minuman', 12000, 10, '8MNM0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_customer` varchar(20) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `no_meja` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `nama_customer`, `total_harga`, `waktu`, `no_meja`) VALUES
(18, 1, 'anji', 107800, '2023-11-14 16:20:26', '12'),
(19, 1, 'anji', 0, '2023-11-14 16:23:04', '12'),
(20, 15, 'anji', 13200, '2023-11-15 02:50:09', '12'),
(21, 15, 'anji', 13200, '2023-11-15 02:51:49', '12'),
(22, 15, 'amat', 26400, '2023-11-15 03:03:12', '12'),
(23, 15, 'udin', 59400, '2023-11-15 04:19:41', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(15, 'fatzbee', 'fa6feb7325c2e2b2a49650063b26b793', 'user'),
(16, 'amanda', 'de7670686ee62beda77eec182fcd36e1', 'user'),
(17, 'diky', '7e61690218de9eb083e1abdcfb2ac040', 'user'),
(18, 'fitri', '8ac99bb12b7c18e27d06fd34fe1203fc', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `kd_menu` (`kd_menu`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`kd_menu`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_login` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`kd_menu`) REFERENCES `menu` (`kd_menu`) ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
