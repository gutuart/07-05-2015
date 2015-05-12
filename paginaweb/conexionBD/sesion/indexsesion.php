<!DOCTYPE html>

<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Guide Project </title>
	<meta name="description"content="Bienvenido a Guide project"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/><!-- meta especifica. el viewport sirve para que el dispositivo que este visualizando el sitio web lo veo según el ancho del dispositivo -->
	<link rel="shortcut icon" type="image/x-icon" href="../../faviconGp.ico"/>
	<link rel="stylesheet" type="text/css" href="../css/mis-contactos.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		!window.Jquery && document.write("<script src='../../js/jquery.min.js'><\/script>");
	</script>
	<script src="../js/mis-contactos.js"></script>
	<style>
		form{
			/*margen 0 y automatico para que se centre*/
			margin:0 auto;
			text-align: center;
			width: 400px;
			}
			span{
				color:#F00;
				font-size: 2em;
			}
	</style>
</head>

<body>
<section id="contenidosesion">
	<img class="zoom"src="../../img/Titulo.png">
	<article id="principal">
		
	<!--Siempre que se usa la etiqueta form tiene que determinar el nombre y usar la etiqueta action que indica a donde va ir la info del formlario-->
	<form id="alta-contacto"class="cambio"name="autentificación_frm" action="control.php"method="post" entype="application/x-www-form-urlencoded">
		<?php
		// con esta linea de código y (E_ALL^ E_NOTICE) estamos diciendo solamente mandame mensajes de errores que tenga mi aplicación, avizos o alartas no las va a mostrar
		error_reporting(E_ALL^ E_NOTICE);
		////
		if($_GET["error"]=="si")
		{
			echo "<span>Verifica los datos</span>";
		}
		else
		{
			echo "Intoduce los datos";
		}

		?>
		<br/><br/>
		Usuario:
		<input type="text" name="emailsesion_txt"/>
		<br/><br/>
		Password
		<input type="password" name="contrasena_txt">
		<br/><br/>
		<input type="submit"name="entrar_btn"value="Entrar"/>
		<br/><br/>
		<a href="../index.php?op=alta">
		<input type="button"name="registro"value="Registro"/></a>
		<br/><br/>
		<a href="../../index.html">
		<input type="button"name="registro"value="Invitado"/></a>
	</form>
	</article>

</section>
<footer><p><b>&copy; Copyright</b> Fabián Durán <br/><br/></p></footer>	
		
</body>

</html>