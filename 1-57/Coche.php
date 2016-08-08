<?php
	class Coche
	{
		var $ruedas;
		var $color;
		var $motor;


		function Coche()
		{
			$this -> ruedas = 4;
			$this -> motor = 1600;
			$this -> color = "";
		}

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

		function setColor($color_coche, $nombre_choche)
		{
			$this->color = $color_coche;
			echo "El color del " . $nombre_choche . " es: " . $this->color . "<br>";
		}

	}

//----------------------------------------------------------------------------------------------------------

	/**
	* clase de camion
	*/
	class Camion
	{
		var $ruedas;
		var $color;
		var $motor;


		function Camion()
		{
			$this -> ruedas = 8;
			$this -> motor = 2600;
			$this -> color = "Gris";
		}

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



	}
?>