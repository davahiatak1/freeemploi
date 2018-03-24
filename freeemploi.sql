SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `competence` (
  `idCompetence` int(11) NOT NULL,
  `idDomaine` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `competence` (`idCompetence`, `idDomaine`, `nom`) VALUES
(1, 0, ''),
(2, 1, 'Java'),
(3, 1, 'PHP'),
(4, 1, 'Zend'),
(5, 1, 'Symfony'),
(6, 1, 'Python'),
(7, 1, 'C#'),
(8, 1, 'CMS'),
(9, 1, 'Javascript'),
(10, 1, 'HTML5'),
(11, 1, 'AngularJS'),
(12, 1, 'jQuery'),
(13, 1, 'Bootstrap'),
(14, 1, 'CSS3'),
(15, 1, 'Android'),
(16, 0, ''),
(17, 1, 'IOS'),
(18, 1, 'Cordova'),
(19, 1, 'Xamarin'),
(20, 1, 'Phonegap'),
(21, 1, 'Wordpress'),
(22, 1, 'Joomla'),
(23, 1, 'Drupal'),
(24, 1, 'Prestashop'),
(25, 1, 'Administrateur de base de données'),
(26, 1, 'Administrateurs systèmes et réseaux'),
(27, 1, 'Experts cybersécurité'),
(28, 3, 'Community managers'),
(29, 3, 'Traducteurs'),
(30, 3, 'Chargés de relations presse'),
(31, 2, 'Webdesigners'),
(32, 2, 'Photographes'),
(33, 2, 'Graphistes');

CREATE TABLE `compte` (
  `idcompte` int(10) NOT NULL,
  `typecompte` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `compte` (`idcompte`, `typecompte`) VALUES
(1, 'Free Lance'),
(2, 'Pret Emploi');

CREATE TABLE `domaine` (
  `idDomaine` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `domaine` (`idDomaine`, `nom`) VALUES
(1, 'Informatique'),
(2, 'Graphistes & photographes'),
(3, 'Community manager'),
(4, 'Webmasters'),
(5, 'Administrateurs systèmes & DBA');

CREATE TABLE `entreprise` (
  `identreprise` int(10) NOT NULL,
  `nomentreprise` varchar(25) NOT NULL,
  `numeroreference` int(30) NOT NULL,
  `domaineprincipale` varchar(25) NOT NULL,
  `domainesecondaire` varchar(100) NOT NULL,
  `quartier` varchar(25) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `pays` varchar(25) NOT NULL,
  `contact` int(10) NOT NULL,
  `iduser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `entreprise` (`identreprise`, `nomentreprise`, `numeroreference`, `domaineprincipale`, `domainesecondaire`, `quartier`, `ville`, `pays`, `contact`, `iduser`) VALUES
(1, 'GCENT', 2147483647, '1', '3', 'Bè', 'Lomé', 'Togo', 96688556, 10),
(2, 'fghj', 4444, '1,2', '1', 'lome', 'tiyu', 'ytit', 455663, 25),
(3, 'CafeInfo', 55555, '1,3', '2', 'totsi', 'Lome', 'Togo', 44556, 26);

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `nom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `postulant` (
  `idPostulant` int(11) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `tarif` int(50) NOT NULL,
  `domaine` varchar(1000) NOT NULL,
  `competence` varchar(1000) NOT NULL,
  `diplome` varchar(25) NOT NULL,
  `formation` varchar(100) NOT NULL,
  `cv` varchar(25) NOT NULL,
  `iduser` int(10) NOT NULL,
  `avatar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `postulant` (`idPostulant`, `adresse`, `telephone`, `tarif`, `domaine`, `competence`, `diplome`, `formation`, `cv`, `iduser`, `avatar`) VALUES
(1, 'fabio', 'fabio', 100000, 'Informatique', 'Java,Php,Zend,Symfony2,Python,C#', 'fabio', 'fabio', 'Apprenez-a-programmer-en-', 27, ''),
(14, 'Adewui', '93136396', 300000, 'Administrateurs_systèmes_DBA', 'Administrateurs_base_de_données,Administrateurs_systèmes_et_réseaux,Experts_cybersécurité', 'Master professionnel', 'Avance', 'Economie & Développement', 19, ''),
(15, 'lomé', '91697027', 100000, 'Informatique', 'Java,Php,CMS,Javascript,HTML5', 'Licence', 'DA', 'designpatternsgof.pdf', 20, ''),
(16, 'lomé', '455', 456, 'Informatique', 'Java,Php,Zend', 'Licence', 'DA', 'GCENT Cahier de charge Fr', 30, ''),
(17, 'wodabalo', '12365', 45632, 'Informatique,Graphistes_photographes', 'Java,Php,Zend', 'wodabalo', 'wodabalo', 'Apprenez-a-programmer-en-', 31, ''),
(18, 'LOmé', '25225', 125675568, 'Informatique', 'Php', 'plus', 'plus', 'b4.png', 32, ''),
(19, 'rezrezrezr', 'zerzerezrz', 5000, 'Informatique', 'Java', 'erzerezr', 'fzfferez', 'Néant', 36, '/asset/img/36.jpg'),
(20, 'Hédranawoé', '92431002', 10000, 'Webmasters', 'Php', 'BAC2', 'Général', 'Néant', 37, '/asset/img/37.jpg'),
(21, 'Bè', '92233665', 150000, 'Informatique,Webmasters', 'Java,Php,Python', 'BAC2', 'Dévéloppeur', 'Néant', 38, '/asset/img/38.jpg'),
(22, 'lome', '228', 456226, 'Webmasters', 'Zend', 'LICENCE', 'AGRO', 'Néant', 39, '/asset/img/39.jpg');

CREATE TABLE `recruter` (
  `idRecrutement` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idPostulant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `utilisateur` (
  `iduser` int(10) NOT NULL,
  `nomuser` varchar(25) NOT NULL,
  `prenomuser` varchar(25) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `motdepasse` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `idtypecompte` int(5) NOT NULL,
  `avatar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `utilisateur` (`iduser`, `nomuser`, `prenomuser`, `pseudo`, `motdepasse`, `email`, `idtypecompte`, `avatar`) VALUES
(10, 'LAWSON', 'Laté', 'jeanluc', '123', 'luc@yahoo.fr', 2, ''),
(19, 'WILSON', 'Godson', 'godbevi', '123', 'godsonwilson@gmail.com', 1, ''),
(20, 'Laheran', 'Heramnn', 'l7', '7753', 'seserges2@gmail.com', 1, ''),
(22, 'DADA', 'dada', 'cafe', 'cafe', 'cafe@cafe', 2, ''),
(23, 'QSD', 'FDR', 'cafe', 'cafe', 'cafe@cafe', 2, ''),
(24, 'QSD', 'FDR', 'cafe', 'cafe', 'cafe@cafe', 2, ''),
(25, 'fdgfhgjh', 'fdgfhj', 'hghljm', '444', 'cafe@cafe', 2, ''),
(26, 'Cafe', 'Cafe', 'cafe', 'cafe', 'cafe@cafe', 2, ''),
(27, 'MAWAKE', 'fabio', 'fabio', 'fabio', 'fabio@fabio', 1, ''),
(28, 'GOYA', 'Honore', 'hono', 'hono', 'hono@hono', 1, ''),
(29, 'BOBO', 'BOBO', 'bob', 'bob', 'bob@bob.com', 1, ''),
(30, 'BOBO', 'BOBO', 'bob', 'bob', 'bob@bob.com', 1, ''),
(31, 'wodabalo', 'wodabalo', 'wodabalo', 'wodabalo', 'wodabalo@wodabalo', 1, '/asset/img/31.jpg'),
(32, 'dav', 'dav', 'dav', 'dav', 'dav@dav.com', 1, '/asset/img/32.jpg'),
(36, '\'(\'("\'', 'erzerr', 'ezrzerezr', 'edfezfezf', 'erezrz@zerzer', 1, '/asset/img/36.jpg'),
(37, 'LAWSON', 'Luc', 'luc', '147', 'luc@yahoo.fr', 1, '/asset/img/37.jpg'),
(38, 'ASSOUVI', 'Lama', 'lama', '123', 'lama@yahoo.fr', 1, '/asset/img/38.jpg'),
(39, 'KHALA', 'Monterino', 'momo', 'momo', 'momo@gmail.com', 1, '/asset/img/39.jpg');


ALTER TABLE `competence`
  ADD PRIMARY KEY (`idCompetence`);

ALTER TABLE `compte`
  ADD PRIMARY KEY (`idcompte`);

ALTER TABLE `domaine`
  ADD PRIMARY KEY (`idDomaine`);

ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`identreprise`),
  ADD KEY `iduser` (`iduser`);

ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `postulant`
  ADD PRIMARY KEY (`idPostulant`),
  ADD KEY `iduser` (`iduser`);

ALTER TABLE `recruter`
  ADD PRIMARY KEY (`idRecrutement`);

ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`iduser`);


ALTER TABLE `competence`
  MODIFY `idCompetence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
ALTER TABLE `compte`
  MODIFY `idcompte` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `domaine`
  MODIFY `idDomaine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
ALTER TABLE `entreprise`
  MODIFY `identreprise` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `postulant`
  MODIFY `idPostulant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
ALTER TABLE `recruter`
  MODIFY `idRecrutement` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `utilisateur`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

ALTER TABLE `entreprise`
  ADD CONSTRAINT `entreprise_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `utilisateur` (`iduser`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
