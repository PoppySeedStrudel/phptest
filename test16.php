<?php

	require_once("common.php");
	echo "Hello world<br>";
	$sql = sprintf("SELECT * FROM test_table");
	$result = mysql_query($sql);
        if ($result === FALSE)
            die("Could not query database");

    if (mysql_num_rows($result) == 0){
	  echo "Not data available. :(";
	}

	while ($row=mysql_fetch_array($result)){
	echo $row["id"]." is the id. field one is ".$row["field1"]." and field2 is  ".$row["field2"].". field3 is ".$row["field3"].". <br> ";
	}
            
?>