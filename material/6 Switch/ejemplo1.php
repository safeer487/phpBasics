<?php
//Integers
	$coche = 1;
	
	switch($coche) {
		case 0:
			echo 'El coche está arrancando';
		break;
		case 1:
			echo 'El coche está acelerando';
		break;
		case 2:
			echo 'El coche está frenando';
		break;
		
		default:
			echo 'El coche está parado';
		break;
		
	}




//Strings	
	$coche = 'arrancando';
	
	switch($coche) {
		
		case 'arrancando':
			echo 'El coche está arrancando';
		break;
		
		case 'acelerando':
			echo 'El coche está acelerando';
		break;
		
		case 'frenando':
			echo 'El coche está frenando';
		break;
		
		default:
			echo 'El coche está parado';
		break;
		
	}
	
?>