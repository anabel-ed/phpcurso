<?php
	/**
	* Clase de prueba POO
	*/
	class Coche
	{
		protected $ruedas;
		protected $color;
		protected $motor;

		function Coche()
		{
			$this->ruedas = 4;
			$this->color = "";
			$this->Motor = 1600;
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

		public function setColor($color_coche, $nombre_coche)
		{
			echo "El color de " . $nombre_coche . "es: " . $this->color . "<br>";
		}

		public function getColor()
		{
			return $this->color;
		}

		public function setMotor($motor_coche, $nombre_coche)
		{
			echo "El motor de " . $nombre_coche . "es: " . $this->motor . "<br>";
		}

		public function getMotor()
		{
			return $this->motor;
		}

		public function setRuedas($ruedas_coche, $nombre_coche)
		{
			echo "El numero de ruedas del " . $nombre_coche . "es: " . $this->ruedas . "<br>";
		}

		public function getRuedas()
		{
			return $this->ruedas;
		}

	}
//----------------------------------------------------------------------------------------------

	class Camion extends Coche
	{

		function Camion()
		{
			$this->ruedas = 8;
			$this->color = "Gris";
			$this->Motor = 2600;
		}

		function setColor($color_camion, $nombre_camion)
		{
			echo "El color de " . $nombre_camion . "es: " . $this->color . "<br>";
		}

		function arrancar()
		{
			parent::arrancar();
			echo "Camion arrancado<br>";
		}

	}
?>