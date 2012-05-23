<?php

session_start();

$_SESSION['name'] = "cornelius";
$_SESSION['age'] = 42;
$_SESSION['adress'] = "hamburg";

echo "<a href=\"test.php\">link</a><br>";


?>
