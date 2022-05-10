-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 07 mai 2022 à 17:16
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
-- Base de données : `site`
--

DELIMITER $$
--
-- Fonctions
--
DROP FUNCTION IF EXISTS `InitCap`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `InitCap` (`chaine` VARCHAR(20) CHARSET utf8) RETURNS VARCHAR(20) CHARSET utf8 NO SQL
    DETERMINISTIC
BEGIN
declare machaine varchar (20); 
set machaine=concat (upper(substring(chaine,1,1)),lower(substring(chaine,2)));
RETURN machaine;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(1) NOT NULL AUTO_INCREMENT,
  `id_membre` int(11) NOT NULL,
  `id_produit` int(1) NOT NULL,
  `nomCommande` varchar(20) NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `id_membre` (`id_membre`),
  KEY `id_produit` (`id_produit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id_membre` int(3) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(32) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `civilite` enum('m','f') NOT NULL,
  `ville` varchar(20) NOT NULL,
  `code_postal` int(5) UNSIGNED ZEROFILL NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `statut` enum('c','p') NOT NULL DEFAULT 'c',
  `credit` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_membre`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `civilite`, `ville`, `code_postal`, `adresse`, `statut`, `credit`) VALUES
(12, 'photo', '5ae0c1c8a5260bc7b6648f6fbd115c35', 'photo', 'photo', 'photo@gmail.com', 'm', 'boutdupont', 81660, 'RUE DES CEDRES\r\n13', 'p', 10),
(11, 'client', '62608e08adc29a8d6dbc9754e659f125', 'client', 'client', 'client@gmail.com', 'f', 'MAZAMET', 81200, '3 rue assemat rives', 'c', NULL),
(13, 'maeva', 'b6edd10559b20cb0a3ddaeb15e5267cc', 'vignon', 'maeva', 'maeva.client@gmail.com', 'f', 'mazamet', 81660, 'RUE DES CEDRES\r\n13', 'c', 10);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(3) NOT NULL AUTO_INCREMENT,
  `reference` varchar(20) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `prix` int(3) NOT NULL,
  `photo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_produit`),
  UNIQUE KEY `reference` (`reference`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `reference`, `categorie`, `titre`, `description`, `prix`, `photo`) VALUES
(20, 'random', 'Portrait', 'random', 'random', 2, 'lieu.png'),
(17, '12345651', 'Artistique', 'art', 'rt', 9, 'rose.jpg'),
(16, '1234321', 'Paysage', 'essaitaille', 'desc', 4, 'IMG_0008.JPG'),
(15, '123456789', 'Nature', 'essai', 'desc', 2, 'lieu.png'),
(14, '1234567', 'Nature', 'titre', 'desc', 34, 'rose.jpg'),
(13, '12345656', 'Nature', 'essai', 'essai', 10, 'rose.jpg'),
(19, 'ref', 'Portrait', 'ref', 'ref', 8, 'lieu.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
