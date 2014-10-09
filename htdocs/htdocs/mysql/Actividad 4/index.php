<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	form{
		margin-left:50px;
	}
	</style>
</head>
<body>
<h2>Escribe tu nombre y el nombre del cantante</h2>	

<form action="proceso.php" method="post">
	<?php 
	if(isset($_GET['error'])){
		switch ($_GET['error']) {
			case 1:
				echo "Los campos no pueden estar vacios";
				break;
			
			case 2:
				echo "No pueden estar numeros tiene que estar letras";
		}


	}

	 ?><br/><br/>
<input type="text" name="nombre" placeholder="Nombre"><br/>
<input type="text" name="cantante" placeholder="cantante"><br/>
<input type="submit" value="enviar">
	
</form>


</body>
</html>