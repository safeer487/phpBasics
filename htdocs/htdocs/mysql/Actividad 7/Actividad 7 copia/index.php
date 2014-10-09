<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<style>
	body{
		margin-left:0px;
	}
	h1{

	}
	form{
		font-family: Arial;
		width:100%;
		background-color:#e3e3e3;
		margin:50px 0px 0px 0px;
		padding:50px;


	}
	.campo {
		width:70%;
		

	}
	h1{
		font-size:50px;
		color:white;
	}

	

	</style>
</head>
<body>
	
	
	<form action="processar_ide.php" method="get">

		<h1>Identificate!</h1>
		<?php 
		if(isset($_GET['error'])){
		echo "El nombre de usuario o cotrasenya no esta bien";
		echo "<br>";
		echo "<br>";

		}

	 	?>
		<label for="nombre"id="nombre">Nombre</label><br>
		<input class="campo" type="text" name="nombre" placeholder="nombre"><br>
		<label for="pass" id="pass">Password</label><br>
		<input class="campo" type="password" name="pass" placeholder="Contrasenya"><br>
		<input type="submit" value="send">
	</form>
</body>
</html>