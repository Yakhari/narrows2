-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 11:44 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `narrows`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminama`
--

CREATE TABLE `adminama` (
  `post_id` int(11) NOT NULL,
  `posted_by` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminama`
--

INSERT INTO `adminama` (`post_id`, `posted_by`, `content`, `date`) VALUES
(1, 'Admin', 'This is a test.', '2021-10-20 15:00:09'),
(57, 'Admin', 'lets go?', '2021-10-20 21:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `post_id` int(11) NOT NULL,
  `posted_by` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`post_id`, `posted_by`, `content`, `date`) VALUES
(1, 'Admin', 'This is a test.', '2021-10-20 15:00:09'),
(57, 'Admin', 'lets go?', '2021-10-20 21:51:55'),
(58, 'Admin', 'hey guys, do you think that Narrows could win the title?', '2021-10-20 22:08:51');

-- --------------------------------------------------------

--
-- Table structure for table `latestgp`
--

CREATE TABLE `latestgp` (
  `post_id` int(11) NOT NULL,
  `posted_by` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latestgp`
--

INSERT INTO `latestgp` (`post_id`, `posted_by`, `content`, `date`) VALUES
(1, 'Admin', 'This is a test.', '2021-10-20 15:00:09'),
(57, 'Admin', 'lets go?', '2021-10-20 21:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bio` varchar(144) DEFAULT NULL,
  `avatar` longblob DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `administrator` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`user_id`, `user_name`, `first_name`, `last_name`, `password`, `email`, `bio`, `avatar`, `time_stamp`, `administrator`) VALUES
(4, 'Dinophysis', 'Abel', 'McNabb', 'Abellovesf1', 'groot.nz@gmail.com', 'my name is abel', NULL, '2021-09-15 00:04:59', 0),
(5, 'Admin', 'Admin', 'Admin', 'root', 'Admin', 'I am an admin', NULL, '2021-10-17 00:00:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `random`
--

CREATE TABLE `random` (
  `post_id` int(11) NOT NULL,
  `posted_by` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `random`
--

INSERT INTO `random` (`post_id`, `posted_by`, `content`, `date`) VALUES
(1, 'Admin', 'This is a test.', '2021-10-20 15:00:09'),
(57, 'Admin', 'lets go?', '2021-10-20 21:51:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminama`
--
ALTER TABLE `adminama`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `latestgp`
--
ALTER TABLE `latestgp`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `random`
--
ALTER TABLE `random`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminama`
--
ALTER TABLE `adminama`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `latestgp`
--
ALTER TABLE `latestgp`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `random`
--
ALTER TABLE `random`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
