-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 09 月 16 日 10:59
-- 服务器版本: 5.0.90
-- PHP 版本: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `logistic`
--

CREATE TABLE IF NOT EXISTS `logistic` (
  `id` int(11) NOT NULL,
  `catagory` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `chosen1` varchar(256) NOT NULL,
  `chosen2` varchar(256) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `logistic`
--

INSERT INTO `logistic` (`id`, `catagory`, `status`, `chosen1`, `chosen2`, `date`) VALUES
(2, 1, 0, '2014-10-02', '', '2014-09-16');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(128) character set utf8 NOT NULL,
  `date` date NOT NULL,
  `text` text character set utf8 NOT NULL,
  `pic` varchar(128) character set utf8 NOT NULL,
  `category` varchar(128) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `slug` (`date`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `text`, `pic`, `category`) VALUES
(130, '??????', '2013-02-28', '2????????????????????i???????????????????????????? ', '0', 'Sports'),
(1, '??????', '0000-00-00', '??????????????????????v????????????????????????v????????', '0', 'Academic'),
(131, '总算成功了！', '2014-02-28', '繁多额外根据i肉呼呼更宽容更宽容回顾和软件款女红ivIDF奇偶if的别分门别类更方便否囊括了的那就看V大刷快女', '0', 'Entertain');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `name` varchar(128) character set utf8 NOT NULL,
  `number` bigint(20) NOT NULL,
  `text` text character set utf8 NOT NULL,
  `pic` varchar(128) character set utf8 NOT NULL,
  `grade` int(11) NOT NULL,
  `password` varchar(128) character set latin1 collate latin1_general_cs NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `name`, `number`, `text`, `pic`, `grade`, `password`) VALUES
(1, '周耀达', 5130309004, ' 1.因为某篇文章说卖转基因产品的年份里得癌症的人多。对曰：这不是单一变量。\r\n        2.转基因投放率和癌症发病率就是有关。对曰：统计数据的机构是？答曰：反正就有文章这么讲。对曰：哪里的文章？答曰：我看到的。对曰：你们读大学的时候也都是理科生，为何不能理智的看待问题？答曰：为何你这么年轻却那么固执不愿意相信转基因的危害？\r\n        3.科学家说转基因有害。对曰：有害并不一定是对人体有害，比如它可能会选择出更强的害虫品种……被打断。', 'stu_04.jpg', 2013, 'zhouyaoda'),
(2, '徐亦飞', 5130309056, ' 1.因为某篇文章说卖转基因产品的年份里得癌症的人多。对曰：这不是单一变量。\r\n        2.转基因投放率和癌症发病率就是有关。对曰：统计数据的机构是？答曰：反正就有文章这么讲。对曰：哪里的文章？答曰：我看到的。对曰：你们读大学的时候也都是理科生，为何不能理智的看待问题？答曰：为何你这么年轻却那么固执不愿意相信转基因的危害？\r\n        3.科学家说转基因有害。对曰：有害并不一定是对人体有害，比如它可能会选择出更强的害虫品种……被打断。\r\n         还有好多记不清了，基本都以我被打断结尾。反正大部分是微信上看到的证据吧。', 'stu_20.jpg', 2013, 'xuyifei'),
(3, '黄锃', 5120309000, ' 1.因为某篇文章说卖转基因产品的年份里得癌症的人多。对曰：这不是单一变量。\r\n        2.转基因投放率和癌症发病率就是有关。对曰：统计数据的机构是？答曰：反正就有文章这么讲。对曰：哪里的文章？答曰：我看到的。对曰：你们读大学的时候也都是理科生，为何不能理智的看待问题？答曰：为何你这么年轻却那么固执不愿意相信转基因的危害？\r\n        3.科学家说转基因有害。对曰：有害并不一定是对人体有害，比如它可能会选择出更强的害虫品种……被打断。\r\n         还有好多记不清了，基本都以我被打断结尾。反正大部分是微信上看到的证据吧。', 'stu_01.jpg', 2012, 'huangzen'),
(0, 'xuyifei', 5130309057, 'sdfsdfsdfdsfdsfsdfsd', 'fsdfsdfsdfsdfdsfdsfsd', 2013, 'xuyifei');
