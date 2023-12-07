-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 07 déc. 2023 à 16:27
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `progica`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `horaire_disponibilite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `telephone`, `email`, `horaire_disponibilite`) VALUES(1, 'Suire', 'Enzo', '06.07.07.07.07', 'enzo@enzo.fr', 'Du lundi au vendredi : 9h-12h et 14h-18h');
INSERT INTO `contact` (`id`, `nom`, `prenom`, `telephone`, `email`, `horaire_disponibilite`) VALUES(2, 'Duliege', 'Bastien', '06.06.06.06.06', 'bastien@bastien.fr', 'Du lundi au vendredi de 9h à 17h');
INSERT INTO `contact` (`id`, `nom`, `prenom`, `telephone`, `email`, `horaire_disponibilite`) VALUES(3, 'Darling', 'Michel', '05.20.56.69.83', 'michel@michel.fr', 'du lundi au vendredi 9h-18h');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231204100046', '2023-12-04 11:00:55', 1095);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231204100237', '2023-12-04 11:02:46', 1064);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231204100413', '2023-12-04 11:04:18', 1538);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231204101407', '2023-12-04 11:14:13', 912);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231204103244', '2023-12-04 11:32:49', 703);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231204104457', '2023-12-04 11:45:20', 1552);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231205095546', '2023-12-05 10:55:59', 132);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231207141322', '2023-12-07 15:13:34', 154);

-- --------------------------------------------------------

--
-- Structure de la table `equipements`
--

CREATE TABLE `equipements` (
  `id` int(11) NOT NULL,
  `gites_id` int(11) NOT NULL,
  `lave_vaiselle` tinyint(1) NOT NULL,
  `lave_linge` tinyint(1) NOT NULL,
  `climatisation` tinyint(1) NOT NULL,
  `television` tinyint(1) NOT NULL,
  `terrasse` tinyint(1) NOT NULL,
  `bbq` tinyint(1) NOT NULL,
  `piscine_privee` tinyint(1) NOT NULL,
  `piscine_public` tinyint(1) NOT NULL,
  `tennis` tinyint(1) NOT NULL,
  `ping_pong` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipements`
--

INSERT INTO `equipements` (`id`, `gites_id`, `lave_vaiselle`, `lave_linge`, `climatisation`, `television`, `terrasse`, `bbq`, `piscine_privee`, `piscine_public`, `tennis`, `ping_pong`) VALUES(1, 2, 1, 1, 0, 1, 1, 0, 0, 1, 1, 0);
INSERT INTO `equipements` (`id`, `gites_id`, `lave_vaiselle`, `lave_linge`, `climatisation`, `television`, `terrasse`, `bbq`, `piscine_privee`, `piscine_public`, `tennis`, `ping_pong`) VALUES(2, 8, 0, 0, 0, 1, 0, 1, 0, 1, 1, 1);
INSERT INTO `equipements` (`id`, `gites_id`, `lave_vaiselle`, `lave_linge`, `climatisation`, `television`, `terrasse`, `bbq`, `piscine_privee`, `piscine_public`, `tennis`, `ping_pong`) VALUES(3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);
INSERT INTO `equipements` (`id`, `gites_id`, `lave_vaiselle`, `lave_linge`, `climatisation`, `television`, `terrasse`, `bbq`, `piscine_privee`, `piscine_public`, `tennis`, `ping_pong`) VALUES(4, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `equipements` (`id`, `gites_id`, `lave_vaiselle`, `lave_linge`, `climatisation`, `television`, `terrasse`, `bbq`, `piscine_privee`, `piscine_public`, `tennis`, `ping_pong`) VALUES(5, 7, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1);
INSERT INTO `equipements` (`id`, `gites_id`, `lave_vaiselle`, `lave_linge`, `climatisation`, `television`, `terrasse`, `bbq`, `piscine_privee`, `piscine_public`, `tennis`, `ping_pong`) VALUES(6, 9, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `gites`
--

CREATE TABLE `gites` (
  `id` int(11) NOT NULL,
  `proprietaires_id` int(11) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `surfaceh_habitable` double NOT NULL,
  `nombre_chambres` int(11) NOT NULL,
  `nombre_couchage` int(11) NOT NULL,
  `accepte_animaux` tinyint(1) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `gites`
--

INSERT INTO `gites` (`id`, `proprietaires_id`, `localisation`, `surfaceh_habitable`, `nombre_chambres`, `nombre_couchage`, `accepte_animaux`, `contact_id`, `nom`, `region`, `departement`) VALUES(1, 1, 'Blaison', 100, 3, 6, 1, 1, 'Au petit muguet', 'Pays De La Loire', 'Maine et Loire');
INSERT INTO `gites` (`id`, `proprietaires_id`, `localisation`, `surfaceh_habitable`, `nombre_chambres`, `nombre_couchage`, `accepte_animaux`, `contact_id`, `nom`, `region`, `departement`) VALUES(2, 2, 'Angers', 200, 6, 12, 0, 2, 'le bord de loire', 'Pays De La Loire', 'Maine et Loire');
INSERT INTO `gites` (`id`, `proprietaires_id`, `localisation`, `surfaceh_habitable`, `nombre_chambres`, `nombre_couchage`, `accepte_animaux`, `contact_id`, `nom`, `region`, `departement`) VALUES(4, 2, 'Saumur', 150, 5, 10, 0, 2, 'entre les ponts', 'Pays De La Loire', 'Maine et Loire');
INSERT INTO `gites` (`id`, `proprietaires_id`, `localisation`, `surfaceh_habitable`, `nombre_chambres`, `nombre_couchage`, `accepte_animaux`, `contact_id`, `nom`, `region`, `departement`) VALUES(7, 1, 'Poitier', 500, 100, 200, 0, 1, 'futurogite', 'Poitou-Charentes', 'Vienne');
INSERT INTO `gites` (`id`, `proprietaires_id`, `localisation`, `surfaceh_habitable`, `nombre_chambres`, `nombre_couchage`, `accepte_animaux`, `contact_id`, `nom`, `region`, `departement`) VALUES(8, 1, 'Martigné', 120, 4, 8, 0, 1, 'lys haut gitons', 'Pays De La Loire', 'Maine et Loire');
INSERT INTO `gites` (`id`, `proprietaires_id`, `localisation`, `surfaceh_habitable`, `nombre_chambres`, `nombre_couchage`, `accepte_animaux`, `contact_id`, `nom`, `region`, `departement`) VALUES(9, 3, 'Marseille', 500, 100, 200, 1, 3, 'Ma gaté', 'Provence-Alpes-Côte d\'Azur', 'Bouches Du Rhône');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `proprietaires`
--

CREATE TABLE `proprietaires` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `proprietaires`
--

INSERT INTO `proprietaires` (`id`, `nom`, `prenom`, `adresse`, `telephone`, `email`) VALUES(1, 'Duliege', 'Bastien', '13 rue d\'anjou', '06.06.06.06.06', 'bastien@bastien.fr');
INSERT INTO `proprietaires` (`id`, `nom`, `prenom`, `adresse`, `telephone`, `email`) VALUES(2, 'Suire', 'Enzo', '13 rue de enzo', '06.07.07.07.07', 'enzo@enzo.fr');
INSERT INTO `proprietaires` (`id`, `nom`, `prenom`, `adresse`, `telephone`, `email`) VALUES(3, 'Baron', 'Remy', '13 rue de remy', '05.20.56.69.83', 'remy@remy.fr');

-- --------------------------------------------------------

--
-- Structure de la table `tarif_animaux`
--

CREATE TABLE `tarif_animaux` (
  `id` int(11) NOT NULL,
  `gites_id` int(11) NOT NULL,
  `tarif` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tarif_animaux`
--

INSERT INTO `tarif_animaux` (`id`, `gites_id`, `tarif`) VALUES(1, 1, 20);
INSERT INTO `tarif_animaux` (`id`, `gites_id`, `tarif`) VALUES(2, 2, 30);
INSERT INTO `tarif_animaux` (`id`, `gites_id`, `tarif`) VALUES(3, 4, 40);
INSERT INTO `tarif_animaux` (`id`, `gites_id`, `tarif`) VALUES(4, 7, 50);
INSERT INTO `tarif_animaux` (`id`, `gites_id`, `tarif`) VALUES(5, 8, 60);
INSERT INTO `tarif_animaux` (`id`, `gites_id`, `tarif`) VALUES(6, 9, 70);

-- --------------------------------------------------------

--
-- Structure de la table `tarif_location`
--

CREATE TABLE `tarif_location` (
  `id` int(11) NOT NULL,
  `gites_id` int(11) NOT NULL,
  `periode_debut` date NOT NULL,
  `periode_fin` date NOT NULL,
  `tarif_hebdomadaire` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tarif_location`
--

INSERT INTO `tarif_location` (`id`, `gites_id`, `periode_debut`, `periode_fin`, `tarif_hebdomadaire`) VALUES(1, 1, '2023-12-01', '2023-12-08', 450);
INSERT INTO `tarif_location` (`id`, `gites_id`, `periode_debut`, `periode_fin`, `tarif_hebdomadaire`) VALUES(2, 2, '2023-12-05', '2023-12-12', 640);
INSERT INTO `tarif_location` (`id`, `gites_id`, `periode_debut`, `periode_fin`, `tarif_hebdomadaire`) VALUES(3, 4, '2023-12-11', '2023-12-18', 750);
INSERT INTO `tarif_location` (`id`, `gites_id`, `periode_debut`, `periode_fin`, `tarif_hebdomadaire`) VALUES(4, 7, '2023-12-08', '2023-12-15', 450);
INSERT INTO `tarif_location` (`id`, `gites_id`, `periode_debut`, `periode_fin`, `tarif_hebdomadaire`) VALUES(5, 8, '2023-12-08', '2023-12-15', 650);
INSERT INTO `tarif_location` (`id`, `gites_id`, `periode_debut`, `periode_fin`, `tarif_hebdomadaire`) VALUES(6, 9, '2023-12-20', '2023-12-27', 350);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `equipements`
--
ALTER TABLE `equipements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3F02D86B80C9DB47` (`gites_id`);

--
-- Index pour la table `gites`
--
ALTER TABLE `gites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_29609B21710ED0A5` (`proprietaires_id`),
  ADD KEY `IDX_29609B21E7A1254A` (`contact_id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `proprietaires`
--
ALTER TABLE `proprietaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tarif_animaux`
--
ALTER TABLE `tarif_animaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E9DF6B0880C9DB47` (`gites_id`);

--
-- Index pour la table `tarif_location`
--
ALTER TABLE `tarif_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_585B5DA680C9DB47` (`gites_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `equipements`
--
ALTER TABLE `equipements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `gites`
--
ALTER TABLE `gites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `proprietaires`
--
ALTER TABLE `proprietaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tarif_animaux`
--
ALTER TABLE `tarif_animaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tarif_location`
--
ALTER TABLE `tarif_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `equipements`
--
ALTER TABLE `equipements`
  ADD CONSTRAINT `FK_3F02D86B80C9DB47` FOREIGN KEY (`gites_id`) REFERENCES `gites` (`id`);

--
-- Contraintes pour la table `gites`
--
ALTER TABLE `gites`
  ADD CONSTRAINT `FK_29609B21710ED0A5` FOREIGN KEY (`proprietaires_id`) REFERENCES `proprietaires` (`id`),
  ADD CONSTRAINT `FK_29609B21E7A1254A` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`);

--
-- Contraintes pour la table `tarif_animaux`
--
ALTER TABLE `tarif_animaux`
  ADD CONSTRAINT `FK_E9DF6B0880C9DB47` FOREIGN KEY (`gites_id`) REFERENCES `gites` (`id`);

--
-- Contraintes pour la table `tarif_location`
--
ALTER TABLE `tarif_location`
  ADD CONSTRAINT `FK_585B5DA680C9DB47` FOREIGN KEY (`gites_id`) REFERENCES `gites` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
