<?php
// Asigno a variables de Php los valores que vienen del formulario
// lo siguiente es un arreglo asociativo, como el metodo que se esta utlilizando es el método post pues se usa $_POST
$email= $_POST["email_txt"];
$nombre= $_POST["nombre_txt"];
$contrasena= $_POST["contrasena_txt"];
$sexo= $_POST["sexo_rdo"];
$nacimiento= $_POST["nacimiento_txt"];
$telefono = $_POST["telefono_txt"];
$pais = $_POST["pais_slc"];
$titulo = $_POST["titulo_txt"];
$introduccion = $_POST["introduccion_txt"];
$objetivos = $_POST["objetivos_txt"];


//dependiendo del sexo se coloca una imagen predeterminada $imagen_generica= (condicion)?true:false;
$imagen_generica= ($sexo=="M")?"amigo.png":"amiga.png";
// se verifica que no exista previamente el email del usuario en la BD
include("conexion.php");
$consulta = "SELECT * FROM contactos WHERE email='$email'";
$ejecutar_consulta = $conexion->query($consulta);
// se crea una variable $num_regs, dado que la consulta va generar algún numero de registro, va aguardar esta variable esos registros
$num_regs =$ejecutar_consulta->num_rows;
// si $num_regs = 0 eso significa que el usuario no existe entonces se inserta los datos a la tabla si existe entonces se le manda un mesaje al usuario diciendo que ya existe
if($num_regs == 0)
{
	//inserto el registro a la BD
	/*1) se ejecuta la funcioón para subir la imagen*/

	include("funciones.php");
	/*la imagen requiere de 3 valores el primero es el tipo: jpg.gif.png---
	para saber que lo anterio se ejcuta la siguiente linea de código	*/
	$tipo = $_FILES["foto_fls"]["type"];
	//se guarda el archivo que se sube
	$archivo = $_FILES["foto_fls"]["tmp_name"];
	//para subir la imagen se necesitan 3 parametros. que tipo de imagen es, el archivo y el email, se usa el email pues la llave y la foto se guarda con el nombre del email. 
	$se_subio_imagen= subir_imagen($tipo,$archivo,$email);
	// se hace una validación con un operador ternario $imagen= (condicion)?true:false;. si la foto en el formulario viene vacia, entonces le asigno el valor de la imagen genérica, si no entonces el nombre de la foto que se subio
	// empty me permite saber si una variable esta vacia
	$imagen= empty($archivo)?$imagen_generica:$se_subio_imagen;
	// se suben los datos del usuario
	$consulta= "INSERT INTO contactos (email,nombre,contrasena,sexo,nacimiento,telefono,pais,imagen,titulo,introduccion,objetivos) VALUES ('$email','$nombre','$contrasena','$sexo','$nacimiento','$telefono','$pais','$imagen','$titulo','$introduccion','$objetivos')";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

	if($ejecutar_consulta)
		$mensaje = "Se ha dado de alta al contacto con email <b>$email</b> :D";
	else
		$mensaje = "No se ha pudo dar de alta al contacto con email <b>$email</b> :__O";


}
else
{
	$mensaje = "No se pudo dar de alta al contacto con el email <b>$email</b> porque ya existe :P";
}
// se cierra la conexion
//$conexion->close(); no cierro la sesión para .... 
// se regresa al indez
header("Location: ../index.php?op=alta&mensaje=$mensaje");


?>