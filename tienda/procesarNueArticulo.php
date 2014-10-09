<?php  

require_once 'seguridad.php';

if(!$_POST) {
	header('Location: crearArticulo.php');
}

//Variables
$sNom = trim($_POST['nombre']);
$iTipo = $_POST['tipo'];
$sColor =  substr($_POST['color'], 1); //Quito el primer caracter: pasa de #123456 -> 123456
$iTalla = $_POST['talla'];
$iGen = $_POST['genero'];
$iLimNom = 200;
$iLimColor = 6;
$aErrores = array();

/**
 * Comprobaciones
 */
//Nombre: vacío
if(strlen($sNom) == 0) $aErrores[] = 1;
//Nombre: No sobrepasa la longitud de $iLimNom
if(strlen($sNom) > $iLimNom) $aErrores[] = 2;
//Color: vacío
if(strlen($sColor) == 0) $aErrores[] = 3;
//Color: No sobrepasa la longitud de $iLimColor
if(strlen($sColor) > $iLimColor) $aErrores[] = 4;
//Talla: vacío
if(strlen($iTalla) == 0) $aErrores[] = 5;
//Talla: tipo número
if(!is_numeric($iTalla)) $aErrores[] = 6;

if(count($aErrores) != 0) {
	//No se puede enviar un array por GET ni por POST. La solución es serializarlo (serialize)
	$seriErrores = serialize($aErrores);
	header('Location: crearArticulo.php?error=' . $seriErrores);
	exit;
}

/* Conexion con base de datos */
$conexion = mysql_connect('localhost', 'root', '');
mysql_select_db('tienda', $conexion);

/* insertamos en la base de datos */
$sSQL = "INSERT INTO articulos VALUES (NULL, '$sNom', $iTipo, '$sColor', $iTalla, $iGen)";
mysql_query($sSQL, $conexion) or die(mysql_error());

header('Location: administracion.php?nuevo=1');
exit;

?>