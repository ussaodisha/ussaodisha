-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 04:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ussaodisha`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `image_name`, `date`) VALUES
(8, '1606760243_a26fe41788b46e7f1a27.jpg', '30-Nov-2020');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Post_id` int(200) NOT NULL,
  `Post_title` varchar(255) NOT NULL,
  `Post_description` text NOT NULL,
  `Post_date` varchar(200) NOT NULL,
  `Post_owner` int(200) NOT NULL,
  `Post_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Post_id`, `Post_title`, `Post_description`, `Post_date`, `Post_owner`, `Post_image`) VALUES
(13, 'test1', 'test1', '30-Nov-2020', 1, '1606758764_820e3908f336a1392265.jpg'),
(14, 'second data', 'second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post second post  post ', '30-Nov-2020', 1, '1606758806_4531d2645e36f97783b0.jpg'),
(15, 'This is Second Post From Dhiraj', 'data not Available', '30-Nov-2020', 1, '1606760338_2753a8f89974e04bf5b8.jpg'),
(16, 'test4', 'test4', '30-Nov-2020', 1, '1606760456_c8f9e4ca58dafb319e6d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `Sub_id` int(255) NOT NULL,
  `Emails` varchar(255) NOT NULL,
  `Sub_name` varchar(255) DEFAULT 'null',
  `Sub_message` varchar(255) DEFAULT 'null',
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`Sub_id`, `Emails`, `Sub_name`, `Sub_message`, `Date`, `Time`) VALUES
(8, 'dhiraj@gmail.com', NULL, NULL, '30-Nov-2020', '02-11-25-am'),
(10, 'dhirajdeshmukh1922001@gmail.com', 'Dhiraj Deshmukh', 'admin', '30-Nov-2020', '10-11-35-am');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Role` int(1) NOT NULL DEFAULT 0,
  `State` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Zip` int(50) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Name`, `Surname`, `Email`, `Password`, `Role`, `State`, `City`, `Zip`, `profile_image`, `Created_At`) VALUES
(1, 'Dhiraj', 'Deshmukh', 'dhiraj@gmail.com', '$2y$10$xDhYiYAeTrluAMx2/kY0GueTT4p0uKR.sLPsJABK4AvZg.3tteCKq', 1, 'Maharashtra', 'Bhusawal', 425201, '1606581004_3d8fb2676470842cc7a3.jpg', '2020-09-28 07:36:49'),
(2, 'Amol', 'Patil', 'amol@gmail.com', '$2y$10$bxA1qj0BDqHxDtzLs0JSdeW6Kp0A/4f9U9JPHhVMpZSJuuyYnhq0i', 0, 'Maharashtra', 'Mumbai', 400001, 'dhiraj.jpg', '2020-09-28 08:27:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Post_id`),
  ADD KEY `UserKey` (`Post_owner`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`Sub_id`),
  ADD UNIQUE KEY `Emails` (`Emails`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `Sub_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `UserKey` FOREIGN KEY (`Post_owner`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
