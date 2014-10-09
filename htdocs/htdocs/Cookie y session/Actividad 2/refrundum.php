<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Refrundum</title>
</head>
<body>
	<form action="cookie.php" method="post">
		
		<h1>Ley 24F</h1>
		<h2>
			<?php 
			if(isset($_COOKIE['votacion'])){
				echo 'Usted ya ha votado que '.$_COOKIE['votacion'];
			}


		 ?>


		</h2>
		<h3>Usted desea votar a favor de la ley 24F?</h3>
		<input type="radio" value="Si" name="votar" checked> Si <br>
		<input type="radio" value="No" name="votar"> No <br>
		<input type="submit" value="Votar"
		<?php 
			if(isset($_COOKIE['votacion'])){
				echo 'disabled';
			}


		 ?>

		>
	
		
		
	</form>
</body>
</html>