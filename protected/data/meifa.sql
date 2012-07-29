-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2012 年 07 月 30 日 02:19
-- 服务器版本: 5.5.24
-- PHP 版本: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
  `preface` varchar(400) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `about`
--

INSERT INTO `about` (`id`, `preface`, `content`) VALUES
(1, '文化传媒fdsaf有限公司是一家集品牌策划推广，演绎庆典执行，高端公关传播，影视制作发行等为一体的大型专业文化传媒产业企业。公司业务立足安徽，辐射全国，在安庆，芜湖，六安等地建有分支机构，在上海，杭州，成都，北京等省市设有办事处。在香港，澳门，台湾有着直接业务联系和战略合作关系，在各级政府机关和文化界，企业界建立了良好的合作关系', '<p>123r32r32堙塔吉克斯坦我们的爱你大家大大家塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦</p>\r\n<p>2塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克</p>\r\n<p>3斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦塔吉克斯坦</p>');

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
(1, '<p>dddddddddddd</p>\r\n<p>ddddddddddddddd</p>');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `hairproducts`
--

INSERT INTO `hairproducts` (`id`, `category`, `name`, `picture`, `price`, `detail`) VALUES
(1, 'dd', 'eee', '90909-Umbrella_corp_V_3_0_0_by_GrungeStyle.jpg', 12, '<p>ddttt</p>'),
(2, '11', 'ee', '6782046992_811be2417a_m.jpg', 33, '<p>dd</p>\r\n<p>fffffffffffffffffffffdddddddddddddddd</p>'),
(3, 'ggg', 'eeee', 'Ubuntu20.jpg', 44, '<p>eeeeeeeeeeee</p>\r\n<p>ssssssssssssss</p>'),
(4, 'gg', 'tttttttt', 'Ubuntu13.jpg', 55, '<p>44442222222</p>'),
(5, 'iiiiii', 'gg', '11062619185974.jpg', 66, '<p>hhhhhhh</p>'),
(6, 'gg', '33', 'Ubuntu26.jpg', 111, '<p>eeeee</p>'),
(7, 'ggg', 'rr', 'Ubuntu12.jpg', 22, '<p>eeeeee</p>'),
(8, 'hh', 'gg', '4.jpg', 44, '<p>eeee</p>');

-- --------------------------------------------------------

--
-- 表的结构 `hairstyleshow`
--

CREATE TABLE IF NOT EXISTS `hairstyleshow` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `category` varchar(64) COLLATE utf8_bin NOT NULL,
  `picture` varchar(255) COLLATE utf8_bin NOT NULL,
  `hairstylename` varchar(64) COLLATE utf8_bin NOT NULL,
  `sequence` int(6) NOT NULL,
  `price` int(8) NOT NULL,
  `detail` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `hairstyleshow`
--

INSERT INTO `hairstyleshow` (`id`, `category`, `picture`, `hairstylename`, `sequence`, `price`, `detail`) VALUES
(1, '沙', '6782046992_811be2417a_m.jpg', '式霜花', 0, 44, '<p>折魂牵梦萦需要fdsafdsafdsfdsf无可奈何ffdsa</p>\r\n<p>城城朝秦暮楚朝秦暮楚</p>'),
(2, '沙', '6782046992_811be2417a_n.jpg', '笔地', 0, 42, '<p>门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早</p>\r\n<p>于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于门口早于</p>'),
(3, '方放御用', 'Ubuntu05.jpg', '需要需要', 0, 42, '<p>魂牵梦萦地魂牵梦萦地魂牵梦萦地魂牵梦萦地魂牵梦萦地魂牵梦萦地魂牵梦萦地魂牵梦萦地魂牵梦萦地魂牵梦萦地魂牵梦萦地魂牵梦萦地魂牵梦萦地魂牵梦萦地魂牵梦萦地</p>'),
(4, '放辨', 'Ubuntu05.jpg', '辨辨', 0, 11, '<p>杂感奇妙城区城ewqw杂感奇妙城区城ewqw杂感奇妙城区城ewqw杂</p>\r\n<p>感奇妙城区城ewqw杂感奇妙城区城ewqw</p>'),
(5, '5在', '11062619185974.jpg', '67', 0, 44, '<p>魂牵梦萦需要</p>'),
(6, 'gg', '6782046992_811be2417a_n.jpg', 'g', 0, 12, '<p>fdsafsda</p>'),
(7, 'gggggggg', '11062619185974.jpg', 'ee', 7, 34, '<p>fdsa</p>'),
(8, 'gfd', '90909-Umbrella_corp_V_3_0_0_by_GrungeStyle.jpg', 'ss', 8, 33, '<p>fdsafdsaf</p>');

-- --------------------------------------------------------

--
-- 表的结构 `hairstylist`
--

CREATE TABLE IF NOT EXISTS `hairstylist` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_bin NOT NULL,
  `sex` varchar(2) COLLATE utf8_bin NOT NULL,
  `category` varchar(64) COLLATE utf8_bin NOT NULL,
  `sequence` int(6) NOT NULL,
  `address` varchar(128) COLLATE utf8_bin NOT NULL,
  `avatar` varchar(255) COLLATE utf8_bin NOT NULL,
  `picture` varchar(255) COLLATE utf8_bin NOT NULL,
  `motto` varchar(255) COLLATE utf8_bin NOT NULL,
  `detail` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `hairstylist`
--

INSERT INTO `hairstylist` (`id`, `name`, `sex`, `category`, `sequence`, `address`, `avatar`, `picture`, `motto`, `detail`) VALUES
(39, 'hh', '男', '高级发型师', 0, 'tttfff', '12.jpg', 'Ubuntu24.jpg', 'ss', '<p>fdsafdsaf</p>'),
(38, '00', '女', '高级发型师', 0, 'dddddddd', '71cf3bc79f3df8dce2ba3520cd11728b461028ff.jpg', '11062619185974.jpg', 'ee', '<p>fdasf</p>'),
(37, 'gg', '女', 'jkk', 0, 'fdsa ', '4f4fcf68459be4b22d8e670f34c23036.jpg', 'Ubuntu20.jpg', '中级发型师', '<p>pppppppppppppppppppp</p>'),
(35, '22', '男', '中级发型师', 0, '朝秦暮楚', '27.jpg', '28.jpg', '44', '<p>fdasfdsa城魂牵梦萦</p>'),
(36, '2', '男', '中级发型师', 0, '城区魂牵梦萦', '12.jpg', '6782046992_811be2417a_n.jpg', '朝秦暮楚客户的满意就是我们最大的幸福！客户的满意就是我们最大的幸福！客户的满意就是我们最大的幸福！', '<p>魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦</p>\r\n<p>萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦</p>'),
(40, '五', '女', ' 五', 0, '一 一', '28.jpg', '6782046992_811be2417a_m.jpg', '末期', '<p>魂牵梦萦</p>'),
(41, '一', '女', '魂牵梦萦', 1, '一', '90909-Umbrella_corp_V_3_0_0_by_GrungeStyle.jpg', 'Ubuntu05.jpg', '客户的满意就是我们最大的幸福！客户的满意就是我们最大的幸福！客户的满意就是我们最大的幸福！', '<p>魂牵梦萦</p>');

-- --------------------------------------------------------

--
-- 表的结构 `join`
--

CREATE TABLE IF NOT EXISTS `join` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `join`
--

INSERT INTO `join` (`id`, `content`) VALUES
(1, '<p>\r\n<p>调用&nbsp;<code>find</code>&nbsp;时，我们使用&nbsp;<code>$condition</code>&nbsp;和&nbsp;<code>$params</code>&nbsp;指定查询条件。此处&nbsp;<code>$condition</code>&nbsp;可以是 SQL 语句中的<code>WHERE</code>&nbsp;字符串，<code>$params</code>&nbsp;则是一个参数数组，其中的值应绑定到&nbsp;<code>$condation</code>&nbsp;中的占位符。例如：</p>\r\n<div class="hl-code">\r\n<div class="hl-main">\r\n<pre>// 查找 postID=10 的那一行\r\n$post=Post::model()-&gt;find(''postID=:postID'', array('':postID''=&gt;10));</pre>\r\n</div>\r\n</div>\r\n<blockquote>\r\n<p><strong>注意:</strong>&nbsp;在上面的例子中，我们可能需要在特定的 DBMS 中将&nbsp;<code>postID</code>&nbsp;列的引用进行转义。 例如，如果我们使用 PostgreSQL，我们必须将此表达式写为&nbsp;<code>"postID"=:postID</code>，因为 PostgreSQL 在默认情况下对列名大小写不敏感。</p>\r\n</blockquote>\r\n</p>');

-- --------------------------------------------------------

--
-- 表的结构 `knowledge`
--

CREATE TABLE IF NOT EXISTS `knowledge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_bin NOT NULL,
  `category` varchar(64) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `create_time` int(10) NOT NULL,
  `update_time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `knowledge`
--

INSERT INTO `knowledge` (`id`, `title`, `category`, `content`, `create_time`, `update_time`) VALUES
(1, '朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦', '防1', '<p>aa</p>', 1343374149, 1343374149),
(2, '王球场', '防1', '<p>1朝秦暮楚朝秦暮楚朝秦暮</p>\r\n<p>2楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝</p>\r\n<p>3秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚朝秦暮楚</p>', 1343448695, 1343448695),
(3, '寺魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦', '地', '<p>1魂牵梦萦魂牵</p>\r\n<p>2梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦</p>\r\n<p>3萦魂牵梦萦魂牵梦萦</p>', 1343451179, 1343451179),
(4, '孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃', '在', '<p>孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃孙晃</p>', 1343492836, 1343492836),
(5, '情趣在', '瑶', '<p>情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在情趣在</p>', 1343492850, 1343492850),
(6, '卢有', '于于天需要工', '<p>于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工于于天需要工</p>', 1343492866, 1343492866),
(7, '魂牵梦萦', '在', '<p>魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦</p>', 1343492875, 1343492875),
(8, '魂牵梦萦需要', '于于天需要工', '<p>魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦魂牵梦萦</p>', 1343492889, 1343492889),
(9, '盱下载', '于于天需要工', '<p>cxsacdsa</p>', 1343492910, 1343492910),
(10, '限　了', '　革大本营', '<p>魂牵梦萦苛sdsdsd　dcsa</p>\r\n<p>ＤＳＡ</p>', 1343492926, 1343492926),
(11, '呻', 'kjhg', '<p>早于</p>', 1343492936, 1343492936),
(12, '五地', '在', '<p>地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地地</p>', 1343493280, 1343493280),
(13, '止一', '　gfds', '<p>魂牵梦萦</p>', 1343493291, 1343493291),
(14, '式魂牵梦萦', '在', '<p>魂牵梦萦</p>', 1343493298, 1343493298),
(15, '肷授命', '找３的', '<p>fwqf</p>', 1343493308, 1343493308),
(16, 'gre', '震', '<p>魂牵梦萦工　工</p>', 1343493320, 1343493320),
(17, '上睛', '于', '<p>城</p>', 1343493328, 1343493328),
(18, '魂牵梦萦大', '从', '<p>魂牵梦萦</p>', 1343493569, 1343493569);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `specialoffers`
--

INSERT INTO `specialoffers` (`id`, `title`, `content`, `create_time`, `update_time`) VALUES
(1, 'aaaaaaa', '<p>dddddddd</p>', 1343368059, 1343368059),
(2, '五魂牵梦萦朝秦暮楚地城朝秦暮楚地朝秦暮楚地城朝秦暮楚地朝秦暮楚地城朝秦暮楚地朝秦暮楚地城朝秦暮楚地朝秦暮楚地城朝秦暮楚地朝秦暮楚', '<p>1城朝秦暮楚地城朝秦暮楚地</p>\r\n<p>2城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮</p>\r\n<p>3楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚</p>\r\n<p>4地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地城朝秦暮楚地</p>', 1343448622, 1343448622),
(3, 'dd', '<p>1ddddddddddddddd霜无可奈何霜无可奈何霜无可奈何霜无可奈何</p>\r\n<p>2ffffffffffffffffffffffff左霜无可奈何霜无可奈何霜无可奈何霜无可奈何</p>', 1343462187, 1343462187),
(4, '朋魂牵梦萦', '<p>朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦朋魂牵梦萦</p>', 1343462206, 1343462206),
(5, '城区', '<p>\r\n<p>调用&nbsp;<code>find</code>&nbsp;时，我们使用&nbsp;<code>$condition</code>&nbsp;和&nbsp;<code>$params</code>&nbsp;指定查询条件。此处&nbsp;<code>$condition</code>&nbsp;可以是 SQL 语句中的<code>WHERE</code>&nbsp;字符串，<code>$params</code>&nbsp;则是一个参数数组，其中的值应绑定到&nbsp;<code>$condation</code>&nbsp;中的占位符。例如：</p>\r\n<div class="hl-code">\r\n<div class="hl-main">\r\n<pre>// 查找 postID=10 的那一行\r\n$post=Post::model()-&gt;find(''postID=:postID'', array('':postID''=&gt;10));</pre>\r\n</div>\r\n</div>\r\n<blockquote>\r\n<p><strong>注意:</strong>&nbsp;在上面的例子中，我们可能需要在特定的 DBMS 中将&nbsp;<code>postID</code>&nbsp;列的引用进行转义。 例如，如果我们使用 PostgreSQL，我们必须将此表达式写为&nbsp;<code>"postID"=:postID</code>，因为 PostgreSQL 在默认情况下对列名大小写不敏感。</p>\r\n</blockquote>\r\n</p>', 1343462218, 1343462218),
(6, 'fdsaf', '<p>fdsafdsf</p>', 1343490371, 1343490371),
(7, 'tttttttttttt', '<p>gggggggggggggggg</p>', 1343490407, 1343490407),
(8, '需要魂牵梦萦', '<p>需要魂牵梦萦需要魂牵梦萦需要魂牵梦萦需要魂牵梦萦需要魂牵梦萦需要魂牵梦萦需要魂牵梦萦需要魂牵梦萦需要魂牵梦萦需要魂牵梦萦需要魂牵梦萦需要魂牵梦萦</p>', 1343492718, 1343492718),
(9, '魂牵梦萦地要', '<p>魂牵梦萦地要魂牵梦萦地要魂牵梦萦地要魂牵梦萦地要魂牵梦萦地要魂牵梦萦地要魂牵梦萦地要魂牵梦萦地要魂牵梦萦地要魂牵梦萦地要魂牵梦萦地要魂牵梦萦地要</p>', 1343492734, 1343492734),
(10, '御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要', '<p>御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要御用城需要</p>', 1343492754, 1343492754),
(11, '夫我夫我夫我夫我夫我夫我夫我夫我夫我夫我夫我夫我', '<p>夫我夫我夫我夫我夫我夫我夫我夫我夫我夫我夫我夫我夫我夫我夫我夫我</p>', 1343492766, 1343492766),
(12, '景物利一二三要', '<p>景物利一二三要景物利一二三要景物利一二三要景物利一二三要景物利一二三要景物利一二三要景物利一二三要景物利一二三要景物利一二三要景物利一二三要景物利一二三要景物利一二三要</p>', 1343492779, 1343492779);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
