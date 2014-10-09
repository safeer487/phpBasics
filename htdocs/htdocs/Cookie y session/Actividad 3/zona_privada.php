<?php 

//Variable
$bTirar = false;
session_start();

if(!isset($_GET['name']) && !isset($_SESSION['acceso'])){
	header('Location: entrar.php');
	exit;
}

//Crear la session
if(isset($_GET['name'])) {
	$_SESSION['acceso'] = 1;
}
?>