--
-- Table structure for table `catalogitems`
--

CREATE TABLE IF NOT EXISTS `catalogitems` (
  `itemnumber` INT NOT NULL AUTO_INCREMENT,
  `itemdescription` VARCHAR(45) NULL,
  `itemname` VARCHAR(45) NULL,
  `catalogcategoryid` INT NOT NULL,
  PRIMARY KEY (`itemnumber`, `catalogcategoryid`),
  INDEX `fk_catalogitems_catalogcategories_idx` (`catalogcategoryid` ASC),
  CONSTRAINT `fk_catalogitems_catalogcategories`
    FOREIGN KEY (`catalogcategoryid`)
    REFERENCES `kelownadesignsdb`.`catalogcategories` (`catalogcategoryid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Stores all the category items.';