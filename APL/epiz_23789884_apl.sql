-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 04:03 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apl`
--

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
`id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL,
  `match_date` date NOT NULL,
  `team_a_id` int(11) NOT NULL,
  `team_a_score` int(5) DEFAULT NULL,
  `team_b_id` int(11) NOT NULL,
  `team_b_score` int(5) DEFAULT NULL,
  `winner_team_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `season_id`, `match_date`, `team_a_id`, `team_a_score`, `team_b_id`, `team_b_score`, `winner_team_id`) VALUES
(1, 1, '2018-07-02', 11, 0, 12, 0, 12),
(2, 1, '2018-07-02', 13, 0, 14, 0, 14),
(3, 1, '2018-07-03', 11, 0, 13, 0, 13),
(4, 1, '2018-07-03', 12, 0, 14, 0, 12),
(5, 1, '2018-07-05', 11, 0, 14, 0, 11),
(6, 1, '2018-07-05', 12, 0, 13, 0, 12),
(7, 1, '2018-07-06', 11, 0, 12, 0, 12),
(8, 1, '2018-07-06', 13, 0, 14, 0, 14),
(9, 1, '2018-07-09', 11, 0, 13, 0, 13),
(10, 1, '2018-07-09', 12, 0, 14, 0, 14),
(11, 1, '2018-07-11', 11, 0, 14, 0, 11),
(12, 1, '2018-07-11', 12, 0, 13, 0, 12),
(13, 1, '2018-07-12', 11, 0, 12, 0, 0),
(14, 1, '2018-07-12', 13, 0, 14, 0, 13),
(15, 1, '2018-07-13', 11, 0, 13, 0, 13),
(16, 1, '2018-07-13', 12, 0, 14, 0, 12),
(17, 1, '2018-07-16', 11, 0, 14, 0, 0),
(18, 1, '2018-07-16', 12, 0, 13, 0, 12),
(19, 1, '2018-07-17', 11, 0, 12, 0, 12),
(20, 1, '2018-07-17', 13, 0, 14, 0, 13),
(21, 1, '2018-07-18', 11, 0, 13, 0, 11),
(22, 1, '2018-07-18', 12, 0, 14, 0, 12),
(23, 1, '2018-07-19', 11, 0, 14, 0, 11),
(24, 1, '2018-07-19', 12, 0, 13, 0, 12),
(25, 1, '2018-07-20', 11, 0, 12, 0, 12),
(26, 1, '2018-07-20', 13, 0, 14, 0, 13),
(27, 1, '2018-07-23', 11, 0, 13, 0, 11),
(28, 1, '2018-07-23', 12, 0, 14, 0, 12),
(29, 1, '2018-07-24', 11, 0, 14, 0, 11),
(30, 1, '2018-07-24', 12, 0, 13, 0, 12),
(31, 1, '2018-07-25', 11, 0, 12, 0, 11),
(32, 1, '2018-07-25', 13, 0, 14, 0, 0),
(33, 1, '2018-07-26', 11, 0, 13, 0, 11),
(34, 1, '2018-07-26', 12, 0, 14, 0, 12),
(37, 1, '2018-07-31', 11, 0, 12, 0, 0),
(38, 1, '2018-07-31', 13, 0, 14, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
`id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `category` enum('Premium','Semi-Premium','Mid-Level','New Bees','Foreign') DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL COMMENT 'Active team',
  `lifetime_sale` int(5) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `image`, `category`, `team_id`, `lifetime_sale`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Mohsin', 'Boy.png', '', 11, 25, 1, 1532963778, 1532963778),
(3, 'Jatin (C)', 'Boy2.png', '', 13, 0, 1, 1532964153, 1532964153),
(4, 'Kartik (C)', 'Boy3.png', '', 12, 32, 1, 1533021259, 1533021259),
(7, 'Ravi (C)', 'Boy6.png', '', 11, 2, 1, 1533021938, 1533021938),
(8, 'Yusuf (C)', 'Boy1.png', '', 14, 6, 1, 1533022181, 1533022181),
(9, 'Wasim Hussian', 'Boy4.png', 'Semi-Premium', 11, 7, 1, 1533022594, 1533022594),
(10, 'Udit Rana', 'Boy5.png', 'Foreign', 11, 6, 1, 1533022768, 1533022768),
(11, 'Prema Baruah', 'girls.png', 'Premium', 11, 3, 1, 1533022857, 1533022857),
(12, 'Parth Rupani', 'Boy7.png', 'New Bees', 11, 2, 1, 1533022936, 1533022936),
(13, 'Armaan Ansari', 'Boy8.png', 'Semi-Premium', 11, 2, 1, 1533023004, 1533023004),
(14, 'Vikrant', 'Boy9.png', '', 11, 1, 1, 1533023065, 1533023065),
(15, ' Prashant K', 'Boy10.png', 'Semi-Premium', 11, 1, 1, 1533023137, 1533023137),
(16, 'Tripti', 'girls1.png', '', 11, 1, 1, 1533023177, 1533023177),
(17, 'Yash S', 'Boy11.png', '', 11, 1, 1, 1533023292, 1533023292),
(18, 'Melwyn', 'Boy12.png', 'Premium', 12, 32, 1, 1533024683, 1533024683),
(19, 'Usman', 'Boy13.png', 'Mid-Level', 12, 10, 1, 1533025058, 1533025058),
(20, 'Sharukh Khan', 'Boy14.png', 'Semi-Premium', 12, 7, 1, 1533025159, 1533025159),
(21, 'Tanishka Dsouza', 'girls2.png', 'Semi-Premium', 12, 4, 1, 1533025238, 1533025238),
(22, 'Rajkumar', 'Boy15.png', '', 12, 3, 1, 1533025289, 1533025289),
(23, 'Pranjal', 'girls3.png', '', 12, 2, 1, 1533025345, 1533025345),
(24, 'Vijendra Pal', 'Boy16.png', 'Foreign', 12, 2, 1, 1533028001, 1533028001),
(25, 'Ludwina', 'girls4.png', '', 12, 1, 1, 1533028074, 1533028074),
(26, 'Gurjeet', 'Boy17.png', '', 12, 1, 1, 1533028127, 1533028127),
(27, 'Nilesh', 'Boy18.png', '', 12, 1, 1, 1533028197, 1533028197),
(28, 'Farhan Mansuri', 'Boy19.png', 'Premium', 13, 7, 1, 1533028301, 1533028301),
(29, 'Brijesh S', 'Boy20.png', 'New Bees', 13, 7, 1, 1533028966, 1533028966),
(30, 'Prashant Nagaonkar', 'Boy21.png', 'Semi-Premium', 13, 5, 1, 1533029031, 1533029031),
(31, 'Ruhi', 'girls5.png', '', 13, 4, 1, 1533029119, 1533029119),
(32, 'Amar Kurne', 'Boy22.png', 'New Bees', 13, 3, 1, 1533029173, 1533029173),
(33, 'Rocky Salvi', 'Boy23.png', 'Mid-Level', 13, 2, 1, 1533029241, 1533029241),
(34, 'Amit', 'Boy24.png', '', 13, 2, 1, 1533029288, 1533029288),
(35, 'Richard Francis', 'Boy25.png', 'Semi-Premium', 13, 1, 1, 1533029466, 1533029466),
(36, 'Sameer', 'Boy26.png', '', 14, 8, 1, 1533029640, 1533029640),
(37, 'Prakash Sharma', 'Boy27.png', 'Mid-Level', 14, 5, 1, 1533030085, 1533030085),
(38, 'Dilip Gupta', 'Boy28.png', 'New Bees', 14, 3, 1, 1533030133, 1533030133),
(39, 'Mehazabin Shaikh', 'Boy29.png', 'New Bees', 14, 3, 1, 1533030207, 1533030207),
(40, 'Jennifer', 'girls6.png', '', 14, 2, 1, 1533030280, 1533030280),
(41, 'Jesica', 'girls7.png', '', 14, 1, 1, 1533030365, 1533030365),
(42, 'Sheeba', 'girls8.png', '', 14, 1, 1, 1533030425, 1533030425),
(43, 'Brijesh M', 'Boy30.png', '', 14, 1, 1, 1533030468, 1533030468),
(44, 'Anupam Das', 'Boy31.png', 'Foreign', 14, 1, 1, 1533030515, 1533030515);

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE IF NOT EXISTS `scores` (
`id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `score` int(5) NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `player_id`, `team_id`, `match_id`, `score`, `date`, `created_at`, `updated_at`) VALUES
(1, 32, 13, 38, 0, '2018-07-31', 1533044883, 1533044883),
(2, 34, 13, 38, 0, '2018-07-31', 1533044883, 1533044883),
(3, 29, 13, 38, 0, '2018-07-31', 1533044883, 1533044883),
(4, 28, 13, 38, 0, '2018-07-31', 1533044883, 1533044883),
(5, 3, 13, 38, 0, '2018-07-31', 1533044883, 1533044883),
(6, 30, 13, 38, 0, '2018-07-31', 1533044883, 1533044883),
(7, 35, 13, 38, 0, '2018-07-31', 1533044883, 1533044883),
(8, 33, 13, 38, 0, '2018-07-31', 1533044883, 1533044883),
(9, 31, 13, 38, 0, '2018-07-31', 1533044883, 1533044883),
(10, 44, 14, 38, 0, '2018-07-31', 1533044883, 1533044883),
(11, 43, 14, 38, 0, '2018-07-31', 1533044883, 1533044883),
(12, 38, 14, 38, 0, '2018-07-31', 1533044883, 1533044883),
(13, 40, 14, 38, 0, '2018-07-31', 1533044883, 1533044883),
(14, 41, 14, 38, 0, '2018-07-31', 1533044883, 1533044883),
(15, 39, 14, 38, 0, '2018-07-31', 1533044883, 1533044883),
(16, 37, 14, 38, 0, '2018-07-31', 1533044883, 1533044883),
(17, 36, 14, 38, 0, '2018-07-31', 1533044883, 1533044883),
(18, 42, 14, 38, 0, '2018-07-31', 1533044883, 1533044883),
(19, 8, 14, 38, 0, '2018-07-31', 1533044883, 1533044883),
(20, 15, 11, 37, 0, '2018-07-31', 1533044883, 1533044883),
(21, 13, 11, 37, 0, '2018-07-31', 1533044883, 1533044883),
(22, 1, 11, 37, 0, '2018-07-31', 1533044883, 1533044883),
(23, 12, 11, 37, 0, '2018-07-31', 1533044883, 1533044883),
(24, 11, 11, 37, 0, '2018-07-31', 1533044883, 1533044883),
(25, 7, 11, 37, 0, '2018-07-31', 1533044883, 1533044883),
(26, 16, 11, 37, 0, '2018-07-31', 1533044883, 1533044883),
(27, 10, 11, 37, 0, '2018-07-31', 1533044883, 1533044883),
(28, 14, 11, 37, 0, '2018-07-31', 1533044883, 1533044883),
(29, 9, 11, 37, 0, '2018-07-31', 1533044883, 1533044883),
(30, 17, 11, 37, 0, '2018-07-31', 1533044883, 1533044883),
(31, 26, 12, 37, 0, '2018-07-31', 1533044883, 1533044883),
(32, 4, 12, 37, 0, '2018-07-31', 1533044883, 1533044883),
(33, 25, 12, 37, 0, '2018-07-31', 1533044883, 1533044883),
(34, 18, 12, 37, 0, '2018-07-31', 1533044883, 1533044883),
(35, 27, 12, 37, 0, '2018-07-31', 1533044883, 1533044883),
(36, 23, 12, 37, 0, '2018-07-31', 1533044883, 1533044883),
(37, 22, 12, 37, 0, '2018-07-31', 1533044883, 1533044883),
(38, 20, 12, 37, 0, '2018-07-31', 1533044883, 1533044883),
(39, 21, 12, 37, 0, '2018-07-31', 1533044883, 1533044883),
(40, 19, 12, 37, 0, '2018-07-31', 1533044883, 1533044883),
(41, 24, 12, 37, 0, '2018-07-31', 1533044883, 1533044883);

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE IF NOT EXISTS `season` (
`s_id` int(11) NOT NULL,
  `start_date` varchar(100) DEFAULT NULL,
  `end_date` varchar(100) DEFAULT NULL,
  `season` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`s_id`, `start_date`, `end_date`, `season`) VALUES
(1, '2018-07-02', '2018-07-31', 'Season July 18');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
`id` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `captain_id` varchar(50) NOT NULL,
  `lifetime_score` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `logo`, `tname`, `captain_id`, `lifetime_score`, `created_at`, `updated_at`, `is_active`) VALUES
(11, 'FOOTBALL.jpg', 'Spartons (Ravi)', '7', 51, 1532937290, 1532937290, 1),
(12, 'illustration.jpg', 'Vipers (Kartik)', '4', 92, 1532937320, 1532937320, 1),
(13, 'LOGONAME.png', 'Scorpions (Jatin)', '3', 31, 1532937338, 1532937338, 1),
(14, 'PUMA.jpg', 'Shooting Star (Yusuf)', '8', 31, 1532937353, 1532937353, 1);

-- --------------------------------------------------------

--
-- Table structure for table `team_player`
--

CREATE TABLE IF NOT EXISTS `team_player` (
`id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `player_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `ended_at` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `team_player`
--

INSERT INTO `team_player` (`id`, `team_id`, `player_id`, `is_active`, `created_at`, `ended_at`) VALUES
(1, 11, 1, 1, 1533039246, NULL),
(2, 11, 9, 1, 1533039260, NULL),
(3, 11, 10, 1, 1533039273, NULL),
(4, 11, 11, 1, 1533039284, NULL),
(5, 11, 7, 1, 1533039311, NULL),
(6, 11, 13, 1, 1533039321, NULL),
(7, 11, 14, 1, 1533039334, NULL),
(8, 11, 15, 1, 1533039382, NULL),
(9, 11, 16, 1, 1533039391, NULL),
(10, 11, 17, 1, 1533039404, NULL),
(11, 12, 4, 1, 1533039420, NULL),
(12, 12, 18, 1, 1533039430, NULL),
(13, 12, 19, 1, 1533039559, NULL),
(14, 12, 20, 1, 1533039584, NULL),
(15, 12, 21, 1, 1533039606, NULL),
(16, 12, 22, 1, 1533039622, NULL),
(17, 12, 23, 1, 1533039662, NULL),
(18, 12, 24, 1, 1533039906, NULL),
(19, 12, 25, 1, 1533039918, NULL),
(20, 12, 26, 1, 1533039930, NULL),
(21, 12, 27, 1, 1533039941, NULL),
(22, 13, 28, 1, 1533040150, NULL),
(23, 13, 29, 1, 1533040164, NULL),
(24, 13, 30, 1, 1533040192, NULL),
(25, 13, 31, 1, 1533040229, NULL),
(26, 13, 32, 1, 1533040290, NULL),
(27, 13, 33, 1, 1533040302, NULL),
(28, 13, 34, 1, 1533040313, NULL),
(29, 13, 35, 1, 1533040327, NULL),
(30, 14, 36, 1, 1533040355, NULL),
(31, 14, 8, 1, 1533040368, NULL),
(32, 14, 37, 1, 1533040382, NULL),
(33, 14, 38, 1, 1533040400, NULL),
(34, 14, 39, 1, 1533040412, NULL),
(35, 14, 40, 1, 1533040422, NULL),
(36, 14, 41, 1, 1533040432, NULL),
(37, 14, 42, 1, 1533040444, NULL),
(38, 14, 43, 1, 1533040459, NULL),
(39, 14, 44, 1, 1533040512, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `player_id` (`player_id`,`team_id`,`match_id`,`date`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
 ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_player`
--
ALTER TABLE `team_player`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `team_player`
--
ALTER TABLE `team_player`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
