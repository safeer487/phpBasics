<?php 



if(!$_POST){
	header('Location:index.php');
	exit;
}

$conexion = mysql_connect('localhost', 'root', '');
mysql_select_db('grupos', $conexion);

//recibir variable
$sNom = trim($_POST['nombre']);
$sNomCan = trim($_POST['cantante']);
$iError = 0;

//no puede estar vacios
if(strlen($sNom) == 0 || strlen($sNomCan) == 0) $iError=1;

//no puede estar numeros
if(is_numeric($sNom) || is_numeric($sNomCan)) $iError=2;

if($iError != 0){
	header('Location:index.php?error='.$iError);
}else{
$sSQL = "INSERT INTO miembros VALUES('','$sNom','$sNomCan')";
mysql_query($sSQL, $conexion) or die(mysql_error());
}




 ?>