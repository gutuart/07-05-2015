<?php
error_reporting(E_ALL ^ E_NOTICE);
//Incluyo el archivo de la conexión a la BD

include("conexion.php");
//construyo el query para traer los registros en el select de html
$consulta= "SELECT email FROM contactos ORDER BY email";
$ejecutar_consulta =$conexion->query($consulta);
// Con un while recorro todos los registros generados de la consulta anterior
//Construyo las opciones del select de forma dinámica con los registro de la consulta

// acá no se puede cerra la conexión dado que se necesita mas adelante 
//$conexion->close();

?>