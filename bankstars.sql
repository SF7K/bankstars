-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: bankstars
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `bankstars`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `bankstars` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `bankstars`;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_100000_create_password_resets_table',1),(2,'2019_08_19_000000_create_failed_jobs_table',1),(3,'2020_07_12_132006_create_profiles_table',1),(4,'2020_07_14_133132_create_role_user_table',1),(5,'2020_07_14_133820_create_roles_table',1),(6,'2214_10_12_000000_create_users_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,'Gilles','Roussel','France','Auteur','Gilles Roussel, dit Boulet, né le 1er février 1975 à Meaux, est un auteur de bande dessinée français. En 1998, à la suite d\'un concours de bande dessinée organisé par le festival de Sierre, il est remarqué par Zep, auteur de Titeuf, et Jean-Claude Camano, rédacteur en chef du magazine Tchô ! qui vient d\'être lancé. De 1998 à 2001, il réalise donc de nombreuses pages pour ce nouveau magazine. En 2001, il publie sa première bande dessinée, Raghnarok. Suivent ensuite plusieurs séries, toutes publiées par Tchô ! : La Rubrique scientifique, Le Miya et Womoks (avec Reno au dessin). Il débute ensuite en juillet 2004 un blog dessiné, Bouletcorp.com, sur Internet, et ce média lui permet de se faire connaître. En parallèle, il participe toujours régulièrement au magazine Tchô ! et a fait une ou deux apparitions dans les magazines Psikopat et Spirou.','l3cmQc742qFHClA7DL7YlZmNjY2fItAuMNoS3Oix.jpeg',NULL,'2020-07-16 18:08:36'),(2,'Xavier','Dang','France','Streamer','Xavier Dang, dit MisterMV, né le 26 août 1980 à Paris, est un vidéaste, streamer, et compositeur de musiques de jeux vidéos français. Créateur de plusieurs émissions telles que \"Indéfinitivement\" ou \"Le Nouveau Jeu Fini à La Pisse\", il varie le contenu proposé en jouant à un jeu combat (\"Le Manque de Respect\"), en présentant les jeux rétros qui l\'ont marqué (\"Astralo-Interstellaire) ou encore en faisant du speedrun (\"Speed René\"). ','M6HmyH9qi9KFCzs4a4HcnDdrrUiZYMgtOAOKAVWU.jpeg',NULL,NULL),(3,'Robin','Taylor','U.S.A.','Acteur','Robin Lord Taylor, ou Robin Taylor à ses débuts, est un acteur américain, né le 4 juin 1978 à Shueyville dans l\'Iowa. Il est connu pour ses rôles dans Admis à tout prix (Accepted, 2006), Another Earth (2011) et Would You Rather (2012). Après une brève apparition dans la série The Walking Dead, il est également connu dans la série Gotham, incarnant le personnage d\'Oswald Cobblepot alias le Pingouin, un des plus dangereux ennemis de Batman. ','fYon1CZaHBjGcjLCl7axiaqXqP4qrzdCxPZc8u4U.jpeg',NULL,NULL),(4,'Bolvar','Fordragon','Azeroth','Geôlier des morts','Le haut seigneur Bolvar Fordragon était un chevalier respecté de l’Alliance et occupa le poste de régent du royaume de Hurlevent à la suite de la disparition du roi Varian Wrynn. Veillant sur le jeune prince Anduin comme un père veille sur son fils, il noua une profonde relation avec le garçon.','JjMosfuT6FaC93vat5fmjWtteJzP52MBOZRcbTae.jpeg',NULL,NULL),(5,'Triss','Merigold','Témérie','Magicienne','riss Merigold est une magicienne, originaire de Maribor. Elle fut l\'une des conseillères du roi Foltest de Temeria avant d\'être contrainte d’émigrer, le roi ayant chassé toutes les magiciennes de Temeria. En 1263, Triss combattit à la Bataille du Mont Sodden. À un moment donné, la peur lui a fait oublier toutes ses formules magiques, à part une qui lui a permis de se téléporter loin de cet horrible endroit, jusqu’à sa maison, dans sa petite tour à Maribor. Elle se souviens aussi d’avoir vomi d’effroi, alors que Yennefer et Corail l\'a soutenaient par la nuque et les cheveux… Tout n’était que fracas et désolation, il y avait des flèches enflammées et des boules de feu qui explosaient au milieu de hurlements et de grondements terribles, et Triss se retrouva soudain à terre sur un tas de lambeaux calcinés et fumants. Elle compris que ce tas de lambeaux, c’était Yoël, et que ce qui se trouvait à côté, cette horrible chose, ce corps sans bras ni jambes qui poussait des hurlements macabres, c’était Corail. Elle cru que le sang dans lequel elle baignait était celui de Corail. Mais en vérité, c’était le sien. Triss a alors vu ce que l’on lui avait fait, et elle se mit à hurler, à hurler comme un chien dément, comme un enfant battu…','FgcZUsyykBynetA1zY5vcdETTS4J1wvDb6J4j4oM.jpeg',NULL,NULL),(6,'Clifford','Burton','U.S.A.','Musicien','Clifford Lee \"Cliff\" Burton né le 10 février 1962 à Castro Valley, Californie, et mort le 27 septembre 1986 à Dörarp, dans la commune de Ljungby en Suède, était un musicien américain principalement connu pour être le deuxième bassiste du groupe de thrash metal Metallica. Le 27 septembre 1986, Burton décède lorsque le bus de tournée du groupe se renverse dans les régions rurales du sud de la Suède. Burton a été, à titre posthume, intronisé au Rock and Roll Hall of Fame avec Metallica le 4 avril 2009. En 2011, un sondage en ligne des lecteurs de Rolling Stone l\'a classé neuvième des dix plus grands bassistes de tous les temps1. Il était un grand fan de l\'écrivain américain Howard Phillips Lovecraft ce qui donnera au groupe Metallica le nom des chansons The Call Of Ktulu sur l\'album Ride the Lightning et The Thing That Should Not Be sur l\'album Master of Puppets d\'après deux de ses livres.  ','eY4KACYN9vJEK8rl9Apcm280js60WT93nrnY4ZXH.jpeg',NULL,NULL);
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,1,1,NULL,NULL),(2,2,2,NULL,NULL),(3,3,3,NULL,NULL);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'administrator',NULL,NULL),(2,'moderator',NULL,NULL),(3,'simple_user',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@admin.ad',NULL,'$2y$10$iX3yYcNyflY6iVYjQ9IQeuVNKhcFXiGBCO3wBUER7StZyE1W1NDfW','eQgtZIeshjhAjHE49Z5etTXuzzQBRibkN3a2Viz2p51SzwZ7zWJR16UwYFu2',NULL,NULL),(2,'Modérateur','modo@mail.com',NULL,'$2y$10$94vBG.XIN89sTOHWVU11He3jXzTeyd.M7HUX/GfnvjHoihH2gVOVO',NULL,NULL,NULL),(3,'Utilisateur','simpleuser@mail.com',NULL,'$2y$10$iTs46042bhz/V4sTeU4HVOd4ATQcEUrLBJXijmOtxPPB01QXXGq3.',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-16 18:33:28
