-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 20 déc. 2023 à 10:06
-- Version du serveur :  5.7.11
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_readersrealm`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_book`
--

CREATE TABLE `t_book` (
  `book_id` int(11) NOT NULL,
  `booTitle` varchar(50) NOT NULL,
  `booExemplary` varchar(100) NOT NULL,
  `booResumeBook` text NOT NULL,
  `booNbrPage` int(11) NOT NULL,
  `booEditorName` varchar(50) NOT NULL,
  `booEditionDate` datetime NOT NULL,
  `booLikeRatio` decimal(4,1) DEFAULT NULL,
  `booCoverImage` varchar(250) NOT NULL,
  `category_fk` int(11) NOT NULL,
  `writer_fk` int(11) NOT NULL,
  `user_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_category`
--

CREATE TABLE `t_category` (
  `category_id` int(11) NOT NULL,
  `catCategory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_category`
--

INSERT INTO `t_category` (`category_id`, `catCategory`) VALUES
(1, 'Romance'),
(2, 'Mystery'),
(3, 'Science Fiction'),
(4, 'Fantasy'),
(5, 'Historical Fiction'),
(6, 'Thriller'),
(7, 'Biography'),
(8, 'Self-Help'),
(9, 'Horror'),
(10, 'Poetry');

-- --------------------------------------------------------

--
-- Structure de la table `t_rate`
--

CREATE TABLE `t_rate` (
  `user_fk` int(11) NOT NULL,
  `book_fk` int(11) NOT NULL,
  `ratRate` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_user`
--

CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL,
  `useUsername` varchar(50) NOT NULL,
  `usePassword` varchar(50) NOT NULL,
  `useRegistrationDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `useNbrProposedBook` int(11) DEFAULT '0',
  `useNbrLike` int(11) DEFAULT '0',
  `useIsAdmin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_writer`
--

CREATE TABLE `t_writer` (
  `writer_id` int(11) NOT NULL,
  `wriFirstname` varchar(50) NOT NULL,
  `wriLastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Index pour la table `t_book`
--
ALTER TABLE `t_book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `category_fk` (`category_fk`),
  ADD KEY `writer_fk` (`writer_fk`),
  ADD KEY `user_fk` (`user_fk`);

--
-- Index pour la table `t_category`
--
ALTER TABLE `t_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `t_rate`
--
ALTER TABLE `t_rate`
  ADD PRIMARY KEY (`user_fk`,`book_fk`),
  ADD KEY `book_fk` (`book_fk`);

--
-- Index pour la table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `t_writer`
--
ALTER TABLE `t_writer`
  ADD PRIMARY KEY (`writer_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_book`
--
ALTER TABLE `t_book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_category`
--
ALTER TABLE `t_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_writer`
--
ALTER TABLE `t_writer`
  MODIFY `writer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_book`
--
ALTER TABLE `t_book`
  ADD CONSTRAINT `t_book_ibfk_1` FOREIGN KEY (`category_fk`) REFERENCES `t_category` (`category_id`),
  ADD CONSTRAINT `t_book_ibfk_2` FOREIGN KEY (`writer_fk`) REFERENCES `t_writer` (`writer_id`),
  ADD CONSTRAINT `t_book_ibfk_3` FOREIGN KEY (`user_fk`) REFERENCES `t_user` (`user_id`);

--
-- Contraintes pour la table `t_rate`
--
ALTER TABLE `t_rate`
  ADD CONSTRAINT `t_rate_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `t_user` (`user_id`),
  ADD CONSTRAINT `t_rate_ibfk_2` FOREIGN KEY (`book_fk`) REFERENCES `t_book` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
