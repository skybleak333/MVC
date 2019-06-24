-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 24 2019 г., 05:27
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

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
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(265) NOT NULL,
  `password` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'root', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE `img` (
  `id_img` int(11) NOT NULL,
  `way` varchar(256) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img`
--

INSERT INTO `img` (`id_img`, `way`, `id_product`) VALUES
(1, 'DM0DM06501_002_main_listing.jpg', 1),
(3, 'MW0MW11108_911_main.jpg', 3),
(4, 'MW0MW10752_118_main.jpg', 4),
(9, 'S20S200158_401_alternate1.jpg', 8),
(10, 'S20S200158_401_alternate3.jpg', 8),
(11, 'S20S200158_401_main.jpg', 8),
(12, 'TT0TT05277_428_alternate1.jpg', 9),
(13, 'TT0TT05277_428_alternate3.jpg', 9),
(14, 'TT0TT05277_428_main.jpg', 9),
(15, 'TT0TT05778_428_main.jpg', 9),
(16, 'DW0DW07445_CIK_alternate1.jpg', 10),
(17, 'DW0DW07445_CIK_alternate2.jpg', 10),
(18, 'DW0DW07445_CIK_main.jpg', 10),
(19, 'WW0WW25367_403_alternate3.jpg', 11),
(20, 'WW0WW25367_403_main.jpg', 11),
(21, 'WW0WW25082_403_alternate1.jpg', 12),
(22, 'WW0WW25082_403_main.jpg', 12),
(23, 'UW0UW01716_678_alternate1.jpg', 13),
(24, 'UW0UW01716_678_alternate2.jpg', 13),
(25, 'UW0UW01716_678_main.jpg', 13),
(26, 'WW0WW25623_716_alternate1.jpg', 14),
(27, 'WW0WW25623_716_main.jpg', 14),
(28, 'WW0WW25658_840_alternate1.jpg', 15),
(29, 'WW0WW25658_840_alternate2.jpg', 15),
(30, 'WW0WW25658_840_main.jpg', 15),
(31, 'WW0WW25179_100_alternate3.jpg', 16),
(32, 'WW0WW25179_100_main.jpg', 16),
(33, 'DM0DM06501_002_main_listing.jpg', 17),
(34, 'DM0DM06539_806_main_listing.jpg', 17),
(35, 'DM0DM07261_CGP_alternate1_listing.jpg', 17),
(36, 'DM0DM07265_XAF_alternate1_listing.jpg', 17),
(37, 'DW0DW07445_CIK_alternate1.jpg', 17),
(38, 'DW0DW07445_CIK_alternate2.jpg', 17),
(39, 'DW0DW07445_CIK_main.jpg', 17),
(40, 'MW0MW10752_118_main.jpg', 17),
(41, 'MW0MW10824_100_main_listing.jpg', 17),
(42, 'MW0MW10829_100_main_listing.jpg', 17),
(43, 'MW0MW10829_403_main_listing.jpg', 17),
(44, 'MW0MW10830_501_main_listing.jpg', 17),
(45, 'MW0MW10834_100_main_listing.jpg', 17),
(46, 'MW0MW10936_100_alternate1.jpg', 17),
(47, 'MW0MW11108_911_main.jpg', 17),
(48, 'MW0MW11405_100_main_listing.jpg', 17),
(49, 'S20S200158_401_alternate1.jpg', 17),
(50, 'S20S200158_401_alternate3.jpg', 17),
(51, 'S20S200158_401_main.jpg', 17),
(52, 'TT0TT05277_428_alternate1.jpg', 17);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `count` tinyint(11) NOT NULL DEFAULT 1,
  `name` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `product_id`, `price`, `count`, `name`, `phone`, `email`) VALUES
(1, 6, 8777, 1, 'Andey', '77878778787', 'Skybek@fsdfs.ru'),
(2, 10, 18423, 1, 'Andey', '77878778787', 'Skybek@fsdfs.ru'),
(3, 7, 8742, 1, 'Andey', '77878778787', 'Skybek@fsdfs.ru'),
(4, 12, 77985, 1, 'Andey', '77878778787', 'Skybek@fsdfs.ru'),
(5, 2, 5667, 1, 'Andrey', '77878778787', 'skubleag@yandex.ru'),
(6, 3, 24567, 4, 'Andrey', '77878778787', 'skubleag@yandex.ru'),
(7, 1, 3990, 2, 'Andrey', '77878778787', 'skubleag@yandex.ru'),
(8, 13, 19875, 2, 'Andrey', '231231235', 'Skybek@fsdfs.ru'),
(9, 11, 13990, 1, 'Andrey', '231231235', 'Skybek@fsdfs.ru'),
(10, 10, 18423, 1, 'Andrey', '231231235', 'Skybek@fsdfs.ru'),
(11, 8, 87120, 1, 'Sky', '77878778787', 'skubleag@yandex.ru'),
(12, 17, 87452, 4, 'Asdfg123123', '131232355', 'admin@admin.com'),
(13, 3, 24567, 1, 'Asdfg123123', '131232355', 'admin@admin.com'),
(14, 1, 3990, 2, 'Asdfg123123', '131232355', 'admin@admin.com'),
(15, 4, 7654, 1, 'Asdfg123123', '131232355', 'admin@admin.com'),
(16, 10, 18423, 1, 'Asdfg123123', '131232355', 'admin@admin.com'),
(17, 9, 68410, 1, 'Asdfg123123', '131232355', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `tag` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `cost` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `similar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id_product`, `tag`, `title`, `cost`, `status`, `similar`) VALUES
(1, 'Футболка', 'Новая версия классической футболки украшена геометрическим логотипом в фирменной цветовой гамме Tommy Hilfiger.', '3990', 'on', '2'),
(3, 'Джинсы', 'Эти стильные джинсы узкого кроя отличают модный эффект выцветания и сдержанная отделка декоративной контрастной строчкой.', '24567', 'on', '1'),
(4, 'Худи', 'Это эффектное худи, дополненное фирменным логотипом Tommy Hilfiger, создаст яркий образ в непринужденном стиле.', '7654', 'on', '1'),
(8, 'Костюм', 'Ощутите себя победителем спортивных состязаний в этой куртке с эффектом цветовых блоков. Стильная модель украшена логотипом Tommy Sport', '87120', 'on', '1'),
(9, 'Куртка', 'Эта стильная куртка-бомбер из смесовой шерсти дополнена сдержанной фирменной отделкой', '68410', 'on', '1'),
(10, 'Топ', 'Облегающий топ из эластичного трикотажа украшает эффектная фирменная отделка с логотипами', '18423', 'on', '2'),
(11, 'Платье', 'Это роскошное трикотажное платье из вискозы украшено яркой отделкой фирменной тесьмой.', '13990', 'on', '1'),
(12, 'Блейзер', 'Этот стильный блейзер, изготовленный в соответствии с технологией Tommy Hilfiger Flex, сохраняет форму и гарантирует особый комфорт', '87412', 'on', '2'),
(13, 'Купальный костюм', 'Эти яркие трусики бикини с оригинальными декоративными элементами стильно дополнят ваши пляжные образы', '19875', 'on', '1'),
(14, 'Платье', 'Это кружевное платье с лифом асимметричного кроя и поясом, подчеркивающим линию талии, отлично дополнит ваш летний праздничный гардероб', '12345', 'on', '1'),
(15, 'Юбка', 'Эта универсальная юбка расклешенного силуэта украшена необычной контрастной строчкой', '15465', 'on', '1'),
(16, 'Футболка', 'Эта футболка из органического хлопка дополнена оригинальной отделкой: если присмотреться, на фоне ярких цветовых блоков проявится легендарный логотип Tommy Hilfiger', '16457', 'on', '1'),
(17, 'Футболка', 'Новая версия классической футболки украшена геометрическим логотипом в фирменной цветовой гамме Tommy Hilfiger.', '87452', 'on', '2');

-- --------------------------------------------------------

--
-- Структура таблицы `sumilar`
--

CREATE TABLE `sumilar` (
  `id_similar` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sumilar`
--

INSERT INTO `sumilar` (`id_similar`, `id_product`, `id_sp`) VALUES
(2, 3, 1),
(3, 3, 2),
(4, 4, 1),
(5, 4, 2),
(6, 4, 3),
(22, 8, 1),
(23, 8, 2),
(24, 8, 3),
(25, 8, 4),
(26, 8, 5),
(27, 8, 6),
(28, 8, 7),
(29, 9, 1),
(30, 9, 2),
(31, 9, 3),
(32, 9, 4),
(33, 9, 5),
(34, 9, 6),
(35, 9, 7),
(44, 11, 1),
(45, 11, 2),
(46, 11, 3),
(47, 11, 4),
(48, 11, 5),
(49, 11, 6),
(50, 11, 7),
(51, 11, 8),
(54, 13, 10),
(55, 13, 11),
(56, 13, 12),
(57, 14, 11),
(58, 14, 12),
(59, 14, 13),
(60, 15, 4),
(61, 15, 8),
(62, 15, 9),
(63, 15, 10),
(64, 15, 11),
(65, 15, 12),
(66, 15, 13),
(67, 15, 14),
(68, 16, 3),
(73, 12, 3),
(74, 12, 8),
(75, 17, 1),
(76, 17, 3),
(77, 17, 4),
(78, 10, 1),
(79, 10, 3),
(80, 10, 4),
(81, 10, 8),
(82, 10, 17);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id_img`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `sumilar`
--
ALTER TABLE `sumilar`
  ADD PRIMARY KEY (`id_similar`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `sumilar`
--
ALTER TABLE `sumilar`
  MODIFY `id_similar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
