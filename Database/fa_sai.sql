-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Jul 2019 pada 08.25
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fa_sai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_invoice`
--

CREATE TABLE `data_invoice` (
  `id_` int(11) NOT NULL,
  `productid` varchar(20) NOT NULL,
  `quantityunit` varchar(20) NOT NULL,
  `unitcode` varchar(20) NOT NULL,
  `invoicenumber` varchar(20) NOT NULL,
  `invoicedate` varchar(20) NOT NULL,
  `invoicevalue` varchar(20) NOT NULL,
  `currencycode` varchar(20) NOT NULL,
  `ordernumber` varchar(20) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `kalkulasi_per_pcs` varchar(20) NOT NULL,
  `periode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_invoice`
--

INSERT INTO `data_invoice` (`id_`, `productid`, `quantityunit`, `unitcode`, `invoicenumber`, `invoicedate`, `invoicevalue`, `currencycode`, `ordernumber`, `supplier`, `kalkulasi_per_pcs`, `periode`) VALUES
(1, '7154-6334', ' 528', 'PCS', 'JL01-8388', '2019-07-05', '126.57', 'USD', 'NQ907M1', 'HIB', '0.2386363636363636', 'Jun 2019 - Nov 2019'),
(2, '7171-6026', ' 240', 'PCS', 'JL01-8388', '2019-07-05', '110.48', 'USD', 'NQ907M1', 'HIB', '0.4583333333333333', 'Jun 2019 - Nov 2019'),
(3, '7173-0384-30', ' 960', 'PCS', 'JL01-8388', '2019-05-01', '385.2', 'USD', 'NQ907M1', 'HIB', '0.4010416666666667', 'Dec 2018 - May 2019'),
(4, '7282-4871', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '232.5', 'USD', 'NQ907M1', 'HIB', '116', 'Jun 2019 - Nov 2019'),
(5, '7282-4875', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '252.32', 'USD', 'NQ907M1', 'HIB', '126', 'Jun 2019 - Nov 2019'),
(6, '430CA5031', ' 5,000', 'METER', 'JL01-8388', '2019-07-05', '80.34999999999999', 'USD', 'NQ907M1', 'HIB', '16', 'Jun 2019 - Nov 2019'),
(7, '7090-2970-30', ' 1,300', 'PCS', 'JL01-8388', '2019-07-05', '297.84', 'USD', 'NQ907M1', 'HIB', '297', 'Jun 2019 - Nov 2019'),
(8, '7158-7583-30', ' 800', 'PCS', 'JL01-8388', '2019-07-05', '107.71', 'USD', 'NQ907M2', 'HIB', '0.13375', 'Jun 2019 - Nov 2019'),
(9, '7282-1074-40', ' 200', 'PCS', 'JL01-8388', '2019-07-05', '197.39', 'USD', 'NQ907M2', 'HIB', '0.985', 'Jun 2019 - Nov 2019'),
(10, '7282-1074-40', ' 400', 'PCS', 'JL01-8388', '2019-07-05', '394.78', 'USD', 'NQ907M2', 'HIB', '0.985', 'Jun 2019 - Nov 2019'),
(11, '7327-6122', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '461.08', 'USD', 'NQ907M2', 'HIB', '230.5', 'Jun 2019 - Nov 2019'),
(12, '7238-3625', ' 100', 'PCS', 'JL01-8388', '2019-07-05', '23.67', 'USD', 'NQ907M2', 'HIB', '0.23', 'Jun 2019 - Nov 2019'),
(13, '7047-3323-30', ' 2,800', 'PCS', 'JL01-8388', '2019-07-05', '466', 'USD', 'NQ907M2', 'HIB', '233', 'Jun 2019 - Nov 2019'),
(14, '7052-1231-0T', ' 5,000', 'PCS', 'JL01-8388', '2019-07-05', '74.09999999999999', 'USD', 'NQ907M3', 'HIB', '14.8', 'Jun 2019 - Nov 2019'),
(15, '7247-8171-0T', ' 25,000', 'PCS', 'JL01-8388', '2019-07-05', '2096', 'USD', 'NQ907M3', 'HIB', '83.84', 'Jun 2019 - Nov 2019'),
(16, '7039-8770-70', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '727.14', 'USD', 'NQ9071', 'HIB', '363.5', 'Jun 2019 - Nov 2019'),
(17, '7039-8770-70', ' 1,000', 'PCS', 'JL01-8388', '2019-07-05', '363.57', 'USD', 'NQ9072', 'HIB', '363', 'Jun 2019 - Nov 2019'),
(18, '7039-8770-70', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '727.14', 'USD', 'NQ9073', 'HIB', '363.5', 'Jun 2019 - Nov 2019'),
(19, '7039-8770-70', ' 1,000', 'PCS', 'JL01-8388', '2019-07-05', '363.57', 'USD', 'NQ9074', 'HIB', '363', 'Jun 2019 - Nov 2019'),
(20, '7039-8770-70', ' 3,000', 'PCS', 'JL01-8388', '2019-07-05', '1090.71', 'USD', 'NQ9075', 'HIB', '363.3333333333333', 'Jun 2019 - Nov 2019'),
(21, '7035-2666-30', ' 1,800', 'PCS', 'JL01-8388', '2019-07-05', '1446.1', 'USD', 'NQ9075', 'HIB', '1446', 'Jun 2019 - Nov 2019'),
(22, '7183-6096-30', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '104.82', 'USD', 'NQ9075', 'HIB', '52', 'Jun 2019 - Nov 2019'),
(23, '7186-8851-30', ' 3,600', 'PCS', 'JL01-8389', '2019-07-05', '225.97', 'USD', 'NQ9075', 'HIB', '75', 'Jun 2019 - Nov 2019'),
(24, '7154-6334', ' 528', 'PCS', 'JL01-8389', '2019-07-05', '126.57', 'USD', 'NQ908B', 'HIB', '0.2386363636363636', 'Jun 2019 - Nov 2019'),
(25, '7154-6334', ' 528', 'PCS', 'JL01-8388', '2019-07-05', '126.57', 'USD', 'NQ907M1', 'HIB', '0.2386363636363636', 'Jun 2019 - Nov 2019'),
(26, '7171-6026', ' 240', 'PCS', 'JL01-8388', '2019-07-05', '110.48', 'USD', 'NQ907M1', 'HIB', '0.4583333333333333', 'Jun 2019 - Nov 2019'),
(27, '7282-4870', ' 960', 'PCS', 'JL01-8388', '2019-07-05', '385.2', 'USD', 'NQ907M1', 'HIB', '0.4010416666666667', 'Jun 2019 - Nov 2019'),
(28, '7282-4871', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '232.5', 'USD', 'NQ907M1', 'HIB', '116', 'Jun 2019 - Nov 2019'),
(29, '7282-4875', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '252.32', 'USD', 'NQ907M1', 'HIB', '126', 'Jun 2019 - Nov 2019'),
(30, '430CA5031', ' 5,000', 'METER', 'JL01-8388', '2019-07-05', '80.34999999999999', 'USD', 'NQ907M1', 'HIB', '16', 'Jun 2019 - Nov 2019'),
(31, '7090-2970-30', ' 1,300', 'PCS', 'JL01-8388', '2019-07-05', '297.84', 'USD', 'NQ907M1', 'HIB', '297', 'Jun 2019 - Nov 2019'),
(32, '7158-7583-30', ' 800', 'PCS', 'JL01-8388', '2019-07-05', '107.71', 'USD', 'NQ907M2', 'HIB', '0.13375', 'Jun 2019 - Nov 2019'),
(33, '7282-1074-40', ' 200', 'PCS', 'JL01-8388', '2019-07-05', '197.39', 'USD', 'NQ907M2', 'HIB', '0.985', 'Jun 2019 - Nov 2019'),
(34, '7282-1074-40', ' 400', 'PCS', 'JL01-8388', '2019-07-05', '394.78', 'USD', 'NQ907M2', 'HIB', '0.985', 'Jun 2019 - Nov 2019'),
(35, '7327-6122', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '461.08', 'USD', 'NQ907M2', 'HIB', '230.5', 'Jun 2019 - Nov 2019'),
(36, '7238-3625', ' 100', 'PCS', 'JL01-8388', '2019-07-05', '23.67', 'USD', 'NQ907M2', 'HIB', '0.23', 'Jun 2019 - Nov 2019'),
(37, '7047-3323-30', ' 2,800', 'PCS', 'JL01-8388', '2019-07-05', '466', 'USD', 'NQ907M2', 'HIB', '233', 'Jun 2019 - Nov 2019'),
(38, '7052-1231-0T', ' 5,000', 'PCS', 'JL01-8388', '2019-07-05', '74.09999999999999', 'USD', 'NQ907M3', 'HIB', '14.8', 'Jun 2019 - Nov 2019'),
(39, '7247-8171-0T', ' 25,000', 'PCS', 'JL01-8388', '2019-07-05', '2096', 'USD', 'NQ907M3', 'HIB', '83.84', 'Jun 2019 - Nov 2019'),
(40, '7039-8770-70', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '727.14', 'USD', 'NQ9071', 'HIB', '363.5', 'Jun 2019 - Nov 2019'),
(41, '7039-8770-70', ' 1,000', 'PCS', 'JL01-8388', '2019-07-05', '363.57', 'USD', 'NQ9072', 'HIB', '363', 'Jun 2019 - Nov 2019'),
(42, '7039-8770-70', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '727.14', 'USD', 'NQ9073', 'HIB', '363.5', 'Jun 2019 - Nov 2019'),
(43, '7039-8770-70', ' 1,000', 'PCS', 'JL01-8388', '2019-07-05', '363.57', 'USD', 'NQ9074', 'HIB', '363', 'Jun 2019 - Nov 2019'),
(44, '7039-8770-70', ' 3,000', 'PCS', 'JL01-8388', '2019-07-05', '1090.71', 'USD', 'NQ9075', 'HIB', '363.3333333333333', 'Jun 2019 - Nov 2019'),
(45, '7035-2666-30', ' 1,800', 'PCS', 'JL01-8388', '2019-07-05', '1446.1', 'USD', 'NQ9075', 'HIB', '1446', 'Jun 2019 - Nov 2019'),
(46, '7183-6096-30', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '104.82', 'USD', 'NQ9075', 'HIB', '52', 'Jun 2019 - Nov 2019'),
(47, '7186-8851-30', ' 3,600', 'PCS', 'JL01-8389', '2019-07-05', '225.97', 'USD', 'NQ9075', 'HIB', '75', 'Jun 2019 - Nov 2019'),
(48, '7154-6334', ' 528', 'PCS', 'JL01-8389', '2019-07-05', '126.57', 'USD', 'NQ908B', 'HIB', '0.2386363636363636', 'Jun 2019 - Nov 2019'),
(49, '7154-6334', ' 528', 'PCS', 'JL01-8388', '2019-07-05', '126.57', 'USD', 'NQ907M1', 'HIB', '0.2386363636363636', 'Jun 2019 - Nov 2019'),
(50, '7171-6026', ' 240', 'PCS', 'JL01-8388', '2019-07-05', '110.48', 'USD', 'NQ907M1', 'HIB', '0.4583333333333333', 'Jun 2019 - Nov 2019'),
(51, '7282-4870', ' 960', 'PCS', 'JL01-8388', '2019-07-05', '385.2', 'USD', 'NQ907M1', 'HIB', '0.4010416666666667', 'Jun 2019 - Nov 2019'),
(52, '7282-4871', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '232.5', 'USD', 'NQ907M1', 'HIB', '116', 'Jun 2019 - Nov 2019'),
(53, '7282-4875', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '252.32', 'USD', 'NQ907M1', 'HIB', '126', 'Jun 2019 - Nov 2019'),
(54, '430CA5031', ' 5,000', 'METER', 'JL01-8388', '2019-07-05', '80.34999999999999', 'USD', 'NQ907M1', 'HIB', '16', 'Jun 2019 - Nov 2019'),
(55, '7090-2970-30', ' 1,300', 'PCS', 'JL01-8388', '2019-07-05', '297.84', 'USD', 'NQ907M1', 'HIB', '297', 'Jun 2019 - Nov 2019'),
(56, '7158-7583-30', ' 800', 'PCS', 'JL01-8388', '2019-07-05', '107.71', 'USD', 'NQ907M2', 'HIB', '0.13375', 'Jun 2019 - Nov 2019'),
(57, '7282-1074-40', ' 200', 'PCS', 'JL01-8388', '2019-07-05', '197.39', 'USD', 'NQ907M2', 'HIB', '0.985', 'Jun 2019 - Nov 2019'),
(58, '7282-1074-40', ' 400', 'PCS', 'JL01-8388', '2019-07-05', '394.78', 'USD', 'NQ907M2', 'HIB', '0.985', 'Jun 2019 - Nov 2019'),
(59, '7327-6122', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '461.08', 'USD', 'NQ907M2', 'HIB', '230.5', 'Jun 2019 - Nov 2019'),
(60, '7238-3625', ' 100', 'PCS', 'JL01-8388', '2019-07-05', '23.67', 'USD', 'NQ907M2', 'HIB', '0.23', 'Jun 2019 - Nov 2019'),
(61, '7047-3323-30', ' 2,800', 'PCS', 'JL01-8388', '2019-07-05', '466', 'USD', 'NQ907M2', 'HIB', '233', 'Jun 2019 - Nov 2019'),
(62, '7052-1231-0T', ' 5,000', 'PCS', 'JL01-8388', '2019-07-05', '74.09999999999999', 'USD', 'NQ907M3', 'HIB', '14.8', 'Jun 2019 - Nov 2019'),
(63, '7247-8171-0T', ' 25,000', 'PCS', 'JL01-8388', '2019-07-05', '2096', 'USD', 'NQ907M3', 'HIB', '83.84', 'Jun 2019 - Nov 2019'),
(64, '7039-8770-70', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '727.14', 'USD', 'NQ9071', 'HIB', '363.5', 'Jun 2019 - Nov 2019'),
(65, '7039-8770-70', ' 1,000', 'PCS', 'JL01-8388', '2019-07-05', '363.57', 'USD', 'NQ9072', 'HIB', '363', 'Jun 2019 - Nov 2019'),
(66, '7039-8770-70', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '727.14', 'USD', 'NQ9073', 'HIB', '363.5', 'Jun 2019 - Nov 2019'),
(67, '7039-8770-70', ' 1,000', 'PCS', 'JL01-8388', '2019-07-05', '363.57', 'USD', 'NQ9074', 'HIB', '363', 'Jun 2019 - Nov 2019'),
(68, '7039-8770-70', ' 3,000', 'PCS', 'JL01-8388', '2019-07-05', '1090.71', 'USD', 'NQ9075', 'HIB', '363.3333333333333', 'Jun 2019 - Nov 2019'),
(69, '7035-2666-30', ' 1,800', 'PCS', 'JL01-8388', '2019-07-05', '1446.1', 'USD', 'NQ9075', 'HIB', '1446', 'Jun 2019 - Nov 2019'),
(70, '7183-6096-30', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '104.82', 'USD', 'NQ9075', 'HIB', '52', 'Jun 2019 - Nov 2019'),
(71, '7186-8851-30', ' 3,600', 'PCS', 'JL01-8388', '2019-07-05', '225.97', 'USD', 'NQ9075', 'HIB', '75', 'Jun 2019 - Nov 2019'),
(72, '7154-6334', ' 528', 'PCS', 'JL01-8388', '2019-07-05', '126.57', 'USD', 'NQ908B', 'HIB', '0.2386363636363636', 'Jun 2019 - Nov 2019'),
(73, '7154-6334', ' 528', 'PCS', 'JL01-8388', '2019-07-05', '126.57', 'USD', 'NQ907M1', 'HIB', '0.2386363636363636', 'Jun 2019 - Nov 2019'),
(74, '7171-6026', ' 240', 'PCS', 'JL01-8388', '2019-07-05', '110.48', 'USD', 'NQ907M1', 'HIB', '0.4583333333333333', 'Jun 2019 - Nov 2019'),
(75, '7282-4870', ' 960', 'PCS', 'JL01-8388', '2019-07-05', '385.2', 'USD', 'NQ907M1', 'HIB', '0.4010416666666667', 'Jun 2019 - Nov 2019'),
(76, '7282-4871', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '232.5', 'USD', 'NQ907M1', 'HIB', '116', 'Jun 2019 - Nov 2019'),
(77, '7282-4875', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '252.32', 'USD', 'NQ907M1', 'HIB', '126', 'Jun 2019 - Nov 2019'),
(78, '430CA5031', ' 5,000', 'METER', 'JL01-8388', '2019-07-05', '80.34999999999999', 'USD', 'NQ907M1', 'HIB', '16', 'Jun 2019 - Nov 2019'),
(79, '7090-2970-30', ' 1,300', 'PCS', 'JL01-8388', '2019-07-05', '297.84', 'USD', 'NQ907M1', 'HIB', '297', 'Jun 2019 - Nov 2019'),
(80, '7158-7583-30', ' 800', 'PCS', 'JL01-8388', '2019-07-05', '107.71', 'USD', 'NQ907M2', 'HIB', '0.13375', 'Jun 2019 - Nov 2019'),
(81, '7282-1074-40', ' 200', 'PCS', 'JL01-8388', '2019-07-05', '197.39', 'USD', 'NQ907M2', 'HIB', '0.985', 'Jun 2019 - Nov 2019'),
(82, '7282-1074-40', ' 400', 'PCS', 'JL01-8388', '2019-07-05', '394.78', 'USD', 'NQ907M2', 'HIB', '0.985', 'Jun 2019 - Nov 2019'),
(83, '7327-6122', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '461.08', 'USD', 'NQ907M2', 'HIB', '230.5', 'Jun 2019 - Nov 2019'),
(84, '7238-3625', ' 100', 'PCS', 'JL01-8388', '2019-07-05', '23.67', 'USD', 'NQ907M2', 'HIB', '0.23', 'Jun 2019 - Nov 2019'),
(85, '7047-3323-30', ' 2,800', 'PCS', 'JL01-8388', '2019-07-05', '466', 'USD', 'NQ907M2', 'HIB', '233', 'Jun 2019 - Nov 2019'),
(86, '7052-1231-0T', ' 5,000', 'PCS', 'JL01-8388', '2019-07-05', '74.09999999999999', 'USD', 'NQ907M3', 'HIB', '14.8', 'Jun 2019 - Nov 2019'),
(87, '7247-8171-0T', ' 25,000', 'PCS', 'JL01-8388', '2019-07-05', '2096', 'USD', 'NQ907M3', 'HIB', '83.84', 'Jun 2019 - Nov 2019'),
(88, '7039-8770-70', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '727.14', 'USD', 'NQ9071', 'HIB', '363.5', 'Jun 2019 - Nov 2019'),
(89, '7039-8770-70', ' 1,000', 'PCS', 'JL01-8388', '2019-07-05', '363.57', 'USD', 'NQ9072', 'HIB', '363', 'Jun 2019 - Nov 2019'),
(90, '7039-8770-70', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '727.14', 'USD', 'NQ9073', 'HIB', '363.5', 'Jun 2019 - Nov 2019'),
(91, '7039-8770-70', ' 1,000', 'PCS', 'JL01-8388', '2019-07-05', '363.57', 'USD', 'NQ9074', 'HIB', '363', 'Jun 2019 - Nov 2019'),
(92, '7039-8770-70', ' 3,000', 'PCS', 'JL01-8388', '2019-07-05', '1090.71', 'USD', 'NQ9075', 'HIB', '363.3333333333333', 'Jun 2019 - Nov 2019'),
(93, '7035-2666-30', ' 1,800', 'PCS', 'JL01-8388', '2019-07-05', '1446.1', 'USD', 'NQ9075', 'HIB', '1446', 'Jun 2019 - Nov 2019'),
(94, '7183-6096-30', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '104.82', 'USD', 'NQ9075', 'HIB', '52', 'Jun 2019 - Nov 2019'),
(95, '7186-8851-30', ' 3,600', 'PCS', 'JL01-8388', '2019-07-05', '225.97', 'USD', 'NQ9075', 'HIB', '75', 'Jun 2019 - Nov 2019'),
(96, '7154-6334', ' 528', 'PCS', 'JL01-8388', '2019-07-05', '126.57', 'USD', 'NQ908B', 'HIB', '0.2386363636363636', 'Jun 2019 - Nov 2019'),
(97, '7154-6334', ' 528', 'PCS', 'JL01-8388', '2019-07-05', '126.57', 'USD', 'NQ907M1', 'HIB', '0.2386363636363636', 'Jun 2019 - Nov 2019'),
(98, '7171-6026', ' 240', 'PCS', 'JL01-8388', '2019-07-05', '110.48', 'USD', 'NQ907M1', 'HIB', '0.4583333333333333', 'Jun 2019 - Nov 2019'),
(99, '7282-4870', ' 960', 'PCS', 'JL01-8388', '2019-07-05', '385.2', 'USD', 'NQ907M1', 'HIB', '0.4010416666666667', 'Jun 2019 - Nov 2019'),
(100, '7282-4871', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '232.5', 'USD', 'NQ907M1', 'HIB', '116', 'Jun 2019 - Nov 2019'),
(101, '7282-4875', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '252.32', 'USD', 'NQ907M1', 'HIB', '126', 'Jun 2019 - Nov 2019'),
(102, '430CA5031', ' 5,000', 'METER', 'JL01-8388', '2019-07-05', '80.34999999999999', 'USD', 'NQ907M1', 'HIB', '16', 'Jun 2019 - Nov 2019'),
(103, '7090-2970-30', ' 1,300', 'PCS', 'JL01-8388', '2019-07-05', '297.84', 'USD', 'NQ907M1', 'HIB', '297', 'Jun 2019 - Nov 2019'),
(104, '7158-7583-30', ' 800', 'PCS', 'JL01-8388', '2019-07-05', '107.71', 'USD', 'NQ907M2', 'HIB', '0.13375', 'Jun 2019 - Nov 2019'),
(105, '7282-1074-40', ' 200', 'PCS', 'JL01-8388', '2019-07-05', '197.39', 'USD', 'NQ907M2', 'HIB', '0.985', 'Jun 2019 - Nov 2019'),
(106, '7282-1074-40', ' 400', 'PCS', 'JL01-8388', '2019-07-05', '394.78', 'USD', 'NQ907M2', 'HIB', '0.985', 'Jun 2019 - Nov 2019'),
(107, '7327-6122', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '461.08', 'USD', 'NQ907M2', 'HIB', '230.5', 'Jun 2019 - Nov 2019'),
(108, '7238-3625', ' 100', 'PCS', 'JL01-8388', '2019-07-05', '23.67', 'USD', 'NQ907M2', 'HIB', '0.23', 'Jun 2019 - Nov 2019'),
(109, '7047-3323-30', ' 2,800', 'PCS', 'JL01-8388', '2019-07-05', '466', 'USD', 'NQ907M2', 'HIB', '233', 'Jun 2019 - Nov 2019'),
(110, '7052-1231-0T', ' 5,000', 'PCS', 'JL01-8388', '2019-07-05', '74.09999999999999', 'USD', 'NQ907M3', 'HIB', '14.8', 'Jun 2019 - Nov 2019'),
(111, '7247-8171-0T', ' 25,000', 'PCS', 'JL01-8388', '2019-07-05', '2096', 'USD', 'NQ907M3', 'HIB', '83.84', 'Jun 2019 - Nov 2019'),
(112, '7039-8770-70', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '727.14', 'USD', 'NQ9071', 'HIB', '363.5', 'Jun 2019 - Nov 2019'),
(113, '7039-8770-70', ' 1,000', 'PCS', 'JL01-8388', '2019-07-05', '363.57', 'USD', 'NQ9072', 'HIB', '363', 'Jun 2019 - Nov 2019'),
(114, '7039-8770-70', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '727.14', 'USD', 'NQ9073', 'HIB', '363.5', 'Jun 2019 - Nov 2019'),
(115, '7039-8770-70', ' 1,000', 'PCS', 'JL01-8388', '2019-07-05', '363.57', 'USD', 'NQ9074', 'HIB', '363', 'Jun 2019 - Nov 2019'),
(116, '7039-8770-70', ' 3,000', 'PCS', 'JL01-8388', '2019-07-05', '1090.71', 'USD', 'NQ9075', 'HIB', '363.3333333333333', 'Jun 2019 - Nov 2019'),
(117, '7035-2666-30', ' 1,800', 'PCS', 'JL01-8388', '2019-07-05', '1446.1', 'USD', 'NQ9075', 'HIB', '1446', 'Jun 2019 - Nov 2019'),
(118, '7183-6096-30', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '104.82', 'USD', 'NQ9075', 'HIB', '52', 'Jun 2019 - Nov 2019'),
(119, '7186-8851-30', ' 3,600', 'PCS', 'JL01-8388', '2019-07-05', '225.97', 'USD', 'NQ9075', 'HIB', '75', 'Jun 2019 - Nov 2019'),
(120, '7154-6334', ' 528', 'PCS', 'JL01-8388', '2019-07-05', '126.57', 'USD', 'NQ908B', 'HIB', '0.2386363636363636', 'Jun 2019 - Nov 2019'),
(121, '7154-6334', ' 528', 'PCS', 'JL01-8388', '2019-07-05', '126.57', 'USD', 'NQ907M1', 'HIB', '0.2386363636363636', 'Jun 2019 - Nov 2019'),
(122, '7171-6026', ' 240', 'PCS', 'JL01-8388', '2019-07-05', '110.48', 'USD', 'NQ907M1', 'HIB', '0.4583333333333333', 'Jun 2019 - Nov 2019'),
(123, '7282-4870', ' 960', 'PCS', 'JL01-8388', '2019-07-05', '385.2', 'USD', 'NQ907M1', 'HIB', '0.4010416666666667', 'Jun 2019 - Nov 2019'),
(124, '7282-4871', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '232.5', 'USD', 'NQ907M1', 'HIB', '116', 'Jun 2019 - Nov 2019'),
(125, '7282-4875', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '252.32', 'USD', 'NQ907M1', 'HIB', '126', 'Jun 2019 - Nov 2019'),
(126, '430CA5031', ' 5,000', 'METER', 'JL01-8388', '2019-07-05', '80.34999999999999', 'USD', 'NQ907M1', 'HIB', '16', 'Jun 2019 - Nov 2019'),
(127, '7090-2970-30', ' 1,300', 'PCS', 'JL01-8388', '2019-07-05', '297.84', 'USD', 'NQ907M1', 'HIB', '297', 'Jun 2019 - Nov 2019'),
(128, '7158-7583-30', ' 800', 'PCS', 'JL01-8388', '2019-07-05', '107.71', 'USD', 'NQ907M2', 'HIB', '0.13375', 'Jun 2019 - Nov 2019'),
(129, '7282-1074-40', ' 200', 'PCS', 'JL01-8388', '2019-07-05', '197.39', 'USD', 'NQ907M2', 'HIB', '0.985', 'Jun 2019 - Nov 2019'),
(130, '7282-1074-40', ' 400', 'PCS', 'JL01-8388', '2019-07-05', '394.78', 'USD', 'NQ907M2', 'HIB', '0.985', 'Jun 2019 - Nov 2019'),
(131, '7327-6122', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '461.08', 'USD', 'NQ907M2', 'HIB', '230.5', 'Jun 2019 - Nov 2019'),
(132, '7238-3625', ' 100', 'PCS', 'JL01-8388', '2019-07-05', '23.67', 'USD', 'NQ907M2', 'HIB', '0.23', 'Jun 2019 - Nov 2019'),
(133, '7047-3323-30', ' 2,800', 'PCS', 'JL01-8388', '2019-07-05', '466', 'USD', 'NQ907M2', 'HIB', '233', 'Jun 2019 - Nov 2019'),
(134, '7052-1231-0T', ' 5,000', 'PCS', 'JL01-8388', '2019-07-05', '74.09999999999999', 'USD', 'NQ907M3', 'HIB', '14.8', 'Jun 2019 - Nov 2019'),
(135, '7247-8171-0T', ' 25,000', 'PCS', 'JL01-8388', '2019-07-05', '2096', 'USD', 'NQ907M3', 'HIB', '83.84', 'Jun 2019 - Nov 2019'),
(136, '7039-8770-70', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '727.14', 'USD', 'NQ9071', 'HIB', '363.5', 'Jun 2019 - Nov 2019'),
(137, '7039-8770-70', ' 1,000', 'PCS', 'JL01-8388', '2019-07-05', '363.57', 'USD', 'NQ9072', 'HIB', '363', 'Jun 2019 - Nov 2019'),
(138, '7039-8770-70', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '727.14', 'USD', 'NQ9073', 'HIB', '363.5', 'Jun 2019 - Nov 2019'),
(139, '7039-8770-70', ' 1,000', 'PCS', 'JL01-8388', '2019-07-05', '363.57', 'USD', 'NQ9074', 'HIB', '363', 'Jun 2019 - Nov 2019'),
(140, '7039-8770-70', ' 3,000', 'PCS', 'JL01-8388', '2019-07-05', '1090.71', 'USD', 'NQ9075', 'HIB', '363.3333333333333', 'Jun 2019 - Nov 2019'),
(141, '7035-2666-30', ' 1,800', 'PCS', 'JL01-8388', '2019-07-05', '1446.1', 'USD', 'NQ9075', 'HIB', '1446', 'Jun 2019 - Nov 2019'),
(142, '7183-6096-30', ' 2,000', 'PCS', 'JL01-8388', '2019-07-05', '104.82', 'USD', 'NQ9075', 'HIB', '52', 'Jun 2019 - Nov 2019'),
(143, '7186-8851-30', ' 3,600', 'PCS', 'JL01-8388', '2019-07-05', '225.97', 'USD', 'NQ9075', 'HIB', '75', 'Jun 2019 - Nov 2019'),
(144, '7154-6334', ' 528', 'PCS', 'JL01-8388', '2019-07-05', '126.57', 'USD', 'NQ908B', 'HIB', '0.2386363636363636', 'Jun 2019 - Nov 2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penawaran`
--

CREATE TABLE `data_penawaran` (
  `id_penawaran` int(100) NOT NULL,
  `GCT_COMP_NO` varchar(100) NOT NULL,
  `OW_ID` varchar(100) NOT NULL,
  `PRICE_ID` varchar(100) NOT NULL,
  `PriceIdDesc` varchar(100) NOT NULL,
  `EFFECT_DT` varchar(100) NOT NULL,
  `EXPIRE_DT` varchar(100) NOT NULL,
  `TENTATIVE_FL` varchar(100) NOT NULL,
  `CLASS_CD` varchar(100) NOT NULL,
  `FIS_PRICE` varchar(100) NOT NULL,
  `FIS_CRCY` varchar(100) NOT NULL,
  `BASE_PRICE` varchar(100) NOT NULL,
  `BASE_CRCY` varchar(100) NOT NULL,
  `BASE_UOM` varchar(100) NOT NULL,
  `SHT_NO` varchar(100) NOT NULL,
  `SPPLY_ID` varchar(100) NOT NULL,
  `SPPLY_NM` varchar(100) NOT NULL,
  `CNTRY_CD` varchar(100) NOT NULL,
  `INCO` varchar(100) NOT NULL,
  `DUTY_FL` varchar(100) NOT NULL,
  `CU_BASE_QUOTE` varchar(100) NOT NULL,
  `CU_BASE_UOM` varchar(100) NOT NULL,
  `CU_BASE_CRCY` varchar(100) NOT NULL,
  `TOOL_COST_FL` varchar(100) NOT NULL,
  `ONLY_TEST_FL` varchar(100) NOT NULL,
  `MARK1` varchar(100) NOT NULL,
  `MARK2` varchar(100) NOT NULL,
  `MARK3` varchar(100) NOT NULL,
  `NOTE` varchar(100) NOT NULL,
  `PERIOD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penawaran`
--

INSERT INTO `data_penawaran` (`id_penawaran`, `GCT_COMP_NO`, `OW_ID`, `PRICE_ID`, `PriceIdDesc`, `EFFECT_DT`, `EXPIRE_DT`, `TENTATIVE_FL`, `CLASS_CD`, `FIS_PRICE`, `FIS_CRCY`, `BASE_PRICE`, `BASE_CRCY`, `BASE_UOM`, `SHT_NO`, `SPPLY_ID`, `SPPLY_NM`, `CNTRY_CD`, `INCO`, `DUTY_FL`, `CU_BASE_QUOTE`, `CU_BASE_UOM`, `CU_BASE_CRCY`, `TOOL_COST_FL`, `ONLY_TEST_FL`, `MARK1`, `MARK2`, `MARK3`, `NOTE`, `PERIOD`) VALUES
(1, '7189-8974-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/16', '9999/12/31', 'F', '400', '0.0531', 'USD', '0.0528', 'USD', 'E', '281119', '1144', 'HIB', 'JPN', 'CIF&I', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(2, '7189-8974-90', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/12/04', '9999/12/31', 'F', '400', '0.0531', 'USD', '0.0528', 'USD', 'E', '312913', '1144', 'ARROW ELECTRONICS AS', 'JPN', 'CIF&I', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(3, '7189-9116-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '400', '0.0823', 'USD', '0.0800', 'USD', 'E', '287999', '13021', 'YGP', 'SGP', 'CIF&I', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(4, '7194-3003-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '114', '0.0270', 'USD', '0.0270', 'USD', 'E', '272436', '9313', 'HELLERMANN TYTON', 'THA', 'DAP', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(5, '7194-3042-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/16', '9999/12/31', 'F', '114', '0.1010', 'USD', '0.1010', 'USD', 'E', '270462', '9313', 'FMTH', 'THA', 'DAP', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(6, '7194-3051-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '114', '0.1741', 'USD', '0.1740', 'USD', 'E', '272464', '9313', 'FMTH', 'THA', 'DAP', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(7, '7194-3107-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '114', '0.0560', 'USD', '0.0560', 'USD', 'E', '272882', '9313', 'FMTH', 'THA', 'DAP', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(8, '7194-3323-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2019/01/08', '9999/12/31', 'F', '114', '0.0270', 'USD', '0.0270', 'USD', 'E', '306198', '9313', 'FMTH', 'THA', 'DAP', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(9, '7194-3324-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '114', '0.0330', 'USD', '0.0330', 'USD', 'E', '305986', '9313', 'FMTH', 'THA', 'DAP', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(10, '7194-3328-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '114', '0.0480', 'USD', '0.0480', 'USD', 'E', '306655', '9313', 'FMTH', 'THA', 'DAP', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(11, '7173-0417-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/16', '9999/12/31', 'F', '400', '0.3034', 'USD', '0.3017', 'USD', 'E', '227674', '1144', 'HIB', 'JPN', 'CIF&I', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Jun 2019 - Nov 2019'),
(12, '7173-1696-10', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/16', '9999/12/31', 'F', '440', '0.1795', 'USD', '0.1785', 'USD', 'E', '135974', '1144', 'HIB', 'JPN', 'CIF&I', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Jun 2019 - Nov 2019'),
(13, '7173-1915', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '940', '1.1635', 'USD', '1.1310', 'USD', 'E', '154306', '13021', 'YGP', 'SGP', 'CIF&I', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Jun 2019 - Nov 2019'),
(14, '7173-1916', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '940', '0.2243', 'USD', '0.2180', 'USD', 'E', '154305', '13021', 'YGP', 'SGP', 'CIF&I', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Jun 2019 - Nov 2019'),
(15, '7173-1919', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '604', '0.0472', 'USD', '0.0472', 'USD', 'E', '141911', '7803', 'PASI', 'IDN', 'DAP', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Jun 2019 - Nov 2019'),
(16, '7173-2328', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/14', '9999/12/31', 'F', '531', '0.7361', 'USD', '0.7087', 'USD', 'E', '174092', '9001', 'DAT', 'THA', 'CIF&I', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Jun 2019 - Nov 2019'),
(17, '7173-2329', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/14', '9999/12/31', 'F', '500', '0.1616', 'USD', '0.1556', 'USD', 'E', '174660', '9001', 'DAT', 'THA', 'CIF&I', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Jun 2019 - Nov 2019'),
(18, '7173-2330', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/14', '9999/12/31', 'F', '531', '0.7361', 'USD', '0.7087', 'USD', 'E', '174091', '9001', 'DAT', 'THA', 'CIF&I', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Jun 2019 - Nov 2019'),
(19, '7173-2331', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/14', '9999/12/31', 'F', '500', '0.1616', 'USD', '0.1556', 'USD', 'E', '174661', '9001', 'DAT', 'THA', 'CIF&I', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(20, '7173-2373-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/16', '9999/12/31', 'F', '440', '0.0819', 'USD', '0.0814', 'USD', 'E', '175906', '1144', 'HIB', 'JPN', 'CIF&I', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(21, '7173-2374-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/16', '9999/12/31', 'F', '440', '0.0726', 'USD', '0.0722', 'USD', 'E', '175907', '1144', 'HIB', 'JPN', 'CIF&I', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(22, '7173-2464-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '500', '0.3408', 'USD', '0.3408', 'USD', 'E', '183464', '7803', 'PASI', 'IDN', 'DAP', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(23, '7173-0417-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '604', '0.0582', 'USD', '0.0582', 'USD', 'E', '194204', '7803', 'PASI', 'IDN', 'DAP', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(24, '7173-2773-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '500', '0.6277', 'USD', '0.6277', 'USD', 'E', '206056', '7803', 'PASI', 'IDN', 'DAP', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(25, '7173-0417-31', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '396', '0.11972', 'USD', '0.11972', 'USD', 'E', '217908', '7803', 'PASI', 'IDN', 'DAP', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
(26, '7173-2783-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '292', '0.17667', 'USD', '0.17667', 'USD', 'E', '229760', '7803', 'PASI', 'IDN', 'DAP', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Jun 2019 - Nov 2019'),
(27, '7173-0417-52', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '188', '0.23362', 'USD', '0.23362', 'USD', 'E', '241612', '7803', 'PASI', 'IDN', 'DAP', '1', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Jun 2019 - Nov 2019'),
(28, '7173-2948-40', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/16', '9999/12/32', 'F', '189', '0.23363', 'USD', '0.23363', 'USD', 'E', '241612', '7803', 'HIB', 'IDN', 'DAP', '2', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Jun 2019 - Nov 2019'),
(29, '7173-0384-30', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/17', '9999/12/33', 'F', '190', '0.23364', 'USD', '0.23364', 'USD', 'E', '241612', '7803', 'HIB', 'IDN', 'DAP', '3', '', '', '', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sup_gct`
--

CREATE TABLE `sup_gct` (
  `id_supgct` int(20) NOT NULL,
  `nama_subgct` varchar(100) NOT NULL,
  `ganti_gct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sup_gct`
--

INSERT INTO `sup_gct` (`id_supgct`, `nama_subgct`, `ganti_gct`) VALUES
(1, 'Daiwa Kasei (Thailand) Co. Ltd', 'DAT'),
(2, 'Elcom', 'COMBU-E'),
(3, 'Federal Mogul (Thailand) Ltd.', 'FMTH'),
(4, 'Hellermann Tyton', 'HELLERMANN TYTON'),
(5, 'HZY', 'HZY'),
(6, 'Molex Singapore', 'ARROW ELECTRONICS AS'),
(7, 'PASI', 'PASI'),
(8, 'PEMI', 'PEMI-AW'),
(9, 'PT INDOWIRE PRIMA INDUSTRINDO', 'PT. INDOWIRE PRIMA'),
(10, 'PT Nitto Materials Indonesia', 'PT. NMI'),
(11, 'SAMI', 'SAMI'),
(12, 'Sugity PT.SUGITY CREATEIVES', 'SUGITY'),
(13, 'TAP', 'TAP'),
(14, 'TBD Supplier', 'J/A'),
(15, 'Tesa Tape Asia Pacific Pte Ltd', 'TESA'),
(16, 'YAZAKI (CHINA) INVESTMENT CORPORATION', 'YCIC'),
(17, 'YC Purchasing', 'HIB'),
(18, 'YEL-BL', 'YEL-BL'),
(19, 'YGP PTE. LTD.', 'YGP'),
(20, 'YZK AMERICAS', 'YNA'),
(21, 'Daiwa Kasei (Thailand) Co. Ltd', 'DAT'),
(22, 'Elcom', 'COMBU-E'),
(23, 'Federal Mogul (Thailand) Ltd.', 'FMTH'),
(24, 'Hellermann Tyton', 'HELLERMANN TYTON'),
(25, 'HZY', 'HZY'),
(26, 'Molex Singapore', 'ARROW ELECTRONICS AS'),
(27, 'PASI', 'PASI'),
(28, 'PEMI', 'PEMI-AW'),
(29, 'PT INDOWIRE PRIMA INDUSTRINDO', 'PT. INDOWIRE PRIMA'),
(30, 'PT Nitto Materials Indonesia', 'PT. NMI'),
(31, 'SAMI', 'SAMI'),
(32, 'Sugity PT.SUGITY CREATEIVES', 'SUGITY'),
(33, 'TAP', 'TAP'),
(34, 'TBD Supplier', 'J/A'),
(35, 'Tesa Tape Asia Pacific Pte Ltd', 'TESA'),
(36, 'YAZAKI (CHINA) INVESTMENT CORPORATION', 'YCIC'),
(37, 'YC Purchasing', 'HIB'),
(38, 'YEL-BL', 'YEL-BL'),
(39, 'YGP PTE. LTD.', 'YGP'),
(40, 'YZK AMERICAS', 'YNA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sup_sai`
--

CREATE TABLE `sup_sai` (
  `id_supsai` int(20) NOT NULL,
  `nama_supsai` varchar(100) NOT NULL,
  `ganti_sai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sup_sai`
--

INSERT INTO `sup_sai` (`id_supsai`, `nama_supsai`, `ganti_sai`) VALUES
(1, 'DAT', 'DAT'),
(2, 'COMBU-E', 'COMBU-E'),
(3, 'FMTH', 'FMTH'),
(4, 'HELLERMANN TYTON', 'HELLERMANN TYTON'),
(5, 'HZY', 'HZY'),
(6, 'ARROW ELECTRONICS AS', 'ARROW ELECTRONICS AS'),
(7, 'IRC INOAC', 'PASI'),
(8, 'NIDEC', 'PASI'),
(9, 'NIFCO', 'PASI'),
(10, 'PLASSES', 'PASI'),
(11, 'PT. CATURINDO AGUNG', 'PASI'),
(12, 'PT. INDONESIA KYOUEI', 'PASI'),
(13, 'PT. KMK PLASTICS IND', 'PASI'),
(14, 'PT. KOJIMA INDONESIA', 'PASI'),
(15, 'PT. NANBU PLASTICS I', 'PASI'),
(16, 'PT. OGATA INDONESIA', 'PASI'),
(17, 'PT. PIOLAX INDONESIA', 'PASI'),
(18, 'PT. SATO SEIKI', 'PASI'),
(19, 'PT. TENMA INDONESIA', 'PASI'),
(20, 'SCHLEMMER', 'PASI'),
(21, 'TOKAI RIKA JP', 'PASI'),
(22, 'YAMANASHI INDONESIA', 'PASI'),
(23, 'PEMI-AW', 'PEMI-AW'),
(24, 'PT. INDOWIRE PRIMA', 'PT. INDOWIRE PRIMA'),
(25, 'PT. NMI', 'PT. NMI'),
(26, 'SAMI', 'SAMI'),
(27, 'SUGITY', 'SUGITY'),
(28, 'TAP-AW', 'TAP'),
(29, 'TAP-INJ', 'TAP'),
(30, 'TAP-VT', 'TAP'),
(31, 'J/A', 'J/A'),
(32, 'TESA', 'TESA'),
(33, 'YCIC', 'YCIC'),
(34, 'HIB', 'HIB'),
(35, 'YEL-BL', 'YEL-BL'),
(36, 'YGP', 'YGP'),
(37, 'YNA', 'YNA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(2, 'Dinarpratnya', 'Dinarpratnya12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2'),
(3, 'meli', 'meli@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2'),
(4, 'Dinarpratnya Ningrum', 'cantik@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_invoice`
--
ALTER TABLE `data_invoice`
  ADD PRIMARY KEY (`id_`);

--
-- Indeks untuk tabel `data_penawaran`
--
ALTER TABLE `data_penawaran`
  ADD PRIMARY KEY (`id_penawaran`);

--
-- Indeks untuk tabel `sup_gct`
--
ALTER TABLE `sup_gct`
  ADD PRIMARY KEY (`id_supgct`);

--
-- Indeks untuk tabel `sup_sai`
--
ALTER TABLE `sup_sai`
  ADD PRIMARY KEY (`id_supsai`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_invoice`
--
ALTER TABLE `data_invoice`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT untuk tabel `data_penawaran`
--
ALTER TABLE `data_penawaran`
  MODIFY `id_penawaran` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `sup_gct`
--
ALTER TABLE `sup_gct`
  MODIFY `id_supgct` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `sup_sai`
--
ALTER TABLE `sup_sai`
  MODIFY `id_supsai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
