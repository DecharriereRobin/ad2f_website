-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 15 Décembre 2016 à 11:03
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
(23, 'Lille.png', 1155, 'Lille', '2016-12-13', '/Projet_AD2F/ad2f_website/public/Lille-13-12-2016-584ff8bd988cc.png'),
(24, 'Lille.png', 1155, 'Lille', '2016-12-13', '/Projet_AD2F/ad2f_website/public/Lille-13-12-2016-584ff9cda5634.png'),
(25, '500x500.png', 11129, '500x500', '2016-12-13', 'C:\\xampp\\htdocs\\Projet_AD2F\\ad2f_website\\public\\upload\\500x500-13-12-2016-5850003823c35.png'),
(26, '500x500.png', 11129, '500x500', '2016-12-13', 'C:\\xampp\\htdocs\\Projet_AD2F\\ad2f_website\\public\\upload\\500x500-13-12-2016-5850008fbdaef.png'),
(27, '1500x1500.png', 52217, '1500x1500', '2016-12-13', 'C:\\xampp\\htdocs\\Projet_AD2F\\ad2f_website\\public\\upload\\1500x1500-13-12-2016-58500544ec0d4.png'),
(28, '299x499.png', 8736, '299x499', '2016-12-13', 'C:\\xampp\\htdocs\\Projet_AD2F\\ad2f_website\\public\\upload\\299x499-13-12-2016-585008201640e.png'),
(29, '299x499.png', 8736, '299x499', '2016-12-13', 'C:\\xampp\\htdocs\\Projet_AD2F\\ad2f_website\\public\\upload\\299x499-13-12-2016-5850083f8d57d.png'),
(30, 'IMG_3823-13-12-2016-58501a4d0493a.JPG', 1561163, 'IMG_3823', '2016-12-13', 'C:\\xampp\\htdocs\\Projet_AD2F\\ad2f_website\\public\\upload\\IMG_3823-13-12-2016-58501a4d0493a.JPG'),
(31, 'IMG_3823-13-12-2016-58501bfa4e130.JPG', 1561163, 'IMG_3823', '2016-12-13', 'C:\\xampp\\htdocs\\Projet_AD2F\\ad2f_website\\public\\upload\\IMG_3823-13-12-2016-58501bfa4e130.JPG'),
(32, 'IMG_3823-13-12-2016-58501fb786685.JPG', 1561163, 'IMG_3823', '2016-12-13', 'C:\\xampp\\htdocs\\Projet_AD2F\\ad2f_website\\public\\upload\\IMG_3823-13-12-2016-58501fb786685.JPG'),
(33, 'IMG_3823-15-12-2016-58525941ace57.JPG', 1561163, 'IMG_3823', '2016-12-15', 'C:\\xampp\\htdocs\\Projet_AD2F\\ad2f_website/public/upload/IMG_3823-15-12-2016-58525941ace57.JPG'),
(34, 'IMG_3823-15-12-2016-58525aac04517.JPG', 1561163, 'IMG_3823', '2016-12-15', 'C:\\xampp\\htdocs\\Projet_AD2F\\ad2f_website/public/upload/IMG_3823-15-12-2016-58525aac04517.JPG');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
