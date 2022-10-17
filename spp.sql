-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Okt 2022 pada 13.20
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_admin` varchar(64) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`, `gambar`, `id_level`) VALUES
(1, 'admin27', 'admin123', 'djodly ichsan ankami', 'me.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `tingkatan_kelas` int(1) NOT NULL,
  `kompetensi_keahlian` varchar(64) NOT NULL,
  `kode` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `tingkatan_kelas`, `kompetensi_keahlian`, `kode`) VALUES
(1, 10, 'Rekayasa Perangkat Lunak', 'RPL'),
(2, 10, 'Akutansi Dan Keuangan Lembaga', 'AKL'),
(3, 10, 'Otomatisasi Dan Tata Kelola Perkantoran', 'OTKP'),
(4, 10, 'Perbankan Dan Keuangan Makro', 'PKM'),
(5, 10, 'Bisnis Daring Dan Pemasaran', 'BDP'),
(6, 10, 'Usaha Perjalanan Wisata', 'UPW'),
(7, 11, 'Rekayasa Perangkat Lunak', 'RPL'),
(8, 11, 'Akutansi Dan Keuangan Lembaga', 'AKL'),
(9, 10, 'Otomatisasi Dan Tata Kelola Perkantoran', 'OTPK'),
(10, 11, 'Perbankan Dan Keuangan Makro', 'PKM'),
(11, 11, 'Bisnis Daring Dan Pemasaran', 'BDP'),
(12, 11, 'Usaha Perjalanan Wisata', 'UPW'),
(13, 12, 'Rekayasa Perangkat Lunak', 'RPL'),
(14, 12, 'Akutansi Dan Keuangan Lembaga', 'AKL'),
(15, 12, 'Otomatisasi Dan Tata Kelola Perkantoran', 'OTKP'),
(16, 12, 'Perbankan Dan Keuangan Makro', 'PKM'),
(18, 12, 'Usaha Perjalanan Wisata', 'UPW'),
(19, 12, 'Bisnis Daring Dan Pemasaran', 'BDP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'administrator'),
(2, 'petugas'),
(3, 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nisn` bigint(24) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `tengat_waktu` int(2) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `nama_petugas` varchar(40) NOT NULL,
  `bulanan` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama_petugas` varchar(64) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `kode_petugas` varchar(4) NOT NULL,
  `id_level` int(1) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `gambar`, `kode_petugas`, `id_level`, `status`) VALUES
(20, 'admin27', '$2y$10$gzq4tRlg0jpkGaP1.FAkjOFYPrI35Ew97gpw3blAiN9alyyI0Pgnm', 'djodly ichsan ankami', 'me.png', 'DJO', 1, 'Admin'),
(26, 'julio123', '$2y$10$IjLqv7dcbBQouqdpEL2tl.CXzEzic9VGKlU8X7H0HZwr59GK2wmLC', 'julio jamal junior', 'derArzt1.png', 'JLO', 2, 'Petugas'),
(27, 'susi123', '$2y$10$VRKUMgfAFu4qhupBMrrEOeUcPYbsFixNwypAGC0M5psFbQPLtrGPy', 'susi susanti', 'derSchneider.png', 'SSI', 2, 'Petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` bigint(24) NOT NULL,
  `nis` bigint(24) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `id_spp` int(4) NOT NULL,
  `id_level` int(1) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `nomor_telpon` bigint(24) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `status` varchar(8) NOT NULL,
  `nominal/bulan` int(8) NOT NULL,
  `tahun` int(4) NOT NULL,
  `kelas` int(2) NOT NULL,
  `jurusan` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nis`, `id_kelas`, `id_spp`, `id_level`, `nama`, `alamat`, `nomor_telpon`, `gambar`, `status`, `nominal/bulan`, `tahun`, `kelas`, `jurusan`) VALUES
(1, 8912341902, 92341074, 1, 7, 3, 'andi sahputra', 'jalan tah mana mana', 123123123123, 'avatar36.png', 'Siswa', 90000, 2020, 10, 'Rekayasa Perangkat Lunak'),
(2, 1298129384, 82121412, 1, 5, 3, 'billi davidson', 'jalan i aja doloeh', 123123123123, 'ella4.jpg', 'Siswa', 70000, 2020, 10, 'Rekayasa Perangkat Lunak'),
(3, 5623178239, 63123187, 10, 1, 3, 'Aston Martin', 'jalan jalan doloeh', 721298742371, 'avatar04.png', 'Siswa', 30000, 2020, 11, 'Perbankan Dan Keuangan Makro'),
(4, 9928765172, 19928837, 7, 1, 3, 'ini budi', 'jalan mawar', 82277635649, '1073.png', 'Siswa', 30000, 2020, 11, 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `nominal/bulan` int(8) NOT NULL,
  `nominal/tahun` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal/bulan`, `nominal/tahun`) VALUES
(1, 2020, 30000, 360000),
(2, 2020, 40000, 480000),
(3, 2020, 50000, 600000),
(4, 2020, 60000, 720000),
(5, 2020, 70000, 840000),
(6, 2020, 80000, 960000),
(7, 2020, 90000, 1080000),
(8, 2020, 100000, 1200000),
(9, 0, 10000, 120000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_level` (`id_level`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `nisn_2` (`nisn`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `id_level` (`id_level`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
