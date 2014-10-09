<?php 
session_start();
if(!isset($_SESSION['acceso'])){
	Header('Location: session_example.php');
}

 ?>


<h1>ZONA PRIVADA</h1>
<h2>(Podría ser como una página de perfil a la cual solo tu puedes entrar)</h2>