-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 20 Décembre 2016 à 16:47
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

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
(6, 'test', 'cviuop erjhziuojhdkezodeze', 166, '2016-12-23', 'braderie', ''),
(218, 'mmmm', 'aaaaaa', NULL, '2016-12-25', 'Fete-de-quartier', ''),
(219, 'mmmm', 'aaaaaa', NULL, '2016-12-25', 'Fete-de-quartier', ''),
(220, 'mmmm', 'aaaaaa', NULL, '2016-12-25', 'Fete-de-quartier', ''),
(221, 'mmmm', 'aaaaaa', NULL, '2016-12-25', 'Fete-de-quartier', ''),
(222, 'Vrfer', 'fezfe', NULL, '2016-12-23', 'braderie', ''),
(223, 'cez', 'ezfz', 167, '2016-12-23', 'braderie', ''),
(224, 'Test Image', 'Test Image', 173, '2016-12-31', 'Braderie', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `picture_id` (`media_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
