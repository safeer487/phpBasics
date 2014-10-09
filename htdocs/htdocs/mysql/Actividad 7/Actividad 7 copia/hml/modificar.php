<?php 
//comprueba que esta dada de alta
require_once 'seguridad.php';

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
function mostrarTipoArticulo($iniTipo){
	/*conexion*/
	$conexion = mysql_connect('localhost', 'root', '');
	mysql_select_db('tienda',$conexion);

	/*consulta*/
	$sSQL = "SELECT nombre FROM tipo_articulo WHERE id = $iniTipo";
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
	<title>Modificacion</title>
	<style>
	body{
		text-align: center;
	}
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
	button{
		background-color: red;
		color:white;
	}
	#eliminado{
		color:red;
	}

	</style>
</head>
<body>
	<h2>Modificar</h2>
	<div id="eliminado">
	<?php 
	if(isset($_GET['eliminado'])){
		echo "Has modificado correctamente";
	}
	
	 ?>
	</div>

	<table>
	<tr>
	<th>Nombre</th>
	<th>Tipo</th>
	<th>Color</th>
	<th>Talla</th>
	<th>Genero</th>
	<td></td>
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
	$iId = $row['id'];
	$sNom = $row['nombre'];
	$sTipo = mostrarTipoArticulo($row['id_tipo_articulo']);
	$iColor = mostrarColor($row['color']);
	$iTalla = $row['talla'];
	$sGenero = mostrarNomGenero($row['id_genero']);

	echo "
		<tr> 
		<td>$sNom</td> 
		<td>$sTipo</td>
		<td>$iColor</td>
		<td>$iTalla</td>
		<td>$sGenero</td>
		<td><a href='modificar_form.php?id=$iId'><button type='button'>Modificar</button></a></td>
		</tr> 	
		";
}

 ?>
</table>
</body>
</html>

