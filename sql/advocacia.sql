-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema advocacia
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema advocacia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `advocacia` DEFAULT CHARACTER SET utf8 ;
USE `advocacia` ;

-- -----------------------------------------------------
-- Table `advocacia`.`historico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `advocacia`.`historico` (
  `idhistorico` INT NOT NULL AUTO_INCREMENT,
  `Comentario` VARCHAR(45) NOT NULL,
  `data` VARCHAR(45) NOT NULL,
  `processo_idtable1` INT NOT NULL,
  PRIMARY KEY (`idhistorico`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `advocacia`.`processo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `advocacia`.`processo` (
  `idprocesso` INT NOT NULL AUTO_INCREMENT,
  `Processo` VARCHAR(45) NOT NULL,
  `dataInicial` VARCHAR(45) NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  `cliente_idcliente1` VARCHAR(45) NULL,
  `advogado_idadvogado` VARCHAR(45) NULL,
  PRIMARY KEY (`idprocesso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `advocacia`.`advogado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `advocacia`.`advogado` (
  `idadvogado` INT NOT NULL AUTO_INCREMENT,
  `oab` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  `rg` VARCHAR(45) NOT NULL,
  `Orgaoexpedidor` VARCHAR(45) NOT NULL,
  `numero` VARCHAR(45) NULL,
  `complemento` VARCHAR(45) NULL,
  `bairro` VARCHAR(45) NULL,
  `municipio` VARCHAR(45) NULL,
  `uf` VARCHAR(45) NULL,
  `cpf` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idadvogado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `advocacia`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `advocacia`.`cliente` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  `rg` VARCHAR(45) NOT NULL,
  `Orgaoexpedidor` VARCHAR(45) NOT NULL,
  `numero` VARCHAR(45) NULL,
  `complemento` VARCHAR(45) NULL,
  `bairro` VARCHAR(45) NULL,
  `municipio` VARCHAR(45) NULL,
  `uf` VARCHAR(45) NULL,
  `cpf` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcliente`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
