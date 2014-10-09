<?php 

//Comprobamos si tenemos GET
if(!isset($_GET['nombre']) || !isset($_GET['pass'])){
	header('Location: index.php');
	exit;
}

//Varibales
$sNom = trim($_GET['nombre']);
$sPass = trim($_GET['pass']);
$iId = 0;

//conexion a base de datos
$conexion = mysql_connect('localhost','root','');
mysql_select_db('tienda',$conexion);

//consulta a base de datos
$sSQL ="SELECT id FROM empleados WHERE nombre = '$sNom' AND contrasenya = '$sPass' ";
$resultados = mysql_query($sSQL,$conexion) or die(mysql_error());

//obtener datos
while ($row = mysql_fetch_assoc($resultados)) {	
	$iId =$row['id'];
}


//Comprobamos si existe el usuario
if($iId == 0){
	//No existe
	header('Location: index.php?error=1');
	exit;
}else{
	session_start();
	$_SESSION['usuario'] = $iId;
	header('Location: enlaces.php');
	exit;
}


 ?>