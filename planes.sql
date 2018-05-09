CREATE TABLE `enzo`.`planes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(255) NULL,
  `precio` FLOAT NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`));
