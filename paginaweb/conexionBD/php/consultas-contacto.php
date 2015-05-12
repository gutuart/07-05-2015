<form action="" id="consulta-contacto"name="consulta_form"method="get">
	<fieldset>
		<legend>Consulta de contactos</legend>
		<label for="consulta-lista">Tipo de Consulta:</label>
		<!--menú de selección-->
		<select name="consulta_slc"id="consulta-lista"required>
			<!--la opción para inicializar las opciones es el value-->
			<option value=""<?php if($_GET["consulta_slc"]==""){
				echo " selected";}?>>- - -</option>
			<option value="todos"<?php if($_GET["consulta_slc"]=="todos"){
				echo " selected";}?>>Todos los contactos</option>
			<option value="email"<?php if($_GET["consulta_slc"]=="email"){
				echo " selected";}?>>Por email</option>
			<option value="inicial"<?php if($_GET["consulta_slc"]=="inicial"){
				echo " selected";}?>>Inicial del nombre</option>
			<option value="sexo"<?php if($_GET["consulta_slc"]=="sexo"){
				echo " selected";}?>>Por sexo</option>
			<option value="pais"<?php if($_GET["consulta_slc"]=="pais"){
				echo " selected";}?>>Por país</option>
			<!--se incluye código php con el fin de que cuando el usuario seleccione algo y se refresque la página mantega mostrando lo que escogio-->
			<option value="buscador" <?php if($_GET["consulta_slc"]=="buscador"){
				echo " selected";}?>>Buscador</option>
		</select>
		<?php
		switch ($_GET["consulta_slc"]) {
			case "todos":
				include("php/consulta-todo.php");
				break;

			case "email":
				include("php/consulta-email.php");
				break;

			case "inicial":
				include("php/consulta-inicial.php");
				break;

			case "sexo":
				include("php/consulta-sexo.php");
				break;

			case "pais":
				include("php/consulta-pais.php");
				
				break;

			case "buscador":
				include("php/consulta-buscador.php");
				
				break;
		}
		?>
	</fieldset>
</form>
<!--el siguiente código permite cargar los enlaces que contienen los case en la pantalla dinamicamente-->
<script>
	window.onload = function()
	{
		var lista= document.getElementById("consulta-lista");
		// cuaando se selecciona un elemento de la lista se desencadena un evento que se llama onchange 
		lista.onchange= function()
		{
			// cuando el usuario selecione algo de la lista se refresca la página
			// window.location es como el header en php
			window.location="?op=consultas&consulta_slc="+lista.value;
		};
	}

</script>

