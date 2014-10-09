<?php 

require_once 'seguridad.php';

if(!$_POST){
	header('Location: ../enlaces.php');
	exit;
}

//Variables
$iId = trim($_POST['id']);
$sNom = trim($_POST['nombre']);
$sRopa = trim($_POST['ropa']);
$sColor = substr($_POST['color'],1);
$iTalla = trim($_POST['talla']);
$sGenero = trim($_POST['genero']);
$iLimNom = 200;
$iLimColor = 6;
$aErrores = array();

/**
 * Comprobamos
 */

//nombre no vacio
if(strlen($sNom) == 0)$aErrores[] = 1;

//Nombre no sobrepasa la longitud
if(strlen($sNom) > $iLimNom) $aErrores[]=2;

//Nombre:vacio
if(strlen($sColor == 0)) $aErrores[] =3;

//Nombre: No sobrepasa la longitud de $iLimColor
if(strlen($sColor) > $iLimColor) $aErrores[] = 4;

//Talla : no vacio 
if(strlen($iTalla) == 0) $aErrores[] =5;

//Talla: tipo número
if(!is_numeric($iTalla)) $aErrores[] =6;

if(count($aErrores) != 0){
	//No se puede enviar un array por GET ni por POST. La solucion es
	//serializarlo (serialize)
	$seriErrores = serialize($aErrores);
	header('Location:Nuevo.php?error='.$seriErrores);
	exit;
}




//conexion a base de datos
$conexion = mysql_connect('localhost','root','');
mysql_select_db('tienda',$conexion);

//insertar en la base de datos
$sSQL = "UPDATE articulos SET nombre ='$sNom',id_tipo_articulo= '$sRopa', color= '$sColor',
talla='$iTalla', id_genero= '$sGenero' WHERE id='$iId'";
mysql_query($sSQL,$conexion) or die(mysql_error());
echo $sSQL;


header('Location: ../enlaces.php?modificar=1');
exit;


 ?>