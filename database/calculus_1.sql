-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 08 avr. 2021 à 13:58
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
-- Base de données : `calculus`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

DROP TABLE IF EXISTS `administration`;
CREATE TABLE IF NOT EXISTS `administration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `mdps` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administration`
--

INSERT INTO `administration` (`id`, `nom`, `prenom`, `Email`, `mdps`) VALUES
(6, 'Redoane', 'tohami', NULL, 'reDone123tohami'),
(5, 'Anas', 'Labzar', NULL, 'auzou@narton23'),
(4, 'Youssef', 'Ezzohayly', NULL, '1234567Y@oussef');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id2` int(11) NOT NULL AUTO_INCREMENT,
  `Email2` varchar(255) DEFAULT NULL,
  `mdpss` varchar(255) DEFAULT NULL,
  `DateNaissance` date DEFAULT NULL,
  `nom2` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id2`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id2`, `Email2`, `mdpss`, `DateNaissance`, `nom2`, `Gender`) VALUES
(1, 'principeanas80@gmail.com', 'Mahi@2002', '2002-12-05', 'anas labzar', 'man'),
(2, 'yahoo@yahoo.fr', 'afztre44', '1999-06-11', 'nan na', 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
