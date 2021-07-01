SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
CREATE TABLE `boarddat` (
  `boardid` int(100) NOT NULL, `boardtitle` varchar(300) NOT NULL, `boarddesc` varchar(10000) NOT NULL, `boardauthor` varchar(1000) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `boarddat` (`boardid`, `boardtitle`, `boarddesc`, `boardauthor`) VALUES
(1, 'VGhpcyBpcyBhIFRlc3QgVGl0bGU=', 'This is a \"long\" test text this text is created By Bo \"BoMeneer\" H on the twenty-eighth of June in two thousand twenty-one this sentence is used as a search query: the next sentence is a search query tester: MyNaMeisJeff', 'Qm9NZW5lZXI='),
(2, 'VGhpcyBpcyBhIFRlc3QgVGl0bGU=', 'This is a \"long\" test text this text is created By Bo \"BoMeneer\" H on the twenty-eighth of June in two thousand twenty-one this sentence is used as a search query: the next sentence is a search query tester: ThisIssparta', 'Qm9NZW5lZXI=');
CREATE TABLE `userdat` (`UNID` int(11) NOT NULL, `ranked` int(1) NOT NULL DEFAULT 0, `Username` varchar(255) DEFAULT NULL, `Email` varchar(255) DEFAULT NULL, `Password` varchar(255) DEFAULT NULL, `First_Name` varchar(255) DEFAULT NULL, `Middle_Names` varchar(255) DEFAULT NULL, `Surname` varchar(255) DEFAULT NULL, `Date_of_Birth` varchar(25) DEFAULT NULL, `Phone_Number` varchar(50) DEFAULT NULL, `Country` varchar(100) DEFAULT NULL, `region` varchar(50) DEFAULT NULL, `Postal_Code` varchar(10) DEFAULT NULL, `Street_Name_and_Number` varchar(255) DEFAULT NULL, `Website` varchar(255) DEFAULT NULL, `JID` int(11) DEFAULT NULL) 
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `userdat` (`UNID`, `ranked`, `Username`, `Email`, `Password`, `First_Name`, `Middle_Names`, `Surname`, `Date_of_Birth`, `Phone_Number`, `Country`, `region`, `Postal_Code`, `Street_Name_and_Number`, `Website`, `JID`) VALUES
(1, 0, 'Qm9vdGpl', 'MDE4ODY1N0BzdHVkZW50LnJvYy1uaWptZWdlbi5ubA==', 'JDJ5JDEwJFd2bjVjemZpeVNKdURUSDJEQjhaRmVLVzdIV0dHcjQwdWFsR0o0WjFrR1VDbkVUejhGamxT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);
ALTER TABLE `boarddat`
  ADD PRIMARY KEY (`boardid`);
ALTER TABLE `userdat`
  ADD PRIMARY KEY (`UNID`);
ALTER TABLE `boarddat`
  MODIFY `boardid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `userdat`
  MODIFY `UNID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;