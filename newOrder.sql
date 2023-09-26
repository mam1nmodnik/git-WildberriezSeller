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
-- Структура таблицы `newOrder`
--
-- Создание: Май 23 2023 г., 10:54
--

DROP TABLE IF EXISTS `newOrder`;
CREATE TABLE `newOrder` (
  `id` int(11) NOT NULL,
  `nameOrder` text,
  `sizeOrder` int(255) DEFAULT NULL,
  `quantityOrder` int(255) DEFAULT NULL,
  `colorOrder` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `newOrder`
--

INSERT INTO `newOrder` (`id`, `nameOrder`, `sizeOrder`, `quantityOrder`, `colorOrder`, `adress`, `date`) VALUES
(1, '     \r\nJOHN LUCCA Джинсы / Мужские джинсы / Джинсы бананы', 48, 2, 'темно-серый', 'г.Казань ул. Гагарина 77А', '2023-05-24'),
(2, 'ууууу', 23, 12, 'тп', 'аввпи', '2023-05-24');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `newOrder`
--
ALTER TABLE `newOrder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `newOrder`
--
ALTER TABLE `newOrder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
