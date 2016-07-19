<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php

	/*$semana[] = "Lunes";
	$semana[] = "Martes";
	$semana[] = "Miercoles";
	$semana[] = "Jueves";
	$semana[] = "Viernes";

	for ($i=0; $i < count($semana); $i++) {
		echo $semana[$i] . "<br>";
	}

	$semana [] = "Sabado";

	for ($i=0; $i < count($semana); $i++) {
		echo $semana[$i] . "<br>";
	}*/


	$semana = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes");

	for ($i=0; $i < count($semana); $i++) {

		sort($semana);

		echo $semana[$i] . "<br>";

	}


	/*$datos = array(
		'Nombre' 	=> 'Asdrubal',
		'Apellido' 	=> 'Lugo',
		'Edad' 		=> '26',
		);
	$datos ["Pais"]= "Venezuela";
	//$datos = "martin";

	foreach ($datos as $clave => $valor) {

		echo "A $clave le corresponde $valor<br>";

	}*/
?>
</body>
</html>