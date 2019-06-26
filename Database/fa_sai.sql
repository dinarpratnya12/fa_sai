-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Jun 2019 pada 10.59
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
  `id` int(11) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `invoice_date` varchar(100) NOT NULL,
  `buppin_number` varchar(100) NOT NULL,
  `qty_invoice` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `kind` varchar(100) NOT NULL,
  `price_invoiceseribu` varchar(100) NOT NULL,
  `price_invoicesatu` varchar(100) NOT NULL,
  `amount_invoice` varchar(100) NOT NULL,
  `price_quotsatu` varchar(100) NOT NULL,
  `amount_quot` varchar(100) NOT NULL,
  `diff_amount` varchar(100) NOT NULL,
  `diff_percentage` varchar(100) NOT NULL,
  `periode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penawaran`
--

CREATE TABLE `data_penawaran` (
  `GCT_COMP_NO` varchar(100) NOT NULL,
  `OW_ID` varchar(100) NOT NULL,
  `PRICE_ID` varchar(100) NOT NULL,
  `PriceIdDesc` varchar(100) NOT NULL,
  `EFFECT_DT` varchar(100) NOT NULL,
  `EXPIRE_DT` varchar(100) NOT NULL,
  `TENTATIVE_FL` varchar(100) NOT NULL,
  `CLASS_CD` varchar(100) NOT NULL,
  `FIS_PRICE` varchar(100) NOT NULL,
  `kljhi` varchar(100) NOT NULL,
  `FIS_CRCY` varchar(100) NOT NULL,
  `BASE_PRICE` varchar(100) NOT NULL,
  `BASE_CRCY` varchar(100) NOT NULL,
  `BASE_UOM` varchar(100) NOT NULL,
  `SHT_NO` varchar(100) NOT NULL,
  `szdb` varchar(100) NOT NULL,
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

INSERT INTO `data_penawaran` (`GCT_COMP_NO`, `OW_ID`, `PRICE_ID`, `PriceIdDesc`, `EFFECT_DT`, `EXPIRE_DT`, `TENTATIVE_FL`, `CLASS_CD`, `FIS_PRICE`, `kljhi`, `FIS_CRCY`, `BASE_PRICE`, `BASE_CRCY`, `BASE_UOM`, `SHT_NO`, `szdb`, `SPPLY_ID`, `SPPLY_NM`, `CNTRY_CD`, `INCO`, `DUTY_FL`, `CU_BASE_QUOTE`, `CU_BASE_UOM`, `CU_BASE_CRCY`, `TOOL_COST_FL`, `ONLY_TEST_FL`, `MARK1`, `MARK2`, `MARK3`, `NOTE`, `PERIOD`) VALUES
('18000004550', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/16', '9999/12/31', 'F', '001', '0.6175', '', 'USD', '0.6175', 'USD', 'M', '14264', '', '1339', 'PEMI', 'IDN', 'DAP', '1', '6.8000', 'KG', 'USD', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
('18001404630', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '001', '1.3761', '', 'USD', '1.3761', 'USD', 'M', '7360', '', '28246', 'PT INDOWIRE PRIMA INDUSTRINDO', 'IDN', 'DAP', '1', '6.8000', 'KG', 'USD', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
('18005604530', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/11/15', '9999/12/31', 'F', '001', '0.7345', '', 'USD', '0.7140', 'USD', 'M', '6151', '', '13021', 'YGP PTE. LTD.', 'SGP', 'CIF&I', '1', '6.8000', 'KG', 'USD', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019'),
('18005604534', 'SAI', '2019A', '2019A Jan-Jun Price for SAI', '2018/12/04', '9999/12/31', 'F', '001', '0.7345', '', 'USD', '0.7140', 'USD', 'M', '17124', '', '13021', 'YGP PTE. LTD.', 'SGP', 'CIF&I', '1', '6.8000', 'KG', 'USD', 'N', 'T', '', '', '', 'Batch uploaded', 'Dec 2018 - May 2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `kode_barang` int(1) NOT NULL,
  `periode` varchar(30) NOT NULL,
  `price_quotation` int(1) NOT NULL,
  `different` int(1) NOT NULL,
  `remark` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'Dinarpratnya', 'Dinarpratnya12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_invoice`
--
ALTER TABLE `data_invoice`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
