-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2019 at 09:28 PM
-- Server version: 5.7.28-0ubuntu0.16.04.2
-- PHP Version: 7.2.24-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dokter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesialis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nip`, `nama_dokter`, `slug`, `spesialis`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, '4532231497304', 'Constantin Bergstrom DDS', 'theodora-feest', 'gigi', 'East Godfreyport', '877-759-9682', '2019-11-30 13:44:18', '2019-11-30 13:44:18'),
(2, '4233256259802188', 'Margot Halvorson', 'scarlett-mohr', 'gigi', 'Lianaberg', '1-855-825-8046', '2019-11-30 13:44:18', '2019-11-30 13:44:18'),
(3, '5489803040575645', 'Alisha Hintz', 'chelsea-quigley', 'gigi', 'New Korbinburgh', '(844) 841-3454', '2019-11-30 13:44:18', '2019-11-30 13:44:18'),
(4, '349244571483720', 'Dante Marquardt', 'prof-dina-schneider-iii', 'gigi', 'Uptonmouth', '1-800-727-7630', '2019-11-30 13:44:18', '2019-11-30 13:44:18'),
(5, '4485530252732', 'Bethel Stroman', 'alf-becker-ii', 'gigi', 'South Adrian', '888-658-2881', '2019-11-30 13:44:18', '2019-11-30 13:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_27_064731_create_pasien_table', 1),
(5, '2019_11_28_084950_create_dokter_table', 1),
(6, '2019_11_28_194426_create_poliklinik_table', 1),
(7, '2019_11_28_202831_create_obat_table', 1),
(8, '2019_11_29_081615_create_rekammedis_table', 1),
(9, '2019_11_30_185338_create_obat_rekammedis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_obat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `slug`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'amoxilin', 'amoxilin-JCmf1GYkuV', '-', '2019-11-30 13:45:17', '2019-11-30 13:45:17'),
(2, 'paracetamol 500g', 'paracetamol-500g-1Es2a8Vikh', '-', '2019-12-01 04:44:28', '2019-12-01 04:44:28'),
(3, 'komix', 'komix-wetXhESUEj', 'asdfa', '2019-12-02 12:32:59', '2019-12-02 12:32:59'),
(4, 'Acarbose', 'acarbose-BQ5cUCw541', 'obat antidiabetes yang digunakan untuk menangani diabetes tipe 2.', '2019-12-02 12:36:13', '2019-12-02 12:36:13'),
(5, 'ACE Inhibitor', 'ace-inhibitor-sZ78YBg0bQ', 'Obat penghambat enzim pengubah angiotensin atau angiotensin-converting enzyme (ACE) inhibitor adalah obat yang berfungsi untuk melemaskan pembuluh darah. Di sisi lain, obat ini dapat membantu mengurangi jumlah cairan yang dapat diserap kembali oleh ginjal.', '2019-12-02 12:37:01', '2019-12-02 12:37:01'),
(6, 'Amoxicillin', 'amoxicillin-0zTp6dt3wz', 'Amoxicillin adalah obat untuk mengatasi berbagai jenis infeksi bakteri. Obat antibiotik ini tersedia dalam bentuk tablet maupun sirup.', '2019-12-02 12:40:03', '2019-12-02 12:40:03'),
(7, 'Antibiotik', 'antibiotik-NZ44dzvOpm', 'Antibiotik adalah kelompok obat yang digunakan untuk mengatasi dan mencegah infeksi bakteri', '2019-12-02 12:41:42', '2019-12-02 12:41:42');

-- --------------------------------------------------------

--
-- Table structure for table `obat_rekammedis`
--

CREATE TABLE `obat_rekammedis` (
  `id` int(10) UNSIGNED NOT NULL,
  `obat_id` int(10) UNSIGNED NOT NULL,
  `rekammedis_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obat_rekammedis`
--

INSERT INTO `obat_rekammedis` (`id`, `obat_id`, `rekammedis_id`, `created_at`, `updated_at`) VALUES
(1, 7, '65b72d34c59449b9b523f20db8ef7362', '2019-12-03 00:39:39', '2019-12-03 00:39:39'),
(2, 1, '1d21821364144a90aba1b0f29ee056ad', '2019-12-03 09:50:29', '2019-12-03 09:50:29'),
(3, 2, '1d21821364144a90aba1b0f29ee056ad', '2019-12-03 09:50:29', '2019-12-03 09:50:29'),
(4, 3, '1d21821364144a90aba1b0f29ee056ad', '2019-12-03 09:50:29', '2019-12-03 09:50:29'),
(5, 4, '1d21821364144a90aba1b0f29ee056ad', '2019-12-03 09:50:29', '2019-12-03 09:50:29'),
(6, 5, '1d21821364144a90aba1b0f29ee056ad', '2019-12-03 09:50:30', '2019-12-03 09:50:30'),
(7, 6, '1d21821364144a90aba1b0f29ee056ad', '2019-12-03 09:50:30', '2019-12-03 09:50:30'),
(8, 7, '1d21821364144a90aba1b0f29ee056ad', '2019-12-03 09:50:30', '2019-12-03 09:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nik`, `nama`, `slug`, `jenis_kelamin`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, '2345898757561391', 'Dr. Cicero Cruickshank IV', 'gillian-gorczany', 'L', '454 Bruen Locks Suite 289\nHerzogburgh, AR 72307', '+1 (581) 543-7042', '2019-12-03 00:17:58', '2019-12-03 00:17:58'),
(2, '371988050058624', 'Orval Denesik', 'marianna-pfeffer', 'L', '751 Parker Ports\nLedabury, KY 10649', '1-316-684-6135', '2019-12-03 00:17:58', '2019-12-03 00:17:58'),
(3, '2221807312742148', 'Araceli King II', 'prof-morris-nienow', 'L', '2488 Helena Throughway Suite 624\nEast Colbyfort, MO 86985', '(961) 317-9029', '2019-12-03 00:17:58', '2019-12-03 00:17:58'),
(4, '5279691914383889', 'Gilda Kuhic', 'miss-annie-spencer', 'L', '7376 Vicenta Ville\nNorth Damaris, MA 48822', '670-989-0077', '2019-12-03 00:17:58', '2019-12-03 00:17:58'),
(5, '5502006667351802', 'Ms. Pat Harber V', 'marcellus-jacobi', 'L', '7604 Funk Shores Apt. 599\nEast Lesliemouth, SD 85884-3963', '1-954-383-3532 x031', '2019-12-03 00:17:59', '2019-12-03 00:17:59'),
(6, '2131476248984778', 'hendra wijaya', 'hendra-wijaya-q8PHcIyDSJ', 'L', 'jl duku\r\njakarta', '09748746448', '2019-12-03 09:44:08', '2019-12-03 09:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_poli` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gedung` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`id`, `nama_poli`, `slug`, `gedung`, `created_at`, `updated_at`) VALUES
(1, 'poliklinik gigi', 'poliklinik-gigi-IN9d1ci0UN', 'lantai 2', '2019-12-01 04:40:52', '2019-12-02 09:47:18'),
(2, 'umum', 'umum-sf9N9pJsxC', 'lantai 1', '2019-12-02 09:44:50', '2019-12-03 14:07:22'),
(3, 'poliklinik ruang bersalin', 'poliklinik-ruang-bersalin-J17hdFmNHc', 'lantai 2', '2019-12-02 09:45:50', '2019-12-02 09:45:50'),
(4, 'poliklinik pemeriksaan EKG', 'poliklinik-pemeriksaan-ekg-jE4WmX2O7i', 'lantai 3', '2019-12-02 09:46:38', '2019-12-02 09:46:38'),
(5, 'poliklinik keluarga berencana', 'poliklinik-keluarga-berencana-fR5i2rQcuT', 'lantai 3', '2019-12-02 09:47:04', '2019-12-02 09:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `rekammedis`
--

CREATE TABLE `rekammedis` (
  `id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasien_id` int(10) UNSIGNED NOT NULL,
  `keluhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokter_id` int(10) UNSIGNED DEFAULT NULL,
  `diagnosa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poliklinik_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekammedis`
--

INSERT INTO `rekammedis` (`id`, `pasien_id`, `keluhan`, `dokter_id`, `diagnosa`, `poliklinik_id`, `created_at`, `updated_at`) VALUES
('1d21821364144a90aba1b0f29ee056ad', 1, 'pusing', 4, 'kecapean', 2, '2019-12-03 09:50:29', '2019-12-03 09:50:29'),
('65b72d34c59449b9b523f20db8ef7362', 2, 'sakit gigi', 1, '-', 1, '2019-12-03 00:39:39', '2019-12-03 00:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hendra', 'hendra@gmail.com', '2019-12-01 07:34:35', '$2y$10$UKhqKEKQixagWPw3gRumPOsGUAfDKN1js1Pkr28djugRHykkP/W9q', 'AuHH2ueCBUa0XXC7NaQ20RrW9YHAfAeD0ZJJbcGZKzekuKuMcsc4ZiF109pI', '2019-12-01 07:34:35', '2019-12-01 07:34:35'),
(2, 'admin', 'admin@admin.com', NULL, '$2y$10$UC00WBqS.epj3eCaqkS0weiFrpA3iujPadfVY4zag6CYkSWqmlj8y', NULL, '2019-12-01 08:31:31', '2019-12-01 08:31:31'),
(3, 'hendra 2', 'Admin2@gmail.com', NULL, '$2y$10$YmVrncrPcRSvjLKy6Il7ZOlNVjmKlPULhQOCS7CIMqD5Og3CKZK52', NULL, '2019-12-02 16:45:43', '2019-12-02 16:45:43'),
(4, 'wijaya', 'wijaya@gmial.com', NULL, '$2y$10$zExnHiMclX4UrGipshXM4OFqZL7.IoesARtR.YkOBpkatOJTrNYy6', NULL, '2019-12-02 17:04:41', '2019-12-02 17:04:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat_rekammedis`
--
ALTER TABLE `obat_rekammedis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `obat_rekammedis_obat_id_foreign` (`obat_id`),
  ADD KEY `obat_rekammedis_rekammedis_id_foreign` (`rekammedis_id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekammedis`
--
ALTER TABLE `rekammedis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rekammedis_pasien_id_foreign` (`pasien_id`),
  ADD KEY `rekammedis_dokter_id_foreign` (`dokter_id`),
  ADD KEY `rekammedis_poliklinik_id_foreign` (`poliklinik_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `obat_rekammedis`
--
ALTER TABLE `obat_rekammedis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `obat_rekammedis`
--
ALTER TABLE `obat_rekammedis`
  ADD CONSTRAINT `obat_rekammedis_obat_id_foreign` FOREIGN KEY (`obat_id`) REFERENCES `obat` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obat_rekammedis_rekammedis_id_foreign` FOREIGN KEY (`rekammedis_id`) REFERENCES `rekammedis` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rekammedis`
--
ALTER TABLE `rekammedis`
  ADD CONSTRAINT `rekammedis_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `dokter` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `rekammedis_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rekammedis_poliklinik_id_foreign` FOREIGN KEY (`poliklinik_id`) REFERENCES `poliklinik` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
