-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2015 at 05:49 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
-- Table structure for table `anggotacertified`
--

CREATE TABLE IF NOT EXISTS `anggotacertified` (
`id` int(11) NOT NULL,
  `usn` varchar(50) NOT NULL,
  `pass` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `private_key` text,
  `public_key` text,
  `email` varchar(100) DEFAULT NULL,
  `PIN` text,
  `Key size` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggotacertified`
--

INSERT INTO `anggotacertified` (`id`, `usn`, `pass`, `name`, `alamat`, `pekerjaan`, `private_key`, `public_key`, `email`, `PIN`, `Key size`) VALUES
(1, 'bili', 'bili', 'Brilian T. Nugraha', 'jl. karya maju', 'mahasiswa', NULL, NULL, NULL, NULL, NULL),
(2, 'ryan', 'ryan', 'ryan', 'ryan', 'ryan', NULL, NULL, NULL, NULL, NULL),
(3, 'wik', 'wik', 'wik', 'wi', 'wik', NULL, NULL, NULL, NULL, NULL),
(4, 'anno', 'anno', 'anno', 'anno', 'anno', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `private_ca_data`
--

CREATE TABLE IF NOT EXISTS `private_ca_data` (
  `key` text NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotacertified`
--
ALTER TABLE `anggotacertified`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggotacertified`
--
ALTER TABLE `anggotacertified`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
