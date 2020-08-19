--
-- Table structure for table `cataloginventory`
--

CREATE TABLE IF NOT EXISTS `cataloginventory` (
  `inventoryid` INT NOT NULL AUTO_INCREMENT,
  `unitprice` FLOAT NULL DEFAULT 0.0,
  `qty` FLOAT NULL DEFAULT 0.0,
  `itemnumber` INT NOT NULL,
  PRIMARY KEY (`inventoryid`, `itemnumber`),
  INDEX `fk_inventory_catalogitems1_idx` (`itemnumber` ASC),
  CONSTRAINT `fk_inventory_catalogitems1`
    FOREIGN KEY (`itemnumber`)
    REFERENCES `kelownadesignsdb`.`catalogitems` (`itemnumber`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Stores the iventory details for the category items. '