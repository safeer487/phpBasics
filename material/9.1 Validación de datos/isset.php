<?php

/*
Forma 1
 */
$bExiste = isset($_GET['pelo']);

if($bExiste) {
	echo 'Tengo el pelo '.$_GET['pelo']; 
}

/*
Forma 2
 */

if(isset($_GET['ojos'])) {
	echo 'Tengo los ojos '.$_GET['ojos']; 
}

/*
Comprobar que llega un formulario
 */

if($_SERVER['REQUEST_METHOD'] == 'GET') {
	echo 'Tengo el pelo '.$_GET['pelo'].' y los ojos '.$_GET['ojos'];
}

?>