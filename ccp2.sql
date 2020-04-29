-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 29 avr. 2020 à 12:44
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ccp2`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titre` varchar(120) NOT NULL,
  `contenu` longtext NOT NULL,
  `date` date NOT NULL,
  `auteur` varchar(60) NOT NULL,
  `categorie` varchar(90) NOT NULL,
  `attente` int(11) NOT NULL DEFAULT 1,
  `refus` int(11) DEFAULT 0,
  `par` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `titre`, `contenu`, `date`, `auteur`, `categorie`, `attente`, `refus`, `par`) VALUES
(1, 'Coucou', '<h2>Hey la RWF</h2><p>&nbsp;</p><p>Comment allez vous ajourd\'hui ? :)</p>', '2020-04-28', 'root', 'Test', 1, 0, 'admin@admin.fr'),
(2, 'Voici un article qui déchire !', '<h2>Bienvenue sur mon article qui déchire !</h2><h4>Voici l\'article qui déchire !</h4><p>Nous sommes heureux de vous présenter notre petit article qui déchire, il s\'agit de notre premier véritable article !</p><figure class=\"table\"><table><tbody><tr><td>Nous pouvons même faire des tableaux</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td></tr><tr><td>éhé</td><td>4</td><td>5</td><td>4</td><td>8</td><td>5</td><td>5</td><td>6</td><td>6</td><td>7</td></tr><tr><td>total</td><td>5</td><td>5</td><td>4</td><td>9</td><td>5</td><td>5</td><td>7</td><td>7</td><td>8</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=m1QxNOvfhWk&amp;list=RDm1QxNOvfhWk&amp;index=1\"></oembed></figure><p>Nous pouvons insérer des videos Youtube ! OMG</p><p>&nbsp;</p><p>Nous pouvons faire des petites listes aussi !</p><ol><li>Un</li><li>Deux</li><li>Trois</li></ol><p>Et voilà !</p>', '2020-04-28', 'root', 'Actualité', 0, 0, 'admin@admin.fr'),
(3, 'Voici un article qui déchire 2 !', '<h2>Bienvenue sur mon article qui déchire !</h2><h4>Voici l\'article qui déchire !</h4><p>Nous sommes heureux de vous présenter notre petit article qui déchire, il s\'agit de notre premier véritable article !</p><figure class=\"table\"><table><tbody><tr><td>Nous pouvons même faire des tableaux</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td></tr><tr><td>éhé</td><td>4</td><td>5</td><td>4</td><td>8</td><td>5</td><td>5</td><td>6</td><td>6</td><td>7</td></tr><tr><td>total</td><td>5</td><td>5</td><td>4</td><td>9</td><td>5</td><td>5</td><td>7</td><td>7</td><td>8</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=m1QxNOvfhWk&amp;list=RDm1QxNOvfhWk&amp;index=1\"></oembed></figure><p>Nous pouvons insérer des videos Youtube ! OMG</p><p>&nbsp;</p><p>Nous pouvons faire des petites listes aussi !</p><ol><li>Un</li><li>Deux</li><li>Trois</li></ol><p>Et voilà !</p>', '2020-04-28', 'root', 'Actualité', 0, 0, 'admin@admin.fr'),
(4, 'Voici un article qui déchire 3\r\n !', '<h2>Bienvenue sur mon article qui déchire !</h2><h4>Voici l\'article qui déchire !</h4><p>Nous sommes heureux de vous présenter notre petit article qui déchire, il s\'agit de notre premier véritable article !</p><figure class=\"table\"><table><tbody><tr><td>Nous pouvons même faire des tableaux</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td></tr><tr><td>éhé</td><td>4</td><td>5</td><td>4</td><td>8</td><td>5</td><td>5</td><td>6</td><td>6</td><td>7</td></tr><tr><td>total</td><td>5</td><td>5</td><td>4</td><td>9</td><td>5</td><td>5</td><td>7</td><td>7</td><td>8</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=m1QxNOvfhWk&amp;list=RDm1QxNOvfhWk&amp;index=1\"></oembed></figure><p>Nous pouvons insérer des videos Youtube ! OMG</p><p>&nbsp;</p><p>Nous pouvons faire des petites listes aussi !</p><ol><li>Un</li><li>Deux</li><li>Trois</li></ol><p>Et voilà !</p>', '2020-04-28', 'root', 'Actualité', 0, 0, 'admin@admin.fr'),
(5, 'Voici un article qui déchire 4!', '<h2>Bienvenue sur mon article qui déchire !</h2><h4>Voici l\'article qui déchire !</h4><p>Nous sommes heureux de vous présenter notre petit article qui déchire, il s\'agit de notre premier véritable article !</p><figure class=\"table\"><table><tbody><tr><td>Nous pouvons même faire des tableaux</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td></tr><tr><td>éhé</td><td>4</td><td>5</td><td>4</td><td>8</td><td>5</td><td>5</td><td>6</td><td>6</td><td>7</td></tr><tr><td>total</td><td>5</td><td>5</td><td>4</td><td>9</td><td>5</td><td>5</td><td>7</td><td>7</td><td>8</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=m1QxNOvfhWk&amp;list=RDm1QxNOvfhWk&amp;index=1\"></oembed></figure><p>Nous pouvons insérer des videos Youtube ! OMG</p><p>&nbsp;</p><p>Nous pouvons faire des petites listes aussi !</p><ol><li>Un</li><li>Deux</li><li>Trois</li></ol><p>Et voilà !</p>', '2020-04-28', 'root', 'Actualité', 0, 0, 'admin@admin.fr'),
(6, 'Voici un article qui déchire 6!', '<h2>Bienvenue sur mon article qui déchire !</h2><h4>Voici l\'article qui déchire !</h4><p>Nous sommes heureux de vous présenter notre petit article qui déchire, il s\'agit de notre premier véritable article !</p><figure class=\"table\"><table><tbody><tr><td>Nous pouvons même faire des tableaux</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td></tr><tr><td>éhé</td><td>4</td><td>5</td><td>4</td><td>8</td><td>5</td><td>5</td><td>6</td><td>6</td><td>7</td></tr><tr><td>total</td><td>5</td><td>5</td><td>4</td><td>9</td><td>5</td><td>5</td><td>7</td><td>7</td><td>8</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=m1QxNOvfhWk&amp;list=RDm1QxNOvfhWk&amp;index=1\"></oembed></figure><p>Nous pouvons insérer des videos Youtube ! OMG</p><p>&nbsp;</p><p>Nous pouvons faire des petites listes aussi !</p><ol><li>Un</li><li>Deux</li><li>Trois</li></ol><p>Et voilà !</p>', '2020-04-28', 'root', 'Actualité', 0, 0, 'admin@admin.fr'),
(7, 'Voici un article qui déchire 7!', '<h2>Bienvenue sur mon article qui déchire !</h2><h4>Voici l\'article qui déchire !</h4><p>Nous sommes heureux de vous présenter notre petit article qui déchire, il s\'agit de notre premier véritable article !</p><figure class=\"table\"><table><tbody><tr><td>Nous pouvons même faire des tableaux</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td></tr><tr><td>éhé</td><td>4</td><td>5</td><td>4</td><td>8</td><td>5</td><td>5</td><td>6</td><td>6</td><td>7</td></tr><tr><td>total</td><td>5</td><td>5</td><td>4</td><td>9</td><td>5</td><td>5</td><td>7</td><td>7</td><td>8</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=m1QxNOvfhWk&amp;list=RDm1QxNOvfhWk&amp;index=1\"></oembed></figure><p>Nous pouvons insérer des videos Youtube ! OMG</p><p>&nbsp;</p><p>Nous pouvons faire des petites listes aussi !</p><ol><li>Un</li><li>Deux</li><li>Trois</li></ol><p>Et voilà !</p>', '2020-04-28', 'root', 'Actualité', 0, 0, 'admin@admin.fr'),
(8, 'Voici un article qui déchire 8!', '<h2>Bienvenue sur mon article qui déchire !</h2><h4>Voici l\'article qui déchire !</h4><p>Nous sommes heureux de vous présenter notre petit article qui déchire, il s\'agit de notre premier véritable article !</p><figure class=\"table\"><table><tbody><tr><td>Nous pouvons même faire des tableaux</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td></tr><tr><td>éhé</td><td>4</td><td>5</td><td>4</td><td>8</td><td>5</td><td>5</td><td>6</td><td>6</td><td>7</td></tr><tr><td>total</td><td>5</td><td>5</td><td>4</td><td>9</td><td>5</td><td>5</td><td>7</td><td>7</td><td>8</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=m1QxNOvfhWk&amp;list=RDm1QxNOvfhWk&amp;index=1\"></oembed></figure><p>Nous pouvons insérer des videos Youtube ! OMG</p><p>&nbsp;</p><p>Nous pouvons faire des petites listes aussi !</p><ol><li>Un</li><li>Deux</li><li>Trois</li></ol><p>Et voilà !</p>', '2020-04-28', 'root', 'Actualité', 0, 0, 'admin@admin.fr'),
(9, 'Voici un article qui déchire 9!', '<h2>Bienvenue sur mon article qui déchire !</h2><h4>Voici l\'article qui déchire !</h4><p>Nous sommes heureux de vous présenter notre petit article qui déchire, il s\'agit de notre premier véritable article !</p><figure class=\"table\"><table><tbody><tr><td>Nous pouvons même faire des tableaux</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td></tr><tr><td>éhé</td><td>4</td><td>5</td><td>4</td><td>8</td><td>5</td><td>5</td><td>6</td><td>6</td><td>7</td></tr><tr><td>total</td><td>5</td><td>5</td><td>4</td><td>9</td><td>5</td><td>5</td><td>7</td><td>7</td><td>8</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=m1QxNOvfhWk&amp;list=RDm1QxNOvfhWk&amp;index=1\"></oembed></figure><p>Nous pouvons insérer des videos Youtube ! OMG</p><p>&nbsp;</p><p>Nous pouvons faire des petites listes aussi !</p><ol><li>Un</li><li>Deux</li><li>Trois</li></ol><p>Et voilà !</p>', '2020-04-28', 'root', 'Actualité', 0, 0, 'admin@admin.fr'),
(13, 'Voici un article qui déchire 15!', '<h2>Bienvenue sur mon article qui déchire !</h2><h4>Voici l\'article qui déchire !</h4><p>Nous sommes heureux de vous présenter notre petit article qui déchire, il s\'agit de notre premier véritable article !</p><figure class=\"table\"><table><tbody><tr><td>Nous pouvons même faire des tableaux</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td></tr><tr><td>éhé</td><td>4</td><td>5</td><td>4</td><td>8</td><td>5</td><td>5</td><td>6</td><td>6</td><td>7</td></tr><tr><td>total</td><td>5</td><td>5</td><td>4</td><td>9</td><td>5</td><td>5</td><td>7</td><td>7</td><td>8</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=m1QxNOvfhWk&amp;list=RDm1QxNOvfhWk&amp;index=1\"></oembed></figure><p>Nous pouvons insérer des videos Youtube ! OMG</p><p>&nbsp;</p><p>Nous pouvons faire des petites listes aussi !</p><ol><li>Un</li><li>Deux</li><li>Trois</li></ol><p>Et voilà !</p>', '2020-04-28', 'root', 'Actualité', 0, 0, 'admin@admin.fr'),
(14, 'Voici un article qui déchire 16!', '<h2>Bienvenue sur mon article qui déchire !</h2><h4>Voici l\'article qui déchire !</h4><p>Nous sommes heureux de vous présenter notre petit article qui déchire, il s\'agit de notre premier véritable article !</p><figure class=\"table\"><table><tbody><tr><td>Nous pouvons même faire des tableaux</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td></tr><tr><td>éhé</td><td>4</td><td>5</td><td>4</td><td>8</td><td>5</td><td>5</td><td>6</td><td>6</td><td>7</td></tr><tr><td>total</td><td>5</td><td>5</td><td>4</td><td>9</td><td>5</td><td>5</td><td>7</td><td>7</td><td>8</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=m1QxNOvfhWk&amp;list=RDm1QxNOvfhWk&amp;index=1\"></oembed></figure><p>Nous pouvons insérer des videos Youtube ! OMG</p><p>&nbsp;</p><p>Nous pouvons faire des petites listes aussi !</p><ol><li>Un</li><li>Deux</li><li>Trois</li></ol><p>Et voilà !</p>', '2020-04-28', 'root', 'Actualité', 0, 0, 'admin@admin.fr'),
(15, 'Voici un article qui déchire 17!', '<h2>Bienvenue sur mon article qui déchire !</h2><h4>Voici l\'article qui déchire !</h4><p>Nous sommes heureux de vous présenter notre petit article qui déchire, il s\'agit de notre premier véritable article !</p><figure class=\"table\"><table><tbody><tr><td>Nous pouvons même faire des tableaux</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td></tr><tr><td>éhé</td><td>4</td><td>5</td><td>4</td><td>8</td><td>5</td><td>5</td><td>6</td><td>6</td><td>7</td></tr><tr><td>total</td><td>5</td><td>5</td><td>4</td><td>9</td><td>5</td><td>5</td><td>7</td><td>7</td><td>8</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=m1QxNOvfhWk&amp;list=RDm1QxNOvfhWk&amp;index=1\"></oembed></figure><p>Nous pouvons insérer des videos Youtube ! OMG</p><p>&nbsp;</p><p>Nous pouvons faire des petites listes aussi !</p><ol><li>Un</li><li>Deux</li><li>Trois</li></ol><p>Et voilà !</p>', '2020-04-28', 'root', 'Actualité', 0, 0, 'admin@admin.fr'),
(16, 'Voici un article qui déchire 18!', '<h2>Bienvenue sur mon article qui déchire !</h2><h4>Voici l\'article qui déchire !</h4><p>Nous sommes heureux de vous présenter notre petit article qui déchire, il s\'agit de notre premier véritable article !</p><figure class=\"table\"><table><tbody><tr><td>Nous pouvons même faire des tableaux</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td></tr><tr><td>éhé</td><td>4</td><td>5</td><td>4</td><td>8</td><td>5</td><td>5</td><td>6</td><td>6</td><td>7</td></tr><tr><td>total</td><td>5</td><td>5</td><td>4</td><td>9</td><td>5</td><td>5</td><td>7</td><td>7</td><td>8</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=m1QxNOvfhWk&amp;list=RDm1QxNOvfhWk&amp;index=1\"></oembed></figure><p>Nous pouvons insérer des videos Youtube ! OMG</p><p>&nbsp;</p><p>Nous pouvons faire des petites listes aussi !</p><ol><li>Un</li><li>Deux</li><li>Trois</li></ol><p>Et voilà !</p>', '2020-04-28', 'root', 'Actualité', 0, 0, 'admin@admin.fr'),
(17, 'Voici un article qui déchire 19!', '<h2>Bienvenue sur mon article qui déchire !</h2><h4>Voici l\'article qui déchire !</h4><p>Nous sommes heureux de vous présenter notre petit article qui déchire, il s\'agit de notre premier véritable article !</p><figure class=\"table\"><table><tbody><tr><td>Nous pouvons même faire des tableaux</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td></tr><tr><td>éhé</td><td>4</td><td>5</td><td>4</td><td>8</td><td>5</td><td>5</td><td>6</td><td>6</td><td>7</td></tr><tr><td>total</td><td>5</td><td>5</td><td>4</td><td>9</td><td>5</td><td>5</td><td>7</td><td>7</td><td>8</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=m1QxNOvfhWk&amp;list=RDm1QxNOvfhWk&amp;index=1\"></oembed></figure><p>Nous pouvons insérer des videos Youtube ! OMG</p><p>&nbsp;</p><p>Nous pouvons faire des petites listes aussi !</p><ol><li>Un</li><li>Deux</li><li>Trois</li></ol><p>Et voilà !</p>', '2020-04-28', 'root', 'Actualité', 0, 0, 'admin@admin.fr');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pseudo` varchar(40) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `pseudo`, `level`) VALUES
(1, 'admin@admin.fr', '$argon2i$v=19$m=65536,t=4,p=1$ekwvV3F5OG9YS2dJS0x6bw$YWwtm71K9+dMQRFUGA9WErg8B6867t/+qGSeSkYHFiI', 'root', 3),
(4, 'root@lol.fr', '$argon2i$v=19$m=65536,t=4,p=1$UTZmaXM4Yld5Zk5wTEZONw$w7kDKhrPFZlM662M/Yu3U6v4M/YIaVjyPXlIXW+hTZM', 'Bambs', 0),
(5, 'r@lol.fr', '$argon2i$v=19$m=65536,t=4,p=1$WWxkVVRJRlRNUFpMbHRveA$d1fYK9j0iTszEK0u7kZ4AERIUCd4aGBHA5q/14YWD2s', 'root16', 0),
(6, 'ddd@lol.fr', '$argon2i$v=19$m=65536,t=4,p=1$SnF0L01TSmpqTFBoY1hZcA$ewf8RhiLUwoeSdUxce+p2MsF3/FqnckfQzUpd+ewvbE', 'sdsd', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
