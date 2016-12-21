-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 21 Décembre 2016 à 15:49
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
(24, 'Tel pizza', 'Commande : pizza.fr', '33 Rue du Faubourg de Béthune, 59000 Lille', 'Restaurant', 50.6177, 3.02806),
(25, 'Tennis Club Lillois Lille Métropole', 'club de tennis', 'Rue du Mal Assis, 59000 Lille', 'Sport', 50.6185, 3.02565),
(26, 'La poste', 'Envoie de lettre et colis', '37 Rue du Faubourg des Postes lille', 'Lieux municipaux', 50.6142, 3.04782);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
