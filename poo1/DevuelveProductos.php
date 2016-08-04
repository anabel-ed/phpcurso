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

		public function getProductos($dato)
		{
			
			$sql = "SELECT * FROM productos WHERE paisOrigen = '" . $dato . "'";

			$sentencia = $this->conexion_db->prepare($sql);

			$sentencia->execute(array());

			$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

			$sentencia->closeCursor();

			return $resultado;

			$this->conexion_db = nulll;
			/*$resultados = $this->conexion_db->query('SELECT * FROM productos WHERE paisOrigen = "' . $dato . '"');

			$productos = $resultados->fetch_all(MYSQLI_ASSOC);

			return $productos;*/
		}

	}

?>