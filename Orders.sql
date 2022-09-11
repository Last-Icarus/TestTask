-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 11 2022 г., 19:40
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Orders`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE `Orders` (
  `ID заказа` int NOT NULL,
  `ФИО` text NOT NULL,
  `Моб. телефон` varchar(20) NOT NULL,
  `Электронная почта` varchar(100) NOT NULL,
  `Адрес` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Наименования товаров` varchar(1000) NOT NULL,
  `Номер договора` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Orders`
--

INSERT INTO `Orders` (`ID заказа`, `ФИО`, `Моб. телефон`, `Электронная почта`, `Адрес`, `Наименования товаров`, `Номер договора`) VALUES
(1, 'Иванов Иван Иванович', '88005553535', 'example@gmail.com', 'улица Пушкина, дом Колотушкина', 'Дорогие часы, Bluetooth наушники', 1234567890),
(2, 'Сергеев Сергей Сергеевич', '+7 987 654 32 10', 'test@gmail.com', 'улица Колотушкина, дом Пушкина', 'Диск GTA VI, Походный рюкзак, Синяя изолента', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `Products`
--

CREATE TABLE `Products` (
  `ID товара` int NOT NULL,
  `Наименование` text NOT NULL,
  `Стоимость` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Products`
--

INSERT INTO `Products` (`ID товара`, `Наименование`, `Стоимость`) VALUES
(1, 'Диск GTA VI', 60),
(2, 'Дорогие часы', 120),
(3, 'Bluetooth наушники', 42),
(4, 'Походный рюкзак', 25),
(5, 'Синяя изолента', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`ID заказа`),
  ADD KEY `ID заказа` (`ID заказа`);

--
-- Индексы таблицы `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ID товара`),
  ADD KEY `ID товара` (`ID товара`),
  ADD KEY `ID товара_2` (`ID товара`),
  ADD KEY `ID товара_3` (`ID товара`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Orders`
--
ALTER TABLE `Orders`
  MODIFY `ID заказа` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT для таблицы `Products`
--
ALTER TABLE `Products`
  MODIFY `ID товара` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
