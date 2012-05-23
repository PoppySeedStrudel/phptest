<?php

	echo "Hello World</br>";
	$mycars = simplexml_load_file('fahrzeug.xml');
	echo "<ul id=\"autoliste\">\n";
	foreach ($mycars as $carsinfo):
	$marke=$carsinfo->marke;
	$ps=$carsinfo->ps;
	// $kraftstoff=$carsinfo['dateplayed'];
	$kraftstoff=$carsinfo->kraftstoff;
	$farbe=$carsinfo->farbe;
	echo "<li><div class=\"title\">",$marke,"</div><div class=\"artist\">by ",$os,"</div><time>",$ps,"</time></li>\n";
	// echo "<li>" $marke," ",  $kraftstoff "  ",  $ps "</li>"
	endforeach;
	echo "</ul>";

?>