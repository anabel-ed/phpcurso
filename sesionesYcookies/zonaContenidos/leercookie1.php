<!DOCTYPE html>
<html>
<head>
	<title>Cookie</title>
</head>
<body>
<?php
	if (isset($_COOKIE["prueba"]))
	{
		
		echo $_COOKIE["prueba"];
	
	}else{

		echo "La cookie no se a creado";
	}
?>
</body>
</html>