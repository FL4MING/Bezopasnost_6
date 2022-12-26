-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 26 2022 г., 09:20
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bezopasnost`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `author` varchar(100) NOT NULL,
  `text` text CHARACTER SET utf32 COLLATE utf32_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `author`, `text`) VALUES
(1, 'Test', 'текст для теста'),
(20, 'FL4MING', '1234'),
(23, 'Test2', 'SELECT * FROM `comments` WHERE 1'),
(24, 'Test3', 'DELETE FROM `comments` WHERE `comments`.`id` = 23');

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE `content` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf32 COLLATE utf32_general_ci DEFAULT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `name`, `text`) VALUES
(1, 'Домашние котики', 'Мою кошку зовут Муся. Она красивая, шерсть у неё серо-белая, она очень любит играть с пушистой собачкой, с клубком бумаги. но больше всего она любит играть палочкой-пушистик. Она очень много-любит покушать она ест вискас, мясо, конфеты, сосиски, сметану, и многое другое. Я о своей кошке хорошо забочусь я её расчёсываю в неделю 5 раз,(и даже иногда я ей делаю причёски). Она у меня добрая, но иногда кусается это значит она играет!!! Она боится воды, полесоса(...<br>Однажды, это грустная история, было 9 мая и моя кошечка выпала из окна 5 этажа... Мне очень было её жалко, мы повезли её в больницу и врач сказал, что у неё повреждена нога и он назначил уколы. Мы делали уколы но она царапалась, но потом ей стало привычно. И всё прошло) Мы её купили на рынке там где продавались разные животные, и всё для животных одежда, тарелочки и многое другое. Она меня очень любит).\r\n\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(100) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `pass` text
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`) VALUES
(1, 'FL4MING', '$2y$10$O0dPzDXu3ZtZN2BpEKqX7epQdZd8Y1ml6gBD8nNYv1XDztpUEDQKe'),
(4, 'FL4MINGG', '$2y$10$m7UQKsgKXhPhi0jId0No7e7pklxm237g8KLiP62TkPFehrkFUUQMq'),
(5, 'Test', '$2y$10$.v66l85KrMLoLp88uM9GD.o6zVLxocANCYQqQGsXBgSYMCWRG2aUW'),
(6, 'Test2', '$2y$10$ZKUNX3YrFfdWzb.d3tZseuRxMDTJMKaXb/Jzt4CMVRDKww2SprxJK'),
(7, 'Test3', '$2y$10$0Ksu.3qv4lgXLYCKJ168BOxL0XVDcX97iPheIi7BBAQZsu.64KrFm'),
(8, 'Test4', '$2y$10$Atrd/qZAHQP3A5fbBLiMSuO5SUQ6QvevrCI.NCHOXuPJ5AH5GnRwi');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `author` (`author`);

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `user_id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
