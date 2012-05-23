<?php
$url = 'http://localhost/docs/workspace/project1/cart.php?0001=2&0002=4&0003=&0004=&0005=&0006=';

$temparray = (parse_url($url));

echo $temparray[query];
echo "<br>";

$zweiterarray = explode("&", $temparray[query]);
print_r($zweiterarray);
$vierterarray = array();

echo "<br>";

foreach ($zweiterarray as $wert ):


	echo $wert . " ";
	$dritterarray = explode("=", $wert);
	$tempwert1 = $dritterarray[0];
	$tempwert2 = $dritterarray[1];
	echo "erster wert: " .  $tempwert1 . " und zweiter wert " . $tempwert2 . "<br>";
	if ($tempwert2 != ""){
		$vierterarray[$tempwert1] = $tempwert2;
	}
endforeach;
echo "finales array: ";
print_r($vierterarray);

echo $_SERVER['PHP_SELF'];
echo "<br>";
?>
