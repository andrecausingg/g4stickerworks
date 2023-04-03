-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 08:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us_page_tbl`
--

INSERT INTO `about_us_page_tbl` (`about_us_page_id`, `sub_title`, `image`, `created_at_varchar`, `created_at`) VALUES
(1, 'Our printing service specializes in providing high-quality printing solutions for businesses of all sizes. With state-of-the-art printing technology and a team of experienced professionals, we offer a wide range of printing services including flyers, brochures, business cards, and more. We are committed to delivering exceptional results on time and within budget, and we pride ourselves on our attention to detail and personalized customer service. Whether you need a small print run or a large-scale project, we are here to help you achieve your printing goals.', '', 'Mar 09, 2023 08:50:43 PM', '2023-03-09 20:50:43'),
(2, '', '6409d6f270ec98.69372437.jpg', 'Mar 09, 2023 08:54:10 PM', '2023-03-09 20:54:10');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_footer_tbl`
--

INSERT INTO `all_footer_tbl` (`all_footer_id`, `facebook`, `tiktok`, `instagram`, `email`, `cellphone_num`, `address`, `created_at_varchar`, `created_at`) VALUES
(3, '', '', 'https://www.instagram.com/g4_sticker_work/', '', '', '', 'Feb 27, 2023 08:14:40 PM', '2023-02-27 20:14:40'),
(4, '', '', '', 'g4kids2019@gmail.com', '', '', 'Feb 27, 2023 08:45:08 PM', '2023-02-27 20:45:08'),
(18, '', '', '', '', '09123456799', '', 'Feb 28, 2023 02:52:30 PM', '2023-02-28 14:52:30'),
(26, '', 'https://www.tiktok.com/@g4stickerwork/', '', '', '', '', 'Feb 28, 2023 06:34:27 PM', '2023-02-28 18:34:27'),
(42, '', '', '', '', '', 'Blk2 Lot7 Sarmiento Homes, Muzon, San Jose del Monte City, Bulacan, San Jose del Monte, Philippines 0932 350 8154', 'Mar 01, 2023 02:21:08 PM', '2023-03-01 14:21:08'),
(44, 'https://www.facebook.com/G4StickerWorks', '', '', '', '', '', 'Mar 03, 2023 01:12:18 PM', '2023-03-03 13:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_table_name` varchar(255) NOT NULL,
  `order_table_id` int(11) NOT NULL,
  `status_order` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_page_tbl`
--

CREATE TABLE `contact_us_page_tbl` (
  `contact_us_page_id` int(11) NOT NULL,
  `sub_title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us_page_tbl`
--

INSERT INTO `contact_us_page_tbl` (`contact_us_page_id`, `sub_title`, `image`, `created_at_varchar`, `created_at`) VALUES
(1, 'At our company, we value communication and are always eager to hear from our clients. Whether you have questions about our services, need a quote, or just want to say hello, we encourage you to get in touch. You can reach us by phone, email, or through our Social Media Pages. Our friendly and knowledgeable team is available to assist you with any inquiries you may have, and we strive to respond to all messages as quickly as possible. We look forward to hearing from you and working together to achieve your goals. Contact us today and let us start a conversation!', '', 'Mar 09, 2023 08:51:06 PM', '2023-03-09 20:51:06');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(126, 'robin moto vlog 126', 3554, 'Mar 03, 2023 06:10:46 PM', '2023-03-03 18:10:46'),
(127, 'robin vlog 100 pcs', 3548, 'Mar 04, 2023 03:48:52 PM', '2023-03-04 15:48:52'),
(128, 'macky tv', 1640, 'Mar 04, 2023 03:49:13 PM', '2023-03-04 15:49:13'),
(129, 'ate ruby', 1849, 'Mar 04, 2023 03:49:31 PM', '2023-03-04 15:49:31'),
(130, 'motor ni juan 100 pcs', 1850, 'Mar 04, 2023 03:50:11 PM', '2023-03-04 15:50:11'),
(131, 'new katagumpay 160 pcs', 1639, 'Mar 04, 2023 03:50:46 PM', '2023-03-04 15:50:46'),
(132, 'team katagumpay 152 pcs', 1486, 'Mar 04, 2023 03:51:53 PM', '2023-03-04 15:51:53'),
(133, 'katagumpay new black', 1450, 'Mar 04, 2023 03:52:09 PM', '2023-03-04 15:52:09'),
(134, 'eagles set', 1816, 'Mar 04, 2023 03:52:20 PM', '2023-03-04 15:52:20'),
(135, 'real talk 119', 1893, 'Mar 04, 2023 03:52:48 PM', '2023-03-04 15:52:48'),
(136, 'peeker', 1887, 'Mar 04, 2023 03:52:59 PM', '2023-03-04 15:52:59'),
(137, 'family 1', 1456, 'Mar 04, 2023 03:53:12 PM', '2023-03-04 15:53:12'),
(138, 'nars 102 pcs', 1957, 'Mar 04, 2023 03:53:30 PM', '2023-03-04 15:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `decals_tbl`
--

CREATE TABLE `decals_tbl` (
  `decals_id` int(11) NOT NULL,
  `decals_type` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_page_tbl`
--

INSERT INTO `gallery_page_tbl` (`gallery_page_id`, `caption`, `image`, `created_at_varchar`, `created_at`) VALUES
(1, 'Looking for a reliable printing service for your business needs? Look no further than our shop. Our high-quality prints are sure to make your business stand out, whether you need business cards, flyers, or brochures. Using the latest printing technology, we ensure that your prints are vibrant and crisp, and our printing experts can assist with design and layout to create a professional and eye-catching final product. Fast turnaround times and competitive pricing make us the go-to printing solution for businesses of all sizes. Trust us to handle all your printing needs with the utmost care and attention to detail.', '', 'Mar 09, 2023 08:50:15 PM', '2023-03-09 20:50:15'),
(2, '', '6409d69a12aa28.91234818.jpg', 'Mar 09, 2023 08:52:42 PM', '2023-03-09 20:52:42'),
(3, '', '6409d69c84e3a3.22065871.jpg', 'Mar 09, 2023 08:52:44 PM', '2023-03-09 20:52:44'),
(4, '', '6409d69edc6207.90923810.jpg', 'Mar 09, 2023 08:52:46 PM', '2023-03-09 20:52:46'),
(5, '', '6409d6a3c8e8f9.86121267.jpg', 'Mar 09, 2023 08:52:51 PM', '2023-03-09 20:52:51'),
(6, '', '6409d6a85bab01.61215956.jpg', 'Mar 09, 2023 08:52:56 PM', '2023-03-09 20:52:56'),
(7, '', '6409d6ab64f9a6.33413693.jpg', 'Mar 09, 2023 08:52:59 PM', '2023-03-09 20:52:59'),
(8, '', '6409d6b00aaac2.92059925.jpg', 'Mar 09, 2023 08:53:04 PM', '2023-03-09 20:53:04'),
(9, '', '6409d6b34fab63.37208418.jpg', 'Mar 09, 2023 08:53:07 PM', '2023-03-09 20:53:07'),
(10, '', '6409d6b6b597d1.88605119.jpg', 'Mar 09, 2023 08:53:10 PM', '2023-03-09 20:53:10'),
(11, '', '6409d6b9a91175.57908947.jpg', 'Mar 09, 2023 08:53:13 PM', '2023-03-09 20:53:13'),
(12, '', '6409d6bdbf1284.51036117.jpg', 'Mar 09, 2023 08:53:17 PM', '2023-03-09 20:53:17'),
(13, '', '6409d6c133f159.86693104.jpg', 'Mar 09, 2023 08:53:21 PM', '2023-03-09 20:53:21'),
(14, '', '6409d6c406f1e8.74615967.jpg', 'Mar 09, 2023 08:53:24 PM', '2023-03-09 20:53:24'),
(15, '', '6409d6d86afad4.26400008.jpg', 'Mar 09, 2023 08:53:44 PM', '2023-03-09 20:53:44'),
(16, '', '6409d6daca30e3.20640542.jpg', 'Mar 09, 2023 08:53:46 PM', '2023-03-09 20:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `home_hero_section_tbl`
--

CREATE TABLE `home_hero_section_tbl` (
  `home_hero_section_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_hero_section_tbl`
--

INSERT INTO `home_hero_section_tbl` (`home_hero_section_id`, `title`, `sub_title`, `image`, `created_at_varchar`, `created_at`) VALUES
(1, 'WE DESIGN,PRINT and INSTALL', '', '', 'Mar 09, 2023 08:57:12 PM', '2023-03-09 20:57:12'),
(2, '', 'Unleash Your Creativity with Our High-Quality Stickers and Tarpaulins', '', 'Mar 09, 2023 08:57:23 PM', '2023-03-09 20:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `order_product_tbl`
--

CREATE TABLE `order_product_tbl` (
  `order_product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id_product` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(65,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `page` varchar(20) NOT NULL,
  `status_order` varchar(20) NOT NULL,
  `deliver_method` varchar(20) NOT NULL,
  `reference_num` varchar(255) NOT NULL,
  `receipt` varchar(255) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_ready_to_print_tbl`
--

CREATE TABLE `order_ready_to_print_tbl` (
  `order_ready_to_print_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id_ready_to_print` varchar(255) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(65,2) NOT NULL,
  `page` varchar(20) NOT NULL,
  `status_order` varchar(20) NOT NULL,
  `deliver_method` varchar(20) NOT NULL,
  `reference_num` varchar(255) NOT NULL,
  `receipt` varchar(255) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_sticker_tbl`
--

CREATE TABLE `order_sticker_tbl` (
  `order_sticker_main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id_sticker` varchar(255) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cover` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(65,2) NOT NULL,
  `page` varchar(20) NOT NULL,
  `status_order` varchar(20) NOT NULL,
  `deliver_method` varchar(20) NOT NULL,
  `reference_num` varchar(255) NOT NULL,
  `receipt` varchar(255) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_temp_plate_tbl`
--

CREATE TABLE `order_temp_plate_tbl` (
  `order_temp_plate_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id_temp_plate` varchar(255) NOT NULL,
  `type_of_plate` varchar(50) NOT NULL,
  `format` varchar(20) NOT NULL,
  `mv_file` varchar(100) NOT NULL,
  `register_num` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `dealer` varchar(100) NOT NULL,
  `status_plate` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(65,2) NOT NULL,
  `page` varchar(20) NOT NULL,
  `status_order` varchar(50) NOT NULL,
  `deliver_method` varchar(20) NOT NULL,
  `reference_num` varchar(255) NOT NULL,
  `receipt` varchar(255) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services_page_tbl`
--

CREATE TABLE `services_page_tbl` (
  `services_id` int(11) NOT NULL,
  `sub_title` text NOT NULL,
  `content` text NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_page_tbl`
--

INSERT INTO `services_page_tbl` (`services_id`, `sub_title`, `content`, `created_at_varchar`, `created_at`) VALUES
(1, 'Our printing service offers a wide range of printing services to meet the needs of businesses and individuals. From digital printing to offset printing, we have the technology and expertise to handle any project. We specialize in printing marketing materials such as business cards, brochures, and flyers, as well as larger format items like banners and posters. In addition to printing, we also offer design services to ensure that your materials look their best. Finally, we provide a range of finishing options such as binding, laminating, and embossing to add that extra touch of professionalism. Whatever your printing needs, we have the services to make your project a success.', '', 'Mar 09, 2023 08:51:46 PM', '2023-03-09 20:51:46'),
(2, '', 'Tarpaulin Printing, Sticker, Printing, Wall Decor, Office Glass Decor, Product Labels, Sintra Board Printing, Motorcycle and Car, Company Vehicle, Wrapping and Customize Decals', 'Mar 09, 2023 08:51:53 PM', '2023-03-09 20:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `sticker_label_tbl`
--

CREATE TABLE `sticker_label_tbl` (
  `sticker_label_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tarpauline_tbl`
--

CREATE TABLE `tarpauline_tbl` (
  `tarpauline_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_plate_tbl`
--

CREATE TABLE `temp_plate_tbl` (
  `temp_plate_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_product_tbl`
--

CREATE TABLE `user_product_tbl` (
  `user_product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_product_tbl`
--

INSERT INTO `user_product_tbl` (`user_product_id`, `name`, `description`, `price`, `image`, `created_at_varchar`, `created_at`) VALUES
(1, 'mio', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci culpa doloribus eum sed, veniam amet reprehenderit ea voluptatibus iste voluptatem, similique nobis mollitia, architecto quidem? Et temporibus vel itaque magni!', '1.00', '642989e6d4e8f6.00200135.png', 'Apr 02, 2023 09:57:58 PM', '2023-04-02 21:57:58'),
(2, 'mio', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci culpa doloribus eum sed, veniam amet reprehenderit ea voluptatibus iste voluptatem, similique nobis mollitia, architecto quidem? Et temporibus vel itaque magni!', '2.00', '642989ef1083c5.71221118.png', 'Apr 02, 2023 09:58:07 PM', '2023-04-02 21:58:07'),
(3, 'mio', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci culpa doloribus eum sed, veniam amet reprehenderit ea voluptatibus iste voluptatem, similique nobis mollitia, architecto quidem? Et temporibus vel itaque magni!', '3.00', '642989f6cecaf7.47745958.png', 'Apr 02, 2023 09:58:14 PM', '2023-04-02 21:58:14'),
(4, 'mio', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci culpa doloribus eum sed, veniam amet reprehenderit ea voluptatibus iste voluptatem, similique nobis mollitia, architecto quidem? Et temporibus vel itaque magni!', '4.00', '642989ff36c1e7.67969614.png', 'Apr 02, 2023 09:58:23 PM', '2023-04-02 21:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `activate_code` int(6) NOT NULL,
  `activate_key` varchar(255) NOT NULL,
  `update_pass_key` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `email`, `password`, `status`, `activate_code`, `activate_key`, `update_pass_key`, `role`, `first_name`, `last_name`, `phone_number`, `created_at_varchar`, `created_at`) VALUES
(1, 'mqmhdghe@valanides.com', 'mqmhdghe@valanides.com', 'activated', 541584, '', '', 'user', 'red', 'grey', '09123456789', 'Mar 28, 2023 09:08:03 PM', '2023-03-28 21:08:03'),
(2, 'admin@gmail.com', 'admin@gmail.com', 'activated', 0, '', '', 'admin', '', '', '', 'Mar 30, 2023 12:20:32 PM', '2023-03-30 12:20:32');

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
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `contact_us_page_tbl`
--
ALTER TABLE `contact_us_page_tbl`
  ADD PRIMARY KEY (`contact_us_page_id`);

--
-- Indexes for table `cut_file_tbl`
--
ALTER TABLE `cut_file_tbl`
  ADD PRIMARY KEY (`cut_file_id`);

--
-- Indexes for table `decals_tbl`
--
ALTER TABLE `decals_tbl`
  ADD PRIMARY KEY (`decals_id`);

--
-- Indexes for table `gallery_page_tbl`
--
ALTER TABLE `gallery_page_tbl`
  ADD PRIMARY KEY (`gallery_page_id`);

--
-- Indexes for table `home_hero_section_tbl`
--
ALTER TABLE `home_hero_section_tbl`
  ADD PRIMARY KEY (`home_hero_section_id`);

--
-- Indexes for table `order_product_tbl`
--
ALTER TABLE `order_product_tbl`
  ADD PRIMARY KEY (`order_product_id`);

--
-- Indexes for table `order_ready_to_print_tbl`
--
ALTER TABLE `order_ready_to_print_tbl`
  ADD PRIMARY KEY (`order_ready_to_print_id`);

--
-- Indexes for table `order_sticker_tbl`
--
ALTER TABLE `order_sticker_tbl`
  ADD PRIMARY KEY (`order_sticker_main_id`);

--
-- Indexes for table `order_temp_plate_tbl`
--
ALTER TABLE `order_temp_plate_tbl`
  ADD PRIMARY KEY (`order_temp_plate_id`);

--
-- Indexes for table `services_page_tbl`
--
ALTER TABLE `services_page_tbl`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `sticker_label_tbl`
--
ALTER TABLE `sticker_label_tbl`
  ADD PRIMARY KEY (`sticker_label_id`);

--
-- Indexes for table `tarpauline_tbl`
--
ALTER TABLE `tarpauline_tbl`
  ADD PRIMARY KEY (`tarpauline_id`);

--
-- Indexes for table `temp_plate_tbl`
--
ALTER TABLE `temp_plate_tbl`
  ADD PRIMARY KEY (`temp_plate_id`);

--
-- Indexes for table `user_product_tbl`
--
ALTER TABLE `user_product_tbl`
  ADD PRIMARY KEY (`user_product_id`);

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
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us_page_tbl`
--
ALTER TABLE `contact_us_page_tbl`
  MODIFY `contact_us_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cut_file_tbl`
--
ALTER TABLE `cut_file_tbl`
  MODIFY `cut_file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `decals_tbl`
--
ALTER TABLE `decals_tbl`
  MODIFY `decals_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_page_tbl`
--
ALTER TABLE `gallery_page_tbl`
  MODIFY `gallery_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `home_hero_section_tbl`
--
ALTER TABLE `home_hero_section_tbl`
  MODIFY `home_hero_section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_product_tbl`
--
ALTER TABLE `order_product_tbl`
  MODIFY `order_product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_ready_to_print_tbl`
--
ALTER TABLE `order_ready_to_print_tbl`
  MODIFY `order_ready_to_print_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_sticker_tbl`
--
ALTER TABLE `order_sticker_tbl`
  MODIFY `order_sticker_main_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_temp_plate_tbl`
--
ALTER TABLE `order_temp_plate_tbl`
  MODIFY `order_temp_plate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services_page_tbl`
--
ALTER TABLE `services_page_tbl`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sticker_label_tbl`
--
ALTER TABLE `sticker_label_tbl`
  MODIFY `sticker_label_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tarpauline_tbl`
--
ALTER TABLE `tarpauline_tbl`
  MODIFY `tarpauline_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_plate_tbl`
--
ALTER TABLE `temp_plate_tbl`
  MODIFY `temp_plate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_product_tbl`
--
ALTER TABLE `user_product_tbl`
  MODIFY `user_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
