-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2015 at 12:49 AM
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
-- Table structure for table `tb_item`
--

CREATE TABLE `tb_item` (
  `id` int(11) NOT NULL,
  `item_date` date NOT NULL,
  `item_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `item_close_price` int(11) NOT NULL,
  `item_type_id` int(11) NOT NULL,
  `user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_item`
--

INSERT INTO `tb_item` (`id`, `item_date`, `item_link`, `item_close_price`, `item_type_id`, `user_id`, `group_id`) VALUES
(2, '2015-10-07', 'https://www.facebook.com/groups/sitluangpoonham/permalink/891175437631986/', 150, 1, 'N123', 1),
(3, '2015-10-06', 'https://www.facebook.com/groups/sitluangpoonham/permalink/891054554310741/', 1200, 2, 'N121', 1),
(4, '2015-10-05', 'https://www.facebook.com/groups/sitluangpoonham/permalink/891045497644980/', 2500, 4, 'N111', 1),
(5, '2015-11-03', '', 3000, 1, 'N2', 1),
(6, '2015-11-03', '', 4000, 2, 'N2', 1),
(9, '2015-01-05', '', 222, 3, 'N2', 1),
(10, '2015-02-05', '', 11, 2, 'N2', 1),
(11, '2015-01-05', '', 222, 3, 'N2', 1),
(12, '2015-02-05', '', 111, 2, 'N2', 1),
(17, '2015-01-08', '', 5000, 3, '', 1),
(18, '2015-01-08', '', 5000, 3, '', 1),
(19, '2015-02-08', '', 5000, 3, '', 1),
(20, '2015-02-08', '', 5000, 3, '', 1),
(21, '2015-03-08', '', 5000, 3, '', 1),
(22, '2015-03-08', '', 5000, 3, '', 1),
(23, '2015-03-08', '', 5000, 3, '', 1),
(24, '2015-04-08', '', 5000, 3, '', 1),
(25, '2015-04-08', '', 5000, 3, '', 1),
(26, '2015-05-08', '', 5000, 3, '', 1),
(27, '2015-05-08', '', 5000, 3, '', 1),
(28, '2015-05-08', '', 5000, 3, '', 1),
(29, '2015-05-08', '', 5000, 3, '', 1),
(30, '2015-06-08', '', 5000, 3, '', 1),
(31, '2015-06-08', '', 5000, 3, '', 1),
(32, '2015-07-08', '', 5000, 3, '', 1),
(33, '2015-07-08', '', 5000, 3, '', 1),
(34, '2015-07-08', '', 5000, 3, '', 1),
(35, '2015-07-08', '', 5000, 3, '', 1),
(36, '2015-07-08', '', 5000, 3, '', 1),
(37, '2015-07-08', '', 5000, 3, '', 1),
(38, '2015-07-08', '', 5000, 3, '', 1),
(39, '2015-07-08', '', 5000, 3, '', 1),
(40, '2015-07-08', '', 5000, 3, '', 1),
(41, '2015-08-08', '', 5000, 3, '', 1),
(42, '2015-08-08', '', 5000, 3, '', 1),
(43, '2015-08-08', '', 5000, 3, '', 1),
(44, '2015-08-08', '', 5000, 3, '', 1),
(45, '2015-08-08', '', 5000, 3, '', 1),
(46, '2015-08-08', '', 5000, 3, '', 1),
(47, '2015-08-08', '', 5000, 3, '', 1),
(48, '2015-08-08', '', 5000, 3, '', 1),
(49, '2015-08-08', '', 5000, 3, '', 1),
(50, '2015-08-08', '', 5000, 3, '', 1),
(51, '2015-08-08', '', 5000, 3, '', 1),
(52, '2015-08-08', '', 5000, 3, '', 1),
(53, '2015-08-08', '', 5000, 3, '', 1),
(54, '2015-08-08', '', 5000, 3, '', 1),
(55, '2015-08-08', '', 5000, 3, '', 1),
(56, '2015-08-08', '', 5000, 3, '', 1),
(57, '2015-08-08', '', 5000, 3, '', 1),
(58, '2015-08-08', '', 5000, 3, '', 1),
(59, '2015-09-08', '', 5000, 3, '', 1),
(60, '2015-09-08', '', 5000, 3, '', 1),
(61, '2015-09-08', '', 5000, 3, '', 1),
(62, '2015-09-08', '', 5000, 3, '', 1),
(63, '2015-09-08', '', 5000, 3, '', 1),
(64, '2015-09-08', '', 5000, 3, '', 1),
(65, '2015-10-08', '', 5000, 3, '', 1),
(66, '2015-10-08', '', 5000, 3, '', 1),
(67, '2015-10-08', '', 5000, 3, '', 1),
(68, '2015-10-08', '', 5000, 3, '', 1),
(69, '2015-10-08', '', 5000, 3, '', 1),
(70, '2015-10-08', '', 5000, 3, '', 1),
(71, '2015-02-08', '', 5000, 1, '', 1),
(72, '2015-02-08', '', 5000, 1, '', 1),
(73, '2015-02-08', '', 5000, 1, '', 1),
(74, '2015-02-08', '', 5000, 1, '', 1),
(75, '2015-02-08', '', 5000, 1, '', 1),
(76, '2015-02-08', '', 5000, 1, '', 1),
(77, '2015-02-08', '', 5000, 1, '', 1),
(78, '2015-02-08', '', 5000, 1, '', 1),
(79, '2015-02-08', '', 5000, 1, '', 1),
(80, '2015-02-08', '', 5000, 1, '', 1),
(81, '2015-02-08', '', 5000, 1, '', 1),
(82, '2015-02-08', '', 5000, 1, '', 1),
(83, '2015-03-08', '', 5000, 1, '', 1),
(84, '2015-03-08', '', 5000, 1, '', 1),
(85, '2015-03-08', '', 5000, 1, '', 1),
(86, '2015-04-08', '', 5000, 1, '', 1),
(87, '2015-04-08', '', 5000, 1, '', 1),
(88, '2015-05-08', '', 5000, 1, '', 1),
(89, '2015-05-08', '', 5000, 1, '', 1),
(90, '2015-05-08', '', 5000, 1, '', 1),
(91, '2015-05-08', '', 5000, 1, '', 1),
(92, '2015-06-08', '', 5000, 1, '', 1),
(93, '2015-06-08', '', 5000, 1, '', 1),
(94, '2015-07-08', '', 5000, 1, '', 1),
(95, '2015-07-08', '', 5000, 1, '', 1),
(96, '2015-07-08', '', 5000, 1, '', 1),
(97, '2015-07-08', '', 5000, 1, '', 1),
(98, '2015-07-08', '', 5000, 1, '', 1),
(99, '2015-07-08', '', 5000, 1, '', 1),
(100, '2015-08-08', '', 5000, 1, '', 1),
(101, '2015-08-08', '', 5000, 1, '', 1),
(102, '2015-08-08', '', 5000, 1, '', 1),
(103, '2015-08-08', '', 5000, 1, '', 1),
(104, '2015-08-08', '', 5000, 1, '', 1),
(105, '2015-08-08', '', 5000, 1, '', 1),
(106, '2015-08-08', '', 5000, 1, '', 1),
(107, '2015-08-08', '', 5000, 1, '', 1),
(108, '2015-09-08', '', 5000, 1, '', 1),
(109, '2015-09-08', '', 5000, 1, '', 1),
(110, '2015-09-08', '', 5000, 1, '', 1),
(111, '2015-09-08', '', 5000, 1, '', 1),
(112, '2015-09-08', '', 5000, 1, '', 1),
(113, '2015-09-08', '', 5000, 1, '', 1),
(114, '2015-09-08', '', 5000, 1, '', 1),
(115, '2015-09-08', '', 5000, 1, '', 1),
(116, '2015-10-08', '', 5000, 1, '', 1),
(117, '2015-10-08', '', 5000, 1, '', 1),
(118, '2015-10-08', '', 5000, 1, '', 1),
(119, '2015-10-08', '', 5000, 1, '', 1),
(120, '2015-10-08', '', 5000, 1, '', 1),
(121, '2015-10-08', '', 5000, 1, '', 1),
(122, '2015-10-08', '', 5000, 1, '', 1),
(123, '2015-10-08', '', 5000, 1, '', 1),
(124, '2015-10-08', '', 5000, 1, '', 1),
(125, '2015-10-08', '', 5000, 1, '', 1),
(126, '2015-10-08', '', 5000, 1, '', 1),
(127, '2015-10-08', '', 5000, 1, '', 1),
(128, '2015-10-08', '', 5000, 1, '', 1),
(129, '2015-10-08', '', 5000, 1, '', 1),
(130, '2015-10-08', '', 5000, 1, '', 1),
(131, '2015-10-08', '', 5000, 1, '', 1),
(132, '2015-10-08', '', 5000, 1, '', 1),
(133, '2015-10-08', '', 5000, 1, '', 1),
(134, '2015-11-08', '', 5000, 1, '', 1),
(135, '2015-11-08', '', 5000, 1, '', 1),
(136, '2015-11-08', '', 5000, 1, '', 1),
(137, '2015-11-08', '', 5000, 1, '', 1),
(138, '2015-11-08', '', 5000, 1, '', 1),
(139, '2015-11-08', '', 5000, 1, '', 1),
(140, '2015-11-08', '', 5000, 1, '', 1),
(141, '2015-11-08', '', 5000, 1, '', 1),
(142, '2015-11-08', '', 5000, 1, '', 1),
(143, '2015-11-08', '', 5000, 1, '', 1),
(144, '2015-11-08', '', 5000, 1, '', 1),
(145, '2015-11-08', '', 5000, 1, '', 1),
(146, '2015-11-08', '', 5000, 1, '', 1),
(147, '2015-11-08', '', 5000, 1, '', 1),
(148, '2015-11-08', '', 5000, 1, '', 1),
(149, '2015-11-08', '', 5000, 1, '', 1),
(150, '2015-11-08', '', 5000, 1, '', 1),
(151, '2015-11-08', '', 5000, 1, '', 1),
(152, '2015-11-08', '', 5000, 1, '', 1),
(153, '2015-11-08', '', 5000, 1, '', 1),
(154, '2015-11-08', '', 5000, 1, '', 1),
(155, '2015-11-08', '', 5000, 1, '', 1),
(156, '2015-11-08', '', 5000, 1, '', 1),
(157, '2015-11-08', '', 5000, 1, '', 1),
(158, '2015-11-08', '', 5000, 1, '', 1),
(159, '2015-11-08', '', 5000, 1, '', 1),
(160, '2015-11-08', '', 5000, 1, '', 1),
(161, '2015-11-08', '', 5000, 1, '', 1),
(162, '2015-11-08', '', 5000, 1, '', 1),
(163, '2015-11-08', '', 5000, 1, '', 1),
(164, '2015-11-08', '', 5000, 1, '', 1),
(165, '2015-11-08', '', 5000, 1, '', 1),
(166, '2015-11-08', '', 5000, 1, '', 1),
(167, '2015-11-08', '', 5000, 1, '', 1),
(168, '2015-11-08', '', 5000, 1, '', 1),
(169, '2015-11-08', '', 5000, 1, '', 1),
(170, '2015-12-08', '', 5000, 1, '', 1),
(171, '2015-12-08', '', 5000, 1, '', 1),
(172, '2015-02-08', '', 2000, 2, '', 1),
(173, '2015-02-08', '', 2000, 2, '', 1),
(174, '2015-02-08', '', 2000, 2, '', 1),
(175, '2015-02-08', '', 2000, 2, '', 1),
(176, '2015-02-08', '', 2000, 2, '', 1),
(177, '2015-02-08', '', 2000, 2, '', 1),
(178, '2015-02-08', '', 2000, 2, '', 1),
(179, '2015-02-08', '', 2000, 2, '', 1),
(180, '2015-02-08', '', 2000, 2, '', 1),
(181, '2015-02-08', '', 2000, 2, '', 1),
(182, '2015-02-08', '', 2000, 2, '', 1),
(183, '2015-02-08', '', 2000, 2, '', 1),
(184, '2015-02-08', '', 2000, 2, '', 1),
(185, '2015-02-08', '', 2000, 2, '', 1),
(186, '2015-02-08', '', 2000, 2, '', 1),
(187, '2015-02-08', '', 2000, 2, '', 1),
(188, '2015-02-08', '', 2000, 2, '', 1),
(189, '2015-02-08', '', 2000, 2, '', 1),
(190, '2015-02-08', '', 2000, 2, '', 1),
(191, '2015-02-08', '', 2000, 2, '', 1),
(192, '2015-02-08', '', 2000, 2, '', 1),
(193, '2015-02-08', '', 2000, 2, '', 1),
(194, '2015-02-08', '', 2000, 2, '', 1),
(195, '2015-02-08', '', 2000, 2, '', 1),
(196, '2015-03-08', '', 2000, 2, '', 1),
(197, '2015-03-08', '', 2000, 2, '', 1),
(198, '2015-03-08', '', 2000, 2, '', 1),
(199, '2015-03-08', '', 2000, 2, '', 1),
(200, '2015-03-08', '', 2000, 2, '', 1),
(201, '2015-03-08', '', 2000, 2, '', 1),
(202, '2015-04-08', '', 2000, 2, '', 1),
(203, '2015-04-08', '', 2000, 2, '', 1),
(204, '2015-04-08', '', 2000, 2, '', 1),
(205, '2015-04-08', '', 2000, 2, '', 1),
(206, '2015-04-08', '', 2000, 2, '', 1),
(207, '2015-04-08', '', 2000, 2, '', 1),
(208, '2015-04-08', '', 2000, 2, '', 1),
(209, '2015-04-08', '', 2000, 2, '', 1),
(210, '2015-05-08', '', 2000, 2, '', 1),
(211, '2015-05-08', '', 2000, 2, '', 1),
(212, '2015-05-08', '', 2000, 2, '', 1),
(213, '2015-05-08', '', 2000, 2, '', 1),
(214, '2015-05-08', '', 2000, 2, '', 1),
(215, '2015-05-08', '', 2000, 2, '', 1),
(216, '2015-05-08', '', 2000, 2, '', 1),
(217, '2015-05-08', '', 2000, 2, '', 1),
(218, '2015-05-08', '', 2000, 2, '', 1),
(219, '2015-05-08', '', 2000, 2, '', 1),
(220, '2015-05-08', '', 2000, 2, '', 1),
(221, '2015-05-08', '', 2000, 2, '', 1),
(222, '2015-06-08', '', 2000, 2, '', 1),
(223, '2015-06-08', '', 2000, 2, '', 1),
(224, '2015-06-08', '', 2000, 2, '', 1),
(225, '2015-06-08', '', 2000, 2, '', 1),
(226, '2015-06-08', '', 2000, 2, '', 1),
(227, '2015-06-08', '', 2000, 2, '', 1),
(228, '2015-06-08', '', 2000, 2, '', 1),
(229, '2015-06-08', '', 2000, 2, '', 1),
(230, '2015-06-08', '', 2000, 2, '', 1),
(231, '2015-06-08', '', 2000, 2, '', 1),
(232, '2015-07-08', '', 2000, 2, '', 1),
(233, '2015-07-08', '', 2000, 2, '', 1),
(234, '2015-07-08', '', 2000, 2, '', 1),
(235, '2015-08-08', '', 2000, 2, '', 1),
(236, '2015-08-08', '', 2000, 2, '', 1),
(237, '2015-08-08', '', 2000, 2, '', 1),
(238, '2015-08-08', '', 2000, 2, '', 1),
(239, '2015-08-08', '', 2000, 2, '', 1),
(240, '2015-08-08', '', 2000, 2, '', 1),
(241, '2015-08-08', '', 2000, 2, '', 1),
(242, '2015-08-08', '', 2000, 2, '', 1),
(243, '2015-09-08', '', 2000, 2, '', 1),
(244, '2015-09-08', '', 2000, 2, '', 1),
(245, '2015-09-08', '', 2000, 2, '', 1),
(246, '2015-09-08', '', 2000, 2, '', 1),
(247, '2015-09-08', '', 2000, 2, '', 1),
(248, '2015-09-08', '', 2000, 2, '', 1),
(249, '2015-09-08', '', 2000, 2, '', 1),
(250, '2015-09-08', '', 2000, 2, '', 1),
(251, '2015-10-08', '', 2000, 2, '', 1),
(252, '2015-10-08', '', 2000, 2, '', 1),
(253, '2015-10-08', '', 2000, 2, '', 1),
(254, '2015-10-08', '', 2000, 2, '', 1),
(255, '2015-10-08', '', 2000, 2, '', 1),
(256, '2015-10-08', '', 2000, 2, '', 1),
(257, '2015-11-08', '', 2000, 2, '', 1),
(258, '2015-11-08', '', 2000, 2, '', 1),
(259, '2015-11-08', '', 2000, 2, '', 1),
(260, '2015-11-08', '', 2000, 2, '', 1),
(261, '2015-11-08', '', 2000, 2, '', 1),
(262, '2015-11-08', '', 2000, 2, '', 1),
(263, '2015-11-08', '', 2000, 2, '', 1),
(264, '2015-11-08', '', 2000, 2, '', 1),
(265, '2015-11-08', '', 2000, 2, '', 1),
(266, '2015-11-08', '', 2000, 2, '', 1),
(267, '2015-11-08', '', 2000, 2, '', 1),
(268, '2015-11-08', '', 2000, 2, '', 1),
(269, '2015-11-08', '', 2000, 2, '', 1),
(270, '2015-11-08', '', 2000, 2, '', 1),
(271, '2015-11-08', '', 2000, 2, '', 1),
(272, '2015-11-08', '', 2000, 2, '', 1),
(273, '2015-11-08', '', 2000, 2, '', 1),
(274, '2015-11-08', '', 2000, 2, '', 1),
(275, '2015-11-08', '', 2000, 2, '', 1),
(276, '2015-11-08', '', 2000, 2, '', 1),
(277, '2015-12-08', '', 2000, 2, '', 1),
(278, '2015-12-08', '', 2000, 2, '', 1),
(279, '2015-12-08', '', 2000, 2, '', 1),
(280, '2015-12-08', '', 2000, 2, '', 1),
(281, '2015-12-08', '', 2000, 2, '', 1),
(282, '2015-12-08', '', 2000, 2, '', 1),
(283, '2015-12-08', '', 2000, 2, '', 1),
(284, '2015-12-08', '', 2000, 2, '', 1),
(285, '2015-12-08', '', 2000, 2, '', 1),
(286, '2015-12-08', '', 2000, 2, '', 1),
(287, '2015-01-08', '', 3500, 4, '', 1),
(288, '2015-01-08', '', 3500, 4, '', 1),
(289, '2015-01-08', '', 3500, 4, '', 1),
(290, '2015-01-08', '', 3500, 4, '', 1),
(291, '2015-01-08', '', 3500, 4, '', 1),
(292, '2015-01-08', '', 3500, 4, '', 1),
(293, '2015-02-08', '', 3500, 4, '', 1),
(294, '2015-02-08', '', 3500, 4, '', 1),
(295, '2015-02-08', '', 3500, 4, '', 1),
(296, '2015-02-08', '', 3500, 4, '', 1),
(297, '2015-02-08', '', 3500, 4, '', 1),
(298, '2015-02-08', '', 3500, 4, '', 1),
(299, '2015-02-08', '', 3500, 4, '', 1),
(300, '2015-02-08', '', 3500, 4, '', 1),
(301, '2015-02-08', '', 3500, 4, '', 1),
(302, '2015-02-08', '', 3500, 4, '', 1),
(303, '2015-02-08', '', 3500, 4, '', 1),
(304, '2015-02-08', '', 3500, 4, '', 1),
(305, '2015-02-08', '', 3500, 4, '', 1),
(306, '2015-02-08', '', 3500, 4, '', 1),
(307, '2015-02-08', '', 3500, 4, '', 1),
(308, '2015-03-08', '', 3500, 4, '', 1),
(309, '2015-03-08', '', 3500, 4, '', 1),
(310, '2015-03-08', '', 3500, 4, '', 1),
(311, '2015-03-08', '', 3500, 4, '', 1),
(312, '2015-03-08', '', 3500, 4, '', 1),
(313, '2015-03-08', '', 3500, 4, '', 1),
(314, '2015-03-08', '', 3500, 4, '', 1),
(315, '2015-03-08', '', 3500, 4, '', 1),
(316, '2015-03-08', '', 3500, 4, '', 1),
(317, '2015-03-08', '', 3500, 4, '', 1),
(318, '2015-03-08', '', 3500, 4, '', 1),
(319, '2015-03-08', '', 3500, 4, '', 1),
(320, '2015-03-08', '', 3500, 4, '', 1),
(321, '2015-03-08', '', 3500, 4, '', 1),
(322, '2015-03-08', '', 3500, 4, '', 1),
(323, '2015-03-08', '', 3500, 4, '', 1),
(324, '2015-03-08', '', 3500, 4, '', 1),
(325, '2015-03-08', '', 3500, 4, '', 1),
(326, '2015-03-08', '', 3500, 4, '', 1),
(327, '2015-03-08', '', 3500, 4, '', 1),
(328, '2015-03-08', '', 3500, 4, '', 1),
(329, '2015-03-08', '', 3500, 4, '', 1),
(330, '2015-04-08', '', 3500, 4, '', 1),
(331, '2015-04-08', '', 3500, 4, '', 1),
(332, '2015-04-08', '', 3500, 4, '', 1),
(333, '2015-05-08', '', 3500, 4, '', 1),
(334, '2015-05-08', '', 3500, 4, '', 1),
(335, '2015-05-08', '', 3500, 4, '', 1),
(336, '2015-05-08', '', 3500, 4, '', 1),
(337, '2015-06-08', '', 3500, 4, '', 1),
(338, '2015-06-08', '', 3500, 4, '', 1),
(339, '2015-06-08', '', 3500, 4, '', 1),
(340, '2015-06-08', '', 3500, 4, '', 1),
(341, '2015-06-08', '', 3500, 4, '', 1),
(342, '2015-06-08', '', 3500, 4, '', 1),
(343, '2015-06-08', '', 3500, 4, '', 1),
(344, '2015-06-08', '', 3500, 4, '', 1),
(345, '2015-06-08', '', 3500, 4, '', 1),
(346, '2015-06-08', '', 3500, 4, '', 1),
(347, '2015-07-08', '', 3500, 4, '', 1),
(348, '2015-07-08', '', 3500, 4, '', 1),
(349, '2015-07-08', '', 3500, 4, '', 1),
(350, '2015-08-08', '', 3500, 4, '', 1),
(351, '2015-08-08', '', 3500, 4, '', 1),
(352, '2015-08-08', '', 3500, 4, '', 1),
(353, '2015-08-08', '', 3500, 4, '', 1),
(354, '2015-09-08', '', 3500, 4, '', 1),
(355, '2015-09-08', '', 3500, 4, '', 1),
(356, '2015-09-08', '', 3500, 4, '', 1),
(357, '2015-09-08', '', 3500, 4, '', 1),
(358, '2015-09-08', '', 3500, 4, '', 1),
(359, '2015-10-08', '', 3500, 4, '', 1),
(360, '2015-10-08', '', 3500, 4, '', 1),
(361, '2015-10-08', '', 3500, 4, '', 1),
(362, '2015-10-08', '', 3500, 4, '', 1),
(363, '2015-10-08', '', 3500, 4, '', 1),
(364, '2015-10-08', '', 3500, 4, '', 1),
(365, '2015-11-08', '', 3500, 4, '', 1),
(366, '2015-11-08', '', 3500, 4, '', 1),
(367, '2015-11-08', '', 3500, 4, '', 1),
(368, '2015-11-08', '', 3500, 4, '', 1),
(369, '2015-11-08', '', 3500, 4, '', 1),
(370, '2015-11-08', '', 3500, 4, '', 1),
(371, '2015-11-08', '', 3500, 4, '', 1),
(372, '2015-11-08', '', 3500, 4, '', 1),
(373, '2015-12-08', '', 3500, 4, '', 1),
(374, '2015-12-08', '', 3500, 4, '', 1),
(375, '2015-12-08', '', 3500, 4, '', 1),
(376, '2015-12-08', '', 3500, 4, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`,`item_type_id`),
  ADD KEY `item_type_id` (`item_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD CONSTRAINT `tb_item_ibfk_1` FOREIGN KEY (`item_type_id`) REFERENCES `tb_item_type` (`id`),
  ADD CONSTRAINT `tb_item_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `tb_group` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
