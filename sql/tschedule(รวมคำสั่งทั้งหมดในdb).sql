-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2021 at 04:48 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tschedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `id` int(10) UNSIGNED NOT NULL,
  `work_subject_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` date NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`id`, `work_subject_id`, `work_subject_name`, `info`, `dates`, `remember_token`, `Created_at`, `update_at`) VALUES
(7, 'EDT212', '', 'สารคดี', '2021-11-20', NULL, '2021-11-26 22:47:16', NULL),
(21, 'EDT211', '', 'ถ่ายภาพ', '2021-11-14', NULL, '2021-11-28 22:33:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grouplearn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'member',
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `firstname`, `lastname`, `password`, `major`, `grouplearn`, `role`, `remember_token`, `Created_at`, `update_at`) VALUES
(1, 'kamonphett', 'kamonphet', '147258369', 'computer education', 'ED2ED67', 'admin', NULL, '2021-11-03 19:53:35', NULL),
(17, 'phett', 'siri', '$2y$10$gM92XpFI1czKLKiDTgMfYOhmDGMo5ACMf47.VleThFFf/IMM9SdpS', 'computer education', 'ED2ED67', 'admin', NULL, '2021-11-04 07:19:26', NULL),
(20, 'phet', 'kamo', '$2y$10$VwMH7zNEXjep4HOJTfxKoOohAhB5OWzWR1bqYzKVvKK5wNBwjF21S', 'computer education', 'ED2ED67', 'member', NULL, '2021-11-04 07:54:42', NULL),
(22, 'phet1', 'siri', '$2y$10$MzYcVIMRiR4JOLJ3dUAvTuoo6ajm7oA8lFoKe1RfEiKv00MVulC4y', 'computer education', 'ED1ED67', 'member', NULL, '2021-11-27 18:59:14', NULL),
(24, 'ping', 'swinging', '$2y$10$lVaknD/v44biMA9S6iTK1OZ5vHBh0Lmkx9bWMR/s8hEfjNt5oQF4W', 'คอมพิวเตอร์ศึกษา', 'ED2ED67', 'member', NULL, '2021-11-28 02:17:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `talanglearn`
--

CREATE TABLE `talanglearn` (
  `id` int(10) UNSIGNED NOT NULL,
  `days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `learn_time` time NOT NULL,
  `subject_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `learn_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `homework_id` int(11) NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `talanglearn`
--

INSERT INTO `talanglearn` (`id`, `days`, `learn_time`, `subject_id`, `subject_name`, `teacher_name`, `learn_link`, `homework_id`, `remember_token`, `Created_at`, `update_at`) VALUES
(1, 'จันทร์', '10:00:00', 'EDT212', 'การเขียนเพื่อการสื่อสารการศึกษา', 'อ.นฤมล ศิระวงษ์', 'https://us02web.zoom.us/j/5817427974?pwd=dnAxbDZkUWNwdXpuQmM0clI4aWx4UT09', 1, NULL, '2021-11-25 01:33:01', NULL),
(2, 'จันทร์', '13:00:00', 'CED213', 'การเขียนโปรแกรมคอมพิวเตอร์', 'อ.สุภโชค เรืองศรี', 'https://zoom.us/j/7983121132', 2, NULL, '2021-11-25 01:33:17', NULL),
(3, 'อังคาร', '09:00:00', 'CED211', 'ระบบเครือข่ายคอมพิวเตอร์และการสื่อสารข้อมูล', 'อ.สุภโชค เรืองศรี', 'https://zoom.us/j/7983121132', 3, NULL, '2021-11-25 01:33:28', NULL),
(4, 'อังคาร', '13:30:00', 'EDT211', 'เทคโนโลยีการถ่ายภาพดิจิทัล', 'ผศ.รัฐพล ประดับเวทย์', 'https://us02web.zoom.us/j/3662347001', 4, NULL, '2021-11-25 01:33:37', NULL),
(5, 'พุธ', '09:00:00', 'ED231', 'การพัฒนาหลักสูตร', 'ผศ.กิตติชัย สุธาสิโนบล', 'https://us02web.zoom.us/j/2661547370?pwd=VGtMM29BR01mOXNyZUNDWWVXSVE4Zz09', 5, NULL, '2021-11-25 01:33:48', NULL),
(6, 'พุธ', '13:30:00', 'ED201', 'ภาษาไทยเพื่อการสื่อสาร', 'อ.ชิษณุพงศ์ อินทรเกษม', 'https://us02web.zoom.us/j/7668094642?pwd=anlQcWNEeGM0ZGl2R0t1WU4zRUtkZz09', 6, NULL, '2021-11-25 01:33:59', NULL),
(7, 'ศุกร์', '13:30:00', 'SWU244', 'วิทยาศาสตร์เพื่อชีวิตและสิ่งแวดล้อมที่ดี', 'อ.ศักดิพงศ์ พันธ์ไผ่', 'https://teams.microsoft.com/l/team/19%3aJNITn1cBfhO9h5SSdz9ZuyoRJNabsZ226zs7SqyeOyQ1%40thread.tacv2/conversations?groupId=64b9e275-b84b-463f-aa06-ae9acb43b202&tenantId=f90c4647-886f-4b4c-b2eb-555df9ec4e81', 7, NULL, '2021-11-25 01:36:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `talanglearn2`
--

CREATE TABLE `talanglearn2` (
  `id` int(10) UNSIGNED NOT NULL,
  `days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `learn_time` time NOT NULL,
  `subject_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `learn_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `homework_id` int(11) NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `talanglearn2`
--

INSERT INTO `talanglearn2` (`id`, `days`, `learn_time`, `subject_id`, `subject_name`, `teacher_name`, `learn_link`, `homework_id`, `remember_token`, `Created_at`, `update_at`) VALUES
(1, 'จันทร์', '08:30:00', 'SWU133', 'การวิ่งเหยาะเพื่อสุขภาพ', 'อ.ศรัณย์ เจียระนัย', '', 1, NULL, '2021-11-27 18:37:38', NULL),
(2, 'จันทร์', '13:30:00', 'CED113', 'มัลติมีเดียและแอนิเมชันเพื่อการศึกษา', 'อ.นิพาดา ไตรรัตน์', '', 2, NULL, '2021-11-27 18:37:38', NULL),
(3, 'อังคาร', '08:30:00', 'SWU161', 'มนุษย์ในสังคมแห่งการเรียนรู้', 'อ.อรรคพล วณิกสัมบัน', '', 3, NULL, '2021-11-27 18:37:38', NULL),
(4, 'อังคาร', '13:30:00', 'SWU141', 'ชีวิตในโลกดิจิทัล', 'อ.ภานุวัฒน์ บุตรเรียง', '', 4, NULL, '2021-11-27 18:37:38', NULL),
(5, 'พุธ', '08:30:00', 'CED111', 'คณิตศาสตร์คอมพิวเตอร์', 'อ.แจ่มจันทร์ ศรีอรุณรัศมี', '', 5, NULL, '2021-11-27 18:37:38', NULL),
(6, 'พุธ', '13:30:00', 'CED112', 'ระบบปฏิบัติการและโปรแกรมประยุกต์เพื่อการศึกษา', 'อ.แจ่มจันทร์ ศรีอรุณรัศมี', '', 6, NULL, '2021-11-27 18:37:38', NULL),
(7, 'พฤหัสบดี', '09:30:00', 'ED141', 'จิตวิทยาสำหรับครู', 'อ.อสมา คัมภิรานนท์', '', 7, NULL, '2021-11-27 18:37:38', NULL),
(8, 'พฤหัสบดี', '13:30:00', 'ED112', 'พันธกิจสัมพันธ์ระหว่างสถานศึกษาและชุมชน', 'อ.ปริชัย ดาวอุดม', '', 8, NULL, '2021-11-27 18:37:38', NULL),
(9, 'ศุกร์', '08:30:00', 'ED191', 'การปฎิบัติการสอน 1', 'อ.พิชญานิน ศิริหล้า, อ.ฐานมาศ มงคล, อ.วิชญ์วิสิฐ รักษาพัชรวงศ์, อ.กรวิชญ์ โสภา', '', 9, NULL, '2021-11-27 18:37:38', NULL),
(10, 'ศุกร์', '13:30:00', 'SWU122', 'ภาษาอังกฤษเพื่อประสิทธิภาพการสื่อสาร 2', 'อ.เสาวลักษณ์ น่วมสำราญ', '', 10, NULL, '2021-11-27 18:37:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `talanglearn`
--
ALTER TABLE `talanglearn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `talanglearn2`
--
ALTER TABLE `talanglearn2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `talanglearn`
--
ALTER TABLE `talanglearn`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `talanglearn2`
--
ALTER TABLE `talanglearn2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
