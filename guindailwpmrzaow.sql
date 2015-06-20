-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Client :  guindailwpmrzaow.mysql.db
-- Généré le :  Ven 19 Juin 2015 à 20:38
-- Version du serveur :  5.5.43-0+deb7u1-log
-- Version de PHP :  5.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `guindailwpmrzaow`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Contenu de la table `admins`
--

INSERT INTO `admins` (`idadmin`, `pseudo`, `password`) VALUES
(1, 'MrZaow', 'PONPON230695'),
(2, 'GuillaumeLiket', 'M?98U''"['),
(3, 'Arthegor', 'rasimnesbla'),
(4, 'Armoud', 'Zora0309');

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
(50),
(53),
(59),
(61),
(64),
(68),
(71),
(72);

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `contenu` text COLLATE utf8_bin,
  `date` datetime DEFAULT NULL,
  `auteur` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `popularite` int(11) NOT NULL DEFAULT '0',
  `categorie` varchar(255) COLLATE utf8_bin NOT NULL,
  `supprime` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`, `auteur`, `popularite`, `categorie`, `supprime`) VALUES
(1, 'Guindailles de fin d''examens, je vous atteeeeeends <3', 'Y a rien de plus chiant pendant la période des exams que ce moment où tous tes potes ont fini leur session mais toi il te reste encore CE PUTAIN D''EXAM qui a été hyper mal foutu dans l''horaire. Alors bon tes potes ils ont le choix entre attendre que toi aussi t''aies fini pour commencer à fêter la fin d''exam, ou ne pas t''attendre, et (bon, j''peux les comprendre), c''est toujours la deuxième option qui est choisie. \r\n\r\nPour tous ceux qui sont dans la même situation que moi, couraaccchhhh'' ! \r\n', '2015-06-13 12:02:13', 'Etudiant qui en a pein le cul de cette session', 0, 'études', 0);

-- --------------------------------------------------------

--
-- Structure de la table `avantagesinconvenients`
--

CREATE TABLE IF NOT EXISTS `avantagesinconvenients` (
  `idavantage` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `avantageouinconvenient` char(25) COLLATE utf8_bin DEFAULT NULL COMMENT '"A" OU" I"',
  PRIMARY KEY (`idavantage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=202 ;

--
-- Contenu de la table `avantagesinconvenients`
--

INSERT INTO `avantagesinconvenients` (`idavantage`, `nom`, `avantageouinconvenient`) VALUES
(1, 'Ridiculement peu chère', 'A'),
(2, 'Goût passable en bouteille', 'A'),
(3, 'Bourrée de produits chimiques douteux', 'I'),
(4, 'Mauvais goût en canette', 'I'),
(5, 'C''est comme les femmes, plus il y en a, mieux c''est!', 'A'),
(6, 'En vente partout et trouvable dans tout les formats (33 cl, 75 cl,...)', 'A'),
(7, 'Bière entièrement sexiste, et le pire c''est qu''on aime ça', 'I'),
(8, 'Moins alcoolisée que sa grande soeur', 'A'),
(9, 'Permet de faire genre on est sportif et hipster', 'A'),
(10, 'Moins alcoolisée que sa grande soeur !! ', 'I'),
(11, 'Quasiment gratuite', 'A'),
(12, 'Excellente pour compléter un déguisement de SDF', 'A'),
(13, 'Se balader avec une kaiser dans la rue c''est comme se balader avec une pancarte ayant ''pauvre'' écrit dessus', 'I'),
(14, 'Euh... Vous ne buvez pas vraiment une Jupiler mais c''est tout comme ?', 'A'),
(15, 'Source des pires jeux de mot (t''es complètement à la maes !)', 'I'),
(16, 'Porte le même nom qu''un excellent groupe de rock américain', 'A'),
(17, 'Leurs verres sont beau comme un petit chaton', 'A'),
(18, 'Donne une très bonne impression de la maitrise de la brasserie belge', 'A'),
(19, 'Bon goût, même en canette', 'A'),
(20, 'Forte jusque comme il faut, ni trop ni trop peu', 'A'),
(21, 'Se trouve beaucoup en canette mais pas tellement en bouteille, ce qui est dommage', 'I'),
(22, 'Bière sois-disant "de luxe" qui n''est même pas spécialement bonne', 'I'),
(23, 'Une bière bien de chez nous, les mangeurs de sanglier ', 'A'),
(24, 'Excellent goût', 'A'),
(25, 'Se laisse boire toute seule', 'A'),
(26, 'Le nain sur l''étiquette est vraiment moche', 'I'),
(27, 'Excellent goût ', 'A'),
(28, 'Très populaire ', 'A'),
(29, 'Facile à préparer ', 'A'),
(30, 'Goût de thé pas apprécié par tout le monde', 'I'),
(31, 'Dosage légèrement délicat', 'I'),
(32, 'Vous pouvez chanter la chanson en le préparant  ', 'A'),
(33, 'Les filles l''adorent ! ', 'A'),
(34, 'Savoureux à souhait', 'A'),
(35, 'Goût de coco pas apprécié par tout le monde', 'I'),
(36, 'Met quasiment n''importe qui bien après un seul verre', 'A'),
(37, 'Ne laisse pas d''arrière-goût amer', 'A'),
(38, 'Servie dans une belle chope comme on l''aime', 'A'),
(39, 'Pas trop lourde ni trop légère, juste comme il faut', 'A'),
(40, 'Parfaite pour les longues soirées', 'A'),
(41, 'Arrière-goût assez amer', 'I'),
(42, 'La déesse des bières pour étudiants ', 'A'),
(43, '#savecara', 'A'),
(44, 'Vous n''êtes pas un vrai guindailleur si vous ne savez pas apprécier une vraie cara, bien tiède, à 10h du matin.', 'A'),
(45, 'Aucun, cette bière est parfaite.', 'I'),
(46, 'Un verre dédié qui en impose ', 'A'),
(47, 'Très forte', 'A'),
(48, 'Dure à trouver ', 'I'),
(49, ' Une bière facile à boire sans être trop forte tout de même (ni trop faible!)', 'A'),
(50, 'Un verre magnifique', 'A'),
(51, 'Grosse amertume car beaucoup de houblon', 'A'),
(52, 'N''est que l''ombre d''elle-même à cause de ce "light" marketting ', 'I'),
(53, 'Excellent goût', 'A'),
(54, 'Autant appréciée par la gente masculine que féminine ', 'A'),
(55, 'Très beau verre ', 'A'),
(56, 'Excellent goût', 'A'),
(57, 'Enfin un "cocktail" à se boire en hiver au coin du feu', 'A'),
(58, 'Difficile à préparer', 'I'),
(59, 'Très sucré', 'A'),
(60, 'Couleurs qui plaisent aux yeux', 'A'),
(61, 'Goût beaucoup trop fort de houblon', 'I'),
(62, 'Chère ', 'I'),
(63, 'Très lourde ', 'I'),
(64, 'Très bon goût', 'A'),
(65, 'Forte comme on l''aime', 'A'),
(66, 'Très bon goût', 'A'),
(67, 'Forte à souhait', 'A'),
(68, 'Aussi belle que ses soeurs', 'A'),
(69, 'Excellent goût', 'A'),
(70, 'Très forte ', 'A'),
(71, 'Trappiste, sil-vous-plaît !', 'A'),
(72, 'Pas si chère que ça pour une bière de cette qualité', 'A'),
(73, 'Goût pas assez fruité', 'I'),
(74, 'Pas chère pour une Chimay', 'A'),
(75, 'Bon goût', 'A'),
(76, 'Forte comme il faut', 'A'),
(77, 'Pas aussi emblématique que sa soeur bleue', 'I'),
(78, 'Excellent goût', 'A'),
(79, 'Très forte', 'A'),
(80, 'L''une des meilleures bières au monde', 'A'),
(81, 'Un peu chère mais bon, on en a pour son argent', 'I'),
(82, 'Très bon goût', 'A'),
(83, 'Très bien dosée en fruit', 'A'),
(84, 'Issue d''une des meilleures brasserie du monde', 'A'),
(85, 'Excellent goût', 'A'),
(86, 'Prix très raisonnable pour une trappiste si bonne', 'A'),
(87, 'Se trouve assez facilement', 'A'),
(88, 'Exagérément populaire à cause de leur énorme pub', 'I'),
(89, 'Beaucoup trop chère', 'I'),
(90, 'Goût très agréable', 'A'),
(91, 'Goût très fruité sans être trop sucré', 'A'),
(92, 'Bien forte comme on l''aime', 'A'),
(93, 'Les filles l''adorent ! ', 'A'),
(94, 'Très simple à faire', 'A'),
(95, 'Connu par tout le monde', 'A'),
(96, 'Fort et sucré à la fois', 'A'),
(97, 'Le goût de whishy ne plaît pas à tout le monde', 'I'),
(98, 'Donne plein d''énergie tout en vous alcoolisant', 'A'),
(99, 'Très populaire', 'A'),
(100, 'Dangereux en cas d''abus, à intervertir avec d''autres alcools', 'I'),
(101, 'Très populaire', 'A'),
(102, 'Très simple à faire', 'A'),
(103, 'Bon goût ', 'A'),
(104, 'Tient encore mieux compagnie aux filles que leur meilleur ami gay', 'A'),
(105, 'Très fruitée et sucrée', 'A'),
(106, 'Très bon goût', 'A'),
(107, 'On ne goûte quasiment plus l''alcool tant le goût sucré et fruité est fort', 'I'),
(108, 'Goût très sucré ', 'A'),
(109, 'Fourbe juste comme un mélange doit être', 'A'),
(110, 'Pas cher comme mélange', 'A'),
(111, 'Excellent pour les mélanges', 'A'),
(112, 'Pas cher ', 'A'),
(113, 'Pas beaucoup alcoolisé', 'I'),
(114, 'Très fort', 'A'),
(115, 'Excellent pour un mélange avec le coca', 'A'),
(116, 'Goût pas apprécié par tout le monde', 'I'),
(117, 'Très fort', 'A'),
(118, 'Goût qui passe difficilement', 'I'),
(119, 'Ne plaît pas à beaucoup de monde', 'I'),
(120, 'Pas très fort', 'I'),
(121, 'Très bon goût', 'A'),
(122, 'Vicieux bien comme on l''aime', 'A'),
(123, 'Pas très cher ', 'A'),
(124, 'Pas très alcoolisé ', 'I'),
(125, 'Excellent pour les mélanges', 'A'),
(126, 'Pas cher ', 'A'),
(127, 'Goût', 'A'),
(128, 'Degré d''alcool élevé', 'A'),
(129, 'Degré d''alcool élevé', 'I'),
(130, 'Un goût puissant qui ne plaira pas à tout le monde', 'I'),
(131, 'Goût agréable', 'A'),
(132, 'Très rafraîchissante', 'A'),
(133, 'Bière appréciée par beaucoup de monde', 'A'),
(134, 'Son prix élevé', 'I'),
(135, 'Goût sucré', 'A'),
(136, 'Diversité des goûts grâce aux différentes marques', 'A'),
(137, 'Nombreux mélanges possibles', 'A'),
(138, 'Pourcentage d''alcool', 'A'),
(139, 'Aucun', 'I'),
(140, 'Relativement bon marché', 'A'),
(141, 'Très bon rapport qualité/cuite', 'A'),
(142, 'S''affone comme de l''eau', 'A'),
(143, 'Ecoeurant à la longue', 'I'),
(144, 'Très rafraîchissant...', 'A'),
(145, '... mais passe tout aussi bien en hiver !', 'A'),
(146, 'C''est quand même à la Maison du Pékêt même qu''elle est la meilleure... Mais aussi plus chère.', 'I'),
(147, 'Des tonnes de déclinaisons en y ajoutant, par exemple, différents jus de fruits', 'A'),
(148, 'Se boit pur, dilué, ou avec des glaçons', 'A'),
(149, 'La plus rafraîchissante des bières !', 'A'),
(150, 'Goûteuse sans être trop forte', 'A'),
(151, 'Cher selon les marques', 'I'),
(152, 'Excellente trappiste, jeune ou vieillie', 'A'),
(153, 'Forte en goût sans l''être de trop en alcool', 'A'),
(154, 'Victime de son succès, est parfois introuvable sauf dans la région où elle est brassée', 'I'),
(155, 'Très rafraîchissant...', 'A'),
(156, '... mais passe tout aussi bien en hiver !', 'A'),
(157, 'C''est quand même à la Maison du Pékêt même qu''il est le meilleur... Mais aussi le plus cher.', 'A'),
(158, 'Un délicieux goût de cannelle', 'A'),
(159, 'Tabasse bien comme il faut', 'A'),
(160, 'Assez cher', 'I'),
(161, 'Fraîche', 'A'),
(162, 'Se boit comme de l''eau', 'A'),
(163, 'Pourcentage d''alcool faible', 'I'),
(164, 'Ecoeurant à la longue', 'I'),
(165, 'Une bière brune de caractère toujours sans amertume', 'A'),
(166, 'Un titrage honnête à 8°', 'A'),
(167, 'La chope en verre qui claque !', 'A'),
(168, 'Une trappiste accessible', 'A'),
(169, 'La moins chère des Rochefort', 'A'),
(170, 'Moins goûteuse que ses soeurs', 'I'),
(171, 'Pleine de saveur', 'A'),
(172, 'Une blonde bien forte en alcool !', 'A'),
(173, 'Un verre qui transpire l''élégance', 'A'),
(174, 'Bon rapport qualité/cuite', 'A'),
(175, 'Facile à préparer', 'A'),
(176, 'Imbuvable si mal dosé', 'I'),
(177, 'Enfin une bière féminine un tant soit peu alcoolisée', 'A'),
(178, 'Savant mélange de nombreux fruits', 'A'),
(179, 'Bon équilibre entre sucre et goût', 'A'),
(180, 'Légère pour une brune', 'A'),
(181, 'Mais goûteuse malgré tout', 'A'),
(182, 'Une spéciale sans prise de tête', 'A'),
(183, 'Peu chère', 'A'),
(184, 'Simple et efficace', 'A'),
(185, 'Tant d''autres blondes ayant plus à offrir', 'I'),
(186, 'Bon rapport qualité/cuite', 'A'),
(187, 'Rafraîchissant', 'A'),
(188, 'Imbuvable si mal dosé', 'I'),
(189, 'Rafraîchissant', 'A'),
(190, 'Bon rapport qualité/cuite', 'A'),
(191, 'Imbuvable si mal dosé', 'I'),
(192, 'Avouons que le verre pue la classe', 'A'),
(193, 'Pas mauvaise malgré tout', 'A'),
(194, 'Beaucoup de pub pour pas grand chose', 'I'),
(195, 'Assez chère', 'I'),
(196, 'Bon rapport qualité/cuite', 'A'),
(197, 'Rafraîchissant', 'A'),
(198, 'Imbuvable si mal dosé', 'I'),
(199, 'Un goût fruité pas trop envahissant', 'A'),
(200, 'Excellente par temps chaud', 'A'),
(201, 'Bourre vraiment trop vite', 'I');

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

--
-- Contenu de la table `avoir`
--

INSERT INTO `avoir` (`idingredient`, `idavantage`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 5),
(2, 6),
(2, 7),
(3, 8),
(3, 9),
(3, 10),
(4, 11),
(4, 12),
(4, 13),
(5, 14),
(5, 15),
(6, 16),
(7, 17),
(7, 18),
(7, 19),
(7, 20),
(7, 21),
(8, 22),
(9, 23),
(9, 24),
(9, 25),
(9, 26),
(21, 36),
(21, 37),
(21, 38),
(22, 39),
(22, 40),
(22, 41),
(23, 42),
(23, 43),
(23, 44),
(23, 45),
(24, 46),
(24, 47),
(24, 48),
(25, 49),
(25, 50),
(25, 51),
(26, 52),
(28, 53),
(28, 54),
(28, 55),
(36, 61),
(36, 62),
(36, 63),
(37, 64),
(37, 65),
(39, 66),
(39, 67),
(39, 68),
(40, 69),
(40, 70),
(40, 71),
(40, 72),
(42, 73),
(42, 74),
(41, 75),
(41, 76),
(41, 77),
(43, 78),
(43, 79),
(43, 80),
(43, 81),
(45, 82),
(45, 83),
(45, 84),
(46, 85),
(46, 86),
(46, 87),
(29, 88),
(29, 89),
(29, 90),
(38, 91),
(38, 92),
(48, 93),
(48, 94),
(51, 95),
(51, 96),
(51, 97),
(54, 98),
(54, 99),
(54, 100),
(56, 101),
(56, 102),
(56, 103),
(47, 104),
(47, 105),
(47, 106),
(47, 107),
(58, 108),
(58, 109),
(58, 110),
(59, 111),
(59, 112),
(59, 113),
(53, 114),
(53, 115),
(53, 116),
(50, 117),
(50, 118),
(50, 119),
(58, 120),
(60, 121),
(60, 122),
(60, 123),
(60, 124),
(61, 125),
(61, 126),
(62, 127),
(62, 128),
(62, 129),
(62, 130),
(63, 131),
(63, 132),
(63, 133),
(63, 134),
(64, 135),
(64, 136),
(64, 137),
(64, 138),
(64, 139),
(65, 140),
(65, 141),
(65, 142),
(65, 143),
(66, 144),
(66, 145),
(66, 146),
(68, 147),
(68, 148),
(67, 149),
(67, 150),
(68, 151),
(69, 152),
(69, 153),
(69, 154),
(70, 155),
(70, 156),
(70, 157),
(72, 158),
(72, 159),
(72, 160),
(73, 161),
(73, 162),
(73, 163),
(73, 164),
(74, 165),
(74, 166),
(74, 167),
(75, 168),
(75, 169),
(75, 170),
(76, 171),
(76, 172),
(76, 173),
(80, 177),
(80, 178),
(80, 179),
(81, 180),
(81, 181),
(82, 182),
(82, 183),
(82, 184),
(82, 185),
(83, 186),
(83, 187),
(83, 188),
(84, 189),
(84, 190),
(84, 191),
(85, 192),
(85, 193),
(85, 194),
(85, 195),
(86, 196),
(86, 197),
(86, 198),
(87, 199),
(87, 200),
(39, 201);

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
('pils', 'belgique', 'blonde', 1),
('pils', 'belgique', 'blonde', 2),
('pils', 'belgique', 'blonde', 3),
('pils', 'belgique', 'blonde', 4),
('pils', 'belgique', 'blonde', 5),
('pils', 'belgique', 'blonde', 6),
('pils', 'belgique', 'blonde', 7),
('pils', 'belgique', 'blonde', 8),
('spéciale', 'belgique', 'blonde', 9),
('spéciale', 'belgique', 'blonde', 21),
('spéciale', 'belgique', 'blonde', 22),
('pils', 'belgique', 'blonde', 23),
('spéciale', 'belgique', 'blonde', 24),
('spéciale', 'belgique', 'blonde', 25),
('pils', 'belgique', 'blonde', 26),
('spéciale', 'belgique', 'blonde', 27),
('spéciale', 'belgique', 'blonde', 28),
('fruitée', 'france', 'ambrée', 29),
('spéciale', 'belgique', 'blonde', 36),
('spéciale', 'belgique', 'brune', 37),
('fruitée', 'belgique', 'brune', 38),
('spéciale', 'belgique', 'blonde', 39),
('trappiste', 'belgique', 'brune', 40),
('trappiste', 'belgique', 'blonde', 41),
('trappiste', 'belgique', 'brune', 42),
('trappiste', 'belgique', 'brune', 43),
('trappiste', 'belgique', 'brune', 44),
('trappiste', 'belgique', 'brune', 45),
('trappiste', 'belgique', 'blonde', 46),
('fruitée', 'belgique', 'rouge', 47),
('spéciale', 'belgique', 'ambrée', 62),
('pils', 'danemark', 'blonde', 63),
('blanche', 'Belgique', 'blonde', 67),
('trappiste', 'Belgique', 'ambrée', 69),
('fruitée', 'belgique', 'blonde', 73),
('spéciale', 'Belgique', 'blonde', 74),
('trappiste', 'Belgique', 'brune', 75),
('spéciale', 'Belgique', 'blonde', 76),
('fruitée', 'Belgique', 'rouge', 80),
('spéciale', 'Belgique', 'brune', 81),
('spéciale', 'Belgique', 'blonde', 82),
('spéciale', 'Belgique', 'blonde', 85),
('spéciale', 'Belgique', 'rouge', 87);

-- --------------------------------------------------------

--
-- Structure de la table `boissons`
--

CREATE TABLE IF NOT EXISTS `boissons` (
  `pourcentagealcool` float DEFAULT NULL,
  `prixlitre` float DEFAULT NULL,
  `cotesur5` float DEFAULT NULL,
  `image1` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `image2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `image3` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `idingredient` int(11) NOT NULL,
  `popularite` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idingredient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `boissons`
--

INSERT INTO `boissons` (`pourcentagealcool`, `prixlitre`, `cotesur5`, `image1`, `image2`, `image3`, `idingredient`, `popularite`) VALUES
(4.7, 0.9, 0.5, '365.jpg', '3652.jpg', '3653.jpg', 1, 1),
(5.2, 1.8, 4.5, 'Jupiler.jpg', 'jupiler2.jpg', 'jupiler3.jpg', 2, 10),
(3.3, 1.8, 3.5, 'blue1.jpg', 'blue2.jpg', 'blue3.jpg', 3, 3),
(4.7, 0.6, 0.3, '632639721_small.jpg', 'br144.jpg', 'kaiserbeer.jpg', 4, 1),
(5.2, 1.8, 4, 'Maes11.jpg', 'maes2.jpg', 'maes3.jpg', 5, 9),
(5.2, 1.9, 3, 'primus1.jpg', 'primus2.jpg', 'prmus3.jpg', 6, 4),
(5.2, 1.8, 4, 'stella-artois.jpg', '5659796777_bf8d38c379_b.jpg', 'stella_artois_by_stavtov-d5bftr5.jpg', 7, 9),
(5.2, 2.9, 2, 'vedett1.jpg', 'bouteilles-vedett-blonde-6-x-33cl.jpg', 'vedett3.jpg', 8, 2),
(8, 3.7, 4, '8289489243_7b5d8c64e8.jpg', 'chouffe.jpg', '676.jpg', 9, 7),
(8, 5.2, 4.5, 'barbar1.jpg', 'barbar2.jpg', 'barbar3.jpg', 21, 6),
(9, 5.5, 3.5, 'delirium1.jpg', 'delirium2.jpg', 'delirium3.jpg', 22, 6),
(4.4, 0.6, 5, 'cara1.jpg', 'cara2.jpg', 'cara3.jpg', 23, 8),
(10, 6, 4, 'cornetriple1.jpg', 'cornetriple2.jpg', 'cornetriple3.jpg', 24, 6),
(5.9, 5.6, 4, 'corneblonde1.jpg', 'corneblonde2.jpg', 'corneblonde3.jpg', 25, 6),
(3.4, 1.8, 1, 'stellalight1.jpg', 'stellalight2.jpg', 'stellalight3.jpg', 26, 2),
(7, 2.8, 3.5, 'curtius1.jpg', 'curtius2.jpg', 'curtius3.jpg', 27, 3),
(7, 2.8, 4.5, 'trolls1.jpg', 'trolls2.jpg', 'trolls3.jpg', 28, 8),
(5.9, 5.7, 3.5, 'despeimage.jpg', 'Desperados.jpg', '176-bouteille-desperados-33cl.jpg', 29, 9),
(8.3, 4, 0.5, 'hopus1.jpg', 'hopus2.jpg', 'hopus3.jpg', 36, 1),
(11, 4.5, 4.5, 'kasteel1.jpg', 'kasteel2.jpg', 'kasteel3.jpg', 37, 8),
(8, 4.5, 4, 'rouge.jpg', 'rouge2.jpg', 'rouge3.jpg', 38, 8),
(11, 4.5, 3, 'tripel.jpg', 'tripel2.jpg', 'tripel3.jpg', 39, 7),
(9, 3.9, 4.5, 'bleue1.jpg', 'bleue2.jpg', 'bleue3.jpg', 40, 9),
(8, 3.8, 3, 'triple1.jpg', 'triple2.jpg', 'triple3.jpg', 41, 6),
(7, 3, 2, 'chirouge1.jpg', 'chirouge2.jpg', 'chirouge3.jpg', 42, 6),
(11.3, 6.3, 5, 'rochefort101.jpg', 'rochefort102.jpg', 'rochefort103.jpg', 43, 7),
(9.2, 4.6, 4.5, '81.jpg', '82.jpg', '83.jpg', 44, 6),
(7, 3.2, 4, 'west1.jpg', 'west2.jpg', 'west3.jpg', 45, 6),
(9.5, 4.1, 5, 'westtriple1.jpg', 'westtriple2.jpg', 'westtriple3.jpg', 46, 7),
(4.3, 4.2, 3.5, 'kriek1.jpg', 'kriek2.jpg', 'kriek3.jpg', 47, 9),
(13, 18, 3.5, 'vodkapomme.jpg', 'juspomme2.jpg', 'juspomme3.jpg', 48, 6),
(40, 18, 3, 'vodka1.jpg', 'vodka2.jpg', 'vodka3.jpg', 50, 7),
(13, 19, 4.5, 'whiskycoca1.jpg', 'coca2.jpg', 'coca31.jpg', 51, 8),
(40, 18, 4, 'whisky1.jpg', 'whisky2.jpg', 'whisky3.jpg', 53, 9),
(13, 22, 4.5, 'redbull1.jpg', 'redbull2.jpg', 'redbull3.jpg', 54, 9),
(13, 18, 4, 'vodkaorange1.jpg', 'vodkaorange2.jpg', 'vodkaorange3.jpg', 56, 8),
(9, 16, 4, 'passoaorange.jpg', 'passoaorange2.jpg', 'passoaorange3.jpg', 58, 7),
(17, 14.5, 4, 'passoa1.jpg', 'passoa2.jpg', 'passoa3.jpg', 59, 8),
(8, 17, 4, 'pisangorange1.jpg', 'pisangorange2.jpg', 'pisangorange3.jpg', 60, 8),
(20, 14.5, 4.5, 'pisang1.jpg', 'pisang2.jpg', 'pisang3.jpg', 61, 8),
(12, 3.8, 4, 'bushambree1.jpg', 'bushambree2.jpg', 'bushambree3.jpg', 62, 6),
(5.5, 3.1, 3.5, 'carlsberg2.jpg', 'carlsberg1.jpg', 'carlsberg3.jpg', 63, 8),
(40, 22, 4, 'rhumbrun2.jpg', 'rhumbrun1.jpg', 'rhumbrun3.jpg', 64, 7),
(10, 24, 4.5, 'rhumcoca111.jpg', 'babyrhumco1.jpg', 'rhumcoca33.jpg', 65, 8),
(15, 17, 4.5, 'url.jpg', '2.jpg', 'verre peket.jpg', 66, 7),
(4.9, 2, 4, '5.jpg', '2.jpg', '1.jpg', 67, 8),
(20, 13, 4, 'verre peket.jpg', '3.jpg', 'kl.jpg', 68, 8),
(6.2, 4.5, 5, 'bk.jpg', 'ki.jpg', 'gr.jpg', 69, 8),
(15, 17, 4.5, '66.jpg', '2.jpg', 'verre peket.jpg', 70, 7),
(20, 13, 4, 'verre peket.jpg', '44.jpg', '66.jpg', 71, 8),
(50, 25, 4.5, '22.jpg', '47.jpg', '65.jpg', 72, 9),
(2.5, 5.7, 3, 'pêcheresse1.jpg', 'pêcheresse5.jpg', 'pêcheresse3.jpg', 73, 7),
(8, 5.2, 4.5, 'bok.jpg', 'bobok.jpg', 'bobobok.jpg', 74, 7),
(7.5, 4, 4, 'roch.jpg', 'roroche.jpg', 'FormatFactoryaba-jour-rochefort-6.jpg', 75, 6),
(8.4, 6, 4.5, 'karm.jpg', 'kakakarm.jpg', 'kakarm.jpg', 76, 8),
(3.8, 4.4, 4.5, 'fru.jpg', 'frufru.jpg', 'Liefmans-fruitesse.jpg', 80, 8),
(6.5, 2.6, 4, 'bru.jpg', 'brubru.jpg', 'brubrubru.jpg', 81, 6),
(6.6, 2.6, 3.5, 'lelelef.jpg', 'lelef.jpg', 'lef.jpg', 82, 8),
(10, 14, 3.6, 'blanco1.jpg', 'blanco4.jpg', 'blanco5.jpg', 83, 7),
(10, 13, 3.5, 'blanco7.jpg', 'blanco3.jpg', 'blanco6.jpg', 84, 7),
(7.5, 5.2, 3, 'rororo.jpg', 'ro.jpg', 'roro.jpg', 85, 6),
(10, 13, 3.5, 'blanco9.jpg', 'blanco8.jpg', 'blanco2.jpg', 86, 7),
(5, 3.7, 4, 'ru.jpg', 'ruru.png', 'rururu.jpg', 87, 7);

-- --------------------------------------------------------

--
-- Structure de la table `chants`
--

CREATE TABLE IF NOT EXISTS `chants` (
  `idchant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `paroles` mediumtext NOT NULL,
  `type` varchar(50) NOT NULL,
  `popularite` int(11) NOT NULL,
  `image1` varchar(50) NOT NULL,
  PRIMARY KEY (`idchant`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `chants`
--

INSERT INTO `chants` (`idchant`, `nom`, `resume`, `paroles`, `type`, `popularite`, `image1`) VALUES
(1, 'La Brabançonne', 'La seule, l''unique', 'Noble Belgique ! Ô Mère chérie ! <br>\r\nA toi nos coeurs, à toi nos bras,<br>\r\nA toi notre sang, ô Patrie,<br>\r\nNous le jurons, tous tu vivras.<br>\r\nTu vivras, toujours grande et belle,<br>\r\nEt ton invincible unité,<br>\r\nAura pour devise immortelle,<br>\r\nLe Roi, la Loi, la Liberté } (x3)<br><br>\r\n\r\nAprès des siècles, des siècles d''esclavage,<br>\r\nLe belge sortant du tombeau,<br>\r\nA reconquis par son courage,<br>\r\nSon nom, ses droits et son drapeau.<br>\r\nEt ta main souveraine et fière,<br>\r\nPeuple désormais indompté,<br>\r\nGrava sur ta vieille bannière,<br>\r\nLe Roi, la Loi, la Liberté } (x3)<br><br>\r\n\r\nMarche de ton pas énergique,<br>\r\nMarche de progrès en progrès ! <br>\r\nDieu qui protège la Belgique,<br>\r\nSouris à tes mâles succès.<br>\r\nTravaillons ! Notre labeur donne,<br>\r\nA nos champs la fécondité,<br>\r\nEt la splendeur des arts couronne,<br>\r\nLe Roi, la Loi, la Liberté } (x3)<br><br>\r\n\r\nÔ Belgique ! Ô Mère chérie ! <br>\r\nA toi nos coeurs, à toi nos bras,<br>\r\nA toi notre sang, ô patrie,<br>\r\nNous le jurons tous, tu vivras.<br>\r\nTu vivras toujours fière et belle,<br>\r\nPlus grande en ta forte unité,<br>\r\nGardant, pour devise éternelle,<br>\r\nLe Roi, la Loi, la Liberté } (x3)<br>', 'sacré', 10, 'brabanconne.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `cocktails`
--

CREATE TABLE IF NOT EXISTS `cocktails` (
  `preparation` text COLLATE utf8_bin,
  `idingredient` int(11) NOT NULL,
  `alcoolfortprincipal` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idingredient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `cocktails`
--

INSERT INTO `cocktails` (`preparation`, `idingredient`, `alcoolfortprincipal`) VALUES
('1/3 de vodka, 2/3 de jus de pomme.', 48, 'vodka'),
('1/3 de Whisky, 2/3 de Coca', 51, 'whisky'),
('1/3 de Vodka, 2/3 de Red bull', 54, 'vodka'),
('1/3 de Vodka, 2/3 de jus d''orange', 56, 'vodka'),
('1/2 Passoa, 1/2 Jus d''orange', 58, 'passoa'),
('1/3 Pissang, 2/3 jus d''orange', 60, 'pisang'),
('1/4 de Rhum brun, 3/4 de coca.\r\n<br><strong>Attention</strong>, éviter les glaçons pour les affonds!', 65, 'rhum'),
('Un fond de pékêt framboise (environ 5 cl) arrosé de Hoegaarden (toute la bouteille ou pas en fonction du goût).', 66, 'pékêt'),
('Un fond de pékêt citron (environ 5 cl) arrosé de Hoegaarden (toute la bouteille ou pas en fonction du goût).', 70, 'pékêt'),
('1/4 pékêt', 83, 'pékêt'),
('1/4 pékêt\r\n<br>jus d''orange', 84, 'pékêt'),
('1/4 pékêt\r\n<br>3/4 jus de cerise', 86, 'pékêt');

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

--
-- Contenu de la table `contenir`
--

INSERT INTO `contenir` (`qte`, `idingredient`, `idingredient_INGREDIENTS`) VALUES
(2, 48, 49),
(1, 48, 50),
(2, 51, 52),
(1, 51, 53),
(1, 54, 50),
(2, 54, 55),
(1, 56, 50),
(2, 56, 57),
(1, 58, 57),
(1, 58, 59),
(2, 60, 57),
(1, 60, 61),
(13, 62, 52),
(13, 65, 52),
(2, 65, 64),
(68, 66, 67),
(5, 66, 68),
(1, 70, 67),
(1, 70, 71);

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

--
-- Contenu de la table `exemplariser`
--

INSERT INTO `exemplariser` (`idingredient`, `idmeilleuralcool`) VALUES
(53, 1),
(53, 2),
(59, 3),
(50, 4),
(61, 5),
(64, 6),
(64, 7),
(64, 8),
(64, 9),
(64, 10),
(68, 11),
(68, 12);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=88 ;

--
-- Contenu de la table `ingredients`
--

INSERT INTO `ingredients` (`idingredient`, `nom`, `resume`, `description`, `unitemesure`) VALUES
(1, '365', 'Le fond du fond du fond', 'Pour tous ceux qui pensaient que la Carapils était le fond du fond des bières bon marché, passez à un Delhaize et goûter un peu à la 365, son arôme chimique sans pareil ainsi que son prix ridicule vont vous faire découvrir un monde nouveau. Attention cependant, il y a une probabilité non négligeable que les produits chimiques imitant le goût de bière vous montent à la tête et vous rendent addicts. ', 'cl'),
(2, 'Jupiler', 'Les hommes savent pourquoi', 'La Jupiler est une bière belge blonde (always the best!) de fermentation basse de type pils.\r\n Elle a été créée et fabriquée par la brasserie Piedbœuf dans le village de Jupille-sur-Meuse, banlieue de Liège dont elle tire son nom.', 'cl'),
(3, 'Jupiler blue', 'Les hipsters savent pourquoi', 'La Jupiler Blue est, comme la Jupiler classique, une bière Belge ayant un taux d''alcool de 3,3 % \r\n(on peut donc dire que c''est une bière faite pour les hipsters et les sportifs!)', 'cl'),
(4, 'Kaiser', 'Keyser söze! ', 'Kaiser est un mot allemand signifiant empereur... tout est dit.', 'cl'),
(5, 'Maes', 'Jupiler... Mais pas vraiment', 'Le grand compétiteur de la Jupiler en Belgique, Maes, se fait comme il peut une place sur le marché même si sincèrement la bière n''a rien de spécial, et est moins bonne que la Jupiler, pour exactement le même prix puisqu''ils font exprès de s''aligner l''un sur l''autre. Bon allez, on l''aime quand même bien notre petite Maes bien belge !', 'cl'),
(6, 'Primus', 'Belle blonde', 'Encore une belle blonde qui fait du bien par où elle passe. Elle est légèrement moins chère que la Jupiler et la Maes, ce qui en fait une bonne alternative si vous vous sentez rebel dans l''âme. ', 'cl'),
(7, 'Stella Artois', 'Belgique représente, ouesh !', 'La représentante officielle de la Belgique dans les rayons des pays étrangers. Et elle le fait bien ! Bon goût, forte juste comme il faut, elle a tout pour plaire. ', 'cl'),
(8, 'Vedett', 'Oh ouesh j''suis trop une vedett', 'Vous avez toujours rêvé d''avoir votre photo sur l''étiquette d''une bière? Eh ben Vedett en a fait son idée de marketting principale ! Alors bon, c''est fun, un peu, mais perso quand j''achète un bière je me fout de voir la tête de Micheline qui a réussi à se voir affichée après 34 769 essais parce qu''elle n''a que ça à faire de sa vie. En plus elle est moche Micheline. Ah, et le goût de la bière dans tout ça? Ben il passe, ça va. Mais toutes ces campagnes de pub rendent la bière chère et il est bizarre de la boire à la bouteille à cause de sa forme bizarre. ', 'cl'),
(9, 'Chouffe', 'La douceur ardennaise', 'La chouffe, brassée par de fiers ardennais (vous savez ceux qui font des concours de bras de fer avec les ours). Son goût fruité relevé par\r\nune touche de coriandre la fait passer comme du petit lait. Néanmoins ses 8% affichés vous feront très vite comprendre que ce \r\nn''est définitivement pas du lait qu''il y a dans votre verre. ', 'cl'),
(11, 'rhum blanc', 'Du rhum blanc', 'Du rhum blanc', 'cl'),
(12, 'jus de citron verts', 'Du jus de citron verts', 'Du jus de citron verts', 'cl'),
(13, 'menthe', 'De la menthe', 'De la menthe', 'feuilles'),
(14, 'eau gazeuse', 'Eau gazeuse', 'Eau gazeuse', 'cl'),
(15, 'glaçons', 'Glaçons', 'Glaçons', 'poignées'),
(16, 'sucre en poudre', 'Sucre en poudre', 'Sucre en poudre', 'cuillères à café'),
(18, 'rhum ambré', 'rhum ambré', 'rhum ambré', 'cl'),
(19, 'jus d''ananas', 'jus d''ananas', 'jus d''ananas', 'cl'),
(20, 'lait de coco', 'lait de coco', 'lait de coco', 'cl'),
(21, 'Barbar', 'L''hydromel de la tribu de Dana', 'Après une journéed harassante rien de tel qu''une chope de barbar dans la taverne du coin. Cette bière aromatisée au miel ravira votre gosier\r\nque vous soyez un aficionados de bière ou pas. Dans un premier temps le goût du houblon l''emportera, ce n''est que plus tard que l''arrière goût de miel se fait sentir. Inutile donc de préciser que ceux qui ont du mal à apprécier l''amertume de la bière seront conquis. Et elle reste nettement moins tapette qu''une kriek ou une pêcheresse', 'cl'),
(22, 'Delirium', 'Je vois des éléphants roses', 'Si la delirium tremens porte le nom d''un syndrome neurologique du au sevrage de l''alcool ce n''est pas pour rien ! En effet cette bière créée en 1989 à surement du en provoquer plus d''un. Cette bière assez légère et le gout de l''alcool l''emporte sur celui du houblon. L''arrière goût est assez amer et sec. Autant dire que si vous n''aimez pas la bière passé votre chemin.', 'cl'),
(23, 'Cara Pils', 'Le graal des étudiants', 'Représentante officielle du milieu étudiant et de ses guindailles, on aurait pu en faire la bière phare de ce site. Son légendaire design de canette absolument dégueulasse, son goût très moyennement passable, le regard des gens quand on revient avec une caisse du Colruyt local pour préparer la prochaine soirée, ... Tant de choses qui rendent cette boisson bien plus qu''une bière pils low-cost.', 'cl'),
(24, 'Corne Triple', 'Dur...', 'La corne triple, ou corne du bois des pendus triple est une bière belge de caractère, brassée par la Brasserie d''Ebly.', 'cl'),
(25, 'Corne blonde', 'Du houblon et encore du houblon', 'La corne blonde, ou corne du bois des pendus blonde est une bière \r\nsomme toute moins forte que ça grande soeur la triplle mais tout de même brassée a 5,9%', 'cl'),
(26, 'Stella Artois Light', 'Mauvaise idée marketting', 'Il y a le coca light, le beurre light, et aussi la Stella light ! Alors quelle est l''utilité d''alléger une très bonne bière et lui faire ainsi perdre la moitié de son intéret, c''est une bonne question... On note également une perte de goût, ce qui est carrément triste. Une mauvaise idée marketting donc, rien de plus, si vous voulez de la Stella, achetez l''originale !', 'cl'),
(27, 'Curtius', 'Une biere et un repas fusionnés', 'Bière brassée au coeur de la cité ardente la curtius est servie dans une bouteille à la capacité atypique de 37,5cl. La curtius est une biere\r\n ambrée et amer et bien opaque. Si vous connaissez l''expression 1 biere = 2 tartines alors dans ce cas la Curtius serait comparable à un bon\r\ngros plat de pâtes.', 'cl'),
(28, 'Cuvée des Trolls', 'Ça pour en cuver on va en cuver', 'Voilà une bière vraiment originale, et dans le bon sens ! Légèrement fruitée, elle mélange douceur et amertume quasi parfaitement. Un vrai plaisir.', 'cl'),
(29, 'Desperados', 'Tout notre savoir-faire dans l''étiquette', 'Bière française (comme quoi ils font pas que du fromage et de la baguette) aromatisée à la téquila, au citron, citron vert et à la menthe, \r\navec un taux d''alcool de 5,9%. Ne goûte ni la bière française (heureusement d''ailleurs), ni la tequila, ni le citron ni la menthe, et encore moins l''alcool. Là est le génie créatif.', 'cl'),
(31, 'sirop de sucre de canne', 'sirop de sucre de canne', 'sirop de sucre de canne', 'cl'),
(32, 'crème fraîche liquide', 'crème fraîche liquide', 'crème fraîche liquide', 'cl'),
(33, 'café', 'café', 'café', 'cl'),
(34, 'whisky', 'whisky', 'whisky', 'cl'),
(36, 'Hopus', 'Une bouillie de houblon', 'Si vous voulez un truc qui vous reste au fond de l''estomac pendant 2 heures et dont le goût âcre ne quittera pas votre palais avant d''avoir bu ou mangé quelque chose de sucré, tentez de goûter à cette bière. Mais plus raisonnablement, abstenez-vous. Il y a tellement d''autre bières spéciales bien meilleures que celle-ci, ce serait dommage.', 'cl'),
(37, 'Kasteel Donker', 'Un coup d''assomoir au très bon goût', 'Si vous cherchez une brune avec du caractère, les charmes de cette bière vous rendront probablement heureux. Elle a beau être très forte et brune, elle arrive quand même à faire le voyage jusqu''à votre estomac en toute légèreté, et a un excellent goût en plus de ça !', 'l'),
(38, 'Kasteel Rouge', 'Forte et pourtant tellement douce', 'Vous êtes un mec et vous aimez les bières avec du caractère? Ou non, vous êtes une fille et vous préférez les bières douces et sucrées? Eh bien toute la magie de la Kasteel Rouge est qu''elle convient à ces deux extrêmes sans problème ! ', 'cl'),
(39, 'Kasteel Tripel', 'Elle copie sa soeur brune, mais elle est blonde !', 'Comme sa soeur brune, elle a 11% d''alcool, mais passe pour plus légère de par sa blondeur. Elle a, comme ses soeurs, très bon goût, et, comme ses soeurs, est très forte. Que dire à part : Bravo Kasteel pour une si belle triplette de magnificience belge !', 'cl'),
(40, 'Chimay Bleue', 'La reine de l''assomoir', 'Une des meilleures brunes du monde, indiscutablement. Accompagnée de fromage, c''est un véritable orgasme gustatif que vous aurez. ', 'cl'),
(41, 'Chimay Triple', 'Aussi belle qu''un ange', 'Toute blonde toute belle, cette Chimay n''est pas aussi emblématique que sa version brune, mais n''en perd pas moins sa prestance. Elle est belle, elle est bonne, elle est forte, et c''est une trappiste. ', 'cl'),
(42, 'Chimay Rouge', 'Douce mais pas assez fruitée', 'Cette version fruitée de la Chimay est certes plus douce et fruitée que ses soeurs, mais on préfère le goût d''une Kasteel Rouge à celui-ci. Y a rien à faire, Chimay c''est avant tout la Bleue. ', 'cl'),
(43, 'Rochefort 10', 'Le top du top de Rochefort', 'Cette bière est tout simplement ce qu''on fait de mieux en bière au monde. Son goût est excellent, elle est très forte, bien comme il faut, et c''est une trappiste bien wallonne. Si vous n''en avez jamais bu, un seul conseil : essayez-la ! Vous ne serez pas déçu.', 'cl'),
(44, 'Rochefort 8', 'La seconde merveille de Rochefort', 'Tout comme sa grande soeur, le goût ainsi que le pourcentage d''alcool sont là. Juste en moindre, mais bon, comment égaler la perfection qu''est la Rochefort 10 en même temps... On appréciera que le prix est beaucoup plus raisonnable par contre, un bon compromis pour goûter de la Rochefort sans se ruiner.', 'cl'),
(45, 'Westmalle Dubbel', 'La plus petite des Westmalle', 'Fruitée, crémeuse, et surtout, trappiste ! Sa grande soeur triple a déjà été officiellement nommée meilleure bière du monde, c''est vous dire si ils savent brasser de la bière, à Westmalle. ', 'cl'),
(46, 'Westmalle Tripel', 'La déesse en personne !', 'Cette merveilleuse bière est un concentré au goût à la fois simple et complexe qui plaîra à n''importe qui. En plus elle se trouve assez facilement, pour une trappiste aussi bonne. Et son prix est très raisonnable ! Il faut savoir que cette bière a été nommée meilleure bière du monde par plusieurs sites spécialisés. N''hésitez donc pas à la goûter si ce n''est pas déjà fait. ', 'cl'),
(47, 'Kriek Belle-Vue', 'La meilleure amie de toutes les filles', 'Haaaaa la Kriek... Combien de rendez-vous ont conduit à un couple ou à un amusement nocturne grâce à cette merveille de sucre et de cerise, nous ne le saurons jamais. Ce qu''on sait, par contre, c''est que c''est une valeur sûre pour toute soirée où la gente féminine est présente. Elle a un excellent goût fruité, très (même trop) sucré. On regrettera qu''elle soit si légère. ', 'cl'),
(48, 'Vodka - Pomme', 'Rien de tel pour plaire aux filles', 'Mélange extrêmement simple et peu cher, qui a le gros avantage de plaire généralement aux filles comme aux mecs. ', 'cl'),
(49, 'Jus de pomme', 'jus de pomme', 'jus de pomme', '/ 3'),
(50, 'Vodka', 'Pour la mère Russie !', 'Bouteille de distillation aléatoire, allant de la chaussure usagée jusqu''à la poignée de grain vermoulus, présentant la caractéristique d''un nom à consonnance slave ( -of -ov, et "vodka" pour les plus insécuritaires de l''authenticité de leur mixture).', '/ 3'),
(51, 'Whisky - Coca', 'On ne change pas une équipe qui gagne', 'Un bon gros classique des mélanges, à la fois très fort et très sucré. Quelques shots de ce breuvage vous enverront dans le pays des licornes et des bisounours, et pour quelques shots de plus, c''est un voyage vers le blackout que vous vous offrirez. ', 'cl'),
(52, 'Coca', 'coca', 'coca', 'cl'),
(53, 'Whisky', 'Non, n''allez pas tuer des indiens !', 'On pourrait s''éterniser sur l''origine du whisky, ses méthodes de dégustation, tout ça, pendant des heures, mais pour ça il y a Wikipedia. Ici, tout ce qu''on en dira, c''est que le whisky est très fort et parfait pour les cocktails. Il ne faut pas le boire avec des glaçons, par contre le diluer dans à peu près n''importe quel soft est une excellente idée pour faire durer le plaisir. ', 'cl'),
(54, 'Vodka - Red bull', 'De quoi rester éveillé toute la nuit', 'Désormais très populaire, ce mélange est aussi bon en goût qu''il est malsain pour la santé si on en abuse. Le bon plan est d''intervertir ce mélange avec d''autres, et pas ne passer sa soirée à boire uniquement ça. Le Red bull peut être échangé avec n''importe quelle autre boisson énergétique comme un Monster par exemple, le mélange fonctionnera aussi.', 'cl'),
(55, 'Red bull', 'Red bull', 'Red bull', 'cl'),
(56, 'Vodka - Orange', 'Mhmm les bonnes vitamines', 'Très simple à réaliser et efficace, le goût de jus d''orange coupe juste comme il faut le goût de la vodka, donnant comme résultat un mélange qui a du punch et qui goûte le bon jus d''orange. ', 'cl'),
(57, 'Jus d''orange', 'Jus d''orange', 'Jus d''orange', 'cl'),
(58, 'Passoa - Orange', 'Tu l''goûtes, tu l''aimes', 'Sucré et doux à souhait, ce mélange plaît beaucoup aux filles ainsi qu''aux mecs, même si ces derniers n''oseront peut-être pas l''avouer par fierté. Il ne faut pas hésiter avec les quantités de Passoa, étant à la base moins alcoolisé qu''un alcool fort comme la vodka ou le whisky, on peut facilement se permettre de remplir la moitié voire les deux tiers de son verre de ce merveilleux breuvage.', 'cl'),
(59, 'Passoa', 'Source de bien des plaisirs', 'Liqueur à base de jus de fruit de la passion, il le passoa est excellent pour réaliser des mélanges. Comme il n''est pas aussi alcoolisé que des alcools forts typiques comme la vodka ou le rhum, il coûte moins cher en magasin et permet donc également de faire des économies en soirée. Par contre, il faudra évidemment plus de verres pour atteindre un taux d''alcool intéressant. ', 'cl'),
(60, 'Pisang - Orange', 'Simple et efficace', 'Gros classique des mélanges vite faits bien faits qui s''avèrent avoir tout ce qu''on demande d''un alcool de soirée : il est bon, il, n''est pas trop cher, il est facile à faire et surtout il alcoolise proprement et vicieusement !', 'cl'),
(61, 'Pisang', 'Mhmm j''aime les bananes', 'Liqueur de banane vert vif, cette bouteille au prix très abordable peut être à peu près mélangée à tout. Le jus d''orange se marie particulièrement bien avec, apportant juste ce qu''il faut de goût fruité et sucré pour obtenir un mélange parfait. ', 'cl'),
(62, 'Bush Ambrée', 'On est sortis hier???', '"The strongest Belgian beer". Ils s''en vantent, et ont bien raison!\r\nCette bière ambrée est en effet la bière belge 33cl ayant la plus haute concentration d''alcool (12°). Cette bière belge ambrée de haute fermentation égayera vos papilles, votre palais, et votre estomac. \r\nA boire avec modération, cette petite rousse vous tabassera plus vite que vous ne l''auriez imaginé. \r\nVous aimez les souvenirs de vos soirées? Evitez la Bush Ambrée!', 'cl'),
(63, 'Carlsberg', 'La belle du nord', 'Quoi de mieux en boîte de nuit qu''une bonne petite bière à 6€?\r\nCette belle blonde nous venant directement du Danemark coûte en effet plus cher que les autres pils... Ses origines y étant probablement pour beaucoup!\r\nMoins amère que ses soeurs Jupiler ou Maes, la Carlsberg se déguste en terrasse les jours de grande chaleur.', 'cl'),
(64, 'Rhum brun', 'Aïe ma tête...', 'Le rhum brun, ou l''alcool qui se marie à perfection avec (presque) tout!\r\nCoca, jus d''orange, de citron, de goyave, de papaye, vin rouge, tout est négociable, je dis il n''y a pas un plan tarifaire!\r\nA boire avec GRANDE modération, ou la seule que vous retrouverez dans votre lit le lendemain, c''est la fidèle gueule de bois!', 'l'),
(65, 'Baby rhum co''', 'L''alcool des affonds', 'Envie d''affoner quelque chose de bon, de pas trop cher, et qui n''arrache pas la tête au bout de deux verres? Alors le baby rhum co'' est fait pour vous!\r\n<br>Le baby rhum co'' a tous les avantages de son grand frère le rhum coca, mais ne contient que 2cl de rhum, au lieu des 4 habituels, d''où son nom de "baby".\r\n<br>Ne vous laissez toutefois pas avoir, il a beau être un baby, il ne faut pas en abuser, ou le réveil risque d''être plutôt difficile!', 'l'),
(66, 'Catherinette', 'Une douceur fruitée !', 'Une spécialité de la Maison du Pékêt : Une bière blanche bien fraîche et un pékêt fruité. L''alliance vaut le coup, hiver comme été. Quand légèreté rime avec saveur : à tester à tout moment !', 'cl'),
(67, 'Hoegaarden', 'Le grand classique par temps chaud !', 'On ne présente plus la plus célèbre des bières blanches ! Un vrai délice en été, en terrasse, et le must : Dans un verre givré à l''avance. Son goût frais et sa légèreté empêcheront d''avoir un coup de barre au soleil ! Une rondelle de citron n''est pas superflue non plus.', 'cl'),
(68, 'Pékêt Framboise', 'Sucré et fruité !', 'Un autre goût classique des pékêts. Comme tous ces derniers, seul ou dilué, il saura égayer vos petites sauteries !', 'cl'),
(69, 'Orval', 'Fleuron artisanal gaumais', 'L''Orval, trappiste mythique avec son cercle de fervents défenseurs... Et avec raison ! Son goût unique très légèrement amer l'' élève au rang d''une des meilleures bières belges. Tout amateur se doit de la goûter ! De plus, comme nombre de trappistes, on peut la laisser vieillir en cave (un an pour une amélioration significative, mais au plus vieux au mieux !) pour lui donner encore plus de corps et de crémeux.', 'cl'),
(70, 'Mont Blanc', 'La version citronnée de la Catherinette', 'La soeur de la Catherinette. Remplacez simplement la framboise par le citron ! La même recette, avec plus d''acidité. Cependant, comme toutes les jumelles, on ne sait pas laquelle est la meilleure sans les avoir testées toutes les deux !', 'cl'),
(71, 'Pékêt Citron', 'Frais et légèrement acide !', 'Un autre goût classique des pékêts. Comme tous ces derniers, seul ou dilué, il saura égayer vos petites sauteries !', 'cl'),
(72, 'Gold Strike', 'Du far west dans votre verre !', 'Responsable de nombreuses premières cuites en raison de son délicieux goût de cannelle, la Gold Strike se dégustera aussi bien nature que flambée. De plus, avouez qu''un alcool dans lequel flottent des paillettes d''or, c''est la classe.', 'cl'),
(73, 'Lindemans Pêcheresse', 'Regarde maman! Moi aussi je bois de la bière!', 'La voici, la voilà, la princesse des tables roses et des paillettes, la bien-nommée Pêcheresse!\r\n<br>Parmi les bières préférées de ces jeunes demoiselles, la Pêcheresse de la brasserie Lindemans se boit bien fraîche, en été, accompagné de ses BFF de préférence!\r\n<br>Plus sérieusement, cette bière fruitée au bon goût de pêche se boit comme un soft, tout en restant une bières, bel avantage n''est-ce pas?\r\n<br>A boire de préférence très fraîche. Dans un verre réfrigéré, l''expérience n''en sera que plus délicieuse...', 'cl'),
(74, 'Barbar Bok', 'L''hydromel version brune', 'La légende raconte que si l''on ferme les yeux après une gorgée de Barbar Bok, on entend les druides psalmodier ainsi que les bardes chanter au large des dolmens. Tout comme sa cousine blonde, la Barbar Bok ravira ceux qui veulent goûter une vraie bonne bière forte sans subir l''amertume du houblon, et sans pour autant se rabattre sur de la mijolerie à la pêche ou à la cerise ! Dans sa version brune, la Barbar a un goût plus prononcé et plus de caractère cependant.', 'cl'),
(75, 'Rochefort 6', 'La Rochefort du débutant', 'La toute première de l''abbaye trappiste de Rochefort, bien plus légère que ses sœurettes ! Un excellent plan pour s''essayer aux trappistes sans pour autant se flinguer le ciboulot. On lui reprochera, fatalement, un manque de caractère : On ne peut pas tout avoir ! On conseillera à l''amateur en quête de nouveauté de se tourner plutôt vers la Rochefort 8, ou mieux encore, la 10, pour appréhender le véritable savoir-faire des moines trappistes de la région namuroise.', 'cl'),
(76, 'Tripel Karmeliet', 'Du printemps dans ton verre !', 'La Karmeliet, une bière qui, même si elle n''est pas trappiste, fait preuve d''un grand savoir-faire de brassage. Pour s''en rendre compte, il suffit de la verser dans son calice : sa couleur dorée, son tourbillon de bulles et sa mousse généreuse ne laissent aucun doute ! Sa saveur puissante et son arrière-goût floral nous font la qualifier de "bière printanière". Elle est généralement appréciée également par la gent féminine.', 'cl'),
(78, 'Jus de cerise', 'Jus de cerise', 'Jus de cerise', 'l'),
(79, 'Pékêt', 'Pékêt', 'Pékêt', 'cl'),
(80, 'Liefmans Fruitesse', 'La nouvelle meilleure amie des filles', 'La nouvelle reine des bières fruitées ! La Fruitesse, dernière création de la brasserie Liefmans, est un véritable tourbillon de fruits rouges, comprenant la cerise, la fraise, la framboise mais aussi la myrtille et le sureau. Terriblement rafraîchissante, elle se déguste idéalement "on the rocks" et dans son verre pour une dégustation optimale.', 'cl'),
(81, 'Leffe Brune', 'La brune accessible', 'La variété brune de la Leffe sera un bon compromis pour l''amateur voulant s''essayer aux bières brunes s''en s''attaquer aux mastodontes comme la Kasteel Donker ou la Rochefort 10. Son goût léger- bien que bien présent- et sucré la rendent accessible et agréable. Une bonne petite brune légère comme on les aime !', 'cl'),
(82, 'Leffe Blonde', 'Fer de lance des Leffe', 'Vous ne voulez pas d''une Jupiler, mais vous avez envie d''une bonne blonde toute simple, ayant un minimum de caractère ? La Leffe blonde est faite pour vous. Sans être transcendant, son goût simple et efficace plaira à tous !', 'cl'),
(83, 'Blanc coca', 'Le classico', 'Qui n''a pas de souvenir de ce breuvage BEAUCOUP plus blanc que coca?\r\n<br>Ce grands classiques des soirées vous rappellera les souvenirs de votre première cuite!\r\n<br>A boire avec ou sans glaçons, cette boisson est à boire avec, ou sans modération. Le dafalgan pour le lendemain devrait cependant être fourni avec!', 'l'),
(84, 'Blanc orange', 'Le classico, part II', 'Marre du blanc coca? Les brûlures d''estomac commencent à se faire ressentir? Alors il est temps de passer au jus d''orange. \r\n<br>Le concept reste le même, un petit verre rafraîchissant, avec une quantité acceptable d''alcool dedans!', 'l'),
(85, 'Leffe Royale', 'Une bière qui n''a de royal... Que le nom', 'Malgré tout le foin publicitaire ayant accompagné la sortie de la Leffe royale, elle n''a rien d''exceptionnel ou de transcendant. Sans être mauvaise, on était en droit de s''attendre à bien mieux suite à tant de publicité. De plus, elle est plus chère que de bien meilleures blondes.', 'cl'),
(86, 'Blanc cerise', 'Le classico, part III', 'Le coca et le jus d''orange ne vous inspirent plus? C''est qu''il est temps de passer au jus de cerise!\r\n<br>Plus souvent commandé et apprécié par la gente féminine, ce mélange reste néanmoins un incontournable des soirées!', 'l'),
(87, 'Leffe Ruby', 'Quand une bière fruitée est aimée des deux sexes', 'La Leffe Ruby, bien qu''elle soit aux fruits rouges, ne doit pas tomber dans le cliché FRUITÉE = GONZESSE. Même si elle est très appréciée de ces dernières, les mecs peuvent tout à fait y trouver leur compte en raison de son goût sucré et fruité qui reste discret.', 'cl');

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

CREATE TABLE IF NOT EXISTS `jeux` (
  `idjeu` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `resume` varchar(100) COLLATE utf8_bin NOT NULL,
  `nbjoueursmin` int(11) NOT NULL,
  `description` mediumtext COLLATE utf8_bin NOT NULL,
  `type` varchar(50) COLLATE utf8_bin NOT NULL,
  `cotesur5` float NOT NULL,
  `popularite` int(11) NOT NULL,
  `image1` varchar(50) COLLATE utf8_bin NOT NULL,
  `image2` varchar(50) COLLATE utf8_bin NOT NULL,
  `image3` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idjeu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Contenu de la table `jeux`
--

INSERT INTO `jeux` (`idjeu`, `nom`, `resume`, `nbjoueursmin`, `description`, `type`, `cotesur5`, `popularite`, `image1`, `image2`, `image3`) VALUES
(1, 'Ultimate Party Game', 'Le meilleur jeu d''alcool sur internet', 2, 'L''Ultimate Party Game (UPG) est simplement le meilleur jeu de boissons sur internet jamais conçu. Pour tous les fêtards et fêtardes voulant vivre des soirées plus excitantes, enivrantes, drôles, et se terminant à merveille. L''UPG est un jeu de soirée qui se joue tour à tour, avec un système de gages assignés automatiquement à chaque joueur. Parfois boire, parfois danser, parfois chanter, et tellement plus encore... Une seule chose est certaine: TOUJOURS s''amuser! L''UPG a été conçu pour ne jamais aller trop vite, et agir de manière intelligente. Pas de jalousie, pas de gages troublants entres potes, c''est GARANTI !', 'internet', 2.5, 3, 'ultimate.jpg', 'ultimate2.jpg', 'ultimate3.jpg'),
(2, 'Buffalo', 'Vous aussi, gueulez buffalo à vos amis', 2, 'Le but est simple, il suffit de boire son verre pendant toute la soirée de sa mauvaise main. La droite pour les gauchers et la gauche pour les droitiers. Afin d’y participer il suffit au début de la soirée de déterminer le début du jeu et ses participants. Quand le joueur prend le verre de la mauvaise main, un des fêtards doit lui crier buffalo et le fautif doit boire cul sec. Mais attention, en cas d’erreur de celui qui a crié buffalo, il devra boire lui même le cul sec. Si vous ne tenez pas la route vous avez à n’importe quel moment le droit de sortir du jeu puis d’y revenir, le but étant qu’à un moment on ne sache plus réellement qui joue et qui ne joue plus et d’augmenter les fausses annonces du buffalo ! En somme ce jeu est très simple et permet de s’éclater sans vraiment concentrer sa soirée sur un jeu...', 'social', 3, 9, 'buffalo1.jpg', 'buffalo2.jpg', 'buffalo3.jpg'),
(3, 'Jeu de la bouteille', 'Un remake plus mature, et intéressant', 2, 'Alternative alcoolique de l''enfantin et homonyme "jeu de la bouteille", où il était question de petit bisou (avec ou sans la langue/les mains, en fonction de l''âge auquel vous y jouiez), les règles, ici, sont limpides : les joueurs s''assoient en cercle et placent au milieu de ce cercle une bouteille pleine d''un alcool plus ou moins comestible. L''un après l''autre, les joueurs font tourner l''objet de toutes les attentions. L''heureuse/malheureuse personne pointée par le goulot de la bouteille, lorsqu''elle a cessé de tourner, se doit de faire honneur à la boisson en question et d''en boire un shot. Et quand la bouteille est vide? Eh ben on la rempli avec un nouveau breuvage tiens !', 'social', 4, 8, 'bouteille1.jpg', 'bouteille2.jpg', 'bouteille3.jpg'),
(4, 'Je n''ai jamais', 'Grattez tous les secrets de vos amis', 3, 'Le premier joueur se doit de balancer une vérité (une véritable vérité, tant qu''à faire) sur son compte, en commençant par la phrase : "je n''ai jamais..." Par exemple, "je n''ai jamais couché avec la soeur de mon meilleur ami". S''il se trouve que l''un des joueurs a déjà couché avec la soeur de son meilleur ami, il se doit de boire son verre. C''est très simple. Marche aussi avec tout ce qui vous passe par la tête et tout ce que vous avez envie de savoir sur vos amis alcooliques : je n''ai jamais dissimulé un cadavre dans la Meuse/truqué des élections de délégués de classe/mutilé un petit chat/abusé sexuellement des êtres qui me sont inférieurs psychologiquement... Surtout faites-vous plaisir. ', 'social', 3.5, 10, 'jenaijamais1.jpg', 'jenaijamais2.jpg', 'jamais2.jpg'),
(5, 'Beer Pong', 'Le grand classique des jeux d''alcool', 2, 'Le jeu est composé de deux équipes de deux joueurs, une de chaque côté de la table, et d''un certain nombre de gobelets mis en place de chaque côté, formant un triangle. Il n''existe pas de règles officielles, et de ce fait il y a de nombreuses façons de jouer, mais habituellement, il y a six ou dix gobelets en plastique disposés en triangle de chaque côté. Le nombre de joueurs par équipe peut ainsi varier de un à trois ou plus. Quand une balle tombe dans un gobelet, l''équipe en défense doit consommer la bière contenue dans celui-ci. Le gobelet n''est pas complètement rempli (de 3/4 à 2/3). Il est aussi fréquent d''avoir un verre d''eau dans le but de nettoyer la balle entre les lancers. Le jeu est gagné par l''élimination de tous les gobelets de l''équipe adverse avant que ses propres gobelets ne soient éliminés. L''équipe perdante doit ensuite consommer la bière qui reste dans les gobelets de l''équipe gagnante.', 'compétitif', 4.5, 10, 'beerpong1.jpg', 'beerpong2.jpg', 'beerpong.jpg'),
(6, 'Plus ou moins', 'SImple comme bonjour', 2, 'Jeu d''alcool avec des cartes hyper basique, le plus ou moins n''est peut-être pas le plus amusant des jeux, mais il est extrêmement simple à comprendre et de ce fait permet d''initier des novices au monde merveilleux des jeux d''alcool, ou simplement de se bourrer sans se prendre la tête. <br>Le jeu fonctionne comme ceci : on place le jeu de cartes sans les jokers avec les cartes faces cachées au milieu de la table, on tire une première carte et le joueur qui commence doit prédire si la carte qui va être retournée a une valeur plus haute ou plus basse que cette carte. <br>S''il a raison, il ne boit pas, sinon, il boit le nombre de coup égal à la différence de valeur entre les cartes. <br><strong>Exemple :</strong> si la carte sur la table était un 5 et la carte retournée est un 10, et que le joueur avait dit moins, il boit 5 coups. Le valet vaut 11, la dame 12 et le roi 13, l''as vaut 1. <br>Si la carte retournée est égale à la carte sur la table, il doit affoner son verre. Une fois le tour d''un joueur fini, on met la carte qui a été retournée face vers le haut par-dessus la carte qui était sur la table et c''est le tour du joueur suivant. Bon jeu !', 'cartes', 3, 9, 'plusoumoins.jpg', 'plusoumoins2.jpg', 'plusoumoins3.jpg'),
(8, 'Dame qui boit', 'Celui qui joue a perdu', 3, 'Les joueurs se mettent en cercle autour du paquet de cartes faces cachées. Chacun à leur tour ils piochent une carte. Chaque carte ayant un "pouvoir spécial".\r\n<br><br>\r\n<strong>As:</strong> Tout le monde affone son verre.\r\n<br><strong>2:</strong> Le joueur boit 2 gorgées de son verre.\r\n<br><strong>3:</strong> Le joueur boit 3 gorgées de son verre.\r\n<br><strong>4:</strong> Le joueur boit 4 gorgées de son verre.\r\n<br><strong>5:</strong> Le joueur affone son verre.\r\n<br><strong>6:</strong> Changement de sens.\r\n<br><strong>7:</strong> Le joueur rejoue.\r\n<br><strong>8:</strong> Le joueur reçoit un gage.\r\n<br><strong>9:</strong> Le joueur à droite affone son verre.\r\n<br><strong>10:</strong> Le joueur à gauche affone son verre.\r\n<br><strong>Valet:</strong> Le joueur devient le serveur de la soirée (ressert à boire aux autres joueurs) jusqu''à ce qu''un autre joueur pioche un valet.\r\n<br><strong>Reine:</strong> Le joueur devient la reine des pouces. Dès qu''il le souhaite, il pose son pouce sur la table. Le dernier joueur à le faire affone son verre. Le pouvoir passe au prochain joueur piochant une reine.\r\n<br><strong>Roi:</strong> Tu es le roi, invente une règle.', 'cartes', 4.5, 9, 'damequiboit2.jpg', 'dameboit1.jpg', 'damequiboit1.jpg'),
(9, 'Pyramide', 'Certains seraient toujours enterrés en-dessous!', 4, 'Le jeu est simple.\n<br>Munissez-vous d''un jeu de cartes, d''au moins 3 copains, de quelques bières, et c''est parti!\n<br>Distribuez 4 cartes faces cachées à tous les joueurs. Ceux-ci doivent les regarder sans les montrer aux autres, et mémoriser le chiffre inscrit (la couleur n''a pas d''importance).\n<br>Les joueurs retournent ensuite les cartes devant eux sur la table, faces cachées, <strong>en gardant en mémoire quelle carte se trouve où.</strong>\n<br>Avec les cartes restantes, on forme une pyramide sur la table. En partant du sommet à une carte, puis 2, puis 3, ... Une pyramide quoi!\n<br>Quand tout cela est en place, le jeu commence.\n<br>On commence par retourner la première carte de la <strong>base de la pyramide</strong>. Disons que c''est un <strong>4</strong>. \n<br>Un joueur qui a un <strong>4</strong> parmi ses cartes, peut alors demander à la personne de son choix de boire <strong>une gorgée</strong> (premier étage de la pyramide).\n<br>La personne visée peut alors accepter de boire, ou dire de la personne la faisant boire que c''est un menteur! (On n''est pas obligés d''avoir <strong>VRAIMENT</strong> la carte dans son jeu, c''est là qu''est toute l''astuce de ce jeu!)\n<br>Dans le cas d''un "menteur", le premier joueur, s''il a effectivement la carte dans son jeu, peut décider de la montrer. La personne visée boit alors le double des gorgées. Si le premier joueur a effectivement menti, alors c''est lui qui boit le double des gorgées!\n<br><br><strong>Premier étage = 1 gorgée.</strong>\n<br><strong>Deuxième étage = 2 gorgées.</strong>\n<br><strong>Troisième étage = 3 gorgées.</strong>\n<br><strong>.....</strong>\n<br><strong>Dernier étage = 1 affond.</strong>', 'cartes', 4, 9, 'pyramide1.jpg', 'pyramide2.jpg', 'pyramide3.jpg'),
(10, 'Jeu de l''été', '...ou de l''hiver.', 4, '<strong>Le jeu de l''été est arrivé!</strong>\n<br>Inventé dans les sombres contrées des terres du Limbourg, ce jeu a une réputation parmi les initiés qu''il n''a plus à défendre! Les plus durs s''y sont essayés, et ont lamentablement échoué!\n<br>Ce jeu se joue avec un <strong>maximum de 10 joueurs.</strong>\n<br>Il se déroule en 2 étapes.\n<br><br><strong>Première étape</strong>\n<br><br>Un joueur est désigné pour distribuer les cartes (il se les distribuera à lui-même, ou demandera à un autre joueur de le faire pour lui).\n<br>Il pose alors une première question à chaque joueur, l''un après l''autre: <strong>Rouge ou noire?</strong>\n<br>Si le joueur donne la bonne réponse, rien ne se passe, le "dealer" passe à la personne suivante. S''il se trompe, il boit une gorgée de son verre.\n<br><br>Le "dealer" pose une seconde question: <strong>Plus ou moins?</strong>\n<br>Même sentence en cas de bonne réponse ou de mauvaise réponse.\n<br><br>Troisième question: <strong>Intérieur ou extérieur?</strong> (Intérieur = se situant entre la valeur des 2 premières cartes reçues. Extérieur = l''opposé.)\n<br><br>Quatrième question: <strong>Trèfle, carreau, pique ou coeur?</strong> (Le joueur devant deviner la couleur de la prochaine carte.)\n<br><br><strong>Deuxième étape</strong>\n<br><br>On dispose les cartes restantes en forme de <strong>"H"</strong> (5 cartes sur une colonne, 5 cartes sur une autre colonne, et 2 cartes au milieu).\n<br>Une des colonnes sera <strong>"Je donne à boire x gorgées"</strong>. L''autre colonne sera <strong>"Je bois x gorgées"</strong>.\n<br>On retourne une carte à la fois, la première valant 1 gorgée (je donne ou je bois), la deuxième valant 2 gorgées (je donne ou je bois),et ainsi de suite jusqu''à la cinquième.\n<br>Les deux cartes centrales valant un affond (je donne ou je bois).', 'cartes', 4, 8, 'ete1.jpg', 'ete2.jpg', 'ete3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `limite`
--

CREATE TABLE IF NOT EXISTS `limite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `age` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `sexe` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=360 ;

--
-- Contenu de la table `limite`
--

INSERT INTO `limite` (`id`, `age`, `poids`, `sexe`) VALUES
(1, 19, 80, 'mec'),
(2, 24, 105, 'mec'),
(3, 19, 52, 'mec'),
(4, 19, 52, 'fille'),
(5, 23, 58, 'mec'),
(6, 46, 98, 'mec'),
(7, 19, 79, 'mec'),
(8, 22, 80, 'mec'),
(9, 21, 82, 'mec'),
(10, 21, 62, 'fille'),
(11, 20, 70, 'mec'),
(12, 17, 57, 'fille'),
(13, 18, 65, 'fille'),
(14, 21, 69, 'mec'),
(15, 21, 97, 'mec'),
(16, 19, 63, 'mec'),
(17, 19, 75, 'mec'),
(18, 20, 65, 'fille'),
(19, 20, 79, 'mec'),
(20, 21, 60, 'mec'),
(21, 18, 59, 'fille'),
(22, 20, 55, 'mec'),
(23, 18, 43, 'fille'),
(24, 21, 68, 'mec'),
(25, 23, 91, 'mec'),
(26, 20, 85, 'fille'),
(27, 20, 67, 'mec'),
(28, 18, 65, 'mec'),
(29, 19, 74, 'mec'),
(30, 20, 80, 'fille'),
(31, 24, 70, 'mec'),
(32, 18, 58, 'mec'),
(33, 18, 58, 'fille'),
(34, 21, 69, 'mec'),
(35, 21, 67, 'mec'),
(36, 22, 67, 'mec'),
(37, 18, 58, 'fille'),
(38, 22, 62, 'mec'),
(39, 22, 44, 'fille'),
(40, 22, 66, 'fille'),
(41, 19, 59, 'mec'),
(42, 22, 69, 'fille'),
(43, 19, 65, 'mec'),
(44, 20, 63, 'fille'),
(45, 21, 73, 'mec'),
(46, 22, 78, 'mec'),
(47, 20, 70, 'fille'),
(48, 20, 73, 'mec'),
(49, 24, 69, 'fille'),
(50, 20, 65, 'fille'),
(51, 21, 61, 'fille'),
(52, 20, 90, 'mec'),
(53, 20, 60, 'fille'),
(54, 23, 60, 'fille'),
(55, 17, 59, 'fille'),
(56, 20, 59, 'fille'),
(57, 20, 55, 'fille'),
(58, 20, 50, 'fille'),
(59, 20, 70, 'mec'),
(60, 20, 65, 'fille'),
(61, 20, 69, 'fille'),
(62, 20, 72, 'fille'),
(63, 20, 45, 'fille'),
(64, 20, 40, 'fille'),
(65, 20, 70, 'fille'),
(66, 20, 72, 'fille'),
(67, 20, 65, 'fille'),
(68, 18, 72, 'mec'),
(69, 20, 68, 'mec'),
(70, 20, 68, 'fille'),
(71, 23, 110, 'mec'),
(72, 19, 80, 'mec'),
(73, 20, 70, 'fille'),
(74, 25, 70, 'mec'),
(75, 24, 90, 'mec'),
(76, 19, 77, 'mec'),
(77, 23, 87, 'mec'),
(78, 24, 105, 'mec'),
(79, 22, 58, 'fille'),
(80, 18, 52, 'fille'),
(81, 19, 90, 'mec'),
(82, 23, 80, 'mec'),
(83, 22, 70, 'mec'),
(84, 21, 60, 'fille'),
(85, 20, 68, 'fille'),
(86, 21, 60, 'fille'),
(87, 22, 88, 'mec'),
(88, 21, 57, 'fille'),
(89, 19, 64, 'mec'),
(90, 18, 47, 'fille'),
(91, 22, 92, 'mec'),
(92, 21, 54, 'fille'),
(93, 21, 80, 'mec'),
(94, 21, 86, 'mec'),
(95, 21, 77, 'mec'),
(96, 20, 52, 'mec'),
(97, 22, 110, 'mec'),
(98, 20, 86, 'mec'),
(99, 20, 65, 'mec'),
(100, 18, 55, 'fille'),
(101, 18, 55, 'mec'),
(102, 19, 54, 'fille'),
(103, 22, 71, 'mec'),
(104, 22, 71, 'fille'),
(105, 21, 93, 'mec'),
(106, 22, 73, 'mec'),
(107, 16, 56, 'fille'),
(108, 17, 58, 'mec'),
(109, 20, 75, 'mec'),
(110, 19, 63, 'fille'),
(111, 20, 51, 'fille'),
(112, 17, 50, 'mec'),
(113, 17, 80, 'mec'),
(114, 18, 50, 'fille'),
(115, 22, 67, 'mec'),
(116, 20, 68, 'mec'),
(117, 18, 51, 'fille'),
(118, 22, 73, 'mec'),
(119, 22, 74, 'mec'),
(120, 21, 105, 'mec'),
(121, 21, 65, 'mec'),
(122, 17, 63, 'mec'),
(123, 19, 62, 'mec'),
(124, 22, 66, 'fille'),
(125, 22, 58, 'mec'),
(126, 23, 63, 'mec'),
(127, 21, 85, 'mec'),
(128, 21, 67, 'mec'),
(129, 19, 67, 'fille'),
(130, 21, 77, 'mec'),
(131, 21, 67, 'mec'),
(132, 22, 54, 'fille'),
(133, 21, 80, 'mec'),
(134, 13, 40, 'mec'),
(135, 19, 66, 'fille'),
(136, 20, 53, 'fille'),
(137, 20, 50, 'fille'),
(138, 20, 85, 'mec'),
(139, 20, 78, 'mec'),
(140, 19, 81, 'fille'),
(141, 19, 95, 'fille'),
(142, 21, 83, 'mec'),
(143, 60, 81, 'fille'),
(144, 18, 62, 'fille'),
(145, 21, 72, 'fille'),
(146, 22, 73, 'mec'),
(147, 19, 70, 'fille'),
(148, 21, 70, 'mec'),
(149, 20, 88, 'mec'),
(150, 19, 67, 'mec'),
(151, 21, 72, 'fille'),
(152, 20, 70, 'mec'),
(153, 18, 70, 'mec'),
(154, 20, 65, 'mec'),
(155, 22, 98, 'mec'),
(156, 25, 70, 'mec'),
(157, 15, 70, 'mec'),
(158, 19, 55, 'fille'),
(159, 18, 100, 'mec'),
(160, 20, 58, 'fille'),
(161, 18, 200, 'mec'),
(162, 16, 65, 'mec'),
(163, 18, 63, 'fille'),
(164, 23, 88, 'fille'),
(165, 20, 50, 'fille'),
(166, 21, 90, 'mec'),
(167, 21, 57, 'fille'),
(168, 23, 90, 'mec'),
(169, 21, 54, 'fille'),
(170, 20, 65, 'fille'),
(171, 23, 75, 'mec'),
(172, 19, 85, 'mec'),
(173, 23, 80, 'mec'),
(174, 20, 62, 'fille'),
(175, 18, 48, 'fille'),
(176, 20, 62, 'fille'),
(177, 20, 58, 'fille'),
(178, 23, 70, 'mec'),
(179, 22, 72, 'mec'),
(180, 19, 63, 'mec'),
(181, 15, 65, 'fille'),
(182, 20, 58, 'mec'),
(183, 20, 95, 'fille'),
(184, 18, 72, 'mec'),
(185, 17, 60, 'mec'),
(186, 21, 62, 'mec'),
(187, 18, 55, 'fille'),
(188, 19, 65, 'fille'),
(189, 22, 65, 'mec'),
(190, 22, 95, 'mec'),
(191, 21, 79, 'mec'),
(192, 19, 75, 'mec'),
(193, 21, 80, 'mec'),
(194, 17, 70, 'mec'),
(195, 18, 75, 'mec'),
(196, 22, 80, 'mec'),
(197, 19, 50, 'fille'),
(198, 20, 73, 'fille'),
(199, 21, 75, 'fille'),
(200, 19, 50, 'fille'),
(201, 19, 70, 'fille'),
(202, 19, 70, 'mec'),
(203, 21, 69, 'mec'),
(204, 19, 70, 'fille'),
(205, 26, 70, 'fille'),
(206, 19, 47, 'fille'),
(207, 20, 80, 'mec'),
(208, 19, 47, 'fille'),
(209, 21, 77, 'mec'),
(210, 21, 80, 'mec'),
(211, 18, 62, 'mec'),
(212, 20, 55, 'mec'),
(213, 20, 80, 'mec'),
(214, 21, 75, 'mec'),
(215, 20, 150, 'mec'),
(216, 18, 73, 'mec'),
(217, 18, 56, 'fille'),
(218, 18, 78, 'mec'),
(219, 18, 56, 'fille'),
(220, 18, 62, 'fille'),
(221, 20, 75, 'mec'),
(222, 24, 85, 'mec'),
(223, 18, 55, 'fille'),
(224, 19, 60, 'fille'),
(225, 19, 65, 'mec'),
(226, 19, 54, 'fille'),
(227, 19, 65, 'mec'),
(228, 21, 80, 'mec'),
(229, 19, 52, 'mec'),
(230, 21, 85, 'mec'),
(231, 20, 70, 'mec'),
(232, 17, 55, 'fille'),
(233, 22, 70, 'mec'),
(234, 30, 100, 'mec'),
(235, 85, 50, 'mec'),
(236, 23, 75, 'fille'),
(237, 18, 58, 'mec'),
(238, 21, 71, 'mec'),
(239, 24, 50, 'fille'),
(240, 25, 72, 'mec'),
(241, 21, 98, 'mec'),
(242, 19, 120, 'mec'),
(243, 19, 78, 'mec'),
(244, 20, 62, 'fille'),
(245, 18, 85, 'mec'),
(246, 18, 75, 'mec'),
(247, 20, 67, 'mec'),
(248, 21, 95, 'mec'),
(249, 20, 65, 'mec'),
(250, 22, 78, 'mec'),
(251, 21, 69, 'mec'),
(252, 22, 69, 'fille'),
(253, 20, 84, 'mec'),
(254, 20, 63, 'fille'),
(255, 22, 60, 'mec'),
(256, 21, 56, 'fille'),
(257, 20, 67, 'mec'),
(258, 20, 110, 'mec'),
(259, 22, 72, 'mec'),
(260, 23, 71, 'mec'),
(261, 18, 80, 'mec'),
(262, 18, 120, 'mec'),
(263, 18, 65, 'mec'),
(264, 20, 70, 'mec'),
(265, 21, 53, 'fille'),
(266, 20, 53, 'fille'),
(267, 22, 75, 'mec'),
(268, 22, 98, 'mec'),
(269, 27, 73, 'mec'),
(270, 33, 70, 'mec'),
(271, 47, 135, 'mec'),
(272, 19, 70, 'mec'),
(273, 25, 100, 'mec'),
(274, 27, 72, 'mec'),
(275, 23, 77, 'fille'),
(276, 22, 77, 'mec'),
(277, 23, 135, 'mec'),
(278, 26, 115, 'mec'),
(279, 19, 80, 'mec'),
(280, 23, 72, 'mec'),
(281, 26, 82, 'mec'),
(282, 23, 65, 'mec'),
(283, 26, 85, 'fille'),
(284, 28, 65, 'mec'),
(285, 21, 60, 'mec'),
(286, 20, 60, 'mec'),
(287, 19, 63, 'mec'),
(288, 20, 64, 'mec'),
(289, 19, 80, 'mec'),
(290, 26, 83, 'fille'),
(291, 24, 105, 'mec'),
(292, 19, 72, 'mec'),
(293, 31, 62, 'mec'),
(294, 23, 120, 'fille'),
(295, 19, 135, 'mec'),
(296, 19, 69, 'mec'),
(297, 20, 45, 'mec'),
(298, 27, 68, 'mec'),
(299, 22, 72, 'mec'),
(300, 23, 69, 'mec'),
(301, 19, 70, 'mec'),
(302, 21, 75, 'mec'),
(303, 21, 70, 'mec'),
(304, 24, 68, 'fille'),
(305, 24, 68, 'mec'),
(306, 24, 100, 'mec'),
(307, 19, 49, 'fille'),
(308, 19, 65, 'mec'),
(309, 18, 50, 'fille'),
(310, 21, 68, 'mec'),
(311, 26, 60, 'mec'),
(312, 27, 105, 'mec'),
(313, 20, 83, 'mec'),
(314, 28, 67, 'mec'),
(315, 26, 88, 'mec'),
(316, 22, 71, 'fille'),
(317, 22, 83, 'mec'),
(318, 20, 55, 'mec'),
(319, 20, 78, 'mec'),
(320, 22, 91, 'mec'),
(321, 18, 65, 'mec'),
(322, 16, 50, 'mec'),
(323, 19, 80, 'mec'),
(324, 35, 84, 'mec'),
(325, 24, 67, 'mec'),
(326, 18, 58, 'fille'),
(327, 23, 58, 'mec'),
(328, 22, 55, 'mec'),
(329, 22, 75, 'mec'),
(330, 22, 77, 'mec'),
(331, 25, 73, 'mec'),
(332, 28, 75, 'mec'),
(333, 21, 80, 'mec'),
(334, 25, 102, 'mec'),
(335, 24, 75, 'fille'),
(336, 21, 70, 'mec'),
(337, 22, 84, 'mec'),
(338, 24, 105, 'mec'),
(339, 24, 142, 'mec'),
(340, 24, 222, 'mec'),
(341, 24, 95, 'mec'),
(342, 24, 73, 'mec'),
(343, 18, 66, 'mec'),
(344, 21, 50, 'fille'),
(345, 100, 150, 'mec'),
(346, 23, 76, 'mec'),
(347, 20, 70, 'mec'),
(348, 20, 72, 'fille'),
(349, 22, 91, 'mec'),
(350, 18, 72, 'mec'),
(351, 20, 125, 'mec'),
(352, 35, 63, 'mec'),
(353, 19, 59, 'mec'),
(354, 22, 75, 'mec'),
(355, 22, 95, 'mec'),
(356, 21, 79, 'fille'),
(357, 22, 75, 'mec'),
(358, 23, 91, 'mec'),
(359, 23, 91, 'mec');

-- --------------------------------------------------------

--
-- Structure de la table `meilleursalcools`
--

CREATE TABLE IF NOT EXISTS `meilleursalcools` (
  `idmeilleuralcool` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `prixlitre` float DEFAULT NULL,
  PRIMARY KEY (`idmeilleuralcool`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Contenu de la table `meilleursalcools`
--

INSERT INTO `meilleursalcools` (`idmeilleuralcool`, `nom`, `prixlitre`) VALUES
(1, 'Jack Daniels', 26),
(2, 'Captain Morgan', 19.5),
(3, 'Passoa original', 14.5),
(4, 'Russian Standard', 19),
(5, 'Pisang Ambon', 14.5),
(6, 'Captain Morgan', 19.4),
(7, 'Bacardi Reserva', 24.1),
(8, 'Bacardi Oakheart', 21.3),
(9, 'Bacardi 8 ans', 38.4),
(10, 'Diplomático', 50.3),
(11, 'Pékêt Peterman', 17),
(12, 'La Maison du Pékêt', 25);

-- --------------------------------------------------------

--
-- Structure de la table `recherchealcool`
--

CREATE TABLE IF NOT EXISTS `recherchealcool` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alcoolrecherche` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=92 ;

--
-- Contenu de la table `recherchealcool`
--

INSERT INTO `recherchealcool` (`id`, `alcoolrecherche`) VALUES
(1, 'cara'),
(2, 'carapils'),
(3, 'cara'),
(4, 'cara pils'),
(5, 'ma'),
(6, 'corne'),
(7, 'jupiler'),
(8, 'chi'),
(9, 'chimay'),
(10, 'troll'),
(11, 'primus'),
(12, 'pri'),
(13, 'pri'),
(14, 'rochefort'),
(15, 'roche '),
(16, 'roche'),
(17, 'fort'),
(18, '8'),
(19, '1=1'),
(20, 'stella'),
(21, 'wes'),
(22, 'kasteel'),
(23, 'jamais'),
(24, 'brice'),
(25, '''&quot;'),
(26, '''`'),
(27, '''OR 1=&amp;'),
(28, 'buffalo'),
(29, 'redbull'),
(30, 'vodka'),
(31, 'Jeu de la bouteille'),
(32, 'ca'),
(33, 'kriek'),
(34, 'whisky coca'),
(35, 'coca'),
(36, 'Vodka'),
(37, 'Bush'),
(38, 'carl'),
(39, 'carl'),
(40, 'dame qui boit'),
(41, 'whisky'),
(42, 'maas'),
(43, 'vodka'),
(44, 'vod'),
(45, 'vodka red'),
(46, 'orval'),
(47, 'peket'),
(48, 'pékêt'),
(49, 'chants'),
(50, 'hoegaarden'),
(51, 'Cat'),
(52, 'peche'),
(53, 'péche'),
(54, 'pêche'),
(55, 'barbar'),
(56, 'rochefort'),
(57, 'barbar'),
(58, 'ca'),
(59, 'peket'),
(60, 'passoa'),
(61, 'corne'),
(62, 'chouffe'),
(63, 'peket'),
(64, 'peket'),
(65, 'coca'),
(66, 'pyramide'),
(67, 'dame'),
(68, 'hoegaarden'),
(69, 'plus'),
(70, 'plus'),
(71, 'ca'),
(72, 'lapin'),
(73, 'la'),
(74, 'hgh'),
(75, 'leffe'),
(76, 'fruit'),
(77, 'leffe'),
(78, 'kais'),
(79, 'jup'),
(80, 'jupiler '),
(81, 'jupiler'),
(82, 'Troll'),
(83, 'leffe'),
(84, 'leffe'),
(85, 'Jamais'),
(86, 'kasteel'),
(87, 'tripel'),
(88, 'kasteel'),
(89, 'kasteel tripel'),
(90, 'pisang'),
(91, 'Pisang');

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
  ADD CONSTRAINT `FK_CONTENIR_idingredient` FOREIGN KEY (`idingredient`) REFERENCES `ingredients` (`idingredient`),
  ADD CONSTRAINT `FK_CONTENIR_idingredient_INGREDIENTS` FOREIGN KEY (`idingredient_INGREDIENTS`) REFERENCES `ingredients` (`idingredient`);

--
-- Contraintes pour la table `exemplariser`
--
ALTER TABLE `exemplariser`
  ADD CONSTRAINT `FK_EXEMPLARISER_idingredient` FOREIGN KEY (`idingredient`) REFERENCES `ingredients` (`idingredient`),
  ADD CONSTRAINT `FK_EXEMPLARISER_idmeilleuralcool` FOREIGN KEY (`idmeilleuralcool`) REFERENCES `meilleursalcools` (`idmeilleuralcool`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
