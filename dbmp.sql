-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Agu 2016 pada 08.15
-- Versi Server: 5.6.16
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
-- Struktur dari tabel `forum`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum_comments`
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
-- Struktur dari tabel `gabung`
--

CREATE TABLE IF NOT EXISTS `gabung` (
  `id_gabung` int(80) NOT NULL AUTO_INCREMENT,
  `id_user` int(80) NOT NULL,
  `id_kelas` int(80) NOT NULL,
  PRIMARY KEY (`id_gabung`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data untuk tabel `gabung`
--

INSERT INTO `gabung` (`id_gabung`, `id_user`, `id_kelas`) VALUES
(13, 2, 10),
(50, 1, 8),
(51, 1, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(45) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `foto`, `deskripsi`, `create_date`) VALUES
(6, 'Kelas Menggambar', 'esko.png', 'kelas menggambar teks', '0000-00-00 00:00:00'),
(7, 'kelas fotografer', 'ad.jpg', 'kita belajar foto-foto yuk', '0000-00-00 00:00:00'),
(8, 'kelas pertama', 'boler.png', 'coba ke4', '0000-00-00 00:00:00'),
(10, 'Kelas Fotografi', 'ad.jpg', 'Kelas Fotografi', '0000-00-00 00:00:00'),
(11, 'Kelas Lain', 'gambar-211.jpg', 'Keyboard', '2016-04-21 03:18:09'),
(12, 'kelasq', 'ad.jpg', 'test', '2016-05-26 03:56:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `content` text,
  `creator` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_materi`),
  KEY `updated` (`updated`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `id_kelas`, `title`, `content`, `creator`, `created`, `updated`) VALUES
(2, 6, 'title', 'content', 'dimas', '2016-08-07 00:00:00', '2016-08-07 00:00:00'),
(3, 6, 'title1', 'content2', 'dim', '2016-08-07 00:00:00', '2016-08-07 00:00:00'),
(4, 6, 'judul', 'contentnya', 'dimasdimas', '2016-08-15 00:00:00', '2016-08-18 00:00:00'),
(5, 7, 'megang SLR', 'belom', 'dimas', '2016-08-10 00:00:00', '2016-08-11 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_materi`
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
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jkl` enum('laki-laki','perempuan') NOT NULL,
  `foto` varchar(255) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `level` enum('1','2','3','4') DEFAULT NULL,
  `cp` varchar(15) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama_lengkap`, `jkl`, `foto`, `username`, `password`, `email`, `level`, `cp`, `status`, `create_date`) VALUES
(1, NULL, '', '11.jpg', 'admin', 'admin', 'dimas@mail.com', '1', NULL, NULL, '2016-07-30 04:53:02'),
(2, 'haha', '', 'guru.png', 'coba', 'coba', '', '1', NULL, NULL, '2016-08-10 07:26:59'),
(4, 'Crepes Luzi', 'laki-laki', 'guru.png', 'baberak', 'baberak', 'baberak@gmail.com', '', '081273868461', '1', '2016-08-10 07:27:03'),
(5, 'tes 1', 'laki-laki', 'guru.png', 'tes1', 'testing', 'tes1@gmail.com', '', '98796779', '1', '2016-08-10 07:27:07'),
(6, 'ahaha', 'laki-laki', 'boler.png', 'dim1', 'qwerty', 'aka@mail.com', '', '0877', '1', '2016-08-10 07:12:48'),
(7, 'satu dua', 'laki-laki', 'pr.jpg', 'tiga', '1', 'haha@nf.com', '', '089', '1', '2016-08-10 08:50:34');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD CONSTRAINT `forum_comments_ibfk_1` FOREIGN KEY (`id_forum`) REFERENCES `forum` (`id_forum`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `forum_comments_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `transaksi_materi`
--
ALTER TABLE `transaksi_materi`
  ADD CONSTRAINT `transaksi_materi_ibfk_2` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `transaksi_materi_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
