-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Jul 2019 pada 03.38
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
(3, '7282-4870', ' 960', 'PCS', 'JL01-8388', '2019-07-05', '385.2', 'USD', 'NQ907M1', 'HIB', '0.4010416666666667', 'Jun 2019 - Nov 2019'),
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
(24, '7154-6334', ' 528', 'PCS', 'JL01-8389', '2019-07-05', '126.57', 'USD', 'NQ908B', 'HIB', '0.2386363636363636', 'Jun 2019 - Nov 2019');

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
  `nama_subsai` varchar(100) NOT NULL,
  `ganti_sai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sup_sai`
--

INSERT INTO `sup_sai` (`id_supsai`, `nama_subsai`, `ganti_sai`) VALUES
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
(3, 'meli', 'meli@gmail.com', '315fef7b8d30f99d6964f489ee4c9828', '2'),
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
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `data_penawaran`
--
ALTER TABLE `data_penawaran`
  MODIFY `id_penawaran` int(100) NOT NULL AUTO_INCREMENT;

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
