-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 01:40 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siobat`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_obat`
--

CREATE TABLE IF NOT EXISTS `m_obat` (
`obat_id` int(11) NOT NULL,
  `obat_nama` varchar(128) NOT NULL,
  `indikasi` text NOT NULL,
  `kontradiksi` text NOT NULL,
  `efek_samping` text NOT NULL,
  `penggunaan` text NOT NULL,
  `perhatian` text NOT NULL,
  `dosis` text NOT NULL,
  `kemasan` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_obat`
--

INSERT INTO `m_obat` (`obat_id`, `obat_nama`, `indikasi`, `kontradiksi`, `efek_samping`, `penggunaan`, `perhatian`, `dosis`, `kemasan`) VALUES
(2, 'a', '<p>d</p>', '<p>e</p>', '<p>f</p>', '<p>h</p>', '<p>g</p>', '<p>c</p>', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `m_pengguna`
--

CREATE TABLE IF NOT EXISTS `m_pengguna` (
`id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hak_akses` varchar(1) NOT NULL,
  `gambar` varchar(64) DEFAULT 'default.png'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_pengguna`
--

INSERT INTO `m_pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`, `hak_akses`, `gambar`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_obat`
--
ALTER TABLE `m_obat`
 ADD PRIMARY KEY (`obat_id`);

--
-- Indexes for table `m_pengguna`
--
ALTER TABLE `m_pengguna`
 ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_obat`
--
ALTER TABLE `m_obat`
MODIFY `obat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_pengguna`
--
ALTER TABLE `m_pengguna`
MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
