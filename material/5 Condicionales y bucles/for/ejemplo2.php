<?php
	/*
	Acumulador de Suma
	*/
	$suma = 0;
	
	for ($i = 1; $i <= 10; $i++) {
		$suma = $suma + $i;
		/*
		echo $suma;
		echo "<br />";
		*/
	}
	
	echo $suma;
	echo "<br />";
	
	/*
	Acumulador de Producto
	*/
	$producto = 1;
	
	for ($i = 1; $i <= 10; $i++) {
		$producto = $producto * $i;
	}
	
	echo $producto;
	
?>