<?php 
if(!$_POST){
	header('Location:index.php');
	exit;
}

//Comprobamos si llegan los datos
$sAlias =trim($_POST['alias']);
$sPass =trim($_POST['password']);
$bExiste = false;
$iError = 0;
$iLimCamp = 100;

/**
 * Gestion de errores
 */
//Todos los campos tienen que estar rellenos
if(strlen($sAlias) == 0 || strlen($sPass) == 0) $iError = 1;

//Longitud maxima -2
if(strlen($sAlias) > $iLimCamp || strlen($sPass)> $iLimCamp) $iError =2;

//Redireccionamos si se ha producido algun error

if($iError !=0 )	{
	header('Location: index.php?error=' .$iError);
}



//conexion a mysql
$conexion = mysql_connect('localhost','root','');
mysql_select_db('badulaque', $conexion);

//consulta 
	$sSQL = "SELECT alias, password FROM empleados";
	$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());
	
/* Obtener datos */
	while($row = mysql_fetch_assoc($resultados)) {
  	if($row['alias'] == $sAlias && $row['password'] == $sPass) {
  		$bExiste = true;
  	}else{
  	//no esta en la base de datos
  	$iError = 3;
  	}
}





//errors
//no puede estar vacios
if(strlen($sAlias) == 0 || strlen($sPass) == 0) $iError = 1;


if($bExiste){
	header('Location: http://yahoo.es');
	exit;
}else{
	header('Location: index.php?error=1');
}



 ?>