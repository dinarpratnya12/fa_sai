-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Jul 2019 pada 04.38
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
-- Database: `data_invoice`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_invoice`
--

CREATE TABLE `data_invoice` (
  `id_` int(11) NOT NULL,
  `ProductID` varchar(20) NOT NULL,
  `QuantityUnit` varchar(20) NOT NULL,
  `UnitCode` varchar(20) NOT NULL,
  `InvoiceNumber` varchar(20) NOT NULL,
  `InvoiceDate` varchar(20) NOT NULL,
  `InvoiceValue` varchar(20) NOT NULL,
  `CurrencyCode` varchar(20) NOT NULL,
  `OrderNumber` varchar(20) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `kalkulasi_per_pcs` varchar(20) NOT NULL,
  `periode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_invoice`
--
ALTER TABLE `data_invoice`
  ADD PRIMARY KEY (`id_`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_invoice`
--
ALTER TABLE `data_invoice`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
