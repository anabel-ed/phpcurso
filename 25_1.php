<!DOCTYPE html>
<html>
<head>
	<title>POO</title>
</head>
<body>
<?php
	include("Vehiculos.php");

	$mazda = new Coche();

	$pegazo = new Camion();

	echo "El mazda tiene " . $mazda->ruedas ." ruedas<br>";

	echo "El pegazo tiene " . $pegazo->ruedas ." ruedas<br>";

	$pegazo->frenar();

	$pegazo->setColor("pegazo", "gris");

	$pegazo->arrancar();

?>
</body>
</html>