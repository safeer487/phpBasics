<?php 

$aaAficiones = array();
$aaAficiones['Marc']['Apodo'] = 'Marci';
$aaAficiones['Marc']['Aficion'] = 'Fronton';
$aaAficiones['Rafa']['Apodo'] = 'no tiene';
$aaAficiones['Rafa']['Aficion'] = 'nadar';
$aaAficiones['Lucas']['Apodo'] = 'no tiene';
$aaAficiones['Lucas']['Aficion'] = 'Viajar';
$aaAficiones['Lorena']['Apodo'] = 'no tiene';
$aaAficiones['Lorena']['Aficion'] = 'Nadar';
$aaAficiones['Safeer']['Apodo'] = 'no tiene';
$aaAficiones['Safeer']['Aficion'] = 'Correr';
$aaAficiones['David']['Apodo'] = 'no tiene';
$aaAficiones['David']['Aficion'] = 'Ciclismo';
$aaAficiones['Andros']['Apodo'] = 'Andris';
$aaAficiones['Andros']['Aficion'] = 'comer helado';

/*echo "<pre>";
	print_r($aaAficiones);
echo "</pre>";*/

foreach ($aaAficiones as  $value) {
	echo $value['Apodo'] . ' ';
}


 ?>