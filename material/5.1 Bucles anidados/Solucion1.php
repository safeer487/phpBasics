<?php


//Parte 1
for ($i = 0; $i < 3; $i++) { 
	for ($j=0; $j < 4; $j++) { 
		echo "0 ";
	}
	echo "<br>";
}

echo "<br>";

//Parte 2
for ($i = 1; $i <= 4; $i++) { 
	for ($j = 1; $j <= 3; $j++) { 
		echo $i."?".$j." ";
	}
}

echo "<br><br>";

//Parte 3
for ($i = 1; $i <= 5; $i++) { 
	for ($j = 1; $j <= 5; $j++) { 
		echo $i.$j." ";
	}
	echo "<br>";
}

?>