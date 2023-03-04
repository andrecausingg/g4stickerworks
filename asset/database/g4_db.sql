-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 01:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g4_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_page_tbl`
--

CREATE TABLE `about_us_page_tbl` (
  `about_us_page_id` int(11) NOT NULL,
  `sub_title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us_page_tbl`
--

INSERT INTO `about_us_page_tbl` (`about_us_page_id`, `sub_title`, `image`, `created_at_varchar`, `created_at`) VALUES
(1, 'Gabriel 4 Sticker Shop (G4 Sticker Works) is a printing and installation business which caters any type of sticker and tarpaulin needs of clients for personal or business purpose. Our 6 years of experience has enabled us to provide the best possible designing , printing and installation where we focus to quality resulting in satisfied client and have lasting business relationships. The foundation of our business is integrity, honesty and client relationship.', '', 'Mar 03, 2023 03:53:52 PM', '2023-03-03 15:53:52'),
(2, '', '6401a8129aada4.40780902.jpg', 'Mar 03, 2023 03:55:13 PM', '2023-03-03 15:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `all_footer_tbl`
--

CREATE TABLE `all_footer_tbl` (
  `all_footer_id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `tiktok` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cellphone_num` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_footer_tbl`
--

INSERT INTO `all_footer_tbl` (`all_footer_id`, `facebook`, `tiktok`, `instagram`, `email`, `cellphone_num`, `address`, `created_at_varchar`, `created_at`) VALUES
(3, '', '', 'https://www.instagram.com/g4_sticker_work/', '', '', '', 'Feb 27, 2023 08:14:40 PM', '2023-02-27 20:14:40'),
(4, '', '', '', 'g4kids2019@gmail.com', '', '', 'Feb 27, 2023 08:45:08 PM', '2023-02-27 20:45:08'),
(18, '', '', '', '', '09123456799', '', 'Feb 28, 2023 02:52:30 PM', '2023-02-28 14:52:30'),
(26, '', 'https://www.tiktok.com/@g4stickerwork/', '', '', '', '', 'Feb 28, 2023 06:34:27 PM', '2023-02-28 18:34:27'),
(42, '', '', '', '', '', 'Blk2 Lot7 Sarmiento Homes, Muzon, San Jose del Monte City, Bulacan, San Jose del Monte, Philippines 0932 350 8154', 'Mar 01, 2023 02:21:08 PM', '2023-03-01 14:21:08'),
(44, 'https://www.facebook.com/G4StickerWorks/', '', '', '', '', '', 'Mar 03, 2023 01:12:18 PM', '2023-03-03 13:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `cut_file_tbl`
--

CREATE TABLE `cut_file_tbl` (
  `cut_file_id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `job_no` int(11) NOT NULL,
  `create_at_varchar` varchar(255) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cut_file_tbl`
--

INSERT INTO `cut_file_tbl` (`cut_file_id`, `job_name`, `job_no`, `create_at_varchar`, `create_at`) VALUES
(1, 'byahen botnie', 2043, 'Mar 03, 2023 05:38:33 PM', '2023-03-03 17:38:33'),
(2, 'north kings', 2049, 'Mar 03, 2023 05:39:00 PM', '2023-03-03 17:39:00'),
(4, '126 133', 2052, 'Mar 03, 2023 05:40:25 PM', '2023-03-03 17:40:25'),
(5, 'north kings R6', 2051, 'Mar 03, 2023 05:40:33 PM', '2023-03-03 17:40:33'),
(6, 'r6 70pos.', 2053, 'Mar 03, 2023 05:40:40 PM', '2023-03-03 17:40:40'),
(7, 'eagles holo 28sets', 2054, 'Mar 03, 2023 05:40:54 PM', '2023-03-03 17:40:54'),
(8, 'rnt red oval 273pcs', 2058, 'Mar 03, 2023 05:41:00 PM', '2023-03-03 17:41:00'),
(9, 'hinirbog sandigan', 2069, 'Mar 03, 2023 05:41:09 PM', '2023-03-03 17:41:09'),
(10, 'motor ni juan black', 2073, 'Mar 03, 2023 05:41:15 PM', '2023-03-03 17:41:15'),
(11, 'eswell 36pcs', 2080, 'Mar 03, 2023 05:41:23 PM', '2023-03-03 17:41:23'),
(12, 'motoronda 105pcs', 1819, 'Mar 03, 2023 05:41:29 PM', '2023-03-03 17:41:29'),
(13, 'pusong matulungin', 1108, 'Mar 03, 2023 05:41:35 PM', '2023-03-03 17:41:35'),
(14, 'pawer wheels', 1820, 'Mar 03, 2023 05:41:41 PM', '2023-03-03 17:41:41'),
(15, 'fermata', 945, 'Mar 03, 2023 05:42:42 PM', '2023-03-03 17:42:42'),
(16, 'west new katagumpay', 2187, 'Mar 03, 2023 05:42:51 PM', '2023-03-03 17:42:51'),
(17, 'rolin motovlog', 1661, 'Mar 03, 2023 05:42:56 PM', '2023-03-03 17:42:56'),
(18, 'daddy j 199pcs', 2200, 'Mar 03, 2023 05:43:03 PM', '2023-03-03 17:43:03'),
(19, 'daddy konsi', 2201, 'Mar 03, 2023 05:43:09 PM', '2023-03-03 17:43:09'),
(20, 'kons vlog eagles 212pcs', 2205, 'Mar 03, 2023 05:43:15 PM', '2023-03-03 17:43:15'),
(21, 'paes ashie 172pcs', 2207, 'Mar 03, 2023 05:43:20 PM', '2023-03-03 17:43:20'),
(22, 'fassio', 1894, 'Mar 03, 2023 05:43:36 PM', '2023-03-03 17:43:36'),
(23, 'eagles 5x5', 1977, 'Mar 03, 2023 05:43:52 PM', '2023-03-03 17:43:52'),
(24, 'latagam 114', 2309, 'Mar 03, 2023 05:43:57 PM', '2023-03-03 17:43:57'),
(25, 'papapau 133', 2329, 'Mar 03, 2023 05:44:03 PM', '2023-03-03 17:44:03'),
(26, 'bulacan street scene', 2336, 'Mar 03, 2023 05:44:10 PM', '2023-03-03 17:44:10'),
(27, 'voge black', 2337, 'Mar 03, 2023 05:44:15 PM', '2023-03-03 17:44:15'),
(28, 'voge silver', 2339, 'Mar 03, 2023 05:44:22 PM', '2023-03-03 17:44:22'),
(29, 'eagles 3x3 96pcs', 2345, 'Mar 03, 2023 05:44:28 PM', '2023-03-03 17:44:28'),
(30, 'pcso 75pcs', 1643, 'Mar 03, 2023 05:44:34 PM', '2023-03-03 17:44:34'),
(31, 'pcso 25pcs', 1644, 'Mar 03, 2023 05:44:39 PM', '2023-03-03 17:44:39'),
(32, 'papadims 108pcs', 1641, 'Mar 03, 2023 05:44:44 PM', '2023-03-03 17:44:44'),
(33, 'new mrrd 108', 2399, 'Mar 03, 2023 05:44:50 PM', '2023-03-03 17:44:50'),
(34, 'kabalyero 54', 2400, 'Mar 03, 2023 05:44:57 PM', '2023-03-03 17:44:57'),
(35, 'motor ni juan colored', 1387, 'Mar 03, 2023 05:45:02 PM', '2023-03-03 17:45:02'),
(36, 'eagles 4x4', 2432, 'Mar 03, 2023 05:45:08 PM', '2023-03-03 17:45:08'),
(37, 'eagles 3x3', 2433, 'Mar 03, 2023 05:45:14 PM', '2023-03-03 17:45:14'),
(38, 'motor ni juan 135pcs', 944, 'Mar 03, 2023 05:45:21 PM', '2023-03-03 17:45:21'),
(39, 'g4 isang banig', 990, 'Mar 03, 2023 05:46:04 PM', '2023-03-03 17:46:04'),
(40, 'yes ser 204pcs', 2175, 'Mar 03, 2023 05:46:53 PM', '2023-03-03 17:46:53'),
(41, 'peach puff pizzulu 25pcs', 1746, 'Mar 03, 2023 05:47:23 PM', '2023-03-03 17:47:23'),
(42, 'peanut 1', 1973, 'Mar 03, 2023 05:47:37 PM', '2023-03-03 17:47:37'),
(43, 'peanut 2', 1974, 'Mar 03, 2023 05:47:44 PM', '2023-03-03 17:47:44'),
(44, 'aperitif peheating sticker 104pcs', 2460, 'Mar 03, 2023 05:48:12 PM', '2023-03-03 17:48:12'),
(45, 'heneral 23pcs', 2475, 'Mar 03, 2023 05:48:31 PM', '2023-03-03 17:48:31'),
(46, 'heneral kamote 168pcs', 2479, 'Mar 03, 2023 05:48:51 PM', '2023-03-03 17:48:51'),
(47, 'rabi motovlog 114pcs', 2499, 'Mar 03, 2023 05:49:07 PM', '2023-03-03 17:49:07'),
(48, 'new moto patrol 126pcs', 2507, 'Mar 03, 2023 05:49:21 PM', '2023-03-03 17:49:21'),
(50, 'moto patrol 120pcs new', 2509, 'Mar 03, 2023 05:50:07 PM', '2023-03-03 17:50:07'),
(51, 'papap 195pcs', 1000, 'Mar 03, 2023 05:50:40 PM', '2023-03-03 17:50:40'),
(52, 'bernadette reyes cisch 133pcs', 2590, 'Mar 03, 2023 05:51:24 PM', '2023-03-03 17:51:24'),
(53, 'nuvista orange 160pcs 1251', 2604, 'Mar 03, 2023 05:51:49 PM', '2023-03-03 17:51:49'),
(54, 'nuvista orange 160pcs 251-410', 2605, 'Mar 03, 2023 05:52:04 PM', '2023-03-03 17:52:04'),
(55, 'juan moto gox 140pcs', 1388, 'Mar 03, 2023 05:52:28 PM', '2023-03-03 17:52:28'),
(56, 'z1 135 pcs', 2625, 'Mar 03, 2023 05:52:37 PM', '2023-03-03 17:52:37'),
(57, 'eagles 5x5', 1677, 'Mar 03, 2023 05:52:46 PM', '2023-03-03 17:52:46'),
(58, 'safety moto vlog 108 pcs', 2635, 'Mar 03, 2023 05:53:02 PM', '2023-03-03 17:53:02'),
(59, 'gtam bayan 154pcs', 2638, 'Mar 03, 2023 05:53:20 PM', '2023-03-03 17:53:20'),
(60, 'salpuraomit 140pcs', 2639, 'Mar 03, 2023 05:53:32 PM', '2023-03-03 17:53:32'),
(61, 'gtam bayan 168', 2640, 'Mar 03, 2023 05:53:51 PM', '2023-03-03 17:53:51'),
(62, 'peach puff pizzulu 25pcs', 1746, 'Mar 03, 2023 05:54:04 PM', '2023-03-03 17:54:04'),
(63, 'tol marvs', 2676, 'Mar 03, 2023 05:54:10 PM', '2023-03-03 17:54:10'),
(64, 'calamansi green', 2686, 'Mar 03, 2023 05:54:30 PM', '2023-03-03 17:54:30'),
(65, 'calamansi yellow', 2687, 'Mar 03, 2023 05:54:40 PM', '2023-03-03 17:54:40'),
(66, 'rht red 81 pcs', 1931, 'Mar 03, 2023 05:54:47 PM', '2023-03-03 17:54:47'),
(67, 'calamansi 1liter', 2765, 'Mar 03, 2023 05:54:56 PM', '2023-03-03 17:54:56'),
(68, 'vlnx new 104pcs', 2296, 'Mar 03, 2023 05:55:05 PM', '2023-03-03 17:55:05'),
(69, 'angkas 133pcss', 2782, 'Mar 03, 2023 05:55:17 PM', '2023-03-03 17:55:17'),
(70, 'voge black', 2337, 'Mar 03, 2023 05:55:36 PM', '2023-03-03 17:55:36'),
(71, 'truepa moto 166pcs', 2300, 'Mar 03, 2023 05:55:48 PM', '2023-03-03 17:55:48'),
(72, 'moto honda 5404', 2820, 'Mar 03, 2023 05:56:13 PM', '2023-03-03 17:56:13'),
(73, 'krus kuatro 90pcs', 2836, 'Mar 03, 2023 05:56:22 PM', '2023-03-03 17:56:22'),
(74, 'joyeux 21pcs', 2837, 'Mar 03, 2023 05:56:44 PM', '2023-03-03 17:56:44'),
(75, 'katagumpay moto 612pcs', 2896, 'Mar 03, 2023 05:57:13 PM', '2023-03-03 17:57:13'),
(76, 'kaka 1.5 x 1.5 300pcs', 2897, 'Mar 03, 2023 05:57:32 PM', '2023-03-03 17:57:32'),
(77, 'rich r', 2927, 'Mar 03, 2023 05:57:41 PM', '2023-03-03 17:57:41'),
(78, 'rht red oval 273pcs', 2058, 'Mar 03, 2023 05:57:53 PM', '2023-03-03 17:57:53'),
(79, 'motoronda 401-519', 3129, 'Mar 03, 2023 05:58:50 PM', '2023-03-03 17:58:50'),
(80, 'motoronda 520-1563', 3130, 'Mar 03, 2023 05:59:01 PM', '2023-03-03 17:59:01'),
(81, 'motoronda 1464-003', 3131, 'Mar 03, 2023 05:59:17 PM', '2023-03-03 17:59:17'),
(82, 'mechanic', 3145, 'Mar 03, 2023 05:59:29 PM', '2023-03-03 17:59:29'),
(83, 'road', 3174, 'Mar 03, 2023 05:59:42 PM', '2023-03-03 17:59:42'),
(84, 'sweet aces 108pcs', 3172, 'Mar 03, 2023 05:59:54 PM', '2023-03-03 17:59:54'),
(85, 'norms 101pcs', 1892, 'Mar 03, 2023 06:00:03 PM', '2023-03-03 18:00:03'),
(86, 'konsi vlog', 1462, 'Mar 03, 2023 06:00:12 PM', '2023-03-03 18:00:12'),
(87, 'rht red 800pcs', 2378, 'Mar 03, 2023 06:00:24 PM', '2023-03-03 18:00:24'),
(88, 'boyp240pcs', 3299, 'Mar 03, 2023 06:00:46 PM', '2023-03-03 18:00:46'),
(89, 'eagles banig', 1453, 'Mar 03, 2023 06:01:31 PM', '2023-03-03 18:01:31'),
(90, 'peach puff pizzulu 25pcs', 1746, 'Mar 03, 2023 06:01:46 PM', '2023-03-03 18:01:46'),
(91, 'calamansi concentrate 120pcs', 2934, 'Mar 03, 2023 06:01:59 PM', '2023-03-03 18:01:59'),
(92, 'pure calamansi 115pcs', 1852, 'Mar 03, 2023 06:02:15 PM', '2023-03-03 18:02:15'),
(93, 'francisco homes 2023', 3200, 'Mar 03, 2023 06:02:25 PM', '2023-03-03 18:02:25'),
(94, 'franscisco homes center', 3204, 'Mar 03, 2023 06:02:36 PM', '2023-03-03 18:02:36'),
(95, 'calamansi juice 180 pcs', 3460, 'Mar 03, 2023 06:02:49 PM', '2023-03-03 18:02:49'),
(96, 'motor ni juan 125pcs', 1387, 'Mar 03, 2023 06:03:01 PM', '2023-03-03 18:03:01'),
(97, 'marlon sticker 65pcs 3x3', 3442, 'Mar 03, 2023 06:03:21 PM', '2023-03-03 18:03:21'),
(98, 'sticker-sale-1', 3481, 'Mar 03, 2023 06:03:30 PM', '2023-03-03 18:03:30'),
(99, 'sticker-sale-2', 3483, 'Mar 03, 2023 06:03:46 PM', '2023-03-03 18:03:46'),
(100, 'sticker-sale-3', 3484, 'Mar 03, 2023 06:03:52 PM', '2023-03-03 18:03:52'),
(101, 'marlon sticker 144pcs 2x2', 3455, 'Mar 03, 2023 06:04:07 PM', '2023-03-03 18:04:07'),
(102, 'agas 133pcs 2.5x2.5', 3485, 'Mar 03, 2023 06:04:18 PM', '2023-03-03 18:04:18'),
(103, 'narslogo 133pcs 12.5x2.5', 3503, 'Mar 03, 2023 06:04:35 PM', '2023-03-03 18:04:35'),
(104, 'sticker-sale-4 one piec', 3541, 'Mar 03, 2023 06:04:52 PM', '2023-03-03 18:04:52'),
(105, 'thai-sticker-1', 3382, 'Mar 03, 2023 06:05:10 PM', '2023-03-03 18:05:10'),
(106, 'thai-sticker-2', 3383, 'Mar 03, 2023 06:05:16 PM', '2023-03-03 18:05:16'),
(107, 'thai-sticker-3', 3384, 'Mar 03, 2023 06:05:23 PM', '2023-03-03 18:05:23'),
(108, 'sticker-sale-4-peek', 3516, 'Mar 03, 2023 06:05:33 PM', '2023-03-03 18:05:33'),
(109, 'fresh-harvest-mango-2liters-85pcs', 3568, 'Mar 03, 2023 06:05:47 PM', '2023-03-03 18:05:47'),
(110, 'sticker-sale-5-brand', 3575, 'Mar 03, 2023 06:06:11 PM', '2023-03-03 18:06:11'),
(111, 'ea 108pcs', 3601, 'Mar 03, 2023 06:06:36 PM', '2023-03-03 18:06:36'),
(112, 'don-vertos-tv-90pcs', 3637, 'Mar 03, 2023 06:06:57 PM', '2023-03-03 18:06:57'),
(113, 'rht-red-400pcs', 2379, 'Mar 03, 2023 06:07:06 PM', '2023-03-03 18:07:06'),
(114, 'nuvistahoa-600-718-car', 3741, 'Mar 03, 2023 06:07:25 PM', '2023-03-03 18:07:25'),
(115, 'nuvistahoa-719-837-car', 3744, 'Mar 03, 2023 06:07:41 PM', '2023-03-03 18:07:41'),
(116, 'nuvistahoa-838-956-car', 3747, 'Mar 03, 2023 06:07:56 PM', '2023-03-03 18:07:56'),
(117, 'nuvistahoa-957-1000-car-2001-2075-motor', 3750, 'Mar 03, 2023 06:08:33 PM', '2023-03-03 18:08:33'),
(118, 'nuvistahoa-2076-2194-motor', 3751, 'Mar 03, 2023 06:08:50 PM', '2023-03-03 18:08:50'),
(119, 'nuvistahoa-2195-2313-motor', 3752, 'Mar 03, 2023 06:09:03 PM', '2023-03-03 18:09:03'),
(120, 'nuvistahoa-2314-2432-motor', 3754, 'Mar 03, 2023 06:09:16 PM', '2023-03-03 18:09:16'),
(121, 'nanz 576pcs', 3727, 'Mar 03, 2023 06:09:33 PM', '2023-03-03 18:09:33'),
(122, 'nuvistahoa-2433-2551-motor', 3755, 'Mar 03, 2023 06:10:01 PM', '2023-03-03 18:10:01'),
(123, 'add-nuvistahoa-2405-2432-motor', 3796, 'Mar 03, 2023 06:10:16 PM', '2023-03-03 18:10:16'),
(124, 'gptx speed 128', 3612, 'Mar 03, 2023 06:10:25 PM', '2023-03-03 18:10:25'),
(125, 'gaya 102pcs', 3764, 'Mar 03, 2023 06:10:36 PM', '2023-03-03 18:10:36'),
(126, 'robin moto vlog 126', 3554, 'Mar 03, 2023 06:10:46 PM', '2023-03-03 18:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_page_tbl`
--

CREATE TABLE `gallery_page_tbl` (
  `gallery_page_id` int(11) NOT NULL,
  `caption` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_page_tbl`
--

INSERT INTO `gallery_page_tbl` (`gallery_page_id`, `caption`, `image`, `created_at_varchar`, `created_at`) VALUES
(8, 'Looking for a reliable printing service for your business needs? Look no further than our shop. Our high-quality prints are sure to make your business stand out, whether you need business cards, flyers, or brochures. Using the latest printing technology, we ensure that your prints are vibrant and crisp, and our printing experts can assist with design and layout to create a professional and eye-catching final product. Fast turnaround times and competitive pricing make us the go-to printing solution for businesses of all sizes. Trust us to handle all your printing needs with the utmost care and attention to detail.', '', 'Mar 03, 2023 03:33:44 PM', '2023-03-03 15:33:44'),
(10, '', '6401aa97899655.28756253.jpg', 'Mar 03, 2023 04:06:47 PM', '2023-03-03 16:06:47'),
(11, '', '6401aa9b43dff0.13231437.jpg', 'Mar 03, 2023 04:06:51 PM', '2023-03-03 16:06:51'),
(12, '', '6401aa9d79fd27.97937089.jpg', 'Mar 03, 2023 04:06:53 PM', '2023-03-03 16:06:53'),
(13, '', '6401aa9f9b4fc7.82034501.jpg', 'Mar 03, 2023 04:06:55 PM', '2023-03-03 16:06:55'),
(14, '', '6401aaa1de2406.91285324.jpg', 'Mar 03, 2023 04:06:57 PM', '2023-03-03 16:06:57'),
(15, '', '6401aaa43e7f24.35836009.jpg', 'Mar 03, 2023 04:07:00 PM', '2023-03-03 16:07:00'),
(16, '', '6401aaa8520f51.82207732.jpg', 'Mar 03, 2023 04:07:04 PM', '2023-03-03 16:07:04'),
(17, '', '6401aaaa827510.07452434.jpg', 'Mar 03, 2023 04:07:06 PM', '2023-03-03 16:07:06'),
(18, '', '6401aaadbc0513.86131870.jpg', 'Mar 03, 2023 04:07:09 PM', '2023-03-03 16:07:09'),
(19, '', '6401aab0addec1.01503950.jpg', 'Mar 03, 2023 04:07:12 PM', '2023-03-03 16:07:12'),
(20, '', '6401aab5464439.53154062.jpg', 'Mar 03, 2023 04:07:17 PM', '2023-03-03 16:07:17'),
(21, '', '6401aab92b74c9.77015741.jpg', 'Mar 03, 2023 04:07:21 PM', '2023-03-03 16:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `email`, `password`, `role`, `created_at_varchar`, `created_at`) VALUES
(16, 'a@gmail.com', 'asdasdasdasda', 'admin', 'Feb 25, 2023 05:35:51 PM', '2023-02-25 17:35:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_page_tbl`
--
ALTER TABLE `about_us_page_tbl`
  ADD PRIMARY KEY (`about_us_page_id`);

--
-- Indexes for table `all_footer_tbl`
--
ALTER TABLE `all_footer_tbl`
  ADD PRIMARY KEY (`all_footer_id`);

--
-- Indexes for table `cut_file_tbl`
--
ALTER TABLE `cut_file_tbl`
  ADD PRIMARY KEY (`cut_file_id`);

--
-- Indexes for table `gallery_page_tbl`
--
ALTER TABLE `gallery_page_tbl`
  ADD PRIMARY KEY (`gallery_page_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us_page_tbl`
--
ALTER TABLE `about_us_page_tbl`
  MODIFY `about_us_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `all_footer_tbl`
--
ALTER TABLE `all_footer_tbl`
  MODIFY `all_footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `cut_file_tbl`
--
ALTER TABLE `cut_file_tbl`
  MODIFY `cut_file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `gallery_page_tbl`
--
ALTER TABLE `gallery_page_tbl`
  MODIFY `gallery_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
