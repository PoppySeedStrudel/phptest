<?php
session_start();

$testarray2 =  $_SESSION['name'];


for ($i = 0; $i < sizeof($testarray2); ++$i) {

	echo "key: ".key($testarray2)." value: ".current($testarray2)."<br>";

	next($testarray2);
}

$zusatzarray = array("wert drei" => "dritter wert");

$ergebnis = array_merge((array)$testarray2, (array)$zusatzarray);
print_r($ergebnis);
$_SESSION['name'] = $ergebnis;

?>

<a href="test8.php"><br>more</a>
<a href="test7.php"><br>back</a>