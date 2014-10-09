<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
	<?php  
	if(isset($_COOKIE['nickname'])){
		echo 'hola de nuevo'. $_COOKIE['nickname'];

	}
	?>
	<form action="cookies.php" method="post">
		<input type="text" name="nombre"><br>
		<input type="submit" value="Guardar">
	</form>
</body>
</html>