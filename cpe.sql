-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 12:27 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpe`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_pages`
--

CREATE TABLE `about_pages` (
  `id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `detail` text NOT NULL,
  `userid` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(40) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'หน้าแรก', '2020-01-10 10:59:47', NULL, NULL),
(2, 'เกี่ยวกับสาขา', '2020-01-10 10:59:47', NULL, NULL),
(3, 'หลักสูตร', '2020-01-10 10:59:47', NULL, NULL),
(4, 'ห้องปฏิบัติการ', '2020-01-10 10:59:47', NULL, NULL),
(5, 'งานวิจัย/โครงงาน', '2020-01-10 10:59:47', NULL, NULL),
(6, 'ดาวน์โหลด', '2020-01-10 10:59:47', NULL, NULL),
(7, 'ติดต่อสาขา', '2020-01-10 10:59:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_pages`
--

CREATE TABLE `sub_pages` (
  `id` int(11) NOT NULL,
  `title` varchar(40) CHARACTER SET utf8 NOT NULL,
  `page_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_pages`
--

INSERT INTO `sub_pages` (`id`, `title`, `page_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ประวัติความเป็นมา', 2, '2020-01-24 21:11:55', NULL, NULL),
(2, 'คณาจารย์', 2, '2020-01-24 21:11:55', NULL, NULL),
(3, 'ห้องปฏิบัติการโปรแกรมคอมพิวเตอร์', 4, '2020-01-24 21:15:30', NULL, NULL),
(4, 'ห้องปฏิบัติการดิจิตอลและเครื่องวัดทางคอม', 4, '2020-01-24 21:15:30', NULL, NULL),
(5, 'ห้องปฏิบัติการไมโครโพรเซสเซอร์และการจำลอ', 4, '2020-01-24 21:15:30', NULL, NULL),
(6, 'ห้องเครือข่ายคอมพิวเตอร์และการสื่อสารข้อ', 4, '2020-01-24 21:15:30', NULL, NULL),
(7, 'ห้องปฏิบัติการโปรแกรมโมบายประยุกต์', 4, '2020-01-24 21:15:30', NULL, NULL),
(8, 'ห้องปฏิบัติการระบบฐานข้อมูล', 4, '2020-01-24 21:15:30', NULL, NULL),
(9, 'ห้องปฏิบัติการตัวแปลภาษาและวิศวกรรมซอฟต์', 4, '2020-01-24 21:15:30', NULL, NULL),
(10, 'ห้องงานควบคุมหุ่นยนต์ขนาดเล็กและการโปรแก', 4, '2020-01-24 21:15:30', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_pages`
--
ALTER TABLE `about_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_pages`
--
ALTER TABLE `sub_pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_pages`
--
ALTER TABLE `about_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_pages`
--
ALTER TABLE `sub_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
