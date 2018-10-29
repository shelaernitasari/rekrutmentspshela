-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 02:17 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekrutmentspshela`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_28_100739_create_roles_table', 1),
(4, '2018_10_28_101731_create_services_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nama_role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2018-11-27 17:00:00', '2018-11-27 17:00:00'),
(2, 'Manager', '2018-11-25 17:00:00', '2018-11-27 17:00:00'),
(3, 'IT Support', '2018-11-27 17:00:00', '2018-11-27 17:00:00'),
(4, 'Karyawan', '2018-11-27 17:00:00', '2018-11-27 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perangkat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_user_memperbaiki` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progres` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `id_user`, `nama_user`, `nama_perangkat`, `keterangan`, `nama_user_memperbaiki`, `progres`, `created_at`, `updated_at`) VALUES
(1, 4, 'shela ernita', 'Printer', 'Rusak', 'sari', 1, '2018-11-25 17:00:00', '2018-10-28 05:47:34'),
(2, 2, 'ernita', 'CPU', 'Down', 'sari', 2, '2018-11-25 17:00:00', '2018-10-28 23:41:24'),
(4, 7, 'ernita sari', 'Monitor', 'Tidak bisa nyala', NULL, NULL, '2018-11-25 17:00:00', '2018-10-29 05:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_role` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelepon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_role`, `name`, `email`, `password`, `notelepon`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 3, 'sari', 'sari@gmail.com', '$2y$10$L5/65wK04M5VNyCcywKd4OrzQDpRn63pBfg6KJURgKZuNTh2vsmIO', '081225255168', '4ctaPZ0JXMTNxJzwEvzEHqruMYksjrVBdy1lsY4PxSEAdrLvnjRRKv6qedMK', '2018-10-29 00:10:44', '2018-10-29 00:10:44'),
(4, 4, 'shela ernita', 'shelaer@gmail.com', '$2y$10$bp9wXn6KUN/vATeOGXSbVePZicgzD4Bk8OpSaZWWO71pm2P9shkPO', '081225255168', 'QrC3boSgJqf17XoJd5vMpqAlroacjFv1yZv8Blj1pGYY6jgyuCyCZJEuCrJ5', '2018-10-29 00:25:18', '2018-10-29 00:25:18'),
(5, 1, 'shela', 'shela@gmail.com', '$2y$10$1Fd3XAU3PWtETZ5QqUG7iemlQm5JY1UbkXCZdVWoTVfymAkZTGD/W', '081225255168', 'WsnVvitINOcD7rnkBh01eoVMcTiMOsvzuyrAb4fR0BudW1dbDw6RqEFYS768', '2018-10-29 04:04:16', '2018-10-29 04:04:16'),
(6, 2, 'ernita', 'ernita@gmail.com', '$2y$10$9n7rlpBpqJLR/CiOZaUefeGCh76dMhWfKdSxZByvfHahf7rQx2AWa', '081225255168', 'swn2vkkXvVeTGkiANyGpU7t3a8ToTOffl1KI47MNFgbxFuSDUP4aTe4FSP2y', '2018-10-29 04:06:58', '2018-10-29 04:06:58'),
(7, 4, 'ernita sari', 'ernitasari@gmail.com', '$2y$10$91wsdhWw2pZTtSmPwA1L7OXfz2wWo5bQBRkB4hPv8ImzGLC/0Fdba', '081225255168', 'alUlS0u8QSikup3sYSVcK5FeFsoiLOqExI6KfRTjuGNc4fcEOPxCflDVkpZb', '2018-10-29 05:33:24', '2018-10-29 05:33:24');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
