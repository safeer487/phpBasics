<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	//Mostramos los errores
	if ($_GET) {
		switch ($_GET['error']) {
			case 1:
				echo 'Debes rellenar el campo.';
				break;
			
			case 2:
				echo 'No debe ser un número.';
				break;
		}
	}

	 ?>
	<form action="procesar.php" method="post">
	<input type="text" name="especie">

	<input type="submit" value="Enviar">		

	</form>
</body>
</html>