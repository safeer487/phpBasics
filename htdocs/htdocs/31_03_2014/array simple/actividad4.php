<?php
$aDiasSemanNorm = array('lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
$aDiasSemanaInv = array();

for ($i= count($aDiasSemanNorm) -1; $i >= 0 ; $i--) { 
    $aDiasSemanaInv[] = $aDiasSemanNorm[$i];
}

echo implode(' ', $aDiasSemanaInv);





 ?>