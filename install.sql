-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2010 at 01:31 PM
-- Server version: 5.1.45
-- PHP Version: 5.3.2-1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `gb`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE IF NOT EXISTS `entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` varchar(2000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`id`, `name`, `title`, `text`, `timestamp`) VALUES
(5, 'sadgdsga', 'asdfgas', 'asdgasdg  ', '2010-05-04 12:47:09'),
(4, 'adsfsg', 'lkaskhfldfd', '<ul><li>dfasdfasd</li></ul><ol><li>asdfasfdasfsad</li><li>asdf</li><li>dsaf</li><li>adsf<br /></li></ol>  ', '2010-05-04 10:55:08');

-- --------------------------------------------------------

--
-- Stand-in structure for view `fullUser`
--
CREATE TABLE IF NOT EXISTS `fullUser` (
`id` int(11)
,`username` varchar(22)
,`password` varchar(1026)
,`lastlogin` date
,`lastip` varchar(11)
,`buserid` int(11)
,`broleid` int(11)
,`roleid` int(11)
,`role` varchar(22)
,`user_profile_id` int(11)
,`name` varchar(20)
,`schule` int(20)
,`klasse` int(10)
,`mail` int(26)
,`hobbys` int(100)
);
-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `roleid` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(22) NOT NULL,
  PRIMARY KEY (`roleid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleid`, `role`) VALUES
(1, 'admin'),
(2, 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE IF NOT EXISTS `userrole` (
  `buserid` int(11) NOT NULL,
  `broleid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`buserid`, `broleid`) VALUES
(16, 2),
(17, 1),
(18, 1),
(19, 2),
(20, 1),
(21, 2),
(22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1026) COLLATE utf8_unicode_ci NOT NULL,
  `lastlogin` date NOT NULL,
  `lastip` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `lastlogin`, `lastip`) VALUES
(16, 'test', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2', '2009-11-27', '127.0.0.1'),
(17, 'kobi', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2', '2009-12-25', '169.254.12.'),
(18, 'JT', 'a09f253d075dcc2b76d7bbcd21998fb6db6e1eeb9b7c87d58adb8fcae619e4751457f87f6a07a9e48de4882e35f51c5212bf15f78bc1984623d70b864e717dc8', '2010-01-12', '172.20.25.1'),
(19, 'gdfsg', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2', '2010-02-23', '127.0.0.1'),
(20, 'test2', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2', '2010-03-02', '127.0.0.1'),
(21, 'test3', 'fd9d94340dbd72c11b37ebb0d2a19b4d05e00fd78e4e2ce8923b9ea3a54e900df181cfb112a8a73228d1f3551680e2ad9701a4fcfb248fa7fa77b95180628bb2', '2010-03-30', '127.0.0.1'),
(22, 'blabb', '2f90717e7b8bc0ebf3f08defdae0fefd566e3b59c39d098faa1b57fe317e137fa0edf498227ec775b1f9b59cc156ba52dcf6409924363279e7b329df18615602', '2010-05-04', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `users_profile`
--

CREATE TABLE IF NOT EXISTS `users_profile` (
  `user_profile_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `schule` int(20) NOT NULL,
  `klasse` int(10) NOT NULL,
  `mail` int(26) NOT NULL,
  `hobbys` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_profile`
--

INSERT INTO `users_profile` (`user_profile_id`, `name`, `schule`, `klasse`, `mail`, `hobbys`) VALUES
(16, 'testgugus', 0, 0, 0, 0),
(17, 'christian', 0, 0, 0, 0),
(18, 'JT', 0, 0, 0, 0),
(19, 'fdsgfg', 0, 0, 0, 0),
(20, 'test2', 0, 0, 0, 0),
(21, 'test3', 0, 0, 0, 0),
(22, 'blabb', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure for view `fullUser`
--
DROP TABLE IF EXISTS `fullUser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `fullUser` AS select `users`.`id` AS `id`,`users`.`username` AS `username`,`users`.`password` AS `password`,`users`.`lastlogin` AS `lastlogin`,`users`.`lastip` AS `lastip`,`userrole`.`buserid` AS `buserid`,`userrole`.`broleid` AS `broleid`,`role`.`roleid` AS `roleid`,`role`.`role` AS `role`,`users_profile`.`user_profile_id` AS `user_profile_id`,`users_profile`.`name` AS `name`,`users_profile`.`schule` AS `schule`,`users_profile`.`klasse` AS `klasse`,`users_profile`.`mail` AS `mail`,`users_profile`.`hobbys` AS `hobbys` from (`users` join ((`userrole` join `role`) join `users_profile`) on(((`users`.`id` = `userrole`.`buserid`) and (`userrole`.`broleid` = `role`.`roleid`) and (`users`.`id` = `users_profile`.`user_profile_id`))));
