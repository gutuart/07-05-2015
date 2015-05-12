<?php
function conectarse()
{
	// creo las variables
$servidor="localhost";
$usuario="root";
$password="";
$bd="editor";
// me conecto a la bd de la sig manera
$conectar =new mysqli($servidor,$usuario,$password,$bd);
 // como se esta trabajando con una función le decimos que nos regrese la variable con el return
	return $conectar;

}
$conexion = conectarse();
?>