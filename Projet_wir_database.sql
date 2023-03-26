-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 31 août 2022 à 00:34
-- Version du serveur : 10.5.12-MariaDB-cll-lve
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u479250329_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `typeCategorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `typeCategorie`) VALUES
(1, 'Sweat'),
(2, 'T-Shirt'),
(3, 'SweatPant');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `photo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `prix`, `description`, `idCategorie`, `photo`) VALUES
(1, 'Sweat noir', 29.16, '• Sweat capuche avec poche ventrale de la couleur noire\r\n• Cordon de serrage\r\n• Poche ventrale\r\n• Élastique de maintien à la taille et aux poignets\r\n• Étiquette certifiant l\'authenticité\r\n• 65 % Coton, 35 % Polyester\r\n• Lavable en Machine à 30°', 1, 'sweat_noire.png'),
(2, 'T-shirt noir', 12.49, '• T-shirts brodés BOSS sur la poitrine de couleur noire\r\n• Col rond\r\n• T-shirt en coton brodé logo WIR sur la poitrine\r\n• Col rond\r\n• Col et manches contrastés\r\n• Étiquette certifiant l\'authenticité\r\n• 100 % Coton\r\n• Lavable en machine à 40° ', 2, 't-shirt_noire.png'),
(3, 'SweatPant noir', 20.83, '• Pantalon coupe confort, élastique à la cheville\r\n• Poches à rabat aux côtés et poche plaquée au dos\r\n• Cordon long et rond à la taille\r\n• Coton 80 % et 20 % Polyester ', 3, 'sweatpant_noire.png'),
(4, 'Sweat blanc', 29.16, '• Sweat capuche avec poche ventrale de la couleur blanche\r\n• Cordon de serrage\r\n• Poche ventrale\r\n• Élastique de maintien à la taille et aux poignets\r\n• Étiquette certifiant l\'authenticité\r\n• 65 % Coton, 35 % Polyester\r\n• Lavable en Machine à 30°', 1, 'sweat_blanc.png'),
(5, 'T-shirt blanc', 12.49, '• T-shirts brodés BOSS sur la poitrine de couleur blanche\r\n• Col rond\r\n• T-shirt en coton brodé logo WIR sur la poitrine\r\n• Col rond\r\n• Col et manches contrastés\r\n• Étiquette certifiant l\'authenticité\r\n• 100 % Coton\r\n• Lavable en machine à 40°', 2, 't-shirt_blanc.png'),
(6, 'SweatPant blanc', 20.83, '• Pantalon coupe confort, élastique à la cheville\r\n• Poches à rabat aux côtés et poche plaquée au dos\r\n• Cordon long et rond à la taille\r\n• Coton 80 % et 20 % Polyester ', 3, 'sweatpant_blanc.png'),
(7, 'Sweat bleu', 29.16, '• Sweat capuche avec poche ventrale de la couleur bleu clair\r\n• Cordon de serrage\r\n• Poche ventrale\r\n• Élastique de maintien à la taille et aux poignets\r\n• Étiquette certifiant l\'authenticité\r\n• 65 % Coton, 35 % Polyester\r\n• Lavable en Machine à 30°', 1, 'sweat_bleu.png'),
(8, 'T-shirt', 12.49, '• T-shirts brodés BOSS sur la poitrine de couleur bleu clair\r\n• Col rond\r\n• T-shirt en coton brodé logo WIR sur la poitrine\r\n• Col rond\r\n• Col et manches contrastés\r\n• Étiquette certifiant l\'authenticité\r\n• 100 % Coton\r\n• Lavable en machine à 40°', 2, 't-shirt_bleu.png'),
(9, 'SweatPant bleu', 20.83, '• Pantalon coupe confort, élastique à la cheville\r\n• Poches à rabat aux côtés et poche plaquée au dos\r\n• Cordon long et rond à la taille\r\n• Coton 80 % et 20 % Polyester ', 3, 'sweatpant_bleu.png'),
(10, 'Sweat gris', 29.16, '• Sweat capuche avec poche ventrale de la couleur grise\r\n• Cordon de serrage\r\n• Poche ventrale\r\n• Élastique de maintien à la taille et aux poignets\r\n• Étiquette certifiant l\'authenticité\r\n• 65 % Coton, 35 % Polyester\r\n• Lavable en Machine à 30°', 1, 'sweat_gris.png'),
(11, 'T-shirt gris', 12.49, '• T-shirts brodés BOSS sur la poitrine de couleur grise\r\n• Col rond\r\n• T-shirt en coton brodé logo WIR sur la poitrine\r\n• Col rond\r\n• Col et manches contrastés\r\n• Étiquette certifiant l\'authenticité\r\n• 100 % Coton\r\n• Lavable en machine à 40°', 2, 't-shirt_gris.png'),
(12, 'SweatPant gris', 20.83, '• Pantalon coupe confort, élastique à la cheville\r\n• Poches à rabat aux côtés et poche plaquée au dos\r\n• Cordon long et rond à la taille\r\n• Coton 80 % et 20 % Polyester ', 3, 'sweatpant_gris.png'),
(13, 'Sweat rose', 29.16, '• Sweat capuche avec poche ventrale de la couleur rose clair\r\n• Cordon de serrage\r\n• Poche ventrale\r\n• Élastique de maintien à la taille et aux poignets\r\n• Étiquette certifiant l\'authenticité\r\n• 65 % Coton, 35 % Polyester\r\n• Lavable en Machine à 30°', 1, 'sweat_rose.png'),
(14, 'T-shirt rose', 12.49, '• T-shirts brodés BOSS sur la poitrine de couleur rose clair\r\n• Col rond\r\n• T-shirt en coton brodé logo WIR sur la poitrine\r\n• Col rond\r\n• Col et manches contrastés\r\n• Étiquette certifiant l\'authenticité\r\n• 100 % Coton\r\n• Lavable en machine à 40°', 2, 't-shirt_rose.png'),
(15, 'SweatPant rose', 20.83, '• Pantalon coupe confort, élastique à la cheville\r\n• Poches à rabat aux côtés et poche plaquée au dos\r\n• Cordon long et rond à la taille\r\n• Coton 80 % et 20 % Polyester ', 3, 'sweatpant_rose.png'),
(16, 'Sweat rouge', 29.16, '• Sweat capuche avec poche ventrale de la couleur rouge foncé\r\n• Cordon de serrage\r\n• Poche ventrale\r\n• Élastique de maintien à la taille et aux poignets\r\n• Étiquette certifiant l\'authenticité\r\n• 65 % Coton, 35 % Polyester\r\n• Lavable en Machine à 30° ', 1, 'sweat_rouge.png'),
(17, 'T-shirt rouge', 12.49, '• T-shirts brodés BOSS sur la poitrine de couleur rouge foncé\r\n• Col rond\r\n• T-shirt en coton brodé logo WIR sur la poitrine\r\n• Col rond\r\n• Col et manches contrastés\r\n• Étiquette certifiant l\'authenticité\r\n• 100 % Coton\r\n• Lavable en machine à 40°', 2, 't-shirt_rouge.png'),
(18, 'SweatPant rouge', 20.83, '• Pantalon coupe confort, élastique à la cheville\r\n• Poches à rabat aux côtés et poche plaquée au dos\r\n• Cordon long et rond à la taille\r\n• Coton 80 % et 20 % Polyester ', 3, 'sweatpant_rouge.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prénoms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prénoms`, `email`, `mdp`) VALUES
(1, 'toto', 'Tata', 'rosatceleste@gmail.com', '$2y$10$HacCgtWC1URuJAPQtnXYtu42WAAmMD73i1FcMpvaSkVf9Lfe0IIFu'),
(2, 'ROSAT', 'Yvanne ', 'rosatyvann@gmail.com', '$2y$10$ITSNARVQKbp5khRcFJru7OKyPWYqZIJY/xWDJo3cT5BoBCA.yG6Xq');

-- --------------------------------------------------------

--
-- Structure de la table `utilise`
--

CREATE TABLE `utilise` (
  `idUsers` int(11) NOT NULL,
  `idProduits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategorie` (`idCategorie`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilise`
--
ALTER TABLE `utilise`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`);

--
-- Contraintes pour la table `utilise`
--
ALTER TABLE `utilise`
  ADD CONSTRAINT `utilise_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
