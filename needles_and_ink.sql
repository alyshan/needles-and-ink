-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2016 at 02:03 PM
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `studio_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `studio_id`, `created_at`, `update_at`) VALUES
(1, 'this one is super awesome', 1, 1, '2016-08-25 05:25:57', '2016-08-25 05:25:57'),
(2, 'this is so great! edited by an admin!', 15, 1, '2016-08-25 05:26:26', '2016-08-25 05:26:26'),
(3, 'look at me i am doing stuff! ', 16, 1, '2016-08-25 05:26:26', '2016-08-25 05:26:26'),
(4, 'changing things! thiiings', 1, 1, '2016-08-25 07:55:20', '2016-08-25 07:55:20'),
(5, 'updated!  wooh!', 1, 1, '2016-08-25 07:56:33', '2016-08-25 07:56:33'),
(6, 'doing things again! and its still not working', 1, 1, '2016-08-25 08:03:48', '2016-08-25 08:03:48'),
(7, 'oh look a thing!', 1, 2, '2016-08-25 08:20:28', '2016-08-25 08:20:28'),
(8, 'comments', 1, 4, '2016-08-25 20:56:45', '2016-08-25 20:56:45'),
(9, 'commment!', 1, 1, '2016-08-26 08:53:16', '2016-08-26 08:53:16'),
(10, 'comment!', 24, 1, '2016-08-26 11:30:59', '2016-08-26 11:30:59'),
(11, 'comment!', 24, 1, '2016-08-26 11:37:36', '2016-08-26 11:37:36'),
(12, 'comment!', 24, 1, '2016-08-26 11:41:59', '2016-08-26 11:41:59'),
(13, 'comment!', 24, 1, '2016-08-26 11:55:47', '2016-08-26 11:55:47'),
(14, 'comment!', 24, 1, '2016-08-26 11:56:22', '2016-08-26 11:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `suggest`
--

CREATE TABLE `suggest` (
  `id` int(10) UNSIGNED NOT NULL,
  `studio_name` varchar(100) NOT NULL,
  `studio_email` varchar(50) NOT NULL,
  `studio_phone` varchar(20) NOT NULL,
  `studio_address1` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `studio_address2` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suggest`
--

INSERT INTO `suggest` (`id`, `studio_name`, `studio_email`, `studio_phone`, `studio_address1`, `studio_address2`, `description`, `image`, `user_id`) VALUES
(1, 'Blue Lotus Tattoo', 'bluelotus@gmail.com', '0423455122', 'unit i, 28 main street', 'Auckland', 'We are a Professional, Health Licensed Tattoo Studio providing high quality tattooing services.\n        Our aim is to provide you with exceptional workmanship and world class standards, accompanied by friendly, personable service, in a safe and hygienic environment.\n        You have the right to a great tattoo and an unforgettable experience!\n        Our work speaks for itself!\n        <br>\n        <ul>The Team.....</ul>\n        <ul>Clinton Jones (Tattoo Artist / Owner)</ul>\n        <ul>Mel Jones (Boss Lady / Manager / Owner)</ul>\n        <ul>Adam Cooley (Adamski)(Tattoo Artist)</ul>\n        <ul>Alex Hart (Tattoo Artist)</ul>\n        <br>\n        We Proudly Use Equipment Supplied by: Lucky Supply Tattoo Supply, Western Magnetic and Alla Prima \n        Ink''s by: Waverly, Intenze, Starbright, Dynamic, Alla Prima, Fusion & Classic Colour System''s.\n        Needle''s by: Luckys Supply Tattoo Supply, Troy Glen and Western Magnetic - Clint also makes his own, keeping the art of needle making alive.\n        <br>\n        <br>\n        Machine''s by: Jimmy Whitlock @ Lucky Supply Tattoo Supply, Neuma, Mickey Sharp''z, Eikon & Swash drive, Aaron Cain, Marv Learning, Swash drivewhip, Dre Rock @ Lucky Tattoo Supply.', 'http://placehold.it/570x570', 1),
(2, 'Ninjaflower Piercing', 'ninjaflower@test.com', '12345678', '79 Dixon Street', 'Wellington', 'A new experience with an old tradition.\r\n\r\nBody piercing by Scott Jania, one of New Zealand''s two members of The Association of Professional Piercers. 21 years of experience - safe, simple, gentle.\r\n<br>\r\n<br>\r\nAll certified implant grade titanium so there is no risk of any allergy with the jewellery. US made.\r\n<br>\r\n<br>\r\nWe strive to provide the cleanest, best quality piercing to you. We use a Statim 2000 autoclave. This allows us to sterilise all components for each piercing, including the gloves, in an individual cycle right before your procedure. We use only Nitrile gloves, so there is no concern of latex allergies.\r\n<br>\r\n<br>\r\nWe implement the use of sterile technique without clamps with each piercing procedure. By autoclave sterilising every item which will be used in the piercing procedure immediately prior to use, handling these items using sterile technique, then disposing of everything used, we reduce the risk of disease or infection transmission to you, our client. This allows for faster healing with minimal risk of complications.\r\n<br>\r\n<br>\r\nOur piercing techniques do not require the use of clamps, pliers, or other contrivances, which may cause damage to the tissue being pierced. By using gentle tissue massage and alignment techniques, we can provide you with a piercing which looks and feels good from day one.\r\n<br>\r\n<br>\r\nOur suggested aftercare for new piercings are simple to follow and requires no extra effort on your part. By providing you with a safe, simple, and gentle piercing, we eliminate the need for the use of complicated or risky, untested chemical aftercare regimes.\r\n<br>\r\n<br>\r\nOur jewellery for use in new piercings is certified to meet ASTM standards deemed safe for surgical implant materials. This gives you a guarantee that the materials placed in your new piercings have been scientifically tested to be safe for prolonged and repeated wear in the body. For initial piercings, we carry: glass (pyrex and quartz) and internally threaded ti', 'http://placehold.it/570x570', 2),
(3, 'Ninja', 'Pretty cool', 'http://www.domain.co', '123 TestStrreet', 'Levin1234566789', 'Pretty cool', '', 16),
(4, 'test', 'this is that thing', 'email@email.com', '66 Fyvie Avenue', 'Tawa/Wellington1234567', 'this is that thing', '', 1);

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
  `display_name` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `privilege` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `display_name`, `privilege`) VALUES
(1, 'apple', 'nichol', 'alysha.e.n@gmail.com', '$2y$10$VU2PdfsTGMT0UHpPl4ErCO9tOwU3gsGonoMvHt0gcUPh4l4394SIq', 'alyshan', 'admin'),
(15, 'cameron', 'nichol', 'nichol.cameron.cn@gmail.com', '$2y$10$MZJmk9MJrOG/wb08o9YpzOsB0/TLhmAE1vrBGdqg1zN3ophIUQ..2', 'camminin', 'user'),
(16, 'test', 'user', 'test@test.net', '$2y$10$tj0ScXGLJ9VmW.dITWNApO.7r0/PKq1Fl6fqyu.ibnjgh8wfDA0GO', 'Auser111', 'user'),
(24, 'Alysha', 'Nichol', 'alysh@mdkg.co', '$2y$10$uHiOxhMdeobLhm/tE5mhBOpN2oOPChlY4aUOt5cb5QUz7sT0BZOR2', 'alysha1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`studio_id`);

--
-- Indexes for table `suggest`
--
ALTER TABLE `suggest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `suggest`
--
ALTER TABLE `suggest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`studio_id`) REFERENCES `suggest` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
