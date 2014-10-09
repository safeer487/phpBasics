<?php 

//Compureba que se ha dado de alta
require_once 'seguridad.php';

if(!isset($_GET['id'])){
	header('Location: eliminar.php');
	exit;
}

	//variables
	$iId = $_GET['id'];


	/*Conexion*/
	$conexion = mysql_connect('localhost', 'root', '');
	mysql_select_db('tienda',$conexion);

	/*Eliminar de la base de datos*/
	$sSQL = "DELETE FROM articulos WHERE id = $iId";
	$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

	header('Location: eliminar.php?eliminado=1');
	exit;
	


 ?>