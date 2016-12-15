-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 15 Décembre 2016 à 17:25
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ad2f`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `token`, `role`) VALUES
(26, '', 'jennifer', 'VINCENT', 'vincentjenni@gmail.com', '$2y$10$asY5QoNRzOFTUUMrP5Vipulf8/E/0EUg.I0gNMborU0Ux4WtzQuu2', 'WFv7M1kl0TTbMNtsj3uTfVUlxG1J98puRgVSN1vDT4_Nnit-8_7p8WXqx3ZlgjhuP3GNlYOupnl-IRAh', 'admin'),
(27, '', 'Admin', 'Admin', 'essai@free.fr', '$2y$10$wUTLjVXsSNdhkD.Z5ptsme3MikerFqBzAjglORNKOl0TQXHogCpEm', 'z1_kRtroffuxTfgMK0gTGVzNGKkkxVP7j3RRPpjmLvddfvwGhFRSEfxPs1ifMyQo7biFf0Dd6DZd6cM_', 'admin'),
(28, '', 'moi', 'remoi', 'elrika83@gmail.com', '$2y$10$Hr7s6bkR0TbLikwWR8A9OuDy9oKHNu/xu/eGyZVzWuLWhx1YdBveu', 'ckIbEA1XgWUNIE1JOLchfWkolRYQ4fRw34P3FYgDhSFW8YCvAEQ3eTOiiH12dSy3F5ivrnnzEJTylBiE', 'admin'),
(29, '', 'hello', 'world', 'helloworld@free.fr', '$2y$10$AGA6NcVfkJlCwankbERMpObwLLawnKBC.1AgnyaNLfspVmdG99wQq', 'h2DT_-AXr5IDBG2KJ-Ewq-9wYnw7tlK-iL2tnhoy6VzfI2GYAYM5_2aKkk-8CaP_6D1fgekVav7Daxsz', 'admin'),
(39, '', 'jennifer', 'world', 'fdgdfsg@sdfgsdg', '$2y$10$wW19ArqY9szuG3vMlsV8BOr1QUjUSQe73dh2EsBXKXZ8V18.Xac5y', 'fW02XdO5JjW7RPRk7gYl28GhUX5xzn24cV4GgF3kej4p5_oFMdTA6nFS2NkvraXjIGLJ3EwiLlNEo7Vh', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE `association` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ZIP_code` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `association`
--

INSERT INTO `association` (`id`, `name`, `address`, `ZIP_code`, `city`, `phone`) VALUES
(1, 'Association des 2 faubourg', '1 bis rue bertholot', 59800, 'Lille', '01-23-45-67-89');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` varchar(255) NOT NULL,
  `media_id` int(11) UNSIGNED DEFAULT NULL,
  `date` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `title`, `content`, `media_id`, `date`, `category`, `address`) VALUES
(6, 'test', 'cviuop erjhziuojhdkezodeze', 38, '2016-12-09', 'Braderie', ''),
(10, 'Braderie 2016', 'frezff', 39, '2016-12-09', 'Braderie', ''),
(19, 'Braderie des faubourgs', 'fuifjerhimgejrhnkljearnhkmjnzerkmj²', 42, '2016-12-09', 'Braderie', ''),
(119, 'caranal d hiver', 'ytyrty', 0, '0000-00-00', 'Carnaval', ''),
(120, 'carnaval de noel', 'yrtyytry', 0, '0000-00-00', 'carnaval', ''),
(121, 'Fêtes des voisins', 'ezaezae', 0, '0000-00-00', 'Fete-de-quartier', ''),
(122, 'Fêtes des voisins', 'uytutu', 0, '0000-00-00', 'Fete-de-quartier', ''),
(123, 'Fêtes des voisins', 'tretertertert', 1, '0000-00-00', 'braderie', ''),
(124, 'carnaval de noel', 'tretete', 2, '0000-00-00', 'carnaval', ''),
(125, 'Fêtes des voisins', 'uytutu', 3, '0000-00-00', 'Fete-de-quartier', '');

-- --------------------------------------------------------

--
-- Structure de la table `garage`
--

CREATE TABLE `garage` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reservedmeters` int(11) NOT NULL,
  `adhesion` tinyint(1) NOT NULL,
  `period` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `total_amount_paid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `filesize` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `media`
--

INSERT INTO `media` (`id`, `filename`, `filesize`, `title`, `date`, `path`) VALUES
(1, 'plan du quartier-15-12-2016-5852be37b7732.png', 511498, 'plan du quartier', '2016-12-15', 'C:\\xampp\\htdocs\\WF3\\ad2f/public/upload/plan du quartier-15-12-2016-5852be37b7732.png'),
(2, 'bourse aux jouets 2015-15-12-2016-5852be61d0afe.jp', 143462, 'bourse aux jouets 2015', '2016-12-15', 'C:\\xampp\\htdocs\\WF3\\ad2f/public/upload/bourse aux jouets 2015-15-12-2016-5852be61d0afe.jpg'),
(3, 'logo association-15-12-2016-5852becd45fb8.jpg', 16225, 'logo association', '2016-12-15', 'C:\\xampp\\htdocs\\WF3\\ad2f/public/upload/logo association-15-12-2016-5852becd45fb8.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `meeting`
--

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `meeting`
--

INSERT INTO `meeting` (`id`, `date`, `address`, `content`) VALUES
(0, '2016-12-24', 'rue du père noel', 'Reunion pour le passage du père noel');

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

CREATE TABLE `member` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `creation_date` date NOT NULL,
  `subscription_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `member`
--

INSERT INTO `member` (`id`, `firstname`, `lastname`, `address`, `phone`, `email`, `paid`, `creation_date`, `subscription_date`) VALUES
(2, 'jennifer', '', '2 place de Béthune 59000 Lille', '25698755', 'vincentjenni@gmail.com', 1, '2016-12-15', '0000-00-00'),
(3, 'jennifer', 'world', 'sdfsf', '546982578', 'Adminsuper@free.fr', 0, '2016-12-15', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `place`
--

INSERT INTO `place` (`id`, `titre`, `content`, `address`, `categorie`, `lat`, `lng`) VALUES
(1, 'Lille Football Faubourg de Bethune', 'Association et club de loisir ', '97 Rue d''Esquermes, 59000 Lille', 'sport', 0, 0),
(2, 'Tennis Club Lillois Lille Métropole', 'Club de tennis à Lille, France', 'Rue du Mal Assis, 59000 Lille', 'sport', 0, 0),
(3, 'Maison de Quartier Faubourg de Béthune', 'Maison de Quartier Faubourg de Béthune', ' 65 Rue Saint-Bernard, 59000 Lille', 'Lieu municipaux', 0, 0),
(4, 'La Poste Esquermes', 'La poste', '34 Boulevard de Metz, 59000 Lille', 'Lieu municipaux', 0, 0),
(19, 'Le Paon d’Or', 'Brasserie traditionnelle. Spécialités flamande et Welsh . Viande et poisson de qualité provenant de fournisseurs locaux.', '2 place de Béthune 59000 Lille', 'Restaurant', 0, 0),
(20, 'Le Paon d’Or', 'Brasserie traditionnelle. Spécialités flamande et Welsh . Viande et poisson de qualité provenant de fournisseurs locaux.', '2 place de Béthune 59000 Lille', 'Restaurant', 0, 0),
(22, 'Le Paon d’Or', 'Brasserie traditionnelle. Spécialités flamande et Welsh . Viande et poisson de qualité provenant de fournisseurs locaux.', '2 place de Béthune 59000 Lille', 'Restaurant', 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `picture_id` (`media_id`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
