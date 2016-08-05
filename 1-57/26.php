<!DOCTYPE html>
<html>
<head>
	<title>Modificadores POO</title>
</head>
<body>
<?php
	include("Vehiculos.php");

	$mazda = new Coche();

	$pegazo = new Camion();



	echo "El mazda tiene " . $mazda->getRuedas() ." ruedas<br>";

	echo "El Pegazo tiene " . $pegazo->getRuedas() . " ruedas<br>";

?>
</body>
</html>