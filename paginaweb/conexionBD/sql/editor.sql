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
	contrasena VARCHAR(50), 
	sexo CHAR(1),
	nacimiento DATE, 
	telefono VARCHAR(13),
	pais VARCHAR(50) NOT NULL,
	imagen VARCHAR(50), 
	titulo VARCHAR(100),
	introduccion VARCHAR(100),
	objetivos VARCHAR(100),

	PRIMARY KEY(email), 
	/*el fulltext permite hacer busquedas estilo google, lo que yo escriba en el input lo va buscar en los campos que estan acá establecidos, esto solo funciona con el motor MyISAM*/
	FULLTEXT KEY buscador(email,nombre,sexo,telefono,pais) ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/* tabla para el país*/

CREATE TABLE pais(
	id_pais INT NOT NULL AUTO_INCREMENT,
	pais VARCHAR(50) NOT NULL,
	PRIMARY KEY (id_pais)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*se intreduce los datos de los paises*/

INSERT INTO pais(id_pais,pais)VALUES
	(1,"Colombia"),
	(2,"México"),
	(3,"Guatemala"),
	(4,"España"),
	(5,"Brasil"),
	(6,"Uruguay"),
	(7,"Perú"),
	(8,"Argentina"),
	(9,"Chile"),
	(10,"Paraguay"),
	(11,"Honduras"),
	(12,"El salvador"),
	(13,"Nicaragua"),
	(14,"Costa rica"),
	(15,"Panamá"),
	(16,"Venezuela"),
	(17,"Ecuador"),
	(18,"Bolivia"),
	(19,"Canada"),
	(20,"Estados Unidos"),
	(21,"Groenlandia"),
	(22,"República dominicana"),
	(23,"Haití"),
	(24,"Cuba"),
	(25,"Belice"),
	(26,"Inglaterra"),
	(27,"Francia"),
	(28,"Alemania"),
	(29,"Italia"),
	(30,"China"),
	(31,"Egipto"),
	(32,"Sudafrica"),
	(33,"Australia"),
	(34,"Nueva zelanda"),
	(35,"Pinchote");

