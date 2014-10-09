<?php
	
	$disco1 = array(
		"grupo" => "Ramones",
		"nombre" => "Rocket to Russia",
		"precio" => 19.95
	);
	
	$disco2 = array(
		"grupo" => "The Clash",
		"nombre" => "London Calling",
		"precio" => 14.50
	);
	
	$disco3 = array(
		"grupo" => "Tom Waits",
		"nombre" => "Rain Dogs",
		"precio" => 20.35
	);
	
	$disco4 = array(
		"grupo" => "The Rolling Stones",
		"nombre" => "Beggars Banquet",
		"precio" => 16.30
	);
	
	$disco5 = array(
		"grupo" => "The Who",
		"nombre" => "Who's Next",
		"precio" => 18.00
	);
	
	$disco6 = array(
		"grupo" => "The Magnetic Fields",
		"nombre" => "69 LOve Songs",
		"precio" => 50.95
	);
	
	$disco7 = array(
		"grupo" => "Belle & Sebastian",
		"nombre" => "The boy with the arab strap",
		"precio" => 17.95
	);
	
	$disco8 = array("grupo" => "Deep Purple","nombre" => "Made in Japan","precio" => 17.35);
	
	echo $disco7["grupo"];
	echo $disco7["precio"];
	
	$discos = array($disco1,$disco2,$disco3,$disco4,$disco5,$disco6,$disco7,$disco8);
	
	echo "<pre>";
	print_r($discos);
	echo "</pre>";
	
	$total_discos = count($discos);
	
	for ($i = 0; $i < $total_discos; $i++) {
		
		echo $discos[$i]["nombre"];
		echo "<br />";
		
	}

	foreach ($total_discos as $key) {
		echo $key["nombre"];
		echo "<br />";
	}
	
?>