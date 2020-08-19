--
-- Table structure for table `catalogcategories`
--

CREATE TABLE IF NOT EXISTS 'catalogcategories' (
  `catalogcategoryid` INT NOT NULL AUTO_INCREMENT,
  `categorydescription` VARCHAR(45) NULL,
  `categoryname` VARCHAR(45) NULL,
  PRIMARY KEY (`catalogcategoryid`),
  UNIQUE INDEX `categoryname_UNIQUE` (`categoryname` ASC))
ENGINE = InnoDB
COMMENT = 'Stores all the catalog categories.';