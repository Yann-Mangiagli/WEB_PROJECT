-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db:3306
-- Généré le : mar. 19 déc. 2023 à 09:46
-- Version du serveur : 8.0.30
-- Version de PHP : 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_readersRealm`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_writer`
--

CREATE TABLE `t_writer` (
  `writer_id` int NOT NULL,
  `wriFirstname` varchar(50) NOT NULL,
  `wriLastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `t_writer`
--

INSERT INTO `t_writer` (`writer_id`, `wriFirstname`, `wriLastname`) VALUES
(1, 'Stephen', 'King'),
(2, 'H.P.', 'Lovecraft'),
(3, 'Isaac', 'Asimov'),
(4, 'Arthur C.', 'Clarke'),
(5, 'Jane', 'Austen'),
(6, 'Nicholas', 'Sparks'),
(7, 'Agatha', 'Christie'),
(8, 'Arthur', 'Conan Doyle'),
(9, 'Woody', 'Allen'),
(10, 'Mel', 'Brooks'),
(11, 'William', 'Shakespeare'),
(12, 'Molière', ''),
(13, 'Hilary', 'Mantel'),
(14, 'Ken', 'Follett'),
(15, 'Platon', ''),
(16, 'René', 'Descartes'),
(17, 'Eiichiro', 'Oda'),
(18, 'Masashi', 'Kishimoto'),
(19, 'Walter', 'Isaacson'),
(20, 'Robert', 'Caro');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_writer`
--
ALTER TABLE `t_writer`
  ADD PRIMARY KEY (`writer_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_writer`
--
ALTER TABLE `t_writer`
  MODIFY `writer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
