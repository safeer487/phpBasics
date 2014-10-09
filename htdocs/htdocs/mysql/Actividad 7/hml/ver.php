<?php 

//conexion a database
$conexion = mysql_connect('localhost','root','');
mysql_select_db('tienda', $conexion);

//consulta 
	$sSQL = "SELECT * FROM articulos";
	$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

	while($row = mysql_fetch_assoc($resultados)) {
  	echo '<ul>'. '<li>'.$row['nombre'].'</li>'.'</ul>';
  	}






 ?>