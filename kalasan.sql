-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2020 pada 14.10
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalasan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(1) NOT NULL,
  `created` date NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`, `email`, `level`, `created`, `nama`) VALUES
('admin', '$2y$10$QbosggsR9lTeXIyxxLY50.mOPHpv2.Zz5IcznMfaHE3tibj7eExgG', 'adhymasfs@gmail.com', '1', '0000-00-00', 'admin'),
('aw', '$2y$10$BVPnRV6/KWtwoHRMSOAM2e1KB1FSDzRkZM5mCCT/yiGfgWR/Jx3wy', 'adhymas1700018167@webmail.uad.ac.id', '1', '0000-00-00', 'aw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `e_ktp`
--

CREATE TABLE `e_ktp` (
  `id` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jenis_kelamin` enum('male','female') NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `desa` text NOT NULL,
  `kecamatan` text NOT NULL,
  `agama` varchar(1) NOT NULL,
  `status` enum('Kawin','Belum Kawin') NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `kewarga_negaraan` varchar(3) NOT NULL,
  `e_ktp_status` int(1) DEFAULT NULL,
  `kk` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `e_ktp`
--

INSERT INTO `e_ktp` (`id`, `nama`, `tempat_lahir`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `agama`, `status`, `pekerjaan`, `kewarga_negaraan`, `e_ktp_status`, `kk`, `email`, `tgl_lahir`) VALUES
('0928736771', 'Adhymas Fajar Sudrajad', 'Kulon Progo', 'male', 'alamat', '001', '001', 'Kedundang', 'Temon', 'I', 'Kawin', 'Pelajar/Mahasiswa', 'WNI', NULL, '292983774', 'adhymasfs@gmail.com', '1999-02-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`alamat`, `telp`, `email`, `id`, `nama`) VALUES
('Jl. Solo km 13 Krajan Tirtomartani Kalasan Sleman', '02744542335', 'keckalasan@slemankab.go.id', 1, 'Kec. Kalasan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'berita'),
(2, 'artikel'),
(3, 'informasi'),
(4, 'layanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `kategori` varchar(3) NOT NULL,
  `thumbnail` text NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `judul`, `isi`, `tanggal`, `penulis`, `kategori`, `thumbnail`, `waktu`) VALUES
(10, 'aabcdcdss', 'aacs', '2020-06-21', 'admin', '2', 'aabcdcdss.png', '03:18:29'),
(11, 'asdw', 'asdw', '2020-06-21', 'admin', '2', 'asdw.png', '02:23:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `e_ktp`
--
ALTER TABLE `e_ktp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
