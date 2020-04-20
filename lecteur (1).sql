-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 17 avr. 2020 à 18:33
-- Version du serveur :  5.7.17
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionlib`
--

-- --------------------------------------------------------

--
-- Structure de la table `lecteur`
--

CREATE TABLE `lecteur` (
  `codeLecteur` int(11) NOT NULL,
  `Nom` varchar(222) NOT NULL,
  `Prénom` varchar(222) NOT NULL,
  `Adresse` varchar(222) NOT NULL,
  `Ville` varchar(222) NOT NULL,
  `Code Postal` int(10) NOT NULL,
  `Password` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `lecteur`
--
ALTER TABLE `lecteur`
  ADD PRIMARY KEY (`codeLecteur`),
  ADD UNIQUE KEY `id_2` (`codeLecteur`),
  ADD KEY `id` (`codeLecteur`),
  ADD KEY `codeLecteur` (`codeLecteur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `lecteur`
--
ALTER TABLE `lecteur`
  MODIFY `codeLecteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
