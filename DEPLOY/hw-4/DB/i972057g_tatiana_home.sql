-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 10 2020 г., 22:00
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
-- База данных: `i972057g_tatiana_home`
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
  `imageUrl` varchar(1024) DEFAULT NULL,
  `addDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `editDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id_article`, `id_category`, `title`, `text`, `imageUrl`, `addDate`, `editDate`) VALUES
(1, 1, 'Новости спорта', 'Это первые новости спорта! Не пропустите следующие выпуски!', NULL, '2020-09-24 10:29:28', '2020-10-10 12:53:09'),
(6, 1, 'JavaScript оболочки', 'В JavaScript много разных оболочек, например:\r\nNode.js - это платформа для простого создания быстрых, масштабируемых сетевых приложений..\r\nJSDB - Автономная JavaScript оболочка для Windows, Mac, и Linux.\r\nJavaLikeScript - Автономная расширяемая оболочка JavaScript, включающая как нативные библиотеки, так и библиотеки JavaScript.\r\nGLUEscript - Автономная JavaScript оболочка для создания кросс-платформенных JavaScript приложений. Он может использовать wxWidgets для GUI приложений, и раньше назывался wxJavaScript.\r\njspl - Автономная JavaScript оболочка, улучшенная  при помощи Perl. Может использовать модули Perl прямо из JavaScript: DBI для интеграции с базами данных, GTK2 для GUI приложений, POSIX для системного программирования и т.д. Лучший из существующих CPAN для JavaScript программистов.\r\nShellJS - это портативная реализация команд оболочки Unix поверх API-интерфейса Node.js.', NULL, '2020-09-24 13:15:17', '2020-10-10 12:53:09'),
(10, 4, 'Learn', 'Искусство в JavaScript. JavaScript и есть искусство!!!', NULL, '2020-09-25 08:51:01', '2020-10-10 12:53:09'),
(12, 2, 'Музеи', 'Прекрасные музеи и автомобили', NULL, '2020-09-25 08:53:06', '2020-10-10 12:53:09'),
(15, 2, 'Тестовая статья', 'Статья про автомобили', NULL, '2020-09-28 09:16:24', '2020-10-10 12:53:09'),
(16, 4, 'Статья про искусство', 'любой текст про искусство', 'https://iskusstvo-info.ru/wp-content/uploads/2018/01/kosolapov.jpg', '2020-09-28 09:18:27', '2020-10-10 12:53:09'),
(17, 3, 'Еще одна самая лучшая статья', 'Сегодня мы поговорим о том, как удалять пятна с рубашки....', NULL, '2020-09-28 09:21:26', '2020-10-10 12:53:09'),
(21, 3, 'Chat', 'Hm...\r\nWhat can i do here\r\n\r\n\r\nNothing to do.... \r\nО_О\r\n\r\n\r\n-You can write here anything You want!\r\n\r\n- О_О\r\n\r\nI suppose, i will write here questions to not forget what i want to ask)                 \r\n     \r\nWow.... Interesting             \r\n\r\nHow about emoji here? =)     \r\n\r\n- Emoji You can take from    \r\nhttps://textfac.es/      \r\n(づ｡◕‿‿◕｡)づ         (◕‿◕✿)                       \r\n\r\nOk))                       \r\nAaaa, this is cute one ʕ•ᴥ•ʔ                        \r\n\r\n- Little bear =))        \r\n\r\n                (ᵔᴥᵔ)             \r\n\r\n           ｡◕‿◕｡\r\nБлин....я забыла что изначально тут вопросы должны были быть....      \r\n\r\nFor how long you practice aikido?', NULL, '2020-10-07 11:34:21', '2020-10-10 12:53:09'),
(24, 3, 'Смайлики', '( ͡° ͜ʖ ͡°)\r\n¯\\_(ツ)_/¯\r\n̿̿ ̿̿ ̿̿ ̿\'̿\'\\̵͇̿̿\\З= ( ▀ ͜͞ʖ▀) =Ε/̵͇̿̿/’̿’̿ ̿ ̿̿ ̿̿ ̿̿\r\n▄︻̷̿┻̿═━一\r\n( ͡°( ͡° ͜ʖ( ͡° ͜ʖ ͡°)ʖ ͡°) ͡°)\r\nʕ•ᴥ•ʔ\r\n(▀̿Ĺ̯▀̿ ̿)\r\n(ง ͠° ͟ل͜ ͡°)ง\r\n༼ つ ◕_◕ ༽つ\r\nಠ_ಠ\r\n(づ｡◕‿‿◕｡)づ\r\n̿\'̿\'\\̵͇̿̿\\З=( ͠° ͟ʖ ͡°)=Ε/̵͇̿̿/\'̿̿ ̿ ̿ ̿ ̿ ̿\r\n(ﾉ◕ヮ◕)ﾉ*:･ﾟ✧ ✧ﾟ･: *ヽ(◕ヮ◕ヽ)\r\n[̲̅$̲̅(̲̅5̲̅)̲̅$̲̅]\r\n┬┴┬┴┤ ͜ʖ ͡°) ├┬┴┬┴\r\n( ͡°╭͜ʖ╮͡° )\r\n(͡ ͡° ͜ つ ͡͡°)\r\n(• Ε •)\r\n(ง\'̀-\'́)ง\r\n(ಥ﹏ಥ)\r\n﴾͡๏̯͡๏﴿ O\'RLY?\r\n(ノಠ益ಠ)ノ彡┻━┻\r\n[̲̅$̲̅(̲̅ ͡° ͜ʖ ͡°̲̅)̲̅$̲̅]\r\n(ﾉ◕ヮ◕)ﾉ*:･ﾟ✧\r\n(☞ﾟ∀ﾟ)☞\r\n| (• ◡•)| (❍ᴥ❍Ʋ)\r\n(◕‿◕✿)\r\n(ᵔᴥᵔ)\r\n(╯°□°)╯︵ ꞰOOQƎƆⱯɟ\r\n(¬‿¬)\r\n(☞ﾟヮﾟ)☞ ☜(ﾟヮﾟ☜)\r\n(づ￣ ³￣)づ\r\nლ(ಠ益ಠლ)\r\nಠ╭╮ಠ\r\n̿ ̿ ̿\'̿\'\\̵͇̿̿\\З=(•_•)=Ε/̵͇̿̿/\'̿\'̿ ̿\r\n/╲/\\╭( ͡° ͡° ͜ʖ ͡° ͡°)╮/\\╱\\\r\n(;´༎ຶД༎ຶ`)\r\n♪~ ᕕ(ᐛ)ᕗ\r\n♥‿♥\r\n༼ つ ͡° ͜ʖ ͡° ༽つ\r\n༼ つ ಥ_ಥ ༽つ\r\n(╯°□°）╯︵ ┻━┻\r\n( ͡ᵔ ͜ʖ ͡ᵔ )\r\nヾ(⌐■_■)ノ♪\r\n~(˘▾˘~)\r\n◉_◉\r\n\\ (•◡•) /\r\n(~˘▾˘)~\r\n(._.) ( L: ) ( .-. ) ( :L ) (._.)\r\n༼ʘ̚ل͜ʘ̚༽\r\n༼ ºل͟º ༼ ºل͟º ༼ ºل͟º ༽ ºل͟º ༽ ºل͟º ༽\r\n┬┴┬┴┤(･_├┬┴┬┴\r\nᕙ(⇀‸↼‶)ᕗ\r\nᕦ(Ò_Óˇ)ᕤ\r\n┻━┻ ︵ヽ(`Д´)ﾉ︵ ┻━┻\r\n⚆ _ ⚆\r\n(•_•) ( •_•)>⌐■-■ (⌐■_■)\r\n(｡◕‿‿◕｡)\r\nಥ_ಥ\r\nヽ༼ຈل͜ຈ༽ﾉ\r\n⌐╦╦═─\r\n(☞ຈل͜ຈ)☞\r\n˙ ͜ʟ˙\r\n☜(˚▽˚)☞\r\n(•Ω•)\r\n(ง°ل͜°)ง\r\n(｡◕‿◕｡)\r\n（╯°□°）╯︵( .O.)\r\n:\')\r\n┬──┬ ノ( ゜-゜ノ)\r\n(っ˘ڡ˘Σ)\r\nಠ⌣ಠ\r\nლ(´ڡ`ლ)\r\n(°ロ°)☝\r\n｡◕‿‿◕｡\r\n( ಠ ͜ʖರೃ)\r\n╚(ಠ_ಠ)=┐\r\n(─‿‿─)\r\nƪ(˘⌣˘)Ʃ\r\n(；一_一)\r\n(¬_¬)\r\n( ⚆ _ ⚆ )\r\n(ʘᗩʘ\')\r\n☜(⌒▽⌒)☞\r\n｡◕‿◕｡\r\n¯\\(°_O)/¯\r\n(ʘ‿ʘ)\r\nლ,ᔑ•ﺪ͟͠•ᔐ.ლ\r\n(´・Ω・`)\r\nಠ~ಠ\r\n(° ͡ ͜ ͡ʖ ͡ °)\r\n┬─┬ノ( º _ ºノ)\r\n(´・Ω・)っ由\r\nಠ_ಥ\r\nƸ̵̡Ӝ̵̨̄Ʒ\r\n(>ლ)\r\nಠ‿↼\r\nʘ‿ʘ\r\n(ღ˘⌣˘ღ)\r\nಠOಠ\r\nರ_ರ\r\n(▰˘◡˘▰)\r\n◔̯◔\r\n◔ ⌣ ◔\r\n(✿´‿`)\r\n¬_¬\r\nب_ب\r\n｡゜(｀Д´)゜｡\r\n(Ó Ì_Í)=ÓÒ=(Ì_Í Ò)\r\n°Д°\r\n( ﾟヮﾟ)\r\n┬─┬﻿ ︵ /(.□. ）\r\n٩◔̯◔۶\r\n≧☉_☉≦\r\n☼.☼\r\n^̮^\r\n(>人<)\r\n〆(・∀・＠)\r\n(~_^)\r\n^̮^\r\n^̮^\r\n>_>\r\n(^̮^)\r\n(/) (°,,°) (/)\r\n^̮^\r\n^̮^\r\n=U\r\n(･.◤)', NULL, '2020-10-08 14:25:19', '2020-10-10 12:53:09');

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
(4, 'Искусство'),
(5, 'Медиа'),
(6, 'Путешествия');

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
  MODIFY `id_article` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `caterories`
--
ALTER TABLE `caterories`
  MODIFY `id_category` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
