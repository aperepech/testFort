-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 04 2020 г., 13:03
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `kia_ceed`
--

CREATE TABLE `kia_ceed` (
  `id` int(11) NOT NULL,
  `assembly` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine_size` float(10,0) DEFAULT NULL,
  `engine_power` int(11) DEFAULT NULL,
  `petrol` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drive` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gearbox` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `kia_ceed`
--

INSERT INTO `kia_ceed` (`id`, `assembly`, `engine_size`, `engine_power`, `petrol`, `drive`, `gearbox`, `price`) VALUES
(1, 'Prestige', 3, 128, 'Бензин', 'Задний', 'R/T', 1154903),
(45, 'Luxe', 3, 140, 'Дизель', 'Задний', 'M/T', 1000002),
(46, 'Comfort', 2, 128, 'Бензин', 'Передний', 'A/T', 1000000),
(47, 'Luxe', 3, 128, 'Дизель', 'Передний', 'A/T', 1049975),
(48, 'Comfort', 2, 140, 'Бензин', 'Задний', 'M/T', 1090000),
(49, 'Comfort', 2, 128, 'Бензин', 'Передний', 'A/T', 1500000),
(50, 'Comfort', 2, 128, 'Бензин', 'Передний', 'A/T', 1098999),
(51, 'Comfort', 2, 128, 'Бензин', 'Передний', 'A/T', 1098999),
(52, 'Comfort', 2, 128, 'Бензин', 'Передний', 'A/T', 1098998),
(53, 'Comfort', 2, 128, 'Бензин', 'Передний', 'A/T', 1988484),
(54, 'Comfort', 2, 128, 'Бензин', 'Передний', 'A/T', 1094904),
(55, 'Comfort', 2, 128, 'Бензин', 'Передний', 'M/T', 1094908);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `kia_ceed`
--
ALTER TABLE `kia_ceed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `kia_ceed`
--
ALTER TABLE `kia_ceed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
