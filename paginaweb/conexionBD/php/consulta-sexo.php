<br/>
<div>
	<label for="m">Sexo:</label>
	<input type="hidden"name="op"value="consultas"/>
	<input type="radio"id="m"name="sexo_rdo"title="Tu sexo"value="M"required/>
	<label id="lm"for="m">Masculino</label>
	&nbsp;&nbsp;&nbsp;
	<input type="radio"id="f"name="sexo_rdo"title="Tu sexo"value="F"required/>
	<label id="lf"for="f">Femenino</label>

</div>
<input type="submit"id="enviar-buscar"class="cambio"name="enviar_btn"value="buscar"/>
<?php 
	if($_GET["sexo_rdo"]!=null)
	{
		$sexo= $_GET["sexo_rdo"];
		// acá no se coloca el atributo like ya que el usuario en este caso no escribe nada si no selecciona el tipo de sexo. sexo = '$sexo eso es lo que el usuario manda a llamar en la interfaz
		$consulta = "SELECT * FROM contactos WHERE sexo = '$sexo'";
		include("tabla-resultados.php");
	}
 ?>
