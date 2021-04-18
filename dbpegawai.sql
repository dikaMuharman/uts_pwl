-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Apr 2021 pada 09.08
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Divisi`
--

CREATE TABLE `Divisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `Divisi`
--

INSERT INTO `Divisi` (`id`, `nama`) VALUES
(1, 'HRD'),
(2, 'Keuangan'),
(3, 'Operasional'),
(4, 'Marketing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Member`
--

CREATE TABLE `Member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','manager','staff') NOT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `Member`
--

INSERT INTO `Member` (`id`, `fullname`, `username`, `password`, `role`, `foto`) VALUES
(1, 'admin', 'admin', '$2y$10$FGN4dMGXVTY.QObhOiANwu3ZbHPNqRmgh.Kyx656ZboeFTBeAfxli', 'admin', NULL),
(2, 'staff', 'staff', '$2y$10$kAvJq1upZHRMJXmDXjIUAOk9.ka31XLz2L5o86p0SCa6Xzc9Exgbu', 'staff', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `Pegawai`
--

CREATE TABLE `Pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agama` enum('Islam','Protestan','Katolik','Hindu','Buddha','Konghucu') NOT NULL,
  `iddivisi` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `Pegawai`
--

INSERT INTO `Pegawai` (`id`, `nip`, `nama`, `email`, `agama`, `iddivisi`, `foto`) VALUES
(2, 'pg002', 'antonio rodique', 'anto@mail.com', 'Protestan', 2, 'foto.png'),
(7, 'pg004', 'julia', 'julia@mail.com', 'Hindu', 1, 'foto.png'),
(10, 'pg001', 'fernando', 'fernan@mail.com', 'Protestan', 4, 'foto.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `Divisi`
--
ALTER TABLE `Divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `Member`
--
ALTER TABLE `Member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `Pegawai`
--
ALTER TABLE `Pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `iddivisi` (`iddivisi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `Divisi`
--
ALTER TABLE `Divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `Member`
--
ALTER TABLE `Member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `Pegawai`
--
ALTER TABLE `Pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `Pegawai`
--
ALTER TABLE `Pegawai`
  ADD CONSTRAINT `Pegawai_ibfk_1` FOREIGN KEY (`iddivisi`) REFERENCES `Divisi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
