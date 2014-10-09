<?php
	
	$legal = $_POST["legal"];
	
	if ($legal == 1) {
		
		echo "<h1>Has aceptado las Condiciones de Uso</h1>";
		
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		
	} else {
		echo "<h1>Debes aceptar las condiciones de uso</h1>";
	}
	
?>