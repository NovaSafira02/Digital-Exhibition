-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2025 at 11:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_exhibition`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_projects`
--

CREATE TABLE `kategori_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `batch` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_projects`
--

INSERT INTO `kategori_projects` (`id`, `nama`, `batch`, `created_at`, `updated_at`) VALUES
(1, 'Merge Collab (Mobile & Web & AI)', 7, '2025-07-13 22:31:55', '2025-07-13 22:31:55'),
(2, 'Merge (Mobile & Web)', 7, '2025-07-13 22:33:02', '2025-07-13 22:33:02'),
(3, 'Collab (Web & AI)', 7, '2025-07-13 22:34:03', '2025-07-13 22:34:03'),
(4, 'Website (Web Only)', 7, '2025-07-13 22:35:31', '2025-07-13 22:35:31'),
(5, 'Game Development', 7, '2025-07-13 22:35:41', '2025-07-24 07:11:29'),
(6, 'Collab (Mobile & AI)', 8, '2025-07-24 07:08:37', '2025-07-24 07:08:37'),
(7, 'Game Development', 8, '2025-07-24 07:09:08', '2025-07-24 07:11:23'),
(8, 'Merge Collab (Mobile & Web & AI)', 8, '2025-07-24 07:09:41', '2025-07-24 07:09:41'),
(9, 'Collab (Web & AI)', 8, '2025-07-24 07:09:55', '2025-07-24 07:09:55'),
(10, 'Network Security', 8, '2025-07-24 07:11:11', '2025-07-24 07:11:11'),
(11, 'HCRH', 7, '2025-07-24 07:24:27', '2025-07-24 07:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `linkedIn` text NOT NULL,
  `projectId` bigint(20) UNSIGNED NOT NULL,
  `roleId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `nama`, `linkedIn`, `projectId`, `roleId`, `created_at`, `updated_at`) VALUES
(26, 'Andry Junianto', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 4, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(27, 'Nabila Sofiani', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 2, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(28, 'SELI OCTARIA SIMATUPANG', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 2, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(29, 'M Rivaldi Ys', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 1, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(30, 'Jeksen Lim', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 6, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(31, 'Tiffany Pangestu', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 5, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(32, 'Hastri Anggraini', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 7, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(33, 'Annisa Aurelia Fitriani', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 7, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(34, 'Daffa Akmal Zuhdii', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 8, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(35, 'Nisrina Zahirah', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 8, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(36, 'Abila Prastika Navilata', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 9, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(37, 'Abila Prastika Navilata', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 10, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(38, 'Devi Kartika', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 11, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(39, 'Natasha Rahima', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 12, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(40, 'Vincent Tanjaya', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 12, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(41, 'Mustafa Fauzy Tompoh', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 13, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(42, 'Bryan Eugene', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 9, 13, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(43, 'AULIA ANANTA', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 10, 15, '2025-07-24 09:19:05', '2025-07-24 09:19:05'),
(44, 'Sultan Dohari', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 10, 16, '2025-07-24 09:19:05', '2025-07-24 09:19:05'),
(45, 'CHINTYA NADYA SALSA BILLA', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 10, 16, '2025-07-24 09:19:05', '2025-07-24 09:19:05'),
(46, 'Muhamad Daffa Ghosan Ramadan', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 10, 17, '2025-07-24 09:19:05', '2025-07-24 09:19:05'),
(47, 'Valdano Juliandre Ramadhan', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 10, 17, '2025-07-24 09:19:05', '2025-07-24 09:19:05'),
(48, 'Rafi Irsyad Saharso', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 10, 18, '2025-07-24 09:19:05', '2025-07-24 09:19:05'),
(49, 'Aggitya Yosafat Hutabarat', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 10, 20, '2025-07-24 09:19:05', '2025-07-24 09:19:05'),
(50, 'Muhammad Fatih Zain', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 10, 21, '2025-07-24 09:19:05', '2025-07-24 09:19:05'),
(51, 'Devin Faiz Faturahman', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 10, 22, '2025-07-24 09:19:05', '2025-07-24 09:19:05'),
(52, 'Scudetto Ciano Syam', 'https://www.linkedin.com/in/reza-kurniawan-635234193/', 10, 22, '2025-07-24 09:19:05', '2025-07-24 09:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `member_masters`
--

CREATE TABLE `member_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `kategoriId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_masters`
--

INSERT INTO `member_masters` (`id`, `role`, `group`, `kategoriId`, `created_at`, `updated_at`) VALUES
(1, 'Hacker', 'Mobile', 8, '2025-07-13 22:34:23', '2025-07-24 07:35:08'),
(2, 'Hipster', 'Mobile', 8, '2025-07-13 22:34:29', '2025-07-24 07:36:14'),
(3, 'Hustler', 'Mobile', 8, '2025-07-13 22:34:39', '2025-07-24 07:36:58'),
(4, 'Scrum Master', 'Mobile', 8, '2025-07-13 22:34:45', '2025-07-24 07:37:34'),
(5, 'Scrum Master', 'Web', 8, '2025-07-13 22:34:52', '2025-07-24 07:38:39'),
(6, 'Hustler', 'Web', 8, '2025-07-13 22:34:59', '2025-07-24 07:40:35'),
(7, 'Hipster', 'Web', 8, '2025-07-15 21:48:41', '2025-07-24 07:40:55'),
(8, 'Hacker', 'Web', 8, '2025-07-15 21:48:57', '2025-07-24 07:41:09'),
(9, 'Scrum Master', 'AI', 8, '2025-07-24 07:41:42', '2025-07-24 07:41:42'),
(10, 'Design Researcher', 'AI', 8, '2025-07-24 07:41:58', '2025-07-24 07:41:58'),
(11, 'Data Engineer', 'AI', 8, '2025-07-24 07:42:11', '2025-07-24 07:42:11'),
(12, 'ML Engineer', 'AI', 8, '2025-07-24 07:42:23', '2025-07-24 07:42:23'),
(13, 'ML Ops', 'AI', 8, '2025-07-24 07:42:34', '2025-07-24 07:42:34'),
(14, 'Scrum Master', 'Web', 9, '2025-07-24 07:43:24', '2025-07-24 07:43:24'),
(15, 'Hustler', 'Web', 9, '2025-07-24 07:44:20', '2025-07-24 07:44:20'),
(16, 'Hipster', 'Web', 9, '2025-07-24 07:44:29', '2025-07-24 07:44:29'),
(17, 'Hacker', 'Web', 9, '2025-07-24 07:44:42', '2025-07-24 07:44:42'),
(18, 'Scrum Master', 'AI', 9, '2025-07-24 07:45:02', '2025-07-24 07:45:02'),
(19, 'Design Researcher', 'AI', 9, '2025-07-24 07:45:18', '2025-07-24 07:45:18'),
(20, 'Data Engineer', 'AI', 9, '2025-07-24 07:45:36', '2025-07-24 07:45:36'),
(21, 'ML Engineer', 'AI', 9, '2025-07-24 07:46:04', '2025-07-24 07:46:04'),
(22, 'ML Ops', 'AI', 9, '2025-07-24 07:46:15', '2025-07-24 07:46:15'),
(23, 'Scrum Master', 'Mobile', 6, '2025-07-24 07:46:51', '2025-07-24 07:46:51'),
(24, 'Hustler', 'Mobile', 6, '2025-07-24 07:46:59', '2025-07-24 07:46:59'),
(25, 'Hipster', 'Mobile', 6, '2025-07-24 07:47:09', '2025-07-24 07:47:09'),
(26, 'Hacker', 'Mobile', 6, '2025-07-24 07:47:15', '2025-07-24 07:47:15'),
(27, 'Scrum Master', 'AI', 6, '2025-07-24 07:47:31', '2025-07-24 07:47:31'),
(28, 'Design Researcher', 'AI', 6, '2025-07-24 07:47:38', '2025-07-24 07:47:38'),
(29, 'Data Engineer', 'AI', 6, '2025-07-24 07:47:46', '2025-07-24 07:47:46'),
(30, 'ML Engineer', 'AI', 6, '2025-07-24 07:47:56', '2025-07-24 07:47:56'),
(31, 'ML Ops', 'AI', 6, '2025-07-24 07:48:03', '2025-07-24 07:48:03'),
(32, 'Game Designer', 'Game', 7, '2025-07-24 07:48:57', '2025-07-24 07:48:57'),
(33, 'Game Artist', 'Game', 7, '2025-07-24 07:49:18', '2025-07-24 07:49:18'),
(34, 'Game Programmer', 'Game', 7, '2025-07-24 07:49:38', '2025-07-24 07:49:38'),
(35, 'Security Engineer & Project Manager', 'Network Security', 10, '2025-07-24 07:50:10', '2025-07-24 07:50:10'),
(36, 'Security Engineer', 'Network Security', 10, '2025-07-24 07:50:25', '2025-07-24 07:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `mentees`
--

CREATE TABLE `mentees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `kategoriId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentees`
--

INSERT INTO `mentees` (`id`, `userId`, `username`, `kategoriId`, `created_at`, `updated_at`) VALUES
(8, 20, 'Luminara', 8, '2025-07-24 08:26:12', '2025-07-24 08:26:12'),
(9, 21, 'Nuswapada', 6, '2025-07-24 08:26:49', '2025-07-24 08:26:49'),
(10, 22, 'Bengawan Solo', 9, '2025-07-24 08:27:28', '2025-07-24 08:27:28'),
(11, 23, 'Jayawijaya', 6, '2025-07-24 08:27:56', '2025-07-24 08:27:56'),
(12, 24, 'EKSWARA', 9, '2025-07-24 08:28:30', '2025-07-24 08:28:30'),
(13, 25, 'Khatulistiwa', 9, '2025-07-24 08:28:50', '2025-07-24 08:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`id`, `username`, `created_at`, `updated_at`) VALUES
(1, 'Reza', '2025-07-13 22:36:46', '2025-07-13 22:36:46'),
(2, 'Hasan', '2025-07-13 22:37:11', '2025-07-13 22:37:11'),
(3, 'Nabila', '2025-07-13 22:37:23', '2025-07-13 22:37:23'),
(4, 'Peja\'s', '2025-07-13 22:37:36', '2025-07-13 22:37:36'),
(5, 'Luqy', '2025-07-13 22:38:15', '2025-07-13 22:38:15'),
(6, 'Arifian', '2025-07-13 22:38:22', '2025-07-13 22:38:22'),
(7, 'Belgis', '2025-07-13 22:38:31', '2025-07-13 22:38:31'),
(8, 'Bill', '2025-07-13 22:40:56', '2025-07-13 22:40:56'),
(9, 'Fadli', '2025-07-16 00:24:21', '2025-07-16 00:24:21'),
(10, 'Marshani', '2025-07-16 00:24:34', '2025-07-16 00:24:34'),
(11, 'Ridho', '2025-07-21 03:09:01', '2025-07-21 03:09:01'),
(12, 'Radja', '2025-07-21 03:09:10', '2025-07-21 03:09:10'),
(13, 'Joy', '2025-07-24 07:05:27', '2025-07-24 07:05:27'),
(14, 'Shania', '2025-07-24 07:05:37', '2025-07-24 07:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `mentor_groups`
--

CREATE TABLE `mentor_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projectId` bigint(20) UNSIGNED NOT NULL,
  `mentorId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentor_groups`
--

INSERT INTO `mentor_groups` (`id`, `projectId`, `mentorId`, `created_at`, `updated_at`) VALUES
(33, 9, 38, NULL, NULL),
(34, 9, 44, NULL, NULL),
(35, 9, 46, NULL, NULL),
(36, 10, 36, NULL, NULL),
(37, 10, 38, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mentor_projects`
--

CREATE TABLE `mentor_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mentorId` bigint(20) UNSIGNED NOT NULL,
  `kategoriId` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentor_projects`
--

INSERT INTO `mentor_projects` (`id`, `mentorId`, `kategoriId`, `userId`, `created_at`, `updated_at`) VALUES
(16, 10, 10, 14, '2025-07-24 08:17:05', '2025-07-24 08:17:05'),
(21, 9, 7, 9, '2025-07-24 08:20:19', '2025-07-24 08:20:19'),
(35, 2, 9, 17, '2025-07-24 08:32:31', '2025-07-24 08:32:31'),
(36, 3, 9, 17, '2025-07-24 08:32:31', '2025-07-24 08:32:31'),
(37, 5, 9, 17, '2025-07-24 08:32:31', '2025-07-24 08:32:31'),
(38, 6, 9, 17, '2025-07-24 08:32:31', '2025-07-24 08:32:31'),
(39, 7, 9, 17, '2025-07-24 08:32:31', '2025-07-24 08:32:31'),
(40, 4, 6, 19, '2025-07-24 08:33:20', '2025-07-24 08:33:20'),
(41, 6, 6, 19, '2025-07-24 08:33:20', '2025-07-24 08:33:20'),
(42, 7, 6, 19, '2025-07-24 08:33:20', '2025-07-24 08:33:20'),
(43, 14, 6, 19, '2025-07-24 08:33:20', '2025-07-24 08:33:20'),
(44, 1, 8, 18, '2025-07-24 08:33:56', '2025-07-24 08:33:56'),
(45, 6, 8, 18, '2025-07-24 08:33:56', '2025-07-24 08:33:56'),
(46, 13, 8, 18, '2025-07-24 08:33:56', '2025-07-24 08:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_22_114247_create_mentors_table', 1),
(5, '2025_06_22_114302_create_kategori_projects_table', 1),
(6, '2025_06_22_114309_create_mentees_table', 1),
(7, '2025_06_22_114323_create_mentor_projects_table', 1),
(8, '2025_06_22_114336_create_member_masters_table', 1),
(9, '2025_06_22_114345_create_pesans_table', 1),
(10, '2025_06_22_114400_create_projects_table', 1),
(11, '2025_06_22_114405_create_teches_table', 1),
(12, '2025_06_22_114411_create_tech_projects_table', 1),
(13, '2025_06_22_114432_create_members_table', 1),
(14, '2025_06_22_115334_create_statuses_table', 1),
(15, '2025_07_14_035541_create_mentor_groups_table', 1),
(16, '2025_07_23_224511_add_logo_to_projects_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_pesan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_investor` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `alamat_instansi` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_group` varchar(255) NOT NULL,
  `sesi_kelas` varchar(255) NOT NULL,
  `kategoriId` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `nama_product` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `link_video` text NOT NULL,
  `link_figma` text NOT NULL,
  `link_website` text NOT NULL,
  `is_best` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `nama_group`, `sesi_kelas`, `kategoriId`, `userId`, `nama_product`, `deskripsi`, `thumbnail`, `logo`, `slug`, `link_video`, `link_figma`, `link_website`, `is_best`, `created_at`, `updated_at`) VALUES
(9, 'Luminara', 'Pagi', 8, 20, 'Luminara', '<p><span style=\"font-size: 1rem;\"><b>Luminara</b> adalah sebuah platform digital komprehensif (aplikasi mobile dan web) yang dirancang untuk menjadi panduan utama wisata religi lintas agama di Kota Medan. Proyek ini lahir dari identifikasi masalah bahwa informasi mengenai situs-situs religi yang kaya akan sejarah dan budaya di Medan masih sangat tersebar, tidak terintegrasi, dan seringkali sulit diakses oleh wisatawan, baik lokal maupun mancanegara.</span></p><p><span style=\"font-size: 1rem;\"><br></span></p><p><b>Tujuan Utama Proyek</b></p><p>Tujuan utama dari Luminara adalah untuk mengatasi kesenjangan informasi dan meningkatkan pengalaman wisatawan dengan cara:</p><p>1. Menyediakan Informasi Terpusat: Mengumpulkan dan menyajikan semua informasi penting—seperti lokasi, sejarah, jadwal acara keagamaan, dan panduan etika kunjungan—ke dalam satu platform yang mudah diakses.</p><p>2. Memudahkan Perencanaan Perjalanan: Membantu pengguna, terutama yang belum familiar dengan Medan, untuk merancang rencana perjalanan (itinerary) yang efisien, personal, dan bermakna.</p><p>3. Mengatasi Hambatan Bahasa dan Budaya: Menyediakan konten multibahasa dan panduan etika yang jelas untuk memastikan wisatawan (khususnya turis asing) dapat berkunjung dengan nyaman dan penuh rasa hormat terhadap budaya lokal.</p><p>4. Meningkatkan Potensi Wisata Religi Medan: Mengangkat citra dan potensi destinasi wisata religi di Medan agar lebih dikenal luas, terstruktur, dan menarik bagi audiens yang lebih beragam, terutama generasi muda.</p><p><br></p><p><b>Target Pengguna (Users)</b></p><p>Luminara dirancang untuk melayani berbagai segmen pengguna dengan kebutuhan yang berbeda:</p><p>1. Generasi Muda (18-30 tahun): Termasuk mahasiswa dan profesional muda yang aktif mencari pengalaman baru, tertarik pada budaya, dan gemar berbagi pengalaman mereka di media sosial. Mereka membutuhkan alat yang praktis untuk merencanakan perjalanan.</p><p>2. Turis Lokal &amp; Internasional: Wisatawan dari dalam dan luar negeri yang ingin menjelajahi kekayaan spiritual dan sejarah di Medan. Mereka membutuhkan informasi yang akurat, panduan navigasi, dan dukungan multibahasa.</p><p>3. Selebgram &amp; Konten Kreator: Para pembuat konten yang mencari destinasi unik dan otentik untuk materi mereka. Mereka memerlukan informasi yang mendalam mengenai aturan, etika, dan spot-spot menarik di setiap lokasi.</p><p><br></p><p><b>Fitur-Fitur Utama</b></p><p>Untuk mencapai tujuannya, Luminara dilengkapi dengan beberapa fitur utama yang solutif:</p><p>1. Direktori Tempat Ibadah: Sebuah daftar lengkap dan terkurasi dari berbagai situs religi lintas agama di Medan (masjid, gereja, vihara, kuil), dilengkapi dengan foto, deskripsi, dan lokasi peta.</p><p>2. Itinerary Pintar (Smart Itinerary): Fitur yang memungkinkan pengguna untuk membuat, menyimpan, dan membagikan rencana perjalanan mereka sendiri. Pengguna dapat memilih destinasi, mengatur jadwal, dan mendapatkan rekomendasi rute yang efisien.</p><p>3. Panduan Etika Interaktif: Menyajikan informasi mengenai aturan, norma, serta hal yang boleh dan tidak boleh dilakukan di setiap tempat ibadah. Informasi disajikan dalam format yang mudah dipahami (seperti pop-up cards) untuk memastikan kunjungan yang penuh hormat.</p><p>4. Dukungan Multibahasa: Platform ini dirancang untuk mendukung beberapa bahasa guna menghilangkan hambatan komunikasi bagi turis asing dan membuat informasi lebih mudah diakses secara global.</p><p>5. AI Chatbot Assistant: Asisten virtual cerdas yang siap membantu pengguna secara instan untuk menjawab pertanyaan, memberikan rekomendasi tempat, atau membantu merencanakan perjalanan berdasarkan preferensi pengguna.</p><p>6. Komunitas Lokal: Sebuah fitur sosial yang memungkinkan pengguna untuk terhubung dengan sesama penjelajah spiritual, berbagi pengalaman, ulasan, foto, serta mendapatkan tips langsung dari warga lokal.\"</p>', 'thumbnails/2KHJ2xIgOtqj3SJ6mJaywGYlvIkvJa7MBF5ihKno.png', 'logos/w13ZDEburfg2bUzTE76lQAOjBdWLrnvCWNXaWbYq.png', 'luminara-lcH1f', 'https://drive.google.com/file/d/1QK-Ue50Z3wfqDqp_azP_4_d-0_ddJHtF/preview', 'https://github.com/Limzen/Luminara-mobile.git', 'https://www.figma.com/design/yM2Efkx1iI2uaFZgNUW8MD/Luminara-Design-APP?node-id=687-2691&t=spKdgN2wpGUE6Rdp-1', 1, '2025-07-24 08:56:21', '2025-07-24 09:03:57'),
(10, 'Ekswara', 'Pagi', 9, 24, 'UrbanRayaJakarta', '<font color=\"#1d1f25\" face=\"-apple-system, system-ui, system-ui, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol\"><span style=\"font-size: 13px; white-space-collapse: preserve;\"><b>UrbanRayaJakarta</b> adalah website interaktif yang dirancang untuk menjadi solusi digital yang dapat mempermudah warga dan wisatawan terutama keluarga muda dalam mengeksplorasi taman-taman terbaik di Jakarta. Melalui platform ini, pengguna dapat dengan mudah <b>mencari informasi taman</b>, menemukan <b>rekomendasi aktivitas menarik</b>, serta <b>memesan tiket event secara online</b>. Kami juga berkomitmen menghadirkan tampilan UI/UX yang ramah pengguna agar informasi dapat lebih mudah di akses.</span></font>', 'thumbnails/ZFsO7QerVo4vDktxZeuAZ03A9YDsW8Y3sg9eV4b5.png', 'logos/ZmZv9ShmHo4MBreEH8V2e7ZLvGWi0WvGt3vHVQhT.jpg', 'urbanrayajakarta-JQkC8', 'https://drive.google.com/file/d/1RL-nJqOnJyumCd1YHM5hJ8v_GPvyt8yH/preview', 'https://www.figma.com/design/8QKWasYVMLbYvkZqYpMsg2/UIUX_EKSWARA?node-id=0-1&p=f&t=Lx5f15ZPzoVlmwbG-0', 'https://github.com/Xeazi/ekswara-web', 0, '2025-07-24 09:19:05', '2025-07-24 09:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1zqLzeWbJJaGvXB9zGIuJivE1boqStTRQfSMAdyZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia1VCRnFnYjFnbExtMlk3Y3UxYjlIVkNLcUd3Wklnemx3UmhkcVJpYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG93Y2FzZS8xMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753521342),
('rNlXDNAF828G1o3k4QG0YDgpsrZgS86TcZOiEpaX', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiajJNYWVjWVJBcnVRQmRtV2dNdENWT2VjY3c4ckFxTGlJTGxDSFJYSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG93Y2FzZS85Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753511304),
('YwQ15CA2aiT8YijIv3McW4tyJpD7gvB0TlcP9rFW', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYzNaWTNMYUVCdnI3U1FtYzJTTXk4ZVU2aEZxQ3pleEJuNmZuYUFVYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753609487);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `projectId` bigint(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status`, `projectId`, `comment`, `created_at`, `updated_at`) VALUES
(15, 'Disetujui', 9, 'Project disetujui oleh Mentor', '2025-07-24 08:58:33', '2025-07-24 08:58:33'),
(16, 'Disetujui', 10, 'Project disetujui oleh Mentor', '2025-07-24 09:20:26', '2025-07-24 09:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `teches`
--

CREATE TABLE `teches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teches`
--

INSERT INTO `teches` (`id`, `nama`, `icon`, `created_at`, `updated_at`) VALUES
(5, 'Kotlin', 'SeuT1int8AFYNvKU89va5cZGRM8hKKJHXRl1Wzqz.svg', '2025-07-24 07:59:37', '2025-07-24 07:59:37'),
(6, 'Jetpack Compose', '9Bfo2NL5HrPsCuWgpWAo9UjG4nYTK2hlyTA6cuTN.svg', '2025-07-24 07:59:56', '2025-07-24 07:59:56'),
(7, 'Node.Js', 'IB39zIQwo4XjOL9dVeXanohxGRDoWg1X5uAO7GUe.svg', '2025-07-24 08:04:40', '2025-07-24 08:04:40'),
(8, 'React.Js', 'DvRka82MMXcFC2Vgo6g4XepJS2LMCiyQvkxmIqAq.svg', '2025-07-24 08:05:19', '2025-07-24 08:06:48'),
(9, 'Express.Js', 'M3cijKbJWa7ia1FKAhJmodWiFsj90kXU6g9JYtBM.svg', '2025-07-24 08:07:08', '2025-07-24 08:07:08'),
(10, 'Firebase', 'HqYNUFHC0TaC5o2DSUNzy5zHgDIgzHKGmGxkt7Fn.svg', '2025-07-24 08:07:45', '2025-07-24 08:07:45'),
(11, 'Mysql', 'DdHkeUrc1dkaqrWcJKpgdctonRtG9ckDxGEN9FmF.svg', '2025-07-24 08:08:16', '2025-07-24 08:08:16'),
(12, 'Figma', 'MggoFVyg6ucOCFBGwnhthvXcbAdLqsTcHUiTA4Dl.svg', '2025-07-24 08:08:47', '2025-07-24 08:08:47'),
(13, 'Unity', 'Z9Qj4TpFlIHejN6An1ifmclYUCYF3Q70rMUZBzqG.svg', '2025-07-24 08:09:58', '2025-07-24 08:09:58'),
(14, 'NumPy', 'ZPocI3GFsqEbQ1cvrBja20rwLNfm5YaYoOD3dR23.svg', '2025-07-24 08:11:59', '2025-07-24 08:11:59'),
(15, 'Python', '3mQLYwA5TRcqHSFGEnCAqrTjGc5mV3SHop8WgUii.svg', '2025-07-24 08:12:11', '2025-07-24 08:12:11'),
(16, 'Jupyter Notebook', 'eXNrwV0ZtbwzfA2z69XkVrro2zTxHXUTLtrSittH.svg', '2025-07-24 08:12:33', '2025-07-24 08:12:33'),
(17, 'PyTorch', 'VmjA4KYpRd8Hr2mWNbyu2molhZGr2JnYmxvbPvii.svg', '2025-07-24 08:14:10', '2025-07-24 08:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `tech_projects`
--

CREATE TABLE `tech_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `techId` bigint(20) UNSIGNED NOT NULL,
  `projectId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tech_projects`
--

INSERT INTO `tech_projects` (`id`, `techId`, `projectId`, `created_at`, `updated_at`) VALUES
(21, 5, 9, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(22, 6, 9, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(23, 7, 9, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(24, 8, 9, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(25, 9, 9, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(26, 11, 9, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(27, 15, 9, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(28, 16, 9, '2025-07-24 08:56:21', '2025-07-24 08:56:21'),
(29, 12, 9, NULL, NULL),
(30, 8, 10, '2025-07-24 09:19:05', '2025-07-24 09:19:05'),
(31, 9, 10, '2025-07-24 09:19:05', '2025-07-24 09:19:05'),
(32, 11, 10, '2025-07-24 09:19:05', '2025-07-24 09:19:05'),
(33, 12, 10, '2025-07-24 09:19:05', '2025-07-24 09:19:05'),
(34, 14, 10, '2025-07-24 09:19:05', '2025-07-24 09:19:05'),
(35, 15, 10, '2025-07-24 09:19:05', '2025-07-24 09:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `isAdmin`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$12$gN/qet3CoAWsRX0esXLxJeifVgX8GPNQIJtcsPSyeIdpz.r8De1xC', 1, '2025-07-13 22:27:38', '2025-07-13 22:27:38'),
(9, 'mentorgame@gmail.com', '$2y$12$T1dmYIrtvKuOWs63gRFA/Ogidduk1UCt4PMCIrhTCb6JDoMQ9v2O6', 0, '2025-07-16 00:25:32', '2025-07-20 09:33:13'),
(12, 'mentee5@gmail.com', '$2y$12$4HZ4955ygEGyfzP7yghDpe29nHPpbPYm6ROBexwWqwdeX5D79RR7S', 0, '2025-07-24 01:14:53', '2025-07-24 01:14:53'),
(14, 'mentornetsec@gmail.com', '$2y$12$vSucEoFQ0Zry8Bz6nSgnb.Dr3xwogfpBhe/2L75O2u5ToV3/jbNGy', 0, '2025-07-24 08:17:05', '2025-07-24 08:17:05'),
(17, 'collab2@gmail.com', '$2y$12$98eHPVxEZ7dNUI7gzRT.Mu01Hv9y7iau9KgGCRzM0PMJG.0L5CkxW', 0, '2025-07-24 08:22:31', '2025-07-24 08:22:31'),
(18, 'mergeCollab@gmail.com', '$2y$12$nPLIlM3wMzfqv3cbAlcw3uL6H/jKTLHI4BWzFwz5oWrUuFHW2VCmq', 0, '2025-07-24 08:23:33', '2025-07-24 08:23:33'),
(19, 'collab1@gmail.com', '$2y$12$7TUeYkCDWrlOYKMIajZKDu2NFTK8nKWvyHpPuzNVDlRscV3vzNkJS', 0, '2025-07-24 08:24:22', '2025-07-24 08:24:22'),
(20, 'luminara@gmail.com', '$2y$12$YPhGayGrrXFZyrx9H3VlCuVtRYNIyj9ebikB.LZ6dnqLBfqIxrGlK', 0, '2025-07-24 08:26:12', '2025-07-24 08:26:12'),
(21, 'nuswapada@gmail.com', '$2y$12$tX5mzXPy2d8LMlAPzgLV3eaM5hjVWBwdyDLFwKC972DwEE8VjK1MG', 0, '2025-07-24 08:26:49', '2025-07-24 08:26:49'),
(22, 'bengawansolo@gmail.com', '$2y$12$3pebZBubDlTh3.0SsMztsudLNecFaqeuy8ETZFxT6KqYqz6YQkbHS', 0, '2025-07-24 08:27:28', '2025-07-24 08:27:28'),
(23, 'jayawijaya@gmail.com', '$2y$12$YIF/Yor/5kr5UWWbjN3hreGkqLXPQ.bnO.oL7PK373aoK6CFnbypC', 0, '2025-07-24 08:27:56', '2025-07-24 08:27:56'),
(24, 'ekswara@gmail.com', '$2y$12$tFyfxRZ1lYdsfUag33uYluuMdeDO6TK21pjj6sQ1LxixfQgExcjgK', 0, '2025-07-24 08:28:30', '2025-07-24 08:28:30'),
(25, 'khatulistiwa@gmail.com', '$2y$12$RJflGuQlBNR4TdQJAOLd2eeDvlwI7PLIJe8vaURXmqwd3Fc04w1zK', 0, '2025-07-24 08:28:50', '2025-07-24 08:28:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_projects`
--
ALTER TABLE `kategori_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_projectid_foreign` (`projectId`),
  ADD KEY `members_roleid_foreign` (`roleId`);

--
-- Indexes for table `member_masters`
--
ALTER TABLE `member_masters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_masters_kategoriid_foreign` (`kategoriId`);

--
-- Indexes for table `mentees`
--
ALTER TABLE `mentees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mentees_username_unique` (`username`),
  ADD KEY `mentees_userid_foreign` (`userId`),
  ADD KEY `mentees_kategoriid_foreign` (`kategoriId`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mentors_username_unique` (`username`);

--
-- Indexes for table `mentor_groups`
--
ALTER TABLE `mentor_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mentor_groups_projectid_foreign` (`projectId`),
  ADD KEY `mentor_groups_mentorid_foreign` (`mentorId`);

--
-- Indexes for table `mentor_projects`
--
ALTER TABLE `mentor_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mentor_projects_mentorid_foreign` (`mentorId`),
  ADD KEY `mentor_projects_kategoriid_foreign` (`kategoriId`),
  ADD KEY `mentor_projects_userid_foreign` (`userId`);

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
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_slug_unique` (`slug`),
  ADD KEY `projects_kategoriid_foreign` (`kategoriId`),
  ADD KEY `projects_userid_foreign` (`userId`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statuses_projectid_foreign` (`projectId`);

--
-- Indexes for table `teches`
--
ALTER TABLE `teches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tech_projects`
--
ALTER TABLE `tech_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tech_projects_techid_foreign` (`techId`),
  ADD KEY `tech_projects_projectid_foreign` (`projectId`);

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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_projects`
--
ALTER TABLE `kategori_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `member_masters`
--
ALTER TABLE `member_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `mentees`
--
ALTER TABLE `mentees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mentor_groups`
--
ALTER TABLE `mentor_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `mentor_projects`
--
ALTER TABLE `mentor_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teches`
--
ALTER TABLE `teches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tech_projects`
--
ALTER TABLE `tech_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_projectid_foreign` FOREIGN KEY (`projectId`) REFERENCES `projects` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `members_roleid_foreign` FOREIGN KEY (`roleId`) REFERENCES `member_masters` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `member_masters`
--
ALTER TABLE `member_masters`
  ADD CONSTRAINT `member_masters_kategoriid_foreign` FOREIGN KEY (`kategoriId`) REFERENCES `kategori_projects` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `mentees`
--
ALTER TABLE `mentees`
  ADD CONSTRAINT `mentees_kategoriid_foreign` FOREIGN KEY (`kategoriId`) REFERENCES `kategori_projects` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mentees_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `mentor_groups`
--
ALTER TABLE `mentor_groups`
  ADD CONSTRAINT `mentor_groups_mentorid_foreign` FOREIGN KEY (`mentorId`) REFERENCES `mentor_projects` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mentor_groups_projectid_foreign` FOREIGN KEY (`projectId`) REFERENCES `projects` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `mentor_projects`
--
ALTER TABLE `mentor_projects`
  ADD CONSTRAINT `mentor_projects_kategoriid_foreign` FOREIGN KEY (`kategoriId`) REFERENCES `kategori_projects` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mentor_projects_mentorid_foreign` FOREIGN KEY (`mentorId`) REFERENCES `mentors` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mentor_projects_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_kategoriid_foreign` FOREIGN KEY (`kategoriId`) REFERENCES `kategori_projects` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `projects_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `statuses`
--
ALTER TABLE `statuses`
  ADD CONSTRAINT `statuses_projectid_foreign` FOREIGN KEY (`projectId`) REFERENCES `projects` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tech_projects`
--
ALTER TABLE `tech_projects`
  ADD CONSTRAINT `tech_projects_projectid_foreign` FOREIGN KEY (`projectId`) REFERENCES `projects` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tech_projects_techid_foreign` FOREIGN KEY (`techId`) REFERENCES `teches` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
