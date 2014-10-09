<?php 

//crear archivo 
$fp = fopen("claveTarjeta.txt", "w+");

//escribimos contraseña del banco
fwrite($fp, "Contraseña del banco: *****");
fclose($fp);


 ?>