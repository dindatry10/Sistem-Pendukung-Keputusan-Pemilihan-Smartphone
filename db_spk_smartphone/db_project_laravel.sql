-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 10:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id_hp` bigint(20) UNSIGNED NOT NULL,
  `nama_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memori_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kamera_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_angka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram_angka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memori_angka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processor_angka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kamera_angka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id_hp`, `nama_hp`, `harga_hp`, `ram_hp`, `memori_hp`, `processor_hp`, `kamera_hp`, `harga_angka`, `ram_angka`, `memori_angka`, `processor_angka`, `kamera_angka`, `created_at`, `updated_at`) VALUES
(1, 'Oppo Neo 7', '1700000', '1', '16', 'Quadcore', '8', '4', '1', '3', '3', '3', NULL, NULL),
(2, 'Mito A880', '550000\r\n', '1', '8', 'Quadcore', '5', '5', '1', '2', '3', '1', NULL, NULL),
(3, 'Samsung Galaxy Note 9', '11200000\r\n', '6', '128', 'Octacore', '12', '1', '5', '5', '5', '3', NULL, NULL),
(4, 'Oppo A83', '1899000', '3', '32', 'Octacore', '13', '4', '3', '4', '4', '3', NULL, NULL),
(5, 'Honor 8x', '3649000\r\n', '4', '128', 'Octacore', '20', '3', '4', '5', '5', '5', NULL, NULL),
(6, 'Sony Xperia Z1', '1250000', '3', '32', 'Quadcore', '20.7', '4', '3', '4', '3', '5', NULL, NULL),
(7, 'ASIAFONE ULTIMA', '749000\r\n', '1', '8', 'Quadcore', '5', '5', '1', '2', '3', '1', NULL, NULL),
(8, 'LG K4 LTE', '745000\r\n', '1', '8', 'Quadcore', '5', '5', '1', '2', '3', '1', NULL, NULL),
(9, 'Google Pixel 2 XL', '7200000', '4', '64', 'Octacore', '12', '5', '4', '5', '5', '3', NULL, NULL),
(10, 'Xiaomi Redmi Note 4x', '1530000', '3', '32', 'Octacore', '13', '4', '3', '4', '5', '3', NULL, NULL),
(11, 'Realme 2 Pro', '2949000', '4', '64', 'Octacore', '16', '4', '4', '5', '5', '5', NULL, NULL),
(12, 'Vivo Y91', '1709000', '2', '16', 'Quadcore', '13', '4', '2', '3', '3', '3', NULL, NULL),
(13, 'XIAOMI POCOPHONE F1', '4675000\r\n', '6', '64', 'Octacore', '12', '2', '5', '5', '5', '3', NULL, NULL),
(14, 'Nokia 5', '1625000', '3', '16', 'Octacore', '13', '4', '3', '3', '5', '3', NULL, NULL),
(15, 'evercross S45\r\n', '520000', '1', '8', 'Quadcore', '5', '5', '1', '2', '3', '1', NULL, NULL),
(30, 'POCO', '3500000', '6', '64', 'Octacore', '16', '3', '5', '5', '5', '5', NULL, NULL),
(32, 'Xiaomi Redmi Note 3', '4100000', '4', '32', 'Quadcore', '13', '2', '4', '4', '3', '3', NULL, NULL),
(33, 'Samsung A13', '3500000', '3', '16', 'Quadcore', '13', '3', '3', '3', '3', '3', NULL, NULL),
(34, 'Vivo Y21', '1230000', '2', '8', 'Dualcore', '13', '4', '2', '2', '1', '3', NULL, NULL),
(35, 'Iphone XR', '11000000', '6', '32', 'Octacore', '16', '1', '5', '4', '5', '5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_27_024127_create_datas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dindatry08@gmail.com', '$2y$10$hA3elcJXuTcRhj3DhVt/D.Tx/8lCLgSAKsyz6ZKJ.lst1f3jT8kMO', '2022-10-25 20:34:00'),
('dindatry10@gmail.com', '$2y$10$z58UJ4L6g00IrWj3Cj2IL.KvwSxoQvXWweSLAZvrWpHULpuJtnth2', '2022-10-25 20:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `picture`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 1, 'UIMG_2022110763687853aa5cb.jpg', NULL, '$2y$10$PGtjpk3ohcn/fqC/x4YrBepxSN5dKmq7qIFtV6h20rVN6zcndDjnO', NULL, '2022-10-03 19:59:49', '2022-11-06 20:15:31'),
(2, 'Dinda Tryandhary', 'dinda@gmail.com', 2, NULL, NULL, '$2y$10$AZETFBa9MzVTO1QSJK4Hluj96XfJ9.nAbkNtPAgcOtwSwfBT4tyE2', NULL, '2022-10-03 20:00:12', '2022-10-03 20:00:12'),
(3, 'Super Admin', 'superadmin@gmail.com', 1, 'UIMG_202211076368795e7e64b.jpg', NULL, '$2y$10$C9MNUi7At8coyrV9lxdpVORYQGMvkO1J.okAHLpUtve5OCxcUStxa', NULL, '2022-10-05 20:46:23', '2022-11-06 20:19:58'),
(4, 'Sukhazah', 'sukhazah@gmail.com', 2, NULL, NULL, '$2y$10$YEyM0cDvras7wWrBmKDlmu7hteRDve43xVc9Yvag0f4AbybQHOUtm', NULL, '2022-10-12 20:24:41', '2022-10-12 20:24:41'),
(5, 'Suci zahra', 'suci@gmail.com', 1, 'UIMG_2022102663589eeb64123.jpg', NULL, '$2y$10$TSgo6R4.QE4fuQpIJTvX.eT26MvM5JZpKQ30SJeuJoy1ABKdHsq3S', NULL, '2022-10-22 01:04:14', '2022-10-25 19:48:26'),
(6, 'Ndin', 'dindatry10@gmail.com', 1, '16161666753116_avatar.png', NULL, '$2y$10$7CpFNPPwUXRWP.SApX16h.zZlhGSKrHk2KYseJnOqvyjgATbax8Ba', NULL, '2022-10-25 19:58:36', '2022-10-25 19:58:36'),
(7, 'Tria Adinda', 'dindatry08@gmail.com', 1, '234881666755161_avatar.png', NULL, '$2y$10$lS/hPHd/4iXwIkpahp7JTuNlef/foBR7j0ebCrROwYkTjm0e.INTC', NULL, '2022-10-25 20:32:41', '2022-10-25 20:32:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id_hp` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
