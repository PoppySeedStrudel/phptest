<?php
$array = unserialize(urldecode($_COOKIE['Cornelius']));
$array[0]["PromoteuserId"] = "New";

setcookie("Cornelius", urlencode(serialize($array)), time()+604800,'/');

echo "test";

?>