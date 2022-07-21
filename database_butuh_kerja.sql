-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 05:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `butuh_kerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pelamar`
--

CREATE TABLE `daftar_pelamar` (
  `id_daftar_pelamar` int(20) NOT NULL,
  `id_loker` int(20) NOT NULL,
  `id_pelamar` int(20) NOT NULL,
  `id_perusahaan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_pelamar`
--

INSERT INTO `daftar_pelamar` (`id_daftar_pelamar`, `id_loker`, `id_pelamar`, `id_perusahaan`) VALUES
(2, 1, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id_loker` int(20) NOT NULL,
  `id_perusahaan` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `posisi_pekerjaan` varchar(100) NOT NULL,
  `jenis_pekerjaan` varchar(100) NOT NULL,
  `pengalaman_kerja` varchar(100) NOT NULL,
  `spesialisasi` varchar(100) NOT NULL,
  `alamat_penempatan` varchar(100) NOT NULL,
  `estimasi_gaji` varchar(100) NOT NULL,
  `buka_dari` datetime NOT NULL,
  `tanggal_tutup` datetime NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id_loker`, `id_perusahaan`, `email`, `no_hp`, `posisi_pekerjaan`, `jenis_pekerjaan`, `pengalaman_kerja`, `spesialisasi`, `alamat_penempatan`, `estimasi_gaji`, `buka_dari`, `tanggal_tutup`, `foto`) VALUES
(1, 1, 'gugel@email.com', '0811111111111', 'bos', 'ngatur', '10000 tahun', 'duduk', 'rumbai', '10000 juta', '2022-07-17 22:23:23', '2022-07-28 03:23:24', 'sepatu1.jpg'),
(2, 1, 'gugel@email.com', '082222222222', 'Budak', 'kuli', 'tidak ada', 'stamina', 'rumbai pcr', '10000', '2022-07-18 15:01:25', '2022-07-21 20:01:25', 'default.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id_pelamar` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki - laki','Perempuan','','') NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `keahlian` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'default_foto.jpg',
  `cv` varchar(100) NOT NULL DEFAULT 'default_cv',
  `sertifikat` varchar(100) NOT NULL DEFAULT 'default_sertifikat.pdf',
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id_pelamar`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `pendidikan_terakhir`, `keahlian`, `email`, `no_hp`, `alamat`, `foto`, `cv`, `sertifikat`, `password`) VALUES
(8, 'kaskkksk', '2022-07-05', '', '', 'kentu', 'ghozy@email.com', '33243232', 'adasds', '20220324_1031053.jpg', '20220324_1031054.jpg', '20220324_1031055.jpg', '$2y$10$UKri74I/nz7V8IXbvE6dVulz8/Zjh1d6l.LJSli/0ke6cLxsizuEG');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama`, `deskripsi`, `email`, `no_hp`, `alamat`, `foto`, `password`) VALUES
(1, 'gugel', 'AI', 'gugel@email.com', '08222222222', '', 'sepatu1', 'admin'),
(3, 'asdasd', '', 'b@email.com', '', '', '', '$2y$10$RN16./nfVaYwZFDI0ykwC.srwWNtDCihIZAFXLFlkneXIdcQ7.hRe'),
(4, 'csdcscsc', '', 'c@email.com', '', '', '', '$2y$10$14MxDIW.bOofWHosE7BHge5aRaJ8P1VmA0u0GI5d1zynPP0lGmZH2');

-- --------------------------------------------------------

--
-- Table structure for table `simpan_loker`
--

CREATE TABLE `simpan_loker` (
  `id_simpan_loker` int(10) NOT NULL,
  `id_loker` int(20) NOT NULL,
  `id_pelamar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `simpan_loker`
--

INSERT INTO `simpan_loker` (`id_simpan_loker`, `id_loker`, `id_pelamar`) VALUES
(13, 1, 8),
(15, 1, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_pelamar`
--
ALTER TABLE `daftar_pelamar`
  ADD PRIMARY KEY (`id_daftar_pelamar`),
  ADD KEY `id_loker` (`id_loker`),
  ADD KEY `id_pelamar` (`id_pelamar`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_loker`),
  ADD KEY `idx_perusahaan` (`id_perusahaan`),
  ADD KEY `idx_email_perusahaan` (`email`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `simpan_loker`
--
ALTER TABLE `simpan_loker`
  ADD PRIMARY KEY (`id_simpan_loker`),
  ADD KEY `id_pelamar` (`id_pelamar`),
  ADD KEY `id_loker` (`id_loker`),
  ADD KEY `id_loker_2` (`id_loker`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pelamar`
--
ALTER TABLE `daftar_pelamar`
  MODIFY `id_daftar_pelamar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id_loker` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id_pelamar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `simpan_loker`
--
ALTER TABLE `simpan_loker`
  MODIFY `id_simpan_loker` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_pelamar`
--
ALTER TABLE `daftar_pelamar`
  ADD CONSTRAINT `id_loker1` FOREIGN KEY (`id_loker`) REFERENCES `loker` (`id_loker`),
  ADD CONSTRAINT `id_pelamar1` FOREIGN KEY (`id_pelamar`) REFERENCES `pelamar` (`id_pelamar`),
  ADD CONSTRAINT `id_perusahaan1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`);

--
-- Constraints for table `loker`
--
ALTER TABLE `loker`
  ADD CONSTRAINT `loker_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`),
  ADD CONSTRAINT `loker_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`);

--
-- Constraints for table `simpan_loker`
--
ALTER TABLE `simpan_loker`
  ADD CONSTRAINT `id_pelamar2` FOREIGN KEY (`id_pelamar`) REFERENCES `pelamar` (`id_pelamar`),
  ADD CONSTRAINT `idloker` FOREIGN KEY (`id_loker`) REFERENCES `loker` (`id_loker`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
