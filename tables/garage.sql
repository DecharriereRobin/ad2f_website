-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 21 Décembre 2016 à 16:11
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
-- Structure de la table `garage`
--

CREATE TABLE `garage` (
  `id` int(11) NOT NULL,
  `firstname` varchar(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `reservedmeters` varchar(255) NOT NULL,
  `adhesion` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `total_amount_paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `garage`
--

INSERT INTO `garage` (`id`, `firstname`, `lastname`, `address`, `email`, `phone`, `reservedmeters`, `adhesion`, `period`, `amount`, `total_amount_paid`) VALUES
(1, '0', 'sss', 'ssssss', 'ssssssssssssssssssss@ssssssssssssss', '55555555', '', '', '', '', ''),
(2, 'roger', 'roger', 'roger', 'roger@roger', 'roger', '5', '5', '5', '5', '5'),
(3, 'roger', 'roger', 'roger', 'roger@roger', 'roger', 'roger', '', '', '', ''),
(4, 'roger', 'glover', 'jjjjjj', 'lkjh@lkjh', '45454545', '4', '', '', '', ''),
(5, 'roger', 'roger', 'roger', 'roger@fff', 'roger', 'roger', 'roger', '', '', ''),
(6, 'dédé', 'dédé', 'dédé', 'dfede@dede', 'dédé', 'dédé', 'dédé', 'dédé', 'dédé', 'dédé');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `garage`
--
ALTER TABLE `garage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
