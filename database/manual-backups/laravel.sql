-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 07:18 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

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
-- Table structure for table `iphones`
--

CREATE TABLE `iphones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iphones`
--

INSERT INTO `iphones` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'iPhone', 'This is the very first iPhone. It is sometimes referred to as the \"iPhone 2G\" due to its lack of support for 3G networks.', '2023-01-29 18:19:50', '2023-01-29 18:19:50'),
(2, 'iPhone 3G', 'The back housing is made of plastic. The imprint on the back of the phone is less shiny than the Apple logo above it. There\'s a SIM tray on the top side that holds a \"second form factor\" (2FF) mini-SIM. The serial number is printed on the SIM', '2023-01-29 18:21:51', '2023-01-29 18:21:51'),
(3, 'iPhone 3GS', 'The back housing is made of plastic. The imprint on the back case is the same bright and shiny silver as the Apple logo. There\'s a SIM tray on the top side that holds a \"second form factor\" (2FF) mini-SIM. The serial number is printed on the SIM tray.', '2023-01-29 18:22:28', '2023-01-29 18:22:28'),
(4, 'iPhone 4', 'The front and back are flat and made of glass, and there\'s a stainless steel band around the edges. The volume up and down buttons are marked with a \"+\" and \"-\" sign. There\'s a SIM tray on the right side that holds a \"third form factor\" (3FF) micro-SIM card. The CDMA model has no SIM tray.', '2023-01-29 18:22:56', '2023-01-29 18:22:56'),
(5, 'iPhone 4s', 'The front and back are flat and made of glass, and there\'s a stainless steel band around the edges. The volume up and down buttons are marked with a \"+\" and \"-\" sign. There\'s a SIM tray on the right side that holds a \"third form factor\" (3FF) micro-SIM card.', '2023-01-29 18:23:15', '2023-01-29 18:23:15'),
(6, 'iPhone 5', 'The front is flat and made of glass. The back is anodized aluminum. There\'s a SIM tray on the right side that holds a \"fourth form factor\" (4FF) nano-SIM card. The IMEI is etched on the back cover.', '2023-01-29 18:23:31', '2023-01-29 18:23:31'),
(7, 'iPhone 5c', 'The front is flat and made of glass. The back is hard-coated polycarbonate (plastic). There\'s a SIM tray on the right side that holds a \"fourth form factor\" (4FF) nano-SIM card. The IMEI is etched on the back cover.', '2023-01-29 18:23:49', '2023-01-29 18:23:49'),
(8, 'iPhone 5s', 'The front is flat and made of glass. The back is anodized aluminum. The Home button contains Touch ID. There\'s a True Tone LED flash on the back and a SIM tray on the right side that holds a \"fourth form factor\" (4FF) nano-SIM card. The IMEI is etched on the back cover.', '2023-01-29 18:24:03', '2023-01-29 18:24:03'),
(9, 'iPhone 6 Plus', 'The display is 5.5 inches (diagonal). The front has curved edges and is made of glass. The back is anodized aluminum. The Sleep/Wake button is on the right side of the device. The Home button has Touch ID. There\'s a True Tone LED flash on the back and a SIM tray on the right side that holds a \"fourth form factor\" (4FF) nano-SIM card. The IMEI is etched on the back cover.', '2023-01-29 18:24:29', '2023-01-29 18:24:29'),
(10, 'iPhone 6', 'The display is 4.7 inches (diagonal). The front is flat with curved edges and is made of glass. The back is anodized aluminum. The Sleep/Wake button is on the right side of the device. The Home button has Touch ID. There\'s a True Tone LED flash on the back and a SIM tray on the right side that holds a \"fourth form factor\" (4FF) nano-SIM card. The IMEI is etched on the back cover.', '2023-01-29 18:24:46', '2023-01-29 18:24:46'),
(11, 'iPhone 6s Plus', 'The display is 5.5 inches (diagonal). The front is flat with curved edges and is made of glass. The back is anodized aluminum with a laser-etched \"S\". The Sleep/Wake button is on the right side of the device. The Home button has Touch ID. There\'s a True Tone LED flash on the back and a SIM tray on the right side that holds a \"fourth form factor\" (4FF) nano-SIM card. The IMEI is etched on the SIM tray.', '2023-01-29 18:25:00', '2023-01-29 18:25:00'),
(12, 'iPhone 6s', 'The display is 4.7 inches (diagonal). The glass front is flat with curved edges. The back is anodized aluminum with a laser-etched \"S\". The Sleep/Wake button is on the right side of the device. The Home button has Touch ID. There\'s a True Tone LED flash on the back and a SIM tray on the right side that holds a \"fourth form factor\" (4FF) nano-SIM card. The IMEI is etched on the SIM tray.', '2023-01-29 18:25:21', '2023-01-29 18:25:21'),
(13, 'iPhone SE (1st generation)', 'The display is 4 inches (diagonal). The glass front is flat. The back is anodized aluminum with matte chamfered edges and a stainless steel inset logo. The Sleep/Wake button is on the top of the device. The Home button has Touch ID. There\'s a True Tone LED flash on the back and a SIM tray on the right side that holds a \"fourth form factor\" (4FF) nano-SIM card. The IMEI is etched on the back cover.', '2023-01-29 18:25:35', '2023-01-29 18:25:35'),
(14, 'iPhone 7 Plus', 'The display is 5.5 inches (diagonal). The glass front is flat with curved edges. The back is anodized aluminum. The Sleep/Wake button is on the right side of the device. The device has a solid-state Home button with Touch ID. There are dual 12 MP cameras on the back. There\'s a Quad-LED True Tone flash on the back and a SIM tray on the right side that holds a \"fourth form factor\" (4FF) nano-SIM card. The IMEI is etched on the SIM tray.', '2023-01-29 18:25:50', '2023-01-29 18:25:50'),
(16, 'iPhone 7', 'The display is 4.7 inches (diagonal). The glass front is flat with curved edges. The back is anodized aluminum. The Sleep/Wake button is on the right side of the device. The device has a solid-state Home button with Touch ID. There\'s a Quad-LED True Tone flash on the back and a SIM tray on the right side that holds a \"fourth form factor\" (4FF) nano-SIM card. The IMEI is etched on the SIM tray.', '2023-01-29 18:39:28', '2023-01-29 18:39:28');

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
(5, '2023_01_30_014937_create_iphones_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
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
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `iphones`
--
ALTER TABLE `iphones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iphones`
--
ALTER TABLE `iphones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
