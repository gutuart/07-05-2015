<meta charset="utf-8"/>

<div>
		<label for="email">Email:</label>
		<input type="email" id="email"class="cambio"name="email_txt"placeholder="Escribe tu email"title="Tu email" value="<?php echo $registro_contacto["email"]; ?>"disabled required/>
		<!--como se ha colocado el email disabled osea qeu no se puede editar al enviar los datos por automatico se envia vacio, para solocionar este problema se usa un input oculto-->
		<input type="hidden"name="email_hdn"value="<?php echo $registro_contacto["email"]; ?>"/>
	</div>
	
	<div>
    	
    	<!--.......................TITULO........................-->
    	<input type="hidden"id="titulo"class="cambio"name="titulo_txt"placeholder="Escribe tu titulo"title="Tu titulo"value="<?php echo $registro_contacto["titulo"]; ?>"/>
    		<h1"introduccion">Titulo:<h1>
			<textarea id="txta-titulo">
			<?php  echo  $registro_contacto["titulo"]; ?>
			</textarea>
   	</div>
   		<!--.......................INTRODUCCION........................-->

	<div>
       	<input type="hidden"id="introduccion"class="cambio"name="introduccion_txt"placeholder="Escribe tu introduccion"title="Tu introduccion"value="<?php echo $registro_contacto["introduccion"]; ?>" />
       	<h1"introduccion">introduccion:<h1>
    	<textarea id="txta-introduccion">
			<?php  echo  $registro_contacto["introduccion"]; ?>
			</textarea>
	</div>
	<!--.......................OBJETIVOS........................-->
	<div>
    	    	
    	<input type="hidden"id="objetivos"class="cambio"name="objetivos_txt"placeholder="Escribe tu objetivos"title="Tu objetivos"value="<?php echo $registro_contacto["objetivos"]; ?>" />
    	<h1"introduccion">Objetivos:<h1>
    	<textarea id="txta-objetivos">
			<?php  echo  $registro_contacto["objetivos"]; ?>
			</textarea>
	</div>
	<!--.......................Botón submit........................-->
	<div>
		<input type="submit"id="enviar-cambio"class="cambio"name="enviar_btn"value="Modificar"/>
	</div>
	<script language="javascript">

</script>

<body>

<script type="text/javascript">
// con esta función extraigo el valor que el estudiante digita en el textarea, y lo asigna a un input para ser guardado en la BD
$(document).ready(function()
	{
	$("#enviar-cambio").click(function () {
	//saco el valor accediendo a un input de tipo text y name = nombre2 y lo asigno a uno con name = nombre3 
	$("#titulo").val($("#txta-titulo").val());
	$("#introduccion").val($("#txta-introduccion").val());
	$("#objetivos").val($("#txta-objetivos").val());
	

	});	

});
</script>


	