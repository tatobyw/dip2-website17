-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 07:21 AM
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
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotnews`
--

CREATE TABLE `hotnews` (
  `id` int(11) NOT NULL,
  `head` text COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `namepic` text COLLATE utf8_unicode_ci NOT NULL,
  `namedoc` text COLLATE utf8_unicode_ci NOT NULL,
  `hotcount` int(11) NOT NULL,
  `design` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotnews`
--

INSERT INTO `hotnews` (`id`, `head`, `detail`, `date`, `namepic`, `namedoc`, `hotcount`, `design`, `time`) VALUES
(1, 'ประกาศวิทยาลัยเทคนิคตราด เรื่องสุจริต โปร่งใส วิทยาลัยเทคนิคตราดใสสะอาด 2565”', 'ประกาศวิทยาลัยเทคนิคตราด เรื่องสุจริต โปร่งใส วิทยาลัยเทคนิคตราดใสสะอาด 2565” และ “งดรับ งดให้” ของขวัญ ของกำนัลทุกชนิดจากการปฏิบัติหน้าที่ (No Gift Policy)', '25 มกราคม 2565', 'pngegg.png', 'IT-EAF2.pdf', 0, 'ผู้ดูแลระบบ-วท.ตราด', '2022-01-25 10:03:00'),
(2, 'วิทยาลัยเทคนิคตราด ขยายเวลาการจัดการเรียนการสอนในรูปแบบออนไลน์ Online ประจำภาคเรียนที่ 2 ปีการศึกษา 2564', 'ขยายเวลาการจัดการเรียนการสอนในรูปแบบออนไลน์ Online ในสถานการณ์การแพร่ระบาดของโรคติดเชื้อไวรัสโคโรนา 2019 (Covid-19ป ประจำภาคเรียนที่ 2 ปีการศึกษา 2564 (ฉบับที่ 4)', '25 มกราคม 2565', 'pngegg2.png', 'IT-EAF2.pdf', 0, 'ผู้ดูแลระบบ-วท.ตราด', '2022-01-25 10:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `role_as` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `password`, `email`, `role_as`, `status`, `created_at`) VALUES
(1, 'Mark', 'Sakaberg', '12345678', 'mark@gmail.com', 1, 0, '2022-01-11 08:52:30'),
(2, 'Jeff', 'Bezzo', '12345678', 'jeff@gmail.com', 2, 0, '2022-01-11 09:10:06'),
(3, 'Mark2', 'Sakaberg2', '12345678', 'mark2@gmail.com', 2, 0, '2022-01-11 09:25:30'),
(4, 'Mark3', 'Sakaberg3', '12345678', 'mark3@gmail.com', 0, 0, '2022-01-11 09:27:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotnews`
--
ALTER TABLE `hotnews`
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
-- AUTO_INCREMENT for table `hotnews`
--
ALTER TABLE `hotnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
