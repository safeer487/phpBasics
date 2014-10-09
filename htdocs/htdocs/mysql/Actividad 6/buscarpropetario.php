<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscador de propietarios</title>
</head>
<body>
	<form action="buscarpropetario.php" method="get">
		<label for="propietario">propietario</label>
		<input id="propietario" type="text" name="propietario">
		<input type="submit" value="buscar">
	</form>
	<section id="resultados">


	<?php 
	if(isset($_GET['propietario'])){
		//Obtenemos las variables
	$sPropi = trim($_GET['propietario']);

	//hacer la conexion a la database
	$conexion = mysql_connect('localhost', 'root', '');
	mysql_select_db('caballos', $conexion);

	//Consulta
	/* Consulta */
	$sSQL = "SELECT nombre FROM propietarios WHERE nombre like '%$sPropi%' " ;
	$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

	echo '<ul>';
	/* Obtener datos */
		while($row = mysql_fetch_assoc($resultados)) {
	  	echo '<li>' .$row['nombre'] . '</li>';
	}
	echo '</ul>';
}
	 ?>
	</section>
</body>
</html>