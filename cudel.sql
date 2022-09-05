-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 12:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cudel`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(200) NOT NULL,
  `name` text NOT NULL,
  `price` text DEFAULT NULL,
  `des2` text NOT NULL,
  `image` text NOT NULL,
  `status` enum('A','D') NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `price`, `des2`, `image`, `status`, `created_at`) VALUES
(1, 'Complete Glow Package', '499', '<ul>\r\n	<li>\r\n	<p>Face Clean-Up &ndash; VLCC&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Face &amp; Neck-Detan/Beach&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Threading&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', 'cfaea2651440d9df97ac72da2eef9bf8.jpg', 'A', '0000-00-00 00:00:00'),
(2, 'Classic Tan Remover', '729', '<ul>\r\n	<li>\r\n	<p>Classic-Manicure (Cut &amp; File)&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Classic-Pedicure (Cut &amp; File)&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Face &amp; Neck-Detan/Beach&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Threading&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '328740111895a901732bf22e0d4e18c2.jpg', 'A', '0000-00-00 00:00:00'),
(3, 'Feel Relax Package', '949', '<ul>\r\n	<li>\r\n	<p>VLCC-Skin Lightening Facial&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Chocolate Waxing-Full Arms &amp; Under Arms &amp; Full Legs.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Head Massage with Oil - 25Min.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Threading&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', '3f38d4a945685bd085ff59957045787b.jpg', 'A', '0000-00-00 00:00:00'),
(4, 'Make Me Beauty Package', '1099', '<ul>\r\n	<li>\r\n	<p>VLCC-Fruit Facial&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Face &amp; Neck-Detan&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Chocolate Waxing-Full Arms &amp; Under Arms &amp; Full Legs.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Chocolate Waxing &ndash;Bikini Wax&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Thread Work- Eyebrow, Upper lips &amp; Forehead&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', '58ed203381f64a5eadfc820770f44395.jpg', 'A', '0000-00-00 00:00:00'),
(5, 'Good Look Package', '1149', '<ul>\r\n	<li>\r\n	<p>Hair Trimming&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Chocolate Waxing-Full Arms &amp; Under Arms &amp; Full Legs.&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Face Clean-Up - VLCC&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Classic-Pedicure&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Threading</p>\r\n	</li>\r\n</ul>\r\n', '6877c7c0e79f8978f7044aafcaf72f76.jpg', 'A', '0000-00-00 00:00:00'),
(6, 'Smooth Skin Package', '1257', '<ul>\r\n	<li>\r\n	<p>Rica Waxing-Full Arms &amp; Under Arms&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Face &amp; Neck-Detan/Beach&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Face Clean-Up &ndash; VLCC&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Pedicure-Classic&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Thread Work- Eyebrow, Upper lips &amp; Forehead&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', 'eea4b99e3fc28484745e4908f6cee1ff.jpg', 'A', '0000-00-00 00:00:00'),
(7, 'Tan Removal Package', '1299', '<ul>\r\n	<li>\r\n	<p>VLCC Anti Tan Facial&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Chocolate Waxing-Full Arms &amp; Under Arms &amp; Full Legs.&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Bleach &amp; Detan- Face &amp; Neck&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Classic-Pedicure&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Thread Work- Eyebrow, Upper lips &amp; Forehead</p>\r\n	</li>\r\n</ul>\r\n', 'fa7c8316554741a189532762e0a87645.jpg', 'A', '0000-00-00 00:00:00'),
(8, 'Head to Toe Package', '1699', '<ul>\r\n	<li>\r\n	<p>Lotus Radiant Pearl Facial&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Chocolate Waxing-Full Arms &amp; Under Arms &amp; Full Legs.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Sara-Manicure&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sara-Pedicure&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Herbal-Hair Spa&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Threading&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', 'e663c473c7a2a3571b193043973ab950.jpg', 'A', '0000-00-00 00:00:00'),
(9, 'Body Glow Package', '1899', '<ul>\r\n	<li>\r\n	<p>Lotus Body Scrubbing&nbsp;&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Face Clean-Up &ndash; VLCC&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Classic Manicure&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Classic Pedicure&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Hair Spa-Herbal&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Threading&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', '52d793d621364edb87aa164c7e3f75f0.jpg', 'A', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `pin` text DEFAULT NULL,
  `product` text DEFAULT NULL,
  `amount` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `status` enum('A','D') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `pin`, `product`, `amount`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'krishna', 'krishna@gmail.com', NULL, NULL, NULL, NULL, 'village-annupar, post kerma dist  mau', 'A', '2022-07-07 16:11:12', '2022-07-07 16:11:12'),
(2, 'krishna', 'krishna@gmail.com', NULL, '276403', NULL, NULL, 'village-annupar post kerma dist mau', 'A', '2022-07-07 16:12:11', '2022-07-07 16:12:11'),
(3, '', 'djfkdjlk', NULL, NULL, NULL, NULL, 'dfjkdjfkl', 'A', '2022-07-07 16:45:05', '2022-07-07 16:45:05'),
(4, '', 'email', NULL, NULL, NULL, NULL, 'dfjkdfjkdj', 'A', '2022-07-07 16:47:56', '2022-07-07 16:47:56'),
(5, '', 'eemail.krishna@gmail.com', NULL, '111', NULL, NULL, '44', 'A', '2022-07-07 16:49:18', '2022-07-07 16:49:18'),
(6, 'krishna', 'eemail.krishna@gmail.com', NULL, '2222222222', NULL, NULL, 'vaillage annup[a rkerma dist mau', 'A', '2022-07-07 16:50:52', '2022-07-07 16:50:52'),
(7, 'Saksham Mishra', 'shakshammishra1997@gmail.com', '123', '276406', NULL, NULL, 'village  annupar kerma', 'A', '2022-07-07 16:56:28', '2022-07-08 13:11:16'),
(8, '', '', NULL, '', NULL, NULL, '', 'A', '2022-07-07 16:57:57', '2022-07-07 16:57:57'),
(9, 'Saksham Mishra', 'shakshammishra1997@gmail.com', '84939', '121102', NULL, NULL, 'Flat No. 669 2nd Floor', 'A', '2022-07-07 16:58:54', '2022-07-07 16:58:54'),
(10, 'suraj actc', 'eemail.suraj@gmail.com', '8112773132', '276403', NULL, NULL, 'mau uttarpradesh', 'A', '2022-07-07 17:01:24', '2022-07-07 17:01:24'),
(11, NULL, NULL, '9140934715r65656567', NULL, NULL, NULL, NULL, 'A', '2022-07-08 10:37:12', '2022-07-08 10:37:12'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 10:38:24', '2022-07-08 10:38:24'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 10:41:08', '2022-07-08 10:41:08'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 10:43:44', '2022-07-08 10:43:44'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 10:47:34', '2022-07-08 10:47:34'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 10:58:20', '2022-07-08 10:58:20'),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 11:00:10', '2022-07-08 11:00:10'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 15:28:33', '2022-07-08 15:28:33'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 15:36:36', '2022-07-08 15:36:36'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 15:37:19', '2022-07-08 15:37:19'),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 15:39:33', '2022-07-08 15:39:33'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 15:40:58', '2022-07-08 15:40:58'),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 15:41:53', '2022-07-08 15:41:53'),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 15:50:15', '2022-07-08 15:50:15'),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 15:51:31', '2022-07-08 15:51:31'),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 15:52:40', '2022-07-08 15:52:40'),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 15:59:08', '2022-07-08 15:59:08'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 16:00:29', '2022-07-08 16:00:29'),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 16:03:55', '2022-07-08 16:03:55'),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 16:20:36', '2022-07-08 16:20:36'),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 16:26:17', '2022-07-08 16:26:17'),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 16:28:31', '2022-07-08 16:28:31'),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 23:42:40', '2022-07-08 23:42:40'),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 23:45:08', '2022-07-08 23:45:08'),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-08 23:48:23', '2022-07-08 23:48:23'),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', '2022-07-09 00:00:28', '2022-07-09 00:00:28'),
(37, 'krishna', 'shakshammishra1997@gmail.com', '9140934715', '276406', NULL, NULL, 'Flat No. 669 2nd Floor', 'A', '2022-07-09 00:20:25', '2022-07-09 00:20:25'),
(38, 'saksham Mishra j', 'shakshammishra1997@gmail.com', '9992774351', '201306', NULL, NULL, 'H no. 420, Shaitan Gali, Kali pahadi k peeche, Noida', 'A', '2022-07-09 10:26:15', '2022-07-11 13:25:16'),
(39, 'Vishnu nath tiwari', 'vishnu420@gmail.com', '8355039378', '276406', NULL, NULL, 'village annupar post kerma  dist mau', 'A', '2022-07-09 10:42:00', '2022-07-09 11:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(200) NOT NULL,
  `price` int(200) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `details` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('A','D') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `price`, `name`, `image`, `details`, `created_at`, `status`) VALUES
(88, 499, 'Complete Glow Package', 'http://localhost/cudelwebsite/assets/img/complete-glow-pack.jpg', '', '2022-03-31 06:12:19', 'A'),
(89, 749, 'Complete Wax Package', 'http://localhost/cudelwebsite/assets/img/CompleteWax.jpg', '', '2022-03-31 06:12:22', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `peyment_status`
--

CREATE TABLE `peyment_status` (
  `id` int(200) NOT NULL,
  `order_id` text DEFAULT NULL,
  `t_id` text DEFAULT NULL,
  `payment` int(11) DEFAULT NULL,
  `payment_mode` text DEFAULT NULL,
  `product_id` int(100) DEFAULT NULL,
  `customer_id` text DEFAULT NULL,
  `qty` text DEFAULT NULL,
  `schedule` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peyment_status`
--

INSERT INTO `peyment_status` (`id`, `order_id`, `t_id`, `payment`, `payment_mode`, `product_id`, `customer_id`, `qty`, `schedule`, `created_at`) VALUES
(1, '5635', 'pay_J9ieMnHsEOqbBv', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(2, '5635', 'pay_J9ieMnHsEOqbBv', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(3, '9642', 'pay_J9ilNI1MkxIHew', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(4, '9034', 'pay_J9imrBbBSRDBYw', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(5, '6361', 'pay_J9inviy7rkEq7s', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(6, '9416', 'pay_J9ioyEXrDJQ1pg', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(7, '7066', 'pay_J9iqHGOpsK8p9S', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(8, '9192', 'pay_J9iwAVCQFrgp0s', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(9, '3273', 'pay_J9jn2X4ucPKoub', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(10, '2626', 'pay_J9jp7mI6tIhpHH', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(11, '1546', 'pay_J9kJ84JxEa4Evq', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(12, '9380', 'pay_J9kNwOiEHbRgf3', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(13, '6563', 'pay_JA5QyxHsUpYVh1', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(14, '7399', 'pay_JAVBMJSaJjmjqR', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(15, '3062', 'pay_JAVBvxD5zAOKvz', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(16, '7299', 'pay_JAVGRrACXzv8RZ', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(17, '2005', 'pay_JBJiUnoRnSfEnf', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(18, '7262', 'pay_JBJl6uf5dwPmeY', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(19, '4545', 'pay_JCSv1zgsXmM9yF', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(20, '2829', 'pay_JCSxtzsCv24Eya', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(21, '6418', 'pay_JCSyyUqB7cU5NW', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(22, '7524', 'pay_JCtdo1EPEJuOIj', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(23, '2770', 'pay_JDhUmJlxEj1Glo', 0, '', 0, '', '', '', '2022-04-05 16:00:47'),
(46, '', '', 3688, 'cash', 1, '83', '2', '', '2022-04-05 16:00:47'),
(59, NULL, NULL, 2766, 'cash', 1, '83', '1', '', '2022-04-05 16:01:26'),
(60, NULL, NULL, 1954, 'cash', 2, '85', '1', '', '2022-04-05 16:30:17'),
(61, NULL, NULL, 3614, 'cash', 7, '85', '2', '', '2022-04-05 16:40:29'),
(62, NULL, NULL, 3614, 'cash', 7, '85', '2', '', '2022-04-05 16:41:39'),
(63, NULL, NULL, 2766, 'cash', 8, '83', '1', '', '2022-04-05 16:44:01'),
(64, NULL, NULL, 2188, 'cash', 1, '83', '1', '', '2022-04-06 10:12:20'),
(78, NULL, NULL, 1437, 'cash', 2, '90', '1', ' ', '2022-04-12 13:47:00'),
(79, NULL, NULL, 1954, 'cash', 2, '90', '1', '13 Apr 3:30 PM', '2022-04-12 13:47:52'),
(80, '1367', NULL, 688, 'cash', 2, '90', '1', '15 Apr 3:30 PM', '2022-04-12 13:51:27'),
(81, '6845', 'pay_JIP7iAxvVgOpsP', NULL, NULL, NULL, NULL, NULL, '', '2022-04-12 15:36:45'),
(82, '3050', 'pay_JIPMM6YsZIqKxv', NULL, NULL, NULL, NULL, NULL, '', '2022-04-12 15:44:48'),
(83, '2727', 'pay_JIPdFtm4dqqT2d', NULL, NULL, NULL, NULL, NULL, '', '2022-04-12 16:00:48'),
(84, '8490', 'pay_JIRNQwNxUaj2yI', NULL, NULL, NULL, NULL, NULL, '', '2022-04-12 17:43:06'),
(85, '6984', NULL, 2064, 'cash', 2, '90', '3', ' ', '2022-04-12 17:44:11'),
(86, '6468', NULL, 2863, 'cash', 7, '90', '2', ' ', '2022-04-13 13:34:30'),
(87, '5818', NULL, 2863, 'cash', 7, '90', '2', ' ', '2022-04-13 13:34:43'),
(88, '6921', NULL, 1437, 'cash', 2, '90', '1', ' ', '2022-04-13 13:35:55'),
(89, '9742', NULL, 2188, 'cash', 1, '90', '1', '14 Apr 7:30 AM', '2022-04-13 17:46:40'),
(90, NULL, 'pay_JJ7ES4auJdEjME', 1625, NULL, NULL, '1', NULL, '', '2022-04-14 10:40:01'),
(91, '8106', 'pay_JJ7qrR7ldY9c3G', 1625, 'online', NULL, '1', '2', '14-Apr-2022', '2022-04-14 11:16:10'),
(92, '7094', 'pay_JJ92Q01KnkWzD7', 2374, 'online', 3, '1', '2', '15 Apr  8:00 AM', '2022-04-14 12:25:46'),
(93, '3140', 'pay_JJ92Q01KnkWzD7', 2374, 'online', 6, '1', '2', '15 Apr  8:00 AM', '2022-04-14 12:25:46'),
(94, '8021', 'pay_JJ92Q01KnkWzD7', 2374, 'online', NULL, '1', '2', '14-Apr-2022', '2022-04-14 12:25:46'),
(95, '1673', 'pay_JJ9AuEEboHnetD', 2374, 'online', 3, '1', '2', '16 Apr  11:00 AM', '2022-04-14 12:33:48'),
(96, '1673', 'pay_JJ9AuEEboHnetD', 2374, 'online', 6, '1', '2', '16 Apr  11:00 AM', '2022-04-14 12:33:48'),
(97, '9677', 'pay_JJ9AuEEboHnetD', 2374, 'online', NULL, '90', '2', '14-Apr-2022', '2022-04-14 12:33:48'),
(98, '3246', 'pay_JJ9DpumcGXkRpm', 2374, 'online', 3, '90', '2', '15 Apr  8:00 AM', '2022-04-14 12:36:36'),
(99, '3246', 'pay_JJ9DpumcGXkRpm', 2374, 'online', 6, '90', '2', '15 Apr  8:00 AM', '2022-04-14 12:36:36'),
(100, '1601', 'pay_JJA0o70icT5YCn', 688, 'online', 2, '91', '2', '15 Apr  10:30 AM', '2022-04-14 13:22:55'),
(101, '9688', 'pay_JJA2rKZzkb1T1T', 688, 'online', 2, '91', '2', '16 Apr  8:00 AM', '2022-04-14 13:24:55'),
(102, '1615', 'pay_JJDMvwHXdXZHPi', 1376, 'online', 2, '91', '2', 'date  ', '2022-04-14 16:39:58'),
(103, '5124', 'pay_JKhhHS5FoNa3AI', 1500, 'online', 1, '90', '2', '18 Apr  7:30 AM', '2022-04-18 10:59:10'),
(104, '2163', NULL, 1500, 'cash', 1, '90', '1', ' ', '2022-04-18 11:01:21'),
(105, '1690', NULL, 1806, 'cash', 3, '90', '1', ' ', '2022-04-18 11:12:26'),
(106, '4586', NULL, 2323, 'cash', 7, '90', '1', '19 Apr 10:30 AM', '2022-04-18 11:17:18'),
(107, '5334', NULL, 3749, 'cash', 1, '90', '2', '19 Apr 10:30 AM', '2022-04-18 11:21:55'),
(108, '5334', NULL, 3749, 'cash', 3, '90', '1', '19 Apr 10:30 AM', '2022-04-18 11:21:55'),
(109, '2556', NULL, 3306, 'cash', 1, '90', '1', '20 Apr 10:30 AM', '2022-04-18 12:28:06'),
(110, '2556', NULL, 3306, 'cash', 3, '90', '1', '20 Apr 10:30 AM', '2022-04-18 12:28:06'),
(111, '2556', NULL, 3306, 'cash', 7, '90', '1', '20 Apr 10:30 AM', '2022-04-18 12:28:06'),
(112, '7216', NULL, 1806, 'cash', 7, '92', '1', '20 Apr 1:30 PM', '2022-04-18 16:43:55'),
(113, '7216', NULL, 1806, 'cash', 3, '92', '1', '20 Apr 1:30 PM', '2022-04-18 16:43:55'),
(114, '7692', NULL, 1500, 'cash', 1, '90', '1', '25 Apr 8:00 AM', '2022-04-25 13:46:37'),
(115, '9379', 'pay_JOOF0TvB94cQb1', 2064, 'online', 2, '90', '2', '28 Apr  10:00 AM', '2022-04-27 18:33:04'),
(116, '3778', NULL, 2114, 'cash', 7, '90', '2', '20 Jun 10:30 AM', '2022-06-19 13:53:44'),
(117, '2939', 'pay_JjHopgdjnmFBqM', 1266, 'online', 8, '90', '2', '20 Jun  1:30 PM', '2022-06-19 13:55:13'),
(118, '8565', 'pay_JjI53hOAntbLmi', 1266, 'online', 8, '90', '2', '19 Jun  11:00 AM', '2022-06-19 14:10:35'),
(119, '2558', NULL, 688, 'cash', 2, '90', '1', '30 Jun 11:00 AM', '2022-06-28 22:09:40'),
(120, '9145', NULL, 688, 'cash', 2, '90', '1', '30 Jun 11:00 AM', '2022-06-28 22:12:09'),
(121, '5934', NULL, 1376, 'cash', 2, '90', '2', ' ', '2022-06-28 22:18:26'),
(122, '4380', NULL, 1057, 'cash', 7, '90', '1', ' ', '2022-06-28 22:20:19'),
(123, '5099', NULL, 1057, 'cash', 7, '90', '1', ' ', '2022-06-28 22:21:21'),
(124, '4784', NULL, 1057, 'cash', 7, '90', '1', ' ', '2022-06-28 22:22:14'),
(125, '5393', NULL, 1057, 'cash', 7, '90', '1', ' ', '2022-06-28 22:24:02'),
(126, '6798', NULL, 1057, 'cash', 7, '90', '1', ' ', '2022-06-28 22:24:46'),
(127, '4303', NULL, 1057, 'cash', 7, '90', '1', ' ', '2022-06-28 22:26:06'),
(128, '1771', NULL, 1057, 'cash', 7, '90', '1', ' ', '2022-06-28 22:28:11'),
(129, '4560', NULL, 1057, 'cash', 7, '90', '1', ' ', '2022-06-28 22:29:51'),
(130, '4567', NULL, 1057, 'cash', 7, '90', '1', ' ', '2022-06-28 22:32:22'),
(131, '9605', NULL, 1057, 'cash', 7, '90', '1', ' ', '2022-06-28 22:32:34'),
(132, '7979', NULL, 1057, 'cash', 7, '90', '1', ' ', '2022-06-28 22:33:01'),
(133, '4439', NULL, 1057, 'cash', 7, '90', '1', ' ', '2022-06-28 22:34:39'),
(134, '3475', 'pay_JnxciYVCCEqhBm', 1, 'online', 8, '90', '2', '3 Jul  1:30 PM', '2022-07-01 09:25:04'),
(135, '8365', 'pay_Jnxk9mgjGb2H6L', 1, 'online', 8, '90', '2', '2 Jul  3:00 PM', '2022-07-01 09:32:10'),
(136, '5302', NULL, 800, 'cash', 4, '93', '8', ' ', '2022-07-03 08:10:17'),
(137, '2607', NULL, 949, 'cash', 3, '93', '1', '5 Jul 6:30 PM', '2022-07-03 13:54:21'),
(138, '2607', NULL, 949, 'cash', 4, '93', '2', '5 Jul 6:30 PM', '2022-07-03 13:54:21'),
(139, '5518', NULL, 2999, 'cash', 101, '93', '1', '5 Jul 1:00 PM', '2022-07-04 11:47:45'),
(140, '8240', NULL, 3999, 'cash', 102, '93', '1', '5 Jul 10:30 AM', '2022-07-04 12:30:39'),
(141, '9423', NULL, 1878, 'cash', 2, '93', '1', '5 Jul 10:30 AM', '2022-07-04 13:53:26'),
(142, '9423', NULL, 1878, 'cash', 7, '93', '1', '5 Jul 10:30 AM', '2022-07-04 13:53:26'),
(143, '3259', 'pay_JpH3lJX0j1561P', 1, 'online', 12, '93', '2', '5 Jul  8:00 AM', '2022-07-04 17:04:59'),
(144, '4920', NULL, 1596, 'cash', 58, '7', '1', '10 Jul 9:00 AM', '2022-07-08 13:11:16'),
(145, '4920', NULL, 1596, 'cash', 83, '7', '1', '10 Jul 9:00 AM', '2022-07-08 13:11:16'),
(146, '4920', NULL, 1596, 'cash', 82, '7', '1', '10 Jul 9:00 AM', '2022-07-08 13:11:16'),
(147, '4920', NULL, 1596, 'cash', 71, '7', '1', '10 Jul 9:00 AM', '2022-07-08 13:11:16'),
(148, '4920', NULL, 1596, 'cash', 7, '7', '1', '10 Jul 9:00 AM', '2022-07-08 13:11:16'),
(149, '2689', NULL, 1548, 'cash', 6, '39', '1', ' ', '2022-07-09 10:43:17'),
(150, '2689', NULL, 1548, 'cash', 116, '39', '1', ' 28 jul', '2022-07-09 10:43:17'),
(151, '1974', NULL, 1149, 'cash', 2, '39', '1', ' ', '2022-07-09 11:03:06'),
(152, '6492', NULL, 1149, 'cash', 2, '39', '1', '11 Jul 10:30 AM', '2022-07-09 11:03:42'),
(153, '1399', NULL, 1149, 'cash', 2, '39', '1', ' ', '2022-07-09 11:12:29'),
(154, '3231', NULL, 1690, 'cash', 32, '39', '10', ' ', '2022-07-09 11:13:32'),
(155, '7473', NULL, 1859, 'cash', 32, '39', '11', ' ', '2022-07-09 11:17:14'),
(156, '1015', NULL, 1149, 'cash', 2, '39', '1', ' ', '2022-07-09 11:19:09'),
(157, '8311', NULL, 1149, 'cash', 2, '39', '1', '10 Jul 10:30 AM', '2022-07-09 11:20:28'),
(158, '9966', NULL, 1149, 'cash', 2, '39', '1', '10 Jul 10:30 AM', '2022-07-09 11:32:59'),
(159, '1884', NULL, 1698, 'cash', 10, '38', '1', '12 Jul 6:30 PM', '2022-07-09 18:17:55'),
(160, '1884', NULL, 1698, 'cash', 79, '38', '1', '12 Jul 6:30 PM', '2022-07-09 18:17:55'),
(161, '9226', NULL, 1319, 'cash', 10, '38', '1', '10 Jul 8:00 AM', '2022-07-10 23:05:09'),
(162, '9226', NULL, 1319, 'cash', 58, '38', '1', '10 Jul 8:00 AM', '2022-07-10 23:05:09'),
(163, '3272', NULL, 8403, 'cash', 1, '38', '1', '12 Jul 1:00 PM', '2022-07-11 10:53:54'),
(164, '3272', NULL, 8403, 'cash', 11, '38', '1', '12 Jul 1:00 PM', '2022-07-11 10:53:54'),
(165, '3272', NULL, 8403, 'cash', 2, '38', '1', '12 Jul 1:00 PM', '2022-07-11 10:53:54'),
(166, '3272', NULL, 8403, 'cash', 102, '38', '1', '12 Jul 1:00 PM', '2022-07-11 10:53:54'),
(167, '3272', NULL, 8403, 'cash', 93, '38', '1', '12 Jul 1:00 PM', '2022-07-11 10:53:55'),
(168, '5045', NULL, 2604, 'cash', 33, '38', '1', '12 Jul 7:30 AM', '2022-07-11 11:11:30'),
(169, '5045', NULL, 2604, 'cash', 1, '38', '1', '12 Jul 7:30 AM', '2022-07-11 11:11:30'),
(170, '5045', NULL, 2604, 'cash', 71, '38', '1', '12 Jul 7:30 AM', '2022-07-11 11:11:30'),
(171, '5045', NULL, 2604, 'cash', 6, '38', '1', '12 Jul 7:30 AM', '2022-07-11 11:11:30'),
(172, '5856', NULL, 5731, 'cash', 8, '38', '1', '12 Jul 10:30 AM', '2022-07-11 11:35:04'),
(173, '5856', NULL, 5731, 'cash', 71, '38', '2', '12 Jul 10:30 AM', '2022-07-11 11:35:04'),
(174, '5856', NULL, 5731, 'cash', 11, '38', '1', '12 Jul 10:30 AM', '2022-07-11 11:35:04'),
(175, '5856', NULL, 5731, 'cash', 7, '38', '1', '12 Jul 10:30 AM', '2022-07-11 11:35:04'),
(176, '5856', NULL, 5731, 'cash', 1, '38', '1', '12 Jul 10:30 AM', '2022-07-11 11:35:04'),
(177, '5856', NULL, 5731, 'cash', 2, '38', '1', '12 Jul 10:30 AM', '2022-07-11 11:35:04'),
(178, '8830', NULL, 2206, 'cash', 1, '38', '1', '13 Jul 10:30 AM', '2022-07-11 11:45:28'),
(179, '8830', NULL, 2206, 'cash', 6, '38', '1', '13 Jul 10:30 AM', '2022-07-11 11:45:28'),
(180, '9267', NULL, 1257, 'cash', 1, '38', '1', '12 Jul 10:30 AM', '2022-07-11 11:49:19'),
(181, '1069', NULL, 3824, 'cash', 1, '38', '1', '12 Jul 8:00 AM', '2022-07-11 13:25:16'),
(182, '1069', NULL, 3824, 'cash', 3, '38', '2', '12 Jul 8:00 AM', '2022-07-11 13:25:16'),
(183, '1069', NULL, 3824, 'cash', 46, '38', '1', '12 Jul 8:00 AM', '2022-07-11 13:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `pin` text NOT NULL,
  `status` enum('A','D') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `name`, `phone`, `country`, `city`, `pin`, `status`, `created_at`) VALUES
(170, 'Krishna Bhardwaj', '9140934715', 'India', 'Delhi', '110054', 'A', '2022-04-11 14:10:50'),
(171, 'Krishna Bhardwaj', '9451282007', 'India', 'Delhi', '110054', 'A', '2022-04-11 16:45:01'),
(172, 'arun', '798688585765', 'India', 'Delhi', '110054', 'A', '2022-04-11 17:44:17'),
(173, 'arun', '798688585765', 'India', 'Noida', '110091', 'A', '2022-04-12 10:24:25'),
(174, 'arjun', '798688585765', 'India', 'Delhi', '110054', 'A', '2022-04-14 16:47:28'),
(175, 'suraj chauhan', '8112773132', 'India', 'Noida', '110091', 'A', '2022-04-18 16:41:34'),
(176, 'krishna', '9140934715', 'India', 'Lucknow', '226005', 'A', '2022-06-19 14:17:41'),
(177, 'krishna bhardwaj', '9140934715', 'India', 'Lucknow', '226016', 'A', '2022-06-25 15:55:42'),
(178, 'saks', '9992774351', 'India', 'Delhi', '110003', 'A', '2022-07-03 13:52:57'),
(179, 'krtishna', '9992774351', 'India', 'Delhi', '110003', 'A', '2022-07-04 11:28:08'),
(180, 'krtishna', '9992774351', 'India', 'Delhi', '110003', 'A', '2022-07-04 11:28:08'),
(181, 'jcvk', '9992774351', 'India', 'Delhi', '110003', 'A', '2022-07-04 11:29:03'),
(182, 'jkdfd', '9992774351', 'India', 'Delhi', '110003', 'A', '2022-07-04 11:33:20'),
(183, 'djkfjdkl', '9992774351', 'India', 'Delhi', '110003', 'A', '2022-07-04 12:26:08'),
(184, 'asas', '9992774351', 'India', 'Delhi', '110003', 'A', '2022-07-05 10:16:38'),
(185, 'asas', '9992774351', 'India', 'Delhi', '110003', 'A', '2022-07-05 10:16:38'),
(186, 'jhghghgh', 'hjhjk', 'India', 'Delhi', '110003', 'A', '2022-07-05 10:50:39'),
(187, 'JJ', 'FF', '', '', '', 'A', '2022-07-05 12:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `pin_code`
--

CREATE TABLE `pin_code` (
  `id` int(100) NOT NULL,
  `pin_code` text DEFAULT NULL,
  `status` enum('A','D') DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pin_code`
--

INSERT INTO `pin_code` (`id`, `pin_code`, `status`, `created_at`) VALUES
(4, '201310', 'A', '2022-07-09 12:02:00'),
(5, '203207', 'A', '2022-07-09 12:03:00'),
(6, '201306', 'A', '2022-07-09 12:03:00'),
(7, '201304', 'A', '2022-07-09 12:03:00'),
(8, '201305', 'A', '2022-07-09 12:03:00'),
(11, '201301', 'A', '2022-07-09 12:04:00'),
(12, '201303', 'A', '2022-07-09 12:04:00'),
(13, '201307', 'A', '2022-07-09 12:05:00'),
(14, '201309', 'A', '2022-07-09 12:05:00'),
(15, '201008', 'A', '2022-07-09 12:05:00'),
(16, '201313', 'A', '2022-07-09 12:06:00'),
(17, '201010', 'A', '2022-07-09 12:06:00'),
(18, '201012', 'A', '2022-07-09 12:06:00'),
(19, '201014', 'A', '2022-07-09 12:06:00'),
(20, '201014', 'A', '2022-07-09 12:07:00'),
(21, '110092', 'A', '2022-07-09 12:07:00'),
(22, '110051', 'A', '2022-07-09 12:07:00'),
(23, '110090', 'A', '2022-07-09 12:07:00'),
(24, '110032', 'A', '2022-07-09 12:07:00'),
(25, '110053', 'A', '2022-07-09 12:07:00'),
(26, '110091', 'A', '2022-07-09 12:07:00'),
(27, '110095', 'A', '2022-07-09 12:08:00'),
(28, '110032', 'A', '2022-07-09 12:08:00'),
(29, '110031', 'A', '2022-07-09 12:08:00'),
(30, '110053', 'A', '2022-07-09 12:08:00'),
(31, '110096', 'A', '2022-07-09 12:09:00'),
(32, '110032', 'A', '2022-07-09 12:10:00'),
(33, '110058', 'A', '2022-07-09 12:10:00'),
(34, '110018', 'A', '2022-07-09 12:10:00'),
(35, '110026', 'A', '2022-07-09 12:10:00'),
(36, '110015', 'A', '2022-07-09 12:10:00'),
(37, '110018', 'A', '2022-07-09 12:11:00'),
(38, '110059', 'A', '2022-07-09 12:11:00'),
(39, '110058', 'A', '2022-07-09 12:11:00'),
(40, '110015', 'A', '2022-07-09 12:11:00'),
(41, '110018', 'A', '2022-07-09 12:11:00'),
(42, '110064', 'A', '2022-07-09 12:11:00'),
(43, '110027', 'A', '2022-07-09 12:11:00'),
(44, '110063', 'A', '2022-07-09 12:11:00'),
(45, '110041', 'A', '2022-07-09 12:12:00'),
(46, '110063', 'A', '2022-07-09 12:12:00'),
(47, '110026', 'A', '2022-07-09 12:12:00'),
(48, '110087', 'A', '2022-07-09 12:12:00'),
(49, '201310', 'A', '2022-07-09 12:13:00'),
(50, '201313', 'A', '2022-07-09 12:13:00'),
(51, '201304', 'A', '2022-07-09 12:13:00'),
(52, '201008', 'A', '2022-07-09 12:13:00'),
(53, '203207', 'A', '2022-07-09 12:13:00'),
(54, '201314', 'A', '2022-07-09 12:13:00'),
(55, '201314', 'A', '2022-07-09 12:14:00'),
(56, '201009', 'A', '2022-07-09 12:14:00'),
(57, '201311', 'A', '2022-07-09 12:14:00'),
(58, '203202', 'A', '2022-07-09 12:14:00'),
(59, '203202', 'A', '2022-07-09 12:14:00'),
(60, '201312', 'A', '2022-07-09 12:15:00'),
(61, '203207', 'A', '2022-07-09 12:15:00'),
(62, '201308', 'A', '2022-07-09 12:15:00'),
(63, '201315', 'A', '2022-07-09 12:15:00'),
(64, '201330', 'A', '2022-07-09 12:15:00'),
(65, '201310', 'A', '2022-07-09 12:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `details` text NOT NULL,
  `price` text NOT NULL,
  `discount` text DEFAULT NULL,
  `image` text NOT NULL,
  `status` enum('A','D') NOT NULL,
  `created_at` datetime NOT NULL,
  `benifits` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `details`, `price`, `discount`, `image`, `status`, `created_at`, `benifits`) VALUES
(1, 'Smooth Skin Package', '<ul>\r\n	<li>\r\n	<p>Rica Waxing-Full Arms &amp; Under Arms&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Face &amp; Neck-Detan/Beach&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Face Clean-Up &ndash; VLCC&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Pedicure-Classic&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Thread Work- Eyebrow, Upper lips &amp; Forehead</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '1257', '10', '89c749bd423a7b3b78139bec35ef9281.jpg', 'A', '2022-03-30 07:45:55', ''),
(2, 'Good Look Package', '<ul>\r\n	<li>\r\n	<p>Hair Trimming&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Chocolate Waxing-Full Arms &amp; Under Arms &amp; Full Legs.&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Face Clean-Up - VLCC&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Classic-Pedicure&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Threading&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', '1149', '', 'dc2c0721e0917c4705bfd2600eaff45e.jpg', 'A', '2022-03-30 12:34:00', ''),
(3, 'Make Me Beauty Package', '<ul>\r\n	<li>\r\n	<p>VLCC-Fruit Facial&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Face &amp; Neck-Detan&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Chocolate Waxing-Full Arms &amp; Under Arms &amp; Full Legs.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Chocolate Waxing &ndash;Bikini Wax&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Thread Work- Eyebrow, Upper lips &amp; Forehead&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', '1099', '', '38a0c171292177b78b34cc0e92eb5028.jpg', 'A', '2022-03-30 12:36:00', ''),
(6, ' Feel Relax Package', '<ul>\r\n	<li>\r\n	<p>VLCC-Skin Lightening Facial&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Chocolate Waxing-Full Arms &amp; Under Arms &amp; Full Legs.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Head Massage with Oil - 25Min.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Threading</p>\r\n	</li>\r\n</ul>\r\n', '949', '', '2d2a28832a703f882d2073f61d82b30c.jpg', 'A', '2022-04-01 02:40:00', ''),
(7, ' Classic Tan Remover', '<ul>\r\n	<li>\r\n	<p>Classic-Manicure (Cut &amp; File)&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Classic-Pedicure (Cut &amp; File)&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Face &amp; Neck-Detan/Beach&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Threading&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', '729', '', '91c4119f67029feb2c16aa5a8badd187.jpg', 'A', '2022-04-01 02:41:00', ''),
(8, 'Complete Glow Package', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Face Clean-Up &ndash; VLCC&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Face &amp; Neck-Detan/Beach&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Threading&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', '499', '', 'ed5933a4f30afd53b445a7537a08f8ae.jpg', 'A', '2022-04-01 02:42:00', ''),
(10, 'Tan Removal Package ', '<ul>\r\n	<li>\r\n	<p>VLCC Anti Tan Facial&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Chocolate Waxing-Full Arms &amp; Under Arms &amp; Full Legs.&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Bleach &amp; Detan- Face &amp; Neck&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Classic-Pedicure&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Thread Work- Eyebrow, Upper lips &amp; Forehead&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', '1299', NULL, 'c70d44b39cbc2f0ddecc49cf893e2c4c.jpg', 'A', '2022-07-03 10:01:00', ''),
(11, 'Head to Toe Package', '<ul>\r\n	<li>\r\n	<p>Lotus Radiant Pearl Facial&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Chocolate Waxing-Full Arms &amp; Under Arms &amp; Full Legs.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Sara-Manicure&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sara-Pedicure&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Herbal-Hair Spa&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Threading&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', '1699', NULL, '918ff95c8754bb95e73bde570189b172.jpg', 'A', '2022-07-03 10:05:00', ''),
(12, 'Body Glow Package', '<ul>\r\n	<li>\r\n	<p>Lotus Body Scrubbing&nbsp;&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Face Clean-Up &ndash; VLCC&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Classic Manicure&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Classic Pedicure&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Hair Spa-Herbal&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Threading&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', '1', NULL, 'cb031ce5d06ac82f3e67a3ef93d997b6.jpg', 'D', '2022-07-03 10:06:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `service_card_category`
--

CREATE TABLE `service_card_category` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('A','D') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_card_category`
--

INSERT INTO `service_card_category` (`id`, `name`, `image`, `created_at`, `status`) VALUES
(5, 'C L E A N - U P', 'd060089a4c85970f920e2eaa89a84db3.jpg', '2022-07-02 03:15:00', 'A'),
(6, 'W A X I N G ', '5e79c67379c0cca421497c5a4f9dcb22.jpg', '2022-07-03 10:13:00', 'A'),
(7, 'T H R E A D   W O R K', '7810b3a20933ad7e43c1d177f9a3bdd6.jpg', '2022-07-03 10:14:00', 'A'),
(8, 'D E -T A N', '6aa2512deaf98beaf609c849d04807c6.jpg', '2022-07-03 10:21:00', 'A'),
(9, 'FACIAL', '5c1665b1797c54b98b5318736c4f5383.jpg', '2022-07-03 10:49:00', 'A'),
(10, 'BLEACH', '3119920b67f4c3058d703357d0a23201.jpg', '2022-07-03 11:10:00', 'A'),
(11, 'MASSAGE', '6596ae2da0078dfc21283a57f0a1f205.jpg', '2022-07-03 11:16:00', 'A'),
(12, 'MANICURE & PEDICURE', '0473bb8ef04ef3335d4e7a9af587546d.jpg', '2022-07-03 11:18:00', 'A'),
(13, 'HAIR SERVICES', '169e1f5f1c4843c69103ecd4a0fe8f4c.jpg', '2022-07-03 11:21:00', 'A'),
(14, 'M A K E - U P S E R V I C E S', '091c124fe4316d2ecd82391520fce7d4.jpg', '2022-07-03 11:32:00', 'A'),
(15, 'MEN\'S SALON', 'b11e986d0c83c5158b3d17787d5d6a4a.jpg', '2022-07-03 11:40:00', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `service_rate_card`
--

CREATE TABLE `service_rate_card` (
  `id` int(100) NOT NULL,
  `name` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` enum('A','D') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `service_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_rate_card`
--

INSERT INTO `service_rate_card` (`id`, `name`, `price`, `image`, `status`, `created_at`, `service_id`) VALUES
(6, 'Fruit Clean-Up (VLCC)', '359.00', 'dd70cc6ac9e7544ce7c12e0a3a8ae41f.jpg', 'A', '2022-07-03 10:17:00', 5),
(7, 'Anti Tan Clean - Up (VLCC)', '359.00', '51a34e56b43826a43d3e008768a8c635.jpg', 'A', '2022-07-03 10:23:00', 5),
(8, 'Face & Neck De-Tan', '189.00', '511dc046de2960454453f2e82a0dddf2.jpg', 'A', '2022-07-03 10:46:00', 8),
(9, 'Under arms De-Tan', '149.00', '', 'A', '2022-07-03 10:48:00', 8),
(10, 'Skin Lightening Clean-Up (VLCC)', '359.00', '', 'A', '2022-07-03 10:48:00', 5),
(11, 'Skin Tightening Clean-up (VLCC)', '359.00', '', 'A', '2022-07-03 10:48:00', 5),
(12, 'Fruit Facial (VLCC)', '549.00', '', 'A', '2022-07-03 10:50:00', 9),
(13, 'Anti Tan (VLCC)', '549.00', '', 'A', '2022-07-03 10:50:00', 5),
(14, 'Diamond Glow Facial (VLCC)', '729.00', '', 'A', '2022-07-03 10:50:00', 9),
(15, 'MEN\'S SALON', NULL, '630c67a404145860eefeee6f114456b9.jpg', 'A', '2022-07-03 10:50:00', NULL),
(16, 'Skin Tightening Facial (VLCC)', '549.00', '', 'A', '2022-07-03 10:51:00', 9),
(17, 'Cheryls Tan Cleaner Facial', '749.00', '', 'A', '2022-07-03 10:51:00', 9),
(18, 'L\'Oreal Cheryls Glovite Facial', '829.00', '', 'A', '2022-07-03 10:51:00', 9),
(19, 'Lotus Herbals Gold Facial', '729.00', '', 'A', '2022-07-03 10:52:00', 9),
(20, 'Lotus Radiant Pearl Facial', '729.00', '', 'A', '2022-07-03 10:52:00', 9),
(21, 'Lotus Herbal Radiant Diamond', '799.00', '', 'A', '2022-07-03 10:52:00', 9),
(22, 'Aroma Magic blossom Kochhar Gold Facial', '1049.00', '', 'A', '2022-07-03 10:52:00', 9),
(23, 'Aroma Magic blossom Kochhar- Pearl Facial', '996.00', '', 'A', '2022-07-03 10:54:00', 9),
(24, 'Aroma Magic blossom Kochhar- Silver Facial', '1066.00', '', 'A', '2022-07-03 10:54:00', 9),
(25, 'Aroma Magic blossom Kochhar- Diamond Facial', '1126.00', '', 'A', '2022-07-03 10:54:00', 9),
(26, 'Aroma Magic blossom Kochhar- Bridal Facial', '969.00', '', 'A', '2022-07-03 10:55:00', 9),
(27, 'O3+ Shine & Glow', '1299.00', '', 'A', '2022-07-03 10:55:00', 9),
(28, 'O3+ Whitening Facial', '1429.00', '', 'A', '2022-07-03 10:55:00', 9),
(29, 'O3+ Age Lock', '1399.00', '', 'A', '2022-07-03 10:55:00', 9),
(30, 'O3+ Bridal Facial', '1699.00', '', 'A', '2022-07-03 10:56:00', 9),
(31, 'Full Arms with under arms -Chocolate Wax', '249', '', 'A', '2022-07-03 10:56:00', 6),
(32, 'Half Legs-Chocolate Wax', '169', '', 'A', '2022-07-03 10:57:00', 6),
(33, 'Full Legs-Chocolate Wax', '199', '', 'A', '2022-07-03 10:57:00', 6),
(34, 'Full Arms+ Full Legs + under Arms- Chocolate', '399', '', 'A', '2022-07-03 10:57:00', 6),
(35, 'Full Body Wax-Chocolate Wax ( exclude Bikini & Butt)', '749', '', 'A', '2022-07-03 10:58:00', 6),
(36, 'Bikini Wax-Chocolate Wax', '499', '', 'A', '2022-07-03 10:58:00', 6),
(37, 'Butt Wax-Chocolate Wax', '399', '', 'A', '2022-07-03 10:58:00', 6),
(38, 'Full Arms - Chocolate Wax', '169', '', 'A', '2022-07-03 10:59:00', 6),
(39, 'Half Arms - Chocolate Wax', '129', '', 'A', '2022-07-03 10:59:00', 6),
(40, 'Half Arms+ Half Legs + under Arms -Chocolate', '319', '', 'A', '2022-07-03 11:00:00', 6),
(41, 'Stomach -Chocolate Wax', '169', '', 'A', '2022-07-03 11:00:00', 6),
(42, 'Full Back-Chocolate Wax', '229', '', 'A', '2022-07-03 11:00:00', 6),
(43, 'Half Back-Chocolate Wax', '149', '', 'A', '2022-07-03 11:00:00', 6),
(44, 'Full Arms with under arms - Rica Wax', '429', '', 'A', '2022-07-03 11:01:00', 6),
(45, 'Half Legs - Rica Wax', '299', '', 'A', '2022-07-03 11:01:00', 6),
(46, 'Full Legs - Rica Wax', '369', '', 'A', '2022-07-03 11:01:00', 6),
(47, 'Full Arms+ Full Legs + under Arms- Rica Wax', '729', '', 'A', '2022-07-03 11:02:00', 6),
(48, 'Full Arms+ Half Legs + under Arms- Rica Wax', '599', '', 'A', '2022-07-03 11:04:00', 6),
(49, 'Full Body Wax - Rica Wax (exclude Bikini & Butt)', '1299', '', 'A', '2022-07-03 11:04:00', 6),
(50, 'Stomach - Rica Wax', '259', '', 'A', '2022-07-03 11:05:00', 6),
(51, 'Full Back - Rica Wax', '359', '', 'A', '2022-07-03 11:05:00', 6),
(52, 'Half Back - Rica Wax', '269', '', 'A', '2022-07-03 11:05:00', 6),
(53, 'Bikini Wax - Rica Wax', '699', '', 'A', '2022-07-03 11:06:00', 6),
(54, 'Butt Wax - Rica Wax', '499', '', 'A', '2022-07-03 11:06:00', 6),
(55, 'Full Arms - Rica Wax', '269', '', 'A', '2022-07-03 11:06:00', 6),
(56, 'Half Arms - Rica Wax', '199', '', 'A', '2022-07-03 11:07:00', 6),
(57, 'Eyebrows', '30', '', 'A', '2022-07-03 11:07:00', 7),
(58, 'Upper Lips', '20', '', 'A', '2022-07-03 11:07:00', 7),
(59, 'Forehead', '20', '', 'A', '2022-07-03 11:07:00', 7),
(60, 'Face Threading', '99', '', 'A', '2022-07-03 11:08:00', 7),
(61, 'Face & Neck De-Tan', '189', '', 'A', '2022-07-03 11:08:00', 8),
(62, 'Under arms De-Tan', '149', '', 'A', '2022-07-03 11:08:00', 8),
(63, 'Stomach De-Tan', '199', '', 'A', '2022-07-03 11:09:00', 8),
(64, 'Half Back De-Tan', '189', '', 'A', '2022-07-03 11:09:00', 8),
(65, 'Full Back De-Tan', '299', '', 'A', '2022-07-03 11:09:00', 8),
(66, 'Full Arms De-Tan', '259', '', 'A', '2022-07-03 11:09:00', 8),
(67, 'Full Body De-Tan', '649', '', 'A', '2022-07-03 11:10:00', 8),
(68, 'Full body + Face & Neck', '719', '', 'A', '2022-07-03 11:10:00', 8),
(69, 'Face & Neck Bleach', '189', '', 'A', '2022-07-03 11:11:00', 10),
(70, 'Under arms Bleach', '149', '', 'A', '2022-07-03 11:11:00', 10),
(71, 'Stomach Bleach', '199', '', 'A', '2022-07-03 11:11:00', 10),
(72, 'Half Back Bleach', '189', '', 'A', '2022-07-03 11:12:00', 10),
(73, 'Full Back Bleach', '299', '', 'A', '2022-07-03 11:12:00', 10),
(74, 'Full Arms Bleach', '259', '', 'A', '2022-07-03 11:12:00', 10),
(75, 'Full Body Bleach', '719', '', 'A', '2022-07-03 11:12:00', 10),
(76, 'Full body + Face & Neck', '719', '', 'A', '2022-07-03 11:12:00', 10),
(77, 'Head Massage', '129', '', 'A', '2022-07-03 11:16:00', 11),
(78, 'Head, Shoulder & Neck', '219', '', 'A', '2022-07-03 11:17:00', 11),
(79, 'Foot to Knee Massage', '399', '', 'A', '2022-07-03 11:17:00', 11),
(80, 'Back Massage', '199', '', 'A', '2022-07-03 11:17:00', 11),
(81, 'Body Massage', '899', '', 'A', '2022-07-03 11:17:00', 11),
(82, 'Manicure-Fruit', '299', '', 'A', '2022-07-03 11:18:00', 12),
(83, 'Pedicure- Fruit', '349', '', 'A', '2022-07-03 11:18:00', 12),
(84, 'Manicure & Pedicure - Fruit', '549', '', 'A', '2022-07-03 11:19:00', 12),
(85, 'Manicure-Sara', '379', '', 'A', '2022-07-03 11:19:00', 12),
(86, 'Pedicure-Sara', '469', '', 'A', '2022-07-03 11:19:00', 12),
(87, 'Manicure & Pedicure - Sara', '729', '', 'A', '2022-07-03 11:19:00', 12),
(88, 'O3+ Manicure', '529', '', 'A', '2022-07-03 11:20:00', 12),
(89, 'O3+ Pedicure', '649', '', 'A', '2022-07-03 11:20:00', 12),
(90, 'O3+ Manicure & Pedicure', '1099', '', 'A', '2022-07-03 11:20:00', 12),
(91, 'Hair Cutting - Basic', '199', '', 'A', '2022-07-03 11:21:00', 13),
(92, 'Hair Cutting - Basic & Blow Dry', '299', '', 'A', '2022-07-03 11:21:00', 13),
(93, 'Hair Cutting - Medium', '299', '', 'A', '2022-07-03 11:35:00', 13),
(94, 'Hair Cutting - Medium & Blow Dry', '399', '', 'A', '2022-07-03 11:36:00', 13),
(95, 'Hair Cutting - Advance', '399', '', 'A', '2022-07-03 11:36:00', 13),
(96, 'Hair Cutting - Advance & Blow Dry', '499', '', 'A', '2022-07-03 11:36:00', 13),
(97, 'Hair Color Application', '199', '', 'A', '2022-07-03 11:37:00', 13),
(98, 'Hair Root Touch up', '599', '', 'A', '2022-07-03 11:37:00', 13),
(99, 'Hair Spa-Herbal', '499', '', 'A', '2022-07-03 11:38:00', 13),
(100, 'Party Basic Make-up', '1999', '', 'A', '2022-07-03 11:38:00', 14),
(101, 'Party HD Make-up', '2999', '', 'A', '2022-07-03 11:38:00', 14),
(102, 'Party Air-Brush Make-up', '3999', '', 'A', '2022-07-03 11:39:00', 14),
(103, 'Bridal Trendy Make-up', '12000', '', 'A', '2022-07-03 11:39:00', 14),
(104, 'Bridal HD Make-up', '15000', '', 'A', '2022-07-03 11:39:00', 14),
(105, 'Bridal Airbrush Make-up', '18000', '', 'A', '2022-07-03 11:39:00', 14),
(106, 'Bridal Celebrity Make-up', '25000', '', 'A', '2022-07-03 11:40:00', 14),
(107, 'Men\'s Hair Cut', '149', '', 'A', '2022-07-03 11:41:00', 15),
(108, 'Men\'s Hair Cut with Blow Dry', '249', '', 'A', '2022-07-03 11:41:00', 15),
(109, 'Men\'s Hair Color Application', '199', '', 'A', '2022-07-03 11:41:00', 15),
(110, 'Men\'s Root Touch-up', '499', '', 'A', '2022-07-03 11:41:00', 15),
(111, 'Clean Shaving', '99', '', 'A', '2022-07-03 11:42:00', 15),
(112, 'Clean Shaving', '149', '', 'A', '2022-07-03 11:42:00', 15),
(113, 'Head Massage', '149', '', 'A', '2022-07-03 11:42:00', 15),
(114, 'Face Detan', '249', '', 'A', '2022-07-03 11:42:00', 15),
(115, 'VLCC Clean-up', '429', '048ddf3c846e691484a915be9acd9713.jpg', 'A', '2022-07-03 11:43:00', 15),
(116, 'VLCC Facial', '599', '', 'A', '2022-07-03 11:43:00', 15),
(117, 'teting', NULL, 'a7d473d142844b0410a5e736d398ac8b.jpg', 'A', '2022-07-04 11:08:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(200) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL,
  `status` enum('A','D') NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `designation`, `details`, `image`, `status`, `created_at`) VALUES
(1, 'Tamanna Gera', 'Senior General Manager - People Development and Optimisation', 'A CuDel experience - just a click away to a smiling you\r\n\r\nA very pleasant end to end experience, right from booking the appointment till the services delivered. The back end operations to the team who comes to serve is totally professional, flexible, courteous and delivers 5/5 level of quality.', '25ddf86d6ddf85ba366c14889d507c0c.jpg', 'A', '2022-04-04 03:41:00'),
(3, 'Ashi Bhatnagar', 'Human Resource Generalist - MLJ Industries LTD HR', 'CuDel is doing great work providing home services. Really liked the services, facial and pedicure, also staff is very cooperative and supportive as per customer requirements, I will surely recommend everyone to try \"CuDel\" Beauty salon at home.', '6f0d085abaaa6ffa825c556e0f03f8c3.jpg', 'A', '2022-04-05 11:08:00'),
(4, 'Meena Jain', 'Home maker and jewellery designer', 'CuDel is the best homebeauty services given by well trained staff l will give them 5 stars keep it up CuDel special thanks to Yetna for her work perfection she is really well trained ????', '406bf45223f3ac9263e8dda1fa8657fe.jpg', 'A', '2022-04-05 11:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `vapp_admin`
--

CREATE TABLE `vapp_admin` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `phone` int(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vapp_admin`
--

INSERT INTO `vapp_admin` (`id`, `name`, `email`, `password`, `phone`, `created_at`, `image`) VALUES
(1, 'admin', 'cudel@123', '123', 65, '2022-03-24 10:27:59', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peyment_status`
--
ALTER TABLE `peyment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pin_code`
--
ALTER TABLE `pin_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_card_category`
--
ALTER TABLE `service_card_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_rate_card`
--
ALTER TABLE `service_rate_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vapp_admin`
--
ALTER TABLE `vapp_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `peyment_status`
--
ALTER TABLE `peyment_status`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `pin_code`
--
ALTER TABLE `pin_code`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service_card_category`
--
ALTER TABLE `service_card_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `service_rate_card`
--
ALTER TABLE `service_rate_card`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vapp_admin`
--
ALTER TABLE `vapp_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
