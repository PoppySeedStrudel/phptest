<?php

	  
    $handle = fopen("http://download.finance.yahoo.com/d/quotes.csv?s=GOOG&f=sl1d1t1c1ohgv&e=.csv", "r");
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
     print_r($data);
  }
?>
