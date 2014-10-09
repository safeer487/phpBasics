<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Identificacion</title>
	<style>
	body{
		margin-left: 50px;
		color:orange;
	}

	form{
		width:200px;
		background-color: #e3e3e3;
	}

	</style>
</head>
<body>
	<h1>Tienda online</h1>
	<?php 
	if(isset($_GET['error'])){
		echo "El nombre o contraseña no correcto";
	}



	 ?>
	<form action="procesar_ide.php" method="post">
		
		<h2>Area de empleados</h2>
		<input type="text" name="nombre" placeholder="Pon tu nombre"><br>
		<input type="password" name="password" placeholder="Contraseña" ><br>
		<input type="submit" value="entrar">
	</form>
	
</body>
</html>