-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 04 mars 2020 à 10:29
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `house_super`
--

-- --------------------------------------------------------

--
-- Structure de la table `pc_list`
--

CREATE TABLE `pc_list` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `eta` tinyint(1) DEFAULT NULL,
  `realETA` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pc_list`
--

INSERT INTO `pc_list` (`id`, `name`, `ip`, `eta`, `realETA`) VALUES
(1, 'Computer 1', '10.10.10.10', 0, 0),
(2, 'Bedroom computer', '11.11.11.11', NULL, 0),
(6, 'Computer 2', '12.12.12.12', NULL, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pc_list`
--
ALTER TABLE `pc_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pc_list`
--
ALTER TABLE `pc_list`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
