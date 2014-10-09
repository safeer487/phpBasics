<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	/*isset is used to verify if a varibale have value o no */
	if (isset($_GET['error'])){
		echo 'Debes rellenar el campo.';
	}

	 ?>
	<form action="procesar.php" method="post">
	<input type="text" name="especie">

	<input type="submit" value="Enviar">		

	</form>
</body>
</html>