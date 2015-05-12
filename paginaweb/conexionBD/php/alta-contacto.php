<form id="alta-contacto" name="alta_frm" action="php/agregar-contacto.php" method="post" enctype="multipart/form-data">

<fieldset>
	<legend>Registro</legend>
	<div>
		<label for="email">Email:</label>
		<input type="email" id="email"class="cambio"name="email_txt"placeholder="Escribe tu email"title="Tu email" required/>
	</div>
	<div>
    	<label for="nombre">Nombre:</label>
       	<input type="text"id="nombre"class="cambio"name="nombre_txt"placeholder="Escribe tu nombre"title="Tu nombre" />
	</div>
	<div>
    	<label for="contrasena">Contraseña:</label>
       	<input type="password"id="contrasena"class="cambio"name="contrasena_txt"placeholder="Escribe tu nombre"title="Tu contraseña" />
	</div>
	<div>
		<label for="m">Sexo:</label>
		<input type="radio"id="m"name="sexo_rdo"title="Tu sexo"value="M" required/>&nbsp;<label for="m">Masculino</label>
		&nbsp;&nbsp;
		<input type="radio"id="f"name="sexo_rdo"title="Tu sexo"value="F" required/>&nbsp;<label for="f">Femenino</label>
	</div>
	<div>
		<label for="nacimiento">Fecha de nacimieto:</label>
		<input type="date" id="nacimiento"class="cambio"name="nacimiento_txt"title="Tu cumpleaños"required/>
	</div>
	<div>
		<label for="telefono">Telefono:</label>
		<input type="number"id="telefono"class="cambio"name="telefono_txt"placeholder="Escribe tu telefono"title="Tu telefono" required/>
	</div>
	<div>
		<label for="pais">Pais:</label>
		<select id="pais"class="cambio"name="pais_slc" required>
			<option value="">- - -</option>
			<!--se incluye los paises-->
			<?php include("select-pais.php");?>

		</select>
	</div>
	<div>
		<label for="foto">Foto:</label>
		<div class="adjuntar_archivo cambio">
		    <input type="file" id="foto"name="foto_fls"title="Sube tu foto"/>
		    
		</div>
	</div>
	<div>
    	<label for="titulo">titulo:</label>
    	
    	<input type="text"id="titulo"class="cambio"name="titulo_txt"placeholder="Escribe tu titulo"title="Tu titulo" >
	</div>
	<div>
    	<label for="introduccion">introduccion:</label>
    	
    	<input type="text"id="introduccion"class="cambio"name="introduccion_txt"placeholder="Escribe tu introduccion"title="Tu introduccion" />
	</div>
	<div>
    	<label for="objetivos">objetivos:</label>
    	
    	<input type="text"id="objetivos"class="cambio"name="objetivos_txt"placeholder="Escribe tu objetivos"title="Tu objetivos" />
	</div>
	<div>
		<input type="submit"id="enviar-alta"class="cambio"name="enviar_btn"value="Agregar"/>
	</div>
	<!--regresa un mensaje de error o respuesta valida-->
	<?php include("php/mensajes.php");?>
</fieldset>

</form>