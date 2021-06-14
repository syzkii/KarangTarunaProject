-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2021 at 03:36 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karangtaruna`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `NIK` varchar(16) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `rw` varchar(5) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `img` text,
  `jabatan` int(5) NOT NULL,
  PRIMARY KEY (`NIK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`NIK`, `nama_anggota`, `tempatlahir`, `tanggallahir`, `tel`, `email`, `alamat`, `rw`, `rt`, `img`, `jabatan`) VALUES
('1212121212121212', 'Yanda', 'Gresik', '2003-10-10', '092827217182', 'yanda10@gmail.com', 'Green Hill', '04', '05', 'IMG_20200817_111946.jpg', 4),
('2020201010201021', 'Kiki', 'Gresik', '2002-10-07', '081615304956', 'rifkiardianakbar.raa@gmail.com', 'D5/07', '04', '05', 'WIN_20210210_12_59_03_Pro (2).jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
  `email` varchar(70) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`email`, `timestamp`) VALUES
('kakakak@gmail.com', '2021-04-29 05:17:55'),
('pottsed@protonmail.ch', '2020-03-17 10:26:26'),
('rifkiardianakbar.raa@gmail.com', '2021-04-18 13:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(40) NOT NULL,
  `job_desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama_jabatan`, `job_desc`) VALUES
(2, 'Anggota', 'Mengikuti keorganisasian'),
(3, 'Admin', 'Mengelola data'),
(4, 'Bendahara', ''),
(5, 'Sekretaris', ''),
(6, 'Ketua', ''),
(7, 'Wakil Ketua', '');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id_kegiatan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `status` varchar(50) NOT NULL,
  `privasi` enum('Internal','Eksternal') NOT NULL,
  `deskripsi` text NOT NULL,
  `NIK` varchar(16) NOT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `tanggal`, `mulai`, `selesai`, `status`, `privasi`, `deskripsi`, `NIK`) VALUES
(1, 'Donor darah', '2021-04-23', '20:00:00', '00:00:00', 'Reserved', 'Eksternal', '                                                                                                                                                                                                                            ', '2020201010201021');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` int(10) NOT NULL AUTO_INCREMENT,
  `keperluan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `status` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `tel` varchar(16) NOT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rt`
--

CREATE TABLE IF NOT EXISTS `rt` (
  `rt` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rt`
--

INSERT INTO `rt` (`rt`) VALUES
('01'),
('02'),
('03'),
('04'),
('05'),
('06'),
('07'),
('08'),
('09'),
('10');

-- --------------------------------------------------------

--
-- Table structure for table `rw`
--

CREATE TABLE IF NOT EXISTS `rw` (
  `rw` varchar(5) NOT NULL,
  PRIMARY KEY (`rw`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rw`
--

INSERT INTO `rw` (`rw`) VALUES
('01'),
('02'),
('03'),
('04'),
('05'),
('06'),
('07'),
('08'),
('09'),
('10');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE IF NOT EXISTS `tempat` (
  `id_tempat` int(10) NOT NULL AUTO_INCREMENT,
  `nama_tempat` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_tempat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(125) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level` varchar(15) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `last_activity`) VALUES
(14, 'Yanda', '1212121212121212', '1212121212121212', '4', '2021-05-02 14:50:08'),
(15, 'admin', 'admin', 'admin1', '3', '2021-06-10 14:28:34'),
(19, 'Kiki', '2020201010201021', '2020201010201021', '3', '2021-05-02 14:18:56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
