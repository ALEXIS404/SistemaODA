CREATE DATABASE IF NOT EXISTS `sistama_oda`;

CREATE TABLE IF NOT EXISTS `tabla_de_prueba` (
	`valor_n` INT NOT NULL,
	`valor_s` VARCHAR(50) NOT NULL
);

--Creamos una tabla SQL de temas con los parametros
--id_tema como entero y aouto incrementado 
--nombre_tema como texto de 50
--id_tema como llave primaria
CREATE TABLE IF NOT EXISTS `temas` (
	`id_tema` int NOT NULL AUTO_INCREMENT,
	`nombre_tema` VARCHAR (50) NOT NULL,
	PRIMARY KEY (`id_tema`)
);