<?php
// dado que en select-email se esta incluyendo la conexion.php en el modulo cambios contacto no se pede visualizar los paises ni para subir imagen, al comentar la linea 3 se puede pero en alta contacto ya no se puede por eso se da la siguiente solución.se condiciona  
if(!$registro_contacto["pais"])
{include("conexion.php");}

$consulta="SELECT * FROM pais ORDER BY pais";
$ejecutar_consulta=$conexion->query($consulta);
// mostrar los datos 
while ($registro =$ejecutar_consulta->fetch_assoc()) 
{   // el problema de los acentos se arregla con:
	$nombre_pais=utf8_encode($registro["pais"]);
	echo "<option value='$nombre_pais'";
	if($nombre_pais==utf8_decode($registro_contacto["pais"]))
	{
		echo " selected";
	}
	echo">$nombre_pais</option>";
}
?>