-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
----

-- -----------------------------------------------------
-- Schema formulaire_accouchement
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `formulaire_accouchement` DEFAULT CHARACTER SET utf8mb4 ;
USE `formulaire_accouchement` ;

-- -----------------------------------------------------
-- Table `formulaire_accouchement`.`Client`
-- -----------------------------------------------------
CREATE TABLE `Client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nom_jeune_fille` varchar(50) CHARACTER SET utf8 NOT NULL,
  `prenom_client` varchar(50) CHARACTER SET utf8 NOT NULL,
  `date_naissance_client` date NOT NULL,
  `date_inscription_SHIPHRAT` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code_postal` varchar(70) CHARACTER SET utf8 NOT NULL,
  `ville` varchar(70) NOT NULL,
  `tel_client` int(11) NOT NULL,
  `email_client` varchar(70) NOT NULL,
  `date_debut_grossesse` varchar(45) DEFAULT NULL,
  `date_accouchement_prevue` varchar(45) DEFAULT NULL,
  `nb_bb` int(11) DEFAULT '0',
  `securite_sociale` tinyint(2) DEFAULT '0',
  `cmu` tinyint(2) DEFAULT '0',
  `ame` tinyint(2) DEFAULT '0',
  `vous_savez_pas_beneficiaire` tinyint(2) DEFAULT '0',
  `diabete` tinyint(2) DEFAULT '0',
  `embolie_pulmonaire_phlebite` tinyint(2) DEFAULT '0',
  `hypertention_arterielle` tinyint(2) DEFAULT '0',
  `probleme_cardiaques` tinyint(2) DEFAULT '0',
  `drepanocytose` tinyint(3) DEFAULT '0',
  `depression` tinyint(2) DEFAULT '0',
  `medicament_deperession` text,
  `autre_maladie` text,
  `nb_accouchement` int(11) DEFAULT '0',
  `avez_accouche_SHPH` tinyint(3) DEFAULT '0',
  `date_accouchement_SHPH` date DEFAULT NULL,
  `personel_SHPH` tinyint(2) DEFAULT '0',
  `suivi_apres_grossesse` tinyint(5) DEFAULT '0',
  `decision` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`id_client`),
  UNIQUE KEY `email_client` (`email_client`),
  UNIQUE KEY `code_postal` (`code_postal`,`ville`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Client`
--

LOCK TABLES `Client` WRITE;
/*!40000 ALTER TABLE `Client` DISABLE KEYS */;
INSERT INTO `Client` VALUES (16,'sarah','dsvgdfg','gergerh','2000-02-05','0000-00-00 00:00:00','898KJ','abidjan',21548,'ksisjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,0),(18,'yvonne','estger','begrer','2012-01-01','0000-00-00 00:00:00','74aa','libreville',125,'xxshsbh@gmail;com','2015/08/04','2016/05/05',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,1,0,2),(51,'gorger','pamela','rose','2000-02-05','0000-00-00 00:00:00','89ss238KJ','abidjan',21548,'ksisrdc123jjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,1),(52,'yvonne','mito','begrer','2012-01-01','0000-00-00 00:00:00','7224aa','libreville',125,'xxshaqzsbh@gmail;com','2015/08/04','2016/05/05',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,1),(53,'sarah','pamela','rose','2000-02-05','0000-00-00 00:00:00','8934s8KJ','abidjan',2112548,'ksdvisejjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,0),(54,'essoh','toure','fatoumata','2000-02-05','0000-00-00 00:00:00','89qwxs8KJ','abidjan',2231548,'sqeeeeeewxesss@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,1,0,0),(55,'doris','zhhhhzh','herhe','2000-02-05','0000-00-00 00:00:00','89sx8KJ','abidjan',212548,'sksizszsjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,1),(56,'sarah','rehgz','eztg','2000-02-05','0000-00-00 00:00:00','89qqx8KJ','abidjan',2231548,'ksqzzzddksisjjkisjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,2),(57,'froutou','hhrth','jitj','2000-02-05','0000-00-00 00:00:00','89qxq8KJ','abidjan',2441548,'ksgbisjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,1),(58,'sarah','trjhzr','reyy(eu','2000-02-05','0000-00-00 00:00:00','89xqx8KJ','abidjan',2231548,'kssdcsisjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,0),(59,'sarah','ahhj','dgdegg','2000-02-05','0000-00-00 00:00:00','89qsc8KJ','abidjan',24561548,'ksjgggggisjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,0),(60,'edyh','kouadio','vanessa','2000-02-05','0000-00-00 00:00:00','8qd98KJ','abidjan',24561548,'ksiaasjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,1,0,2),(61,'queen','trhjt','ejej','2000-02-05','0000-00-00 00:00:00','8sdv98KJ','abidjan',33221548,'ksizzzsjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,0),(62,'keschia','pamela','jt','2000-02-05','0000-00-00 00:00:00','8revvvvvvv98KJ','abidjan',3021548,'ksieeesjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,1),(63,'sarah','iogd','eyrye','2000-02-05','0000-00-00 00:00:00','89reve8KJ','abidjan',21543248,'ksieeersjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,0),(64,'lolo','ergergh','ergher','2000-02-05','0000-00-00 00:00:00','89dd8KJ','abidjan',2111548,'ksisrrrrjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,2),(65,'kouris','dfgeg','dshrd','2000-02-05','0000-00-00 00:00:00','89ssc8KJ','abidjan',2321548,'ktttsisjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,0),(66,'joelle','rtyhr','rdher','2000-02-05','0000-00-00 00:00:00','89ccc8KJ','abidjan',221231548,'kuuutsisjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,1),(67,'lolo','jjut','drhdrh','2000-02-05','0000-00-00 00:00:00','89sd8KJ','abidjan',21654548,'ksisuuuuiujjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,0),(68,'gorgia','ruhjrt','dfger','2000-02-05','0000-00-00 00:00:00','89scdcs8KJ','abidjan',22021548,'ksisuuyjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,2),(69,'koudou','eryhehy','ezher','2000-02-05','0000-00-00 00:00:00','898pooiKJ','abidjan',43321548,'frfksisjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,2),(70,'florence','eryh','ehrth','2000-02-05','0000-00-00 00:00:00','898pppKJ','abidjan',245551548,'kdfsisjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,2),(71,'sarah','eryhr(','reger','2000-02-05','0000-00-00 00:00:00','898KppoJ','abidjan',211010548,'krffegrtgtrgrsisjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,1),(72,'toumafer','eryy(','hetghrt','2000-02-05','0000-00-00 00:00:00','898kujyKJ','abidjan',6221548,'ksfefisjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,0),(73,'wqsae','rethyry','sedger','2000-02-05','0000-00-00 00:00:00','89fff8KJ','abidjan',736021548,'kswzeisjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,2),(74,'sarah','eyy(','xddsgd','2000-02-05','0000-00-00 00:00:00','8vr98KJ','abidjan',337021548,'xzz@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,0),(75,'qjdsyebgtav','dshedh','erh','2000-02-05','0000-00-00 00:00:00','89frg8KJ','abidjan',636021548,'ksgfeggisjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,0),(76,'vanessa','hezh','rtheh','2000-02-05','0000-00-00 00:00:00','89ege8KJ','abidjan',2147483647,'ksisvfejjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,2),(77,'cvshboazfnep','sdhds','rth','2000-02-05','0000-00-00 00:00:00','8fzz98KJ','abidjan',932821548,'ksisdeejjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,0),(78,'obirese','dhrhed','reh','2000-02-05','0000-00-00 00:00:00','8zeez98KJ','abidjan',88221548,'ksisgreghjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,2),(79,'fatoumata','sdgrg','ersgger','2000-02-05','0000-00-00 00:00:00','8cc98KJ','abidjan',2147483647,'ksisrgesjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,0),(80,'sarah','fdnhdfn','dfgrfer','2000-02-05','0000-00-00 00:00:00','8cccd98KJ','abidjan',2147483647,'ksisdsfdjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,1),(82,'esther','rtjjt','dfgbd','2000-02-05','0000-00-00 00:00:00','8ddzz98KJ','abidjan',2147483647,'ksispkokjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,2),(83,'jkhfkjqes45','kfqhs','erger','2000-02-05','0000-00-00 00:00:00','8zzzd98KJ','abidjan',290341548,'ksipmposjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,0),(84,'baladis','dfhd','sdgerhy','2000-02-05','0000-00-00 00:00:00','dd','abidjan',2147483647,'ksiooposjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,2),(96,'jqoqiuaber','dfhdh','eryher','2000-02-05','0000-00-00 00:00:00','898102KJ','abidjan',21548,'ksddisdsfdjjk@gmail.com','2015/01/01','2015/09/01',0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0,NULL,0,0,1),(97,'rodova','soso','milato','2000-02-02','2020-05-04 19:36:43','hrt55','cuba',6252,'kijnj@gmail.com','2005/01/01','2005/11/11',5,0,0,0,0,0,0,0,0,0,0,'baracopu','je veux juste tester les commende',8,0,NULL,1,0,2);
/*!40000 ALTER TABLE `Client` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;


-- -----------------------------------------------------
-- Table `formulaire_accouchement`.`Accouchement_avant_8_mois`
DROP TABLE IF EXISTS `Accouchement_avant_8_mois`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Accouchement_avant_8_mois` (
  `id_accouchement_avant_8_mois` int(11) NOT NULL AUTO_INCREMENT,
  `terme` int(11) DEFAULT '0',
  `enfant_pris_en_charge_en_neonatalogie` tinyint(2) DEFAULT '0',
  `poids_de_naissance` int(11) DEFAULT '0',
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id_accouchement_avant_8_mois`,`client_id`),
  KEY `fk_Accouchement_avant_8_mois_Client1_idx` (`client_id`),
  CONSTRAINT `fk_Accouchement_avant_8_mois_Client1` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id_client`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Accouchement_avant_8_mois`
--

LOCK TABLES `Accouchement_avant_8_mois` WRITE;
/*!40000 ALTER TABLE `Accouchement_avant_8_mois` DISABLE KEYS */;
/*!40000 ALTER TABLE `Accouchement_avant_8_mois` ENABLE KEYS */;
UNLOCK TABLES;

-- -----------------------------------------------------
-- Table `formulaire_accouchement`.`Cesarienne`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Cesarienne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cesarienne` (
  `id_cesarienne` int(11) NOT NULL,
  `cesarienne` tinyint(2) NOT NULL,
  `nb_cesarienne` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id_cesarienne`,`client_id`),
  KEY `fk_Cesarienne_Client1_idx` (`client_id`),
  CONSTRAINT `fk_Cesarienne_Client1` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id_client`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cesarienne`
--

LOCK TABLES `Cesarienne` WRITE;
/*!40000 ALTER TABLE `Cesarienne` DISABLE KEYS */;
/*!40000 ALTER TABLE `Cesarienne` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;


-- -----------------------------------------------------
-- Table `formulaire_accouchement`.`Antecedents_grossesses_precedentes`
-- -----------------------------------------------------
ROP TABLE IF EXISTS `Antecedents_grossesses_precedentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Antecedents_grossesses_precedentes` (
  `id_grossesse_precedente` int(11) NOT NULL AUTO_INCREMENT,
  `prise_en_charge_diagnostic_antenatal` tinyint(2) DEFAULT '0',
  `fausse_couche_tardive_4_ mois` tinyint(2) DEFAULT '0',
  `cerclage_du_col` tinyint(2) DEFAULT '0',
  `menace_accouchement_premature` tinyint(2) DEFAULT '0',
  `diabete_gestationnel` tinyint(2) DEFAULT '0',
  `hypertension_arterielle` tinyint(2) DEFAULT '0',
  `Pre_eclampsie` tinyint(2) DEFAULT '0',
  `hemorragie_de_la_delivrance` tinyint(2) DEFAULT '0',
  `hospitalisation_en_RM_apres_accouchement` tinyint(2) DEFAULT NULL,
  `commentaire_grossesse_precedente` text,
  `cesarienne_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id_grossesse_precedente`,`cesarienne_id`,`client_id`),
  KEY `fk_Antecedents_grossesses_precedentes_Cesarienne1_idx` (`cesarienne_id`),
  KEY `fk_Antecedents_grossesses_precedentes_Client1_idx` (`client_id`),
  CONSTRAINT `fk_Antecedents_grossesses_precedentes_Cesarienne1` FOREIGN KEY (`cesarienne_id`) REFERENCES `Cesarienne` (`id_cesarienne`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Antecedents_grossesses_precedentes_Client1` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id_client`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Antecedents_grossesses_precedentes`
--

LOCK TABLES `Antecedents_grossesses_precedentes` WRITE;
/*!40000 ALTER TABLE `Antecedents_grossesses_precedentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `Antecedents_grossesses_precedentes` ENABLE KEYS */;
UNLOCK TABLES;


-- -----------------------------------------------------
-- Table `formulaire_accouchement`.`Personel`
DROP TABLE IF EXISTS `Personel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Personel` (
  `id_personel` int(11) NOT NULL AUTO_INCREMENT,
  `nom_personel` varchar(50) NOT NULL,
  `matricule` varchar(70) NOT NULL,
  `sexe` char(2) NOT NULL,
  `etat` tinyint(2) DEFAULT '0',
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_personel`),
  UNIQUE KEY `fk_matricule` (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Personel`
--

LOCK TABLES `Personel` WRITE;
/*!40000 ALTER TABLE `Personel` DISABLE KEYS */;
INSERT INTO `Personel` VALUES (1,'fellicite','UI4987','F',1,'ADMIN'),(2,'paul','BGT453','M',1,'ADMIN'),(3,'pamela','UYGT56','F',1,'VISITEUR'),(4,'yvonne','0000','F',1,'VISITEUR'),(5,'esther','56RFED','F',1,'ADMIN'),(6,'laurant','KIJ654','M',0,'VISITEUR'),(7,'medy','5555','M',1,'VISITEUR'),(8,'yannick','123','M',1,'ADMIN'),(9,'rosali','GCD345','F',0,'VISITEUR'),(10,'rodrigue','CFX519','M',1,'VISITEUR'),(11,'franck','BGT814','M',1,'ADMIN'),(12,'mathieu','HYAD34','M',0,'VISITEUR'),(13,'bala','LOPL09','M',0,'ADMIN'),(14,'moussa','VFASE56','M',1,'VISITEUR'),(15,'koner florence','ARDE515','F',1,'VISITERU'),(16,'housman','OAGT13','M',0,'VISITEUR'),(17,'florence','BGTA34','F',1,'VISITEUR'),(18,'eunice','MMM999','F',1,'ADMIN'),(19,'drogbat','HYAG88','M',1,'VISITEUR'),(20,'nounou','FFF342','M',1,'ADMIN');
/*!40000 ALTER TABLE `Personel` ENABLE KEYS */;
UNLOCK TABLES;
-- -----------------------------------------------------
-- Table `formulaire_accouchement`.`Schiphrat`
DROP TABLE IF EXISTS `Schiphrat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Schiphrat` (
  `id_SHPH` int(11) NOT NULL AUTO_INCREMENT,
  `nom_SHPH` varchar(50) NOT NULL DEFAULT 'Schiphrat',
  `nb_personnel` int(11) NOT NULL DEFAULT '10',
  `nb_accouchement` int(11) DEFAULT NULL,
  `nb_cesarienne` int(11) DEFAULT NULL,
  `nb_fausse_couche` int(11) DEFAULT NULL,
  `date_creation` date NOT NULL,
  PRIMARY KEY (`id_SHPH`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Schiphrat`
--

LOCK TABLES `Schiphrat` WRITE;
/*!40000 ALTER TABLE `Schiphrat` DISABLE KEYS */;
INSERT INTO `Schiphrat` VALUES (1,'SCHIPHRAT',20,254,25,4,'1988-12-07'),(2,'SCHIPHRAT',20,254,25,4,'1988-12-07');
/*!40000 ALTER TABLE `Schiphrat` ENABLE KEYS */;
UNLOCK TABLES;

-- -----------------------------------------------------
-- Table `formulaire_accouchement`.`Suivi_grossesse_actuelle`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `Suivi_grossesse_actuelle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Suivi_grossesse_actuelle` (
  `id_grossesse_actuelle` int(11) NOT NULL AUTO_INCREMENT,
  `prise_en_charge_diagnostic_antenal` tinyint(2) DEFAULT NULL,
  `pathologie` varchar(255) DEFAULT NULL,
  `cerclage_du_col` tinyint(2) DEFAULT NULL,
  `diabete_gestationnel` tinyint(2) DEFAULT NULL,
  `hypertension_arterielle` tinyint(2) DEFAULT '0',
  `Pre_eclampsie` tinyint(2) DEFAULT NULL,
  `autre_suivie` varchar(225) DEFAULT NULL,
  `traitement_actuel` varchar(225) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id_grossesse_actuelle`,`client_id`),
  KEY `fk_grossesse_actuelle_Client_idx` (`client_id`),
  CONSTRAINT `fk_grossesse_actuelle_Client` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id_client`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Suivi_grossesse_actuelle`
--

LOCK TABLES `Suivi_grossesse_actuelle` WRITE;
/*!40000 ALTER TABLE `Suivi_grossesse_actuelle` DISABLE KEYS */;
/*!40000 ALTER TABLE `Suivi_grossesse_actuelle` ENABLE KEYS */;
UNLOCK TABLES;


-DROP TABLE IF EXISTS `Domaine_competence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Domaine_competence` (
  `id_domaine_competence` int(11) NOT NULL AUTO_INCREMENT,
  `domaine_competence` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_domaine_competence`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Domaine_competence`
--

LOCK TABLES `Domaine_competence` WRITE;
/*!40000 ALTER TABLE `Domaine_competence` DISABLE KEYS */;
INSERT INTO `Domaine_competence` VALUES (1,'sage femme'),(2,'medecin'),(3,'ecographiste'),(4,'aide soignante'),(5,'infirmiere'),(6,'secretaire '),(7,'service tchenique'),(8,'gardien'),(9,'tresoriere principal'),(10,'tresoriere adjoint');
/*!40000 ALTER TABLE `Domaine_competence` ENABLE KEYS */;
UNLOCK TABLES;
-- -----------------------------------------------------
-- Table `formulaire_accouchement`.`Personel_Domaine_competence`
-- -----------------------------------------------------
CDROP TABLE IF EXISTS `Personel_Domaine_competence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Personel_Domaine_competence` (
  `id_personel_Domaine_competence` int(11) NOT NULL AUTO_INCREMENT,
  `personel_id` int(11) NOT NULL,
  `domaine_competence_id` int(11) NOT NULL,
  PRIMARY KEY (`id_personel_Domaine_competence`,`personel_id`,`domaine_competence_id`),
  KEY `fk_Personel_has_Domaine_competence_Domaine_competence1_idx` (`domaine_competence_id`),
  KEY `fk_Personel_has_Domaine_competence_Personel1_idx` (`personel_id`),
  CONSTRAINT `fk_Personel_has_Domaine_competence_Domaine_competence1` FOREIGN KEY (`domaine_competence_id`) REFERENCES `Domaine_competence` (`id_domaine_competence`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Personel_has_Domaine_competence_Personel1` FOREIGN KEY (`personel_id`) REFERENCES `Personel` (`id_personel`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Personel_Domaine_competence`
--

LOCK TABLES `Personel_Domaine_competence` WRITE;
/*!40000 ALTER TABLE `Personel_Domaine_competence` DISABLE KEYS */;
INSERT INTO `Personel_Domaine_competence` VALUES (1,1,1),(2,2,9),(3,1,2),(4,1,3),(5,12,4),(6,17,5),(7,19,7),(8,12,10),(9,13,6),(10,14,2),(11,2,4),(12,9,5),(13,8,8),(14,7,7),(15,6,6),(16,11,3),(17,3,8),(18,5,5),(19,4,5),(20,5,7),(21,5,4),(22,3,9),(23,3,3),(24,18,5),(25,19,8),(26,20,9),(27,10,10),(28,15,4),(29,16,1),(30,11,1),(31,8,8),(32,13,8),(33,16,5);
/*!40000 ALTER TABLE `Personel_Domaine_competence` ENABLE KEYS */;
UNLOCK TABLES;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `formulaire_accouchement`.`Personel`
-- -----------------------------------------------------
