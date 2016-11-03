-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 22 2014 г., 08:17
-- Версия сервера: 5.5.36
-- Версия PHP: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(222) NOT NULL,
  `Text` text NOT NULL,
  `IdBlog` int(10) unsigned NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`Id`, `Title`, `Text`, `IdBlog`, `Date`) VALUES
(3, 'My article about F-1', 'dfgl;flg;lem weqf ewr132\r\newr wer wer ewrwer 23\r\n lfwewrew wer 32rew  ewr\r\nwer wer 23r wer dsf \r\nwr ew32 ewrwer 32\r\nweeweeeeeeeeeee', 1, '2014-05-21'),
(5, 'Php2', 'PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. As of January 2013, PHP was installed on more than 240 million websites (39% of those sampled) and 2.1 million web servers.[4] Originally created by Rasmus Lerdorf in 1995, the reference implementation of PHP is now produced by The PHP Group.[5] While PHP originally stood for Personal Home Page,[6] it now stands for PHP: Hypertext Preprocessor, a recursive backronym.[7]\r\n\r\nPHP code can be simply mixed with HTML code, or it can be used in combination with various templating engines and web frameworks. PHP code is usually processed by a PHP interpreter, which is usually implemented as a web server''s native module or a Common Gateway Interface (CGI) executable. After the PHP code is interpreted and executed, the web server sends resulting output to its client, usually in form of a part of the generated web page â€“ for example, PHP code can generate a web page''s HTML code, an image, or some other data. PHP has also evolved to include a command-line interface (CLI) capability and can be used in standalone graphical applications.[8]\r\n\r\nPHP is free software released under the PHP License. PHP has been widely ported and can be deployed on most web servers on almost every operating system and platform, free of charge.[9]', 1, '2014-05-22'),
(7, 'Article 1', 'Ð•ÑÐ»Ð¸ Ð±Ñ‹ Ð½Ðµ Ð²Ð¾Ð·Ð½Ð¸ÐºÑˆÐ¸Ðµ Ð½Ð° Ð¼Ð°ÑˆÐ¸Ð½Ðµ Ð“Ñ€Ð¾Ð¶Ð°Ð½Ð° Ð¿Ñ€Ð¾Ð±Ð»ÐµÐ¼Ñ‹ Ñ ÐºÐ¾Ñ€Ð¾Ð±ÐºÐ¾Ð¹ Ð¿ÐµÑ€ÐµÐ´Ð°Ñ‡, Ñ‚Ð¾ Ð¿ÐµÑ€Ð²Ñ‹Ðµ Ð¾Ñ‡ÐºÐ¸ Â«Ð¼Ð¾Ñ€ÑÐºÐ¾Ð¹ Ð´ÑŒÑÐ²Ð¾Ð»Â» Ð¸Ð· Ð­Ð½ÑÑ‚Ð¾ÑƒÐ½Ð° Ð´Ð¾Ð±Ñ‹Ð» Ð±Ñ‹ ÑƒÐ¶Ðµ Ñ‚Ð°Ð¼, Ð² Ð¨Ð°Ð½Ñ…Ð°Ðµ. \r\n\r\nÐÐ¾ Ð¿Ð¾Ñ‚ÐµÐ½Ñ†Ð¸Ð°Ð» Ð¼Ð°ÑˆÐ¸Ð½Ñ‹ Ð¿Ð¾Ñ‚Ð¸Ñ…Ð¾Ð½ÑŒÐºÑƒ Ñ€Ð°ÑÐºÑ€Ñ‹Ð²Ð°ÐµÑ‚ÑÑ: 8 Ð¼ÐµÑÑ‚Ð¾ Ð Ð¾Ð¼Ð°Ð½Ð° Ð² ÐºÐ°Ñ‚Ð°Ð»Ð¾Ð½ÑÐºÐ¾Ð¼ Ð“Ñ€Ð°Ð½-Ð¿Ñ€Ð¸ (Ð²Ð¿ÐµÑ€ÐµÐ´Ð¸ Ð¾Ð±ÐµÐ¸Ñ… Â«Ð¤Ð¾Ñ€Ñ-Ð˜Ð½Ð´Ð¸Ð¹Â») Ð¸ Ð¿ÐµÑ€Ð²Ð¾Ðµ â€“ ÐŸÐ°ÑÑ‚Ð¾Ñ€Ð°, Ð¿Ð¾ Ð¸Ñ‚Ð¾Ð³Ð°Ð¼ Ñ‚ÐµÑÑ‚Ð¾Ð², â€“ Ñ‚Ð°Ð¼ Ð¶Ðµ.\r\n\r\nÐš Ð“Ñ€Ð°Ð½-Ð¿Ñ€Ð¸ ÐœÐ¾Ð½Ð°ÐºÐ¾ Ð¾Ð±ÐµÑ‰Ð°Ð½ Ð½Ð¾Ð²Ñ‹Ð¹ Ð¾Ð±Ð²ÐµÑ Ð¸ Ñ‚Ð¾Ð¿Ð»Ð¸Ð²Ð¾ Ð¾Ñ‚ Total, Ñ‡Ñ‚Ð¾ Ð´Ð¾Ð»Ð¶Ð½Ð¾ Ð¿Ð¾Ð¼Ð¾Ñ‡ÑŒ ÑÐ¾ÐºÑ€Ð°Ñ‚Ð¸Ñ‚ÑŒ Ð¾Ñ‚ÑÑ‚Ð°Ð²Ð°Ð½Ð¸Ðµ Ð¾Ñ‚ Ð»Ð¸Ð´ÐµÑ€Ð¾Ð² Ð¸ Ð²Ñ‹Ð»Ð¾Ð²Ð¸Ñ‚ÑŒ Ñ€Ñ‹Ð±ÐºÑƒ Ð¿Ñ€Ð¸Ð·Ð¾Ð²Ñ‹Ðµ Ð±Ð°Ð»Ð»Ñ‹ Ð² Ð¼ÑƒÑ‚Ð½Ð¾Ð¹ Ð²Ð¾Ð´Ðµ Ð›Ð¸Ð³ÑƒÑ€Ð¸Ð¹ÑÐºÐ¾Ð³Ð¾ Ð¼Ð¾Ñ€Ñ ÑÐ°Ð¼Ð¾Ð¹ Ð¿Ñ€ÐµÑÑ‚Ð¸Ð¶Ð½Ð¾Ð¹ Ð³Ð¾Ð½ÐºÐµ ÑÐµÐ·Ð¾Ð½Ð°.', 8, '2014-05-22'),
(8, 'sdfsadf fadsadf', 'sadfadsf asdf asdf adsf sadf sadf adsfffffffffffffffffffffffffffafds sadfadssssssss adsfffffff asdfffffffffffffff asdfawe f42q33333', 1, '2014-05-22');

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `IdUser` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `blogs`
--

INSERT INTO `blogs` (`Id`, `IdUser`) VALUES
(1, 32),
(2, 33),
(3, 34),
(4, 35),
(5, 36),
(6, 37),
(7, 38),
(8, 39),
(9, 40);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `User` varchar(222) NOT NULL,
  `IdArticle` int(10) unsigned NOT NULL,
  `Text` text NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`Id`, `User`, `IdArticle`, `Text`, `Date`) VALUES
(1, '', 5, 'Hello world', '2014-05-22'),
(2, '32', 5, 'New Comment Bla Bla Bla\r\nBla Bla Bla Bla Bla Bla\r\nBla Bla Bla efadad sdf', '2014-05-22'),
(3, 'Guest', 5, '(PHP 5 >= 5.3.0)\r\nDateTime::createFromFormat -- date_create_from_format â€” Returns new DateTime object formatted according to the specified format', '2014-05-22'),
(4, 'Guest', 5, 'serialize_precision	"17"	PHP_INI_ALL	Available since PHP 4.3.2. Until PHP 5.3.5, the default value was 100.', '2014-05-22'),
(5, 'Guest', 5, 'Hi I am new user here!', '2014-05-22'),
(6, 'Guest', 7, 'My first article', '2014-05-22'),
(7, 'Guest', 7, 'ÐœÐµÐ¶Ð´Ñƒ Ñ‚ÐµÐ¼, Ð¼Ð¾Ñ€ÑÐºÐ¸Ðµ Ð¸Ð´ÐµÐ¸ Ð² Ð±Ð¾Ð»Ð¸Ð´Ðµ Â«Ð›Ð¾Ñ‚ÑƒÑÐ°Â» Ð¿Ñ€Ð¸Ð±Ñ‹Ð²Ð°ÑŽÑ‚ ÑÐ»Ð¾Ð²Ð½Ð¾ Ð²Ð¾Ð´Ð° Ð² Ð¿Ñ€Ð¸Ð»Ð¸Ð². Ð’ Ð¿ÑƒÑÑ‚Ñ‹Ð½Ð½Ð¾Ð¼ Ð‘Ð°Ñ…Ñ€ÐµÐ¹Ð½Ðµ Ð² Â«Ð¿Ð°ÑÑ‚Ð¸ Ð¼Ð¾Ñ€ÑÐºÐ¾Ð³Ð¾ Ð´ÑŒÑÐ²Ð¾Ð»Ð°Â» Ð¸Ð· Ð­Ð½ÑÑ‚Ð¾ÑƒÐ½Ð° Ð²Ñ‹Ñ€Ð¾Ñ Â«ÐºÐ¸Ñ‚Ð¾Ð²Ñ‹Ð¹ ÑƒÑÂ», Ðº ÐºÐ¾Ñ‚Ð¾Ñ€Ð¾Ð¼Ñƒ ÐºÑ€ÐµÐ¿Ð¸Ñ‚ÑÑ Ð½ÐµÐ±Ð¾Ð»ÑŒÑˆÐ¾Ðµ ÐºÑ€Ñ‹Ð»Ñ‹ÑˆÐºÐ¾.', '2014-05-22'),
(8, 'Guest', 7, 'bla bla bla', '2014-05-22'),
(9, 'user444', 7, 'qqqqqqqqqqqqqqqqqqqqqqqqqq\r\nsdfdsfsdf\r\nsdfffffffffffffffffwe 23 wdf \r\nsdf 23r ', '2014-05-22'),
(10, 'user555', 5, 'Image: Twelfth-best QB?\r\nTwelfth-best QB?\r\n\r\nTony Romo will be featured on Wednesday''s "Top 100 Players of 2014" list, with 11 other quarterbacks ranked ahead of him. Have the Dallas Cowboys already wasted the best years of Romo''s career? Read', '2014-05-22');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Login` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Login` (`Login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Id`, `Login`, `Password`) VALUES
(4, 'user3', '1111'),
(5, 'user', '2222'),
(6, 'userNew', '3333'),
(7, 'Vasya', '1111'),
(8, 'Petya', '2222'),
(12, 'awqq', '212ew'),
(13, 'ssdsd', '32we'),
(14, 'dssdcx', 'weq3'),
(18, 'wq3223', 'wdf23'),
(19, 'we123', 'wqed23'),
(20, 'weewdewf', '32we'),
(21, 'sadffads', 'asdf'),
(25, 'eddasfdas', 'adsfadfadsf'),
(26, 'qdwqdw', 'wqdqdwqwd'),
(28, '12edqwd', '21d12d21d'),
(31, 'qwewqe12', '888596c392a130d66efb3a579e18fa6932cf8d99a6da21a0dc5ce42c75ecea696682372d0072756f3b6b0288dff3a72c7d5a5bbaca0396145112de2d35eace18'),
(32, 'user333', 'd0f5e4cd2f01dae7a401847a013a37aa4310709b8e3358fc76d4890e7d36e1131c4a5da2006554b1146cde5b136cb3dac5c68e7ac38a58028f6ca92c755c8e8b'),
(39, 'user444', 'd0f5e4cd2f01dae7a401847a013a37aa4310709b8e3358fc76d4890e7d36e1131c4a5da2006554b1146cde5b136cb3dac5c68e7ac38a58028f6ca92c755c8e8b'),
(40, 'user555', 'd0f5e4cd2f01dae7a401847a013a37aa4310709b8e3358fc76d4890e7d36e1131c4a5da2006554b1146cde5b136cb3dac5c68e7ac38a58028f6ca92c755c8e8b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
