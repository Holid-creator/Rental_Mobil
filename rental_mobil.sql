-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 04:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `n_admin` varchar(120) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cust` int(11) NOT NULL,
  `n_cust` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cust`, `n_cust`, `username`, `alamat`, `gender`, `telp`, `ktp`, `password`, `role_id`) VALUES
(1, 'Yola', 'yola', 'Kp. Pasir Sereh', 'Perempuan', '085693797029', '3201221548700007', 'eeb750d17b0e73308cf36acce5ae38e4', 2),
(2, 'M Holidin', 'holid', 'Kp. Pasir sereh', 'Laki-laki', '085780781987', '3201221205930007', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(6, 'Olivia', 'oliv', 'Kp. Cimapag', 'Perempuan', '085773703393', '3201457660004', 'af0c3ad1aaaac0a6d0b26e29de113248', 2),
(8, 'Ferguso', 'ferguso', 'Kp. Babakan', 'Laki-laki', '085798544441', '320122578998001', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(9, 'Ranob', 'ranob', 'Kp. Pasir Sereh', 'Laki-laki', '08179864544', '3201221789100002', '81dc9bdb52d04dc20036dbd8313ed055', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `k_tipe` varchar(120) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `thn` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `ac` int(11) NOT NULL,
  `supir` int(11) NOT NULL,
  `mp3_player` int(11) NOT NULL,
  `central_lock` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `k_tipe`, `merk`, `plat`, `warna`, `thn`, `status`, `harga`, `denda`, `ac`, `supir`, `mp3_player`, `central_lock`, `gambar`) VALUES
(1, 'SDN', 'Toyota Yaris Sedan 1200 CC', 'F 1477  FOH', 'Merah', '2018', '0', 350000, 100000, 1, 0, 1, 0, 'Toyota_Yaris_Sedan_1200_CC2.jpg'),
(2, 'SDN', 'Toyota Sivic', 'B 1456 DAG', 'Hitam', '2015', '0', 300000, 70000, 0, 0, 0, 0, 'Honda_Sivic_Sedan.jpg'),
(4, 'BMW', 'BMW M8 Gran Coupe 2', 'F 1970 WA', 'Violet', '2019', '0', 300000, 70000, 0, 0, 0, 0, 'BMW_M8_Gran_Coupe_2.jpg'),
(5, 'HND', 'Honda Jazz', 'F 7177 FA', 'Orange', '2020', '0', 400000, 100000, 1, 0, 1, 0, 'honda-jazz.jpg'),
(6, 'HND', 'Honda Jazz (GK5_MY18)', 'B 2737 FAX', 'Putih', '2019', '0', 350000, 70000, 1, 1, 1, 1, 'Honda_Jazz_(GK5_MY18).jpg'),
(7, 'Toyota', 'Toyota Rush', 'F 7157 GA', 'Putih', '2018', '1', 300000, 50000, 1, 1, 1, 1, 'toyota_Rush.jpg'),
(8, 'Mercedes', 'Mercedes Benz Vision EQS', 'B 7337 FQ', 'Putih', '2020', '0', 500000, 100000, 1, 1, 1, 1, 'mercedes-vision-eqs.jpg'),
(9, 'SDN', 'Sedan Jadul', 'F 4712 BA', 'Biru', '2000', '1', 200000, 50000, 1, 0, 1, 0, 'car-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id_rent` int(11) NOT NULL,
  `id_cust` int(11) NOT NULL,
  `tgl_rent` date NOT NULL,
  `tgl_kem` date NOT NULL,
  `tgl_peng` date NOT NULL,
  `st_rent` varchar(50) NOT NULL,
  `st_peng` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id_tipe` int(11) NOT NULL,
  `k_tipe` varchar(10) NOT NULL,
  `n_tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id_tipe`, `k_tipe`, `n_tipe`) VALUES
(1, 'SDN', 'Sedan'),
(2, 'MNV', 'Minivan'),
(4, 'MPV', 'Multi Purpose Vehicle'),
(6, 'BMW', 'Bayerische Motoren Werke'),
(7, 'HND', 'Honda'),
(8, 'Toyota', 'Toyota'),
(9, 'Mercedes', 'Mercedes');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int(11) NOT NULL,
  `id_cust` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tgl_rent` date NOT NULL,
  `tgl_kem` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` varchar(120) NOT NULL,
  `total_denda` varchar(120) NOT NULL,
  `tgl_peng` date NOT NULL,
  `st_peng` varchar(50) NOT NULL,
  `st_rent` varchar(50) NOT NULL,
  `bukti_pem` varchar(120) NOT NULL,
  `st_pem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_cust`, `id_mobil`, `tgl_rent`, `tgl_kem`, `harga`, `denda`, `total_denda`, `tgl_peng`, `st_peng`, `st_rent`, `bukti_pem`, `st_pem`) VALUES
(3, 1, 4, '2021-01-14', '2021-01-16', '300000', '140000', '560000', '2021-01-20', 'Kembali', 'Selesai', 'laporan.pdf', 1),
(4, 6, 2, '2021-01-10', '2021-01-15', '300000', '70000', '0', '2021-01-15', 'Kembali', 'Selesai', '14474429_309665892729288_2172374602682990592_n.jpg', 1),
(14, 6, 8, '2021-01-18', '2021-01-20', '500000', '100000', '0', '0000-00-00', 'Belum Kembali', 'Belum Selesai', '', 0),
(15, 1, 8, '2021-01-18', '2021-01-20', '500000', '100000', '0', '0000-00-00', 'Belum Kembali', 'Belum Selesai', 'receipt1.pdf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rent`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rent` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
