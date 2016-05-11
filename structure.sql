-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: pacificprime.com
-- Generation Time: Nov 22, 2013 at 09:26 AM
-- Server version: 5.5.34
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uaehealt_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `extra_form_info`
--

CREATE TABLE IF NOT EXISTS `extra_form_info` (
  `uid` int(50) NOT NULL,
  `q1` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `q2` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `q3` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `q4` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `q5` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `q6` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `q7` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `q8` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `q9` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `q10` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `q11` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `q12` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `q13` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fb_count`
--

CREATE TABLE IF NOT EXISTS `fb_count` (
  `date` date NOT NULL,
  `site` varchar(8) NOT NULL,
  `type` varchar(32) NOT NULL,
  `count` int(12) NOT NULL,
  KEY `date` (`date`),
  KEY `type` (`type`),
  KEY `site` (`site`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `form_cach`
--

CREATE TABLE IF NOT EXISTS `form_cach` (
  `uid` int(64) NOT NULL,
  `date` date NOT NULL,
  `site` varchar(32) NOT NULL,
  `page` varchar(2) NOT NULL,
  `completed` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `date` (`date`),
  KEY `site` (`site`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE IF NOT EXISTS `inquiries` (
  `inquiry_id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(50) NOT NULL DEFAULT '0',
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `changetime` datetime NOT NULL,
  `finishtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rating` char(2) COLLATE utf8_bin NOT NULL DEFAULT '',
  `source` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `type` varchar(50) COLLATE utf8_bin NOT NULL,
  `title` varchar(10) COLLATE utf8_bin NOT NULL,
  `firstname` varchar(100) COLLATE utf8_bin DEFAULT '',
  `lastname` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `phone` varchar(50) COLLATE utf8_bin NOT NULL,
  `phone2` varchar(50) COLLATE utf8_bin NOT NULL,
  `nationality` varchar(100) COLLATE utf8_bin NOT NULL,
  `countryofenquiry` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `countryofcover` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `lengthofcover` varchar(50) COLLATE utf8_bin NOT NULL,
  `outpatient` varchar(50) COLLATE utf8_bin NOT NULL,
  `dental` varchar(3) COLLATE utf8_bin NOT NULL,
  `maternity` varchar(3) COLLATE utf8_bin NOT NULL,
  `comments` text COLLATE utf8_bin NOT NULL,
  `completeinfo` text COLLATE utf8_bin NOT NULL,
  `companyname` text COLLATE utf8_bin NOT NULL,
  `priority` varchar(16) COLLATE utf8_bin NOT NULL,
  `responsibility` varchar(6) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `status` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pushedby` varchar(6) COLLATE utf8_bin NOT NULL DEFAULT '',
  `notes` text CHARACTER SET latin1 NOT NULL,
  `previousenquiries` text COLLATE utf8_bin NOT NULL,
  `printed` char(3) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `deleted` varchar(3) COLLATE utf8_bin NOT NULL DEFAULT '',
  `update` text COLLATE utf8_bin NOT NULL,
  `copied` tinyint(1) NOT NULL DEFAULT '0',
  `contact_method` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`inquiry_id`),
  KEY `rating` (`rating`),
  KEY `responsibility` (`responsibility`),
  KEY `status` (`status`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=610279 ;

-- --------------------------------------------------------

--
-- Table structure for table `inqUrl`
--

CREATE TABLE IF NOT EXISTS `inqUrl` (
  `inqUrl_id` int(50) NOT NULL AUTO_INCREMENT,
  `uid` int(50) DEFAULT NULL,
  `ip` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`inqUrl_id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=532991 ;

-- --------------------------------------------------------

--
-- Table structure for table `link_tracker`
--

CREATE TABLE IF NOT EXISTS `link_tracker` (
  `last_modify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `insurer_com` varchar(100) NOT NULL,
  `site` varchar(100) NOT NULL,
  `counter` int(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`,`insurer_com`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=345 ;

-- --------------------------------------------------------

--
-- Table structure for table `mosq_uid`
--

CREATE TABLE IF NOT EXISTS `mosq_uid` (
  `uid` int(11) NOT NULL,
  `mosq_id` char(10) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `person_id` int(50) NOT NULL AUTO_INCREMENT,
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(80) NOT NULL DEFAULT '',
  `gender` varchar(7) NOT NULL DEFAULT '',
  `dateofbirth` varchar(10) NOT NULL DEFAULT '',
  `relationship` varchar(20) NOT NULL DEFAULT '',
  `nationality` varchar(100) NOT NULL DEFAULT '',
  `uid` bigint(20) NOT NULL DEFAULT '0',
  `occupation` varchar(80) NOT NULL DEFAULT '',
  `age` int(2) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`person_id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=757793 ;

-- --------------------------------------------------------

--
-- Table structure for table `redirectTraffic`
--

CREATE TABLE IF NOT EXISTS `redirectTraffic` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `rid` int(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `source` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `lengthofcover` varchar(100) NOT NULL,
  `countryofcover` text NOT NULL,
  `fromPage` text NOT NULL,
  `interPage` text NOT NULL,
  `toPage` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30063 ;

-- --------------------------------------------------------

--
-- Table structure for table `se_info`
--

CREATE TABLE IF NOT EXISTS `se_info` (
  `uid` int(11) NOT NULL,
  `se` varchar(16) NOT NULL,
  `kw` varchar(255) NOT NULL,
  `landing_url` text NOT NULL,
  `ref_url` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `time_log`
--

CREATE TABLE IF NOT EXISTS `time_log` (
  `uid` int(50) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `urlPath`
--

CREATE TABLE IF NOT EXISTS `urlPath` (
  `uid` int(64) NOT NULL,
  `path` text NOT NULL,
  `pathcode` varchar(16) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
