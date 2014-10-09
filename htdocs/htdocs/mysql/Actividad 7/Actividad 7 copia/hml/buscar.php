<?php 
//Comprueba seguridad
require_once 'seguridad.php';

if(isset($_GET['search'])){
	
//recoger variables;
$sSearch = trim($_GET['search']);
$sresult = "";

//Conexion a base de datos
$conexion = mysql_connect('localhost','root','');
mysql_select_db('tienda',$conexion);

//consulta 
$sSQL = "SELECT nombre FROM articulos WHERE nombre  LIKE '%$sSearch%'";
$resultados = mysql_query($sSQL, $conexion);

//obtener datos
while($row = mysql_fetch_assoc($resultados)){
	$sresult .= "
	<tr>
	<td>".$row["nombre"]. "</td>'
	</tr>"
	;

}
$sresult .= '</table>';
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style>
	form{
		margin:0 auto;
	}
	input{
		padding:10px;
		background-color: orange;
		color:white;
		border-style:none;
	}
	input.buscar{
		font-weight: bold;
	}
	a{
		text-decoration:none;
		color:#e3e3e3;
	}

	</style>
</head>
<body>
	<form action="buscar.php" method="get">
		<input type="text" name="search" placeholder="search">
		<input class="buscar" type="submit" value="Buscar"> 
		<a href="../enlaces.php">Volver</a>
	<h3>Resultados</h3>
	<?php 
	echo $sresult;


	 ?>

	</form>
	
</body>
</html>