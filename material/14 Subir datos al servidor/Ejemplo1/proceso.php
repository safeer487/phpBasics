<?php
	
	$legal = $_POST["legal"];
	$nombre = trim($_POST["nombre"]);
	$pwd = trim($_POST["pwd"]);
	$asunto = trim($_POST["asunto"]);
	$provincia = trim($_POST["provincia"]);
	
	//El peso máximo lo debemos indicar en bytes
	//2 Mb * 1024 Kb * 1024 bytes
	$max_size = 2097152;
	
if ($legal == 1) {
	
	if ($_FILES["archivo"]["size"] < $max_size) {
		
		if ($_FILES["archivo"]["type"] == "application/pdf" 
			|| $_FILES["archivo"]["type"] == "image/jpeg") {
			
			$origen = $_FILES["archivo"]["tmp_name"];
			$destino = "almacen/" . trim($_FILES["archivo"]["name"]);
			
			move_uploaded_file($origen,$destino);

		}
		
	} else {
		echo "Lo siento, es demasiado grande (max. 2 Mb)";
	}
	
	
} else {
	echo "<h1>Debes aceptar las condiciones de uso</h1>";
}

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "----------------------------------------------------------";

echo "<pre>";
print_r($_FILES);
echo "</pre>";
	
?>