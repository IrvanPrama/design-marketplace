-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 10:23 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akudesain`
--

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `design1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `design2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `design3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`id`, `name`, `user_id`, `title`, `description`, `design1`, `design2`, `design3`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(26, 'designer Cool', '3', 'Logo DCO Coffee', 'Deskripsi', 'designer_3asset-8@2x.png', 'designer_3asset-9.png', 'designer_3asset-35.png', NULL, NULL, '2021-05-03 14:45:57', '2021-05-03 14:45:57'),
(27, 'designer Cool', '3', 'Logo Coffee', 'Deskripsi', 'eKAhEdesigner3_asset-11.png', 'eKAhEdesigner3_6.png', 'eKAhEdesigner3_asset-29.png', NULL, NULL, '2021-05-03 15:16:06', '2021-05-03 15:16:06'),
(28, 'Coki jagatdithaa', '4', 'Logo DCO Coffee', 'Deskripsi', 'v6N6gdesigner4_hipmi.png', 'v6N6gdesigner4_mulai merintis.png', 'v6N6gdesigner4_HIPDEN.jpeg', '4designer_sekum.jpg', NULL, '2021-05-03 16:56:30', '2021-05-03 16:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `done`
--

CREATE TABLE `done` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `design_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `designer_id` varchar(100) DEFAULT NULL,
  `title_design` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `budget` varchar(100) DEFAULT NULL,
  `deadline` varchar(100) DEFAULT NULL,
  `image1` varchar(100) DEFAULT NULL,
  `image2` varchar(100) DEFAULT NULL,
  `image3` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `done`
--

INSERT INTO `done` (`id`, `user_id`, `design_id`, `name`, `designer_id`, `title_design`, `description`, `avatar`, `budget`, `deadline`, `image1`, `image2`, `image3`, `updated_at`, `created_at`) VALUES
(1, 1, 22, 'user Ganz', '3', 'Kemasan produk', 'Buat design kemasan produk cemilan, simple dan menyenangkan', 'default.jpg', 'Rp.200.000', '23 Januari 2021', '', '', '', '2021-04-27 12:34:36', '2021-04-27 12:34:36'),
(2, 1, 21, 'user Ganz', '3', 'logo photography', 'Buat design logo fotografi, simple tapi bermakna', 'default.jpg', 'Rp. 300.000', '1 Desember 2020', 'poster.jpg', 'asset-4.png', '5@2x.png', '2021-04-27 13:53:53', '2021-04-27 13:53:53'),
(3, 1, 28, 'user Ganz', '4', 'Logo DCO Coffee', 'Deskripsi', NULL, 'Rp 100.000', '2021-06-01', 'v6N6gdesigner4_hipmi.png', 'v6N6gdesigner4_mulai merintis.png', 'v6N6gdesigner4_HIPDEN.jpeg', '2021-05-04 20:30:44', '2021-05-04 20:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2021_03_24_061859_review', 2),
(14, '2021_03_24_073012_designs', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(100) DEFAULT NULL,
  `title_design` varchar(200) DEFAULT NULL,
  `designer_id` int(11) DEFAULT NULL,
  `design_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `no_hp_designer` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `example_img` varchar(100) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `budget` varchar(100) DEFAULT NULL,
  `deadline` varchar(100) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `time_stamps` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `title_design`, `designer_id`, `design_id`, `name`, `email`, `no_hp`, `no_hp_designer`, `description`, `example_img`, `avatar`, `category`, `budget`, `deadline`, `remember_token`, `time_stamps`, `created_at`, `updated_at`) VALUES
(8, 1, 'Logo DCO Coffee', 4, 28, 'user Ganz', 'user@gmail.com', '08585888818', NULL, 'Deskripsi', NULL, NULL, 'logo', 'Rp 100.000', '2021-05-05', NULL, NULL, '2021-05-04 23:15:03', '2021-05-04 23:15:03'),
(9, 1, 'Logo Coffee', 3, 27, 'user Ganz', 'user@gmail.com', '08585888818', NULL, 'Deskripsi', NULL, NULL, 'logo', 'Rp 400.000', '2021-05-07', NULL, NULL, '2021-05-04 23:16:50', '2021-05-04 23:16:50');

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
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `designer_id` int(11) DEFAULT NULL,
  `design_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `title_design` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `deadline` varchar(100) DEFAULT NULL,
  `budget` varchar(20) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `updated_at` varchar(200) NOT NULL,
  `created_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `row` int(10) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `user_id`, `review`, `row`, `remember_token`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Irvan', '3', 'Pengerjaan cepat, harga bersahabat. Top cerrr', 1, NULL, 'default.jpg', '2021-03-23 22:46:34', '2021-03-23 22:46:34'),
(2, 'Awok', '2', 'Udah 3 kali order di AkuDesain, hasil design memuaskan. Designer Yang ngerjain berpengalaman.', 2, NULL, 'default.jpg', NULL, NULL),
(4, 'designer Cool', '3', 'Orderan desain saya jadi banyak, gak nyesel gabung di AkuDesaiin', 1, NULL, NULL, '2021-03-26 05:58:04', '2021-03-26 05:58:04'),
(5, 'Coki jagatditha', '4', 'Saya sudah 6 bualn gabung di AkuDesain, sekarang saya bisa membeli peralatan design yang lebih komplit.', 1, NULL, NULL, '2021-03-26 06:00:33', '2021-03-26 06:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `born` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `until` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `step` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `no_hp`, `role`, `job`, `about`, `born`, `experience`, `start`, `until`, `step`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user Ganz', 'user@gmail.com', 'yougo', '08585888818', 'user', 'Pekerjaan', 'Ceritakan sedikit tentang anda (max: 300 karakter)', '2021-05-01', 'pebisnis kuliner', NULL, NULL, NULL, NULL, NULL, '$2y$10$XpUR7oGgsY3NIXhj2oAMdeFZKAqf0OZAmc0Ho4KAIZD0T7l9ylMW6', 'dJR2WJdRXCig92NKuSxvtV6u5Q6TetKM3FCM04nYnFdwguI14lyPDjbWZU3X', '2021-03-23 19:58:21', '2021-05-04 14:36:42'),
(3, 'designer Cool', 'bluxfusion@gmail.com', 'irvanprama', '881037757298', 'designer', 'Freelancer', 'Saya adalah seorang free lancer Indonesia', '2021-05-01', 'Indonesia', '2021-05-01', '2021-05-10', '1. Anda memesan\r\n2. Saya mengkonfirmasi dan memastikan pesanan anda.\r\n3. Saya mengerjakan pesanan.\r\n4. Saya mengirim gambaran hasil.\r\n5. Anda memberikan revisi\r\n6. Saya kirim hasil revisi\r\n7. Anda melakukan pembayaran.\r\n8. Saya mengirim design.', '3designer_asset-27.png', NULL, '$2y$10$Wk1ud5SQi0ZNsF1gG4OW7uNWwT6oeKtY.63oA.ccm6yuggPLpYaYS', NULL, '2021-03-23 20:32:04', '2021-05-04 19:28:50'),
(4, 'Coki jagatdithaa', 'jojojo@gmail.com', 'cokicko', '18010200', 'designer', 'Dosen', NULL, NULL, NULL, NULL, '', NULL, '4designer_sekum.jpg', NULL, '$2y$10$ns1GqTAii/h4ZkwoKqw3GOOw1pSpH9Jjd.nFAXi123cWyjzEcyOnW', NULL, '2021-03-24 19:42:21', '2021-05-03 16:55:35'),
(5, 'Bhagawan Bhyasa', 'jakijaki@gmail.com', 'baga', '18010200', 'user', 'Mahasiswa', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '$2y$10$IQpdm25mxmHL1tFWc9/A.OXdZymD3Ed7igs4CkjS7/DvP93L3ukwW', NULL, '2021-03-24 20:26:12', '2021-03-24 20:26:12'),
(8, 'Wayan Mulyawan 1', 'wayan1@gmail.com', 'wayan1', '08810223023', 'designer', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '$2y$10$f9rG7OLC2XGBvOrAVztzNOhJXa7zqGR56vP9R75TzeZ426M.Yb.sq', NULL, '2021-03-26 05:20:26', '2021-03-26 05:20:26'),
(9, 'admin', 'admin@gmail.com', NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '$2y$10$s/WbY1hbksMVxBthl1zdDe1OR6wF.c.KyRjmK36zzvbOmfcS2vwgS', NULL, '2021-04-01 22:42:54', '2021-04-01 22:42:54'),
(10, 'Wawan Indrawan', 'wawan@gmail.com', 'wawancool', '881223023', 'designer', 'Pegawai Kotrak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$GwFqwZj3xTouErW3Dx7.rehEItqJydAVhqHw8qHVMPJCkRXv0FW4a', NULL, '2021-05-04 23:22:10', '2021-05-04 23:22:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `done`
--
ALTER TABLE `done`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
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
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `done`
--
ALTER TABLE `done`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
