<script>
/*al cargar la ventana se genera la siguiente función, se declara una variable y esa va a servir para tomar el valor  del formulario, y con getElementById se obtiene el valor que contiene el valor del valor contacto-lista*/
	window.onload= function()
	{
	var lista= document.getElementById("contacto-lista");
/*al cambiar lista ejecuta una función que se llama seleccionar-contacto*/
	lista.onchange= seleccionarContacto;
	function seleccionarContacto()
	{
		/*cuando haya un cambio en el elemento formulario rederige el flujo o refresca el documento, se pasa por la url varibles, digo que ?op... va ser igual al valor de la lista, refresca el valor de lista,, de esta manera el usuario al seleccionar un email se ejecuta de una y se refresca la página sin necesidad de tener que colocar botones para indicar la acción*/
		window.location="?op=cambios&contacto_slc="+lista.value;
	}
	}	


</script>
<form id="cambio-contacto"name="cambio_frm"action="php/modificar-contacto.php"method="post"enctype="multipart/form-data">
	<fieldset>
		<legend>Notas</legend>
		<div>
			<label for="contacto-lista">Contacto:</label>
				
				
				<?php include("select-email.php"); ?>
				</select>

		</div>
		<?php error_reporting(E_ALL ^ E_NOTICE); session_start();
		// traigo lo siguiente
		
			$conexion2=conectarse();
			$contacto=$_SESSION["usuario"];
			$consulta_contacto="SELECT * FROM contactos WHERE email='$contacto'";
			//echo "el contacto que se selecciono fue:".$contacto;
			//se ejecuta la consulta
			$ejecutar_consulta_contacto= $conexion2->query($consulta_contacto);
			//guardo el query en una variable, se coloca :->fetch_assoc(); porque el contacto se trae por medio de asociación y  no por el el puesto que ocupa
			$registro_contacto= $ejecutar_consulta_contacto->fetch_assoc();
			include("cambio-form.php");
		
		

		?>
		
	

	</fieldset>



</form>