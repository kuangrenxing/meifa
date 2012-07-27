-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 07 月 27 日 09:52
-- 服务器版本: 5.1.53
-- PHP 版本: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `meifa`
--

-- --------------------------------------------------------

--
-- 表的结构 `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `about`
--

INSERT INTO `about` (`id`, `content`) VALUES
(1, '<p>我们的爱你大家大大家</p>');

-- --------------------------------------------------------

--
-- 表的结构 `careers`
--

CREATE TABLE IF NOT EXISTS `careers` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `position` varchar(64) COLLATE utf8_bin NOT NULL,
  `job` text COLLATE utf8_bin NOT NULL,
  `requirement` text COLLATE utf8_bin NOT NULL,
  `detail` text COLLATE utf8_bin NOT NULL,
  `create_time` int(10) NOT NULL,
  `update_time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `careers`
--

INSERT INTO `careers` (`id`, `position`, `job`, `requirement`, `detail`, `create_time`, `update_time`) VALUES
(1, 'dd', 'aa', 'fff', '<p>eeeeeee</p>\r\n<p>大家</p>\r\n<p>木要不</p>', 1343374323, 1343374323),
(2, 'Android程序员', '<p>1. 根据项目经理安排完成指定设计工作；</p>\r\n<p>2. 协助用户体验设计师完成相应设计工作；</p>', '<p>1. 根据项目经理安排完成指定设计工作；</p>\r\n<p>2. 协助用户体验设计师完成相应设计工作；</p>', '<p>1. 根据项目经理安排完成指定设计工作；</p>\r\n<p>2. 协助用户体验设计师完成相应设计工作；</p>', 1343381959, 1343381959);

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `contact`
--

INSERT INTO `contact` (`id`, `content`) VALUES
(1, '<p>dddddddddddd</p>\r\n<p>ddddddddddddddd</p>'),
(2, '<p>dddddddddddd</p>\r\n<p>ddddddddddddddd</p>');

-- --------------------------------------------------------

--
-- 表的结构 `hairproducts`
--

CREATE TABLE IF NOT EXISTS `hairproducts` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `category` varchar(64) COLLATE utf8_bin NOT NULL,
  `name` varchar(64) COLLATE utf8_bin NOT NULL,
  `picture` varchar(256) COLLATE utf8_bin NOT NULL,
  `price` int(6) NOT NULL,
  `detail` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `hairproducts`
--

INSERT INTO `hairproducts` (`id`, `category`, `name`, `picture`, `price`, `detail`) VALUES
(1, 'dd', 'eee', '28.jpg', 12, '<p>ddttt</p>');

-- --------------------------------------------------------

--
-- 表的结构 `hairstyleshow`
--

CREATE TABLE IF NOT EXISTS `hairstyleshow` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `category` varchar(64) COLLATE utf8_bin NOT NULL,
  `picture` varchar(255) COLLATE utf8_bin NOT NULL,
  `hairstylename` varchar(64) COLLATE utf8_bin NOT NULL,
  `price` int(8) NOT NULL,
  `detail` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `hairstyleshow`
--


-- --------------------------------------------------------

--
-- 表的结构 `hairstylist`
--

CREATE TABLE IF NOT EXISTS `hairstylist` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_bin NOT NULL,
  `sex` varchar(2) COLLATE utf8_bin NOT NULL,
  `address` varchar(128) COLLATE utf8_bin NOT NULL,
  `avatar` varchar(255) COLLATE utf8_bin NOT NULL,
  `picture` varchar(255) COLLATE utf8_bin NOT NULL,
  `motto` varchar(255) COLLATE utf8_bin NOT NULL,
  `detail` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=35 ;

--
-- 转存表中的数据 `hairstylist`
--

INSERT INTO `hairstylist` (`id`, `name`, `sex`, `address`, `avatar`, `picture`, `motto`, `detail`) VALUES
(19, '', '', '在家', '28.jpg', '暴风截sa图201233dds2258972.jpg', '工作', '<p>人家</p>'),
(18, '', '', '在家', '28.jpg', '暴风截sa图201233dds2258972.jpg', '工作', '<p>人家</p>'),
(17, '', '', '在家', '28.jpg', '暴风截sa图201233dds2258972.jpg', '工作', '<p>人家</p>'),
(16, '', '', '在家', '28.jpg', '暴风截sa图201233dds2258972.jpg', '工作', '<p>人家</p>'),
(20, '', '', '在家', '28.jpg', '暴风截sa图201233dds2258972.jpg', '工作', '<p>人家</p>'),
(21, '', '', '在家', '28.jpg', '暴风截sa图201233dds2258972.jpg', '工作', '<p>人家</p>'),
(22, '', '', '在家', '28.jpg', '暴风截sa图201233dds2258972.jpg', '工作', '<p>人家</p>'),
(23, '', '', '在家', '28.jpg', '暴风截sa图201233dds2258972.jpg', '工作', '<p>人家</p>'),
(24, '', '', '在家', '28.jpg', '暴风截sa图201233dds2258972.jpg', '工作', '<p>人家</p>'),
(25, '', '', '在家', '28.jpg', '暴风截sa图201233dds2258972.jpg', '工作', '<p>人家</p>'),
(26, '', '', '在家', '28.jpg', '暴风截sa图201233dds2258972.jpg', '工作', '<p>人家</p>'),
(27, '', '', '在家', '28.jpg', '暴风截sa图201233dds2258972.jpg', '工作', '<p>人家</p>'),
(28, '在家', '女', '工作', '暴风截sa图201233dds2258972.jpg', '22.jpg', '寺院', '<p>式的</p>'),
(29, '在家', '', '载体', '12.jpg', '28.jpg', '朝秦暮楚 ', '<p>工作</p>'),
(30, '发师傅', '女', '工作', 'Desert.jpg', 'Jellyfish.jpg', '名字', '<p>暮云春树</p>\r\n<p>朝秦暮楚</p>'),
(31, '地方', '男', '堶', '不知道.jpg', 'Hydrangeas.jpg', '载体', '<p>魂牵梦萦&nbsp;</p>'),
(32, '', '', '', 'Koala.jpg', '不知道.jpg', '', ''),
(33, '一个', '男', '地方', 'Koala.jpg', 'Desert.jpg', '埼', '<p>魂牵梦萦</p>'),
(34, '朋友', '', '地方', '不知道.jpg', '暴风截sa图201233dds2258972.jpg', '工的事', '<p>朝秦暮楚</p>');

-- --------------------------------------------------------

--
-- 表的结构 `join`
--

CREATE TABLE IF NOT EXISTS `join` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `join`
--


-- --------------------------------------------------------

--
-- 表的结构 `knowledge`
--

CREATE TABLE IF NOT EXISTS `knowledge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `create_time` int(10) NOT NULL,
  `update_time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `knowledge`
--

INSERT INTO `knowledge` (`id`, `title`, `content`, `create_time`, `update_time`) VALUES
(1, 'dd', '<p>aa</p>', 1343374149, 1343374149);

-- --------------------------------------------------------

--
-- 表的结构 `specialoffers`
--

CREATE TABLE IF NOT EXISTS `specialoffers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `create_time` int(10) NOT NULL,
  `update_time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `specialoffers`
--

INSERT INTO `specialoffers` (`id`, `title`, `content`, `create_time`, `update_time`) VALUES
(1, 'aaaaaaa', '<p>dddddddd</p>', 1343368059, 1343368059);
