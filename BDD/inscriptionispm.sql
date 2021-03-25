-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 25 Mars 2021 à 11:28
-- Version du serveur :  5.7.11
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `inscriptionispm`
--
CREATE DATABASE IF NOT EXISTS `inscriptionispm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `inscriptionispm`;

-- --------------------------------------------------------

--
-- Structure de la table `banques`
--

DROP TABLE IF EXISTS `banques`;
CREATE TABLE IF NOT EXISTS `banques` (
  `idBanque` int(11) NOT NULL AUTO_INCREMENT,
  `RIB` varchar(500) DEFAULT NULL,
  `nom` varchar(500) DEFAULT NULL,
  `compte` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idBanque`),
  KEY `idBanque` (`idBanque`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

DROP TABLE IF EXISTS `departements`;
CREATE TABLE IF NOT EXISTS `departements` (
  `idDepartement` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`idDepartement`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `idEtudiant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `ddn` date DEFAULT NULL,
  `sexe` varchar(50) DEFAULT NULL,
  `adresse` varchar(500) DEFAULT NULL,
  `ecoleAnterieur` varchar(500) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `serieBacc` varchar(10) DEFAULT NULL,
  `nationalite` varchar(100) DEFAULT NULL,
  `diplome` varchar(500) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `cin` varchar(500) DEFAULT NULL,
  `loisir` varchar(500) DEFAULT NULL,
  `idModePaiement` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEtudiant`),
  KEY `id` (`idEtudiant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `filieres`
--

DROP TABLE IF EXISTS `filieres`;
CREATE TABLE IF NOT EXISTS `filieres` (
  `idFiliere` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `idDepartement` int(11) DEFAULT NULL,
  PRIMARY KEY (`idFiliere`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `mobiles`
--

DROP TABLE IF EXISTS `mobiles`;
CREATE TABLE IF NOT EXISTS `mobiles` (
  `idMobile` int(11) NOT NULL AUTO_INCREMENT,
  `operateur` varchar(100) DEFAULT NULL,
  `numero` varchar(100) DEFAULT NULL,
  `reference` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idMobile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

DROP TABLE IF EXISTS `paiements`;
CREATE TABLE IF NOT EXISTS `paiements` (
  `idPaiement` int(11) NOT NULL AUTO_INCREMENT,
  `idBanque` int(11) DEFAULT NULL,
  `idMobile` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPaiement`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
