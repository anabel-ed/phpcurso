<?php
	
	require "Conexion.php";

	/**
	* Clase para mostrar productos
	*/
	class DevuelveProductos extends Conexion
	{
		
		public function DevuelveProductos()
		{
			parent::__construct();
		}

		public function getProductos()
		{
			$resultados = $this->conexion_db->query('SELECT * FROM productos');

			$productos = $resultados->fetch_all(MYSQLI_ASSOC);

			return $productos;
		}

	}

?>