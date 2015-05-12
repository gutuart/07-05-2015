<?php
session_start();

	$emailsesion= $_POST["emailsesion_txt"];
	$contrasena= $_POST["contrasena_txt"];
	$_SESSION["usuario"]= $_POST["emailsesion_txt"];
	include("../php/conexion.php");

		//inicio sesión
	$consulta = "SELECT * FROM contactos WHERE email='$emailsesion' and contrasena= '$contrasena'";
$ejecutar_consulta = $conexion->query($consulta);
// se crea una variable $num_regs, dado que la consulta va generar algún numero de registro, va aguardar esta variable esos registros
if($registro=$ejecutar_consulta->fetch_assoc())
{
	

		//Declaro las variables de sesión
		$_SESSION["autentificado"]=true;
		

	header("Location: ../../index.html");
	
}
else{
	


header("Location: indexsesion.php?error=si");

}



		//envio el flujo de la aplicación

	/*	header("Location: archivo-protegido.php");
	
	else
	{
		header("Location: indexsesion.php?error=si");
	}*/
?>