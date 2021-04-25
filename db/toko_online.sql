-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2020 pada 11.11
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `katagori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `keterangan`, `katagori`, `harga`, `stok`, `gambar`) VALUES
(16, 'Gulaku', 'Gula Untuk Membuat Adonan Kue ', 'Bahan-bahan Kue', 19000, 43, 'adminlite-codenigter.PNG'),
(19, 'sfs', 'dgrtryrtyrty', 'plastik', 0, 0, 'navbar.PNG'),
(20, 'rggdfgdfgd', 'dgrtryrtyrtyedfsdfs', 'Bahan-bahan Kue', 5000, 10, 'data_warga.PNG'),
(21, 'rgterytjhr', 'wedthfgjfgjh', 'plastik', 14000, 34, 'console.PNG'),
(22, 'Gula Aren', 'Gula untuk pemanis', 'plastik', 19000, 43, 'adminlite-codenigter1.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Etsa Nur Aini', 'Karanggang', '2020-10-06 11:10:16', '2020-10-07 11:10:16'),
(2, 'Muhammad Gunawan', 'Karang Asem Barat', '2020-10-06 11:53:09', '2020-10-07 11:53:09'),
(5, '', '', '2020-10-08 17:14:43', '2020-10-09 17:14:43'),
(6, 'Asep', 'Citeureup', '2020-10-13 14:22:00', '2020-10-14 14:22:01'),
(7, '', '', '2020-10-13 14:25:54', '2020-10-14 14:25:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilih` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilih`) VALUES
(1, 1, 1, 'terigu segitiga', 1, 17000, ''),
(2, 1, 2, 'minyak Tropikal', 1, 17000, ''),
(3, 1, 3, 'kerupuk merah', 1, 14000, ''),
(4, 2, 2, 'minyak Tropikal', 1, 17000, ''),
(5, 3, 4, 'Keju kraf', 1, 19000, ''),
(6, 4, 2, 'minyak Tropikal', 1, 17000, ''),
(7, 5, 2, 'minyak Tropikal', 1, 19000, ''),
(8, 6, 1, 'terigu segitiga', 1, 12000, ''),
(9, 6, 2, 'minyak Tropikal', 1, 19000, ''),
(10, 7, 1, 'terigu segitiga', 1, 12000, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
