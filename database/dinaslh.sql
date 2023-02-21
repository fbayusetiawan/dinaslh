-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 09:57 AM
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
  `alasanDitolak` text DEFAULT NULL,
  `verifyLaporan` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`idPengaduan`, `namaLengkap`, `noTelp`, `alamat`, `judulLaporan`, `isiLaporan`, `tanggalLaporan`, `lokasiLaporan`, `instansiLaporan`, `idKategoriLaporan`, `fotoLaporan`, `alasanDitolak`, `verifyLaporan`, `isActive`) VALUES
('63f0409be6985', 'Rizki', '081251898992', 'Banjarmasin', 'Sampah berserakan', 'iasjdkajnsd,jnawuhdquwndkasndkasduhauhdqjwndkajhsduasdnkajd', '2023-02-18', 'Banjarmasin', 'Kantor Dinas', 2, 'hermes-rivera-265412-unsplash-1024x683.jpg', NULL, 3, 1),
('63f0719ea04d3', 'Irama', '082150508989', 'Kalbar', 'Kebakaran Hutan', 'askdjalkusfksa,ndkuyefbkjajknKA,ZHDNVMZ AJCRZSHMDBFLIEUBFIefEFUQ', '2023-02-21', 'Kalbar', 'Dinas Kehutanan', 1, 'foto-ini-disediakan-oleh-pemadam-kebakaran-sdis30-menunjukkan-pohon-pohon_220713154343-258.jpg', 'no', 4, 1),
('63f0c4c1a9919', 'Raisa', '082150508989', 'tanjung', 'Limbah tambang', 'asdljashdkasfawrhaiuhriajjasdasdnnjn', '2023-02-18', 'Tanjung', 'Adaro', 3, '604b3fc294aaf.jpg', 'cc', 3, 1),
('63f2ebdc1101c', 'Raden M. Naufal', '081251898990', 'asdadasd', 'asdas', 'asdadasda', '2023-02-14', 'asd', 'Pasar', 2, '37579acc-058a-4879-a65a-22e4fd1383a0.jpg', NULL, 2, 1);

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
('5f269419c1055', 'admin', '$2y$10$DPQFNqddiac1B/P0Rw8L0ekW7DP0DGGxOLBjXxEUxmWehCesqVIfu', 1, 'Rizky Maulana', 'rizkymaulana@gmail.com', '081223231212', 1, '', 0),
('63f448786a60d', 'bos123', '$2y$10$mhw4RLhiY7o3gsEWKUmTQOMETItcv5q8wM6fLfkPAJO3uHSjRSEA2', 2, 'Bosku', 'bosse@gmail.com', '0851-5636-2234', 1, '', 1676953720);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorilaporan`
--
ALTER TABLE `kategorilaporan`
  ADD PRIMARY KEY (`idKategoriLaporan`);

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
-- AUTO_INCREMENT for table `kategorilaporan`
--
ALTER TABLE `kategorilaporan`
  MODIFY `idKategoriLaporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
