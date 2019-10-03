# Harjoitustyo_S19
CREATE DATABASE 'Projekti';

USE 'Projekti;

CREATE TABLE IF NOT EXISTS `Projekti`.`customer` (
  `idcustomer` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(200) NOT NULL,
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `address` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NULL,
  `phonenumber` VARCHAR(45) NULL,
  PRIMARY KEY (`idcustomer`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Projekti`.`cart` (
  `idcart` INT NOT NULL AUTO_INCREMENT,
  `idcustomer` INT NOT NULL,
  PRIMARY KEY (`idcart`),
  INDEX `idcustomer1_idx` (`idcustomer` ASC),
  CONSTRAINT `idcustomer1`
    FOREIGN KEY (`idcustomer`)
    REFERENCES `Projekti`.`customer` (`idcustomer`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Projekti`.`productcategory` (
  `idproductcategory` INT NOT NULL AUTO_INCREMENT,
  `categoryname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idproductcategory`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Projekti`.`product` (
  `idproduct` INT NOT NULL AUTO_INCREMENT,
  `brand` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `size` VARCHAR(45) NOT NULL,
  `stock` INT NOT NULL,
  `price` FLOAT NOT NULL,
  `idproductcategory` INT NOT NULL,
  PRIMARY KEY (`idproduct`),
  INDEX `idproductcategory1_idx` (`idproductcategory` ASC),
  CONSTRAINT `idproductcategory1`
    FOREIGN KEY (`idproductcategory`)
    REFERENCES `Projekti`.`productcategory` (`idproductcategory`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Projekti`.`product_cart` (
  `idproduct_cart` INT NOT NULL AUTO_INCREMENT,
  `idproduct` INT NOT NULL,
  `idcart` INT NOT NULL,
  `amount` INT NOT NULL,
  PRIMARY KEY (`idproduct_cart`),
  INDEX `idproduct1_idx` (`idproduct` ASC),
  INDEX `idcart1_idx` (`idcart` ASC),
  CONSTRAINT `idproduct1`
    FOREIGN KEY (`idproduct`)
    REFERENCES `Projekti`.`product` (`idproduct`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `idcart1`
    FOREIGN KEY (`idcart`)
    REFERENCES `Projekti`.`cart` (`idcart`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Projekti`.`updates` (
  `idupdates` INT NOT NULL AUTO_INCREMENT,
  `date` DATETIME NOT NULL,
  `action` VARCHAR(45) NULL,
  PRIMARY KEY (`idupdates`))
ENGINE = InnoDB;