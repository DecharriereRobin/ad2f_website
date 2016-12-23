-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 16 Décembre 2016 à 17:14
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
  `subscription_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `member`
--

INSERT INTO `member` (`id`, `firstname`, `lastname`, `address`, `phone`, `email`, `paid`, `creation_date`, `subscription_date`) VALUES
(42, 'dhgdd', 'dfghdfg', 'ddfgdfg', '0230303030', 'don.codie@hotmail.fr', 0, '2016-12-13', NULL),
(43, 'grubber', 'robin', 'dqfgqeg qe er', '0320353232', 'don.codie@hotmail.hgt', 1, '2016-12-13', NULL),
(50, 'grubber', 'robin', 'dqfgqeg qe er', '', 'don.codie@hotmail.dfvd', 1, '2016-12-13', NULL),
(51, 'Frodo', 'Baggins', 'Hobbitebourg', '', 'sacquet@live.lotr', 1, '2016-12-13', NULL),
(52, 'grubber', 'robin', 'dqfgqeg qe er', '', 'don.codie@hotmail.nb', 0, '2016-12-13', NULL),
(53, 'bla', 'bla', 'bla', '', 'bla@bla.com', 1, '2016-12-15', NULL),
(54, 'grubber', 'robin', 'dqfgqeg qe er', '', 'don.codie@hotmail.mplo', 0, '2016-12-15', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
