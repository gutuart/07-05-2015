<?php
error_reporting(E_ALL ^ E_NOTICE);

if(isset($_GET["mensaje"]))
{	//guardo la variable mensaje que viene por get
	$mensaje = $_GET["mensaje"];
	echo"<br/><span class='mensajes'>$mensaje</span><br/>";
}
?>