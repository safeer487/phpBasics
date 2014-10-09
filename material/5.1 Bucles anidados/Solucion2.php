<table width="300px">

<?php

$numTablas = 10;

 for($i = 0; $i <= $numTablas; $i++) {
 	echo '<tr>';
 	for($j = 0; $j <= $numTablas; $j++) {
 		echo '<td>'.($i * $j).'</td>';
 	}
 	echo '</tr>';
 }

?>

</table>
