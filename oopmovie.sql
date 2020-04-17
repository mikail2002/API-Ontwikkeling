-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 apr 2020 om 15:29
-- Serverversie: 10.4.8-MariaDB
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oopmovie`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `account`
--

CREATE TABLE `account` (
  `idaccount` int(255) NOT NULL,
  `gebruikersnaam` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `account`
--

INSERT INTO `account` (`idaccount`, `gebruikersnaam`, `wachtwoord`) VALUES
(1, 'mikail', 'mikailkoker2002');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `film`
--

CREATE TABLE `film` (
  `idFilm` int(255) NOT NULL,
  `Algezien` tinyint(255) NOT NULL DEFAULT 0,
  `Rating` int(255) DEFAULT NULL,
  `imdbID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `film`
--

INSERT INTO `film` (`idFilm`, `Algezien`, `Rating`, `imdbID`) VALUES
(2, 0, NULL, 'tt0120338'),
(4, 1, 6, 'tt2622500'),
(5, 1, NULL, 'tt2267998'),
(6, 1, NULL, 'tt0214341'),
(7, 1, NULL, 'tt1375666'),
(8, 0, NULL, 'tt3477064'),
(9, 0, NULL, 'tt0120338');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `film_has_account`
--

CREATE TABLE `film_has_account` (
  `Film_idFilm` int(255) NOT NULL,
  `account_idaccount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`idaccount`);

--
-- Indexen voor tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`idFilm`);

--
-- Indexen voor tabel `film_has_account`
--
ALTER TABLE `film_has_account`
  ADD KEY `account_rel1` (`account_idaccount`),
  ADD KEY `film_rel1` (`Film_idFilm`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `account`
--
ALTER TABLE `account`
  MODIFY `idaccount` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `film`
--
ALTER TABLE `film`
  MODIFY `idFilm` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `film_has_account`
--
ALTER TABLE `film_has_account`
  ADD CONSTRAINT `account_rel1` FOREIGN KEY (`account_idaccount`) REFERENCES `account` (`idaccount`),
  ADD CONSTRAINT `film_rel1` FOREIGN KEY (`Film_idFilm`) REFERENCES `film` (`idFilm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
