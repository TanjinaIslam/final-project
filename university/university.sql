-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 11:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) NOT NULL,
  `uni_id` int(10) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `under_fees` varchar(255) NOT NULL DEFAULT '0',
  `post_fees` varchar(255) NOT NULL DEFAULT '0',
  `under_post` tinyint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `uni_id`, `p_name`, `under_fees`, `post_fees`, `under_post`) VALUES
(1, 1, 'CSE', '100', '200', 0),
(3, 1, 'BBA', '600', '10', 0),
(4, 2, 'cse', '10000', '200', 0),
(9, 1, 'MSc', '0', '324', 1);

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `description`, `logo`, `url`) VALUES
(1, 'AIUB', 'Where leaders are created', 'admin/assets/images/aiub.jpg', 'https://aiub.edu'),
(2, 'NSU', 'North South University', 'admin/assets/images/nsu.png', 'http://nsu.edu'),
(5, 'Daffodil University ..', 'As Flower ', 'admin/assets/images/diu.jpg', 'http://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `phone` int(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `phone`, `address`) VALUES
(4, 'Atiq', 'shakibd@gmail.com', '$2y$10$GZOW7Ecum7MSbXIrVdHUQ.8Pbd9JeK/P1Z8fRC.nyZ4Ee5i5WT4ZC', 1, 1855698135, 'Dhaka, Bangladesh'),
(5, 'Ebna Atiq', 'shakibifti@gmail.com', '$2y$10$gc7CvSd1v30dEDVszLLVW.RXPPvwMeKApC4gZoio2S.2Ci3.TulYu', 0, 1855698135, 'Dhaka, Bangladesh'),
(7, 'Rashed', 'rashed@mail.com', '$2y$10$OL71xgK70IGNg3AOAe7Q6u1rmGh9xxp6RZtKVhQtyDi2bM2W6MlVq', 3, 1855698135, 'Dhaka B'),
(27, 'admin', 'admin@mail.com', '$2y$10$i8SQFy9KBFCGtJ2Isa56pOkS26dSYHL0ipKVaPm9OwnbrL8IolzuW', 0, 123123, 'dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uni_id` (`uni_id`) USING BTREE;

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `uni_id` FOREIGN KEY (`uni_id`) REFERENCES `universities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
