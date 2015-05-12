/*BD: colección de datos que estan organizados*/

/*Todas las palabras reservadas de sql se van a usar en mayúsculas*/

CREATE DATABASE editor;

/*con este comando digo que BD voy a usar */
USE editor;

/*se crea las tablas dentro del parasentisis se tiene que colocar la información que va almacenar*/

/*contactos(email VARCHAR(50) NOT NULL,)-- email de 50 caracteres al colocar not null le digo que este cámpo no puede estar vacio*/
/*ENGINE=MyISAM--- con esto digo que motor de tablas va usar mysql. en MySQL existen 2 tipos de engine para tablas:
1) MyISAM -> tablas planas como si fuera exel
2)InnDB -> son tablas relacionales
*/

CREATE TABLE contactos(
	email VARCHAR(50) NOT NULL,
	nombre VARCHAR(50)NOT NULL,
	sexo CHAR(1),
	nacimiento DATE, 
	telefono VARCHAR(13),
	imagen VARCHAR(50), 
	PRIMARY KEY(email), 
	/*el fulltext permite hacer busquedas estilo google, lo que yo escriba en el input lo va buscar en los campos que estan acá establecidos, esto solo funciona con el motor MyISAM*/
 	)ENGINE=InnoDB;
/*TABLA PARA LAS NOTAS DEL USUARIO*/
CREATE TABLE notas(
	
	titulo VARCHAR(100),
	introduccion VARCHAR(1000),
	objetivos VARCHAR(1000),
	problema VARCHAR(1000),
	justificacion VARCHAR(1000),
	otro VARCHAR(1000),
	id int PRIMARY KEY,
 ) ENGINE=InnoDB;

/* tabla para el país*/

