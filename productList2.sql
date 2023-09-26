-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 12 2023 г., 23:32
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `q91782vs_1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `productList2`
--
-- Создание: Апр 23 2023 г., 09:11
--

DROP TABLE IF EXISTS `productList2`;
CREATE TABLE `productList2` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `number` int(255) DEFAULT NULL,
  `color` text,
  `name` text,
  `amount` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `productList2`
--

INSERT INTO `productList2` (`id`, `date`, `number`, `color`, `name`, `amount`) VALUES
(500, '0000-00-00', 2147483647, '', '123', 123),
(501, '0000-00-00', 77, '', '123', 123),
(519, '2222-02-22', 4, '4', 'ff', 4),
(520, '0000-00-00', 0, '', '', 0),
(521, '0000-00-00', 0, 'f', 'd', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `productList2`
--
ALTER TABLE `productList2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `productList2`
--
ALTER TABLE `productList2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=522;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
