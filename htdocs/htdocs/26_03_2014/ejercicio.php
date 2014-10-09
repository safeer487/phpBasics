<?php 

//del 1 al 10
echo "<h2>Bucle que imprima del 1 al 10 </h2><br/>";
for ($i=1; $i <= 10 ; $i++) { 
	echo "$i <br/>";
}

//del 12 al 24
echo "<h2>Bucle que imprima del 12 al 24 </h2> <br/>";
for ($i=12; $i <=24 ; $i++) { 
	echo "$i <br/>";	
}

//del 30 al 20
echo "<h2>Bucle que imprima del 30 al 20 </h2><br/>";
for ($i=30; $i >=20 ; $i--) { 
	echo "$i <br/>";
}

//del impares 1 al 100
echo "<h2>bucle que imprimo los numeros impares del 1 al 100 </h2><br/>";
for ($i=1; $i <=100 ; $i += 2) { 
	echo "$i <br/>";	
}

//del imprima del 1 al 100 y los numeros redondosd
echo "<h2>bucle que imprima del 1 al 100 y los numeros redondos</h2><br/>";
for ($i=0; $i <= 100 ; $i += 10) { 
	echo "<b>$i</b> <br/>";
	}


//del impria 1 al 100 y los numeros redondeaos  10 20 30
echo "<h2> bucle que imprima del 1 al 100 y los numero redondos 10, 20</h2><br/>";
for ($i = 1; $i <= 100 ; $i++) { 
	if (($i % 10) == 0) {
		echo "<b>$i</b> </br>";
	}else{
	echo "$i ";
	}
}

		



 ?>