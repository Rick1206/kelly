-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2013 at 08:19 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kellydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelly_admin`
--

CREATE TABLE IF NOT EXISTS `kelly_admin` (
  `adid` smallint(5) NOT NULL AUTO_INCREMENT,
  `adname` varchar(60) NOT NULL DEFAULT '',
  `ademail` varchar(60) NOT NULL DEFAULT '',
  `adpassword` varchar(34) NOT NULL DEFAULT '',
  `lastlogin` int(11) NOT NULL DEFAULT '0',
  `lastip` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`adid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kelly_admin`
--

INSERT INTO `kelly_admin` (`adid`, `adname`, `ademail`, `adpassword`, `lastlogin`, `lastip`) VALUES
(3, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1364273481, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `kelly_banners`
--

CREATE TABLE IF NOT EXISTS `kelly_banners` (
  `bid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `src` varchar(255) NOT NULL,
  `title_cn` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `orderby` int(4) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `kelly_banners`
--

INSERT INTO `kelly_banners` (`bid`, `src`, `title_cn`, `title_en`, `photo`, `url`, `update_date`, `orderby`) VALUES
(9, '', 'bafbad213213', 'abafda321321321321', '514f183b2575b.jpg', '', '2013-03-18 16:00:00', 1321),
(11, '', '321', '', '514f1a9831424.jpg', '', '2013-03-24 15:24:08', 321),
(12, '', '321321', '', '514f1ac6dc294.jpg', '', '2013-03-24 15:24:54', 1),
(13, '', '321', '', '514f1af00aa41.jpg', '', '2013-03-24 15:25:36', 321);

-- --------------------------------------------------------

--
-- Table structure for table `kelly_comments`
--

CREATE TABLE IF NOT EXISTS `kelly_comments` (
  `cid` int(8) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `usex` tinyint(1) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `uhomepage` varchar(255) NOT NULL,
  `umessage` mediumtext NOT NULL,
  `dateline` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `orderby` tinyint(4) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `kelly_comments`
--

INSERT INTO `kelly_comments` (`cid`, `uname`, `usex`, `uemail`, `uhomepage`, `umessage`, `dateline`, `orderby`) VALUES
(12, '321', 0, '3213', '321', '321', '2013-03-11 16:00:00', 0),
(19, 'fdsafds', 1, 'fdsafds', 'fdsafs', 'afdasfdfdsa', '2013-03-26 04:37:04', 0),
(20, 'ewqee', 0, 'ewqewq', 'ewqewq', 'ewqewq', '2013-03-26 04:41:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kelly_downloads`
--

CREATE TABLE IF NOT EXISTS `kelly_downloads` (
  `did` int(8) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `intro_cn` varchar(250) CHARACTER SET gbk NOT NULL,
  `intro_en` varchar(250) CHARACTER SET gbk NOT NULL,
  `title_en` varchar(250) CHARACTER SET gbk NOT NULL DEFAULT '',
  `title_cn` varchar(250) CHARACTER SET gbk NOT NULL DEFAULT '',
  `description_en` mediumtext CHARACTER SET gbk NOT NULL,
  `description_cn` mediumtext CHARACTER SET gbk NOT NULL,
  `dateline` date NOT NULL DEFAULT '0000-00-00',
  `photo` varchar(250) CHARACTER SET gbk NOT NULL,
  `image` varchar(250) CHARACTER SET gbk NOT NULL,
  `orderby` tinyint(4) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `kelly_downloads`
--

INSERT INTO `kelly_downloads` (`did`, `url`, `intro_cn`, `intro_en`, `title_en`, `title_cn`, `description_en`, `description_cn`, `dateline`, `photo`, `image`, `orderby`) VALUES
(10, '', '', '', '321321', '321321', '', '', '2013-03-18', '514ff0e490f25.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelly_news`
--

CREATE TABLE IF NOT EXISTS `kelly_news` (
  `nid` int(8) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `intro_cn` varchar(250) CHARACTER SET gbk NOT NULL,
  `intro_en` varchar(250) CHARACTER SET gbk NOT NULL,
  `title_en` varchar(250) CHARACTER SET gbk NOT NULL DEFAULT '',
  `title_cn` varchar(250) CHARACTER SET gbk NOT NULL DEFAULT '',
  `description_en` mediumtext CHARACTER SET gbk NOT NULL,
  `description_cn` mediumtext CHARACTER SET gbk NOT NULL,
  `dateline` date NOT NULL DEFAULT '0000-00-00',
  `photo` varchar(250) CHARACTER SET gbk NOT NULL,
  `image` varchar(250) CHARACTER SET gbk NOT NULL,
  `orderby` tinyint(4) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `kelly_news`
--

INSERT INTO `kelly_news` (`nid`, `url`, `intro_cn`, `intro_en`, `title_en`, `title_cn`, `description_en`, `description_cn`, `dateline`, `photo`, `image`, `orderby`) VALUES
(17, '', '', '', 'fdasfds', '321321', 'dsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsa''<br><br><br>dsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsa<br><br>dsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsa''<br><br><br>dsfsafdsadsfsafdsadsfsafdsadsfsafdsadsfsafdsa<br>', '321321', '2013-03-05', '514f419f347a2.jpg', '', 1),
(18, '', '', '', 'testing2', 'testing2', 'testing2<br>', 'testing2', '2013-03-12', '514f41b3ca73f.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kelly_work`
--

CREATE TABLE IF NOT EXISTS `kelly_work` (
  `wid` int(8) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `url` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `intro_cn` varchar(250) CHARACTER SET gbk NOT NULL,
  `intro_en` varchar(250) CHARACTER SET gbk NOT NULL,
  `title_en` varchar(250) NOT NULL,
  `title_cn` varchar(250) CHARACTER SET gbk NOT NULL,
  `description_en` mediumtext CHARACTER SET gbk NOT NULL,
  `description_cn` mediumtext CHARACTER SET gbk NOT NULL,
  `dateline` date NOT NULL DEFAULT '0000-00-00',
  `photo` varchar(250) CHARACTER SET gbk NOT NULL,
  `image` varchar(250) CHARACTER SET gbk NOT NULL,
  `orderby` tinyint(4) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kelly_work`
--

INSERT INTO `kelly_work` (`wid`, `cid`, `url`, `intro_cn`, `intro_en`, `title_en`, `title_cn`, `description_en`, `description_cn`, `dateline`, `photo`, `image`, `orderby`) VALUES
(2, 11, '', '', '', '321', '321', '321', '321', '2013-03-01', '51514bc102e65.jpg', '', 11);

-- --------------------------------------------------------

--
-- Table structure for table `kelly_work_category`
--

CREATE TABLE IF NOT EXISTS `kelly_work_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `description` mediumtext CHARACTER SET utf8 NOT NULL,
  `dateline` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `orderby` tinyint(4) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Dumping data for table `kelly_work_category`
--

INSERT INTO `kelly_work_category` (`category_id`, `category_name`, `description`, `dateline`, `orderby`) VALUES
(11, '123', '321321', '2013-02-28 16:00:00', 0),
(12, '321321', '321321', '2013-03-07 16:00:00', 0),
(13, '321321', '321321', '2013-03-04 16:00:00', 11);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
