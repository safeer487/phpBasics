<?php

/** Cambia la cookie del idioma **/
if(isset($_GET['lang'])) {
	$iTiem = time() + (311040000);
	switch($_GET['lang']) {
		case 1:
			//Espanyol
			setcookie('idioma', 'es', $iTiem);
			break;
		case 2:
			//Ingles
			setcookie('idioma', 'en', $iTiem);
			break;
	}
}

/** Elige el idioma **/
if(!isset($_COOKIE['idioma'])) {
	//Crea la cookie si es la primera vez que entra 
	//y carga el idioma castellano por defecto
	include_once('textos_es.php');
	$iTiem = time() + (311040000);
	setcookie('idioma', 'es', $iTiem);
} else if(isset($_GET['lang'])) {
	//Carga el idioma elegido por el usuario
	switch ($_GET['lang']) {
		case 1:
			include_once('textos_es.php');
			break;
		case 2:
			include_once('textos_en.php');
			break;
	}
} else {
	//Carga el idioma guardad en la Cookie
	include_once('textos_'.$_COOKIE['idioma'].'.php');
}
?>
<html>
<head>
	<style type="text/css">
	#navMenu {
		background-color: #9CADC9;
		margin-top: 40px;
		width: 600px;
		margin-right: auto;
		margin-left: auto;
	}
	#navLista {
		border-radius: 10px;
	}
	#navLista li {
		margin-right: 20px;
		display: inline;
		list-style-type: none;
		float: left;
		color: #96BFE0;
		padding: 0;
	}
	#navLista li a {
		color: #96BFE0;
		text-decoration: none;
	}
	</style>
</head>
<body>
	<nav id="navMenu">
		<ul id="navLista">
			<li><a href="#"><?php echo $texto1; ?></a></li>
			<li><a href="#"><?php echo $texto2; ?></a></li>
			<li><a href="#"><?php echo $texto3; ?></a></li>
			<li><a href="#"><?php echo $texto4; ?></a></li>
			<li><a href="#"><?php echo $texto5; ?></a></li>
			<li>&nbsp;</li>
			<li><a href="index.php?lang=1"><img src="img/espana.gif" width="50" height="30" alt="bandera de Espanya"></a></li>
			<li><a href="index.php?lang=2"><img src="img/reino_unido.gif" width="50" height="30" alt="bandera de Reino Unido"></a></li>
		</ul>
	</nav>
</body>
</html>