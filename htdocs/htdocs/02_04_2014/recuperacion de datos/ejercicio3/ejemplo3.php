


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejemplo3</title>
</head>
<body>
	<?php 
	//Mostrar las variables
	if (isset($_GET['error'])){
		switch ($_GET['error']) {
			case 1:
				echo "Debe rellenar el campo de nombre";
				break;
			case 2:
				echo "Debe rellenar el campo de correo";
				break;
			
			case 3:
				echo "Debe rellenar el campo de asunto";
				break;
			case 4:
				echo "Debe rellenar el campo de mensaje";
				break;
			case 5:
				echo "Tu e-mail debe tener una @";
				break;
			case 6:
				echo "debe ser caracters no numbers";
				break;
		}
	}

	 ?>


	<form action="proceso.php" method="post">
		<input type="text" name="nombre" placeholder="Nombre"><br/>
		<input type="text" name="correo" placeholder="Correo"><br/>
		<input type="text" name="asunto" placeholder="Asunto"><br/>
		<textarea name="mensaje" id="" cols="30" rows="10" placeholder="Aqui escribe tu mensaje"></textarea><br/>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>