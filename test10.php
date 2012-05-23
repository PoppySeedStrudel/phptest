<?php

// get data from cookie
$testarray2 = unserialize($_COOKIE["Testcookie"]);

// delete cookie
setcookie('Testcookie', '', time()-86400);

// print out data
for ($i = 0; $i < sizeof($testarray2); ++$i) {

	echo "key: ".key($testarray2)." value: ".current($testarray2)."<br>";

	next($testarray2);
}

$nextarray = array("value three" => "three");
$result = array_merge((array)$testarray2, (array)$nextarray);
// just checking the result
print_r($ergebnis);


// setcookie('test', 'hello');
// store new data in cookie (does not work)
setcookie("Testcookie" , serialize($ergebnis));

?>

<a href="one.php"><br>more</a>
