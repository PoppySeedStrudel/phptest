<?php

	
	$xml = simplexml_load_file('producers.xml');

	// echo $xml->producer[1]->name.' is '.$xml->producer[1]->age;

	foreach ($xml->producer as $producer){
		
		echo $producer->name.' ('.$producer->age.')<br>';
		foreach($producer->show as $show){
			echo $show->showname.' on '.$show->showdate.'<br>';
			
		}
		
	}	
?>
