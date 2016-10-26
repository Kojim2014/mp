-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2016 at 08:22 AM
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
  `created` timestamp NULL DEFAULT NULL,
  `tags` text,
  PRIMARY KEY (`id_forum`),
  KEY `creator` (`creator`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id_forum`, `title`, `content`, `creator`, `created`, `tags`) VALUES
(1, 'tes', '<p>tes&nbsp;&nbsp;&nbsp;&nbsp;</p>', 8, '2016-10-25 01:30:19', 'WY');

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
-- Table structure for table `gabung`
--

CREATE TABLE IF NOT EXISTS `gabung` (
  `id_gabung` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  PRIMARY KEY (`id_gabung`),
  KEY `id_user` (`id_user`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `gabung`
--

INSERT INTO `gabung` (`id_gabung`, `id_user`, `id_kelas`) VALUES
(16, 8, 13);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(45) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `foto`, `deskripsi`, `create_date`) VALUES
(13, 'kelas koding', 'Capture.JPG', 'belajar code', '2016-08-24 14:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `content` text,
  `ukuranfile` text NOT NULL,
  `creator` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_materi`),
  KEY `updated` (`updated`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `id_kelas`, `title`, `content`, `ukuranfile`, `creator`, `created`, `updated`) VALUES
(11, 13, 'tes', 'cloud-computing-nodejs-121226072217-phpapp02.pdf', '1516.78', 'dim', '2015-12-31 00:00:00', '2016-10-24 00:00:00'),
(12, 13, 'node', 'Belajar_Membuat_API_Menggunakan_Node_js__.pdf', '3267.83', 'creator', '2016-12-31 00:00:00', '2016-12-31 00:00:00'),
(13, 13, 'test', 'Authenticate_a_Node1.pdf', '2123.04', 'tes', '2016-12-31 00:00:00', '2016-12-31 00:00:00');

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
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jkl` enum('laki-laki','perempuan') NOT NULL,
  `foto` varchar(255) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `level` enum('admin','guru','siswa') DEFAULT NULL,
  `cp` varchar(15) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama_lengkap`, `jkl`, `foto`, `username`, `password`, `email`, `level`, `cp`, `status`, `create_date`) VALUES
(8, 'dimas ferianto', 'laki-laki', 'guru.png', 'admin', 'admin', 'dimas@mail.com', '', '08328979723', '1', '2016-08-24 13:59:46'),
(9, 'puguh rismadi', 'laki-laki', 'guru.png', 'puguhrismadi', '123123', 'puguhrismadi@gmail.com', '', '0868685797', '1', '2016-08-25 07:24:22');

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
-- Constraints for table `gabung`
--
ALTER TABLE `gabung`
  ADD CONSTRAINT `gabung_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gabung_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `transaksi_materi`
--
ALTER TABLE `transaksi_materi`
  ADD CONSTRAINT `transaksi_materi_ibfk_2` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `transaksi_materi_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
