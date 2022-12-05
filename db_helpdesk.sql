-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 11:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE `bagian` (
  `id_bagian` int(11) NOT NULL,
  `nama_bagian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `nama_bagian`) VALUES
(6, 'Media'),
(7, 'Investor'),
(8, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `item_masalah`
--

CREATE TABLE `item_masalah` (
  `id_item_masalah` int(11) NOT NULL,
  `nama_item_masalah` varchar(200) NOT NULL,
  `id_kategori_masalah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_masalah`
--

INSERT INTO `item_masalah` (`id_item_masalah`, `nama_item_masalah`, `id_kategori_masalah`) VALUES
(11, 'Tidak Sesuai dengan Harga', 17),
(13, 'Kurang Memuaskan', 15),
(14, 'Pelayanan Kurang Bagus', 18);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_masalah`
--

CREATE TABLE `kategori_masalah` (
  `id_kategori_masalah` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_masalah`
--

INSERT INTO `kategori_masalah` (`id_kategori_masalah`, `id_bagian`, `nama_kategori`) VALUES
(14, 8, 'Pelayanan'),
(15, 6, 'Pelayanan'),
(16, 7, 'Pelayanan'),
(18, 8, 'BON');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(11) NOT NULL,
  `nama_operator` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `deskripsi_pengaduan` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_item_masalah` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `id_kategori_masalah` int(11) NOT NULL,
  `id_item_masalah` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` enum('Selesai','Belum_Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `id_user`, `id_bagian`, `id_kategori_masalah`, `id_item_masalah`, `tanggal`, `status`) VALUES
(1, 1, 6, 14, 11, '2022-01-05 20:49:40', 'Selesai'),
(2, 1, 7, 15, 13, '2022-01-04 00:00:00', 'Selesai'),
(3, 1, 7, 14, 14, '2022-01-06 00:00:00', 'Belum_Selesai'),
(4, 4, 6, 14, 13, '2022-01-09 00:00:00', 'Belum_Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`) VALUES
(1, 'rivoyulio1@gmail.com', 'admin11', '68aeb8c02944e4f501a967b26125ee9dacf07edc'),
(2, 'trioginola1@gmail.com', 'dimas95', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'drivosnek@yahoo.com', 'admin123', '0192023a7bbd73250516f069df18b500'),
(4, 'hattakecau@yahoo.com', 'hattakecau', '20b3e016ee95a533303fd547f3cb36458a9f2ab8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `item_masalah`
--
ALTER TABLE `item_masalah`
  ADD PRIMARY KEY (`id_item_masalah`),
  ADD KEY `id_kategori_masalah` (`id_kategori_masalah`);

--
-- Indexes for table `kategori_masalah`
--
ALTER TABLE `kategori_masalah`
  ADD PRIMARY KEY (`id_kategori_masalah`),
  ADD KEY `id_bagian` (`id_bagian`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_item_masalah` (`id_item_masalah`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `item_masalah`
--
ALTER TABLE `item_masalah`
  MODIFY `id_item_masalah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori_masalah`
--
ALTER TABLE `kategori_masalah`
  MODIFY `id_kategori_masalah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
