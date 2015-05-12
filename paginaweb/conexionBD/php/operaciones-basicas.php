<?php
	$conexion = mysql_connect("localhost","root","")or die("No se conecto con el servidor");
	echo "Estoy conectado :___D<br/>";

	mysql_select_db("mis_contactos")or die ("No se pudo seleccionar la vase de BD");
	echo "BD seleccionada <b>mis_contactos<b/><br/>";
	echo "<h1>Las 4 operaciones b&aacute;sicas  a una bd</h1>";
	echo "<h2>1) Inserci&oacute;n de datos</h2>";
	// realizar consulta INSERT INTO nombre de la tabla( campos_tabla) VALUES(valores_campos)
$consulta = "INSERT INTO contactos (email, nombre, sexo, nacimiento, telefono, pais, imagen)VALUES('otro@hotmail.com','Andres','M','1991-01-11','3017772355','Colombia','otraImagen.jpg')";
$ejecutar_consulta= mysql_query($consulta,$conexion);
echo "Datos insertados<br/>";

// eliminar datos
echo "<h2>eliminar datos R.P.I</h2>";
//DELETE FROM nombre_tabla WHERE campo = valor
$consulta ="DELETE FROM contactos WHERE email = 'mela@hotmail.com'";
$ejecutar_consulta= mysql_query($consulta,$conexion);
echo "Datos Borrado Juajjajaja JUajajaj .i. <br/>";
// actualizar o modificar
echo "<h2>1) Modificacioacute;n de datos</h2>";
// UPDATE nombre_tabla SET nombre_campo = valor, otro campo = otro valor, ...

$consulta = "UPDATE contactos SET email = 'gabo@hot.com',nombre = 'javier', imagen= ':O.png' WHERE email = 'mela_11@hotmail.com'";
$ejecutar_consulta= mysql_query($consulta,$conexion);
echo "Datos actualizados <br/>";

echo "<h2>Consultas (busqueda) de datos</h2>";

//SELECT * FROM nombre_tabla WHERE campo= valor
$consulta ="SELECT * FROM contactos ";
$ejecutar_consulta= mysql_query($consulta,$conexion);
echo "<h2>Consultas que muestra todos los contactos</h2>";
while($registro=mysql_fetch_array($ejecutar_consulta))
{
echo $registro["email"]."---";
echo $registro["nombre"]."---";
echo $registro["sexo"]."---";
echo $registro["nacimiento"]."---";
echo $registro["telefono"]."---";
echo $registro["pais"]."---";
echo $registro["imagen"]."---";
echo "<br/>";
}
/////////////////////////////
$consulta ="SELECT * FROM contactos WHERE email= 'mela_11@hotmail.com'";
$ejecutar_consulta= mysql_query($consulta,$conexion);
echo "<h2>Consultas que muestra lo que hay en mela_11@hotmail.com </h2>";
while($registro=mysql_fetch_array($ejecutar_consulta))
{
echo $registro["email"]."---";
echo $registro["nombre"]."---";
echo $registro["sexo"]."---";
echo $registro["nacimiento"]."---";
echo $registro["telefono"]."---";
echo $registro["pais"]."---";
echo $registro["imagen"]."---";
echo "<br/>";
}
////////////////////////
$consulta ="SELECT * FROM contactos WHERE nombre= 'Andres' AND imagen='imagen.jpg'";
$ejecutar_consulta= mysql_query($consulta,$conexion);
echo "<h2>Consultas de los que se llaman andres y tienen la misma imagen </h2>";
while($registro=mysql_fetch_array($ejecutar_consulta))
{
echo $registro["email"]."---";
echo $registro["nombre"]."---";
echo $registro["sexo"]."---";
echo $registro["nacimiento"]."---";
echo $registro["telefono"]."---";
echo $registro["pais"]."---";
echo $registro["imagen"]."---";
echo "<br/>";
}
mysql_close($conexion);
echo "Fin de sesi&oacute;n";
?>