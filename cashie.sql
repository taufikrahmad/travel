-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2016 at 11:03 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cashie`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_menu`
--

CREATE TABLE IF NOT EXISTS `m_menu` (
`id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '"0"="Non Katering";"1"="Katering"'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_menu`
--

INSERT INTO `m_menu` (`id`, `nama`, `harga`, `type`) VALUES
(1, 'Tempe Orek', '4000.00', 0),
(2, 'Ayam Goreng', '8000.00', 0),
(4, 'Ayam Bakar', '10000.00', 0),
(6, 'Ikan Rebus', '10000.00', 0),
(7, 'Ikan Gurame', '10000.00', 0),
(8, 'Ikan Patin', '10000.00', 0),
(9, 'Semur Daging', '10000.00', 0),
(10, 'Lobster Goreng', '10000.00', 0),
(11, 'Cumi Bakar', '10000.00', 0),
(14, 'Sirip Hiu Bakar', '10000.00', 0),
(15, 'Tempe Bacem', '3000.00', 0),
(16, 'Air Mineral Botol', '5000.00', 0),
(17, 'PAKET 1', '20000.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_transaksi`
--

CREATE TABLE IF NOT EXISTS `t_transaksi` (
`id` int(11) NOT NULL,
  `kd_transaksi` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` double NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_transaksi`
--

INSERT INTO `t_transaksi` (`id`, `kd_transaksi`, `nama_menu`, `harga`, `jumlah`, `total`, `timestamp`) VALUES
(1, 1, 'Ayam Goreng', 8000, 1, 14000, '2016-03-09 03:04:07'),
(2, 1, 'Tempe Bacem', 6000, 2, 14000, '2016-03-09 03:04:07'),
(3, 2, 'Ayam Goreng', 24000, 3, 34000, '2016-03-09 03:04:07'),
(4, 2, 'Cumi Bakar', 10000, 1, 34000, '2016-03-09 03:04:07'),
(5, 3, 'Ayam Goreng', 8000, 1, 42000, '2016-03-09 07:41:37'),
(6, 3, 'Ikan Patin', 30000, 3, 42000, '2016-03-09 07:41:37'),
(7, 3, 'Tempe Orek', 4000, 1, 42000, '2016-03-09 07:41:37'),
(8, 4, 'Ayam Goreng', 8000, 1, 43000, '2016-03-09 07:53:33'),
(9, 4, 'Ikan Gurame', 20000, 2, 43000, '2016-03-09 07:53:33'),
(10, 4, 'Air Mineral', 15000, 3, 43000, '2016-03-09 07:53:33'),
(11, 5, 'PAKET 1', 2000000, 100, 2000000, '2016-03-09 07:57:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_menu`
--
ALTER TABLE `m_menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_menu`
--
ALTER TABLE `m_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
