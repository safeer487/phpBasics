<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 
	//Creamos la cookie
	if(isset($_POST['nombre'])){
		//Vida de 10 segundos
		$iTiemp = time() + 10;
		//Creo la cookie
		setcookie('apodo', $_POST['nombre'], $iTiemp);
		//Refresco la pagina
		header('Location: cookieexample.php');
		exit;
	}


	//Muestra el formulario si no existe la cookie
	//Muestra un saludo con el nombre si existe la cookie
	if(!isset($_COOKIE['apodo'])){
	echo'<h2>Dime tu nombre</h2>
	<form action="cookieexample.php" method="post">
		<input type="text" name="nombre">
		<input type="submit" value="guardar">
	</form>';
	}else{ 
		echo '<h2>Hola' .$_COOKIE['apodo']. '</h2>';

	}
	?>
</body>
</html>