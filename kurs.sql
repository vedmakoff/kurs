-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 03 2015 г., 03:22
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `kurs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `theme` text COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `times` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `theme`, `message`, `times`) VALUES
(5, 23, 'Неправильно отображаются страницы', 'ссылки или изображения сдвинуты влево, не отображается текст;', '2015.04.03 02:49:09'),
(6, 24, 'Неправильно отображаются страницы', 'вместо содержания страницы отображается код HTML;', '2015.04.03 02:49:48'),
(7, 25, 'Неправильно отображаются страницы', 'не удается просмотреть веб-страницу или войти в службу.\r\n', '2015.04.03 02:50:22'),
(8, 25, 'Заявление о случаях нарушений правил пользователями', 'злоупотребление т. н. "падонковским языком"', '2015.04.03 02:53:56'),
(9, 27, 'Выражение благодарности администрации', 'Спасибо, товарищ Сталин, за наше счастливое детство!', '2015.04.03 02:56:05');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `login` text COLLATE utf8_unicode_ci NOT NULL,
  `pass` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `file` text COLLATE utf8_unicode_ci NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `pass`, `email`, `file`) VALUES
(23, 'user1', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user1@mail.ru', ''),
(24, 'user2', 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user2@mail.ru', ''),
(25, 'user3', 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 'user3@mail.ru', ''),
(26, 'user4', 'user4', '3f02ebe3d7929b091e3d8ccfde2f3bc6', 'user4@mail.ru', ''),
(27, 'user5', 'user5', '0a791842f52a0acfbb3a783378c066b8', 'user5@mail.ru', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
