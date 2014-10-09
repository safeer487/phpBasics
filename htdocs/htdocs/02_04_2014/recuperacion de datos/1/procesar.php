<?php 

if ($_POST) {	
	$sEspacie = trim($_POST['especie']);

	$bError = false;
	$iMaxLimEspecie = 10;


	//Primera forma
	if ($sEspacie = '') $bError = true; 

	//Segunda forma
	if (strlen($sEspacie) == 0) $bError = true;

	//Verificamos que no sobrepasa el límite de
	//carácteres
	if (strlen($sEspacie) > $iMaxLimEspecie) $bError = true;
	 
	

	//informamos de si produce algún error
	/*if ($bError) {
		echo 'Se ha producido un error';*/

	/*enviar error al usuario*/
	if($bError){
		header("Location: ejemplovalidar.php?error=1");
		exit;
	}
	else{
		echo "No hay nada mal";
	}
}

 ?>