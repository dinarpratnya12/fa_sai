-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 26 Jul 2019 pada 03.59
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
-- Database: `supplier`
--

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
(1, 'DAT', 'Daiwa Kasei (Thailand) Co. Ltd'),
(2, 'COMBU-E', 'Elcom'),
(3, 'FMTH', 'Federal Mogul (Thailand) Ltd.'),
(4, 'HELLERMANN TYTON', 'Hellermann Tyton'),
(5, 'HZY', 'HZY'),
(6, 'ARROW ELECTRONICS AS', 'Molex Singapore'),
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
(25, 'PT. NMI', 'PT Nitto Materials Indonesia'),
(26, 'SAMI', 'SAMI'),
(27, 'SUGITY', 'Sugity PT.SUGITY CREATEIVES'),
(28, 'TAP-AW', 'TAP'),
(29, 'TAP-INJ', 'TAP'),
(30, 'TAP-VT', 'TAP'),
(31, 'J/A', 'TBD Supplier'),
(32, 'TESA', 'Tesa Tape Asia Pacific Pte Ltd'),
(33, 'YCIC', 'YAZAKI (CHINA) INVESTMENT CORPORATION'),
(34, 'HIB', 'YC Purchasing'),
(35, 'YEL-BL', 'YEL-BL'),
(36, 'YGP', 'YGP PTE. LTD.'),
(37, 'YNA', 'YZK AMERICAS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_sup`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_sup` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
