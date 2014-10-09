<?php 

function saludar($insNom){
	echo "hola ".$insNom;

}

saludar('Paco');

// segunda parte

function CalcularPar($iniNom){
	$bPar = false;
	if(($iniNom % 2) == 0) $bPar = true;
	
	return $bPar;
}

$fNum = 9;
if(CalcularPar($fNum)){
	echo $fNum . ' es par';
}else{
	echo $fNum . ' es impar';
}

echo "<br/>";


//tercera parte

echo "<br/>";
/**
 * Metodo que calcular el cuadrado
 * @param float $iniNom3
 * return float
 */
function CalcularCuadrado($iniNom3){
	return $iniNom3 * $iniNom3;
}
$fNum = 5;
echo "El cuadrado de $fNum es ". CalcularCuadrado($fNum);




//parte 4
/**
 * Metodo que imprime los multiplos
 * @param  int $iniMultiplo multiplo a buscar
 * @param  int $iniInicio Inicio a buscar
 * @param  int $iniFin    Final de la busqueda
 */
echo "<br>";
function buscarMultiplos($iniMultiplo, $iniInicio, $iniFin){
	for($i=$iniInicio; $i <= $iniFin ; $i++) { 
		if(($i % $iniMultiplo) == 0) {
			echo $i. ' ';
		}
	}
}

buscarMultiplos(7, 1, 1000);


 ?>