-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 05:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailpb`
--

CREATE TABLE `tbl_detailpb` (
  `id_pb` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `unit` int(11) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detailpb`
--

INSERT INTO `tbl_detailpb` (`id_pb`, `id_barang`, `unit`, `keterangan`) VALUES
(9, 5, 0, 'Untuk latihan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(10) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjambarang`
--

CREATE TABLE `tbl_pinjambarang` (
  `id_pb` int(11) NOT NULL,
  `no_pb` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tujuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pinjambarang`
--

INSERT INTO `tbl_pinjambarang` (`id_pb`, `no_pb`, `tanggal`, `nama`, `tujuan`) VALUES
(9, '123', '2022-04-12', 'Fajri', 'Latihan UAS'),
(11, '100', '2022-04-19', 'aaa', 'Praktikum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'user', 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `no_seri` varchar(50) DEFAULT NULL,
  `kondisi_barang` varchar(50) NOT NULL,
  `unit` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `kode_barang`, `nama_barang`, `merk`, `no_seri`, `kondisi_barang`, `unit`, `gambar`, `deskripsi`) VALUES
(1, '3060324005-', 'Ruang F4.5', 'anritsu ms 2720t', '1536028', 'Tersedia', 1, 'ruang_kelas.jpg', '30 Bangku'),
(5, NULL, 'Laboratorium Komputer', '', NULL, 'Tersedia', 0, 'lab_komputer.jpg', 'Tersedia 50 Komputer'),
(7, NULL, 'Ruang Aula', '', NULL, 'Tersedia', 0, 'Aula.jpeg', 'Muat 300 Orang');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_barang`
-- (See below for the actual view)
--
CREATE TABLE `view_barang` (
`id_pb` int(11)
,`id_barang` int(11)
,`kode_barang` varchar(50)
,`nama_barang` varchar(50)
,`merk` varchar(50)
,`no_seri` varchar(50)
,`kondisi_barang` varchar(50)
,`unit` int(11)
,`keterangan` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `view_barang`
--
DROP TABLE IF EXISTS `view_barang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_barang`  AS SELECT `a`.`id_pb` AS `id_pb`, `a`.`id_barang` AS `id_barang`, `b`.`kode_barang` AS `kode_barang`, `b`.`nama_barang` AS `nama_barang`, `b`.`merk` AS `merk`, `b`.`no_seri` AS `no_seri`, `b`.`kondisi_barang` AS `kondisi_barang`, `a`.`unit` AS `unit`, `a`.`keterangan` AS `keterangan` FROM (`tbl_detailpb` `a` join `tb_barang` `b`) WHERE `a`.`id_barang` = `b`.`id_barang` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detailpb`
--
ALTER TABLE `tbl_detailpb`
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `no_pb` (`id_pb`),
  ADD KEY `no_pb_2` (`id_pb`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pinjambarang`
--
ALTER TABLE `tbl_pinjambarang`
  ADD PRIMARY KEY (`id_pb`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pinjambarang`
--
ALTER TABLE `tbl_pinjambarang`
  MODIFY `id_pb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_detailpb`
--
ALTER TABLE `tbl_detailpb`
  ADD CONSTRAINT `tbl_detailpb_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`),
  ADD CONSTRAINT `tbl_detailpb_ibfk_3` FOREIGN KEY (`id_pb`) REFERENCES `tbl_pinjambarang` (`id_pb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
