-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 05:12 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

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
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<header class=\"entry-header\" style=\"margin-bottom: 20px; color: rgb(64, 64, 64); font-family: sans-serif, Arial; font-size: 16px;\"><h1 class=\"entry-title\" style=\"border: 0px; font-family: db_chidlom_xregular, sans-serif, Arial; font-size: 4rem; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; line-height: 4rem; color: rgb(34, 34, 34);\">เกี่ยวกับสาขาวิชา</h1><h1 class=\"entry-title\" style=\"border: 0px; font-family: db_chidlom_xregular, sans-serif, Arial; font-size: 4rem; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; line-height: 4rem; color: rgb(34, 34, 34);\"><header class=\"entry-header\" style=\"margin-bottom: 20px; color: rgb(64, 64, 64); font-family: sans-serif, Arial; font-size: 16px;\"></header><div class=\"entry-content\" style=\"border: 0px; font-family: sans-serif, Arial; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64);\"><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: green;\">ประวัติอย่างย่อ</span></strong></p><hr style=\"background-color: rgb(230, 230, 230); border-top: 0px; height: 1px; margin-bottom: 1.5em;\"><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: green;\">ในอดีต</span></strong><br><img src=\"http://www.cpe.eng.rmutp.ac.th/images/nbk_old.jpg\" alt=\"\" align=\"left\" border=\"0\" style=\"display: block; max-width: 100%; height: auto; box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 4px; margin: 5px;\">*ในปี พศ. 2529 เปิดทำการสอน นักศึกษา ระดับ ปวส.เทคนิคคอมพิวเตอร์</p><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">*ในปี พศ. 2542 ได้เปิดสอนหลักสูตรครุศาสตร์อุตสาหกรรมบัณฑิต สาขาวิศวกรรมคอมพิวเตอร์ (ค.อ.บ.วิศวกรรมคอมพิวเตอร์) และหลักสูตรอุตสาหกรรมศาสตรบัณฑิต สาขาเทคโนโลยีคอมพิวเตอร์ (อส.บ.เทคโนโลยีคอมพิวเตอร์)</p><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">&nbsp;</p><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: green;\">ปัจจุบัน</span></strong><br><img src=\"http://www.cpe.eng.rmutp.ac.th/images/nbk_new.jpg\" alt=\"\" align=\"left\" border=\"0\" style=\"display: block; max-width: 100%; height: auto; box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 4px; margin: 5px;\">*ตั้งแต่ปีการศึกษา 2550 เปิดสอน หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิศวกรรมคอมพิวเตอร์ หลักสูตร 4 ปี (และให้เทียบโอนได้)&nbsp; โดยได้รับผู้จบ ม.6 (วิทย์-คณิต) และ ปวช. สายช่างอุตสาหกรรม เข้ามาศึกษาต่อ โดยมีวัตถุประสงค์ เพื่อผลิตบัณฑิตนักปฏิบัติเป็นสำคัญ นักศึกษาจะได้เรียนรู้ทั้งด้าน Hardware และ Software หลาย ๆ ด้าน โดยมีห้องปฏิบัติการดังนี้</p><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">&nbsp;</p><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">&nbsp;</p><ul style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; list-style-position: outside; list-style-image: initial; line-height: 1.7;\"><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ห้องปฏิบัติการ Communication and Computer Network</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ห้องปฏิบัติการ Electrical Measurement and Instrumentation</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ห้องปฏิบัติการ Digital System Design</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ห้องปฏิบัติการ Programming Languages and Compilers</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ห้องปฏิบัติการ System Programming</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ห้องปฏิบัติการ Mobile Programming (Mac OS)</li></ul></div></h1></header>', '2020-01-27 15:00:28', '2020-01-27 15:43:55', NULL),
(2, '<header class=\"entry-header\" style=\"margin-bottom: 20px; color: rgb(64, 64, 64); font-family: sans-serif, Arial; font-size: 16px;\"><h1 class=\"entry-title\" style=\"border: 0px; font-family: db_chidlom_xregular, sans-serif, Arial; font-size: 4rem; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; line-height: 4rem; color: rgb(34, 34, 34);\">ประวัติความเป็นมา</h1></header><div class=\"entry-content\" style=\"border: 0px; font-family: sans-serif, Arial; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64);\"><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">สถาบันเทคโนโลยีราชมงคล วิทยาเขตพระนครเหนือ (เดิม)</strong><br><img src=\"http://www.cpe.eng.rmutp.ac.th/wp-content/uploads/2016/07/picture5C12255411071.jpg\" alt=\"\" width=\"300\" align=\"middle\" border=\"0\" style=\"display: block; max-width: 100%; height: auto; box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 4px;\"></p><ul style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; list-style-position: outside; list-style-image: initial; line-height: 1.7;\"><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ปี พ.ศ.2529 เปิดสอนหลักสูตร ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.) สาขาเทคนิคคอมพิวเตอร์ ซึ่งมุ่งเน้นให้ผู้เรียนมีทักษะ การปฏิบัติงานด้านคอมพิวเตอร์ที่มีความเชี่ยวชาญเฉพาะ แก้ไขปัญหาระบบคอมพิวเตอร์ที่มีความซับซ้อน</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ปี พ.ศ.2542 เปิดสอนหลักสูตรครุศาสตร์อุตสาหกรรมบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ (ค.อ.บ.วิศวกรรมคอมพิวเตอร์) และหลักสูตรอุตสาหกรรมศาสตรบัณฑิต สาขาเทคโนโลยีคอมพิวเตอร์ (อส.บ.เทคโนโลยีคอมพิวเตอร์)</li></ul><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">คณะวิศวกรรมศาสตร์ มหาวิทยาลัยเทคโนโลยีราชมงคลพระนคร (ปัจจุบัน)</strong><br></p><ul style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; list-style-position: outside; list-style-image: initial; line-height: 1.7;\"><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ปี พ.ศ.2550 เปิดสอนหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ ทั้งหลักสูตร 4 ปี และหลักสูตรเทียบโอน</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ปี พ.ศ.2555 ทำการปรับปรุงหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ เพื่อให้รองรับมาตรฐานคุณวุฒิวิชาชีพแห่งชาติ (มคอ.)</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ปี พ.ศ.2560 ทำการปรับปรุงหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ ให้รองรับเทคโนโลยีสมัยใหม่ที่มีการเปลี่ยนแปลง และมุ่งเน้นทักษะการปฏิบัติงาน เพื่อตอบสนองอัตลักษณ์ของมหาวิทยาลัย คือ สร้างบัณฑิตนักปฏิบัติ</li></ul></div>', '2020-01-27 15:14:21', '2020-01-27 15:24:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `img_title_alt` text CHARACTER SET utf8 NOT NULL,
  `img_url` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `sort`, `title`, `img_title_alt`, `img_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Huawei05-1536x449.jpg', 'Huawei ICT Competition ณ ม.เทคโนโลยีราชมงคลพระนคร', '', '2020-01-24 23:34:00', '2020-01-25 16:24:00', NULL),
(2, 2, 'รับสมัครปริญญาตรี-รับตรง-63-1140x450.png', '', '', '2020-01-24 23:34:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_news`
--

CREATE TABLE `category_news` (
  `id` int(11) NOT NULL,
  `title` varchar(40) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_news`
--

INSERT INTO `category_news` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ประชาสัมพันธ์', '2020-02-03 01:41:56', NULL, NULL),
(2, 'กิจกรรม', '2020-02-03 01:41:56', '2020-02-10 07:03:13', NULL);

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

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<header class=\"entry-header\" style=\"margin-bottom: 20px; color: rgb(64, 64, 64); font-family: sans-serif, Arial; font-size: 16px;\"><h1 class=\"entry-title\" style=\"border: 0px; font-family: db_chidlom_xregular, sans-serif, Arial; font-size: 4rem; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; line-height: 4rem; color: rgb(34, 34, 34);\">หลักสูตร</h1></header><div class=\"entry-content\" style=\"border: 0px; font-family: sans-serif, Arial; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64);\"><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><a href=\"http://www.cpe.eng.rmutp.ac.th/images/07/eng_icon4.jpg\" style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: none; padding: 0px; vertical-align: baseline; color: rgb(88, 58, 131);\"><img alt=\"eng_icon4\" class=\"alignnone size-medium wp-image-82\" height=\"72\" src=\"http://www.cpe.eng.rmutp.ac.th/images/07/eng_icon4-300x72.jpg\" width=\"300\" style=\"border: 0px; height: auto; display: block; max-width: 100%; box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 4px;\"></a><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\"><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: green;\"><strong style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">ชื่อหลักสูตร</strong> </span></span><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">ชื่อภาษาไทย หลักสูตรวิศวกรรมคอมพิวเตอร์ สาขาวิชาวิศวกรรมคอมพิวเตอร์ </span><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">ชื่อภาษาอังกฤษ Bachelor of Engineering Program in Computer Engineering </span></p><ul style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; list-style-position: outside; list-style-image: initial; line-height: 1.7;\"><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">หลักสูตร2550 [<a href=\"http://www.cpe.eng.rmutp.ac.th/docs/cpe-2550.pdf\" style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: none; padding: 0px; vertical-align: baseline; color: rgb(45, 121, 174);\">PDF</a>]</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">หลักสูตรปรับปรุง 2555 ตามมาตรฐานTQF [<a href=\"http://www.cpe.eng.rmutp.ac.th/docs/cpe-2555.pdf\" style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: none; padding: 0px; vertical-align: baseline; color: rgb(45, 121, 174);\">PDF</a>]</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">หลักสูตรปรับปรุง 2560 ตามมาตรฐานTQF [<a href=\"https://www.rmutp.ac.th/web2561/wp-content/uploads/2019/02/%E0%B8%A1%E0%B8%84%E0%B8%AD.2-%E0%B8%A7%E0%B8%A8.%E0%B8%9A.-%E0%B8%A7%E0%B8%B4%E0%B8%A8%E0%B8%A7%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B8%9E%E0%B8%B4%E0%B8%A7%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C-%E0%B8%9B%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%9B%E0%B8%A3%E0%B8%B8%E0%B8%87-2560-%E0%B8%9A%E0%B8%B5%E0%B8%9A%E0%B8%AD%E0%B8%B1%E0%B8%94.pdf\" style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: none; padding: 0px; vertical-align: baseline; color: rgb(45, 121, 174);\">PDF</a>]</li></ul><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\"><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: green;\"><strong style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">ชื่อปริญญา</strong></span></span><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\"> </span><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">ชื่อเต็มภาษาไทย วิศวกรรมศาสตรบัณฑิต (วิศวกรรมคอมพิวเตอร์) </span><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">ชื่อย่อภาษาไทย วศ.บ. (วิศวกรรมคอมพิวเตอร์) </span><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">ชื่อเต็มภาษาอังกฤษ Bachelor of Engineering (Computer Engineering) </span><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">ชื่อย่อภาษาอังกฤษ B.Eng. (Computer Engineering) </span><br style=\"color: rgb(61, 61, 61);\"><br><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\"><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: green;\"><strong style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">วัตถุประสงค์ </strong></span></span></p><ul style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; list-style-position: outside; list-style-image: initial; line-height: 1.7;\"><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">เพื่อผลิตวิศวกรปฏิบัติการ ที่มีความสามารถปฏิบัติงานด้านวิศวกรรมคอมพิวเตอร์ได้อย่างมีประสิทธิภาพ</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">เพื่อผลิตวิศวกรที่มีความสามารถปฏิบัติงานในระบบคอมพิวเตอร์ และเทคโนโลยีสารสนเทศโดยมีพื้นฐานในด้านการพัฒนาระบบเครือข่ายและการออกแบบ ทั้งสามารถเสนอข้อมูลเกี่ยวกับการดำเนินการออกแบบ ติดตั้งและทดสอบได้</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">เพื่อฝึกฝนให้มีความคิดริเริ่ม มีกิจนิสัยในการค้นคว้าและปรับปรุงตนเองให้ก้าวหน้าอยู่เสมอ สามารถแก้ปัญหาด้วยหลักการและเหตุผล ปฏิบัติงานด้วยหลักวิชาการที่มีการวางแผนและควบคุมอย่างรอบคอบ ซึ่งก่อให้เกิดผลสัมฤทธิ์ในการทำงาน</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">เพื่อเสริมสร้างคุณธรรม ระเบียบวินัย ความซื่อสัตย์สุจริต ความขยันหมั่นเพียร ความสำนึกในจรรยาบรรณแห่งอาชีพ ความรับผิดชอบต่อหน้าที่และสังคม</li></ul></div>', '2020-02-03 00:41:37', '2020-02-03 00:42:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `detail` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<header class=\"entry-header\" style=\"margin-bottom: 20px; color: rgb(64, 64, 64); font-family: sans-serif, Arial; font-size: 16px;\"><h1 class=\"entry-title\" style=\"border: 0px; font-family: db_chidlom_xregular, sans-serif, Arial; font-size: 4rem; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; line-height: 4rem; color: rgb(34, 34, 34);\">หลักสูตร</h1></header><div class=\"entry-content\" style=\"border: 0px; font-family: sans-serif, Arial; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64);\"><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><a href=\"http://www.cpe.eng.rmutp.ac.th/images/07/eng_icon4.jpg\" style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: none; padding: 0px; vertical-align: baseline; color: rgb(88, 58, 131);\"><img alt=\"eng_icon4\" class=\"alignnone size-medium wp-image-82\" height=\"72\" src=\"http://www.cpe.eng.rmutp.ac.th/images/07/eng_icon4-300x72.jpg\" width=\"300\" style=\"border: 0px; height: auto; display: block; max-width: 100%; box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 4px;\"></a><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\"><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: green;\"><strong style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">ชื่อหลักสูตร</strong> </span></span><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">ชื่อภาษาไทย หลักสูตรวิศวกรรมคอมพิวเตอร์ สาขาวิชาวิศวกรรมคอมพิวเตอร์ </span><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">ชื่อภาษาอังกฤษ Bachelor of Engineering Program in Computer Engineering </span></p><ul style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; list-style-position: outside; list-style-image: initial; line-height: 1.7;\"><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">หลักสูตร2550 [<a href=\"http://www.cpe.eng.rmutp.ac.th/docs/cpe-2550.pdf\" style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: none; padding: 0px; vertical-align: baseline; color: rgb(45, 121, 174);\">PDF</a>]</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">หลักสูตรปรับปรุง 2555 ตามมาตรฐานTQF [<a href=\"http://www.cpe.eng.rmutp.ac.th/docs/cpe-2555.pdf\" style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: none; padding: 0px; vertical-align: baseline; color: rgb(45, 121, 174);\">PDF</a>]</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">หลักสูตรปรับปรุง 2560 ตามมาตรฐานTQF [<a href=\"https://www.rmutp.ac.th/web2561/wp-content/uploads/2019/02/%E0%B8%A1%E0%B8%84%E0%B8%AD.2-%E0%B8%A7%E0%B8%A8.%E0%B8%9A.-%E0%B8%A7%E0%B8%B4%E0%B8%A8%E0%B8%A7%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B8%9E%E0%B8%B4%E0%B8%A7%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C-%E0%B8%9B%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%9B%E0%B8%A3%E0%B8%B8%E0%B8%87-2560-%E0%B8%9A%E0%B8%B5%E0%B8%9A%E0%B8%AD%E0%B8%B1%E0%B8%94.pdf\" style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: none; padding: 0px; vertical-align: baseline; color: rgb(45, 121, 174);\">PDF</a>]</li></ul><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\"><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: green;\"><strong style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">ชื่อปริญญา</strong></span></span><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\"> </span><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">ชื่อเต็มภาษาไทย วิศวกรรมศาสตรบัณฑิต (วิศวกรรมคอมพิวเตอร์) </span><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">ชื่อย่อภาษาไทย วศ.บ. (วิศวกรรมคอมพิวเตอร์) </span><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">ชื่อเต็มภาษาอังกฤษ Bachelor of Engineering (Computer Engineering) </span><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">ชื่อย่อภาษาอังกฤษ B.Eng. (Computer Engineering) </span><br style=\"color: rgb(61, 61, 61);\"><br><br style=\"color: rgb(61, 61, 61);\"><br><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\"><span style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: green;\"><strong style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">วัตถุประสงค์ </strong></span></span></p><ul style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; list-style-position: outside; list-style-image: initial; line-height: 1.7;\"><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">เพื่อผลิตวิศวกรปฏิบัติการ ที่มีความสามารถปฏิบัติงานด้านวิศวกรรมคอมพิวเตอร์ได้อย่างมีประสิทธิภาพ</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">เพื่อผลิตวิศวกรที่มีความสามารถปฏิบัติงานในระบบคอมพิวเตอร์ และเทคโนโลยีสารสนเทศโดยมีพื้นฐานในด้านการพัฒนาระบบเครือข่ายและการออกแบบ ทั้งสามารถเสนอข้อมูลเกี่ยวกับการดำเนินการออกแบบ ติดตั้งและทดสอบได้</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">เพื่อฝึกฝนให้มีความคิดริเริ่ม มีกิจนิสัยในการค้นคว้าและปรับปรุงตนเองให้ก้าวหน้าอยู่เสมอ สามารถแก้ปัญหาด้วยหลักการและเหตุผล ปฏิบัติงานด้วยหลักวิชาการที่มีการวางแผนและควบคุมอย่างรอบคอบ ซึ่งก่อให้เกิดผลสัมฤทธิ์ในการทำงาน</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(61, 61, 61);\">เพื่อเสริมสร้างคุณธรรม ระเบียบวินัย ความซื่อสัตย์สุจริต ความขยันหมั่นเพียร ความสำนึกในจรรยาบรรณแห่งอาชีพ ความรับผิดชอบต่อหน้าที่และสังคม</li></ul></div>', '2020-01-27 15:39:57', '2020-02-03 00:16:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `title` varchar(40) CHARACTER SET utf8 NOT NULL,
  `detail` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `title`, `detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ห้องปฏิบัติการโปรแกรมคอมพิวเตอร์', '<p style=\"border: 0px; font-family: sans-serif, Arial; font-size: 16px; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64);\">ห้องปฏิบัติการโปรแกรมคอมพิวเตอร์ รองรับการเรียนการสอนในรายวิชาการเขียนโปรแกรมคอมพิวเตอร์ ทั้งในและนอกสาขาวิชา เพื่อรองรับการปูพื้นฐานการเขียนโปรแกรมให้กับนักศึกษาของคณะวิศวกรรมศาสตร์ในทุกสาขาวิชา ซึ่งภายในห้องปฏิบัติการได้จัดเตรียมอุปกรณ์ดังนี้</p><ul style=\"border: 0px; font-family: sans-serif, Arial; font-size: 16px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; list-style-position: outside; list-style-image: initial; line-height: 1.7; color: rgb(64, 64, 64);\"><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">เครื่องคอมพิวเตอร์  Dell Optiplex จำนวน 30 ชุด</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">เครื่องคอมพิวเตอร์ Dell Optiplex จำนวน 30 ชุด</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">เครื่องคอมพิวเตอร์  Dell ThinkCentre จำนวน 30 ชุด</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ชุดกระดานและอุปกรณ์การเรียนการสอนอัจริยะ (Smart Class Room) จำนวน 3 ชุด</li></ul><p style=\"border: 0px; font-family: sans-serif, Arial; font-size: 16px; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64);\"><strong style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: bold; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">อาจารย์ผู้ดูแลห้องปฏิบัติการ :</strong> อ.เกรียงไกร เหลืองอำพล, อ.กร พวงนาค</p>', '2020-02-02 23:52:55', '2020-02-02 23:58:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `event_id`, `detail`, `user_id`, `ip`, `created_at`, `updated_at`, `deleted_at`) VALUES
(47, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 2, '::1', '2019-10-12 08:41:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 2, '::1', '2019-10-13 07:38:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 2, 'ออกจากระบบ Aluinch Backoffice', 2, '::1', '2019-10-13 10:12:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 2, '::1', '2019-11-14 02:30:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 2, 'ออกจากระบบ Aluinch Backoffice', 2, '::1', '2019-11-14 03:00:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 1, '::1', '2019-11-14 03:01:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 4, 'แก้ไข Category Technology', 1, '::1', '2019-11-14 03:01:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 4, 'แก้ไข Category Technology', 1, '::1', '2019-11-14 03:02:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 2, '::1', '2019-11-14 08:12:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 2, 'ออกจากระบบ Aluinch Backoffice', 2, '::1', '2019-11-14 08:25:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 2, '::1', '2019-11-14 08:30:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 1, '::1', '2019-11-15 03:06:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 2, 'ออกจากระบบ Aluinch Backoffice', 1, '::1', '2019-11-15 05:13:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 2, '::1', '2019-11-15 05:13:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 2, 'ออกจากระบบ Aluinch Backoffice', 2, '::1', '2019-11-15 05:13:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 1, '::1', '2019-11-15 05:13:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 1, '::1', '2019-11-25 12:49:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 4, 'แก้ไข Info Contact Page', 1, '::1', '2019-11-25 13:10:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 4, 'แก้ไข Info Contact Page', 1, '::1', '2019-11-25 14:06:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 4, 'แก้ไข Info Contact Page', 1, '::1', '2019-11-25 14:06:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 4, 'แก้ไข Info Contact Page', 1, '::1', '2019-11-25 14:07:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 1, '::1', '2019-12-12 03:46:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 1, '::1', '2020-01-10 10:06:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 1, '::1', '2020-01-24 22:45:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 1, '::1', '2020-01-25 13:29:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 6, 'จัดเรียง Image Banner', 1, '::1', '2020-01-25 13:53:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 6, 'จัดเรียง Image Banner', 1, '::1', '2020-01-25 13:58:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 6, 'จัดเรียง Image Banner', 1, '::1', '2020-01-25 13:58:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 6, 'จัดเรียง Image Banner', 1, '::1', '2020-01-25 14:01:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 6, 'จัดเรียง Image Banner', 1, '::1', '2020-01-25 14:14:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 6, 'จัดเรียง Image Banner', 1, '::1', '2020-01-25 14:14:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 6, 'จัดเรียง Image Banner', 1, '::1', '2020-01-25 14:16:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:21:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:21:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:27:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:27:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:32:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:32:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:37:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:47:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:50:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:50:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:53:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:53:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:53:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:53:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 14:54:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 15:13:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 15:19:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 15:21:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 15:22:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 3, 'เพิ่ม Image Banner', 1, '::1', '2020-01-25 15:30:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 3, 'เพิ่ม Image Banner', 1, '::1', '2020-01-25 15:33:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 5, 'ลบ Image Banner', 1, '::1', '2020-01-25 15:39:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-25 15:40:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 4, 'แก้ไข Image Banner', 1, '::1', '2020-01-25 15:47:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 4, 'แก้ไข Image Banner', 1, '::1', '2020-01-25 15:48:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 4, 'แก้ไข Image Banner', 1, '::1', '2020-01-25 15:48:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 5, 'ลบ Image Banner', 1, '::1', '2020-01-25 15:49:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 4, 'แก้ไข Image Banner', 1, '::1', '2020-01-25 16:24:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 1, '::1', '2020-01-27 13:22:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-01-27 14:27:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 4, 'แก้ไข Info Contact Page', 1, '::1', '2020-01-27 15:12:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 4, 'แก้ไข Info Contact Page', 1, '::1', '2020-01-27 15:15:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 4, 'แก้ไข Info Contact Page', 1, '::1', '2020-01-27 15:16:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 4, 'แก้ไข Info Contact Page', 1, '::1', '2020-01-27 15:16:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 4, 'แก้ไข Info Contact Page', 1, '::1', '2020-01-27 15:17:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 4, 'แก้ไข Info Contact Page', 1, '::1', '2020-01-27 15:23:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 4, 'แก้ไข Info Contact Page', 1, '::1', '2020-01-27 15:24:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 4, 'แก้ไข Info Contact Page', 1, '::1', '2020-01-27 15:42:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 4, 'แก้ไข Info Contact Page', 1, '::1', '2020-01-27 15:43:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 4, 'แก้ไข Info Contact Page', 1, '::1', '2020-01-27 15:43:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 4, 'แก้ไข Info Contact Page', 1, '::1', '2020-01-27 15:44:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 1, '::1', '2020-02-02 23:04:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 3, 'เพิ่ม Group Product', 1, '::1', '2020-02-02 23:52:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 4, 'แก้ไข Group Product', 1, '::1', '2020-02-02 23:58:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 3, 'เพิ่ม Group Product', 1, '::1', '2020-02-02 23:59:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 5, 'ลบ Group Product', 1, '::1', '2020-02-02 23:59:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 4, 'แก้ไข Info Contact Page', 1, '::1', '2020-02-03 00:16:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 4, 'แก้ไข Info Contact Page', 1, '::1', '2020-02-03 00:22:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 4, 'แก้ไข Info Contact Page', 1, '::1', '2020-02-03 00:42:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 1, '::1', '2020-02-03 07:25:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 6, 'จัดเรียง Image Gallery Home Page', 1, '::1', '2020-02-03 07:29:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 1, '::1', '2020-02-10 05:55:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 3, 'เพิ่ม Image News', 1, '::1', '2020-02-10 06:50:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 3, 'เพิ่ม Image Category_news', 1, '::1', '2020-02-10 06:58:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 5, 'ลบ Image Category_news', 1, '::1', '2020-02-10 07:00:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 4, 'แก้ไข Image Category_news', 1, '::1', '2020-02-10 07:03:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 4, 'แก้ไข Image Category_news', 1, '::1', '2020-02-10 07:03:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 1, '::1', '2020-02-16 12:04:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 3, 'เพิ่ม ข่าว', 1, '::1', '2020-02-16 12:55:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 3, 'เพิ่ม ข่าว', 1, '::1', '2020-02-16 12:59:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 1, 'เข้าสู่ระบบ Aluinch Backoffice', 1, '::1', '2020-02-16 15:14:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `log_events`
--

CREATE TABLE `log_events` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_events`
--

INSERT INTO `log_events` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'login', '2019-10-09 05:02:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'logout', '2019-10-09 05:02:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'add', '2019-10-09 05:02:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'update', '2019-10-09 05:02:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'delete', '2019-10-09 05:03:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'sort_item', '2019-10-09 05:03:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'other', '2019-10-09 05:03:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `detail` text NOT NULL,
  `category_news_id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `detail`, `category_news_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Huawei ICT Competition ณ ม.เทคโนโลยีราชมงคลพระนคร\r\n', 'ภาพบรรยากาศการเดินสายประชาสัมพันธ์ Huawei ICT Competition Thailand 2019-2020 ณ คณะวิศวกรรมศาสตร์ มหาวิทยาลัยเทคโนโลยีราชมงคลพระนคร (RMUTP)\r\n\r\n', '', 1, '1', '2020-02-03 01:36:44', NULL, NULL),
(3, 'a', 'ก', '<p>ๆ</p>', 1, '1', '2020-02-16 12:55:33', NULL, NULL),
(4, '2', '2', '<p>2</p>', 1, '1', '2020-02-16 12:59:44', NULL, NULL);

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
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `detail` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<header class=\"entry-header\" style=\"margin-bottom: 20px; color: rgb(64, 64, 64); font-family: sans-serif, Arial; font-size: 16px;\"><h1 class=\"entry-title\" style=\"border: 0px; font-family: db_chidlom_xregular, sans-serif, Arial; font-size: 4rem; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; line-height: 4rem; color: rgb(34, 34, 34);\">งานวิจัย / โครงงาน</h1></header><div class=\"entry-content\" style=\"border: 0px; font-family: sans-serif, Arial; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64);\"><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">โครงานระดับปริญญาตรี ของสาขาวิชาวิศวรรมคอมพิวเตอร์ มีการจัดแบ่งออกเป็นหลายด้าน ดังต่อไปนี้</p><ul style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; list-style-position: outside; list-style-image: initial; line-height: 1.7;\"><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ด้านไมโครโพรเซสเซอร์ และการเชื่อมต่อ</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ด้านการพัฒนาซอฟต์แวร์ ทั้งโมบายและโปรแกรมประยุกต์</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ด้านการพัฒนาเกมส์ และสื่อการเรียนรู้สมัยใหม่</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ด้านระบบเครือข่ายและคลาวด์</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ด้านบูรณาการ</li></ul><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">โครงงาน ประจำปีการศึกษา 2560 มีดังนี้</p><p style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><a href=\"http://www.cpe.eng.rmutp.ac.th/wp-content/uploads/2018/06/Amoto.jpg\" style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: none; padding: 0px; vertical-align: baseline; color: rgb(88, 58, 131);\"><img class=\"alignnone size-medium wp-image-963\" src=\"http://www.cpe.eng.rmutp.ac.th/wp-content/uploads/2018/06/Amoto-300x150.jpg\" alt=\"\" width=\"300\" height=\"150\" srcset=\"http://www.cpe.eng.rmutp.ac.th/wp-content/uploads/2018/06/Amoto-300x150.jpg 300w, http://www.cpe.eng.rmutp.ac.th/wp-content/uploads/2018/06/Amoto-768x385.jpg 768w, http://www.cpe.eng.rmutp.ac.th/wp-content/uploads/2018/06/Amoto-1024x513.jpg 1024w, http://www.cpe.eng.rmutp.ac.th/wp-content/uploads/2018/06/Amoto-500x251.jpg 500w, http://www.cpe.eng.rmutp.ac.th/wp-content/uploads/2018/06/Amoto.jpg 1814w\" sizes=\"(max-width: 300px) 100vw, 300px\" style=\"border: 0px; height: auto; display: block; max-width: 100%; box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 4px;\"></a></p><ol style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; list-style-position: outside; list-style-image: initial; line-height: 1.7;\"><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ระบบแจ้งเตือนการเกิดอุบัติเหตุของรถจักรยานยนต์</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">กระจกอัฉริยะ</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ระบบดูแลผักอัตโนมัติ</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">โรงเรือนเพาะเห็ดอัตโนมัติ</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ระบบป้องกันภัยในบ้านแจ้งเตือนผ่านไลน์แอปพลิเคชั่น</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ระบบแจ้งเตือนข่าวสารนักศึกษาผ่านโทรศัพท์เคลื่อนที่</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">เครื่องเจาะแผ่นวงจรพิมพ์อัตโนมัติ</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">เครื่องวิเคราะห์และตรวจสอบไอซี-ทีทีแอล</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">แอปพลิเคชั่นช่วยฝึกอบรมการปฏิบัติงานในองค์กร</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">แอปพลิเคชั่นค้นหาร้านซ่อมรถจักรยานยนต์</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ระบบตรวจจับบุคคลแจ้งเตือนผ่านโทรศัพท์เคลื่อนที่</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">การออกแบบและจำลองการทำงานของระบบเครือข่ายภายในโรงพยาบาล</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">เกมส์ต่อสู้ 3 มิติ ด้วยไพ่ โดยใช้เทคนิคการค้นหาแบบปฏิปักษ์</li><li style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0px 36px; outline: 0px; padding: 0px; vertical-align: baseline;\">ระบบควบคุมเครื่องใช้ไฟฟ้า (IOT)</li></ol></div>', '2020-02-03 00:22:15', '2020-02-03 00:22:27', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'spadmin', '$2y$10$ZFYrWY4cThYRqh7oilxwae9OQzpX48O3U41wm.xwsHdN78NRHrUU2', 1, '2019-08-14 08:23:55', NULL, NULL),
(2, 'admin', '$2y$10$KK27JndEgg/gpjsy3t5dEe4dLrO6r1rpLDuo4.1rKfUx2tvCIRlNq', 2, '2019-10-08 09:39:07', '2019-10-09 05:05:42', NULL),
(3, 'khun', '$2y$10$barSRj6dErpHvkgNNe.V9OzmNmr8gZGszHnTPP58Dbyb07aKfjiMC', 2, '2019-10-08 09:39:14', '2019-10-09 05:05:47', NULL);

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
-- Indexes for table `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_events`
--
ALTER TABLE `log_events`
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
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_pages`
--
ALTER TABLE `sub_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `log_events`
--
ALTER TABLE `log_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_pages`
--
ALTER TABLE `sub_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
