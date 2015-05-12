<?php
error_reporting(E_ALL ^ E_NOTICE);
// asigno a variables php los valores que vienen del formulario como el campo del emailesta desahabilitadoen el form php no lo reconoce por eso tengo que guardar su valoren un campo oculto}
$email= $_POST["email_hdn"];
$nombre= $_POST["nombre_txt"];
$sexo= $_POST["sexo_rdo"];
$nacimiento= $_POST["nacimiento_txt"];
$telefono = $_POST["telefono_txt"];
$pais = $_POST["pais_slc"];
$titulo = $_POST["titulo_txt"];
$introduccion = $_POST["introduccion_txt"];
$objetivos = $_POST["objetivos_txt"];

include("conexion.php");
//valido que el usuario  exista no este duplicado 

$consulta="SELECT *FROM contactos WHERE email='$email'";
$ejecutar_consulta= $conexion->query($consulta);
//trae el número de registro de consulta, la lógica es que esta variable este en 1 0 2 , 1 es porque el usuario ya exite 0 si no existe si da mas de dos ahí un error de normalización de BD
$num_regs=$ejecutar_consulta->num_rows;

if($num_regs==1)
{
	//actualizo los datos
	//si la foto viene vacia asignamos el valor del botón oculto de la foto que tiene el valor anterior a la busqueda, sino subo la nueva foto y reemplazo el valor---- empty evalua si algo esta vacio
	if(empty($_FILES["foto_fls"]["tmp_name"]))
	{// si la imagen esta vacia entonces el usuario no modifico la imagen, eso es lo que se quiere decir con este if()
		$imagen = $_POST["foto_hdn"];

	}
	else
		{
			//se ejecuta la fución para subir la imagen
			include("funciones.php");
			$tipo=$_FILES["foto_fls"]["type"];
			$archivo=$_FILES["foto_fls"]["tmp_name"];
			$imagen= subir_imagen($tipo,$archivo,$email);

		}
		//actualizo los datos a la BD
		$consulta= "UPDATE contactos SET nombre='$nombre',sexo='$sexo',nacimiento='$nacimiento',telefono='$telefono',pais='$pais',imagen='$imagen',titulo='$titulo',introduccion='$introduccion',objetivos='$objetivos' WHERE email='$email'";
		$ejecutar_consulta= $conexion->query(utf8_encode($consulta));

		if(ejecutar_consulta)
		{
			$mensaje = "Se han hecho los cambios al contacto con email <b>$email</b> :D";
         }
	else
		{
			$mensaje = "No se pudo modificar los datos del  contacto con email <b>$email</b> :__O";
         }
}
else
{
	//si es diferente de uno se manda un mensaje de error
	$mensaje="No se pudieron hacer los cambios en el contacto <b>$email</b>porque no existe o esta duplicado ";
}
$conexion->close();
//redirijo el flujo de la página
header("Location: ../index.php?op=cambios&mensaje=$mensaje");
?>