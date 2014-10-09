<?php

//Funciones tradicionales

function imprimeUnNombre() {
	echo 'Tu nombre es ';
}

imprimeUnNombre();

//Funciones anónimas o clausuras (closures)
//Estas funciones fueron introducidas en 
//PHP 5.3 y su uso es prácticamente igual 
//que cuando definimos funciones en Javascript.

$imprimeUnNombre = function() {
	echo 'Tu nombre es ';
}

$miFuncion(); //Escribe 'Tu nombre es Ruben'

?>