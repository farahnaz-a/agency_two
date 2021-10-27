-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 05:25 PM
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
-- Database: `agency2`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit i<br><br>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium quia consequuntur magni dolores eos qui ratione voluptate&nbsp;</div>', '1.jpg', NULL, '2021-10-27 03:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `subtitle`, `short_description`, `image`, `button_text`, `button_url`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'We are digital agency', 'We Provide Only Best Service', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt porro eveniet iste consequuntur dignissimos doloremque velit possimus sint atque quasi! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque velit possimus sint atque quasi!', '1.jpg', 'Know us', '#', 'href=\"https://www.youtube.com/watch?v=N775KsWQVkw\"', '2021-10-22 09:13:06', '2021-10-25 07:13:11'),
(6, 'www', 'www', 'www ee', 'people.jpg', 'ww', 'ww', 'ww', '2021-10-23 02:59:43', '2021-10-26 09:19:45'),
(11, 'fdfdf', 'fdfd', 'Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typespecimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more re', '11.jpg', 'dfdfd', 'fdfd', 'fdfd', '2021-10-23 08:08:32', '2021-10-23 08:08:32'),
(12, 'Hi', 'hekko', 'jkf djfkdf dfd', '12.png', 'dfdfd', '#', '#', '2021-10-26 08:55:20', '2021-10-26 09:20:21'),
(14, 'fdf', 'fdfd', 'fdfd', '14.jpg', 'fdf#', '#', '#', '2021-10-26 09:04:42', '2021-10-26 09:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `chooses`
--

CREATE TABLE `chooses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_1_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_1_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_2_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_2_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_3_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_3_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_4_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_4_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chooses`
--

INSERT INTO `chooses` (`id`, `image`, `description`, `description_2`, `block_1_title`, `block_1_image`, `block_2_title`, `block_2_image`, `block_3_title`, `block_3_image`, `block_4_title`, `block_4_image`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores cumque, debitis harum possimus nihil illo a sit atque error eligendi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores cumque, debitis harum possimus nihil illo a sit atque error eligendi.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. odio non totam dolor sed necessitatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. odio non totam dolor reprehenderit deserunt sed necessitatibus. orem ipsum dolor sit, amet consectetur adipisicing elit. odio non totam dolor reprehenderit deserunt sed necessitatibus', 'Best Communication', 'block_1_image.png', '24/7 Support', 'block_2_image.png', 'Huge Experience', 'block_3_image.png', 'Strong Team', 'block_4_image.png', NULL, '2021-10-27 04:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clients_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clients_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `clients_logo`, `clients_url`, `created_at`, `updated_at`) VALUES
(4, '4.png', '#', '2021-10-23 07:42:23', '2021-10-27 05:13:21'),
(5, '5.png', '#', '2021-10-23 07:55:18', '2021-10-26 03:02:26'),
(6, '6.png', '#', '2021-10-23 07:55:35', '2021-10-26 03:02:18'),
(7, '7.png', '#', '2021-10-26 03:03:34', '2021-10-26 03:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theme_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `getInTouch_background_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_background_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `theme_color`, `getInTouch_background_color`, `footer_background_color`, `created_at`, `updated_at`) VALUES
(1, '#ff0000', '#393232', '#000000', NULL, '2021-10-27 08:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(6, 'admin', 'admin@gmail.com', 'hi this is for test purpose', '2021-10-27 09:15:18', '2021-10-27 09:15:18');

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2021_10_22_131046_create_sessions_table', 1),
(13, '2021_10_22_141840_create_banners_table', 2),
(14, '2021_10_23_104515_create_services_table', 3),
(17, '2021_10_23_115450_create_testimonials_table', 4),
(18, '2021_10_23_131754_create_clients_table', 5),
(19, '2021_10_23_141242_create_abouts_table', 6),
(20, '2021_10_23_144426_create_chooses_table', 7),
(22, '2021_10_25_083014_create_socials_table', 8),
(23, '2021_10_25_095423_create_contacts_table', 8),
(24, '2021_10_25_105152_create_title_settings_table', 9),
(25, '2021_10_25_121521_create_settings_table', 10),
(26, '2021_10_25_124521_create_colors_table', 11);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'UI UX', '2.png', '2021-10-23 05:17:39', '2021-10-25 09:10:35'),
(4, 'Website Development', '4.png', '2021-10-23 05:31:55', '2021-10-25 09:10:51'),
(5, 'App Development', '5.png', '2021-10-23 05:32:33', '2021-10-25 09:11:07'),
(6, 'Digital Marketing', '6.png', '2021-10-25 09:07:28', '2021-10-25 09:07:28'),
(7, 'Network Marketing', '7.png', '2021-10-25 09:07:49', '2021-10-27 04:02:13'),
(8, 'Graphics Design', '8.png', '2021-10-25 09:08:25', '2021-10-25 09:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gxCAdCXx5TuIXJfttzd7oJVe3tZRvFZ27bnoVjpN', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTjc2WlpVMDA5QjZEZkE1RXBrYkpQNTcwZDRwZHdyM3VSSUR2QUFlQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJE45ZDNRSjlWUzIuNVJETGJwMDlaYmUxbThzQ3ZSNmVZeW95dUV2d1c0QmIuT09JYjRPS2dDIjt9', 1635348282),
('kXSUtpOnmSIMaxFsExs9hiecLTzF6dhtIZJtKKBn', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVGU2NHpETE9MaFh0cGJud1k4dXlRWk9ObGJxVThNSXVNeXdHZjI1ayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkTjlkM1FKOVZTMi41UkRMYnAwOVpiZTFtOHNDdlI2ZVl5b3l1RXZ3VzRCYi5PT0liNE9LZ0MiO30=', 1635340891);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', 'favicon.png', '1234, Parkstreet Avenue, America.', 'portflo@personalportfolio.com', '+024 454 4574', NULL, '2021-10-27 07:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `social_icon`, `social_link`, `created_at`, `updated_at`) VALUES
(1, '<i class=\"fab fa-facebook-f\"></i>', '#', '2021-10-25 04:39:04', '2021-10-27 05:32:29'),
(2, '<i class=\"fab fa-linkedin-in\"></i>', '#', '2021-10-25 08:38:44', '2021-10-27 05:43:56'),
(3, '<i class=\"fab fa-twitter\"></i>', '#', NULL, NULL),
(4, '<i class=\"fab fa-pinterest-p\"></i>', '#', NULL, NULL),
(5, '<i class=\"fab fa-instagram\"></i>', '#', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `designation`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Marina Khan', '1.jpg', 'Manager of ABM Ltd.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis minima omnis dolorum repellendus repellat  molestias, voluptate dolores fugit voluptatem saepe soluta ipsum necessitatibus pariatur sed. Nam placeat. Excepturi, maiores corporis.', '2021-10-23 08:11:04', '2021-10-27 04:55:46'),
(2, 'Usman Khan', '2.jpg', 'Manager of MCS Ltd.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis minima omnis dolorum repellendus repellat  molestias, voluptate dolores fugit voluptatem  soluta ipsum necessitatibus pariatur sed. Nam placeat distinctio nisi fuga odit. Excepturi, maiores corporis.', '2021-10-26 02:50:37', '2021-10-26 02:50:37'),
(3, 'Muhammod Ali', '3.jpg', 'Manager of CIT Ltd.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis minima omnis dolorum repellendus repellat  molestias, voluptate dolores fugit voluptatem saepe  soluta ipsum necessitatibus pariatur sed. Nam placeat distinctio  fuga odit. Excepturi, maiores corporis.', '2021-10-26 02:51:29', '2021-10-27 04:56:14'),
(4, 'Usman Khan', '4.jpg', 'Manager of MSH Ltd.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis minima omnis dolorum repellendus repellat molestias, voluptate dolores fugit voluptatem saepe  soluta ipsum necessitatibus pariatur sed. Nam placeat distinctio nisi fuga odit. Excepturi, maiores corporis.', '2021-10-26 02:52:30', '2021-10-26 02:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `title_settings`
--

CREATE TABLE `title_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choose_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choose_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `getInTouch_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `title_settings`
--

INSERT INTO `title_settings` (`id`, `social_title`, `service_title`, `service_subtitle`, `choose_title`, `choose_subtitle`, `testimonial_title`, `testimonial_subtitle`, `client_title`, `getInTouch_title`, `created_at`, `updated_at`) VALUES
(1, 'Social Links', 'Our Services', 'We Shape the Perfect solution', 'Why Choose', 'Why people choose us', 'Testimonial', 'What Say People about us?', 'Clients', 'Get In Touch', NULL, '2021-10-27 06:30:18');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@admin.com', NULL, '$2y$10$N9d3QJ9VS2.5RDLbp09Zbe1m8sCvR6eYyoyuEvwW4Bb.OOIb4OKgC', NULL, NULL, NULL, NULL, 'profile-photos/K2SZAmrp6rulOrcAM8qQeCN3HVra9ntLureWAYjr.jpg', '2021-10-23 02:14:26', '2021-10-27 08:30:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chooses`
--
ALTER TABLE `chooses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_settings`
--
ALTER TABLE `title_settings`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `chooses`
--
ALTER TABLE `chooses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `title_settings`
--
ALTER TABLE `title_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
