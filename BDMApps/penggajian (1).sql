-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Jan 2018 pada 18.07
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` varchar(5) NOT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `PASSWORD`, `STATUS`) VALUES
('ADM01', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin'),
('ADM02', '01cfcd4f6b8770febfb40cb906715822', 'Kepala Cabang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `direksi`
--

CREATE TABLE `direksi` (
  `NID` varchar(5) NOT NULL,
  `TANGGAL_MASUK_DIREKSI` datetime DEFAULT NULL,
  `NAMA_DIREKSI` varchar(50) DEFAULT NULL,
  `JABATAN_DIREKSI` varchar(20) DEFAULT NULL,
  `TANGGAL_LAHIR_DIREKSI` datetime DEFAULT NULL,
  `ALAMAT_DIREKSI` varchar(50) DEFAULT NULL,
  `NO_HP_DIREKSI` char(13) DEFAULT NULL,
  `EMAIL_DIREKSI` varchar(30) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `GAJI_DIREKSI` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `NIK` varchar(5) NOT NULL,
  `TANGGAL_MASUK_KARYAWAN` date DEFAULT NULL,
  `NAMA_KARYAWAN` varchar(50) DEFAULT NULL,
  `JABATAN_KARYAWAN` varchar(20) DEFAULT NULL,
  `TANGGAL_LAHIR_KARYAWAN` date DEFAULT NULL,
  `ALAMAT_KARYAWAN` varchar(50) DEFAULT NULL,
  `NO_HP_KARYAWAN` char(13) DEFAULT NULL,
  `EMAIL_KARYAWAN` varchar(30) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `STATUS_PEKERJA` varchar(30) DEFAULT NULL,
  `GAJI_POKOK` varchar(50) DEFAULT NULL,
  `TUNJANGAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`NIK`, `TANGGAL_MASUK_KARYAWAN`, `NAMA_KARYAWAN`, `JABATAN_KARYAWAN`, `TANGGAL_LAHIR_KARYAWAN`, `ALAMAT_KARYAWAN`, `NO_HP_KARYAWAN`, `EMAIL_KARYAWAN`, `JENIS_KELAMIN`, `STATUS_PEKERJA`, `GAJI_POKOK`, `TUNJANGAN`) VALUES
('K0002', '2017-05-25', 'alwi', 'office boy', '1997-01-01', 'jl. semolo indah', '0987657', 'alwi@g.co', 'Laki-laki', 'tetap', '2500000', '300000'),
('K0003', NULL, 'evita', 'front office', '2017-12-01', 'jl. semolo', '897650', 'ev@g.v', 'Perempuan', 'honorer', '1500000', '100000'),
('K0004', '2017-12-26', 'gaga', 'back office', '2017-12-04', 'jl. semolo indah', '1616', 'g@g.g', 'Laki-laki', 'honorer', '1000000', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekapan_gaji_direksi`
--

CREATE TABLE `rekapan_gaji_direksi` (
  `ID_GAJI_DIREKSI` varchar(10) NOT NULL,
  `NID` varchar(5) DEFAULT NULL,
  `ID_ADMIN` varchar(5) DEFAULT NULL,
  `NAMA_DIREKSI` varchar(50) DEFAULT NULL,
  `JABATAN_DIREKSI` varchar(20) DEFAULT NULL,
  `HONORARIUM_DIREKSI` float DEFAULT NULL,
  `JAMSOSTEK` int(11) DEFAULT NULL,
  `JUMLAH_DITERIMA` int(11) DEFAULT NULL,
  `TANGGAL_GAJI_DIREKSI` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekapan_gaji_karyawan`
--

CREATE TABLE `rekapan_gaji_karyawan` (
  `ID_GAJI` varchar(10) NOT NULL,
  `ID_ADMIN` varchar(5) DEFAULT NULL,
  `NIK` varchar(5) DEFAULT NULL,
  `NAMA_KARYAWAN` varchar(50) DEFAULT NULL,
  `JABATAN_KARYAWAN` varchar(20) DEFAULT NULL,
  `GAJI_POKOK_KARYAWAN` int(11) DEFAULT NULL,
  `T_JABATAN_KARYAWAN` int(11) DEFAULT NULL,
  `UANG_MAKAN_KARYAWAN` int(11) DEFAULT NULL,
  `INSENTIF_KARYAWAN` int(11) DEFAULT NULL,
  `T_PERTAMINA` int(11) DEFAULT NULL,
  `T_KHUSUS` int(11) DEFAULT NULL,
  `JUMLAH` int(11) DEFAULT NULL,
  `JAMSOSTEK` int(11) DEFAULT NULL,
  `JUMLAH_DITERIMA` int(11) DEFAULT NULL,
  `TANGGAL_GAJI_KARYAWAN` datetime DEFAULT NULL,
  `KEHADIRAN` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekapan_gaji_karyawan`
--

INSERT INTO `rekapan_gaji_karyawan` (`ID_GAJI`, `ID_ADMIN`, `NIK`, `NAMA_KARYAWAN`, `JABATAN_KARYAWAN`, `GAJI_POKOK_KARYAWAN`, `T_JABATAN_KARYAWAN`, `UANG_MAKAN_KARYAWAN`, `INSENTIF_KARYAWAN`, `T_PERTAMINA`, `T_KHUSUS`, `JUMLAH`, `JAMSOSTEK`, `JUMLAH_DITERIMA`, `TANGGAL_GAJI_KARYAWAN`, `KEHADIRAN`) VALUES
('RG0005', NULL, 'K0002', 'alwi', NULL, 2500000, 200000, 75000, 216400, 35714, 525000, 3277114, 655423, 2621691, '0000-00-00 00:00:00', '30'),
('RG0006', NULL, 'K0004', 'gaga', 'back office', 1000000, 250000, 700000, 38000, 35714, 1200000, 2273714, 454743, 1818971, '2018-01-05 00:00:00', '28'),
('RG0007', NULL, 'K0003', 'evita', 'front office', 1000000, 200000, 75000, 38000, 78571, 525000, 1641571, 328314, 1313257, '2018-01-10 00:00:00', '30'),
('RG0008', 'ADM01', 'K0003', 'evita', 'front office', 1000000, 100000, 750000, 207500, 37143, 1100000, 2344642, 468928, 1875714, '2018-01-13 00:00:00', '30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slip_gaji_direksi`
--

CREATE TABLE `slip_gaji_direksi` (
  `ID_SLIP_GAJI_DIREKSI` varchar(10) NOT NULL,
  `ID_ADMIN` varchar(5) DEFAULT NULL,
  `NID` varchar(5) DEFAULT NULL,
  `TGL_SLIP_GAJI_DIREKSI` datetime DEFAULT NULL,
  `NAMA_DIREKSI` varchar(50) DEFAULT NULL,
  `JABATAN_DIREKSI` varchar(20) DEFAULT NULL,
  `GAJI_POKOK_DIREKSI` float DEFAULT NULL,
  `T_JABATAN_DIREKSI` float DEFAULT NULL,
  `U_MAKAN_DIREKSI` float DEFAULT NULL,
  `INSENTIF` float DEFAULT NULL,
  `T_PERTAMINA` int(11) DEFAULT NULL,
  `JUMLAH_GAJI_DIREKSI` float DEFAULT NULL,
  `KOP_BERBUNGA` int(11) DEFAULT NULL,
  `SUKA_DUKA` int(11) DEFAULT NULL,
  `T_PERDANA` int(11) DEFAULT NULL,
  `JAMSOSTEK` int(11) DEFAULT NULL,
  `ARISAN` int(11) DEFAULT NULL,
  `LPG_OLI` int(11) DEFAULT NULL,
  `NGUKUS` float DEFAULT NULL,
  `KAS_BON` int(11) DEFAULT NULL,
  `JML_POTONGAN` int(11) DEFAULT NULL,
  `JML_GAJI_DITERIMA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slip_gaji_karyawan`
--

CREATE TABLE `slip_gaji_karyawan` (
  `ID_SLIP_GAJI_KARYAWAN` varchar(10) NOT NULL,
  `NIK` varchar(5) DEFAULT NULL,
  `ID_ADMIN` varchar(5) DEFAULT NULL,
  `TGL_SLIP_GAJI_KARYAWAN` datetime DEFAULT NULL,
  `NAMA_KARYAWAN` varchar(50) DEFAULT NULL,
  `JABATAN_KARYAWAN` varchar(20) DEFAULT NULL,
  `GAJI_POKOK_KARYAWAN` int(11) DEFAULT NULL,
  `T_JABATAN_KARYAWAN` int(11) DEFAULT NULL,
  `U_MAKAN_KARYAWAN` int(11) DEFAULT NULL,
  `INSENTIF_KARYAWAN` int(11) DEFAULT NULL,
  `T_PERTAMINA` int(11) DEFAULT NULL,
  `JUMLAH_GAJI_KARYAWAN` int(11) DEFAULT NULL,
  `KOP_BERBUNGA` int(11) DEFAULT NULL,
  `SUKA_DUKA` int(11) DEFAULT NULL,
  `T_PERDANA` int(11) DEFAULT NULL,
  `JAMSOSTEK` int(11) DEFAULT NULL,
  `ARISAN` int(11) DEFAULT NULL,
  `LPG_OLI` int(11) DEFAULT NULL,
  `KAS_BON` int(11) DEFAULT NULL,
  `JML_POTONGAN` int(11) DEFAULT NULL,
  `JML_GAJI_DITERIMA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slip_gaji_karyawan`
--

INSERT INTO `slip_gaji_karyawan` (`ID_SLIP_GAJI_KARYAWAN`, `NIK`, `ID_ADMIN`, `TGL_SLIP_GAJI_KARYAWAN`, `NAMA_KARYAWAN`, `JABATAN_KARYAWAN`, `GAJI_POKOK_KARYAWAN`, `T_JABATAN_KARYAWAN`, `U_MAKAN_KARYAWAN`, `INSENTIF_KARYAWAN`, `T_PERTAMINA`, `JUMLAH_GAJI_KARYAWAN`, `KOP_BERBUNGA`, `SUKA_DUKA`, `T_PERDANA`, `JAMSOSTEK`, `ARISAN`, `LPG_OLI`, `KAS_BON`, `JML_POTONGAN`, `JML_GAJI_DITERIMA`) VALUES
('SG0001', 'K0004', NULL, '2018-01-13 00:00:00', 'gaga', 'back office', 1000000, 250000, 700000, 38000, 35714, 1818971, 10000, 500000, 20000, 454743, 50000, 100000, 70000, 760000, 1058971),
('SG0002', 'K0004', 'ADM01', '2018-01-13 00:00:00', 'gaga', 'back office', 1000000, 250000, 700000, 38000, 35714, 1818971, 10000, 500000, 20000, 454743, 50000, 100000, 10000, 700000, 1118971);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `direksi`
--
ALTER TABLE `direksi`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `rekapan_gaji_direksi`
--
ALTER TABLE `rekapan_gaji_direksi`
  ADD PRIMARY KEY (`ID_GAJI_DIREKSI`),
  ADD KEY `FK_MEMBUAT_REKAP_DIREKSI` (`ID_ADMIN`),
  ADD KEY `FK_MEMPUNYAI_REKAP_GAJI_DIREKSI` (`NID`);

--
-- Indexes for table `rekapan_gaji_karyawan`
--
ALTER TABLE `rekapan_gaji_karyawan`
  ADD PRIMARY KEY (`ID_GAJI`),
  ADD KEY `FK_MEMBUAT_REKAP_KARYAWAN` (`ID_ADMIN`),
  ADD KEY `FK_MEMPUNYAI_REKAP_GAJI_KARYAWAN` (`NIK`);

--
-- Indexes for table `slip_gaji_direksi`
--
ALTER TABLE `slip_gaji_direksi`
  ADD PRIMARY KEY (`ID_SLIP_GAJI_DIREKSI`),
  ADD KEY `FK_MEMBUAT_SLIP_DIREKSI` (`ID_ADMIN`),
  ADD KEY `FK_MEMILIKI_SLIP_GAJI_DIREKSI` (`NID`);

--
-- Indexes for table `slip_gaji_karyawan`
--
ALTER TABLE `slip_gaji_karyawan`
  ADD PRIMARY KEY (`ID_SLIP_GAJI_KARYAWAN`),
  ADD KEY `FK_MEMBUAT_SLIP_KARYAWAN` (`ID_ADMIN`),
  ADD KEY `FK_MEMPUNYAI_SLIP_GAJI_KARYAWAN` (`NIK`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rekapan_gaji_direksi`
--
ALTER TABLE `rekapan_gaji_direksi`
  ADD CONSTRAINT `FK_MEMBUAT_REKAP_DIREKSI` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`),
  ADD CONSTRAINT `FK_MEMPUNYAI_REKAP_GAJI_DIREKSI` FOREIGN KEY (`NID`) REFERENCES `direksi` (`NID`);

--
-- Ketidakleluasaan untuk tabel `rekapan_gaji_karyawan`
--
ALTER TABLE `rekapan_gaji_karyawan`
  ADD CONSTRAINT `FK_MEMBUAT_REKAP_KARYAWAN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`),
  ADD CONSTRAINT `FK_MEMPUNYAI_REKAP_GAJI_KARYAWAN` FOREIGN KEY (`NIK`) REFERENCES `karyawan` (`NIK`);

--
-- Ketidakleluasaan untuk tabel `slip_gaji_direksi`
--
ALTER TABLE `slip_gaji_direksi`
  ADD CONSTRAINT `FK_MEMBUAT_SLIP_DIREKSI` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`),
  ADD CONSTRAINT `FK_MEMILIKI_SLIP_GAJI_DIREKSI` FOREIGN KEY (`NID`) REFERENCES `direksi` (`NID`);

--
-- Ketidakleluasaan untuk tabel `slip_gaji_karyawan`
--
ALTER TABLE `slip_gaji_karyawan`
  ADD CONSTRAINT `FK_MEMBUAT_SLIP_KARYAWAN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`),
  ADD CONSTRAINT `FK_MEMPUNYAI_SLIP_GAJI_KARYAWAN` FOREIGN KEY (`NIK`) REFERENCES `karyawan` (`NIK`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
