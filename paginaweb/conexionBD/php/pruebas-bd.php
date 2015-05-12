<?php
	//pasos para conectarme a una BD MySQL con PHP
/* para conectarme se usa mysql_connect necesita e datos
1) SERVIDOR
2)USUARIO DE LA BD
3) PASSWORD DEL USUARIO DE LA BD

*/
// or die() funciona como un if si la conexión falla mata el programa
$conexion = mysql_connect("localhost","root","") or die("No se pudo conectar :__O");

	echo "Estoy conectado :___D<br/>";

// ") seleccionar la BD con la que se va a trabajar"
mysql_select_db("mis_contactos")or die("No se pudo seleccionar la vase de BD");
	echo "BD seleccionada mis_contactos<br/>";
// 3) crear consulta SQL

	$consulta = "SELECT * FROM pais";
// 4) ejecutar la constulta SQL
	/*mysql_query: necesita dos parametro:
		1) La consulta
		2) la concexión a la BD*/
	$ejecutar_consulta= mysql_query($consulta,$conexion)or die("La consulta no se pudo relizar en la BD");

	echo "Se ejecuto la consulta SQL<br/>";

//4) mostrar el resultado de la consulta, dentro de un ciclo y en una varible voy a ingresar la función MySQL_fetch_array
// se usa un array asuciativo dado que no se va a llamar el país por su numero de posición si no por el nombre como tal
	while($registro = MySQL_fetch_array($ejecutar_consulta))
	{
		echo $registro["id_pais"]." - ".$registro["pais"]."<br/>";
	}
//6) cerrar la conexión a la BD 

	mysql_close($conexion)or die("No se cerro la sesión");

	echo "conexi&oacute;n cerrada";


?>