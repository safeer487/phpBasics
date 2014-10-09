<?php 

require_once('seguridad.php');

 ?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nuevo</title>
	<style>
	a{
		text-decoration:none;
		color:#e3e3e3;
	}
	#error{
		width:50%;
		font-family:Arial;
		background-color:#e3e3e3;
		color:red;
	}

	</style>
</head>
<body>
	<div id="error">
	<ul>
	<?php 



	if(isset($_GET['error'])){
		//Convertimos el serialize en array
		$aErrores = unserialize($_GET['error']);
		//Recorremos el array
		foreach ($aErrores as $key => $value) {
		
			switch ($value) {
				case 1:
					echo "<li>Nombre no puede estar vacio</li>";
					break;
				case 2:
					echo "<li>Nombre no sobrepasa la longitud</li>";
					break;
				case 3:
					echo "<li>El campo de nombre no puede estar vacios</li>";
					break;
				case 4:
					echo "<li>El nombre no puede tener mas de 100 caracters</li>";
					break;
				case 5:
					echo "<li>El campo de talla no puede estar vacio</li>";
					break;
				case 6:
					echo "<li>La talla no puede estar alphabatos</li>";
					break;
	}


		}
			}

	
	 ?>
	 </ul>
	</marquee>
	</div>
	<form action="crearnuevoprocesso.php" method="post">
		<input type="text" name="nombre" placeholder="nombre">
		<select name="ropa" >
			<?php 

			/*Conexion*/
			$conexion = mysql_connect('localhost','root','');
			mysql_select_db('tienda',$conexion);

			/*Consulta*/
			$sSQL = "SELECT id,nombre FROM tipo_articulo";
			$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

			/*Obtener datos */
			while($row = mysql_fetch_assoc($resultados)){
				$iId = $row['id'];
				$sNom = $row['nombre'];
				echo "<option value='$iId'>$sNom</option>";
			}



			 ?>
		</select>
		<input type="color" placeholder="color" name="color">
		<input type="text" name="talla" placeholder="talla">
		<select name="genero">
			<?php 

			/*Consulta*/
			$sSQL = "SELECT id,nombre FROM genero";
			$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

			/*Obtener datos */
			while($row = mysql_fetch_assoc($resultados)){
				$iId = $row['id'];
				$sNom = $row['nombre'];
				echo "<option value='$iId'>$sNom</option>";
			}



			 ?>
			

		</select>
		
		<input type="submit" value="guardar">
		<a href="../enlaces.php">Volver</a>




	</form>
</body>
</html>