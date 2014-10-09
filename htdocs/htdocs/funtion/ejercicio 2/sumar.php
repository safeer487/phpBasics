<?php 

//Comprobamos que nos llega informacion que trabajar, sino
//lo enviamos de vuelta al formulario
if(!$_POST){
	header("Location: formulario.php");
}
$iNum1 = trim($_POST['first']);
$iNum2 = trim($_POST['second']);
$iError = 0;
$iResultado = 0;


//Funcion
/**
 * sumar dos numeros y mostrar
 * @param  $iNum1 is the first number
 * @param  $iNum2 is the second number
 */
function sumar($iniNum1, $iniNum2){
	return $iniNum1 + $iniNum2;
}


//Calculamos
$iResultado = sumar($iNum1,$iNum2);


/** Comprobacines **/

//$numbers no pueden estar leters
if(!is_numeric($iNum1) || !is_numeric($iNum2)) $iError = 1;

//Los campos no pueden estar vacios
if(strlen($iNum1) == 0 || strlen($iNum2) == 0 ) $iError= 2;




/** Envio **/
if($iError == 0){ //sin errores
	header("Location: formulario.php?resultado=" . $iResultado);
	exit;
}else{ //ha pasado algo malo
	header("Location: formulario.php?error=" .$iError);
	exit;
}


 ?>