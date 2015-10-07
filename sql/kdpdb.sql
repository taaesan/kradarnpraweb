-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2015 at 01:51 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kdpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_group`
--

CREATE TABLE IF NOT EXISTS `tb_group` (
  `id` int(11) NOT NULL,
  `group_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `group_desc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `group_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_group`
--

INSERT INTO `tb_group` (`id`, `group_name`, `group_desc`, `group_link`) VALUES
(1, 'ศิษย์หลวงปู่นาม วัดน้อยชมภู่', 'ศิษย์หลวงปู่นาม วัดน้อยชมภู่', 'https://www.facebook.com/groups/sitluangpoonham/');

-- --------------------------------------------------------

--
-- Table structure for table `tb_item`
--

CREATE TABLE IF NOT EXISTS `tb_item` (
  `id` int(11) NOT NULL,
  `item_date` date NOT NULL,
  `item_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `item_close_price` int(11) NOT NULL,
  `item_type_id` int(11) NOT NULL,
  `user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_item`
--

INSERT INTO `tb_item` (`id`, `item_date`, `item_link`, `item_close_price`, `item_type_id`, `user_id`, `group_id`) VALUES
(2, '2015-10-07', 'https://www.facebook.com/groups/sitluangpoonham/permalink/891175437631986/', 150, 1, 'N123', 1),
(3, '2015-10-06', 'https://www.facebook.com/groups/sitluangpoonham/permalink/891054554310741/', 1200, 2, 'N121', 1),
(4, '2015-10-05', 'https://www.facebook.com/groups/sitluangpoonham/permalink/891045497644980/', 2500, 4, 'N111', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_item_type`
--

CREATE TABLE IF NOT EXISTS `tb_item_type` (
  `id` int(11) NOT NULL,
  `item_type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `item_type_desc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_item_type`
--

INSERT INTO `tb_item_type` (`id`, `item_type_name`, `item_type_desc`, `group_id`) VALUES
(1, 'เหรียญสมปรารถนา เนื้อทองแดง', 'เหรียญสมปรารถนา เนื้อทองแดง', 1),
(2, 'เหรียญสมปรารถนา เนื้อทองเหลือง', 'เหรียญสมปรารถนา เนื้อทองเหลือง', 1),
(3, 'เหรียญสมปรารถนา เนื้อนวะ', 'เหรียญสมปรารถนา เนื้อนวะ', 1),
(4, 'เหรียญสมปรารถนา เนื้ออัลปาก้า', 'เหรียญสมปรารถนา เนื้ออัลปาก้า', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_post`
--

CREATE TABLE IF NOT EXISTS `tb_post` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `createdate` datetime NOT NULL,
  `updatedate` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tag`
--

CREATE TABLE IF NOT EXISTS `tb_tag` (
  `id` int(11) NOT NULL,
  `tagName` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_group`
--
ALTER TABLE `tb_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`,`item_type_id`),
  ADD KEY `item_type_id` (`item_type_id`);

--
-- Indexes for table `tb_item_type`
--
ALTER TABLE `tb_item_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tag`
--
ALTER TABLE `tb_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_group`
--
ALTER TABLE `tb_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_item_type`
--
ALTER TABLE `tb_item_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_tag`
--
ALTER TABLE `tb_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD CONSTRAINT `tb_item_ibfk_1` FOREIGN KEY (`item_type_id`) REFERENCES `tb_item_type` (`id`),
  ADD CONSTRAINT `tb_item_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `tb_group` (`id`);

--
-- Constraints for table `tb_item_type`
--
ALTER TABLE `tb_item_type`
  ADD CONSTRAINT `tb_item_type_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `tb_group` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
