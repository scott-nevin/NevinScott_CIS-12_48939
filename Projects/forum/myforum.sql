-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2015 at 04:40 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `sn2395790_entity_fanswer`
--

CREATE TABLE IF NOT EXISTS `sn2395790_entity_fanswer` (
  `tot_id` int(4) NOT NULL,
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `a_name` varchar(65) NOT NULL DEFAULT '',
  `a_email` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sn2395790_entity_fanswer`
--

INSERT INTO `sn2395790_entity_fanswer` (`tot_id`, `question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES
(3, 3, 2, 'Scott Nevin', 'scott.nevin@att.net', 'Arduino uses programs called "sketches" coded in C. ', '16/12/15 04:15:44'),
(6, 4, 1, 'John Doe', 'john.doe@website.com', 'What was the final lab assignment?', '16/12/15 04:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `sn2395790_entity_fquestions`
--

CREATE TABLE IF NOT EXISTS `sn2395790_entity_fquestions` (
  `id` int(4) NOT NULL,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sn2395790_entity_fquestions`
--

INSERT INTO `sn2395790_entity_fquestions` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES
(4, 'PHP Class', 'Questions about PHP assignments', 'Scott Nevin', 'scott.nevin@att.net', '16/12/15 04:30:52', 4, 1),
(5, 'Electronics', 'General Questions about electronics', 'Scott Nevin', 'scott.nevin@att.net', '16/12/15 04:32:09', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sn2395790_entity_fanswer`
--
ALTER TABLE `sn2395790_entity_fanswer`
  ADD PRIMARY KEY (`tot_id`);

--
-- Indexes for table `sn2395790_entity_fquestions`
--
ALTER TABLE `sn2395790_entity_fquestions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sn2395790_entity_fanswer`
--
ALTER TABLE `sn2395790_entity_fanswer`
  MODIFY `tot_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sn2395790_entity_fquestions`
--
ALTER TABLE `sn2395790_entity_fquestions`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
