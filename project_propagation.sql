-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 05:35 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_propagation`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `child`, `created_at`, `updated_at`) VALUES
(5, 2, 'لوازم و اثاثه', 0, '2018-02-21 07:07:13', '2018-02-21 07:07:13'),
(6, 2, 'خدمات در منزل', 0, '2018-02-21 07:07:32', '2018-02-21 07:07:32'),
(7, 2, 'پزشکی و درمان', 0, '2018-02-21 07:07:50', '2018-02-21 07:07:50'),
(8, 2, 'تعمیر و خرید و فروش', 5, '2018-02-21 07:08:15', '2018-02-21 07:08:15'),
(9, 2, 'امور نظافتی', 6, '2018-02-21 07:08:38', '2018-02-21 07:08:38'),
(10, 2, 'امور مراقبتی', 6, '2018-02-21 07:08:56', '2018-02-21 07:08:56'),
(11, 2, 'امور منزل', 6, '2018-02-21 07:09:12', '2018-02-21 07:09:12'),
(12, 2, 'درمان', 7, '2018-02-21 07:09:33', '2018-02-21 07:09:33'),
(13, 2, 'لوازم', 7, '2018-02-21 07:09:51', '2018-02-21 07:09:51'),
(14, 2, 'سلامت و زیبایی', 7, '2018-02-21 07:10:08', '2018-02-21 07:10:08'),
(15, 2, 'استخدام', 0, '2018-02-21 07:24:58', '2018-02-21 07:24:58'),
(16, 2, 'آرایشگر', 15, '2018-02-21 07:26:38', '2018-02-21 07:26:38'),
(17, 2, 'آشپز و مشاغل مربوط', 15, '2018-02-21 07:27:00', '2018-02-21 07:27:00'),
(18, 2, 'بازاریاب', 15, '2018-02-21 07:27:19', '2018-02-21 07:27:19'),
(19, 2, 'برنامه نویس', 15, '2018-02-21 07:27:37', '2018-02-21 07:27:37'),
(20, 2, 'بسته بند', 15, '2018-02-21 07:27:57', '2018-02-21 07:27:57'),
(21, 2, 'پزشک و مشاغل مربوط', 15, '2018-02-21 07:28:51', '2018-02-21 07:28:51'),
(22, 2, 'پیک', 15, '2018-02-21 07:29:06', '2018-02-21 07:29:06'),
(23, 2, 'تعمیرکار', 15, '2018-02-21 07:29:20', '2018-02-21 07:29:20'),
(24, 2, 'تکنسین', 15, '2018-02-21 07:30:10', '2018-02-21 07:30:10'),
(25, 2, 'حسابدار', 15, '2018-02-21 07:30:29', '2018-02-21 07:30:29'),
(26, 2, 'راننده', 15, '2018-02-21 07:30:56', '2018-02-21 07:30:56'),
(27, 2, 'خیاط و مشاغل مربوط', 15, '2018-02-21 07:31:55', '2018-02-21 07:31:55'),
(28, 2, 'طراح', 15, '2018-02-21 07:32:10', '2018-02-21 07:32:10'),
(29, 2, 'فروشنده', 15, '2018-02-21 07:32:27', '2018-02-21 07:32:27'),
(30, 2, 'کارشناس', 15, '2018-02-21 07:32:41', '2018-02-21 07:32:41'),
(31, 2, 'کارگر ساده', 15, '2018-02-21 07:33:03', '2018-02-21 07:33:03'),
(32, 2, 'کارگر ماهر', 15, '2018-02-21 07:33:55', '2018-02-21 07:33:55'),
(33, 2, 'کارمند', 15, '2018-02-21 07:34:09', '2018-02-21 07:34:09'),
(34, 2, 'مدرس', 15, '2018-02-21 07:34:22', '2018-02-21 07:34:22'),
(35, 2, 'مدیر', 15, '2018-02-21 07:34:36', '2018-02-21 07:34:36'),
(36, 2, 'مربی', 15, '2018-02-21 07:34:49', '2018-02-21 07:34:49'),
(37, 2, 'مشاور', 15, '2018-02-21 07:35:02', '2018-02-21 07:35:02'),
(38, 2, 'منشی', 15, '2018-02-21 07:35:15', '2018-02-21 07:35:15'),
(39, 2, 'مهندس', 15, '2018-02-21 07:35:29', '2018-02-21 07:35:29'),
(40, 2, 'مشاغل گوناگون', 15, '2018-02-21 07:35:45', '2018-02-21 07:35:45');

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
(53, '2014_10_12_000000_create_users_table', 1),
(54, '2014_10_12_100000_create_password_resets_table', 1),
(55, '2018_02_10_194341_create_propagations_table', 1),
(56, '2018_02_10_195301_create_categories_table', 1),
(57, '2018_03_01_164740_info_site', 2);

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
-- Table structure for table `propagations`
--

CREATE TABLE `propagations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view-count` int(11) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `expire` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propagations`
--

INSERT INTO `propagations` (`id`, `user_id`, `title`, `description`, `city`, `category`, `email`, `tel`, `image`, `view-count`, `active`, `expire`, `created_at`, `updated_at`) VALUES
(17, 2, 'آمبولانس خصوصی', 'آمبولانس سجاد', 'فارس', 'درمان', 'matin.eqbali74@gmail.com', '09367683492', '/upload/images/2018/1.jpg', 0, 1, NULL, '2018-02-21 07:13:55', '2018-02-21 07:13:55'),
(18, 2, 'قالیشویی اشکان', 'خشکشویی مبل و موکت\r\nسرویس سراسر شهر', 'تهران', 'امور نظافتی', 'matin.eqbali74@gmail.com', '09367683492', '/upload/images/2018/2.jpg', 0, 1, NULL, '2018-02-21 07:15:50', '2018-02-21 07:15:50'),
(19, 2, 'پنکه-کولر', 'کولر گازی ارزان\r\nفروش،نصب،تعمیرات', 'قزوین', 'تعمیر و خرید و فروش', 'matin.eqbali74@gmail.com', '09367683492', '/upload/images/2018/3.jpg', 0, 1, NULL, '2018-02-21 07:17:12', '2018-02-21 07:17:12'),
(20, 2, 'پیراهن مبل مهدی', 'پارچه ای،طلقی،آماده بدون حمل مبلپارچه ای،طلقی،آماده بدون حمل مبلپارچه ای،طلقی،آماده بدون حمل مبلپارچه ای،طلقی،آماده بدون حمل مبل', 'قزوین', 'تعمیر و خرید و فروش', 'matin.eqbali74@gmail.com', '09367683492', '/upload/images/2018/4.jpg', 0, 1, NULL, '2018-02-21 07:18:42', '2018-02-21 07:18:42'),
(21, 1, 'حسابدار تمام وقت', 'به نیروی کارآمد خانم نیازمندیم', 'قزوین', 'حسابدار', 'leila.eqbali74@gmail.com', '09367683492', '/upload/images/2018/job.jpg', 0, 1, NULL, '2018-02-21 07:39:43', '2018-02-21 07:48:50'),
(22, 1, 'کارگر ماهر', 'کارگر کیف و کفش', 'قزوین', 'تعمیر و خرید و فروش', 'leila.eqbali74@gmail.com', '09367683492', '/upload/images/2018/job.jpg', 0, 1, NULL, '2018-02-21 07:40:50', '2018-02-21 07:48:49'),
(23, 1, 'مهندس عمران', 'جهت معاملات ملکی و دکوراسیون', 'قزوین', 'مهندس', 'leila.eqbali74@gmail.com', '09367683492', '/upload/images/2018/6-.jpg', 0, 1, NULL, '2018-02-21 07:42:38', '2018-02-21 07:48:47'),
(24, 1, 'اپراتور کامپیوتر', 'جهت کار در انتشارات،نیازمندیم.', 'تهران', 'کارمند', 'leila.eqbali74@gmail.com', '09367683492', '/upload/images/2018/7.jpg', 0, 1, NULL, '2018-02-21 07:45:56', '2018-02-21 07:48:46'),
(25, 1, 'کمک آشپز', 'کافه رستوران پات در باشگاه انقلاب', 'تهران', 'آشپز و مشاغل مربوط', 'leila.eqbali74@gmail.com', '09367683492', '/upload/images/2018/8.png', 0, 1, NULL, '2018-02-21 07:47:18', '2018-02-21 07:48:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `active`, `level`, `fname`, `lname`, `email`, `tel`, `city`, `image`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 'user', 'leila', 'eqbali', 'leila.eqbali74@gmail.com', '09367683492', 'qazvin', NULL, 'leilaeqbali', '$2y$10$VVKjR4zCQdmLmM13L/aEu.D5m9rgjIZ58GV3w/CLMuPBqB.QiUdfW', 'FiRE1CuxaaX2sjntNW0Ft3v07VmVjinA50qpZqvMYSiPzbpRNfXVWONtqSzI', '2018-02-18 12:08:14', '2018-02-18 15:23:43'),
(2, 0, 'admin', 'matiniii', 'eqbaliii', 'matin.eqbali74@gmail.com', '09367683492', 'qazvin', NULL, 'matineqbali', '$2y$10$rL.lKgydtQrMYJEqgkTdfOsDXS2BE8a.zve2JxcMohktaRic6us2K', 'DKfBbvrHSFHECLYNCuC2UFmLt43K5lHufOOMxgBwvrA7pfDtF8rgQ3aOIvap', '2018-02-18 12:09:00', '2018-03-01 13:01:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

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
-- Indexes for table `propagations`
--
ALTER TABLE `propagations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propagations_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `propagations`
--
ALTER TABLE `propagations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `propagations`
--
ALTER TABLE `propagations`
  ADD CONSTRAINT `propagations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
