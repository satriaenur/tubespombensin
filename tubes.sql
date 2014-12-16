-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 13. Desember 2014 jam 01:48
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pombensin`
--

CREATE TABLE IF NOT EXISTS `pombensin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `pombensin`
--

INSERT INTO `pombensin` (`id`, `nama`, `alamat`, `latitude`, `longitude`, `foto`) VALUES
(1, 'Pom Dekat Kampus', 'Jl. Telekomunikasi No.2', '-6.9749149', '107.631823', 'pom-bensin1.jpg'),
(2, 'pom lumayan dekat', 'Jl. Telekomunikasi No 6 Bandung', '-6.9849256', '107.6268057', 'pom-bensin2.jpg'),
(3, 'Pom Bensing Padamara', 'Jl. Telekomunikasi No 10 Bandung', '-6.9752771', '107.6186129', 'pom-bensin3.jpg'),
(4, 'Pom Bensin Bojong', 'Jl. Bojong Soang Raya No.4', '-6.9733204', '107.6365469', 'pom-bensin4.jpg'),
(5, 'Pom Bensin Sukapura', 'Jl. Sukapura No.3', '-6.9678405', '107.6346673', 'pom-bensin5.jpg'),
(6, 'Pom Bensin Sukabirus', 'Jl.Suka Birus No.1', '-6.9819632', '107.6289721', 'pom-bensin6.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
