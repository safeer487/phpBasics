<?php 

$ruta = "./rojo";
$leerdirectorio = opendir($ruta);
while (false !== ($info = readdir($leerdirectorio))) {
	//mostramos el contenido 
	print("$info
	"); 
} 



 ?>