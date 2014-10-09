<?php 
if ($_POST) {
	header('Location: formulario.php');
	
}

//variables
	$sNom = trim($_POST['nombre']);
	$sCorreo = trim($_POST['correo']);
	$sAsunto = trim($_POST['asunto']);
	$sMensaje = trim($_POST['mensaje']);

	//declar variable
	$iError = 0;
	/**
	 * 0 -> todo bien
	 * 1 -> debe rellenar el campo de nombre
	 * 2 -> debe rellenar el campo de correo
	 * 3 -> debe rellenar el campo de asunto
	 * 4 -> debe rellenar el campo de mensaje
	 * 5 -> Tu e-mail debe tener una @
	 * 6 -> debe ser caracters no numbers
	 */
	
//comprobamos si son numeros o alphabets
	if (is_numeric($sNom)) $iError = 6; 
	if (is_numeric($sCorreo)) $iError = 6; 
	if (is_numeric($sAsunto)) $iError = 6; 
	if (is_numeric($sMensaje)) $iError = 6; 

	//Nombre esta vacío
	if ($sNom == "") $iError = 1;

	//Correo esta vacío
	if ($sCorreo == "") $iError = 2;

	//Asunto esta vacío
	if ($sAsunto == "") $iError = 3;

	//Mensaje esta vacío
	if ($sMensaje == "") $iError = 4;

	//correo no tiene @
	if (!strstr($sCorreo, '@')) $iError = 5; 


	//informamos si produce error
	if ($iError != 0) {
		header("Location:ejemplo3.php?error=" .$iError);
		exit;
	}else{
		header("Location:ejemplo3.php?ok=1");
	}
	







 ?>