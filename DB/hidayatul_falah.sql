-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 09:10 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hidayatul_falah`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_induk`
--

CREATE TABLE `data_induk` (
  `kd_induk` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `j_kelamin` varchar(15) NOT NULL,
  `kd_agama` int(15) NOT NULL,
  `kd_pendidikan` int(15) NOT NULL,
  `kd_pekerjaan` int(15) NOT NULL,
  `status_kawin` varchar(20) NOT NULL,
  `status_mukim` varchar(20) NOT NULL,
  `keterangan_mukim` varchar(30) NOT NULL,
  `kd_level_ekonomi` int(15) NOT NULL,
  `is_latin` varchar(10) NOT NULL,
  `is_hijaiyah` varchar(10) NOT NULL,
  `is_iqra` varchar(10) NOT NULL,
  `is_quran` varchar(10) NOT NULL,
  `is_5waktu` varchar(10) NOT NULL,
  `is_jamaah` varchar(10) NOT NULL,
  `is_zakat_fitrah` varchar(10) NOT NULL,
  `is_zakat_mal` varchar(10) NOT NULL,
  `kd_rt` int(5) NOT NULL,
  `no_ktp` int(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_keahlian_warga`
--

CREATE TABLE `data_keahlian_warga` (
  `kd_induk` int(15) NOT NULL,
  `kd_keahlian` int(15) NOT NULL,
  `is_sertifikat` varchar(30) NOT NULL,
  `deskripsi_sertifikat` varchar(50) NOT NULL,
  `level_sertifikat` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_kk`
--

CREATE TABLE `data_kk` (
  `no_kk` int(15) NOT NULL,
  `kd_rt` int(5) NOT NULL,
  `kd_induk` int(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_kk_anggota`
--

CREATE TABLE `data_kk_anggota` (
  `no_kk` int(15) NOT NULL,
  `kd_induk` int(15) NOT NULL,
  `kd_rumah` int(15) NOT NULL,
  `status_hubungan` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kd_level_ekonomi` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `md_agama`
--

CREATE TABLE `md_agama` (
  `kd_agama` int(15) NOT NULL,
  `nama_agama` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `md_keahlian`
--

CREATE TABLE `md_keahlian` (
  `kd_keahlian` int(15) NOT NULL,
  `nama_keahlian` varchar(20) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `md_level_ekonomi`
--

CREATE TABLE `md_level_ekonomi` (
  `kd_level_ekonomi` int(15) NOT NULL,
  `nama_level` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `md_pekerjaan`
--

CREATE TABLE `md_pekerjaan` (
  `kd_pekerjaan` int(15) NOT NULL,
  `nama_pekerjaan` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `md_pendidikan`
--

CREATE TABLE `md_pendidikan` (
  `kd_pendidikan` int(15) NOT NULL,
  `nama_jenjang` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `md_rt`
--

CREATE TABLE `md_rt` (
  `kd_rt` int(5) NOT NULL,
  `no_rt` int(5) NOT NULL,
  `no_rw` int(5) NOT NULL,
  `nm_pejabat` varchar(20) NOT NULL,
  `nm_bu_pejabat` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `md_rumah`
--

CREATE TABLE `md_rumah` (
  `kd_rumah` int(5) NOT NULL,
  `no_rumah` int(5) NOT NULL,
  `kd_rt` int(5) NOT NULL,
  `jml_kk` int(3) NOT NULL,
  `jml_penghuni` int(3) NOT NULL,
  `kd_kepala` int(5) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `is_kontrakan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `latitude` varchar(15) NOT NULL,
  `longitude` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `md_rw`
--

CREATE TABLE `md_rw` (
  `no_rw` int(5) NOT NULL,
  `nm_pejabat` varchar(20) NOT NULL,
  `nm_bu_pejabat` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nm_dusun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_induk`
--
ALTER TABLE `data_induk`
  ADD PRIMARY KEY (`kd_induk`),
  ADD KEY `kd_agama` (`kd_agama`),
  ADD KEY `kd_pendidikan` (`kd_pendidikan`),
  ADD KEY `kd_pekerjaan` (`kd_pekerjaan`);

--
-- Indexes for table `data_keahlian_warga`
--
ALTER TABLE `data_keahlian_warga`
  ADD PRIMARY KEY (`kd_keahlian`),
  ADD KEY `kd_induk` (`kd_induk`),
  ADD KEY `kd_keahlian` (`kd_keahlian`);

--
-- Indexes for table `data_kk`
--
ALTER TABLE `data_kk`
  ADD PRIMARY KEY (`no_kk`),
  ADD KEY `kd_induk` (`kd_induk`);

--
-- Indexes for table `data_kk_anggota`
--
ALTER TABLE `data_kk_anggota`
  ADD PRIMARY KEY (`no_kk`),
  ADD KEY `kd_induk` (`kd_induk`),
  ADD KEY `kd_rumah` (`kd_rumah`),
  ADD KEY `kd_level_ekonomi` (`kd_level_ekonomi`);

--
-- Indexes for table `md_agama`
--
ALTER TABLE `md_agama`
  ADD PRIMARY KEY (`kd_agama`);

--
-- Indexes for table `md_keahlian`
--
ALTER TABLE `md_keahlian`
  ADD PRIMARY KEY (`kd_keahlian`);

--
-- Indexes for table `md_level_ekonomi`
--
ALTER TABLE `md_level_ekonomi`
  ADD PRIMARY KEY (`kd_level_ekonomi`);

--
-- Indexes for table `md_pekerjaan`
--
ALTER TABLE `md_pekerjaan`
  ADD PRIMARY KEY (`kd_pekerjaan`);

--
-- Indexes for table `md_pendidikan`
--
ALTER TABLE `md_pendidikan`
  ADD PRIMARY KEY (`kd_pendidikan`);

--
-- Indexes for table `md_rt`
--
ALTER TABLE `md_rt`
  ADD PRIMARY KEY (`kd_rt`),
  ADD KEY `no_rw` (`no_rw`);

--
-- Indexes for table `md_rumah`
--
ALTER TABLE `md_rumah`
  ADD PRIMARY KEY (`kd_rumah`),
  ADD KEY `kd_rt` (`kd_rt`);

--
-- Indexes for table `md_rw`
--
ALTER TABLE `md_rw`
  ADD PRIMARY KEY (`no_rw`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_induk`
--
ALTER TABLE `data_induk`
  ADD CONSTRAINT `data_induk_ibfk_1` FOREIGN KEY (`kd_agama`) REFERENCES `md_agama` (`kd_agama`),
  ADD CONSTRAINT `data_induk_ibfk_2` FOREIGN KEY (`kd_pendidikan`) REFERENCES `md_pendidikan` (`kd_pendidikan`),
  ADD CONSTRAINT `data_induk_ibfk_3` FOREIGN KEY (`kd_pekerjaan`) REFERENCES `md_pekerjaan` (`kd_pekerjaan`);

--
-- Constraints for table `data_keahlian_warga`
--
ALTER TABLE `data_keahlian_warga`
  ADD CONSTRAINT `data_keahlian_warga_ibfk_1` FOREIGN KEY (`kd_induk`) REFERENCES `data_induk` (`kd_induk`),
  ADD CONSTRAINT `data_keahlian_warga_ibfk_2` FOREIGN KEY (`kd_keahlian`) REFERENCES `md_keahlian` (`kd_keahlian`);

--
-- Constraints for table `data_kk`
--
ALTER TABLE `data_kk`
  ADD CONSTRAINT `data_kk_ibfk_1` FOREIGN KEY (`kd_induk`) REFERENCES `data_induk` (`kd_induk`);

--
-- Constraints for table `data_kk_anggota`
--
ALTER TABLE `data_kk_anggota`
  ADD CONSTRAINT `data_kk_anggota_ibfk_1` FOREIGN KEY (`kd_induk`) REFERENCES `data_induk` (`kd_induk`),
  ADD CONSTRAINT `data_kk_anggota_ibfk_2` FOREIGN KEY (`kd_rumah`) REFERENCES `md_rumah` (`kd_rumah`),
  ADD CONSTRAINT `data_kk_anggota_ibfk_3` FOREIGN KEY (`kd_level_ekonomi`) REFERENCES `md_level_ekonomi` (`kd_level_ekonomi`);

--
-- Constraints for table `md_rt`
--
ALTER TABLE `md_rt`
  ADD CONSTRAINT `md_rt_ibfk_1` FOREIGN KEY (`no_rw`) REFERENCES `md_rw` (`no_rw`);

--
-- Constraints for table `md_rumah`
--
ALTER TABLE `md_rumah`
  ADD CONSTRAINT `md_rumah_ibfk_1` FOREIGN KEY (`kd_rt`) REFERENCES `md_rt` (`kd_rt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
