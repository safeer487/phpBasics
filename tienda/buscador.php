<?php 
//Comprueba que se ha dado de alta
require_once 'seguridad.php';

$sHTML = '';

if(isset($_GET['q'])) {
	$sBus = $_GET['q'];

	/* Conexion */
	$conexion = mysql_connect('localhost', 'root', '');
	mysql_select_db('tienda', $conexion);

	/* Consulta */
	$sSQL = "SELECT nombre FROM articulos WHERE nombre LIKE '%$sBus%' ";
	$resultados = mysql_query($sSQL, $conexion) or die(mysql_error());

	/* Obtener datos */
	while($row = mysql_fetch_assoc($resultados)) {
	  $sHTML .= '<tr>
				<td>' . $row['nombre'] . '</td>
			</tr>';
	}
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			body {
				padding-top: 50px;
				padding-bottom: 20px;
			}
		</style>
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/main.css">

		<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
	

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="container">
	  <h1>Administración</h1>
	  <h2>Buscador</h2>
	   
		<div class="row">
		<div class="col-lg-4">
		</div>
		<form action="buscador.php" method="get" id="formBuscar">
		  <div class="col-lg-4">
			<div class="input-group">
				<input type="text" name="q" class="form-control" id="buscador"  data-toggle="popover" data-placement="left" data-content="Busca por el nombre del artículo">
				<span class="input-group-btn">
				  <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
				</span>
			</div><!-- /input-group -->
		  </div><!-- /.col-lg-6 -->
		  <div class="col-lg-4">
		</div>
		</form>
	  </div>
	  <div class="row">
		<table class="table table-condensed">
			<?php echo $sHTML; ?>
		</table>
	  </div>
	  <div class="row">
		  <a href="administracion.php">
		  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Volver</button>
		</div>
	</div>

	  <footer>
		<p>&copy; Company 2014</p>
	  </footer>
	</div> <!-- /container -->        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

		<script src="js/vendor/bootstrap.min.js"></script>

		<script src="js/main.js"></script>
	</body>
</html>
