-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3309
-- Gegenereerd op: 01 feb 2019 om 00:26
-- Serverversie: 5.7.23
-- PHP-versie: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todoapp`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `tasks`
--

INSERT INTO `tasks` (`task_id`, `name`, `status`, `created_at`, `description`) VALUES
(1, 'Find bugs', 2, '2016-04-10 23:50:40', 'tsdsdd'),
(2, 'Review code', 2, '2016-04-10 23:50:40', ''),
(4, 'Refactor Code', 2, '2016-04-10 23:50:40', 'done'),
(5, 'Push to prod', 2, '2016-04-10 23:50:50', ''),
(6, 'test', 2, '2019-01-28 09:25:18', 'tsaadd'),
(7, 'd3ee', 2, '2019-01-28 09:25:51', ''),
(8, 'fd', 2, '2019-01-28 10:00:15', 'f'),
(9, 'tttt', 2, '2019-01-28 10:35:48', 'tttt'),
(10, 'Refactor Code', 2, '2019-01-28 10:38:48', 'sd'),
(11, 'dDDD', 2, '2019-01-28 10:41:26', 'ts'),
(12, 'd3ee', 1, '2019-01-28 11:20:23', 'd');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
