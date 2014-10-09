<?php 

//Declaramos un array
$names = array('Manolo', 'Pepa', 'Jacinto');

//echo implode(' - ', $names)


//cambiar pepa por luisa
$names[1] =  'Luisa';

//Añadimos un nuevo nombre
$names[] = 'Toni' ;

for ($i = 0; $i < count($names) ; $i++) { 
	echo $names[$i]. ' ';
}




 ?>
