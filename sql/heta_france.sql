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
(25, 'Ouverture du restaurant Â« Le CÃªdre Â» au Kremlin-BicÃªtre : le BE HETA vous a accompagnÃ©', 'photo-le-cedre.jpg', '<p>Depuis la visite du local, jusquâ€™Ã  son ouverture cette rentrÃ©e de septembre 2022, notre bureau dâ€™Ã©tude HETA a conseillÃ© et accompagnÃ© cet enseigne de restaurant tout au long de ces dÃ©marches administratives en rendant fluide et dynamique les Ã©changes avec le service urbanisme, et commerce de la mairie du Kremlin-BicÃªtre&nbsp;:&nbsp;<br>- Diagnostic et conseils lors de la&nbsp; visite du local<br>- Conception de lâ€™amÃ©nagement&nbsp; intÃ©rieur et de la terrasse<br>- Conception de la faÃ§ade et de lâ€™enseigne (plans et vues 3D)<br>- Elaboration des dossiers de demande dâ€™autorisation travaux de modification</p><ul><li>FaÃ§ades</li><li>Enseigne</li><li>Autorisation de terrasse sur la voie publique&nbsp;</li></ul><p>&nbsp;<i>Adresse&nbsp;: Restaurant Le CÃ¨dre 2 rue Roger Salengro 94 270 Le Kremlin-BicÃªtre</i></p>', '01 septembre 2022'),
(23, 'Mise Ã  jour administrative dâ€™une maison ancienne : Il nâ€™est jamais trop tard mais il faut savoir y aller avec beaucoup de tact ! Le BE HETA vous  accompagne', 'article_un.jpg', '<p>Dans le cadre dâ€™une vente ou mÃªme lorsque vous avez un projet de travaux qui va devoir Ãªtre dÃ©clarÃ©, il arrive parfois que votre bien ne soit pas tout Ã  fait Â«&nbsp;Ã  jour Â» avec les documents ou archives de votre Mairie.&nbsp;<br>Cela peut devenir handicapant et mÃªme arrÃªter net toute Ã©volution possible de votre bien si cette mise Ã  jour administrative nâ€™est pas faite avec le plus grand soin, tact, voir mÃªme diplomatie auprÃ¨s des autoritÃ©s compÃ©tentes de votre commune.</p><p>Bien Ã©videmment, les relations cordiales que nous entretenons avec les responsables des services urbanismes des communes dans lesquelles nous avons lâ€™habitude de travailler sont un atout qui permet un dialogue apaisÃ© afin de permettre cette mise Ã  jour administrative obligatoire.</p><p>Sur la photo jointe, une maison Ã  Gentilly dont la surÃ©lÃ©vation nâ€™est pas apparue dans les archives de la Mairie&nbsp;: Notre bureau dâ€™Ã©tude HETA a permis la mise Ã  jour administrative de ce bien.<br>Cela a nÃ©cessitÃ© pour nous de remonter dans le temps Ã  la recherche de lâ€™histoire de cette maison&nbsp;: Documents dâ€™archive, photographies anciennes, articles de journaux etcâ€¦</p><p>A travers nos dossiers dÃ©posÃ©s en Mairie pour ce type de prestation, lâ€™objectif est, pour notre bureau dâ€™Ã©tude&nbsp;; de montrer Â«&nbsp;la bonne foi&nbsp;Â» de nos clients, ce qui leur permettra, par la suite dâ€™envisager plus sereinement un projet dâ€™Ã©volution de leur bien, toujours accompagnÃ© de leur Bureau dâ€™Ã©tude prÃ©fÃ©rÃ© â€¦&nbsp;;) ou une venteâ€¦&nbsp;<br><br><i>Andriamampita Hoby</i><br><i>BE HETA Maitrise dâ€™Å“uvre</i></p>', 'AoÃ»t 2022'),
(24, 'Raccordement rÃ©seaux quand le Â« casse tÃªte Â» administratif devient un enjeu financier :  Le BE HETA vous a accompagne', 'cachan2021.jpg', '<p>Lorsquâ€™il sâ€™agit de raccorder au rÃ©seau votre bien, ou de&nbsp; mettre en conformitÃ©&nbsp; des rÃ©seaux existants&nbsp;: EDF (Ã‰lectricitÃ©) , GRDF (Gaz), VEOLIA (eau), La fibre&nbsp;, les assainissements (Eaux usÃ©es et eaux pluviales)&nbsp;, nous entrons obligatoirement dans un labyrinthe administratif en France&nbsp;: au sens propre du terme.<br>A la contrainte du temps&nbsp;: inconnue<br>A la contrainte financiÃ¨re&nbsp;: inconnue<br>Il vous faudra dâ€™abord affronter la premiÃ¨re contrainte&nbsp;: un interlocuteur&nbsp;: inconnu&nbsp;</p><p>Notre expÃ©rience&nbsp; de projets aura eu Ã©galement le mÃ©rite de&nbsp;nous avoir obligÃ© Ã  traiter de front ce problÃ¨me. Nous avons pu tisser des liens, Ã , travers un ensemble de projets de plusieurs logements, de mise au norme de rÃ©seaux de copropriÃ©tÃ© ou tout simplement dans des opÃ©rations de lotissement, &nbsp;avec les acteurs&nbsp; rÃ©seaux concessionnaires dâ€™Ile-de-France&nbsp;: EDF, VEOLIA, VallÃ©e-sud Paris,&nbsp; &nbsp;la SEVESC,&nbsp; GrandOrlySeinebiÃ¨vre, la fibre France-telÃ©com etcâ€¦</p><p>Nous pouvons vous faire profiter de notre expÃ©rience et prendre en charge, pour vous, la partie raccordement et /ou mis en conformitÃ© RÃ©seaux Ã  lâ€™occasion de votre projet.</p><p>Sur la photo jointe, &nbsp;une rÃ©union de chantier rÃ©seaux &nbsp;Ã  Cachan durant laquelle notre bureau dâ€™Ã©tude HETA Ã  pu rÃ©unir dans un seul et mÃªme RDV lâ€™ensemble des responsables rÃ©seaux&nbsp;:</p><ul><li>Le reprÃ©sentant du service voirie de la mairie</li><li>Le responsable assainissement</li><li>Le chef des travaux pour le compte dâ€™EDF et GRDF</li><li>Le technicien France tÃ©lÃ©com</li><li>Lâ€™entreprise gÃ©nÃ©rale en charge de la mise Ã  disposition du coffret technique</li></ul><p>En vÃ©ritable exploit qui a permis non seulement un gain de temps mais surtout de mutualiser le coÃ»t des travaux concernant les tranchÃ©s sur la voirie. Des Ã©conomies pour notre client mais Ã©galement pour la commune, responsable des travaux sur la voie publique.</p><p><i>Andriamampita Hoby</i><br><i>BE HETA Maitrise dâ€™oeuvre</i></p>', '01 septembre 2022');

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
