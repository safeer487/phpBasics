<?php

/****** Matrices, o también llamados arrays multidimensionales,
 son un estructuras de datos que almacenan los valores 
 en más de una dimensión. Son como tablas o matrices ******/

//Simple
$aaMira = array(
		array(66, 77, 55), 
		array(88,99, 11)
	);

echo $aaMira[1][2];

//Asignado 
 $aaFruta = array(
 'naranja' => array(
                   'propiedad' => 'jugosa',
                   'color' => 'naranja',
                   'sabor' => 'dulce'
                   ),
 'limón' => array(
                   'propiedad' => 'jugoso',
                   'color' => 'amarillo',
                   'sabor' => 'cítrico'
                   )
 );
 
 echo $aaFruta['limón']['color'];
 
 ?>
