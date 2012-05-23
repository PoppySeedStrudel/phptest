<?php

$testcook = $_COOKIE["Cornelius"];

// test
print_r ($testcook);
echo "<br>";
// test

$i = 0;
$temp = array();

	foreach ($testcook as $vari):
		
		$test=$testcook[$i];
		
		array_push($temp, $test);
		
		$i++;
	endforeach;
	
$value = 'eins';
$value2 = "zwei";
$value3 = "drei";

// setcookie("Cornelius[1]", $value);
array_push($temp, $value);
// setcookie("Cornelius[2]", $value2);
array_push($temp, $value2);
// setcookie("Cornelius[3]", $value3);
array_push($temp, $value3);

$length = count($temp);
	for ($j = 1; $j <= $length; $j++){
		setcookie("Cornelius[" . $j . "]", $temp[$j]);	
	}
echo "und hier der array $temp: <br>";
print_r ($temp);
echo "<br>";

echo "<a href=\"cookietest.php\">cooksies</a>";
	// print_r($food);
?>