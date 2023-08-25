-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: host.docker.internal:3306
-- Erstellungszeit: 25. Aug 2023 um 10:46
-- Server-Version: 11.1.2-MariaDB
-- PHP-Version: 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `sommercamp`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nutzerdaten`
--

CREATE TABLE `nutzerdaten` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `passwort` varchar(127) NOT NULL,
  `rollen_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel_number` varchar(20) DEFAULT NULL,
  `stellenname` varchar(255) DEFAULT NULL,
  `unternehmen` varchar(255) DEFAULT NULL,
  `anrede` varchar(20) DEFAULT NULL,
  `beschreibung` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `nutzerdaten`
--

INSERT INTO `nutzerdaten` (`user_id`, `firstname`, `lastname`, `passwort`, `rollen_id`, `email`, `tel_number`, `stellenname`, `unternehmen`, `anrede`, `beschreibung`) VALUES
(6, 'admin', 'admin', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b', 0, 'admin@outlook.com', '', '', '', '', ''),
(7, 'Jens', 'Beyer', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b', 2, 'jens.beyer@outlook.com', '13456789', '', '', '', ''),
(9, 'Sebastian', 'Piatza', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b', 2, 'sebastian.piatza@outlook.com', '13456789', '', '', '', ''),
(10, 'Christian', 'Zöllner', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b', 2, 'christian.zöllner@outlook.com', '123456789', '', '', '', ''),
(11, 'Annett', 'Löser', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b', 2, 'annett.löser@outlook.com', '', '', '', '', ''),
(12, 'Valena', 'Ammon', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b', 2, 'valena.ammon@outlook.com', '1356789', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rollen`
--

CREATE TABLE `rollen` (
  `rollen_id` int(11) NOT NULL,
  `rollen_name` varchar(255) NOT NULL,
  `acc_le` varchar(1) NOT NULL,
  `acc_sc` varchar(1) NOT NULL,
  `acc_loe` varchar(1) NOT NULL,
  `pro_le` varchar(1) NOT NULL,
  `pro_sc` varchar(1) NOT NULL,
  `pro_loe` varchar(1) NOT NULL,
  `ter_le` varchar(1) NOT NULL,
  `ter_sc` varchar(1) NOT NULL,
  `ter_loe` varchar(1) NOT NULL,
  `buc_le` varchar(1) NOT NULL,
  `buc_sc` varchar(1) NOT NULL,
  `buc_loe` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `rollen`
--

INSERT INTO `rollen` (`rollen_id`, `rollen_name`, `acc_le`, `acc_sc`, `acc_loe`, `pro_le`, `pro_sc`, `pro_loe`, `ter_le`, `ter_sc`, `ter_loe`, `buc_le`, `buc_sc`, `buc_loe`) VALUES
(0, 'admin', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'),
(1, 'coordinator', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'),
(2, 'workshopleiter', 'S', 'S', 'S', 'A', 'S', 'S', 'A', 'N', 'N', 'A', 'S', 'S'),
(3, 'external', 'S', 'S', 'S', 'A', 'S', 'S', 'A', 'A', 'A', 'A', 'N', 'N');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `teilnehmer`
--

CREATE TABLE `teilnehmer` (
  `user_id` int(11) NOT NULL,
  `veranstaltungs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `teilnehmer`
--

INSERT INTO `teilnehmer` (`user_id`, `veranstaltungs_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `veranstaltungen`
--

CREATE TABLE `veranstaltungen` (
  `veranstaltungs_id` int(11) NOT NULL,
  `datum` date NOT NULL,
  `ort` varchar(255) NOT NULL,
  `startzeit` time DEFAULT NULL,
  `endzeit` time NOT NULL,
  `workshop_id` int(11) NOT NULL,
  `spezialisierung` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `veranstaltungen`
--

INSERT INTO `veranstaltungen` (`veranstaltungs_id`, `datum`, `ort`, `startzeit`, `endzeit`, `workshop_id`, `spezialisierung`) VALUES
(1, '2023-08-15', 'Dresden', '12:48:06', '10:08:00', 7, 'Kristall ziehen'),
(6, '2024-08-03', 'Oberschule Kitzscher\r\n', '16:56:34', '05:00:00', 1, NULL),
(7, '2023-08-10', 'Oberschule Borna', '04:56:34', '00:00:00', 1, NULL),
(8, '2023-10-19', 'Oberschule Frohburg', '13:56:34', '00:00:00', 1, NULL),
(9, '2024-05-24', 'Oberschule Claußnitz\r\n', '09:34:34', '00:00:00', 1, NULL),
(12, '2024-04-17', 'Martin – Luther Gymnasium, Frankenberg\r\n', '09:18:34', '00:00:00', 1, NULL),
(13, '2024-07-18', 'Friedrich Rückert Grundschule, Plauen', '11:48:24', '21:46:00', 1, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `workshop`
--

CREATE TABLE `workshop` (
  `workshop_id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `beschreibung` text NOT NULL,
  `dauer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `workshop`
--

INSERT INTO `workshop` (`workshop_id`, `titel`, `beschreibung`, `dauer`) VALUES
(1, 'halbleiter', 'halbleiter', 6),
(2, 'irgend was anderes', 'irgend was anderes', 8),
(3, 'Reinigen', 'Reinigen', 6),
(4, 'Metall/Gasabscheidung', 'Metall/Gasabscheidung', 4);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `nutzerdaten`
--
ALTER TABLE `nutzerdaten`
  ADD PRIMARY KEY (`user_id`);

--
-- Indizes für die Tabelle `rollen`
--
ALTER TABLE `rollen`
  ADD PRIMARY KEY (`rollen_id`);

--
-- Indizes für die Tabelle `teilnehmer`
--
ALTER TABLE `teilnehmer`
  ADD PRIMARY KEY (`user_id`,`veranstaltungs_id`);

--
-- Indizes für die Tabelle `veranstaltungen`
--
ALTER TABLE `veranstaltungen`
  ADD PRIMARY KEY (`veranstaltungs_id`);

--
-- Indizes für die Tabelle `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`workshop_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `nutzerdaten`
--
ALTER TABLE `nutzerdaten`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `veranstaltungen`
--
ALTER TABLE `veranstaltungen`
  MODIFY `veranstaltungs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT für Tabelle `workshop`
--
ALTER TABLE `workshop`
  MODIFY `workshop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
