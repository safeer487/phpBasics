<?php 

$aAlumnos = unserialize($_POST['alumnos']);
echo '<h1>' .$_POST['hola']. '</h1>';

for ($i=0; $i < count($aAlumnos); $i++) { 
	echo 'El alumno '. ($i + 1) .' es' .$aAlumnos[$i] . '<br>';
}



 ?>