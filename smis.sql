-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 07 月 30 日 13:22
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `smis`
--

-- --------------------------------------------------------

--
-- 表的结构 `smis_add`
--

CREATE TABLE IF NOT EXISTS `smis_add` (
  `name` varchar(255) NOT NULL,
  `ifstage` varchar(255) NOT NULL,
  `id` varchar(999) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `smis_add`
--

INSERT INTO `smis_add` (`name`, `ifstage`, `id`) VALUES
('企', '0', '6'),
('因', '0', '7'),
('获', '0', '8'),
('服', '0', '9'),
('企', '0', '6'),
('因', '0', '7'),
('获', '0', '8'),
('服', '0', '9'),
('企', '0', '6'),
('因', '0', '7'),
('获', '0', '8'),
('服', '0', '9');

-- --------------------------------------------------------

--
-- 表的结构 `smis_call`
--

CREATE TABLE IF NOT EXISTS `smis_call` (
  `name` varchar(255) NOT NULL,
  `ifstage` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `smis_call`
--

INSERT INTO `smis_call` (`name`, `ifstage`, `id`) VALUES
('妹子', '1', '1'),
('静', '1', '1');

-- --------------------------------------------------------

--
-- 表的结构 `smis_show`
--

CREATE TABLE IF NOT EXISTS `smis_show` (
  `name` varchar(255) NOT NULL,
  `ifstage` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
