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
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id` varchar(222) NOT NULL,
  `NomAuteur` varchar(111) NOT NULL,
  `PrenomAuteur` varchar(111) NOT NULL,
  `Titre` varchar(111) NOT NULL,
  `Categorie` varchar(111) NOT NULL,
  `NuISBN` varchar(100) NOT NULL,
  `livdejareserve` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `NomAuteur`, `PrenomAuteur`, `Titre`, `Categorie`, `NuISBN`, `livdejareserve`) VALUES
('KaElRo58', 'Kazan', 'Elia', 'L’arrangement', 'Roman', '2234023858', 44),
('AsIsSc08', 'Asimov', 'Isaac', 'Fondation', 'Science-fiction', '2070415708', 5),
('DiPhSc43', 'Dick', 'Philip K.', 'Blade Runner', 'Science-fiction', '2290314943', 4),
('WaAlRo37', 'Walker', 'Alice', 'La couleur pourpre', 'Roman', '2290021237', 1),
('KuMiRo38', 'Kundera', 'Milan', 'La plaisanterie', 'Roman', '2070703738', 1),
('BaJaJu63', 'Barrie', 'James M.', 'Peter Pan', 'Junior', '2290333263', 0),
('VeJuRo22', 'Verne', 'Jules', 'L île mysterieuse', 'Roman', '0812966422', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `1` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
