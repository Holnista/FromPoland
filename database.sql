-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 23 Sty 2022, 18:03
-- Wersja serwera: 8.0.21
-- Wersja PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `library`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Zrzut danych tabeli `authors`
--

INSERT INTO `authors` (`id`, `name`, `birth`, `created`, `updated`) VALUES
(1, 'Remigiusz Mróz', '1987-01-15', '2022-01-21 09:56:51', '2022-01-21 09:57:00'),
(2, 'Stephen King', '1947-09-21', '2022-01-21 09:57:59', NULL),
(3, 'Andrzej Sapkowski', '1948-06-21', '2022-01-21 09:59:29', NULL),
(4, 'J.R.R. Tolkien', '1892-01-03', '2022-01-21 09:59:29', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author` int DEFAULT NULL,
  `reservation` int DEFAULT NULL,
  `pages` int DEFAULT NULL,
  `index` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `title` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `genre` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `published` date DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Zrzut danych tabeli `books`
--

INSERT INTO `books` (`id`, `author`, `reservation`, `pages`, `index`, `title`, `genre`, `published`, `created`, `updated`) VALUES
(1, 1, NULL, 496, '3212928430192', 'Kasacja', 'THRILLER', '2015-01-01', '2022-01-21 10:05:55', '2022-01-21 10:12:54'),
(2, 1, NULL, 474, '8248281208891', 'Ekspozycja', 'THRILLER', '2015-01-01', '2022-01-21 10:05:55', '2022-01-21 10:12:41'),
(3, 1, NULL, 520, '0425964860735', 'Listy zza grobu', 'THRILLER', '2019-01-01', '2022-01-21 10:06:32', '2022-01-21 10:13:50'),
(4, 2, NULL, 1104, '5940036728538', 'To', 'HORROR', '1986-09-15', '2022-01-21 10:08:27', '2022-01-21 10:14:39'),
(5, 2, NULL, 516, '9249603081062', 'Lśnienie', 'HORROR', '1977-01-28', '2022-01-21 10:08:27', '2022-01-21 10:15:12'),
(6, 2, NULL, 416, '9333077557217', 'Smętarz dla zwierzaków', 'HORROR', '1983-01-14', '2022-01-21 10:09:53', '2022-01-21 10:15:49'),
(7, 2, NULL, 528, '5016432254673', 'Billy Summers', 'THRILLER', '2021-08-03', '2022-01-21 10:09:53', '2022-01-21 10:16:12'),
(8, 3, NULL, 330, '0541241047814', 'Wiedźmin - Ostatnie życzenie', 'FANTASY', '1990-01-01', '2022-01-21 10:21:55', '2022-01-23 17:57:18'),
(9, 3, NULL, 397, '4573654563978', 'Wiedźmin - Miecz przeznaczenia', 'FANTASY', '2014-11-01', '2022-01-21 10:21:55', '2022-01-21 10:22:09'),
(10, 3, NULL, 339, '4278432620316', 'Wiedźmin - Krew elfów', 'FANTASY', '2014-10-28', '2022-01-21 10:27:51', '2022-01-21 10:27:58'),
(11, 4, NULL, 92, '4654175029480', 'Tree and Leaf', 'SCIENCE_FICTION', '1964-01-01', '2022-01-21 10:40:42', NULL),
(12, 4, NULL, 551, '1045716943268', 'Wyprawa', 'SCIENCE_FICTION', '1990-01-01', '2022-01-21 10:40:42', NULL),
(13, 4, NULL, 314, '8796485852812', 'Hobbit, czyli tam i z powrotem', 'SCIENCE_FICTION', '2002-02-19', '2022-01-21 13:21:25', '2022-01-23 17:57:23');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` int DEFAULT NULL,
  `book` int DEFAULT NULL,
  `valid` date DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) DEFAULT '1',
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `key` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `active`, `name`, `key`, `created`, `updated`) VALUES
(1, 1, 'Adam Chrapek', 'a3067e358902973b33d294baa370f852', '2022-01-23 18:00:43', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
