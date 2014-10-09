<?php 
/**
 * Metodo que genera una lista desordenada
 * @param  string $insText Texto que tendrá todos los items
 * @param  int $iniLineas Número de items
 */
function crearListaDesordenada($insText, $iniLineas){
	echo "<ul>";
	for ($i=0; $i < $iniLineas; $i++) { 
		echo "<li>$insText</li>";
	}
	echo "</ul>";
}

crearListaDesordenada('Hola a todos', 8);

 ?>