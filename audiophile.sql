-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 avr. 2022 à 06:12
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `audiophile`
--

-- --------------------------------------------------------

--
-- Structure de la table `gear`
--

DROP TABLE IF EXISTS `gear`;
CREATE TABLE IF NOT EXISTS `gear` (
  `id_gear` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(80) NOT NULL,
  `description` text,
  `price` float NOT NULL,
  `picture` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_gear`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `gear`
--

INSERT INTO `gear` (`id_gear`, `reference`, `description`, `price`, `picture`) VALUES
(17, 'ZX7', 'ZX7 Speaker', 3500, 'zx7_like_desktop.png'),
(16, 'ZX9', 'ZX9 Speaker', 4500, 'zx9_like_desktop.png'),
(15, 'XX59', 'XX59 Headphones', 899, 'xx59_like_desktop.png'),
(14, 'XX99 Mark I', 'XX99 Mark I Headphones', 1750, 'mark1_like_desktop.png'),
(13, 'XX99 Mark II', 'XX99 Mark II Headphones', 2999, 'mark2_like_desktop.png'),
(18, 'YX1 Wireless', 'Wireless Earphones', 599, 'yx1_desktop.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(80) NOT NULL,
  `firstname` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `lastname`, `firstname`, `email`, `password`, `phone`, `status`) VALUES
(1, 'Dall\'Aglio', 'Vincent', 'dallvince@hotmail.com', '$2y$10$iA33YBlwx7jj2gSMaAz.6eMcotPWf6q9GGbHn.KFNLj3.Z5CBNEhe', '', 'admin'),
(2, 'Dallas', 'Korben', 'k.dallas@gmail.com', '$2y$10$RMBTrKhkO6JXr9KpUy8pCe.i5brW5kJUT9jr0Lp0OQxU1t3gfflA.', '', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
