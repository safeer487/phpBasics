<?php 
//cierre la sesion
if(isset($_GET['cerrar'])){
	session_start();
	session_destroy();
}
require_once('hml/seguridad.php');

 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>enlaces</title>
	<style>
	body{
		text-align:center;
	}

	.buttons{
	margin:0 auto;
	text-align:center;
	margin-top:100px;
	background-color:orange;
	width:40%;
	height:15px;
	color:white;
	border-radius:5px;
	padding:15px;
	
	}
	a{
	text-decoration: none;
	float:left;
	margin-left:40px;

	}
	a:link,
	a:visited {
		color:white;
	}
	a:hover,
	a:active{
		color:#e3e3e3;
	}
	div#aprobado{
		margin-top:50px;
		font-weight: bold;
		color:green;
	}


	</style>
</head>
<body>
	<div id="aprobado">
	<?php 
		if(isset($_GET['nuevo'])){
		echo 'Has introducido bien en la base de datos';
		}
		?>
	</div>
	<div class="buttons">
		<a href="hml/ver.php">Ver</a>
		<a href="hml/modificar.php">Modificar</a>
		<a href="hml/eliminar.php">Eliminar</a>
		<a href="hml/Nuevo.php">Nuevo</a>
		<a href="hml/buscar.php">Buscar</a>
		<a href="enlaces.php?cerrar=1">Logout</a>

	</div>
</body>
</html>