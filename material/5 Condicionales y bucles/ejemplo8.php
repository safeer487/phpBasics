<?php
	
	$a = 8;
	$b = 4;
	
	if($b != 0) {
		echo ($a / $b);
	} else {
		echo "No se puede dividir por CERO";
	}
	
	//Otro Ejemplo
	
	$c = 5;
	
	if ($c > 0) {
		echo "<br />";
		echo "El número " . $c . " es positivo.";
	}
	
	//Otro más
	
	$d = "b";
	
	if ($d < 0) {
		echo "<br />";
		echo "El número " . $d . " es Negativo.";
	} else {
		
		if ($d > 0) {
			echo "<br />";
			echo "El número " . $d . " es positivo";
		} else {
			if($d != 0) {
				echo "<br />";
				echo "no es texto y valido";
			}
		}
		
	}
	
?>