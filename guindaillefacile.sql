-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 08 Mars 2015 à 23:16
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

--
-- Contenu de la table `alcoolsforts`
--

INSERT INTO `alcoolsforts` (`idingredient`) VALUES
(2);

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `contenu` text COLLATE utf8_bin,
  `date` date DEFAULT NULL,
  `auteur` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `popularite` int(11) NOT NULL DEFAULT '0',
  `category_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`, `auteur`, `popularite`, `category_id`) VALUES
(100, 'Swag utlime', 'Imagine was you removal raising gravity. Unsatiable understood or expression dissimilar so sufficient. Its party every heard and event gay. Advice he indeed things adieus in number so uneasy. To many four fact in he fail. My hung it quit next do of. It fifteen charmed by private savings it mr. Favourable cultivated alteration entreaties yet met sympathize. Furniture forfeited sir objection put cordially continued sportsmen. ', '2015-02-03', 'Robin', 2, 2),
(200, 'Un petit lapin meurt sauvagement', 'Ask especially collecting terminated may son expression. Extremely eagerness principle estimable own was man. Men received far his dashwood subjects new. My sufficient surrounded an companions dispatched in on. Connection too unaffected expression led son possession. New smiling friends and her another. Leaf she does none love high yet. Snug love will up bore as be. Pursuit man son musical general pointed. It surprise informed mr advanced do outweigh. ', '2015-02-05', 'Florent', 0, 1),
(300, 'Petite gamine dort dans le sable', 'Certainly elsewhere my do allowance at. The address farther six hearted hundred towards husband. Are securing off occasion remember daughter replying. Held that feel his see own yet. Strangers ye to he sometimes propriety in. She right plate seven has. Bed who perceive judgment did marianne.', '2015-02-10', 'Axel', 4, 1),
(400, 'La mère d''Axel a encore frappé !', 'Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought. \r\n\r\nShe suspicion dejection saw instantly. Well deny may real one told yet saw hard dear. Bed chief house rapid right the. Set noisy one state tears which. No girl oh part must fact high my he. Simplicity in excellence melancholy as remarkably discovered. Own partiality motionless was old excellence she inquietude contrasted. Sister giving so wicket cousin of an he rather marked. Of on game part body rich. Adapted mr savings venture it or comfort affixed friends. \r\n\r\nAgreed joy vanity regret met may ladies oppose who. Mile fail as left as hard eyes. Meet made call in mean four year it to. Prospect so branched wondered sensible of up. For gay consisted resolving pronounce sportsman saw discovery not. Northward or household as conveying we earnestly believing. No in up contrasted discretion inhabiting excellence. Entreaties we collecting unpleasant at everything conviction. \r\n\r\nSo by colonel hearted ferrars. Draw from upon here gone add one. He in sportsman household otherwise it perceived instantly. Is inquiry no he several excited am. Called though excuse length ye needed it he having. Whatever throwing we on resolved entrance together graceful. Mrs assured add private married removed believe did she. ', '2015-02-20', 'Robin', 0, 2);

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

--
-- Contenu de la table `bieres`
--

INSERT INTO `bieres` (`type`, `paysorigine`, `couleur`, `idingredient`) VALUES
('Trappiste', 'Belgique', 'Brune', 1);

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
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `titre`) VALUES
(1, 'Sexe'),
(2, 'Drague');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `ingredients`
--

INSERT INTO `ingredients` (`idingredient`, `nom`, `resume`, `description`, `unitemesure`) VALUES
(1, 'Chimay bleue ', 'La plus forte des Chimay', 'Avec ce brevage, pas besoin d''acheter 15 bières pour passer une soirée bien bourré, à peine 2 ou 3 de cette merveille de la nature et vous êtes déjà bien dedans, et à partir de 5 vous êtes tout simplement défoncé.', 'l'),
(2, 'Vodka', 'Pour la mère Russie !', 'La vodka « petite eau » est une eau-de-vie alcoolisée (fermentée puis distillée), généralement produite à partir de céréales ou de pomme de terre, mais peut être élaborée à partir de n’importe quelle matière première agricole, comme des fruits ou des légumes (lire: les 400 principales vodkas du monde). Elle titre en moyenne 40° d’alcool.', 'l'),
(3, 'Sucre', '', '', 'gr');

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
