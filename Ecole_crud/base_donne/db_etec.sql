-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 07 mars 2023 à 11:20
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
-- Base de données : `db_etec`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Numero` varchar(100) NOT NULL,
  `Date_N` varchar(100) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `Nationalite` varchar(100) NOT NULL,
  `Date_Inscre` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`Id`, `Nom`, `Prenom`, `Adresse`, `Numero`, `Date_N`, `Genre`, `Nationalite`, `Date_Inscre`) VALUES
(1, 'Mosslih', 'Khalil', 'khalilmosslih123@gmail.com', '0651099180', '2023-02-06', '1', '1', '2023-03-06 00:00:00'),
(2, 'Mosslih', 'Khalil', 'khalilmosslih123@gmail.com', '0651099180', '2023-03-10', 'Homme', 'Etranger', '2023-03-06 00:00:00'),
(3, 'Mosslih', 'Khalil', 'khalilmosslih123@gmail.com', '0651099180', '2023-03-24', 'Homme', 'Etranger', '2023-03-06 00:00:00'),
(4, 'amine', 'lachhab', 'Aminelachhab475@gmail.com', '0659159406', '2023-03-24', 'Homme', 'Etranger', '2023-03-06 00:00:00'),
(5, 'karima', 'Khalil', 'khalilmosslih123@gmail.com', '0651099180', '2023-03-15', 'Femme', 'Marocain', '2023-03-06 00:00:00'),
(6, 'Mosslih', 'Khalil', 'khalilmosslih123@gmail.com', '0651099180', '2023-03-23', 'Homme', 'Marocain', '2023-03-06 00:00:00'),
(7, 'Mosslih', 'Khalil', 'khalilmosslih123@gmail.com', '0651099180', '2023-03-30', 'Homme', 'Etranger', '2023-03-06 00:00:00'),
(8, 'karoma', 'Khalil', 'khalilmosslih123@gmail.com', '0651099180', '2023-03-23', 'Femme', 'Marocain', '2023-03-06 00:00:00'),
(9, 'ahmed', 'filali', 'Aminelachhab475@gmail.com', '0659159406', '2023-03-08', 'Homme', 'Marocain', '2023-03-07 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `Id_F` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_F` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_F`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
