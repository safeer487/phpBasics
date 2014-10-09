<?php 

if(!$_POST){
	header('Location:nuevo.php');
	exit;
}

$sNuevaprenda = $_POST['nuevaprenda'];
$sTipo = '';
$sColor = '';
$sTalla = '';
$sgenero = '';

switch($_POST['tipo']){
	case 1:
		$sTipo = 'zapatos';
		break;
	case 2:
		$sTipo = 'pantalones';
		break;
	case 3:
		$sTipo = 'faldas';
		break;
	case 4:
		$sTipo = 'vestidos';
		break;
	case 5:
		$sTipo = 'camisetas';
		break;
	case 6:
		$sTipo = 'sombreros';
		break;
};
switch ($_POST['color']) {
	case 1:
		$sColor = 'blanco';
		break;
	case 2:
		$sColor = 'negro';
		break;
	case 3:
		$sColor = 'blue';
		break;
	case 4:
		$sColor = 'green';
		break;
	case 5:
		$sColor = 'red';
		break;
	case 6:
		$sColor = 'yellow';
		break;
	case 7:
		$sColor = 'pink';
		break;
	case 8:
		$sColor = 'marron';
		break;
}
switch ($_POST['talla']) {
	case 1:
		$sTalla = 32;
		break;
	case 2:
		$sTalla = 34;
		break;
	case 3:
		$sTalla = 36;
		break;
	case 4:
		$sTalla = 38;
		break;
	case 5:
		$sTalla = 40;
		break;
	case 6:
		$sTalla = 42;
		break;
	case 7:
		$sTalla = 44;
		break;
	case 8:
		$sTalla = 46;
		break;
	case 9:
		$sTalla = 48;
		break;
	case 10:
		$sTalla = 50;
		break;
}
switch ($_POST['genero']) {
	case 1:
		$sgenero = 'Hombre';
		break;
	
	case 2:
		$sgenero = 'Mujer';
		break;
}


//conexion a database
$conexion = mysql_connect('localhost','root', '');
mysql_select_db('tienda', $conexion);

//insert into database
$sSQL = "INSERT INTO articulos VALUES ('NULL','$sNuevaprenda','$sTipo','$sColor','$sTalla','$sgenero')";
mysql_query($sSQL, $conexion) or die(mysql_error());

header('location: ../enlaces.php');
exit;

 ?>