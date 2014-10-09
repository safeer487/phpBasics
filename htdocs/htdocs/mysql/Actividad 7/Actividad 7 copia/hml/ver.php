<?php 

//crear la funcion
/**
 * Mostrar color 
 */
function mostrarColor($insColor){
	return '<div id="color" style="background-color: #' . $insColor.'"></div>';
}



/**
 * Método que imprime el texto del género
 * a partir de id
 * que muestra genero
 */
function mostrarNomGenero($iniGen){
	/*conexion*/
	$conexion = mysql_connect('localhost', 'root', '');
	mysql_select_db('tienda',$conexion);

	/*consulta*/
	$sSQL = "SELECT nombre FROM genero WHERE id = $iniGen";
	$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

	/*obtener datos*/
	while($row = mysql_fetch_assoc($resultados)){
		return $row['nombre'];
	}
}
/**
 * Metodo que imprime el tipo de articulos
 * a partir de id
 * que muestra tipo articulos
 */
function mostrarTipoArticulo($iniGen){
	/*conexion*/
	$conexion = mysql_connect('localhost', 'root', '');
	mysql_select_db('tienda',$conexion);

	/*consulta*/
	$sSQL = "SELECT nombre FROM tipo_articulo WHERE id = $iniGen";
	$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

	/*obtener datos*/
	while($row = mysql_fetch_assoc($resultados)){
		return $row['nombre'];
	}
}




 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>

	table{
		border:2px solid black;
		text-align:center;
		margin:0 auto;
	}
	th,td{
		border:2px solid black;
		padding:5px;
	}
	th{
		color:green;
	}
	#color{
		width:30px;
		height:30px;
		text-align:center;
	}


	</style>
</head>
<body>
	<table>
	<tr>
	<th>Nombre</th>
	<th>Tipo</th>
	<th>Color</th>
	<th>Talla</th>
	<th>Genero</th>
	</tr>
	

<?php 

//conexion a base de datos
$conexion = mysql_connect('localhost','root','');
mysql_select_db('tienda',$conexion);

//Consulta a base de datos
$sSQL = "SELECT * FROM articulos";
$resultados = mysql_query($sSQL,$conexion);

//obtener datos
while($row = mysql_fetch_assoc($resultados)){

	echo '
	
	<tr>
	<td>' . $row['nombre'] . '</td>
	<td>' .mostrarTipoArticulo($row['id_tipo_articulo']). '</td>
	<td>' .mostrarColor($row['color']).' </td>
	<td>' .$row['talla']. '</td>
	<td>' .mostrarNomGenero($row['id_genero']). '</td>
	</tr>	
	
	';
}

 ?>
</table>
</body>
</html>

