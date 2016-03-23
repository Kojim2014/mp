-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2016 at 07:36 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id_forum` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `content` text,
  `creator` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `tags` text,
  PRIMARY KEY (`id_forum`),
  KEY `creator` (`creator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

CREATE TABLE IF NOT EXISTS `forum_comments` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `id_forum` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `comment` text,
  `status` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `id_user` (`id_user`),
  KEY `id_forum` (`id_forum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) DEFAULT NULL,
  `nama_kelas` varchar(45) DEFAULT NULL,
  `deskripsi` text,
  PRIMARY KEY (`id_kelas`),
  KEY `id_lembaga` (`id_lembaga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lembaga`
--

CREATE TABLE IF NOT EXISTS `lembaga` (
  `id_lembaga` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lembaga` varchar(255) DEFAULT NULL,
  `logo_lembaga` varchar(255) DEFAULT NULL,
  `alamat_lembaga` text,
  `deskripsi` text NOT NULL,
  `pimpinan` int(80) DEFAULT NULL,
  `cp` varchar(15) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_lembaga`),
  KEY `pimpinan` (`pimpinan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `content` text,
  `creator` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_materi`),
  KEY `updated` (`updated`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `participants_kelas`
--

CREATE TABLE IF NOT EXISTS `participants_kelas` (
  `idparticipants_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT NULL,
  PRIMARY KEY (`idparticipants_kelas`),
  KEY `id_kelas` (`id_kelas`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_materi`
--

CREATE TABLE IF NOT EXISTS `transaksi_materi` (
  `idtransaksi_materi` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) DEFAULT NULL,
  `id_materi` int(11) DEFAULT NULL,
  `jangka_waktu` varchar(45) DEFAULT NULL,
  `all_time` enum('0','1') DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`idtransaksi_materi`),
  KEY `id_materi` (`id_materi`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `id_lembaga` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jkl` enum('laki-laki','perempuan') NOT NULL,
  `foto` varchar(255) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `level` enum('1','2','3','4') DEFAULT NULL,
  `cp` varchar(15) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id_users`),
  KEY `id_lembaga` (`id_lembaga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD CONSTRAINT `forum_comments_ibfk_1` FOREIGN KEY (`id_forum`) REFERENCES `forum` (`id_forum`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `forum_comments_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `lembaga`
--
ALTER TABLE `lembaga`
  ADD CONSTRAINT `lembaga_ibfk_1` FOREIGN KEY (`pimpinan`) REFERENCES `users` (`id_users`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `participants_kelas`
--
ALTER TABLE `participants_kelas`
  ADD CONSTRAINT `participants_kelas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `transaksi_materi`
--
ALTER TABLE `transaksi_materi`
  ADD CONSTRAINT `transaksi_materi_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `transaksi_materi_ibfk_2` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
