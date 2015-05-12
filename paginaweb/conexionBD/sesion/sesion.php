<?php

	session_start();

	//evaluo que la sesión continue verificando una de las variables creadas en control.php, cuando ya no coincida con su valor inicial se redirije al archivo salir.php

	if(!$_SESSION["autentificado"])
	{
		header("Location: salir.php");
	}

?>