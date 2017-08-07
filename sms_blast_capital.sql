-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 11:17 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_blast_capital`
--

-- --------------------------------------------------------

--
-- Table structure for table `td_admin`
--

CREATE TABLE `td_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_admin`
--

INSERT INTO `td_admin` (`id_admin`, `nama_lengkap`, `email`, `password`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'active'),
(2, 'capital', 'capital@capital.co.id', '44433c4c0650a487a4ee95936d22c990', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `td_admin_log`
--

CREATE TABLE `td_admin_log` (
  `id_admin_log` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_admin_log`
--

INSERT INTO `td_admin_log` (`id_admin_log`, `nama_lengkap`, `keterangan`, `time`, `ip_address`, `browser`, `platform`) VALUES
(71, 'admin ', 'Login', '2017-07-21 08:05:13', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(72, 'admin', 'Edit SPAJ SMS Blast', '2017-07-21 08:02:25', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(73, 'admin', 'Logout', '2017-07-21 08:07:04', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(74, 'admin', 'Login', '2017-07-21 08:07:13', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(75, 'admin', 'Logout', '2017-07-21 08:08:58', '127.0.0.1', 'Opera 46.0.2597.46', 'Windows 7.'),
(76, 'admin', 'Login', '2017-07-21 08:09:15', '127.0.0.1', 'Opera 46.0.2597.46', 'Windows 7.'),
(77, 'admin', 'Edit MATURE SMS Blast', '2017-07-21 08:10:11', '127.0.0.1', 'Opera 46.0.2597.46', 'Windows 7.'),
(78, 'admin', 'Logout', '2017-07-21 08:17:02', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(79, 'admin', 'Login', '2017-07-21 08:17:06', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(80, 'admin', 'Login', '2017-07-21 08:18:14', '127.0.0.1', 'Internet Explorer 8.0', 'Windows 7.'),
(81, 'admin', 'Logout', '2017-07-21 08:19:46', '127.0.0.1', 'Internet Explorer 8.0', 'Windows 7.'),
(82, 'admin', 'Logout', '2017-07-21 08:29:09', '127.0.0.1', 'Opera 46.0.2597.46', 'Windows 7.'),
(83, 'admin', 'Logout', '2017-07-21 08:56:27', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(84, 'admin', 'Login', '2017-07-21 08:56:34', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(85, 'admin', 'Logout', '2017-07-21 08:56:43', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(86, 'admin', 'Login', '2017-07-21 08:57:45', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(87, 'admin', 'Add Claim Pending SMS Blast', '2017-07-21 09:39:42', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(88, 'admin', 'Edit SPAJ SMS Blast', '2017-07-21 10:12:18', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(89, 'admin', 'Edit POLIS SMS Blast', '2017-07-21 10:12:56', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(90, 'admin', 'Edit Billing Payment SMS Blast', '2017-07-21 10:17:12', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(91, 'admin', 'Add Claim Payment SMS Blast', '2017-07-21 10:17:48', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(92, 'admin', 'Edit Claim Pending SMS Blast', '2017-07-21 10:18:28', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(93, 'admin', 'Edit MATURE SMS Blast', '2017-07-21 10:18:58', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(94, 'admin', 'Edit ARO SMS Blast', '2017-07-21 10:20:01', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(95, 'admin', 'Edit ALAMAT SMS Blast', '2017-07-21 10:20:26', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(96, 'admin', 'Edit AHLI WARIS SMS Blast', '2017-07-21 10:20:45', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(97, 'admin', 'Edit NO REK SMS Blast', '2017-07-21 10:21:06', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(98, 'admin', 'Edit SURENDER SMS Blast', '2017-07-21 10:21:42', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(99, 'admin', 'Edit MARKETING SMS Blast', '2017-07-21 10:21:59', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(100, 'admin', 'Logout', '2017-07-21 10:36:53', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(101, 'admin', 'Login', '2017-07-21 10:37:05', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(102, 'admin', 'Login', '2017-07-21 14:11:31', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(103, 'admin', 'Edit POLIS SMS Blast', '2017-07-21 16:12:23', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(104, 'admin', 'Edit Billing Payment SMS Blast', '2017-07-21 16:35:31', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(105, 'admin', 'Login', '2017-07-24 02:29:14', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(106, 'admin', 'Logout', '2017-07-24 03:11:38', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(107, '', 'Logout', '2017-07-24 03:18:34', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(108, '', 'Logout', '2017-07-24 03:21:59', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(109, 'admin', 'Login', '2017-07-24 03:22:22', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(110, 'admin', 'Login', '2017-07-24 03:22:45', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(111, 'admin', 'Logout', '2017-07-24 03:24:22', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(112, 'admin', 'Login', '2017-07-24 03:24:35', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(113, 'admin', 'Edit Billing Payment SMS Blast', '2017-07-24 03:37:05', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(114, 'admin', 'Edit Billing Payment SMS Blast', '2017-07-24 03:37:17', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(115, 'admin', 'Edit MATURE SMS Blast', '2017-07-24 04:23:10', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(116, 'admin', 'Login', '2017-07-24 04:38:36', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(117, 'admin', 'Edit SPAJ SMS Blast', '2017-07-24 04:55:15', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(118, 'admin', 'Logout', '2017-07-24 05:26:34', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(119, 'admin', 'Login', '2017-07-24 06:41:48', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(120, 'admin', 'Edit SPAJ SMS Blast', '2017-07-24 06:45:20', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(121, 'admin', 'Edit MATURE SMS Blast', '2017-07-24 07:09:06', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(122, 'admin', 'Edit ARO SMS Blast', '2017-07-24 07:09:42', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(123, 'admin', 'Edit ALAMAT SMS Blast', '2017-07-24 07:11:48', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(124, 'admin', 'Edit AHLI WARIS SMS Blast', '2017-07-24 07:12:30', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(125, 'admin', 'Edit NO REK SMS Blast', '2017-07-24 07:13:36', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(126, 'admin', 'Edit SURENDER SMS Blast', '2017-07-24 07:14:02', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(127, 'admin', 'Edit Billing Payment SMS Blast', '2017-07-24 07:22:52', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(128, 'admin', 'Edit Claim Payment SMS Blast', '2017-07-24 07:29:40', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(129, 'admin', 'Logout', '2017-07-24 07:41:40', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(130, 'admin', 'Login', '2017-07-24 07:44:23', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(131, 'admin', 'Edit SPAJ SMS Blast', '2017-07-24 07:44:54', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(132, 'admin', 'Login', '2017-07-24 07:45:29', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(133, 'admin', 'Logout', '2017-07-24 07:45:51', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(134, 'admin', 'Login', '2017-07-24 07:45:56', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(135, 'admin', 'Logout', '2017-07-24 07:46:29', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(136, 'admin', 'Edit ULTAH SMS Blast', '2017-07-24 10:00:49', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(137, 'admin', 'Edit POLIS SMS Blast', '2017-07-24 10:02:05', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(138, 'admin', 'Edit POLIS SMS Blast', '2017-07-24 10:02:13', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(139, 'admin', 'Edit POLIS SMS Blast', '2017-07-24 10:02:34', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(140, 'admin', 'Edit POLIS SMS Blast', '2017-07-24 10:03:29', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(141, 'admin', 'Edit POLIS SMS Blast', '2017-07-24 10:03:37', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(142, 'admin', 'Edit POLIS SMS Blast', '2017-07-24 10:03:48', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(143, 'admin', 'Edit POLIS SMS Blast', '2017-07-24 10:06:45', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(144, 'admin', 'Edit POLIS SMS Blast', '2017-07-24 10:06:52', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(145, 'admin', 'Edit POLIS SMS Blast', '2017-07-24 10:10:21', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(146, 'admin', 'Edit POLIS SMS Blast', '2017-07-24 10:11:16', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(147, 'admin', 'Add POLIS SMS Blast', '2017-07-24 10:13:12', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(148, 'admin', 'Add POLIS SMS Blast', '2017-07-24 10:14:57', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(149, 'admin', 'Add POLIS SMS Blast', '2017-07-24 10:15:46', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(150, 'admin', 'Edit SPAJ SMS Blast', '2017-07-24 10:19:09', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(151, 'admin', 'Edit SPAJ SMS Blast', '2017-07-24 10:19:27', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(152, 'admin', 'Edit SPAJ SMS Blast', '2017-07-24 10:19:42', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(153, 'admin', 'Edit SPAJ SMS Blast', '2017-07-24 10:20:56', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(154, 'admin', 'Login', '2017-07-24 10:21:08', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(155, 'admin', 'Edit ULTAH SMS Blast', '2017-07-24 10:30:39', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(156, 'admin', 'Edit POLIS SMS Blast', '2017-07-24 10:33:47', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(157, 'admin', 'Edit POLIS SMS Blast', '2017-07-24 10:36:16', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(158, 'admin', 'Edit POLIS SMS Blast', '2017-07-24 10:36:32', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(159, 'admin', 'Edit SURENDER SMS Blast', '2017-07-24 10:41:41', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(160, 'admin', 'Edit Claim Pending SMS Blast', '2017-07-24 10:45:06', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(161, 'admin', 'Edit Claim Pending SMS Blast', '2017-07-24 10:48:01', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(162, 'admin', 'Edit ULTAH SMS Blast', '2017-07-24 10:49:45', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(163, 'admin', 'Edit NO REK SMS Blast', '2017-07-24 10:51:13', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(164, 'admin', 'Logout', '2017-07-24 11:04:57', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(165, 'admin', 'Login', '2017-07-24 11:05:04', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(166, 'admin', 'Logout', '2017-07-24 11:05:20', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(167, 'admin', 'Login', '2017-07-24 11:05:34', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(168, 'admin', 'Login', '2017-07-24 11:06:14', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(169, 'admin', 'Logout', '2017-07-24 11:08:44', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(170, 'capital', 'Login', '2017-07-24 11:08:50', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(171, 'capital', 'Logout', '2017-07-24 11:09:07', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(172, 'capital', 'Login', '2017-07-24 11:09:19', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(173, 'capital', 'Edit SPAJ SMS Blast', '2017-07-24 11:09:41', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(174, 'capital', 'Logout', '2017-07-24 11:14:29', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(175, 'admin', 'Login', '2017-07-24 11:14:36', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(176, 'admin', 'Logout', '2017-07-24 11:30:22', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(177, 'admin', 'Login', '2017-07-24 11:30:33', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(178, 'admin', 'Logout', '2017-07-24 11:30:48', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(179, 'capital', 'Login', '2017-07-24 11:30:53', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(180, 'capital', 'Logout', '2017-07-24 11:31:36', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(181, 'admin', 'Login', '2017-07-25 02:19:51', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(182, 'admin', 'Login', '2017-07-25 02:32:45', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(183, 'admin', 'Edit SPAJ SMS Blast', '2017-07-25 02:33:34', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(184, 'admin', 'Edit SPAJ SMS Blast', '2017-07-25 02:46:04', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(185, 'admin', 'Edit Billing Payment SMS Blast', '2017-07-25 02:46:17', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(186, 'admin', 'Edit ARO SMS Blast', '2017-07-25 02:46:57', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(187, 'admin', 'Logout', '2017-07-25 02:46:59', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(188, 'capital', 'Login', '2017-07-25 02:47:04', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(189, 'capital', 'Edit SPAJ SMS Blast', '2017-07-25 02:47:41', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(190, 'capital', 'Edit SPAJ SMS Blast', '2017-07-25 02:47:51', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(191, 'capital', 'Edit ARO SMS Blast', '2017-07-25 02:47:59', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(192, 'capital', 'Edit ARO SMS Blast', '2017-07-25 02:48:03', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(193, 'capital', 'Edit ARO SMS Blast', '2017-07-25 02:48:12', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(194, 'capital', 'Edit Claim Pending SMS Blast', '2017-07-25 02:48:26', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(195, 'capital', 'Edit Claim Pending SMS Blast', '2017-07-25 02:49:14', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(196, 'capital', 'Edit Claim Pending SMS Blast', '2017-07-25 02:49:21', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(197, 'capital', 'Edit Claim Pending SMS Blast', '2017-07-25 02:49:56', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(198, 'capital', 'Edit Claim Pending SMS Blast', '2017-07-25 02:50:03', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(199, 'capital', 'Logout', '2017-07-25 02:51:01', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(200, 'admin', 'Login', '2017-07-25 02:51:08', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(201, 'admin', 'Logout', '2017-07-25 02:51:20', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(202, 'admin', 'Login', '2017-07-25 02:53:07', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(203, 'admin', 'Logout', '2017-07-25 02:53:38', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(204, 'admin', 'Login', '2017-07-25 02:54:01', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(205, 'admin', 'Logout', '2017-07-25 02:54:07', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(206, 'admin', 'Login', '2017-07-25 02:54:37', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(207, 'admin', 'Edit SPAJ SMS Blast', '2017-07-25 02:54:50', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(208, 'admin', 'Edit SPAJ SMS Blast', '2017-07-25 02:55:25', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(209, 'admin', 'Logout', '2017-07-25 02:56:09', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(210, 'admin', 'Login', '2017-07-25 02:56:21', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(211, 'admin', 'Logout', '2017-07-25 02:56:32', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(212, 'admin', 'Login', '2017-07-25 03:11:30', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(213, 'admin', 'Logout', '2017-07-25 03:11:33', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(214, 'admin', 'Login', '2017-07-25 03:11:40', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(215, 'admin', 'Login', '2017-07-25 04:33:21', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(216, 'admin', 'Edit Claim Pending SMS Blast', '2017-07-25 04:34:23', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(217, 'admin', 'Edit ULTAH SMS Blast', '2017-07-25 04:34:43', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(218, 'admin', 'Edit MATURE SMS Blast', '2017-07-25 07:33:27', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(219, 'admin', 'Edit MATURE SMS Blast', '2017-07-25 07:33:32', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(220, 'admin', 'Edit MATURE SMS Blast', '2017-07-25 07:33:38', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(221, 'admin', 'Edit MATURE SMS Blast', '2017-07-25 07:44:10', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(222, 'admin', 'Login', '2017-07-25 09:10:39', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(223, 'admin', 'Logout', '2017-07-25 09:10:49', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(224, 'capital', 'Login', '2017-07-25 09:10:57', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(225, 'capital', 'Edit SPAJ SMS Blast', '2017-07-25 09:11:18', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(226, 'admin', 'Edit SPAJ SMS Blast', '2017-07-25 09:12:38', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(227, 'admin', 'Edit MATURE SMS Blast', '2017-07-25 09:17:04', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(228, 'admin', 'Logout', '2017-07-25 09:23:06', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(229, 'admin', 'Login', '2017-07-25 09:23:10', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(230, 'admin', 'Logout', '2017-07-25 09:23:13', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(231, 'admin', 'Login', '2017-07-25 09:25:43', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(232, 'capital', 'Logout', '2017-07-25 09:28:59', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(233, 'admin', 'Login', '2017-07-25 09:29:09', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(234, 'admin', 'Edit Claim Pending SMS Blast', '2017-07-25 09:57:23', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(235, 'admin', 'Login', '2017-07-25 10:00:56', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(236, 'admin', 'Login', '2017-07-26 02:09:46', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(237, 'admin', 'Login', '2017-07-26 02:26:22', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(238, 'admin', 'Logout', '2017-07-26 02:34:43', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(239, 'admin', 'Edit MATURE SMS Blast', '2017-07-26 04:18:56', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(240, 'capital', 'Login', '2017-07-26 04:19:25', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(241, 'admin', 'Login', '2017-07-26 06:45:23', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(242, 'admin', 'Edit Claim Pending SMS Blast', '2017-07-26 06:45:59', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(243, 'admin', 'Edit Claim Pending SMS Blast', '2017-07-26 06:52:47', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(244, 'admin', 'Logout', '2017-07-26 06:53:16', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(245, 'admin', 'Login', '2017-07-26 06:53:21', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(246, 'capital', 'Login', '2017-07-26 08:25:37', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(247, 'capital', 'Logout', '2017-07-26 08:28:22', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(248, 'capital', 'Login', '2017-07-26 08:28:33', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(249, 'admin', 'Login', '2017-07-27 02:15:45', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(250, 'admin', 'Login', '2017-07-27 07:10:57', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(251, 'admin', 'Edit SPAJ SMS Blast', '2017-07-27 07:19:17', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(252, 'admin', 'Edit SPAJ SMS Blast', '2017-07-27 07:50:26', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(253, 'admin', 'Add POLIS SMS Blast', '2017-07-27 09:02:10', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(254, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:03:12', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(255, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:04:41', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(256, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:06:26', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(257, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:06:45', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(258, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:06:56', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(259, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:08:49', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(260, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:09:37', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(261, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:13:02', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(262, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:13:50', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(263, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:18:37', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(264, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:24:35', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(265, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:24:41', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(266, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:24:47', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(267, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:24:52', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(268, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:33:04', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(269, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:34:29', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(270, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:34:35', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(271, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:34:45', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(272, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:35:55', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(273, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:36:41', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(274, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:37:40', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(275, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:39:52', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(276, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:40:13', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(277, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:41:40', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(278, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:42:38', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(279, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:43:02', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(280, 'admin', 'Login', '2017-07-27 09:43:38', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(281, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:44:13', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(282, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:45:14', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(283, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:45:37', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(284, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:47:37', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(285, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:48:32', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(286, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:49:05', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(287, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:49:31', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(288, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:51:06', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(289, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:52:23', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(290, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:52:52', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(291, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:54:18', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(292, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:54:41', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(293, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:55:04', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(294, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:55:54', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(295, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:56:23', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(296, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:57:18', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(297, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:58:16', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(298, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:58:21', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(299, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:58:47', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(300, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:59:25', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(301, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 09:59:54', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(302, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:00:26', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(303, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:00:45', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(304, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:01:18', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(305, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:01:36', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(306, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:02:31', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(307, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:04:01', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(308, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:04:20', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(309, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:06:21', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(310, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:06:26', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(311, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:06:31', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(312, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:06:37', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(313, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:07:59', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(314, 'admin', 'Add POLIS SMS Blast', '2017-07-27 10:13:04', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(315, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:13:10', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(316, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:13:55', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(317, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:15:05', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(318, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 10:15:11', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(319, 'admin', 'Edit SPAJ SMS Blast', '2017-07-27 10:23:03', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(320, 'admin', 'Edit SPAJ SMS Blast', '2017-07-27 10:23:09', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(321, 'admin', 'Edit ULTAH SMS Blast', '2017-07-27 10:26:26', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(322, 'admin', 'Edit ULTAH SMS Blast', '2017-07-27 10:27:05', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(323, 'admin', 'Edit ULTAH SMS Blast', '2017-07-27 10:27:13', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(324, 'admin', 'Add ULTAH SMS Blast', '2017-07-27 10:27:58', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(325, 'admin', 'Logout', '2017-07-27 10:33:34', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(326, 'admin', 'Login', '2017-07-27 10:33:38', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(327, 'admin', 'Edit Billing Payment SMS Blast', '2017-07-27 10:33:46', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(328, 'admin', 'Edit Billing Payment SMS Blast', '2017-07-27 10:34:17', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(329, 'admin', 'Edit Billing Payment SMS Blast', '2017-07-27 10:34:37', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(330, 'admin', 'Add Billing Payment SMS Blast', '2017-07-27 10:34:57', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(331, 'admin', 'Edit Claim Payment SMS Blast', '2017-07-27 10:52:13', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(332, 'admin', 'Add Claim Pending SMS Blast', '2017-07-27 10:55:08', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(333, 'admin', 'Edit Claim Pending SMS Blast', '2017-07-27 10:55:15', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(334, 'admin', 'Login', '2017-07-27 11:00:16', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(335, 'admin', 'Edit SPAJ SMS Blast', '2017-07-27 11:00:25', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(336, 'admin', 'Edit SPAJ SMS Blast', '2017-07-27 11:00:34', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(337, 'admin', 'Edit Billing Payment SMS Blast', '2017-07-27 11:09:36', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(338, 'admin', 'Edit Claim Pending SMS Blast', '2017-07-27 11:11:12', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(339, 'admin', 'Edit Claim Pending SMS Blast', '2017-07-27 11:11:21', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(340, 'admin', 'Login', '2017-07-27 13:53:17', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(341, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 13:53:45', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(342, 'admin', 'Edit SPAJ SMS Blast', '2017-07-27 15:28:18', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(343, 'admin', 'Edit Claim Payment SMS Blast', '2017-07-27 15:39:31', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(344, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 15:40:31', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(345, 'admin', 'Edit POLIS SMS Blast', '2017-07-27 15:40:57', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(346, 'admin', 'Edit MARKETING SMS Blast', '2017-07-27 16:34:15', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(347, 'admin', 'Edit MARKETING SMS Blast', '2017-07-27 16:34:23', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(348, 'admin', 'Edit SURENDER SMS Blast', '2017-07-27 16:34:37', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(349, 'admin', 'Edit Claim Pending SMS Blast', '2017-07-27 16:48:10', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(350, 'admin', 'Edit Claim Pending SMS Blast', '2017-07-27 16:48:19', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(351, 'admin', 'Login', '2017-07-28 02:02:39', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(352, 'admin', 'Logout', '2017-07-28 02:19:09', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(353, 'admin', 'Login', '2017-07-28 02:19:49', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(354, 'admin', 'Logout', '2017-07-28 02:19:58', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(355, 'admin', 'Login', '2017-07-28 03:05:36', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(356, 'admin', 'Edit POLIS SMS Blast', '2017-07-28 03:22:23', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(357, 'admin', 'Edit POLIS SMS Blast', '2017-07-28 03:22:28', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(358, 'admin', 'Logout', '2017-07-28 04:39:44', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(359, 'admin', 'Login', '2017-07-28 04:39:48', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(360, 'admin', 'Login', '2017-07-28 04:55:45', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(361, 'admin', 'Login', '2017-07-28 05:11:46', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(362, 'admin', 'Edit SPAJ SMS Blast', '2017-07-28 05:13:08', '172.25.116.123', 'Firefox 54.0', 'Windows 7.'),
(363, 'capital', 'Login', '2017-07-28 05:14:02', '127.0.0.1', 'Opera 46.0.2597.57', 'Windows 7.'),
(364, 'capital', 'Logout', '2017-07-28 05:14:27', '127.0.0.1', 'Opera 46.0.2597.57', 'Windows 7.'),
(365, 'admin', 'Login', '2017-07-28 05:22:32', '127.0.0.1', 'Opera 46.0.2597.57', 'Windows 7.'),
(366, 'admin', 'Logout', '2017-07-28 08:23:36', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(367, 'admin', 'Login', '2017-07-28 08:23:52', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(368, 'admin', 'Logout', '2017-07-28 08:23:59', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(369, 'admin', 'Login', '2017-07-28 08:26:18', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(370, 'admin', 'Edit ALAMAT SMS Blast', '2017-07-28 09:11:35', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(371, 'admin', 'Edit SPAJ SMS Blast', '2017-07-28 09:26:59', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(372, 'admin', 'Edit POLIS SMS Blast', '2017-07-28 09:28:10', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(373, 'admin', 'Edit POLIS SMS Blast', '2017-07-28 09:28:13', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(374, 'admin', 'Edit POLIS SMS Blast', '2017-07-28 09:28:16', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(375, 'admin', 'Login', '2017-07-29 05:19:33', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(376, 'admin', 'Login', '2017-07-31 02:02:31', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(377, 'admin', 'Login', '2017-07-31 02:34:18', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(378, 'admin', 'Logout', '2017-07-31 02:35:21', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(379, 'admin', 'Logout', '2017-07-31 02:36:08', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(380, 'admin', 'Logout', '2017-07-31 02:53:00', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(381, 'admin', 'Login', '2017-07-31 02:53:04', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(382, 'admin', 'Edit AHLI WARIS SMS Blast', '2017-07-31 03:01:36', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(383, 'admin', 'Edit AHLI WARIS SMS Blast', '2017-07-31 03:01:41', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(384, 'admin', 'Edit SPAJ SMS Blast', '2017-07-31 03:40:18', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(385, 'admin', 'Logout', '2017-07-31 04:26:02', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(386, 'admin', 'Login', '2017-07-31 04:26:08', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(387, 'admin', 'Login', '2017-07-31 04:50:58', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(388, 'admin', 'Delete HARI RAYA SMS Blast', '2017-07-31 04:51:52', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(389, 'admin', 'Delete HARI RAYA SMS Blast', '2017-07-31 04:52:00', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(390, 'admin', 'Delete HARI RAYA SMS Blast', '2017-07-31 04:52:06', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(391, 'admin', 'Edit MATURE SMS Blast', '2017-07-31 04:59:47', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(392, 'admin', 'Edit SPAJ SMS Blast', '2017-07-31 05:12:35', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(393, 'admin', 'Edit SPAJ SMS Blast', '2017-07-31 05:12:42', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(394, 'admin', 'Edit POLIS SMS Blast', '2017-07-31 06:50:01', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(395, 'admin', 'Edit POLIS SMS Blast', '2017-07-31 06:50:05', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(396, 'admin', 'Edit SPAJ SMS Blast', '2017-07-31 07:21:01', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(397, 'admin', 'Edit SPAJ SMS Blast', '2017-07-31 07:21:10', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(398, 'admin', 'Edit SPAJ SMS Blast', '2017-07-31 07:21:14', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(399, 'admin', 'Edit Claim Pending SMS Blast', '2017-07-31 07:25:00', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(400, 'admin', 'Login', '2017-07-31 09:51:57', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(401, 'admin', 'Edit ARO SMS Blast', '2017-07-31 09:55:18', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(402, 'admin', 'Edit ARO SMS Blast', '2017-07-31 09:55:22', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(403, 'admin', 'Edit MARKETING SMS Blast', '2017-07-31 09:55:38', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(404, 'admin', 'Delete HARI RAYA SMS Blast', '2017-07-31 09:56:44', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(405, 'admin', 'Delete HARI RAYA SMS Blast', '2017-07-31 09:56:46', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(406, 'admin', 'Add HARI RAYA SMS Blast', '2017-07-31 10:02:17', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(407, 'admin', 'Add HARI RAYA SMS Blast', '2017-07-31 10:02:25', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(408, 'admin', 'Delete HARI RAYA SMS Blast', '2017-07-31 10:02:28', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(409, 'admin', 'Delete HARI RAYA SMS Blast', '2017-07-31 10:02:30', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(410, 'admin', 'Delete HARI RAYA SMS Blast', '2017-07-31 10:16:05', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(411, 'admin', 'Edit HARI RAYA SMS Blast', '2017-07-31 10:16:20', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(412, 'admin', 'Delete HARI RAYA SMS Blast', '2017-07-31 10:16:23', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(413, 'admin', 'Login', '2017-08-01 02:20:23', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(414, 'admin', 'Logout', '2017-08-01 02:20:26', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(415, 'admin', 'Login', '2017-08-01 02:21:16', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(416, 'admin', 'Logout', '2017-08-01 02:22:28', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(417, 'admin', 'Login', '2017-08-01 02:22:39', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(418, 'admin', 'Add HARI RAYA SMS Blast', '2017-08-01 02:25:23', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(419, 'admin', 'Edit SPAJ SMS Blast', '2017-08-01 02:25:55', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(420, 'admin', 'Delete HARI RAYA SMS Blast', '2017-08-01 02:44:11', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(421, 'admin', 'Delete HARI RAYA SMS Blast', '2017-08-01 02:44:14', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(422, 'admin', 'Edit POLIS SMS Blast', '2017-08-01 02:54:40', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(423, 'admin', 'Edit POLIS SMS Blast', '2017-08-01 02:54:44', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(424, 'admin', 'Edit POLIS SMS Blast', '2017-08-01 02:58:06', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(425, 'admin', 'Edit ULTAH SMS Blast', '2017-08-01 04:32:42', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(426, 'admin', 'Edit ULTAH SMS Blast', '2017-08-01 04:32:47', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(427, 'admin', 'Add HARI RAYA SMS Blast', '2017-08-01 06:42:57', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(428, 'admin', 'Edit HARI RAYA SMS Blast', '2017-08-01 06:43:06', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(429, 'admin', 'Login', '2017-08-01 09:31:00', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(430, 'admin', 'Login', '2017-08-02 04:18:19', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(431, 'admin', 'Login', '2017-08-02 07:15:34', '172.25.116.123', 'Chrome 59.0.3071.115', 'Windows 7.'),
(432, 'admin', 'Login', '2017-08-02 07:39:32', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(433, 'admin', 'Login', '2017-08-02 10:08:09', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(434, 'admin', 'Login', '2017-08-02 11:19:54', '127.0.0.1', 'Firefox 54.0', 'Windows 7.'),
(435, 'admin', 'Login', '2017-08-03 04:21:18', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(436, 'admin', 'Add HARI RAYA SMS Blast', '2017-08-03 04:24:53', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(437, 'admin', 'Delete HARI RAYA SMS Blast', '2017-08-03 04:24:57', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(438, 'admin', 'Login', '2017-08-03 07:39:58', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(439, 'admin', 'Login', '2017-08-04 03:24:42', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(440, 'admin', 'Edit HARI RAYA SMS Blast', '2017-08-04 03:24:53', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(441, 'admin', 'Add HARI RAYA SMS Blast', '2017-08-04 08:28:29', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(442, 'admin', 'Delete HARI RAYA SMS Blast', '2017-08-04 08:28:33', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(443, 'admin', 'Edit HARI RAYA SMS Blast', '2017-08-04 08:28:48', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(444, 'admin', 'Delete HARI RAYA SMS Blast', '2017-08-04 08:28:51', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(445, 'admin', 'Add HARI RAYA SMS Blast', '2017-08-04 08:36:10', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(446, 'admin', 'Delete HARI RAYA SMS Blast', '2017-08-04 08:36:19', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(447, 'admin', 'Add HARI RAYA SMS Blast', '2017-08-04 08:37:11', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(448, 'admin', 'Delete HARI RAYA SMS Blast', '2017-08-04 08:56:22', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(449, 'admin', 'Login', '2017-08-07 05:06:16', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(450, 'admin', 'Login', '2017-08-07 08:15:22', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(451, 'admin', 'Add HARI RAYA SMS Blast', '2017-08-07 08:15:44', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(452, 'admin', 'Delete HARI RAYA SMS Blast', '2017-08-07 08:15:47', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(453, 'admin', 'Add HARI RAYA SMS Blast', '2017-08-07 08:17:00', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(454, 'admin', 'Edit HARI RAYA SMS Blast', '2017-08-07 08:17:06', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(455, 'admin', 'Edit ALAMAT SMS Blast', '2017-08-07 08:17:17', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(456, 'admin', 'Edit ALAMAT SMS Blast', '2017-08-07 08:17:22', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(457, 'admin', 'Delete HARI RAYA SMS Blast', '2017-08-07 08:22:38', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(458, 'admin', 'Add HARI RAYA SMS Blast', '2017-08-07 08:22:49', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(459, 'admin', 'Edit AHLI WARIS SMS Blast', '2017-08-07 08:51:17', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(460, 'admin', 'Edit SPAJ SMS Blast', '2017-08-07 08:51:38', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(461, 'admin', 'Edit SPAJ SMS Blast', '2017-08-07 08:51:44', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(462, 'admin', 'Edit SPAJ SMS Blast', '2017-08-07 08:51:49', '127.0.0.1', 'Chrome 59.0.3071.115', 'Windows 7.'),
(463, 'admin', 'Login', '2017-08-07 09:08:38', '127.0.0.1', 'Firefox 54.0', 'Windows 7.');

-- --------------------------------------------------------

--
-- Table structure for table `td_member`
--

CREATE TABLE `td_member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_polis` varchar(255) NOT NULL,
  `premi` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `nominal_claim` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_member`
--

INSERT INTO `td_member` (`id_member`, `nama`, `no`, `tanggal_lahir`, `no_polis`, `premi`, `no_rek`, `nominal_claim`) VALUES
(1, 'Ferry', 'DK0989', '1987-07-20', 'PO01291', '20000', '1230001230123', '100000000'),
(2, 'YESIA', 'DF9898', '2017-07-20', 'PO00877', '30000', '1230001230123', '100000000');

-- --------------------------------------------------------

--
-- Table structure for table `td_pesan`
--

CREATE TABLE `td_pesan` (
  `id_pesan` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `sub_type` varchar(255) NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_pesan`
--

INSERT INTO `td_pesan` (`id_pesan`, `type`, `sub_type`, `isi_pesan`) VALUES
(31, 'pos', 'mature', 'Bpk/Ibu [1] Yth,Polis Anda No. [2] akan jatuh tempo dd-mm-yy. Surat telah dikirim ke alamat Nasabah. Terima kasih,CS 021-29023688'),
(42, 'claim', 'payment', 'Bpk/Ibu [1] Yth, Polis Nasabah Anda No [2] akan jatuh tempo dd-mm-yy. Surat telah dikirim ke alamat Nasabah. Terima kasih,CS 021-29023688'),
(32, 'nbuw', 'spaj', 'Bpk/Ibu [1] Yth, Selamat bergabung. SPAJ Anda [2] telah kami diterima'),
(33, 'pos', 'aro', 'Bpk/Ibu [1] Yth,Permintaan Automatic Rollover Polis Anda No. [2] telah kami proses tgl dd-mmm-yy, Terima kasih,CS 021-29023688'),
(34, 'pos', 'alamat', 'Bpk/Ibu [1] Yth,Permintaan Perubahan Alamat korespondensi Polis Anda No. [2] telah kami proses tgl dd-mmm-yy, Terima kasih,CS 021-29023688'),
(35, 'pos', 'ahli_waris', 'Bpk/Ibu [1] Yth,Permintaan Perubahan Nama Ahli Waris Polis Anda No. [2] telah kami proses tgl dd-mmm-yy, Terima kasih,CS 021-29023688'),
(36, 'pos', 'no_rek', 'Bpk/Ibu [1] Yth,Permintaan Perubahan Nomor Rekening Polis Anda No. [2] telah kami proses tgl dd-mmm-yy, Terima kasih, CS 021-29023688'),
(37, 'pos', 'surender', 'Bpk/Ibu [1] Yth,Perlindungan asuransi jiwa Anda telah berakhir pada tanggal dd-mm-yy, Nilai tunai sudah kami transfer ke Rekening. Terima kasih ya a'),
(39, 'pos', 'marketing', 'Bpk/Ibu [Nama Marketing] Yth, Polis Nasabah Anda No [xNo Polisx] akan jatuh tempo dd-mm-yy. Surat telah dikirim ke alamat Nasabah. Terima kasih,CS 021-29023688'),
(49, 'nbuw', 'polis', 'Bpk/Ibu [1] Yth, Selamat bergabung. SPAJ Anda [2] telah kami diterima'),
(52, 'claim', 'pending', 'Bapak/Ibu. [1] Yth, klaim Polis No [2] masih membutuhkan dokumen tambahan. Surat telah dikirim ke alamat Nasabah'),
(50, 'ucapan', 'ultah', 'Bpk/Ibu [1] Yth. Kami PT Capital Life Indonesia mengucapkan Selamat Ulang Tahun, semoga sehat & sukses selalu'),
(51, 'billing', 'payment', 'Bpk/Ibu [1] Yth, Premi Polis [2] sebesar Rp.[3] belum kami terima, mohon dana ditransfer ke Rekening [4]'),
(44, 'claim', 'payment', 'Bpk/Ibu [1] Yth, Klaim Polis [2] tgl dd-mm-yy sebesar Rp.[3] disetujui, dana telah ditransfer ke Rekening');

-- --------------------------------------------------------

--
-- Table structure for table `td_pesan_hari_raya`
--

CREATE TABLE `td_pesan_hari_raya` (
  `id_pesan_hari_raya` int(11) NOT NULL,
  `agama` text NOT NULL,
  `jenis_hari_raya` varchar(255) NOT NULL,
  `isi_pesan` varchar(255) NOT NULL,
  `tanggal_hari_raya` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_pesan_hari_raya`
--

INSERT INTO `td_pesan_hari_raya` (`id_pesan_hari_raya`, `agama`, `jenis_hari_raya`, `isi_pesan`, `tanggal_hari_raya`) VALUES
(53, '', 'nyepi', 'ini siapa ya', '31/08/2017');

-- --------------------------------------------------------

--
-- Table structure for table `td_pesan_send_log`
--

CREATE TABLE `td_pesan_send_log` (
  `id_pesan_log` int(11) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `isi_pesan` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `sub_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_pesan_send_log`
--

INSERT INTO `td_pesan_send_log` (`id_pesan_log`, `no_hp`, `isi_pesan`, `type`, `sub_type`, `status`, `time`) VALUES
(1, '085729284581', 'Kepada Bapak Ferry Dimohon untuk bersabar', 'NBUW', 'SPAJ', 'success', '2017-07-21 09:30:06'),
(2, '085729284581', 'Kepada Bapak Ferry', 'NBUW', 'SPAJ', 'fail', '2017-07-21 09:29:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `td_admin`
--
ALTER TABLE `td_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `td_admin_log`
--
ALTER TABLE `td_admin_log`
  ADD PRIMARY KEY (`id_admin_log`);

--
-- Indexes for table `td_member`
--
ALTER TABLE `td_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `td_pesan`
--
ALTER TABLE `td_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `td_pesan_hari_raya`
--
ALTER TABLE `td_pesan_hari_raya`
  ADD PRIMARY KEY (`id_pesan_hari_raya`);

--
-- Indexes for table `td_pesan_send_log`
--
ALTER TABLE `td_pesan_send_log`
  ADD PRIMARY KEY (`id_pesan_log`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `td_admin`
--
ALTER TABLE `td_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `td_admin_log`
--
ALTER TABLE `td_admin_log`
  MODIFY `id_admin_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=464;
--
-- AUTO_INCREMENT for table `td_member`
--
ALTER TABLE `td_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `td_pesan`
--
ALTER TABLE `td_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `td_pesan_hari_raya`
--
ALTER TABLE `td_pesan_hari_raya`
  MODIFY `id_pesan_hari_raya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `td_pesan_send_log`
--
ALTER TABLE `td_pesan_send_log`
  MODIFY `id_pesan_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
