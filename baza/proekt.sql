-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 16 2018 г., 05:40
-- Версия сервера: 5.7.19
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `proekt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `parol` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `parol`) VALUES
(1, 'user', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `bolalar`
--

DROP TABLE IF EXISTS `bolalar`;
CREATE TABLE IF NOT EXISTS `bolalar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `bolalar`
--

INSERT INTO `bolalar` (`id`, `name`, `lastname`, `father`, `mother`, `address`, `day`, `age`, `tel`, `image`) VALUES
(1, 'Sarvar', 'Soliyev', 'Davron', 'Salima', 'Yunusobod tumani', '2014-06-05', 4, '90 777-88-08', '1523855793bola1.jpg'),
(2, 'Axmadbek', 'Sobirov', 'Jahongir', 'Matluba', 'Toshkent shahar', '2015-12-12', 3, '90 777-88-18', '1523856037bolA2.jpg'),
(3, 'Jahongir', 'Jumaniyozov', 'Rasul', 'Feruza', 'Toshkent viloyati', '2015-02-04', 4, '97 712-51-52', '1523856660bola6.jpg'),
(4, 'Sarvar', 'Fatulloyev', 'Nurulloyevich', 'Fotima', 'Toshkent shahar', '2015-07-15', 3, '90 777-88-08', '1523856752bola7.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `tel` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `address`, `image`, `job`, `birthday`, `tel`) VALUES
(1, 'Javlon', 'Sobirov', 'Toshkent viloyati', '15238562952.jpg', 'Tarbiyachi', '1992-10-10', '97 712-51-52'),
(2, 'Shukrullo', 'Fatulloyev', 'Buxoro', '15238568695.jpg', 'Direktor', '1991-01-30', '93 123-45-54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
