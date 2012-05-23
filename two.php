<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE | E_COMPILE_ERROR);

// get data from cookie
$testarray2 = unserialize($_COOKIE["Testcookie"]);

// delete cookie
setcookie('Testcookie', '', time()-86400);



$nextarray = array("value three" => "three");
$result = array_merge((array)$testarray2, (array)$nextarray);
// just checking the result
setcookie("Testcookie" , serialize($result));

print_r($result);


echo "<a href=\"one.php\"><br>more</a>";

?>

