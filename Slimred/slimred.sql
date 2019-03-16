-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 21 Février 2019 à 21:42
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `slimred`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin` varchar(50) NOT NULL,
  `mdpa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`admin`, `mdpa`) VALUES
('ghiles', 'ghiles');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_cat` int(2) NOT NULL,
  `nom_cat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`) VALUES
(1, ''),
(3, 'froid'),
(4, 'chaud');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_cl` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `pseudo` varchar(200) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id_cl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_cl`, `nom`, `prenom`, `pseudo`, `mdp`, `email`) VALUES
(9, 'begaz', 'ghiles', 'ghilesbegaz', '123456789', 'g@g'),
(10, 'ibga', 'bega', 'begaz', '987654321', 'g@n');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id_cmd` int(3) NOT NULL AUTO_INCREMENT,
  `date_cmd` date NOT NULL,
  `etat_cmd` tinyint(1) NOT NULL,
  `id_cl` int(3) NOT NULL,
  PRIMARY KEY (`id_cmd`),
  KEY `id_cl` (`id_cl`),
  KEY `id_cl_2` (`id_cl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `reference_prod` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `prix_unt` int(6) NOT NULL,
  `information` varchar(200) NOT NULL,
  `nbr_modele` int(2) NOT NULL,
  `id_cat` int(2) NOT NULL,
  `poid_piece` int(4) NOT NULL,
  `nom_piece` varchar(50) NOT NULL,
  PRIMARY KEY (`reference_prod`),
  KEY `id_catg` (`id_cat`),
  KEY `id_cat` (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`reference_prod`, `img`, `prix_unt`, `information`, `nbr_modele`, `id_cat`, `poid_piece`, `nom_piece`) VALUES
('1992h', 'uploads/slimred.png', 19, 'dorigine', 2, 1, 4, 'ghiles'),
('i555', 'lkmljkgfsdq', 50, 'zaredtcfhvgbyhunj', 4, 3, 50, 'chkopi'),
('j444', 'uploads/SOUP.jpg', 3, 'eretyuiop', 44, 1, 44, 'rrrrrr');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_cl`) REFERENCES `client` (`id_cl`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
