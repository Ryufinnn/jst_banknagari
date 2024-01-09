-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2015 at 03:07 PM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_banknagari`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `limit_absen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`limit_absen`) VALUES
('10');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `kode_jurusan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(40) NOT NULL,
  PRIMARY KEY (`kode_jurusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode_jurusan`, `nama_jurusan`) VALUES
(1, 'SK Pegawai'),
(2, 'Sertifikat / BPKB');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pendapatan` varchar(50) NOT NULL,
  `kode_jurusan` varchar(10) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `pinjaman` varchar(25) NOT NULL,
  `hasil` varchar(25) NOT NULL,
  `photo` varchar(80) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `umur`, `alamat`, `pendapatan`, `kode_jurusan`, `pekerjaan`, `pinjaman`, `hasil`, `photo`) VALUES
('Afrimon', 'Laki-laki', '0878907788', 'Sicincin', '2 s/d 5 Juta', 'Sertifikat', 'PNS', '300', 'Tidak Diterima', 'Afrimon.jpg'),
('Amin Iskandar', 'Laki-laki', '0831702170', 'Sicincin', '6 s/d 10 Juta', 'Sertifikat', 'Swasta', '350', 'Tidak Diterima', 'Amin Iskandar.jpg'),
('Edi Wahyudi', 'Laki-laki', '0819934488', 'Jl.Duku no 90', '6 s/d 10 Juta', 'Sertifikat', 'PNS', '300', 'Tidak Diterima', 'Edi Wahyudi.jpg'),
('Pilar Utama CV', 'Laki-laki', '0821702233', 'Padang', '2 s/d 5 Juta', 'Sertifikat', 'PNS', '500', 'Tidak Diterima', 'Pilar Utama CV.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `login_hash` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`username`, `password`, `login_hash`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator'),
('ak', '17540aef7b8470cc3ea8b2b9046af3b6', 'akademik'),
('deni', '827ccb0eea8a706c4c34a16891f84e7b', 'akademik');
