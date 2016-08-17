-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2016 at 11:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `needles_and_ink`
--

-- --------------------------------------------------------

--
-- Table structure for table `studios`
--

CREATE TABLE `studios` (
  `id` int(10) NOT NULL,
  `studio` varchar(80) NOT NULL,
  `address` varchar(100) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studios`
--

INSERT INTO `studios` (`id`, `studio`, `address`, `lat`, `lng`) VALUES
(3, 'Blue Lotus Tattoo', 'Unit i, 241 Rosedale Road, North Shore, Albany, Auckland, 0632', -36.741394, -36.741394),
(4, 'Ninjaflower Piercing', '90 Dixon Street, Wellington, 6011', -41.291039, 174.774948),
(5, 'Jackson Street Tattoo', '1st floor, 85 Jackson Street, Petone, Lower Hutt, 5012', -41.223881, 174.874603),
(6, 'Soular Tattoo', '30a Yaldhurst Road, Sockburn, Christchurch, 8042', -43.530815, 172.568985),
(7, 'Southern Ink Tattoo and Piercing', '144 Main South Road, Sockburn, Christchurch, 8042', -43.538265, 172.554962),
(8, 'Zealand Tattoo', '417 Colombo Street, Sydenham, Christchurch, 8023', -43.544365, 172.636673),
(9, 'Otautahi Tattoo', 'Shop 3, 62 Riccarton Road, Christchurch, 2011', -43.528980, 172.605209),
(10, 'Absolution Tattoo and Piercing', 'The Tannery, 3 Garlands Road, Woolston, Christchurch, 8023', -43.557526, 172.679749),
(11, 'D Pazz Tattoo', '388 Riccarton Road, Christchurch, 8041', -43.531307, 172.572571),
(12, 'Dr Morse Inc Tattoo', '1st Floor, James Smith Building, Cnr Manners and Cuba Street, Wellington, 6011', -41.291210, 174.776978),
(13, 'Tattoo Machine', '41 - 47 Dixon Street, Wellington, 6011', -41.291927, 174.776779),
(14, 'East Wellinkton Tattoo', '42 Caldeonia Street, Miramar, Wellington, 6022', -41.321617, 174.812912),
(15, 'Pieces of Eight Tattoo', '251 Jackson Street, Petone, Lower Hutt 5012', -41.226055, 174.881485),
(16, 'White Rabbit Ink Tattoo', '86 Pitt Street, Newton, Auckland, 1010', -36.857449, 174.759064),
(17, 'Bohemian Tattoo', 'B/14 Grey St, Tauranga, 3110', -37.684765, 176.168655),
(18, 'Spacifik Ink Tattoo', 'Top Floor, AMI Insurance Building, 131-137 Hastings Street, Napier, 4110', -39.490734, 176.918121),
(19, 'Throne Room Tattoo', '24 Kelvin Street, Invercargill, 9810', -46.411465, 168.350616),
(20, 'The Genuine Hustle Tattoo', '36 Hurstmere Road, Takapuna, 0622', -36.787952, 174.772415),
(21, 'Tiger Tattoo', '371a Grey Street, Hamilton, 3216', -37.793289, 175.293091),
(22, 'Studio 801 Tattoo', '801 Victoria Street, Hamilton, 3204', -37.781792, 175.277817),
(23, 'Skinks Tattoo', '1158 River Road, Gym Building, Flagstaff, Hamilton, 3210,-37.738096,175.252962\nTattoo New Zealand,44', -40.894627, 174.980301),
(24, 'Sinatras Tattoo', 'Level 1, The Grand Arcade, 16 Willis Street, Wellington, 6011', -41.286674, 174.775726);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `display_name` varchar(10) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `display_name`) VALUES
(1, 'Alysha', 'Nichol', 'alysha.e.n@gmail.com', '$2y$10$VU2PdfsTGMT0UHpPl4ErCO9tOwU3gsGonoMvHt0gcUPh4l4394SIq', 'alyshan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studios`
--
ALTER TABLE `studios`
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
-- AUTO_INCREMENT for table `studios`
--
ALTER TABLE `studios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
