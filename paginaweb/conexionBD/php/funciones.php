<?php
// El parametro de la $extension determina que tipo de imagenno se borrará por ejemplo si es jpg significa que la imagen con extension .jpg se queda ene lservidor y si existen imagenes con el mismo nombre pero con extension png o gif se elimanaran con esta función evito tener imagenes duplicadas con distinta extensiones para cada perfil la fumción file_exists evalua si un archivo eistent y la función unlink borra un archivo del servidor
function borrar_imagenes($ruta,$extension)
{
	switch ($extension) {
		case ".jpg":
			 if(file_exists($ruta.".png"))
			 unlink($ruta.".png");
			if(file_exists($ruta.".gif"))
			 unlink($ruta.".gif");

			break;
			///////////// GIf
			case ".gif":
			 if(file_exists($ruta.".png"))
			 unlink($ruta.".png");
			if(file_exists($ruta.".jpg"))
			 unlink($ruta.".jpg");
			 
			break;
			////////////////////PNG
			case ".png":
			 if(file_exists($ruta.".jpg"))
			 unlink($ruta.".jpg");
			if(file_exists($ruta.".gif"))
			 unlink($ruta.".gif");
			 
			break;
		
		
	}
}

//función para subir la imagen del perfil del usuario

function subir_imagen($tipo,$imagen,$email)
{
	//strstr($cadena1,$cadena2) sirve para evaluar si en la primer cadena de texto existe la segunda cadena de texto
	//si dentro del tipo del archivo se encuentra la palabra image significa que el arvchivo es una imagen
	if(strstr($tipo,"image"))
	{
		//EL archivo si se una  imagen
		//para saber que tipo de extensión es la imagen, esto se hace con el fin de cuando el usuario cambie de imagen, elimine la anterior independiente de que fomrato sea
		if(strstr($tipo,"jpeg"))
			$extension = ".jpg";
		else if (strstr($tipo,"gif")) 
			$extension = ".gif";
		else if (strstr($tipo,"png")) 
			$extension = ".png";
		// para saber si la imagen tiene el ancho correcto que es de 420px

		$tam_img= getimagesize($imagen);
		$ancho_img= $tam_img[0];
		$alto_img= $tam_img[1];
		$ancho_img_deseado= 420;
		//si la imagen es mayor en su ancho 420px , reajusto su tamaño
		if($ancho_img>$ancho_img_deseado)
		{
			//reajustamos
			// por una regla de 3 obtengo el atlo de la imagen de manera proporcional al ancho nuevo que sera de 420
			$nuevo_ancho_img= $ancho_img_deseado;
			$nuevo_alto_img= ($alto_img/$ancho_img)*$nuevo_ancho_img;
			// como vamos a crear una nueva imagen desde php, creo una imagen en color real con nuevas dimensiones
			$img_reajustada= imagecreatetruecolor($nuevo_ancho_img,$nuevo_alto_img);
			// creo una imagen basada en la original dependiendo de su extensión es el tipo que creare
			switch ($extension) {
				case ".jpg":
					$img_original = imagecreatefromjpeg($imagen);
					// reajusto la imagen nueva con respecto a la original
					imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
					//Guardo la imagen reescalada en el servidor
					$nombre_img_ext= "../img/fotos/".$email.$extension;
					$nombre_img = "../img/fotos/".$email;
					imagejpeg($img_reajustada,$nombre_img_ext,100);
					borrar_imagenes($nombre_img,".jpg");
					break;
					////////////////////////GIF
					case ".gif":
					$img_original = imagecreatefromgif($imagen);
					// reajusto la imagen nueva con respecto a la original
					imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
					//Guardo la imagen reescalada en el servidor
					$nombre_img_ext= "../img/fotos/".$email.$extension;
					$nombre_img = "../img/fotos/".$email;
					imagegif($img_reajustada,$nombre_img_ext,100);
					borrar_imagenes($nombre_img,".gif");
					break;
					/////////////////PNG
					case ".png":
					$img_original = imagecreatefrompng($imagen);
					// reajusto la imagen nueva con respecto a la original
					imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
					//Guardo la imagen reescalada en el servidor
					$nombre_img_ext= "../img/fotos/".$email.$extension;
					$nombre_img = "../img/fotos/".$email;
					imagepng($img_reajustada,$nombre_img_ext);
					borrar_imagenes($nombre_img,".png");
					break;
				
				
			}
		}
		else
		{
			// no se reajusta y se sube la imagen
			//guardo la ruta que tendra en el servidor la imagen
			$destino="../img/fotos/".$email.$extension;

			// se sube la foto
			move_uploaded_file($imagen,$destino) or die("No se pudo subir una imagen al servidor :_(");

				//Ejecuto la función para  borrar posibles imagenes dobles para el perfil
				$nombre_img= "../img/fotos/".$email;
				borrar_imagenes($nombre_img,$extension);
		}
		// si todo salio bien asigno el nombre de la foto que se guardará en laBD como cadena de texto
		$imagen= $email.$extension;
		return $imagen;

	}
	else
	{
		return false; 
	}
}
?>