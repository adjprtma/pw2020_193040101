-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2020 pada 19.01
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
-- Database: `tubes_193040101`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `handphone`
--

CREATE TABLE `handphone` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `rom` varchar(100) NOT NULL,
  `battery` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `handphone`
--

INSERT INTO `handphone` (`id`, `gambar`, `tipe`, `processor`, `ram`, `rom`, `battery`, `harga`) VALUES
(1, 'xsmax.png', 'Iphone Xs Max', 'Apple A12 Bionic (7nm)', '4GB', '64GB/256GB/512GB', '3174mAh', 13000000),
(2, 'Xs.jpg', 'Iphone Xs', 'Apple A12 Bionic (7nm)', '4GB', '64GB/256GB/512GB', '2658mAh', 12000000),
(3, '11.jpg', 'Iphone 11', 'Apple A13 Bionic (7nm+)', '4GB', '64GB/128GB/256GB', '3110mAh', 13000000),
(4, 'pro11.jpg', 'Iphone 11 Pro Max', 'Apple A13 Bionic (7nm+)', '4GB', '64GB/256GB/512GB', '3969mAh', 17000000),
(5, 'x.jpg', 'Iphone X', 'Apple A11 Bionic (10nm)', '3GB', '64GB/256GB', '2716mAh', 10000000),
(6, 'plus8.jpg', 'Iphone 8 Plus', 'Apple A11 Bionic (10nm)', '3GB', '64GB/256GB', '2691mAh', 7000000),
(7, '8.jpg', 'Iphone 8', 'Apple A11 Bionic (10nm)', '2GB', '64GB/256GB', '1821mAh', 5000000),
(8, 'plus7.jpg', 'Iphone 7 Plus', 'Apple A10 Fusion (16nm)', '3GB', '32GB/128GB/256GB', '2900mAh', 3500000),
(9, '7.jpg', 'Iphone 7', 'Apple A10 Fusion (16nm)', '2GB', '32GB/128GB/256GB', '1960mAh', 2500000),
(10, 'plus6.jpg', 'Iphone 6 Plus', 'Apple A8 Fusion (20nm)', '1GB', '16GB/64GB/128GB', '2915mAh', 2000000),
(30, 'iphone_se.jpg', 'Iphone SE', 'Apple A13 Bionic (7 nm+)', '3GB', '64GB/128GB/256GB', '1821mAh', 6000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'adji', '$2y$10$wmzM.pv8rX.RmV4GQRldk.u6RJV6qTDBOhOjf0h.VKX86HXoSs6la'),
(6, 'tyas', '$2y$10$NL67bH9n0Ypyyz8YRO0MAupHHe3DNNu6EBWew9k.lKff26opYdQwC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `handphone`
--
ALTER TABLE `handphone`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `handphone`
--
ALTER TABLE `handphone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
