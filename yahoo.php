<?php
  
   $handle = fopen("http://finance.yahoo.com/d/quotes.csv?s=AAPL+MSFT+AMZN+GOOG+IBM+MCD+RHT+ORCL+HPQ+GE+GM&f=snat1", "r");
   
   while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
   	
   	 echo "Symbol: " . $data[0] . "<br>";
   	 echo "Name: " . $data[1] . "<br>";
   	 echo "Price: " . $data[2] . "<br>";
   	 
   	 echo "<p>";
   	 //print_r($data);
   	
   }
  

?>
