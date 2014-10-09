<?php 

/* Primera forma*/
$aNumsPares = array();
for ($i=2; $i <= 20 ; $i+= 2) { 
	$aNumsPares[] = $i;
}


/*Segunda forma while*/
$iNum = 0;
$iPares = 10;
$aNumsPares = array();
$bFunciona = true;

while ($bFunciona) {
	//Obtengo los pares
	if (($iNum % 2) == 0) {
		$aNumsPares[] = $iNum;
	}

	//Compruebo si debo parar el bucle
	if ($iPares <= count($aNumsPares)) {
		$bFunciona = false;
	}

	//Incrementados el número
	$iNum++;
}
//imprimo
echo implode(' ', $aNumsPares);
/*
//sumar los numeros y imprimir parte2+
echo "<br/>";
$iTotal = 0;
for ($i=0; $i < count($aNumsPares); $i++) { 
	$iTotal = $iTotal + $aNumsPares[$i];
}
echo 'Total' . $iTotal;
*/
/* Con foreach */
echo "<br/>";
$iTotal = 0;
foreach ($aNumsPares as $key => $value) {
	$iTotal += $value;
}
echo 'Total: '.$iTotal;

//Tercera parte del ejercicio
echo '<br/>';
$ciudad = array('Madrid', 'Barcelona', 'Londres', 'New york', 'Los Angeles', 'Chicago' );
foreach ($ciudad as $key => $value) {
	echo "La ciudad en la posicion ". ($key + 1)." tiene el nombre ". $value.  ". <br/>";
}


 ?>