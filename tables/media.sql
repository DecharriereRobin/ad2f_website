-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 20 Décembre 2016 à 16:49
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
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` int(11) UNSIGNED NOT NULL,
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
(168, '_DSC2065-20-12-2016-5859461aabb9b.jpg', 11958607, '_DSC2065', '2016-12-20', '/public/upload/_DSC2065-20-12-2016-5859461aabb9b.jpg'),
(169, 'IMG_3823-20-12-2016-58594ca47fdc0.JPG', 1561163, 'IMG_3823', '2016-12-20', '/public/upload/IMG_3823-20-12-2016-58594ca47fdc0.JPG'),
(170, '_DSC2065-20-12-2016-58594cbd4a7d6.jpg', 11958607, '_DSC2065', '2016-12-20', '/public/upload/_DSC2065-20-12-2016-58594cbd4a7d6.jpg'),
(171, '_DSC2065-20-12-2016-58594cc8b7183.jpg', 11958607, '_DSC2065', '2016-12-20', '/public/upload/_DSC2065-20-12-2016-58594cc8b7183.jpg'),
(172, '_DSC2065-20-12-2016-58594cead3a62.jpg', 11958607, '_DSC2065', '2016-12-20', '/public/upload/_DSC2065-20-12-2016-58594cead3a62.jpg'),
(173, '_DSC1677-20-12-2016-58594d580cbb7.jpg', 12085130, '_DSC1677', '2016-12-20', '/public/upload/_DSC1677-20-12-2016-58594d580cbb7.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
