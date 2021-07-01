-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 30 juin 2021 à 21:39
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `prenom` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `login` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` text COLLATE latin1_general_ci NOT NULL,
  `role` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `login`, `password`, `role`) VALUES
(1, 'rema', 'jordan', 'rwiniga@gmail.com', '$2y$10$6Kvv6O4aC39HB97OuWz4AezGLCKyIaIPQonhQd6AuGlk8P2V9EOUW', 'ROLE_ADMIN'),
(2, 'grace', 'gr', 'ado@gmail.com', '$2y$10$gisSe4loJ6SXHrZnrOfAkeVMzKhOf/kfVh9.4TnKq2o.jkXcwSUIu', 'ROLE_RP '),
(3, 'dfgfhgjhkjkhjghfg', '14hgg', 'b@gmail.com', '$2y$10$cdCoxy0S6Ht4g8ACYRGN..fsPcTFchDfQ1FwAhzrYB4E2X0PpYLju', 'ROLE_RP ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
