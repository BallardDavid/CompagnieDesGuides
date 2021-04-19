-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 19 avr. 2021 à 15:41
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rando`
--

-- --------------------------------------------------------

--
-- Structure de la table `abris`
--

DROP TABLE IF EXISTS `abris`;
CREATE TABLE IF NOT EXISTS `abris` (
  `code_Abris` int(11) NOT NULL AUTO_INCREMENT,
  `nom_Abris` text COLLATE utf8_bin,
  `type_Abris` text COLLATE utf8_bin,
  `altitude_Abris` text COLLATE utf8_bin,
  `places_Abris` text COLLATE utf8_bin,
  `prixNuit_Abris` text COLLATE utf8_bin,
  `prixRepas_Abris` text COLLATE utf8_bin,
  `telGardien_Abris` text COLLATE utf8_bin,
  `code_Vallees` int(11) NOT NULL,
  PRIMARY KEY (`code_Abris`),
  KEY `code_Vallees` (`code_Vallees`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `abris`
--

INSERT INTO `abris` (`code_Abris`, `nom_Abris`, `type_Abris`, `altitude_Abris`, `places_Abris`, `prixNuit_Abris`, `prixRepas_Abris`, `telGardien_Abris`, `code_Vallees`) VALUES
(1, 'cabane1', 'cabane', '1000', '12', '5.0', NULL, NULL, 1),
(2, 'cabane2', 'cabane', '1500', '12', '5.0', NULL, NULL, 1),
(3, 'cabane3', 'cabane', '2200', '12', '5.0', NULL, NULL, 2),
(4, 'cabane4', 'cabane', '1500', '12', '7.50', NULL, NULL, 3),
(5, 'cabane5', 'cabane', '1800', '12', '8.0', NULL, NULL, 3),
(6, 'refuge1', 'refuge', '750', '25', '12.0', '7.50', '0612345678', 1),
(7, 'refuge2', 'refuge', '1150', '15', '17.0', '9.50', '0612345600', 2),
(8, 'refuge3', 'refuge', '800', '20', '14.0', '7.50', '0611010678', 2),
(9, 'refuge4', 'refuge', '1200', '10', '18.0', '10.0', '0643215678', 3),
(10, 'refuge5', 'refuge', '400', '15', '15.0', '10.50', '0600340078', 3),
(13, 'Gouter', 'cabane', '1230', '12', '10', '23', '078342', 1),
(14, 'Gouter', 'cabane', '1230', '12', '10', '23', '078342', 1),
(29, 'Treta', 'cabane', '1250', '23', '15', '12', '0675849345', 2),
(30, 'treta', 'refuge', '2400', '23', '25', '12', '0673445412', 1),
(31, 'abri9', 'cabane', '700', '12', '15', NULL, NULL, 1),
(32, 'Abri341Z', 'cabane', '1234', '11', '11', NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Structure de la table `ascension`
--

DROP TABLE IF EXISTS `ascension`;
CREATE TABLE IF NOT EXISTS `ascension` (
  `code_Sommets` int(11) NOT NULL,
  `code_Abris` int(11) NOT NULL,
  `difficulte_Ascension` text COLLATE utf8_bin,
  `duree_Ascension` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`code_Sommets`,`code_Abris`),
  KEY `code_Sommets` (`code_Sommets`),
  KEY `code_Abris` (`code_Abris`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `ascension`
--

INSERT INTO `ascension` (`code_Sommets`, `code_Abris`, `difficulte_Ascension`, `duree_Ascension`) VALUES
(1, 1, 'débutant', 15),
(1, 2, 'débutant', 6),
(1, 6, 'débutant', 10),
(1, 7, 'confirmé', 4),
(1, 8, 'confirmé', 10),
(2, 3, 'confirmé', 14),
(2, 7, 'débutant', 12),
(2, 8, 'confirmé', 15),
(3, 3, 'confirmé', 6),
(3, 4, 'confirmé', 5),
(3, 5, 'expert', 18),
(3, 7, 'expert', 18),
(3, 8, 'expert', 12),
(3, 9, 'confirmé', 7),
(3, 10, 'expert', 24),
(4, 4, 'expert', 15),
(4, 5, 'débutant', 4),
(4, 9, 'débutant', 10),
(4, 10, 'confirmé', 8),
(5, 4, 'expert', 20),
(5, 5, 'débutant', 4),
(5, 9, 'confirmé', 14),
(5, 10, 'débutant', 8),
(6, 4, 'expert', 22),
(6, 5, 'débutant', 8),
(6, 9, 'confirmé', 18),
(6, 10, 'débutant', 6);

-- --------------------------------------------------------

--
-- Structure de la table `concerner`
--

DROP TABLE IF EXISTS `concerner`;
CREATE TABLE IF NOT EXISTS `concerner` (
  `code_Sommets` int(11) NOT NULL,
  `code_Randonnees` int(11) NOT NULL,
  `date_Concerner` date DEFAULT NULL,
  PRIMARY KEY (`code_Sommets`,`code_Randonnees`),
  KEY `code_Sommets` (`code_Sommets`),
  KEY `code_Randonnees` (`code_Randonnees`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `concerner`
--

INSERT INTO `concerner` (`code_Sommets`, `code_Randonnees`, `date_Concerner`) VALUES
(1, 1, '2019-05-10'),
(2, 1, '2019-05-11'),
(3, 1, '2019-05-12'),
(4, 1, '2019-05-13'),
(5, 1, '2019-05-14');

-- --------------------------------------------------------

--
-- Structure de la table `guides`
--

DROP TABLE IF EXISTS `guides`;
CREATE TABLE IF NOT EXISTS `guides` (
  `code_Guides` int(11) NOT NULL AUTO_INCREMENT,
  `nom_Guides` text COLLATE utf8_bin,
  `prenom_Guides` text COLLATE utf8_bin,
  `email_Guides` text COLLATE utf8_bin,
  `motdepasse_Guides` text COLLATE utf8_bin,
  PRIMARY KEY (`code_Guides`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `guides`
--

INSERT INTO `guides` (`code_Guides`, `nom_Guides`, `prenom_Guides`, `email_Guides`, `motdepasse_Guides`) VALUES
(1, 'Truc', 'Bidule', 'bidule.truc@mail.fr', '$pass'),
(2, 'Chouette', 'Machin', 'machin.chouette@mail.net', '$pass');

-- --------------------------------------------------------

--
-- Structure de la table `randonnees`
--

DROP TABLE IF EXISTS `randonnees`;
CREATE TABLE IF NOT EXISTS `randonnees` (
  `code_Randonnees` int(11) NOT NULL AUTO_INCREMENT,
  `nbPersonnes_Randonnees` int(11) DEFAULT NULL,
  `dateDebut_Randonnees` date DEFAULT NULL,
  `dateFin_Randonnees` date DEFAULT NULL,
  `code_Guides` int(11) NOT NULL,
  PRIMARY KEY (`code_Randonnees`),
  KEY `code_Guides` (`code_Guides`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `randonnees`
--

INSERT INTO `randonnees` (`code_Randonnees`, `nbPersonnes_Randonnees`, `dateDebut_Randonnees`, `dateFin_Randonnees`, `code_Guides`) VALUES
(1, 6, '2019-05-10', '2019-05-15', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

DROP TABLE IF EXISTS `reserver`;
CREATE TABLE IF NOT EXISTS `reserver` (
  `code_Abris` int(11) NOT NULL,
  `code_Randonnees` int(11) NOT NULL,
  `date_Reserver` date DEFAULT NULL,
  `statut_Reserver` text COLLATE utf8_bin,
  PRIMARY KEY (`code_Abris`,`code_Randonnees`),
  KEY `code_Abris` (`code_Abris`),
  KEY `code_Randonnees` (`code_Randonnees`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `reserver`
--

INSERT INTO `reserver` (`code_Abris`, `code_Randonnees`, `date_Reserver`, `statut_Reserver`) VALUES
(3, 1, '2019-05-11', 'confirmé'),
(4, 1, '2019-05-12', 'confirmé'),
(5, 1, '2019-05-13', 'confirmé'),
(7, 1, '2019-05-10', 'confirmé'),
(10, 1, '2019-05-14', 'en attente');

-- --------------------------------------------------------

--
-- Structure de la table `sommets`
--

DROP TABLE IF EXISTS `sommets`;
CREATE TABLE IF NOT EXISTS `sommets` (
  `code_Sommets` int(11) NOT NULL AUTO_INCREMENT,
  `nom_Sommets` text COLLATE utf8_bin,
  `altitude_Sommets` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`code_Sommets`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `sommets`
--

INSERT INTO `sommets` (`code_Sommets`, `nom_Sommets`, `altitude_Sommets`) VALUES
(1, 'Sommet1_AB', '1752'),
(2, 'Sommet2_BB', '2150'),
(3, 'Sommet3_BC', '1980'),
(4, 'Sommet4_CC', '2350'),
(5, 'Sommet5_CC', '2050'),
(6, 'Sommet6_CD', '2450');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_name` varchar(24) COLLATE utf8_bin NOT NULL,
  `user_password` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_name`, `user_password`) VALUES
('admin', '$2y$10$6h/eg/B3j4YF9Gedf5bkVuk0.N61Pxu3rh8QnBsoEebpTIKprYcve');

-- --------------------------------------------------------

--
-- Structure de la table `vallees`
--

DROP TABLE IF EXISTS `vallees`;
CREATE TABLE IF NOT EXISTS `vallees` (
  `code_Vallees` int(11) NOT NULL AUTO_INCREMENT,
  `nom_Vallees` text COLLATE utf8_bin,
  PRIMARY KEY (`code_Vallees`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `vallees`
--

INSERT INTO `vallees` (`code_Vallees`, `nom_Vallees`) VALUES
(1, 'ValleeA'),
(2, 'ValleeG'),
(3, 'ValleeC'),
(4, 'ValleeD');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abris`
--
ALTER TABLE `abris`
  ADD CONSTRAINT `FK_Abris_code_Vallees` FOREIGN KEY (`code_Vallees`) REFERENCES `vallees` (`code_Vallees`);

--
-- Contraintes pour la table `ascension`
--
ALTER TABLE `ascension`
  ADD CONSTRAINT `FK_Ascension_code_Abris` FOREIGN KEY (`code_Abris`) REFERENCES `abris` (`code_Abris`),
  ADD CONSTRAINT `FK_Ascension_code_Sommets` FOREIGN KEY (`code_Sommets`) REFERENCES `sommets` (`code_Sommets`);

--
-- Contraintes pour la table `concerner`
--
ALTER TABLE `concerner`
  ADD CONSTRAINT `FK_Concerner_code_Randonnees` FOREIGN KEY (`code_Randonnees`) REFERENCES `randonnees` (`code_Randonnees`),
  ADD CONSTRAINT `FK_Concerner_code_Sommets` FOREIGN KEY (`code_Sommets`) REFERENCES `sommets` (`code_Sommets`);

--
-- Contraintes pour la table `randonnees`
--
ALTER TABLE `randonnees`
  ADD CONSTRAINT `FK_Randonnees_code_Guides` FOREIGN KEY (`code_Guides`) REFERENCES `guides` (`code_Guides`);

--
-- Contraintes pour la table `reserver`
--
ALTER TABLE `reserver`
  ADD CONSTRAINT `reserver_ibfk_1` FOREIGN KEY (`code_Abris`) REFERENCES `reserver` (`code_Abris`),
  ADD CONSTRAINT `reserver_ibfk_2` FOREIGN KEY (`code_Randonnees`) REFERENCES `randonnees` (`code_Randonnees`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserver_ibfk_3` FOREIGN KEY (`code_Abris`) REFERENCES `abris` (`code_Abris`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
