<?php

//2 dimensiones o bucle anidado simple
for ($i = 0; $i < 10; $i++) { 
	for ($j = 0; $j < 10; $j++) { 
		echo ($i * $j) . "<br>";
	}
}

//3 dimensiones o bucle anidado complejo
for ($i = 0; $i < 10; $i++) { 
	for ($j = 0; $j < 10; $j++) { 
		for ($k = 0; $k < 10; $k++) { 
			echo ($i * $j * $k) . "<br>";
		}
	}
}

//¿Y si necesito más dimensiones? --> L, M, N... 

?>