-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2015 at 09:22 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `forumsections`
--

CREATE TABLE IF NOT EXISTS `forumsections` (
  `sectionID` varchar(10) NOT NULL DEFAULT '',
  `sections` varchar(40) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forumsections`
--

INSERT INTO `forumsections` (`sectionID`, `sections`) VALUES
('secWP', 'Microsoft Word'),
('secXL', 'Microsoft Excel'),
('secVB', 'Visual Basic .NET'),
('secWD', 'Web Design'),
('secPH', 'Beginners PHP');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `memberID` varchar(10) NOT NULL DEFAULT '',
  `username` varchar(14) NOT NULL DEFAULT '',
  `password` varchar(12) NOT NULL DEFAULT '',
  `signupDate` date NOT NULL DEFAULT '0000-00-00',
  `email` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `signupDate`, `email`) VALUES
('mem1', 'administrator', 'admin101', '2006-03-14', 'me@me.com'),
('mem2', 'newBoyJoined', 'newboy', '2006-04-06', 'newboy@me.com'),
('mem5', 'member5', 'member5', '2006-04-04', 'mem5@me.com'),
('mem3', 'thisGirl', 'thisGirl', '2006-04-06', 'thisGirl@me.com'),
('mem4', 'thatGirl', 'thatGirl', '2006-04-07', 'thatGirl@me.com');

-- --------------------------------------------------------

--
-- Table structure for table `phposts`
--

CREATE TABLE IF NOT EXISTS `phposts` (
  `threadID` varchar(8) NOT NULL DEFAULT '',
  `memberID` varchar(10) NOT NULL DEFAULT '',
  `threadTopic` varchar(50) NOT NULL DEFAULT '',
  `threadText` mediumtext NOT NULL,
  `datePosted` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phreplies`
--

CREATE TABLE IF NOT EXISTS `phreplies` (
  `ID` tinyint(6) NOT NULL,
  `threadID` varchar(10) NOT NULL DEFAULT '',
  `memberID` varchar(10) NOT NULL DEFAULT '',
  `reply` mediumtext NOT NULL,
  `dateReplied` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vbposts`
--

CREATE TABLE IF NOT EXISTS `vbposts` (
  `threadID` varchar(8) NOT NULL DEFAULT '',
  `memberID` varchar(10) NOT NULL DEFAULT '',
  `threadTopic` varchar(50) NOT NULL DEFAULT '',
  `threadText` mediumtext NOT NULL,
  `datePosted` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vbreplies`
--

CREATE TABLE IF NOT EXISTS `vbreplies` (
  `ID` tinyint(6) NOT NULL,
  `threadID` varchar(10) NOT NULL DEFAULT '',
  `memberID` varchar(10) NOT NULL DEFAULT '',
  `reply` mediumtext NOT NULL,
  `dateReplied` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wdposts`
--

CREATE TABLE IF NOT EXISTS `wdposts` (
  `threadID` varchar(8) NOT NULL DEFAULT '',
  `memberID` varchar(10) NOT NULL DEFAULT '',
  `threadTopic` varchar(50) NOT NULL DEFAULT '',
  `threadText` mediumtext NOT NULL,
  `datePosted` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wdreplies`
--

CREATE TABLE IF NOT EXISTS `wdreplies` (
  `ID` tinyint(6) NOT NULL,
  `threadID` varchar(10) NOT NULL DEFAULT '',
  `memberID` varchar(10) NOT NULL DEFAULT '',
  `reply` mediumtext NOT NULL,
  `dateReplied` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wpposts`
--

CREATE TABLE IF NOT EXISTS `wpposts` (
  `threadID` varchar(8) NOT NULL DEFAULT '',
  `memberID` varchar(10) NOT NULL DEFAULT '',
  `threadTopic` varchar(50) NOT NULL DEFAULT '',
  `postText` mediumtext NOT NULL,
  `datePosted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wpposts`
--

INSERT INTO `wpposts` (`threadID`, `memberID`, `threadTopic`, `postText`, `datePosted`) VALUES
('pos1', 'mem1', 'A Brand New Forum', 'This is a brand new forum. In this section, you can discuss everything about Microsoft Word', '2006-04-04 14:11:38'),
('pos2', 'mem1', 'Just a test', 'Just a test to see if this works', '2006-04-06 14:11:49'),
('pos3', 'mem1', 'Clip Art', 'Got some good clip art?', '2006-04-13 12:11:06'),
('pos4', 'mem1', 'Post Topic Here', 'Post Text here', '2006-04-13 18:18:12'),
('pos5', 'mem4', 'Clip Art', 'Anyone spotted any great Clip Art?', '2006-04-13 17:10:29'),
('pos7', 'mem3', 'Post Topic Here', 'Post Text here', '2006-04-17 19:10:07'),
('pos6', 'mem3', 'Post Topic Here', 'Post Text here', '2006-04-17 21:14:06'),
('pos13', 'mem3', 'Back off, thatGirl!!', 'Post Text here', '2006-04-17 21:14:21'),
('pos10', 'mem3', 'Where''s my Post Gone?', 'Post Text here', '2006-04-17 21:14:12'),
('pos11', 'mem4', 'Has this girl lost her post?', 'Post Text here', '2006-04-17 21:14:14'),
('pos12', 'mem4', 'She''s always losing things', 'Post Text here', '2006-04-17 21:14:19'),
('pos14', 'mem4', 'My new post', 'Post Text here', '2006-04-17 21:14:45'),
('pos15', 'mem4', 'Testing dates', 'Post Text here', '2006-04-17 14:19:39'),
('pos16', 'mem3', 'my new topic', 'post here', '2006-04-23 15:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `wpreplies`
--

CREATE TABLE IF NOT EXISTS `wpreplies` (
  `ID` tinyint(6) NOT NULL,
  `threadID` varchar(10) NOT NULL DEFAULT '',
  `memberID` varchar(10) NOT NULL DEFAULT '',
  `reply` mediumtext NOT NULL,
  `dateReplied` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wpreplies`
--

INSERT INTO `wpreplies` (`ID`, `threadID`, `memberID`, `reply`, `dateReplied`) VALUES
(1, 'pos1', 'mem1', 'Replying to my own post, just to see if it works!', '2006-04-05'),
(2, 'pos1', 'mem2', 'Can I reply to this as well?', '2006-04-06'),
(3, 'pos1', 'mem1', 'The more the merrier!', '2006-04-06'),
(5, 'pos1', 'mem1', 'Some text here', '2006-04-12'),
(6, 'pos1', 'mem2', 'Another comment', '2006-04-12'),
(7, 'pos1', 'mem1', 'yes, one more from me', '2006-04-13'),
(8, 'pos1', 'mem5', 'Can this actually work?', '2006-04-13'),
(9, 'pos1', 'mem4', 'Yes, I think it can!', '2006-04-13'),
(10, 'pos1', 'mem4', 'An addition to previous post', '2006-04-14'),
(11, 'pos1', 'mem4', 'testing', '2006-04-14'),
(12, 'pos1', 'mem4', 'some more details', '2006-04-14'),
(13, 'pos1', 'mem3', 'Some text here', '2006-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `xlposts`
--

CREATE TABLE IF NOT EXISTS `xlposts` (
  `threadID` varchar(8) NOT NULL DEFAULT '',
  `memberID` varchar(10) NOT NULL DEFAULT '',
  `threadTopic` varchar(50) NOT NULL DEFAULT '',
  `threadText` mediumtext NOT NULL,
  `datePosted` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xlreplies`
--

CREATE TABLE IF NOT EXISTS `xlreplies` (
  `ID` tinyint(6) NOT NULL,
  `threadID` varchar(10) NOT NULL DEFAULT '',
  `memberID` varchar(10) NOT NULL DEFAULT '',
  `reply` mediumtext NOT NULL,
  `dateReplied` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forumsections`
--
ALTER TABLE `forumsections`
  ADD PRIMARY KEY (`sectionID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `phposts`
--
ALTER TABLE `phposts`
  ADD PRIMARY KEY (`threadID`);

--
-- Indexes for table `phreplies`
--
ALTER TABLE `phreplies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vbposts`
--
ALTER TABLE `vbposts`
  ADD PRIMARY KEY (`threadID`);

--
-- Indexes for table `vbreplies`
--
ALTER TABLE `vbreplies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wdposts`
--
ALTER TABLE `wdposts`
  ADD PRIMARY KEY (`threadID`);

--
-- Indexes for table `wdreplies`
--
ALTER TABLE `wdreplies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wpposts`
--
ALTER TABLE `wpposts`
  ADD PRIMARY KEY (`threadID`);

--
-- Indexes for table `wpreplies`
--
ALTER TABLE `wpreplies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `xlposts`
--
ALTER TABLE `xlposts`
  ADD PRIMARY KEY (`threadID`);

--
-- Indexes for table `xlreplies`
--
ALTER TABLE `xlreplies`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phreplies`
--
ALTER TABLE `phreplies`
  MODIFY `ID` tinyint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vbreplies`
--
ALTER TABLE `vbreplies`
  MODIFY `ID` tinyint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wdreplies`
--
ALTER TABLE `wdreplies`
  MODIFY `ID` tinyint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wpreplies`
--
ALTER TABLE `wpreplies`
  MODIFY `ID` tinyint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `xlreplies`
--
ALTER TABLE `xlreplies`
  MODIFY `ID` tinyint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
