-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 16 mars 2022 à 06:43
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `heta_france`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre_art` varchar(255) NOT NULL,
  `image_art` varchar(255) NOT NULL,
  `contenu_art` text NOT NULL,
  `date_pub_art` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre_art`, `image_art`, `contenu_art`, `date_pub_art`) VALUES
(12, 'Titre_article_essai_3', 'blog-4.jpg', 'HÃªta, Bureau dâ€™Ã©tudes et de conseil, rÃ©alise une Ã©tude personnalisÃ©e et sur mesure de tous vos projets immobiliers (maison, appartement, bureau, hÃ´tel, boutique) durant toutes les phases de construction.\r\n\r\nLa maÃ®trise dâ€™oeuvre et les enjeux financiers liÃ©s Ã  votre projet sont les deux volets principaux de notre mission. Notre Ã©quipe est Ã  votre entiÃ¨re disposition pour vous garantir une bonne exÃ©cution des travaux dans le respect de la rÃ©glementation dâ€™urbanisme en vigueur, des rÃ¨gles de lâ€™art et de la conformitÃ© au regard de la lÃ©gislation dans le domaine de la construction.\r\n\r\nNotre exigence : vous offrir tous les outils indispensables pour la maÃ®trise de la technique, du budget et du planning, de la conception Ã  la rÃ©ception des travaux.', '2022-03-17'),
(11, 'Titre_article_essai_2', 'blog-1.jpg', 'HÃªta, Bureau dâ€™Ã©tudes et de conseil, rÃ©alise une Ã©tude personnalisÃ©e et sur mesure de tous vos projets immobiliers (maison, appartement, bureau, hÃ´tel, boutique) durant toutes les phases de construction.\r\n\r\nLa maÃ®trise dâ€™oeuvre et les enjeux financiers liÃ©s Ã  votre projet sont les deux volets principaux de notre mission. Notre Ã©quipe est Ã  votre entiÃ¨re disposition pour vous garantir une bonne exÃ©cution des travaux dans le respect de la rÃ©glementation dâ€™urbanisme en vigueur, des rÃ¨gles de lâ€™art et de la conformitÃ© au regard de la lÃ©gislation dans le domaine de la construction.\r\n\r\nNotre exigence : vous offrir tous les outils indispensables pour la maÃ®trise de la technique, du budget et du planning, de la conception Ã  la rÃ©ception des travaux.', '2022-03-15'),
(13, 'Titre_article_essai_5', 'blog-5.jpg', 'HÃªta, Bureau dâ€™Ã©tudes et de conseil, rÃ©alise une Ã©tude personnalisÃ©e et sur mesure de tous vos projets immobiliers (maison, appartement, bureau, hÃ´tel, boutique) durant toutes les phases de construction.\r\n\r\nLa maÃ®trise dâ€™oeuvre et les enjeux financiers liÃ©s Ã  votre projet sont les deux volets principaux de notre mission. Notre Ã©quipe est Ã  votre entiÃ¨re disposition pour vous garantir une bonne exÃ©cution des travaux dans le respect de la rÃ©glementation dâ€™urbanisme en vigueur, des rÃ¨gles de lâ€™art et de la conformitÃ© au regard de la lÃ©gislation dans le domaine de la construction.\r\n\r\nNotre exigence : vous offrir tous les outils indispensables pour la maÃ®trise de la technique, du budget et du planning, de la conception Ã  la rÃ©ception des travaux.', '2022-03-18'),
(14, 'Titre_article_essai_6', 'blog-6.jpg', 'HÃªta, Bureau dâ€™Ã©tudes et de conseil, rÃ©alise une Ã©tude personnalisÃ©e et sur mesure de tous vos projets immobiliers (maison, appartement, bureau, hÃ´tel, boutique) durant toutes les phases de construction.\r\n\r\nLa maÃ®trise dâ€™oeuvre et les enjeux financiers liÃ©s Ã  votre projet sont les deux volets principaux de notre mission. Notre Ã©quipe est Ã  votre entiÃ¨re disposition pour vous garantir une bonne exÃ©cution des travaux dans le respect de la rÃ©glementation dâ€™urbanisme en vigueur, des rÃ¨gles de lâ€™art et de la conformitÃ© au regard de la lÃ©gislation dans le domaine de la construction.\r\n\r\nNotre exigence : vous offrir tous les outils indispensables pour la maÃ®trise de la technique, du budget et du planning, de la conception Ã  la rÃ©ception des travaux.', '2022-03-23'),
(15, 'Titre_article_essai_7', 'cover_bg_1.jpg', 'HÃªta, Bureau dâ€™Ã©tudes et de conseil, rÃ©alise une Ã©tude personnalisÃ©e et sur mesure de tous vos projets immobiliers (maison, appartement, bureau, hÃ´tel, boutique) durant toutes les phases de construction.\r\n\r\nLa maÃ®trise dâ€™oeuvre et les enjeux financiers liÃ©s Ã  votre projet sont les deux volets principaux de notre mission. Notre Ã©quipe est Ã  votre entiÃ¨re disposition pour vous garantir une bonne exÃ©cution des travaux dans le respect de la rÃ©glementation dâ€™urbanisme en vigueur, des rÃ¨gles de lâ€™art et de la conformitÃ© au regard de la lÃ©gislation dans le domaine de la construction.\r\n\r\nNotre exigence : vous offrir tous les outils indispensables pour la maÃ®trise de la technique, du budget et du planning, de la conception Ã  la rÃ©ception des travaux.', '2022-04-01');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_identifiant` varchar(55) NOT NULL,
  `login_password` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `login_identifiant`, `login_password`) VALUES
(1, 'HETA_admin', 'HETA_admin_mdp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
