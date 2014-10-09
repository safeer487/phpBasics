<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ejemplo</title>
	<style type="text/css">
	#error{

	}
	</style>
</head>
<body>
	<h2>Dime en que año naciste</h2>
	<div id="error">
		<p>
			<?php

			if(isset($_GET['error'])){
				switch ($_GET['error']) {
					case 1:
						echo "No es la edad real";
						break;
					
					case 2:		
						echo "fecha no valido. No soy tonto.";
						break;
					case 3:
						echo "Eres menor de edad";
						break;
					case 4:
						echo "La edad tiene que estar en numeros";
						break;
				}
			}


	 ?>
	 	</p>
	 </div>
	<form action="proceso.php" method="post">
		<label for="nacimiento">Fecha de Nacimiento</label><br/>
		<input type="text" id="nacimiento" name="nacimiento" placeholder="Año de nacimiento"><br/>
		<input type="submit" value="send">

	</form>
	
</body>
</html>