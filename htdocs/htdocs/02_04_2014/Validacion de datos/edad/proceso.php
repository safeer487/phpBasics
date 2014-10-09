<?php 
if (!$_POST) {
	header("Location: formulario.php");
	exit;
}
//declarar variable
$iNacimiento = trim($_POST['nacimiento']);

$iBorn = 1900;
$iLim = 2012;

$iError = 0;
 /**
  * 0 => todo bien
  * 1 => No es la edad real
  * 2 => Fecha no valido no soy tonto
  * 3 => Eres menor de edad
  * 4 => La edad tiene que estar numeros
  */
 //una manera
 /*
 if ($iNacimiento > $iBorn && $iNacimiento <$iLim){
 }else{
 	$iError = 1;
 }
 if(strlen($iNacimiento)!= 4){
 	$iError = 2;
 }
 if($iNacimiento > 1995){
 	$iError = 3;
 }*/
//No esta vacío
 if(strlen($iNacimiento) == 0) $iError = 2;

if($iNacimiento < date('Y') && $iNacimiento > (date('Y') - 18)) $iError = 3;

 //fechas no validas
 if($iNacimiento < $iBorn || $iNacimiento >= date('Y')) $iError = 1;

 //Comprbamos que no sea letras
 if(!is_numeric($iNacimiento)) $iError =4;

 if($iError != 0){
 	header("Location:formulario.php?error=".$iError);
 	exit;
 }else{
 	header("Location:formulario.php?ok=1");
 	exit;
 }
 



 ?>