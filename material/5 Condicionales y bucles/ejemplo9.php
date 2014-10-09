<?php
	
	$nombre = "Juan";
	$sexo = "hombre";
	
	if ($nombre != "" && $sexo == "hombre") {
		echo "BIENVENIDO " . $nombre;
	} else {
	
		if ($nombre != "" && $sexo == "mujer") {
			echo "BIENVENIDA " . $nombre;
		} else {
			echo "NINGUNA DE LAS ANTERIORES";
		}
	
	}
	
?>