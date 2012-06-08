<?php

    
    // display errors
    ini_set("display_errors", true);
    error_reporting(E_ALL ^ E_NOTICE);

    // requirements
    require_once("constants.php");

    // connect to database server
    if (($connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS)) === FALSE)
        apologize("Could not connect to database server (" . DB_SERVER . ").");

    // select database
    if (mysql_select_db(DB_NAME, $connection) === FALSE)
        apologize("Could not select database (" . DB_NAME . ").");

?>
