-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 02 oct. 2020 à 14:36
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gsblot_team3`
--

-- --------------------------------------------------------

--
-- Structure de la table `gsb_echantillon`
--

DROP TABLE IF EXISTS `gsb_echantillon`;
CREATE TABLE IF NOT EXISTS `gsb_echantillon` (
  `numEchant` int(11) NOT NULL,
  `dateSortie` date DEFAULT NULL,
  `dateVisite` date DEFAULT NULL,
  `numeroLot` int(11) NOT NULL,
  `matMedecin` int(11) DEFAULT NULL,
  `numeroUt` int(11) DEFAULT NULL,
  PRIMARY KEY (`numEchant`,`numeroLot`),
  KEY `fk2` (`numeroUt`),
  KEY `fk3` (`matMedecin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `gsb_echantillon`
--

INSERT INTO `gsb_echantillon` (`numEchant`, `dateSortie`, `dateVisite`, `numeroLot`, `matMedecin`, `numeroUt`) VALUES
(1, NULL, '2020-09-16', 10, 1, 1),
(2, NULL, '2020-09-07', 20, 3, 3),
(3, NULL, NULL, 30, NULL, 3),
(4, NULL, NULL, 20, NULL, 1),
(5, '2020-09-24', NULL, 30, NULL, 3),
(1, NULL, NULL, 12, NULL, 1),
(2, NULL, NULL, 12, NULL, 1),
(3, NULL, NULL, 12, NULL, 1),
(4, NULL, NULL, 12, NULL, 1),
(5, NULL, NULL, 12, NULL, 1),
(6, NULL, NULL, 12, NULL, 1),
(7, NULL, NULL, 12, NULL, 1),
(8, NULL, NULL, 12, NULL, 1),
(9, NULL, NULL, 12, NULL, 1),
(10, NULL, NULL, 12, NULL, 1),
(1, NULL, NULL, 8, NULL, NULL),
(2, NULL, NULL, 8, NULL, NULL),
(3, NULL, NULL, 8, NULL, NULL),
(1, NULL, NULL, 1, NULL, NULL),
(2, NULL, NULL, 1, NULL, NULL),
(3, NULL, NULL, 1, NULL, NULL),
(4, NULL, NULL, 1, NULL, NULL),
(5, NULL, NULL, 1, NULL, NULL),
(6, NULL, NULL, 1, NULL, NULL),
(7, NULL, NULL, 1, NULL, NULL),
(8, NULL, NULL, 1, NULL, NULL),
(9, NULL, NULL, 1, NULL, NULL),
(10, NULL, NULL, 1, NULL, NULL),
(11, NULL, NULL, 1, NULL, NULL),
(12, NULL, NULL, 1, NULL, NULL),
(1, NULL, NULL, 2, NULL, NULL),
(2, NULL, NULL, 2, NULL, NULL),
(3, NULL, NULL, 2, NULL, NULL),
(4, NULL, NULL, 2, NULL, NULL),
(5, NULL, NULL, 2, NULL, NULL),
(6, NULL, NULL, 2, NULL, NULL),
(7, NULL, NULL, 2, NULL, NULL),
(8, NULL, NULL, 2, NULL, NULL),
(9, NULL, NULL, 2, NULL, NULL),
(10, NULL, NULL, 2, NULL, NULL),
(11, NULL, NULL, 2, NULL, NULL),
(12, NULL, NULL, 2, NULL, NULL),
(13, NULL, NULL, 2, NULL, NULL),
(14, NULL, NULL, 2, NULL, NULL),
(15, NULL, NULL, 2, NULL, NULL),
(16, NULL, NULL, 2, NULL, NULL),
(17, NULL, NULL, 2, NULL, NULL),
(18, NULL, NULL, 2, NULL, NULL),
(19, NULL, NULL, 2, NULL, NULL),
(20, NULL, NULL, 2, NULL, NULL),
(21, NULL, NULL, 2, NULL, NULL),
(22, NULL, NULL, 2, NULL, NULL),
(23, NULL, NULL, 2, NULL, NULL),
(24, NULL, NULL, 2, NULL, NULL),
(25, NULL, NULL, 2, NULL, NULL),
(26, NULL, NULL, 2, NULL, NULL),
(27, NULL, NULL, 2, NULL, NULL),
(28, NULL, NULL, 2, NULL, NULL),
(29, NULL, NULL, 2, NULL, NULL),
(30, NULL, NULL, 2, NULL, NULL),
(31, NULL, NULL, 2, NULL, NULL),
(32, NULL, NULL, 2, NULL, NULL),
(33, NULL, NULL, 2, NULL, NULL),
(34, NULL, NULL, 2, NULL, NULL),
(35, NULL, NULL, 2, NULL, NULL),
(36, NULL, NULL, 2, NULL, NULL),
(37, NULL, NULL, 2, NULL, NULL),
(38, NULL, NULL, 2, NULL, NULL),
(39, NULL, NULL, 2, NULL, NULL),
(40, NULL, NULL, 2, NULL, NULL),
(41, NULL, NULL, 2, NULL, NULL),
(42, NULL, NULL, 2, NULL, NULL),
(43, NULL, NULL, 2, NULL, NULL),
(44, NULL, NULL, 2, NULL, NULL),
(45, NULL, NULL, 2, NULL, NULL),
(46, NULL, NULL, 2, NULL, NULL),
(47, NULL, NULL, 2, NULL, NULL),
(48, NULL, NULL, 2, NULL, NULL),
(49, NULL, NULL, 2, NULL, NULL),
(50, NULL, NULL, 2, NULL, NULL),
(51, NULL, NULL, 2, NULL, NULL),
(52, NULL, NULL, 2, NULL, NULL),
(53, NULL, NULL, 2, NULL, NULL),
(54, NULL, NULL, 2, NULL, NULL),
(55, NULL, NULL, 2, NULL, NULL),
(1, NULL, NULL, 3, NULL, NULL),
(2, NULL, NULL, 3, NULL, NULL),
(3, NULL, NULL, 3, NULL, NULL),
(4, NULL, NULL, 3, NULL, NULL),
(5, NULL, NULL, 3, NULL, NULL),
(6, NULL, NULL, 3, NULL, NULL),
(7, NULL, NULL, 3, NULL, NULL),
(8, NULL, NULL, 3, NULL, NULL),
(9, NULL, NULL, 3, NULL, NULL),
(10, NULL, NULL, 3, NULL, NULL),
(11, NULL, NULL, 3, NULL, NULL),
(12, NULL, NULL, 3, NULL, NULL),
(13, NULL, NULL, 3, NULL, NULL),
(14, NULL, NULL, 3, NULL, NULL),
(15, NULL, NULL, 3, NULL, NULL),
(16, NULL, NULL, 3, NULL, NULL),
(17, NULL, NULL, 3, NULL, NULL),
(18, NULL, NULL, 3, NULL, NULL),
(19, NULL, NULL, 3, NULL, NULL),
(20, NULL, NULL, 3, NULL, NULL),
(21, NULL, NULL, 3, NULL, NULL),
(22, NULL, NULL, 3, NULL, NULL),
(23, NULL, NULL, 3, NULL, NULL),
(24, NULL, NULL, 3, NULL, NULL),
(25, NULL, NULL, 3, NULL, NULL),
(26, NULL, NULL, 3, NULL, NULL),
(27, NULL, NULL, 3, NULL, NULL),
(28, NULL, NULL, 3, NULL, NULL),
(29, NULL, NULL, 3, NULL, NULL),
(30, NULL, NULL, 3, NULL, NULL),
(1, NULL, NULL, 4, NULL, NULL),
(2, NULL, NULL, 4, NULL, NULL),
(3, NULL, NULL, 4, NULL, NULL),
(4, NULL, NULL, 4, NULL, NULL),
(5, NULL, NULL, 4, NULL, NULL),
(6, NULL, NULL, 4, NULL, NULL),
(7, NULL, NULL, 4, NULL, NULL),
(8, NULL, NULL, 4, NULL, NULL),
(9, NULL, NULL, 4, NULL, NULL),
(10, NULL, NULL, 4, NULL, NULL),
(11, NULL, NULL, 4, NULL, NULL),
(12, NULL, NULL, 4, NULL, NULL),
(13, NULL, NULL, 4, NULL, NULL),
(14, NULL, NULL, 4, NULL, NULL),
(15, NULL, NULL, 4, NULL, NULL),
(16, NULL, NULL, 4, NULL, NULL),
(17, NULL, NULL, 4, NULL, NULL),
(18, NULL, NULL, 4, NULL, NULL),
(19, NULL, NULL, 4, NULL, NULL),
(20, NULL, NULL, 4, NULL, NULL),
(21, NULL, NULL, 4, NULL, NULL),
(22, NULL, NULL, 4, NULL, NULL),
(23, NULL, NULL, 4, NULL, NULL),
(24, NULL, NULL, 4, NULL, NULL),
(25, NULL, NULL, 4, NULL, NULL),
(26, NULL, NULL, 4, NULL, NULL),
(27, NULL, NULL, 4, NULL, NULL),
(28, NULL, NULL, 4, NULL, NULL),
(29, NULL, NULL, 4, NULL, NULL),
(30, NULL, NULL, 4, NULL, NULL),
(31, NULL, NULL, 4, NULL, NULL),
(32, NULL, NULL, 4, NULL, NULL),
(33, NULL, NULL, 4, NULL, NULL),
(34, NULL, NULL, 4, NULL, NULL),
(35, NULL, NULL, 4, NULL, NULL),
(36, NULL, NULL, 4, NULL, NULL),
(37, NULL, NULL, 4, NULL, NULL),
(38, NULL, NULL, 4, NULL, NULL),
(39, NULL, NULL, 4, NULL, NULL),
(40, NULL, NULL, 4, NULL, NULL),
(41, NULL, NULL, 4, NULL, NULL),
(42, NULL, NULL, 4, NULL, NULL),
(43, NULL, NULL, 4, NULL, NULL),
(44, NULL, NULL, 4, NULL, NULL),
(45, NULL, NULL, 4, NULL, NULL),
(46, NULL, NULL, 4, NULL, NULL),
(47, NULL, NULL, 4, NULL, NULL),
(48, NULL, NULL, 4, NULL, NULL),
(49, NULL, NULL, 4, NULL, NULL),
(50, NULL, NULL, 4, NULL, NULL),
(51, NULL, NULL, 4, NULL, NULL),
(52, NULL, NULL, 4, NULL, NULL),
(53, NULL, NULL, 4, NULL, NULL),
(54, NULL, NULL, 4, NULL, NULL),
(55, NULL, NULL, 4, NULL, NULL),
(56, NULL, NULL, 4, NULL, NULL),
(57, NULL, NULL, 4, NULL, NULL),
(58, NULL, NULL, 4, NULL, NULL),
(59, NULL, NULL, 4, NULL, NULL),
(60, NULL, NULL, 4, NULL, NULL),
(61, NULL, NULL, 4, NULL, NULL),
(62, NULL, NULL, 4, NULL, NULL),
(63, NULL, NULL, 4, NULL, NULL),
(64, NULL, NULL, 4, NULL, NULL),
(65, NULL, NULL, 4, NULL, NULL),
(66, NULL, NULL, 4, NULL, NULL),
(67, NULL, NULL, 4, NULL, NULL),
(68, NULL, NULL, 4, NULL, NULL),
(69, NULL, NULL, 4, NULL, NULL),
(70, NULL, NULL, 4, NULL, NULL),
(71, NULL, NULL, 4, NULL, NULL),
(72, NULL, NULL, 4, NULL, NULL),
(73, NULL, NULL, 4, NULL, NULL),
(74, NULL, NULL, 4, NULL, NULL),
(75, NULL, NULL, 4, NULL, NULL),
(76, NULL, NULL, 4, NULL, NULL),
(77, NULL, NULL, 4, NULL, NULL),
(78, NULL, NULL, 4, NULL, NULL),
(79, NULL, NULL, 4, NULL, NULL),
(80, NULL, NULL, 4, NULL, NULL),
(81, NULL, NULL, 4, NULL, NULL),
(82, NULL, NULL, 4, NULL, NULL),
(83, NULL, NULL, 4, NULL, NULL),
(84, NULL, NULL, 4, NULL, NULL),
(85, NULL, NULL, 4, NULL, NULL),
(86, NULL, NULL, 4, NULL, NULL),
(87, NULL, NULL, 4, NULL, NULL),
(88, NULL, NULL, 4, NULL, NULL),
(89, NULL, NULL, 4, NULL, NULL),
(90, NULL, NULL, 4, NULL, NULL),
(91, NULL, NULL, 4, NULL, NULL),
(92, NULL, NULL, 4, NULL, NULL),
(93, NULL, NULL, 4, NULL, NULL),
(94, NULL, NULL, 4, NULL, NULL),
(95, NULL, NULL, 4, NULL, NULL),
(96, NULL, NULL, 4, NULL, NULL),
(97, NULL, NULL, 4, NULL, NULL),
(98, NULL, NULL, 4, NULL, NULL),
(99, NULL, NULL, 4, NULL, NULL),
(100, NULL, NULL, 4, NULL, NULL),
(101, NULL, NULL, 4, NULL, NULL),
(102, NULL, NULL, 4, NULL, NULL),
(1, NULL, NULL, 5, NULL, NULL),
(2, NULL, NULL, 5, NULL, NULL),
(3, NULL, NULL, 5, NULL, NULL),
(4, NULL, NULL, 5, NULL, NULL),
(5, NULL, NULL, 5, NULL, NULL),
(6, NULL, NULL, 5, NULL, NULL),
(7, NULL, NULL, 5, NULL, NULL),
(8, NULL, NULL, 5, NULL, NULL),
(9, NULL, NULL, 5, NULL, NULL),
(10, NULL, NULL, 5, NULL, NULL),
(11, NULL, NULL, 5, NULL, NULL),
(12, NULL, NULL, 5, NULL, NULL),
(13, NULL, NULL, 5, NULL, NULL),
(14, NULL, NULL, 5, NULL, NULL),
(15, NULL, NULL, 5, NULL, NULL),
(16, NULL, NULL, 5, NULL, NULL),
(17, NULL, NULL, 5, NULL, NULL),
(18, NULL, NULL, 5, NULL, NULL),
(1, NULL, NULL, 6, NULL, NULL),
(2, NULL, NULL, 6, NULL, NULL),
(3, NULL, NULL, 6, NULL, NULL),
(4, NULL, NULL, 6, NULL, NULL),
(5, NULL, NULL, 6, NULL, NULL),
(6, NULL, NULL, 6, NULL, NULL),
(7, NULL, NULL, 6, NULL, NULL),
(8, NULL, NULL, 6, NULL, NULL),
(9, NULL, NULL, 6, NULL, NULL),
(10, NULL, NULL, 6, NULL, NULL),
(11, NULL, NULL, 6, NULL, NULL),
(12, NULL, NULL, 6, NULL, NULL),
(13, NULL, NULL, 6, NULL, NULL),
(14, NULL, NULL, 6, NULL, NULL),
(15, NULL, NULL, 6, NULL, NULL),
(16, NULL, NULL, 6, NULL, NULL),
(17, NULL, NULL, 6, NULL, NULL),
(18, NULL, NULL, 6, NULL, NULL),
(19, NULL, NULL, 6, NULL, NULL),
(20, NULL, NULL, 6, NULL, NULL),
(21, NULL, NULL, 6, NULL, NULL),
(22, NULL, NULL, 6, NULL, NULL),
(23, NULL, NULL, 6, NULL, NULL),
(24, NULL, NULL, 6, NULL, NULL),
(25, NULL, NULL, 6, NULL, NULL),
(26, NULL, NULL, 6, NULL, NULL),
(27, NULL, NULL, 6, NULL, NULL),
(28, NULL, NULL, 6, NULL, NULL),
(29, NULL, NULL, 6, NULL, NULL),
(30, NULL, NULL, 6, NULL, NULL),
(31, NULL, NULL, 6, NULL, NULL),
(32, NULL, NULL, 6, NULL, NULL),
(33, NULL, NULL, 6, NULL, NULL),
(34, NULL, NULL, 6, NULL, NULL),
(35, NULL, NULL, 6, NULL, NULL),
(36, NULL, NULL, 6, NULL, NULL),
(37, NULL, NULL, 6, NULL, NULL),
(38, NULL, NULL, 6, NULL, NULL),
(39, NULL, NULL, 6, NULL, NULL),
(40, NULL, NULL, 6, NULL, NULL),
(41, NULL, NULL, 6, NULL, NULL),
(42, NULL, NULL, 6, NULL, NULL),
(43, NULL, NULL, 6, NULL, NULL),
(44, NULL, NULL, 6, NULL, NULL),
(45, NULL, NULL, 6, NULL, NULL),
(46, NULL, NULL, 6, NULL, NULL),
(47, NULL, NULL, 6, NULL, NULL),
(48, NULL, NULL, 6, NULL, NULL),
(49, NULL, NULL, 6, NULL, NULL),
(50, NULL, NULL, 6, NULL, NULL),
(51, NULL, NULL, 6, NULL, NULL),
(52, NULL, NULL, 6, NULL, NULL),
(53, NULL, NULL, 6, NULL, NULL),
(54, NULL, NULL, 6, NULL, NULL),
(55, NULL, NULL, 6, NULL, NULL),
(56, NULL, NULL, 6, NULL, NULL),
(57, NULL, NULL, 6, NULL, NULL),
(58, NULL, NULL, 6, NULL, NULL),
(59, NULL, NULL, 6, NULL, NULL),
(60, NULL, NULL, 6, NULL, NULL),
(61, NULL, NULL, 6, NULL, NULL),
(62, NULL, NULL, 6, NULL, NULL),
(63, NULL, NULL, 6, NULL, NULL),
(64, NULL, NULL, 6, NULL, NULL),
(65, NULL, NULL, 6, NULL, NULL),
(66, NULL, NULL, 6, NULL, NULL),
(67, NULL, NULL, 6, NULL, NULL),
(68, NULL, NULL, 6, NULL, NULL),
(69, NULL, NULL, 6, NULL, NULL),
(70, NULL, NULL, 6, NULL, NULL),
(71, NULL, NULL, 6, NULL, NULL),
(72, NULL, NULL, 6, NULL, NULL),
(73, NULL, NULL, 6, NULL, NULL),
(74, NULL, NULL, 6, NULL, NULL),
(75, NULL, NULL, 6, NULL, NULL),
(76, NULL, NULL, 6, NULL, NULL),
(77, NULL, NULL, 6, NULL, NULL),
(78, NULL, NULL, 6, NULL, NULL),
(79, NULL, NULL, 6, NULL, NULL),
(80, NULL, NULL, 6, NULL, NULL),
(81, NULL, NULL, 6, NULL, NULL),
(82, NULL, NULL, 6, NULL, NULL),
(83, NULL, NULL, 6, NULL, NULL),
(84, NULL, NULL, 6, NULL, NULL),
(85, NULL, NULL, 6, NULL, NULL),
(86, NULL, NULL, 6, NULL, NULL),
(87, NULL, NULL, 6, NULL, NULL),
(88, NULL, NULL, 6, NULL, NULL),
(89, NULL, NULL, 6, NULL, NULL),
(90, NULL, NULL, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `gsb_lot`
--

DROP TABLE IF EXISTS `gsb_lot`;
CREATE TABLE IF NOT EXISTS `gsb_lot` (
  `numLot` int(11) NOT NULL,
  `dateFabrication` date NOT NULL,
  `idMedicament` int(11) NOT NULL,
  PRIMARY KEY (`numLot`),
  KEY `fk1` (`idMedicament`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `gsb_lot`
--

INSERT INTO `gsb_lot` (`numLot`, `dateFabrication`, `idMedicament`) VALUES
(10, '2020-09-04', 2),
(20, '2020-09-05', 4),
(30, '2020-09-06', 1),
(31, '2020-09-07', 1),
(32, '2020-09-08', 3),
(12, '2020-09-23', 1),
(8, '2020-09-25', 4),
(1, '2020-10-02', 5),
(2, '2020-10-02', 32),
(3, '2020-10-03', 2),
(4, '2020-10-03', 33),
(5, '2020-10-04', 3),
(6, '2020-10-10', 1);

-- --------------------------------------------------------

--
-- Structure de la table `gsb_medecin`
--

DROP TABLE IF EXISTS `gsb_medecin`;
CREATE TABLE IF NOT EXISTS `gsb_medecin` (
  `matriculeMedecin` int(11) NOT NULL,
  `nomMedecin` varchar(25) NOT NULL,
  `prenomMedecin` varchar(25) NOT NULL,
  PRIMARY KEY (`matriculeMedecin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `gsb_medecin`
--

INSERT INTO `gsb_medecin` (`matriculeMedecin`, `nomMedecin`, `prenomMedecin`) VALUES
(1, 'bertrand', 'louis'),
(2, 'donton', 'maxime'),
(3, 'grisou', 'julien'),
(4, 'michel', 'lea'),
(5, 'louis', 'robert'),
(6, 'pichou', 'corentin'),
(7, 'aloche', 'chloe'),
(8, 'bentalla', 'amin'),
(9, 'eroti', 'lysa'),
(10, 'berger', 'mohammed');

-- --------------------------------------------------------

--
-- Structure de la table `gsb_medicament`
--

DROP TABLE IF EXISTS `gsb_medicament`;
CREATE TABLE IF NOT EXISTS `gsb_medicament` (
  `idMedoc` int(11) NOT NULL AUTO_INCREMENT,
  `libMedoc` varchar(50) NOT NULL,
  PRIMARY KEY (`idMedoc`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `gsb_medicament`
--

INSERT INTO `gsb_medicament` (`idMedoc`, `libMedoc`) VALUES
(1, 'doliprane'),
(2, 'ibuprofene'),
(3, 'spasfon'),
(4, 'efferalgan'),
(5, 'dulcolax'),
(6, 'smecta'),
(7, 'lisopaine'),
(33, 'mapix'),
(32, 'zoloft'),
(34, 'radurix'),
(35, 'asticolax');

-- --------------------------------------------------------

--
-- Structure de la table `gsb_utilisateur`
--

DROP TABLE IF EXISTS `gsb_utilisateur`;
CREATE TABLE IF NOT EXISTS `gsb_utilisateur` (
  `numUt` int(11) NOT NULL,
  `nomUt` varchar(25) NOT NULL,
  `prenomUt` varchar(25) NOT NULL,
  `villeUt` varchar(50) NOT NULL,
  `mailUt` varchar(100) NOT NULL,
  `statutUt` varchar(25) NOT NULL,
  `loginUt` varchar(50) NOT NULL,
  `mdpUt` varchar(255) NOT NULL,
  PRIMARY KEY (`numUt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `gsb_utilisateur`
--

INSERT INTO `gsb_utilisateur` (`numUt`, `nomUt`, `prenomUt`, `villeUt`, `mailUt`, `statutUt`, `loginUt`, `mdpUt`) VALUES
(0, 'lechauve', 'mathieu', 'vernon', 'mathieulechauve@gmail.com', 'production', 'mathieu', 'cc479ee70694ef507cb504b0ae89cb87'),
(1, 'mar', 'leo', 'vernon', 'leo27@gmail.com', 'production', 'prod', 'd6e4a9b6646c62fc48baa6dd6150d1f7'),
(2, 'dupont', 'marc', 'paris', 'marcdupont@gmail.com', 'magasin', 'mag', '741f63d12d767bb3fd2b0251ed839499'),
(3, 'nook', 'tim', 'flins', 'timnook@gmail.com', 'visiteur', 'visit', '9de70f6546b2452f6e7b98b46ac36070'),
(4, 'calins', 'philippe', 'rouen', 'philippepro@gmail.com', 'direction', 'direction', 'ef72c37be9d1b9e6e5bbd6ef09448abe'),
(5, 'bernard', 'michel', 'rouen', 'michel.pro@gmail.com', 'magasin', 'bernard', '78d6810e1299959f3a8db157045aa926'),
(6, 'baron', 'guillaume', 'blaru', 'baron.guillaume@gmail.com', 'visiteur', 'guillaume', '0937d6b529933d0ef59ce458668013b9'),
(7, 'rudy', 'chloe', 'rouen', 'chloechloe@gmail.com', 'visiteur', 'chloe', '559a7f208866f0063b1ea8d5ca2ee816'),
(8, 'nicky', 'larson', 'lyon', 'nickylarson@gmail.com', 'visiteur', 'nicky', '9de70f6546b2452f6e7b98b46ac36070');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
