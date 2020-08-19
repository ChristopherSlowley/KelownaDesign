--
-- Table structure for table `menuoptions`
--

DROP TABLE IF EXISTS `menuoptions`;

CREATE TABLE `menuoptions` (
  `menuid` int(11) NOT NULL AUTO_INCREMENT,
  `menuname` varchar(45) NOT NULL DEFAULT 'menu option',
  `menulevel` int(11) DEFAULT '0',
  `parentmenuid` int(11) DEFAULT '0',
  `menulink` varchar(265) DEFAULT NULL,
  `hassubmenu` bit(1) DEFAULT b'0',
  PRIMARY KEY (`menuid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
