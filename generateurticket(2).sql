-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 30 avr. 2019 à 14:26
-- Version du serveur :  5.7.23-log
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `generateurticket`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`id`, `nom`, `prenom`) VALUES
(1, 'Facchino', 'Jeremy'),
(2, 'Martin', 'Elodie'),
(3, 'Monterrat', 'Alexis'),
(4, 'Greneron', 'Mylene'),
(6, 'Sauvageon', 'Audrey'),
(7, 'Borssard', 'Alban'),
(8, 'Francisco', 'Cyril'),
(9, 'Soubeyrand', 'Adrien'),
(10, 'Vilain', 'Raphael'),
(11, 'Celikbas', 'Mikail'),
(12, 'Raoselina', 'Brian');

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

DROP TABLE IF EXISTS `formateur`;
CREATE TABLE IF NOT EXISTS `formateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formateur`
--

INSERT INTO `formateur` (`id`, `nom`, `prenom`) VALUES
(1, 'El Agraoui', 'Amine'),
(2, 'Cote', 'FX'),
(3, 'Bonnier', 'Vincent'),
(4, 'Monjon', 'Anton');

-- --------------------------------------------------------

--
-- Structure de la table `raison`
--

DROP TABLE IF EXISTS `raison`;
CREATE TABLE IF NOT EXISTS `raison` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `raison`
--

INSERT INTO `raison` (`id`, `libelle`) VALUES
(1, 'Mon ordi redemarre dans le bios'),
(2, 'Je suis coince sur mon code'),
(3, 'NullPointerException'),
(4, 'Je peux frapper mon voisin?');

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idEleve` int(11) NOT NULL,
  `idRaison` int(11) NOT NULL,
  `idFormateur` int(11) NOT NULL,
  `idUrgence` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idEleve` (`idEleve`),
  KEY `idRaison` (`idRaison`),
  KEY `idFormateur` (`idFormateur`),
  KEY `idUrgence` (`idUrgence`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`id`, `idEleve`, `idRaison`, `idFormateur`, `idUrgence`) VALUES
(26, 1, 1, 1, 1),
(30, 3, 3, 3, 3),
(29, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `urgence`
--

DROP TABLE IF EXISTS `urgence`;
CREATE TABLE IF NOT EXISTS `urgence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `urgence`
--

INSERT INTO `urgence` (`id`, `libelle`) VALUES
(1, 'Bien sur que c\'est urgent'),
(2, 'Meme si c\'est pas urgent je mets urgent'),
(3, 'Pas urgent du moment que tu viens pas a 17h'),
(4, 'Si tu viens pas dans 2mn je me casse');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
