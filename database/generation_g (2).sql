-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 11:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `generation_g`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_modules`
--

CREATE TABLE `admin_modules` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `status` int(11) DEFAULT 1,
  `sorting` varchar(111) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `districtid` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `districtid`, `state_id`, `description`, `status`) VALUES
(1, 'Anantnag', 36, 15, '', 'Active'),
(2, 'Bandipore', 37, 15, '', 'Active'),
(3, 'Baramulla', 38, 15, '', 'Active'),
(4, 'Budgam', 39, 15, '', 'Active'),
(5, 'Doda', 40, 15, '', 'Active'),
(6, 'Ganderbal', 41, 15, '', 'Active'),
(7, 'Jammu', 42, 15, '', 'Active'),
(8, 'Kargil', 43, 15, '', 'Active'),
(9, 'Kathua', 44, 15, '', 'Active'),
(10, 'Kishtwar', 45, 15, '', 'Active'),
(11, 'Kulgam', 46, 15, '', 'Active'),
(12, 'Kupwara', 47, 15, '', 'Active'),
(13, 'Leh (Ladakh)', 48, 15, '', 'Active'),
(14, 'Poonch', 49, 15, '', 'Active'),
(15, 'Pulwama', 50, 15, '', 'Active'),
(16, 'Rajouri', 51, 15, '', 'Active'),
(17, 'Ramban', 52, 15, '', 'Active'),
(18, 'Reasi', 53, 15, '', 'Active'),
(19, 'Samba', 54, 15, '', 'Active'),
(20, 'Shopian', 55, 15, '', 'Active'),
(21, 'Srinagar', 56, 15, '', 'Active'),
(22, 'Udhampur', 57, 15, '', 'Active'),
(23, 'Bilaspur (Himachal Pradesh)', 58, 14, '', 'Active'),
(24, 'Chamba', 59, 14, '', 'Active'),
(25, 'Hamirpur (Himachal Pradesh)', 60, 14, '', 'Active'),
(26, 'Kangra', 61, 14, '', 'Active'),
(27, 'Kinnaur', 62, 14, '', 'Active'),
(28, 'Kullu', 63, 14, '', 'Active'),
(29, 'Lahul & Spiti', 64, 14, '', 'Active'),
(30, 'Mandi', 65, 14, '', 'Active'),
(31, 'Shimla', 66, 14, '', 'Active'),
(32, 'Sirmaur', 67, 14, '', 'Active'),
(33, 'Solan', 68, 14, '', 'Active'),
(34, 'Una', 69, 14, '', 'Active'),
(35, 'Amritsar', 70, 28, '', 'Active'),
(36, 'Barnala', 71, 28, '', 'Active'),
(37, 'Bathinda', 72, 28, '', 'Active'),
(38, 'Faridkot', 73, 28, '', 'Active'),
(39, 'Fatehgarh Sahib', 74, 28, '', 'Active'),
(40, 'Firozpur', 75, 28, '', 'Active'),
(41, 'Gurdaspur', 76, 28, '', 'Active'),
(42, 'Hoshiarpur', 77, 28, '', 'Active'),
(43, 'Jalandhar', 78, 28, '', 'Active'),
(44, 'Kapurthala', 79, 28, '', 'Active'),
(45, 'Ludhiana', 80, 28, '', 'Active'),
(46, 'Mansa', 81, 28, '', 'Active'),
(47, 'Moga', 82, 28, '', 'Active'),
(48, 'Muktsar', 83, 28, '', 'Active'),
(49, 'Patiala', 84, 28, '', 'Active'),
(50, 'Rupnagar (Ropar)', 85, 28, '', 'Active'),
(51, 'Sahibzada Ajit Singh Nagar (Mohali)', 86, 28, '', 'Active'),
(52, 'Sangrur', 87, 28, '', 'Active'),
(53, 'Shahid Bhagat Singh Nagar (Nawanshahr)', 88, 28, '', 'Active'),
(54, 'Tarn Taran', 89, 28, '', 'Active'),
(55, 'Chandigarh', 90, 6, '', 'Active'),
(56, 'Almora', 91, 34, '', 'Active'),
(57, 'Bageshwar', 92, 34, '', 'Active'),
(58, 'Chamoli', 93, 34, '', 'Active'),
(59, 'Champawat', 94, 34, '', 'Active'),
(60, 'Dehradun', 95, 34, '', 'Active'),
(61, 'Haridwar', 96, 34, '', 'Active'),
(62, 'Nainital', 97, 34, '', 'Active'),
(63, 'Pauri Garhwal', 98, 34, '', 'Active'),
(64, 'Pithoragarh', 99, 34, '', 'Active'),
(65, 'Rudraprayag', 100, 34, '', 'Active'),
(66, 'Tehri Garhwal', 101, 34, '', 'Active'),
(67, 'Udham Singh Nagar', 102, 34, '', 'Active'),
(68, 'Uttarkashi', 103, 34, '', 'Active'),
(69, 'Ambala', 104, 13, '', 'Active'),
(70, 'Bhiwani', 105, 13, '', 'Active'),
(71, 'Faridabad', 106, 13, '', 'Active'),
(72, 'Fatehabad', 107, 13, '', 'Active'),
(73, 'Gurgaon', 108, 13, '', 'Active'),
(74, 'Hisar', 109, 13, '', 'Active'),
(75, 'Jhajjar', 110, 13, '', 'Active'),
(76, 'Jind', 111, 13, '', 'Active'),
(77, 'Kaithal', 112, 13, '', 'Active'),
(78, 'Karnal', 113, 13, '', 'Active'),
(79, 'Kurukshetra', 114, 13, '', 'Active'),
(80, 'Mahendragarh', 115, 13, '', 'Active'),
(81, 'Mewat', 116, 13, '', 'Active'),
(82, 'Palwal', 117, 13, '', 'Active'),
(83, 'Panchkula', 118, 13, '', 'Active'),
(84, 'Panipat', 119, 13, '', 'Active'),
(85, 'Rewari', 120, 13, '', 'Active'),
(86, 'Rohtak', 121, 13, '', 'Active'),
(87, 'Sirsa', 122, 13, '', 'Active'),
(88, 'Sonipat', 123, 13, '', 'Active'),
(89, 'Yamuna Nagar', 124, 13, '', 'Active'),
(90, 'Central Delhi', 125, 10, '', 'Active'),
(91, 'East Delhi', 126, 10, '', 'Active'),
(92, 'New Delhi', 127, 10, '', 'Active'),
(93, 'North Delhi', 128, 10, '', 'Active'),
(94, 'North East Delhi', 129, 10, '', 'Active'),
(95, 'North West Delhi', 130, 10, '', 'Active'),
(96, 'South Delhi', 131, 10, '', 'Active'),
(97, 'South West Delhi', 132, 10, '', 'Active'),
(98, 'West Delhi', 133, 10, '', 'Active'),
(99, 'Ajmer', 134, 29, '', 'Active'),
(100, 'Alwar', 135, 29, '', 'Active'),
(101, 'Banswara', 136, 29, '', 'Active'),
(102, 'Baran', 137, 29, '', 'Active'),
(103, 'Barmer', 138, 29, '', 'Active'),
(104, 'Bharatpur', 139, 29, '', 'Active'),
(105, 'Bhilwara', 140, 29, '', 'Active'),
(106, 'Bikaner', 141, 29, '', 'Active'),
(107, 'Bundi', 142, 29, '', 'Active'),
(108, 'Chittorgarh', 143, 29, '', 'Active'),
(109, 'Churu', 144, 29, '', 'Active'),
(110, 'Dausa', 145, 29, '', 'Active'),
(111, 'Dholpur', 146, 29, '', 'Active'),
(112, 'Dungarpur', 147, 29, '', 'Active'),
(113, 'Ganganagar', 148, 29, '', 'Active'),
(114, 'Hanumangarh', 149, 29, '', 'Active'),
(115, 'Jaipur', 150, 29, '', 'Active'),
(116, 'Jaisalmer', 151, 29, '', 'Active'),
(117, 'Jalor', 152, 29, '', 'Active'),
(118, 'Jhalawar', 153, 29, '', 'Active'),
(119, 'Jhunjhunu', 154, 29, '', 'Active'),
(120, 'Jodhpur', 155, 29, '', 'Active'),
(121, 'Karauli', 156, 29, '', 'Active'),
(122, 'Kota', 157, 29, '', 'Active'),
(123, 'Nagaur', 158, 29, '', 'Active'),
(124, 'Pali', 159, 29, '', 'Active'),
(125, 'Pratapgarh (Rajasthan)', 160, 29, '', 'Active'),
(126, 'Rajsamand', 161, 29, '', 'Active'),
(127, 'Sawai Madhopur', 162, 29, '', 'Active'),
(128, 'Sikar', 163, 29, '', 'Active'),
(129, 'Sirohi', 164, 29, '', 'Active'),
(130, 'Tonk', 165, 29, '', 'Active'),
(131, 'Udaipur', 166, 29, '', 'Active'),
(132, 'Agra', 167, 33, '', 'Active'),
(133, 'Aligarh', 168, 33, '', 'Active'),
(134, 'Allahabad', 169, 33, '', 'Active'),
(135, 'Ambedkar Nagar', 170, 33, '', 'Active'),
(136, 'Auraiya', 171, 33, '', 'Active'),
(137, 'Azamgarh', 172, 33, '', 'Active'),
(138, 'Bagpat', 173, 33, '', 'Active'),
(139, 'Bahraich', 174, 33, '', 'Active'),
(140, 'Ballia', 175, 33, '', 'Active'),
(141, 'Balrampur', 176, 33, '', 'Active'),
(142, 'Banda', 177, 33, '', 'Active'),
(143, 'Barabanki', 178, 33, '', 'Active'),
(144, 'Bareilly', 179, 33, '', 'Active'),
(145, 'Basti', 180, 33, '', 'Active'),
(146, 'Bijnor', 181, 33, '', 'Active'),
(147, 'Budaun', 182, 33, '', 'Active'),
(148, 'Bulandshahr', 183, 33, '', 'Active'),
(149, 'Chandauli', 184, 33, '', 'Active'),
(150, 'Chitrakoot', 185, 33, '', 'Active'),
(151, 'Deoria', 186, 33, '', 'Active'),
(152, 'Etah', 187, 33, '', 'Active'),
(153, 'Etawah', 188, 33, '', 'Active'),
(154, 'Faizabad', 189, 33, '', 'Active'),
(155, 'Farrukhabad', 190, 33, '', 'Active'),
(156, 'Fatehpur', 191, 33, '', 'Active'),
(157, 'Firozabad', 192, 33, '', 'Active'),
(158, 'Gautam Buddha Nagar', 193, 33, '', 'Active'),
(159, 'Ghaziabad', 194, 33, '', 'Active'),
(160, 'Ghazipur', 195, 33, '', 'Active'),
(161, 'Gonda', 196, 33, '', 'Active'),
(162, 'Gorakhpur', 197, 33, '', 'Active'),
(163, 'Hamirpur', 198, 33, '', 'Active'),
(164, 'Hardoi', 199, 33, '', 'Active'),
(165, 'Hathras', 200, 33, '', 'Active'),
(166, 'Jalaun', 201, 33, '', 'Active'),
(167, 'Jaunpur', 202, 33, '', 'Active'),
(168, 'Jhansi', 203, 33, '', 'Active'),
(169, 'Jyotiba Phule Nagar', 204, 33, '', 'Active'),
(170, 'Kannauj', 205, 33, '', 'Active'),
(171, 'Kanpur Dehat', 206, 33, '', 'Active'),
(172, 'Kanpur Nagar', 207, 33, '', 'Active'),
(173, 'Kanshiram Nagar', 208, 33, '', 'Active'),
(174, 'Kaushambi', 209, 33, '', 'Active'),
(175, 'Kheri', 210, 33, '', 'Active'),
(176, 'Kushinagar', 211, 33, '', 'Active'),
(177, 'Lalitpur', 212, 33, '', 'Active'),
(178, 'Lucknow', 213, 33, '', 'Active'),
(179, 'Maharajganj', 214, 33, '', 'Active'),
(180, 'Mahoba', 215, 33, '', 'Active'),
(181, 'Mainpuri', 216, 33, '', 'Active'),
(182, 'Mathura', 217, 33, '', 'Active'),
(183, 'Mau', 218, 33, '', 'Active'),
(184, 'Meerut', 219, 33, '', 'Active'),
(185, 'Mirzapur', 220, 33, '', 'Active'),
(186, 'Moradabad', 221, 33, '', 'Active'),
(187, 'Muzaffarnagar', 222, 33, '', 'Active'),
(188, 'Pilibhit', 223, 33, '', 'Active'),
(189, 'Pratapgarh', 224, 33, '', 'Active'),
(190, 'Rae Bareli', 225, 33, '', 'Active'),
(191, 'Rampur', 226, 33, '', 'Active'),
(192, 'Saharanpur', 227, 33, '', 'Active'),
(193, 'Sant Kabir Nagar', 228, 33, '', 'Active'),
(194, 'Sant Ravidas Nagar (Bhadohi)', 229, 33, '', 'Active'),
(195, 'Shahjahanpur', 230, 33, '', 'Active'),
(196, 'Shrawasti', 231, 33, '', 'Active'),
(197, 'Siddharthnagar', 232, 33, '', 'Active'),
(198, 'Sitapur', 233, 33, '', 'Active'),
(199, 'Sonbhadra', 234, 33, '', 'Active'),
(200, 'Sultanpur', 235, 33, '', 'Active'),
(201, 'Unnao', 236, 33, '', 'Active'),
(202, 'Varanasi', 237, 33, '', 'Active'),
(203, 'Araria', 238, 5, '', 'Active'),
(204, 'Arwal', 239, 5, '', 'Active'),
(205, 'Aurangabad (Bihar)', 240, 5, '', 'Active'),
(206, 'Banka', 241, 5, '', 'Active'),
(207, 'Begusarai', 242, 5, '', 'Active'),
(208, 'Bhagalpur', 243, 5, '', 'Active'),
(209, 'Bhojpur', 244, 5, '', 'Active'),
(210, 'Buxar', 245, 5, '', 'Active'),
(211, 'Darbhanga', 246, 5, '', 'Active'),
(212, 'East Champaran', 247, 5, '', 'Active'),
(213, 'Gaya', 248, 5, '', 'Active'),
(214, 'Gopalganj', 249, 5, '', 'Active'),
(215, 'Jamui', 250, 5, '', 'Active'),
(216, 'Jehanabad', 251, 5, '', 'Active'),
(217, 'Kaimur (Bhabua)', 252, 5, '', 'Active'),
(218, 'Katihar', 253, 5, '', 'Active'),
(219, 'Khagaria', 254, 5, '', 'Active'),
(220, 'Kishanganj', 255, 5, '', 'Active'),
(221, 'Lakhisarai', 256, 5, '', 'Active'),
(222, 'Madhepura', 257, 5, '', 'Active'),
(223, 'Madhubani', 258, 5, '', 'Active'),
(224, 'Munger', 259, 5, '', 'Active'),
(225, 'Muzaffarpur', 260, 5, '', 'Active'),
(226, 'Nalanda', 261, 5, '', 'Active'),
(227, 'Nawada', 262, 5, '', 'Active'),
(228, 'Patna', 263, 5, '', 'Active'),
(229, 'Purnia', 264, 5, '', 'Active'),
(230, 'Rohtas', 265, 5, '', 'Active'),
(231, 'Saharsa', 266, 5, '', 'Active'),
(232, 'Samastipur', 267, 5, '', 'Active'),
(233, 'Saran', 268, 5, '', 'Active'),
(234, 'Sheikhpura', 269, 5, '', 'Active'),
(235, 'Sheohar', 270, 5, '', 'Active'),
(236, 'Sitamarhi', 271, 5, '', 'Active'),
(237, 'Siwan', 272, 5, '', 'Active'),
(238, 'Supaul', 273, 5, '', 'Active'),
(239, 'Vaishali', 274, 5, '', 'Active'),
(240, 'West Champaran', 275, 5, '', 'Active'),
(241, 'East Sikkim', 276, 30, '', 'Active'),
(242, 'North Sikkim', 277, 30, '', 'Active'),
(243, 'South Sikkim', 278, 30, '', 'Active'),
(244, 'West Sikkim', 279, 30, '', 'Active'),
(245, 'Anjaw', 280, 3, '', 'Active'),
(246, 'Changlang', 281, 3, '', 'Active'),
(247, 'Dibang Valley', 282, 3, '', 'Active'),
(248, 'East Kameng', 283, 3, '', 'Active'),
(249, 'East Siang', 284, 3, '', 'Active'),
(250, 'Kurung Kumey', 285, 3, '', 'Active'),
(251, 'Lohit', 286, 3, '', 'Active'),
(252, 'Lower Dibang Valley', 287, 3, '', 'Active'),
(253, 'Lower Subansiri', 288, 3, '', 'Active'),
(254, 'Papum Pare', 289, 3, '', 'Active'),
(255, 'Tawang', 290, 3, '', 'Active'),
(256, 'Tirap', 291, 3, '', 'Active'),
(257, 'Upper Siang', 292, 3, '', 'Active'),
(258, 'Upper Subansiri', 293, 3, '', 'Active'),
(259, 'West Kameng', 294, 3, '', 'Active'),
(260, 'West Siang', 295, 3, '', 'Active'),
(261, 'Dimapur', 296, 25, '', 'Active'),
(262, 'Kiphire', 297, 25, '', 'Active'),
(263, 'Kohima', 298, 25, '', 'Active'),
(264, 'Longleng', 299, 25, '', 'Active'),
(265, 'Mokokchung', 300, 25, '', 'Active'),
(266, 'Mon', 301, 25, '', 'Active'),
(267, 'Peren', 302, 25, '', 'Active'),
(268, 'Phek', 303, 25, '', 'Active'),
(269, 'Tuensang', 304, 25, '', 'Active'),
(270, 'Wokha', 305, 25, '', 'Active'),
(271, 'Zunheboto', 306, 25, '', 'Active'),
(272, 'Bishnupur', 307, 22, '', 'Active'),
(273, 'Chandel', 308, 22, '', 'Active'),
(274, 'Churachandpur', 309, 22, '', 'Active'),
(275, 'Imphal East', 310, 22, '', 'Active'),
(276, 'Imphal West', 311, 22, '', 'Active'),
(277, 'Senapati', 312, 22, '', 'Active'),
(278, 'Tamenglong', 313, 22, '', 'Active'),
(279, 'Thoubal', 314, 22, '', 'Active'),
(280, 'Ukhrul', 315, 22, '', 'Active'),
(281, 'Aizawl', 316, 24, '', 'Active'),
(282, 'Champhai', 317, 24, '', 'Active'),
(283, 'Kolasib', 318, 24, '', 'Active'),
(284, 'Lawngtlai', 319, 24, '', 'Active'),
(285, 'Lunglei', 320, 24, '', 'Active'),
(286, 'Mamit', 321, 24, '', 'Active'),
(287, 'Saiha', 322, 24, '', 'Active'),
(288, 'Serchhip', 323, 24, '', 'Active'),
(289, 'Dhalai', 324, 32, '', 'Active'),
(290, 'North Tripura', 325, 32, '', 'Active'),
(291, 'South Tripura', 326, 32, '', 'Active'),
(292, 'West Tripura', 327, 32, '', 'Active'),
(293, 'East Garo Hills', 328, 23, '', 'Active'),
(294, 'East Khasi Hills', 329, 23, '', 'Active'),
(295, 'Jaintia Hills', 330, 23, '', 'Active'),
(296, 'Ri Bhoi', 331, 23, '', 'Active'),
(297, 'South Garo Hills', 332, 23, '', 'Active'),
(298, 'West Garo Hills', 333, 23, '', 'Active'),
(299, 'West Khasi Hills', 334, 23, '', 'Active'),
(300, 'Baksa', 335, 4, '', 'Active'),
(301, 'Barpeta', 336, 4, '', 'Active'),
(302, 'Bongaigaon', 337, 4, '', 'Active'),
(303, 'Cachar', 338, 4, '', 'Active'),
(304, 'Chirang', 339, 4, '', 'Active'),
(305, 'Darrang', 340, 4, '', 'Active'),
(306, 'Dhemaji', 341, 4, '', 'Active'),
(307, 'Dhubri', 342, 4, '', 'Active'),
(308, 'Dibrugarh', 343, 4, '', 'Active'),
(309, 'Dima Hasao (North Cachar Hills)', 344, 4, '', 'Active'),
(310, 'Goalpara', 345, 4, '', 'Active'),
(311, 'Golaghat', 346, 4, '', 'Active'),
(312, 'Hailakandi', 347, 4, '', 'Active'),
(313, 'Jorhat', 348, 4, '', 'Active'),
(314, 'Kamrup', 349, 4, '', 'Active'),
(315, 'Kamrup Metropolitan', 350, 4, '', 'Active'),
(316, 'Karbi Anglong', 351, 4, '', 'Active'),
(317, 'Karimganj', 352, 4, '', 'Active'),
(318, 'Kokrajhar', 353, 4, '', 'Active'),
(319, 'Lakhimpur', 354, 4, '', 'Active'),
(320, 'Morigaon', 355, 4, '', 'Active'),
(321, 'Nagaon', 356, 4, '', 'Active'),
(322, 'Nalbari', 357, 4, '', 'Active'),
(323, 'Sivasagar', 358, 4, '', 'Active'),
(324, 'Sonitpur', 359, 4, '', 'Active'),
(325, 'Tinsukia', 360, 4, '', 'Active'),
(326, 'Udalguri', 361, 4, '', 'Active'),
(327, 'Bankura', 362, 35, '', 'Active'),
(328, 'Bardhaman', 363, 35, '', 'Active'),
(329, 'Birbhum', 364, 35, '', 'Active'),
(330, 'Cooch Behar', 365, 35, '', 'Active'),
(331, 'Dakshin Dinajpur (South Dinajpur)', 366, 35, '', 'Active'),
(332, 'Darjiling', 367, 35, '', 'Active'),
(333, 'Hooghly', 368, 35, '', 'Active'),
(334, 'Howrah', 369, 35, '', 'Active'),
(335, 'Jalpaiguri', 370, 35, '', 'Active'),
(336, 'Kolkata', 371, 35, '', 'Active'),
(337, 'Maldah', 372, 35, '', 'Active'),
(338, 'Murshidabad', 373, 35, '', 'Active'),
(339, 'Nadia', 374, 35, '', 'Active'),
(340, 'North 24 Parganas', 375, 35, '', 'Active'),
(341, 'Paschim Medinipur (West Midnapore)', 376, 35, '', 'Active'),
(342, 'Purba Medinipur (East Midnapore)', 377, 35, '', 'Active'),
(343, 'Puruliya', 378, 35, '', 'Active'),
(344, 'South 24 Parganas', 379, 35, '', 'Active'),
(345, 'Uttar Dinajpur (North Dinajpur)', 380, 35, '', 'Active'),
(346, 'Bokaro', 381, 16, '', 'Active'),
(347, 'Chatra', 382, 16, '', 'Active'),
(348, 'Deoghar', 383, 16, '', 'Active'),
(349, 'Dhanbad', 384, 16, '', 'Active'),
(350, 'Dumka', 385, 16, '', 'Active'),
(351, 'East Singhbhum', 386, 16, '', 'Active'),
(352, 'Garhwa', 387, 16, '', 'Active'),
(353, 'Giridih', 388, 16, '', 'Active'),
(354, 'Godda', 389, 16, '', 'Active'),
(355, 'Gumla', 390, 16, '', 'Active'),
(356, 'Hazaribagh', 391, 16, '', 'Active'),
(357, 'Jamtara', 392, 16, '', 'Active'),
(358, 'Khunti', 393, 16, '', 'Active'),
(359, 'Koderma', 394, 16, '', 'Active'),
(360, 'Latehar', 395, 16, '', 'Active'),
(361, 'Lohardaga', 396, 16, '', 'Active'),
(362, 'Pakur', 397, 16, '', 'Active'),
(363, 'Palamu', 398, 16, '', 'Active'),
(364, 'Ramgarh', 399, 16, '', 'Active'),
(365, 'Ranchi', 400, 16, '', 'Active'),
(366, 'Sahibganj', 401, 16, '', 'Active'),
(367, 'Seraikela-Kharsawan', 402, 16, '', 'Active'),
(368, 'Simdega', 403, 16, '', 'Active'),
(369, 'West Singhbhum', 404, 16, '', 'Active'),
(370, 'Angul', 405, 26, '', 'Active'),
(371, 'Balangir', 406, 26, '', 'Active'),
(372, 'Baleswar', 407, 26, '', 'Active'),
(373, 'Bargarh', 408, 26, '', 'Active'),
(374, 'Bhadrak', 409, 26, '', 'Active'),
(375, 'Boudh', 410, 26, '', 'Active'),
(376, 'Cuttack', 411, 26, '', 'Active'),
(377, 'Debagarh', 412, 26, '', 'Active'),
(378, 'Dhenkanal', 413, 26, '', 'Active'),
(379, 'Gajapati', 414, 26, '', 'Active'),
(380, 'Ganjam', 415, 26, '', 'Active'),
(381, 'Jagatsinghapur', 416, 26, '', 'Active'),
(382, 'Jajapur', 417, 26, '', 'Active'),
(383, 'Jharsuguda', 418, 26, '', 'Active'),
(384, 'Kalahandi', 419, 26, '', 'Active'),
(385, 'Kandhamal', 420, 26, '', 'Active'),
(386, 'Kendrapara', 421, 26, '', 'Active'),
(387, 'Kendujhar', 422, 26, '', 'Active'),
(388, 'Khordha', 423, 26, '', 'Active'),
(389, 'Koraput', 424, 26, '', 'Active'),
(390, 'Malkangiri', 425, 26, '', 'Active'),
(391, 'Mayurbhanj', 426, 26, '', 'Active'),
(392, 'Nabarangapur', 427, 26, '', 'Active'),
(393, 'Nayagarh', 428, 26, '', 'Active'),
(394, 'Nuapada', 429, 26, '', 'Active'),
(395, 'Puri', 430, 26, '', 'Active'),
(396, 'Rayagada', 431, 26, '', 'Active'),
(397, 'Sambalpur', 432, 26, '', 'Active'),
(398, 'Subarnapur (Sonapur)', 433, 26, '', 'Active'),
(399, 'Sundergarh', 434, 26, '', 'Active'),
(400, 'Bastar', 435, 7, '', 'Active'),
(401, 'Bijapur (Chhattisgarh)', 436, 7, '', 'Active'),
(402, 'Bilaspur (Chhattisgarh)', 437, 7, '', 'Active'),
(403, 'Dakshin Bastar Dantewada', 438, 7, '', 'Active'),
(404, 'Dhamtari', 439, 7, '', 'Active'),
(405, 'Durg', 440, 7, '', 'Active'),
(406, 'Janjgir-Champa', 441, 7, '', 'Active'),
(407, 'Jashpur', 442, 7, '', 'Active'),
(408, 'Kabirdham (Kawardha)', 443, 7, '', 'Active'),
(409, 'Korba', 444, 7, '', 'Active'),
(410, 'Koriya', 445, 7, '', 'Active'),
(411, 'Mahasamund', 446, 7, '', 'Active'),
(412, 'Narayanpur', 447, 7, '', 'Active'),
(413, 'Raigarh (Chhattisgarh)', 448, 7, '', 'Active'),
(414, 'Raipur', 449, 7, '', 'Active'),
(415, 'Rajnandgaon', 450, 7, '', 'Active'),
(416, 'Surguja', 451, 7, '', 'Active'),
(417, 'Uttar Bastar Kanker', 452, 7, '', 'Active'),
(418, 'Alirajpur', 453, 20, '', 'Active'),
(419, 'Anuppur', 454, 20, '', 'Active'),
(420, 'Ashok Nagar', 455, 20, '', 'Active'),
(421, 'Balaghat', 456, 20, '', 'Active'),
(422, 'Barwani', 457, 20, '', 'Active'),
(423, 'Betul', 458, 20, '', 'Active'),
(424, 'Bhind', 459, 20, '', 'Active'),
(425, 'Bhopal', 460, 20, '', 'Active'),
(426, 'Burhanpur', 461, 20, '', 'Active'),
(427, 'Chhatarpur', 462, 20, '', 'Active'),
(428, 'Chhindwara', 463, 20, '', 'Active'),
(429, 'Damoh', 464, 20, '', 'Active'),
(430, 'Datia', 465, 20, '', 'Active'),
(431, 'Dewas', 466, 20, '', 'Active'),
(432, 'Dhar', 467, 20, '', 'Active'),
(433, 'Dindori', 468, 20, '', 'Active'),
(434, 'Guna', 469, 20, '', 'Active'),
(435, 'Gwalior', 470, 20, '', 'Active'),
(436, 'Harda', 471, 20, '', 'Active'),
(437, 'Hoshangabad', 472, 20, '', 'Active'),
(438, 'Indore', 473, 20, '', 'Active'),
(439, 'Jabalpur', 474, 20, '', 'Active'),
(440, 'Jhabua', 475, 20, '', 'Active'),
(441, 'Katni', 476, 20, '', 'Active'),
(442, 'Khandwa (East Nimar)', 477, 20, '', 'Active'),
(443, 'Khargone (West Nimar)', 478, 20, '', 'Active'),
(444, 'Mandla', 479, 20, '', 'Active'),
(445, 'Mandsaur', 480, 20, '', 'Active'),
(446, 'Morena', 481, 20, '', 'Active'),
(447, 'Narsinghpur', 482, 20, '', 'Active'),
(448, 'Neemuch', 483, 20, '', 'Active'),
(449, 'Panna', 484, 20, '', 'Active'),
(450, 'Raisen', 485, 20, '', 'Active'),
(451, 'Rajgarh', 486, 20, '', 'Active'),
(452, 'Ratlam', 487, 20, '', 'Active'),
(453, 'Rewa', 488, 20, '', 'Active'),
(454, 'Sagar', 489, 20, '', 'Active'),
(455, 'Satna', 490, 20, '', 'Active'),
(456, 'Sehore', 491, 20, '', 'Active'),
(457, 'Seoni', 492, 20, '', 'Active'),
(458, 'Shahdol', 493, 20, '', 'Active'),
(459, 'Shajapur', 494, 20, '', 'Active'),
(460, 'Sheopur', 495, 20, '', 'Active'),
(461, 'Shivpuri', 496, 20, '', 'Active'),
(462, 'Sidhi', 497, 20, '', 'Active'),
(463, 'Singrauli', 498, 20, '', 'Active'),
(464, 'Tikamgarh', 499, 20, '', 'Active'),
(465, 'Ujjain', 500, 20, '', 'Active'),
(466, 'Umaria', 501, 20, '', 'Active'),
(467, 'Vidisha', 502, 20, '', 'Active'),
(468, 'Ahmedabad', 503, 12, '', 'Active'),
(469, 'Amreli', 504, 12, '', 'Active'),
(470, 'Anand', 505, 12, '', 'Active'),
(471, 'Banaskantha', 506, 12, '', 'Active'),
(472, 'Bharuch', 507, 12, '', 'Active'),
(473, 'Bhavnagar', 508, 12, '', 'Active'),
(474, 'Dahod', 509, 12, '', 'Active'),
(475, 'Gandhi Nagar', 510, 12, '', 'Active'),
(476, 'Jamnagar', 511, 12, '', 'Active'),
(477, 'Junagadh', 512, 12, '', 'Active'),
(478, 'Kachchh', 513, 12, '', 'Active'),
(479, 'Kheda', 514, 12, '', 'Active'),
(480, 'Mahesana', 515, 12, '', 'Active'),
(481, 'Narmada', 516, 12, '', 'Active'),
(482, 'Navsari', 517, 12, '', 'Active'),
(483, 'Panch Mahals', 518, 12, '', 'Active'),
(484, 'Patan', 519, 12, '', 'Active'),
(485, 'Porbandar', 520, 12, '', 'Active'),
(486, 'Rajkot', 521, 12, '', 'Active'),
(487, 'Sabarkantha', 522, 12, '', 'Active'),
(488, 'Surat', 523, 12, '', 'Active'),
(489, 'Surendra Nagar', 524, 12, '', 'Active'),
(490, 'Tapi', 525, 12, '', 'Active'),
(491, 'The Dangs', 526, 12, '', 'Active'),
(492, 'Vadodara', 527, 12, '', 'Active'),
(493, 'Valsad', 528, 12, '', 'Active'),
(494, 'Daman', 529, 9, '', 'Active'),
(495, 'Diu', 530, 9, '', 'Active'),
(496, 'Dadra & Nagar Haveli', 531, 8, '', 'Active'),
(497, 'Ahmed Nagar', 532, 21, '', 'Active'),
(498, 'Akola', 533, 21, '', 'Active'),
(499, 'Amravati', 534, 21, '', 'Active'),
(500, 'Aurangabad', 535, 21, '', 'Active'),
(501, 'Beed', 536, 21, '', 'Active'),
(502, 'Bhandara', 537, 21, '', 'Active'),
(503, 'Buldhana', 538, 21, '', 'Active'),
(504, 'Chandrapur', 539, 21, '', 'Active'),
(505, 'Dhule', 540, 21, '', 'Active'),
(506, 'Gadchiroli', 541, 21, '', 'Active'),
(507, 'Gondia', 542, 21, '', 'Active'),
(508, 'Hingoli', 543, 21, '', 'Active'),
(509, 'Jalgaon', 544, 21, '', 'Active'),
(510, 'Jalna', 545, 21, '', 'Active'),
(511, 'Kolhapur', 546, 21, '', 'Active'),
(512, 'Latur', 547, 21, '', 'Active'),
(513, 'Mumbai', 548, 21, '', 'Active'),
(514, 'Mumbai Suburban', 549, 21, '', 'Active'),
(515, 'Nagpur', 550, 21, '', 'Active'),
(516, 'Nanded', 551, 21, '', 'Active'),
(517, 'Nandurbar', 552, 21, '', 'Active'),
(518, 'Nashik', 553, 21, '', 'Active'),
(519, 'Osmanabad', 554, 21, '', 'Active'),
(520, 'Parbhani', 555, 21, '', 'Active'),
(521, 'Pune', 556, 21, '', 'Active'),
(522, 'Raigarh (Maharashtra)', 557, 21, '', 'Active'),
(523, 'Ratnagiri', 558, 21, '', 'Active'),
(524, 'Sangli', 559, 21, '', 'Active'),
(525, 'Satara', 560, 21, '', 'Active'),
(526, 'Sindhudurg', 561, 21, '', 'Active'),
(527, 'Solapur', 562, 21, '', 'Active'),
(528, 'Thane', 563, 21, '', 'Active'),
(529, 'Wardha', 564, 21, '', 'Active'),
(530, 'Washim', 565, 21, '', 'Active'),
(531, 'Yavatmal', 566, 21, '', 'Active'),
(532, 'Adilabad', 567, 2, '', 'Active'),
(533, 'Anantapur', 568, 2, '', 'Active'),
(534, 'Chittoor', 569, 2, '', 'Active'),
(535, 'East Godavari', 570, 2, '', 'Active'),
(536, 'Guntur', 571, 2, '', 'Active'),
(537, 'Hyderabad', 572, 2, '', 'Active'),
(538, 'Kadapa (Cuddapah)', 573, 2, '', 'Active'),
(539, 'Karim Nagar', 574, 2, '', 'Active'),
(540, 'Khammam', 575, 2, '', 'Active'),
(541, 'Krishna', 576, 2, '', 'Active'),
(542, 'Kurnool', 577, 2, '', 'Active'),
(543, 'Mahbubnagar', 578, 2, '', 'Active'),
(544, 'Medak', 579, 2, '', 'Active'),
(545, 'Nalgonda', 580, 2, '', 'Active'),
(546, 'Nellore', 581, 2, '', 'Active'),
(547, 'Nizamabad', 582, 2, '', 'Active'),
(548, 'Prakasam', 583, 2, '', 'Active'),
(549, 'Rangareddy', 584, 2, '', 'Active'),
(550, 'Srikakulam', 585, 2, '', 'Active'),
(551, 'Visakhapatnam', 586, 2, '', 'Active'),
(552, 'Vizianagaram', 587, 2, '', 'Active'),
(553, 'Warangal', 588, 2, '', 'Active'),
(554, 'West Godavari', 589, 2, '', 'Active'),
(555, 'Bagalkot', 590, 17, '', 'Active'),
(556, 'Bangalore', 591, 17, '', 'Active'),
(557, 'Bangalore Rural', 592, 17, '', 'Active'),
(558, 'Belgaum', 593, 17, '', 'Active'),
(559, 'Bellary', 594, 17, '', 'Active'),
(560, 'Bidar', 595, 17, '', 'Active'),
(561, 'Bijapur (Karnataka)', 596, 17, '', 'Active'),
(562, 'Chamrajnagar', 597, 17, '', 'Active'),
(563, 'Chickmagalur', 598, 17, '', 'Active'),
(564, 'Chikkaballapur', 599, 17, '', 'Active'),
(565, 'Chitradurga', 600, 17, '', 'Active'),
(566, 'Dakshina Kannada', 601, 17, '', 'Active'),
(567, 'Davanagere', 602, 17, '', 'Active'),
(568, 'Dharwad', 603, 17, '', 'Active'),
(569, 'Gadag', 604, 17, '', 'Active'),
(570, 'Gulbarga', 605, 17, '', 'Active'),
(571, 'Hassan', 606, 17, '', 'Active'),
(572, 'Haveri', 607, 17, '', 'Active'),
(573, 'Kodagu', 608, 17, '', 'Active'),
(574, 'Kolar', 609, 17, '', 'Active'),
(575, 'Koppal', 610, 17, '', 'Active'),
(576, 'Mandya', 611, 17, '', 'Active'),
(577, 'Mysore', 612, 17, '', 'Active'),
(578, 'Raichur', 613, 17, '', 'Active'),
(579, 'Ramanagara', 614, 17, '', 'Active'),
(580, 'Shimoga', 615, 17, '', 'Active'),
(581, 'Tumkur', 616, 17, '', 'Active'),
(582, 'Udupi', 617, 17, '', 'Active'),
(583, 'Uttara Kannada', 618, 17, '', 'Active'),
(584, 'Yadgir', 619, 17, '', 'Active'),
(585, 'North Goa', 620, 11, '', 'Active'),
(586, 'South Goa', 621, 11, '', 'Active'),
(587, 'Lakshadweep', 622, 19, '', 'Active'),
(588, 'Alappuzha', 623, 18, '', 'Active'),
(589, 'Ernakulam', 624, 18, '', 'Active'),
(590, 'Idukki', 625, 18, '', 'Active'),
(591, 'Kannur', 626, 18, '', 'Active'),
(592, 'Kasaragod', 627, 18, '', 'Active'),
(593, 'Kollam', 628, 18, '', 'Active'),
(594, 'Kottayam', 629, 18, '', 'Active'),
(595, 'Kozhikode', 630, 18, '', 'Active'),
(596, 'Malappuram', 631, 18, '', 'Active'),
(597, 'Palakkad', 632, 18, '', 'Active'),
(598, 'Pathanamthitta', 633, 18, '', 'Active'),
(599, 'Thiruvananthapuram', 634, 18, '', 'Active'),
(600, 'Thrissur', 635, 18, '', 'Active'),
(601, 'Wayanad', 636, 18, '', 'Active'),
(602, 'Ariyalur', 637, 31, '', 'Active'),
(603, 'Chennai', 638, 31, '', 'Active'),
(604, 'Coimbatore', 639, 31, '', 'Active'),
(605, 'Cuddalore', 640, 31, '', 'Active'),
(606, 'Dharmapuri', 641, 31, '', 'Active'),
(607, 'Dindigul', 642, 31, '', 'Active'),
(608, 'Erode', 643, 31, '', 'Active'),
(609, 'Kanchipuram', 644, 31, '', 'Active'),
(610, 'Kanyakumari', 645, 31, '', 'Active'),
(611, 'Karur', 646, 31, '', 'Active'),
(612, 'Krishnagiri', 647, 31, '', 'Active'),
(613, 'Madurai', 648, 31, '', 'Active'),
(614, 'Nagapattinam', 649, 31, '', 'Active'),
(615, 'Namakkal', 650, 31, '', 'Active'),
(616, 'Nilgiris', 651, 31, '', 'Active'),
(617, 'Perambalur', 652, 31, '', 'Active'),
(618, 'Pudukkottai', 653, 31, '', 'Active'),
(619, 'Ramanathapuram', 654, 31, '', 'Active'),
(620, 'Salem', 655, 31, '', 'Active'),
(621, 'Sivaganga', 656, 31, '', 'Active'),
(622, 'Thanjavur', 657, 31, '', 'Active'),
(623, 'Theni', 658, 31, '', 'Active'),
(624, 'Thoothukudi (Tuticorin)', 659, 31, '', 'Active'),
(625, 'Tiruchirappalli', 660, 31, '', 'Active'),
(626, 'Tirunelveli', 661, 31, '', 'Active'),
(627, 'Tiruppur', 662, 31, '', 'Active'),
(628, 'Tiruvallur', 663, 31, '', 'Active'),
(629, 'Tiruvannamalai', 664, 31, '', 'Active'),
(630, 'Tiruvarur', 665, 31, '', 'Active'),
(631, 'Vellore', 666, 31, '', 'Active'),
(632, 'Viluppuram', 667, 31, '', 'Active'),
(633, 'Virudhunagar', 668, 31, '', 'Active'),
(634, 'Karaikal', 669, 27, '', 'Active'),
(635, 'Mahe', 670, 27, '', 'Active'),
(636, 'Puducherry (Pondicherry)', 671, 27, '', 'Active'),
(637, 'Yanam', 672, 27, '', 'Active'),
(638, 'Nicobar', 673, 1, '', 'Active'),
(639, 'North And Middle Andaman', 674, 1, '', 'Active'),
(640, 'South Andaman', 675, 1, '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `cms_block`
--

CREATE TABLE `cms_block` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `value` text DEFAULT NULL,
  `value2` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_block`
--

INSERT INTO `cms_block` (`id`, `slug`, `value`, `value2`, `status`, `created_at`, `updated_at`) VALUES
(1, 'copyright-text', 'Copyright © 2023 Mahajan Imaging &amp; Labs. All Rights Reserved', NULL, 1, '2019-03-20 05:36:45', '2023-03-01 11:44:14'),
(15, 'top-offer-message', 'na', NULL, 2, '2020-08-17 20:41:48', '2023-05-01 15:22:47'),
(22, 'contact-number', '011-4118 3838', NULL, 1, '2022-01-11 14:01:25', '2023-04-24 12:28:30'),
(23, 'contact-email', 'info@mahajanimaging.com', 'info@mahajanimaging.com', 1, '2022-01-11 14:02:08', '2023-03-01 11:43:11'),
(24, 'whatsapp-number', '88828 97661', NULL, 1, '2023-03-01 11:27:10', '2023-03-01 11:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `cms_page`
--

CREATE TABLE `cms_page` (
  `id` smallint(6) NOT NULL COMMENT 'Page ID',
  `page_title` varchar(255) DEFAULT NULL COMMENT 'Page Title',
  `status` int(11) NOT NULL,
  `meta_keywords` text DEFAULT NULL COMMENT 'Page Meta Keywords',
  `meta_description` text DEFAULT NULL COMMENT 'Page Meta Description',
  `slug` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL COMMENT 'Page Content Heading',
  `sub_text` text DEFAULT NULL,
  `content1` longtext DEFAULT NULL COMMENT 'Page Content',
  `layout` varchar(222) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'Page Creation Time',
  `created_at` timestamp NULL DEFAULT NULL COMMENT 'Page Modification Time',
  `menu_sort_order` varchar(6) DEFAULT '0' COMMENT 'Page Sort Order',
  `parent_menu_page_id` int(11) NOT NULL DEFAULT 0,
  `menu_name` varchar(222) DEFAULT NULL,
  `menu_include` varchar(10) DEFAULT NULL,
  `content2` longtext DEFAULT NULL,
  `content3` text DEFAULT NULL,
  `content4` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `image_mobile` text DEFAULT NULL,
  `meta_other` text DEFAULT NULL,
  `image_alt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='CMS Page Table';

--
-- Dumping data for table `cms_page`
--

INSERT INTO `cms_page` (`id`, `page_title`, `status`, `meta_keywords`, `meta_description`, `slug`, `name`, `sub_text`, `content1`, `layout`, `updated_at`, `created_at`, `menu_sort_order`, `parent_menu_page_id`, `menu_name`, `menu_include`, `content2`, `content3`, `content4`, `image`, `image_mobile`, `meta_other`, `image_alt`) VALUES
(1, 'Generation G', 1, NULL, NULL, 'home', 'Generation G', NULL, '<p><br></p>', NULL, '2024-06-13 13:04:51', '2024-05-17 11:24:38', '0', 0, NULL, NULL, '<p><br></p>', NULL, NULL, 'media/cmspage/image/banner-1718283743.png', NULL, NULL, NULL),
(2, 'Gallery', 1, NULL, NULL, 'gallery', 'Gallery', NULL, NULL, NULL, '2024-06-13 13:08:10', '2024-06-13 13:06:04', '0', 0, NULL, NULL, NULL, NULL, NULL, 'media/cmspage/image/gallery-banner-1718283964.jpg', NULL, NULL, NULL),
(3, 'Pledge', 1, NULL, NULL, 'pledge', 'Pledge', NULL, NULL, NULL, '2024-06-13 13:06:41', '2024-06-13 13:06:41', '0', 0, NULL, NULL, NULL, NULL, NULL, 'media/cmspage/image/pledge-banner-1718284001.png', NULL, NULL, NULL),
(4, 'Registration', 1, NULL, NULL, 'registration', 'Registration', NULL, NULL, NULL, '2024-06-13 13:07:11', '2024-06-13 13:07:11', '0', 0, NULL, NULL, NULL, NULL, NULL, 'media/cmspage/image/registration-banner-1718284031.jpg', NULL, NULL, NULL),
(5, 'E-waste', 1, NULL, NULL, 'e-waste', 'E-Waste', NULL, NULL, NULL, '2024-06-13 13:07:50', '2024-06-13 13:07:50', '0', 0, NULL, NULL, NULL, NULL, NULL, 'media/cmspage/image/e-waste-banner-1718284070.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pledge`
--

CREATE TABLE `pledge` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `institute` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pledge`
--

INSERT INTO `pledge` (`id`, `name`, `email`, `institute`, `gender`, `state`, `city`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Soli', 'soli@gmail.com', 'MGMIT', 'Female', 'Delhi', 'East Delhi', 'Checked', '2024-06-14 08:27:52', '2024-06-14 08:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(11) NOT NULL,
  `province_title` varchar(100) NOT NULL,
  `province_description` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_title`, `province_description`, `status`) VALUES
(1, 'Andaman & Nicobar Islands', '', 'Active'),
(2, 'Andhra Pradesh', '', 'Active'),
(3, 'Arunachal Pradesh', '', 'Active'),
(4, 'Assam', '', 'Active'),
(5, 'Bihar', '', 'Active'),
(6, 'Chandigarh', '', 'Active'),
(7, 'Chhattisgarh', '', 'Active'),
(8, 'Dadra & Nagar Haveli', '', 'Active'),
(9, 'Daman & Diu', '', 'Active'),
(10, 'Delhi', '', 'Active'),
(11, 'Goa', '', 'Active'),
(12, 'Gujarat', '', 'Active'),
(13, 'Haryana', '', 'Active'),
(14, 'Himachal Pradesh', '', 'Active'),
(15, 'Jammu & Kashmir', '', 'Active'),
(16, 'Jharkhand', '', 'Active'),
(17, 'Karnataka', '', 'Active'),
(18, 'Kerala', '', 'Active'),
(19, 'Lakshadweep', '', 'Active'),
(20, 'Madhya Pradesh', '', 'Active'),
(21, 'Maharashtra', '', 'Active'),
(22, 'Manipur', '', 'Active'),
(23, 'Meghalaya', '', 'Active'),
(24, 'Mizoram', '', 'Active'),
(25, 'Nagaland', '', 'Active'),
(26, 'Odisha', '', 'Active'),
(27, 'Puducherry', '', 'Active'),
(28, 'Punjab', '', 'Active'),
(29, 'Rajasthan', '', 'Active'),
(30, 'Sikkim', '', 'Active'),
(31, 'Tamil Nadu', '', 'Active'),
(32, 'Tripura', '', 'Active'),
(33, 'Uttar Pradesh', '', 'Active'),
(34, 'Uttarakhand', '', 'Active'),
(35, 'West Bengal', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `redirect_url`
--

CREATE TABLE `redirect_url` (
  `id` int(11) NOT NULL,
  `from_url` text DEFAULT NULL,
  `to_url` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `redirect_url`
--

INSERT INTO `redirect_url` (`id`, `from_url`, `to_url`, `status`, `updated_at`, `created_at`) VALUES
(1, '/contact2', '/about-us', 1, '2023-07-06 13:40:58', '2023-07-06 12:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `id` int(11) NOT NULL,
  `institute_name` text NOT NULL,
  `institute_address` text NOT NULL,
  `institute_mobile` varchar(255) NOT NULL,
  `institute_email` varchar(255) NOT NULL,
  `total_student` int(11) NOT NULL,
  `principal_name` varchar(255) NOT NULL,
  `principal_mobile` varchar(20) NOT NULL,
  `principal_email` varchar(255) NOT NULL,
  `teacher_name1` varchar(255) DEFAULT NULL,
  `teacher_mobile1` varchar(20) DEFAULT NULL,
  `teacher_email1` varchar(255) DEFAULT NULL,
  `teacher_name2` varchar(255) DEFAULT NULL,
  `teacher_mobile2` varchar(20) DEFAULT NULL,
  `teacher_email2` varchar(255) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`id`, `institute_name`, `institute_address`, `institute_mobile`, `institute_email`, `total_student`, `principal_name`, `principal_mobile`, `principal_email`, `teacher_name1`, `teacher_mobile1`, `teacher_email1`, `teacher_name2`, `teacher_mobile2`, `teacher_email2`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Grapes Digital', '261, 2nd Floor, Lane, Number-5, Westend Marg', '9999034567', 'info@grapesworldwide.com', 150, 'Soli Gupta', '8127455339', 'soli@gmail.com', 'Teacher', '5464353535', 'tech@gmail.com', 'techer', '7675645554', 'techer@gmail.com', 'Checked', '2024-06-14 08:49:17', '2024-06-14 08:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `api_token` text DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `admin_modules` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `remember_token`, `created_at`, `updated_at`, `api_token`, `mobile`, `is_admin`, `admin_modules`, `status`) VALUES
(3, 'Ram', 'ram@gmail.com', NULL, '$2y$10$.BUDPZW3u0VFqlT2GxXpe.bTu6nLTGtKYAx79EyGKOu/QZj6BHmnq', '4ooGRDo8IA6L0FRl3T0ncf24EUIlWWlODXK9ldp0N5pfMgvcDl53g3zG5pwq', '2017-07-25 23:05:44', '2018-06-08 04:19:12', NULL, '8860221289', 0, 'admin-user,user,poll', 1),
(6, 'Admin', 'admin@gmail.com', 'admin@gmail.com', '$2y$10$U9HGWOl8rEwnkt.A1JDRf.AH4ZB4Dqs0UavUD/z/Jrc7e/ZfBYucm', '3YfpP90G2FlI8gD1V8JhOK23R0lLrTJw8q2pPGOj6ubggMOxVv8usxj2DEYX', '2018-04-06 05:47:28', '2022-11-18 10:54:49', NULL, '8860221289', 1, 'all-modules', 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`id`, `name`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Update  CSS and JS Control  Version', 'staticver', '24', 1, '2019-10-01 01:08:05', '2023-06-22 16:14:01'),
(4, 'common-seo-tags', 'common-seo-tags', '<!-- Meta Pixel Code -->\r\n<script>\r\n!function(f,b,e,v,n,t,s)\r\n{if(f.fbq)return;n=f.fbq=function(){n.callMethod?\r\nn.callMethod.apply(n,arguments):n.queue.push(arguments)};\r\nif(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\';\r\nn.queue=[];t=b.createElement(e);t.async=!0;\r\nt.src=v;s=b.getElementsByTagName(e)[0];\r\ns.parentNode.insertBefore(t,s)}(window, document,\'script\',\r\n\'https://connect.facebook.net/en_US/fbevents.js\');\r\nfbq(\'init\', \'1686808975101519\');\r\nfbq(\'track\', \'PageView\');\r\n</script>\r\n<noscript><img height=\"1\" width=\"1\" style=\"display:none\"\r\nsrc=\"https://www.facebook.com/tr?id=1686808975101519&ev=PageView&noscript=1\"\r\n/></noscript>\r\n<!-- End Meta Pixel Code -->\r\n\r\n<!-- Google tag (gtag.js) --> <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-JM3GTXL5PG\"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag(\'js\', new Date()); gtag(\'config\', \'G-JM3GTXL5PG\'); </script>', 1, '2019-11-19 02:03:19', '2023-07-06 10:38:42'),
(5, 'facebook-link', 'facebook-link', NULL, 1, '2019-11-22 05:27:06', '2022-06-27 11:17:29'),
(6, 'twitter-link', 'twitter-link', NULL, 1, '2019-11-22 05:27:40', '2022-06-27 11:17:56'),
(7, 'Instagram Link', 'instagram-link', NULL, 1, '2019-11-22 05:28:04', '2020-12-22 06:34:39'),
(11, 'youtube-link', 'youtube-link', NULL, 1, '2020-08-08 09:15:23', '2022-06-27 10:50:39'),
(14, 'Linked In', 'linked-in', NULL, 1, '2022-06-27 11:15:40', '2022-06-27 11:15:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_modules`
--
ALTER TABLE `admin_modules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_block`
--
ALTER TABLE `cms_block`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blocks_name_unique` (`slug`);

--
-- Indexes for table `cms_page`
--
ALTER TABLE `cms_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `IDX_CMS_PAGE_IDENTIFIER` (`slug`);

--
-- Indexes for table `pledge`
--
ALTER TABLE `pledge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `redirect_url`
--
ALTER TABLE `redirect_url`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_form`
--
ALTER TABLE `registration_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blocks_name_unique` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_modules`
--
ALTER TABLE `admin_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641;

--
-- AUTO_INCREMENT for table `cms_block`
--
ALTER TABLE `cms_block`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cms_page`
--
ALTER TABLE `cms_page`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'Page ID', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pledge`
--
ALTER TABLE `pledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6600;

--
-- AUTO_INCREMENT for table `redirect_url`
--
ALTER TABLE `redirect_url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration_form`
--
ALTER TABLE `registration_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
