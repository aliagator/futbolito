
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
-- -----------------------------------------------------
-- Schema futbolito
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `futbolito` DEFAULT CHARACTER SET utf8;
USE `futbolito`;
-- -----------------------------------------------------
-- Table `futbolito`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `futbolito`.`usuario` (
`usuario_id` INT NOT NULL AUTO_INCREMENT,
`nombres` VARCHAR(50) NOT NULL,
`apellidos` VARCHAR(75) NOT NULL,
`correo` VARCHAR(255) NOT NULL,
`password` VARCHAR(255) NOT NULL,
`fecha_creacion` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`usuario_id`),
UNIQUE INDEX `IX_USUARIO_CORREO` (`correo` ASC));
-- -----------------------------------------------------
-- Table `futbolito`.`equipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `futbolito`.`equipo` (
`equipo_id` INT NOT NULL AUTO_INCREMENT,
`nombre` VARCHAR(100) NOT NULL,
`fecha_creacion` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
`usuario_id` INT NOT NULL,
PRIMARY KEY (`equipo_id`),
UNIQUE INDEX `IX_EQUIPO_NOMBRE` (`nombre` ASC),
INDEX `FK_EQUIPO_USUARIO_idx` (`usuario_id` ASC),
CONSTRAINT `FK_EQUIPO_USUARIO`
FOREIGN KEY (`usuario_id`)
REFERENCES `futbolito`.`usuario` (`usuario_id`)
ON DELETE NO ACTION
ON UPDATE NO ACTION)
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `futbolito`.`jugador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `futbolito`.`jugador` (
`jugador_id` INT NOT NULL,
`nombres` VARCHAR(50) NOT NULL,
`apellidos` VARCHAR(75) NOT NULL,
`fecha_nacimiento` TIMESTAMP NOT NULL,
`fecha_creacion` TIMESTAMP NOT NULL DEFAULT current_timestamp,
`equipoid` INT NOT NULL,
PRIMARY KEY (`jugador_id`),
INDEX `FK_JUGADOR_EQUIPO` (`equipoid` ASC),
CONSTRAINT `FK_JUGADOR_EQUIPO`
FOREIGN KEY (`equipoid`)
REFERENCES `futbolito`.`equipo` (`equipo_id`)
ON DELETE NO ACTION
ON UPDATE NO ACTION)
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `futbolito`.`partido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `futbolito`.`partido` (
`partido_id` INT NOT NULL AUTO_INCREMENT,
`fecha` TIMESTAMP NOT NULL,
`local_id` INT NOT NULL,
`local_resultado` TINYINT NOT NULL DEFAULT 0,
`visita_id` INT NOT NULL,
`visita_resultado` TINYINT NOT NULL DEFAULT 0,
PRIMARY KEY (`partido_id`),
INDEX `FK_PARTIDO_LOCAL_idx` (`local_id` ASC),
INDEX `FK_PARTIDO_VISITA_idx` (`visita_id` ASC),
CONSTRAINT `FK_PARTIDO_LOCAL`
FOREIGN KEY (`local_id`)
REFERENCES `futbolito`.`equipo` (`equipo_id`)
ON DELETE NO ACTION
ON UPDATE NO ACTION,
CONSTRAINT `FK_PARTIDO_VISITA`
FOREIGN KEY (`visita_id`)
REFERENCES `futbolito`.`equipo` (`equipo_id`)
ON DELETE NO ACTION
ON UPDATE NO ACTION)
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `futbolito`.`anotacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `futbolito`.`anotacion` (
`anotacion_id` INT NOT NULL AUTO_INCREMENT,
`partido_id` INT NOT NULL,
`jugador_id` INT NOT NULL,
`fecha_hora` TIMESTAMP NOT NULL,
PRIMARY KEY (`anotacion_id`),
INDEX `FK_ANOTACION_PARTIDO_idx` (`partido_id` ASC),
INDEX `FK_ANOTACION_JUGADOR_idx` (`jugador_id` ASC),
CONSTRAINT `FK_ANOTACION_PARTIDO`
FOREIGN KEY (`partido_id`)
REFERENCES `futbolito`.`partido` (`partido_id`)
ON DELETE NO ACTION
ON UPDATE NO ACTION,
CONSTRAINT `FK_ANOTACION_JUGADOR`
FOREIGN KEY (`jugador_id`)
REFERENCES `futbolito`.`jugador` (`jugador_id`)
ON DELETE NO ACTION
ON UPDATE NO ACTION)
ENGINE = InnoDB;
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;