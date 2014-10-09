<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="articulos.php" method="post">

	<label for="titulo">Titulo</label><br/>
	<input type="text" name="titulo" id="titulo"><br/>

	<label for="subtitulo">Subtitulo</label><br/>
	<input type="text" name="subtitulo" id="subtitulo"><br/>

	<textarea name="articulo" placeholder="Pon lo que te da ganas" ></textarea><br/>
	
	<label for="radio">Accepta las Condiciones y termos</label><br/>
	<input type="radio" value="1" name="firma" id="radio">Si <br/>
	<input type="radio" value="2" name="firma">No <br/>

	<label for="fecha">Fecha</label><br/>
	<input type="text" name="fecha" id="fecha"><br/>


	<input type="submit" value="Enviar">




	</form>
	
</body>
</html>