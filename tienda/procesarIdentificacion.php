<?php  

//Comprobamos si tenemos GET
if(!isset($_GET['nombre']) || !isset($_GET['password'])) {
	header('Location: index.php');
	exit;
}

//Variables
$sNom = trim($_GET['nombre']);
$sPass = trim($_GET['password']);
$iId = 0;

/* Conexion */
$conexion = mysql_connect('localhost', 'root', '');
mysql_select_db('tienda', $conexion);

/* Consulta */
$sSQL = "SELECT id FROM empleados WHERE nombre = '$sNom' AND password = '$sPass'";
$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

/* Obtener datos */
while($row = mysql_fetch_assoc($resultados)) {
  $iId = $row['id'];
}

//Comprobamos si existe el usuario
if($iId == 0) { //No existe
	header('Location: index.php?error=1');
	exit;
} else { //Existe
	session_start();
	$_SESSION['usuario'] = $iId;
	header('Location: administracion.php');
	exit;
}

?>