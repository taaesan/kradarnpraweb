-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2015 at 04:52 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

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
-- Table structure for table `tb_item_type`
--

CREATE TABLE `tb_item_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `item_type_desc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `item_type_group_id` int(11) NOT NULL,
  `batch_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_item_type`
--

INSERT INTO `tb_item_type` (`id`, `type_name`, `item_type_desc`, `group_id`, `item_type_group_id`, `batch_number`) VALUES
(1, 'เนื้อทองแดง', 'เหรียญสมปรารถนา เนื้อทองแดง', 1, 1, 4999),
(2, 'เนื้อทองเหลือง', 'เหรียญสมปรารถนา เนื้อทองเหลือง', 1, 1, 4999),
(3, 'เนื้อนวะ', 'เหรียญสมปรารถนา เนื้อนวะ', 1, 1, 3999),
(4, 'เนื้ออัลปาก้า', 'เหรียญสมปรารถนา เนื้ออัลปาก้า', 1, 1, 3999),
(5, 'เนื้อเงิน', 'เหรียญสมปรารถนา เนื้อเงิน', 1, 1, 299),
(6, 'เนื้อตะกั่ว', 'เหรียญสมปรารถนา เนื้อตะกั่ว', 1, 1, 199);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_item_type`
--
ALTER TABLE `tb_item_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_item_type`
--
ALTER TABLE `tb_item_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_item_type`
--
ALTER TABLE `tb_item_type`
  ADD CONSTRAINT `tb_item_type_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `tb_group` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
