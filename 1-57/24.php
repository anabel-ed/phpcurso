<!DOCTYPE html>
<html>
<head>
	<title>POO</title>
</head>
<body>

<?php

	include("Coche.php");

	$mazda = new Coche();

	$pegazo = new Camion();

	echo "El mazada tiene " . $mazda->ruedas . " ruedas <br>";

	echo "El pegazo tiene " . $pegazo->ruedas . " ruedas <br>";



?>
</body>
</html>