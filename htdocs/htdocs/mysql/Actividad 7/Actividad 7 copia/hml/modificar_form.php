<?php 

require_once('seguridad.php');

if(!isset($_GET['id'])){
	header('Location:modificar.php');
	exit;
}

//Variables
$iId = $_GET['id'];
$sNom = '';
$iTipo = 0;
$sColor = '';
$iTalla = 0;
$iGen = 0;

//conexion a base de datos
$conexion = mysql_connect('localhost','root','');
mysql_select_db('tienda',$conexion);

//consulta a base de datos
$sSQL = "SELECT * FROM articulos WHERE id= $iId";
$resultado= mysql_query($sSQL,$conexion) or die(mysql_error());

//obtener datos
while($row = mysql_fetch_assoc($resultado)){
	 $sNom   =$row['nombre'];
	 $iTipo  =$row['id_tipo_articulo'];
	 $sColor = '#'.$row['color'];
	 $iTalla =$row['talla'];
	 $iGen =$row['id_genero'];
	
}




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
	<form action="modificarPost.php" method="post">
		<input type="hidden" name="id" value="<?php echo $iId; ?>">
		<input type="text" name="nombre" placeholder="nombre" value="<?php echo $sNom; ?>">
		<select name="ropa">

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
				if($iId == $iTipo){
				echo "<option value='$iId' selected>$sNom</option>";
				}else{
				echo "<option value='$iId'>$sNom</option>";
				}
			}



			 ?>	
			
		</select>
		<input type="color" placeholder="color" name="color" value="<?php echo  $sColor; ?>">
		<input type="text" name="talla" placeholder="talla" value="<?php echo $iTalla; ?>">
		<select name="genero">
			<?php 


			/*Consulta*/
			$sSQL = "SELECT id,nombre FROM genero";
			$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

			/*Obtener datos */
			while($row = mysql_fetch_assoc($resultados)){
				$iId = $row['id'];
				$sNom = $row['nombre'];
				if($iId == $iGen){
				echo "<option value='$iId' selected>$sNom</option>";
				}else{
				echo "<option value='$iId'>$sNom</option>";
				}
			}



			 ?>
			

		</select>
		
		<input type="submit" value="guardar">
		<a href="../enlaces.php">Volver</a>




	</form>
</body>
</html>