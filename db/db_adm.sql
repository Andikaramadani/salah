-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2022 pada 00.01
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_adm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendakegiatan`
--

CREATE TABLE IF NOT EXISTS `agendakegiatan` (
  `idkegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(20) DEFAULT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `jk` varchar(50) DEFAULT NULL,
  `kegiatan` varchar(225) DEFAULT NULL,
  `durasi` varchar(50) DEFAULT NULL,
  `catatan` text,
  PRIMARY KEY (`idkegiatan`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `agendakegiatan`
--

INSERT INTO `agendakegiatan` (`idkegiatan`, `nik`, `nama`, `jk`, `kegiatan`, `durasi`, `catatan`) VALUES
(1, 2147483647, 'Abdi Permana', 'Laki-Laki', 'mencangkul ', '3 jam', 'mantap sekali'),
(5, 1234567890, 'Putri aja', 'perempuan', 'mengarsip surat', '1 jam', 'baik'),
(6, 1234567890, 'Putri aja', 'perempuan', 'mengarsip surat', '2 jam', 'capek'),
(7, 2147483647, 'aji permana', 'laki laki', 'mengetik laporan vaksin', '3 jam', 'aman boss ku'),
(8, 1234567890, 'lsdnl /', 'a', 'aa', 'a', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapegawai`
--

CREATE TABLE IF NOT EXISTS `datapegawai` (
  `idpegawai` int(11) NOT NULL AUTO_INCREMENT,
  `nip` int(20) DEFAULT NULL,
  `nik` int(20) DEFAULT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idpegawai`),
  UNIQUE KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `datapegawai`
--

INSERT INTO `datapegawai` (`idpegawai`, `nip`, `nik`, `nama`, `jk`, `alamat`, `jabatan`, `usia`, `status`) VALUES
(1, 123456789, 2147483647, 'Abdi Permana', 'Laki-Laki', 'Kisaran', 'Admin', 20, 'Belum menikah'),
(2, 2147483647, 1234567890, 'Putri ', 'perempuan', 'SUKA KARYA', 'sekretaris', 37, 'menikah'),
(3, 999, 888, 'a', 'aadd', 'aff', 'agg', 12, 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE IF NOT EXISTS `laporan` (
  `idlaporan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `nik` int(20) DEFAULT NULL,
  `laporan` text,
  PRIMARY KEY (`idlaporan`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`idlaporan`, `nama`, `nik`, `laporan`) VALUES
(5, 'Abdi Permana', 2147483647, 'baik'),
(6, 'Putri aja', 1234567890, 'baik sekali'),
(7, 'adi permana', 2147483647, 'cukup baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporanpegawai`
--

CREATE TABLE IF NOT EXISTS `laporanpegawai` (
  `id_laporanpegawai` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `nik` int(18) DEFAULT NULL,
  `kehadiran` varchar(255) DEFAULT NULL,
  `lamabekerja` varchar(255) DEFAULT NULL,
  `kedisplinan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_laporanpegawai`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `laporanpegawai`
--

INSERT INTO `laporanpegawai` (`id_laporanpegawai`, `nama`, `nik`, `kehadiran`, `lamabekerja`, `kedisplinan`) VALUES
(1, 'Abdi Permana', 2147483647, 'baik', '5 tahun', 'baik'),
(3, 'Putri aja', 2147483647, 'baik', '2 tahun', 'baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '123456', 'andikaramadani47@gmail.com', 'Andika Ramadani', 1, 'Administrator'),
('user1', '1234', 'user@gmail.com', 'putri', 2, 'user'),
('user2', '12345', 'user@gmail.com', 'Gilang SJM', 2, 'user');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `agendakegiatan`
--
ALTER TABLE `agendakegiatan`
  ADD CONSTRAINT `agendakegiatan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `datapegawai` (`nik`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `agendakegiatan` (`nik`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laporanpegawai`
--
ALTER TABLE `laporanpegawai`
  ADD CONSTRAINT `laporanpegawai_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `datapegawai` (`nik`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
