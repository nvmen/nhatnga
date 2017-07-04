-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2017 at 08:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhatnga`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `media_ids` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `media_ids`, `slug_url`, `created_at`, `updated_at`) VALUES
(1, '80', '80', '2017-06-28 07:36:51', '2017-06-28 07:36:51'),
(2, '82', '82', '2017-06-28 07:38:44', '2017-06-28 07:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `banner_translation`
--

CREATE TABLE `banner_translation` (
  `id` int(10) UNSIGNED NOT NULL,
  `banner_id` int(10) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` longtext COLLATE utf8mb4_unicode_ci,
  `link` longtext COLLATE utf8mb4_unicode_ci,
  `link_text` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_translation`
--

INSERT INTO `banner_translation` (`id`, `banner_id`, `title`, `lang_code`, `sub_title`, `link`, `link_text`, `created_at`, `updated_at`) VALUES
(1, 1, 'WONDERFUL BLUE BEACH VI', 'vi', 'Template based on deep research on the most popular travel booking websites such as booking, tripadvisor, yahoo travel', 'https://www.youtube.com/watch?v=i6_ImwFqH5w', 'View Tour', '2017-06-28 07:36:51', '2017-06-28 07:36:51'),
(2, 1, 'WONDERFUL BLUE BEACH', 'en', 'Template based on deep research on the most popular travel booking websites such as booking, tripadvisor, yahoo travel', 'https://www.youtube.com/watch?v=i6_ImwFqH5w', 'View Tour', '2017-06-28 07:36:51', '2017-06-28 07:36:51'),
(3, 2, 'WONDERFUL BLUE BEACH VI', 'vi', 'Template based on deep research on the most popular travel booking websites such as booking, tripadvisor, yahoo travel', 'https://www.youtube.com/watch?v=i6_ImwFqH5w', 'View Text', '2017-06-28 07:38:44', '2017-06-28 07:38:44'),
(4, 2, 'WONDERFUL BLUE BEACH VI', 'en', 'Template based on deep research on the most popular travel booking websites such as booking, tripadvisor, yahoo travel', 'https://www.youtube.com/watch?v=i6_ImwFqH5w', 'View', '2017-06-28 07:38:44', '2017-06-28 07:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_adults` int(10) UNSIGNED DEFAULT NULL,
  `number_children` int(10) UNSIGNED DEFAULT NULL,
  `children_price` decimal(15,2) DEFAULT NULL,
  `adult_price` decimal(15,2) DEFAULT NULL,
  `discount_percent` double NOT NULL DEFAULT '0',
  `total_money` double NOT NULL DEFAULT '0',
  `total_money_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `book_id`, `full_name`, `email`, `phone`, `tour_code`, `tour_name`, `number_adults`, `number_children`, `children_price`, `adult_price`, `discount_percent`, `total_money`, `total_money_text`, `date`, `created_at`, `updated_at`) VALUES
(1, 'e3c26e43-aaa4-4752-9c72-1df0bf4141a3', 'he fdfd', 'heo@gmail.com', '34534534', 'HCRY', 'Test', 2, 1, '1200000.00', '1500000.00', 1, 4158000, '4,158,000đ', '2017-06-20', '2017-06-27 08:15:37', '2017-06-27 08:15:37'),
(2, '5eb5157d-fe57-4b86-bddb-db3035282131', 'dsfsdf dsfds', 'heo@gmail.com', '34543534', '56w1334', 'Chuyến thăm nhiều nghi ngại', 2, 1, '150000.00', '200000.00', 1, 544500, '544,500đ', '2017-06-29', '2017-06-24 08:16:31', '2017-06-24 08:16:31'),
(3, '166aede0-5196-4bd4-80af-7093c80f5a9e', 'Men Nguyen', 'nvmen@tma.com.vn', '04203402349`', 'HCRY', 'Test', 1, 0, '1200000.00', '1500000.00', 1, 1485000, '1,485,000đ', '2017-07-19', '2017-06-30 21:34:35', '2017-06-30 21:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug_url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_ids` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_translation`
--

CREATE TABLE `food_translation` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `food_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lang_code` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `uuid_name`, `thumbnail`, `album`, `size`, `created_at`, `updated_at`) VALUES
(1, 'nhatnga-logo.png', '65-nhat-nga-1496813840.PNG', NULL, '06-2017', 1234, NULL, NULL),
(2, 'nhatnga-logo.png', '65-nhat-nga-1496813840.PNG', NULL, '06-2017', 1234, NULL, NULL),
(3, 'nhatnga-logo.png', '65-nhat-nga-1496813840.PNG', NULL, '06-2017', 1234, NULL, NULL),
(4, 'gold-bull-and-bear-market.jpg', '65-nhat-nga-1497604755.jpg', NULL, '06-2017', 33367, '2017-06-16 02:19:15', '2017-06-16 02:19:15'),
(5, 'chien luoc option 6.jpg', '65-nhat-nga-1497604896.jpg', NULL, '06-2017', 34440, '2017-06-16 02:21:36', '2017-06-16 02:21:36'),
(6, 'images.jpg', '65-nhat-nga-1497605103.jpg', NULL, '06-2017', 7008, '2017-06-16 02:25:03', '2017-06-16 02:25:03'),
(7, 'images.jpg', '65-nhat-nga-1497605240.jpg', NULL, '06-2017', 7008, '2017-06-16 02:27:20', '2017-06-16 02:27:20'),
(8, 'chien luoc option 6.jpg', '65-nhat-nga-1497605309.jpg', NULL, '06-2017', 34440, '2017-06-16 02:28:29', '2017-06-16 02:28:29'),
(9, 'chien luoc option 6.jpg', '65-nhat-nga-1497614582.jpg', NULL, '06-2017', 34440, '2017-06-16 05:03:02', '2017-06-16 05:03:02'),
(10, 'images.jpg', '65-nhat-nga-1497614592.jpg', NULL, '06-2017', 7008, '2017-06-16 05:03:12', '2017-06-16 05:03:12'),
(11, 'gold-bull-and-bear-market.jpg', '65-nhat-nga-1497614828.jpg', NULL, '06-2017', 33367, '2017-06-16 05:07:08', '2017-06-16 05:07:08'),
(12, 'chien luoc option 6.jpg', '65-nhat-nga-1497614828.jpg', NULL, '06-2017', 34440, '2017-06-16 05:07:08', '2017-06-16 05:07:08'),
(13, 'images.jpg', '65-nhat-nga-1497614829.jpg', NULL, '06-2017', 7008, '2017-06-16 05:07:09', '2017-06-16 05:07:09'),
(14, 'images.jpg', '65-nhat-nga-1497620353.jpg', NULL, '06-2017', 7008, '2017-06-16 06:39:13', '2017-06-16 06:39:13'),
(15, 'chien luoc option 6.jpg', '65-nhat-nga-1497620384.jpg', NULL, '06-2017', 34440, '2017-06-16 06:39:44', '2017-06-16 06:39:44'),
(16, 'chien luoc option 6.jpg', '65-nhat-nga-1497620507.jpg', NULL, '06-2017', 34440, '2017-06-16 06:41:48', '2017-06-16 06:41:48'),
(17, 'gold-bull-and-bear-market.jpg', '65-nhat-nga-1497620507.jpg', NULL, '06-2017', 33367, '2017-06-16 06:41:48', '2017-06-16 06:41:48'),
(18, 'images.jpg', '65-nhat-nga-1497620509.jpg', NULL, '06-2017', 7008, '2017-06-16 06:41:49', '2017-06-16 06:41:49'),
(19, 'images.jpg', '65-nhat-nga-1497623219.jpg', NULL, '06-2017', 7008, '2017-06-16 07:26:59', '2017-06-16 07:26:59'),
(20, 'bg1 (1).jpg', '65-nhat-nga-1497883695.jpg', NULL, '06-2017', 293802, '2017-06-19 07:48:15', '2017-06-19 07:48:15'),
(21, 'bg3.jpg', '65-nhat-nga-1497916121.jpg', NULL, '06-2017', 376194, '2017-06-19 16:48:41', '2017-06-19 16:48:41'),
(22, 'bg2.jpg', '65-nhat-nga-1497916121.jpg', NULL, '06-2017', 1970248, '2017-06-19 16:48:41', '2017-06-19 16:48:41'),
(23, 'chien luoc option 6.jpg', '65-nhat-nga-1497916135.jpg', NULL, '06-2017', 34440, '2017-06-19 16:48:56', '2017-06-19 16:48:56'),
(24, 'bg3.jpg', '65-nhat-nga-1497917030.jpg', NULL, '06-2017', 376194, '2017-06-19 17:03:50', '2017-06-19 17:03:50'),
(25, 'chien luoc option 6.jpg', '65-nhat-nga-1497918320.jpg', NULL, '06-2017', 34440, '2017-06-19 17:25:20', '2017-06-19 17:25:20'),
(26, 'chien luoc option 6.jpg', '65-nhat-nga-1497918724.jpg', NULL, '06-2017', 34440, '2017-06-19 17:32:04', '2017-06-19 17:32:04'),
(27, 'bg2.jpg', '65-nhat-nga-1497919672.jpg', NULL, '06-2017', 1970248, '2017-06-19 17:47:52', '2017-06-19 17:47:52'),
(28, 'bg3.jpg', '65-nhat-nga-1497919672.jpg', NULL, '06-2017', 376194, '2017-06-19 17:47:52', '2017-06-19 17:47:52'),
(29, 'chien luoc option 6.jpg', '65-nhat-nga-1497919672.jpg', NULL, '06-2017', 34440, '2017-06-19 17:47:52', '2017-06-19 17:47:52'),
(30, 'chien luoc option 6.jpg', '65-nhat-nga-1497919702.jpg', NULL, '06-2017', 34440, '2017-06-19 17:48:22', '2017-06-19 17:48:22'),
(31, 'bg3.jpg', '65-nhat-nga-1497919702.jpg', NULL, '06-2017', 376194, '2017-06-19 17:48:22', '2017-06-19 17:48:22'),
(32, 'gold-bull-and-bear-market.jpg', '65-nhat-nga-1497919702.jpg', NULL, '06-2017', 33367, '2017-06-19 17:48:22', '2017-06-19 17:48:22'),
(33, 'chien luoc option 6.jpg', '65-nhat-nga-14979201698352.jpg', NULL, '06-2017', 34440, '2017-06-19 17:56:09', '2017-06-19 17:56:09'),
(34, 'bg3.jpg', '65-nhat-nga-149792016930823.jpg', NULL, '06-2017', 376194, '2017-06-19 17:56:09', '2017-06-19 17:56:09'),
(35, 'gold-bull-and-bear-market.jpg', '65-nhat-nga-149792016921593.jpg', NULL, '06-2017', 33367, '2017-06-19 17:56:09', '2017-06-19 17:56:09'),
(36, 'images.jpg', '65-nhat-nga-149792016922036.jpg', NULL, '06-2017', 7008, '2017-06-19 17:56:09', '2017-06-19 17:56:09'),
(37, 'chien luoc option 6.jpg', '65-nhat-nga-chien-luoc-option-6jpg-149792032617459.jpg', NULL, '06-2017', 34440, '2017-06-19 17:58:46', '2017-06-19 17:58:46'),
(38, 'bg3.jpg', '65-nhat-nga-bg3jpg-149792032614591.jpg', NULL, '06-2017', 376194, '2017-06-19 17:58:46', '2017-06-19 17:58:46'),
(39, 'gold-bull-and-bear-market.jpg', '65-nhat-nga-gold-bull-and-bear-marketjpg-149792032617392.jpg', NULL, '06-2017', 33367, '2017-06-19 17:58:46', '2017-06-19 17:58:46'),
(40, 'images.jpg', '65-nhat-nga-imagesjpg-14979203269932.jpg', NULL, '06-2017', 7008, '2017-06-19 17:58:46', '2017-06-19 17:58:46'),
(41, 'tour-1.jpg', '65-nhat-nga-tour-1jpg-149814437231276.jpg', NULL, '06-2017', 609701, '2017-06-22 08:12:52', '2017-06-22 08:12:52'),
(42, 'tour-2.jpg', '65-nhat-nga-tour-2jpg-149814437229384.jpg', NULL, '06-2017', 637651, '2017-06-22 08:12:52', '2017-06-22 08:12:52'),
(43, 'tour-3.jpg', '65-nhat-nga-tour-3jpg-14981443737413.jpg', NULL, '06-2017', 506483, '2017-06-22 08:12:53', '2017-06-22 08:12:53'),
(44, 'tour-4.jpg', '65-nhat-nga-tour-4jpg-149814437332609.jpg', NULL, '06-2017', 565644, '2017-06-22 08:12:53', '2017-06-22 08:12:53'),
(45, 'tour-5.jpg', '65-nhat-nga-tour-5jpg-149814437310890.jpg', NULL, '06-2017', 641431, '2017-06-22 08:12:53', '2017-06-22 08:12:53'),
(46, 'tour-1.jpg', '65-nhat-nga-tour-1jpg-149815302421064.jpg', NULL, '06-2017', 609701, '2017-06-22 10:37:04', '2017-06-22 10:37:04'),
(47, 'tour-2.jpg', '65-nhat-nga-tour-2jpg-14982255473650.jpg', NULL, '06-2017', 637651, '2017-06-23 06:45:47', '2017-06-23 06:45:47'),
(48, 'tour-1.jpg', '65-nhat-nga-tour-1jpg-149822554715181.jpg', NULL, '06-2017', 609701, '2017-06-23 06:45:47', '2017-06-23 06:45:47'),
(49, 'tour-5.jpg', '65-nhat-nga-tour-5jpg-149822554824147.jpg', NULL, '06-2017', 641431, '2017-06-23 06:45:48', '2017-06-23 06:45:48'),
(50, 'tour-4.jpg', '65-nhat-nga-tour-4jpg-149822554826114.jpg', NULL, '06-2017', 565644, '2017-06-23 06:45:48', '2017-06-23 06:45:48'),
(51, 'tour-6.jpg', '65-nhat-nga-tour-6jpg-14982255499104.jpg', NULL, '06-2017', 382690, '2017-06-23 06:45:49', '2017-06-23 06:45:49'),
(52, 'tour-2.jpg', '65-nhat-nga-tour-2jpg-149822743118094.jpg', NULL, '06-2017', 637651, '2017-06-23 07:17:11', '2017-06-23 07:17:11'),
(53, 'tour-1.jpg', '65-nhat-nga-tour-1jpg-149822743112764.jpg', NULL, '06-2017', 609701, '2017-06-23 07:17:11', '2017-06-23 07:17:11'),
(54, 'tour-5.jpg', '65-nhat-nga-tour-5jpg-149822743219535.jpg', NULL, '06-2017', 641431, '2017-06-23 07:17:12', '2017-06-23 07:17:12'),
(55, 'tour-3.jpg', '65-nhat-nga-tour-3jpg-149822743229413.jpg', NULL, '06-2017', 506483, '2017-06-23 07:17:12', '2017-06-23 07:17:12'),
(56, 'tour-6.jpg', '65-nhat-nga-tour-6jpg-149822743325018.jpg', NULL, '06-2017', 382690, '2017-06-23 07:17:13', '2017-06-23 07:17:13'),
(57, 'tour-5.jpg', '65-nhat-nga-tour-5jpg-149822816715123.jpg', NULL, '06-2017', 641431, '2017-06-23 07:29:27', '2017-06-23 07:29:27'),
(58, 'tour-6.jpg', '65-nhat-nga-tour-6jpg-14982282478528.jpg', NULL, '06-2017', 382690, '2017-06-23 07:30:47', '2017-06-23 07:30:47'),
(59, 'tour-5.jpg', '65-nhat-nga-tour-5jpg-149823519013449.jpg', NULL, '06-2017', 641431, '2017-06-23 09:26:30', '2017-06-23 09:26:30'),
(60, 'tour-2.jpg', '65-nhat-nga-tour-2jpg-149827783931316.jpg', NULL, '06-2017', 637651, '2017-06-23 21:17:19', '2017-06-23 21:17:19'),
(61, 'tour-1.jpg', '65-nhat-nga-tour-1jpg-14982778398322.jpg', NULL, '06-2017', 609701, '2017-06-23 21:17:19', '2017-06-23 21:17:19'),
(62, 'tour-3.jpg', '65-nhat-nga-tour-3jpg-14982778409107.jpg', NULL, '06-2017', 506483, '2017-06-23 21:17:20', '2017-06-23 21:17:20'),
(63, 'tour-5.jpg', '65-nhat-nga-tour-5jpg-149827784024061.jpg', NULL, '06-2017', 641431, '2017-06-23 21:17:20', '2017-06-23 21:17:20'),
(64, 'tour-6.jpg', '65-nhat-nga-tour-6jpg-149827784319186.jpg', NULL, '06-2017', 382690, '2017-06-23 21:17:23', '2017-06-23 21:17:23'),
(65, 'tour-1.jpg', '65-nhat-nga-tour-1jpg-14982780978101.jpg', NULL, '06-2017', 609701, '2017-06-23 21:21:37', '2017-06-23 21:21:37'),
(66, 'tour-2.jpg', '65-nhat-nga-tour-2jpg-14982780977208.jpg', NULL, '06-2017', 637651, '2017-06-23 21:21:37', '2017-06-23 21:21:37'),
(67, 'tour-3.jpg', '65-nhat-nga-tour-3jpg-149827809828538.jpg', NULL, '06-2017', 506483, '2017-06-23 21:21:38', '2017-06-23 21:21:38'),
(68, 'tour-4.jpg', '65-nhat-nga-tour-4jpg-149827809823873.jpg', NULL, '06-2017', 565644, '2017-06-23 21:21:38', '2017-06-23 21:21:38'),
(69, 'tour-5.jpg', '65-nhat-nga-tour-5jpg-149827809913030.jpg', NULL, '06-2017', 641431, '2017-06-23 21:21:39', '2017-06-23 21:21:39'),
(70, 'tour-6.jpg', '65-nhat-nga-tour-6jpg-149827809921291.jpg', NULL, '06-2017', 382690, '2017-06-23 21:21:39', '2017-06-23 21:21:39'),
(71, 'tour-1.jpg', '65-nhat-nga-tour-1jpg-149828269420999.jpg', NULL, '06-2017', 609701, '2017-06-23 22:38:14', '2017-06-23 22:38:14'),
(72, 'tour-2.jpg', '65-nhat-nga-tour-2jpg-14982826947477.jpg', NULL, '06-2017', 637651, '2017-06-23 22:38:14', '2017-06-23 22:38:14'),
(73, 'tour-3.jpg', '65-nhat-nga-tour-3jpg-149828269617866.jpg', NULL, '06-2017', 506483, '2017-06-23 22:38:16', '2017-06-23 22:38:16'),
(74, 'tour-4.jpg', '65-nhat-nga-tour-4jpg-149828269616180.jpg', NULL, '06-2017', 565644, '2017-06-23 22:38:16', '2017-06-23 22:38:16'),
(75, 'tour-5.jpg', '65-nhat-nga-tour-5jpg-149828269929499.jpg', NULL, '06-2017', 641431, '2017-06-23 22:38:19', '2017-06-23 22:38:19'),
(76, 'tour-6.jpg', '65-nhat-nga-tour-6jpg-149828269929021.jpg', NULL, '06-2017', 382690, '2017-06-23 22:38:19', '2017-06-23 22:38:19'),
(77, 'tour-1.jpg', '65-nhat-nga-tour-1jpg-149829002919154.jpg', NULL, '06-2017', 609701, '2017-06-24 00:40:29', '2017-06-24 00:40:29'),
(78, 'unnamed (3).png', '65-nhat-nga-unnamed-3png-149857956232046.png', NULL, '06-2017', 157, '2017-06-27 09:06:02', '2017-06-27 09:06:02'),
(79, 'Hình thay thế 3 (1).jpg', '65-nhat-nga-hinh-thay-the-3-1jpg-149857966016425.jpg', NULL, '06-2017', 376194, '2017-06-27 09:07:40', '2017-06-27 09:07:40'),
(80, 'slider.jpg', '65-nhat-nga-sliderjpg-149866055117785.jpg', NULL, '06-2017', 653808, '2017-06-28 07:35:51', '2017-06-28 07:35:51'),
(81, 'slider-2.jpg', '65-nhat-nga-slider-2jpg-14986606198894.jpg', NULL, '06-2017', 1031158, '2017-06-28 07:36:59', '2017-06-28 07:36:59'),
(82, 'slider-2.jpg', '65-nhat-nga-slider-2jpg-14986606613396.jpg', NULL, '06-2017', 1031158, '2017-06-28 07:37:41', '2017-06-28 07:37:41'),
(83, 'cambodia-angkor-air.jpg', '65-nhat-nga-cambodia-angkor-airjpg-149889049427885.jpg', NULL, '07-2017', 33131, '2017-06-30 23:28:14', '2017-06-30 23:28:14'),
(84, 'chau-phi.jpg', '65-nhat-nga-chau-phijpg-14988942098953.jpg', NULL, '07-2017', 45829, '2017-07-01 00:30:09', '2017-07-01 00:30:09'),
(85, 'mau-the-aepc-768x475.jpg', '65-nhat-nga-mau-the-aepc-768x475jpg-14989238528112.jpg', NULL, '07-2017', 91685, '2017-07-01 08:44:12', '2017-07-01 08:44:12'),
(86, 'Singapore_visa_issued_to_stateless_person.jpg', '65-nhat-nga-singapore-visa-issued-to-stateless-personjpg-149898407413376.jpg', NULL, '07-2017', 278553, '2017-07-02 01:27:54', '2017-07-02 01:27:54'),
(87, 'Singapore_visa_issued_to_stateless_person.jpg', '65-nhat-nga-singapore-visa-issued-to-stateless-personjpg-149898493025136.jpg', NULL, '07-2017', 278553, '2017-07-02 01:42:10', '2017-07-02 01:42:10'),
(88, 'Singapore_visa_issued_to_stateless_person.jpg', '65-nhat-nga-singapore-visa-issued-to-stateless-personjpg-149899468511809.jpg', NULL, '07-2017', 278553, '2017-07-02 04:24:45', '2017-07-02 04:24:45'),
(89, 'Du-lich-Nha-Trang-15-dieu-thu-vi-chi-nguoi-dia-phuong-moi-biet-ivivu-4.jpg', '65-nhat-nga-du-lich-nha-trang-15-dieu-thu-vi-chi-nguoi-dia-phuong-moi-biet-ivivu-4jpg-149919069727461.jpg', NULL, '07-2017', 390104, '2017-07-04 10:51:37', '2017-07-04 10:51:37');

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
(3, '2017_06_01_054127_create_banner_table', 1),
(4, '2017_06_01_054622_create_banner_translation_table', 1),
(5, '2017_06_01_113533_create_tour_type_table', 1),
(6, '2017_06_01_113534_create_tour_type_translation_table', 1),
(7, '2017_06_01_114741_create_media_table', 1),
(8, '2017_06_01_115220_create_tour_table', 1),
(9, '2017_06_01_115221_create_tour_translation_table', 1),
(10, '2017_06_01_122222_create_service_table', 1),
(11, '2017_06_01_122825_create_service_translation_table', 1),
(12, '2017_06_01_123237_create_visa_category_table', 1),
(13, '2017_06_01_123238_create_visa_category_translation_table', 1),
(14, '2017_06_01_123239_create_visa_table', 1),
(15, '2017_06_01_124349_create_visa_translation_table', 1),
(16, '2017_06_01_125914_create_news_category_table', 1),
(17, '2017_06_01_130124_create_news_category_translation_table', 1),
(18, '2017_06_01_130423_create_news_table', 1),
(19, '2017_06_01_130625_create_news_translation_table', 1),
(20, '2017_06_01_131353_create_province_table', 1),
(21, '2017_06_01_131504_create_province_translation_table', 1),
(22, '2017_06_01_131652_create_place_table', 1),
(23, '2017_06_01_131714_create_place_translation_table', 1),
(24, '2017_06_01_132112_create_tour_place_table', 1),
(25, '2017_06_01_132417_create_food_table', 1),
(26, '2017_06_01_132502_create_food_translation_table', 1),
(27, '2017_06_01_132612_create_tour_food_table', 1),
(28, '2017_06_06_054009_create_newsletter_table', 1),
(29, '2017_06_13_053422_create_template_table', 1),
(30, '2017_06_23_105213_create_booking_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug_url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_ids` longtext COLLATE utf8mb4_unicode_ci,
  `new_cate_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `slug_url`, `media_ids`, `new_cate_id`, `created_at`, `updated_at`) VALUES
(1, 'ton-du-hoa-chat-gap-260-lan-trong-nuoc-chay-than-khien-8-nguoi-tu-vong-1', '57', 2, '2017-06-23 07:30:34', '2017-06-30 07:45:27'),
(2, 'ke-giet-2-me-con-trong-biet-thu-linh-an-tu-hinh-1', '58', 2, '2017-06-23 07:31:24', '2017-06-30 07:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'teo@yahoo.com', '2017-06-20 08:05:22', '2017-06-20 08:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug_url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_category_translation`
--

CREATE TABLE `news_category_translation` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_translation`
--

CREATE TABLE `news_translation` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `new_id` int(10) UNSIGNED NOT NULL,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_translation`
--

INSERT INTO `news_translation` (`id`, `name`, `short_description`, `content`, `new_id`, `lang_code`, `created_at`, `updated_at`) VALUES
(1, 'Tồn dư hóa chất gấp 260 lần trong nước chạy thận khiến 8 người tử vong', 'Tồn dư hóa chất gấp 260 lần trong nước chạy thận khiến 8 người tử vong', '<p>Sau một th&aacute;ng sau sự cố chạy thận khiến 8 người tử vong tại Bệnh viện Đa khoa H&ograve;a B&igrave;nh, C&ocirc;ng an tỉnh H&ograve;a B&igrave;nh x&aacute;c định bước đầu c&oacute; 3 người li&ecirc;n quan tr&aacute;ch nhiệm gồm:&nbsp;B&ugrave;i Mạnh Quốc (31 tuổi, Gi&aacute;m đốc C&ocirc;ng ty TNHH xử l&yacute; nước Tr&acirc;m Anh),&nbsp;Trần Văn Sơn (27 tuổi, c&aacute;n bộ ph&ograve;ng Vật tư - trang thiết bị y tế Bệnh viện đa khoa H&ograve;a B&igrave;nh),&nbsp;Ho&agrave;ng C&ocirc;ng Lương (31 tuổi, b&aacute;c sĩ khoa Hồi sức t&iacute;ch cực - Đơn nguy&ecirc;n thận nh&acirc;n tạo, Bệnh viện Đa khoa tỉnh H&ograve;a B&igrave;nh).</p>\n\n<p>Quốc, Sơn, Lương đang lần lượt bị khởi tố về c&aacute;c tội&nbsp;V&ocirc; &yacute; l&agrave;m chết người do vi phạm quy tắc nghề nghiệp,&nbsp;Thiếu tr&aacute;ch nhiệm g&acirc;y hậu quả nghi&ecirc;m trọng, Vi phạm quy định về chữa bệnh.</p>\n\n<p>Đại t&aacute; Phạm Văn Sử (Ph&oacute; gi&aacute;m đốc C&ocirc;ng an tỉnh H&ograve;a B&igrave;nh) cho biết&nbsp;Quốc bị x&aacute;c định do cẩu thả n&ecirc;n sau khi sục sửa đ&atilde; qu&ecirc;n xả 2 đầu v&agrave;o m&aacute;y khiến tồn dư h&oacute;a chất trong c&aacute;c đường ống nước dẫn v&agrave;o m&aacute;y lọc thận. Sau khi sửa chữa, khử tr&ugrave;ng hệ thống lọc nước RO số 2, d&ugrave; chưa kiểm định mẫu nước nhưng Quốc vẫn b&agrave;n giao cho bệnh viện sử dụng.</p>\n\n<p>Kết quả gi&aacute;m định của Viện Khoa học H&igrave;nh sự (Bộ C&ocirc;ng an) cho thấy c&aacute;c mẫu nước thu tại đầy cấp v&agrave;o m&aacute;y lọc thận số 10 v&agrave; số 13 c&aacute;c chỉ ti&ecirc;u độ PH rất thấp; độ dẫn điện rất cao, h&agrave;m lượng Florua cao gấp 245 v&agrave; 260 lần mức cho ph&eacute;p.</p>\n\n<p>&quot;Ngo&agrave;i 2 m&aacute;y lọc thận tr&ecirc;n, qua gi&aacute;m định mẫu nước tại c&aacute;c m&aacute;y chạy thận nh&acirc;n tạo kh&aacute;c cho thấy c&oacute; h&agrave;m lượng Florua đều vượt ngưỡng an to&agrave;n gấp h&agrave;ng trăm lần&quot;, kết luận của cơ quan điều tra n&ecirc;u r&otilde;.</p>\n\n<p>Cơ quan điều tra x&aacute;c định, b&aacute;c sĩ Lương trực tiếp k&yacute; đề xuất sửa chữa, chưa nhận được b&agrave;n giao việc sửa chữa bằng văn bản v&agrave; chưa biết nguồn nước RO số 2 c&oacute; đạt ti&ecirc;u chuẩn hay kh&ocirc;ng nhưng vẫn cho chạy thận với c&aacute;c bệnh nh&acirc;n.</p>\n\n<p>Trong khi đ&oacute;, bị can Sơn đ&atilde; kh&ocirc;ng theo d&otilde;i, gi&aacute;m s&aacute;t việc sửa chữa, bảo dưỡng hệ thống lọc nước RO số 2 theo đ&uacute;ng chức tr&aacute;ch, nhiệm vụ được giao.</p>\n\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\n	<tbody>\n		<tr>\n			<td><img alt=\"ton-du-hoa-chat-gap-260-lan-trong-nuoc-chay-than-khien-8-nguoi-tu-vong\" data-natural-width=\"500\" data-pwidth=\"500\" data-width=\"500\" src=\"http://img.f29.vnecdn.net/2017/06/23/benh-nhan-Hoa-Binh-4728-149688-1840-3282-1498220335.jpg\" /></td>\n		</tr>\n		<tr>\n			<td>\n			<p>Nỗ lực hồi sức cấp cứu cho bệnh nh&acirc;n bị tai biến chạy thận. Ảnh:&nbsp;N.P.</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Theo điều tra, ng&agrave;y 25/5, Bệnh viện Đa khoa tỉnh H&ograve;a B&igrave;nh k&yacute; với C&ocirc;ng ty Cổ phần dược phẩm Thi&ecirc;n Sơn với nội dung cung cấp vật tư sửa chữa hệ thống lọc nước RO số 2. C&ugrave;ng ng&agrave;y, C&ocirc;ng ty Thi&ecirc;n Sơn đ&atilde; k&yacute; hợp đồng với C&ocirc;ng ty TNHH xử l&yacute; nước Tr&acirc;m Anh của Quốc với nội dung b&aacute;n, lắp đặt, thay thế vật liệu lọc RO số 2 tại bệnh viện Đa khoa tỉnh H&ograve;a B&igrave;nh.</p>\n\n<p>Ba ng&agrave;y sau, Quốc đến bệnh viện để lắp đặt, thay thế c&aacute;c thiết bị như k&yacute; kết dưới sự gi&aacute;m s&aacute;t của Sơn. Trong qu&aacute; tr&igrave;nh l&agrave;m, Quốc xả&nbsp;hết nước tồn, d&ugrave;ng bơm để bơm nước RO mới v&agrave;o rửa đường ống li&ecirc;n tục trong 2 tiếng, xả lại đầu v&ograve;i rồi cắm lại d&acirc;y như ban đầu.</p>\n\n<p>Chiều 28/5, Quốc gọi điện thoại cho Sơn th&ocirc;ng b&aacute;o đ&atilde; sửa chữa, bảo dưỡng xong. Do Sơn kh&ocirc;ng c&oacute; mặt tại đ&oacute;, Quốc gọi điện thoại cho chị Đỗ Thị Điệp l&agrave; điều dưỡng vi&ecirc;n của Khoa Hồi sức t&iacute;ch cực, n&oacute;i l&agrave; hệ thống nước đ&atilde; sửa chữa, bảo dưỡng xong,&nbsp;c&aacute;c thiết bị đ&atilde; hoạt động b&igrave;nh thường, mai sẽ k&yacute; bi&ecirc;n bản b&agrave;n giao.</p>\n\n<p><iframe allowfullscreen=\"\" data-status=\"stop\" data-view=\"inview\" frameborder=\"0\" height=\"270\" id=\"player_152367_1\" src=\"http://video.vnexpress.net/parser.html?id=152367&amp;t=2&amp;ft=video&amp;si=1000000&amp;ap=0&amp;ishome=0&amp;player_id=152367_1&amp;articleId=3603915\" width=\"480\"></iframe></p>\n\n<p>S&aacute;ng h&ocirc;m sau, điều dưỡng vi&ecirc;n của khoa Hồi Sức t&iacute;ch cực, đơn nguy&ecirc;n chạy thận nh&acirc;n tạo thấy chị Điệp th&ocirc;ng b&aacute;o c&aacute;c thiết bị đ&atilde; hoạt động b&igrave;nh thường n&ecirc;n khởi động hệ thống lọc nước.&nbsp;</p>\n\n<p>&Iacute;t ph&uacute;t sau, b&aacute;c sĩ Lương ra y lệnh chạy thận cho 18 bệnh nh&acirc;n. M&aacute;y l&agrave;m việc khoảng 30 ph&uacute;t th&igrave;&nbsp;3 người c&oacute; chung biểu hiện n&ocirc;n, ngứa, buồn đi ngo&agrave;i v&agrave; ch&oacute;ng mặt. C&aacute;c bệnh nh&acirc;n kh&aacute;c tiếp đ&oacute; c&oacute; biểu hiện tương tự.</p>\n\n<p>Hậu quả, 8 người trong số n&agrave;y đ&atilde; lần lượt tử vong.&nbsp;10 người được chuyển về Bệnh viện Bạch Mai (H&agrave; Nội) trong đ&ecirc;m hiện sức khỏe đ&atilde; hồi phục.</p>', 1, 'vi', '2017-06-23 07:30:34', '2017-06-23 07:30:34'),
(2, 'Tồn dư hóa chất gấp 260 lần trong nước chạy thận khiến 8 người tử vong', 'Tồn dư hóa chất gấp 260 lần trong nước chạy thận khiến 8 người tử vong', '<p>Sau một th&aacute;ng sau sự cố chạy thận khiến 8 người tử vong tại Bệnh viện Đa khoa H&ograve;a B&igrave;nh, C&ocirc;ng an tỉnh H&ograve;a B&igrave;nh x&aacute;c định bước đầu c&oacute; 3 người li&ecirc;n quan tr&aacute;ch nhiệm gồm:&nbsp;B&ugrave;i Mạnh Quốc (31 tuổi, Gi&aacute;m đốc C&ocirc;ng ty TNHH xử l&yacute; nước Tr&acirc;m Anh),&nbsp;Trần Văn Sơn (27 tuổi, c&aacute;n bộ ph&ograve;ng Vật tư - trang thiết bị y tế Bệnh viện đa khoa H&ograve;a B&igrave;nh),&nbsp;Ho&agrave;ng C&ocirc;ng Lương (31 tuổi, b&aacute;c sĩ khoa Hồi sức t&iacute;ch cực - Đơn nguy&ecirc;n thận nh&acirc;n tạo, Bệnh viện Đa khoa tỉnh H&ograve;a B&igrave;nh).</p>\n\n<p>Quốc, Sơn, Lương đang lần lượt bị khởi tố về c&aacute;c tội&nbsp;V&ocirc; &yacute; l&agrave;m chết người do vi phạm quy tắc nghề nghiệp,&nbsp;Thiếu tr&aacute;ch nhiệm g&acirc;y hậu quả nghi&ecirc;m trọng, Vi phạm quy định về chữa bệnh.</p>\n\n<p>Đại t&aacute; Phạm Văn Sử (Ph&oacute; gi&aacute;m đốc C&ocirc;ng an tỉnh H&ograve;a B&igrave;nh) cho biết&nbsp;Quốc bị x&aacute;c định do cẩu thả n&ecirc;n sau khi sục sửa đ&atilde; qu&ecirc;n xả 2 đầu v&agrave;o m&aacute;y khiến tồn dư h&oacute;a chất trong c&aacute;c đường ống nước dẫn v&agrave;o m&aacute;y lọc thận. Sau khi sửa chữa, khử tr&ugrave;ng hệ thống lọc nước RO số 2, d&ugrave; chưa kiểm định mẫu nước nhưng Quốc vẫn b&agrave;n giao cho bệnh viện sử dụng.</p>\n\n<p>Kết quả gi&aacute;m định của Viện Khoa học H&igrave;nh sự (Bộ C&ocirc;ng an) cho thấy c&aacute;c mẫu nước thu tại đầy cấp v&agrave;o m&aacute;y lọc thận số 10 v&agrave; số 13 c&aacute;c chỉ ti&ecirc;u độ PH rất thấp; độ dẫn điện rất cao, h&agrave;m lượng Florua cao gấp 245 v&agrave; 260 lần mức cho ph&eacute;p.</p>\n\n<p>&quot;Ngo&agrave;i 2 m&aacute;y lọc thận tr&ecirc;n, qua gi&aacute;m định mẫu nước tại c&aacute;c m&aacute;y chạy thận nh&acirc;n tạo kh&aacute;c cho thấy c&oacute; h&agrave;m lượng Florua đều vượt ngưỡng an to&agrave;n gấp h&agrave;ng trăm lần&quot;, kết luận của cơ quan điều tra n&ecirc;u r&otilde;.</p>\n\n<p>Cơ quan điều tra x&aacute;c định, b&aacute;c sĩ Lương trực tiếp k&yacute; đề xuất sửa chữa, chưa nhận được b&agrave;n giao việc sửa chữa bằng văn bản v&agrave; chưa biết nguồn nước RO số 2 c&oacute; đạt ti&ecirc;u chuẩn hay kh&ocirc;ng nhưng vẫn cho chạy thận với c&aacute;c bệnh nh&acirc;n.</p>\n\n<p>Trong khi đ&oacute;, bị can Sơn đ&atilde; kh&ocirc;ng theo d&otilde;i, gi&aacute;m s&aacute;t việc sửa chữa, bảo dưỡng hệ thống lọc nước RO số 2 theo đ&uacute;ng chức tr&aacute;ch, nhiệm vụ được giao.</p>\n\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\n	<tbody>\n		<tr>\n			<td><img alt=\"ton-du-hoa-chat-gap-260-lan-trong-nuoc-chay-than-khien-8-nguoi-tu-vong\" data-natural-width=\"500\" data-pwidth=\"500\" data-width=\"500\" src=\"http://img.f29.vnecdn.net/2017/06/23/benh-nhan-Hoa-Binh-4728-149688-1840-3282-1498220335.jpg\" /></td>\n		</tr>\n		<tr>\n			<td>\n			<p>Nỗ lực hồi sức cấp cứu cho bệnh nh&acirc;n bị tai biến chạy thận. Ảnh:&nbsp;N.P.</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Theo điều tra, ng&agrave;y 25/5, Bệnh viện Đa khoa tỉnh H&ograve;a B&igrave;nh k&yacute; với C&ocirc;ng ty Cổ phần dược phẩm Thi&ecirc;n Sơn với nội dung cung cấp vật tư sửa chữa hệ thống lọc nước RO số 2. C&ugrave;ng ng&agrave;y, C&ocirc;ng ty Thi&ecirc;n Sơn đ&atilde; k&yacute; hợp đồng với C&ocirc;ng ty TNHH xử l&yacute; nước Tr&acirc;m Anh của Quốc với nội dung b&aacute;n, lắp đặt, thay thế vật liệu lọc RO số 2 tại bệnh viện Đa khoa tỉnh H&ograve;a B&igrave;nh.</p>\n\n<p>Ba ng&agrave;y sau, Quốc đến bệnh viện để lắp đặt, thay thế c&aacute;c thiết bị như k&yacute; kết dưới sự gi&aacute;m s&aacute;t của Sơn. Trong qu&aacute; tr&igrave;nh l&agrave;m, Quốc xả&nbsp;hết nước tồn, d&ugrave;ng bơm để bơm nước RO mới v&agrave;o rửa đường ống li&ecirc;n tục trong 2 tiếng, xả lại đầu v&ograve;i rồi cắm lại d&acirc;y như ban đầu.</p>\n\n<p>Chiều 28/5, Quốc gọi điện thoại cho Sơn th&ocirc;ng b&aacute;o đ&atilde; sửa chữa, bảo dưỡng xong. Do Sơn kh&ocirc;ng c&oacute; mặt tại đ&oacute;, Quốc gọi điện thoại cho chị Đỗ Thị Điệp l&agrave; điều dưỡng vi&ecirc;n của Khoa Hồi sức t&iacute;ch cực, n&oacute;i l&agrave; hệ thống nước đ&atilde; sửa chữa, bảo dưỡng xong,&nbsp;c&aacute;c thiết bị đ&atilde; hoạt động b&igrave;nh thường, mai sẽ k&yacute; bi&ecirc;n bản b&agrave;n giao.</p>\n\n<p><iframe allowfullscreen=\"\" data-status=\"stop\" data-view=\"inview\" frameborder=\"0\" height=\"270\" id=\"player_152367_1\" src=\"http://video.vnexpress.net/parser.html?id=152367&amp;t=2&amp;ft=video&amp;si=1000000&amp;ap=0&amp;ishome=0&amp;player_id=152367_1&amp;articleId=3603915\" width=\"480\"></iframe></p>\n\n<p>S&aacute;ng h&ocirc;m sau, điều dưỡng vi&ecirc;n của khoa Hồi Sức t&iacute;ch cực, đơn nguy&ecirc;n chạy thận nh&acirc;n tạo thấy chị Điệp th&ocirc;ng b&aacute;o c&aacute;c thiết bị đ&atilde; hoạt động b&igrave;nh thường n&ecirc;n khởi động hệ thống lọc nước.&nbsp;</p>\n\n<p>&Iacute;t ph&uacute;t sau, b&aacute;c sĩ Lương ra y lệnh chạy thận cho 18 bệnh nh&acirc;n. M&aacute;y l&agrave;m việc khoảng 30 ph&uacute;t th&igrave;&nbsp;3 người c&oacute; chung biểu hiện n&ocirc;n, ngứa, buồn đi ngo&agrave;i v&agrave; ch&oacute;ng mặt. C&aacute;c bệnh nh&acirc;n kh&aacute;c tiếp đ&oacute; c&oacute; biểu hiện tương tự.</p>\n\n<p>Hậu quả, 8 người trong số n&agrave;y đ&atilde; lần lượt tử vong.&nbsp;10 người được chuyển về Bệnh viện Bạch Mai (H&agrave; Nội) trong đ&ecirc;m hiện sức khỏe đ&atilde; hồi phục.</p>', 1, 'en', '2017-06-23 07:30:35', '2017-06-23 07:30:35'),
(3, 'Kẻ giết 2 mẹ con trong biệt thự lĩnh án tử hình', 'Kẻ giết 2 mẹ con trong biệt thự lĩnh án tử hình', '<h3>Ch&acirc;u Minh Nh&acirc;n thừa nhận giết vợ con của Trưởng ban d&acirc;n vận huyện Ch&acirc;u Đức (B&agrave; Rịa - Vũng T&agrave;u), bật kh&oacute;c khi n&oacute;i lời sau c&ugrave;ng v&agrave; xin lỗi gia đ&igrave;nh nạn nh&acirc;n.</h3>\n\n<ul>\n	<li><a href=\"http://vnexpress.net/tin-tuc/phap-luat/nghi-pham-giet-2-me-con-trong-biet-thu-thuc-nghiem-hien-truong-3500324.html\" tabindex=\"1\">Nghi phạm giết 2 mẹ con trong biệt thự thực nghiệm hiện trường</a>&nbsp; / &nbsp;<a href=\"http://video.vnexpress.net/tin-tuc/phap-luat/canh-sat-tim-dau-vet-trong-can-biet-thu-co-hai-me-con-tu-vong-3489017.html\" tabindex=\"2\">Cảnh s&aacute;t t&igrave;m dấu vết trong căn biệt thự c&oacute; hai mẹ con tử vong</a></li>\n</ul>\n\n<p><iframe allowfullscreen=\"\" data-status=\"play\" data-view=\"outview\" frameborder=\"0\" height=\"270\" id=\"player_133050_0\" src=\"http://video.vnexpress.net/parser.html?id=133050&amp;t=2&amp;ft=video&amp;si=1000000&amp;ap=0&amp;ishome=0&amp;player_id=133050_0&amp;articleId=3568863\" width=\"480\"></iframe></p>\n\n<p>S&aacute;ng 12/4, TAND B&agrave; Rịa - Vũng T&agrave;u xử sơ thẩm, tuy&ecirc;n phạt&nbsp;Ch&acirc;u Minh Nh&acirc;n (22 tuổi, qu&ecirc; Vĩnh Long) mức &aacute;n tử h&igrave;nh về tội Giết người, Cướp t&agrave;i sản.&nbsp;Nh&acirc;n đ&atilde; s&aacute;t hại vợ con của &ocirc;ng B&ugrave;i Xu&acirc;n Thường (55 tuổi, Trưởng ban d&acirc;n vận huyện ủy Ch&acirc;u Đức) hồi th&aacute;ng 10/2016.&nbsp;Phi&ecirc;n t&ograve;a được xử lưu động tại s&acirc;n vận động x&atilde; Quảng Th&agrave;nh, huyện Ch&acirc;u Đức với sự theo d&otilde;i của khoảng 1.000 người d&acirc;n địa phương.</p>\n\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\n	<tbody>\n		<tr>\n			<td><img alt=\"Châu Minh Nhân thừa nhận toàn bộ hành vi phạm tội của mình. Ảnh: Phước Tuấn\" data-natural-width=\"500\" data-pwidth=\"500\" data-width=\"500\" src=\"http://img.f29.vnecdn.net/2017/04/12/DSC02918-JPG-5565-1491974025.jpg\" /></td>\n		</tr>\n		<tr>\n			<td>\n			<p>Ch&acirc;u Minh Nh&acirc;n thừa nhận to&agrave;n bộ h&agrave;nh vi phạm tội của m&igrave;nh. Ảnh:&nbsp;<em>Xu&acirc;n Thắng.</em></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Theo c&aacute;o trạng, Nh&acirc;n l&agrave; nh&acirc;n vi&ecirc;n s&acirc;n cỏ nh&acirc;n tạo của một c&ocirc;ng ty c&oacute; trụ sở ở TP HCM. Nam thanh ni&ecirc;n n&agrave;y quen biết với gia đ&igrave;nh &ocirc;ng Thường do l&agrave;m s&acirc;n b&oacute;ng cho &ocirc;ng n&agrave;y v&agrave;o năm 2014. Th&aacute;ng 9/2016, Nh&acirc;n nghĩ gia đ&igrave;nh &ocirc;ng Thường gi&agrave;u c&oacute; n&ecirc;n nảy sinh &yacute; định đột nhập căn biệt thự trộm t&agrave;i sản để trả nợ.</p>\n\n<p>Ng&agrave;y 20/10/2016, Nh&acirc;n từ TP HCM đi xe kh&aacute;ch về Ch&acirc;u Đức nghỉ lại, rồi thu&ecirc; xe &ocirc;m v&agrave;o nh&agrave; &ocirc;ng Thường chơi. Nghe chủ nh&agrave; kể chuyện nu&ocirc;i yến thu nhập cao, c&oacute; gắn camera bảo vệ n&ecirc;n Nh&acirc;n đi d&ograve; x&eacute;t, quan s&aacute;t kỹ địa h&igrave;nh nhằm l&ecirc;n kế hoạch đột nhập. H&ocirc;m sau, kẻ n&agrave;y đến trả xe m&aacute;y đ&atilde; mượn v&agrave; cho biết đi B&igrave;nh Định gấp để đ&aacute;nh lạc hướng.</p>\n\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\n	<tbody>\n		<tr>\n			<td><img alt=\"Ông Thường khóc nghẹn khi nghe lại quá trình gây án của Nhân. Ảnh: Xuân Thắng\" data-natural-width=\"500\" data-pwidth=\"500\" data-width=\"500\" src=\"http://img.f29.vnecdn.net/2017/04/12/DSC02903-JPG-1403-1491974025.jpg\" /></td>\n		</tr>\n		<tr>\n			<td>\n			<p>&Ocirc;ng Thường kh&oacute;c nghẹn khi nghe Nh&acirc;n kể&nbsp;lại qu&aacute; tr&igrave;nh s&aacute;t hại vợ con m&igrave;nh. Ảnh:&nbsp;<em>Xu&acirc;n Thắng.</em></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Chiều 24/10, Nh&acirc;n đột nhập v&agrave;o căn biệt thự. Sau 30 ph&uacute;t lục lọi, t&ecirc;n trộm bị con trai của &ocirc;ng Thường ph&aacute;t hiện. Nh&acirc;n cầm thanh sắt đ&aacute;nh nhiều ph&aacute;t v&agrave;o đầu v&agrave; người cậu n&agrave;y. Thấy nạn nh&acirc;n tử vong, hắn lấy d&acirc;y tr&oacute;i hai tay, giấu thi thể trong nh&agrave; kho, rồi l&ecirc;n lầu t&igrave;m t&agrave;i sản.</p>\n\n<p>L&uacute;c n&agrave;y, vợ &ocirc;ng Thường đi chợ về l&ecirc;n lầu t&igrave;m con trai. Nấp sau v&aacute;ch, Nh&acirc;n d&ugrave;ng tu&yacute;p sắt đ&aacute;nh rồi siết cổ khiến b&agrave; chủ nh&agrave; bất tỉnh, cướp sợi d&acirc;y chuyền, đ&ocirc;i b&ocirc;ng tai, một điện thoại...</p>\n\n<p>Hung thủ sau đ&oacute; mặc &aacute;o mưa, bịt mặt, l&ecirc;n lầu tắt nguồn điện camera rồi cướp tổ yến. Tất cả t&agrave;i sản kẻ n&agrave;y cho v&agrave;o bal&ocirc;, lấy xe m&aacute;y của nạn nh&acirc;n rời khỏi căn biệt thự. Tr&ecirc;n đường tẩu tho&aacute;t về TP HCM, Nh&acirc;n n&eacute;m hung kh&iacute; c&aacute;ch biệt thự khoảng 200 m v&agrave; th&aacute;o biển số xe vứt ở huyện Nhơn Trạch.&nbsp;Sau 36 giờ g&acirc;y &aacute;n, Nh&acirc;n bị bắt giữ tại TP HCM.</p>\n\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\n	<tbody>\n		<tr>\n			<td><img alt=\"Hàng nghìn người dân trong khu vực theo dõi phiên tòa. Ảnh: Phước Tuấn\" data-natural-width=\"500\" data-pwidth=\"500\" data-width=\"500\" src=\"http://img.f29.vnecdn.net/2017/04/12/IMAG8167-1-6876-1491974025.jpg\" /></td>\n		</tr>\n		<tr>\n			<td>\n			<p>H&agrave;ng ngh&igrave;n người d&acirc;n&nbsp;theo d&otilde;i phi&ecirc;n t&ograve;a lưu động. Ảnh:&nbsp;<em>Phước Tuấn.</em></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Tại phi&ecirc;n t&ograve;a, Nh&acirc;n khai nhận to&agrave;n bộ h&agrave;nh vi phạm tội của m&igrave;nh. Bị c&aacute;o cho rằng trước đ&oacute; đ&atilde; bảo l&atilde;nh cho bạn th&acirc;n mượn 20 triệu đồng nhưng đến kỳ trả m&agrave; bạn về B&igrave;nh Định. Sợ mất uy t&iacute;n n&ecirc;n hắn nảy sinh &yacute; định trộm tiền nhằm trả nợ. N&oacute;i lời sau c&ugrave;ng, Nh&acirc;n bật kh&oacute;c nức nở, gửi lời xin lỗi đến gia đ&igrave;nh nạn nh&acirc;n.</p>\n\n<p>HĐXX cho rằng, chỉ v&igrave; 20 triệu đồng m&agrave; Nh&acirc;n nảy sinh l&ograve;ng tham, cố t&igrave;nh giết hại nạn nh&acirc;n để che giấu tội phạm của m&igrave;nh. &quot;H&agrave;nh vi tr&ecirc;n thể hiện t&iacute;nh c&ocirc;n đồ, d&atilde; man, t&agrave;n độc, coi thường t&iacute;nh mạng con người, nguy hiểm cho x&atilde; hội, g&acirc;y hoang mang trong quần ch&uacute;ng nh&acirc;n d&acirc;n n&ecirc;n cần xử nghi&ecirc;m để răn đe&quot;, HĐXX nhận định.</p>', 2, 'vi', '2017-06-23 07:31:24', '2017-06-23 07:31:24'),
(4, 'Kẻ giết 2 mẹ con trong biệt thự lĩnh án tử hình', 'Kẻ giết 2 mẹ con trong biệt thự lĩnh án tử hình', '<h3>Ch&acirc;u Minh Nh&acirc;n thừa nhận giết vợ con của Trưởng ban d&acirc;n vận huyện Ch&acirc;u Đức (B&agrave; Rịa - Vũng T&agrave;u), bật kh&oacute;c khi n&oacute;i lời sau c&ugrave;ng v&agrave; xin lỗi gia đ&igrave;nh nạn nh&acirc;n.</h3>\n\n<ul>\n	<li><a href=\"http://vnexpress.net/tin-tuc/phap-luat/nghi-pham-giet-2-me-con-trong-biet-thu-thuc-nghiem-hien-truong-3500324.html\" tabindex=\"1\">Nghi phạm giết 2 mẹ con trong biệt thự thực nghiệm hiện trường</a>&nbsp; / &nbsp;<a href=\"http://video.vnexpress.net/tin-tuc/phap-luat/canh-sat-tim-dau-vet-trong-can-biet-thu-co-hai-me-con-tu-vong-3489017.html\" tabindex=\"2\">Cảnh s&aacute;t t&igrave;m dấu vết trong căn biệt thự c&oacute; hai mẹ con tử vong</a></li>\n</ul>\n\n<p><iframe allowfullscreen=\"\" data-status=\"play\" data-view=\"outview\" frameborder=\"0\" height=\"270\" id=\"player_133050_0\" src=\"http://video.vnexpress.net/parser.html?id=133050&amp;t=2&amp;ft=video&amp;si=1000000&amp;ap=0&amp;ishome=0&amp;player_id=133050_0&amp;articleId=3568863\" width=\"480\"></iframe></p>\n\n<p>S&aacute;ng 12/4, TAND B&agrave; Rịa - Vũng T&agrave;u xử sơ thẩm, tuy&ecirc;n phạt&nbsp;Ch&acirc;u Minh Nh&acirc;n (22 tuổi, qu&ecirc; Vĩnh Long) mức &aacute;n tử h&igrave;nh về tội Giết người, Cướp t&agrave;i sản.&nbsp;Nh&acirc;n đ&atilde; s&aacute;t hại vợ con của &ocirc;ng B&ugrave;i Xu&acirc;n Thường (55 tuổi, Trưởng ban d&acirc;n vận huyện ủy Ch&acirc;u Đức) hồi th&aacute;ng 10/2016.&nbsp;Phi&ecirc;n t&ograve;a được xử lưu động tại s&acirc;n vận động x&atilde; Quảng Th&agrave;nh, huyện Ch&acirc;u Đức với sự theo d&otilde;i của khoảng 1.000 người d&acirc;n địa phương.</p>\n\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\n	<tbody>\n		<tr>\n			<td><img alt=\"Châu Minh Nhân thừa nhận toàn bộ hành vi phạm tội của mình. Ảnh: Phước Tuấn\" data-natural-width=\"500\" data-pwidth=\"500\" data-width=\"500\" src=\"http://img.f29.vnecdn.net/2017/04/12/DSC02918-JPG-5565-1491974025.jpg\" /></td>\n		</tr>\n		<tr>\n			<td>\n			<p>Ch&acirc;u Minh Nh&acirc;n thừa nhận to&agrave;n bộ h&agrave;nh vi phạm tội của m&igrave;nh. Ảnh:&nbsp;<em>Xu&acirc;n Thắng.</em></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Theo c&aacute;o trạng, Nh&acirc;n l&agrave; nh&acirc;n vi&ecirc;n s&acirc;n cỏ nh&acirc;n tạo của một c&ocirc;ng ty c&oacute; trụ sở ở TP HCM. Nam thanh ni&ecirc;n n&agrave;y quen biết với gia đ&igrave;nh &ocirc;ng Thường do l&agrave;m s&acirc;n b&oacute;ng cho &ocirc;ng n&agrave;y v&agrave;o năm 2014. Th&aacute;ng 9/2016, Nh&acirc;n nghĩ gia đ&igrave;nh &ocirc;ng Thường gi&agrave;u c&oacute; n&ecirc;n nảy sinh &yacute; định đột nhập căn biệt thự trộm t&agrave;i sản để trả nợ.</p>\n\n<p>Ng&agrave;y 20/10/2016, Nh&acirc;n từ TP HCM đi xe kh&aacute;ch về Ch&acirc;u Đức nghỉ lại, rồi thu&ecirc; xe &ocirc;m v&agrave;o nh&agrave; &ocirc;ng Thường chơi. Nghe chủ nh&agrave; kể chuyện nu&ocirc;i yến thu nhập cao, c&oacute; gắn camera bảo vệ n&ecirc;n Nh&acirc;n đi d&ograve; x&eacute;t, quan s&aacute;t kỹ địa h&igrave;nh nhằm l&ecirc;n kế hoạch đột nhập. H&ocirc;m sau, kẻ n&agrave;y đến trả xe m&aacute;y đ&atilde; mượn v&agrave; cho biết đi B&igrave;nh Định gấp để đ&aacute;nh lạc hướng.</p>\n\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\n	<tbody>\n		<tr>\n			<td><img alt=\"Ông Thường khóc nghẹn khi nghe lại quá trình gây án của Nhân. Ảnh: Xuân Thắng\" data-natural-width=\"500\" data-pwidth=\"500\" data-width=\"500\" src=\"http://img.f29.vnecdn.net/2017/04/12/DSC02903-JPG-1403-1491974025.jpg\" /></td>\n		</tr>\n		<tr>\n			<td>\n			<p>&Ocirc;ng Thường kh&oacute;c nghẹn khi nghe Nh&acirc;n kể&nbsp;lại qu&aacute; tr&igrave;nh s&aacute;t hại vợ con m&igrave;nh. Ảnh:&nbsp;<em>Xu&acirc;n Thắng.</em></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Chiều 24/10, Nh&acirc;n đột nhập v&agrave;o căn biệt thự. Sau 30 ph&uacute;t lục lọi, t&ecirc;n trộm bị con trai của &ocirc;ng Thường ph&aacute;t hiện. Nh&acirc;n cầm thanh sắt đ&aacute;nh nhiều ph&aacute;t v&agrave;o đầu v&agrave; người cậu n&agrave;y. Thấy nạn nh&acirc;n tử vong, hắn lấy d&acirc;y tr&oacute;i hai tay, giấu thi thể trong nh&agrave; kho, rồi l&ecirc;n lầu t&igrave;m t&agrave;i sản.</p>\n\n<p>L&uacute;c n&agrave;y, vợ &ocirc;ng Thường đi chợ về l&ecirc;n lầu t&igrave;m con trai. Nấp sau v&aacute;ch, Nh&acirc;n d&ugrave;ng tu&yacute;p sắt đ&aacute;nh rồi siết cổ khiến b&agrave; chủ nh&agrave; bất tỉnh, cướp sợi d&acirc;y chuyền, đ&ocirc;i b&ocirc;ng tai, một điện thoại...</p>\n\n<p>Hung thủ sau đ&oacute; mặc &aacute;o mưa, bịt mặt, l&ecirc;n lầu tắt nguồn điện camera rồi cướp tổ yến. Tất cả t&agrave;i sản kẻ n&agrave;y cho v&agrave;o bal&ocirc;, lấy xe m&aacute;y của nạn nh&acirc;n rời khỏi căn biệt thự. Tr&ecirc;n đường tẩu tho&aacute;t về TP HCM, Nh&acirc;n n&eacute;m hung kh&iacute; c&aacute;ch biệt thự khoảng 200 m v&agrave; th&aacute;o biển số xe vứt ở huyện Nhơn Trạch.&nbsp;Sau 36 giờ g&acirc;y &aacute;n, Nh&acirc;n bị bắt giữ tại TP HCM.</p>\n\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\n	<tbody>\n		<tr>\n			<td><img alt=\"Hàng nghìn người dân trong khu vực theo dõi phiên tòa. Ảnh: Phước Tuấn\" data-natural-width=\"500\" data-pwidth=\"500\" data-width=\"500\" src=\"http://img.f29.vnecdn.net/2017/04/12/IMAG8167-1-6876-1491974025.jpg\" /></td>\n		</tr>\n		<tr>\n			<td>\n			<p>H&agrave;ng ngh&igrave;n người d&acirc;n&nbsp;theo d&otilde;i phi&ecirc;n t&ograve;a lưu động. Ảnh:&nbsp;<em>Phước Tuấn.</em></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Tại phi&ecirc;n t&ograve;a, Nh&acirc;n khai nhận to&agrave;n bộ h&agrave;nh vi phạm tội của m&igrave;nh. Bị c&aacute;o cho rằng trước đ&oacute; đ&atilde; bảo l&atilde;nh cho bạn th&acirc;n mượn 20 triệu đồng nhưng đến kỳ trả m&agrave; bạn về B&igrave;nh Định. Sợ mất uy t&iacute;n n&ecirc;n hắn nảy sinh &yacute; định trộm tiền nhằm trả nợ. N&oacute;i lời sau c&ugrave;ng, Nh&acirc;n bật kh&oacute;c nức nở, gửi lời xin lỗi đến gia đ&igrave;nh nạn nh&acirc;n.</p>\n\n<p>HĐXX cho rằng, chỉ v&igrave; 20 triệu đồng m&agrave; Nh&acirc;n nảy sinh l&ograve;ng tham, cố t&igrave;nh giết hại nạn nh&acirc;n để che giấu tội phạm của m&igrave;nh. &quot;H&agrave;nh vi tr&ecirc;n thể hiện t&iacute;nh c&ocirc;n đồ, d&atilde; man, t&agrave;n độc, coi thường t&iacute;nh mạng con người, nguy hiểm cho x&atilde; hội, g&acirc;y hoang mang trong quần ch&uacute;ng nh&acirc;n d&acirc;n n&ecirc;n cần xử nghi&ecirc;m để răn đe&quot;, HĐXX nhận định.</p>', 2, 'en', '2017-06-23 07:31:24', '2017-06-23 07:31:24');

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
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug_url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_ids` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `province_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `place_translation`
--

CREATE TABLE `place_translation` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `place_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug_url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_ids` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_domestic` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `slug_url`, `media_ids`, `country`, `is_domestic`, `created_at`, `updated_at`) VALUES
(1, 'phan-thiet', '14', 'Viet Nam', 1, '2017-06-16 06:39:30', '2017-06-16 06:39:30'),
(2, 'khanh-hoa', '15', 'viet nam', 1, '2017-06-16 06:40:20', '2017-06-16 06:40:20'),
(3, 'singapore', '59', 'Singapore', 0, '2017-06-23 09:26:49', '2017-06-23 09:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `province_translation`
--

CREATE TABLE `province_translation` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `province_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `province_translation`
--

INSERT INTO `province_translation` (`id`, `name`, `short_description`, `content`, `province_id`, `created_at`, `updated_at`, `lang_code`) VALUES
(1, 'Phan Thiết', NULL, NULL, 1, '2017-06-16 06:39:30', '2017-06-16 06:39:30', 'vi'),
(2, 'Phan Thiet', NULL, NULL, 1, '2017-06-16 06:39:30', '2017-06-16 06:39:30', 'en'),
(3, 'Khánh Hòa', NULL, NULL, 2, '2017-06-16 06:40:20', '2017-06-16 06:40:20', 'vi'),
(4, 'Khanh Hoa', NULL, NULL, 2, '2017-06-16 06:40:21', '2017-06-16 06:40:21', 'en'),
(5, 'Singapore', 'Singapore', NULL, 3, '2017-06-23 09:26:50', '2017-06-23 09:26:50', 'vi'),
(6, 'Singapore', 'Singapore', NULL, 3, '2017-06-23 09:26:50', '2017-06-23 09:26:50', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug_url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_ids` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `slug_url`, `media_ids`, `created_at`, `updated_at`) VALUES
(1, 'translation', '1', NULL, NULL),
(2, 'apec-card', '85', NULL, '2017-07-01 08:44:35'),
(3, 'work-permit', '1', NULL, NULL),
(4, 'airline-ticket', '1', NULL, NULL),
(5, 'visa-vietnam', '1', NULL, NULL),
(6, 'others', '1', NULL, NULL),
(7, 'visa', '1', NULL, NULL),
(8, 'tour', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_translation`
--

CREATE TABLE `service_translation` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_translation`
--

INSERT INTO `service_translation` (`id`, `service_id`, `name`, `content`, `created_at`, `updated_at`, `lang_code`) VALUES
(1, 1, 'translation', '<h2><img alt=\"\" src=\"http://nhatnga.com.vn/site/public/photos/1/translate.png\" /></h2>\n\n<h2 style=\"text-align: center;\"><strong>DỊCH THUẬT C&Aacute;C LOẠI NG&Ocirc;N NGỮ</strong></h2>\n\n<h3 style=\"text-align: center;\"><strong>Bảo đảo ch&iacute;nh x&aacute;c, nhanh ch&oacute;ng v&agrave; gi&aacute; cả hợp l&yacute;</strong></h3>\n\n<p><strong>&nbsp; &nbsp; &nbsp;Dịch t&agrave;i liệu c&ocirc;ng chứng nhanh</strong><br />\nCung cấp dịch vụ dịch c&ocirc;ng chứng nhanh theo y&ecirc;u cầu, giao nhận tận nơi với mức gi&aacute; hợp l&yacute;&nbsp;nhất, ch&uacute;ng t&ocirc;i dịch c&ocirc;ng chứng tất c&aacute;c c&aacute;c ng&ocirc;n ngữ theo y&ecirc;u cầu, c&aacute;c loại t&agrave;i liệu ti&ecirc;u biểu. Ch&uacute;ng t&ocirc;i đ&atilde; thực hiện thường xuy&ecirc;n h&agrave;ng ng&agrave;y như c&aacute;c giấy chứng nhận, chứng chỉ, văn bằng, học bạ, bảng điểm, giấy khai sinh, CMND/passport, sổ hộ khẩu, giấy đăng k&yacute; kết h&ocirc;n, quyền sử dụng đất, giấy tờ chứng minh t&agrave;i ch&iacute;nh c&aacute; nh&acirc;n, giấy ph&eacute;p hoạt động, hợp đồng lao động, b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh, b&aacute;o c&aacute;o kiểm to&aacute;n, hợp đồng kinh tế &hellip;<br />\n<strong>&nbsp;&nbsp;&nbsp; &nbsp;Phi&ecirc;n dịch</strong><br />\nQu&yacute; kh&aacute;ch c&oacute; nhu cầu phi&ecirc;n dịch cho đ&agrave;m ph&aacute;n kinh doanh, nghi&ecirc;n cứu thị trường, kỹ thuật, th&aacute;p t&ugrave;ng, dịch hội thảo, dịch cabin c&aacute;c thứ tiếng thuộc c&aacute;c chuy&ecirc;n ng&agrave;nh t&agrave;i ch&iacute;nh, kinh tế, văn h&oacute;a, du lịch, ch&iacute;nh trị, ngoại giao, khoa học &amp; kỹ thuật, x&acirc;y dựng, CNTT, Y tế, luật ph&aacute;p v.v. Ch&uacute;ng t&ocirc;i đảm bảo cung cấp dịch vụ phi&ecirc;n dịch chuy&ecirc;n nghiệp với một&nbsp; mức ph&iacute; thấp nhất cho kh&aacute;ch h&agrave;ng.<br />\n<strong>&nbsp;&nbsp;&nbsp; &nbsp;Dịch t&agrave;i liệu định cư, du lịch, du học</strong><br />\nC&ocirc;ng ty Nhất Nga&nbsp;c&oacute; nhiều kinh nghiệm trong việc dịch c&aacute;c loại t&agrave;i liệu cho mục đ&iacute;ch định cư, du lịch, du học. Ti&ecirc;u biểu ch&uacute;ng t&ocirc;i đ&atilde; thực hiện thường xuy&ecirc;n h&agrave;ng ng&agrave;y như c&aacute;c tờ c&aacute; nh&acirc;n chứng nhận, chứng chỉ, văn bằng, học bạ, bảng điểm, giấy khai sinh, CMND/passport, sổ hộ khẩu, giấy đăng k&yacute; kết h&ocirc;n, quyền sử dụng đất, giấy tờ chứng minh t&agrave;i ch&iacute;nh c&aacute; nh&acirc;n, b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh, b&aacute;o c&aacute;o kiểm to&aacute;n, hồ sơ sổ s&aacute;ch kế to&aacute;n v&agrave; thuế, hợp đồng kinh tế, hồ sơ xin visa đi du lịch v&agrave; du học&hellip; Ch&iacute;nh v&igrave; thường xuy&ecirc;n thực hiện loại t&agrave;i liệu n&agrave;y n&ecirc;n đảm bảo được độ ch&iacute;nh x&aacute;c về dữ liệu cũng như từ ngữ của bản dịch để đạt được mục đ&iacute;ch sử dụng của t&agrave;i liệu, v&agrave; c&oacute; thể r&uacute;t ngắn thời gian thực hiện, n&ecirc;n lấy gi&aacute; dịch cũng ở mức thấp nhất.</p>\n\n<p><strong>&nbsp; &nbsp; &nbsp;Dịch t&agrave;i liệu T&agrave;i ch&iacute;nh ; Kiểm to&aacute;n</strong><br />\nB&ecirc;n cạnh đ&oacute;, c&ocirc;ng ty ch&uacute;ng t&ocirc;i cũng c&oacute; nhiều kinh nghiệm trong việc dịch&nbsp; t&agrave;i liệu t&agrave;i ch&iacute;nh&nbsp; như bảng c&acirc;n đối kế to&aacute;n, b&aacute;o c&aacute;o kết quả hoạt động kinh doanh, b&aacute;o lưu chuyển tiền tệ, thuyết minh b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh, bi&ecirc;n bản kiểm tra thuế &amp; quyết to&aacute;n thuế, h&oacute;a đơn chứng từ, t&agrave;i liệu xuất nhập khẩu, xuất nhập h&agrave;ng, tờ khai thuế, tờ khai hải quan, b&aacute;o c&aacute;o sử dụng h&oacute;a đơn, c&aacute;c b&aacute;o c&aacute;o kiểm to&aacute;n độc lập&hellip;</p>\n\n<p>&nbsp;</p>\n\n<p><img alt=\"\" src=\"http://nhatnga.com.vn/site/public/photos/1/translate.jpg\" /></p>\n\n<p><strong>&nbsp; &nbsp;Dịch s&aacute;ch</strong><br />\nVới đội ngũ&nbsp;nh&acirc;n vi&ecirc;n&nbsp;dịch thuật c&oacute; t&iacute;nh chuy&ecirc;n m&ocirc;n cao, ch&uacute;ng t&ocirc;i am hiểu s&acirc;u sắc về văn h&oacute;a của quốc gia xuất bản, ch&iacute;nh x&aacute;c về nội dung để đảm bảo truyền tải hết th&ocirc;ng điệp của t&aacute;c giả, sao cho người đọc hiểu đ&uacute;ng bản chất một c&acirc;u chuyện đ&uacute;ng với nội dung m&agrave; t&aacute;c giả muốn gửi gắm v&agrave;o đ&oacute;.&nbsp;Đến với c&ocirc;ng ty Nhất Nga, qu&yacute; kh&aacute;ch ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m về chất lượng của s&aacute;ch dịch. Rất mong nhận được sự hợp t&aacute;c của c&aacute;c c&aacute; nh&acirc;n v&agrave; tập thể, c&aacute;c nh&agrave; xuất bản, c&aacute;c cơ quan ph&aacute;t h&agrave;nh s&aacute;ch, b&aacute;o ch&iacute;&hellip;</p>\n\n<p><strong>&nbsp; &nbsp; &nbsp;Dịch hồ sơ thầu</strong><br />\nC&ocirc;ng ty cung cấp dịch vụ&nbsp;dịch hồ sơ thầu, đảm bảo đ&uacute;ng chuy&ecirc;n ng&agrave;nh, dự &aacute;n khả thi của qu&yacute; kh&aacute;ch h&agrave;ng. Ch&uacute;ng t&ocirc;i bảo mật hồ sơ thầu v&agrave; cam kết tất cả c&aacute;c t&agrave;i liệu, hồ sơ thầu được dịch sẽ được lưu giữ với c&aacute;c quy tắc bảo mật nghi&ecirc;m ngặt nhất.</p>\n\n<p><strong>&nbsp; &nbsp; &nbsp;Dịch t&agrave;i liệu kỹ thuật</strong><br />\nTrong việc dịch t&agrave;i liệu kỹ thuật, ch&uacute;ng t&ocirc;i đảm bảo độ ch&iacute;nh x&aacute;c cao nhất. Khi dịch t&agrave;i liệu kỹ thuật ch&uacute;ng t&ocirc;i ch&uacute; trọng c&aacute;c từ ngữ chuy&ecirc;n ng&agrave;nh. Ch&uacute;ng t&ocirc;i thường xuy&ecirc;n cập nhật c&aacute;c t&agrave;i liệu hướng dẫn sử dụng, s&aacute;ch hướng dẫn v&agrave; c&aacute;c t&agrave;i liệu kỹ thuật kh&aacute;c cũng như những th&ocirc;ng tin li&ecirc;n quan đến thiết bị kỹ thuật.</p>\n\n<p><strong>&nbsp; &nbsp; &nbsp;Dịch t&agrave;i liệu thuộc c&aacute;c chuy&ecirc;n ng&agrave;nh</strong><br />\nCh&uacute;ng t&ocirc;i chuy&ecirc;n dịch c&aacute;c chuy&ecirc;n ng&agrave;nh, bao gồm: T&agrave;i liệu doanh nghiệp, t&agrave;i ch&iacute;nh kế to&aacute;n, thương mại, t&agrave;i liệu quảng c&aacute;o v&agrave; tiếp thị, ph&aacute;p l&yacute;, kỹ thuật, y tế v&agrave; khoa học, x&acirc;y dựng, gi&aacute;o dục, bảo hiểm, kh&aacute;ch sạn, CNTT v&agrave; phần mềm.</p>\n\n<p><strong>&nbsp; &nbsp; Cam kết tất cả c&aacute;c th&ocirc;ng tin dịch thuật, hợp ph&aacute;p h&oacute;a sẽ được bảo mật tuyệt đối!</strong></p>\n\n<p>Qu&yacute; kh&aacute;ch đang c&oacute; nhu cầu h&atilde;y li&ecirc;n hệ với ch&uacute;ng t&ocirc;i để được tư vấn hồ sơ v&agrave; thủ tục nhanh ch&oacute;ng!</p>\n\n<p>Bộ phận dịch thuật<br />\nEmail :&nbsp;<a href=\"mailto:dichthuat@nhatnga.vn\">dichthuat@nhatnga.vn</a></p>\n\n<p><strong>Mr Bắc 0988.65.64.06 &ndash; Mr Ph&uacute;c 0919.018.739</strong></p>', NULL, '2017-07-01 08:18:39', 'en'),
(2, 1, 'dich thuat', '<h2><img alt=\"\" src=\"http://nhatnga.com.vn/site/public/photos/1/translate.png\" /></h2>\n\n<h2 style=\"text-align: center;\"><strong>DỊCH THUẬT C&Aacute;C LOẠI NG&Ocirc;N NGỮ</strong></h2>\n\n<h3 style=\"text-align: center;\"><strong>Bảo đảo ch&iacute;nh x&aacute;c, nhanh ch&oacute;ng v&agrave; gi&aacute; cả hợp l&yacute;</strong></h3>\n\n<p><strong>&nbsp; &nbsp; &nbsp;Dịch t&agrave;i liệu c&ocirc;ng chứng nhanh</strong><br />\nCung cấp dịch vụ dịch c&ocirc;ng chứng nhanh theo y&ecirc;u cầu, giao nhận tận nơi với mức gi&aacute; hợp l&yacute;&nbsp;nhất, ch&uacute;ng t&ocirc;i dịch c&ocirc;ng chứng tất c&aacute;c c&aacute;c ng&ocirc;n ngữ theo y&ecirc;u cầu, c&aacute;c loại t&agrave;i liệu ti&ecirc;u biểu. Ch&uacute;ng t&ocirc;i đ&atilde; thực hiện thường xuy&ecirc;n h&agrave;ng ng&agrave;y như c&aacute;c giấy chứng nhận, chứng chỉ, văn bằng, học bạ, bảng điểm, giấy khai sinh, CMND/passport, sổ hộ khẩu, giấy đăng k&yacute; kết h&ocirc;n, quyền sử dụng đất, giấy tờ chứng minh t&agrave;i ch&iacute;nh c&aacute; nh&acirc;n, giấy ph&eacute;p hoạt động, hợp đồng lao động, b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh, b&aacute;o c&aacute;o kiểm to&aacute;n, hợp đồng kinh tế &hellip;<br />\n<strong>&nbsp;&nbsp;&nbsp; &nbsp;Phi&ecirc;n dịch</strong><br />\nQu&yacute; kh&aacute;ch c&oacute; nhu cầu phi&ecirc;n dịch cho đ&agrave;m ph&aacute;n kinh doanh, nghi&ecirc;n cứu thị trường, kỹ thuật, th&aacute;p t&ugrave;ng, dịch hội thảo, dịch cabin c&aacute;c thứ tiếng thuộc c&aacute;c chuy&ecirc;n ng&agrave;nh t&agrave;i ch&iacute;nh, kinh tế, văn h&oacute;a, du lịch, ch&iacute;nh trị, ngoại giao, khoa học &amp; kỹ thuật, x&acirc;y dựng, CNTT, Y tế, luật ph&aacute;p v.v. Ch&uacute;ng t&ocirc;i đảm bảo cung cấp dịch vụ phi&ecirc;n dịch chuy&ecirc;n nghiệp với một&nbsp; mức ph&iacute; thấp nhất cho kh&aacute;ch h&agrave;ng.<br />\n<strong>&nbsp;&nbsp;&nbsp; &nbsp;Dịch t&agrave;i liệu định cư, du lịch, du học</strong><br />\nC&ocirc;ng ty Nhất Nga&nbsp;c&oacute; nhiều kinh nghiệm trong việc dịch c&aacute;c loại t&agrave;i liệu cho mục đ&iacute;ch định cư, du lịch, du học. Ti&ecirc;u biểu ch&uacute;ng t&ocirc;i đ&atilde; thực hiện thường xuy&ecirc;n h&agrave;ng ng&agrave;y như c&aacute;c tờ c&aacute; nh&acirc;n chứng nhận, chứng chỉ, văn bằng, học bạ, bảng điểm, giấy khai sinh, CMND/passport, sổ hộ khẩu, giấy đăng k&yacute; kết h&ocirc;n, quyền sử dụng đất, giấy tờ chứng minh t&agrave;i ch&iacute;nh c&aacute; nh&acirc;n, b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh, b&aacute;o c&aacute;o kiểm to&aacute;n, hồ sơ sổ s&aacute;ch kế to&aacute;n v&agrave; thuế, hợp đồng kinh tế, hồ sơ xin visa đi du lịch v&agrave; du học&hellip; Ch&iacute;nh v&igrave; thường xuy&ecirc;n thực hiện loại t&agrave;i liệu n&agrave;y n&ecirc;n đảm bảo được độ ch&iacute;nh x&aacute;c về dữ liệu cũng như từ ngữ của bản dịch để đạt được mục đ&iacute;ch sử dụng của t&agrave;i liệu, v&agrave; c&oacute; thể r&uacute;t ngắn thời gian thực hiện, n&ecirc;n lấy gi&aacute; dịch cũng ở mức thấp nhất.</p>\n\n<p><strong>&nbsp; &nbsp; &nbsp;Dịch t&agrave;i liệu T&agrave;i ch&iacute;nh ; Kiểm to&aacute;n</strong><br />\nB&ecirc;n cạnh đ&oacute;, c&ocirc;ng ty ch&uacute;ng t&ocirc;i cũng c&oacute; nhiều kinh nghiệm trong việc dịch&nbsp; t&agrave;i liệu t&agrave;i ch&iacute;nh&nbsp; như bảng c&acirc;n đối kế to&aacute;n, b&aacute;o c&aacute;o kết quả hoạt động kinh doanh, b&aacute;o lưu chuyển tiền tệ, thuyết minh b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh, bi&ecirc;n bản kiểm tra thuế &amp; quyết to&aacute;n thuế, h&oacute;a đơn chứng từ, t&agrave;i liệu xuất nhập khẩu, xuất nhập h&agrave;ng, tờ khai thuế, tờ khai hải quan, b&aacute;o c&aacute;o sử dụng h&oacute;a đơn, c&aacute;c b&aacute;o c&aacute;o kiểm to&aacute;n độc lập&hellip;</p>\n\n<p>&nbsp;</p>\n\n<p><img alt=\"\" src=\"http://nhatnga.com.vn/site/public/photos/1/translate.jpg\" /></p>\n\n<p><strong>&nbsp; &nbsp;Dịch s&aacute;ch</strong><br />\nVới đội ngũ&nbsp;nh&acirc;n vi&ecirc;n&nbsp;dịch thuật c&oacute; t&iacute;nh chuy&ecirc;n m&ocirc;n cao, ch&uacute;ng t&ocirc;i am hiểu s&acirc;u sắc về văn h&oacute;a của quốc gia xuất bản, ch&iacute;nh x&aacute;c về nội dung để đảm bảo truyền tải hết th&ocirc;ng điệp của t&aacute;c giả, sao cho người đọc hiểu đ&uacute;ng bản chất một c&acirc;u chuyện đ&uacute;ng với nội dung m&agrave; t&aacute;c giả muốn gửi gắm v&agrave;o đ&oacute;.&nbsp;Đến với c&ocirc;ng ty Nhất Nga, qu&yacute; kh&aacute;ch ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m về chất lượng của s&aacute;ch dịch. Rất mong nhận được sự hợp t&aacute;c của c&aacute;c c&aacute; nh&acirc;n v&agrave; tập thể, c&aacute;c nh&agrave; xuất bản, c&aacute;c cơ quan ph&aacute;t h&agrave;nh s&aacute;ch, b&aacute;o ch&iacute;&hellip;</p>\n\n<p><strong>&nbsp; &nbsp; &nbsp;Dịch hồ sơ thầu</strong><br />\nC&ocirc;ng ty cung cấp dịch vụ&nbsp;dịch hồ sơ thầu, đảm bảo đ&uacute;ng chuy&ecirc;n ng&agrave;nh, dự &aacute;n khả thi của qu&yacute; kh&aacute;ch h&agrave;ng. Ch&uacute;ng t&ocirc;i bảo mật hồ sơ thầu v&agrave; cam kết tất cả c&aacute;c t&agrave;i liệu, hồ sơ thầu được dịch sẽ được lưu giữ với c&aacute;c quy tắc bảo mật nghi&ecirc;m ngặt nhất.</p>\n\n<p><strong>&nbsp; &nbsp; &nbsp;Dịch t&agrave;i liệu kỹ thuật</strong><br />\nTrong việc dịch t&agrave;i liệu kỹ thuật, ch&uacute;ng t&ocirc;i đảm bảo độ ch&iacute;nh x&aacute;c cao nhất. Khi dịch t&agrave;i liệu kỹ thuật ch&uacute;ng t&ocirc;i ch&uacute; trọng c&aacute;c từ ngữ chuy&ecirc;n ng&agrave;nh. Ch&uacute;ng t&ocirc;i thường xuy&ecirc;n cập nhật c&aacute;c t&agrave;i liệu hướng dẫn sử dụng, s&aacute;ch hướng dẫn v&agrave; c&aacute;c t&agrave;i liệu kỹ thuật kh&aacute;c cũng như những th&ocirc;ng tin li&ecirc;n quan đến thiết bị kỹ thuật.</p>\n\n<p><strong>&nbsp; &nbsp; &nbsp;Dịch t&agrave;i liệu thuộc c&aacute;c chuy&ecirc;n ng&agrave;nh</strong><br />\nCh&uacute;ng t&ocirc;i chuy&ecirc;n dịch c&aacute;c chuy&ecirc;n ng&agrave;nh, bao gồm: T&agrave;i liệu doanh nghiệp, t&agrave;i ch&iacute;nh kế to&aacute;n, thương mại, t&agrave;i liệu quảng c&aacute;o v&agrave; tiếp thị, ph&aacute;p l&yacute;, kỹ thuật, y tế v&agrave; khoa học, x&acirc;y dựng, gi&aacute;o dục, bảo hiểm, kh&aacute;ch sạn, CNTT v&agrave; phần mềm.</p>\n\n<p><strong>&nbsp; &nbsp; Cam kết tất cả c&aacute;c th&ocirc;ng tin dịch thuật, hợp ph&aacute;p h&oacute;a sẽ được bảo mật tuyệt đối!</strong></p>\n\n<p>Qu&yacute; kh&aacute;ch đang c&oacute; nhu cầu h&atilde;y li&ecirc;n hệ với ch&uacute;ng t&ocirc;i để được tư vấn hồ sơ v&agrave; thủ tục nhanh ch&oacute;ng!</p>\n\n<p>Bộ phận dịch thuật<br />\nEmail :&nbsp;<a href=\"mailto:dichthuat@nhatnga.vn\">dichthuat@nhatnga.vn</a></p>\n\n<p><strong>Mr Bắc 0988.65.64.06 &ndash; Mr Ph&uacute;c 0919.018.739</strong></p>', NULL, '2017-07-01 08:18:39', 'vi'),
(3, 2, 'apec card', '<p><img alt=\"\" src=\"http://nhatnga.com.vn/site/public/photos/1/dich-vu-the-apec.jpg\" /></p>\n\n<h3><strong>1. Thẻ ABTC &nbsp;l&agrave; g&igrave;?</strong></h3>\n\n<p>Thẻ đi lại của doanh nh&acirc;n APEC (APEC Business Travel Card viết tắt ABTC) l&agrave; một loại giấy tờ do cơ quan c&oacute; thẩm quyền của nước v&agrave; v&ugrave;ng l&atilde;nh thổ tham gia Chương tr&igrave;nh thẻ đi lại của doanh nh&acirc;n APEC cấp cho doanh nh&acirc;n của m&igrave;nh để tạo thuận lợi cho việc đi lại thực hiện c&aacute;c hoạt động hợp t&aacute;c kinh doanh, thương mại, đầu tư, dịch vụ; tham dự c&aacute;c hội nghị, hội thảo v&agrave; c&aacute;c mục đ&iacute;ch kinh tế kh&aacute;c tại c&aacute;c nước v&agrave; v&ugrave;ng l&atilde;nh thổ thuộc APEC tham gia Chương tr&igrave;nh. Người mang thẻ &nbsp;ABTC, khi nhập cảnh, xuất cảnh c&aacute;c nước v&agrave; v&ugrave;ng l&atilde;nh thổ c&oacute; t&ecirc;n ghi trong thẻ th&igrave; kh&ocirc;ng cần phải c&oacute; thị thực của c&aacute;c nước v&agrave; v&ugrave;ng l&atilde;nh thổ đ&oacute;.</p>\n\n<p>Thẻ ABTC c&oacute; gi&aacute; trị sử dụng trong 05 năm, kể từ ng&agrave;y cấp v&agrave; kh&ocirc;ng được gia hạn. Khi thẻ ABTC hết thời hạn sử dụng, nếu người được cấp thẻ vẫn c&ograve;n nhu cầu đi lại trong khối APEC, th&igrave; l&agrave;m thủ tục đề nghị cấp lại thẻ mới.</p>\n\n<p>Thẻ ABTC chỉ c&oacute; gi&aacute; trị nhập cảnh, xuất cảnh khi người mang thẻ xuất tr&igrave;nh k&egrave;m theo hộ chiếu hợp lệ. Mỗi lần nhập cảnh, người mang thẻ ABTC được c&aacute;c nước v&agrave; v&ugrave;ng l&atilde;nh thổ th&agrave;nh vi&ecirc;n cấp chứng nhận tạm tr&uacute; theo thời hạn quy định của c&aacute;c nước hoặc v&ugrave;ng l&atilde;nh thổ đ&oacute;.</p>\n\n<p>Doanh nh&acirc;n được cấp thẻ ABTC c&oacute; tr&aacute;ch nhiệm sử dụng thẻ đ&uacute;ng mục đ&iacute;ch nhập cảnh, giữ g&igrave;n v&agrave; bảo quản thẻ; kh&ocirc;ng được tự &yacute; sửa đổi nội dung ghi trong thẻ; kh&ocirc;ng được d&ugrave;ng thẻ v&agrave;o việc vi phạm ph&aacute;p luật.</p>\n\n<p>Doanh nh&acirc;n được cấp thẻ ABTC phải t&ocirc;n trọng v&agrave; tu&acirc;n thủ c&aacute;c quy định của ph&aacute;p luật về nhập cảnh, xuất cảnh, cư tr&uacute; v&agrave; c&aacute;c quy định kh&aacute;c li&ecirc;n quan đến hoạt động của doanh nh&acirc;n tại c&aacute;c nước hoặc v&ugrave;ng l&atilde;nh thổ th&agrave;nh vi&ecirc;n.</p>\n\n<p>Doanh nh&acirc;n được cấp thẻ ABTC vi phạm ph&aacute;p luật Việt Nam sẽ bị cơ quan c&oacute; thẩm quyền Việt Nam xử l&yacute; theo quy định của ph&aacute;p luật hiện h&agrave;nh.</p>\n\n<p>&nbsp;</p>\n\n<h3><strong>2. Đối tượng được cấp thẻ ABTC l&agrave; những ai?</strong></h3>\n\n<ol>\n	<li>Doanh nh&acirc;n Việt Nam đang l&agrave;m việc tại c&aacute;c doanh nghiệp nh&agrave; nước:</li>\n</ol>\n\n<ul>\n	<li>Chủ tịch Hội đồng quản trị, Tổng gi&aacute;m đốc Tổng c&ocirc;ng ty trực thuộc Thủ tướng Ch&iacute;nh phủ (Tổng c&ocirc;ng ty 91);</li>\n	<li>Tổng gi&aacute;m đốc, Ph&oacute; Tổng gi&aacute;m đốc; Gi&aacute;m đốc, Ph&oacute; gi&aacute;m đốc c&aacute;c doanh nghiệp, khu c&ocirc;ng nghiệp, khu chế xuất của Việt Nam; Gi&aacute;m đốc, Ph&oacute; gi&aacute;m đốc Ng&acirc;n h&agrave;ng Việt Nam hoặc Gi&aacute;m đốc, Ph&oacute; gi&aacute;m đốc chi nh&aacute;nh Ng&acirc;n h&agrave;ng Việt Nam;</li>\n	<li>Kế to&aacute;n trưởng hoặc Trưởng/Ph&oacute; ph&ograve;ng c&aacute;c doanh nghiệp, khu c&ocirc;ng nghiệp, khu chế xuất, ng&acirc;n h&agrave;ng, chi nh&aacute;nh Ng&acirc;n h&agrave;ng Việt Nam trở l&ecirc;n.</li>\n</ul>\n\n<ol start=\"2\">\n	<li>Doanh nh&acirc;n Việt Nam đang l&agrave;m việc tại c&aacute;c doanh nghiệp được th&agrave;nh lập theo Luật Doanh nghiệp, Luật Hợp t&aacute;c x&atilde; v&agrave; Luật Đầu tư tại Việt Nam :</li>\n</ol>\n\n<ul>\n	<li>Tổng gi&aacute;m đốc, Ph&oacute; Tổng gi&aacute;m đốc; Gi&aacute;m đốc, Ph&oacute; gi&aacute;m đốc c&aacute;c doanh nghiệp; kế to&aacute;n trưởng hoặc người c&oacute; chức danh Trưởng ph&ograve;ng trong c&aacute;c doanh nghiệp ngo&agrave;i quốc doanh;</li>\n	<li>Chủ tịch, Ph&oacute; Chủ tịch Hội đồng quản trị c&ocirc;ng ty cổ phần; Chủ tịch, Ph&oacute; Chủ tịch Hội đồng th&agrave;nh vi&ecirc;n, Chủ tịch, Ph&oacute; Chủ tịch c&ocirc;ng ty tr&aacute;ch nhiệm hữu hạn; Chủ tịch ban quản trị hợp t&aacute;c x&atilde;, Chủ nhiệm hợp t&aacute;c x&atilde;.</li>\n</ul>\n\n<ol start=\"3\">\n	<li>C&aacute;c trường hợp kh&aacute;c được x&eacute;t cấp thẻ ABTC:</li>\n</ol>\n\n<ul>\n	<li>C&aacute;c vị l&agrave; l&atilde;nh đạo c&aacute;c ng&agrave;nh kinh tế, Thủ trưởng cấp Bộ, Chủ tịch Ủy ban nh&acirc;n d&acirc;n c&aacute;c tỉnh, th&agrave;nh phố trực thuộc Trung ương trực tiếp quản l&yacute; chuy&ecirc;n ng&agrave;nh về c&aacute;c hoạt động của c&aacute;c doanh nghiệp Việt Nam c&oacute; nhiệm vụ tham dự c&aacute;c cuộc họp, hội nghị v&agrave; c&aacute;c hoạt động về hợp t&aacute;c, ph&aacute;t triển kinh tế của APEC;</li>\n	<li>C&ocirc;ng chức, vi&ecirc;n chức nh&agrave; nước c&oacute; nhiệm vụ tham dự c&aacute;c cuộc họp, hội nghị, hội thảo v&agrave; c&aacute;c hoạt động kinh tế kh&aacute;c của APEC; Trưởng, Ph&oacute; cơ quan đại diện thương mại Việt Nam tại c&aacute;c nước v&agrave; v&ugrave;ng l&atilde;nh thổ th&agrave;nh vi&ecirc;n tham gia Chương tr&igrave;nh ABTC.</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<h3><strong>3. Điều kiện được cấp thẻ ABTC tiến h&agrave;nh như sau:</strong></h3>\n\n<ul>\n	<li>Doanh nh&acirc;n Việt Nam mang hộ chiếu c&ograve;n gi&aacute; trị sử dụng (thời hạn sử dụng c&ograve;n tr&ecirc;n 12 th&aacute;ng).</li>\n	<li>Doanh nh&acirc;n đang l&agrave;m việc tại c&aacute;c doanh nghiệp c&oacute; c&aacute;c hoạt động hợp t&aacute;c kinh doanh, thương mại, đầu tư v&agrave; dịch vụ với c&aacute;c đối t&aacute;c trong c&aacute;c nền kinh tế th&agrave;nh vi&ecirc;n tham gia thẻ ABTC được thể hiện th&ocirc;ng qua c&aacute;c hợp đồng kinh tế, thương mại, c&aacute;c dự &aacute;n đầu tư v&agrave; c&aacute;c hợp đồng dịch vụ cụ thể.</li>\n	<li>Doanh nh&acirc;n l&agrave;m việc tại c&aacute;c doanh nghiệp được thể hiện bằng hợp đồng lao động, quyết định bổ nhiệm chức vụ v&agrave; tham gia đ&oacute;ng bảo hiểm x&atilde; hội đầy đủ tại doanh nghiệp đang l&agrave;m việc.</li>\n	<li>Doanh nh&acirc;n phải l&agrave; người từ 18 tuổi trở l&ecirc;n; người kh&ocirc;ng bị hạn chế năng lực h&agrave;nh vi d&acirc;n sự hoặc kh&ocirc;ng bị mất năng lực h&agrave;nh vi d&acirc;n sự.</li>\n	<li>Kh&ocirc;ng thuộc c&aacute;c trường hợp chưa được ph&eacute;p xuất cảnh quy định tại Điều 10 Quy chế ban h&agrave;nh k&egrave;m theo Quyết định số 45/2006/QĐ-TTg ng&agrave;y 28 th&aacute;ng 02 năm 2006 của Thủ tướng Ch&iacute;nh phủ về việc cấp v&agrave; quản l&yacute; thẻ đi lại của doanh nh&acirc;n APEC.</li>\n	<li>Doanh nh&acirc;n đang l&agrave;m việc tại c&aacute;c doanh nghiệp đ&atilde; c&oacute; hoạt động từ 06 (s&aacute;u) th&aacute;ng trở l&ecirc;n.</li>\n	<li>Doanh nh&acirc;n đang l&agrave;m việc tại c&aacute;c doanh nghiệp chấp h&agrave;nh tốt ph&aacute;p luật về thương mại, thuế, hải quan, lao động v&agrave; bảo hiểm x&atilde; hội.</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<h3><strong>4. Thủ tục v&agrave; thời gian cấp thẻ ABTC</strong></h3>\n\n<ul>\n	<li>Văn bản đề nghị của doanh nghiệp do đại diện theo ph&aacute;p luật của doanh nghiệp k&yacute; t&ecirc;n v&agrave; đ&oacute;ng dấu</li>\n	<li>Bản sao một trong c&aacute;c loại giấy tờ: thư mời, hợp đồng ngoại thương, hợp đồng li&ecirc;n doanh, hợp đồng hợp t&aacute;c kinh doanh, hợp đồng cung cấp dịch vụ hoặc c&aacute;c chứng từ xuất nhập khẩu kh&aacute;c (L/C, vận đơn, tờ khai hải quan, h&oacute;a đơn thanh to&aacute;n) kh&ocirc;ng qu&aacute; 01 năm t&iacute;nh đến thời điểm xin cấp thẻ ABTC với c&aacute;c đối t&aacute;c thuộc nền kinh tế th&agrave;nh vi&ecirc;n APEC tham gia chương tr&igrave;nh thẻ ABTC (k&egrave;m bản ch&iacute;nh c&aacute;c giấy tờ tr&ecirc;n để đối chiếu). Nếu c&aacute;c văn bản bằng tiếng nước ngo&agrave;i phải c&oacute; bản dịch tiếng Việt k&egrave;m theo;</li>\n	<li>Bản sao hộ chiếu;</li>\n	<li>Bản sao quyết định bổ nhiệm chức vụ;</li>\n	<li>Bản sao sổ Bảo hiểm x&atilde; hội;<img alt=\"\" src=\"http://nhatnga.com.vn/site/public/photos/1/mau-the-aepc-768x475.jpg\" /></li>\n</ul>\n\n<p>Để được tư vấn th&ecirc;m về thẻ Apec, vui l&ograve;ng li&ecirc;n hệ :<br />\n<strong>Ms&nbsp;Nga&nbsp;&ndash; ĐT: 0933.055.636</strong><br />\nEmail : nga.ngo@nhatnga.vn</p>', NULL, '2017-07-01 08:44:35', 'en'),
(4, 2, 'the apec card', '<p><img alt=\"\" src=\"http://nhatnga.com.vn/site/public/photos/1/dich-vu-the-apec.jpg\" /></p>\n\n<h3><strong>1. Thẻ ABTC &nbsp;l&agrave; g&igrave;?</strong></h3>\n\n<p>Thẻ đi lại của doanh nh&acirc;n APEC (APEC Business Travel Card viết tắt ABTC) l&agrave; một loại giấy tờ do cơ quan c&oacute; thẩm quyền của nước v&agrave; v&ugrave;ng l&atilde;nh thổ tham gia Chương tr&igrave;nh thẻ đi lại của doanh nh&acirc;n APEC cấp cho doanh nh&acirc;n của m&igrave;nh để tạo thuận lợi cho việc đi lại thực hiện c&aacute;c hoạt động hợp t&aacute;c kinh doanh, thương mại, đầu tư, dịch vụ; tham dự c&aacute;c hội nghị, hội thảo v&agrave; c&aacute;c mục đ&iacute;ch kinh tế kh&aacute;c tại c&aacute;c nước v&agrave; v&ugrave;ng l&atilde;nh thổ thuộc APEC tham gia Chương tr&igrave;nh. Người mang thẻ &nbsp;ABTC, khi nhập cảnh, xuất cảnh c&aacute;c nước v&agrave; v&ugrave;ng l&atilde;nh thổ c&oacute; t&ecirc;n ghi trong thẻ th&igrave; kh&ocirc;ng cần phải c&oacute; thị thực của c&aacute;c nước v&agrave; v&ugrave;ng l&atilde;nh thổ đ&oacute;.</p>\n\n<p>Thẻ ABTC c&oacute; gi&aacute; trị sử dụng trong 05 năm, kể từ ng&agrave;y cấp v&agrave; kh&ocirc;ng được gia hạn. Khi thẻ ABTC hết thời hạn sử dụng, nếu người được cấp thẻ vẫn c&ograve;n nhu cầu đi lại trong khối APEC, th&igrave; l&agrave;m thủ tục đề nghị cấp lại thẻ mới.</p>\n\n<p>Thẻ ABTC chỉ c&oacute; gi&aacute; trị nhập cảnh, xuất cảnh khi người mang thẻ xuất tr&igrave;nh k&egrave;m theo hộ chiếu hợp lệ. Mỗi lần nhập cảnh, người mang thẻ ABTC được c&aacute;c nước v&agrave; v&ugrave;ng l&atilde;nh thổ th&agrave;nh vi&ecirc;n cấp chứng nhận tạm tr&uacute; theo thời hạn quy định của c&aacute;c nước hoặc v&ugrave;ng l&atilde;nh thổ đ&oacute;.</p>\n\n<p>Doanh nh&acirc;n được cấp thẻ ABTC c&oacute; tr&aacute;ch nhiệm sử dụng thẻ đ&uacute;ng mục đ&iacute;ch nhập cảnh, giữ g&igrave;n v&agrave; bảo quản thẻ; kh&ocirc;ng được tự &yacute; sửa đổi nội dung ghi trong thẻ; kh&ocirc;ng được d&ugrave;ng thẻ v&agrave;o việc vi phạm ph&aacute;p luật.</p>\n\n<p>Doanh nh&acirc;n được cấp thẻ ABTC phải t&ocirc;n trọng v&agrave; tu&acirc;n thủ c&aacute;c quy định của ph&aacute;p luật về nhập cảnh, xuất cảnh, cư tr&uacute; v&agrave; c&aacute;c quy định kh&aacute;c li&ecirc;n quan đến hoạt động của doanh nh&acirc;n tại c&aacute;c nước hoặc v&ugrave;ng l&atilde;nh thổ th&agrave;nh vi&ecirc;n.</p>\n\n<p>Doanh nh&acirc;n được cấp thẻ ABTC vi phạm ph&aacute;p luật Việt Nam sẽ bị cơ quan c&oacute; thẩm quyền Việt Nam xử l&yacute; theo quy định của ph&aacute;p luật hiện h&agrave;nh.</p>\n\n<p>&nbsp;</p>\n\n<h3><strong>2. Đối tượng được cấp thẻ ABTC l&agrave; những ai?</strong></h3>\n\n<ol>\n	<li>Doanh nh&acirc;n Việt Nam đang l&agrave;m việc tại c&aacute;c doanh nghiệp nh&agrave; nước:</li>\n</ol>\n\n<ul>\n	<li>Chủ tịch Hội đồng quản trị, Tổng gi&aacute;m đốc Tổng c&ocirc;ng ty trực thuộc Thủ tướng Ch&iacute;nh phủ (Tổng c&ocirc;ng ty 91);</li>\n	<li>Tổng gi&aacute;m đốc, Ph&oacute; Tổng gi&aacute;m đốc; Gi&aacute;m đốc, Ph&oacute; gi&aacute;m đốc c&aacute;c doanh nghiệp, khu c&ocirc;ng nghiệp, khu chế xuất của Việt Nam; Gi&aacute;m đốc, Ph&oacute; gi&aacute;m đốc Ng&acirc;n h&agrave;ng Việt Nam hoặc Gi&aacute;m đốc, Ph&oacute; gi&aacute;m đốc chi nh&aacute;nh Ng&acirc;n h&agrave;ng Việt Nam;</li>\n	<li>Kế to&aacute;n trưởng hoặc Trưởng/Ph&oacute; ph&ograve;ng c&aacute;c doanh nghiệp, khu c&ocirc;ng nghiệp, khu chế xuất, ng&acirc;n h&agrave;ng, chi nh&aacute;nh Ng&acirc;n h&agrave;ng Việt Nam trở l&ecirc;n.</li>\n</ul>\n\n<ol start=\"2\">\n	<li>Doanh nh&acirc;n Việt Nam đang l&agrave;m việc tại c&aacute;c doanh nghiệp được th&agrave;nh lập theo Luật Doanh nghiệp, Luật Hợp t&aacute;c x&atilde; v&agrave; Luật Đầu tư tại Việt Nam :</li>\n</ol>\n\n<ul>\n	<li>Tổng gi&aacute;m đốc, Ph&oacute; Tổng gi&aacute;m đốc; Gi&aacute;m đốc, Ph&oacute; gi&aacute;m đốc c&aacute;c doanh nghiệp; kế to&aacute;n trưởng hoặc người c&oacute; chức danh Trưởng ph&ograve;ng trong c&aacute;c doanh nghiệp ngo&agrave;i quốc doanh;</li>\n	<li>Chủ tịch, Ph&oacute; Chủ tịch Hội đồng quản trị c&ocirc;ng ty cổ phần; Chủ tịch, Ph&oacute; Chủ tịch Hội đồng th&agrave;nh vi&ecirc;n, Chủ tịch, Ph&oacute; Chủ tịch c&ocirc;ng ty tr&aacute;ch nhiệm hữu hạn; Chủ tịch ban quản trị hợp t&aacute;c x&atilde;, Chủ nhiệm hợp t&aacute;c x&atilde;.</li>\n</ul>\n\n<ol start=\"3\">\n	<li>C&aacute;c trường hợp kh&aacute;c được x&eacute;t cấp thẻ ABTC:</li>\n</ol>\n\n<ul>\n	<li>C&aacute;c vị l&agrave; l&atilde;nh đạo c&aacute;c ng&agrave;nh kinh tế, Thủ trưởng cấp Bộ, Chủ tịch Ủy ban nh&acirc;n d&acirc;n c&aacute;c tỉnh, th&agrave;nh phố trực thuộc Trung ương trực tiếp quản l&yacute; chuy&ecirc;n ng&agrave;nh về c&aacute;c hoạt động của c&aacute;c doanh nghiệp Việt Nam c&oacute; nhiệm vụ tham dự c&aacute;c cuộc họp, hội nghị v&agrave; c&aacute;c hoạt động về hợp t&aacute;c, ph&aacute;t triển kinh tế của APEC;</li>\n	<li>C&ocirc;ng chức, vi&ecirc;n chức nh&agrave; nước c&oacute; nhiệm vụ tham dự c&aacute;c cuộc họp, hội nghị, hội thảo v&agrave; c&aacute;c hoạt động kinh tế kh&aacute;c của APEC; Trưởng, Ph&oacute; cơ quan đại diện thương mại Việt Nam tại c&aacute;c nước v&agrave; v&ugrave;ng l&atilde;nh thổ th&agrave;nh vi&ecirc;n tham gia Chương tr&igrave;nh ABTC.</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<h3><strong>3. Điều kiện được cấp thẻ ABTC tiến h&agrave;nh như sau:</strong></h3>\n\n<ul>\n	<li>Doanh nh&acirc;n Việt Nam mang hộ chiếu c&ograve;n gi&aacute; trị sử dụng (thời hạn sử dụng c&ograve;n tr&ecirc;n 12 th&aacute;ng).</li>\n	<li>Doanh nh&acirc;n đang l&agrave;m việc tại c&aacute;c doanh nghiệp c&oacute; c&aacute;c hoạt động hợp t&aacute;c kinh doanh, thương mại, đầu tư v&agrave; dịch vụ với c&aacute;c đối t&aacute;c trong c&aacute;c nền kinh tế th&agrave;nh vi&ecirc;n tham gia thẻ ABTC được thể hiện th&ocirc;ng qua c&aacute;c hợp đồng kinh tế, thương mại, c&aacute;c dự &aacute;n đầu tư v&agrave; c&aacute;c hợp đồng dịch vụ cụ thể.</li>\n	<li>Doanh nh&acirc;n l&agrave;m việc tại c&aacute;c doanh nghiệp được thể hiện bằng hợp đồng lao động, quyết định bổ nhiệm chức vụ v&agrave; tham gia đ&oacute;ng bảo hiểm x&atilde; hội đầy đủ tại doanh nghiệp đang l&agrave;m việc.</li>\n	<li>Doanh nh&acirc;n phải l&agrave; người từ 18 tuổi trở l&ecirc;n; người kh&ocirc;ng bị hạn chế năng lực h&agrave;nh vi d&acirc;n sự hoặc kh&ocirc;ng bị mất năng lực h&agrave;nh vi d&acirc;n sự.</li>\n	<li>Kh&ocirc;ng thuộc c&aacute;c trường hợp chưa được ph&eacute;p xuất cảnh quy định tại Điều 10 Quy chế ban h&agrave;nh k&egrave;m theo Quyết định số 45/2006/QĐ-TTg ng&agrave;y 28 th&aacute;ng 02 năm 2006 của Thủ tướng Ch&iacute;nh phủ về việc cấp v&agrave; quản l&yacute; thẻ đi lại của doanh nh&acirc;n APEC.</li>\n	<li>Doanh nh&acirc;n đang l&agrave;m việc tại c&aacute;c doanh nghiệp đ&atilde; c&oacute; hoạt động từ 06 (s&aacute;u) th&aacute;ng trở l&ecirc;n.</li>\n	<li>Doanh nh&acirc;n đang l&agrave;m việc tại c&aacute;c doanh nghiệp chấp h&agrave;nh tốt ph&aacute;p luật về thương mại, thuế, hải quan, lao động v&agrave; bảo hiểm x&atilde; hội.</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<h3><strong>4. Thủ tục v&agrave; thời gian cấp thẻ ABTC</strong></h3>\n\n<ul>\n	<li>Văn bản đề nghị của doanh nghiệp do đại diện theo ph&aacute;p luật của doanh nghiệp k&yacute; t&ecirc;n v&agrave; đ&oacute;ng dấu</li>\n	<li>Bản sao một trong c&aacute;c loại giấy tờ: thư mời, hợp đồng ngoại thương, hợp đồng li&ecirc;n doanh, hợp đồng hợp t&aacute;c kinh doanh, hợp đồng cung cấp dịch vụ hoặc c&aacute;c chứng từ xuất nhập khẩu kh&aacute;c (L/C, vận đơn, tờ khai hải quan, h&oacute;a đơn thanh to&aacute;n) kh&ocirc;ng qu&aacute; 01 năm t&iacute;nh đến thời điểm xin cấp thẻ ABTC với c&aacute;c đối t&aacute;c thuộc nền kinh tế th&agrave;nh vi&ecirc;n APEC tham gia chương tr&igrave;nh thẻ ABTC (k&egrave;m bản ch&iacute;nh c&aacute;c giấy tờ tr&ecirc;n để đối chiếu). Nếu c&aacute;c văn bản bằng tiếng nước ngo&agrave;i phải c&oacute; bản dịch tiếng Việt k&egrave;m theo;</li>\n	<li>Bản sao hộ chiếu;</li>\n	<li>Bản sao quyết định bổ nhiệm chức vụ;</li>\n	<li>Bản sao sổ Bảo hiểm x&atilde; hội;<img alt=\"\" src=\"http://nhatnga.com.vn/site/public/photos/1/mau-the-aepc-768x475.jpg\" /></li>\n</ul>\n\n<p>Để được tư vấn th&ecirc;m về thẻ Apec, vui l&ograve;ng li&ecirc;n hệ :<br />\n<strong>Ms&nbsp;Nga&nbsp;&ndash; ĐT: 0933.055.636</strong><br />\nEmail : nga.ngo@nhatnga.vn</p>', NULL, '2017-07-01 08:44:35', 'vi'),
(5, 3, 'work-permit', '<p><img alt=\"giay-phep-lao-dong\" src=\"http://nhatnga.com.vn/wp-content/uploads/2014/11/giay-phep-lao-dong.jpg\" /></p>\n\n<h3>1.&nbsp;GIẤY PH&Eacute;P LAO ĐỘNG</h3>\n\n<h4>Giấy ph&eacute;p lao động&nbsp;l&agrave; một loại giấy tờ do Cơ quan quản l&yacute; lao động&nbsp;Việt Nam (Sở Lao động &ndash; Thương binh X&atilde; hội, trực thuộc Bộ Lao Động) cấp cho người nước ngo&agrave;i được ph&eacute;p l&agrave;m việc&nbsp;c&oacute; thời hạn tại Việt Nam.</h4>\n\n<p>&ndash; C&ocirc;ng ty Nhất Nga đại diện cho người lao động hoặc doanh nghiệp thực hiện thực hiện thủ tục xin giấy ph&eacute;p lao động cho người nước ngo&agrave;i l&agrave;m việc tại Việt Nam tại cơ quan quản l&yacute; lao động của Việt Nam.</p>\n\n<p>&ndash; Nhất Nga lu&ocirc;n cam kết về chất lượng dịch vụ với mong muốn tạo điều kiện tốt nhất cho người lao động nước ngo&agrave;i l&agrave;m việc tại Việt Nam với quyền v&agrave; lợi &iacute;ch được đảm bảo nhất.</p>\n\n<p>&ndash; Đặc biệt hiện tại để đ&aacute;p ứng nhu cầu của c&aacute;c doanh nghiệp v&agrave; người lao động nước ngo&agrave;i ch&uacute;ng t&ocirc;i c&oacute; nhiều g&oacute;i dịch vụ kh&aacute;c nhau, giải quyết c&aacute;c hồ sơ kh&oacute; &hellip;.</p>\n\n<p>&ndash; Nếu c&aacute; nh&acirc;n người nước ngo&agrave;i hoặc c&aacute;c doanh nghiệp, tổ chức c&oacute; người lao động nước ngo&agrave;i l&agrave;m việc tại Việt Nam c&oacute; nhu cầu sử dụng dịch vụ tư vấn v&agrave; l&agrave;m thủ tục xin giấy ph&eacute;p lao động cho người nước ngo&agrave;i h&atilde;y li&ecirc;n hệ với ch&uacute;ng t&ocirc;i.</p>\n\n<h3>2. Thẻ tạm tr&uacute;</h3>\n\n<h3>Thẻ tạm tr&uacute; l&agrave; một loại giấy tờ do Cơ quan quản l&yacute; xuất nhập cảnh hoặc cơ quan c&oacute; thẩm quyền của Bộ Ngoại giao Việt Nam cấp cho người nước ngo&agrave;i được ph&eacute;p cư tr&uacute; c&oacute; thời hạn tại Việt Nam v&agrave; c&oacute; gi&aacute; trị thay thế thị thực (visa).</h3>\n\n<p><img alt=\"the-tam-tru\" src=\"http://nhatnga.com.vn/wp-content/uploads/2014/11/the-tam-tru.jpg\" /></p>\n\n<h3>&nbsp;</h3>\n\n<p>Hiện nay theo quy định xuất nhập cảnh, người nước ngo&agrave;i v&agrave;o Việt Nam chỉ được cấp Visa 3 th&aacute;ng. Để đ&aacute;p ứng được nhu cầu tạm tr&uacute; l&acirc;u d&agrave;i tại Việt Nam người nước ngo&agrave;i phải c&oacute; Giấy ph&eacute;p lao động hoặc đầu tư v&agrave;o Việt Nam để th&agrave;nh lập c&ocirc;ng ty ở Việt Nam th&igrave; c&oacute; thể xin được thẻ tạm tr&uacute; 3 năm.<br />\n&ndash; C&ocirc;ng ty ch&uacute;ng t&ocirc;i nhận tư vấn v&agrave; thực hiện những thủ tục nhanh ch&oacute;ng, đảm bảo đầy đủ quyền v&agrave; lợi &iacute;ch hợp ph&aacute;p cho người lao động nước ngo&agrave;i l&agrave;m việc, cư tr&uacute; tại Việt Nam theo quy định của ph&aacute;p luật.</p>\n\n<p>Để được tư vấn th&ecirc;m về Giấy ph&eacute;p lao động v&agrave; Thẻ tạm tr&uacute;, vui l&ograve;ng li&ecirc;n hệ :<br />\nMs&nbsp;Nga&nbsp;&ndash; ĐT: 0919 345 788 &ndash; 0933 055 636<br />\nEmail : nga.ngo@nhatnga.vn</p>', NULL, '2017-06-20 07:16:43', 'en'),
(6, 3, 'work-permit', '<p><img alt=\"giay-phep-lao-dong\" src=\"http://nhatnga.com.vn/wp-content/uploads/2014/11/giay-phep-lao-dong.jpg\" /></p>\n\n<h3>1.&nbsp;GIẤY PH&Eacute;P LAO ĐỘNG</h3>\n\n<h4>Giấy ph&eacute;p lao động&nbsp;l&agrave; một loại giấy tờ do Cơ quan quản l&yacute; lao động&nbsp;Việt Nam (Sở Lao động &ndash; Thương binh X&atilde; hội, trực thuộc Bộ Lao Động) cấp cho người nước ngo&agrave;i được ph&eacute;p l&agrave;m việc&nbsp;c&oacute; thời hạn tại Việt Nam.</h4>\n\n<p>&ndash; C&ocirc;ng ty Nhất Nga đại diện cho người lao động hoặc doanh nghiệp thực hiện thực hiện thủ tục xin giấy ph&eacute;p lao động cho người nước ngo&agrave;i l&agrave;m việc tại Việt Nam tại cơ quan quản l&yacute; lao động của Việt Nam.</p>\n\n<p>&ndash; Nhất Nga lu&ocirc;n cam kết về chất lượng dịch vụ với mong muốn tạo điều kiện tốt nhất cho người lao động nước ngo&agrave;i l&agrave;m việc tại Việt Nam với quyền v&agrave; lợi &iacute;ch được đảm bảo nhất.</p>\n\n<p>&ndash; Đặc biệt hiện tại để đ&aacute;p ứng nhu cầu của c&aacute;c doanh nghiệp v&agrave; người lao động nước ngo&agrave;i ch&uacute;ng t&ocirc;i c&oacute; nhiều g&oacute;i dịch vụ kh&aacute;c nhau, giải quyết c&aacute;c hồ sơ kh&oacute; &hellip;.</p>\n\n<p>&ndash; Nếu c&aacute; nh&acirc;n người nước ngo&agrave;i hoặc c&aacute;c doanh nghiệp, tổ chức c&oacute; người lao động nước ngo&agrave;i l&agrave;m việc tại Việt Nam c&oacute; nhu cầu sử dụng dịch vụ tư vấn v&agrave; l&agrave;m thủ tục xin giấy ph&eacute;p lao động cho người nước ngo&agrave;i h&atilde;y li&ecirc;n hệ với ch&uacute;ng t&ocirc;i.</p>\n\n<h3>2. Thẻ tạm tr&uacute;</h3>\n\n<h3>Thẻ tạm tr&uacute; l&agrave; một loại giấy tờ do Cơ quan quản l&yacute; xuất nhập cảnh hoặc cơ quan c&oacute; thẩm quyền của Bộ Ngoại giao Việt Nam cấp cho người nước ngo&agrave;i được ph&eacute;p cư tr&uacute; c&oacute; thời hạn tại Việt Nam v&agrave; c&oacute; gi&aacute; trị thay thế thị thực (visa).</h3>\n\n<p><img alt=\"the-tam-tru\" src=\"http://nhatnga.com.vn/wp-content/uploads/2014/11/the-tam-tru.jpg\" /></p>\n\n<h3>&nbsp;</h3>\n\n<p>Hiện nay theo quy định xuất nhập cảnh, người nước ngo&agrave;i v&agrave;o Việt Nam chỉ được cấp Visa 3 th&aacute;ng. Để đ&aacute;p ứng được nhu cầu tạm tr&uacute; l&acirc;u d&agrave;i tại Việt Nam người nước ngo&agrave;i phải c&oacute; Giấy ph&eacute;p lao động hoặc đầu tư v&agrave;o Việt Nam để th&agrave;nh lập c&ocirc;ng ty ở Việt Nam th&igrave; c&oacute; thể xin được thẻ tạm tr&uacute; 3 năm.<br />\n&ndash; C&ocirc;ng ty ch&uacute;ng t&ocirc;i nhận tư vấn v&agrave; thực hiện những thủ tục nhanh ch&oacute;ng, đảm bảo đầy đủ quyền v&agrave; lợi &iacute;ch hợp ph&aacute;p cho người lao động nước ngo&agrave;i l&agrave;m việc, cư tr&uacute; tại Việt Nam theo quy định của ph&aacute;p luật.</p>\n\n<p>Để được tư vấn th&ecirc;m về Giấy ph&eacute;p lao động v&agrave; Thẻ tạm tr&uacute;, vui l&ograve;ng li&ecirc;n hệ :<br />\nMs&nbsp;Nga&nbsp;&ndash; ĐT: 0919 345 788 &ndash; 0933 055 636<br />\nEmail : nga.ngo@nhatnga.vn</p>', NULL, '2017-06-20 07:16:43', 'vi'),
(7, 4, 'airline-ticket', 'content', NULL, NULL, 'en'),
(8, 4, 'airline-ticket', 'content', NULL, NULL, 'vi'),
(9, 5, 'visa-vietnam', '<h3><strong>Visa Việt Nam c&oacute; 2 c&aacute;ch thực hiện phổ biến:</strong></h3>\n\n<p><strong>C&aacute;ch 1:</strong>&nbsp;Nộp hồ sơ xin visa tại cơ quan l&atilde;nh sự Việt Nam ở nước sở tại. Việc n&agrave;y sẽ tốn nhiều thời gian v&agrave; thủ tục giấy tờ phức tạp.</p>\n\n<p><strong>C&aacute;ch 2:</strong>&nbsp;Nộp hồ sơ xin visa th&ocirc;ng qua c&ocirc;ng ty Nhất Nga, một đơn vị&nbsp;chuy&ecirc;n thực hiện visa Việt Nam. C&ocirc;ng ty Nhất Nga sẽ gửi cho qu&yacute; kh&aacute;ch c&ocirc;ng văn nhập cảnh do Cục Quản L&yacute; Xuất Nhập Cảnh Việt Nam cấp v&agrave; qu&yacute; kh&aacute;ch sẽ nhận visa Việt Nam tại cửa khẩu s&acirc;n bay quốc tế, cửa khẩu đường bộ Việt Nam hoặc cơ quan l&atilde;nh sự Việt Nam ở</p>\n\n<p>nước sở tại.</p>\n\n<p><img alt=\"\" src=\"http://nhatnga.com.vn/site/public/photos/1/visa-vn.jpg\" /></p>\n\n<h3>Hướng dẫn chuẩn bị hồ sơ xin c&ocirc;ng văn nhập cảnh</h3>\n\n<p><strong>1. Đối với c&ocirc;ng ty chưa đang k&yacute; tại Cục Quản L&yacute; Xuất Nhập Cảnh</strong><br />\n&ndash; Bản sao giấy ph&eacute;p kinh doanh<br />\n&ndash; Mẫu N2<br />\n&ndash; C&ocirc;ng văn đăng k&yacute; thủ tục<br />\n&ndash; C&ocirc;ng văn đăng k&yacute; chữ k&yacute; &amp; mẫu dấu<br />\n&ndash; Lịch l&agrave;m việc của c&ocirc;ng ty</p>\n\n<p><strong>2. Đối với c&ocirc;ng ty đ&atilde; đăng k&yacute; tại Cục Quản L&yacute; Xuất Nhập Cảnh</strong><br />\n&ndash; Bản sao giấy ph&eacute;p kinh doanh<br />\n&ndash; Mẫu N2</p>\n\n<p><em>C&aacute;c mẫu N2, mẫu đơn đăng k&yacute;&nbsp;qu&yacute; kh&aacute;ch c&oacute; thể li&ecirc;n hệ trực tiếp hay qua form li&ecirc;n hệ của c&ocirc;ng ty để nhận mẫu</em></p>\n\n<p>&nbsp;</p>\n\n<p><em><img alt=\"\" src=\"http://nhatnga.com.vn/site/public/photos/1/mau-cong-van-nhap-canh.jpg\" /></em></p>\n\n<p><span style=\"font-size:20px;\"><strong>Gia hạn VISA Việt Nam</strong></span></p>\n\n<h3>Dịch vụ gia hạn VISA Việt Nam cho kh&aacute;ch nước ngo&agrave;i</h3>\n\n<p>Người nước ngo&agrave;i đang tạm tr&uacute; tại Việt Nam, muốn tiếp tục ở lại để du lịch, thăm người th&acirc;n v&agrave; l&agrave;m việc th&igrave; cần gia hạn thị thực khi thị thực sắp hết hạn. Thị thực được gia hạn th&ecirc;m sẽ c&oacute; thời hạn từ 01 th&aacute;ng đến 12 th&aacute;ng v&agrave; c&oacute; gi&aacute; trị một lần hoặc nhiều lần.</p>\n\n<p>Để được tư vấn v&agrave; giải quyết c&aacute;c vấn đề về gia hạn thị thực một c&aacute;ch gọn g&agrave;ng, nhanh ch&oacute;ng, vui l&ograve;ng li&ecirc;n hệ c&ocirc;ng ty <strong>Nhất Nga</strong></p>', NULL, '2017-07-01 00:39:43', 'en'),
(10, 5, 'visa-vietnam', '<h3><strong>Visa Việt Nam c&oacute; 2 c&aacute;ch thực hiện phổ biến:</strong></h3>\n\n<p><strong>C&aacute;ch 1:</strong>&nbsp;Nộp hồ sơ xin visa tại cơ quan l&atilde;nh sự Việt Nam ở nước sở tại. Việc n&agrave;y sẽ tốn nhiều thời gian v&agrave; thủ tục giấy tờ phức tạp.</p>\n\n<p><strong>C&aacute;ch 2:</strong>&nbsp;Nộp hồ sơ xin visa th&ocirc;ng qua c&ocirc;ng ty Nhất Nga, một đơn vị&nbsp;chuy&ecirc;n thực hiện visa Việt Nam. C&ocirc;ng ty Nhất Nga sẽ gửi cho qu&yacute; kh&aacute;ch c&ocirc;ng văn nhập cảnh do Cục Quản L&yacute; Xuất Nhập Cảnh Việt Nam cấp v&agrave; qu&yacute; kh&aacute;ch sẽ nhận visa Việt Nam tại cửa khẩu s&acirc;n bay quốc tế, cửa khẩu đường bộ Việt Nam hoặc cơ quan l&atilde;nh sự Việt Nam ở</p>\n\n<p>nước sở tại.</p>\n\n<p><img alt=\"\" src=\"http://nhatnga.com.vn/site/public/photos/1/visa-vn.jpg\" /></p>\n\n<h3>Hướng dẫn chuẩn bị hồ sơ xin c&ocirc;ng văn nhập cảnh</h3>\n\n<p><strong>1. Đối với c&ocirc;ng ty chưa đang k&yacute; tại Cục Quản L&yacute; Xuất Nhập Cảnh</strong><br />\n&ndash; Bản sao giấy ph&eacute;p kinh doanh<br />\n&ndash; Mẫu N2<br />\n&ndash; C&ocirc;ng văn đăng k&yacute; thủ tục<br />\n&ndash; C&ocirc;ng văn đăng k&yacute; chữ k&yacute; &amp; mẫu dấu<br />\n&ndash; Lịch l&agrave;m việc của c&ocirc;ng ty</p>\n\n<p><strong>2. Đối với c&ocirc;ng ty đ&atilde; đăng k&yacute; tại Cục Quản L&yacute; Xuất Nhập Cảnh</strong><br />\n&ndash; Bản sao giấy ph&eacute;p kinh doanh<br />\n&ndash; Mẫu N2</p>\n\n<p><em>C&aacute;c mẫu N2, mẫu đơn đăng k&yacute;&nbsp;qu&yacute; kh&aacute;ch c&oacute; thể li&ecirc;n hệ trực tiếp hay qua form li&ecirc;n hệ của c&ocirc;ng ty để nhận mẫu</em></p>\n\n<p>&nbsp;</p>\n\n<p><em><img alt=\"\" src=\"http://nhatnga.com.vn/site/public/photos/1/mau-cong-van-nhap-canh.jpg\" /></em></p>\n\n<p><span style=\"font-size:20px;\"><strong>Gia hạn VISA Việt Nam</strong></span></p>\n\n<h3>Dịch vụ gia hạn VISA Việt Nam cho kh&aacute;ch nước ngo&agrave;i</h3>\n\n<p>Người nước ngo&agrave;i đang tạm tr&uacute; tại Việt Nam, muốn tiếp tục ở lại để du lịch, thăm người th&acirc;n v&agrave; l&agrave;m việc th&igrave; cần gia hạn thị thực khi thị thực sắp hết hạn. Thị thực được gia hạn th&ecirc;m sẽ c&oacute; thời hạn từ 01 th&aacute;ng đến 12 th&aacute;ng v&agrave; c&oacute; gi&aacute; trị một lần hoặc nhiều lần.</p>\n\n<p>Để được tư vấn v&agrave; giải quyết c&aacute;c vấn đề về gia hạn thị thực một c&aacute;ch gọn g&agrave;ng, nhanh ch&oacute;ng, vui l&ograve;ng li&ecirc;n hệ c&ocirc;ng ty <strong>Nhất Nga</strong></p>', NULL, '2017-07-01 00:39:43', 'vi'),
(11, 6, 'others', 'content', NULL, NULL, 'en'),
(12, 6, 'others', 'content', NULL, NULL, 'vi'),
(13, 7, 'visa', '<h3><strong>Thị thực&nbsp;hay c&ograve;n gọi l&agrave; VISA</strong></h3>\n\n<p>l&agrave; một bằng chứng hợp ph&aacute;p x&aacute;c nhận rằng một người n&agrave;o đ&oacute; được ph&eacute;p nhập cảnh&nbsp;hoặc&nbsp;xuất cảnh&nbsp;ở&nbsp;quốc gia&nbsp;cấp thị thực. Sự cho ph&eacute;p n&agrave;y c&oacute; thể bằng một văn bản nhưng phổ biến l&agrave; bằng một con dấu x&aacute;c nhận d&agrave;nh cho đương đơn v&agrave;o trong&nbsp;hộ chiếu&nbsp;của đương đơn. Một số quốc gia kh&ocirc;ng đ&ograve;i hỏi phải c&oacute; thị thực khi nhập cảnh trong một số trường hợp, thường l&agrave; kết quả thỏa hiệp giữa quốc gia đ&oacute; với quốc gia của đương sự.</p>\n\n<p>C&aacute;c quốc gia thường c&oacute; c&aacute;c điều kiện để c&aacute;c cấp thị thực, chẳng hạn như thời hạn hiệu lực của thị thực, khoảng thời gian m&agrave; đương sự c&oacute; thể lưu lại đất nước của họ. Thường th&igrave; thị thực hợp lệ cho nhiều lần nhập cảnh (t&ugrave;y theo điều kiện) nhưng c&oacute; thể bị thu hồi v&agrave;o bất cứ l&uacute;c n&agrave;o v&agrave; với bất kỳ l&yacute; do g&igrave;.</p>\n\n<p>Thị thực c&oacute; thể được cấp trực tiếp tại quốc gia, hoặc th&ocirc;ng qua đại sứ qu&aacute;n&nbsp;hoặc&nbsp;l&atilde;nh sự qu&aacute;n&nbsp;của quốc gia đ&oacute;, đ&ocirc;i khi th&ocirc;ng qua một cơ quan chuy&ecirc;n m&ocirc;n, c&ocirc;ng ty du lịch c&oacute; sự cho ph&eacute;p của quốc gia ph&aacute;t h&agrave;nh. Hiện nay, ng&agrave;y c&agrave;ng nhiều quốc gia cho ph&eacute;p người muốn nhập cảnh v&agrave;o nước m&igrave;nh xin thị thực th&ocirc;ng qua đường thư tay hoặc Internet.</p>\n\n<p>Một số quốc gia c&ograve;n bắt buộc c&ocirc;ng d&acirc;n nước m&igrave;nh v&agrave; cả du kh&aacute;ch nước ngo&agrave;i phải xin &ldquo;thị thực xuất cảnh&rdquo; để được ph&eacute;p rời khỏi quốc gia đ&oacute;.</p>\n\n<h3><strong>Thị thực xuất cảnh hay c&ograve;n gọi l&agrave; VISA xuất cảnh bao gồm c&aacute;c loại sau đ&acirc;y</strong></h3>\n\n<ul>\n	<li>Thị thực&nbsp;du lịch</li>\n	<li>Thị thực c&ocirc;ng t&aacute;c</li>\n	<li>Thị thực thăm người th&acirc;n, bạn b&egrave;</li>\n	<li>Thị thực du học</li>\n	<li>Thị thực định cư : kết h&ocirc;n, lao động, gia đ&igrave;nh bảo l&atilde;nh,&hellip;<a href=\"http://nhatnga.com.vn/wp-content/uploads/2016/05/aus.jpg\" target=\"_blank\"><img alt=\"aus\" data-lazy-src=\"http://nhatnga.com.vn/wp-content/uploads/2016/05/aus.jpg\" data-lazy-srcset=\"http://nhatnga.com.vn/wp-content/uploads/2016/05/aus.jpg 800w, http://nhatnga.com.vn/wp-content/uploads/2016/05/aus-300x199.jpg 300w, http://nhatnga.com.vn/wp-content/uploads/2016/05/aus-768x509.jpg 768w\" draggable=\"false\" height=\"530\" sizes=\"(max-width: 800px) 100vw, 800px\" src=\"http://nhatnga.com.vn/wp-content/uploads/2016/05/aus.jpg\" srcset=\"http://nhatnga.com.vn/wp-content/uploads/2016/05/aus.jpg 800w, http://nhatnga.com.vn/wp-content/uploads/2016/05/aus-300x199.jpg 300w, http://nhatnga.com.vn/wp-content/uploads/2016/05/aus-768x509.jpg 768w\" width=\"800\" /></a></li>\n</ul>\n\n<p>C&ocirc;ng ty Nhất Nga cung cấp&nbsp;dịch vụ hỗ trợ, tư vấn v&agrave; XIN Visa cho tất cả c&aacute;c nước tr&ecirc;n thế giới. Với kinh nghiệm d&agrave;y dặn v&agrave; đội ngũ nh&acirc;n vi&ecirc;n tư vấn nhiệt t&igrave;nh, ch&uacute;ng t&ocirc;i sẽ chủ động đ&aacute;p ứng cho mọi y&ecirc;u cầu của kh&aacute;ch h&agrave;ng với một mức chi ph&iacute; hợp l&yacute;</p>\n\n<p>Để biết th&ecirc;m chi tiết về c&aacute;c thủ tục VISA, xin li&ecirc;n hệ<br />\nMs Nga &ndash; ĐT: 0919 345 788 &ndash; 0933 055 636<br />\nEmail: nga.ngo@nhatnga.vn</p>', NULL, '2017-06-23 22:57:07', 'en'),
(14, 7, 'visa', '<h3><strong>Thị thực&nbsp;hay c&ograve;n gọi l&agrave; VISA</strong></h3>\n\n<p>l&agrave; một bằng chứng hợp ph&aacute;p x&aacute;c nhận rằng một người n&agrave;o đ&oacute; được ph&eacute;p nhập cảnh&nbsp;hoặc&nbsp;xuất cảnh&nbsp;ở&nbsp;quốc gia&nbsp;cấp thị thực. Sự cho ph&eacute;p n&agrave;y c&oacute; thể bằng một văn bản nhưng phổ biến l&agrave; bằng một con dấu x&aacute;c nhận d&agrave;nh cho đương đơn v&agrave;o trong&nbsp;hộ chiếu&nbsp;của đương đơn. Một số quốc gia kh&ocirc;ng đ&ograve;i hỏi phải c&oacute; thị thực khi nhập cảnh trong một số trường hợp, thường l&agrave; kết quả thỏa hiệp giữa quốc gia đ&oacute; với quốc gia của đương sự.</p>\n\n<p>C&aacute;c quốc gia thường c&oacute; c&aacute;c điều kiện để c&aacute;c cấp thị thực, chẳng hạn như thời hạn hiệu lực của thị thực, khoảng thời gian m&agrave; đương sự c&oacute; thể lưu lại đất nước của họ. Thường th&igrave; thị thực hợp lệ cho nhiều lần nhập cảnh (t&ugrave;y theo điều kiện) nhưng c&oacute; thể bị thu hồi v&agrave;o bất cứ l&uacute;c n&agrave;o v&agrave; với bất kỳ l&yacute; do g&igrave;.</p>\n\n<p>Thị thực c&oacute; thể được cấp trực tiếp tại quốc gia, hoặc th&ocirc;ng qua đại sứ qu&aacute;n&nbsp;hoặc&nbsp;l&atilde;nh sự qu&aacute;n&nbsp;của quốc gia đ&oacute;, đ&ocirc;i khi th&ocirc;ng qua một cơ quan chuy&ecirc;n m&ocirc;n, c&ocirc;ng ty du lịch c&oacute; sự cho ph&eacute;p của quốc gia ph&aacute;t h&agrave;nh. Hiện nay, ng&agrave;y c&agrave;ng nhiều quốc gia cho ph&eacute;p người muốn nhập cảnh v&agrave;o nước m&igrave;nh xin thị thực th&ocirc;ng qua đường thư tay hoặc Internet.</p>\n\n<p>Một số quốc gia c&ograve;n bắt buộc c&ocirc;ng d&acirc;n nước m&igrave;nh v&agrave; cả du kh&aacute;ch nước ngo&agrave;i phải xin &ldquo;thị thực xuất cảnh&rdquo; để được ph&eacute;p rời khỏi quốc gia đ&oacute;.</p>\n\n<h3><strong>Thị thực xuất cảnh hay c&ograve;n gọi l&agrave; VISA xuất cảnh bao gồm c&aacute;c loại sau đ&acirc;y</strong></h3>\n\n<ul>\n	<li>Thị thực&nbsp;du lịch</li>\n	<li>Thị thực c&ocirc;ng t&aacute;c</li>\n	<li>Thị thực thăm người th&acirc;n, bạn b&egrave;</li>\n	<li>Thị thực du học</li>\n	<li>Thị thực định cư : kết h&ocirc;n, lao động, gia đ&igrave;nh bảo l&atilde;nh,&hellip;<a href=\"http://nhatnga.com.vn/wp-content/uploads/2016/05/aus.jpg\" target=\"_blank\"><img alt=\"aus\" data-lazy-src=\"http://nhatnga.com.vn/wp-content/uploads/2016/05/aus.jpg\" data-lazy-srcset=\"http://nhatnga.com.vn/wp-content/uploads/2016/05/aus.jpg 800w, http://nhatnga.com.vn/wp-content/uploads/2016/05/aus-300x199.jpg 300w, http://nhatnga.com.vn/wp-content/uploads/2016/05/aus-768x509.jpg 768w\" draggable=\"false\" height=\"530\" sizes=\"(max-width: 800px) 100vw, 800px\" src=\"http://nhatnga.com.vn/wp-content/uploads/2016/05/aus.jpg\" srcset=\"http://nhatnga.com.vn/wp-content/uploads/2016/05/aus.jpg 800w, http://nhatnga.com.vn/wp-content/uploads/2016/05/aus-300x199.jpg 300w, http://nhatnga.com.vn/wp-content/uploads/2016/05/aus-768x509.jpg 768w\" width=\"800\" /></a></li>\n</ul>\n\n<p>C&ocirc;ng ty Nhất Nga cung cấp&nbsp;dịch vụ hỗ trợ, tư vấn v&agrave; XIN Visa cho tất cả c&aacute;c nước tr&ecirc;n thế giới. Với kinh nghiệm d&agrave;y dặn v&agrave; đội ngũ nh&acirc;n vi&ecirc;n tư vấn nhiệt t&igrave;nh, ch&uacute;ng t&ocirc;i sẽ chủ động đ&aacute;p ứng cho mọi y&ecirc;u cầu của kh&aacute;ch h&agrave;ng với một mức chi ph&iacute; hợp l&yacute;</p>\n\n<p>Để biết th&ecirc;m chi tiết về c&aacute;c thủ tục VISA, xin li&ecirc;n hệ<br />\nMs Nga &ndash; ĐT: 0919 345 788 &ndash; 0933 055 636<br />\nEmail: nga.ngo@nhatnga.vn</p>', NULL, '2017-06-23 22:57:07', 'vi'),
(15, 8, 'tour', 'content', NULL, NULL, 'en'),
(16, 8, 'tour', 'content', NULL, NULL, 'vi');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `data` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `name`, `data`, `created_at`, `updated_at`) VALUES
(1, 'tour-description', '	<h2>Product Description</h2>\r\n										<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\r\n										<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\r\n										<table class=\"tours-tabs_table\">\r\n											<tbody>\r\n											<tr>\r\n												<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\r\n												<td>San Francisco International Airport</td>\r\n											</tr>\r\n											<tr>\r\n												<td><strong>DEPARTURE TIME</strong></td>\r\n												<td>Please arrive at least&nbsp;2 hours before the flight.</td>\r\n											</tr>\r\n											<tr>\r\n												<td><strong>INCLUDED</strong></td>\r\n												<td>\r\n													<table>\r\n														<tbody>\r\n														<tr>\r\n															<td><i class=\"fa fa-check icon-tick icon-tick--on\"></i>Airfare\r\n															</td>\r\n															<td><i class=\"fa fa-check icon-tick icon-tick--on\"></i>Accommodations\r\n															</td>\r\n														</tr>\r\n														<tr>\r\n															<td>\r\n																<i class=\"fa fa-check icon-tick icon-tick--on\"></i>2 days cruise\r\n															</td>\r\n															<td>\r\n																<i class=\"fa fa-check icon-tick icon-tick--on\"></i>Professional guide\r\n															</td>\r\n														</tr>\r\n														</tbody>\r\n													</table>\r\n												</td>\r\n											</tr>\r\n											<tr>\r\n												<td><b>NOT INCLUDED</b></td>\r\n												<td>\r\n													<table>\r\n														<tbody>\r\n														<tr>\r\n															<td>\r\n																<i class=\"fa fa-times icon-tick icon-tick--off\"></i>Entrance fees\r\n															</td>\r\n														</tr>\r\n														<tr>\r\n															<td><i class=\"fa fa-times icon-tick icon-tick--off\"></i>Guide&nbsp;gratuity\r\n															</td>\r\n														</tr>\r\n														</tbody>\r\n													</table>\r\n												</td>\r\n											</tr>\r\n											</tbody>\r\n										</table>\r\n										<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\r\n										<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', NULL, NULL),
(2, 'tour-itinerary', '\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">1</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 1: Departure</strong></h2>\r\n												<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br>\r\n													Maecenas massa. Fermentum.</p>\r\n												<ul>\r\n													<li>Pretium vitae tempus sem enim enim.</li>\r\n													<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\r\n													<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\r\n													<li>Vulputate dictumst egestas etiam dictum varius.</li>\r\n												</ul>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">2</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 2</strong></h2>\r\n												<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">3</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 3</strong></h2>\r\n												<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">4</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 4</strong></h2>\r\n												<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">5</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 5</strong></h2>\r\n												<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">6</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 6: Return</strong></h2>\r\n											</div>\r\n										</div>\r\n								', NULL, NULL),
(3, 'template-visa', '<div class=\"row\">\n<div class=\"col-sm-12 col-md-6\"><img src=\"https://image.ibb.co/bXSgv5/thailand.jpg\" /></div>\n\n<div class=\"col-sm-6\">\n<div>\n<ul>\n	<li><span style=\"font-size:20px;\"><strong>Đại sứ qu&aacute;n Th&aacute;i Lan&nbsp;tại Việt Nam</strong></span><br />\n	Địa chỉ: 63-65 Ho&agrave;ng Diệu, H&agrave; Nội, Việt Nam.</li>\n	<li><span style=\"font-size:20px;\"><strong>L&atilde;nh&nbsp;sự qu&aacute;n Th&aacute;i Lan tại&nbsp;TP.&nbsp;Hồ Ch&iacute; Minh</strong></span><br />\n	Địa chỉ: Số&nbsp;77 Trần Quốc Thảo, Q3, TP.Hồ Ch&iacute; Minh.</li>\n</ul>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<h2 class=\"vc_custom_heading\" style=\"text-align: center;font-family:Roboto;font-weight:;font-style:\"><span style=\"font-size:24px;\"><strong>Hồ sơ xin VISA Th&aacute;i Lan</strong></span></h2>\n</div>\n</div>\n\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<h4 style=\"text-align: left;\"><span style=\"font-size:14px;\"><strong>C&aacute;c hồ sơ cơ bản&nbsp;cần chuẩn bị để l&agrave;m thủ tục xin VISA Th&aacute;i Lan</strong></span></h4>\n</div>\n\n<p>&nbsp;<span style=\"font-size:14px;\">&nbsp; &nbsp;1. Hộ chiếu<br />\n&nbsp; &nbsp; 2. 02 h&igrave;nh 4&times;6 nền trắng</span></p>\n\n<div class=\"row\">\n<div class=\"wpb_wrapper\">&nbsp;</div>\n</div>\n\n<div class=\"row\">\n<div class=\"wpb_wrapper\">\n<p><strong>QUỐC TỊCH VIỆT NAM ĐƯỢC MIỄN VISA 30 NG&Agrave;Y</strong></p>\n</div>\n</div>\n\n<p>&nbsp;</p>\n\n<div class=\"row\">\n<h4 style=\"text-align: left;\"><strong><span style=\"font-size:16px;\">Hồ sơ cần chuẩn bị ri&ecirc;ng cho từng &nbsp;trường hợp sau:</span></strong></h4>\n\n<div class=\"row\">\n<div class=\"col-md-4\">\n<p><strong>1. VISA du lịch, thăm th&acirc;n</strong></p>\n\n<p>1. Chứng minh mối quan hệ</p>\n\n<p>2. Chứng minh t&agrave;i ch&iacute;nh</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>2. VISA c&ocirc;ng t&aacute;c</strong></p>\n\n<p>1. Thư mời</p>\n\n<p>2. Hồ sơ c&ocirc;ng ty b&ecirc;n Th&aacute;i Lan</p>\n\n<p>3. Hồ sơ c&ocirc;ng ty b&ecirc;n Việt Nam</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>3. VISA du học</strong></p>\n\n<p>1. Thư mời của trường</p>\n\n<p>2. Chứng minh t&agrave;i ch&iacute;nh</p>\n\n<p>3. Chứng minh c&ocirc;ng việc (nếu c&oacute;)</p>\n</div>\n\n<p>&nbsp;</p>\n</div>\n\n<div class=\"row\">\n<div class=\"col-md-4\">\n<p><strong>4. VISA kết h&ocirc;n</strong></p>\n\n<p>Li&ecirc;n hệ để tư vấn trực tiếp</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>5. VISA định cư</strong></p>\n\n<p>Kh&ocirc;ng giải quyết tại Việt Nam</p>\n</div>\n\n<p>&nbsp;</p>\n</div>\n\n<p>&nbsp;</p>\n\n<div class=\"row\">\n<p><strong>Lưu &yacute;:</strong></p>\n\n<ul>\n	<li>C&oacute; mặt tại ĐSQ/LSQ để phỏng vấn nếu c&oacute; y&ecirc;u cầu.</li>\n	<li>Hồ sơ c&oacute; thể phải bổ sung nếu c&oacute; y&ecirc;u cầu.</li>\n</ul>\n</div>\n</div>\n</div>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_url` longtext COLLATE utf8mb4_unicode_ci,
  `tour_type` int(10) UNSIGNED DEFAULT NULL,
  `food_location` int(10) UNSIGNED DEFAULT NULL,
  `food_type` int(10) UNSIGNED DEFAULT NULL,
  `is_sale` tinyint(1) NOT NULL DEFAULT '0',
  `is_outbound` tinyint(1) NOT NULL DEFAULT '0',
  `is_publish` tinyint(1) NOT NULL DEFAULT '1',
  `is_popular` tinyint(1) NOT NULL DEFAULT '1',
  `discount_percent` double NOT NULL DEFAULT '0',
  `rating` double NOT NULL DEFAULT '4',
  `media_ids` longtext COLLATE utf8mb4_unicode_ci,
  `locations_ids` longtext COLLATE utf8mb4_unicode_ci,
  `places_ids` longtext COLLATE utf8mb4_unicode_ci,
  `start_time` datetime DEFAULT NULL,
  `departure_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_day` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_night` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `code`, `slug_url`, `tour_type`, `food_location`, `food_type`, `is_sale`, `is_outbound`, `is_publish`, `is_popular`, `discount_percent`, `rating`, `media_ids`, `locations_ids`, `places_ids`, `start_time`, `departure_from`, `destination`, `duration_day`, `duration_night`, `created_at`, `updated_at`) VALUES
(9, 'hffg', 'fgfg', 3, 4, 1, 1, 0, 1, 1, 0.5, 3, '38,39,40', NULL, NULL, NULL, '3', '3', '0', '0', '2017-06-19 17:33:13', '2017-06-23 22:48:42'),
(12, 'HCRY', 'test', 2, NULL, NULL, 1, 1, 1, 1, 1, 4, '41,42,43,44,45', NULL, NULL, NULL, '2', '4', '1', '2', '2017-06-22 08:16:17', '2017-06-23 21:54:15'),
(13, 'WWRER', 'nhat-nga', 1, NULL, 1, 0, 0, 1, 1, 0, 3, '47,48,49,50,51', NULL, NULL, NULL, '2', '2', '1', '1', '2017-06-23 06:46:57', '2017-06-23 06:46:57'),
(14, 'werewr', 'internet-explorer-8-and-7-as-always-are-making-life-difficult', 1, NULL, 1, 0, 0, 1, 1, 0, 3, '52,53,54,55,56', NULL, NULL, NULL, '1', '3', '1', '1', '2017-06-23 07:18:22', '2017-06-23 21:56:35'),
(15, 'XYBDF', 'lo-dat-o-trung-quoc', 1, NULL, NULL, 0, 1, 1, 1, 0, 4, '60,61,62,63,64', NULL, NULL, NULL, '2', '4', '1', '2', '2017-06-23 21:19:12', '2017-06-23 21:19:12'),
(16, 'XYBDF54', 'luat-su-my-nang-long-viet-nam', 1, NULL, NULL, 0, 1, 1, 1, 0, 4, '60,61,62,63,64', NULL, NULL, NULL, '2', '4', '1', '2', '2017-06-23 21:20:35', '2017-06-23 21:20:35'),
(21, 'werwer', 'werewr', 1, NULL, 1, 0, 0, 1, 1, 0, 3, '87', NULL, NULL, NULL, '2', '2', '0', '0', '2017-07-02 01:42:30', '2017-07-02 01:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `tour_food`
--

CREATE TABLE `tour_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `food_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour_place`
--

CREATE TABLE `tour_place` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `place_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour_translation`
--

CREATE TABLE `tour_translation` (
  `id` int(10) UNSIGNED NOT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci,
  `itinerary` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `currency_unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `children_price` decimal(15,2) DEFAULT NULL,
  `adult_price` decimal(15,2) DEFAULT NULL,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_translation`
--

INSERT INTO `tour_translation` (`id`, `tour_id`, `name`, `short_description`, `itinerary`, `description`, `currency_unit`, `children_price`, `adult_price`, `lang_code`, `created_at`, `updated_at`) VALUES
(10, 9, 'fgfg', 'fgfg', '<div class=\"interary-item\">\n<p>1</p>\n\n<div class=\"item_content\">\n<h2><strong>Day 1: Departure cha</strong></h2>\n\n<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br />\nMaecenas massa. Fermentum.</p>\n\n<ul>\n	<li>Pretium vitae tempus sem enim enim.</li>\n	<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\n	<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\n	<li>Vulputate dictumst egestas etiam dictum varius.</li>\n</ul>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p>2</p>\n\n<div class=\"item_content\">\n<h2><strong>Day 2</strong></h2>\n\n<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p>3</p>\n\n<div class=\"item_content\">\n<h2><strong>Day 3</strong></h2>\n\n<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p>4</p>\n\n<div class=\"item_content\">\n<h2><strong>Day 4</strong></h2>\n\n<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p>5</p>\n\n<div class=\"item_content\">\n<h2><strong>Day 5</strong></h2>\n\n<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">&nbsp;</div>', '<h2>Product Description men</h2>\n\n<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\n\n<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\n\n<table class=\"tours-tabs_table\">\n	<tbody>\n		<tr>\n			<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\n			<td>San Francisco International Airport</td>\n		</tr>\n		<tr>\n			<td><strong>DEPARTURE TIME</strong></td>\n			<td>Please arrive at least&nbsp;2 hours before the flight.</td>\n		</tr>\n		<tr>\n			<td><strong>INCLUDED</strong></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Airfare</td>\n						<td>Accommodations</td>\n					</tr>\n					<tr>\n						<td>2 days cruise</td>\n						<td>Professional guide</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n		<tr>\n			<td><strong>NOT INCLUDED</strong></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Entrance fees</td>\n					</tr>\n					<tr>\n						<td>Guide&nbsp;gratuity</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\n\n<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', 'đ', '20000.00', '1200.00', 'vi', '2017-06-19 17:33:13', '2017-06-21 08:12:57'),
(11, 9, 'fgfg', 'fgfg', '<div class=\"interary-item\">\n<p><span class=\"icon-left\">1</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 1: Departure</strong></h2>\n\n<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br />\nMaecenas massa. Fermentum.</p>\n\n<ul>\n	<li>Pretium vitae tempus sem enim enim.</li>\n	<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\n	<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\n	<li>Vulputate dictumst egestas etiam dictum varius.</li>\n</ul>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">2</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 2</strong></h2>\n\n<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">3</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 3</strong></h2>\n\n<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">4</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 4</strong></h2>\n\n<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">5</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 5</strong></h2>\n\n<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">6</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 6: Return</strong></h2>\n</div>\n</div>', '<h2>Product Description</h2>\n\n<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\n\n<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\n\n<table class=\"tours-tabs_table\">\n	<tbody>\n		<tr>\n			<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\n			<td>San Francisco International Airport</td>\n		</tr>\n		<tr>\n			<td><strong>DEPARTURE TIME</strong></td>\n			<td>Please arrive at least&nbsp;2 hours before the flight.</td>\n		</tr>\n		<tr>\n			<td><strong>INCLUDED</strong></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Airfare</td>\n						<td>Accommodations</td>\n					</tr>\n					<tr>\n						<td>2 days cruise</td>\n						<td>Professional guide</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n		<tr>\n			<td><strong>NOT INCLUDED</strong></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Entrance fees</td>\n					</tr>\n					<tr>\n						<td>Guide&nbsp;gratuity</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\n\n<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', '$', '20000.00', '90.00', 'en', '2017-06-19 17:33:13', '2017-06-23 09:33:22'),
(12, 12, 'Test', 'The word-spacing property is used to specify the space between the words in a text.\nThe following example demonstrates how to increase or decrease the space between words: \nExample', '<div class=\"interary-item\">\n<p><span class=\"icon-left\">1</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 1: Departure</strong></h2>\n\n<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br />\nMaecenas massa. Fermentum.</p>\n\n<ul>\n	<li>Pretium vitae tempus sem enim enim.</li>\n	<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\n	<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\n	<li>Vulputate dictumst egestas etiam dictum varius.</li>\n</ul>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">2</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 2</strong></h2>\n\n<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">3</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 3</strong></h2>\n\n<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">4</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 4</strong></h2>\n\n<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">5</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 5</strong></h2>\n\n<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">6</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 6: Return</strong></h2>\n</div>\n</div>', '<h2>Product Description</h2>\n\n<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\n\n<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\n\n<table class=\"tours-tabs_table\">\n	<tbody>\n		<tr>\n			<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\n			<td>San Francisco International Airport</td>\n		</tr>\n		<tr>\n			<td><strong>DEPARTURE TIME</strong></td>\n			<td>Please arrive at least&nbsp;2 hours before the flight.</td>\n		</tr>\n		<tr>\n			<td><strong>INCLUDED</strong></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Airfare</td>\n						<td>Accommodations</td>\n					</tr>\n					<tr>\n						<td>2 days cruise</td>\n						<td>Professional guide</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n		<tr>\n			<td><strong>NOT INCLUDED</strong></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Entrance fees</td>\n					</tr>\n					<tr>\n						<td>Guide&nbsp;gratuity</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\n\n<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', 'đ', '1200000.00', '1500000.00', 'vi', '2017-06-22 08:16:17', '2017-06-23 21:54:15'),
(13, 12, 'Test', 'The word-spacing property is used to specify the space between the words in a text.\nThe following example demonstrates how to increase or decrease the space between words: \nExample', '<div class=\"interary-item\">\n<p><span class=\"icon-left\">1</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 1: Departure</strong></h2>\n\n<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br />\nMaecenas massa. Fermentum.</p>\n\n<ul>\n	<li>Pretium vitae tempus sem enim enim.</li>\n	<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\n	<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\n	<li>Vulputate dictumst egestas etiam dictum varius.</li>\n</ul>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">2</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 2</strong></h2>\n\n<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">3</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 3</strong></h2>\n\n<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">4</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 4</strong></h2>\n\n<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">5</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 5</strong></h2>\n\n<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">6</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 6: Return</strong></h2>\n</div>\n</div>', '<h2>Product Description</h2>\n\n<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\n\n<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\n\n<table class=\"tours-tabs_table\">\n	<tbody>\n		<tr>\n			<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\n			<td>San Francisco International Airport</td>\n		</tr>\n		<tr>\n			<td><strong>DEPARTURE TIME</strong></td>\n			<td>Please arrive at least&nbsp;2 hours before the flight.</td>\n		</tr>\n		<tr>\n			<td><strong>INCLUDED</strong></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Airfare</td>\n						<td>Accommodations</td>\n					</tr>\n					<tr>\n						<td>2 days cruise</td>\n						<td>Professional guide</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n		<tr>\n			<td><strong>NOT INCLUDED</strong></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Entrance fees</td>\n					</tr>\n					<tr>\n						<td>Guide&nbsp;gratuity</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\n\n<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', '$', '1200000.00', '150.00', 'en', '2017-06-22 08:16:17', '2017-06-23 21:54:15'),
(14, 13, 'Nhat Nga', 'Aliquam lacus nisl, viverra convallis sit amet penatibus nunc luctus', '<div class=\"interary-item\">\n<p><span class=\"icon-left\">1</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 1: Departure</strong></h2>\n\n<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br />\nMaecenas massa. Fermentum.</p>\n\n<ul>\n	<li>Pretium vitae tempus sem enim enim.</li>\n	<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\n	<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\n	<li>Vulputate dictumst egestas etiam dictum varius.</li>\n</ul>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">2</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 2</strong></h2>\n\n<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">3</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 3</strong></h2>\n\n<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">4</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 4</strong></h2>\n\n<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">5</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 5</strong></h2>\n\n<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">6</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 6: Return</strong></h2>\n</div>\n</div>', '<h2>Product Description</h2>\n\n<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\n\n<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\n\n<table class=\"tours-tabs_table\">\n	<tbody>\n		<tr>\n			<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\n			<td>San Francisco International Airport</td>\n		</tr>\n		<tr>\n			<td><strong>DEPARTURE TIME</strong></td>\n			<td>Please arrive at least&nbsp;2 hours before the flight.</td>\n		</tr>\n		<tr>\n			<td><strong>INCLUDED</strong></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Airfare</td>\n						<td>Accommodations</td>\n					</tr>\n					<tr>\n						<td>2 days cruise</td>\n						<td>Professional guide</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n		<tr>\n			<td><b>NOT INCLUDED</b></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Entrance fees</td>\n					</tr>\n					<tr>\n						<td>Guide&nbsp;gratuity</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\n\n<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', 'đ', '900000.00', '1400000.00', 'vi', '2017-06-23 06:46:57', '2017-06-23 06:46:57'),
(15, 13, 'Nhat Nga', 'Aliquam lacus nisl, viverra convallis sit amet penatibus nunc luctus', '\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">1</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 1: Departure</strong></h2>\r\n												<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br>\r\n													Maecenas massa. Fermentum.</p>\r\n												<ul>\r\n													<li>Pretium vitae tempus sem enim enim.</li>\r\n													<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\r\n													<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\r\n													<li>Vulputate dictumst egestas etiam dictum varius.</li>\r\n												</ul>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">2</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 2</strong></h2>\r\n												<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">3</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 3</strong></h2>\r\n												<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">4</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 4</strong></h2>\r\n												<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">5</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 5</strong></h2>\r\n												<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">6</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 6: Return</strong></h2>\r\n											</div>\r\n										</div>\r\n								', '	<h2>Product Description</h2>\r\n										<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\r\n										<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\r\n										<table class=\"tours-tabs_table\">\r\n											<tbody>\r\n											<tr>\r\n												<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\r\n												<td>San Francisco International Airport</td>\r\n											</tr>\r\n											<tr>\r\n												<td><strong>DEPARTURE TIME</strong></td>\r\n												<td>Please arrive at least&nbsp;2 hours before the flight.</td>\r\n											</tr>\r\n											<tr>\r\n												<td><strong>INCLUDED</strong></td>\r\n												<td>\r\n													<table>\r\n														<tbody>\r\n														<tr>\r\n															<td><i class=\"fa fa-check icon-tick icon-tick--on\"></i>Airfare\r\n															</td>\r\n															<td><i class=\"fa fa-check icon-tick icon-tick--on\"></i>Accommodations\r\n															</td>\r\n														</tr>\r\n														<tr>\r\n															<td>\r\n																<i class=\"fa fa-check icon-tick icon-tick--on\"></i>2 days cruise\r\n															</td>\r\n															<td>\r\n																<i class=\"fa fa-check icon-tick icon-tick--on\"></i>Professional guide\r\n															</td>\r\n														</tr>\r\n														</tbody>\r\n													</table>\r\n												</td>\r\n											</tr>\r\n											<tr>\r\n												<td><b>NOT INCLUDED</b></td>\r\n												<td>\r\n													<table>\r\n														<tbody>\r\n														<tr>\r\n															<td>\r\n																<i class=\"fa fa-times icon-tick icon-tick--off\"></i>Entrance fees\r\n															</td>\r\n														</tr>\r\n														<tr>\r\n															<td><i class=\"fa fa-times icon-tick icon-tick--off\"></i>Guide&nbsp;gratuity\r\n															</td>\r\n														</tr>\r\n														</tbody>\r\n													</table>\r\n												</td>\r\n											</tr>\r\n											</tbody>\r\n										</table>\r\n										<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\r\n										<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', '$', '75.00', '80.00', 'en', '2017-06-23 06:46:58', '2017-06-23 06:46:58'),
(16, 14, 'Internet Explorer 8 and 7, as always, are making life difficult', 'Internet Explorer 8 and 7, as always, are making life difficult Internet Explorer 8 and 7, as always, are making life difficultInternet Explorer 8 and 7, as always, are making life difficult', '<div class=\"interary-item\">\n<p><span class=\"icon-left\">1</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 1: Departure</strong></h2>\n\n<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br />\nMaecenas massa. Fermentum.</p>\n\n<ul>\n	<li>Pretium vitae tempus sem enim enim.</li>\n	<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\n	<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\n	<li>Vulputate dictumst egestas etiam dictum varius.</li>\n</ul>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">2</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 2</strong></h2>\n\n<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">3</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 3</strong></h2>\n\n<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">4</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 4</strong></h2>\n\n<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">5</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 5</strong></h2>\n\n<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">6</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 6: Return</strong></h2>\n</div>\n</div>', '<h2>Product Description</h2>\n\n<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\n\n<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\n\n<table class=\"tours-tabs_table\">\n	<tbody>\n		<tr>\n			<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\n			<td>San Francisco International Airport</td>\n		</tr>\n		<tr>\n			<td><strong>DEPARTURE TIME</strong></td>\n			<td>Please arrive at least&nbsp;2 hours before the flight.</td>\n		</tr>\n		<tr>\n			<td><strong>INCLUDED</strong></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Airfare</td>\n						<td>Accommodations</td>\n					</tr>\n					<tr>\n						<td>2 days cruise</td>\n						<td>Professional guide</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n		<tr>\n			<td><b>NOT INCLUDED</b></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Entrance fees</td>\n					</tr>\n					<tr>\n						<td>Guide&nbsp;gratuity</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\n\n<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', 'đ', '800000.00', '1300000.00', 'vi', '2017-06-23 07:18:22', '2017-06-23 21:56:35'),
(17, 14, 'Internet Explorer 8 and 7, as always, are making life difficult', 'Internet Explorer 8 and 7, as always, are making life difficult Internet Explorer 8 and 7, as always, are making life difficultInternet Explorer 8 and 7, as always, are making life difficult', '<div class=\"interary-item\">\n<p><span class=\"icon-left\">1</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 1: Departure</strong></h2>\n\n<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br />\nMaecenas massa. Fermentum.</p>\n\n<ul>\n	<li>Pretium vitae tempus sem enim enim.</li>\n	<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\n	<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\n	<li>Vulputate dictumst egestas etiam dictum varius.</li>\n</ul>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">2</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 2</strong></h2>\n\n<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">3</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 3</strong></h2>\n\n<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">4</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 4</strong></h2>\n\n<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">5</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 5</strong></h2>\n\n<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">6</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 6: Return</strong></h2>\n</div>\n</div>', '<h2>Product Description</h2>\n\n<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\n\n<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\n\n<table class=\"tours-tabs_table\">\n	<tbody>\n		<tr>\n			<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\n			<td>San Francisco International Airport</td>\n		</tr>\n		<tr>\n			<td><strong>DEPARTURE TIME</strong></td>\n			<td>Please arrive at least&nbsp;2 hours before the flight.</td>\n		</tr>\n		<tr>\n			<td><strong>INCLUDED</strong></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Airfare</td>\n						<td>Accommodations</td>\n					</tr>\n					<tr>\n						<td>2 days cruise</td>\n						<td>Professional guide</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n		<tr>\n			<td><b>NOT INCLUDED</b></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Entrance fees</td>\n					</tr>\n					<tr>\n						<td>Guide&nbsp;gratuity</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\n\n<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', '$', '800000.00', '96.00', 'en', '2017-06-23 07:18:22', '2017-06-23 21:56:35'),
(18, 15, 'Lở đất ở Trung Quốc', 'Lở đất ở Trung Quốc', '<div class=\"interary-item\">\n<p><span class=\"icon-left\">1</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 1: Departure</strong></h2>\n\n<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br />\nMaecenas massa. Fermentum.</p>\n\n<ul>\n	<li>Pretium vitae tempus sem enim enim.</li>\n	<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\n	<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\n	<li>Vulputate dictumst egestas etiam dictum varius.</li>\n</ul>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">2</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 2</strong></h2>\n\n<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">3</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 3</strong></h2>\n\n<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">4</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 4</strong></h2>\n\n<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">5</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 5</strong></h2>\n\n<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">6</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 6: Return</strong></h2>\n</div>\n</div>', '<h2>Product Description</h2>\n\n<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\n\n<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\n\n<table class=\"tours-tabs_table\">\n	<tbody>\n		<tr>\n			<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\n			<td>San Francisco International Airport</td>\n		</tr>\n		<tr>\n			<td><strong>DEPARTURE TIME</strong></td>\n			<td>Please arrive at least&nbsp;2 hours before the flight.</td>\n		</tr>\n		<tr>\n			<td><strong>INCLUDED</strong></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Airfare</td>\n						<td>Accommodations</td>\n					</tr>\n					<tr>\n						<td>2 days cruise</td>\n						<td>Professional guide</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n		<tr>\n			<td><b>NOT INCLUDED</b></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Entrance fees</td>\n					</tr>\n					<tr>\n						<td>Guide&nbsp;gratuity</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\n\n<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', 'đ', '100000.00', '1200000.00', 'vi', '2017-06-23 21:19:12', '2017-06-23 21:19:12'),
(19, 15, 'Lở đất ở Trung Quốc', 'Lở đất ở Trung Quốc', '\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">1</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 1: Departure</strong></h2>\r\n												<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br>\r\n													Maecenas massa. Fermentum.</p>\r\n												<ul>\r\n													<li>Pretium vitae tempus sem enim enim.</li>\r\n													<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\r\n													<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\r\n													<li>Vulputate dictumst egestas etiam dictum varius.</li>\r\n												</ul>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">2</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 2</strong></h2>\r\n												<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">3</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 3</strong></h2>\r\n												<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">4</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 4</strong></h2>\r\n												<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">5</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 5</strong></h2>\r\n												<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">6</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 6: Return</strong></h2>\r\n											</div>\r\n										</div>\r\n								', '	<h2>Product Description</h2>\r\n										<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\r\n										<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\r\n										<table class=\"tours-tabs_table\">\r\n											<tbody>\r\n											<tr>\r\n												<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\r\n												<td>San Francisco International Airport</td>\r\n											</tr>\r\n											<tr>\r\n												<td><strong>DEPARTURE TIME</strong></td>\r\n												<td>Please arrive at least&nbsp;2 hours before the flight.</td>\r\n											</tr>\r\n											<tr>\r\n												<td><strong>INCLUDED</strong></td>\r\n												<td>\r\n													<table>\r\n														<tbody>\r\n														<tr>\r\n															<td><i class=\"fa fa-check icon-tick icon-tick--on\"></i>Airfare\r\n															</td>\r\n															<td><i class=\"fa fa-check icon-tick icon-tick--on\"></i>Accommodations\r\n															</td>\r\n														</tr>\r\n														<tr>\r\n															<td>\r\n																<i class=\"fa fa-check icon-tick icon-tick--on\"></i>2 days cruise\r\n															</td>\r\n															<td>\r\n																<i class=\"fa fa-check icon-tick icon-tick--on\"></i>Professional guide\r\n															</td>\r\n														</tr>\r\n														</tbody>\r\n													</table>\r\n												</td>\r\n											</tr>\r\n											<tr>\r\n												<td><b>NOT INCLUDED</b></td>\r\n												<td>\r\n													<table>\r\n														<tbody>\r\n														<tr>\r\n															<td>\r\n																<i class=\"fa fa-times icon-tick icon-tick--off\"></i>Entrance fees\r\n															</td>\r\n														</tr>\r\n														<tr>\r\n															<td><i class=\"fa fa-times icon-tick icon-tick--off\"></i>Guide&nbsp;gratuity\r\n															</td>\r\n														</tr>\r\n														</tbody>\r\n													</table>\r\n												</td>\r\n											</tr>\r\n											</tbody>\r\n										</table>\r\n										<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\r\n										<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', '$', '2000000.00', '160.00', 'en', '2017-06-23 21:19:12', '2017-06-23 21:19:12'),
(20, 16, 'Luật sư Mỹ nặng lòng Việt Nam', 'Lở đất ở Trung Quốc', '<div class=\"interary-item\">\n<p><span class=\"icon-left\">1</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 1: Departure</strong></h2>\n\n<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br />\nMaecenas massa. Fermentum.</p>\n\n<ul>\n	<li>Pretium vitae tempus sem enim enim.</li>\n	<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\n	<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\n	<li>Vulputate dictumst egestas etiam dictum varius.</li>\n</ul>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">2</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 2</strong></h2>\n\n<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">3</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 3</strong></h2>\n\n<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">4</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 4</strong></h2>\n\n<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">5</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 5</strong></h2>\n\n<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">6</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 6: Return</strong></h2>\n</div>\n</div>', '<h2>Product Description</h2>\n\n<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\n\n<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\n\n<table class=\"tours-tabs_table\">\n	<tbody>\n		<tr>\n			<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\n			<td>San Francisco International Airport</td>\n		</tr>\n		<tr>\n			<td><strong>DEPARTURE TIME</strong></td>\n			<td>Please arrive at least&nbsp;2 hours before the flight.</td>\n		</tr>\n		<tr>\n			<td><strong>INCLUDED</strong></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Airfare</td>\n						<td>Accommodations</td>\n					</tr>\n					<tr>\n						<td>2 days cruise</td>\n						<td>Professional guide</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n		<tr>\n			<td><b>NOT INCLUDED</b></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Entrance fees</td>\n					</tr>\n					<tr>\n						<td>Guide&nbsp;gratuity</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\n\n<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', 'đ', '100000.00', '1200000.00', 'vi', '2017-06-23 21:20:35', '2017-06-23 21:20:35');
INSERT INTO `tour_translation` (`id`, `tour_id`, `name`, `short_description`, `itinerary`, `description`, `currency_unit`, `children_price`, `adult_price`, `lang_code`, `created_at`, `updated_at`) VALUES
(21, 16, 'Luật sư Mỹ nặng lòng Việt Nam', 'Lở đất ở Trung Quốc', '\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">1</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 1: Departure</strong></h2>\r\n												<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br>\r\n													Maecenas massa. Fermentum.</p>\r\n												<ul>\r\n													<li>Pretium vitae tempus sem enim enim.</li>\r\n													<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\r\n													<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\r\n													<li>Vulputate dictumst egestas etiam dictum varius.</li>\r\n												</ul>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">2</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 2</strong></h2>\r\n												<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">3</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 3</strong></h2>\r\n												<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">4</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 4</strong></h2>\r\n												<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">5</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 5</strong></h2>\r\n												<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">6</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 6: Return</strong></h2>\r\n											</div>\r\n										</div>\r\n								', '	<h2>Product Description</h2>\r\n										<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\r\n										<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\r\n										<table class=\"tours-tabs_table\">\r\n											<tbody>\r\n											<tr>\r\n												<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\r\n												<td>San Francisco International Airport</td>\r\n											</tr>\r\n											<tr>\r\n												<td><strong>DEPARTURE TIME</strong></td>\r\n												<td>Please arrive at least&nbsp;2 hours before the flight.</td>\r\n											</tr>\r\n											<tr>\r\n												<td><strong>INCLUDED</strong></td>\r\n												<td>\r\n													<table>\r\n														<tbody>\r\n														<tr>\r\n															<td><i class=\"fa fa-check icon-tick icon-tick--on\"></i>Airfare\r\n															</td>\r\n															<td><i class=\"fa fa-check icon-tick icon-tick--on\"></i>Accommodations\r\n															</td>\r\n														</tr>\r\n														<tr>\r\n															<td>\r\n																<i class=\"fa fa-check icon-tick icon-tick--on\"></i>2 days cruise\r\n															</td>\r\n															<td>\r\n																<i class=\"fa fa-check icon-tick icon-tick--on\"></i>Professional guide\r\n															</td>\r\n														</tr>\r\n														</tbody>\r\n													</table>\r\n												</td>\r\n											</tr>\r\n											<tr>\r\n												<td><b>NOT INCLUDED</b></td>\r\n												<td>\r\n													<table>\r\n														<tbody>\r\n														<tr>\r\n															<td>\r\n																<i class=\"fa fa-times icon-tick icon-tick--off\"></i>Entrance fees\r\n															</td>\r\n														</tr>\r\n														<tr>\r\n															<td><i class=\"fa fa-times icon-tick icon-tick--off\"></i>Guide&nbsp;gratuity\r\n															</td>\r\n														</tr>\r\n														</tbody>\r\n													</table>\r\n												</td>\r\n											</tr>\r\n											</tbody>\r\n										</table>\r\n										<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\r\n										<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', '$', '2000000.00', '160.00', 'en', '2017-06-23 21:20:35', '2017-06-23 21:20:35'),
(30, 21, 'werew', 'wrewrw', '<div class=\"interary-item\">\n<p><span class=\"icon-left\">1</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 1: Departure</strong></h2>\n\n<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br />\nMaecenas massa. Fermentum.</p>\n\n<ul>\n	<li>Pretium vitae tempus sem enim enim.</li>\n	<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\n	<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\n	<li>Vulputate dictumst egestas etiam dictum varius.</li>\n</ul>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">2</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 2</strong></h2>\n\n<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">3</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 3</strong></h2>\n\n<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">4</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 4</strong></h2>\n\n<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">5</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 5</strong></h2>\n\n<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\n</div>\n</div>\n\n<div class=\"interary-item\">\n<p><span class=\"icon-left\">6</span></p>\n\n<div class=\"item_content\">\n<h2><strong>Day 6: Return</strong></h2>\n</div>\n</div>', '<h2>Product Description</h2>\n\n<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\n\n<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\n\n<table class=\"tours-tabs_table\">\n	<tbody>\n		<tr>\n			<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\n			<td>San Francisco International Airport</td>\n		</tr>\n		<tr>\n			<td><strong>DEPARTURE TIME</strong></td>\n			<td>Please arrive at least&nbsp;2 hours before the flight.</td>\n		</tr>\n		<tr>\n			<td><strong>INCLUDED</strong></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Airfare</td>\n						<td>Accommodations</td>\n					</tr>\n					<tr>\n						<td>2 days cruise</td>\n						<td>Professional guide</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n		<tr>\n			<td><b>NOT INCLUDED</b></td>\n			<td>\n			<table>\n				<tbody>\n					<tr>\n						<td>Entrance fees</td>\n					</tr>\n					<tr>\n						<td>Guide&nbsp;gratuity</td>\n					</tr>\n				</tbody>\n			</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\n\n<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', 'đ', '0.00', '0.00', 'vi', '2017-07-02 01:42:30', '2017-07-02 01:42:30'),
(31, 21, 'werewr', 'werwe', '\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">1</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 1: Departure</strong></h2>\r\n												<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br>\r\n													Maecenas massa. Fermentum.</p>\r\n												<ul>\r\n													<li>Pretium vitae tempus sem enim enim.</li>\r\n													<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\r\n													<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\r\n													<li>Vulputate dictumst egestas etiam dictum varius.</li>\r\n												</ul>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">2</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 2</strong></h2>\r\n												<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">3</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 3</strong></h2>\r\n												<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">4</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 4</strong></h2>\r\n												<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">5</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 5</strong></h2>\r\n												<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">6</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 6: Return</strong></h2>\r\n											</div>\r\n										</div>\r\n								', '	<h2>Product Description</h2>\r\n										<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\r\n										<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\r\n										<table class=\"tours-tabs_table\">\r\n											<tbody>\r\n											<tr>\r\n												<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\r\n												<td>San Francisco International Airport</td>\r\n											</tr>\r\n											<tr>\r\n												<td><strong>DEPARTURE TIME</strong></td>\r\n												<td>Please arrive at least&nbsp;2 hours before the flight.</td>\r\n											</tr>\r\n											<tr>\r\n												<td><strong>INCLUDED</strong></td>\r\n												<td>\r\n													<table>\r\n														<tbody>\r\n														<tr>\r\n															<td><i class=\"fa fa-check icon-tick icon-tick--on\"></i>Airfare\r\n															</td>\r\n															<td><i class=\"fa fa-check icon-tick icon-tick--on\"></i>Accommodations\r\n															</td>\r\n														</tr>\r\n														<tr>\r\n															<td>\r\n																<i class=\"fa fa-check icon-tick icon-tick--on\"></i>2 days cruise\r\n															</td>\r\n															<td>\r\n																<i class=\"fa fa-check icon-tick icon-tick--on\"></i>Professional guide\r\n															</td>\r\n														</tr>\r\n														</tbody>\r\n													</table>\r\n												</td>\r\n											</tr>\r\n											<tr>\r\n												<td><b>NOT INCLUDED</b></td>\r\n												<td>\r\n													<table>\r\n														<tbody>\r\n														<tr>\r\n															<td>\r\n																<i class=\"fa fa-times icon-tick icon-tick--off\"></i>Entrance fees\r\n															</td>\r\n														</tr>\r\n														<tr>\r\n															<td><i class=\"fa fa-times icon-tick icon-tick--off\"></i>Guide&nbsp;gratuity\r\n															</td>\r\n														</tr>\r\n														</tbody>\r\n													</table>\r\n												</td>\r\n											</tr>\r\n											</tbody>\r\n										</table>\r\n										<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\r\n										<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', '$', '0.00', '0.00', 'en', '2017-07-02 01:42:31', '2017-07-02 01:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `tour_type`
--

CREATE TABLE `tour_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_type`
--

INSERT INTO `tour_type` (`id`, `slug_url`, `created_at`, `updated_at`) VALUES
(1, 'long-tour', NULL, NULL),
(2, 'short-tour', NULL, NULL),
(3, 'food-tour', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tour_type_translation`
--

CREATE TABLE `tour_type_translation` (
  `id` int(10) UNSIGNED NOT NULL,
  `tour_type_id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_type_translation`
--

INSERT INTO `tour_type_translation` (`id`, `tour_type_id`, `name`, `lang_code`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tour nhiều ngày', 'vi', NULL, NULL),
(2, 1, 'Long tour', 'en', NULL, NULL),
(3, 2, 'Tour trong ngày', 'vi', NULL, NULL),
(4, 2, 'Short tour', 'en', NULL, NULL),
(5, 3, 'Tour ẩm thực', 'vi', NULL, NULL),
(6, 3, 'Food tour', 'en', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `user_type`, `is_active`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nhat Nga', 'admin@gmail.com', '$2y$10$Ccl02abeId9wyHa6DlQOIekJGfCN5NAFvzI9enpcCsCstXE09uwXm', '01683105920', '357/10 cmt8 f12,q10', 'admin', 1, NULL, NULL, NULL, NULL),
(2, 'Nhat Nga', 'men.nguyen.sg@gmail.com', '$2y$10$VHQTnDE4dDp8kh.YWCe0V.6/Jm.vnSS/Yhdv9YnljiuGe9wIT0NJW', '01683105920', '357/10 cmt8 f12,q10', 'mennguyen', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visa`
--

CREATE TABLE `visa` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug_url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_ids` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visa_cate_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visa`
--

INSERT INTO `visa` (`id`, `slug_url`, `media_ids`, `created_at`, `updated_at`, `visa_cate_id`) VALUES
(1, 'vvv', '19', '2017-06-16 07:27:12', '2017-06-16 07:27:12', 1),
(2, 'test', '46', '2017-06-22 10:37:18', '2017-06-22 10:37:18', 1),
(3, 'hylap', '77', '2017-06-24 00:41:24', '2017-06-24 00:41:24', 1),
(4, 'sdfsd', '78', '2017-06-27 09:06:09', '2017-06-27 09:06:09', 1),
(5, 'thai-lan', '79', '2017-06-27 09:07:54', '2017-06-29 09:12:30', 1),
(6, 'singapore', '86', '2017-07-02 01:37:50', '2017-07-02 01:37:50', 3),
(7, 'men-nguyen-bbbb', '88', '2017-07-02 04:25:07', '2017-07-02 05:02:43', 1),
(8, 'fgdfg', '89', '2017-07-04 10:52:13', '2017-07-04 10:52:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visa_category`
--

CREATE TABLE `visa_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug_url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_ids` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visa_category`
--

INSERT INTO `visa_category` (`id`, `slug_url`, `media_ids`, `created_at`, `updated_at`) VALUES
(1, 'africa', '1', NULL, NULL),
(2, 'america', '1', NULL, NULL),
(3, 'asia', '1', NULL, NULL),
(4, 'australia', '1', NULL, NULL),
(5, 'europe', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visa_category_translation`
--

CREATE TABLE `visa_category_translation` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visa_category_id` int(10) UNSIGNED NOT NULL,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visa_category_translation`
--

INSERT INTO `visa_category_translation` (`id`, `name`, `created_at`, `updated_at`, `visa_category_id`, `lang_code`) VALUES
(1, 'Châu Phi', NULL, NULL, 1, 'vi'),
(2, 'Africa', NULL, NULL, 1, 'en'),
(3, 'Châu Mỹ', NULL, NULL, 2, 'vi'),
(4, 'America', NULL, NULL, 2, 'en'),
(5, 'Châu Á', NULL, NULL, 3, 'vi'),
(6, 'Asia', NULL, NULL, 3, 'en'),
(7, 'Châu Úc', NULL, NULL, 4, 'vi'),
(8, 'Australia', NULL, NULL, 4, 'en'),
(9, 'Châu Âu', NULL, NULL, 5, 'vi'),
(10, 'Europe', NULL, NULL, 5, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `visa_translation`
--

CREATE TABLE `visa_translation` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `short_description` longtext COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `visa_id` int(10) UNSIGNED NOT NULL,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `col_title` text COLLATE utf8mb4_unicode_ci,
  `col_work` text COLLATE utf8mb4_unicode_ci,
  `col_travel` text COLLATE utf8mb4_unicode_ci,
  `col_study` text COLLATE utf8mb4_unicode_ci,
  `col_note` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visa_translation`
--

INSERT INTO `visa_translation` (`id`, `name`, `short_description`, `content`, `created_at`, `updated_at`, `visa_id`, `lang_code`, `col_title`, `col_work`, `col_travel`, `col_study`, `col_note`) VALUES
(1, 'aaa', 'ccc', '<p>sss</p>', '2017-06-16 07:27:12', '2017-06-16 07:27:12', 1, 'vi', NULL, NULL, NULL, NULL, NULL),
(2, 'vvv', 'dd', '<p>dffdf</p>', '2017-06-16 07:27:12', '2017-06-16 07:27:12', 1, 'en', NULL, NULL, NULL, NULL, NULL),
(3, 'test', 'sfsdf', '<p>sdfs</p>', '2017-06-22 10:37:18', '2017-06-22 10:37:18', 2, 'vi', NULL, NULL, NULL, NULL, NULL),
(4, 'test', 'sdf', '<p>sdfsd</p>', '2017-06-22 10:37:18', '2017-06-22 10:37:18', 2, 'en', NULL, NULL, NULL, NULL, NULL),
(5, 'HyLap', 'là một bằng chứng hợp pháp xác', '<p><img alt=\"thailand\" data-lazy-src=\"http://nhatnga.com.vn/wp-content/uploads/2016/06/thailand.jpg\" data-lazy-srcset=\"http://nhatnga.com.vn/wp-content/uploads/2016/06/thailand.jpg 400w, http://nhatnga.com.vn/wp-content/uploads/2016/06/thailand-300x178.jpg 300w\" height=\"237\" sizes=\"(max-width: 400px) 100vw, 400px\" src=\"http://nhatnga.com.vn/wp-content/uploads/2016/06/thailand.jpg\" srcset=\"http://nhatnga.com.vn/wp-content/uploads/2016/06/thailand.jpg 400w, http://nhatnga.com.vn/wp-content/uploads/2016/06/thailand-300x178.jpg 300w\" width=\"400\" /></p>\n\n<ul>\n	<li><strong>Đại sứ qu&aacute;n Th&aacute;i Lan&nbsp;tại Việt Nam:</strong><br />\n	Địa chỉ: 63-65 Ho&agrave;ng Diệu, H&agrave; Nội, Việt Nam.</li>\n	<li><strong>L&atilde;nh&nbsp;sự qu&aacute;n Th&aacute;i Lan tại&nbsp;TP.&nbsp;Hồ Ch&iacute; Minh:</strong><br />\n	Địa chỉ: Số&nbsp;77 Trần Quốc Thảo, Q3, TP.Hồ Ch&iacute; Minh.</li>\n</ul>\n\n<h2>Hồ sơ xin VISA Th&aacute;i Lan</h2>\n\n<h4>C&aacute;c hồ sơ cơ bản&nbsp;cần chuẩn bị để l&agrave;m thủ tục xin VISA Th&aacute;i Lan</h4>\n\n<ol>\n	<li>\n	<h5>Hộ chiếu</h5>\n	</li>\n	<li>\n	<h5>02 h&igrave;nh 4&times;6 nền trắng</h5>\n\n	<h5>&nbsp;</h5>\n	</li>\n</ol>\n\n<p>QUỐC TỊCH VIỆT NAM ĐƯỢC MIỄN VISA 30 NG&Agrave;Y</p>\n\n<h4>Hồ sơ cần chuẩn bị ri&ecirc;ng cho từng &nbsp;trường hợp sau:</h4>', '2017-06-24 00:41:24', '2017-06-24 00:41:24', 3, 'vi', NULL, NULL, NULL, NULL, NULL),
(6, 'HyLap', 'là một bằng chứng hợp pháp xác', '<p><img alt=\"thailand\" data-lazy-src=\"http://nhatnga.com.vn/wp-content/uploads/2016/06/thailand.jpg\" data-lazy-srcset=\"http://nhatnga.com.vn/wp-content/uploads/2016/06/thailand.jpg 400w, http://nhatnga.com.vn/wp-content/uploads/2016/06/thailand-300x178.jpg 300w\" height=\"237\" sizes=\"(max-width: 400px) 100vw, 400px\" src=\"http://nhatnga.com.vn/wp-content/uploads/2016/06/thailand.jpg\" srcset=\"http://nhatnga.com.vn/wp-content/uploads/2016/06/thailand.jpg 400w, http://nhatnga.com.vn/wp-content/uploads/2016/06/thailand-300x178.jpg 300w\" width=\"400\" /></p>\n\n<ul>\n	<li><strong>Đại sứ qu&aacute;n Th&aacute;i Lan&nbsp;tại Việt Nam:</strong><br />\n	Địa chỉ: 63-65 Ho&agrave;ng Diệu, H&agrave; Nội, Việt Nam.</li>\n	<li><strong>L&atilde;nh&nbsp;sự qu&aacute;n Th&aacute;i Lan tại&nbsp;TP.&nbsp;Hồ Ch&iacute; Minh:</strong><br />\n	Địa chỉ: Số&nbsp;77 Trần Quốc Thảo, Q3, TP.Hồ Ch&iacute; Minh.</li>\n</ul>\n\n<h2>Hồ sơ xin VISA Th&aacute;i Lan</h2>\n\n<h4>C&aacute;c hồ sơ cơ bản&nbsp;cần chuẩn bị để l&agrave;m thủ tục xin VISA Th&aacute;i Lan</h4>\n\n<ol>\n	<li>\n	<h5>Hộ chiếu</h5>\n	</li>\n	<li>\n	<h5>02 h&igrave;nh 4&times;6 nền trắng</h5>\n\n	<h5>&nbsp;</h5>\n	</li>\n</ol>\n\n<p>QUỐC TỊCH VIỆT NAM ĐƯỢC MIỄN VISA 30 NG&Agrave;Y</p>\n\n<h4>Hồ sơ cần chuẩn bị ri&ecirc;ng cho từng &nbsp;trường hợp sau:</h4>', '2017-06-24 00:41:24', '2017-06-24 00:41:24', 3, 'en', NULL, NULL, NULL, NULL, NULL),
(7, 'sfdfds', 'sdfsd', '<p>sdfsdf</p>', '2017-06-27 09:06:09', '2017-06-27 09:06:09', 4, 'vi', NULL, NULL, NULL, NULL, NULL),
(8, 'sdfsd', 'sdfsd', '<p>sdfsd</p>', '2017-06-27 09:06:09', '2017-06-27 09:06:09', 4, 'en', NULL, NULL, NULL, NULL, NULL),
(9, 'Thai Lan', 'Thai Lan', '<div class=\"row\">\n<div class=\"col-sm-12 col-md-6\"><img src=\"https://image.ibb.co/bXSgv5/thailand.jpg\" /></div>\n\n<div class=\"col-sm-6\">\n<div>\n<ul>\n	<li><span style=\"font-size:20px;\"><strong>Đại sứ qu&aacute;n Th&aacute;i Lan&nbsp;tại Việt Nam</strong></span><br />\n	Địa chỉ: 63-65 Ho&agrave;ng Diệu, H&agrave; Nội, Việt Nam.</li>\n	<li><span style=\"font-size:20px;\"><strong>L&atilde;nh&nbsp;sự qu&aacute;n Th&aacute;i Lan tại&nbsp;TP.&nbsp;Hồ Ch&iacute; Minh</strong></span><br />\n	Địa chỉ: Số&nbsp;77 Trần Quốc Thảo, Q3, TP.Hồ Ch&iacute; Minh.</li>\n</ul>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<h2 class=\"vc_custom_heading\" style=\"text-align: center;font-family:Roboto;font-weight:;font-style:\"><span style=\"font-size:24px;\"><strong>Hồ sơ xin VISA Th&aacute;i Lan</strong></span></h2>\n</div>\n</div>\n\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<h4 style=\"text-align: left;\"><span style=\"font-size:14px;\"><strong>C&aacute;c hồ sơ cơ bản&nbsp;cần chuẩn bị để l&agrave;m thủ tục xin VISA Th&aacute;i Lan</strong></span></h4>\n</div>\n\n<p>&nbsp;<span style=\"font-size:14px;\">&nbsp; &nbsp;1. Hộ chiếu<br />\n&nbsp; &nbsp; 2. 02 h&igrave;nh 4&times;6 nền trắng</span></p>\n\n<div class=\"row\">\n<div class=\"wpb_wrapper\">&nbsp;</div>\n</div>\n\n<div class=\"row\">\n<div class=\"wpb_wrapper\">\n<p><strong>QUỐC TỊCH VIỆT NAM ĐƯỢC MIỄN VISA 30 NG&Agrave;Y</strong></p>\n</div>\n</div>\n\n<p>&nbsp;</p>\n\n<div class=\"row\">\n<h4 style=\"text-align: left;\"><strong><span style=\"font-size:16px;\">Hồ sơ cần chuẩn bị ri&ecirc;ng cho từng &nbsp;trường hợp sau:</span></strong></h4>\n\n<div class=\"row\">\n<div class=\"col-md-4\">\n<p><strong>1. VISA du lịch, thăm th&acirc;n</strong></p>\n\n<p>1. Chứng minh mối quan hệ</p>\n\n<p>2. Chứng minh t&agrave;i ch&iacute;nh</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>2. VISA c&ocirc;ng t&aacute;c</strong></p>\n\n<p>1. Thư mời</p>\n\n<p>2. Hồ sơ c&ocirc;ng ty b&ecirc;n Th&aacute;i Lan</p>\n\n<p>3. Hồ sơ c&ocirc;ng ty b&ecirc;n Việt Nam</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>3. VISA du học</strong></p>\n\n<p>1. Thư mời của trường</p>\n\n<p>2. Chứng minh t&agrave;i ch&iacute;nh</p>\n\n<p>3. Chứng minh c&ocirc;ng việc (nếu c&oacute;)</p>\n</div>\n\n<p>&nbsp;</p>\n</div>\n\n<div class=\"row\">\n<div class=\"col-md-4\">\n<p><strong>4. VISA kết h&ocirc;n</strong></p>\n\n<p>Li&ecirc;n hệ để tư vấn trực tiếp</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>5. VISA định cư</strong></p>\n\n<p>Kh&ocirc;ng giải quyết tại Việt Nam</p>\n</div>\n\n<p>&nbsp;</p>\n</div>\n\n<p>&nbsp;</p>\n\n<div class=\"row\">\n<p><strong>Lưu &yacute;:</strong></p>\n\n<ul>\n	<li>C&oacute; mặt tại ĐSQ/LSQ để phỏng vấn nếu c&oacute; y&ecirc;u cầu.</li>\n	<li>Hồ sơ c&oacute; thể phải bổ sung nếu c&oacute; y&ecirc;u cầu.</li>\n</ul>\n</div>\n</div>\n</div>', '2017-06-27 09:07:54', '2017-06-29 10:12:24', 5, 'vi', NULL, NULL, NULL, NULL, NULL),
(10, 'Thai Lan', 'Thai Lan', '<div class=\"col-sm-12\">\n<div class=\"col-sm-6\"><img src=\"https://image.ibb.co/bXSgv5/thailand.jpg\" /></div>\n\n<div class=\"col-sm-6\">\n<div class=\"wpb_wrapper\">\n<ul>\n	<li><span style=\"font-size:20px;\"><strong>Đại sứ qu&aacute;n Th&aacute;i Lan&nbsp;tại Việt Nam</strong></span><br />\n	Địa chỉ: 63-65 Ho&agrave;ng Diệu, H&agrave; Nội, Việt Nam.</li>\n	<li><span style=\"font-size:20px;\"><strong>L&atilde;nh&nbsp;sự qu&aacute;n Th&aacute;i Lan tại&nbsp;TP.&nbsp;Hồ Ch&iacute; Minh</strong></span><br />\n	Địa chỉ: Số&nbsp;77 Trần Quốc Thảo, Q3, TP.Hồ Ch&iacute; Minh.</li>\n</ul>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<h2 class=\"vc_custom_heading\" style=\"text-align: center;font-family:Roboto;font-weight:;font-style:\"><span style=\"font-size:24px;\"><strong>Hồ sơ xin VISA Th&aacute;i Lan</strong></span></h2>\n</div>\n</div>\n\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<h4 style=\"text-align: left;\"><strong>C&aacute;c hồ sơ cơ bản&nbsp;cần chuẩn bị để l&agrave;m thủ tục xin VISA Th&aacute;i Lan</strong></h4>\n</div>\n\n<div class=\"row\">\n<div class=\"wpb_wrapper\">\n<h5>1Hộ chiếu</h5>\n\n<h5>02 h&igrave;nh 4&times;6 nền trắng</h5>\n</div>\n</div>\n\n<div class=\"row\">\n<div class=\"wpb_wrapper\">\n<p><strong>QUỐC TỊCH VIỆT NAM ĐƯỢC MIỄN VISA 30 NG&Agrave;Y</strong></p>\n</div>\n</div>\n\n<div class=\"row\">\n<h4 style=\"text-align: left;\">Hồ sơ cần chuẩn bị ri&ecirc;ng cho từng &nbsp;trường hợp sau:</h4>\n\n<ol>\n	<li>VISA du lịch, thăm th&acirc;n\n	<ol>\n		<li>Chứng minh mối quan hệ</li>\n		<li>Chứng minh t&agrave;i ch&iacute;nh</li>\n	</ol>\n	</li>\n	<li>VISA c&ocirc;ng t&aacute;c\n	<ol>\n		<li>Thư mời</li>\n		<li>Hồ sơ c&ocirc;ng ty b&ecirc;n Th&aacute;i Lan</li>\n		<li>Hồ sơ c&ocirc;ng ty b&ecirc;n Việt Nam</li>\n	</ol>\n	</li>\n	<li>VISA du học\n	<ol>\n		<li>Thư mời của trường</li>\n		<li>Chứng minh t&agrave;i ch&iacute;nh</li>\n		<li>Chứng minh c&ocirc;ng việc (nếu c&oacute;)</li>\n	</ol>\n	</li>\n	<li>VISA kết h&ocirc;n</li>\n</ol>\n\n<p style=\"margin-left: 40px;\">Li&ecirc;n hệ để tư vấn trực tiếp</p>\n\n<ol start=\"5\">\n	<li>VISA định cư</li>\n</ol>\n\n<p style=\"margin-left: 40px;\">Kh&ocirc;ng giải quyết tại Việt Nam</p>\n</div>\n</div>', '2017-06-27 09:07:55', '2017-06-29 09:44:17', 5, 'en', NULL, NULL, NULL, NULL, NULL),
(11, 'Singapore', 'Singapore', '<div class=\"row\">\n<div class=\"col-sm-12 col-md-6\"><img src=\"https://image.ibb.co/bXSgv5/thailand.jpg\" /></div>\n\n<div class=\"col-sm-6\">\n<div>\n<ul>\n	<li><span style=\"font-size:20px;\"><strong>Đại sứ qu&aacute;n Th&aacute;i Lan&nbsp;tại Việt Nam</strong></span><br />\n	Địa chỉ: 63-65 Ho&agrave;ng Diệu, H&agrave; Nội, Việt Nam.</li>\n	<li><span style=\"font-size:20px;\"><strong>L&atilde;nh&nbsp;sự qu&aacute;n Th&aacute;i Lan tại&nbsp;TP.&nbsp;Hồ Ch&iacute; Minh</strong></span><br />\n	Địa chỉ: Số&nbsp;77 Trần Quốc Thảo, Q3, TP.Hồ Ch&iacute; Minh.</li>\n</ul>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<h2 class=\"vc_custom_heading\" style=\"text-align: center;font-family:Roboto;font-weight:;font-style:\"><span style=\"font-size:24px;\"><strong>Hồ sơ xin VISA Th&aacute;i Lan</strong></span></h2>\n</div>\n</div>\n\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<h4 style=\"text-align: left;\"><span style=\"font-size:14px;\"><strong>C&aacute;c hồ sơ cơ bản&nbsp;cần chuẩn bị để l&agrave;m thủ tục xin VISA Th&aacute;i Lan</strong></span></h4>\n</div>\n\n<p>&nbsp;<span style=\"font-size:14px;\">&nbsp; &nbsp;1. Hộ chiếu<br />\n&nbsp; &nbsp; 2. 02 h&igrave;nh 4&times;6 nền trắng</span></p>\n\n<div class=\"row\">\n<div class=\"wpb_wrapper\">&nbsp;</div>\n</div>\n\n<div class=\"row\">\n<div class=\"wpb_wrapper\">\n<p><strong>QUỐC TỊCH VIỆT NAM ĐƯỢC MIỄN VISA 30 NG&Agrave;Y</strong></p>\n</div>\n</div>\n\n<p>&nbsp;</p>\n\n<div class=\"row\">\n<h4 style=\"text-align: left;\"><strong><span style=\"font-size:16px;\">Hồ sơ cần chuẩn bị ri&ecirc;ng cho từng &nbsp;trường hợp sau:</span></strong></h4>\n\n<div class=\"row\">\n<div class=\"col-md-4\">\n<p><strong>1. VISA du lịch, thăm th&acirc;n</strong></p>\n\n<p>1. Chứng minh mối quan hệ</p>\n\n<p>2. Chứng minh t&agrave;i ch&iacute;nh</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>2. VISA c&ocirc;ng t&aacute;c</strong></p>\n\n<p>1. Thư mời</p>\n\n<p>2. Hồ sơ c&ocirc;ng ty b&ecirc;n Th&aacute;i Lan</p>\n\n<p>3. Hồ sơ c&ocirc;ng ty b&ecirc;n Việt Nam</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>3. VISA du học</strong></p>\n\n<p>1. Thư mời của trường</p>\n\n<p>2. Chứng minh t&agrave;i ch&iacute;nh</p>\n\n<p>3. Chứng minh c&ocirc;ng việc (nếu c&oacute;)</p>\n</div>\n\n<p>&nbsp;</p>\n</div>\n\n<div class=\"row\">\n<div class=\"col-md-4\">\n<p><strong>4. VISA kết h&ocirc;n</strong></p>\n\n<p>Li&ecirc;n hệ để tư vấn trực tiếp</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>5. VISA định cư</strong></p>\n\n<p>Kh&ocirc;ng giải quyết tại Việt Nam</p>\n</div>\n\n<p>&nbsp;</p>\n</div>\n\n<p>&nbsp;</p>\n\n<div class=\"row\">\n<p><strong>Lưu &yacute;:</strong></p>\n\n<ul>\n	<li>C&oacute; mặt tại ĐSQ/LSQ để phỏng vấn nếu c&oacute; y&ecirc;u cầu.</li>\n	<li>Hồ sơ c&oacute; thể phải bổ sung nếu c&oacute; y&ecirc;u cầu.</li>\n</ul>\n</div>\n</div>\n</div>', '2017-07-02 01:37:50', '2017-07-02 01:37:50', 6, 'vi', NULL, NULL, NULL, NULL, NULL),
(12, 'Singapore', 'Singapore', '<div class=\"row\">\n<div class=\"col-sm-12 col-md-6\"><img src=\"https://image.ibb.co/bXSgv5/thailand.jpg\" /></div>\n\n<div class=\"col-sm-6\">\n<div>\n<ul>\n	<li><span style=\"font-size:20px;\"><strong>Đại sứ qu&aacute;n Th&aacute;i Lan&nbsp;tại Việt Nam</strong></span><br />\n	Địa chỉ: 63-65 Ho&agrave;ng Diệu, H&agrave; Nội, Việt Nam.</li>\n	<li><span style=\"font-size:20px;\"><strong>L&atilde;nh&nbsp;sự qu&aacute;n Th&aacute;i Lan tại&nbsp;TP.&nbsp;Hồ Ch&iacute; Minh</strong></span><br />\n	Địa chỉ: Số&nbsp;77 Trần Quốc Thảo, Q3, TP.Hồ Ch&iacute; Minh.</li>\n</ul>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<h2 class=\"vc_custom_heading\" style=\"text-align: center;font-family:Roboto;font-weight:;font-style:\"><span style=\"font-size:24px;\"><strong>Hồ sơ xin VISA Th&aacute;i Lan</strong></span></h2>\n</div>\n</div>\n\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<h4 style=\"text-align: left;\"><span style=\"font-size:14px;\"><strong>C&aacute;c hồ sơ cơ bản&nbsp;cần chuẩn bị để l&agrave;m thủ tục xin VISA Th&aacute;i Lan</strong></span></h4>\n</div>\n\n<p>&nbsp;<span style=\"font-size:14px;\">&nbsp; &nbsp;1. Hộ chiếu<br />\n&nbsp; &nbsp; 2. 02 h&igrave;nh 4&times;6 nền trắng</span></p>\n\n<div class=\"row\">\n<div class=\"wpb_wrapper\">&nbsp;</div>\n</div>\n\n<div class=\"row\">\n<div class=\"wpb_wrapper\">\n<p><strong>QUỐC TỊCH VIỆT NAM ĐƯỢC MIỄN VISA 30 NG&Agrave;Y</strong></p>\n</div>\n</div>\n\n<p>&nbsp;</p>\n\n<div class=\"row\">\n<h4 style=\"text-align: left;\"><strong><span style=\"font-size:16px;\">Hồ sơ cần chuẩn bị ri&ecirc;ng cho từng &nbsp;trường hợp sau:</span></strong></h4>\n\n<div class=\"row\">\n<div class=\"col-md-4\">\n<p><strong>1. VISA du lịch, thăm th&acirc;n</strong></p>\n\n<p>1. Chứng minh mối quan hệ</p>\n\n<p>2. Chứng minh t&agrave;i ch&iacute;nh</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>2. VISA c&ocirc;ng t&aacute;c</strong></p>\n\n<p>1. Thư mời</p>\n\n<p>2. Hồ sơ c&ocirc;ng ty b&ecirc;n Th&aacute;i Lan</p>\n\n<p>3. Hồ sơ c&ocirc;ng ty b&ecirc;n Việt Nam</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>3. VISA du học</strong></p>\n\n<p>1. Thư mời của trường</p>\n\n<p>2. Chứng minh t&agrave;i ch&iacute;nh</p>\n\n<p>3. Chứng minh c&ocirc;ng việc (nếu c&oacute;)</p>\n</div>\n\n<p>&nbsp;</p>\n</div>\n\n<div class=\"row\">\n<div class=\"col-md-4\">\n<p><strong>4. VISA kết h&ocirc;n</strong></p>\n\n<p>Li&ecirc;n hệ để tư vấn trực tiếp</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>5. VISA định cư</strong></p>\n\n<p>Kh&ocirc;ng giải quyết tại Việt Nam</p>\n</div>\n\n<p>&nbsp;</p>\n</div>\n\n<p>&nbsp;</p>\n\n<div class=\"row\">\n<p><strong>Lưu &yacute;:</strong></p>\n\n<ul>\n	<li>C&oacute; mặt tại ĐSQ/LSQ để phỏng vấn nếu c&oacute; y&ecirc;u cầu.</li>\n	<li>Hồ sơ c&oacute; thể phải bổ sung nếu c&oacute; y&ecirc;u cầu.</li>\n</ul>\n</div>\n</div>\n</div>', '2017-07-02 01:37:50', '2017-07-02 01:37:50', 6, 'en', NULL, NULL, NULL, NULL, NULL),
(13, 'men nguyen aaa', 'dsdsds', '<div class=\"row\">\n<div class=\"col-sm-12 col-md-6\"><img src=\"https://image.ibb.co/bXSgv5/thailand.jpg\" /></div>\n\n<div class=\"col-sm-6\">\n<div>\n<ul>\n	<li><span style=\"font-size:20px;\"><strong>Đại sứ qu&aacute;n Singapore&nbsp;tại Việt Nam</strong></span><br />\n	Địa chỉ: 63-65 Ho&agrave;ng Diệu, H&agrave; Nội, Việt Nam.</li>\n	<li><span style=\"font-size:20px;\"><strong>L&atilde;nh&nbsp;sự qu&aacute;n Singapore tại&nbsp;TP.&nbsp;Hồ Ch&iacute; Minh</strong></span><br />\n	Địa chỉ: Số&nbsp;77 Trần Quốc Thảo, Q3, TP.Hồ Ch&iacute; Minh.</li>\n</ul>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<h2 class=\"vc_custom_heading\" style=\"text-align: center;font-family:Roboto;font-weight:;font-style:\"><span style=\"font-size:24px;\"><strong>Hồ sơ xin VISA Th&aacute;i Lan</strong></span></h2>\n</div>\n</div>\n\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<h4 style=\"text-align: left;\"><span style=\"font-size:14px;\"><strong>C&aacute;c hồ sơ cơ bản&nbsp;cần chuẩn bị để l&agrave;m thủ tục xin VISA Th&aacute;i Lan</strong></span></h4>\n</div>\n\n<p>&nbsp;<span style=\"font-size:14px;\">&nbsp; &nbsp;1. Hộ chiếu<br />\n&nbsp; &nbsp; 2. 02 h&igrave;nh 4&times;6 nền trắng</span></p>\n\n<div class=\"row\">\n<div class=\"wpb_wrapper\">&nbsp;</div>\n</div>\n\n<div class=\"row\">\n<div class=\"wpb_wrapper\">\n<p><strong>QUỐC TỊCH VIỆT NAM ĐƯỢC MIỄN VISA 30 NG&Agrave;Y</strong></p>\n</div>\n</div>\n\n<p>&nbsp;</p>\n\n<div class=\"row\">\n<h4 style=\"text-align: left;\"><strong><span style=\"font-size:16px;\">Hồ sơ cần chuẩn bị ri&ecirc;ng cho từng &nbsp;trường hợp sau:</span></strong></h4>\n\n<div class=\"row\">\n<div class=\"col-md-4\">\n<p><strong>1. VISA du lịch, thăm th&acirc;n</strong></p>\n\n<p>1. Chứng minh mối quan hệ</p>\n\n<p>2. Chứng minh t&agrave;i ch&iacute;nh</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>2. VISA c&ocirc;ng t&aacute;c</strong></p>\n\n<p>1. Thư mời</p>\n\n<p>2. Hồ sơ c&ocirc;ng ty b&ecirc;n Th&aacute;i Lan</p>\n\n<p>3. Hồ sơ c&ocirc;ng ty b&ecirc;n Việt Nam</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>3. VISA du học</strong></p>\n\n<p>1. Thư mời của trường</p>\n\n<p>2. Chứng minh t&agrave;i ch&iacute;nh</p>\n\n<p>3. Chứng minh c&ocirc;ng việc (nếu c&oacute;)</p>\n</div>\n\n<p>&nbsp;</p>\n</div>\n\n<div class=\"row\">\n<div class=\"col-md-4\">\n<p><strong>4. VISA kết h&ocirc;n</strong></p>\n\n<p>Li&ecirc;n hệ để tư vấn trực tiếp</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>5. VISA định cư</strong></p>\n\n<p>Kh&ocirc;ng giải quyết tại Việt Nam</p>\n</div>\n\n<p>&nbsp;</p>\n</div>\n\n<p>&nbsp;</p>\n\n<div class=\"row\">\n<p><strong>Lưu &yacute;:</strong></p>\n\n<ul>\n	<li>C&oacute; mặt tại ĐSQ/LSQ để phỏng vấn nếu c&oacute; y&ecirc;u cầu.</li>\n	<li>Hồ sơ c&oacute; thể phải bổ sung nếu c&oacute; y&ecirc;u cầu.</li>\n</ul>\n</div>\n</div>\n</div>', '2017-07-02 04:25:07', '2017-07-02 05:02:43', 7, 'vi', NULL, NULL, NULL, NULL, NULL),
(14, 'men nguyen bbbb', 'adfsdfsd', '<div class=\"row\">\n<div class=\"col-sm-12 col-md-6\"><img src=\"https://image.ibb.co/bXSgv5/thailand.jpg\" /></div>\n\n<div class=\"col-sm-6\">\n<div>\n<ul>\n	<li><span style=\"font-size:20px;\"><strong>Đại sứ qu&aacute;n Th&aacute;i Lan&nbsp;tại Việt Nam</strong></span><br />\n	Địa chỉ: 63-65 Ho&agrave;ng Diệu, H&agrave; Nội, Việt Nam.</li>\n	<li><span style=\"font-size:20px;\"><strong>L&atilde;nh&nbsp;sự qu&aacute;n Th&aacute;i Lan tại&nbsp;TP.&nbsp;Hồ Ch&iacute; Minh</strong></span><br />\n	Địa chỉ: Số&nbsp;77 Trần Quốc Thảo, Q3, TP.Hồ Ch&iacute; Minh.</li>\n</ul>\n</div>\n</div>\n</div>\n\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<h2 class=\"vc_custom_heading\" style=\"text-align: center;font-family:Roboto;font-weight:;font-style:\"><span style=\"font-size:24px;\"><strong>Hồ sơ xin VISA Th&aacute;i Lan</strong></span></h2>\n</div>\n</div>\n\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<h4 style=\"text-align: left;\"><span style=\"font-size:14px;\"><strong>C&aacute;c hồ sơ cơ bản&nbsp;cần chuẩn bị để l&agrave;m thủ tục xin VISA Th&aacute;i Lan</strong></span></h4>\n</div>\n\n<p>&nbsp;<span style=\"font-size:14px;\">&nbsp; &nbsp;1. Hộ chiếu<br />\n&nbsp; &nbsp; 2. 02 h&igrave;nh 4&times;6 nền trắng</span></p>\n\n<div class=\"row\">\n<div class=\"wpb_wrapper\">&nbsp;</div>\n</div>\n\n<div class=\"row\">\n<div class=\"wpb_wrapper\">\n<p><strong>QUỐC TỊCH VIỆT NAM ĐƯỢC MIỄN VISA 30 NG&Agrave;Y</strong></p>\n</div>\n</div>\n\n<p>&nbsp;</p>\n\n<div class=\"row\">\n<h4 style=\"text-align: left;\"><strong><span style=\"font-size:16px;\">Hồ sơ cần chuẩn bị ri&ecirc;ng cho từng &nbsp;trường hợp sau:</span></strong></h4>\n\n<div class=\"row\">\n<div class=\"col-md-4\">\n<p><strong>1. VISA du lịch, thăm th&acirc;n</strong></p>\n\n<p>1. Chứng minh mối quan hệ</p>\n\n<p>2. Chứng minh t&agrave;i ch&iacute;nh</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>2. VISA c&ocirc;ng t&aacute;c</strong></p>\n\n<p>1. Thư mời</p>\n\n<p>2. Hồ sơ c&ocirc;ng ty b&ecirc;n Th&aacute;i Lan</p>\n\n<p>3. Hồ sơ c&ocirc;ng ty b&ecirc;n Việt Nam</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>3. VISA du học</strong></p>\n\n<p>1. Thư mời của trường</p>\n\n<p>2. Chứng minh t&agrave;i ch&iacute;nh</p>\n\n<p>3. Chứng minh c&ocirc;ng việc (nếu c&oacute;)</p>\n</div>\n\n<p>&nbsp;</p>\n</div>\n\n<div class=\"row\">\n<div class=\"col-md-4\">\n<p><strong>4. VISA kết h&ocirc;n</strong></p>\n\n<p>Li&ecirc;n hệ để tư vấn trực tiếp</p>\n</div>\n\n<div class=\"col-md-4\">\n<p><strong>5. VISA định cư</strong></p>\n\n<p>Kh&ocirc;ng giải quyết tại Việt Nam</p>\n</div>\n\n<p>&nbsp;</p>\n</div>\n\n<p>&nbsp;</p>\n\n<div class=\"row\">\n<p><strong>Lưu &yacute;:</strong></p>\n\n<ul>\n	<li>C&oacute; mặt tại ĐSQ/LSQ để phỏng vấn nếu c&oacute; y&ecirc;u cầu.</li>\n	<li>Hồ sơ c&oacute; thể phải bổ sung nếu c&oacute; y&ecirc;u cầu.</li>\n</ul>\n</div>\n</div>\n</div>', '2017-07-02 04:25:07', '2017-07-02 05:02:43', 7, 'en', NULL, NULL, NULL, NULL, NULL),
(15, 'dfgfd', 'dfgdf', '<p>4534534</p>', '2017-07-04 10:52:13', '2017-07-04 11:03:44', 8, 'vi', NULL, '<p>555555555555555555555555</p>', '<ul>\n	<li>43546765dfgfdg</li>\n	<li>df</li>\n	<li>gfd</li>\n	<li>g</li>\n	<li>df</li>\n	<li>g</li>\n</ul>', '<ul>\n	<li>67689707</li>\n	<li>345345345</li>\n	<li>fgfhgfh</li>\n	<li>dfgdfgdf</li>\n	<li>dfg</li>\n	<li>df</li>\n	<li>g</li>\n	<li>df</li>\n	<li>g</li>\n</ul>', '<p>345345345</p>\n\n<p>fgfhgfh</p>\n\n<p>dfgdfgdf</p>\n\n<p>dfg</p>\n\n<p>df</p>\n\n<p>g</p>\n\n<p>df</p>\n\n<p>g</p>'),
(16, 'fgdfg', '345345', '<p>ghghghg</p>', '2017-07-04 10:52:13', '2017-07-04 11:03:44', 8, 'en', NULL, '<p>dfsdfsdfsdfs</p>', '<ul>\n	<li>fsdfsd</li>\n	<li>dfgdfg</li>\n	<li>gfdfgdf</li>\n	<li>sdfdsfs</li>\n</ul>', '<p>345345345</p>\n\n<p>fgfhgfh</p>\n\n<p>dfgdfgdf</p>\n\n<p>dfg</p>\n\n<p>df</p>\n\n<p>g</p>\n\n<p>df</p>\n\n<p>g</p>', '<p>345345345</p>\n\n<p>fgfhgfh</p>\n\n<p>dfgdfgdf</p>\n\n<p>dfg</p>\n\n<p>df</p>\n\n<p>g</p>\n\n<p>df</p>\n\n<p>g</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_translation`
--
ALTER TABLE `banner_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banner_translation_banner_id_foreign` (`banner_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_translation`
--
ALTER TABLE `food_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_translation_food_id_foreign` (`food_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_category_translation`
--
ALTER TABLE `news_category_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_category_translation_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `news_translation`
--
ALTER TABLE `news_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_translation_new_id_foreign` (`new_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_province_id_foreign` (`province_id`);

--
-- Indexes for table `place_translation`
--
ALTER TABLE `place_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_translation_place_id_foreign` (`place_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province_translation`
--
ALTER TABLE `province_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `province_translation_province_id_foreign` (`province_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_translation`
--
ALTER TABLE `service_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_translation_service_id_foreign` (`service_id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_food`
--
ALTER TABLE `tour_food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_food_tour_id_foreign` (`tour_id`);

--
-- Indexes for table `tour_place`
--
ALTER TABLE `tour_place`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_place_tour_id_foreign` (`tour_id`);

--
-- Indexes for table `tour_translation`
--
ALTER TABLE `tour_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_translation_tour_id_foreign` (`tour_id`);

--
-- Indexes for table `tour_type`
--
ALTER TABLE `tour_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_type_translation`
--
ALTER TABLE `tour_type_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_type_translation_tour_type_id_foreign` (`tour_type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa`
--
ALTER TABLE `visa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visa_visa_cate_id_foreign` (`visa_cate_id`);

--
-- Indexes for table `visa_category`
--
ALTER TABLE `visa_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa_category_translation`
--
ALTER TABLE `visa_category_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visa_category_translation_visa_category_id_foreign` (`visa_category_id`);

--
-- Indexes for table `visa_translation`
--
ALTER TABLE `visa_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visa_translation_visa_id_foreign` (`visa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banner_translation`
--
ALTER TABLE `banner_translation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `food_translation`
--
ALTER TABLE `food_translation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_category_translation`
--
ALTER TABLE `news_category_translation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_translation`
--
ALTER TABLE `news_translation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `place_translation`
--
ALTER TABLE `place_translation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `province_translation`
--
ALTER TABLE `province_translation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `service_translation`
--
ALTER TABLE `service_translation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tour_food`
--
ALTER TABLE `tour_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tour_place`
--
ALTER TABLE `tour_place`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tour_translation`
--
ALTER TABLE `tour_translation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tour_type`
--
ALTER TABLE `tour_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tour_type_translation`
--
ALTER TABLE `tour_type_translation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `visa`
--
ALTER TABLE `visa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `visa_category`
--
ALTER TABLE `visa_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `visa_category_translation`
--
ALTER TABLE `visa_category_translation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `visa_translation`
--
ALTER TABLE `visa_translation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `banner_translation`
--
ALTER TABLE `banner_translation`
  ADD CONSTRAINT `banner_translation_banner_id_foreign` FOREIGN KEY (`banner_id`) REFERENCES `banner` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `food_translation`
--
ALTER TABLE `food_translation`
  ADD CONSTRAINT `food_translation_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `place` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news_category_translation`
--
ALTER TABLE `news_category_translation`
  ADD CONSTRAINT `news_category_translation_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `news_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news_translation`
--
ALTER TABLE `news_translation`
  ADD CONSTRAINT `news_translation_new_id_foreign` FOREIGN KEY (`new_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `place_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `province` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `place_translation`
--
ALTER TABLE `place_translation`
  ADD CONSTRAINT `place_translation_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `province_translation`
--
ALTER TABLE `province_translation`
  ADD CONSTRAINT `province_translation_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `province` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_translation`
--
ALTER TABLE `service_translation`
  ADD CONSTRAINT `service_translation_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_food`
--
ALTER TABLE `tour_food`
  ADD CONSTRAINT `tour_food_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_place`
--
ALTER TABLE `tour_place`
  ADD CONSTRAINT `tour_place_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_translation`
--
ALTER TABLE `tour_translation`
  ADD CONSTRAINT `tour_translation_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_type_translation`
--
ALTER TABLE `tour_type_translation`
  ADD CONSTRAINT `tour_type_translation_tour_type_id_foreign` FOREIGN KEY (`tour_type_id`) REFERENCES `tour_type` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `visa`
--
ALTER TABLE `visa`
  ADD CONSTRAINT `visa_visa_cate_id_foreign` FOREIGN KEY (`visa_cate_id`) REFERENCES `visa_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `visa_category_translation`
--
ALTER TABLE `visa_category_translation`
  ADD CONSTRAINT `visa_category_translation_visa_category_id_foreign` FOREIGN KEY (`visa_category_id`) REFERENCES `visa_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `visa_translation`
--
ALTER TABLE `visa_translation`
  ADD CONSTRAINT `visa_translation_visa_id_foreign` FOREIGN KEY (`visa_id`) REFERENCES `visa` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
