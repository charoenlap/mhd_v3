-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 05:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsoftpro_mhd`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhd_admin`
--

CREATE TABLE `mhd_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_login` datetime DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modify` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mhd_admin`
--

INSERT INTO `mhd_admin` (`id`, `username`, `password`, `date_login`, `date_added`, `date_modify`) VALUES
(1, 'admin', 'f5fde0dc484da753a9ebb354c1fe1f65', '2020-11-09 12:01:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mhd_company`
--

CREATE TABLE `mhd_company` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `room` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_1` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `del` int(1) DEFAULT 0,
  `date_added` datetime DEFAULT NULL,
  `date_modify` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mhd_company`
--

INSERT INTO `mhd_company` (`id`, `member_id`, `name`, `room`, `address_1`, `address_2`, `district`, `country`, `province`, `postcode`, `telephone`, `fax`, `del`, `date_added`, `date_modify`) VALUES
(1, 1, 'Fsoftpro', '3', '111/8 บางกระดี่ 25 แยก 2-2-1 Khwaeng Samae Dam, Khet Bang Khun Thian, Krung Thep Maha Nakhon 10150, Thailand', '2', 'แสมดำ', 'บางขุนเทียน', 'กรุงเทพมหานคร', '10150', '+66863498778', NULL, 0, '2020-09-24 17:29:54', '2020-11-09 12:06:27'),
(2, 2, 'RRRRRRR', 'wewasdadasd', '44/444', '7', 'ท่ากกแดง', 'เซกา', 'บึงกาฬ', '38150', '0989787878', NULL, 0, '2020-11-12 10:36:33', NULL),
(3, 3, 'ddddddddd', 'wwwwwwwww', '22/33', '3', 'บางกระทุ่ม', 'บางกระทุ่ม', 'พิษณุโลก', '65110', 'asdadadada', NULL, 0, '2020-11-16 10:13:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mhd_member`
--

CREATE TABLE `mhd_member` (
  `id` int(11) NOT NULL,
  `member_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `forget_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `del` int(1) DEFAULT 0,
  `date_login` datetime DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modify` datetime DEFAULT NULL,
  `confirm` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mhd_member`
--

INSERT INTO `mhd_member` (`id`, `member_no`, `email`, `password`, `firstname`, `lastname`, `telephone`, `forget_code`, `del`, `date_login`, `date_added`, `date_modify`, `confirm`) VALUES
(1, '0001', 'munk.gorn@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'munk2', 'gorn', '+66863498778', NULL, 0, '2020-11-13 10:19:23', '2020-09-24 17:29:54', '2020-11-09 12:06:27', 1),
(2, '0002', 'bell444@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'rere', 'belbel', '0989787878', NULL, 0, '2020-11-12 10:38:10', '2020-11-12 10:36:32', '2020-11-12 10:36:33', 1),
(3, '0003', 'kratos112@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'wewewewewe', 'rerererer', 'asdadadada', NULL, 0, '2020-11-16 10:13:43', '2020-11-16 10:13:05', '2020-11-16 10:13:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mhd_payment`
--

CREATE TABLE `mhd_payment` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL COMMENT 'admin check/change',
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` date DEFAULT NULL,
  `time_stamp` time DEFAULT NULL,
  `date_modify` datetime DEFAULT NULL,
  `del` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mhd_payment`
--

INSERT INTO `mhd_payment` (`id`, `member_id`, `admin_id`, `image`, `status`, `bank_name`, `date_added`, `time_stamp`, `date_modify`, `del`) VALUES
(1, 1, NULL, 'a', NULL, 'กสิกร', NULL, NULL, NULL, 0),
(2, NULL, 0, '2222', NULL, NULL, NULL, NULL, NULL, 0),
(3, NULL, 0, '2222', NULL, NULL, NULL, NULL, NULL, 0),
(4, 22, 0, '2222', NULL, NULL, NULL, NULL, NULL, 0),
(5, 22, 0, '2222', NULL, NULL, NULL, NULL, NULL, 0),
(6, 22, 0, '2222', NULL, NULL, NULL, NULL, NULL, 0),
(7, 22, 0, '2222', NULL, NULL, '2020-11-12', '16:54:00', NULL, 0),
(8, 22, 0, '2222', NULL, NULL, '2020-11-12', '16:54:00', NULL, 0),
(9, 1, 0, '2222', NULL, NULL, NULL, '16:54:00', NULL, 0),
(10, 1, 0, '2222', NULL, NULL, NULL, '16:54:00', NULL, 0),
(11, 1, 0, '2222', NULL, NULL, NULL, NULL, NULL, 0),
(12, 1, 0, '2222', NULL, NULL, '2020-11-13', '11:03:26', NULL, 0),
(13, 1, 0, '2222', NULL, NULL, '2020-11-13', '11:04:24', NULL, 0),
(14, 1, 0, '2222', NULL, NULL, '2020-11-13', '11:04:24', NULL, 0),
(15, 1, 0, '2222', NULL, NULL, '2020-11-08', '16:09:35', NULL, 0),
(16, 1, 0, '2222', NULL, 'ธนาคารกรุงเทพ', '2020-11-08', '16:09:35', NULL, 0),
(17, 1, 0, '2222', NULL, 'ธนาคารกรุงเทพ', '2020-11-08', '16:09:35', NULL, 0),
(18, 1, 0, '2222', NULL, 'ธนาคารธนชาต', '2020-11-15', '15:09:00', NULL, 0),
(19, 1, 0, '2222', NULL, 'อื่นๆ', '2020-11-08', '15:12:00', NULL, 0),
(20, 1, 0, '2222', NULL, NULL, '2020-11-08', '15:12:00', NULL, 0),
(21, 1, 0, '2222', NULL, NULL, '2020-11-15', '15:13:00', NULL, 0),
(22, 1, 0, '2222', NULL, NULL, '2020-11-15', '15:13:00', NULL, 0),
(23, 1, 0, '2222', NULL, 'trtrtrtrtrtr', '2020-11-22', '15:14:00', NULL, 0),
(24, 1, 0, '2222', NULL, 'trtrtrtrtrtr', '2020-11-22', '15:14:00', NULL, 0),
(25, 1, 0, NULL, NULL, '', '2020-11-13', '12:30:00', NULL, 0),
(26, 1, 0, NULL, NULL, '', '2020-11-18', '16:45:00', NULL, 0),
(27, 1, 0, NULL, NULL, '', '2020-11-15', '15:45:00', NULL, 0),
(28, 1, 0, NULL, NULL, '', '2020-11-15', '15:45:00', NULL, 0),
(29, 1, 0, NULL, NULL, '', '2020-11-15', '15:45:00', NULL, 0),
(30, 1, 0, NULL, NULL, '', '2020-11-19', '15:49:00', NULL, 0),
(31, 1, 0, NULL, NULL, '', '2020-11-19', '15:49:00', NULL, 0),
(32, 1, 0, NULL, NULL, '', '2020-11-26', '17:51:00', NULL, 0),
(33, 1, 0, NULL, NULL, 'ธนาคารกรุงศรีอยุธยา', '2020-11-26', '17:51:00', NULL, 0),
(34, 1, 0, NULL, NULL, 'ธนาคารกรุงเทพ', '2020-11-12', '17:48:00', NULL, 0),
(35, 1, 0, NULL, NULL, 'ธนาคารกรุงเทพ', '2020-11-12', '17:48:00', NULL, 0),
(36, 1, 0, NULL, NULL, 'อื่นๆ', '2020-11-07', '16:49:00', NULL, 0),
(37, 1, 0, NULL, NULL, 'ttttttttttt', '2020-11-07', '16:49:00', NULL, 0),
(38, 1, 0, NULL, NULL, '', '2020-11-18', '13:04:00', NULL, 0),
(39, 1, 0, NULL, NULL, 'ธนาคารกรุงศรีอยุธยา', '2020-11-18', '13:04:00', NULL, 0),
(40, 1, 0, NULL, NULL, 'ธนาคารเกียรตินาคิน', '2020-11-20', '18:05:00', NULL, 0),
(41, 1, 0, NULL, NULL, 'อื่นๆ', '2020-11-21', '17:06:00', NULL, 0),
(42, 1, 0, NULL, NULL, 'tttttttttttttttttt', '2020-11-21', '17:06:00', NULL, 0),
(43, 1, 0, NULL, NULL, 'dgfsgfsfsfs', '2020-11-28', '09:07:00', NULL, 0),
(44, 1, 0, NULL, NULL, 'ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร', '2020-11-27', '17:22:00', NULL, 0),
(45, 1, 0, 'pic1.jpg', NULL, 'ธนาคารอิสลามแห่งประเทศไทย', '2020-11-21', '18:26:00', NULL, 0),
(46, 1, 0, 'pic1.jpg', NULL, 'ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร', '2020-11-15', '17:30:00', NULL, 0),
(47, 1, 0, 'myw3schoolsimage.jpg', NULL, 'ธนาคารธนชาต', '2020-11-05', '15:33:00', NULL, 0),
(48, 1, 0, 'myw3schoolsimage.jpg', NULL, 'ธนาคารออมสิน', '2020-11-21', '16:48:00', NULL, 0),
(49, 1, 0, 'pic1.jpg', NULL, 'ererererr', '2020-11-11', '17:49:00', NULL, 0),
(50, 1, 0, 'myw3schoolsimage.jpg', NULL, 'ธนาคารไทยเครดิตเพื่อรายย่อย', '2020-11-20', '18:31:00', NULL, 0),
(51, 1, 0, 'pic1.jpg', NULL, 'ธนาคารยูโอบี', '2020-11-26', '19:06:00', NULL, 0),
(52, 1, 0, 'myw3schoolsimage.jpg', NULL, 'ธนาคารไอซีบีซี (ไทย)', '2020-11-18', '21:10:00', NULL, 0),
(53, 1, 0, 'pic1.jpg', NULL, 'ธนาคารเกียรตินาคิน', '2020-11-07', '19:23:00', NULL, 0),
(54, 1, 0, 'pic1.jpg', NULL, 'ธนาคารซีไอเอ็มบีไทย', '2020-11-19', '19:43:00', NULL, 0),
(55, 1, 0, 'pic1.jpg', NULL, 'ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย', '2020-11-25', '19:32:00', NULL, 0),
(56, 1, 0, 'pic1.jpg', NULL, 'ธนาคารกรุงศรีอยุธยา', '2020-11-07', '19:39:00', NULL, 0),
(57, 1, 0, 'pic1.jpg', NULL, 'ธนาคารไทยพาณิชย์', '2020-11-11', '20:23:00', NULL, 0),
(58, 1, 0, 'pic1.jpg', NULL, 'ธนาคารซีไอเอ็มบีไทย', '2020-11-06', '21:26:00', NULL, 0),
(59, 1, 0, 'myw3schoolsimage.jpg', NULL, 'ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร', '2020-11-15', '11:11:00', NULL, 0),
(60, 1, 0, 'tenouuur.gif', NULL, 'ธนาคารเกียรตินาคิน', '2020-11-21', '19:32:00', NULL, 0),
(61, 1, 0, NULL, NULL, 'ธนาคารกรุงศรีอยุธยา', '2020-11-12', '21:40:00', NULL, 0),
(62, 1, 0, NULL, NULL, 'ธนาคารเกียรตินาคิน', '2020-11-06', '20:44:00', NULL, 0),
(63, 1, 0, NULL, NULL, 'ธนาคารแลนด์แอนด์ เฮ้าส์', '2020-11-11', '19:42:00', NULL, 0),
(64, NULL, NULL, 'tenouuur.gif', NULL, NULL, NULL, NULL, NULL, 0),
(65, 1, 0, NULL, NULL, 'ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร', '2020-11-24', '21:46:00', NULL, 0),
(66, NULL, NULL, 'tenouuur.gif', NULL, NULL, NULL, NULL, NULL, 0),
(67, 1, 0, NULL, NULL, 'ธนาคารไอซีบีซี (ไทย)', '2020-11-18', '21:47:00', NULL, 0),
(68, 1, 0, NULL, NULL, 'ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย', '2020-11-20', '21:50:00', NULL, 0),
(69, NULL, NULL, 'pic1.jpg', NULL, NULL, NULL, NULL, NULL, 0),
(70, 1, 0, NULL, NULL, 'ธนาคารไทยเครดิตเพื่อรายย่อย', '2020-11-07', '20:59:00', NULL, 0),
(71, 1, 0, 'myw3schoolsimage.jpg', NULL, 'ธนาคารกรุงไทย', '2020-11-04', '19:00:00', NULL, 0),
(72, 1, 0, 'myw3schoolsimage.jpg', NULL, 'ำำพำพำพำพำพำำำพำพ', '2020-11-18', '21:08:00', NULL, 0),
(73, 3, 0, 'pic1.jpg', NULL, 'ธนาคารทิสโก้', '2020-11-16', '10:13:00', NULL, 0),
(74, 3, 0, 'pic1.jpg', NULL, 'ธนาคารทหารไทย', '2020-11-16', '10:31:12', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mhd_program`
--

CREATE TABLE `mhd_program` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `structure` longtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'structure default value',
  `price` decimal(10,2) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modify` datetime DEFAULT NULL,
  `del` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mhd_program`
--

INSERT INTO `mhd_program` (`id`, `name`, `slug`, `structure`, `price`, `date_added`, `date_modify`, `del`) VALUES
(1, 'EQAC', 'eqac', '[{\"name\":\"home\",\"option\":[{\"value\":\"112\",\"name\":\"Dirui CS-600B\",\"selected\":0},{\"value\":\"119\",\"name\":\"ILab 600/650/Taurus\",\"selected\":0},{\"value\":\"147\",\"name\":\"Sysmex JCA-BM6010/C\",\"selected\":0},{\"value\":\"165\",\"name\":\"Roche Cobas c501/502/503\",\"selected\":0},{\"value\":\"54\",\"name\":\"NM-BAPTA\",\"selected\":0},{\"value\":\"32\",\"name\":\"Jaffe Kinetic\",\"selected\":0},{\"value\":\"33\",\"name\":\"Jendrassik - Grof \",\"selected\":0},{\"value\":\"44\",\"name\":\"PNP.AMP buff; AACC\",\"selected\":0},{\"value\":\"45\",\"name\":\"PNP.DEA buff;  DGKC\",\"selected\":0},{\"value\":\"46\",\"name\":\"Reflotron\",\"selected\":0},{\"value\":\"47\",\"name\":\"SSCC\",\"selected\":0},{\"value\":\"48\",\"name\":\"Vitros\",\"selected\":0},{\"value\":\"49\",\"name\":\"Vitros; ISE\",\"selected\":0},{\"value\":\"34\",\"name\":\"Kinetic 37C/ Kinetic - without pyridoxal \",\"selected\":0},{\"value\":\"35\",\"name\":\"Kinetic - pyridoxal\",\"selected\":0},{\"value\":\"36\",\"name\":\"Malloy - Evelyn \",\"selected\":0},{\"value\":\"37\",\"name\":\"Margon/ Xylidyl blue\",\"selected\":0},{\"value\":\"38\",\"name\":\"Methylthymol blue\",\"selected\":0},{\"value\":\"39\",\"name\":\"Molybdenum EP\",\"selected\":0},{\"value\":\"40\",\"name\":\"Molybdenum UV\",\"selected\":0},{\"value\":\"41\",\"name\":\"Others\",\"selected\":0},{\"value\":\"42\",\"name\":\"Phospho. Precip./ Polyanion\",\"selected\":0},{\"value\":\"43\",\"name\":\"PNP AMP buff; IFCC\",\"selected\":0},{\"value\":\"1\",\"name\":\"Arsenazo/ Chlorophosphonazo\",\"selected\":0},{\"value\":\"2\",\"name\":\"Bromocresol green\",\"selected\":0},{\"value\":\"3\",\"name\":\"Bromocresol purple\",\"selected\":0},{\"value\":\"4\",\"name\":\"Beckman\",\"selected\":0},{\"value\":\"5\",\"name\":\"Biuret - Blank\",\"selected\":0},{\"value\":\"6\",\"name\":\"Biuret - Unblank\",\"selected\":0},{\"value\":\"7\",\"name\":\"CK-NAC/IFCC\",\"selected\":0},{\"value\":\"8\",\"name\":\"CNPG3\",\"selected\":0},{\"value\":\"9\",\"name\":\"Colorimetric\",\"selected\":0},{\"value\":\"10\",\"name\":\"CPC/ Arsenazo\",\"selected\":0},{\"value\":\"11\",\"name\":\"Dade Behring\",\"selected\":0},{\"value\":\"12\",\"name\":\"DCA/DPD\",\"selected\":0},{\"value\":\"13\",\"name\":\"DGKC\",\"selected\":0},{\"value\":\"14\",\"name\":\"Diazonium\",\"selected\":0},{\"value\":\"15\",\"name\":\"Direct Determination\",\"selected\":0},{\"value\":\"16\",\"name\":\"Direct ISE\",\"selected\":0},{\"value\":\"17\",\"name\":\"Enz Color Total TG\",\"selected\":0},{\"value\":\"18\",\"name\":\"Enzyme\",\"selected\":0},{\"value\":\"19\",\"name\":\"Enzyme Colorimetric\",\"selected\":0},{\"value\":\"20\",\"name\":\"Enzyme EP Blank\",\"selected\":0},{\"value\":\"21\",\"name\":\"Enzyme EP Unblank\",\"selected\":0},{\"value\":\"22\",\"name\":\"Enzyme Kinetic\",\"selected\":0},{\"value\":\"23\",\"name\":\"G7PNP\",\"selected\":0},{\"value\":\"24\",\"name\":\"Glucose Dehydrogenase\",\"selected\":0},{\"value\":\"25\",\"name\":\"Glycerol Blank\",\"selected\":0},{\"value\":\"26\",\"name\":\"Glucose Oxidase\",\"selected\":0},{\"value\":\"27\",\"name\":\"Hexokinase\",\"selected\":0},{\"value\":\"28\",\"name\":\"IFCC\",\"selected\":0},{\"value\":\"29\",\"name\":\"Indirect ISE\",\"selected\":0},{\"value\":\"30\",\"name\":\"ISE\",\"selected\":0},{\"value\":\"31\",\"name\":\"Jaffe EP\",\"selected\":0},{\"value\":\"50\",\"name\":\"Direct with PVS/PEGMS\",\"selected\":0},{\"value\":\"51\",\"name\":\"Imm.Inhibition\",\"selected\":0},{\"value\":\"52\",\"name\":\"Water & Gerarde Method\",\"selected\":0},{\"value\":\"53\",\"name\":\"Vanadate\",\"selected\":0},{\"value\":\"101\",\"name\":\"Abbott Architect c Systems\",\"selected\":0},{\"value\":\"102\",\"name\":\"Audicom AC9000 Series electrolyte analyzer\",\"selected\":0},{\"value\":\"104\",\"name\":\"Beckman Coulter DxC600/ DxC800\",\"selected\":0},{\"value\":\"103\",\"name\":\"Beckman Coulter AU400/480/680/5800\",\"selected\":0},{\"value\":\"105\",\"name\":\"Beckman Coulter DxC700 AU\",\"selected\":0},{\"value\":\"106\",\"name\":\"Biosystems A15\",\"selected\":0},{\"value\":\"107\",\"name\":\"Biosystems BA400\",\"selected\":0},{\"value\":\"108\",\"name\":\"Caretium XI-921\",\"selected\":0},{\"value\":\"109\",\"name\":\"Roche Cobas Mira S\",\"selected\":0},{\"value\":\"110\",\"name\":\"Diasys BioMajesty JCA-BM6010/C\",\"selected\":0},{\"value\":\"111\",\"name\":\"Dirui CS Series\",\"selected\":0},{\"value\":\"113\",\"name\":\"Electa4 analyzer\",\"selected\":0},{\"value\":\"114\",\"name\":\"Erba XL Series\",\"selected\":0},{\"value\":\"115\",\"name\":\"Fuji Dri-Chem NX500i\",\"selected\":0},{\"value\":\"116\",\"name\":\"GASTAT-1820\",\"selected\":0},{\"value\":\"117\",\"name\":\"Hitachi 911\",\"selected\":0},{\"value\":\"118\",\"name\":\"Horiba Pentra 400\",\"selected\":0},{\"value\":\"120\",\"name\":\"ILab 600/650/Taurus\",\"selected\":0},{\"value\":\"121\",\"name\":\"In4lyte\",\"selected\":0},{\"value\":\"122\",\"name\":\"Konelab 20/30/60 / Thermo Indiko\",\"selected\":0},{\"value\":\"123\",\"name\":\"Mindray BC 2000/3000 series\",\"selected\":0},{\"value\":\"124\",\"name\":\"Mindray BS Series\",\"selected\":0},{\"value\":\"125\",\"name\":\"Nova 4 electrolyte analyzer\",\"selected\":0},{\"value\":\"126\",\"name\":\"Ortho Vitros 250/350\",\"selected\":0},{\"value\":\"127\",\"name\":\"Ortho Vitros 4600/5600\",\"selected\":0},{\"value\":\"128\",\"name\":\"PKL PPC 125\",\"selected\":0},{\"value\":\"129\",\"name\":\"Q4-Lyte\",\"selected\":0},{\"value\":\"130\",\"name\":\"Randox RX series\",\"selected\":0},{\"value\":\"131\",\"name\":\"Reflotron\",\"selected\":0},{\"value\":\"132\",\"name\":\"Roche Cobas c111\",\"selected\":0},{\"value\":\"133\",\"name\":\"Roche Cobas c311\",\"selected\":0},{\"value\":\"134\",\"name\":\"Roche Cobas c501/502/503\",\"selected\":0},{\"value\":\"135\",\"name\":\"Roche Cobas Integra 400 Plus\",\"selected\":0},{\"value\":\"136\",\"name\":\"Rx Modena\",\"selected\":0},{\"value\":\"137\",\"name\":\"Rx-lyte v.4\",\"selected\":0},{\"value\":\"138\",\"name\":\"SFRI ISE electrolyte series\",\"selected\":0},{\"value\":\"139\",\"name\":\"Siemens Advia 1800\",\"selected\":0},{\"value\":\"140\",\"name\":\"Siemens Rapidlab 348Ex\",\"selected\":0},{\"value\":\"141\",\"name\":\"Siemens/Dade Dimension EXL\",\"selected\":0},{\"value\":\"142\",\"name\":\"Siemens/Dade Dimension RxL /Max/Xpand\",\"selected\":0},{\"value\":\"143\",\"name\":\"Sinnowa BS-3000\",\"selected\":0},{\"value\":\"144\",\"name\":\"Sinnowa DS301\",\"selected\":0},{\"value\":\"145\",\"name\":\"Sysmex BX-3010\",\"selected\":0},{\"value\":\"146\",\"name\":\"Sysmex BX-4000\",\"selected\":0},{\"value\":\"148\",\"name\":\"Tecom TC220\",\"selected\":0},{\"value\":\"149\",\"name\":\"Thermo Fisher Konelab Delta\",\"selected\":0},{\"value\":\"150\",\"name\":\"Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024\",\"selected\":0},{\"value\":\"151\",\"name\":\"URIT-8031\",\"selected\":0},{\"value\":\"152\",\"name\":\"Vitalab Scientific Flexor E\",\"selected\":0},{\"value\":\"153\",\"name\":\"XD 687 Electrolyte Analyzer\",\"selected\":0},{\"value\":\"154\",\"name\":\"XD 697 Electrolyte Analyzer\",\"selected\":0},{\"value\":\"155\",\"name\":\"Q4-LyteEx \",\"selected\":0},{\"value\":\"157\",\"name\":\"Biotecnica BT Series\",\"selected\":0},{\"value\":\"158\",\"name\":\"URIT 8280\",\"selected\":0},{\"value\":\"159\",\"name\":\"GE300 electrolyte analyzer\",\"selected\":0},{\"value\":\"160\",\"name\":\"Biosystems BA200\",\"selected\":0},{\"value\":\"161\",\"name\":\"Roche Cobas c701/702\",\"selected\":0},{\"value\":\"162\",\"name\":\"HumaStar 200\",\"selected\":0},{\"value\":\"156\",\"name\":\"Furuno CA-800\",\"selected\":0},{\"value\":\"163\",\"name\":\"Diasys Respons 920\",\"selected\":0},{\"value\":\"164\",\"name\":\"Rayto Chemray 120\",\"selected\":0},{\"value\":\"166\",\"name\":\"URIT-910 Plus\",\"selected\":0},{\"value\":\"167\",\"name\":\"Siemens Atellica Solution\",\"selected\":0},{\"value\":\"545\",\"name\":\"Medica\",\"selected\":0},{\"value\":\"546\",\"name\":\"Bt GEN\",\"selected\":0},{\"value\":\"501\",\"name\":\"Abbott laboratories\",\"selected\":0},{\"value\":\"502\",\"name\":\"Beckman Coulter\",\"selected\":0},{\"value\":\"503\",\"name\":\"BioSystems\",\"selected\":0},{\"value\":\"504\",\"name\":\"Biozen\",\"selected\":0},{\"value\":\"505\",\"name\":\"Caretium \",\"selected\":0},{\"value\":\"506\",\"name\":\"Centronic\",\"selected\":0},{\"value\":\"507\",\"name\":\"Diamond\",\"selected\":0},{\"value\":\"508\",\"name\":\"DiaSys\",\"selected\":0},{\"value\":\"509\",\"name\":\"Diazyme\",\"selected\":0},{\"value\":\"510\",\"name\":\"Dirui\",\"selected\":0},{\"value\":\"511\",\"name\":\"Electa\",\"selected\":0},{\"value\":\"512\",\"name\":\"Elitech\",\"selected\":0},{\"value\":\"513\",\"name\":\"Erba Lachema\",\"selected\":0},{\"value\":\"514\",\"name\":\"Fuji\",\"selected\":0},{\"value\":\"515\",\"name\":\"Furuno\",\"selected\":0},{\"value\":\"516\",\"name\":\"Horiba\",\"selected\":0},{\"value\":\"517\",\"name\":\"Iberlab\",\"selected\":0},{\"value\":\"518\",\"name\":\"I-med\",\"selected\":0},{\"value\":\"519\",\"name\":\"Infocus firming\",\"selected\":0},{\"value\":\"520\",\"name\":\"Instumentation laboratory\",\"selected\":0},{\"value\":\"521\",\"name\":\"Jiangsu Audicom \",\"selected\":0},{\"value\":\"522\",\"name\":\"Meditop\",\"selected\":0},{\"value\":\"523\",\"name\":\"Mindray\",\"selected\":0},{\"value\":\"524\",\"name\":\"Olympus\",\"selected\":0},{\"value\":\"525\",\"name\":\"Ortho-Clinical Diagnostics\",\"selected\":0},{\"value\":\"526\",\"name\":\"PCL\",\"selected\":0},{\"value\":\"527\",\"name\":\"Randox\",\"selected\":0},{\"value\":\"528\",\"name\":\"Roche Diagnotics\",\"selected\":0},{\"value\":\"529\",\"name\":\"SFRI\",\"selected\":0},{\"value\":\"530\",\"name\":\"Shanghai Xunda\",\"selected\":0},{\"value\":\"531\",\"name\":\"Siemens\",\"selected\":0},{\"value\":\"532\",\"name\":\"Slidedrychem\",\"selected\":0},{\"value\":\"533\",\"name\":\"Spinreact\",\"selected\":0},{\"value\":\"534\",\"name\":\"Stanbio\",\"selected\":0},{\"value\":\"535\",\"name\":\"Sysmex\",\"selected\":0},{\"value\":\"536\",\"name\":\"Techno Medica\",\"selected\":0},{\"value\":\"537\",\"name\":\"Tecom\",\"selected\":0},{\"value\":\"538\",\"name\":\"Thermoscientific\",\"selected\":0},{\"value\":\"539\",\"name\":\"Toyobo\",\"selected\":0},{\"value\":\"540\",\"name\":\"URIT\",\"selected\":0},{\"value\":\"541\",\"name\":\"Wako\",\"selected\":0},{\"value\":\"542\",\"name\":\"YD diagnostic\",\"selected\":0},{\"value\":\"543\",\"name\":\"Biotecnica Instruments\",\"selected\":0},{\"value\":\"544\",\"name\":\"Genrui Biotech\",\"selected\":0},{\"value\":\"547\",\"name\":\"Q4-Lyte\",\"selected\":0},{\"value\":\"548\",\"name\":\"Q4-LyteEx\",\"selected\":0},{\"value\":\"549\",\"name\":\"Rayto\",\"selected\":0},{\"value\":\"550\",\"name\":\"QuantILab\",\"selected\":0}]},{\"name\":\"tab\",\"option\":[{\"value\":\"2\",\"name\":\"ALP (U/L)\",\"selected\":0},{\"value\":\"3\",\"name\":\"ALT (U/L)\",\"selected\":0},{\"value\":\"4\",\"name\":\"Amylase, Total  (U/L)\",\"selected\":0},{\"value\":\"5\",\"name\":\"AST  (U/L)\",\"selected\":0},{\"value\":\"6\",\"name\":\"BUN (mg/dL)\",\"selected\":0},{\"value\":\"7\",\"name\":\"Bilirubin, Total  (mg/dL)\",\"selected\":0},{\"value\":\"8\",\"name\":\"Calcium (mg/dL)\",\"selected\":0},{\"value\":\"9\",\"name\":\"Chloride (mmol/L)\",\"selected\":0},{\"value\":\"11\",\"name\":\"CK, Total (U/L)\",\"selected\":0},{\"value\":\"13\",\"name\":\"GGT (U/L)\",\"selected\":0},{\"value\":\"14\",\"name\":\"Glucose (mg/dL)\",\"selected\":0},{\"value\":\"10\",\"name\":\"Cholesterol (mg/dL)\",\"selected\":0},{\"value\":\"15\",\"name\":\"HDL-cholesterol (mg/dL)\",\"selected\":0},{\"value\":\"17\",\"name\":\"LDL-cholesterol (mg/dL)\",\"selected\":0},{\"value\":\"16\",\"name\":\"LDH (U/L)\",\"selected\":0},{\"value\":\"18\",\"name\":\"Magnesium (mg/dL)\",\"selected\":0},{\"value\":\"19\",\"name\":\"Phosphorus, Inorganic (mg/dL)\",\"selected\":0},{\"value\":\"20\",\"name\":\"Potassium (mmol/L)\",\"selected\":0},{\"value\":\"21\",\"name\":\"Total Protein (g/dL)\",\"selected\":0},{\"value\":\"22\",\"name\":\"Sodium (mmol/L)\",\"selected\":0},{\"value\":\"23\",\"name\":\"Triglyceride (mg/dL)\",\"selected\":0},{\"value\":\"24\",\"name\":\"Uric acid (mg/dL)\",\"selected\":0},{\"value\":\"1\",\"name\":\"Albumin (g/dL)\",\"selected\":0},{\"value\":\"12\",\"name\":\"Creatinine (mg/dL)\",\"selected\":0}]}]', '3000.00', '2020-09-21 14:00:45', '2020-09-22 13:28:42', 0),
(2, 'EQAH', 'eqah', NULL, '4000.00', '2020-09-21 14:00:55', NULL, 0),
(3, 'EQAT', 'eqat', NULL, '3500.00', '2020-09-21 14:01:13', NULL, 0),
(4, 'EQAP', 'eqap', NULL, NULL, '2020-09-21 14:01:16', NULL, 0),
(5, 'B-EQAM', 'b-eqam', NULL, NULL, '2020-09-21 14:01:21', NULL, 0),
(6, 'H-EQAM', 'h-eqam', NULL, NULL, '2020-09-21 14:01:26', NULL, 0),
(7, 'UC-EQAM', 'uc-eqam', NULL, NULL, '2020-09-21 14:01:31', NULL, 0),
(8, 'EQAI:Syphilis', 'eqaisyphilis', NULL, NULL, '2020-09-21 14:01:37', NULL, 0),
(9, 'EQAI:HBV', 'eqaihbv', NULL, NULL, '2020-09-21 14:01:44', NULL, 0),
(10, 'EQAB:GRAM', 'eqabgram', NULL, NULL, '2020-09-21 14:01:48', '2020-09-21 14:03:41', 0),
(11, 'EQAB:GRAM', 'eqabgram', NULL, NULL, '2020-09-21 14:03:14', NULL, 1),
(12, 'EQAB:AFB', 'eqabafb', NULL, NULL, '2020-09-21 14:04:32', NULL, 0),
(13, 'EQAB IDEN&AST', 'eqab-idenast', NULL, NULL, '2020-09-21 14:04:39', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mhd_program_infection`
--

CREATE TABLE `mhd_program_infection` (
  `id` int(11) NOT NULL,
  `program_id` int(11) DEFAULT NULL,
  `code` int(255) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other` int(11) DEFAULT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fix_decimal` int(255) NOT NULL DEFAULT 0,
  `del` int(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mhd_program_infection`
--

INSERT INTO `mhd_program_infection` (`id`, `program_id`, `code`, `name`, `other`, `section`, `event`, `fix_decimal`, `del`) VALUES
(61, 5, 1, 'WBC (x10<sup>9</sup>/L) ', NULL, NULL, NULL, 0, 0),
(62, 5, 2, 'RBC (x10<sup>12</sup>/L)', NULL, NULL, NULL, 0, 0),
(63, 5, 3, 'Hb (g/dL)', NULL, NULL, NULL, 0, 0),
(64, 5, 4, 'Hct (%)', NULL, NULL, NULL, 0, 0),
(65, 5, 5, 'MCV (fL)', NULL, NULL, NULL, 0, 0),
(66, 5, 6, 'MCH (pg)', NULL, NULL, NULL, 0, 0),
(67, 5, 7, 'MCHC (g/dL)', NULL, NULL, NULL, 0, 0),
(68, 5, 8, 'RDW (%)', NULL, NULL, NULL, 0, 0),
(69, 5, 9, 'PLT (x10<sup>9</sup>/L)', NULL, NULL, NULL, 0, 0),
(70, 3, 1, 'AFP* IU/mL', NULL, NULL, NULL, 3, 0),
(71, 3, 2, 'CEA ng/mL', NULL, NULL, NULL, 3, 0),
(72, 3, 3, 'PSA ng/mL', NULL, NULL, NULL, 3, 0),
(73, 3, 4, 'CA 125 u/mL', NULL, NULL, NULL, 3, 0),
(74, 3, 5, 'CA 15-3 u/mL', NULL, NULL, NULL, 3, 0),
(75, 3, 6, 'CA 19-9 u/mL', NULL, NULL, NULL, 3, 0),
(76, 3, 7, 'B-hCG mIU/mL', NULL, NULL, NULL, 3, 0),
(77, 17, 1, 'Lymphoblast', NULL, '1', NULL, 0, 0),
(78, 17, 2, 'Prolymphocyte', NULL, '1', NULL, 0, 0),
(79, 17, 3, 'Monoblast', NULL, '1', NULL, 0, 0),
(80, 17, 4, 'Promonocyte', NULL, '1', NULL, 0, 0),
(81, 17, 5, 'Myeloblast', NULL, '1', NULL, 0, 0),
(82, 17, 6, 'Promyelocyte', NULL, '1', NULL, 0, 0),
(83, 17, 7, 'Neutrophilic myelocyte', NULL, '1', NULL, 0, 0),
(84, 17, 8, 'Eosinophilic myelocyte', NULL, '1', NULL, 0, 0),
(85, 17, 9, 'Basophilic myelocyte', NULL, '1', NULL, 0, 0),
(86, 17, 10, 'Neutrophilic metamyelocyte', NULL, '1', NULL, 0, 0),
(87, 17, 11, 'Eosinophilic metamyelocyte', NULL, '1', NULL, 0, 0),
(88, 17, 12, 'Basophilic metamyelocyte', NULL, '1', NULL, 0, 0),
(89, 17, 13, 'Band form neutrophil', NULL, '1', NULL, 0, 0),
(90, 17, 14, 'Neutrophil', NULL, '1', NULL, 0, 0),
(91, 17, 15, 'Eosinophil', NULL, '1', NULL, 0, 0),
(92, 17, 16, 'Basophil', NULL, '1', NULL, 0, 0),
(93, 17, 17, 'Monocyte', NULL, '1', NULL, 0, 0),
(94, 17, 18, 'Small lymphocyte', NULL, '1', NULL, 0, 0),
(95, 17, 19, 'Large lymphocyte', NULL, '1', NULL, 0, 0),
(96, 17, 20, 'Atypical lymphocyte', NULL, '1', NULL, 0, 0),
(97, 17, 21, 'Plasma cell', NULL, '1', NULL, 0, 0),
(98, 17, 22, 'Auer rod', NULL, '1', NULL, 0, 0),
(99, 17, 23, 'Faggot cell', NULL, '1', NULL, 0, 0),
(100, 17, 24, 'Döhle body', NULL, '1', NULL, 0, 0),
(101, 17, 25, 'Neutrophil with toxic granule', NULL, '1', NULL, 0, 0),
(102, 17, 26, 'Neutrophil with vacuolization', NULL, '1', NULL, 0, 0),
(103, 17, 27, 'Hypersegmented neutrophil', NULL, '1', NULL, 0, 0),
(104, 17, 28, 'Hyposegmented  neutrophil', NULL, '1', NULL, 0, 0),
(105, 17, 29, 'Smudge cell / Basket cell', NULL, '1', NULL, 0, 0),
(106, 17, 30, 'Pyknotic cell', NULL, '1', NULL, 0, 0),
(107, 17, 31, 'Platelet satellitism', NULL, '1', NULL, 0, 0),
(108, 17, 32, 'Platelet clumping', NULL, '1', NULL, 0, 0),
(109, 17, 33, 'Pale stained platelet', NULL, '1', NULL, 0, 0),
(110, 17, 34, 'Giant platelet', NULL, '1', NULL, 0, 0),
(111, 17, 35, 'Micromegakaryocyte', NULL, '1', NULL, 0, 0),
(112, 17, 37, 'Pronormoblast', NULL, '2', NULL, 0, 0),
(113, 17, 38, 'Basophilic normoblast', NULL, '2', NULL, 0, 0),
(114, 17, 39, 'Polychromatic normoblast', NULL, '2', NULL, 0, 0),
(115, 17, 40, 'Orthochromatic normoblast', NULL, '2', NULL, 0, 0),
(116, 17, 41, 'Polychromasia', NULL, '2', NULL, 0, 0),
(117, 17, 42, 'Reticulocyte', NULL, '2', NULL, 0, 0),
(118, 17, 43, 'Normal red blood cell', NULL, '2', NULL, 0, 0),
(119, 17, 44, 'Microcyte', NULL, '2', NULL, 0, 0),
(120, 17, 45, 'Round macrocyte', NULL, '2', NULL, 0, 0),
(121, 17, 46, 'Oval macrocyte', NULL, '2', NULL, 0, 0),
(122, 17, 47, 'Ovalocyte/Elliptocyte', NULL, '2', NULL, 0, 0),
(123, 17, 48, 'Target cell', NULL, '2', NULL, 0, 0),
(124, 17, 49, 'Schistocyte/Fragmented cells', NULL, '2', NULL, 0, 0),
(125, 17, 50, 'Crenated red blood cell', NULL, '2', NULL, 0, 0),
(126, 17, 51, 'Teardrop cell', NULL, '2', NULL, 0, 0),
(127, 17, 52, 'Sickle cell', NULL, '2', NULL, 0, 0),
(128, 17, 53, 'Spherocyte', NULL, '2', NULL, 0, 0),
(129, 17, 54, 'Irregular contracted RBC (IRC)', NULL, '2', NULL, 0, 0),
(130, 17, 55, 'Bite cell', NULL, '2', NULL, 0, 0),
(131, 17, 56, 'Blister cell', NULL, '2', NULL, 0, 0),
(132, 17, 57, 'Burr cell', NULL, '2', NULL, 0, 0),
(133, 17, 58, 'Acanthocyte', NULL, '2', NULL, 0, 0),
(134, 17, 59, 'Stomatocyte', NULL, '2', NULL, 0, 0),
(135, 17, 60, 'Stomato-ovalocyte', NULL, '2', NULL, 0, 0),
(136, 17, 61, 'Hypochromia', NULL, '2', NULL, 0, 0),
(137, 17, 62, 'Basophilic stippling', NULL, '2', NULL, 0, 0),
(138, 17, 63, 'Howell - Jolly bodies', NULL, '2', NULL, 0, 0),
(139, 17, 64, 'Cabot’s ring', NULL, '2', NULL, 0, 0),
(140, 17, 65, 'Pappenheimer bodies', NULL, '2', NULL, 0, 0),
(141, 17, 66, 'Hb H inclusion bodies', NULL, '2', NULL, 0, 0),
(142, 17, 67, 'Heinz’s body', NULL, '2', NULL, 0, 0),
(143, 17, 68, 'Red cell agglutination', NULL, '2', NULL, 0, 0),
(144, 17, 69, 'Rouleaux formation', NULL, '2', NULL, 0, 0),
(526, 17, 3, 'Ghost red blood cell', NULL, '3', NULL, 0, 0),
(146, 17, 36, 'Megakaryocyte fragment', 1, '2', NULL, 0, 0),
(147, 17, 1, 'Red blood cell', NULL, '3', NULL, 0, 0),
(148, 17, 2, 'Dysmorphic Rbc ', NULL, '3', NULL, 0, 0),
(149, 17, 4, 'White blood cell', NULL, '3', NULL, 0, 0),
(150, 17, 5, 'Wbc with clumping ', NULL, '3', NULL, 0, 0),
(151, 17, 6, 'Macrophage', NULL, '3', NULL, 0, 0),
(152, 17, 7, 'Squamous epithelial cell', NULL, '3', NULL, 0, 0),
(153, 17, 8, 'Transitional epithelial cell', NULL, '3', NULL, 0, 0),
(154, 17, 9, 'Renal epithelial cell', NULL, '3', NULL, 0, 0),
(155, 17, 10, 'Oval fat body', NULL, '3', NULL, 0, 0),
(156, 17, 11, 'Spermatozoa', NULL, '3', NULL, 0, 0),
(157, 17, 12, 'Bacteria', NULL, '3', NULL, 0, 0),
(158, 17, 13, 'Budding yeast', NULL, '3', NULL, 0, 0),
(159, 17, 14, 'Pseudohyphae', NULL, '3', NULL, 0, 0),
(160, 17, 15, 'T. vaginalis', NULL, '3', NULL, 0, 0),
(161, 17, 16, 'Atypical cell with high N : C', NULL, '3', NULL, 0, 0),
(162, 17, 17, 'Hyaline cast', NULL, '3', NULL, 0, 0),
(163, 17, 18, 'Granular cast', NULL, '3', NULL, 0, 0),
(164, 17, 19, 'Rbc cast', NULL, '3', NULL, 0, 0),
(165, 17, 20, 'Heme cast', NULL, '3', NULL, 0, 0),
(166, 17, 21, 'Wbc cast', NULL, '3', NULL, 0, 0),
(167, 17, 22, 'Renal epithelial cell cast', NULL, '3', NULL, 0, 0),
(168, 17, 23, 'Mixed cellular cast', NULL, '3', NULL, 0, 0),
(169, 17, 24, 'Bacterial  cast', NULL, '4', NULL, 0, 0),
(170, 17, 25, 'Waxy cast ', NULL, '4', NULL, 0, 0),
(171, 17, 26, 'Fatty cast', NULL, '4', NULL, 0, 0),
(172, 17, 27, 'Broad cast', NULL, '4', NULL, 0, 0),
(173, 17, 28, 'Uric acid crystal', NULL, '4', NULL, 0, 0),
(174, 17, 29, 'Calcium oxalate crystal', NULL, '4', NULL, 0, 0),
(175, 17, 30, 'Calcium carbonate crystal', NULL, '4', NULL, 0, 0),
(176, 17, 31, 'Calcium phosphate crystal', NULL, '4', NULL, 0, 0),
(177, 17, 32, 'Ammonium urate crystal', NULL, '4', NULL, 0, 0),
(178, 17, 33, 'Ammonium biurate crystal', NULL, '4', NULL, 0, 0),
(179, 17, 34, 'Triple phosphate crystal', NULL, '4', NULL, 0, 0),
(180, 17, 35, 'Cystine crystal', NULL, '4', NULL, 0, 0),
(181, 17, 36, 'Tyrosine crystal', NULL, '4', NULL, 0, 0),
(182, 17, 37, 'Leucine crystal', NULL, '4', NULL, 0, 0),
(183, 17, 38, 'Sulfonamide crystal', NULL, '4', NULL, 0, 0),
(184, 17, 39, 'Cholesterol crystal', NULL, '4', NULL, 0, 0),
(185, 17, 40, 'Bilirubin crystal', NULL, '4', NULL, 0, 0),
(186, 17, 41, 'Amorphous ', NULL, '4', NULL, 0, 0),
(187, 17, 42, 'Mucous thread', NULL, '4', NULL, 0, 0),
(188, 17, 43, 'Fat droplet', NULL, '4', NULL, 0, 0),
(189, 17, 44, 'Starch granule', NULL, '4', NULL, 0, 0),
(190, 17, 45, 'Other (โปรดระบุ)', 1, '4', NULL, 0, 0),
(235, 16, 1, 'Blast cell (cannot be identified)', NULL, '1', NULL, 0, 0),
(236, 16, 2, 'Lymphoblast/prolymphocyte', NULL, '1', NULL, 0, 0),
(237, 16, 3, 'Monoblast/promonocyte', NULL, '1', NULL, 0, 0),
(238, 16, 4, 'Myeloblast', NULL, '1', NULL, 0, 0),
(239, 16, 5, 'Promyelocyte', NULL, '1', NULL, 0, 0),
(240, 16, 6, 'Myelocyte', NULL, '1', NULL, 0, 0),
(241, 16, 7, 'Metamyelocyte', NULL, '1', NULL, 0, 0),
(242, 16, 8, 'Band form neutrophil', NULL, '1', NULL, 0, 0),
(243, 16, 9, 'Neutrophil', NULL, '1', NULL, 0, 0),
(244, 16, 10, 'Eosinophil', NULL, '1', NULL, 0, 0),
(245, 16, 11, 'Basophil', NULL, '1', NULL, 0, 0),
(246, 16, 12, 'Monocyte', NULL, '1', NULL, 0, 0),
(247, 16, 13, 'Lymphocyte', NULL, '1', NULL, 0, 0),
(248, 16, 14, 'Atypical lymphocyte', NULL, '1', NULL, 0, 0),
(249, 16, 15, 'Plasma cell', NULL, '1', NULL, 0, 0),
(250, 16, 16, 'NRBC (....../ WBC 100 เซลล์)', NULL, '1', NULL, 0, 0),
(251, 16, 17, 'Auer rod', NULL, '2', NULL, 0, 0),
(252, 16, 18, 'Döhle bodies', NULL, '2', NULL, 0, 0),
(253, 16, 19, 'Toxic granules in neutrophil', NULL, '2', NULL, 0, 0),
(254, 16, 20, 'Vacuolization in  neutrophil', NULL, '2', NULL, 0, 0),
(255, 16, 21, 'Hypersegmented  neutrophil', NULL, '2', NULL, 0, 0),
(256, 16, 22, 'Pelger - Huët anomaly', NULL, '2', NULL, 0, 0),
(257, 16, 23, 'Anisocytosis', NULL, '3', NULL, 0, 0),
(258, 16, 24, 'Poikilocytosis', NULL, '3', NULL, 0, 0),
(259, 16, 25, 'Microcyte*', NULL, '3', NULL, 0, 0),
(260, 16, 26, 'Round macrocyte', NULL, '3', NULL, 0, 0),
(261, 16, 27, 'Oval macrocyte', NULL, '3', NULL, 0, 0),
(262, 16, 28, 'Target cell', NULL, '3', NULL, 0, 0),
(263, 16, 29, 'Ovalocyte / elliptocyte', NULL, '3', NULL, 0, 0),
(264, 16, 30, 'Schistocyte / fragmented cells', NULL, '3', NULL, 0, 0),
(265, 16, 31, 'Tear drop cell', NULL, '3', NULL, 0, 0),
(266, 16, 32, 'Spherocyte', NULL, '3', NULL, 0, 0),
(267, 16, 33, 'Defected spherocyte / IRC', NULL, '3', NULL, 0, 0),
(268, 16, 34, 'Bite cell', NULL, '3', NULL, 0, 0),
(269, 16, 35, 'Blister cell / rbc with contracted  Hb', NULL, '3', NULL, 0, 0),
(270, 16, 36, 'Burr cell', NULL, '3', NULL, 0, 0),
(271, 16, 37, 'Acanthocyte', NULL, '3', NULL, 0, 0),
(272, 16, 38, 'Stomatocyte', NULL, '3', NULL, 0, 0),
(273, 16, 39, 'Hypochromia*', NULL, '3', NULL, 0, 0),
(274, 16, 40, 'Polychromasia', NULL, '3', NULL, 0, 0),
(275, 16, 41, 'Normal red blood cell', NULL, '4', NULL, 0, 0),
(276, 16, 42, 'Basophilic stippling', NULL, '4', NULL, 0, 0),
(277, 16, 43, 'Howell-Jolly bodies', NULL, '4', NULL, 0, 0),
(278, 16, 44, 'Pappenheimer bodies', NULL, '4', NULL, 0, 0),
(279, 16, 45, 'Cabot’s ring', NULL, '4', NULL, 0, 0),
(280, 16, 46, 'Agglutination', NULL, '4', NULL, 0, 0),
(281, 16, 47, 'Rouleaux formation', NULL, '4', NULL, 0, 0),
(282, 16, 48, 'Nucleated red blood cell (โปรดระบุระยะของเซลล์ที่พบ)', 1, '4', NULL, 0, 0),
(283, 16, 49, 'Platelet  ', NULL, '5', NULL, 0, 0),
(531, 2, NULL, NULL, NULL, NULL, NULL, 0, 0),
(284, 16, 50, 'Pale  stained platelet', NULL, '6', NULL, 0, 0),
(285, 16, 51, 'Giant platelet', NULL, '6', NULL, 0, 0),
(286, 16, 52, 'Micromegakaryocyte / megakaryocyte fragment', NULL, '6', NULL, 0, 0),
(287, 16, 53, 'Other abnormalities (โปรดระบุ)', 1, '6', NULL, 0, 0),
(288, 12, 65, 'No AFB Observed', NULL, '1', NULL, 0, 0),
(289, 12, 66, '1-9 AFB per 100 fields', NULL, '1', NULL, 0, 0),
(290, 12, 67, 'AFB 1+ (10-99 AFB/100 fields)', NULL, '1', NULL, 0, 0),
(291, 12, 68, 'AFB 2+ (1-10 AFB per field in 50 fields)', 1, '1', NULL, 0, 0),
(292, 12, 69, 'AFB 3+ (more than 10 AFB per field in 20 fields)', NULL, '1', NULL, 0, 0),
(293, 12, 70, 'Conventional tests', NULL, '2', NULL, 0, 0),
(294, 12, 71, 'VITEK', NULL, '2', NULL, 0, 0),
(295, 12, 72, 'VITEK 2', NULL, '2', NULL, 0, 0),
(296, 12, 73, 'MicroScan', NULL, '2', NULL, 0, 0),
(297, 12, 74, 'MALDI-TOF (bioMerieux)', NULL, '2', NULL, 0, 0),
(298, 12, 75, 'MALDI-TOF (Bruker)', NULL, '2', NULL, 0, 0),
(457, 12, 1, 'Kinyoun stain', NULL, '4', NULL, 0, 0),
(299, 12, 76, 'Molecular techniques', NULL, '2', NULL, 0, 0),
(300, 12, 77, 'API (bioMerieux)', NULL, '2', NULL, 0, 0),
(301, 12, 78, 'Rapid Test NF PLUS', NULL, '2', NULL, 0, 0),
(302, 12, 79, 'Phoenix M50', NULL, '2', NULL, 0, 0),
(303, 12, 80, 'Other…', 1, '2', NULL, 0, 0),
(304, 12, 81, 'Question Type', NULL, '3', NULL, 0, 0),
(305, 12, 82, 'Disc diffusion', NULL, '3', NULL, 0, 0),
(306, 12, 83, 'VITEK', NULL, '3', NULL, 0, 0),
(307, 12, 84, 'VITEK 2', NULL, '3', NULL, 0, 0),
(308, 12, 85, 'Phoenix M50', NULL, '3', NULL, 0, 0),
(309, 12, 86, 'MicroScan', NULL, '3', NULL, 0, 0),
(310, 12, 87, 'Sensititre', NULL, '3', NULL, 0, 0),
(311, 12, 88, 'Other…', 1, '3', NULL, 0, 0),
(344, 12, 2, 'Ziehl-Neelsen stain', NULL, '4', NULL, 0, 0),
(342, 12, 3, 'Auramine Rhodamine Fluorochrome stain', NULL, '4', NULL, 0, 0),
(340, 12, 4, 'Other ระบุ', 1, '4', NULL, 0, 0),
(317, 10, 1, 'Gram positive cocci in clusters, single, pairs and short chains', NULL, NULL, NULL, 0, 0),
(318, 10, 2, 'Gram positive cocci in chains', NULL, NULL, NULL, 0, 0),
(319, 10, 3, 'Gram positive cocci in tetrads', NULL, NULL, NULL, 0, 0),
(320, 10, 4, 'Gram positive large bacilli with spore', NULL, NULL, NULL, 0, 0),
(321, 10, 5, 'Gram positive bacilli, regular rod', NULL, NULL, NULL, 0, 0),
(322, 10, 6, 'Gram positive large bacilli', NULL, NULL, NULL, 0, 0),
(323, 10, 7, 'Gram positive irregular bacilli', NULL, NULL, NULL, 0, 0),
(324, 10, 8, 'Gram positive diplococci in lancet shape', NULL, NULL, NULL, 0, 0),
(325, 10, 9, 'Gram positive bacilli with terminal spore', NULL, NULL, NULL, 0, 0),
(326, 10, 10, 'Gram positive bacilli in Chinese letter or palisade', NULL, NULL, NULL, 0, 0),
(327, 10, 11, 'Gram negative coccobacilli', NULL, NULL, NULL, 0, 0),
(328, 10, 12, 'Gram negative cocci and coccobacilli', NULL, NULL, NULL, 0, 0),
(329, 10, 13, 'Gram negative diplococci in kidney shape', NULL, NULL, NULL, 0, 0),
(330, 10, 14, 'Gram negative bacilli', NULL, NULL, NULL, 0, 0),
(331, 10, 15, 'Gram negative pleomorphic bacilli', NULL, NULL, NULL, 0, 0),
(332, 10, 16, 'Gram negative bacilli with bipolar staining', NULL, NULL, NULL, 0, 0),
(333, 13, 1, 'Disc diffusion', NULL, '1', NULL, 0, 0),
(334, 13, 2, 'VITEX', NULL, '1', NULL, 0, 0),
(343, 13, 3, 'VITEX 2', NULL, '1', NULL, 0, 0),
(341, 13, 4, 'Phoenix m50', NULL, '1', NULL, 0, 0),
(339, 13, 5, 'MicroScan', NULL, '1', NULL, 0, 0),
(337, 13, 6, 'Sensititre', NULL, '1', NULL, 0, 0),
(335, 13, 7, 'Other', 1, '1', NULL, 0, 0),
(476, 9, 1, 'HBs Ag', NULL, NULL, 'true', 0, 0),
(477, 9, 2, 'Anti HBs', NULL, NULL, 'true', 0, 0),
(513, 8, NULL, NULL, NULL, NULL, NULL, 0, 0),
(439, 2, 1, 'Total T3 (ng/dL)', NULL, NULL, NULL, 3, 0),
(436, 2, 2, 'Total T4 (ug/dL)', NULL, NULL, NULL, 3, 0),
(434, 2, 3, 'FT3 (pg/mL)', NULL, NULL, NULL, 3, 0),
(432, 2, 4, 'FT4 (ng/dL)', NULL, NULL, NULL, 3, 0),
(430, 2, 5, 'TSH (uIU/mL)', NULL, NULL, NULL, 3, 0),
(459, 13, 1, 'Conventional tests', NULL, '3', NULL, 0, 0),
(460, 13, 2, 'VITEK', NULL, '3', NULL, 0, 0),
(461, 13, 3, 'VITEK 2', NULL, '3', NULL, 0, 0),
(462, 13, 4, 'MicroScan', NULL, '3', NULL, 0, 0),
(463, 13, 5, 'MALDI-TOF (bioMerieux)', NULL, '3', NULL, 0, 0),
(464, 13, 6, 'MALDI-TOF (Bruker)', NULL, '3', NULL, 0, 0),
(466, 13, 7, 'Molecular techniques', NULL, '3', NULL, 0, 0),
(467, 13, 8, 'API (bioMerieux)', NULL, '3', NULL, 0, 0),
(468, 13, 9, 'Rapid Test NF PLUS', NULL, '3', NULL, 0, 0),
(469, 13, 10, 'Phoenix M50', NULL, '3', NULL, 0, 0),
(470, 13, 11, 'Other…', 1, '3', NULL, 0, 0),
(471, 13, 1, 'Susceptible', NULL, '4', NULL, 0, 0),
(472, 13, 2, 'Susceptible dose dependent', NULL, '4', NULL, 0, 0),
(473, 13, 3, 'Intermedate', NULL, '4', NULL, 0, 0),
(474, 13, 4, 'Resistant', NULL, '4', NULL, 0, 0),
(475, 9, 3, 'Anti HBc', NULL, NULL, NULL, 0, 0),
(478, 9, 4, 'HBe Ag', NULL, NULL, NULL, 0, 0),
(479, 9, 5, 'Anti HBe', NULL, NULL, NULL, 0, 0),
(480, 1, 1, 'Albumin (g/dL)', NULL, '1', '[\"48\",\"2\",\"3\"]', 2, 0),
(481, 1, 2, 'ALP (U/L)', NULL, NULL, '[\"44\",\"45\",\"46\",\"48\",\"43\",\"4\"]', 0, 0),
(482, 1, 3, 'ALT (U/L)', NULL, NULL, '[\"46\",\"48\",\"34\",\"35\",\"4\",\"11\"]', 0, 0),
(483, 1, 4, 'Amylase, Total  (U/L)', NULL, NULL, '[\"48\",\"41\",\"8\",\"23\"]', 0, 0),
(484, 1, 5, 'AST  (U/L)', NULL, NULL, '[\"46\",\"48\",\"34\",\"35\",\"4\",\"11\"]', 0, 0),
(485, 1, 6, 'BUN (mg/dL)', NULL, NULL, '[\"46\",\"48\",\"18\",\"22\"]', 1, 0),
(486, 1, 7, 'Bilirubin, Total  (mg/dL)', NULL, NULL, '[\"33\",\"46\",\"48\",\"36\",\"12\",\"14\",\"52\",\"53\"]', 2, 0),
(487, 1, 8, 'Calcium (mg/dL)', NULL, NULL, '[\"54\",\"48\",\"10\",\"30\"]', 1, 0),
(488, 1, 9, 'Chloride (mmol/L)', NULL, NULL, '[\"49\",\"16\",\"29\"]', 0, 0),
(489, 1, 11, 'CK, Total (U/L)', NULL, NULL, '[\"46\",\"48\",\"7\",\"9\"]', 0, 0),
(490, 1, 12, 'Creatinine (mg/dL)', NULL, '1', '[\"32\",\"46\",\"48\",\"18\",\"31\"]', 2, 0),
(491, 1, 13, 'GGT (U/L)', NULL, NULL, '[\"46\",\"48\",\"11\",\"19\",\"22\"]', 0, 0),
(492, 1, 14, 'Glucose (mg/dL)', NULL, NULL, '[\"46\",\"48\",\"24\",\"26\",\"27\"]', 0, 0),
(493, 1, 10, 'Cholesterol (mg/dL)', NULL, NULL, '[\"46\",\"48\",\"4\",\"11\",\"19\"]', 0, 0),
(494, 1, 15, 'HDL-cholesterol (mg/dL)', NULL, NULL, '[\"46\",\"48\",\"41\",\"42\",\"15\",\"50\",\"51\"]', 1, 0),
(495, 1, 17, 'LDL-cholesterol (mg/dL)', NULL, NULL, '[\"41\",\"15\",\"50\"]', 1, 0),
(496, 1, 16, 'LDH (U/L)', NULL, NULL, '[\"47\",\"48\",\"4\",\"13\",\"28\"]', 0, 0),
(497, 1, 18, 'Magnesium (mg/dL)', NULL, NULL, '[\"48\",\"37\",\"38\",\"41\",\"1\"]', 1, 0),
(498, 1, 19, 'Phosphorus, Inorganic (mg/dL)', NULL, NULL, '[\"48\",\"39\",\"40\"]', 1, 0),
(499, 1, 20, 'Potassium (mmol/L)', NULL, NULL, '[\"49\",\"16\",\"29\"]', 2, 0),
(500, 1, 21, 'Total Protein (g/dL)', NULL, NULL, '[\"48\",\"5\",\"6\"]', 2, 0),
(501, 1, 22, 'Sodium (mmol/L)', NULL, NULL, '[\"49\",\"16\",\"29\"]', 1, 0),
(502, 1, 23, 'Triglyceride (mg/dL)', NULL, NULL, '[\"46\",\"48\",\"11\",\"17\",\"25\"]', 0, 0),
(503, 1, 24, 'Uric acid (mg/dL)', NULL, NULL, '[\"46\",\"48\",\"11\",\"20\",\"21\"]', 2, 0),
(504, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(505, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(515, 4, NULL, NULL, NULL, NULL, NULL, 0, 0),
(522, 10, NULL, NULL, NULL, NULL, NULL, 0, 1),
(525, 17, 70, 'Other (โปรดระบุ)', NULL, '2', NULL, 0, 0),
(528, 10, 17, 'Gram negative curved bacilli', NULL, NULL, NULL, 0, 0),
(529, 10, 18, 'Gram negative bacilli, seagull wing', NULL, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mhd_program_tools`
--

CREATE TABLE `mhd_program_tools` (
  `id` int(11) NOT NULL,
  `program_id` int(11) DEFAULT NULL,
  `code` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `del` int(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mhd_program_tools`
--

INSERT INTO `mhd_program_tools` (`id`, `program_id`, `code`, `name`, `other`, `section`, `method`, `del`) VALUES
(1, 5, '18', 'Sysmex K series, XP series', NULL, '18', NULL, 0),
(2, 5, '15', 'XS series', NULL, '15', NULL, 0),
(3, 5, '17', 'XE series', NULL, '17', NULL, 0),
(4, 5, '14', 'XN series', NULL, '14', NULL, 0),
(5, 5, '1', 'BC 3000 series', NULL, '31', NULL, 0),
(6, 5, '2', 'BC 5000 series', NULL, '32', NULL, 0),
(503, 5, '16', 'XT series', NULL, '16', NULL, 0),
(9, 5, '3', 'BC 6000 series', NULL, '33', NULL, 0),
(10, 5, '7', 'LH', NULL, '27', NULL, 0),
(11, 5, '6', 'DxH ', NULL, '26', NULL, 0),
(507, 5, '23', 'Ac.T 5 series', NULL, '23', NULL, 0),
(16, 5, '22', 'Advia 120/2120', NULL, '67', NULL, 0),
(17, 5, '11', 'Quintus', NULL, '62', NULL, 0),
(505, 5, '8', 'MEK', NULL, '60', NULL, 0),
(20, 5, '4', 'BF 6800', NULL, '4', NULL, 0),
(506, 5, '13', 'XN-L series', NULL, '13', NULL, 0),
(22, 5, '19', 'Swelab', NULL, '64', NULL, 0),
(504, 5, '12', 'URIT', NULL, '63', NULL, 0),
(24, 5, '20', 'Hycel', NULL, '65', NULL, 0),
(508, 1, '54', 'NM-BAPTA', NULL, '1', NULL, 0),
(26, 8, '26', 'VDRL', NULL, 'NTP', NULL, 0),
(27, 8, '27', 'RPR', NULL, 'NTP', NULL, 0),
(28, 8, '28', 'Unheated VDLR', NULL, 'NTP', NULL, 0),
(29, 8, '29', 'Other', '1', 'NTP', NULL, 0),
(30, 8, '30', 'TPHA', NULL, 'TP', NULL, 0),
(31, 8, '31', 'FTA-ABS', NULL, 'TP', NULL, 0),
(32, 8, '32', 'TPPA', NULL, 'TP', NULL, 0),
(33, 8, '33', 'Immunochromatography', NULL, 'TP', NULL, 0),
(34, 8, '34', 'CMIA', NULL, 'TP', NULL, 0),
(35, 8, '35', 'ECLIA', NULL, 'TP', NULL, 0),
(36, 8, '40', 'Other', '1', 'TP', NULL, 0),
(37, 8, '37', 'Reactive', NULL, 'Qualitative', NULL, 0),
(38, 8, '38', 'Weakly Reactive', NULL, 'Qualitative', NULL, 0),
(39, 8, '39', 'Non-reactive', NULL, 'Qualitative', NULL, 0),
(40, 3, '01', 'Maglumi Series /800', NULL, NULL, 'CLIA', 0),
(41, 3, '02', 'Abbott, Architect Series /Armity', NULL, NULL, 'CMIA', 0),
(42, 3, '03', 'Siemens, Advia Centaur CP  [  ] XP', NULL, NULL, 'ICMA', 0),
(43, 3, '04', 'Beckman, Access ; Unicel DXi', NULL, NULL, 'ICMA', 0),
(44, 3, '05', 'BioMerieux, VIDAS ; Minividas', NULL, NULL, 'ELFA', 0),
(45, 3, '06', 'Tosoh AIA Series', NULL, NULL, 'FEIA', 0),
(46, 3, '07', 'Johnson, Vitros ECi 3600, 5600', NULL, NULL, 'ICMA', 0),
(47, 3, '08', 'Roche; Cobas Series, Modular, Elecsys series', NULL, NULL, 'ECLIA', 0),
(48, 3, '09', 'Hybiome AE-180', NULL, NULL, 'CLIA', 0),
(49, 3, '10', 'Mindray CL 2000 i / 1000 i', NULL, NULL, 'ICMA', 0),
(50, 3, '11', 'Liaison Series ;', NULL, NULL, 'CLIA', 0),
(51, 3, '12', 'Immulite, LKB1277, DPC, Others', NULL, NULL, 'IEMA, ICMA, IRMA, CLLA, ECLIA', 0),
(52, 2, '01', 'Maglumi Series 800', NULL, NULL, 'CLIA', 0),
(53, 2, '02', 'Abbott Architect Series; Armity', NULL, NULL, 'CLIA', 0),
(54, 2, '03', 'Advia centaur CP; XP', NULL, NULL, 'ECLIA', 0),
(55, 2, '04', 'Beckman, access series DXi', NULL, NULL, 'CLIA', 0),
(56, 2, '05', 'Bio merieux; Vidas; Mini Vidas', NULL, NULL, 'ELFA', 0),
(57, 2, '06', 'Tosoh AIA series', NULL, NULL, 'CLIA', 0),
(58, 2, '07', 'Johnson vitros Eci. 3600, 5600', NULL, NULL, 'CMIA', 0),
(59, 2, '08', 'Roche; Cobas series; Elecsys series; Modular', NULL, NULL, 'FEIA', 0),
(60, 2, '09', 'Hybiome AE-180', NULL, NULL, 'CLIA', 0),
(61, 2, '10', 'Mindray CL 1000i; 2000i; 6000', NULL, NULL, 'CLIA', 0),
(62, 2, '11', 'Liaison; Liaison XL', NULL, NULL, 'CLIA', 0),
(63, 2, '12', 'Sysmex HISCL-800', '1', NULL, '', 0),
(65, 12, '65', 'No AFB Observed', NULL, '1', '', 0),
(66, 12, '66', '1-9 AFB per 100 fields', NULL, '1', '', 0),
(67, 12, '67', 'AFB 1+ (10-99 AFB/100 fields)', NULL, '1', '', 0),
(68, 12, '68', 'AFB 2+ (1-10 AFB per field in 50 fields', '1', '1', '', 0),
(69, 12, '69', 'AFB 3+ (more than 10 AFB per field in 20 fields)', NULL, '1', '', 0),
(70, 12, '70', 'Conventional tests', NULL, '2', '', 0),
(71, 12, '71', 'VITEK', NULL, '2', '', 0),
(72, 12, '72', 'VITEK 2', NULL, '2', '', 0),
(73, 12, '73', 'MicroScan', NULL, '2', '', 0),
(74, 12, '74', 'MALDI-TOF (bioMerieux)', NULL, '2', '', 0),
(75, 12, '75', 'MALDI-TOF (Bruker)', NULL, '2', '', 0),
(76, 12, '76', 'Molecular techniques', NULL, '2', '', 0),
(77, 12, '77', 'API (bioMerieux)', NULL, '2', '', 0),
(78, 12, '78', 'Rapid Test NF PLUS', NULL, '2', '', 0),
(79, 12, '79', 'Phoenix M50', NULL, '2', '', 0),
(80, 12, '80', 'Other…', '1', '2', '', 0),
(81, 12, '81', 'Question Type', NULL, '3', '', 0),
(82, 12, '82', 'Disc diffusion', NULL, '3', '', 0),
(83, 12, '83', 'VITEK', NULL, '3', '', 0),
(84, 12, '84', 'VITEK 2', NULL, '3', '', 0),
(85, 12, '85', 'Phoenix M50', NULL, '3', '', 0),
(86, 12, '86', 'MicroScan', NULL, '3', '', 0),
(87, 12, '87', 'Sensititre', NULL, '3', '', 0),
(88, 12, '88', 'Other…', '1', '3', '', 0),
(217, 9, '1', 'Automation', 'auto', '1', NULL, 0),
(216, 9, '2', 'Immunochromatography', NULL, '1', NULL, 0),
(215, 9, '3', 'Other', 'other', '1', NULL, 0),
(214, 9, '1', 'EIA / ELISA', NULL, 'auto', NULL, 0),
(213, 9, '2', 'CLIA', NULL, 'auto', NULL, 0),
(212, 9, '3', 'CMIA', NULL, 'auto', NULL, 0),
(211, 9, '4', 'E-CLIA', NULL, 'auto', NULL, 0),
(273, 13, '1', 'Amikacin', NULL, '2', NULL, 0),
(272, 13, '2', 'Amoxicillin-calvulonate', NULL, '2', NULL, 0),
(271, 13, '3', 'Ampicillin', NULL, '2', NULL, 0),
(270, 13, '4', 'Ampicillin-sulbactam', NULL, '2', NULL, 0),
(269, 13, '5', 'Azithromycin', NULL, '2', NULL, 0),
(268, 13, '6', 'Aztreonam', NULL, '2', NULL, 0),
(267, 13, '7', 'Cefazolin', NULL, '2', NULL, 0),
(266, 13, '8', 'Cefepime', NULL, '2', NULL, 0),
(265, 13, '9', 'Cefotaxime', NULL, '2', NULL, 0),
(264, 13, '10', 'Cefotetan', NULL, '2', NULL, 0),
(263, 13, '11', 'Cefoxtin', NULL, '2', NULL, 0),
(262, 13, '12', 'Ceftaroline', NULL, '2', NULL, 0),
(261, 13, '13', 'Ceftazidime', NULL, '2', NULL, 0),
(260, 13, '14', 'Ceftolozane-lazobactam', NULL, '2', NULL, 0),
(259, 13, '15', 'Ceftriaxone', NULL, '2', NULL, 0),
(258, 13, '16', 'Cefuroxime', NULL, '2', NULL, 0),
(257, 13, '17', 'Chloramphenicol', NULL, '2', NULL, 0),
(256, 13, '18', 'Ciprofloxacin', NULL, '2', NULL, 0),
(255, 13, '19', 'Clarithomycin', NULL, '2', NULL, 0),
(254, 13, '20', 'Clindamycin', NULL, '2', NULL, 0),
(159, 4, '1', 'Amoeba trophozoite ', NULL, NULL, NULL, 0),
(160, 4, '2', 'Ascaris lumbricoides egg ', NULL, NULL, NULL, 0),
(161, 4, '3', 'Balantidium coli cyst ', NULL, NULL, NULL, 0),
(162, 4, '4', 'Balantidium coli trophozoite ', NULL, NULL, NULL, 0),
(163, 4, '5', 'Blastocystis hominis ', NULL, NULL, NULL, 0),
(164, 4, '6', 'Capillaria philippinensis adult ', NULL, NULL, NULL, 0),
(165, 4, '7', 'Capillaria philippinensis egg ', NULL, NULL, NULL, 0),
(166, 4, '8', 'Capillaria philippinensis larva ', NULL, NULL, NULL, 0),
(167, 4, '9', 'Chilomastix mesnili cyst ', NULL, NULL, NULL, 0),
(168, 4, '10', 'Chilomastix mesnili trophozoite ', NULL, NULL, NULL, 0),
(169, 4, '11', 'Cyclospora oocyst ', NULL, NULL, NULL, 0),
(170, 4, '12', 'Diphyllobrothium latum egg ', NULL, NULL, NULL, 0),
(171, 4, '13', 'Dipylidium caninum egg ', NULL, NULL, NULL, 0),
(172, 4, '14', 'Endolimax nana cyst ', NULL, NULL, NULL, 0),
(173, 4, '15', 'Entamoeba coli cyst ', NULL, NULL, NULL, 0),
(174, 4, '16', 'Entamoeba histolytica cyst ', NULL, NULL, NULL, 0),
(175, 4, '17', 'Enterobious vermicularis egg ', NULL, NULL, NULL, 0),
(176, 4, '18', 'Fasciolopsis/Fasciola/Echinostoma egg ', NULL, NULL, NULL, 0),
(177, 4, '19', 'Giardia lamblia cyst ', NULL, NULL, NULL, 0),
(178, 4, '20', 'Giardia lamblia trophozoite ', NULL, NULL, NULL, 0),
(179, 4, '21', 'Hookworm egg ', NULL, NULL, NULL, 0),
(180, 4, '22', 'Hookworm filariform larva ', NULL, NULL, NULL, 0),
(181, 4, '23', 'Hookworm rhabditiform larva ', NULL, NULL, NULL, 0),
(182, 4, '24', 'Hymenolepis diminuta egg ', NULL, NULL, NULL, 0),
(183, 4, '25', 'Hymenolepis nana egg ', NULL, NULL, NULL, 0),
(184, 4, '26', 'Iodamoeba butschlii cyst ', NULL, NULL, NULL, 0),
(185, 4, '27', 'Isospora belli oocyst ', NULL, NULL, NULL, 0),
(186, 4, '28', 'Opisthorchis/MIF egg ', NULL, NULL, NULL, 0),
(187, 4, '29', 'Paragonimus heterotremus egg ', NULL, NULL, NULL, 0),
(188, 4, '30', 'Paragonimus westermani egg ', NULL, NULL, NULL, 0),
(189, 4, '31', 'Plasmodium falciparum asexual form ', NULL, NULL, NULL, 0),
(190, 4, '32', 'Plasmodium falciparum gametocyte ', NULL, NULL, NULL, 0),
(191, 4, '33', 'Plasmodium malariae asexual form ', NULL, NULL, NULL, 0),
(192, 4, '34', 'Plasmodium malariae gametocyte ', NULL, NULL, NULL, 0),
(193, 4, '35', 'Plasmodium ovale asexual form ', NULL, NULL, NULL, 0),
(194, 4, '36', 'Plasmodium ovale gametocyte ', NULL, NULL, NULL, 0),
(195, 4, '37', 'Plasmodium vivax asexual form ', NULL, NULL, NULL, 0),
(196, 4, '38', 'Plasmodium vivax gametocyte ', NULL, NULL, NULL, 0),
(197, 4, '39', 'Sarcocystis hominis sporocyst/oocyst ', NULL, NULL, NULL, 0),
(198, 4, '40', 'Schistosoma haematobium egg ', NULL, NULL, NULL, 0),
(199, 4, '41', 'Schistosoma japonicum egg ', NULL, NULL, NULL, 0),
(200, 4, '42', 'Schistosoma mansoni egg ', NULL, NULL, NULL, 0),
(201, 4, '43', 'Schistosoma mekongi egg ', NULL, NULL, NULL, 0),
(202, 4, '44', 'Strongyloides stercoralis female ', NULL, NULL, NULL, 0),
(203, 4, '45', 'Strongyloides stercoralis filariform larva ', NULL, NULL, NULL, 0),
(204, 4, '46', 'Strongyloides stercoralis male ', NULL, NULL, NULL, 0),
(205, 4, '47', 'Strongyloides stercoralis rhabditiform larva ', NULL, NULL, NULL, 0),
(206, 4, '48', 'Taenia solium/Taenia saginata egg ', NULL, NULL, NULL, 0),
(207, 4, '49', 'Trichomonas hominis trophozoite ', NULL, NULL, NULL, 0),
(208, 4, '50', 'Trichuris trichiura egg ', NULL, NULL, NULL, 0),
(209, 4, '51', 'Not Found ', NULL, NULL, NULL, 0),
(218, 9, '5', 'FEIA', NULL, 'auto', NULL, 0),
(219, 9, '1', 'Positive', NULL, '2', NULL, 0),
(220, 9, '2', 'Weakly Positive', NULL, '2', NULL, 0),
(221, 9, '3', 'Negative', NULL, '2', NULL, 0),
(278, 13, '21', 'Colistin', NULL, '2', NULL, 0),
(225, 1, '32', 'Jaffe Kinetic', NULL, '1', NULL, 0),
(226, 1, '33', 'Jendrassik - Grof ', NULL, '1', NULL, 0),
(227, 1, '44', 'PNP.AMP buff; AACC', NULL, '1', NULL, 0),
(228, 1, '45', 'PNP.DEA buff;  DGKC', NULL, '1', NULL, 0),
(277, 13, '22', 'Daptomycin', NULL, '2', NULL, 0),
(275, 13, '23', 'Doripenem', NULL, '2', NULL, 0),
(229, 1, '46', 'Reflotron', NULL, '1', NULL, 0),
(230, 1, '47', 'SSCC', NULL, '1', NULL, 0),
(231, 1, '48', 'Vitros', NULL, '1', NULL, 0),
(232, 1, '49', 'Vitros; ISE', NULL, '1', NULL, 0),
(293, 13, '24', 'Doxycycline', NULL, '2', NULL, 0),
(292, 13, '25', 'Ertapenem', NULL, '2', NULL, 0),
(291, 13, '26', 'Erythomycin', NULL, '2', NULL, 0),
(274, 13, '27', 'Fosfomycin', NULL, '2', NULL, 0),
(253, 13, '28', 'Gentamycin', NULL, '2', NULL, 0),
(290, 13, '29', 'Hight-level Gentamycin', NULL, '2', NULL, 0),
(289, 13, '30', 'Hight-level Streptomycin ', NULL, '2', NULL, 0),
(288, 13, '31', 'Imipenem', NULL, '2', NULL, 0),
(287, 13, '32', 'Levofloxacin', NULL, '2', NULL, 0),
(286, 13, '33', 'Linezolid', NULL, '2', NULL, 0),
(285, 13, '34', 'Meropenem', NULL, '2', NULL, 0),
(284, 13, '35', 'Minocycline', NULL, '2', NULL, 0),
(283, 13, '36', 'Moxifloxacin', NULL, '2', NULL, 0),
(282, 13, '37', 'Netilmicin', NULL, '2', NULL, 0),
(281, 13, '38', 'Nitrofurantoin', NULL, '2', NULL, 0),
(280, 13, '39', 'Oritavancin', NULL, '2', NULL, 0),
(279, 13, '40', 'Oxacillin', NULL, '2', NULL, 0),
(276, 13, '41', 'Penicillin', NULL, '2', NULL, 0),
(294, 13, '42', 'Rifampin', NULL, '2', NULL, 0),
(295, 13, '43', 'Piperracillin-tazobactam', NULL, '2', NULL, 0),
(296, 13, '44', 'Sulfisoxazole', NULL, '2', NULL, 0),
(297, 13, '45', 'Tedizolid', NULL, '2', NULL, 0),
(298, 13, '46', 'Telavancin', NULL, '2', NULL, 0),
(299, 13, '47', 'Tetracycline', NULL, '2', NULL, 0),
(300, 13, '48', 'Tobramycin', NULL, '2', NULL, 0),
(301, 13, '49', 'Trimethoprim', NULL, '2', NULL, 0),
(302, 13, '50', 'Trimethoprim-sulfamethoxzole', NULL, '2', NULL, 0),
(303, 13, '51', 'Vancomycin', NULL, '2', NULL, 0),
(305, 1, '34', 'Kinetic 37C/ Kinetic - without pyridoxal ', NULL, '1', NULL, 0),
(306, 1, '35', 'Kinetic - pyridoxal', NULL, '1', NULL, 0),
(309, 5, '9', 'Others', NULL, '9', NULL, 0),
(310, 2, '13', 'Others', NULL, NULL, NULL, 0),
(311, 8, '36', 'CLIA', NULL, 'TP', NULL, 0),
(312, 1, '36', 'Malloy - Evelyn ', NULL, '1', NULL, 0),
(313, 1, '37', 'Margon/ Xylidyl blue', NULL, '1', NULL, 0),
(314, 1, '38', 'Methylthymol blue', NULL, '1', NULL, 0),
(315, 1, '39', 'Molybdenum EP', NULL, '1', NULL, 0),
(319, 1, '40', 'Molybdenum UV', NULL, '1', NULL, 0),
(320, 1, '41', 'Others', NULL, '1', NULL, 0),
(321, 1, '42', 'Phospho. Precip./ Polyanion', NULL, '1', NULL, 0),
(322, 1, '43', 'PNP AMP buff; IFCC', NULL, '1', NULL, 0),
(323, 1, '1', 'Arsenazo/ Chlorophosphonazo', NULL, '1', NULL, 0),
(326, 5, '5', 'Cell-Dyn ', NULL, '5', NULL, 0),
(332, 5, '21', 'ABX Micros/Minos/ABC VET', NULL, '66', NULL, 0),
(336, 5, '10', 'Pentra', NULL, '61', NULL, 0),
(487, 1, '545', 'Medica', NULL, '3', NULL, 0),
(488, 1, '546', 'Bt GEN', NULL, '3', NULL, 0),
(337, 1, '2', 'Bromocresol green', NULL, '1', NULL, 0),
(338, 4, '52', 'Not Tested', NULL, NULL, NULL, 0),
(339, 1, '3', 'Bromocresol purple', NULL, '1', NULL, 0),
(340, 1, '4', 'Beckman', NULL, '1', NULL, 0),
(341, 1, '5', 'Biuret - Blank', NULL, '1', NULL, 0),
(342, 1, '6', 'Biuret - Unblank', NULL, '1', NULL, 0),
(343, 1, '7', 'CK-NAC/IFCC', NULL, '1', NULL, 0),
(344, 1, '8', 'CNPG3', NULL, '1', NULL, 0),
(345, 1, '9', 'Colorimetric', NULL, '1', NULL, 0),
(346, 1, '10', 'CPC/ Arsenazo', NULL, '1', NULL, 0),
(347, 1, '11', 'Dade Behring', NULL, '1', NULL, 0),
(348, 1, '12', 'DCA/DPD', NULL, '1', NULL, 0),
(349, 1, '13', 'DGKC', NULL, '1', NULL, 0),
(350, 1, '14', 'Diazonium', NULL, '1', NULL, 0),
(351, 1, '15', 'Direct Determination', NULL, '1', NULL, 0),
(352, 1, '16', 'Direct ISE', NULL, '1', NULL, 0),
(353, 1, '17', 'Enz Color Total TG', NULL, '1', NULL, 0),
(354, 1, '18', 'Enzyme', NULL, '1', NULL, 0),
(355, 1, '19', 'Enzyme Colorimetric', NULL, '1', NULL, 0),
(356, 1, '20', 'Enzyme EP Blank', NULL, '1', NULL, 0),
(357, 1, '21', 'Enzyme EP Unblank', NULL, '1', NULL, 0),
(358, 1, '22', 'Enzyme Kinetic', NULL, '1', NULL, 0),
(359, 1, '23', 'G7PNP', NULL, '1', NULL, 0),
(360, 1, '24', 'Glucose Dehydrogenase', NULL, '1', NULL, 0),
(361, 1, '25', 'Glycerol Blank', NULL, '1', NULL, 0),
(362, 1, '26', 'Glucose Oxidase', NULL, '1', NULL, 0),
(363, 1, '27', 'Hexokinase', NULL, '1', NULL, 0),
(364, 1, '28', 'IFCC', NULL, '1', NULL, 0),
(365, 1, '29', 'Indirect ISE', NULL, '1', NULL, 0),
(366, 1, '30', 'ISE', NULL, '1', NULL, 0),
(367, 1, '31', 'Jaffe EP', NULL, '1', NULL, 0),
(369, 1, '101', 'Abbott Architect c Systems', NULL, '2', NULL, 0),
(370, 1, '102', 'Audicom AC9000 Series electrolyte analyzer', NULL, '2', NULL, 0),
(374, 1, '104', 'Beckman Coulter DxC600/ DxC800', NULL, '2', NULL, 0),
(373, 1, '103', 'Beckman Coulter AU400/480/680/5800', NULL, '2', NULL, 0),
(375, 1, '105', 'Beckman Coulter DxC700 AU', NULL, '2', NULL, 0),
(376, 1, '106', 'Biosystems A15', NULL, '2', NULL, 0),
(377, 1, '107', 'Biosystems BA400', NULL, '2', NULL, 0),
(378, 1, '108', 'Caretium XI-921', NULL, '2', NULL, 0),
(379, 1, '109', 'Roche Cobas Mira S', NULL, '2', NULL, 0),
(380, 1, '110', 'Diasys BioMajesty JCA-BM6010/C', NULL, '2', NULL, 0),
(381, 1, '111', 'Dirui CS Series', NULL, '2', NULL, 0),
(382, 1, '112', 'Dirui CS-600B', NULL, NULL, NULL, 0),
(383, 1, '113', 'Electa4 analyzer', NULL, '2', NULL, 0),
(384, 1, '114', 'Erba XL Series', NULL, '2', NULL, 0),
(385, 1, '115', 'Fuji Dri-Chem NX500i', NULL, '2', NULL, 0),
(386, 1, '116', 'GASTAT-1820', NULL, '2', NULL, 0),
(387, 1, '117', 'Hitachi 911', NULL, '2', NULL, 0),
(388, 1, '118', 'Horiba Pentra 400', NULL, '2', NULL, 0),
(389, 1, '119', 'ILab 600/650/Taurus', NULL, NULL, NULL, 0),
(390, 1, '120', 'ILab 600/650/Taurus', NULL, '2', NULL, 0),
(391, 1, '121', 'In4lyte', NULL, '2', NULL, 0),
(392, 1, '122', 'Konelab 20/30/60 / Thermo Indiko', NULL, '2', NULL, 0),
(393, 1, '123', 'Mindray BC 2000/3000 series', NULL, '2', NULL, 0),
(394, 1, '124', 'Mindray BS Series', NULL, '2', NULL, 0),
(395, 1, '125', 'Nova 4 electrolyte analyzer', NULL, '2', NULL, 0),
(396, 1, '126', 'Ortho Vitros 250/350', NULL, '2', NULL, 0),
(397, 1, '127', 'Ortho Vitros 4600/5600', NULL, '2', NULL, 0),
(398, 1, '128', 'PKL PPC 125', NULL, '2', NULL, 0),
(399, 1, '129', 'Q4-Lyte', NULL, '2', NULL, 0),
(400, 1, '130', 'Randox RX series', NULL, '2', NULL, 0),
(401, 1, '131', 'Reflotron', NULL, '2', NULL, 0),
(402, 1, '132', 'Roche Cobas c111', NULL, '2', NULL, 0),
(403, 1, '133', 'Roche Cobas c311', NULL, '2', NULL, 0),
(404, 1, '134', 'Roche Cobas c501/502/503', NULL, '2', NULL, 0),
(405, 1, '135', 'Roche Cobas Integra 400 Plus', NULL, '2', NULL, 0),
(406, 1, '136', 'Rx Modena', NULL, '2', NULL, 0),
(407, 1, '137', 'Rx-lyte v.4', NULL, '2', NULL, 0),
(408, 1, '138', 'SFRI ISE electrolyte series', NULL, '2', NULL, 0),
(409, 1, '139', 'Siemens Advia 1800', NULL, '2', NULL, 0),
(410, 1, '140', 'Siemens Rapidlab 348Ex', NULL, '2', NULL, 0),
(411, 1, '141', 'Siemens/Dade Dimension EXL', NULL, '2', NULL, 0),
(412, 1, '142', 'Siemens/Dade Dimension RxL /Max/Xpand', NULL, '2', NULL, 0),
(413, 1, '143', 'Sinnowa BS-3000', NULL, '2', NULL, 0),
(414, 1, '144', 'Sinnowa DS301', NULL, '2', NULL, 0),
(415, 1, '145', 'Sysmex BX-3010', NULL, '2', NULL, 0),
(416, 1, '146', 'Sysmex BX-4000', NULL, '2', NULL, 0),
(417, 1, '147', 'Sysmex JCA-BM6010/C', NULL, NULL, NULL, 0),
(418, 1, '148', 'Tecom TC220', NULL, '2', NULL, 0),
(419, 1, '149', 'Thermo Fisher Konelab Delta', NULL, '2', NULL, 0),
(420, 1, '150', 'Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024', NULL, '2', NULL, 0),
(421, 1, '151', 'URIT-8031', NULL, '2', NULL, 0),
(422, 1, '152', 'Vitalab Scientific Flexor E', NULL, '2', NULL, 0),
(423, 1, '153', 'XD 687 Electrolyte Analyzer', NULL, '2', NULL, 0),
(424, 1, '154', 'XD 697 Electrolyte Analyzer', NULL, '2', NULL, 0),
(425, 1, '501', 'Abbott laboratories', NULL, '3', NULL, 0),
(426, 1, '502', 'Beckman Coulter', NULL, '3', NULL, 0),
(427, 1, '503', 'BioSystems', NULL, '3', NULL, 0),
(428, 1, '504', 'Biozen', NULL, '3', NULL, 0),
(429, 1, '505', 'Caretium ', NULL, '3', NULL, 0),
(430, 1, '506', 'Centronic', NULL, '3', NULL, 0),
(431, 1, '507', 'Diamond', NULL, '3', NULL, 0),
(432, 1, '508', 'DiaSys', NULL, '3', NULL, 0),
(433, 1, '509', 'Diazyme', NULL, '3', NULL, 0),
(434, 1, '510', 'Dirui', NULL, '3', NULL, 0),
(435, 1, '511', 'Electa', NULL, '3', NULL, 0),
(436, 1, '512', 'Elitech', NULL, '3', NULL, 0),
(437, 1, '513', 'Erba Lachema', NULL, '3', NULL, 0),
(438, 1, '514', 'Fuji', NULL, '3', NULL, 0),
(439, 1, '515', 'Furuno', NULL, '3', NULL, 0),
(440, 1, '516', 'Horiba', NULL, '3', NULL, 0),
(441, 1, '517', 'Iberlab', NULL, '3', NULL, 0),
(442, 1, '518', 'I-med', NULL, '3', NULL, 0),
(443, 1, '519', 'Infocus firming', NULL, '3', NULL, 0),
(444, 1, '520', 'Instumentation laboratory', NULL, '3', NULL, 0),
(445, 1, '521', 'Jiangsu Audicom ', NULL, '3', NULL, 0),
(446, 1, '522', 'Meditop', NULL, '3', NULL, 0),
(447, 1, '523', 'Mindray', NULL, '3', NULL, 0),
(448, 1, '524', 'Olympus', NULL, '3', NULL, 0),
(449, 1, '525', 'Ortho-Clinical Diagnostics', NULL, '3', NULL, 0),
(450, 1, '526', 'PCL', NULL, '3', NULL, 0),
(451, 1, '527', 'Randox', NULL, '3', NULL, 0),
(452, 1, '528', 'Roche Diagnotics', NULL, '3', NULL, 0),
(453, 1, '529', 'SFRI', NULL, '3', NULL, 0),
(454, 1, '530', 'Shanghai Xunda', NULL, '3', NULL, 0),
(455, 1, '531', 'Siemens', NULL, '3', NULL, 0),
(456, 1, '532', 'Slidedrychem', NULL, '3', NULL, 0),
(457, 1, '533', 'Spinreact', NULL, '3', NULL, 0),
(458, 1, '534', 'Stanbio', NULL, '3', NULL, 0),
(459, 1, '535', 'Sysmex', NULL, '3', NULL, 0),
(460, 1, '536', 'Techno Medica', NULL, '3', NULL, 0),
(461, 1, '537', 'Tecom', NULL, '3', NULL, 0),
(462, 1, '538', 'Thermoscientific', NULL, '3', NULL, 0),
(463, 1, '539', 'Toyobo', NULL, '3', NULL, 0),
(464, 1, '540', 'URIT', NULL, '3', NULL, 0),
(465, 1, '541', 'Wako', NULL, '3', NULL, 0),
(466, 1, '542', 'YD diagnostic', NULL, '3', NULL, 0),
(469, 12, NULL, NULL, NULL, NULL, NULL, 0),
(474, 1, '155', 'Q4-LyteEx ', NULL, '2', NULL, 0),
(476, 1, '157', 'Biotecnica BT Series', NULL, '2', NULL, 0),
(479, 1, '543', 'Biotecnica Instruments', NULL, '3', NULL, 0),
(480, 1, '158', 'URIT 8280', NULL, '2', NULL, 0),
(481, 1, '159', 'GE300 electrolyte analyzer', NULL, '2', NULL, 0),
(482, 1, '544', 'Genrui Biotech', NULL, '3', NULL, 0),
(483, 1, '160', 'Biosystems BA200', NULL, '2', NULL, 0),
(485, 1, '161', 'Roche Cobas c701/702', NULL, '2', NULL, 0),
(486, 1, '162', 'HumaStar 200', NULL, '2', NULL, 0),
(489, 1, '547', 'Q4-Lyte', NULL, '3', NULL, 0),
(490, 1, '548', 'Q4-LyteEx', NULL, '3', NULL, 0),
(491, 1, '50', 'Direct with PVS/PEGMS', NULL, '1', NULL, 0),
(492, 1, '51', 'Imm.Inhibition', NULL, '1', NULL, 0),
(493, 1, '52', 'Water & Gerarde Method', NULL, '1', NULL, 0),
(494, 1, '53', 'Vanadate', NULL, '1', NULL, 0),
(495, 1, '156', 'Furuno CA-800', NULL, '2', NULL, 0),
(496, 1, '163', 'Diasys Respons 920', NULL, '2', NULL, 0),
(497, 1, '164', 'Rayto Chemray 120', NULL, '2', NULL, 0),
(498, 1, '549', 'Rayto', NULL, '3', NULL, 0),
(499, 1, '550', 'QuantILab', NULL, '3', NULL, 0),
(500, 1, '165', 'Roche Cobas c501/502/503', NULL, NULL, NULL, 0),
(501, 1, '166', 'URIT-910 Plus', NULL, '2', NULL, 0),
(502, 1, '167', 'Siemens Atellica Solution', NULL, '2', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mhd_register`
--

CREATE TABLE `mhd_register` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `member_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `year_id` int(11) DEFAULT NULL,
  `total` double(10,2) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modify` datetime DEFAULT NULL,
  `del` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mhd_register`
--

INSERT INTO `mhd_register` (`id`, `parent_id`, `member_id`, `company_id`, `year_id`, `total`, `date_added`, `date_modify`, `del`) VALUES
(1, 0, 1, 1, 1, 4000.00, '2020-09-24 17:29:54', NULL, 0),
(2, 0, 2, 2, 1, 7000.00, '2020-11-12 10:36:33', NULL, 0),
(3, 0, 3, 3, 1, 3500.00, '2020-11-16 10:13:05', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mhd_register_program`
--

CREATE TABLE `mhd_register_program` (
  `id` int(11) NOT NULL,
  `register_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `year_id` int(11) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL,
  `trial_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modify` datetime DEFAULT NULL,
  `del` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mhd_register_program`
--

INSERT INTO `mhd_register_program` (`id`, `register_id`, `parent_id`, `company_id`, `member_id`, `year_id`, `program_id`, `trial_id`, `price`, `date_added`, `date_modify`, `del`) VALUES
(1, 1, 0, 1, 1, 1, 1, NULL, '3000.00', '2020-09-24 17:54:12', NULL, 0),
(2, 1, 0, 1, 1, 1, 2, NULL, '4000.00', '2020-09-24 17:54:12', NULL, 0),
(3, 1, 0, 1, 1, 1, 1, NULL, '3000.00', '2020-11-09 12:01:00', NULL, 0),
(4, 1, 0, 1, 1, 1, 2, NULL, '4000.00', '2020-11-09 12:01:00', NULL, 0),
(5, 1, 0, 1, 1, 1, 3, NULL, '3500.00', '2020-11-09 12:01:01', NULL, 0),
(6, 1, 0, 1, 1, 1, 4, NULL, '0.00', '2020-11-09 12:01:01', NULL, 0),
(7, 1, 0, 1, 1, 1, 5, NULL, '0.00', '2020-11-09 12:01:01', NULL, 0),
(8, 1, 0, 1, 1, 1, 6, NULL, '0.00', '2020-11-09 12:01:01', NULL, 0),
(9, 1, 0, 1, 1, 1, 7, NULL, '0.00', '2020-11-09 12:01:01', NULL, 0),
(10, 1, 0, 1, 1, 1, 8, NULL, '0.00', '2020-11-09 12:01:01', NULL, 0),
(11, 1, 0, 1, 1, 1, 9, NULL, '0.00', '2020-11-09 12:01:01', NULL, 0),
(12, 1, 0, 1, 1, 1, 10, NULL, '0.00', '2020-11-09 12:01:01', NULL, 0),
(13, 1, 0, 1, 1, 1, 12, NULL, '0.00', '2020-11-09 12:01:01', NULL, 0),
(14, 1, 0, 1, 1, 1, 13, NULL, '0.00', '2020-11-09 12:01:01', NULL, 0),
(15, 1, 0, 1, 1, 1, 1, NULL, '3000.00', '2020-11-09 13:42:08', NULL, 0),
(16, 1, 0, 1, 1, 1, 2, NULL, '4000.00', '2020-11-09 13:42:08', NULL, 0),
(17, 1, 0, 1, 1, 1, 1, NULL, '3000.00', '2020-11-09 14:26:54', NULL, 0),
(18, 1, 0, 1, 1, 1, 8, NULL, '0.00', '2020-11-09 14:26:54', NULL, 0),
(19, 1, 0, 1, 1, 1, 3, NULL, '3500.00', '2020-11-09 17:34:07', NULL, 0),
(20, 1, 0, 1, 1, 1, 3, NULL, '3500.00', '2020-11-10 16:04:52', NULL, 0),
(21, 1, 0, 1, 1, 1, 8, NULL, '0.00', '2020-11-10 16:04:52', NULL, 0),
(22, 1, 0, 1, 1, 1, 2, NULL, '4000.00', '2020-11-11 12:01:32', NULL, 0),
(23, 2, 0, 2, 2, 1, 1, NULL, '3000.00', '2020-11-12 12:17:42', NULL, 0),
(24, 2, 0, 2, 2, 1, 2, NULL, '4000.00', '2020-11-12 12:17:42', NULL, 0),
(25, 3, 0, 3, 3, 1, 3, NULL, '3500.00', '2020-11-16 10:13:51', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mhd_sessions`
--

CREATE TABLE `mhd_sessions` (
  `id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mhd_sessions`
--

INSERT INTO `mhd_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('mbs7ge48qtl9m75oh005oj196910o6as', '::1', 1605251731, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235313733313b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('db63s5v7lf4g9d8eu3uvth92njr5ommp', '::1', 1605252490, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235323439303b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('s3oef0e30k1gbgv94ahn1vqh7itei368', '::1', 1605252862, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235323836323b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('o6hdut834vg57i5t4mgv6du93stetjun', '::1', 1605253480, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235333438303b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('u22fbmd5pmf96ohb705282956t8d0adv', '::1', 1605254064, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235343036343b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('b278r87qssp0cmbf5g3rueoivpvdvs6o', '::1', 1605254563, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235343536333b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('mhdrubcvm8n5da7sr47j4f70tf3cf3ie', '::1', 1605255072, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235353037323b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('rpim9de0fllcm36sal0qjlti6561e916', '::1', 1605255429, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235353432393b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('nd4mek01vtvcnccck7qv12j10hvhg9md', '::1', 1605255777, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235353737373b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('r5aaous73fd9vacsc2u8qk46b1col8un', '::1', 1605256146, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235363134363b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('opgqfcfd06r4ed7mq7lkshh5dtlcbevk', '::1', 1605256449, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235363434393b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('md2qcui4hsd22066923sent2adacejfs', '::1', 1605256852, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235363835323b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('grtp9m33g4ukqlqmb569ndb3vn5t02hs', '::1', 1605257169, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235373136393b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('pev6al5l2gnc5o63a210pmnn7ha80fvl', '::1', 1605258038, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235383033383b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('cep538gfrgv6rirbtg5o0kojp5n59ren', '::1', 1605259669, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353235393636393b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('9r9hhb7tjmeobodh505oarb51c444i0f', '::1', 1605260008, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353236303030383b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('h17r60fs31oeojs28d3l7ufab07p3r80', '::1', 1605260311, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353236303331313b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('henrscmjlbii99odvrh66b6tk66ac0kd', '::1', 1605261880, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353236313838303b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('nh0lk7rdlsek723j9a8vh21v43ibam36', '::1', 1605262846, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353236323834363b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('auscue2q82uj3lvvgi067lhhqav14pn3', '::1', 1605263418, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353236333431383b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('aj8vrqsobkrpcl9geom2ps8vnj66vfu7', '::1', 1605263744, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353236333734343b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('b4ngjlhb79345cjeq5et2fsbcd0sg5dq', '::1', 1605264054, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353236343035343b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('fipngeq5jm97u49d4evkkl537is0bd9i', '::1', 1605264468, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353236343436383b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('i5bdra9unhue8faapnlpt3j8pmiphrm6', '::1', 1605265057, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353236353035373b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('9l8gm1lrt407cpvh9dk7hqp25djoo9rf', '::1', 1605265590, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353236353539303b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('1389143cnvlthk2ord45qfqndferjqgi', '::1', 1605265610, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353236353539303b746f6b656e7c733a3537363a223263623430383164353538383833633534366666633337383430633662613836373937643966373166636236633366383766303930393766623733666334333266653766613837616366316530356464363239663965336636346162383134396566323064383666336462643037613262353134313935623666623966666561484c47476259765a776d2f2f73552f626d6a7859306b766f54394f332b6838436a5038573578454151396338587a626c61477a337a415a707a5339732f6a646535324b66323230445553526544754347796476784a7635534e565a57572f447744376162445a476a474d7175335731376867563364677836564962317763704871382b36464b464f78687132596547524c6e613154754e52374d4d6d31563932462f4370367a5537503655496b6c4b5648564b4d52763961764f563645524d39436f6d54377a754f4b7576656c4d534b65364144713131364f5335446a626c6b6a6d69346e5367344e62614d596a4430516165613963305a434b4765362f4c795a7331785a75653378393036446550714f576b516771584463574848362f6f64765461476550484257686f69356a5a476f45467450496f766d747a614a536741667a5a627564634d75564c4d30554c71316d5735545132633278487979537a625873696350446669317743754a6745626d6f69706c6d30424c3549334951362f2f2f5a72524d63727153634d43314e593834596b31304c6b6f6d6d31656a6a567979784e4148627658552f6b69306e5636374d71663144354a6a2f3949764733223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303031223b733a353a22656d61696c223b733a31393a226d756e6b2e676f726e40676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('u7ln5km0djgvlvegrsmnecf6f42i9uhu', '::1', 1605496385, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353439363338353b),
('kfndkar08tu3qpk7s0ai2tnfh48dd4an', '::1', 1605496993, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353439363939333b746f6b656e7c733a3537363a223331343161666165393736363734306132353435366162623632643530636532326633386531336331633130356363383964636535636236653336353263383531326139646265313461356466383038313831336431343030333634316566666131346436306335333864646538613034616433666133356461333435373632464f685731754c6669686462694735462b5942704c786778783077746148654e72627878674b4c714e533769615349536b522b53335435457a6d322f4d38623968596330665a39613230315178356d6f7176534c4d474b5548517a436b4b63766a544d7576627a6142797666342f73394e6f31683532764237757773512b72632f745a6d726968537158517331683235645577314b5342693659356d54795855546b762b55754146725641686731643650737336554670554b6b474e36566d6b7467783077746e7448753254464d7243786572326f782b6774374e76497a5457664648582b7a33426331364e2f46556f49343938784b564e4652326c362b786e6d2b735833475a364a69796a7932396b795a342f6c464e5277387342363431622f7541462b5531634c56757169682b356d353531553568496c7656544673614e486f37444842305a4c524d775a4f32414c74717346777a715a475230366778546c432b4e724a365a6169675968687154704235335262497a4d6d2f6b6575505969447248697869784c2b51727636396465715155664f65767a2b4f7a79544934704f6f506c4e2b444876355a4b6a413679392b415a35746e42684963716c336a223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303033223b733a353a22656d61696c223b733a31393a226b7261746f7331313240676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('ngrc4mo2agkof3mk3m1rn7keaspg093t', '::1', 1605497472, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353439373437323b746f6b656e7c733a3537363a223331343161666165393736363734306132353435366162623632643530636532326633386531336331633130356363383964636535636236653336353263383531326139646265313461356466383038313831336431343030333634316566666131346436306335333864646538613034616433666133356461333435373632464f685731754c6669686462694735462b5942704c786778783077746148654e72627878674b4c714e533769615349536b522b53335435457a6d322f4d38623968596330665a39613230315178356d6f7176534c4d474b5548517a436b4b63766a544d7576627a6142797666342f73394e6f31683532764237757773512b72632f745a6d726968537158517331683235645577314b5342693659356d54795855546b762b55754146725641686731643650737336554670554b6b474e36566d6b7467783077746e7448753254464d7243786572326f782b6774374e76497a5457664648582b7a33426331364e2f46556f49343938784b564e4652326c362b786e6d2b735833475a364a69796a7932396b795a342f6c464e5277387342363431622f7541462b5531634c56757169682b356d353531553568496c7656544673614e486f37444842305a4c524d775a4f32414c74717346777a715a475230366778546c432b4e724a365a6169675968687154704235335262497a4d6d2f6b6575505969447248697869784c2b51727636396465715155664f65767a2b4f7a79544934704f6f506c4e2b444876355a4b6a413679392b415a35746e42684963716c336a223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303033223b733a353a22656d61696c223b733a31393a226b7261746f7331313240676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('78rnfghm6iadvl09c5q7u1uv4m6i1sth', '::1', 1605498994, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353439383939343b746f6b656e7c733a3537363a223331343161666165393736363734306132353435366162623632643530636532326633386531336331633130356363383964636535636236653336353263383531326139646265313461356466383038313831336431343030333634316566666131346436306335333864646538613034616433666133356461333435373632464f685731754c6669686462694735462b5942704c786778783077746148654e72627878674b4c714e533769615349536b522b53335435457a6d322f4d38623968596330665a39613230315178356d6f7176534c4d474b5548517a436b4b63766a544d7576627a6142797666342f73394e6f31683532764237757773512b72632f745a6d726968537158517331683235645577314b5342693659356d54795855546b762b55754146725641686731643650737336554670554b6b474e36566d6b7467783077746e7448753254464d7243786572326f782b6774374e76497a5457664648582b7a33426331364e2f46556f49343938784b564e4652326c362b786e6d2b735833475a364a69796a7932396b795a342f6c464e5277387342363431622f7541462b5531634c56757169682b356d353531553568496c7656544673614e486f37444842305a4c524d775a4f32414c74717346777a715a475230366778546c432b4e724a365a6169675968687154704235335262497a4d6d2f6b6575505969447248697869784c2b51727636396465715155664f65767a2b4f7a79544934704f6f506c4e2b444876355a4b6a413679392b415a35746e42684963716c336a223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303033223b733a353a22656d61696c223b733a31393a226b7261746f7331313240676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('p90p76mi821j3ekiiin7tf5e7sj3trg5', '::1', 1605501673, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353530313637333b746f6b656e7c733a3537363a223331343161666165393736363734306132353435366162623632643530636532326633386531336331633130356363383964636535636236653336353263383531326139646265313461356466383038313831336431343030333634316566666131346436306335333864646538613034616433666133356461333435373632464f685731754c6669686462694735462b5942704c786778783077746148654e72627878674b4c714e533769615349536b522b53335435457a6d322f4d38623968596330665a39613230315178356d6f7176534c4d474b5548517a436b4b63766a544d7576627a6142797666342f73394e6f31683532764237757773512b72632f745a6d726968537158517331683235645577314b5342693659356d54795855546b762b55754146725641686731643650737336554670554b6b474e36566d6b7467783077746e7448753254464d7243786572326f782b6774374e76497a5457664648582b7a33426331364e2f46556f49343938784b564e4652326c362b786e6d2b735833475a364a69796a7932396b795a342f6c464e5277387342363431622f7541462b5531634c56757169682b356d353531553568496c7656544673614e486f37444842305a4c524d775a4f32414c74717346777a715a475230366778546c432b4e724a365a6169675968687154704235335262497a4d6d2f6b6575505969447248697869784c2b51727636396465715155664f65767a2b4f7a79544934704f6f506c4e2b444876355a4b6a413679392b415a35746e42684963716c336a223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303033223b733a353a22656d61696c223b733a31393a226b7261746f7331313240676d61696c2e636f6d223b7d796561727c733a343a2232303230223b),
('m2uqvlqsddcsjrjhl1ah78fjr02fdl8e', '::1', 1605501674, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630353530313637333b746f6b656e7c733a3537363a223331343161666165393736363734306132353435366162623632643530636532326633386531336331633130356363383964636535636236653336353263383531326139646265313461356466383038313831336431343030333634316566666131346436306335333864646538613034616433666133356461333435373632464f685731754c6669686462694735462b5942704c786778783077746148654e72627878674b4c714e533769615349536b522b53335435457a6d322f4d38623968596330665a39613230315178356d6f7176534c4d474b5548517a436b4b63766a544d7576627a6142797666342f73394e6f31683532764237757773512b72632f745a6d726968537158517331683235645577314b5342693659356d54795855546b762b55754146725641686731643650737336554670554b6b474e36566d6b7467783077746e7448753254464d7243786572326f782b6774374e76497a5457664648582b7a33426331364e2f46556f49343938784b564e4652326c362b786e6d2b735833475a364a69796a7932396b795a342f6c464e5277387342363431622f7541462b5531634c56757169682b356d353531553568496c7656544673614e486f37444842305a4c524d775a4f32414c74717346777a715a475230366778546c432b4e724a365a6169675968687154704235335262497a4d6d2f6b6575505969447248697869784c2b51727636396465715155664f65767a2b4f7a79544934704f6f506c4e2b444876355a4b6a413679392b415a35746e42684963716c336a223b6d656d6265725f696e666f7c613a323a7b733a393a226d656d6265725f6e6f223b733a383a223230323030303033223b733a353a22656d61696c223b733a31393a226b7261746f7331313240676d61696c2e636f6d223b7d796561727c733a343a2232303230223b);

-- --------------------------------------------------------

--
-- Table structure for table `mhd_setting`
--

CREATE TABLE `mhd_setting` (
  `id` int(11) NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mhd_setting`
--

INSERT INTO `mhd_setting` (`id`, `key`, `value`) VALUES
(1, 'config_register_year_id', '1'),
(2, 'config_register_open', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mhd_year`
--

CREATE TABLE `mhd_year` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modify` datetime DEFAULT NULL,
  `del` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mhd_year`
--

INSERT INTO `mhd_year` (`id`, `admin_id`, `year`, `date_added`, `date_modify`, `del`) VALUES
(1, 1, '2020', NULL, NULL, 0),
(2, 1, '2021', NULL, NULL, 0),
(3, 1, '202222', NULL, '2020-09-15 11:56:42', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhd_admin`
--
ALTER TABLE `mhd_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhd_company`
--
ALTER TABLE `mhd_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhd_member`
--
ALTER TABLE `mhd_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhd_payment`
--
ALTER TABLE `mhd_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhd_program`
--
ALTER TABLE `mhd_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhd_program_infection`
--
ALTER TABLE `mhd_program_infection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhd_program_tools`
--
ALTER TABLE `mhd_program_tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhd_register`
--
ALTER TABLE `mhd_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhd_register_program`
--
ALTER TABLE `mhd_register_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhd_sessions`
--
ALTER TABLE `mhd_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `mhd_setting`
--
ALTER TABLE `mhd_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhd_year`
--
ALTER TABLE `mhd_year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhd_admin`
--
ALTER TABLE `mhd_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mhd_company`
--
ALTER TABLE `mhd_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mhd_member`
--
ALTER TABLE `mhd_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mhd_payment`
--
ALTER TABLE `mhd_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `mhd_program`
--
ALTER TABLE `mhd_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mhd_program_infection`
--
ALTER TABLE `mhd_program_infection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=532;

--
-- AUTO_INCREMENT for table `mhd_program_tools`
--
ALTER TABLE `mhd_program_tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=509;

--
-- AUTO_INCREMENT for table `mhd_register`
--
ALTER TABLE `mhd_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mhd_register_program`
--
ALTER TABLE `mhd_register_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `mhd_setting`
--
ALTER TABLE `mhd_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mhd_year`
--
ALTER TABLE `mhd_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
