<?php

function limpiarNombre($nombre) {
	//$nombre = utf8_decode($nombre);
	$nombre = trim($nombre);
	$nombre = strtolower($nombre);
	$nombre = str_replace(" ", "-", $nombre);
	$nombre = str_replace("_", "-", $nombre);
	$nombre = preg_replace("[!·$%&/()#@',;:]","",$nombre);
	$nombre = preg_replace("[áàâãäÁÀÂÃÄª]","a",$nombre);
	$nombre = preg_replace("[éèêëÉÈÊË]","e",$nombre);
	$nombre = preg_replace("[íìîïÍÌÎÏ]","i",$nombre);
	$nombre = preg_replace("[óòôõöÓÒÔÕÖº]","o",$nombre);
	$nombre = preg_replace("[úùûüÚÙÛÜ]","u",$nombre);
	$nombre = str_replace("ñ","n",$nombre);
	$nombre = str_replace("Ñ","n",$nombre);
	$nombre = str_replace("ç","c",$nombre);
	$nombre = str_replace("Ç","c",$nombre);
	$nombre = str_replace("ß","ss",$nombre);
	$nombre = str_replace("\"","",$nombre);
	
	return time() . "-" . $nombre;
}


	
	$legal = $_POST["legal"];
	$nombre = trim($_POST["nombre"]);
	$pwd = trim($_POST["pwd"]);
	$asunto = trim($_POST["asunto"]);
	$provincia = trim($_POST["provincia"]);
	
	//El peso máximo lo debemos indicar en bytes
	//2 Mb * 1024 Kb * 1024 bytes
	$max_size = 2097152;
	$tipo = $_FILES["archivo"]["type"];
	
if ($legal == 1) {
	
	if ($_FILES["archivo"]["size"] < $max_size) {
		
		if ($tipo == "application/pdf" || $tipo == "image/jpg") {
			
			$origen = $_FILES["archivo"]["tmp_name"];
			$destino = "almacen/" . limpiarNombre($_FILES["archivo"]["name"]);
			
			move_uploaded_file($origen,$destino);
			
		}
		
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