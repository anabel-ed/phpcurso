<!DOCTYPE html>
<html>
<head>
	<title>POO</title>
</head>
<body>

<?php
	/**
	* Clase que se usra como pruebas para POO
	*/
	class Coche
	{
		var $ruedas;
		var $color;
		var $motor;


		function arrancar()
		{
			echo "Estoy arrancando<br>";
		}
		
		function girar()
		{
			echo "Estoy girando<br>";
		}

		function frenar()
		{
			echo "Estoy frenando<br>"; 
		}

		function Coche()
		{
			$this -> ruedas = 4;
			$this -> motor = 1600;
			$this -> color = "";
		}
	}


	$renault = new Coche();

	$seat = new Coche();

	$mazda = new Coche();

	$mazda->girar();

	echo $mazda->ruedas;

?>
</body>
</html>