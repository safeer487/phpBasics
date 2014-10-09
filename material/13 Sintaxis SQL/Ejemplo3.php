<?php

/* Conexion */
$conexion = mysql_connect('direccion', 'usuario', 'contraseña');
mysql_select_db('nombreBBDD', $conexion);

/* Consulta */
$sSQL = "SELECT * FROM usuarios ORDER BY nombre ASC";
$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

/* Obtener datos */
while($row = mysql_fetch_assoc($resultados)) {
  echo "<strong>".$row['id']."</strong><br>";
}

/* Resto de operaciones: UPDATE, INSERT INTO, DELETE... */
$sSQL = "DELETE FROM usuarios WHERE id = '1';";
mysql_query($sSQL, $conexion) or die(mysql_error());

?>