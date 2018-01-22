-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 22 jan. 2018 à 05:13
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `laravel54`
--

-- --------------------------------------------------------

--
-- Structure de la table `cruds`
--

CREATE TABLE `cruds` (
  `id` int(10) NOT NULL,
  `civilite` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fonction` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `service` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telephone_mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_naissance` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `societe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `code_postal` int(4) NOT NULL,
  `ville` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `site_web` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `cruds`
--

INSERT INTO `cruds` (`id`, `civilite`, `prenom`, `nom`, `fonction`, `service`, `telephone_mobile`, `email`, `date_naissance`, `societe`, `adresse`, `code_postal`, `ville`, `telephone`, `site_web`, `updated_at`, `created_at`) VALUES
(1, 'H', 'Frédérique', 'Adam', 'Responsable', 'RH', '+33 6 12 34 56 78', 'adam.frederique@free.fr', '28-07-1980', 'High Tech', 'Rue des jardins 15', 12050, 'Paris', '05 22 33 44 55', 'www.hightech.com', '2018-01-22 03:34:03', '0000-00-00 00:00:00'),
(2, 'H', 'Alain', 'Martin', 'Chef service', 'Fabrication', '+33 6 45 67 89 12', 'alain.martin@aol.com', '12-09-1970', 'Clean MS', 'Boulevard des roses, 225', 200450, 'Bordeaux', '05 44 34 67 85', 'www.clean.fr', '2018-01-22 03:33:24', '2018-01-20 04:20:17'),
(5, 'F', 'Nathalie', 'Dubois', 'Manager', 'RH', '+33 6 33 44 55 66', 'nathalie.dubois@ovh.net', '03/09/1975', 'Web Dev', 'Chemin de la prairie, 15', 100450, 'Lyon', '05 11 23 45 66', 'www.webdev.com', '2018-01-22 03:30:46', '2018-01-22 03:30:46');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
