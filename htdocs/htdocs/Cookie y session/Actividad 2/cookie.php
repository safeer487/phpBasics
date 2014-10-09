<?php 


//Comprueba que recibimos el voto
if($_POST['votar']){
	//Variable
	$sVoto = $_POST['votar'];
	//creamos cookie
	$iTiemp = time() + (60 * 60 * 24 * 30 * 12);
	setcookie('votacion',$sVoto, $iTiemp);
	//volver a refrundum
	header('Location: refrundum.php');
	exit;
}



 ?>