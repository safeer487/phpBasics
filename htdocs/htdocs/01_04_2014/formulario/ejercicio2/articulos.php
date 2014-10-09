<?php 
 
//Comprueba si llega datos

if ($_POST) {
	//variable aqui
	$sTitulo = trim($_POST['titulo']);
	$sSubTitulo = trim($_POST['subtitulo']);
	$sArticulo = trim($_POST['articulo']);
	$sFirma = $_POST['firma'];
	$sFecha = trim($_POST['fecha']);

	
}else{
	header("Location:formulario.php");
}

//mostrar





 ?>
 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<style>
	div{
		width:768px;
		margin:0 auto;
		background-color:yellow;
	}

 	</style>
 </head>
 <body>
 	<div>
 		
	<h1> <?php echo $sTitulo ?> </h1> 
	<h2> <?php echo "$sSubTitulo $sFecha"; ?> </h2> 
	<p><?php  echo $sArticulo ?></p>


 		

 		

 	</div>
 	
 </body>
 </html>