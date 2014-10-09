<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>usuario</title>
	<style>
	body{
		color:orange;
	}
	form{
		margin-left: 50px;
	}
	</style>
</head>
<body>
		<?php 
		if(isset($_GET['error'])){
			switch ($_GET['error']) {
				case 1:
					echo "Todos los campos tienen que estar rellenos";
					break;
				
				case 2:
					echo "No puede estar mas de 100 caracters";
					break;
			}
		}



		 ?>

	<form action="precess.php" method="post">
		<h2>Introducza su nombre y Contrasenya</h2>
		<input type="text" name="alias" placeholder="alias"><br/>
		<input type="password" name="password" placeholder="contrasenya"><br/>
		<input type="submit" value="send">
	</form>
</body>
</html>