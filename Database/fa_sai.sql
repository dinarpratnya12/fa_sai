-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 06 Agu 2019 pada 03.57
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
(177, '7154-6334', ' 528', 'PCS', 'JL01-8388', '2019-07-05', '126.57', 'USD', 'NQ907M1', 'HIB', '0.2397159090909091', 'Jun 2019 - Nov 2019'),
(178, '7171-6026', ' 240', 'PCS', 'JL01-8388', '2019-07-05', '110.48', 'USD', 'NQ907M1', 'HIB', '0.4603333333333334', 'Jun 2019 - Nov 2019'),
(179, '7282-4870', ' 960', 'PCS', 'JL01-8388', '2019-07-05', '385.2', 'USD', 'NQ907M1', 'HIB', '0.40125', 'Jun 2019 - Nov 2019'),
(180, '7282-4871', ' 2000', 'PCS', 'JL01-8388', '2019-07-05', '232.5', 'USD', 'NQ907M1', 'HIB', '0.11625', 'Jun 2019 - Nov 2019'),
(181, '7282-4875', ' 2000', 'PCS', 'JL01-8388', '2019-07-05', '252.32', 'USD', 'NQ907M1', 'HIB', '0.12616', 'Jun 2019 - Nov 2019'),
(182, '430CA5031', ' 5000', 'METER', 'JL01-8388', '2019-07-05', '80.34999999999999', 'USD', 'NQ907M1', 'PASI', '0.01607', 'Jun 2019 - Nov 2019'),
(183, '7090-2970-30', ' 1300', 'PCS', 'JL01-8388', '2019-07-05', '297.84', 'USD', 'NQ907M1', 'HIB', '0.2291076923076923', 'Jun 2019 - Nov 2019'),
(184, '7158-7583-30', ' 800', 'PCS', 'JL01-8388', '2019-07-05', '107.71', 'USD', 'NQ907M2', 'DAT', '0.1346375', 'Jun 2019 - Nov 2019'),
(185, '7282-1074-40', ' 200', 'PCS', 'JL01-8388', '2019-07-05', '197.39', 'USD', 'NQ907M2', 'HIB', '0.9869499999999999', 'Jun 2019 - Nov 2019'),
(186, '7282-1074-40', ' 400', 'PCS', 'JL01-8388', '2019-07-05', '394.78', 'USD', 'NQ907M2', 'HIB', '0.9869499999999999', 'Jun 2019 - Nov 2019'),
(187, '7327-6122', ' 2000', 'PCS', 'JL01-8388', '2019-07-05', '461.08', 'USD', 'NQ907M2', 'PASI', '0.23054', 'Jun 2019 - Nov 2019'),
(188, '7238-3625', ' 100', 'PCS', 'JL01-8388', '2019-07-05', '23.67', 'USD', 'NQ907M2', 'HIB', '0.2367', 'Jun 2019 - Nov 2019'),
(189, '7047-3323-30', ' 2800', 'PCS', 'JL01-8388', '2019-07-05', '466', 'USD', 'NQ907M2', 'HIB', '0.1664285714285714', 'Jun 2019 - Nov 2019'),
(190, '7052-1231-0T', ' 5000', 'PCS', 'JL01-8388', '2019-07-05', '74.09999999999999', 'USD', 'NQ907M3', 'HIB', '0.01482', 'Jun 2019 - Nov 2019'),
(191, '7247-8171-0T', ' 25000', 'PCS', 'JL01-8388', '2019-07-05', '2096', 'USD', 'NQ907M3', 'TAP', '0.08384', 'Jun 2019 - Nov 2019'),
(192, '7039-8770-70', ' 2000', 'PCS', 'JL01-8388', '2019-07-05', '727.14', 'USD', 'NQ9071', 'TAP', '0.36357', 'Jun 2019 - Nov 2019'),
(193, '7039-8770-70', ' 1000', 'PCS', 'JL01-8388', '2019-07-05', '363.57', 'USD', 'NQ9072', 'HIB', '0.36357', 'Jun 2019 - Nov 2019'),
(194, '7039-8770-70', ' 2000', 'PCS', 'JL01-8388', '2019-07-05', '727.14', 'USD', 'NQ9073', 'HIB', '0.36357', 'Jun 2019 - Nov 2019'),
(195, '7039-8770-70', ' 1000', 'PCS', 'JL01-8388', '2019-07-05', '363.57', 'USD', 'NQ9074', 'HIB', '0.36357', 'Jun 2019 - Nov 2019'),
(196, '7039-8770-70', ' 3000', 'PCS', 'JL01-8388', '2019-07-05', '1090.71', 'USD', 'NQ9075', 'TAP', '0.36357', 'Jun 2019 - Nov 2019'),
(197, '7035-2666-30', ' 1800', 'PCS', 'JL01-8388', '2019-07-05', '1446.1', 'USD', 'NQ9075', 'HIB', '0.8033888888888888', 'Jun 2019 - Nov 2019'),
(198, '7183-6096-30', ' 2000', 'PCS', 'JL01-8388', '2019-07-05', '104.82', 'USD', 'NQ9075', 'HIB', '0.05241', 'Jun 2019 - Nov 2019'),
(199, '7186-8851-30', ' 3600', 'PCS', 'JL01-8389', '2019-07-05', '225.97', 'USD', 'NQ9075', 'HIB', '0.06276944444444445', 'Jun 2019 - Nov 2019'),
(200, '7154-6334', ' 528', 'PCS', 'JL01-8389', '2019-01-05', '126.57', 'USD', 'NQ908B', 'PASI', '0.2397159090909091', 'Dec 2018 - May 2019'),
(201, '7183-6096-31', ' 2000', 'PCS', 'JL01-8389', '2019-02-15', '104.82', 'USD', 'NQ908B', 'PASI', '0.05241', 'Dec 2018 - May 2019'),
(202, '7186-8851-31', ' 2000', 'PCS', 'JL01-8389', '2019-08-01', '225.97', 'USD', 'NQ908B', 'PASI', '0.112985', 'Jun 2019 - Nov 2019'),
(203, '7154-6335', ' 5000', 'PCS', 'JL01-8389', '2019-01-05', '347.12', 'USD', 'NQ908B', 'PASI', '0.069424', 'Dec 2018 - May 2019'),
(204, '7183-6096-32', ' 1300', 'PCS', 'JL01-8389', '2019-02-15', '23.67', 'USD', 'NQ908B', 'HZY', '0.01820769230769231', 'Dec 2018 - May 2019'),
(205, '7186-8851-32', ' 800', 'PCS', 'JL01-8389', '2019-03-25', '466', 'USD', 'NQ908B', 'ARROW ELECTRONICS AS', '0.5825', 'Dec 2018 - May 2019'),
(206, '7154-6336', ' 200', 'PCS', 'JL01-8389', '2019-07-25', '908.33', 'USD', 'NQ908B', 'PASI', '4.541650000000001', 'Jun 2019 - Nov 2019'),
(207, '7183-6096-33', ' 200', 'PCS', 'JL01-8389', '2019-04-08', '1350.66', 'USD', 'NQ908B', 'HZY', '6.7533', 'Dec 2018 - May 2019'),
(208, '7186-8851-33', ' 2000', 'PCS', 'JL01-8389', '2019-04-05', '1792.99', 'USD', 'NQ908B', 'ARROW ELECTRONICS AS', '0.896495', 'Dec 2018 - May 2019'),
(209, '7154-6337', ' 100', 'PCS', 'JL01-8389', '2019-04-02', '908.33', 'USD', 'NQ908B', 'PASI', '9.083300000000001', 'Dec 2018 - May 2019'),
(210, '7183-6096-34', ' 2800', 'PCS', 'JL01-8389', '2019-04-08', '23.6700000000001', 'USD', 'NQ908B', 'PT. INDOWIRE PRIMA', '0.008453571428571465', 'Dec 2018 - May 2019'),
(211, '7186-8851-34', ' 5000', 'PCS', 'JL01-8389', '2019-04-14', '347.12', 'USD', 'NQ908C', 'PT. NMI', '0.069424', 'Dec 2018 - May 2019'),
(212, '7154-6338', ' 5000', 'PCS', 'JL01-8389', '2019-04-20', '670.5700000000001', 'USD', 'NQ908C', 'SAMI', '0.134114', 'Dec 2018 - May 2019'),
(213, '7183-6096-35', ' 1000', 'PCS', 'JL01-8390', '2019-04-26', '994.02', 'USD', 'NQ908C', 'SUGITY', '0.99402', 'Dec 2018 - May 2019'),
(214, '7186-8851-35', ' 1000', 'PCS', 'JL01-8390', '2019-09-14', '1317.47', 'USD', 'NQ908C', 'TAP', '1.31747', 'Jun 2019 - Nov 2019'),
(215, '7154-6339', ' 1000', 'PCS', 'JL01-8390', '2019-04-20', '74.09999999999999', 'USD', 'NQ908C', 'TAP', '0.0741', 'Dec 2018 - May 2019'),
(216, '7183-6096-36', ' 1000', 'PCS', 'JL01-8390', '2019-12-12', '23.6700000000001', 'USD', 'NQ908C', 'J/A', '0.0236700000000001', 'Dec 2019 - May 2020'),
(217, '7186-8851-36', ' 1000', 'PCS', 'JL01-8390', '2019-11-09', '74.09999999999999', 'USD', 'NQ908C', 'TESA', '0.0741', 'Jun 2019 - Nov 2019'),
(218, '7154-6340', ' 100', 'PCS', 'JL01-8390', '2019-09-09', '124.53', 'USD', 'NQ908C', 'YCIC', '1.2453', 'Jun 2019 - Nov 2019'),
(219, '7183-6096-37', ' 200', 'PCS', 'JL01-8390', '2019-07-09', '174.96', 'USD', 'NQ908C', 'SUGITY', '0.8748', 'Jun 2019 - Nov 2019'),
(220, '7186-8851-37', ' 650', 'PCS', 'JL01-8390', '2019-02-19', '225.39', 'USD', 'NQ908C', 'TAP', '0.3467538461538461', 'Dec 2018 - May 2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penawaran`
--

CREATE TABLE `data_penawaran` (
  `id_penawaran` int(100) NOT NULL,
  `partnumber` varchar(100) NOT NULL,
  `base_price` varchar(100) NOT NULL,
  `base_crcy` varchar(100) NOT NULL,
  `base_uom` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `cntry_cd` varchar(100) NOT NULL,
  `period` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penawaran`
--

INSERT INTO `data_penawaran` (`id_penawaran`, `partnumber`, `base_price`, `base_crcy`, `base_uom`, `supplier`, `cntry_cd`, `period`) VALUES
(107, '7189-8974-30', '0.0528', 'USD', 'E', 'HIB', 'JPN', 'Dec 2018 - May 2019'),
(108, '7189-8974-90', '0.0528', 'USD', 'E', 'ARROW ELECTRONICS AS', 'JPN', 'Dec 2018 - May 2019'),
(109, '7189-9116-30', '0.0800', 'USD', 'E', 'YGP', 'SGP', 'Dec 2018 - May 2019'),
(110, '7194-3003-30', '0.0270', 'USD', 'E', 'HELLERMANN TYTON', 'THA', 'Dec 2018 - May 2019'),
(111, '7194-3042-30', '0.1010', 'USD', 'E', 'FMTH', 'THA', 'Dec 2018 - May 2019'),
(112, '7194-3051-30', '0.1740', 'USD', 'E', 'FMTH', 'THA', 'Dec 2018 - May 2019'),
(113, '7194-3107-30', '0.0560', 'USD', 'E', 'FMTH', 'THA', 'Dec 2018 - May 2019'),
(114, '7194-3323-30', '0.0270', 'USD', 'E', 'FMTH', 'THA', 'Dec 2018 - May 2019'),
(115, '7194-3324-30', '0.0330', 'USD', 'E', 'FMTH', 'THA', 'Dec 2018 - May 2019'),
(116, '7194-3328-30', '0.0480', 'USD', 'E', 'FMTH', 'THA', 'Dec 2018 - May 2019'),
(125, '7173-2331', '0.1556', 'USD', 'E', 'TAP', 'THA', 'Dec 2018 - May 2019'),
(126, '7173-2373-30', '0.0814', 'USD', 'E', 'HIB', 'JPN', 'Dec 2018 - May 2019'),
(127, '7173-2374-30', '0.0722', 'USD', 'E', 'HIB', 'JPN', 'Dec 2018 - May 2019'),
(128, '7173-2464-30', '0.3408', 'USD', 'E', 'PASI', 'IDN', 'Dec 2018 - May 2019'),
(129, '7173-0417-30', '0.0582', 'USD', 'E', 'PASI', 'IDN', 'Dec 2018 - May 2019'),
(130, '7173-2773-30', '0.6277', 'USD', 'E', 'PASI', 'IDN', 'Dec 2018 - May 2019'),
(131, '7173-0417-31', '0.11972', 'USD', 'E', 'PASI', 'IDN', 'Dec 2018 - May 2019'),
(135, '7154-6334', '0.2397', 'USD', 'E', 'PASI', 'IDN', 'Dec 2018 - May 2019'),
(136, '7183-6096-31', '0.23365', 'USD', 'E', 'PASI', 'IDN', 'Dec 2018 - May 2019'),
(138, '7154-6335', '0.23367', 'USD', 'E', 'PASI', 'IDN', 'Dec 2018 - May 2019'),
(139, '7183-6096-32', '0.23368', 'USD', 'E', 'HZY', 'IDN', 'Dec 2018 - May 2019'),
(140, '7186-8851-32', '0.23369', 'USD', 'E', 'ARROW ELECTRONICS AS', 'IDN', 'Dec 2018 - May 2019'),
(141, '7183-6096-33', '0.23370', 'USD', 'E', 'HZY', 'IDN', 'Dec 2018 - May 2019'),
(151, '7150-8546-43', '0.23380', 'USD', 'E', 'YCIC', 'IDN', 'Dec 2018 - May 2019'),
(152, '7147-5791-44', '0.23381', 'USD', 'E', 'HIB', 'IDN', 'Dec 2018 - May 2019'),
(153, '7144-3036-45', '0.23382', 'USD', 'E', 'YEL-BL', 'IDN', 'Dec 2018 - May 2019'),
(154, '7141-0281-46', '0.23383', 'USD', 'E', 'YGP', 'IDN', 'Dec 2018 - May 2019'),
(155, '7137-7526-47', '0.23384', 'USD', 'E', 'DAT', 'IDN', 'Dec 2018 - May 2019'),
(156, '7134-4771-48', '0.23385', 'USD', 'E', 'COMBU-E', 'IDN', 'Dec 2018 - May 2019'),
(157, '7131-2016-49', '0.23386', 'USD', 'E', 'FMTH', 'IDN', 'Dec 2018 - May 2019'),
(158, '7127-9261-50', '0.23387', 'USD', 'E', 'HELLERMANN TYTON', 'IDN', 'Dec 2018 - May 2019'),
(159, '7124-6506-51', '0.23388', 'USD', 'E', 'HZY', 'IDN', 'Dec 2018 - May 2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_sup` int(20) NOT NULL,
  `sai` varchar(100) NOT NULL,
  `gct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_sup`, `sai`, `gct`) VALUES
(1, 'DAT', 'DAIWA KASEI (THAILAND) CO. LTD'),
(2, 'COMBU-E', 'ELCOM'),
(3, 'FMTH', 'FEDERAL MOGUL (THAILAND) LTD.'),
(4, 'HELLERMANN TYTON', 'HELLERMANN TYTON'),
(5, 'HZY', 'HZY'),
(6, 'ARROW ELECTRONICS AS', 'MOLEX SINGAPORE'),
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
(23, 'PEMI-AW', 'PEMI'),
(24, 'PT. INDOWIRE PRIMA', 'PT INDOWIRE PRIMA INDUSTRINDO'),
(25, 'PT. NMI', 'PT NITTO MATERIALS INDONESIA'),
(26, 'SAMI', 'SAMI'),
(27, 'SUGITY', 'SUGITY PT.SUGITY CREATEIVES'),
(28, 'TAP-AW', 'TAP'),
(29, 'TAP-INJ', 'TAP'),
(30, 'TAP-VT', 'TAP'),
(31, 'J/A', 'TBD SUPPLIER'),
(32, 'TESA', 'TESA TAPE ASIA PACIFIC PTE LTD'),
(33, 'YCIC', 'YAZAKI (CHINA) INVESTMENT CORPORATION'),
(34, 'HIB', 'YC PURCHASING'),
(35, 'YEL-BL', 'YEL-BL'),
(36, 'YGP', 'YGP PTE. LTD.'),
(37, 'YNA', 'YZK AMERICAS'),
(38, 'SCHLEMMER1', 'PASI1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sup_gct`
--

CREATE TABLE `sup_gct` (
  `id_supgct` int(20) NOT NULL,
  `nama_supgct` varchar(100) NOT NULL,
  `ganti_gct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sup_gct`
--

INSERT INTO `sup_gct` (`id_supgct`, `nama_supgct`, `ganti_gct`) VALUES
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
  `user_username` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_username`, `user_password`, `user_level`) VALUES
(1, 'Administrator CI', 'adminci', '21232f297a57a5a743894a0e4a801fc3', '1'),
(2, 'Dinarpratnya', 'Dinar', 'e10adc3949ba59abbe56e057f20f883e', '2'),
(3, 'meli', 'meli', '315fef7b8d30f99d6964f489ee4c9828', '2'),
(7, 'User 1', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', '2'),
(8, 'Administrator FA', 'adminfa', '21232f297a57a5a743894a0e4a801fc3', '1');

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
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_sup`);

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
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT untuk tabel `data_penawaran`
--
ALTER TABLE `data_penawaran`
  MODIFY `id_penawaran` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_sup` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
