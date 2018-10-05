-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 05 2018 г., 10:14
-- Версия сервера: 5.6.38
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Regist`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `_name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `_surname` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `_array` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `_name`, `_surname`, `email`, `password`, `_array`) VALUES
(1, 'Rddwdw', 'Wdadad', 'Tester@gmail.com', '$2y$10$R29Frsjo2VFU5sl5OEG7/..RjWOvqJygBHzkUGZZsHDADwrEiJrH2', NULL),
(2, 'Hdad', 'Wadasd', 'Tessefs@gmail.com', '$2y$10$Fx64SMhLA9d1H6ApESqOf.DczK3H4GLr7.3xX0OUAsa/EN4Bve3DK', '2018-10-03 17:13:09'),
(3, 'Test', 'Test', 'testuser@gmail.com', '$2y$10$AGijFjaqkNaXapim0I8JBOPiviHa7tSE4mK5nk.Ar37aH/35bEVRC', '2018-10-03 17:18:38'),
(4, 'Test', 'Test', 'testuser2@gmail.com', '$2y$10$htjcZkpXF1.N3bvVPaEXXODgcB/FsJ62s96BfDMcOqt.kS2xiSj5u', '2018-10-03 17:19:23');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
