<?php 

$conexion = mysql_connect('localhost', 'root', '');
mysql_select_db('caballos', $conexion);
//nombreBBDD es el nombre del database
//$conexion es el variable que guardamos
//

/* Consulta */
$sSQL = "SELECT * FROM animales ORDER BY nombre ASC";
$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

/* Obtener datos */
while($row = mysql_fetch_assoc($resultados)) {
  echo "<strong>".utf8_decode($row['nombre'])."</strong><br>";
}




 ?>