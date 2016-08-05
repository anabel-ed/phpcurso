<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>uso constantes php</title>
</head>
<body>
	<?php

		define("AUTOR", "Asdrubal");

		echo "La linea de esta instruccion es " . __LINE__ . "<br>";

		echo "Estamos trabajando con este fhicero" . __FILE__ . "<br>";

		echo "El autor es: " . AUTOR;

	?>
</body>
</html>