<?php

session_start();


$testarray = array("wert eins" => "erster wert", "wert zwei " => "zweiter wert");
$_SESSION['name'] = $testarray;


?>

<a href="test8.php">go</a>
