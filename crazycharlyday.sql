-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 09 Février 2017 à 15:38
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `crazycharlyday`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `idGroupe` int(11) NOT NULL,
  `valide` tinyint(1) NOT NULL,
  `idLogement` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `invitation`
--

CREATE TABLE `invitation` (
  `idGroupe` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `URL` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

CREATE TABLE `logement` (
  `idLogement` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `places` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `logement`
--

INSERT INTO `logement` (`idLogement`, `photo`, `places`) VALUES
(1, '1.jpg', 3),
(2, '2.jpg', 3),
(3, '3.jpg', 4),
(4, '4.jpg', 4),
(5, '5.jpg', 4),
(6, '6.jpg', 4),
(7, '7.jpg', 4),
(8, '8.jpg', 5),
(9, '9.jpg', 5),
(10, '10.jpg', 6),
(11, '11.jpg', 6),
(12, '12.jpg', 6),
(13, '13.jpg', 7),
(14, '14.jpg', 7),
(15, '15.jpg', 8),
(16, '16.jpg', 2),
(17, '17.jpg', 2),
(18, '18.jpg', 2),
(19, '19.jpg', 2),
(20, '20.jpg', 2),
(21, '21.jpg', 3),
(22, '22.jpg', 3),
(23, '23.jpg', 3),
(24, '24.jpg', 3),
(25, '25.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `mail` varchar(50) DEFAULT 'aucun',
  `message` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT ' ',
  `photo` varchar(50) NOT NULL,
  `idGroupe` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`idUser`, `nom`, `mail`, `message`, `photo`, `idGroupe`) VALUES
(1, 'Jeanne', 'aucun', 'aime la musique ♫', '1.jpg', NULL),
(2, 'Paul', 'aucun', 'aime cuisiner ♨ ♪', '2.jpg', NULL),
(3, 'Myriam', 'aucun', 'mange Halal ☪', '3.jpg', NULL),
(4, 'Nicolas', 'aucun', 'ouvert à tous ⛄', '4.jpg', NULL),
(5, 'Sophie', 'aucun', 'aime sortir ♛', '5.jpg', NULL),
(6, 'Karim', 'aucun', 'aime le soleil ☀', '6.jpg', NULL),
(7, 'Julie', 'aucun', 'apprécie le calme ☕', '7.jpg', NULL),
(8, 'Etienne', 'aucun', 'accepte jeunes et vieux ☯', '8.jpg', NULL),
(9, 'Max', 'aucun', 'féru de musique moderne ☮', '9.jpg', NULL),
(10, 'Sabrina', 'aucun', 'aime les repas en commun ⛵☻', '10.jpg', NULL),
(11, 'Nathalie', 'aucun', 'bricoleuse ⛽', '11.jpg', NULL),
(12, 'Martin', 'aucun', 'sportif ☘ ⚽ ⚾ ⛳', '12.jpg', NULL),
(13, 'Manon', 'aucun', '', '13.jpg', NULL),
(14, 'Thomas', 'aucun', '', '14.jpg', NULL),
(15, 'Léa', 'aucun', '', '15.jpg', NULL),
(16, 'Alexandre', 'aucun', '', '16.jpg', NULL),
(17, 'Camille', 'aucun', '', '17.jpg', NULL),
(18, 'Quentin', 'aucun', '', '18.jpg', NULL),
(19, 'Marie', 'aucun', '', '19.jpg', NULL),
(20, 'Antoine', 'aucun', '', '20.jpg', NULL),
(21, 'Laura', 'aucun', '', '21.jpg', NULL),
(22, 'Julien', 'aucun', '', '22.jpg', NULL),
(23, 'Pauline', 'aucun', '', '23.jpg', NULL),
(24, 'Lucas', 'aucun', '', '24.jpg', NULL),
(25, 'Sarah', 'aucun', '', '25.jpg', NULL),
(26, 'Romain', 'aucun', '', '26.jpg', NULL),
(27, 'Mathilde', 'aucun', '', '27.jpg', NULL),
(28, 'Florian', 'aucun', '', '28.jpg', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`idGroupe`),
  ADD KEY `logid` (`idLogement`),
  ADD KEY `userid` (`idUser`);

--
-- Index pour la table `invitation`
--
ALTER TABLE `invitation`
  ADD PRIMARY KEY (`idGroupe`,`idUser`),
  ADD KEY `userid2` (`idUser`);

--
-- Index pour la table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`idLogement`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `grpid3` (`idGroupe`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
