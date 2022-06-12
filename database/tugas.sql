-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 08:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel jadwal`
--

CREATE TABLE `tabel jadwal` (
  `Kode_Jadwal` varchar(5) NOT NULL,
  `Jadwal_Keberangkatan` date NOT NULL,
  `Jadwal_Pulang` date NOT NULL,
  `Kode_Pemandu` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel jadwal`
--

INSERT INTO `tabel jadwal` (`Kode_Jadwal`, `Jadwal_Keberangkatan`, `Jadwal_Pulang`, `Kode_Pemandu`) VALUES
('J0001', '2020-10-24', '2020-10-27', 'Q0001'),
('J0002', '2020-11-11', '2020-11-14', 'Q0002'),
('J0003', '2020-12-25', '2020-12-28', 'Q0003'),
('J0004', '2020-12-26', '2020-12-29', 'Q0002'),
('J0005', '2020-12-27', '2020-12-30', 'Q0003'),
('J0006', '2020-12-28', '2020-12-31', 'Q0003'),
('J0007', '2020-12-29', '2021-01-01', 'Q0004'),
('J0008', '2020-12-30', '2021-01-02', 'Q0002'),
('J0009', '2020-12-31', '2021-01-03', 'Q0003'),
('J0010', '2021-01-01', '2021-01-04', 'Q0001'),
('J0011', '2021-01-02', '2021-01-05', 'Q0004'),
('J0012', '2021-01-03', '2021-01-06', 'Q0003'),
('J0013', '2021-01-04', '2021-01-07', 'Q0004'),
('J0014', '2021-01-05', '2021-01-08', 'Q0004'),
('J0015', '2021-01-06', '2021-01-09', 'Q0002'),
('J0016', '2021-01-07', '2021-01-10', 'Q0003'),
('J0017', '2021-01-08', '2021-01-11', 'Q0002'),
('J0018', '2021-01-09', '2021-01-12', 'Q0003'),
('J0019', '2021-01-10', '2021-01-13', 'Q0004'),
('J0020', '2021-01-11', '2021-01-14', 'Q0003'),
('J0021', '2021-01-12', '2021-01-15', 'Q0004'),
('J0022', '2021-01-13', '2021-01-16', 'Q0002'),
('J0023', '2021-01-14', '2021-01-17', 'Q0002'),
('J0024', '2021-01-15', '2021-01-18', 'Q0002'),
('J0025', '2021-01-16', '2021-01-19', 'Q0001'),
('J0026', '2021-01-17', '2021-01-20', 'Q0002'),
('J0027', '2021-01-18', '2021-01-21', 'Q0002'),
('J0028', '2021-01-19', '2021-01-22', 'Q0003'),
('J0029', '2021-01-20', '2021-01-23', 'Q0002');

-- --------------------------------------------------------

--
-- Table structure for table `tabel ketersediaan`
--

CREATE TABLE `tabel ketersediaan` (
  `Jadwal_Keberangkatan` date NOT NULL,
  `Tersedia` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel ketersediaan`
--

INSERT INTO `tabel ketersediaan` (`Jadwal_Keberangkatan`, `Tersedia`) VALUES
('2020-10-24', 100),
('2020-11-11', 149),
('2020-12-25', 200),
('2020-12-26', 199),
('2020-12-27', 200),
('2020-12-28', 200),
('2020-12-29', 200),
('2020-12-30', 198),
('2020-12-31', 199),
('2021-01-01', 199),
('2021-01-02', 199),
('2021-01-03', 200),
('2021-01-04', 200),
('2021-01-05', 200),
('2021-01-06', 200),
('2021-01-07', 200),
('2021-01-08', 200),
('2021-01-09', 200),
('2021-01-10', 200),
('2021-01-11', 200),
('2021-01-12', 200),
('2021-01-13', 200),
('2021-01-14', 200),
('2021-01-15', 200),
('2021-01-16', 200),
('2021-01-17', 200),
('2021-01-18', 200),
('2021-01-19', 200),
('2021-01-20', 200);

-- --------------------------------------------------------

--
-- Table structure for table `tabel konfirmasi`
--

CREATE TABLE `tabel konfirmasi` (
  `No_Pendaftaran` int(11) NOT NULL,
  `Nama_File` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Waktu_Upload` datetime NOT NULL,
  `Berangkat` date NOT NULL,
  `Nama_Wisatawan` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Nama_Paket` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `No.Hp_Wisatawan` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Ukuran_File` int(10) NOT NULL,
  `Status` int(1) NOT NULL DEFAULT 0,
  `Download` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tabel konfirmasi`
--

INSERT INTO `tabel konfirmasi` (`No_Pendaftaran`, `Nama_File`, `Waktu_Upload`, `Berangkat`, `Nama_Wisatawan`, `Nama_Paket`, `No.Hp_Wisatawan`, `Gender`, `Ukuran_File`, `Status`, `Download`) VALUES
(1, 'IMG_20160310_175648.jpg', '2020-12-25 03:03:05', '2020-12-29', 'Admiral Vasco Samudera', 'Reguler', '081210659980', 'L', 129735, 0, 0),
(2, 'IMG_20160310_180410.jpg', '2020-12-25 03:23:34', '2020-12-30', 'Ula Aryoda Ahadun Siam', 'VVIP', '082264823771', 'L', 235171, 1, 2),
(3, 'siklus pendingin.png', '2020-12-25 08:24:46', '2020-12-30', 'Bryan Liano', 'VIP', '082635852835', 'L', 10422, 1, 1),
(4, 'IMG-20181214-WA0026.jpg', '2020-12-26 11:15:40', '2021-01-01', 'Carl', 'VVIP', '0865243862', 'L', 122497, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel paket`
--

CREATE TABLE `tabel paket` (
  `Nama_Paket` varchar(8) NOT NULL,
  `Fasilitas` text NOT NULL,
  `Harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel paket`
--

INSERT INTO `tabel paket` (`Nama_Paket`, `Fasilitas`, `Harga`) VALUES
('Reguler', 'Mobil Jeep, \r\nMakan 2 kali sehari, \r\nHotel Bintang 2', 50000),
('VIP', 'Mobil Jeep, \r\nKuda, \r\nMakan 2 kali sehari, \r\nHotel Bintang 4', 75000),
('VVIP', 'Mobil Jeep, \r\nKuda, \r\nMakan 3 kali sehari, \r\nVilla Mewah', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel pemandu wisata`
--

CREATE TABLE `tabel pemandu wisata` (
  `Kode_Pemandu` varchar(5) NOT NULL,
  `Nama_Pemandu` varchar(40) NOT NULL,
  `No.Hp_Pemandu` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel pemandu wisata`
--

INSERT INTO `tabel pemandu wisata` (`Kode_Pemandu`, `Nama_Pemandu`, `No.Hp_Pemandu`) VALUES
('Q0001', 'Aryo Kennedy', '081548254372'),
('Q0002', 'Beny Sumedang', '08562946237'),
('Q0003', 'Darmanto', '083452614442'),
('Q0004', 'Aisyah Sumirah', '08652008060');

-- --------------------------------------------------------

--
-- Table structure for table `tabel wisatawan`
--

CREATE TABLE `tabel wisatawan` (
  `Kode_Wisatawan` varchar(5) NOT NULL,
  `Nama_Wisatawan` varchar(40) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Nama_Paket` varchar(8) NOT NULL,
  `No.Hp_Wisatawan` varchar(13) NOT NULL,
  `Kode_Jadwal` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel wisatawan`
--

INSERT INTO `tabel wisatawan` (`Kode_Wisatawan`, `Nama_Wisatawan`, `Gender`, `Nama_Paket`, `No.Hp_Wisatawan`, `Kode_Jadwal`) VALUES
('P0001', 'Dzaky Tamir', 'L', 'Reguler', '087774157936', 'J0001'),
('P0002', 'Muhammad Luthfi', 'L', 'VIP', '08182838485', 'J0002'),
('P0003', 'Rizky Aziz Syaifudin', 'L', 'VIP', '081228022001', 'J0003'),
('P0004', 'Ghaissan Rabbani', 'L', 'VVIP', '082684720222', 'J0004'),
('P0005', 'Sabri Fuadi', 'L', 'VVIP', '081287406938', 'J0005'),
('P0006', 'Ula Aryoda Ahadun Siam', 'L', 'VVIP', '082264823771', 'J0008'),
('P0007', 'Bryan Liano', 'L', 'VIP', '082635852835', 'J0008'),
('P0008', 'Carl', 'L', 'VVIP', '0865243862', 'J0010');

--
-- Triggers `tabel wisatawan`
--
DELIMITER $$
CREATE TRIGGER `Tambah Wisatawan` AFTER INSERT ON `tabel wisatawan` FOR EACH ROW update `tabel jadwal` natural inner join `tabel ketersediaan` set
`tabel ketersediaan`.Tersedia=`tabel ketersediaan`.Tersedia-1 where
`Kode_Jadwal`=NEW.`Kode_Jadwal`
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel jadwal`
--
ALTER TABLE `tabel jadwal`
  ADD PRIMARY KEY (`Kode_Jadwal`),
  ADD KEY `Kode Pemandu` (`Kode_Pemandu`);

--
-- Indexes for table `tabel ketersediaan`
--
ALTER TABLE `tabel ketersediaan`
  ADD PRIMARY KEY (`Jadwal_Keberangkatan`);

--
-- Indexes for table `tabel konfirmasi`
--
ALTER TABLE `tabel konfirmasi`
  ADD PRIMARY KEY (`No_Pendaftaran`);

--
-- Indexes for table `tabel paket`
--
ALTER TABLE `tabel paket`
  ADD PRIMARY KEY (`Nama_Paket`);

--
-- Indexes for table `tabel pemandu wisata`
--
ALTER TABLE `tabel pemandu wisata`
  ADD PRIMARY KEY (`Kode_Pemandu`);

--
-- Indexes for table `tabel wisatawan`
--
ALTER TABLE `tabel wisatawan`
  ADD PRIMARY KEY (`Kode_Wisatawan`),
  ADD KEY `Nama Paket` (`Nama_Paket`),
  ADD KEY `Kode Jadwal` (`Kode_Jadwal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel konfirmasi`
--
ALTER TABLE `tabel konfirmasi`
  MODIFY `No_Pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
