


<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="procesar.php" method="post">
		<label for="quilitos">Quilitos</label><br/>
		<select name="quilitos" id="quilitos">
			<option value="0">Seleccione</option>
			<option value="24">24</option>
			<option value="18">18</option>
			<option value="14">14</option>
		</select><br/>

		<label for="objeto">Objetos</label><br/>
		<select name="objeto" id="objeto">
			<option value="0">Seleccione</option>
			<option value="1">Anillo</option>
			<option value="2">Pulsera</option>
			<option value="3">Colgante</option>
			<option value="4">Mineral</option>
		</select><br/>

		<label for="medida">Medida</label><br/>
		<select name="medida" id="medida">
			<option value="0">Seleccione</option>
			<option value="1">kg</option>
			<option value="2">gramos</option>
		</select><br/>

		<textarea name="peso" id="peso" cols="30" rows="10" placeholder="Pon tu peso"><?php 
		if(isset($_GET['resultado'])) echo  $_GET['resultado'];

		 ?></textarea><br/>
		<input type="submit" value="Calcular">
	</form>
	<?php 
	if(isset($_GET['error'])){
		switch ($_GET['error']) {
			case '1':
				echo 'El peso es obligatorio.';
				break;
			
			case 2:
				echo 'El peso debe ser numero';
				break;
		}
	}

	 ?>
	
</body>
</html>