-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 05:27 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkminimarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `nama`) VALUES
(26, 'Vie Mart'),
(27, 'SRC Yudis'),
(30, 'Minimarket Reski Bumi'),
(31, 'Farma Andalas Mart'),
(32, 'Toko 2 Saudara'),
(33, 'SRC Zahra'),
(34, 'HnH Market'),
(35, 'Rafy Mart'),
(36, 'Cahaya Mart'),
(37, 'Minimarket Tanjung Indah');

-- --------------------------------------------------------

--
-- Table structure for table `detail_alternatif`
--

CREATE TABLE `detail_alternatif` (
  `id` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_alternatif`
--

INSERT INTO `detail_alternatif` (`id`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(17, 26, 28, 'Cukup Murah (Terjangkau)'),
(18, 26, 32, '-0.92764252,100.43036684'),
(19, 26, 33, '08.00-24.00 WIB (16 jam)'),
(20, 26, 34, '<div>Cukup lengkap:</div><ul><li>Makanan dan minuman</li><li>Kebutuhan mandi dan mencuci</li><li>Barang-barang pribadi</li><li>Alat tulis kantor</li></ul>'),
(21, 27, 28, 'Cukup Murah(Terjangkau)'),
(22, 27, 32, '-0.9258753,100.43645922'),
(23, 27, 33, '09.00-22.00 WIB (13 jam)'),
(24, 27, 34, '<p>Cukup lengkap:</p><ul><li>Makanan dan minuman</li><li>Kebutuhan mandi dan mencuci</li><li>Barang-barang pribadi</li><li>Alat tulis kantor</li><li>Galon air dan gas elpiji</li></ul>'),
(33, 30, 28, 'Murah'),
(34, 30, 32, '-0.92423686,100.44135902'),
(35, 30, 33, '09.00-22.00 WIB (13 jam)'),
(36, 30, 34, '<p>Sangat lengkap:</p><ul><li>Makanan dan minuman</li><li>Kebutuhan mandi dan mencuci</li><li>Barang-barang pribadi</li><li>Alat tulis kantor</li><li>Peralatan dapur</li><li>Peralatan rumah tangga</li><li>Kasur dan bantal</li></ul>'),
(37, 31, 28, '<p>Baiik:</p><ul><li>TV</li><li>Tempat duduk dan meja</li></ul>'),
(38, 31, 32, '-0.92595378,100.4374413'),
(39, 31, 33, '09.00-22.00 WIB (13 jam)'),
(40, 31, 34, '<p>Cukup lengkap:</p><ul><li>Makanan dan minuman</li><li>Kebuutuhan mandi dan mencuci</li><li>Barang-barang pribadi</li><li>Alat tulis kantor</li></ul>'),
(41, 32, 28, '<p>Baik:</p><ul><li>TV</li><li>Tempat duduk dan meja</li></ul>'),
(42, 32, 32, '-0.92579505,100.43558121'),
(43, 32, 33, '07.00-24.00 WIB (17 jam)'),
(44, 32, 34, '<p>Cukup lengkap:</p><ul><li>Makanan dan minuman</li><li>Kebutuhan mandi dan mencuci</li><li>Barang-barang pribadi</li><li>Gas elpiji dan galon air minum</li></ul>'),
(45, 33, 28, '<p>Cukup baik:</p><p>TV</p>'),
(46, 33, 32, '-0.92844267,100.42882545'),
(47, 33, 33, '07.00-24.00 WIB (17 jam)'),
(48, 33, 34, '<p>Cukup lengkap:</p><ul><li>Makanan dan minuman</li><li>Kebutuhan mandi dan mencuci</li><li>Barang-barang pribadi</li><li>Alat tulis kantor</li></ul>'),
(49, 34, 28, '<p>Baik:</p><ul><li>Kipas angin</li><li>CCTV</li></ul>'),
(50, 34, 32, '-0.92872473,100.42870419'),
(51, 34, 33, '07.30-22.00 (14 jam 30 menit)'),
(52, 34, 34, '<p>Sangat lengkap:</p><ul><li>Makanan dan minuman</li><li>Kebutuhan mandi dan mencuci</li><li>Barang-baarang pribadi</li><li>Alat tulis kantor</li><li>Peralatan dapur</li><li>Peralatan rumah tangga</li><li>Perlengkapan bayi</li></ul>'),
(53, 35, 28, '<p>Cukup baik:</p><p>TV</p>'),
(54, 35, 32, '-0.92760022,100.43051514'),
(55, 35, 33, '08.00-23.00 WIB (15 jam)'),
(56, 35, 34, '<p>Cukup lengkap:</p><ul><li>Makanan dan minuman</li><li>Kebutuhan mandi dan mencuci</li><li>Barang-barang pribadi</li><li>Alat tulis kantor</li></ul>'),
(57, 36, 28, '<p>Baik:</p><ul><li>Tempat duduk</li><li>TV</li></ul>'),
(58, 36, 32, '-0.9273621,100.43067183'),
(59, 36, 33, '09.00-23.00 WIB (14 jam)'),
(60, 36, 34, '<p>Cukup lengkap::</p><ul><li>Makanan dan minuman</li><li>kebutuhan mandi dan mencuci</li><li>Barang-barang pribadi</li><li>Alat tulis kantor</li></ul>'),
(61, 37, 28, '<p>Cukup baik:</p><p>Tempat duduk dan meja</p>'),
(62, 37, 32, '-0.93055061,100.4192145'),
(63, 37, 33, '08.00-21.00 WIB (13 jam)'),
(64, 37, 34, '<p>Kurang lengkap:</p><ul><li>Makanan dan minuman</li><li>Kebutuhan mandi dan mencuci</li><li>Barang-barang pribadi</li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `ir`
--

CREATE TABLE `ir` (
  `jumlah` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ir`
--

INSERT INTO `ir` (`jumlah`, `nilai`) VALUES
(1, 0),
(2, 0),
(3, 0.58),
(4, 0.9),
(5, 1.12),
(6, 1.24),
(7, 1.32),
(8, 1.41),
(9, 1.45),
(10, 1.49),
(11, 1.51),
(12, 1.48),
(13, 1.56),
(14, 1.57),
(15, 1.59);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`) VALUES
(28, 'Harga'),
(32, 'Jarak'),
(33, 'Rentang Waktu Buka'),
(34, 'Kelengkapan Barang');

-- --------------------------------------------------------

--
-- Table structure for table `perbandingan_alternatif`
--

CREATE TABLE `perbandingan_alternatif` (
  `id` int(11) NOT NULL,
  `alternatif1` int(11) NOT NULL,
  `alternatif2` int(11) NOT NULL,
  `pembanding` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbandingan_alternatif`
--

INSERT INTO `perbandingan_alternatif` (`id`, `alternatif1`, `alternatif2`, `pembanding`, `nilai`) VALUES
(28, 26, 27, 28, 1),
(29, 26, 30, 28, 5),
(30, 27, 30, 28, 5),
(31, 26, 31, 28, 3),
(32, 26, 32, 28, 3),
(33, 26, 33, 28, 5),
(34, 26, 34, 28, 3),
(35, 26, 35, 28, 5),
(36, 26, 36, 28, 3),
(37, 26, 37, 28, 5),
(38, 27, 31, 28, 3),
(39, 27, 32, 28, 3),
(40, 27, 33, 28, 5),
(41, 27, 34, 28, 3),
(42, 27, 35, 28, 5),
(43, 27, 36, 28, 3),
(44, 27, 37, 28, 5),
(45, 30, 31, 28, 0.333333),
(46, 30, 32, 28, 0.5),
(47, 30, 33, 28, 1),
(48, 30, 34, 28, 0.5),
(49, 30, 35, 28, 1),
(50, 30, 36, 28, 2),
(51, 30, 37, 28, 1),
(52, 31, 32, 28, 1),
(53, 31, 33, 28, 2),
(54, 31, 34, 28, 1),
(55, 31, 35, 28, 1),
(56, 31, 36, 28, 1),
(57, 31, 37, 28, 1),
(58, 32, 33, 28, 1),
(59, 32, 34, 28, 1),
(60, 32, 35, 28, 1),
(61, 32, 36, 28, 1),
(62, 32, 37, 28, 1),
(63, 33, 34, 28, 1),
(64, 33, 35, 28, 2),
(65, 33, 36, 28, 1),
(66, 33, 37, 28, 2),
(67, 34, 35, 28, 2),
(68, 34, 36, 28, 1),
(69, 34, 37, 28, 2),
(70, 35, 36, 28, 0.5),
(71, 35, 37, 28, 1),
(72, 36, 37, 28, 2),
(73, 26, 27, 32, 0.333333),
(74, 26, 30, 32, 0.2),
(75, 26, 31, 32, 0.333333),
(76, 26, 32, 32, 0.333333),
(77, 26, 33, 32, 2),
(78, 26, 34, 32, 2),
(79, 26, 35, 32, 0.5),
(80, 26, 36, 32, 0.5),
(81, 26, 37, 32, 5),
(82, 27, 30, 32, 0.333333),
(83, 27, 31, 32, 0.5),
(84, 27, 32, 32, 1),
(85, 27, 33, 32, 3),
(86, 27, 34, 32, 3),
(87, 27, 35, 32, 3),
(88, 27, 36, 32, 3),
(89, 27, 37, 32, 5),
(90, 30, 31, 32, 3),
(91, 30, 32, 32, 3),
(92, 30, 33, 32, 5),
(93, 30, 34, 32, 5),
(94, 30, 35, 32, 5),
(95, 30, 36, 32, 5),
(96, 30, 37, 32, 7),
(97, 31, 32, 32, 1),
(98, 31, 33, 32, 3),
(99, 31, 34, 32, 3),
(100, 31, 35, 32, 3),
(101, 31, 36, 32, 3),
(102, 31, 37, 32, 5),
(103, 32, 33, 32, 3),
(104, 32, 34, 32, 3),
(105, 32, 35, 32, 3),
(106, 32, 36, 32, 3),
(107, 32, 37, 32, 5),
(108, 33, 34, 32, 2),
(109, 33, 35, 32, 1),
(110, 33, 36, 32, 1),
(111, 33, 37, 32, 3),
(112, 34, 35, 32, 0.5),
(113, 34, 36, 32, 0.5),
(114, 34, 37, 32, 3),
(115, 35, 36, 32, 1),
(116, 35, 37, 32, 3),
(117, 36, 37, 32, 3),
(118, 26, 27, 33, 3),
(119, 26, 30, 33, 3),
(120, 26, 31, 33, 3),
(121, 26, 32, 33, 0.5),
(122, 26, 33, 33, 2),
(123, 26, 34, 33, 3),
(124, 26, 35, 33, 2),
(125, 26, 36, 33, 2),
(126, 26, 37, 33, 3),
(127, 27, 30, 33, 1),
(128, 27, 31, 33, 1),
(129, 27, 32, 33, 0.333333),
(130, 27, 33, 33, 0.333333),
(131, 27, 34, 33, 0.5),
(132, 27, 35, 33, 0.5),
(133, 27, 36, 33, 2),
(134, 27, 37, 33, 1),
(135, 30, 31, 33, 1),
(136, 30, 32, 33, 0.333333),
(137, 30, 33, 33, 0.333333),
(138, 30, 34, 33, 0.5),
(139, 30, 35, 33, 0.5),
(140, 30, 36, 33, 1),
(141, 30, 37, 33, 1),
(142, 31, 32, 33, 0.333333),
(143, 31, 33, 33, 0.333333),
(144, 31, 34, 33, 0.5),
(145, 31, 35, 33, 0.5),
(146, 31, 36, 33, 0.5),
(147, 31, 37, 33, 1),
(148, 32, 33, 33, 1),
(149, 32, 34, 33, 3),
(150, 32, 35, 33, 2),
(151, 32, 36, 33, 2),
(152, 32, 37, 33, 3),
(153, 33, 34, 33, 3),
(154, 33, 35, 33, 2),
(155, 33, 36, 33, 2),
(156, 33, 37, 33, 3),
(157, 34, 35, 33, 0.5),
(158, 34, 36, 33, 2),
(159, 34, 37, 33, 2),
(160, 35, 36, 33, 2),
(161, 35, 37, 33, 2),
(162, 36, 37, 33, 2),
(163, 26, 27, 34, 0.333333),
(164, 26, 30, 34, 0.2),
(165, 26, 31, 34, 1),
(166, 26, 32, 34, 1),
(167, 26, 33, 34, 1),
(168, 26, 34, 34, 0.2),
(169, 26, 35, 34, 1),
(170, 26, 36, 34, 1),
(171, 26, 37, 34, 3),
(172, 27, 30, 34, 0.333333),
(173, 27, 31, 34, 3),
(174, 27, 32, 34, 3),
(175, 27, 33, 34, 3),
(176, 27, 34, 34, 0.333333),
(177, 27, 35, 34, 3),
(178, 27, 36, 34, 3),
(179, 27, 37, 34, 5),
(180, 30, 31, 34, 5),
(181, 30, 32, 34, 5),
(182, 30, 33, 34, 5),
(183, 30, 34, 34, 1),
(184, 30, 35, 34, 5),
(185, 30, 36, 34, 5),
(186, 30, 37, 34, 7),
(187, 31, 32, 34, 1),
(188, 31, 33, 34, 1),
(189, 31, 34, 34, 0.2),
(190, 31, 35, 34, 1),
(191, 31, 36, 34, 1),
(192, 31, 37, 34, 3),
(193, 32, 33, 34, 1),
(194, 32, 34, 34, 0.2),
(195, 32, 35, 34, 1),
(196, 32, 36, 34, 1),
(197, 32, 37, 34, 3),
(198, 33, 34, 34, 0.2),
(199, 33, 35, 34, 1),
(200, 33, 36, 34, 1),
(201, 33, 37, 34, 3),
(202, 34, 35, 34, 5),
(203, 34, 36, 34, 5),
(204, 34, 37, 34, 7),
(205, 35, 36, 34, 1),
(206, 35, 37, 34, 3),
(207, 36, 37, 34, 3);

-- --------------------------------------------------------

--
-- Table structure for table `perbandingan_kriteria`
--

CREATE TABLE `perbandingan_kriteria` (
  `id` int(11) NOT NULL,
  `kriteria1` int(11) NOT NULL,
  `kriteria2` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbandingan_kriteria`
--

INSERT INTO `perbandingan_kriteria` (`id`, `kriteria1`, `kriteria2`, `nilai`) VALUES
(10, 28, 32, 3),
(11, 28, 33, 4),
(12, 28, 34, 0.5),
(13, 32, 33, 2),
(14, 32, 34, 0.25),
(15, 33, 34, 0.333333);

-- --------------------------------------------------------

--
-- Table structure for table `pv_alternatif`
--

CREATE TABLE `pv_alternatif` (
  `id` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pv_alternatif`
--

INSERT INTO `pv_alternatif` (`id`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(52, 26, 28, 0.238067),
(53, 27, 28, 0.238067),
(54, 30, 28, 0.0539948),
(55, 31, 28, 0.0810599),
(56, 32, 28, 0.0708532),
(57, 33, 28, 0.0653781),
(58, 34, 28, 0.080377),
(59, 35, 28, 0.0494012),
(60, 36, 28, 0.0734003),
(61, 37, 28, 0.0494012),
(62, 26, 32, 0.0604457),
(63, 27, 32, 0.129445),
(64, 30, 32, 0.287949),
(65, 31, 32, 0.147511),
(66, 32, 32, 0.136233),
(67, 33, 32, 0.053383),
(68, 34, 32, 0.0411217),
(69, 35, 32, 0.0608087),
(70, 36, 32, 0.0608087),
(71, 37, 32, 0.0222941),
(72, 26, 33, 0.175305),
(73, 27, 33, 0.0604348),
(74, 30, 33, 0.0537681),
(75, 31, 33, 0.0504348),
(76, 32, 33, 0.186199),
(77, 33, 33, 0.161874),
(78, 34, 33, 0.0856792),
(79, 35, 33, 0.106004),
(80, 36, 33, 0.0698658),
(81, 37, 33, 0.0504348),
(82, 26, 34, 0.0534332),
(83, 27, 34, 0.135266),
(84, 30, 34, 0.260606),
(85, 31, 34, 0.0534332),
(86, 32, 34, 0.0534332),
(87, 33, 34, 0.0534332),
(88, 34, 34, 0.260606),
(89, 35, 34, 0.0534332),
(90, 36, 34, 0.0534332),
(91, 37, 34, 0.0229223);

-- --------------------------------------------------------

--
-- Table structure for table `pv_kriteria`
--

CREATE TABLE `pv_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pv_kriteria`
--

INSERT INTO `pv_kriteria` (`id_kriteria`, `nilai`) VALUES
(28, 0.318003),
(32, 0.132668),
(33, 0.0971477),
(34, 0.452182);

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `id_alternatif` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranking`
--

INSERT INTO `ranking` (`id_alternatif`, `nilai`) VALUES
(26, 0.124917),
(27, 0.159915),
(30, 0.178437),
(31, 0.0744084),
(32, 0.0828556),
(33, 0.0677599),
(34, 0.157181),
(35, 0.0582367),
(36, 0.0623577),
(37, 0.0339321);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(4, 'admin', '25d55ad283aa400af464c76d713c07ad', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `detail_alternatif`
--
ALTER TABLE `detail_alternatif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `ir`
--
ALTER TABLE `ir`
  ADD PRIMARY KEY (`jumlah`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perbandingan_alternatif`
--
ALTER TABLE `perbandingan_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pv_alternatif`
--
ALTER TABLE `pv_alternatif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `pv_kriteria`
--
ALTER TABLE `pv_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `detail_alternatif`
--
ALTER TABLE `detail_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `perbandingan_alternatif`
--
ALTER TABLE `perbandingan_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;
--
-- AUTO_INCREMENT for table `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pv_alternatif`
--
ALTER TABLE `pv_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_alternatif`
--
ALTER TABLE `detail_alternatif`
  ADD CONSTRAINT `detail_alternatif_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_alternatif_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pv_alternatif`
--
ALTER TABLE `pv_alternatif`
  ADD CONSTRAINT `pv_alternatif_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pv_alternatif_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pv_kriteria`
--
ALTER TABLE `pv_kriteria`
  ADD CONSTRAINT `pv_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ranking`
--
ALTER TABLE `ranking`
  ADD CONSTRAINT `ranking_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
