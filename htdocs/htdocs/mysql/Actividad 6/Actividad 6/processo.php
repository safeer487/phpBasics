<?php 

if(!isset($_GET['animales'])){
	header('Location:index.php');
	exit;
}
//Recoger los variables
$snomanim = trim($_GET['animales']);
$iError = 0;
$bExiste = false;

/*
//los campos no tienen que estar vacios
if(strlen($snomanim == 0) || strlen($snomanim == 0)) $iError = 1;

//redirecionamos errors
if($iError != 0){
	header('Location:index.php?error='.$iError);
	exit;
}
*/


//hacer la conexion a la database
$conexion = mysql_connect('localhost', 'root', '');
mysql_select_db('caballos', $conexion);

//Consulta
/* Consulta */
$sSQL = "SELECT nombre FROM animales WHERE nombre like '%$snomanim%' " ;
$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

/* Obtener datos */
	while($row = mysql_fetch_assoc($resultados)) {
  	echo $row['nombre'] . '<br>';
}


 ?>