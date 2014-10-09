<?php  

//Comprueba que se ha dado de alta
require_once 'seguridad.php';

if(!isset($_GET['id'])) {
	header('Location: eliminar.php');
	exit;
}

//Variables
$iId = $_GET['id'];

/* Conexion */
$conexion = mysql_connect('localhost', 'root', '');
mysql_select_db('tienda', $conexion);

/* Elimina en la base de datos */
$sSQL = "DELETE FROM articulos WHERE id = $iId;";
mysql_query($sSQL, $conexion) or die(mysql_error());

header('Location: eliminar.php?eliminado=1');
exit;

?>