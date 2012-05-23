<?php

$testarray = array("value one" => "one", "value two" => "two");

setcookie("Testcookie" , serialize($testarray));


echo "<a href=\"two.php\"> link</a>";