<?php 
/*
function DigoHola(){
	echo 'Hola';
}

function DigoAdios(){
	echo 'Adios';
}

DigoHola();
DigoAdios();
DigoAdios();
DigoAdios();*/
/**
 * Método que resta dos números
 * @param  Int $iniNum1
 * @param  Int $iniNum2
 * @return Int
 */
function restar($iniNum1, $iniNum2){
	$iResultado = $iniNum1 - $iniNum2;
	return $iResultado;
}

$iResultado = restar(8, 3);
echo $iResultado;



 ?>