-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мая 20 2022 г., 10:41
-- Версия сервера: 5.5.47-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `db_students`
--

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `std_id` tinyint(100) NOT NULL,
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `surname` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `patronymic` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `group` smallint(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `std_id`, `name`, `surname`, `patronymic`, `date`, `group`) VALUES
(1, 1, 'Alex', 'Poyas', 'Alekseevich', '1999.01.01', 10),
(2, 1,'Mariya', 'Grevzeva', 'Alekseevna', '1999.01.01', 10),
(3, 1,'Masha', 'Sokolova', 'Alekseevna', '1999.01.01', 10),
(4, 1,'Petya', 'Polejaykin', 'Alekseevich', '1999.01.01', 10),
(5, 1,'Dmitriy', 'Borodin', 'Alekseevich', '1999.01.01', 10),
(6, 1,'Katya', 'Ivanova', 'Alekseevna', '1999.01.01', 10),
(7, 1,'Sasha', 'Morozin', 'Alekseevich', '1999.01.01', 10),
(8, 1,'Vasya', 'Morozin', 'Alekseevich', '1999.01.01', 10),
(9, 1,'Nikolay', 'Morozin', 'Alekseevich', '1999.01.01', 10),
(10, 1,'Georgiy', 'Morozin', 'Alekseevich', '1999.01.01', 10),
(11, 1,'Alex', 'Morozin', 'Alekseevich', '1999.01.01', 10),
(12, 1,'Mariya', 'Morozina', 'Alekseevna', '1999.01.01', 10),
(13, 1,'Masha', 'Morozina', 'Alekseevna', '1999.01.01', 10),
(14, 1,'Vasya', 'Morozin', 'Alekseevich', '1999.01.01', 10),
(15, 1,'Nikolay', 'Morozin', 'Alekseevich', '1999.01.01', 10),
(16, 1,'Dmitriy', 'Morozin', 'Alekseevich', '1999.01.01', 10),
(17, 1,'Katya', 'Morozina', 'Alekseevna', '1999.01.01', 10),
(18, 1,'Katya', 'Morozina', 'Alekseevna', '1999.01.01', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
