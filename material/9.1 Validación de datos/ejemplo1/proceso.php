<?php
	
	$legal = $_POST["legal"];
	$nombre = trim($_POST["nombre"]);
	$pwd = trim($_POST["pwd"]);
	$asunto = trim($_POST["asunto"]);
	$provincia = trim($_POST["provincia"]);
	
	
	if($legal == 1) {
	
		if($nombre != "" && $pwd != "" && $asunto != "" && $provincia != "") {
		
			echo "<h1>Has aceptado las Condiciones de Uso y sigo con el envio</h1>";
			
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
		
		} else {
			echo "<h1>Todos los campos deben estar rellenos</h1>";
		}
		
	} else {
		echo "<h1>Debes aceptar las condiciones de uso</h1>";
	}
	
?>