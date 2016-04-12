DROP TABLE IF EXISTS `tabla_descargas`;

CREATE TABLE `tabla_descargas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hora_descarga` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `tabla_SmartToilet`;

CREATE TABLE `tabla_SmartToilet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_SmartToilet` varchar(45) NOT NULL,
  `ubicacion_SmartToilet` varchar(100) NOT NULL,
  `descripcion_SmartToilet` varchar(200) DEFAULT NULL,
  `token_publico` varchar(8) NOT NULL,
  `token_privado` varchar(8) NOT NULL,
  `propietario_SmartToilet` varchar(100) NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
