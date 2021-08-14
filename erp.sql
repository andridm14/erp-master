-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Agu 2021 pada 08.05
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bom`
--

CREATE TABLE `bom` (
  `id_material` int(11) NOT NULL,
  `material` varchar(20) NOT NULL,
  `komponen` varchar(20) NOT NULL,
  `kuantitas` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bom`
--

INSERT INTO `bom` (`id_material`, `material`, `komponen`, `kuantitas`, `kategori`) VALUES
(1, 'kraken', 'crosims', '2', 'part'),
(2, 'furods', 'crosims', '4', 'body'),
(3, 'puketstate', 'stanliston', '4', 'body');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nm_customer` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `prusahaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nm_customer`, `alamat`, `prusahaan`) VALUES
(1, 'Agus susilo', 'Yogyakarta', 'PT. Marjan'),
(2, 'Rohmat widodo', 'Samarinda', 'PT. Nusa dua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_order`
--

CREATE TABLE `data_order` (
  `id` int(11) NOT NULL,
  `kd_order` varchar(20) NOT NULL,
  `kd_produk` varchar(20) NOT NULL,
  `nm_produk` varchar(20) NOT NULL,
  `nm_customer` varchar(20) NOT NULL,
  `tgl_order` date NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `pengiriman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_order`
--

INSERT INTO `data_order` (`id`, `kd_order`, `kd_produk`, `nm_produk`, `nm_customer`, `tgl_order`, `jumlah`, `harga`, `pengiriman`) VALUES
(1, 'A11023344', '	 1101', 'kulkas', 'Agus susilo', '2021-07-04', '25', '1500000', '2021-08-23'),
(2, 'k50236765', '2201', 'lemari', 'Rohmat widodo', '2021-06-27', '14', '3599000', '2021-08-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_produk`
--

CREATE TABLE `master_produk` (
  `id_produk` varchar(20) NOT NULL,
  `nm_produk` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tahun_produk` date NOT NULL,
  `stock` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_produk`
--

INSERT INTO `master_produk` (`id_produk`, `nm_produk`, `jenis`, `tahun_produk`, `stock`, `harga`) VALUES
('1101', 'kulkas', 'elektronik', '2021-08-08', '50', '1500000'),
('2201', 'lemari', 'furnitur', '2021-06-14', '40', '3599000'),
('3301', 'mesin pemotong baja', 'peralatan', '2019-04-23', '25', '4500000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operasional`
--

CREATE TABLE `operasional` (
  `id_operasional` int(11) NOT NULL,
  `kd_material` varchar(20) NOT NULL,
  `kd_komponen` varchar(20) NOT NULL,
  `nm_material` varchar(30) NOT NULL,
  `nm_komponen` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `operasional`
--

INSERT INTO `operasional` (`id_operasional`, `kd_material`, `kd_komponen`, `nm_material`, `nm_komponen`, `jenis`, `kategori`, `harga`) VALUES
(1, 'm1021', 'k1292', 'kraken', 'crosims', 'besi', '1', '50000'),
(2, 'm39387', 'k717811', 'furods', 'jagaed', 'plastik', '4', '30000'),
(3, 'm12933', 'k95736', 'puketstate', 'stanliston', 'logam', '2', '80000'),
(4, 'm2989', 'k3927', 'crowlers', 'lings', 'karbon', '5', '600000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggungan`
--

CREATE TABLE `tanggungan` (
  `id_tanggungan` int(11) NOT NULL,
  `kd_tanggungan` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `biaya` varchar(20) NOT NULL,
  `tempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanggungan`
--

INSERT INTO `tanggungan` (`id_tanggungan`, `kd_tanggungan`, `jenis`, `biaya`, `tempo`) VALUES
(1, 'T31324', 'listrik', '8000000', '2021-08-31'),
(2, 'T889391', 'jaringan', '2000000', '2021-08-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(1) NOT NULL COMMENT '1 = riset, 2 = market, 3 = account',
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `is_active`) VALUES
(1, 'hosea', '12345', 1, 1),
(2, 'widya', '12345', 2, 1),
(3, 'agung', '12345', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bom`
--
ALTER TABLE `bom`
  ADD PRIMARY KEY (`id_material`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `data_order`
--
ALTER TABLE `data_order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_produk`
--
ALTER TABLE `master_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `operasional`
--
ALTER TABLE `operasional`
  ADD PRIMARY KEY (`id_operasional`);

--
-- Indeks untuk tabel `tanggungan`
--
ALTER TABLE `tanggungan`
  ADD PRIMARY KEY (`id_tanggungan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bom`
--
ALTER TABLE `bom`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_order`
--
ALTER TABLE `data_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `operasional`
--
ALTER TABLE `operasional`
  MODIFY `id_operasional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tanggungan`
--
ALTER TABLE `tanggungan`
  MODIFY `id_tanggungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
