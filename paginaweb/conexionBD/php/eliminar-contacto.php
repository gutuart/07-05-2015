<?php
$email =$_POST["email_slc"];
include ("conexion.php");
$consulta="DELETE FROM contactos WHERE email='$email'";
$ejecutar_consulta = $conexion->query($consulta);

if($ejecutar_consulta)
	$mensaje= "El contacto con el email <b>$email</b> ha sido eliminado con exito!!";
else
	$mensaje= "No se a podido eliminar el contacto <b>$email</b> :_(";

$conexion->close();
header("Location: ../index.php?op=baja&mensaje=$mensaje");

?>




