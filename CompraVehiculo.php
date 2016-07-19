<?php

	/**
	*
	*/
	class CompraVehiculo
	{

		private $precio_base;


		function CompraVehiculo($gama)
		{
			if ($gama == "urbano") {

				$this->precio_base = 1000;

			}else if ($gama == "compacto") {

				$this->precio_base = 2000;

			}else if ($gama == "berlina") {

				$this->precio_base = 3000;

			}//end if//
		}//end constructor

		function climatizador()
		{

			$this->precio_base += 2000;

		}//end climatizador//

		function navegadorGPS()
		{

			$this->precio_base += 2500;

		}//end navegadorGPS//

		function tapiceriaCuero($color)
		{

			if ($color == "blanco") {

				$this->precio_base += 3000;

			}else if ($color == "negro") {

				$this->precio_base += 3500;

			}else{

				$this->precio_base += 5000;

			}

		}//end tapiceriaCuero//

		function precioFinal()
		{

			return $this->precio_base;

		}

	}//end class

?>