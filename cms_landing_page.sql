-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2024 pada 10.47
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
-- Database: `cms_landing_page`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_us`
--

CREATE TABLE `about_us` (
  `id` int(5) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `misi` text NOT NULL,
  `visi` text NOT NULL,
  `histori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` int(5) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(28, 'Solusi digital untuk meningkatkan fasilitas kesehatan', 'Cocok untuk Klinik, Rumah Sakit, Dokter', 'uploads/1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `benefit`
--

CREATE TABLE `benefit` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama_benefit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_fitur`
--

CREATE TABLE `detail_fitur` (
  `id` int(5) UNSIGNED NOT NULL,
  `judul_detail` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_fitur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fitur`
--

CREATE TABLE `fitur` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama_fitur` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_solusi` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fitur`
--

INSERT INTO `fitur` (`id`, `nama_fitur`, `deskripsi`, `id_solusi`, `icon`) VALUES
(1, 'Cek kesehatan', 'Ketahui kesehatan anda disini', 0, 'uploads/device-heart-monitor.png'),
(2, 'Ambulan', 'Ketahui Cara menghubungi  ambulan', 0, 'uploads/ambulance.png'),
(3, 'Ruangan', 'Cara melihat kamar yang tersedia', 0, 'uploads/emergency-bed.png'),
(4, 'Obat-obatan', 'Cara mengambil resep/obat', 0, 'uploads/medical-cross.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `headersolusi`
--

CREATE TABLE `headersolusi` (
  `id` int(5) UNSIGNED NOT NULL,
  `judul_solusi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `headersolusi`
--

INSERT INTO `headersolusi` (`id`, `judul_solusi`, `deskripsi`) VALUES
(1, 'Solusi', 'Beberapa contoh solusi untuk memudahkan dalam menjalankan bisnis.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori`
--

CREATE TABLE `histori` (
  `id` int(5) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `aktivitas` varchar(255) NOT NULL,
  `aksi` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telepon` int(11) NOT NULL,
  `link_whatsapp` varchar(255) NOT NULL,
  `link_instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(5) UNSIGNED NOT NULL,
  `id_parent` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL,
  `histori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(34, '2024-05-11-110828', 'App\\Database\\Migrations\\CreateUsers', 'default', 'App', 1715428798, 1),
(35, '2024-05-11-104853', 'App\\Database\\Migrations\\CreateSolusi', 'default', 'App', 1715428902, 2),
(36, '2024-05-11-105049', 'App\\Database\\Migrations\\CreateFitur', 'default', 'App', 1715428902, 2),
(37, '2024-05-11-105411', 'App\\Database\\Migrations\\CreateDetailFitur', 'default', 'App', 1715428902, 2),
(38, '2024-05-11-105931', 'App\\Database\\Migrations\\CreatePaketHarga', 'default', 'App', 1715428903, 2),
(39, '2024-05-11-110600', 'App\\Database\\Migrations\\CreateBenefit', 'default', 'App', 1715428903, 2),
(40, '2024-05-07-054411', 'App\\Database\\Migrations\\CreateBanner', 'default', 'App', 1715428949, 3),
(41, '2024-05-11-111133', 'App\\Database\\Migrations\\CreateKontak', 'default', 'App', 1715428950, 3),
(42, '2024-05-11-113919', 'App\\Database\\Migrations\\CreateAboutUs', 'default', 'App', 1715428950, 3),
(43, '2024-05-11-114935', 'App\\Database\\Migrations\\CreateMenu', 'default', 'App', 1715428968, 4),
(44, '2024-05-11-115309', 'App\\Database\\Migrations\\CreateHistori', 'default', 'App', 1715428969, 4),
(45, '2024-05-15-062956', 'App\\Database\\Migrations\\CreateHeaderSolusi', 'default', 'App', 1715754679, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_harga`
--

CREATE TABLE `paket_harga` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `kategori_harga` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `id_solusi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paket_harga`
--

INSERT INTO `paket_harga` (`id`, `nama_paket`, `kategori_harga`, `deskripsi`, `harga`, `id_solusi`) VALUES
(1, 'Paket harga klinik ', 'standard', 'Paket harga untuk klinik, ', 1500000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `solusi`
--

CREATE TABLE `solusi` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama_solusi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `solusi`
--

INSERT INTO `solusi` (`id`, `nama_solusi`, `deskripsi`, `gambar`) VALUES
(15, 'Administrasi', 'Solusi rumah sakit dan harga', 'uploads/rumah sakit.jpeg'),
(17, 'Dokter', 'Solusi dokter dan harga', 'uploads/dokter.png'),
(18, 'Klinik', 'Solusi klinik dan harga', 'uploads/klinik.png'),
(21, 'administrasi', 'keuangan', 'default'),
(22, 'administrasi', 'keuangan', 'default');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `benefit`
--
ALTER TABLE `benefit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_fitur`
--
ALTER TABLE `detail_fitur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fitur`
--
ALTER TABLE `fitur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `headersolusi`
--
ALTER TABLE `headersolusi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket_harga`
--
ALTER TABLE `paket_harga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `benefit`
--
ALTER TABLE `benefit`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_fitur`
--
ALTER TABLE `detail_fitur`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fitur`
--
ALTER TABLE `fitur`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `headersolusi`
--
ALTER TABLE `headersolusi`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `histori`
--
ALTER TABLE `histori`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `paket_harga`
--
ALTER TABLE `paket_harga`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
