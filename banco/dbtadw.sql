-- MySQL Script generated by MySQL Workbench
-- Fri Nov  8 07:49:31 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema dbtadw
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `dbtadw` ;

-- -----------------------------------------------------
-- Schema dbtadw
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dbtadw` ;
USE `dbtadw` ;

-- -----------------------------------------------------
-- Table `dbtadw`.`tb_cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbtadw`.`tb_cliente` ;

CREATE TABLE IF NOT EXISTS `dbtadw`.`tb_pessoa` (
  `id_pessoa` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `telefone` VARCHAR(14) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  PRIMARY KEY (`id_pessoa`))
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;