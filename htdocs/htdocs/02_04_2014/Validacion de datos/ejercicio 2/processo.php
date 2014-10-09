<?php 

if(!$_POST){
	header("Location:formulario.php");
	exit;
}
//declarar variable
$sNom = trim($_POST['nombre']);
$sMail = trim($_POST['mail']);
$sAsunto = trim($_POST['asunto']);
$sMensaje = trim($_POST['mensaje']);

$iError = 0;

/**
 * 0 -> todo bien
 * 1 -> Nombre no puede estar mas de 20 caracters
 * 2 -> No puede estar vacio
 * 3 -> Tiene que tener el caracter @ y punto
 * 4 -> Asunto no puede tener mas de 100 caracters
 * 5 -> Mensaje no puede tener mas de 140 caracters
 * 6 -> Mensaje No debe tener el e-mail
 * 7 -> Tiene que ser un string
 * 8 -> Nombre no puede ser admin
 * 9 -> En los campos hay que poner alphabatos numeros no
 */

//no puede estar vacios
if(strlen($sNom) == 0 || strlen($sMail) == 0 || strlen($sAsunto) == 0 || strlen($sMensaje) == 0){
	$iError = 2;
}

//no puede estar numeros
if(is_numeric($sNom) || is_numeric($sMail) || is_numeric($sAsunto)  || is_numeric($sMensaje)) $iError = 9;

//nombre no puede estas mas de 20
if(strlen($sNom) > 20) $iError = 1;

//nombre no puede estar 'admin'
if(strstr($sNom, 'admin'))  $iError = 8;

//mail tiene que tener @ y punto
if(!strstr($sMail, '@') && !strstr($sMail, '.')) $iError = 3;

//asunto no puede tener mas de 100 caracters
if(strlen($sAsunto) > 100) $iError = 4;

//asunto tiene que ser un string
if(!is_string($sAsunto)) $iError = 7;

//mensaje no puede tener mas de 140 caracters
if(strlen($sMensaje) > 140) $iError = 5;

//mensaje no debe tener el e-mail
if(strstr($sMensaje, $sMail)) $iError = 6;

if($iError != 0){
	header("Location: formulario.php?error=".$iError);
	exit;
}else{
	header("Location: formulario.php?ok=1");
	exit;
}




 ?>