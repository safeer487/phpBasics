<?php 

if(!$_POST){
	header('Location: identificacion.php');
	exit;
}

//recoger los variables
$sNom = trim($_POST['nombre']);
$sPass = trim($_POST['password']);
$iError = 0;


//conectamos a la base de datos
$conexion = mysql_connect('localhost', 'root', '');
mysql_select_db('tienda', $conexion);

/* Consulta */
$sSQL = "SELECT nombre, contrasenya FROM empleados";
$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

/* Obtener datos */
	while($row = mysql_fetch_assoc($resultados)) {
  	if($row['nombre'] == $sNom && $row['contrasenya'] == $sPass) {
  		
  	}else{

  	//no esta en la base de datos
  	$iError = 1;
  	}
}
if($iError != 0){
	header('Location: identificacion.php?error='.$iError);
	exit;
}else{
	header('Location: enlaces.php');
}



 ?>