-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 25 2015 г., 00:39
-- Версия сервера: 5.6.24
-- Версия PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `world_k`
--

-- --------------------------------------------------------

--
-- Структура таблицы `advice`
--

CREATE TABLE IF NOT EXISTS `advice` (
  `check` tinyint(1) NOT NULL,
  `id_advice` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `id_autors` int(11) NOT NULL,
  `advice` text NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_pub` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `alerts`
--

CREATE TABLE IF NOT EXISTS `alerts` (
  `text` varchar(255) NOT NULL,
  `target` int(2) NOT NULL,
  `date_p` date NOT NULL,
  `date_e` date NOT NULL,
  `type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `alrd_prep`
--

CREATE TABLE IF NOT EXISTS `alrd_prep` (
  `id_user` smallint(6) NOT NULL,
  `id_recipe` smallint(6) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `image` varchar(60) NOT NULL,
  `add_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id_comment` smallint(6) NOT NULL,
  `id_author` smallint(6) NOT NULL,
  `text` varchar(256) NOT NULL,
  `id_rec` smallint(6) NOT NULL,
  `add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `component`
--

CREATE TABLE IF NOT EXISTS `component` (
  `id_recipe` varchar(20) NOT NULL,
  `id_component` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL DEFAULT '1 шт.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `component`
--

INSERT INTO `component` (`id_recipe`, `id_component`, `quantity`) VALUES
('1', '1', '1'),
('2', '1', '2'),
('3', '1', '3'),
('4', '1', '4'),
('5', '1', '5'),
('6', '1', '6'),
('7', '1', '7'),
('8', '1', '8'),
('9', '1', '9'),
('10', '1', '10'),
('10', '2', '10');

-- --------------------------------------------------------

--
-- Структура таблицы `favor`
--

CREATE TABLE IF NOT EXISTS `favor` (
  `id_user` smallint(6) NOT NULL,
  `recipe_id` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `favor`
--

INSERT INTO `favor` (`id_user`, `recipe_id`) VALUES
(1, 1);

--
-- Триггеры `favor`
--
DELIMITER $$
CREATE TRIGGER `unwant_prep` AFTER DELETE ON `favor`
 FOR EACH ROW UPDATE `recipe` SET want_prepare = want_prepare-1 WHERE id_recipe=OLD.id_recipe
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `want_prep` AFTER INSERT ON `favor`
 FOR EACH ROW UPDATE `recipe` SET want_prepare = want_prepare+1 WHERE id_recipe=NEW.id_recipe
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `fav_adv`
--

CREATE TABLE IF NOT EXISTS `fav_adv` (
  `id_user` int(11) NOT NULL,
  `id_advice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `help`
--

CREATE TABLE IF NOT EXISTS `help` (
  `id_art` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `kitchens`
--

CREATE TABLE IF NOT EXISTS `kitchens` (
  `id` smallint(6) NOT NULL,
  `title_k` char(50) NOT NULL,
  `image_k` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kitchens`
--

INSERT INTO `kitchens` (`id`, `title_k`, `image_k`) VALUES
(1, 'Русская', ''),
(2, 'Японская', '');

-- --------------------------------------------------------

--
-- Структура таблицы `likes_recipe`
--

CREATE TABLE IF NOT EXISTS `likes_recipe` (
  `id_user` int(11) NOT NULL,
  `id_recipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `menu_day`
--

CREATE TABLE IF NOT EXISTS `menu_day` (
  `id_recipe` int(11) NOT NULL,
  `date` date NOT NULL COMMENT 'дата, когда рецепт выставлен ',
  `type` int(11) NOT NULL COMMENT '1 -- завтрак, 2 -- обед, 3 -- ужин',
  `class` int(11) NOT NULL COMMENT '1 -- бизнес, 2 -- средний, 3 -- эконом'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu_day`
--

INSERT INTO `menu_day` (`id_recipe`, `date`, `type`, `class`) VALUES
(1, '2015-07-24', 1, 2),
(2, '2015-07-24', 2, 2),
(4, '0000-00-00', 3, 2),
(5, '2015-07-24', 1, 1),
(6, '2015-07-24', 2, 1),
(7, '2015-07-24', 3, 1),
(8, '0000-00-00', 1, 3),
(9, '0000-00-00', 2, 3),
(10, '0000-00-00', 3, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `name_component`
--

CREATE TABLE IF NOT EXISTS `name_component` (
  `id` smallint(6) NOT NULL,
  `component` char(50) NOT NULL,
  `calories` varchar(32) DEFAULT NULL,
  `price` varchar(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `name_component`
--

INSERT INTO `name_component` (`id`, `component`, `calories`, `price`) VALUES
(1, 'Соль', '', ''),
(2, 'Сахар', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` smallint(6) NOT NULL,
  `title` varchar(40) NOT NULL,
  `texts` text NOT NULL,
  `image` varchar(120) NOT NULL DEFAULT 'default_image.jpg',
  `id_autors` smallint(6) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_pub` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id_news`, `title`, `texts`, `image`, `id_autors`, `date_added`, `date_pub`) VALUES
(1, 'test news 1', '1', 'default_image.jpg', 1, '2015-07-22 17:32:33', '0000-00-00 00:00:00'),
(2, 'test news 2', '2', 'default_image.jpg', 1, '2015-07-25 01:30:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `rating_news`
--

CREATE TABLE IF NOT EXISTS `rating_news` (
  `id_news` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `rating_user`
--

CREATE TABLE IF NOT EXISTS `rating_user` (
  `id_user` int(11) NOT NULL,
  `id_target` int(11) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `recipe`
--

CREATE TABLE IF NOT EXISTS `recipe` (
  `id_recipe` smallint(6) NOT NULL,
  `title` varchar(40) NOT NULL,
  `id_autors` smallint(6) NOT NULL,
  `recipe` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `likes` smallint(6) NOT NULL DEFAULT '0',
  `dislike` smallint(6) NOT NULL DEFAULT '0',
  `want_prepare` smallint(6) NOT NULL DEFAULT '0',
  `prepare` smallint(6) NOT NULL DEFAULT '0',
  `kitchens` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL DEFAULT 'no',
  `checked` varchar(10) NOT NULL DEFAULT 'false',
  `portions` int(8) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `recipe`
--

INSERT INTO `recipe` (`id_recipe`, `title`, `id_autors`, `recipe`, `image`, `date_added`, `likes`, `dislike`, `want_prepare`, `prepare`, `kitchens`, `category`, `checked`, `portions`, `time`) VALUES
(1, 'test recipe 1', 1, '1', 'default_image.jpg', '2015-07-22 17:32:13', 0, 0, 1, 0, '1', 'no', 'false', 1, '1 Минут'),
(2, 'test recipe 2', 1, '2', 'default_image.jpg', '2015-07-22 17:48:26', 0, 0, 1, 0, '2', 'no', 'false', 2, '2 Минут'),
(4, 'test recipe 4', 1, '4', 'default_image.jpg', '2015-07-23 12:55:26', 0, 0, 0, 0, '2', 'no', 'false', 4, '4 Минут'),
(5, 'test recipe 5', 1, '5', 'default_image.jpg', '2015-07-23 12:55:40', 0, 0, 0, 0, '1', 'no', 'false', 5, '5 Минут'),
(6, 'test recipe 6', 1, '6', 'default_image.jpg', '2015-07-23 12:55:55', 0, 0, 0, 0, '1', 'no', 'false', 6, '6 Минут'),
(7, 'test recipe 7', 1, '7', 'default_image.jpg', '2015-07-23 12:56:08', 0, 0, 0, 0, '1', 'no', 'false', 0, '7 Минут'),
(8, 'test recipe 8', 1, '8', 'default_image.jpg', '2015-07-23 12:56:20', 0, 0, 0, 0, '1', 'no', 'false', 8, '8 Минут'),
(9, 'test recipe 9', 1, '9', 'default_image.jpg', '2015-07-23 14:09:00', 0, 0, 0, 0, '1', 'no', 'false', 9, '9 Минут'),
(10, 'test recipe 10', 1, '10', 'default_image.jpg', '2015-07-24 17:44:32', 0, 0, 0, 0, '2', 'no', 'false', 10, '10 Часов');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Структура таблицы `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id_user` int(11) NOT NULL,
  `id_subscriber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscribers`
--

INSERT INTO `subscribers` (`id_user`, `id_subscriber`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `name` varchar(32) NOT NULL,
  `family` varchar(32) NOT NULL,
  `dateofreg` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `logins`, `last_login`, `name`, `family`, `dateofreg`) VALUES
(1, 'Lilly', '11579da96b5df72e1bb80efb4a3478b386c09bb77708e04f7d97db74cc8d1dae', 25, 1437776981, 'Максим', 'Сульфриев', '2015-07-22'),
(2, 'test_user_2', '11579da96b5df72e1bb80efb4a3478b386c09bb77708e04f7d97db74cc8d1dae', 1, 1437648112, '123', '321', '2015-07-23');

--
-- Триггеры `users`
--
DELIMITER $$
CREATE TRIGGER `count_users` AFTER INSERT ON `users`
 FOR EACH ROW IF NEW.id>1000 THEN 
INSERT INTO `news` (`title`,`texts`,`image`,`id_autors`,`date_added`) VALUES ('Нас больше 1000!', 'Нас стало больше 1000', 'default_image', '36', CURRENT_DATE);
END IF
$$
DELIMITER ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `advice`
--
ALTER TABLE `advice`
  ADD PRIMARY KEY (`id_advice`), ADD UNIQUE KEY `id_advice` (`id_advice`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Индексы таблицы `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id_art`);

--
-- Индексы таблицы `kitchens`
--
ALTER TABLE `kitchens`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `name_component`
--
ALTER TABLE `name_component`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Индексы таблицы `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id_recipe`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uniq_name` (`name`);

--
-- Индексы таблицы `roles_users`
--
ALTER TABLE `roles_users`
  ADD PRIMARY KEY (`user_id`,`role_id`), ADD KEY `fk_role_id` (`role_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uniq_username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `advice`
--
ALTER TABLE `advice`
  MODIFY `id_advice` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `help`
--
ALTER TABLE `help`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `kitchens`
--
ALTER TABLE `kitchens`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `name_component`
--
ALTER TABLE `name_component`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id_news` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id_recipe` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
