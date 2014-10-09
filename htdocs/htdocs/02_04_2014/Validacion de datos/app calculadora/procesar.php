<?php 
	
//Tiramos
if(!$_POST){
	header('Location: ejercicio4.php');
	exit;
}



//Variables

$iQuil = $_POST['quilitos'];
$sObjeto = trim($_POST['objeto']);
$sMedida = $_POST['medida'];
$iPeso = $_POST['peso'];
$fResul = 0;
$f24k = 27.7;
$f18k = 19.86;
$f14k = 14.43;
$iPlusAni = 10;
$iPluspul = -30;
$iPlusColg = -20;
$iPlusMin = 0;

$iError = 0;

//print_r($_POST);

/**
 * Tratar los errores
 */

//no esta vacio
if(strlen($iPeso) == 0) $iError= 1;

//Sea números
if(!is_numeric($iPeso)) $iError = 2;

if($iError != 0){
	header('Location: ejercicio4.php?error=' . $iError);
	exit;
}
/**
 * Calculamos
 */
//pasamos a gramos
if($sMedida == 1) $iPeso *= 1000;

//Calculamos el precio
switch($iQuil) {
	case 24:
		$fResul = $f24k * $iPeso;
		break;
	case 18:
		$fResul = $f18k * $iPeso;
		break;
	case 14:
		$fResul = $f14k * $iPeso;
		break;
	
}
//Calculamos el precio
switch($sObjeto) {
	case 1:
		$fResul += $iPlusAni;
		break;
	case 2:
		$fResul += $iPlusColg;
		break;
	case 3:
		$fResul += $iPlusPul;
		break;
	case 4:
		$fResul += $iPlusMin;
		break;
	
}
/**
 * Enviamos el resultado
 */
header('Location: ejercicio4.php?resultado=' .$fResul);
exit;



 ?>