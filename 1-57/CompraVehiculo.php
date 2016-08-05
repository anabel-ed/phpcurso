<?php

	/**
	*
	*/
	class CompraVehiculo
	{

		private $precio_base;

		private static $ayuda = 0;

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

		static function descuentoGobierno()
		{
			if (date("m-d-y")>"05-01-17")
			{
				self::$ayuda = 4500;

			}
		}

		function precioFinal()
		{
			$valor_final = $this->precio_base - self::$ayuda;
			return $valor_final;

		}

	}//end class

?>