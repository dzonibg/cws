-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2020 at 06:43 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cws`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `copywriter_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `body` text NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `copywriter_id`, `name`, `body`, `approved`) VALUES
(1, 1, 'Commenter', 'You are so awesome!', 1),
(2, 1, 'Jake', 'Love this guys posts!', 1),
(3, 1, 'Nikola', 'AWESOME GUY', 1),
(4, 1, 'Test Name', 'Test Comment', 0),
(5, 1, 'Another Test Name', 'Comment!', 0),
(6, 1, 'Jake', 'Thank you for everything you wrote!', 0),
(7, 2, 'Lisa', 'Hi Alison!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `copywriter`
--

CREATE TABLE `copywriter` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description_short` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `hourly_rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `copywriter`
--

INSERT INTO `copywriter` (`id`, `name`, `description_short`, `description`, `hourly_rate`) VALUES
(1, 'Nikola', 'Tech geek.', 'I love writing articles about technology.', 10),
(2, 'Alison', 'Need makeup?', 'I love make up! I love writing about new products on the market and reviewing them. Every day I wake up and the first thing that comes to my mind is what should I do to my face.', 15),
(3, 'test', 'short description', 'test description', 10),
(4, 'test', 'short description', 'test description', 10),
(5, 'test', 'short description', 'test description', 10),
(6, 'test', 'short description', 'test description', 10);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test` int(11) NOT NULL,
  `bool` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copywriter`
--
ALTER TABLE `copywriter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `copywriter`
--
ALTER TABLE `copywriter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
