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
$sPeso = $_POST['peso'];

print_r($_POST);
	



 ?>