-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 06 avr. 2018 à 20:40
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sdcbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `Event`
--

CREATE TABLE `Event` (
  `num_event` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `place` varchar(255) CHARACTER SET utf8 NOT NULL,
  `coordonnee` varchar(100) CHARACTER SET utf8 NOT NULL,
  `timeBegin` time NOT NULL,
  `timeEnd` time NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Event`
--

INSERT INTO `Event` (`num_event`, `date`, `name`, `place`, `coordonnee`, `timeBegin`, `timeEnd`, `price`) VALUES
(2, '2018-04-20', 'Souper du club', 'Avenue Marcel Thiry', 'coordonnee', '18:00:00', '22:30:00', 15),
(3, '2018-04-11', 'Anniversaire de Romain', 'Avenue des bobos 32', ',idza', '18:00:00', '23:00:00', 5);

-- --------------------------------------------------------

--
-- Structure de la table `fee`
--

CREATE TABLE `fee` (
  `num` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `forname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fee`
--

INSERT INTO `fee` (`num`, `name`, `forname`, `price`) VALUES
('AAA1', 'Bouzaienne', 'Zakia', 165),
('AAA2', 'Valentin', 'Kilian', 25);

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `forename` varchar(255) CHARACTER SET utf8 NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `bank` varchar(255) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `member`
--

INSERT INTO `member` (`member_id`, `name`, `forename`, `number`, `email`, `address`, `bank`, `photo`, `password`) VALUES
(1, 'Bouzaienne', 'Ines', 483413972, 'nenesbouz1999@hotmail.com', 'Avenue jan olieslagers 11 bte 1150 bruxelles', 'Be56 6739 3678 2789', '', ''),
(8, 'Kilian', 'Valentin', 477342150, 'kilianvalentin@hotmail.com', 'Avenue Marcel Thiry 16/29', 'views/images/29102177_925522240941170_8273869855652839424_n.jpg', 'BE 289173821993812', '$2y$10$CXbkRwIhAgo7ba41n5MGHuuefnEeq1Jzmmn9UtlhauRa.DKNBRDF6'),
(9, 'Valentin', 'Kilian', 477342150, 'kilianvalentin@hotmail.com', 'Avenue Marcel Thiry 16/29', 'BE 289173821993812', 'views/images/29102177_925522240941170_8273869855652839424_n.jpg', '$2y$10$fyknpg0uXbKLd7UMwkbvVeVIZRgOqtRSPFustwqh7GMYsO6Bk.BxS');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Event`
--
ALTER TABLE `Event`
  ADD PRIMARY KEY (`num_event`);

--
-- Index pour la table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Event`
--
ALTER TABLE `Event`
  MODIFY `num_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
