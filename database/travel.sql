-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2024 pada 22.16
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(20) NOT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `jumlah_orang` int(11) DEFAULT NULL,
  `total_biaya` char(20) DEFAULT NULL,
  `status_pemesanan` enum('pending','dikonfirmasi','selesai') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(5) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_katalog`
--

CREATE TABLE `tb_katalog` (
  `katalog_id` int(5) NOT NULL,
  `destinasi` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_katalog`
--

INSERT INTO `tb_katalog` (`katalog_id`, `destinasi`, `keterangan`, `harga`, `foto`) VALUES
(10, 'Bali', 'Durasi: 5 hari', '1.500.000', 'bali.jpg'),
(12, 'Semarang', 'Durasi: 5 hari', '2.000.000', 'semarang.jpg'),
(13, 'Jakarta', 'Durasi: 7 hari', '3.000.000', 'Jakarta2.jpg'),
(14, 'Bandung', 'Durasi: 5 hari', '2.500.000', 'bandung1.jpg'),
(15, 'Jogja', 'Durasi: 3 hari', '1.000.000', 'jogja2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `paket_id` int(5) NOT NULL,
  `paket_destinasi` varchar(50) NOT NULL,
  `paket_keterangan` varchar(200) NOT NULL,
  `paket_harga` varchar(25) NOT NULL,
  `paket_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`paket_id`, `paket_destinasi`, `paket_keterangan`, `paket_harga`, `paket_foto`) VALUES
(1, 'Explore Jawa', 'Durasi: 5 hari', '4.500.000', 'borobudur.jpg'),
(2, 'Expedisi Nusantara', 'Durasi: 7 Hari', '7.499.000', 'jepara.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_katalog`
--
ALTER TABLE `tb_katalog`
  ADD PRIMARY KEY (`katalog_id`);

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`paket_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_katalog`
--
ALTER TABLE `tb_katalog`
  MODIFY `katalog_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `paket_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
