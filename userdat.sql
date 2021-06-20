-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 jun 2021 om 14:07
-- Serverversie: 10.4.19-MariaDB
-- PHP-versie: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `userdat`
--

CREATE TABLE `userdat` (
  `UNID` int(11) NOT NULL,
  `ranked` int(1) NOT NULL DEFAULT 0,
  `Username` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Middle_Names` varchar(255) DEFAULT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `Date_of_Birth` varchar(25) DEFAULT NULL,
  `Phone_Number` varchar(50) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `Postal_Code` varchar(10) DEFAULT NULL,
  `Street_Name_and_Number` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `JID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `userdat`
--

INSERT INTO `userdat` (`UNID`, `ranked`, `Username`, `Email`, `Password`, `First_Name`, `Middle_Names`, `Surname`, `Date_of_Birth`, `Phone_Number`, `Country`, `region`, `Postal_Code`, `Street_Name_and_Number`, `Website`, `JID`) VALUES
(1, 0, 'Qm9vdGpl', 'amVmZkBib21lbmVlci5uZXQ=', 'JDJ5JDEwJFd2bjVjemZpeVNKdURUSDJEQjhaRmVLVzdIV0dHcjQwdWFsR0o0WjFrR1VDbkVUejhGamxT', 'Ym8=', NULL, 'SHVsc2hvZg==', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 0, 'Qm9vdGplMTE=', 'MzI0ODk5MjQzODgzNEAzNDg5MjI4OTUubmw=', 'JDJ5JDEwJG9iUms4RDJuRjRWdkVUdlhUSy5BQk9sR3dKS2U3aXlqb0daYXdteXBrQ3V4REJNOC5ZSU5X', 'Ym8=', NULL, 'SHVsc2hvZg==', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 0, 'Qm9NZW5lZXI=', 'amVmZkBiby5ubA==', 'JDJ5JDEwJEFkeFJ0U3Yudmw5cDFjbkpJMFlKWXV4SkhwYU9CZ0xxQlN4ZDF2UlUzTzdVT1hidHR0N0xt', 'Qm8=', NULL, 'SHVsc2hvZg==', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `userdat`
--
ALTER TABLE `userdat`
  ADD PRIMARY KEY (`UNID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `userdat`
--
ALTER TABLE `userdat`
  MODIFY `UNID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
