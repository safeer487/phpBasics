<?php 

if ($_POST) {	
	$sEspecie = trim($_POST['especie']);

	$iError = 0;
	/**
	 * 0 -> Todo bien
	 * 1 -> Error: Esta vacio
	 * 2 -> Error: Es un número
	 */


	//Verifica se esta vacío
	if ($sEspecie == '') $iError = 1; 

	//Verifica si es un número
	if (is_numeric($sEspecie)) $iError = 2;

	
	 
	
	//informamos de si produce algún error
	if($iError != 0) {
		header("Location: ejemplovalidar2.php?error=". $iError);
		exit;
	} else {
		echo "No hay nada mal";
	}
}

 ?>