-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 09:10 AM
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
-- Database: `mit2565`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `design` text COLLATE utf8_unicode_ci NOT NULL,
  `descrip` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `design`, `descrip`, `link`, `images`) VALUES
(2, 'นายเฉลิมชัย วินทะไชย', 'รองผู้อำนวยการ', 'ฝ่ายบริหารทรัพยากร', 'https://www.trattc.ac.th/', 'chaleam101.jpg'),
(3, 'นายชลธน วรรณศรียพงษ์', 'รองผู้อำนวยการ', 'ฝ่ายพัฒนากิจการนักเรียนนักศึกษา', 'https://www.trattc.ac.th/', 'chontana.jpg'),
(4, 'นางสาวอ้อมเดือน สมคิด', 'ทำหน้าที่รองผู้อำนวยการฝ่ายวิชาการ', 'ฝ่ายวิชาการ', 'https://www.trattc.ac.th/', 'aomden.jpg'),
(5, 'นายเฉลิมชัย วินทะไชย', 'รองผู้อำนวยการ', 'ฝ่ายแผนงานและความร่วมมือ', 'https://www.trattc.ac.th/', 'chaleam102.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
