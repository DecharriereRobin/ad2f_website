-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 22 Décembre 2016 à 14:14
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
(29, '', 'hello', 'world', 'helloworld@free.fr', '$2y$10$AGA6NcVfkJlCwankbERMpObwLLawnKBC.1AgnyaNLfspVmdG99wQq', 'h2DT_-AXr5IDBG2KJ-Ewq-9wYnw7tlK-iL2tnhoy6VzfI2GYAYM5_2aKkk-8CaP_6D1fgekVav7Daxsz', 'admin'),
(33, '', 'hello', 'zero', 'rezrze@ezrezrzerrezrzr', '$2y$10$ZqPB/WgiaqV4.aq8lqNQwuwJq2c0QIQj8mmV0XZmErQzU8Bsqk2f2', 'wbEH0Qb2ZHqnlnNvxVN5vbE-UvhXGpY-5wK8sLXa5VAg29uuuLF7KHGPGWtoCqOKiG70vY4z5jDsrvvl', 'admin'),
(39, '', 'jennifer', 'world', 'fdgdfsg@sdfgsdg', '$2y$10$wW19ArqY9szuG3vMlsV8BOr1QUjUSQe73dh2EsBXKXZ8V18.Xac5y', 'fW02XdO5JjW7RPRk7gYl28GhUX5xzn24cV4GgF3kej4p5_oFMdTA6nFS2NkvraXjIGLJ3EwiLlNEo7Vh', 'admin'),
(40, '', 'fredo', 'fredo', 'fredo@fredo.com', '$2y$10$11e.NIOj2QhdSGQ3RN3j1ep2HeHZNn9LkXgMdsj2BVlj7jf0OElbm', '98d8cRlDcsnAtIeksvLkvyowWQUz_oO6_iyxfuQ8ZsvO2_9TvkBl3lUKLF4nDZ9Q89oQdD18Yq8KqO-I', 'admin'),
(41, '', 'fred', 'fred', 'fred@fred', '$2y$10$BP.Ns90GPcy0iXQGqoquSeT1Xj.wPB/9jIBjESFz3FppCiomKojsW', 't-g5qU2uGskD4t7foF2lSOM83UeBkZawLh3yIOMX6SG21yQ07tE7Wg4RysUgbxzwcImSQfHcVZ6xC4H3', 'admin'),
(42, '', 'fredo', 'oh', 'klmjh@mlkhjmlkjh', '$2y$10$4Mwt2XQaHVXmCeiKSLFbOOcuyIfA8Pj3glwoNox3wvuxrJVqfEzla', 'ke2qc9tFBajNXsjY6FsAWwzEi1tqDHQtUacLfnyUVoajF-UAj07VOGw4EDlUDM98WeIa7fAZc_p5r3os', 'admin'),
(43, '', 'frederic', 'soude', 'fredericsoude59000@gmail.com', '$2y$10$OmdnOOTWJxaaNLQO5PETB.M2hCWZyYsSjti9A.YFmNwBXPDW8XSsq', '0EPQv35f8edTY4Yoq9WOczl2DDclA08vwycyueWOhvDjmt8RCbYLkWuZRpXEYE7fGjBJl49Z_1vUsk6a', 'admin');

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
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
