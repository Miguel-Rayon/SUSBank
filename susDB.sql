CREATE DATABASE susbank;
USE susbank;

CREATE TABLE `usuarios` (
  `id_user` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(60) DEFAULT NULL,
  `correo` VARCHAR(50) DEFAULT NULL,
  `pass` VARCHAR (20) DEFAULT NULL,
  `curp` VARCHAR(20) DEFAULT NULL,
  `cel` VARCHAR(10) DEFAULT NULL,
  `num_tarjeta` VARCHAR (16) DEFAULT NULL,
  `saldo` INT (8) DEFAULT NULL,
  `clabe` VARCHAR (18) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=INNODB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE `transferencia` (
  `id` INT(12) NOT NULL AUTO_INCREMENT,
  `folio` VARCHAR(5) DEFAULT NULL,
  `clabe` VARCHAR(18) DEFAULT NULL,
  `clabe_env` VARCHAR(18) DEFAULT NULL,
  `monto` INT(8) DEFAULT NULL,
  `concepto` VARCHAR(50) DEFAULT NULL,
  `fecha` DATETIME DEFAULT NULL,
  `id_user` INT(11) DEFAULT NULL,
  PRIMARY KEY  (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `transferencia_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE `servicio`(
  `id_servicio` INT (12) NOT NULL AUTO_INCREMENT,
  `servicio` VARCHAR (20) DEFAULT NULL,
  `cantidad` VARCHAR (5) DEFAULT NULL,
  `referencia` VARCHAR (20) DEFAULT NULL,
  `fecha` DATETIME DEFAULT NULL,
  `id_user` INT(11) DEFAULT NULL,
  PRIMARY KEY  (`id_servicio`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`)
)



