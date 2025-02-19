-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2024 at 03:16 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asm1php3`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Santiago Windler', '2024-07-23 06:37:38', '2024-07-23 06:37:38'),
(2, 'Devonte Skiles', '2024-07-23 06:37:38', '2024-07-23 06:37:38'),
(3, 'Vincenza Connelly', '2024-07-23 06:37:38', '2024-07-23 06:37:38'),
(4, 'Dr. Audra Nitzsche', '2024-07-23 06:37:38', '2024-07-23 06:37:38'),
(5, 'Dr. Eleanore Kutch', '2024-07-23 06:37:38', '2024-07-23 06:37:38'),
(6, 'Ms. Libbie Kuhic', '2024-07-23 06:37:38', '2024-07-23 06:37:38'),
(7, 'Prof. Eleanore Jaskolski III', '2024-07-23 06:37:38', '2024-07-23 06:37:38'),
(8, 'Laverna Quigley', '2024-07-23 06:37:38', '2024-07-23 06:37:38'),
(9, 'Kevin Watsica', '2024-07-23 06:37:38', '2024-07-23 06:37:38'),
(10, 'Evan Senger I', '2024-07-23 06:37:38', '2024-07-23 06:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_23_131129_create_products_table', 1),
(6, '2024_07_23_131151_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Darwin Harris', 'https://via.placeholder.com/640x480.png/00ffee?text=aperiam', '859', 'Qui nulla sint porro ab id voluptatibus. Debitis et itaque qui nihil numquam asperiores. Consequatur qui architecto saepe ut occaecati. Corrupti sit officia velit dolore saepe.', '2024-07-23 06:39:18', '2024-07-23 06:39:18'),
(2, 'Lizzie Brekke', 'https://via.placeholder.com/640x480.png/003322?text=sint', '165', 'Praesentium dolorum nihil omnis amet vel et. Voluptatem quia aut consequuntur nisi eligendi commodi. Omnis corrupti aut id consequatur consequatur. Qui facilis eos eos officia non voluptatibus.', '2024-07-23 06:39:18', '2024-07-23 06:39:18'),
(3, 'Doyle Roob PhD', 'https://via.placeholder.com/640x480.png/0066aa?text=in', '268', 'Facere doloremque libero magni cumque rerum facilis. Labore sed est doloribus sit. Odit aliquam doloremque dicta omnis quae cupiditate. Culpa rerum fugit facere est consequuntur sed animi mollitia.', '2024-07-23 06:39:18', '2024-07-23 06:39:18'),
(4, 'Cary Little IV', 'https://via.placeholder.com/640x480.png/00eeff?text=ratione', '611', 'Eos consequatur aut est molestias. Culpa alias deleniti voluptas. Temporibus non sunt et. Dolor aut et rerum praesentium delectus.', '2024-07-23 06:39:18', '2024-07-23 06:39:18'),
(5, 'Miss Destany Berge', 'https://via.placeholder.com/640x480.png/004400?text=aut', '244', 'In provident laborum omnis voluptas voluptatem et. Unde voluptatum veritatis facilis doloribus voluptas.', '2024-07-23 06:39:18', '2024-07-23 06:39:18'),
(6, 'Agnes Hahn', 'https://via.placeholder.com/640x480.png/002222?text=totam', '385', 'Nam ut distinctio laudantium corporis dignissimos. Et ut sed ex fugiat ea rerum.', '2024-07-23 06:39:18', '2024-07-23 06:39:18'),
(7, 'Edgardo Stokes', 'https://via.placeholder.com/640x480.png/00cc66?text=nam', '121', 'Et blanditiis dolorum assumenda quo qui eum. Temporibus id sunt ut temporibus. Odit consequatur ut placeat culpa cumque possimus. Reiciendis sit est est ut.', '2024-07-23 06:39:18', '2024-07-23 06:39:18'),
(8, 'Eloise Homenick', 'https://via.placeholder.com/640x480.png/00dd88?text=magnam', '622', 'Dolores eum architecto accusamus earum. Cupiditate rerum recusandae qui praesentium.', '2024-07-23 06:39:18', '2024-07-23 06:39:18'),
(9, 'Kay Hermann', 'https://via.placeholder.com/640x480.png/009944?text=totam', '289', 'Ea ut quae voluptatem. Quibusdam mollitia iure consectetur magnam doloribus placeat consequatur. Aut voluptas numquam neque nesciunt.', '2024-07-23 06:39:18', '2024-07-23 06:39:18'),
(10, 'Rhea Doyle Jr.', 'https://via.placeholder.com/640x480.png/00aa66?text=et', '345', 'Eius nemo adipisci aliquam consectetur. Qui sint et et voluptatum numquam. Voluptatem velit sequi odio explicabo voluptatem amet mollitia. Incidunt aut laudantium tempora vero voluptatem.', '2024-07-23 06:39:18', '2024-07-23 06:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
