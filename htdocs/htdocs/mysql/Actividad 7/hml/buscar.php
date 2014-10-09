<?php 

$sTextoBus = '';
if(isset($_GET['buscar'])){
	$sSearch = $_GET['buscar'];

		//conexion a database
	$conexion = mysql_connect('localhost','root','');
	mysql_select_db('tienda', $conexion);

		//Consulta a database
	$sSQL = "SELECT nombre FROM articulos WHERE nombre  LIKE '%$sSearch%'";
	$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());
	$sTextoBus .= '<ul>';
	while($row = mysql_fetch_assoc($resultados)) {
	  	$sTextoBus .= '<li>'.$row['nombre'].'</li>';
	 }
	$sTextoBus .= '</ul>';  
}
 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style>
	#resultado{
		width:250px;
		background-color:#e3e3e3;
	}
	ul{
		margin-left: 0px;

	}
	li{
		margin-left: 0px;
		list-style:none;
		color:red;
	}
	</style>
</head>
<body>
	<form action="buscar.php" method="get">
		<input type="text" name="buscar">
		<input type="submit" value="search">

	</form>
	<div id="resultado">
	<h3>Resultados</h3>
	<?php 
	echo $sTextoBus;


	 ?>
	</div>
</body>
</html>