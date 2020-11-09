-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 05:36 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `corona`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `id_akun` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_akun`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `username`, `password`, `status`) VALUES
(1, 'Andri Adminisantri', 'admin', 'admin', 1),
(2, 'Saepuloh', 'surveyor1', 'surveyor1', 2),
(4, 'Ajibanar', 'surveyor2', 'surveyor2', 2),
(5, 'Asih', 'surveyor3', 'surveyor3', 2),
(6, 'Jumansyah', 'surveyor4', 'surveyor4', 2);

-- --------------------------------------------------------

--
-- Table structure for table `covid`
--

CREATE TABLE IF NOT EXISTS `covid` (
  `id_covid` int(11) NOT NULL AUTO_INCREMENT,
  `id_kecamatan` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `status_cek` int(11) NOT NULL,
  `positif` int(11) NOT NULL,
  `odp` int(11) NOT NULL,
  `pdp` int(11) NOT NULL,
  `sembuh` int(11) NOT NULL,
  `meninggal` int(11) NOT NULL,
  `id_akun` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_covid`),
  KEY `fk_kec` (`id_kecamatan`),
  KEY `surveyor` (`id_akun`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`id_covid`, `id_kecamatan`, `tanggal`, `status_cek`, `positif`, `odp`, `pdp`, `sembuh`, `meninggal`, `id_akun`) VALUES
(1, 1, '01-06-2020', 2, 40, 20, 11, 14, 1, 2),
(2, 1, '02-06-2020', 2, 20, 11, 14, 10, 2, 2),
(3, 2, '01-06-2020', 2, 10, 7, 3, 0, 0, 2),
(4, 2, '02-06-2020', 2, 15, 7, 4, 1, 1, 2),
(5, 3, '01-06-2020', 2, 5, 2, 4, 0, 0, 2),
(6, 3, '02-06-2020', 2, 4, 3, 2, 2, 2, 2),
(7, 4, '01-06-2020', 2, 3, 9, 6, 0, 0, 2),
(8, 4, '02-06-2020', 2, 10, 4, 8, 3, 1, 2),
(9, 5, '01-06-2020', 2, 10, 7, 8, 0, 0, 2),
(10, 5, '02-06-2020', 2, 8, 11, 5, 3, 4, 2),
(11, 6, '01-06-2020', 2, 11, 4, 4, 0, 0, 2),
(12, 6, '02-06-2020', 2, 12, 10, 8, 7, 2, 2),
(15, 2, '03-06-2020', 2, 2, 2, 2, 2, 2, 2),
(16, 6, '03-06-2020', 2, 3, 5, 2, 1, 1, 2),
(18, 1, '03-06-2020', 2, 3, 3, 3, 3, 3, 2),
(19, 2, '04-07-2020', 2, 3, 1, 2, 11, 0, 2),
(20, 2, '06-07-2020', 2, 3, 7, 1, 12, 6, 2),
(21, 2, '07-07-2020', 2, 9, 7, 5, 3, 2, 4),
(22, 6, '09-07-2020', 1, 10, 9, 9, 20, 3, 6),
(23, 2, '09-07-2020', 1, 9, 8, 2, 30, 5, NULL),
(24, 2, '10-07-2020', 1, 6, 3, 4, 2, 1, NULL),
(25, 2, '07-07-2020', 1, 3, 2, 1, 1, 1, NULL),
(26, 6, '29-07-2020', 1, 20, 1, 1, 1, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `username`, `password`) VALUES
(1, 'Kragilan', 'kragilan123', 'kragilan123'),
(2, 'solokan jeruk', 'soljer', 'soljer123'),
(3, 'Andir', 'andir123', 'andir123'),
(4, 'cibiru', 'cibiru123', 'cibiru123'),
(5, 'coblong', 'coblong123', 'coblong123'),
(6, 'Gede Bage', 'gedebage123', 'gedebage123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `covid`
--
ALTER TABLE `covid`
  ADD CONSTRAINT `fk_kecamatan` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_surveyor` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
