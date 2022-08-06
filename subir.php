<?php
	if ($_FILES['archivo']['error'] == 0) { //Valida si no hay errores
		$dir = "archivos_verificar/"; //Directorio de carga
		$tamanio = 40000; //Tamaño permitido en kb
    $nombre = htmlspecialchars($_POST["nom"]) . htmlspecialchars($_POST["carr"]);
		$permitidos = array('pdf', 'png', 'jpg', 'jpeg', ); //Archivos permitido
		$ruta_carga = $dir . $_FILES['archivo']['name'];
		//Obtenemos la extensión del archivo
		$arregloArchivo = explode(".", $_FILES['archivo']['name']);
		$extension = strtolower(end($arregloArchivo));
		
		if (in_array($extension, $permitidos)) { //Valida si la extensión es permitida
			
			if ($_FILES['archivo']['size'] < ($tamanio * 1024)) { //Valida el tamaño
				
				//Valida si no existe la carpeta y la crea
				if (!file_exists($dir)) {
					mkdir($dir, 0777);
				}
				
				if (move_uploaded_file($_FILES['archivo']['tmp_name'], $dir.$nombre.'.'.$extension)) {
					//$nuevaURL = "https://ayudaponystecnm.000webhostapp.com/subirs";
					$nuevaURL = "subido";
					header("Location: $nuevaURL.php");
                    die();
					} else {
					echo "Error al cargar archivo";
				}
				} else {
				echo "Archivo excede el tamaño permitido";
			}
			} else {
			echo "Archivo no permitido";
		}
		} else {
		echo "No enviaste archivo";
	}