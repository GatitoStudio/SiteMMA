-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 11 nov. 2019 à 19:55
-- Version du serveur :  5.7.26
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mmabdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `annale`
--

DROP TABLE IF EXISTS `annale`;
CREATE TABLE IF NOT EXISTS `annale` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Niveau` varchar(2) NOT NULL,
  `Lien_drive` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

DROP TABLE IF EXISTS `contient`;
CREATE TABLE IF NOT EXISTS `contient` (
  `Id_contient` int(11) NOT NULL,
  `Id_Fichier` int(11) NOT NULL,
  PRIMARY KEY (`Id_contient`,`Id_Fichier`),
  KEY `contient_Fichier0_FK` (`Id_Fichier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `emploisdutemps`
--

DROP TABLE IF EXISTS `emploisdutemps`;
CREATE TABLE IF NOT EXISTS `emploisdutemps` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Lien` varchar(999) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  `Heure` time NOT NULL,
  `Adresse` varchar(900) NOT NULL,
  `ImageCover` varchar(900) NOT NULL,
  `PrixAdherent` float NOT NULL,
  `PrixNonAdherent` float NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`Id`, `Nom`, `Description`, `Date`, `Heure`, `Adresse`, `ImageCover`, `PrixAdherent`, `PrixNonAdherent`) VALUES
(1, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-11 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(4, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(5, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(6, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(7, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(8, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(9, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(10, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(11, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(12, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(13, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(14, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(15, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(16, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(17, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(18, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(19, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(20, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(21, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(22, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(23, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(24, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(25, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(26, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(27, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(28, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(29, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(30, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(31, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(32, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(33, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(34, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(35, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(36, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(37, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(38, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(39, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(40, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(41, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(42, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(43, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(44, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(45, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(46, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(47, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(48, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(49, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(50, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(51, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(52, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(53, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(54, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(55, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(56, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(57, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(58, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(59, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(60, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(61, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(62, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(63, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(64, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(65, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(66, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(67, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(68, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(69, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(70, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(71, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(72, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(73, 'Soirée bowling', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-18 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 4, 6),
(74, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(75, 'Soirée billard', 'Après 15 ans de long sommeil, l\'AMAMIAGE (ex ADAMM), l\'Association Mulhousienne des Alumni de MIAGE, a été réveillée par une équipe de jeunes diplômés.\r\n\r\nAfin de célébrer son retour, elle vous convie à son tout premier événement !', '2019-11-10 00:00:00', '18:00:00', '11 rue bidon 68200 MULHOUSE', 'upload/article-02.jpg', 5, 7),
(76, 'Soirée gaming', 'ddddddddddddddddddddddddddddddddddddddddddddd', '2020-11-12 00:00:00', '12:05:00', '10 chemin de la chaille', '', 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `fichier`
--

DROP TABLE IF EXISTS `fichier`;
CREATE TABLE IF NOT EXISTS `fichier` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(150) NOT NULL,
  `Url` varchar(999) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offredestage`
--

DROP TABLE IF EXISTS `offredestage`;
CREATE TABLE IF NOT EXISTS `offredestage` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(250) NOT NULL,
  `DatePublication` datetime NOT NULL,
  `Description` varchar(250) NOT NULL,
  `DescriptionDetail` varchar(500) NOT NULL,
  `Nom_entreprise` varchar(500) NOT NULL,
  `Ville` varchar(500) NOT NULL,
  `Annee` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tutorat`
--

DROP TABLE IF EXISTS `tutorat`;
CREATE TABLE IF NOT EXISTS `tutorat` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` datetime NOT NULL,
  `Heure` time NOT NULL,
  `Salle` varchar(100) NOT NULL,
  `Batiment` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Mail` varchar(999) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Role` varchar(100) NOT NULL,
  `Password` varchar(900) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `Mail`, `Nom`, `Prenom`, `Role`, `Password`) VALUES
(1, 'camille.balmer25@gmail.com', 'BALMER', 'Camille', '1', '$2y$10$BFZH1BA357b3pcsRZOFyIun/Rv6Wb8ogFHCduFgN1QXVtpNMpkAGW');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `contient_Fichier0_FK` FOREIGN KEY (`Id_Fichier`) REFERENCES `fichier` (`Id`),
  ADD CONSTRAINT `contient_OffreDeStage_FK` FOREIGN KEY (`Id_contient`) REFERENCES `offredestage` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
