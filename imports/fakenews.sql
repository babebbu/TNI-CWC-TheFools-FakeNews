-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2019 at 02:49 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fakenews`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_logs`
--

CREATE TABLE `admin_login_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_login_logs`
--

INSERT INTO `admin_login_logs` (`id`, `user_id`, `timestamp`) VALUES
(1, 1, '2019-11-08 15:27:10'),
(2, 1, '2019-11-06 13:53:15'),
(3, 1, '2019-11-06 13:53:49'),
(4, 1, '2019-11-06 13:57:10'),
(5, 1, '2019-11-06 13:57:10'),
(6, 1, '2019-11-06 13:57:18'),
(7, 1, '2019-11-06 13:57:18'),
(8, 1, '2019-11-06 13:57:25'),
(9, 1, '2019-11-06 13:57:25'),
(10, 1, '2019-11-06 13:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `flag`
--

CREATE TABLE `flag` (
  `id` int(11) NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flag`
--

INSERT INTO `flag` (`id`, `value`) VALUES
(1, 'Aol mshn pz aup_jdj{M_Ohohoh_F0b_hyl_Aol_Mvvs}'),
(2, 'Aol mshn pz aup_jdj{P_U00i_Aolzl_hyl_mhrl_mshnz}'),
(3, 'Aol mshn pz aup_jdj{Z_Ayf_vizlycpun_hktpu_ilohcpvby}'),
(4, 'Aol mshn pz aup_jdj{O_Ayf_vizlycpun_wvzalk_uldz}');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `timestamp`) VALUES
(1, '', 'ทุกวันนี้มีปอมที่ถูกเจ้าของทอดทิ้งจำนวนมากเนื่องจากความซนของมัน&lt;br&gt; \r\nด้วยความที่แอดมินรักปอมมาก จึงรับดูแลปอมที่ถูกเจ้าของทอดทิ้งทุกตัว&lt;br&gt;พร้อมทั้งหาเจ้าของใหม่ให้น้องปอมๆทั้งหลาย  \r\nและจัดนิทรรศการน้องปอมกับสิ่งมหัศจรรย์&lt;br&gt;แต่การดำเนินการดังกล่าวนั้นมีค่าใช้จ่ายจำนวนมหาศาล&lt;br&gt;\r\nทั้งนี้ผู้ใดที่สนใจร่วมสนับสนุนสามารถบริจาคสมทบทุนได้ผ่านทางช่องทางดังต่อไปนี้&lt;br&gt;\r\n&lt;br&gt;\r\nบริจาคผ่านบัตรเครดิต/เดบิต&lt;br&gt;\r\nบริจาคผ่านบัตรการโอนเงินและแจ้งโอนเงิน&lt;br&gt;\r\nบริจาคผ่าน PromptPay QR&lt;br&gt;\r\n&lt;br&gt;\r\nทีมงาน @แอดปอม ขอขอบคุณทุกท่าน', '2019-11-09 04:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$jzl0B7r6zzMvAAU9ncez7.vRF4doJNc6RZ4ePc9oG0I18EejZE3km', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_logs`
--
ALTER TABLE `admin_login_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flag`
--
ALTER TABLE `flag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT for table `admin_login_logs`
--
ALTER TABLE `admin_login_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `flag`
--
ALTER TABLE `flag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
