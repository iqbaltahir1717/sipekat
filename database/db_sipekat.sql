-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 06:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipekat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `createtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`group_id`, `group_name`, `createtime`) VALUES
(1, 'Administrator', '2021-02-02 19:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `setting_id` int(11) NOT NULL,
  `setting_appname` varchar(100) NOT NULL,
  `setting_short_appname` varchar(10) NOT NULL,
  `setting_origin_app` varchar(100) NOT NULL,
  `setting_owner_name` varchar(100) NOT NULL,
  `setting_phone` varchar(30) NOT NULL,
  `setting_email` varchar(100) NOT NULL,
  `setting_address` text NOT NULL,
  `setting_logo` varchar(50) NOT NULL,
  `setting_background` varchar(50) NOT NULL,
  `setting_color` varchar(30) NOT NULL,
  `setting_layout` varchar(20) NOT NULL,
  `setting_about` text NOT NULL,
  `createtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`setting_id`, `setting_appname`, `setting_short_appname`, `setting_origin_app`, `setting_owner_name`, `setting_phone`, `setting_email`, `setting_address`, `setting_logo`, `setting_background`, `setting_color`, `setting_layout`, `setting_about`, `createtime`) VALUES
(1, 'Sistem Informasi Pengaduan Masyrakat', 'SIPEKAT', 'Muna Barat', ' Kelompok 6 RPLBO', '+6282293512121', 'desabarangka@gmail.com', 'Desa Barangka, Kecamatan Barangka, Kabupaten Muna Barat', 'base-logo120220108190852.png', 'base-background120220108191028.jpg', 'skin-blue-light', 'default', '', '2021-02-02 13:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_photo` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_lastlogin` datetime NOT NULL,
  `group_id` int(11) NOT NULL,
  `createtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_password`, `user_fullname`, `user_photo`, `user_email`, `user_lastlogin`, `group_id`, `createtime`) VALUES
(1, 'administrator', '$2y$10$6ELmhIbfosdPtGcQReBXbuMevkFPXZTJUi4au9oh4mxx1iF90tqyy', 'Hayara Octavianiii', 'profile-1-20220109010514.jpg', 'hayara@gmail.com', '2021-02-02 19:40:31', 1, '2021-02-02 19:40:31'),
(2, 'inputer', '$2y$10$F90X8MJyYPfpPzZyu4n0X.yia6vhyTebdi9rOQqyjvTjAXyY4v.92', 'Inputer PTSP', '', 'inputer@gmail.com', '0000-00-00 00:00:00', 2, '2021-02-05 13:59:47'),
(3, 'tegar', '$2y$10$H2cWm3e446fCZCS.u5BpSuwlEFTd4GldERyrY5nGMOxzOHMcT2GU2', 'Tegar', '', 'tegararyu@gmail.com', '0000-00-00 00:00:00', 1, '2021-04-23 11:08:04'),
(5, 'alief', '$2y$10$hnODZcu0JpcYYGs5.VAmDu/KquZZ8nrS7Aewo06/U5s/sY87j8PHe', 'Alief Agung Nugraha', '', 'idgamers79@gmail.com', '0000-00-00 00:00:00', 1, '2021-04-23 11:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_message`
--

CREATE TABLE `tbl_web_message` (
  `message_id` int(11) NOT NULL,
  `message_name` varchar(100) NOT NULL,
  `message_phone` varchar(20) NOT NULL,
  `message_email` varchar(100) NOT NULL,
  `message_subject` varchar(100) NOT NULL,
  `message_text` text NOT NULL,
  `message_reply` text NOT NULL,
  `message_code` varchar(50) NOT NULL,
  `message_status` int(11) NOT NULL,
  `message_date` date NOT NULL,
  `createtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_web_message`
--

INSERT INTO `tbl_web_message` (`message_id`, `message_name`, `message_phone`, `message_email`, `message_subject`, `message_text`, `message_reply`, `message_code`, `message_status`, `message_date`, `createtime`) VALUES
(8, 'Hayara Octaviani', '082293512121', 'hayaraoctaviani@gmail.com', 'Pencurian', 'Telah terjadi pencurian semalam pada pukul 01.20', 'Akan segera kami proses', 'M-20220108204314', 1, '2022-01-08', '2022-01-08 20:43:14'),
(14, 'Jockey', '625627526752', 'jo@gmail.com', 'Kriminal', 'Pencurian Motor', 'oke', 'M-20220109010857', 1, '2022-01-09', '2022-01-09 01:08:57'),
(15, 'Alice', '625627526725', 'alice@gmail.com', 'Kerusakan', 'Jalan rusak', '', 'M-20220109013517', 0, '2022-01-09', '2022-01-09 01:35:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_slider`
--

CREATE TABLE `tbl_web_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(50) NOT NULL,
  `slider_text` varchar(200) NOT NULL,
  `slider_image` varchar(50) NOT NULL,
  `createtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_web_slider`
--

INSERT INTO `tbl_web_slider` (`slider_id`, `slider_title`, `slider_text`, `slider_image`, `createtime`) VALUES
(2, 'Selamat  Datang Di Website SIPEKAT', '(Sistem Informasi Pengaduan Masyarakat)', 'slider-20220108194715.jpg', '2022-01-08 20:46:39'),
(3, '', 'SIPEKAT (Sistem Informasi Pengaduan Masyarakat) adalah sistem informasi yang bertujuan untuk melakukan pengaduan atau laporan terkait permasalahan yang terjadi di desa Barangka ke aparat desa', 'slider-20220108194726.jpg', '2022-01-08 20:46:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_web_message`
--
ALTER TABLE `tbl_web_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_web_slider`
--
ALTER TABLE `tbl_web_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_web_message`
--
ALTER TABLE `tbl_web_message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_web_slider`
--
ALTER TABLE `tbl_web_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
