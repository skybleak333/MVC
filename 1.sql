-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 24 2019 г., 03:51
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
(2, 'laon-city-france-1220809-639x468.jpg', 1),
(3, 'blue-pass-2-1196199-639x496.jpg', 2),
(4, 'laon-city-france-1220809-639x468.jpg', 2),
(5, 'blue-pass-2-1196199-639x496.jpg', 3),
(6, 'laon-city-france-1220809-639x468.jpg', 4),
(7, 'blue-pass-2-1196199-639x496.jpg', 4),
(8, 'kanada_gory_alberta_banff_national_park_sneg_zima_104589_800x600.jpg', 4),
(13, 'blue-pass-2-1196199-639x496.jpg', 7),
(14, 'blue-pass-2-1196199-639x496.jpg', 8),
(15, 'blue-pass-2-1196199-639x496.jpg', 9),
(16, 'blue-pass-2-1196199-639x496.jpg', 10),
(17, 'blue-pass-2-1196199-639x496.jpg', 13),
(27, 'dreamworld-corporate-1234883-639x464.jpg', 14),
(29, 'kanada_gory_alberta_banff_national_park_sneg_zima_104589_800x600.jpg', 11),
(31, 'dreamworld-corporate-1234883-639x464.jpg', 12),
(33, 'laon-city-france-1220809-639x468.jpg', 17),
(34, 'hourglass-1543596-640x480.jpg', 18),
(35, 'laon-city-france-1220809-639x468.jpg', 19),
(38, 'laon-city-france-1220809-639x468.jpg', 16),
(39, 'kanada_gory_alberta_banff_national_park_sneg_zima_104589_800x600.jpg', 7),
(40, 'laon-city-france-1220809-639x468.jpg', 7),
(41, 'kanada_gory_alberta_banff_national_park_sneg_zima_104589_800x600.jpg', 8),
(42, 'laon-city-france-1220809-639x468.jpg', 8),
(50, 'kanada_gory_alberta_banff_national_park_sneg_zima_104589_800x600.jpg', 26),
(51, 'kanada_gory_alberta_banff_national_park_sneg_zima_104589_800x600.jpg', 27),
(52, 'blue-pass-2-1196199-639x496.jpg', 28),
(53, 'blue-pass-2-1196199-639x496.jpg', 29),
(54, 'blue-pass-2-1196199-639x496.jpg', 30),
(55, 'blue-pass-2-1196199-639x496.jpg', 31),
(56, 'blue-pass-2-1196199-639x496.jpg', 32),
(57, 'blue-pass-2-1196199-639x496.jpg', 33),
(58, 'blue-pass-2-1196199-639x496.jpg', 34),
(59, 'laon-city-france-1220809-639x468.jpg', 35),
(60, 'laon-city-france-1220809-639x468.jpg', 36),
(61, 'blue-pass-2-1196199-639x496.jpg', 37),
(68, 'kanada_gory_alberta_banff_national_park_sneg_zima_104589_800x600.jpg', 39),
(69, 'laon-city-france-1220809-639x468.jpg', 39),
(70, 'laon-city-france-1220809-639x468.jpg', 40);

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
(1, 1, 2312, 1, 'fsdfs', '897878778', 'sadasda@sdgdsg.ru'),
(2, 11, 1233, 1, 'Adsdfsd', '8987978', 'saaskubleag@yandex.ru'),
(3, 10, 5454, 1, 'Adsdfsd', '8987978', 'saaskubleag@yandex.ru'),
(4, 11, 1233, 1, 'Adsdfsd', '8987978', 'saaskubleag@yandex.ru'),
(5, 10, 5454, 1, 'Adsdfsd', '8987978', 'saaskubleag@yandex.ru'),
(6, 11, 1233, 1, 'andrey', '89898952114', 'saaskubleag@yandex.ru'),
(7, 10, 5454, 16, 'andrey', '89898952114', 'saaskubleag@yandex.ru'),
(8, 11, 1233, 1, 'andrey', '89898952114', 'saaskubleag@yandex.ru'),
(9, 10, 5454, 16, 'andrey', '89898952114', 'saaskubleag@yandex.ru'),
(10, 10, 5454, 8, 'sdfsdfsdf', '898989894', 'saaskubleag@yandex.ru'),
(11, 11, 1233, 2, 'sdfsdfsdf', '898989894', 'saaskubleag@yandex.ru'),
(12, 8, 2233, 2, 'sdfsdfsdf', '898989894', 'saaskubleag@yandex.ru'),
(13, 14, 2121, 1, 'sdfsdfsdf', '898989894', 'saaskubleag@yandex.ru'),
(14, 13, 2321, 1, 'sdfsdfsdf', '898989894', 'saaskubleag@yandex.ru'),
(15, 10, 5454, 1, 'sdfsdf', '77878778787', 'admin@admin.com'),
(16, 11, 1233, 1, 'sdfsdf', '77878778787', 'admin@admin.com'),
(17, 8, 2233, 1, 'sdfsdf', '77878778787', 'admin@admin.com'),
(18, 10, 5454, 1, 'assd', '77878778787', 'saaskubleag@yandex.ru'),
(19, 8, 2233, 1, 'assd', '77878778787', 'saaskubleag@yandex.ru'),
(20, 11, 1233, 1, 'assd', '77878778787', 'saaskubleag@yandex.ru'),
(21, 10, 5454, 1, 'sdsdf', '77878778787', 'saaskubleag@yandex.ru'),
(22, 8, 2233, 1, 'sdsdf', '77878778787', 'saaskubleag@yandex.ru'),
(23, 11, 1233, 1, 'sdsdf', '77878778787', 'saaskubleag@yandex.ru'),
(24, 8, 2233, 1, 'sdfsdf', '77878778787', 'skubleag@yandex.ru'),
(25, 10, 5454, 1, 'sdfsdf', '77878778787', 'skubleag@yandex.ru'),
(26, 10, 5454, 1, 'zxsfsdfsd', '77878778787', 'saaskubleag@yandex.ru'),
(27, 8, 2233, 1, 'zxsfsdfsd', '77878778787', 'saaskubleag@yandex.ru'),
(28, 10, 5454, 1, 'аыв', '77878778787', 'saaskubleag@yandex.ru'),
(29, 8, 2233, 1, 'аыв', '77878778787', 'saaskubleag@yandex.ru'),
(30, 8, 2233, 1, 'dsfsdfsd', '77878778787', 'saaskubleag@yandex.ru'),
(31, 10, 5454, 1, 'dsfsdfsd', '77878778787', 'saaskubleag@yandex.ru'),
(32, 11, 1233, 1, 'dsfsdfsd', '77878778787', 'saaskubleag@yandex.ru'),
(33, 14, 2121, 1, 'dsfsdfsd', '77878778787', 'saaskubleag@yandex.ru'),
(34, 13, 2321, 2, 'dsfsdfsd', '77878778787', 'saaskubleag@yandex.ru'),
(35, 12, 12321, 1, 'dsfsdfsd', '77878778787', 'saaskubleag@yandex.ru'),
(36, 12, 12321, 1, 'aassfs', '1312323', 'admin@admin.com'),
(37, 10, 5454, 1, 'Andrey', '8959899789', 'Skybek@fsdfs.ru'),
(38, 14, 2121, 1, 'Andrey', '8959899789', 'Skybek@fsdfs.ru'),
(39, 16, 12312313, 1, 'Andrey', '8959899789', 'Skybek@fsdfs.ru'),
(40, 10, 5454, 2, 'xcvxsd', '23123123', 'saaskubleag@yandex.ru'),
(41, 11, 1233, 1, 'xcvxsd', '23123123', 'saaskubleag@yandex.ru'),
(42, 14, 2121, 1, 'xcvxsd', '23123123', 'saaskubleag@yandex.ru'),
(43, 10, 5454, 1, 'Asdfg123123', '8988925454', 'admin@admin.com'),
(44, 11, 1233, 1, 'zxcfc', '889898', 'saaskubleag@yandex.ru'),
(45, 11, 1233, 1, 'Andrey', '77878778787', 'skubleag@yandex.ru');

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
(7, 'dfdfgdsf', 'dfgdfg', '12123', 'on', '2'),
(8, 'dfsdf', 'sdfsdfd', '2233', 'on', '2'),
(9, 'dgdfg', 'dfgdf', '12312', 'off', '1'),
(10, 'dfsfsfsdfsd', 'sdfsd', '5454', 'on', '2'),
(11, 'dfsfsfsdfsd', 'sdfsd', '1233', 'on', '2'),
(12, 'dfsfsfsdfsd', 'sdfsd', '12321', 'on', '2'),
(13, 'dfsfsfsdfsd', 'sdfsd', '2321', 'on', '1'),
(14, 'sdfsdgm', 'sdfsdfds', '2121', 'on', '2'),
(16, '121321', '12312321', '12312313', 'on', '2'),
(17, 'sdfsdfs', 'dfsf', '1231', 'on', '1'),
(18, 'SAJKLJ', 'dgdfg', '1221', 'on', '1'),
(19, 'dfgdg', 'dfgfd', '12321', 'on', '1'),
(26, 'sdfsdf', 'sdfdssdf', '123123', 'on', '1'),
(27, 'ddssdf', 'fsdfsdf', '1231', 'on', '1'),
(28, 'dfsd', 'sdfsdf', 'sdfsd', 'on', '1'),
(29, 'dsdgd', 'dfgdfg', '21313', 'on', '1'),
(30, 'sdfsdfs', 'sdfsdf', '123', 'on', '1'),
(31, 'fdsfsdfsdf', 'sdfsdf', '23131', 'on', '1'),
(32, '13123dfsdf123123213', '2312321', '1231231', 'on', '1'),
(33, '424234', '234324', 'fsdfsdf', 'on', '1'),
(34, 'sdfsdfsf', '24234', '2342342', 'on', '1'),
(35, 'gfdgdfg', 'fgdgdfg', 'fgdfg', 'on', '1'),
(36, '21312312', '13123', 'sdasdad', 'on', '1'),
(37, 'fsfsdfsdf', 'dfsdfsdfsdfsdf', '1231231', 'on', '2'),
(39, 'Asadasd1', 'asfdsafsafsaf', '12312', 'on', '2'),
(40, 'fgfgjj', 'ghjghjgh', '24234', 'on', '2');

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
(91, 14, 14),
(92, 14, 4),
(93, 14, 5),
(94, 14, 6),
(95, 14, 7),
(96, 14, 8),
(97, 14, 9),
(98, 14, 10),
(99, 14, 11),
(101, 17, 7),
(102, 18, 16),
(103, 19, 10),
(105, 16, 16),
(106, 16, 7),
(107, 11, 7),
(108, 11, 8),
(109, 11, 9),
(110, 7, 7),
(111, 7, 8),
(112, 7, 9),
(113, 8, 7),
(114, 8, 8),
(115, 8, 9),
(125, 26, 7),
(126, 26, 8),
(127, 26, 9),
(128, 26, 10),
(129, 26, 11),
(130, 26, 12),
(131, 26, 13),
(132, 26, 14),
(133, 26, 16),
(134, 26, 17),
(135, 26, 18),
(136, 26, 19),
(137, 26, 23),
(138, 27, 7),
(139, 28, 8),
(140, 29, 7),
(251, 39, 8),
(288, 40, 9);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `sumilar`
--
ALTER TABLE `sumilar`
  MODIFY `id_similar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
