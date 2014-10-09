<?php 

$fp = fopen("rojo/Colores.txt","w+");

/*Escribimos sobre él*/
fwrite($fp, "texto");
fclose($fp);




 ?>