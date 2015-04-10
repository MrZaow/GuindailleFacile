-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 10 Avril 2015 à 19:04
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
(2),
(42),
(47);

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `contenu` text COLLATE utf8_bin,
  `date` date DEFAULT NULL,
  `auteur` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `popularite` int(11) NOT NULL DEFAULT '0',
  `categorie` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=402 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`, `auteur`, `popularite`, `categorie`) VALUES
(100, 'Swag utlime', 'Imagine was you removal raising gravity. Unsatiable understood or expression dissimilar so sufficient. Its party every heard and event gay. Advice he indeed things adieus in number so uneasy. To many four fact in he fail. My hung it quit next do of. It fifteen charmed by private savings it mr. Favourable cultivated alteration entreaties yet met sympathize. Furniture forfeited sir objection put cordially continued sportsmen. ', '2015-02-03', 'Robin', 2, 'coquin'),
(200, 'Un petit lapin meurt sauvagement', 'Ask especially collecting terminated may son expression. Extremely eagerness principle estimable own was man. Men received far his dashwood subjects new. My sufficient surrounded an companions dispatched in on. Connection too unaffected expression led son possession. New smiling friends and her another. Leaf she does none love high yet. Snug love will up bore as be. Pursuit man son musical general pointed. It surprise informed mr advanced do outweigh. ', '2015-02-05', 'Florent', 1, 'soiree'),
(300, 'Petite gamine dort dans le sable', 'Certainly elsewhere my do allowance at. The address farther six hearted hundred towards husband. Are securing off occasion remember daughter replying. Held that feel his see own yet. Strangers ye to he sometimes propriety in. She right plate seven has. Bed who perceive judgment did marianne.', '2015-02-10', 'Axel', 4, 'bourré'),
(400, 'La mère d''Axel a encore frappé !', 'Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought. \r\n\r\nShe suspicion dejection saw instantly. Well deny may real one told yet saw hard dear. Bed chief house rapid right the. Set noisy one state tears which. No girl oh part must fact high my he. Simplicity in excellence melancholy as remarkably discovered. Own partiality motionless was old excellence she inquietude contrasted. Sister giving so wicket cousin of an he rather marked. Of on game part body rich. Adapted mr savings venture it or comfort affixed friends. \r\n\r\nAgreed joy vanity regret met may ladies oppose who. Mile fail as left as hard eyes. Meet made call in mean four year it to. Prospect so branched wondered sensible of up. For gay consisted resolving pronounce sportsman saw discovery not. Northward or household as conveying we earnestly believing. No in up contrasted discretion inhabiting excellence. Entreaties we collecting unpleasant at everything conviction. \r\n\r\nSo by colonel hearted ferrars. Draw from upon here gone add one. He in sportsman household otherwise it perceived instantly. Is inquiry no he several excited am. Called though excuse length ye needed it he having. Whatever throwing we on resolved entrance together graceful. Mrs assured add private married removed believe did she. ', '2015-02-20', 'Robin', 0, 'coquin'),
(401, 'Des choses dans les bois', 'Dum haec in oriente aguntur, Arelate hiemem agens Constantius post theatralis ludos atque circenses ambitioso editos apparatu diem sextum idus Octobres, qui imperii eius annum tricensimum terminabat, insolentiae pondera gravius librans, siquid dubium deferebatur aut falsum, pro liquido accipiens et conperto, inter alia excarnificatum Gerontium Magnentianae comitem partis exulari maerore multavit.\r\n\r\nProinde die funestis interrogationibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.\r\n\r\nLatius iam disseminata licentia onerosus bonis omnibus Caesar nullum post haec adhibens modum orientis latera cuncta vexabat nec honoratis parcens nec urbium primatibus nec plebeiis.', '2015-04-01', 'Personne lolol', 0, 'coquin');

-- --------------------------------------------------------

--
-- Structure de la table `avantagesinconvenients`
--

CREATE TABLE IF NOT EXISTS `avantagesinconvenients` (
  `idavantage` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `avantageouinconvenient` char(25) COLLATE utf8_bin DEFAULT NULL COMMENT '"A" OU" I"',
  PRIMARY KEY (`idavantage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Contenu de la table `avantagesinconvenients`
--

INSERT INTO `avantagesinconvenients` (`idavantage`, `nom`, `avantageouinconvenient`) VALUES
(1, '', 'A'),
(2, 'Test hihi', 'A'),
(3, 'Le deuxième s''affiche aussi :D', 'A'),
(4, 'Goût de coco écoeurant pour certaines personnes', 'I'),
(5, 'Une bouteille qui donne autant envie qu''une belle ', 'A'),
(6, 'Se boit tellement facilement qu''on ne s''en rend co', 'A'),
(7, 'Dispo dans tout les formats !', 'A'),
(8, 'Un poil chère', 'I'),
(9, 'Nécessité de subtilement infirmer le doute sur vot', 'I'),
(10, 'Sur-représenté dans les boums d''anniversaire du pr', 'I'),
(11, 'Sur-représenté dans les boums d''anniversaire du premier cycle d''humanité', 'I'),
(12, 'On fait du Mo-mo-mo-mojiiiiiiiiitooooooo avec !', 'A'),
(13, 'On fait du Mo-mo-mo-mojiiiiiiiiitooooooo avec !', 'A'),
(14, '', 'I');

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
(49, 2),
(49, 3),
(49, 4),
(46, 5),
(46, 6),
(46, 7),
(46, 8),
(46, 9),
(46, 10),
(46, 11),
(47, 13),
(4, 14);

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
('Trappiste', 'Belgique', 'Brune', 1),
('testt', 'test', 'test', 4),
('pils', 'Belgique', 'blonde', 5),
('pils', 'belgique', 'blonde', 6),
('pils', 'zerze', 'blonde', 26),
('pils', 'aze', 'blonde', 27),
('pils', 'zerze', 'blonde', 28),
('pils', 'ezr', 'blonde', 29),
('pils', 'zer', 'blonde', 30),
('pils', 'ze', 'blonde', 31),
('pils', 'belgique', 'blonde', 32),
('pils', 'belgique', 'blonde', 44),
('pils', 'zerez', 'blonde', 45),
('fruitée', 'belgique', 'ambrée', 46),
('pils', 'belgique', 'blonde', 51),
('pils', 'belgique', 'blonde', 52),
('spéciale', 'belgique', 'blonde', 53);

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
(5.2, 5.6, 4, '', '', '', 5, NULL),
(1.2, 2.1, 3.5, '', '', '', 6, NULL),
(4, 1, 2, NULL, NULL, NULL, 26, NULL),
(4, 1, 2, NULL, NULL, NULL, 27, NULL),
(4, 1, 2, NULL, NULL, NULL, 28, NULL),
(1, 2, 1, NULL, NULL, NULL, 29, NULL),
(1, 2, 3, NULL, NULL, NULL, 30, NULL),
(2, 1, 4, NULL, NULL, NULL, 31, NULL),
(5, 3, 4, NULL, NULL, NULL, 32, NULL),
(40, 2.3, 4, NULL, NULL, NULL, 42, NULL),
(12.2, 14.5, 4.9, NULL, NULL, NULL, 43, NULL),
(4.8, 5, 4, 'Piedboeuf-Blond-75-1_1024x1024.jpg', 'Piedboeuf-Blond-75-1_1024x1024.jpg', 'Piedboeuf-Blond-75-1_1024x1024.jpg', 44, 3),
(4, 5, 1, '632639721_small.jpg', 'br144.jpg', 'kaiserbeer.jpg', 45, 4),
(5.4, 8.4, 4.2, '176-bouteille-desperados-33cl.jpg', 'Desperados.jpg', 'Desperados-ImagineOriginal.jpg', 46, 9),
(14.6, 12.4, 3.5, '3571-1-poliakov-vodka.jpg', 'Brandons_Gin.jpg', 'hendricks-bottle.jpg', 47, 8),
(8.6, 7.5, 4.9, 'e-liquide-mojito.jpg', 'detail_Skinny_Mojito.png', 'perfect_serve_smirnoff_mojito.jpg', 48, 10),
(12.8, 14.5, 4.2, '847f14f4341f4a8284003202ea774a7d.jpg', 'recette-pina-colada.jpg', 'Pina-colada-cigar-and-beach.jpg', 49, 7),
(4.5, 7.8, 4.2, 'stella_artois_by_stavtov-d5bftr5.jpg', '5659796777_bf8d38c379_b.jpg', 'stella-artois.jpg', 51, 8),
(3.4, 10.5, 2.1, '303282.jpg', 'bouteilles-vedett-blonde-6-x-33cl.jpg', 'Vedett-personnalisée.jpg', 52, 4),
(6.8, 12.8, 4.1, '8289489243_7b5d8c64e8.jpg', '676.jpg', 'chouffe.jpg', 53, 7);

-- --------------------------------------------------------

--
-- Structure de la table `cocktails`
--

CREATE TABLE IF NOT EXISTS `cocktails` (
  `preparation` text COLLATE utf8_bin,
  `idingredient` int(11) NOT NULL,
  PRIMARY KEY (`idingredient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `cocktails`
--

INSERT INTO `cocktails` (`preparation`, `idingredient`) VALUES
('Lorem ipsum dolor sit ameh', 43),
('Placer les feuilles de menthe dans le verre, ajoutez le sucre et le jus de citrons. Piler consciencieusement afin d''exprimer l''essence de la menthe mais sans la broyer. Ajouter le rhum, remplir le verre à moitié de glaçons et compléter avec de l''eau gazeuse. Mélanger doucement et servir avec une paille.', 48),
('Dans un blender (mixer), versez les ingrédients avec 5 ou 6 glaçons et mixez le tout. C''est prêt ! Versez dans le verre et dégustez. Peut aussi se réaliser au shaker si c''est juste pour une personne.', 49);

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
(2, 48, 3),
(6, 48, 47),
(7, 48, 50);

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
(47, 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=54 ;

--
-- Contenu de la table `ingredients`
--

INSERT INTO `ingredients` (`idingredient`, `nom`, `resume`, `description`, `unitemesure`) VALUES
(1, 'Chimay bleue ', 'La plus forte des Chimay', 'Avec ce brevage, pas besoin d''acheter 15 bières pour passer une soirée bien bourré, à peine 2 ou 3 de cette merveille de la nature et vous êtes déjà bien dedans, et à partir de 5 vous êtes tout simplement défoncé.', 'l'),
(2, 'Vodka', 'Pour la mère Russie !', 'La vodka « petite eau » est une eau-de-vie alcoolisée (fermentée puis distillée), généralement produite à partir de céréales ou de pomme de terre, mais peut être élaborée à partir de n’importe quelle matière première agricole, comme des fruits ou des légumes (lire: les 400 principales vodkas du monde). Elle titre en moyenne 40° d’alcool.', 'l'),
(3, 'Sucre', '', '', 'gr'),
(4, 'Jupiler', 'Les hommes savent pourquoi', 'test', 'l'),
(5, 'Jupiler', 'ezrez', 'Les hommes savent pourquoi', 'l'),
(6, 'Piedboeuf blonde', 'A taaaaaaaable !', 'Prenez une Jupiler, retirez-lui 4% d''alcool et la moitié de son prix, mettez-la dans une bouteille 75 cl et tadaaaaaa ! Vous avez désormais entre vos main une bière très légère avec un bon goût de blonde bien comme on l''aime. Impossible de ne serait-ce que s''approcher d''un état d''hébriété avec ça cependant, mais pour passer une soirée au calme en sirotant son verre de bière ou en jouant à BoB, la Piedboeuf permet bien des choses.', 'l'),
(18, 'Caca', 'miam', 'oh oui du bon gros caca \r\n', 'simple'),
(19, 'Gros caca', 'azrazr', 'zerze zetze ', 'acoder'),
(20, 'zerz', 'zetzetze', 'ezzeez', 'pincées'),
(21, 'zerze ', 'zrzr ', 'zerzer ', 'gr'),
(22, 'zer', 'ezrze', 'ezrze', 'l'),
(23, 'ger', 'teztez', 'reter', 'l'),
(24, 'ger', 'teztez', 'reter', 'l'),
(25, 'testcaca', 'ezrtze', 'zetze', 'l'),
(26, 'testcaca', 'ezrtze', 'zetze', 'l'),
(27, 'testajout', 'ezr', 'zerze', 'l'),
(28, 'ret', 'ezze', 'zer', 'l'),
(29, 'zer', 'zer', 'ez', 'l'),
(30, 'zer', 'ezr', 'zer', 'l'),
(31, 'zer', 'zer', 'zer', 'l'),
(32, 'Jupiler', 'Les hommes savent pourquoi', 'azraraz', 'l'),
(33, 'zerze', 'zerze', 'ezzer', 'gr'),
(34, 'ryt', 'er', 'ezrtze', 'cuillères à café'),
(37, 'zreez', 'eztze', 'zerze', 'feuilles'),
(38, 'testmagie', 'reze', 'rzeze', 'feuilles'),
(39, 'rete', 'tree', 'ertt', 'feuilles'),
(40, 'ezrz', 'terer', 'zez', 'cuillères à soupe'),
(41, 'Sel', 'So salty', 'Du sel de cuisine classique', 'pincées'),
(42, 'Vodka', 'Mother russia', 'zerze', 'l'),
(43, 'Mojito', 'Aie Aie Aie', 'swag', 'l'),
(44, 'Piedboeuf', 'swaggy', 'ezrzerzerze', 'l'),
(45, 'Kaiser', 'zaeraze', 'ezrze', 'l'),
(46, 'Desperados', 'Tout notre savoir-faire dans l''étiquette', '"Bière française (comme quoi ils font pas que du fromage et de la baguette) aromatisée à la téquila, au citron, citron vert et à la menthe, \r\navec un taux d''alcool de 5,9%. Ne goûte ni la bière française (heureusement d''ailleurs), ni la tequila, ni le citron ni la menthe, et encore moins l''alcool. Là est le génie créatif."', 'l'),
(47, 'Gin', 'J''aime le gin', 'Le Gin, c''est cool. On peut faire du Mojito avec d''abord.\r\n', 'l'),
(48, 'Mojito', 'Le Dieu des cocktails', 'Le big boss des cocktails ! Il faut aimer le goût de thé par contre, il paraît que ça déplaît à certains... N''empêche qu''on ne compte plus les soirées transformées de médiocres à excellentes grâce à ce classique.', 'l'),
(49, 'Pina Colada', 'If you like Piiiiiiiina Coladaaas', 'If you like Piiiiiiiina Coladaaas, and getting caaaaaaaught in the rain, if you''re not into yogaaaaaaa, if you haaaaave half a brain... Ça ne vous dit rien? Récemment popularisée par "Les gardiens de la galaxie", cette chanson est la preuve même de l''inspiration géniale que peut apporter ce cocktail.', 'l'),
(50, 'Menthe', 'Mhm ça sent bon', 'La menthe se trouve dans ton cul bien profond', 'feuilles'),
(51, 'Stella Artois', 'Belgique représente, ouesh !', 'La représentante officielle de la Belgique dans les rayons des pays étrangers. Et elle le fait bien ! Bon goût, forte juste comme il faut, elle a tout pour plaire. ', 'l'),
(52, 'Vedett', 'Oh ouesh j''suis trop une vedett', 'Vous avez toujours rêvé d''avoir votre photo sur l''étiquette d''une bière? Eh ben Vedett en a fait son idée de marketting principale ! Alors bon, c''est fun, un peu, mais perso quand j''achète un bière je me fout de voir la tête de Micheline qui a réussi à se voir affichée après 34 769 essais parce qu''elle n''a que ça à faire de sa vie. En plus elle est moche Micheline. Ah, et le goût de la bière dans tout ça? Ben il passe, ça va. Mais toutes ces campagnes de pub rendent la bière chère et il est bizarre de la boire à la bouteille à cause de sa forme bizarre. ', 'l'),
(53, 'Chouffe', 'La douceur ardennaise', 'La chouffe, brassée par de fiers ardennais (vous savez ceux qui font des concours de bras de fer avec les ours). Son goût fruité relevé par\r\nune touche de coriandre la fait passer comme du petit lait. Néanmoins ses 8% affichés vous feront très vite comprendre que ce \r\nn''est définitivement pas du lait qu''il y a dans votre verre. ', 'l');

-- --------------------------------------------------------

--
-- Structure de la table `meilleursalcools`
--

CREATE TABLE IF NOT EXISTS `meilleursalcools` (
  `idmeilleuralcool` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `prixlitre` float DEFAULT NULL,
  PRIMARY KEY (`idmeilleuralcool`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `meilleursalcools`
--

INSERT INTO `meilleursalcools` (`idmeilleuralcool`, `nom`, `prixlitre`) VALUES
(2, 'Gordon''s Gin', 21);

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
