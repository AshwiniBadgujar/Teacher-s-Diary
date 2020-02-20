-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2017 at 03:38 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `assess`
--

DROP TABLE IF EXISTS `assess`;
CREATE TABLE IF NOT EXISTS `assess` (
  `tid` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `exam` varchar(10) DEFAULT NULL,
  `cls` varchar(10) DEFAULT NULL,
  `no` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  KEY `tid` (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clas`
--

DROP TABLE IF EXISTS `clas`;
CREATE TABLE IF NOT EXISTS `clas` (
  `tid` int(11) DEFAULT NULL,
  `cls` varchar(10) DEFAULT NULL,
  `division` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clas`
--

INSERT INTO `clas` (`tid`, `cls`, `division`) VALUES
(1, 'S.Y.B.C.S.', 'A'),
(1, 'T.Y.BCS.', 'B'),
(1, 'MCS', 'I'),
(1, 'F.Y.B.C.S.', 'A'),
(1, 'MCA', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

DROP TABLE IF EXISTS `dept`;
CREATE TABLE IF NOT EXISTS `dept` (
  `dno` int(11) NOT NULL,
  `dname` varchar(30) DEFAULT NULL,
  `faculty` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dno`, `dname`, `faculty`) VALUES
(1, 'Computer Science', 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `io`
--

DROP TABLE IF EXISTS `io`;
CREATE TABLE IF NOT EXISTS `io` (
  `tid` int(11) DEFAULT NULL,
  `ioid` int(11) NOT NULL AUTO_INCREMENT,
  `dt` date NOT NULL,
  `tin` time DEFAULT NULL,
  `tout` time DEFAULT NULL,
  PRIMARY KEY (`ioid`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `io`
--

INSERT INTO `io` (`tid`, `ioid`, `dt`, `tin`, `tout`) VALUES
(1, 1, '1993-10-14', '08:00:00', '08:50:00'),
(1, 2, '1993-10-14', '10:00:00', '12:00:00'),
(1, 3, '1994-10-14', '07:00:00', '08:00:00'),
(1, 4, '1994-10-14', '04:00:00', '05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `leav`
--

DROP TABLE IF EXISTS `leav`;
CREATE TABLE IF NOT EXISTS `leav` (
  `tid` int(11) DEFAULT NULL,
  `leaveno` int(11) NOT NULL AUTO_INCREMENT,
  `dt` date DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `app` varchar(5) DEFAULT NULL,
  `reason` varchar(30) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL,
  PRIMARY KEY (`leaveno`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leav`
--

INSERT INTO `leav` (`tid`, `leaveno`, `dt`, `type`, `app`, `reason`, `noofdays`) VALUES
(1, 4, '1993-10-14', 'Duty', 'YES', 'assessment', 2),
(1, 3, '1993-10-14', 'Casual', 'YES', 'trip', 5);

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

DROP TABLE IF EXISTS `master`;
CREATE TABLE IF NOT EXISTS `master` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) DEFAULT NULL,
  `mob` varchar(10) DEFAULT NULL,
  `al_mob` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`tid`, `email`, `mob`, `al_mob`) VALUES
(1, 'ashwini.badgujar@ymail.com', '8806022246', '9921197741');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

DROP TABLE IF EXISTS `meetings`;
CREATE TABLE IF NOT EXISTS `meetings` (
  `tid` int(11) DEFAULT NULL,
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `dt` date DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `ftime` time DEFAULT NULL,
  `ttime` time DEFAULT NULL,
  `nature` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mid`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`tid`, `mid`, `dt`, `type`, `ftime`, `ttime`, `nature`) VALUES
(1, 6, '1994-10-14', 'College', '05:00:00', '06:00:00', 'internal');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

DROP TABLE IF EXISTS `other`;
CREATE TABLE IF NOT EXISTS `other` (
  `tid` int(11) DEFAULT NULL,
  `dt` date DEFAULT NULL,
  `dur` varchar(30) DEFAULT NULL,
  KEY `tid` (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`tid`, `dt`, `dur`) VALUES
(1, '1994-10-14', 'FOURTEEN');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `tid` int(11) DEFAULT NULL,
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(20) DEFAULT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `lecalloc` int(11) DEFAULT NULL,
  `lecactual` int(11) DEFAULT NULL,
  PRIMARY KEY (`pid`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`tid`, `pid`, `month`, `topic`, `lecalloc`, `lecactual`) VALUES
(1, 1, 'May', 'intro', 5, NULL),
(1, 2, 'August', 'MATHS', 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE IF NOT EXISTS `setting` (
  `tid` int(11) DEFAULT NULL,
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `dt` date DEFAULT NULL,
  `exam` varchar(10) DEFAULT NULL,
  `cls` varchar(10) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sid`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`tid`, `sid`, `dt`, `exam`, `cls`, `title`) VALUES
(1, 4, '1993-10-14', 'TYBCS', 'TY', 'DIP'),
(1, 5, '1993-10-16', 'FYBCS', 'FY', 'MATHS'),
(1, 6, '1994-10-14', 'INTERNAL', '', 'DIP'),
(1, 7, '1993-10-14', 'MCA', 'MCA', 'ENGLISH');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

DROP TABLE IF EXISTS `sub`;
CREATE TABLE IF NOT EXISTS `sub` (
  `tid` int(11) DEFAULT NULL,
  `sub` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`tid`, `sub`) VALUES
(1, 'CS - 301'),
(1, 'CS - 201'),
(1, 'CS - 501'),
(1, 'CS - 601');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `scode` varchar(10) NOT NULL,
  `sname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`scode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`scode`, `sname`) VALUES
('CS - 103', 'Distributed Databases'),
('CS - 101', 'Principle Of Programming Languages'),
('CS - 104', 'Network Programing'),
('CS - 102', 'dotnet');

-- --------------------------------------------------------

--
-- Table structure for table `super`
--

DROP TABLE IF EXISTS `super`;
CREATE TABLE IF NOT EXISTS `super` (
  `tid` int(11) DEFAULT NULL,
  `dt` date DEFAULT NULL,
  `exam` varchar(10) DEFAULT NULL,
  `cls` varchar(10) DEFAULT NULL,
  `dur` varchar(30) DEFAULT NULL,
  KEY `tid` (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `tid` int(11) DEFAULT NULL,
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `dt` date DEFAULT NULL,
  `ftime` time DEFAULT NULL,
  `ttime` time DEFAULT NULL,
  `cls` varchar(10) DEFAULT NULL,
  `division` varchar(10) DEFAULT NULL,
  `topic` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`task_id`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`tid`, `task_id`, `dt`, `ftime`, `ttime`, `cls`, `division`, `topic`) VALUES
(1, 36, '1994-10-13', '06:00:00', '05:00:00', 'MCS', 'I', 'mthu'),
(1, 37, '1994-10-14', '04:00:00', '06:00:00', 'S.Y.B.C.S.', 'A', 'Metrics');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `teachid` int(11) DEFAULT NULL,
  `dno` int(11) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `quali` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  `mob` varchar(10) DEFAULT NULL,
  `al_mon` varchar(10) DEFAULT NULL,
  `head` enum('Y','N') DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  KEY `tid` (`teachid`),
  KEY `dno` (`dno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teachid`, `dno`, `fname`, `lname`, `quali`, `dob`, `doj`, `emailid`, `mob`, `al_mon`, `head`, `password`) VALUES
(1, 1, 'Ashwini', 'Badgujar', 'M.Phill.', '1985-06-06', '2010-03-01', 'ashwini.badgujar@ymail.com', '8806022246', '9921197741', 'N', 'Ashu');

-- --------------------------------------------------------

--
-- Table structure for table `teach_sub`
--

DROP TABLE IF EXISTS `teach_sub`;
CREATE TABLE IF NOT EXISTS `teach_sub` (
  `tid` int(11) NOT NULL,
  `sub` varchar(10) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `division` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `tid` int(11) DEFAULT NULL,
  `lno` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(20) DEFAULT NULL,
  `ftime` time DEFAULT NULL,
  `ttime` time DEFAULT NULL,
  `roomno` int(11) DEFAULT NULL,
  `sub` varchar(10) DEFAULT NULL,
  `cls` varchar(10) DEFAULT NULL,
  `division` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`lno`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`tid`, `lno`, `day`, `ftime`, `ttime`, `roomno`, `sub`, `cls`, `division`) VALUES
(1, 72, 'Wednesday', '10:30:00', '06:00:00', 99, 'CS - 301', 'S.Y.B.C.S.', 'A'),
(1, 65, 'Saturday', '04:00:00', '05:00:00', 607, 'CS - 201', 'MCS', 'I'),
(1, 66, 'Tuesday', '13:00:00', '14:00:00', 89, 'CS - 301', 'S.Y.B.C.S.', 'A'),
(1, 69, 'Friday', '14:00:00', '15:00:00', 78, 'CS - 301', 'S.Y.B.C.S.', 'A'),
(1, 73, 'Monday', '10:30:00', '06:00:00', 23, 'CS - 301', 'S.Y.B.C.S.', 'A');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
