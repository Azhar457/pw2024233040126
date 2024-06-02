-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 14 Bulan Mei 2024 pada 03.35
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_pw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int NOT NULL,
  `nrp` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrp`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(1, 233040140, 'Adell Lailla Amallia', 'adell.233040140@mail.unpas.ac.id', 'Informatika', 'gambar.jpg'),
(2, 233040142, 'Adinda Juliana Ruhiyat', 'adinda.233040142@mail.unpas.ac.id', 'Informatika', 'gambar.jpg'),
(3, 233040118, 'Anandita Putri Salsabila Athaya', 'anandita.233040118@mail.unpas.ac.id', 'Informatika', 'gambar.jpg'),
(4, 233040139, 'Andhika Pramudya Syahputra', 'andhika.233040139@mail.unpas.ac.id', 'Informatika', 'gambar.jpg'),
(5, 233040134, 'Anindya Gita Lestari', 'anindya.233040134@mail.unpas.ac.id', 'Informatika', 'gambar.jpg'),
(7, 233040121, 'Azmii Rohmatullah', 'azmii.233040121@mail.unpas.ac.id', 'Informatika', 'gambar.jpg'),
(8, 233040167, 'Dennis Setya Pradana S', 'dennis.233040167@mail.unpas.ac.id', 'Informatika', 'gambar.jpg'),
(9, 233040146, 'Dera Triyadi Fatimah', 'dera.233040146@mail.unpas.ac.id', 'Informatika', 'gambar.jpg'),
(10, 233040168, 'Eka Guntara', 'eka.233040168@mail.unpas.ac.id', 'Informatika', 'gambar.jpg'),
(11, 233040148, 'Fadhilah Aditya Ahmad', 'fadhilah.233040148@mail.unpas.ac.id', 'Informatika', 'gambar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nrp` (`nrp`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
