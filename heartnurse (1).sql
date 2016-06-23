-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-06-23 02:34:39
-- 服务器版本： 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heartnurse`
--

DELIMITER $$
--
-- 存储过程
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actiondatageneration`(IN `older_id` INT)
    NO SQL
BEGIN
DECLARE i int DEFAULT 0;
while i<100 DO
insert into action VALUES (older_id,NOW(),'123s'+i);
set i=i+1;
end WHILE;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- 表的结构 `action`
--

CREATE TABLE IF NOT EXISTS `action` (
  `older_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `action` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `action`
--

INSERT INTO `action` (`older_id`, `time`, `action`) VALUES
(123, '2016-06-23 01:24:15', '11'),
(123, '2016-06-23 01:24:15', '123'),
(123, '2016-06-23 01:36:15', '123'),
(123, '2016-06-23 01:36:15', '124'),
(123, '2016-06-23 01:36:15', '125'),
(123, '2016-06-23 01:36:15', '126'),
(123, '2016-06-23 01:36:15', '127'),
(123, '2016-06-23 01:36:15', '128'),
(123, '2016-06-23 01:36:15', '129'),
(123, '2016-06-23 01:36:15', '130'),
(123, '2016-06-23 01:36:15', '131'),
(123, '2016-06-23 01:36:15', '132'),
(123, '2016-06-23 01:36:15', '133'),
(123, '2016-06-23 01:36:15', '134'),
(123, '2016-06-23 01:36:15', '135'),
(123, '2016-06-23 01:36:15', '136'),
(123, '2016-06-23 01:36:15', '137'),
(123, '2016-06-23 01:36:15', '138'),
(123, '2016-06-23 01:36:15', '139'),
(123, '2016-06-23 01:36:15', '140'),
(123, '2016-06-23 01:36:15', '141'),
(123, '2016-06-23 01:36:15', '142'),
(123, '2016-06-23 01:36:15', '143'),
(123, '2016-06-23 01:36:15', '144'),
(123, '2016-06-23 01:36:15', '145'),
(123, '2016-06-23 01:36:15', '146'),
(123, '2016-06-23 01:36:15', '147'),
(123, '2016-06-23 01:36:15', '148'),
(123, '2016-06-23 01:36:15', '149'),
(123, '2016-06-23 01:36:15', '150'),
(123, '2016-06-23 01:36:15', '151'),
(123, '2016-06-23 01:36:15', '152'),
(123, '2016-06-23 01:36:15', '153'),
(123, '2016-06-23 01:36:15', '154'),
(123, '2016-06-23 01:36:15', '155'),
(123, '2016-06-23 01:36:15', '156'),
(123, '2016-06-23 01:36:15', '157'),
(123, '2016-06-23 01:36:15', '158'),
(123, '2016-06-23 01:36:15', '159'),
(123, '2016-06-23 01:36:15', '160'),
(123, '2016-06-23 01:36:15', '161'),
(123, '2016-06-23 01:36:15', '162'),
(123, '2016-06-23 01:36:15', '163'),
(123, '2016-06-23 01:36:15', '164'),
(123, '2016-06-23 01:36:15', '165'),
(123, '2016-06-23 01:36:15', '166'),
(123, '2016-06-23 01:36:15', '167'),
(123, '2016-06-23 01:36:15', '168'),
(123, '2016-06-23 01:36:15', '169'),
(123, '2016-06-23 01:36:15', '170'),
(123, '2016-06-23 01:36:15', '171'),
(123, '2016-06-23 01:36:15', '172'),
(123, '2016-06-23 01:36:15', '173'),
(123, '2016-06-23 01:36:15', '174'),
(123, '2016-06-23 01:36:15', '175'),
(123, '2016-06-23 01:36:15', '176'),
(123, '2016-06-23 01:36:15', '177'),
(123, '2016-06-23 01:36:15', '178'),
(123, '2016-06-23 01:36:15', '179'),
(123, '2016-06-23 01:36:15', '180'),
(123, '2016-06-23 01:36:15', '181'),
(123, '2016-06-23 01:36:15', '182'),
(123, '2016-06-23 01:36:15', '183'),
(123, '2016-06-23 01:36:15', '184'),
(123, '2016-06-23 01:36:15', '185'),
(123, '2016-06-23 01:36:15', '186'),
(123, '2016-06-23 01:36:15', '187'),
(123, '2016-06-23 01:36:15', '188'),
(123, '2016-06-23 01:36:15', '189'),
(123, '2016-06-23 01:36:15', '190'),
(123, '2016-06-23 01:36:15', '191'),
(123, '2016-06-23 01:36:15', '192'),
(123, '2016-06-23 01:36:15', '193'),
(123, '2016-06-23 01:36:15', '194'),
(123, '2016-06-23 01:36:15', '195'),
(123, '2016-06-23 01:36:15', '196'),
(123, '2016-06-23 01:36:15', '197'),
(123, '2016-06-23 01:36:15', '198'),
(123, '2016-06-23 01:36:15', '199'),
(123, '2016-06-23 01:36:15', '200'),
(123, '2016-06-23 01:36:15', '201'),
(123, '2016-06-23 01:36:15', '202'),
(123, '2016-06-23 01:36:15', '203'),
(123, '2016-06-23 01:36:15', '204'),
(123, '2016-06-23 01:36:15', '205'),
(123, '2016-06-23 01:36:15', '206'),
(123, '2016-06-23 01:36:15', '207'),
(123, '2016-06-23 01:36:15', '208'),
(123, '2016-06-23 01:36:15', '209'),
(123, '2016-06-23 01:36:15', '210'),
(123, '2016-06-23 01:36:15', '211'),
(123, '2016-06-23 01:36:15', '212'),
(123, '2016-06-23 01:36:15', '213'),
(123, '2016-06-23 01:36:15', '214'),
(123, '2016-06-23 01:36:15', '215'),
(123, '2016-06-23 01:36:15', '216'),
(123, '2016-06-23 01:36:15', '217'),
(123, '2016-06-23 01:36:15', '218'),
(123, '2016-06-23 01:36:15', '219'),
(123, '2016-06-23 01:36:15', '220'),
(123, '2016-06-23 01:36:15', '221'),
(123, '2016-06-23 01:36:15', '222');

-- --------------------------------------------------------

--
-- 表的结构 `alert`
--

CREATE TABLE IF NOT EXISTS `alert` (
  `older_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `location` varchar(50) COLLATE utf8_bin NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `bloodpress`
--

CREATE TABLE IF NOT EXISTS `bloodpress` (
  `older_id` int(11) NOT NULL,
  `datetime` int(11) NOT NULL,
  `bloodpress` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `counselor`
--

CREATE TABLE IF NOT EXISTS `counselor` (
  `cid` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `phone` varchar(11) COLLATE utf8_bin NOT NULL,
  `description` varchar(200) COLLATE utf8_bin NOT NULL,
  `pic` varchar(256) COLLATE utf8_bin NOT NULL,
  `profession` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `diet`
--

CREATE TABLE IF NOT EXISTS `diet` (
  `older_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `food_id` int(11) NOT NULL,
  `quantity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `food_nutrition`
--

CREATE TABLE IF NOT EXISTS `food_nutrition` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `suger` int(11) NOT NULL,
  `protein` int(11) NOT NULL,
  `fat` int(11) NOT NULL,
  `nut` varchar(10) COLLATE utf8_bin NOT NULL,
  `material` varchar(60) COLLATE utf8_bin NOT NULL,
  `micronutrient` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `heart_rate`
--

CREATE TABLE IF NOT EXISTS `heart_rate` (
  `older_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `heart_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `nurse_id` int(11) NOT NULL COMMENT '工号',
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `gender` enum('male','female') COLLATE utf8_bin NOT NULL,
  `pic` varchar(256) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `older`
--

CREATE TABLE IF NOT EXISTS `older` (
  `older_id` int(11) NOT NULL COMMENT '老人身份证号',
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `age` tinyint(4) NOT NULL,
  `birthday` date NOT NULL,
  `height` decimal(4,1) NOT NULL,
  `phone` varchar(11) COLLATE utf8_bin NOT NULL,
  `hobit` varchar(200) COLLATE utf8_bin NOT NULL,
  `address` varchar(256) COLLATE utf8_bin NOT NULL,
  `illhistory` varchar(300) COLLATE utf8_bin NOT NULL,
  `picture` varchar(256) COLLATE utf8_bin NOT NULL,
  `gender` enum('male','female') COLLATE utf8_bin NOT NULL,
  `allergy` varchar(200) COLLATE utf8_bin NOT NULL COMMENT '过敏'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `older`
--

INSERT INTO `older` (`older_id`, `name`, `age`, `birthday`, `height`, `phone`, `hobit`, `address`, `illhistory`, `picture`, `gender`, `allergy`) VALUES
(123, '李奶奶', 62, '1900-01-01', '99.9', '13589089032', '羽毛球', '朝阳路110号', '高血压', '../images/bg.png', 'female', '');

-- --------------------------------------------------------

--
-- 表的结构 `older_user`
--

CREATE TABLE IF NOT EXISTS `older_user` (
  `user_id` int(11) NOT NULL,
  `older_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `older_user`
--

INSERT INTO `older_user` (`user_id`, `older_id`) VALUES
(5, 123);

-- --------------------------------------------------------

--
-- 表的结构 `oxyhemoglobin`
--

CREATE TABLE IF NOT EXISTS `oxyhemoglobin` (
  `older_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `oxyhemoglobin` decimal(3,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `relative`
--

CREATE TABLE IF NOT EXISTS `relative` (
  `loginname` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `phone` varchar(11) COLLATE utf8_bin NOT NULL,
  `pic` varchar(256) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `sleeptime`
--

CREATE TABLE IF NOT EXISTS `sleeptime` (
  `older_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `sleeptime` decimal(2,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `temperature`
--

CREATE TABLE IF NOT EXISTS `temperature` (
  `older_id` int(11) NOT NULL,
  `datetime` int(11) NOT NULL,
  `temperature` decimal(2,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `phonenum` varchar(11) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(15) COLLATE utf8_bin NOT NULL,
  `weixin` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `phonenum`, `password`, `user_name`, `weixin`) VALUES
(5, '5', '5', '5', '5');

-- --------------------------------------------------------

--
-- 表的结构 `weight`
--

CREATE TABLE IF NOT EXISTS `weight` (
  `older_id` int(11) NOT NULL,
  `datetime` int(11) NOT NULL,
  `weight` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`older_id`,`time`,`action`);

--
-- Indexes for table `counselor`
--
ALTER TABLE `counselor`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `profession` (`profession`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`nurse_id`);

--
-- Indexes for table `older`
--
ALTER TABLE `older`
  ADD PRIMARY KEY (`older_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `phonenum` (`phonenum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `nurse_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '工号';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
