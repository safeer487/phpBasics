



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<body>
<h2>Nuevo prendas</h2>
<form action="nuevoproceso.php" method="post">
	<input type="text" name="nuevaprenda"  placeholder="nuevaprenda">
	<select name="tipo" id="tipo">
		<option value="0">Selecciones</option>
		<option value="1">zapatos</option>
		<option value="2">pantalones</option>
		<option value="3">faldas</option>
		<option value="4">vestidos</option>
		<option value="5">camisetas</option>
		<option value="6">sombreros</option>
	</select>
	<select name="color" id="color">
		<option value="0">color</option>
		<option value="1">blanco</option>
		<option value="2">negro</option>
		<option value="3">blue</option>
		<option value="4">green</option>
		<option value="5">red</option>
		<option value="6">yellow</option>
		<option value="7">pink</option>
		<option value="8">marron</option>
	</select>
	<select name="talla" id="talla">
		<option value="0">talla</option>
		<option value="1">32</option>
		<option value="2">34</option>
		<option value="3">36</option>
		<option value="4">38</option>
		<option value="5">40</option>
		<option value="6">42</option>
		<option value="7">44</option>
		<option value="8">46</option>
		<option value="9">48</option>
		<option value="10">50</option>
	</select>
	<select name="genero" id="genero">
		<option value="0">Selecione</option>
		<option value="1">Hombre</option>
		<option value="2">Mujer</option>
	</select>
	<input type="submit" value="Guardar">
	

</form>

</body>
</html>
