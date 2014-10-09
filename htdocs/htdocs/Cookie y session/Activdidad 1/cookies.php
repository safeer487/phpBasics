<?php 

//Comprobamos que recibimos post
if($_POST){
	//Variables
	$sNom = $_POST['nombre'];
	//Creamos una cookie con un año de vida
	$iTiemp = (60 * 60 * 24 * 30 * 12) + time();
	setcookie('nickname', $sNom, $iTiem);
	//Volvemos a la primera página
	header('Location: formulario.php');
	exit;
}



 ?>