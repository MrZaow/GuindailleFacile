-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 08 Mars 2015 à 22:11
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `guindaillefacile`
--

-- --------------------------------------------------------

--
-- Structure de la table `alcoolsforts`
--

CREATE TABLE IF NOT EXISTS `alcoolsforts` (
  `idingredient` int(11) NOT NULL,
  PRIMARY KEY (`idingredient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `avantagesinconvenients`
--

CREATE TABLE IF NOT EXISTS `avantagesinconvenients` (
  `idavantage` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `avantageouinconvenient` char(25) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idavantage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE IF NOT EXISTS `avoir` (
  `idingredient` int(11) NOT NULL,
  `idavantage` int(11) NOT NULL,
  PRIMARY KEY (`idingredient`,`idavantage`),
  KEY `FK_AVOIR_idavantage` (`idavantage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `avoir_format`
--

CREATE TABLE IF NOT EXISTS `avoir_format` (
  `idingredient` int(11) NOT NULL,
  `idformat` int(11) NOT NULL,
  PRIMARY KEY (`idingredient`,`idformat`),
  KEY `FK_AVOIR_FORMAT_idformat` (`idformat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `bieres`
--

CREATE TABLE IF NOT EXISTS `bieres` (
  `type` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `paysorigine` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `couleur` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `idingredient` int(11) NOT NULL,
  PRIMARY KEY (`idingredient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `boissons`
--

CREATE TABLE IF NOT EXISTS `boissons` (
  `pourcentagealcool` float DEFAULT NULL,
  `prixlitre` float DEFAULT NULL,
  `cotesur5` float DEFAULT NULL,
  `image1` longblob,
  `image2` longblob,
  `image3` longblob,
  `idingredient` int(11) NOT NULL,
  PRIMARY KEY (`idingredient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `cocktails`
--

CREATE TABLE IF NOT EXISTS `cocktails` (
  `preparation` text COLLATE utf8_bin,
  `idingredient` int(11) NOT NULL,
  PRIMARY KEY (`idingredient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

CREATE TABLE IF NOT EXISTS `contenir` (
  `qte` float DEFAULT NULL,
  `idingredient` int(11) NOT NULL,
  `idingredient_INGREDIENTS` int(11) NOT NULL,
  PRIMARY KEY (`idingredient`,`idingredient_INGREDIENTS`),
  KEY `FK_CONTENIR_idingredient_INGREDIENTS` (`idingredient_INGREDIENTS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `exemplariser`
--

CREATE TABLE IF NOT EXISTS `exemplariser` (
  `idingredient` int(11) NOT NULL,
  `idmeilleuralcool` int(11) NOT NULL,
  PRIMARY KEY (`idingredient`,`idmeilleuralcool`),
  KEY `FK_EXEMPLARISER_idmeilleuralcool` (`idmeilleuralcool`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `formats`
--

CREATE TABLE IF NOT EXISTS `formats` (
  `idformat` int(11) NOT NULL AUTO_INCREMENT,
  `recipient` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  PRIMARY KEY (`idformat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

CREATE TABLE IF NOT EXISTS `ingredients` (
  `idingredient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `resume` text COLLATE utf8_bin,
  `description` text COLLATE utf8_bin,
  `unitemesure` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idingredient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `meilleursalcools`
--

CREATE TABLE IF NOT EXISTS `meilleursalcools` (
  `idmeilleuralcool` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `prixlitre` float DEFAULT NULL,
  PRIMARY KEY (`idmeilleuralcool`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `alcoolsforts`
--
ALTER TABLE `alcoolsforts`
  ADD CONSTRAINT `FK_ALCOOLSFORTS_idingredient` FOREIGN KEY (`idingredient`) REFERENCES `ingredients` (`idingredient`);

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `FK_AVOIR_idavantage` FOREIGN KEY (`idavantage`) REFERENCES `avantagesinconvenients` (`idavantage`),
  ADD CONSTRAINT `FK_AVOIR_idingredient` FOREIGN KEY (`idingredient`) REFERENCES `ingredients` (`idingredient`);

--
-- Contraintes pour la table `avoir_format`
--
ALTER TABLE `avoir_format`
  ADD CONSTRAINT `FK_AVOIR_FORMAT_idformat` FOREIGN KEY (`idformat`) REFERENCES `formats` (`idformat`),
  ADD CONSTRAINT `FK_AVOIR_FORMAT_idingredient` FOREIGN KEY (`idingredient`) REFERENCES `ingredients` (`idingredient`);

--
-- Contraintes pour la table `bieres`
--
ALTER TABLE `bieres`
  ADD CONSTRAINT `FK_BIERES_idingredient` FOREIGN KEY (`idingredient`) REFERENCES `ingredients` (`idingredient`);

--
-- Contraintes pour la table `boissons`
--
ALTER TABLE `boissons`
  ADD CONSTRAINT `FK_BOISSONS_idingredient` FOREIGN KEY (`idingredient`) REFERENCES `ingredients` (`idingredient`);

--
-- Contraintes pour la table `cocktails`
--
ALTER TABLE `cocktails`
  ADD CONSTRAINT `FK_COCKTAILS_idingredient` FOREIGN KEY (`idingredient`) REFERENCES `ingredients` (`idingredient`);

--
-- Contraintes pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD CONSTRAINT `FK_CONTENIR_idingredient_INGREDIENTS` FOREIGN KEY (`idingredient_INGREDIENTS`) REFERENCES `ingredients` (`idingredient`),
  ADD CONSTRAINT `FK_CONTENIR_idingredient` FOREIGN KEY (`idingredient`) REFERENCES `ingredients` (`idingredient`);

--
-- Contraintes pour la table `exemplariser`
--
ALTER TABLE `exemplariser`
  ADD CONSTRAINT `FK_EXEMPLARISER_idmeilleuralcool` FOREIGN KEY (`idmeilleuralcool`) REFERENCES `meilleursalcools` (`idmeilleuralcool`),
  ADD CONSTRAINT `FK_EXEMPLARISER_idingredient` FOREIGN KEY (`idingredient`) REFERENCES `ingredients` (`idingredient`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
