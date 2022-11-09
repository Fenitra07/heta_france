-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 09 nov. 2022 à 07:19
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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre_art`, `image_art`, `contenu_art`, `date_pub_art`) VALUES
(25, 'Ouverture du restaurant « Le Cêdre » au Kremlin-Bicêtre : le BE HETA vous a accompagné', 'photo-le-cedre.jpg', '<p>Depuis la visite du local, jusqu\'à  son ouverture cette rentrée de septembre 2022, notre bureau d\'étude HETA a conseillé et accompagné cet enseigne de restaurant tout au long de ces démarches administratives en rendant fluide et dynamique les échanges avec le service urbanisme, et commerce de la mairie du Kremlin-Bicêtre:<br>- Diagnostic et conseils lors de la visite du local<br>- Conception de l\’aménagement intérieur et de la terrasse<br>- Conception de la façade et de l’enseigne (plans et vues 3D)<br>- Elaboration des dossiers de demande d\’autorisation travaux de modification</p><ul><li>Façades</li><li>Enseigne</li><li>Autorisation de terrasse sur la voie publique</li></ul><p><i>Adresse : Restaurant Le Cèdre 2 rue Roger Salengro 94 270 Le Kremlin-Bicêtre</i></p>', '01 septembre 2022'),
(23, 'Mise à  jour administrative d\'une maison ancienne : Il n\’est jamais trop tard  mais il faut savoir y aller avec beaucoup de tact ! Le BE HETA vous  accompagne', 'article_un.jpg', '<p>Dans le cadre d\'une vente ou même lorsque vous avez un projet de travaux qui va devoir être déclaré, il arrive parfois que votre bien ne soit pas tout à fait «à jour» avec les documents ou archives de votre Mairie.&nbsp;<br>Cela peut devenir handicapant et même arrêter net toute évolution possible de votre bien si cette mise à jour administrative n\'est pas faite avec le plus grand soin, tact, voir même diplomatie auprès des autorités compétentes de votre commune.</p><p>Bien évidemment, les relations cordiales que nous entretenons avec les responsables des services urbanismes des communes dans lesquelles nous avons l\'habitude de travailler sont un atout qui permet un dialogue apaisé afin de permettre cette mise à jour administrative obligatoire.</p><p>Sur la photo jointe, une maison à Gentilly dont la surélévation n\'est pas apparue dans les archives de la Mairie : Notre bureau d\'étude HETA a permis la mise à jour administrative de ce bien.<br>Cela a nécessité pour nous de remonter dans le temps à la recherche de l\'histoire de cette maison : Documents d\'archive, photographies anciennes, articles de journaux etc...</p><p>A travers nos dossiers déposés en Mairie pour ce type de prestation, l\'objectif est, pour notre bureau d\'étude; de montrer «la bonne foi» de nos clients, ce qui leur permettra, par la suite d\'envisager plus sereinement un projet d\'évolution de leur bien, toujours accompagné de leur Bureau d\'étude préféré ... ;) ou une vente ...<br><br><i>Andriamampita Hoby</i><br><i>BE HETA Maitrise d\'oeuvre</i></p>', 'Août 2022'),
(24, 'Raccordement réseaux quand le « casse tête » administratif devient un enjeu financier : Le BE HETA vous a accompagne', 'cachan2021.jpg', '<p>Lorsqu\’il s\’agit  de raccorder au réseau votre bien, ou de mettre en conformité des réseaux existants : EDF (Électricité) , GRDF (Gaz), VEOLIA (eau), La fibre, les assainissements (Eaux usées et eaux pluviales), nous entrons obligatoirement dans un labyrinthe administratif en France : au sens propre du terme.<br>A la contrainte du temps : inconnue<br>A la contrainte financière : inconnue<br>Il vous faudra d\'abord affronter la première contrainte : un interlocuteur : inconnu</p><p>Notre expérience de projets aura eu également le mérite de nous avoir obligé à traiter de front ce problème. Nous avons pu tisser des liens, à travers un ensemble de projets de plusieurs logements, de mise au norme de réseaux de copropriété ou tout simplement dans des opérations de lotissement, avec les acteurs réseaux concessionnaires d\'Ile-de-France : EDF, VEOLIA, Vallée-sud Paris, la SEVESC, GrandOrlySeinebièvre, la fibre France-telécom etc...</p><p>Nous pouvons vous faire profiter de notre expérience et prendre en charge, pour vous, la partie raccordement et /ou mis en conformité Réseaux à l\'occasion de votre projet.</p><p>Sur la photo jointe, une réunion de chantier réseaux à Cachan durant laquelle notre bureau d\'étude HETA a pu réunir dans un seul et même RDV l\'ensemble des responsables réseaux :</p><ul><li>Le représentant du service voirie de la mairie</li><li>Le responsable assainissement</li><li>Le chef des travaux pour le compte d\'EDF et GRDF</li><li>Le technicien France télécom</li><li>L\'entreprise générale en charge de la mise à disposition du coffret technique</li></ul><p>En véritable exploit qui a permis non seulement un gain de temps mais surtout de mutualiser le coût des travaux concernant les tranchés sur la voirie. Des économies pour notre client mais également pour la commune, responsable des travaux sur la voie publique.</p><p><i>Andriamampita Hoby</i><br><i>BE HETA Maitrise d\'oeuvre</i></p>', '01 septembre 2022');

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
