-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Hôte : sql8614.phpnet.org:3306
-- Généré le : lun. 25 mai 2020 à 19:04
-- Version du serveur :  10.2.32-MariaDB-10.2.32+maria~stretch-log
-- Version de PHP : 7.3.14-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `web2020audrey`
--

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

CREATE TABLE `liens` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(150) COLLATE utf8_bin NOT NULL,
  `link` varchar(250) COLLATE utf8_bin NOT NULL,
  `texteliens` varchar(5000) COLLATE utf8_bin NOT NULL,
  `idutilisateur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `liens`
--

INSERT INTO `liens` (`id`, `nom`, `link`, `texteliens`, `idutilisateur`) VALUES
(1, 'W3schools', 'https://www.w3schools.com/', 'Plateforme d\'E-learning très vaste allant du \'simple\' HTML jusqu\'à Python en passant par JS, PHP et beaucoup d\'autres !', 1),
(2, 'OpenClassroom', 'https://openclassrooms.com/en/', 'Open Classrooms propose des cours de programmation accessibles sur tous supports et a une grande communauté !', 1),
(3, 'Codecademy', 'https://www.codecademy.com/', 'Il propose des exercices interactifs sur différents langages web (HTML, PHP, Python etc ...)', 1),
(4, 'Alsacréations', 'https://www.alsacreations.com/tutoriels/', 'Tutoriels, astuces et livres qui traite de nombreux sujets, principalement HTML, CSS et JavaScript', 1),
(5, 'Grafikart', 'https://www.grafikart.fr/', 'Site très complet et en français. Tutoriels HTML, CSS, JS PHP etc ... Posède une série de tutoriels sur GIT très complet', 1),
(6, 'John Codeur', 'https://apprendre-a-coder.com/', 'Il fait des tutoriels divers et variés sur de multiples langages de programmation sur son site et YouTube.', 1),
(7, 'Udemy', 'https://www.udemy.com/', 'Plateforme de publication de cours en ligne, de nombreux développeur web on mis leur formation maison à disposition', 1),
(8, 'SoloLearn', 'https://www.sololearn.com/', 'Application qui met à disposition des cours avec des petits test de connaissances en fin de chapitre !', 1),
(9, 'Believemy', 'https://believemy.com/', 'Site de formation au code avec quelques sessions gratuites, le reste sont des cours payants', 1),
(10, 'Codewars', 'https://www.codewars.com/', 'Énormément de challenge disponible en plein de langage pour tester ses compétences !', 1),
(11, 'ScreenSizeMap', 'https://www.screensizemap.com/', 'Site très pratique regroupant les tailles d\'écrans existantes avec possibilité de les triées par popularité !', 1),
(12, 'CodePen', 'https://codepen.io/', 'Site communautaire ou chacun peut poster son design ou venir s\'inspirer, les codes sont en HTML, CSS et JS', 1),
(13, 'MDN webdocs', 'https://developer.mozilla.org/fr/', 'Site en français avec diverses introduction et explication sur quelques langages (surtout HTML, CSS, JS)', 1),
(14, 'Pierre Giraud', 'https://www.pierre-giraud.com/', 'Comme John Codeur il fait des tutoriels divers et variés sur de multiples langages, son site est très complet', 1),
(15, 'YouTube', 'https://www.youtube.com/', 'Mine d\'or avec une quantité de tutoriels infini, en anglais et en français, pour les front-end et les back-end !', 1);

-- --------------------------------------------------------

--
-- Structure de la table `mail`
--

CREATE TABLE `mail` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(150) COLLATE utf8_bin NOT NULL,
  `contenu` varchar(5000) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `mail`
--

INSERT INTO `mail` (`id`, `nom`, `prenom`, `email`, `contenu`) VALUES
(1, 'Antony', 'Audrey', 'oui@non.com', 'ur views\r\nare sought on the random breath testing options.\r\nthe statistical inferences because the observed sample will be a reduced sample of the true sample.\r\nib-net égalité avec le Conseil, le droit de contrôler les mesures\r\nd\'exécution, au moins pour les textes adoptés en codécision.\r\neuroparl.europa.eu\r\n	\r\n[...] the right, on equal terms with the Council, to control implementing\r\nmeasures, at least for texts adopted by codecision.\r\neu'),
(2, 'Dupond', 'Gaston', 'non@oui.be', 'Mox dicta finierat, multitudo omnis ad, quae imperator voluit, promptior laudato consilio consensit in pacem ea ratione maxime percita, quod norat expeditionibus crebris fortunam eius in malis tantum civilibus vigilasse, cum autem bella moverentur externa, accidisse plerumque luctuosa, icto post haec foedere gentium ritu perfectaque sollemnitate imperator Mediolanum ad hiberna discessit.\r\n\r\nQuo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes de industria milites agentes in civitatibus perviis.');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(10) UNSIGNED NOT NULL,
  `pseudo` varchar(50) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(11) COLLATE utf8_bin NOT NULL,
  `droits` char(3) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `mdp`, `droits`) VALUES
(1, 'Drey', '42', 'all');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `liens`
--
ALTER TABLE `liens`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `liens`
--
ALTER TABLE `liens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
