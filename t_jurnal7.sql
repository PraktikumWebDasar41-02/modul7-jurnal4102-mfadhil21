-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.12
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_jurnal7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jurnal7`
--

CREATE TABLE `t_jurnal7` (
  `nama` varchar(30) NOT NULL,
  `nim` int(5) NOT NULL,
  `tgl_lahir` datetime NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `program_studi` varchar(20) NOT NULL,
  `fakultas` varchar(10) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `moto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jurnal7`
--

INSERT INTO `t_jurnal7` (`nama`, `nim`, `tgl_lahir`, `jenis_kelamin`, `program_studi`, `fakultas`, `asal`, `moto`) VALUES
('fadhil', 123, '2018-10-19 00:00:00', 'laki-laki', 'MI', 'FIT', 'asdad', 'dasda'),
('ysuuf', 323, '2018-09-19 00:00:00', 'perempuan', 'IF', 'FIT', 'sdadsa', 'sdadssa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
