-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 04:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinaslh`
--

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `idDepartemen` int(11) NOT NULL,
  `namaDepartemen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `devisi`
--

CREATE TABLE `devisi` (
  `idDevisi` int(11) NOT NULL,
  `idDepartemen` int(11) NOT NULL,
  `namaDevisi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `idGolongan` int(11) NOT NULL,
  `namaGolongan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`idGolongan`, `namaGolongan`) VALUES
(1, 'I A'),
(2, 'I B'),
(3, 'I C'),
(4, 'I D'),
(5, 'II A'),
(6, 'II B'),
(7, 'II C'),
(8, 'II D'),
(9, 'III A'),
(10, 'III B'),
(11, 'III C'),
(12, 'III D'),
(13, 'IV A'),
(14, 'IV B'),
(15, 'IV C'),
(16, 'IV D');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `idJabatan` int(11) NOT NULL,
  `namaJabatan` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategorilaporan`
--

CREATE TABLE `kategorilaporan` (
  `idKategoriLaporan` int(11) NOT NULL,
  `namaKategori` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorilaporan`
--

INSERT INTO `kategorilaporan` (`idKategoriLaporan`, `namaKategori`) VALUES
(1, 'Kebakaran Hutan'),
(2, 'Pencemaran Lingkungan'),
(3, 'Limbah'),
(4, 'Bencana');

-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

CREATE TABLE `pangkat` (
  `idPangkat` int(11) NOT NULL,
  `namaPangkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pangkat`
--

INSERT INTO `pangkat` (`idPangkat`, `namaPangkat`) VALUES
(2, 'Juru Muda Tingkat 1'),
(3, 'Juru Muda'),
(4, 'Juru');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `idPegawai` varchar(20) NOT NULL,
  `namaPegawai` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `noIndukKepegawaian` varchar(16) NOT NULL,
  `tanggalMulaiBekerja` date NOT NULL,
  `tanggalSelesai` date DEFAULT NULL,
  `jk` int(11) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `tempatLahir` varchar(50) NOT NULL,
  `statusKepegawaian` int(11) NOT NULL,
  `idDevisi` int(11) NOT NULL,
  `idPangkat` int(11) NOT NULL,
  `idGolongan` int(11) NOT NULL,
  `idJabatan` varchar(30) NOT NULL,
  `noWa` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `roleId` int(11) NOT NULL,
  `isActive` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL,
  `helpNumber` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengadu`
--

CREATE TABLE `pengadu` (
  `idPengadu` varchar(20) NOT NULL,
  `namaPengadu` varchar(150) NOT NULL,
  `nikPengadu` varchar(16) NOT NULL,
  `noTelp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `password1` text NOT NULL,
  `roleId` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengadu`
--

INSERT INTO `pengadu` (`idPengadu`, `namaPengadu`, `nikPengadu`, `noTelp`, `alamat`, `email`, `username`, `password`, `password1`, `roleId`, `isActive`) VALUES
('63d242fae2220', 'Yanuar', '6309020704970006', '085156362132', 'Tanjung', 'yanuar@gmail.com', 'bayu12345', '$2y$10$4EzetepOGSuhXlFjmlKlyOy.XeKENeyVxie8wAoq6mCh4qnZoCZL6', 'bayu123', 3, 1),
('63d8bb067a230', 'Irama Kelana', '6309020704990003', '081251515627', 'Banjarmasin', 'iramakelana@gmail.com', 'irama001', '$2y$10$EBAJYKxHoFmh0knfmMBWVOT8PuOIX62ScIMfrPzQIxj8vxxKxJAfu', 'irama001', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `idPengaduan` varchar(20) NOT NULL,
  `namaLengkap` varchar(150) NOT NULL,
  `noTelp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `judulLaporan` varchar(150) NOT NULL,
  `isiLaporan` text NOT NULL,
  `tanggalLaporan` date NOT NULL,
  `lokasiLaporan` text NOT NULL,
  `instansiLaporan` varchar(150) NOT NULL,
  `idKategoriLaporan` int(11) NOT NULL,
  `fotoLaporan` text NOT NULL,
  `verifyLaporan` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUsers` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `roleId` int(11) NOT NULL,
  `namaLengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noWa` varchar(20) NOT NULL,
  `isActive` int(11) NOT NULL,
  `foto` text NOT NULL,
  `dateCreated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUsers`, `username`, `password`, `roleId`, `namaLengkap`, `email`, `noWa`, `isActive`, `foto`, `dateCreated`) VALUES
('5f269419c1055', 'admin', '$2y$10$DPQFNqddiac1B/P0Rw8L0ekW7DP0DGGxOLBjXxEUxmWehCesqVIfu', 1, 'Rizky Maulana', 'rizkymaulana@gmail.com', '081223231212', 1, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`idDepartemen`);

--
-- Indexes for table `devisi`
--
ALTER TABLE `devisi`
  ADD PRIMARY KEY (`idDevisi`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`idGolongan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`idJabatan`);

--
-- Indexes for table `kategorilaporan`
--
ALTER TABLE `kategorilaporan`
  ADD PRIMARY KEY (`idKategoriLaporan`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`idPangkat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idPegawai`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `pengadu`
--
ALTER TABLE `pengadu`
  ADD PRIMARY KEY (`idPengadu`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`idPengaduan`),
  ADD KEY `idKategoriLaporan` (`idKategoriLaporan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `idDepartemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `devisi`
--
ALTER TABLE `devisi`
  MODIFY `idDevisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `idGolongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `idJabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategorilaporan`
--
ALTER TABLE `kategorilaporan`
  MODIFY `idKategoriLaporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pangkat`
--
ALTER TABLE `pangkat`
  MODIFY `idPangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_2` FOREIGN KEY (`idKategoriLaporan`) REFERENCES `kategorilaporan` (`idKategoriLaporan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
