<?php

	include("connection.php");
	
	if (($connection = mysql_connect(HOST, USER, PASS)) === FALSE)
		die("could not connect to database");
			
	if (mysql_select_db(DB, $connection) === FALSE)
		die("Could not select database");

	$sql = sprintf("SELECT * from test_table");
	
	$result = mysql_query($sql);
	
	if (mysql_result($result, $row))
?>