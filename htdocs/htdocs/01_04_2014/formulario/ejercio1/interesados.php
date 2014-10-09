<?php 

//comprobamos que nos llegan datos

if ($_POST) {
	//Variables
	$sNom = trim($_POST['nombre']);
	$sApell = trim($_POST['Apellido']);
	$iEdad = trim($_POST['edad']);
	$iGenero = $_POST['genero'];
	$iColorActu = $_POST['ColorOjos'];
	$iColorFut = $_POST['ColorOjosFut'];
	$sRazon = trim($_POST['razon']);

	echo "Nombre => ". $sNom ."<br/>";
	echo "Apellido => ". $sApell ."<br/>";
	echo "Edad => ". $iEdad."<br/>";
	echo "Genero => ". $iGenero."<br/>";
	echo "Color original => ". $iColorActu."<br/>";
	echo "Color Nuevo => ". $iColorFut."<br/>";
	echo "Razon => ". $sRazon."<br/>";

	//Generamos el  texto final
	switch ($iGenero) {
		case '1':
			echo 'Sr';
			break;
		case '2':
			echo 'Sra';
			break;
	}
	//Nombre
	echo "  $sNom $sApell, con la edad de $iEdad años ; ha decidido cambiar sus ojos de color $iColorActu a $iColorFut por $sRazon .";

	
} else{
	//Redirecciona
	header("Location: index.html");
	exit;
}




 ?>