<html>
<head><title>formular test</title></head>
<body>

hello world
<form name="eins" action="test6.php">
	
<?php 


	for ($i = 0; $i < 3; $i++){
		
		$formname = "form" . $i;
		echo "<input type=\"text\" size=\10\" name='" . $formname . "'\">";
		echo "<br>";
		
	}

?>

</form>

</body>
</html>
