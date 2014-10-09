<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
	
	<form action="processo.php" method="post">
		<?php 
		if(isset($_GET['error']))
			switch ($_GET['error']) {
				case 1:
					echo " Nombre no puede estar mas de 20 caracters";
					break;
				case 2:
					echo "No puede estar vacio";
					break;
				case 3:
					echo "Tiene que tener el caracter @ y punto";
					break;
				case 4:
					echo "Asunto no puede tener mas de 100 caracters";
					break;
				case 5:
					echo "Mensaje no puede tener mas de 140 caracters";
					break;
				case 6:
					echo " Mensaje No debe tener el e-mail";
					break;
				case 7:
					echo "Tiene que ser un string";
					break;
				case 8:
					echo "Nombre no puede ser admin";
					break;
				case 9:
					echo "En los campos hay que poner alphabatos numeros no";
					break;
			}
			





		 ?>
		 <br>
		 <br>
		 <br>
		 <br>
		<input type="text" name="nombre" placeholder="Pon tu nombre"><br/>
		<input type="text" name="mail" placeholder="Pon tu email"><br/>
		<input type="text" name="asunto" placeholder="Asunto"><br/>
		<textarea name="mensaje" name="mensaje" cols="30" rows="10" placeholder="Aqui tu mensaje"></textarea><br/>
		<input type="submit" value="Enviar">


	</form>
</body>
</html>