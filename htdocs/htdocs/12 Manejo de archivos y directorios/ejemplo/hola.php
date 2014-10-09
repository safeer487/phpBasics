<?php 

$ruta = "grande";

//Abrir directorio 
$leerdirectorio = opendir($ruta); 

//hacemos un bucle para mostrar el contenido 
while (false !== ($info = readdir($leerdirectorio))) {
	//mostramos el contenido 
	print("$info
	"); 
} 



 ?>