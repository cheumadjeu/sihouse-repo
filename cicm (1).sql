-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 27 Juin 2017 à 14:50
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cicm`
--

-- --------------------------------------------------------

--
-- Structure de la table `journalisation`
--

CREATE TABLE IF NOT EXISTS `journalisation` (
  `code_journalisation` varchar(100) NOT NULL,
  `information` text NOT NULL,
  `adresse_ip` varchar(50) NOT NULL,
  `CNI` int(11) NOT NULL,
  PRIMARY KEY (`code_journalisation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE IF NOT EXISTS `personne` (
  `cni_personne` int(11) NOT NULL,
  `nom_personne` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `vehicules` text NOT NULL,
  `contact` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `don` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cni_personne`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`cni_personne`, `nom_personne`, `sexe`, `photo`, `vehicules`, `contact`, `login`, `password`, `don`, `email`) VALUES
(2017895302, 'cheumadjeu', 'M', '', '  ', 677123467, '', '', '', 'cheu@gmail.com'),
(6729999, 'Tona Ntjam', 'M', ' ', 'RAV4 5769CE Toyota', 679167818, '', '', '', ''),
(7982528, 'TSOGO', 'M', '', 'STARLET 13684CE ', 689109174, '', '', '', ''),
(5672829, 'Tionang nadege', 'F', ' ', '  ', 677878889, '', '', '', ''),
(20176577, 'Tankeu Guillome', 'M', ' ', '  ', 677756544, '', '', '', 'Tankeu@gmail.cm');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `code_service` varchar(100) NOT NULL,
  `nom_service` varchar(100) NOT NULL,
  `prix_unitaire` int(11) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `statut` varchar(100) NOT NULL,
  `photos` varchar(100) NOT NULL,
  `standing` varchar(100) NOT NULL,
  `quantite_stock` int(11) NOT NULL,
  `desription` text NOT NULL,
  PRIMARY KEY (`code_service`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `services`
--

INSERT INTO `services` (`code_service`, `nom_service`, `prix_unitaire`, `categorie`, `statut`, `photos`, `standing`, `quantite_stock`, `desription`) VALUES
('CA1', 'Chambre moderne', 5000, 'chambre', 'Libre', 'ca1tof1', '**', 0, 'Douche;pot;cuisine'),
('CA2', 'Chambres modeernes', 30000, 'chambre', 'libre', '', '***', 6, ''),
('SA1', 'Salle de fetes', 15000, 'salle', 'libre', '', '*', 5, ''),
('CA3', 'CHAMBRE ', 7000, 'chambre', 'libre', '', '*', 0, ''),
('CA4', 'CHAMBRE HAUT STANDING', 35000, 'chambre', 'libre', '', '****', 0, 'pour les bobo'),
('CA5', 'chambre classe', 27500, 'chambre', 'libre', '', '*****', 0, 'enfant de boss'),
('SA2', 'salle de fetes', 20000, 'salle', 'libre', '', '***', 0, 'e'),
('SA3', 'salon moderne', 15000, 'salle', 'libre', '', '**', 0, 'salle climatisee'),
('SA4', 'salle de conference moderne', 45000, 'salle', 'libre', '', '*****', 0, 'salle climatisee');

-- --------------------------------------------------------

--
-- Structure de la table `sollicitation`
--

CREATE TABLE IF NOT EXISTS `sollicitation` (
  `code_service` varchar(100) NOT NULL,
  `cni_personne` varchar(100) NOT NULL,
  `date_sollicitation_service` varchar(100) NOT NULL,
  `date_attribution_service` text NOT NULL,
  `deliver_service_agent` int(11) NOT NULL,
  `date_liberation_service` varchar(100) NOT NULL,
  `quantite_commandee` int(11) NOT NULL,
  PRIMARY KEY (`code_service`,`cni_personne`,`date_sollicitation_service`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
