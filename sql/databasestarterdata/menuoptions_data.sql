--
-- Starter data for table `menuoptions`
--

LOCK TABLES `menuoptions` WRITE;

ALTER TABLE `menuoptions` DISABLE KEYS;

INSERT INTO `menuoptions`
      (menuid, menuname, menulevel, parentmenuid, menulink, hassubmenu)
   VALUES
      (1,'Site Map',0,0,'http://www.google.com',''),
      (2,'About',0,0,NULL,''),
      (3,'Blog',0,0,NULL,'\0'),
      (4,'Contact Us',0,0,NULL,'\0'),
      (5,'Web Master',1,2,'http://www.yahoo.com','\0'),
      (6,'Kelowna Designs',1,2,'http://www.google.com','\0'),
      (7,'Blog',1,1,'http://www.kelownadesigns.com/blog/','\0'),
      (8,'Site Owner Login',1,1,'https://a2plcpnl0049.prod.iad2.secureserver.net:2083/','\0');

ALTER TABLE `menuoptions` ENABLE KEYS;

UNLOCK TABLES;
