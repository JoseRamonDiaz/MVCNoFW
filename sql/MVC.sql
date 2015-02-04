SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Materia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Materia` (
  `idMateria` INT NOT NULL AUTO_INCREMENT,
  `NombreMateria` VARCHAR(45) NOT NULL,
  `NumCreditos` INT NOT NULL,
  `Semestre` VARCHAR(45) BINARY NOT NULL,
  `Obligatoria` VARCHAR(45) BINARY NOT NULL,
  PRIMARY KEY (`idMateria`),
  UNIQUE INDEX `idMateria_UNIQUE` (`idMateria` ASC),
  UNIQUE INDEX `NombreMateria_UNIQUE` (`NombreMateria` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Maestro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Maestro` (
  `idMaestro` INT NOT NULL AUTO_INCREMENT,
  `NombreMaestro` VARCHAR(45) NOT NULL,
  `ApellidosMaestro` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idMaestro`),
  UNIQUE INDEX `idMaestro_UNIQUE` (`idMaestro` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `NombreUsuario` VARCHAR(45) NOT NULL,
  `ApellidosUsuario` VARCHAR(45) NOT NULL,
  `NombreDespliegue` VARCHAR(45) NULL,
  `Contrseña` VARCHAR(45) NOT NULL,
  `CorreoElectronico` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE INDEX `idUsuario_UNIQUE` (`idUsuario` ASC),
  UNIQUE INDEX `CorreoElectronico_UNIQUE` (`CorreoElectronico` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Examen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Examen` (
  `idExamen` INT NOT NULL AUTO_INCREMENT,
  `NumeroParcial` VARCHAR(45) NOT NULL,
  `Maestro_idMaestro` INT NOT NULL,
  `Materia_idMateria` INT NOT NULL,
  `IntrucionesExamen` LONGTEXT NULL,
  PRIMARY KEY (`idExamen`),
  UNIQUE INDEX `idExamen_UNIQUE` (`idExamen` ASC),
  INDEX `fk_Examen_Maestro1_idx` (`Maestro_idMaestro` ASC),
  INDEX `fk_Examen_Materia1_idx` (`Materia_idMateria` ASC),
  CONSTRAINT `fk_Examen_Maestro1`
    FOREIGN KEY (`Maestro_idMaestro`)
    REFERENCES `mydb`.`Maestro` (`idMaestro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Examen_Materia1`
    FOREIGN KEY (`Materia_idMateria`)
    REFERENCES `mydb`.`Materia` (`idMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Tareas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Tareas` (
  `idTareas` INT NOT NULL AUTO_INCREMENT,
  `NumeroParcial` VARCHAR(45) NOT NULL,
  `Materia_idMateria` INT NOT NULL,
  `Maestro_idMaestro` INT NOT NULL,
  `InstruccionesTarea` LONGTEXT NULL,
  PRIMARY KEY (`idTareas`),
  UNIQUE INDEX `idTareas_UNIQUE` (`idTareas` ASC),
  INDEX `fk_Tareas_Materia1_idx` (`Materia_idMateria` ASC),
  INDEX `fk_Tareas_Maestro1_idx` (`Maestro_idMaestro` ASC),
  CONSTRAINT `fk_Tareas_Materia1`
    FOREIGN KEY (`Materia_idMateria`)
    REFERENCES `mydb`.`Materia` (`idMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tareas_Maestro1`
    FOREIGN KEY (`Maestro_idMaestro`)
    REFERENCES `mydb`.`Maestro` (`idMaestro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Maestro_has_Materia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Maestro_has_Materia` (
  `Maestro_idMaestro` INT NOT NULL,
  `Materia_idMateria` INT NOT NULL,
  PRIMARY KEY (`Maestro_idMaestro`, `Materia_idMateria`),
  INDEX `fk_Maestro_has_Materia_Materia1_idx` (`Materia_idMateria` ASC),
  INDEX `fk_Maestro_has_Materia_Maestro1_idx` (`Maestro_idMaestro` ASC),
  CONSTRAINT `fk_Maestro_has_Materia_Maestro1`
    FOREIGN KEY (`Maestro_idMaestro`)
    REFERENCES `mydb`.`Maestro` (`idMaestro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Maestro_has_Materia_Materia1`
    FOREIGN KEY (`Materia_idMateria`)
    REFERENCES `mydb`.`Materia` (`idMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Enlaces`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Enlaces` (
  `idEnlaces` INT NOT NULL AUTO_INCREMENT,
  `Materia_idMateria` INT NOT NULL,
  PRIMARY KEY (`idEnlaces`),
  UNIQUE INDEX `idEnlaces_UNIQUE` (`idEnlaces` ASC),
  INDEX `fk_Enlaces_Materia1_idx` (`Materia_idMateria` ASC),
  CONSTRAINT `fk_Enlaces_Materia1`
    FOREIGN KEY (`Materia_idMateria`)
    REFERENCES `mydb`.`Materia` (`idMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Apuntes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Apuntes` (
  `idApuntes` INT NOT NULL AUTO_INCREMENT,
  `NumeroParicial` VARCHAR(45) NOT NULL,
  `ApuntesTexto` LONGTEXT NOT NULL,
  `Materia_idMateria` INT NOT NULL,
  `Maestro_idMaestro` INT NOT NULL,
  PRIMARY KEY (`idApuntes`),
  UNIQUE INDEX `idApuntes_UNIQUE` (`idApuntes` ASC),
  INDEX `fk_Apuntes_Materia1_idx` (`Materia_idMateria` ASC),
  INDEX `fk_Apuntes_Maestro1_idx` (`Maestro_idMaestro` ASC),
  CONSTRAINT `fk_Apuntes_Materia1`
    FOREIGN KEY (`Materia_idMateria`)
    REFERENCES `mydb`.`Materia` (`idMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Apuntes_Maestro1`
    FOREIGN KEY (`Maestro_idMaestro`)
    REFERENCES `mydb`.`Maestro` (`idMaestro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
