<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editor de texto</title>
	<!--.............................CSS...................-->
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="../css/editor.css"/>
	<!--................................................-->
</head>
<body>
	<div id="contenedor">
		<h1>Comentarios</h1>
		<form method="post" action="">
			<textarea  id="textArea"class="cambio"placeholder="Escriba su nota">aca debe imprimir</textarea>
			<label for="problema">Problema</label>
			<textarea  type="text"id="textArea"class="cambio"placeholder="Escriba su nota"></textarea>
			




			<div id="divBotonk">
				<input type="submit" id="btnGuardar" value="Guardar"/>
				<input type="submit" id="btnCancelar" value="Cancelar"/>
			</div>
		</form>
		
	</div>
	<!--..................JS................-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>
		!window.Jquery && document.write("<script src='js/jquery.min.js'><\/script>");
	</script>
	<script src="script.js"></script>
</body>
</html>