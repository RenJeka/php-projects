-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 27 2020 г., 14:53
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hw4_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id_article` int(10) UNSIGNED NOT NULL,
  `id_category` smallint(5) UNSIGNED NOT NULL,
  `title` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `addDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id_article`, `id_category`, `title`, `text`, `addDate`) VALUES
(1, 1, 'Новости спорта', 'Это первые новости спорта! Не пропустите следующие выпуски!', '2020-09-24 10:29:28'),
(6, 1, 'JavaScript оболочки', 'В JavaScript много разных оболочек, например:\r\nNode.js - это платформа для простого создания быстрых, масштабируемых сетевых приложений..\r\nJSDB - Автономная JavaScript оболочка для Windows, Mac, и Linux.\r\nJavaLikeScript - Автономная расширяемая оболочка JavaScript, включающая как нативные библиотеки, так и библиотеки JavaScript.\r\nGLUEscript - Автономная JavaScript оболочка для создания кросс-платформенных JavaScript приложений. Он может использовать wxWidgets для GUI приложений, и раньше назывался wxJavaScript.\r\njspl - Автономная JavaScript оболочка, улучшенная  при помощи Perl. Может использовать модули Perl прямо из JavaScript: DBI для интеграции с базами данных, GTK2 для GUI приложений, POSIX для системного программирования и т.д. Лучший из существующих CPAN для JavaScript программистов.\r\nShellJS - это портативная реализация команд оболочки Unix поверх API-интерфейса Node.js.', '2020-09-24 13:15:17'),
(8, 3, 'Быт-Быт-Быт', 'Текст статьи\r\nи еще раз быт', '2020-09-24 16:04:56'),
(10, 4, 'Learn — JavaScript', 'Искусство в JavaScript', '2020-09-25 08:51:01'),
(11, 4, 'Learn — JavaScript', 'Искусство в JavaScript', '2020-09-25 08:52:48'),
(12, 2, 'Музеи', 'Прекрасные музеи и автомобили', '2020-09-25 08:53:06'),
(13, 3, '111122334', '22224445', '2020-09-25 14:04:12');

-- --------------------------------------------------------

--
-- Структура таблицы `caterories`
--

CREATE TABLE `caterories` (
  `id_category` smallint(5) UNSIGNED NOT NULL,
  `categoryName` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `caterories`
--

INSERT INTO `caterories` (`id_category`, `categoryName`) VALUES
(1, 'Спорт'),
(2, 'Автомобили'),
(3, 'Быт'),
(4, 'Искусство');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_category` (`id_category`);

--
-- Индексы таблицы `caterories`
--
ALTER TABLE `caterories`
  ADD PRIMARY KEY (`id_category`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `caterories`
--
ALTER TABLE `caterories`
  MODIFY `id_category` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `caterories` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
