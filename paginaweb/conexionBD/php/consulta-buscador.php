<br/>
<div>
	<input type="hidden"name="op"value="consultas"/>
	<label for="buscador">Buscador: </label>
	<input type="search"id="buscador"class="cambio"name="q"placeholder="Escribe la consulta"title="Buscar"/>
</div>
<input type="submit"id="enviar-buscar"class="cambio"name="enviar_btn"value="buscar"/>
<?php 
if($_GET["q"]!=null)
{
	$q=$_GET["q"];
//like '%$email%' con ese código digo que compare lo que escribio el ususario en la caja de textos con el los email sihay texto similar
$consulta= "SELECT * FROM contactos WHERE MATCH(email,nombre,sexo,telefono,pais) AGAINST('$q' IN BOOLEAN MODE)" ;

include("tabla-resultados.php");
}
 ?>