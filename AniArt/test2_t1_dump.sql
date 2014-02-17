-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 11 2014 г., 20:18
-- Версия сервера: 5.6.12-log
-- Версия PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `test2_t1`
--

CREATE TABLE IF NOT EXISTS `test2_t1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `A1` datetime NOT NULL,
  `A2` varchar(12) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `test2_t1`
--

INSERT INTO `test2_t1` (`id`, `A1`, `A2`) VALUES
(3, '2012-11-10 11:10:00', 'Сидоров'),
(2, '2012-10-10 11:10:00', 'Петров'),
(1, '2012-10-10 10:10:00', 'Иванов'),
(4, '2012-12-10 11:10:00', 'Петров'),
(5, '2012-12-10 11:10:00', 'Федоров');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
