---------------------------------------------------------------------------------------
SIMPLE SIAKAD
Oleh Moch. Miftachur Rifqi Al Husain / 210411100125

Dibuat untuk memenuhi tugas Final Project Mata Kuliah Pengembangan Aplikasi Web (PAW)
yang diampu oleh Bapak Ach. Khozaimi S.Kom., M.Kom.

Proses pengerjaan pertanggal
Mulai 22-11-2022.
Selesai 05-12-2022.

-Interface menggunakan  Bootsrap (AdminLTE3-Master).
-Kerangka code menggunakan Konsep MVC dari Laravel 8.

>> Untuk mengakses Web menggunakan route localhost:8000/login 

>> Untuk melakukan Login menggunakan:
-> Level: Admin
-> Username: Admin
-> Password: admin123

-> Level: Dosen
-> Username: Husain
-> Password: husain123

-> Level: Mahasiswa
-> Username: Rifqi
-> Password: rifqi123


Nb: Data Password pada Tabel user pada Database terenkripsi menggunakan bycript.
---------------------------------------------------------------------------------------

>> Dibawah ini adalah salinan untuk Database cadangan

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2022 pada 16.28
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip_dsn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dsn` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_dsn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_dsn` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nip_dsn`, `nama_dsn`, `alamat_dsn`, `email_dsn`, `created_at`, `updated_at`) VALUES
(1, '1911112208911', 'Moch. Husain', 'Gresik', 'husain@gmail.com', '2022-11-24 18:33:44', '2022-11-24 19:12:21'),
(2, '1911112208912', 'Ach. Miftach', 'Kediri', 'miftach@gmail.com', '2022-11-24 19:27:32', '2022-11-24 19:27:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matakuliah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruangan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `matakuliah`, `dosen`, `ruangan`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 'Algoritma dan Dasar Pemrograman', 'Moch. Husain', 'RKB F 204', 'Selasa (07.00-09.30)', '2022-11-28 05:23:50', '2022-11-28 05:23:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim_mhs` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mhs` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas_mhs` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_mhs` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_mhs` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_mhs` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim_mhs`, `nama_mhs`, `fakultas_mhs`, `prodi_mhs`, `alamat_mhs`, `email_mhs`, `created_at`, `updated_at`) VALUES
(1, '210411100125', 'Miftachur Rifqi', 'Teknik', 'Teknik informatika', 'Lamongan', 'rifqi@gmail.com', '2022-11-22 22:36:16', '2022-11-22 22:36:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_mk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `kode_mk`, `nama_mk`, `sks`, `prodi_m`, `ruang`, `kelas`, `created_at`, `updated_at`) VALUES
(1, 'IF 101', 'Algoritma & Dasar Pemrograman', '4', 'Teknik Informatika', 'RKB F', 'F 204', '2022-11-28 05:46:50', '2022-11-28 05:46:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_23_040622_create_mahasiswas_table', 2),
(6, '2022_11_25_010308_create_dosens_table', 3),
(7, '2022_11_25_124137_create_jadwals_table', 4),
(8, '2022_11_28_124031_create_matakuliahs_table', 5),
(10, '2022_11_28_125956_create_nilais_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mahs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim_mahs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_mahs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_tugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_uts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_uas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `nama_mahs`, `nim_mahs`, `prodi_mahs`, `nilai_tugas`, `nilai_uts`, `nilai_uas`, `created_at`, `updated_at`) VALUES
(1, 'Miftachur Rifqi', '210411100125', 'Teknik Informatika', '80', '85', '90', '2022-11-28 06:19:04', '2022-11-28 06:19:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `level`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'Admin', '$2y$10$lD5TxO9X5Fa36AdlBu8RNO1I4UBfdZRhUCaXPy635ECCxGteG1u5S', '2022-11-22 02:14:30', '2022-11-22 02:14:30'),
(2, 'Miftachur Rifqi', 'mahasiswa', 'Rifqi', '$2y$10$IJANW6GGixKNGy8izn4MROqjX2cBFc5WLG7EuSy0CcBb.eRIY4MpC', '2022-11-22 06:48:24', '2022-11-22 06:48:24'),
(4, 'Moch. Husain', 'dosen', 'Husain', '$2y$10$hEUrnDT7Q.3DYD/K4umw5..ZWYFcUcP8A94Yk2yTqGcSTf7DIPsJi', '2022-11-22 06:57:52', '2022-11-22 06:57:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
