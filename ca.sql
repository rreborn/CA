-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2015 at 03:58 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ca`
--

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id_request` int(11) NOT NULL,
  `Nama_Server` varchar(30) DEFAULT NULL,
  `Organisasi` varchar(50) DEFAULT NULL,
  `Departemen` varchar(20) DEFAULT NULL,
  `Kota` varchar(30) DEFAULT NULL,
  `Provinsi` varchar(50) DEFAULT NULL,
  `Negara` varchar(30) DEFAULT NULL,
  `Key_Size` char(1) DEFAULT NULL,
  `Persetujuan` int(11) NOT NULL,
  `id` varchar(8) NOT NULL,
  PRIMARY KEY (`id_request`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id_request`, `Nama_Server`, `Organisasi`, `Departemen`, `Kota`, `Provinsi`, `Negara`, `Key_Size`, `Persetujuan`, `id`) VALUES
(1, 'Sesuatu.com', 'Something', 'Pemasaran', 'Sby', 'Jawa Timur', 'Indonesia', '1', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(8) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `Kewenangan` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `Kewenangan`) VALUES
('A1', 'Anno', 'admin', 'admin', '2'),
('U1', 'Wik', 'Coba', 'coba', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
