<?php 

$conexion = mysql_connect('localhost', 'root', '');
mysql_select_db('caballos', $conexion);

$sSQL = "INSERT INTO animales VALUES('', 'caballo negro',1,2)";
mysql_query($sSQL, $conexion) or die(mysql_error());




 ?>