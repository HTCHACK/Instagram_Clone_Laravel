-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2021 at 01:23 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instagram.loc`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `description`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Asad', 5, 3, '2021-07-05 09:15:04', '2021-07-05 09:15:04'),
(3, 'Alisher ', 5, 2, '2021-07-05 09:20:04', '2021-07-05 09:20:04'),
(4, 'Ipman , Bhatra', 5, 3, '2021-07-05 12:07:30', '2021-07-05 12:07:30'),
(5, 'alisher', 4, 3, '2021-07-05 12:09:56', '2021-07-05 12:09:56'),
(6, 'si quvvati', 6, 3, '2021-07-05 12:31:13', '2021-07-05 12:31:13'),
(7, 'si quvvati', 6, 3, '2021-07-05 12:31:13', '2021-07-05 12:31:13'),
(8, 'qwerty', 6, 3, '2021-07-05 12:31:22', '2021-07-05 12:31:22'),
(9, 'biologik', 5, 3, '2021-07-05 12:31:45', '2021-07-05 12:31:45'),
(10, 'xavfli bosqich', 3, 3, '2021-07-05 12:32:07', '2021-07-05 12:32:07'),
(11, 'siquvvati', 4, 2, '2021-07-05 13:26:07', '2021-07-05 13:26:07'),
(12, 'vinchun', 4, 2, '2021-07-05 13:26:23', '2021-07-05 13:26:23'),
(13, 'qqqq', 7, 5, '2021-07-05 18:26:06', '2021-07-05 18:26:06'),
(14, 'qwed', 1, 5, '2021-07-05 18:26:30', '2021-07-05 18:26:30'),
(15, 'Si Quvvati', 7, 3, '2021-07-06 00:11:03', '2021-07-06 00:11:03'),
(16, 'New Followers', 7, 8, '2021-07-06 04:30:38', '2021-07-06 04:30:38'),
(17, 'Google', 8, 8, '2021-07-06 04:31:36', '2021-07-06 04:31:36'),
(18, 'Buloqlarda', 9, 8, '2021-07-06 04:47:36', '2021-07-06 04:47:36'),
(19, 'ukam', 3, 9, '2021-07-06 04:51:25', '2021-07-06 04:51:25'),
(20, 'ios', 10, 9, '2021-07-06 05:06:51', '2021-07-06 05:06:51'),
(21, 'asadbek', 10, 3, '2021-07-06 05:17:20', '2021-07-06 05:17:20'),
(22, 'Egypt', 1, 3, '2021-07-06 05:19:03', '2021-07-06 05:19:03'),
(23, 'YunusEmrom', 1, 3, '2021-07-06 05:40:41', '2021-07-06 05:40:41');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `auth_user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `user_id`, `auth_user_id`, `created_at`, `updated_at`) VALUES
(69, 2, 3, '2021-07-06 03:05:34', '2021-07-06 03:05:34'),
(70, 3, 7, '2021-07-06 03:48:15', '2021-07-06 03:48:15'),
(71, 6, 3, '2021-07-06 03:57:51', '2021-07-06 03:57:51'),
(72, 3, 6, '2021-07-06 04:00:28', '2021-07-06 04:00:28'),
(73, 7, 6, '2021-07-06 04:01:13', '2021-07-06 04:01:13'),
(74, 4, 3, '2021-07-06 04:04:11', '2021-07-06 04:04:11'),
(75, 5, 3, '2021-07-06 04:05:30', '2021-07-06 04:05:30'),
(76, 6, 7, '2021-07-06 04:09:19', '2021-07-06 04:09:19'),
(77, 2, 7, '2021-07-06 04:09:31', '2021-07-06 04:09:31'),
(78, 4, 7, '2021-07-06 04:09:37', '2021-07-06 04:09:37'),
(79, 5, 7, '2021-07-06 04:09:46', '2021-07-06 04:09:46'),
(80, 3, 5, '2021-07-06 04:17:30', '2021-07-06 04:17:30'),
(81, 2, 5, '2021-07-06 04:17:43', '2021-07-06 04:17:43'),
(82, 7, 3, '2021-07-06 04:28:54', '2021-07-06 04:28:54'),
(83, 3, 8, '2021-07-06 04:30:06', '2021-07-06 04:30:06'),
(84, 4, 8, '2021-07-06 04:30:15', '2021-07-06 04:30:15'),
(85, 7, 8, '2021-07-06 04:47:50', '2021-07-06 04:47:50'),
(86, 3, 9, '2021-07-06 04:49:02', '2021-07-06 04:49:02'),
(87, 9, 3, '2021-07-06 05:08:10', '2021-07-06 05:08:10'),
(88, 8, 3, '2021-07-06 06:14:45', '2021-07-06 06:14:45'),
(89, 9, 7, '2021-07-06 06:17:40', '2021-07-06 06:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `like_dislikes`
--

CREATE TABLE `like_dislikes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `like_dislikes`
--

INSERT INTO `like_dislikes` (`id`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 5, 7, '2021-07-06 02:07:20', '2021-07-06 02:07:20'),
(2, 6, 7, '2021-07-06 02:07:29', '2021-07-06 02:07:29'),
(3, 5, 3, '2021-07-06 03:39:58', '2021-07-06 03:39:58'),
(4, 7, 3, '2021-07-06 03:47:20', '2021-07-06 03:47:20'),
(5, 7, 6, '2021-07-06 04:03:02', '2021-07-06 04:03:02'),
(6, 3, 3, '2021-07-06 04:04:25', '2021-07-06 04:04:25'),
(7, 4, 5, '2021-07-06 04:15:41', '2021-07-06 04:15:41'),
(8, 1, 5, '2021-07-06 04:16:15', '2021-07-06 04:16:15'),
(9, 1, 3, '2021-07-06 04:19:26', '2021-07-06 04:19:26'),
(10, 4, 3, '2021-07-06 04:19:35', '2021-07-06 04:19:35'),
(11, 6, 8, '2021-07-06 04:30:20', '2021-07-06 04:30:20'),
(12, 7, 8, '2021-07-06 04:30:25', '2021-07-06 04:30:25'),
(13, 8, 8, '2021-07-06 04:31:29', '2021-07-06 04:31:29'),
(14, 1, 9, '2021-07-06 04:49:27', '2021-07-06 04:49:27'),
(15, 8, 9, '2021-07-06 04:49:34', '2021-07-06 04:49:34'),
(16, 9, 9, '2021-07-06 04:49:38', '2021-07-06 04:49:38'),
(17, 7, 9, '2021-07-06 04:49:43', '2021-07-06 04:49:43'),
(18, 3, 9, '2021-07-06 04:50:59', '2021-07-06 04:50:59'),
(19, 4, 9, '2021-07-06 04:51:04', '2021-07-06 04:51:04'),
(20, 10, 9, '2021-07-06 05:06:30', '2021-07-06 05:06:30'),
(21, 10, 3, '2021-07-06 05:17:09', '2021-07-06 05:17:09'),
(22, 9, 3, '2021-07-06 06:13:24', '2021-07-06 06:13:24'),
(23, 3, 7, '2021-07-06 06:17:20', '2021-07-06 06:17:20'),
(24, 1, 7, '2021-07-06 06:17:23', '2021-07-06 06:17:23'),
(25, 4, 7, '2021-07-06 06:17:26', '2021-07-06 06:17:26');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2021_07_05_085343_create_posts_table', 1),
(13, '2021_07_05_085409_create_comments_table', 1),
(19, '2021_07_06_043554_create_like_dislikes_table', 2),
(20, '2021_07_06_062147_create_follows_table', 2),
(21, '2021_07_06_062230_create_unfollows_table', 2);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptions` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `likes_count` int(11) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `photo`, `descriptions`, `likes_count`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'public//pdlzDCTMzJZ3rGlrvAD8.jpg', 'Screen readers will have trouble with your forms if you don’t include a label for every input. For these input groups, ensure that any additional label or functionality is conveyed to assistive technologies.', 0, 3, '2021-07-05 07:01:58', '2021-07-06 05:18:43'),
(3, 'public//1IDDImFwpobZMDr97f0d.jpg', '@endforeach', 0, 3, '2021-07-05 07:07:08', '2021-07-05 23:34:55'),
(4, 'public//INiy2uxA0LpxOi3YmZG0.jpg', '@endforeach', 0, 3, '2021-07-05 07:07:17', '2021-07-05 07:07:17'),
(5, 'public//bo66ETGYb2l4fD7UQyVR.jpg', 'Screen readers will have trouble with your forms if you don’t include a label for every input. For these input groups, ensure that any additional label or functionality is conveyed to assistive technologies.', 0, 2, '2021-07-05 07:37:40', '2021-07-05 07:37:40'),
(6, 'public//hbcHcOPe5jv5mRTBwL0b.jpg', 'Ichki quvvat , Si quvvati', 0, 4, '2021-07-05 12:18:42', '2021-07-05 12:18:42'),
(7, 'public//QLVMxji5TN8ysANAuDy4.png', 'Mind peace', 0, 5, '2021-07-05 17:58:15', '2021-07-05 17:58:15'),
(8, 'public//rliQQk65rk24NmoJXJun.svg', 'Nothing will be casual', 0, 8, '2021-07-06 04:31:19', '2021-07-06 04:31:19'),
(9, 'public//TcimbFssZk4IJl3oIqRU.svg', 'apple macbook', 0, 8, '2021-07-06 04:47:20', '2021-07-06 04:47:20'),
(10, 'public//LSZFLVBp3UyjNneDjeUa.svg', 'PayPal', 0, 9, '2021-07-06 04:51:54', '2021-07-06 04:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `unfollows`
--

CREATE TABLE `unfollows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `auth_user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unfollows`
--

INSERT INTO `unfollows` (`id`, `user_id`, `auth_user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2021-07-06 03:05:37', '2021-07-06 03:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `photo`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Alisher', 'public//glmKTGUTQGf142cq0iD1.png', 'alishernavoiy', 'alisher@gmail.com', NULL, '$2y$10$cQnb5soE1c21VUwBgyftaON8dlTdtki3h1KQX502Rrkdq6vhteRdS', NULL, '2021-07-05 05:30:32', '2021-07-05 13:34:52'),
(3, 'Asadbek', 'public//K2hhxRm3Av8suuMsqAGR.jpg', 'oop', 'asad@gmail.com', NULL, '$2y$10$JRPgRs4rNtowzajDWlqZg.0UtvuFV95BlBIQ9PFGq60VV5mDrcIJK', NULL, '2021-07-05 06:10:37', '2021-07-06 00:12:33'),
(4, 'Ipman', 'public//bQy797boqr8eequ8OCP6.png', 'ipman', 'ipman@gmail.com', NULL, '$2y$10$KK9JCagFoiRO.k7i3xrO5.Jf4FrJDKnicqiCdOBNyd97BI7EdZ1GC', NULL, '2021-07-05 12:17:20', '2021-07-05 12:17:32'),
(5, 'shifu', 'public//9BR5a2UsnJF2hksDBcdd.jpg', 'shifu', 'shifu@gmail.com', NULL, '$2y$10$H5bJKmEX.pnwrtSf.mAXtew6v..RRiPkmVzzcKWffudE3zf3h84WK', NULL, '2021-07-05 17:57:43', '2021-07-05 18:23:47'),
(6, 'siquva', 'public//4c0Sb7NITiRdbBZThhrR.jpg', 'si', 'si@gmail.com', NULL, '$2y$10$OtfhLsTuv7z0xYpWKh/uz.qu0qGy284bA3eaKE6LTgURO65okwTje', NULL, '2021-07-06 01:03:32', '2021-07-06 01:03:56'),
(7, 'newone', 'public//hP3sirSi6SObu0L0xJtU.jpg', '12345678', 'new@gmail.com', NULL, '$2y$10$iZElRGR5g0cpo/H.XiokHuN1H7ikuUErvlZijWTo6X61Sfn5xelQe', NULL, '2021-07-06 02:02:03', '2021-07-06 02:02:17'),
(8, 'follow', 'public//ORhBK1M7oRU4ZOgguWcX.jpg', 'follow', 'follow@gmail.com', NULL, '$2y$10$gPGt5pG9XtJmd/UHBCE/lOtloas1Mtq.Cm0PBU/ar8wTV8f/WOtXC', NULL, '2021-07-06 04:29:46', '2021-07-06 04:30:00'),
(9, 'apple', 'public//O4DJTSJMDUJAN37cpLXa.svg', 'apple', 'apple@gmail.com', NULL, '$2y$10$nEJXwTjwqf2Q5sluav98Tus1Tu9mFiWkXjkNzZsyAyoqgusyMIq2S', NULL, '2021-07-06 04:48:26', '2021-07-06 04:48:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_dislikes`
--
ALTER TABLE `like_dislikes`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unfollows`
--
ALTER TABLE `unfollows`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `like_dislikes`
--
ALTER TABLE `like_dislikes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `unfollows`
--
ALTER TABLE `unfollows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
