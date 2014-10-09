<?php
	
	$precio = 100000;
	
	$iva = ($precio * 21) / 100;
	
	$subtotal = $precio + $iva;
	
	echo "Precio del Producto: " . $precio . " &euro;";
	echo "<br />";
	echo "IVA: " . $iva . " &euro;";
	echo "<br />";
	echo "Subtotal: " . $subtotal . " &euro;";
	
?>