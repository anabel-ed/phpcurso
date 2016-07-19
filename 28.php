<!DOCTYPE html>
<html>
<head>
	<title>Modificadores POO</title>
</head>
<body>
<?php

	include("CompraVehiculo.php");

	$compraAntonio = new CompraVehiculo("compacto");

	$compraAntonio->climatizador();

	$compraAntonio->tapiceriaCuero("blanco");

	echo $compraAntonio->precioFinal() . "<br>";

	$compraAnna = new CompraVehiculo("urbano");

	$compraAnna->climatizador();

	$compraAnna->tapiceriaCuero("negro");

	echo $compraAnna->precioFinal() . "<br>";

?>
</body>
</html>